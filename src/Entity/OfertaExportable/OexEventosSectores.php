<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexEventosSectores
 *
 * @ORM\Table(name="oex_eventos_sectores")
 * @ORM\Entity
 */
class OexEventosSectores
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
     * @ORM\Column(name="oex_sector_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexSectorId;

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

    public function getOexSectorId(): ?int
    {
        return $this->oexSectorId;
    }

    public function setOexSectorId(int $oexSectorId): self
    {
        $this->oexSectorId = $oexSectorId;

        return $this;
    }


}
