<?php

namespace App\Entity\NexoEmpresa;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogo
 *
 * @ORM\Table(name="catalogo", indexes={@ORM\Index(name="IDX_E7AC6B45521E1991", columns={"empresa_id"})})
 * @ORM\Entity
 */
class Catalogo
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
     * @ORM\Column(name="descripcion", type="string", length=1000, nullable=false)
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
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     * })
     */
    private $empresa;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEmpresa(): ?Empresa
    {
        return $this->empresa;
    }

    public function setEmpresa(?Empresa $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }


}
