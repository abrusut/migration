<?php

namespace App\Entity\NexoEmpresa;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad")
 * @ORM\Entity
 */
class Actividad
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=6, nullable=false)
     */
    private $codigo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Empresa", mappedBy="actividad")
     */
    private $empresa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pedido", mappedBy="actividad")
     */
    private $pedido;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Publicacion", mappedBy="actividad")
     */
    private $publicacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empresa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pedido = new \Doctrine\Common\Collections\ArrayCollection();
        $this->publicacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return Collection|Empresa[]
     */
    public function getEmpresa(): Collection
    {
        return $this->empresa;
    }

    public function addEmpresa(Empresa $empresa): self
    {
        if (!$this->empresa->contains($empresa)) {
            $this->empresa[] = $empresa;
            $empresa->addActividad($this);
        }

        return $this;
    }

    public function removeEmpresa(Empresa $empresa): self
    {
        if ($this->empresa->contains($empresa)) {
            $this->empresa->removeElement($empresa);
            $empresa->removeActividad($this);
        }

        return $this;
    }

    /**
     * @return Collection|Pedido[]
     */
    public function getPedido(): Collection
    {
        return $this->pedido;
    }

    public function addPedido(Pedido $pedido): self
    {
        if (!$this->pedido->contains($pedido)) {
            $this->pedido[] = $pedido;
            $pedido->addActividad($this);
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): self
    {
        if ($this->pedido->contains($pedido)) {
            $this->pedido->removeElement($pedido);
            $pedido->removeActividad($this);
        }

        return $this;
    }

    /**
     * @return Collection|Publicacion[]
     */
    public function getPublicacion(): Collection
    {
        return $this->publicacion;
    }

    public function addPublicacion(Publicacion $publicacion): self
    {
        if (!$this->publicacion->contains($publicacion)) {
            $this->publicacion[] = $publicacion;
            $publicacion->addActividad($this);
        }

        return $this;
    }

    public function removePublicacion(Publicacion $publicacion): self
    {
        if ($this->publicacion->contains($publicacion)) {
            $this->publicacion->removeElement($publicacion);
            $publicacion->removeActividad($this);
        }

        return $this;
    }

}
