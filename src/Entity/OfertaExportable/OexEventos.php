<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexEventos
 *
 * @ORM\Table(name="oex_eventos")
 * @ORM\Entity
 */
class OexEventos
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var array
     *
     * @ORM\Column(name="tipo", type="simple_array", length=0, nullable=false, options={"default"="Feria"})
     */
    private $tipo = 'Feria';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comienza", type="date", nullable=false)
     */
    private $comienza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finaliza", type="date", nullable=false)
     */
    private $finaliza;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=128, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=64, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=128, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="text", length=65535, nullable=false)
     */
    private $costo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inscripcion_hasta", type="date", nullable=false)
     */
    private $inscripcionHasta;

    /**
     * @var string
     *
     * @ORM\Column(name="link_agencia_nacional", type="string", length=255, nullable=false)
     */
    private $linkAgenciaNacional;

    /**
     * @var string
     *
     * @ORM\Column(name="documentos", type="string", length=255, nullable=false)
     */
    private $documentos;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="string", length=255, nullable=false)
     */
    private $poster;

    /**
     * @var string
     *
     * @ORM\Column(name="firmas", type="string", length=255, nullable=false)
     */
    private $firmas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="difundido", type="date", nullable=false)
     */
    private $difundido;

    /**
     * @var string
     *
     * @ORM\Column(name="id_campaign", type="string", length=128, nullable=false)
     */
    private $idCampaign;

    /**
     * @var string
     *
     * @ORM\Column(name="id_list", type="string", length=64, nullable=false)
     */
    private $idList;

    /**
     * @var int
     *
     * @ORM\Column(name="svy_encuesta_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $svyEncuestaId;

    /**
     * @var array
     *
     * @ORM\Column(name="boton", type="simple_array", length=0, nullable=false, options={"default"="Inscribirse"})
     */
    private $boton = 'Inscribirse';

    /**
     * @var string
     *
     * @ORM\Column(name="responder_a", type="string", length=128, nullable=false)
     */
    private $responderA;

    /**
     * @var string
     *
     * @ORM\Column(name="localidades", type="text", length=16777215, nullable=false)
     */
    private $localidades;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTipo(): ?array
    {
        return $this->tipo;
    }

    public function setTipo(array $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getComienza(): ?\DateTimeInterface
    {
        return $this->comienza;
    }

    public function setComienza(\DateTimeInterface $comienza): self
    {
        $this->comienza = $comienza;

        return $this;
    }

    public function getFinaliza(): ?\DateTimeInterface
    {
        return $this->finaliza;
    }

    public function setFinaliza(\DateTimeInterface $finaliza): self
    {
        $this->finaliza = $finaliza;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

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

    public function getCosto(): ?string
    {
        return $this->costo;
    }

    public function setCosto(string $costo): self
    {
        $this->costo = $costo;

        return $this;
    }

    public function getInscripcionHasta(): ?\DateTimeInterface
    {
        return $this->inscripcionHasta;
    }

    public function setInscripcionHasta(\DateTimeInterface $inscripcionHasta): self
    {
        $this->inscripcionHasta = $inscripcionHasta;

        return $this;
    }

    public function getLinkAgenciaNacional(): ?string
    {
        return $this->linkAgenciaNacional;
    }

    public function setLinkAgenciaNacional(string $linkAgenciaNacional): self
    {
        $this->linkAgenciaNacional = $linkAgenciaNacional;

        return $this;
    }

    public function getDocumentos(): ?string
    {
        return $this->documentos;
    }

    public function setDocumentos(string $documentos): self
    {
        $this->documentos = $documentos;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function getFirmas(): ?string
    {
        return $this->firmas;
    }

    public function setFirmas(string $firmas): self
    {
        $this->firmas = $firmas;

        return $this;
    }

    public function getDifundido(): ?\DateTimeInterface
    {
        return $this->difundido;
    }

    public function setDifundido(\DateTimeInterface $difundido): self
    {
        $this->difundido = $difundido;

        return $this;
    }

    public function getIdCampaign(): ?string
    {
        return $this->idCampaign;
    }

    public function setIdCampaign(string $idCampaign): self
    {
        $this->idCampaign = $idCampaign;

        return $this;
    }

    public function getIdList(): ?string
    {
        return $this->idList;
    }

    public function setIdList(string $idList): self
    {
        $this->idList = $idList;

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

    public function getBoton(): ?array
    {
        return $this->boton;
    }

    public function setBoton(array $boton): self
    {
        $this->boton = $boton;

        return $this;
    }

    public function getResponderA(): ?string
    {
        return $this->responderA;
    }

    public function setResponderA(string $responderA): self
    {
        $this->responderA = $responderA;

        return $this;
    }

    public function getLocalidades(): ?string
    {
        return $this->localidades;
    }

    public function setLocalidades(string $localidades): self
    {
        $this->localidades = $localidades;

        return $this;
    }


}
