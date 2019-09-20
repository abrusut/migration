<?php


namespace App\Controller;

use App\Entity\NexoEmpresa\Empresa;
use App\Entity\NexoEmpresa\EmpresaMigration;
use App\Entity\NexoEmpresa\Localidad;
use App\Entity\NexoEmpresa\Provincia;
use App\Entity\OfertaExportable\OexEmpresas;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
/**
 * @Route("/migration")
 */
class MigrationController extends AbstractController
{
    private $username = "#usDaCon2#";
    private $password = "%A21d62%";
    
    /**
     * @Route("/migrate", name="migrate_empresas")
     */
    public function migrate(Request $request,LoggerInterface $logger)
    {
        $logger->info("start migration");
        $repository = $this->getDoctrine()->getRepository(OexEmpresas::class);
        $em = $this->getDoctrine()->getManager('ofertaexportable');
        $emNexo = $this->getDoctrine()->getManager('default');
        $oexempresas = $repository->findAll();
    
        $cantidadEmpresas = 0;
        /** @var OexEmpresas $oexempresa */
        foreach ($oexempresas as $oexempresa) {
            if($oexempresa->getCuit() === null || empty($oexempresa->getCuit()))
                continue;
            
            $empresaMigration = new EmpresaMigration();
            $empresaMigration->setCodigoPostal($oexempresa->getCodigoPostal());
            $empresaMigration->setCuit($this->formatCuit($oexempresa->getCuit()));
            $empresaMigration->setDescripcion($this->getStringIntro($oexempresa->getIntro()));
            $empresaMigration->setDomicilio($oexempresa->getDomicilio());
            $empresaMigration->setDistritoOtraProvincia($oexempresa->getDepartamento() . "-" . $oexempresa->getLocalidad());
            $empresaMigration->setNombreComercial($oexempresa->getNombre() != null ? $oexempresa->getNombre() : $oexempresa->getRazonSocial()  );
            $empresaMigration->setPaginaWeb($oexempresa->getWebsite());
            $empresaMigration->setRazonSocial($oexempresa->getRazonSocial());
            $empresaMigration->setTelefono($oexempresa->getTelefono());
            $empresaMigration->setSearch($oexempresa->getRazonSocial() . " " . $oexempresa->getNombre());
            
            $localidad = $oexempresa->getLocalidad();
            if($localidad != null && !empty($localidad)){
                $empresaMigration->setLocalidad($this->getLocalidad($localidad));
            }else{
                $empresaMigration->setLocalidad(null);
            }
            
            $provincia = $oexempresa->getDepartamento();
            if(!$provincia){
                $provincia = ($oexempresa->getLocalidad() != null ? $oexempresa->getLocalidad() : 'Santa Fe');
            }
            
            $empresaMigration->setProvincia($this->getProvincia($provincia));
            
            //hardcode
            $empresaMigration->setIsSantafesina(false);
            
            $logger->info("Persist Empresa " . $empresaMigration->getRazonSocial());
            $emNexo->persist($empresaMigration);
            $cantidadEmpresas++;
        }
    
        $logger->info("Flush Empresas ");
        $emNexo->flush();
        
        $allEmpresasProcesadasApi = $this->validateIsSantafesina($logger);
        
        return $this->json(array("response" => "Se procesaron ".$cantidadEmpresas. " de empresas, todas fueron procesadas por API ".$allEmpresasProcesadasApi));
        
    }
    
    private function validateIsSantafesina(LoggerInterface $logger) {
        $logger->info("start validando si es santafesina");
        $repository = $this->getDoctrine()->getRepository(EmpresaMigration::class);
        $emNexo = $this->getDoctrine()->getManager('default');
        $empresasMigrations =  $repository->findAll();
        
        /** @var EmpresaMigration $empresasMigration */
        foreach ($empresasMigrations as $empresasMigration) {
            $logger->info("Procesando isSantafesina para empresa ".$empresasMigration->getCuit(). " - ".$empresasMigration->getNombreComercial());
            
            $soapclient = new \SoapClient(null, array(
                    'location' => 'https://aswe.santafe.gov.ar/proxy.php/API/w-datoscontrib',
                    'uri' => "urn:wsServices",
                    'trace' => 1,
                    'encoding' => 'utf-8',
                    'exceptions' => 0)
            );
    
            $parametros = array($empresasMigration->getCuit(), 'T');
            $result = $soapclient->__soapCall("getContribuyente", $parametros, array(), $this->wssecurity_header());
    
            $logger->info("Result WebService is ".json_encode($result));
            if ($result['codigo_respuesta'] == 200) {
                $empresasMigration->setRazonSocial($result['razon_social']);
                $empresasMigration->setIsSantafesina(true);
    
                $empresasMigration->setProvincia($this->getProvinciaSantaFe());
            } else {
                $empresasMigration->setIsSantafesina(false);
            }
            
        }
    
        $emNexo->flush();
        
        return true;
    }
    
