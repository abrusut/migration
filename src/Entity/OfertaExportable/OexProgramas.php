<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexProgramas
 *
 * @ORM\Table(name="oex_programas")
 * @ORM\Entity
 */
class OexProgramas
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
     * @var string
     *
     * @ORM\Column(name="intro", type="text", length=65535, nullable=false)
     */
    private $intro;

    /**
     * @var string
     *
     * @ORM\Column(name="archivos", type="text", length=65535, nullable=false)
     */
    private $archivos;

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

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(string $intro): self
    {
        $this->intro = $intro;

        return $this;
    }

    public function getArchivos(): ?string
    {
        return $this->archivos;
    }

    public function setArchivos(string $archivos): self
    {
        $this->archivos = $archivos;

        return $this;
    }


}
