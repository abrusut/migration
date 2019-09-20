<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexEventosRubros
 *
 * @ORM\Table(name="oex_eventos_rubros")
 * @ORM\Entity
 */
class OexEventosRubros
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
     * @ORM\Column(name="oex_evento_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexEventoId;

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

    public function getOexEventoId(): ?int
    {
        return $this->oexEventoId;
    }

    public function setOexEventoId(int $oexEventoId): self
    {
        $this->oexEventoId = $oexEventoId;

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
