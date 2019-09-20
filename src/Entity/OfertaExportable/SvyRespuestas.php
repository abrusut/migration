<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * SvyRespuestas
 *
 * @ORM\Table(name="svy_respuestas")
 * @ORM\Entity
 */
class SvyRespuestas
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
     * @ORM\Column(name="nombre_encuesta", type="string", length=64, nullable=false)
     */
    private $nombreEncuesta;

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
     * @var int
     *
     * @ORM\Column(name="rel_id", type="integer", nullable=false)
     */
    private $relId;

    /**
     * @var string
     *
     * @ORM\Column(name="rel_table", type="string", length=64, nullable=false)
     */
    private $relTable;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta", type="text", length=65535, nullable=false)
     */
    private $pregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta", type="text", length=65535, nullable=false)
     */
    private $respuesta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreEncuesta(): ?string
    {
        return $this->nombreEncuesta;
    }

    public function setNombreEncuesta(string $nombreEncuesta): self
    {
        $this->nombreEncuesta = $nombreEncuesta;

        return $this;
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

    public function getRelId(): ?int
    {
        return $this->relId;
    }

    public function setRelId(int $relId): self
    {
        $this->relId = $relId;

        return $this;
    }

    public function getRelTable(): ?string
    {
        return $this->relTable;
    }

    public function setRelTable(string $relTable): self
    {
        $this->relTable = $relTable;

        return $this;
    }

    public function getPregunta(): ?string
    {
        return $this->pregunta;
    }

    public function setPregunta(string $pregunta): self
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    public function getRespuesta(): ?string
    {
        return $this->respuesta;
    }

    public function setRespuesta(string $respuesta): self
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }


}
