<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexNcm
 *
 * @ORM\Table(name="oex_ncm")
 * @ORM\Entity
 */
class OexNcm
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
     * @ORM\Column(name="codigo", type="string", length=32, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="capitulo", type="string", length=4, nullable=false)
     */
    private $capitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="partida", type="string", length=4, nullable=false)
     */
    private $partida;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
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

    public function getCapitulo(): ?string
    {
        return $this->capitulo;
    }

    public function setCapitulo(string $capitulo): self
    {
        $this->capitulo = $capitulo;

        return $this;
    }

    public function getPartida(): ?string
    {
        return $this->partida;
    }

    public function setPartida(string $partida): self
    {
        $this->partida = $partida;

        return $this;
    }


}
