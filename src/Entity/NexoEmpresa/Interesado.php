<?php

namespace App\Entity\NexoEmpresa;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interesado
 *
 * @ORM\Table(name="interesado", indexes={@ORM\Index(name="IDX_5076C92A521E1991", columns={"empresa_id"}), @ORM\Index(name="IDX_5076C92A9ACBB5E7", columns={"publicacion_id"})})
 * @ORM\Entity
 */
class Interesado
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateAt", type="datetime", nullable=false)
     */
    private $updateat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createAt", type="datetime", nullable=false)
     */
    private $createat;

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
     * @var \Publicacion
     *
     * @ORM\ManyToOne(targetEntity="Publicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publicacion_id", referencedColumnName="id")
     * })
     */
    private $publicacion;

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

    public function getUpdateat(): ?\DateTimeInterface
    {
        return $this->updateat;
    }

    public function setUpdateat(\DateTimeInterface $updateat): self
    {
        $this->updateat = $updateat;

        return $this;
    }

    public function getCreateat(): ?\DateTimeInterface
    {
        return $this->createat;
    }

    public function setCreateat(\DateTimeInterface $createat): self
    {
        $this->createat = $createat;

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

    public function getPublicacion(): ?Publicacion
    {
        return $this->publicacion;
    }

    public function setPublicacion(?Publicacion $publicacion): self
    {
        $this->publicacion = $publicacion;

        return $this;
    }


}
