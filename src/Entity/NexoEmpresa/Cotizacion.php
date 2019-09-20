<?php

namespace App\Entity\NexoEmpresa;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotizacion
 *
 * @ORM\Table(name="cotizacion", indexes={@ORM\Index(name="IDX_44A5EC034854653A", columns={"pedido_id"}), @ORM\Index(name="IDX_44A5EC03521E1991", columns={"empresa_id"})})
 * @ORM\Entity
 */
class Cotizacion
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
     * @var string
     *
     * @ORM\Column(name="scan_name", type="string", length=255, nullable=false)
     */
    private $scanName;

    /**
     * @var int
     *
     * @ORM\Column(name="scan_size", type="integer", nullable=false)
     */
    private $scanSize;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scan_updated_at", type="datetime", nullable=false)
     */
    private $scanUpdatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime", nullable=false)
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime", nullable=false)
     */
    private $updateAt;

    /**
     * @var \Pedido
     *
     * @ORM\ManyToOne(targetEntity="Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     * })
     */
    private $pedido;

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

    public function getScanName(): ?string
    {
        return $this->scanName;
    }

    public function setScanName(string $scanName): self
    {
        $this->scanName = $scanName;

        return $this;
    }

    public function getScanSize(): ?int
    {
        return $this->scanSize;
    }

    public function setScanSize(int $scanSize): self
    {
        $this->scanSize = $scanSize;

        return $this;
    }

    public function getScanUpdatedAt(): ?\DateTimeInterface
    {
        return $this->scanUpdatedAt;
    }

    public function setScanUpdatedAt(\DateTimeInterface $scanUpdatedAt): self
    {
        $this->scanUpdatedAt = $scanUpdatedAt;

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

    public function setUpdateAt(\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getPedido(): ?Pedido
    {
        return $this->pedido;
    }

    public function setPedido(?Pedido $pedido): self
    {
        $this->pedido = $pedido;

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
