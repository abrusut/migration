<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexUsuariosEmpresas
 *
 * @ORM\Table(name="oex_usuarios_empresas")
 * @ORM\Entity
 */
class OexUsuariosEmpresas
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
     * @ORM\Column(name="oex_admin_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexAdminUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="oex_empresa_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oexEmpresaId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOexAdminUserId(): ?int
    {
        return $this->oexAdminUserId;
    }

    public function setOexAdminUserId(int $oexAdminUserId): self
    {
        $this->oexAdminUserId = $oexAdminUserId;

        return $this;
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


}
