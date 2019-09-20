<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexEmpresasRubros
 *
 * @ORM\Table(name="oex_empresas_rubros")
 * @ORM\Entity
 */
class OexEmpresasRubros
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
     * @ORM\Column(name="oex_rubro_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexRubroId;

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

    public function getOexRubroId(): ?int
    {
        return $this->oexRubroId;
    }

    public function setOexRubroId(int $oexRubroId): self
    {
        $this->oexRubroId = $oexRubroId;

        return $this;
    }


}
