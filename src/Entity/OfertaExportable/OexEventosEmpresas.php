<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexEventosEmpresas
 *
 * @ORM\Table(name="oex_eventos_empresas", uniqueConstraints={@ORM\UniqueConstraint(name="oex_empresa_id_2", columns={"oex_empresa_id", "oex_evento_id"})}, indexes={@ORM\Index(name="oex_feria_id", columns={"oex_evento_id"}), @ORM\Index(name="oex_empresa_id", columns={"oex_empresa_id"})})
 * @ORM\Entity
 */
class OexEventosEmpresas
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
     * @var int
     *
     * @ORM\Column(name="oex_empresa_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexEmpresaId;

    /**
     * @var int
     *
     * @ORM\Column(name="oex_evento_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexEventoId;

    /**
     * @var array
     *
     * @ORM\Column(name="estado", type="simple_array", length=0, nullable=false, options={"default"="En espera"})
     */
    private $estado = 'En espera';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creado", type="datetime", nullable=true)
     */
    private $creado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualizado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $actualizado = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOexEmpresaId(): ?int
    {
        return $this->oexEmpresaId;
    }

    public function setOexEmpresaId(int $oexEmpresaId): self
    {
        $this->oexEmpresaId = $oexEmpresaId;

        return $this;
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

    public function getEstado(): ?array
    {
        return $this->estado;
    }

    public function setEstado(array $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getCreado(): ?\DateTimeInterface
    {
        return $this->creado;
    }

    public function setCreado(?\DateTimeInterface $creado): self
    {
        $this->creado = $creado;

        return $this;
    }

    public function getActualizado(): ?\DateTimeInterface
    {
        return $this->actualizado;
    }

    public function setActualizado(\DateTimeInterface $actualizado): self
    {
        $this->actualizado = $actualizado;

        return $this;
    }


}
