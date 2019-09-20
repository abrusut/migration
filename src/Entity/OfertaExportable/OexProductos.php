<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexProductos
 *
 * @ORM\Table(name="oex_productos")
 * @ORM\Entity
 */
class OexProductos
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
     * @var string
     *
     * @ORM\Column(name="posicion_arancelaria", type="string", length=64, nullable=false)
     */
    private $posicionArancelaria;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm", type="string", length=64, nullable=false)
     */
    private $ncm;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_es", type="string", length=255, nullable=false)
     */
    private $nombreEs;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_en", type="string", length=255, nullable=false)
     */
    private $nombreEn;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_pt", type="string", length=255, nullable=false)
     */
    private $nombrePt;

    /**
     * @var int
     *
     * @ORM\Column(name="rubro_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rubroId;

    /**
     * @var int
     *
     * @ORM\Column(name="rubro_general_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rubroGeneralId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosicionArancelaria(): ?string
    {
        return $this->posicionArancelaria;
    }

    public function setPosicionArancelaria(string $posicionArancelaria): self
    {
        $this->posicionArancelaria = $posicionArancelaria;

        return $this;
    }

    public function getNcm(): ?string
    {
        return $this->ncm;
    }

    public function setNcm(string $ncm): self
    {
        $this->ncm = $ncm;

        return $this;
    }

    public function getNombreEs(): ?string
    {
        return $this->nombreEs;
    }

    public function setNombreEs(string $nombreEs): self
    {
        $this->nombreEs = $nombreEs;

        return $this;
    }

    public function getNombreEn(): ?string
    {
        return $this->nombreEn;
    }

    public function setNombreEn(string $nombreEn): self
    {
        $this->nombreEn = $nombreEn;

        return $this;
    }

    public function getNombrePt(): ?string
    {
        return $this->nombrePt;
    }

    public function setNombrePt(string $nombrePt): self
    {
        $this->nombrePt = $nombrePt;

        return $this;
    }

    public function getRubroId(): ?int
    {
        return $this->rubroId;
    }

    public function setRubroId(int $rubroId): self
    {
        $this->rubroId = $rubroId;

        return $this;
    }

    public function getRubroGeneralId(): ?int
    {
        return $this->rubroGeneralId;
    }

    public function setRubroGeneralId(int $rubroGeneralId): self
    {
        $this->rubroGeneralId = $rubroGeneralId;

        return $this;
    }


}
