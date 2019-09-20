<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexInformes
 *
 * @ORM\Table(name="oex_informes")
 * @ORM\Entity
 */
class OexInformes
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
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var int
     *
     * @ORM\Column(name="anio", type="integer", nullable=false, options={"default"="2018","unsigned"=true})
     */
    private $anio = '2018';

    /**
     * @var int
     *
     * @ORM\Column(name="utl_country_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $utlCountryId;

    /**
     * @var int
     *
     * @ORM\Column(name="oex_sector_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexSectorId;

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", length=65535, nullable=false)
     */
    private $intro;

    /**
     * @var string
     *
     * @ORM\Column(name="archivo_parcial", type="text", length=65535, nullable=false)
     */
    private $archivoParcial;

    /**
     * @var string
     *
     * @ORM\Column(name="archivo_completo", type="text", length=65535, nullable=false)
     */
    private $archivoCompleto;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAnio(): ?int
    {
        return $this->anio;
    }

    public function setAnio(int $anio): self
    {
        $this->anio = $anio;

        return $this;
    }

    public function getUtlCountryId(): ?int
    {
        return $this->utlCountryId;
    }

    public function setUtlCountryId(int $utlCountryId): self
    {
        $this->utlCountryId = $utlCountryId;

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

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(string $intro): self
    {
        $this->intro = $intro;

        return $this;
    }

    public function getArchivoParcial(): ?string
    {
        return $this->archivoParcial;
    }

    public function setArchivoParcial(string $archivoParcial): self
    {
        $this->archivoParcial = $archivoParcial;

        return $this;
    }

    public function getArchivoCompleto(): ?string
    {
        return $this->archivoCompleto;
    }

    public function setArchivoCompleto(string $archivoCompleto): self
    {
        $this->archivoCompleto = $archivoCompleto;

        return $this;
    }


}
