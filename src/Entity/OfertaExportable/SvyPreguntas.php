<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * SvyPreguntas
 *
 * @ORM\Table(name="svy_preguntas")
 * @ORM\Entity
 */
class SvyPreguntas
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
     * @var string
     *
     * @ORM\Column(name="pregunta", type="text", length=65535, nullable=false)
     */
    private $pregunta;

    /**
     * @var array
     *
     * @ORM\Column(name="tipo", type="simple_array", length=0, nullable=false, options={"default"="texto"})
     */
    private $tipo = 'texto';

    /**
     * @var bool
     *
     * @ORM\Column(name="requerida", type="boolean", nullable=false, options={"default"="1"})
     */
    private $requerida = '1';

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

    public function getPregunta(): ?string
    {
        return $this->pregunta;
    }

    public function setPregunta(string $pregunta): self
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    public function getTipo(): ?array
    {
        return $this->tipo;
    }

    public function setTipo(array $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getRequerida(): ?bool
    {
        return $this->requerida;
    }

    public function setRequerida(bool $requerida): self
    {
        $this->requerida = $requerida;

        return $this;
    }


}
