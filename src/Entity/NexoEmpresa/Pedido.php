<?php

namespace App\Entity\NexoEmpresa;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", indexes={@ORM\Index(name="IDX_C4EC16CE67707C89", columns={"localidad_id"}), @ORM\Index(name="IDX_C4EC16CE521E1991", columns={"empresa_id"}), @ORM\Index(name="IDX_C4EC16CE4E7121AF", columns={"provincia_id"})})
 * @ORM\Entity
 */
class Pedido
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
     * @ORM\Column(name="necesito", type="string", length=255, nullable=false)
     */
    private $necesito;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="lugarEntrega", type="string", length=255, nullable=false)
     */
    private $lugarentrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vigencia_desde", type="datetime", nullable=false)
     */
    private $vigenciaDesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vigencia_hasta", type="datetime", nullable=false)
     */
    private $vigenciaHasta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime", nullable=false)
     */
    private $updateAt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distrito_otra_provincia", type="string", length=255, nullable=true)
     */
    private $distritoOtraProvincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="archivo_name", type="string", length=255, nullable=true)
     */
    private $archivoName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="archivo_size", type="integer", nullable=true)
     */
    private $archivoSize;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

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

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Actividad", inversedBy="pedido")
     * @ORM\JoinTable(name="pedido_actividad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="actividad_id", referencedColumnName="id")
     *   }
     * )
     */
    private $actividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividad = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNecesito(): ?string
    {
        return $this->necesito;
    }

    public function setNecesito(string $necesito): self
    {
        $this->necesito = $necesito;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCantidad(): ?float
    {
        return $this->cantidad;
    }

    public function setCantidad(float $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getLugarentrega(): ?string
    {
        return $this->lugarentrega;
    }

    public function setLugarentrega(string $lugarentrega): self
    {
        $this->lugarentrega = $lugarentrega;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getVigenciaDesde(): ?\DateTimeInterface
    {
        return $this->vigenciaDesde;
    }

    public function setVigenciaDesde(\DateTimeInterface $vigenciaDesde): self
    {
        $this->vigenciaDesde = $vigenciaDesde;

        return $this;
    }

    public function getVigenciaHasta(): ?\DateTimeInterface
    {
        return $this->vigenciaHasta;
    }

    public function setVigenciaHasta(\DateTimeInterface $vigenciaHasta): self
    {
        $this->vigenciaHasta = $vigenciaHasta;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

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

    public function getDistritoOtraProvincia(): ?string
    {
        return $this->distritoOtraProvincia;
    }

    public function setDistritoOtraProvincia(?string $distritoOtraProvincia): self
    {
        $this->distritoOtraProvincia = $distritoOtraProvincia;

        return $this;
    }

    public function getArchivoName(): ?string
    {
        return $this->archivoName;
    }

    public function setArchivoName(?string $archivoName): self
    {
        $this->archivoName = $archivoName;

        return $this;
    }

    public function getArchivoSize(): ?int
    {
        return $this->archivoSize;
    }

    public function setArchivoSize(?int $archivoSize): self
    {
        $this->archivoSize = $archivoSize;

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

    /**
     * @return Collection|Actividad[]
     */
    public function getActividad(): Collection
    {
        return $this->actividad;
    }

    public function addActividad(Actividad $actividad): self
    {
        if (!$this->actividad->contains($actividad)) {
            $this->actividad[] = $actividad;
        }

        return $this;
    }

    public function removeActividad(Actividad $actividad): self
    {
        if ($this->actividad->contains($actividad)) {
            $this->actividad->removeElement($actividad);
        }

        return $this;
    }

}
