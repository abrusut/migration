<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexEmpresas
 *
 * @ORM\Table(name="oex_empresas")
 * @ORM\Entity
 */
class OexEmpresas
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
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="foto_portada", type="string", length=255, nullable=false)
     */
    private $fotoPortada;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=255, nullable=false)
     */
    private $razonSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intro", type="text", length=65535, nullable=true)
     */
    private $intro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuit", type="string", length=255, nullable=true)
     */
    private $cuit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domicilio", type="string", length=255, nullable=true)
     */
    private $domicilio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo_postal", type="string", length=255, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localidad", type="string", length=255, nullable=true)
     */
    private $localidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departamento", type="string", length=255, nullable=true)
     */
    private $departamento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email2", type="string", length=255, nullable=true)
     */
    private $email2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono2", type="string", length=255, nullable=true)
     */
    private $telefono2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono3", type="string", length=255, nullable=true)
     */
    private $telefono3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_nombre", type="string", length=255, nullable=false)
     */
    private $contactoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_tel", type="string", length=255, nullable=false)
     */
    private $contactoTel;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_email", type="string", length=255, nullable=false)
     */
    private $contactoEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_productos", type="string", length=255, nullable=false)
     */
    private $descProductos;

    /**
     * @var string
     *
     * @ORM\Column(name="galeria", type="text", length=65535, nullable=false)
     */
    private $galeria;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=255, nullable=false)
     */
    private $origen;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creado", type="datetime", nullable=true)
     */
    private $creado;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="actualizado", type="datetime", nullable=true)
     */
    private $actualizado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getFotoPortada(): ?string
    {
        return $this->fotoPortada;
    }

    public function setFotoPortada(string $fotoPortada): self
    {
        $this->fotoPortada = $fotoPortada;

        return $this;
    }

    public function getRazonSocial(): ?string
    {
        return $this->razonSocial;
    }

    public function setRazonSocial(string $razonSocial): self
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(?string $intro): self
    {
        $this->intro = $intro;

        return $this;
    }

    public function getCuit(): ?string
    {
        return $this->cuit;
    }

    public function setCuit(?string $cuit): self
    {
        $this->cuit = $cuit;

        return $this;
    }

    public function getDomicilio(): ?string
    {
        return $this->domicilio;
    }

    public function setDomicilio(?string $domicilio): self
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->codigoPostal;
    }

    public function setCodigoPostal(?string $codigoPostal): self
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(?string $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getDepartamento(): ?string
    {
        return $this->departamento;
    }

    public function setDepartamento(?string $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail2(): ?string
    {
        return $this->email2;
    }

    public function setEmail2(?string $email2): self
    {
        $this->email2 = $email2;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getTelefono2(): ?string
    {
        return $this->telefono2;
    }

    public function setTelefono2(?string $telefono2): self
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    public function getTelefono3(): ?string
    {
        return $this->telefono3;
    }

    public function setTelefono3(?string $telefono3): self
    {
        $this->telefono3 = $telefono3;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getContactoNombre(): ?string
    {
        return $this->contactoNombre;
    }

    public function setContactoNombre(string $contactoNombre): self
    {
        $this->contactoNombre = $contactoNombre;

        return $this;
    }

    public function getContactoTel(): ?string
    {
        return $this->contactoTel;
    }

    public function setContactoTel(string $contactoTel): self
    {
        $this->contactoTel = $contactoTel;

        return $this;
    }

    public function getContactoEmail(): ?string
    {
        return $this->contactoEmail;
    }

    public function setContactoEmail(string $contactoEmail): self
    {
        $this->contactoEmail = $contactoEmail;

        return $this;
    }

    public function getDescProductos(): ?string
    {
        return $this->descProductos;
    }

    public function setDescProductos(string $descProductos): self
    {
        $this->descProductos = $descProductos;

        return $this;
    }

    public function getGaleria(): ?string
    {
        return $this->galeria;
    }

    public function setGaleria(string $galeria): self
    {
        $this->galeria = $galeria;

        return $this;
    }

    public function getOrigen(): ?string
    {
        return $this->origen;
    }

    public function setOrigen(string $origen): self
    {
        $this->origen = $origen;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCreado(): ?\DateTimeInterface
    {
        return $this->creado;
    }

    public function setCreado(?\DateTimeInterface $creado): self
    {
        $this->creado = $creado;

        return $this;
    }

    public function getActualizado(): ?\DateTimeInterface
    {
        return $this->actualizado;
    }

    public function setActualizado(?\DateTimeInterface $actualizado): self
    {
        $this->actualizado = $actualizado;

        return $this;
    }


}
