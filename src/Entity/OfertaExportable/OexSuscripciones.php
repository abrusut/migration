<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * OexSuscripciones
 *
 * @ORM\Table(name="oex_suscripciones")
 * @ORM\Entity
 */
class OexSuscripciones
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
     * @ORM\Column(name="razon_social", type="string", length=255, nullable=false)
     */
    private $razonSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuit", type="string", length=255, nullable=true)
     */
    private $cuit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domicilio", type="string", length=255, nullable=true)
     */
    private $domicilio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localidad", type="string", length=255, nullable=true)
     */
    private $localidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departamento", type="string", length=255, nullable=true)
     */
    private $departamento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_nombre", type="string", length=255, nullable=false)
     */
    private $contactoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_tel", type="string", length=255, nullable=false)
     */
    private $contactoTel;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_email", type="string", length=255, nullable=false)
     */
    private $contactoEmail;

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

    public function getRazonSocial(): ?string
    {
        return $this->razonSocial;
    }

    public function setRazonSocial(string $razonSocial): self
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCuit(): ?string
    {
        return $this->cuit;
    }

    public function setCuit(?string $cuit): self
    {
        $this->cuit = $cuit;

        return $this;
    }

    public function getDomicilio(): ?string
    {
        return $this->domicilio;
    }

    public function setDomicilio(?string $domicilio): self
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(?string $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getDepartamento(): ?string
    {
        return $this->departamento;
    }

    public function setDepartamento(?string $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getContactoNombre(): ?string
    {
        return $this->contactoNombre;
    }

    public function setContactoNombre(string $contactoNombre): self
    {
        $this->contactoNombre = $contactoNombre;

        return $this;
    }

    public function getContactoTel(): ?string
    {
        return $this->contactoTel;
    }

    public function setContactoTel(string $contactoTel): self
    {
        $this->contactoTel = $contactoTel;

        return $this;
    }

    public function getContactoEmail(): ?string
    {
        return $this->contactoEmail;
    }

    public function setContactoEmail(string $contactoEmail): self
    {
        $this->contactoEmail = $contactoEmail;

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
