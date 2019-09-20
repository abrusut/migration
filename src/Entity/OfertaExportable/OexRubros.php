<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexRubros
 *
 * @ORM\Table(name="oex_rubros")
 * @ORM\Entity
 */
class OexRubros
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
     * @ORM\Column(name="oex_sector_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexSectorId;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }


}
