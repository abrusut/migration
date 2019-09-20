<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexEmpresasProductos
 *
 * @ORM\Table(name="oex_empresas_productos")
 * @ORM\Entity
 */
class OexEmpresasProductos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="oex_empresa_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexEmpresaId;

    /**
     * @var int
     *
     * @ORM\Column(name="oex_producto_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexProductoId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOexEmpresaId(): ?int
    {
        return $this->oexEmpresaId;
    }

    public function setOexEmpresaId(int $oexEmpresaId): self
    {
        $this->oexEmpresaId = $oexEmpresaId;

        return $this;
    }

    public function getOexProductoId(): ?int
    {
        return $this->oexProductoId;
    }

    public function setOexProductoId(int $oexProductoId): self
    {
        $this->oexProductoId = $oexProductoId;

        return $this;
    }


}
