<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * SvyOpciones
 *
 * @ORM\Table(name="svy_opciones")
 * @ORM\Entity
 */
class SvyOpciones
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
     * @ORM\Column(name="svy_encuesta_id", type="integer", nullable=false)
     */
    private $svyEncuestaId;

    /**
     * @var int
     *
     * @ORM\Column(name="svy_pregunta_id", type="integer", nullable=false)
     */
    private $svyPreguntaId;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255, nullable=false)
     */
    private $valor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSvyEncuestaId(): ?int
    {
        return $this->svyEncuestaId;
    }

    public function setSvyEncuestaId(int $svyEncuestaId): self
    {
        $this->svyEncuestaId = $svyEncuestaId;

        return $this;
    }

    public function getSvyPreguntaId(): ?int
    {
        return $this->svyPreguntaId;
    }

    public function setSvyPreguntaId(int $svyPreguntaId): self
    {
        $this->svyPreguntaId = $svyPreguntaId;

        return $this;
    }

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(string $valor): self
    {
        $this->valor = $valor;

        return $this;
    }


}
