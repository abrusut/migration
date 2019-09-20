<?php

namespace App\Entity\NexoEmpresa;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatoContacto
 *
 * @ORM\Table(name="dato_contacto", indexes={@ORM\Index(name="IDX_F356B05367707C89", columns={"localidad_id"}), @ORM\Index(name="IDX_F356B053521E1991", columns={"empresa_id"}), @ORM\Index(name="IDX_F356B0534E7121AF", columns={"provincia_id"})})
 * @ORM\Entity
 */
class DatoContacto
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
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=255, nullable=false)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=255, nullable=false)
     */
    private $calle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero", type="string", length=255, nullable=true)
     */
    private $numero;

    /**
     * @var float|null
     *
     * @ORM\Column(name="latitud", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitud;

    /**
     * @var float|null
     *
     * @ORM\Column(name="longitud", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sitioWeb", type="string", length=255, nullable=true)
     */
    private $sitioweb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono_celular", type="string", length=255, nullable=true)
     */
    private $telefonoCelular;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genero", type="string", length=255, nullable=true)
     */
    private $genero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distrito_otra_provincia", type="string", length=255, nullable=true)
     */
    private $distritoOtraProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     * })
     */
    private $provincia;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     * })
     */
    private $empresa;

    /**
     * @var \Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     * })
     */
    private $localidad;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getResponsable(): ?string
    {
        return $this->responsable;
    }

    public function setResponsable(string $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getLatitud(): ?float
    {
        return $this->latitud;
    }

    public function setLatitud(?float $latitud): self
    {
        $this->latitud = $latitud;

        return $this;
    }

    public function getLongitud(): ?float
    {
        return $this->longitud;
    }

    public function setLongitud(?float $longitud): self
    {
        $this->longitud = $longitud;

        return $this;
    }

    public function getSitioweb(): ?string
    {
        return $this->sitioweb;
    }

    public function setSitioweb(?string $sitioweb): self
    {
        $this->sitioweb = $sitioweb;

        return $this;
    }

    public function getTelefonoCelular(): ?string
    {
        return $this->telefonoCelular;
    }

    public function setTelefonoCelular(?string $telefonoCelular): self
    {
        $this->telefonoCelular = $telefonoCelular;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(?string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getDistritoOtraProvincia(): ?string
    {
        return $this->distritoOtraProvincia;
    }

    public function setDistritoOtraProvincia(?string $distritoOtraProvincia): self
    {
        $this->distritoOtraProvincia = $distritoOtraProvincia;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getProvincia(): ?Provincia
    {
        return $this->provincia;
    }

    public function setProvincia(?Provincia $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getEmpresa(): ?Empresa
    {
        return $this->empresa;
    }

    public function setEmpresa(?Empresa $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getLocalidad(): ?Localidad
    {
        return $this->localidad;
    }

    public function setLocalidad(?Localidad $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }


}
