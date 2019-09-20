<?php

namespace App\Entity\NexoEmpresa;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * EmpresaMigration
 *
 * @ORM\Table(name="empresa_migration")
 * @ORM\Entity(repositoryClass="App\Repository\EmpresaMigrationRepository")
 */
class EmpresaMigration
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=13, nullable=false)
     */
    private $cuit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo_name", type="string", length=255, nullable=true)
     */
    private $logoName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="logo_size", type="integer", nullable=true)
     */
    private $logoSize;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=255, nullable=false)
     */
    private $razonSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ingresos_brutos", type="string", length=255, nullable=true)
     */
    private $ingresosBrutos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_comercial", type="string", length=255, nullable=false)
     */
    private $nombreComercial;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_santafesina", type="boolean", nullable=false)
     */
    private $isSantafesina;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo_postal", type="string", length=255, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instagram", type="string", length=255, nullable=true)
     */
    private $instagram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=1024, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pagina_web", type="string", length=255, nullable=true)
     */
    private $paginaWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="producto_servicio", type="string", length=1024, nullable=true)
     */
    private $productoServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domicilio", type="string", length=1024, nullable=true)
     */
    private $domicilio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distrito_otra_provincia", type="string", length=255, nullable=true)
     */
    private $distritoOtraProvincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search", type="text", length=0, nullable=true)
     */
    private $search;

    /**
     * @var Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia",fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     * })
     */
    private $provincia;

    /**
     * @var Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad",fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     * })
     */
    private $localidad;
    
    /**
     * Many Empresa have Many Actividades.
     * @ORM\ManyToMany(targetEntity="Actividad")
     * JoinTable(name="empresamigration_actividad",
     *      joinColumns={@JoinColumn(name="actividad_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="empresa_id", referencedColumnName="id")}
     *      )
     */
    private $actividad;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividad = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getCuit(): string
    {
        return $this->cuit;
    }
    
    /**
     * @param string|null $cuit
     */
    public function setCuit(?string $cuit): void
    {
        $this->cuit = $cuit;
    }
    
    /**
     * @return string|null
     */
    public function getLogoName(): ?string
    {
        return $this->logoName;
    }
    
    /**
     * @param string|null $logoName
     */
    public function setLogoName(?string $logoName): void
    {
        $this->logoName = $logoName;
    }
    
    /**
     * @return int|null
     */
    public function getLogoSize(): ?int
    {
        return $this->logoSize;
    }
    
    /**
     * @param int|null $logoSize
     */
    public function setLogoSize(?int $logoSize): void
    {
        $this->logoSize = $logoSize;
    }
    
    /**
     * @return DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }
    
    /**
     * @param DateTime|null $updatedAt
     */
    public function setUpdatedAt(?DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
    
    /**
     * @return string
     */
    public function getRazonSocial(): string
    {
        return $this->razonSocial;
    }
    
    /**
     * @param string|null $razonSocial
     */
    public function setRazonSocial(?string $razonSocial): void
    {
        $this->razonSocial = $razonSocial;
    }
    
    /**
     * @return string|null
     */
    public function getIngresosBrutos(): ?string
    {
        return $this->ingresosBrutos;
    }
    
    /**
     * @param string|null $ingresosBrutos
     */
    public function setIngresosBrutos(?string $ingresosBrutos): void
    {
        $this->ingresosBrutos = $ingresosBrutos;
    }
    
    /**
     * @return string
     */
    public function getNombreComercial(): string
    {
        return $this->nombreComercial;
    }
    
    /**
     * @param string|null $nombreComercial
     */
    public function setNombreComercial(?string $nombreComercial): void
    {
        $this->nombreComercial = $nombreComercial;
    }
    
    /**
     * @return bool
     */
    public function isSantafesina(): bool
    {
        return $this->isSantafesina;
    }
    
    /**
     * @param bool $isSantafesina
     */
    public function setIsSantafesina(bool $isSantafesina): void
    {
        $this->isSantafesina = $isSantafesina;
    }
    
    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    
    /**
     * @param string|null $fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }
    
    /**
     * @return string|null
     */
    public function getCodigoPostal(): ?string
    {
        return $this->codigoPostal;
    }
    
    /**
     * @param string|null $codigoPostal
     */
    public function setCodigoPostal(?string $codigoPostal): void
    {
        $this->codigoPostal = $codigoPostal;
    }
    
    /**
     * @return string|null
     */
    public function getFacebook(): ?string
    {
        return $this->facebook;
    }
    
    /**
     * @param string|null $facebook
     */
    public function setFacebook(?string $facebook): void
    {
        $this->facebook = $facebook;
    }
    
    /**
     * @return string|null
     */
    public function getTwitter(): ?string
    {
        return $this->twitter;
    }
    
    /**
     * @param string|null $twitter
     */
    public function setTwitter(?string $twitter): void
    {
        $this->twitter = $twitter;
    }
    
    /**
     * @return string|null
     */
    public function getInstagram(): ?string
    {
        return $this->instagram;
    }
    
    /**
     * @param string|null $instagram
     */
    public function setInstagram(?string $instagram): void
    {
        $this->instagram = $instagram;
    }
    
    /**
     * @return string|null
     */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }
    
    /**
     * @param string|null $descripcion
     */
    public function setDescripcion(?string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }
    
    /**
     * @return string|null
     */
    public function getPaginaWeb(): ?string
    {
        return $this->paginaWeb;
    }
    
    /**
     * @param string|null $paginaWeb
     */
    public function setPaginaWeb(?string $paginaWeb): void
    {
        $this->paginaWeb = $paginaWeb;
    }
    
    /**
     * @return string|null
     */
    public function getTelefono(): ?string
    {
        return $this->telefono;
    }
    
    /**
     * @param string|null $telefono
     */
    public function setTelefono(?string $telefono): void
    {
        $this->telefono = $telefono;
    }
    
    /**
     * @return string|null
     */
    public function getProductoServicio(): ?string
    {
        return $this->productoServicio;
    }
    
    /**
     * @param string|null $productoServicio
     */
    public function setProductoServicio(?string $productoServicio): void
    {
        $this->productoServicio = $productoServicio;
    }
    
    /**
     * @return string|null
     */
    public function getDomicilio(): ?string
    {
        return $this->domicilio;
    }
    
    /**
     * @param string|null $domicilio
     */
    public function setDomicilio(?string $domicilio): void
    {
        $this->domicilio = $domicilio;
    }
    
    /**
     * @return string|null
     */
    public function getDistritoOtraProvincia(): ?string
    {
        return $this->distritoOtraProvincia;
    }
    
    /**
     * @param string|null $distritoOtraProvincia
     */
    public function setDistritoOtraProvincia(?string $distritoOtraProvincia): void
    {
        $this->distritoOtraProvincia = $distritoOtraProvincia;
    }
    
    /**
     * @return string|null
     */
    public function getSearch(): ?string
    {
        return $this->search;
    }
    
    /**
     * @param string|null $search
     */
    public function setSearch(?string $search): void
    {
        $this->search = $search;
    }
    
    /**
     * @return Provincia
     */
    public function getProvincia(): Provincia
    {
        return $this->provincia;
    }
    
    /**
     * @param Provincia|null $provincia
     */
    public function setProvincia(?Provincia $provincia): void
    {
        $this->provincia = $provincia;
    }
    
    /**
     * @return Localidad
     */
    public function getLocalidad(): Localidad
    {
        return $this->localidad;
    }
    
    /**
     * @param Localidad|null $localidad
     */
    public function setLocalidad(?Localidad $localidad): void
    {
        $this->localidad = $localidad;
    }
    
    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActividad(): \Doctrine\Common\Collections\Collection
    {
        return $this->actividad;
    }
    
  

    public function getIsSantafesina(): ?bool
    {
        return $this->isSantafesina;
    }
    
    /**
     * Add actividad
     *
     * @param Actividad $actividad
     *
     * @return Empresa
     */
    public function addActividad(Actividad $actividad)
    {
        $this->actividad[] = $actividad;
        
        return $this;
    }
    
    /**
     * Remove actividad
     *
     * @param Actividad $actividad
     */
    public function removeActividad(Actividad $actividad)
    {
        $this->actividad->removeElement($actividad);
    }

}