    private function getProvinciaSantaFe(): ?Provincia {
        $repository = $this->getDoctrine()->getRepository(Provincia::class);
        return $repository->findByLikeProvincia('Santa Fe');
    }
    
    private function getStringIntro(?string $intro): ?string {
        return  substr(strip_tags($intro), 0 , 1020)."...";
    }
    
    private function formatCuit(?string $cuit): ?string {
        return str_replace('-', '', $cuit);
    }
    
    private function getLocalidad(?string $localidad){
        $repository = $this->getDoctrine()->getRepository(Localidad::class);
        return $repository->findByLikeLocalidad($localidad);
    }
    
    private function getProvincia(string $provincia){
        $repository = $this->getDoctrine()->getRepository(Provincia::class);
        return $repository->findByLikeProvincia($provincia);
    }
    
    /**
     * @Route("/nexo/{page}", name="nexoempesas_list", defaults={"page": 5}, requirements={"page"="\d+"})
     */
    public function list($page = 1, Request $request)
    {
        $limit = $request->get('limit', 10);
        $repository = $this->getDoctrine()->getRepository(Empresa::class);
        $items = $repository->findAll();
        
        return $this->json(
            [
                'page' => $page,
                'limit' => $limit,
                'data' => array_map(function (Empresa $item) {
                    return $this->generateUrl('nexo_empresa_by_id', ['id' => $item->getId()]);
                }, $items)
            ]
        );
    }
    
    /**
     * @Route("/nexo/empresa/{id}", name="nexo_empresa_by_id", methods={"GET"},requirements={"id"="\d+"})
     * @ParamConverter("empresa", class="NexoEmpresa:Empresa", options={"entity_manager" = "default"})
     */
    public function nexoEmpresaById(Empresa $empresa,LoggerInterface $logger)
    {
        try{
            $empresaJson = $this->json($empresa);
        }catch (\Exception $exception){
            $logger->error($exception);
            throw $exception;
        }
        
        
        return $empresaJson;
        
    }
    
    /**
     * @Route("/oexportable/{page}", name="oexportable_empesas_list", defaults={"page": 5}, requirements={"page"="\d+"})
     */
    public function listEmpresaOfertaExportable($page = 1, Request $request)
    {
        $limit = $request->get('limit', 10);
        $repository = $this->getDoctrine()->getRepository(OexEmpresas::class);
        $items = $repository->findAll();
        
        return $this->json(
            [
                'page' => $page,
                'limit' => $limit,
                'data' => array_map(function (OexEmpresas $item) {
                    return $this->generateUrl('oexportable_oxempesas_by_id', ['id' => $item->getId()]);
                }, $items)
            ]
        );
    }
    
    /**
     * @Route("/nexo/empresa/{id}", name="oexportable_oxempesas_by_id", methods={"GET"},requirements={"id"="\d+"})
     * @ParamConverter("empresa", class="OfertaExportable:OexEmpresas", options={"entity_manager" = "ofertaexportable"})
     */
    public function oxportableEmpresaById(OexEmpresas $empresa,LoggerInterface $logger)
    {
        try{
            $empresaJson = $this->json($empresa);
        }catch (\Exception $exception){
            $logger->error($exception);
            throw $exception;
        }
        
        
        return $empresaJson;
        
    }
    
    /*Generates de WSSecurity header*/
    private function wssecurity_header()
    {
        
        $timestamp = gmdate('Y-m-d\TH:i:s\Z');//The timestamp. The computer must be on time or the server you are connecting may reject the password digest for security.
        $nonce = mt_rand(); //A random word. The use of rand() may repeat the word if the server is very loaded.
        $passdigest = base64_encode(pack('H*', sha1(pack('H*', $nonce) . pack('a*', $timestamp) . pack('a*', $this->password))));//This is the right way to create the password digest. Using the password directly may work also, but it's not secure to transmit it without encryption. And anyway, at least with axis+wss4j, the nonce and timestamp are mandatory anyway.
        
        $auth = '
            <wsse:Security SOAP-ENV:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
            <wsse:UsernameToken>
                <wsse:Username>' . $this->username . '</wsse:Username>
                <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordDigest">' . $passdigest . '</wsse:Password>
                <wsse:Nonce>' . base64_encode(pack('H*', $nonce)) . '</wsse:Nonce>
                <wsu:Created xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">' . $timestamp . '</wsu:Created>
               </wsse:UsernameToken>
            </wsse:Security>
        ';
        
        $authvalues = new \SoapVar($auth, XSD_ANYXML); //XSD_ANYXML (or 147) is the code to add xml directly into a SoapVar. Using other codes such as SOAP_ENC, it's really difficult to set the correct namespace for the variables, so the axis server rejects the xml.
        $header = new \SoapHeader("http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd", "Security", $authvalues, true);
        
        return $header;
    }
    
}