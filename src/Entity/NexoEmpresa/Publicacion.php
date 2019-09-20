<?php

namespace App\Entity\NexoEmpresa;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Publicacion
 *
 * @ORM\Table(name="publicacion", indexes={@ORM\Index(name="IDX_62F2085FA883CAC1", columns={"datoContacto_id"}), @ORM\Index(name="IDX_62F2085F521E1991", columns={"empresa_id"})})
 * @ORM\Entity
 */
class Publicacion
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
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime", nullable=false)
     */
    private $createAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="update_at", type="datetime", nullable=true)
     */
    private $updateAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_name", type="string", length=255, nullable=true)
     */
    private $imageName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_size", type="integer", nullable=true)
     */
    private $imageSize;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_name1", type="string", length=255, nullable=true)
     */
    private $imageName1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_size1", type="integer", nullable=true)
     */
    private $imageSize1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at1", type="datetime", nullable=true)
     */
    private $updatedAt1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_name2", type="string", length=255, nullable=true)
     */
    private $imageName2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_size2", type="integer", nullable=true)
     */
    private $imageSize2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at2", type="datetime", nullable=true)
     */
    private $updatedAt2;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="vigencia_desde", type="datetime", nullable=true)
     */
    private $vigenciaDesde;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="vigencia_hasta", type="datetime", nullable=true)
     */
    private $vigenciaHasta;

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
     * @var \DatoContacto
     *
     * @ORM\ManyToOne(targetEntity="DatoContacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="datoContacto_id", referencedColumnName="id")
     * })
     */
    private $datocontacto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Actividad", inversedBy="publicacion")
     * @ORM\JoinTable(name="publicacion_actividad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="publicacion_id", referencedColumnName="id")
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

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    public function setImageSize(?int $imageSize): self
    {
        $this->imageSize = $imageSize;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getImageName1(): ?string
    {
        return $this->imageName1;
    }

    public function setImageName1(?string $imageName1): self
    {
        $this->imageName1 = $imageName1;

        return $this;
    }

    public function getImageSize1(): ?int
    {
        return $this->imageSize1;
    }

    public function setImageSize1(?int $imageSize1): self
    {
        $this->imageSize1 = $imageSize1;

        return $this;
    }

    public function getUpdatedAt1(): ?\DateTimeInterface
    {
        return $this->updatedAt1;
    }

    public function setUpdatedAt1(?\DateTimeInterface $updatedAt1): self
    {
        $this->updatedAt1 = $updatedAt1;

        return $this;
    }

    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }

    public function setImageName2(?string $imageName2): self
    {
        $this->imageName2 = $imageName2;

        return $this;
    }

    public function getImageSize2(): ?int
    {
        return $this->imageSize2;
    }

    public function setImageSize2(?int $imageSize2): self
    {
        $this->imageSize2 = $imageSize2;

        return $this;
    }

    public function getUpdatedAt2(): ?\DateTimeInterface
    {
        return $this->updatedAt2;
    }

    public function setUpdatedAt2(?\DateTimeInterface $updatedAt2): self
    {
        $this->updatedAt2 = $updatedAt2;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

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

    public function getVigenciaDesde(): ?\DateTimeInterface
    {
        return $this->vigenciaDesde;
    }

    public function setVigenciaDesde(?\DateTimeInterface $vigenciaDesde): self
    {
        $this->vigenciaDesde = $vigenciaDesde;

        return $this;
    }

    public function getVigenciaHasta(): ?\DateTimeInterface
    {
        return $this->vigenciaHasta;
    }

    public function setVigenciaHasta(?\DateTimeInterface $vigenciaHasta): self
    {
        $this->vigenciaHasta = $vigenciaHasta;

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

    public function getDatocontacto(): ?DatoContacto
    {
        return $this->datocontacto;
    }

    public function setDatocontacto(?DatoContacto $datocontacto): self
    {
        $this->datocontacto = $datocontacto;

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
