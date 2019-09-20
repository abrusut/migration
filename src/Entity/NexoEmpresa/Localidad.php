<?php

namespace App\Entity\NexoEmpresa;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 *
 * @ORM\Table(name="localidad")
 * @ORM\Entity(repositoryClass="App\Repository\LocalidadRepository")
 */
class Localidad
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
     * @ORM\Column(name="l_distrito", type="string", length=3, nullable=false)
     */
    private $lDistrito;

    /**
     * @var string
     *
     * @ORM\Column(name="l_nom_dis", type="string", length=150, nullable=false)
     */
    private $lNomDis;

    /**
     * @var string
     *
     * @ORM\Column(name="l_departamento", type="string", length=3, nullable=false)
     */
    private $lDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="l_nom_dpto", type="string", length=150, nullable=false)
     */
    private $lNomDpto;

    /**
     * @var string
     *
     * @ORM\Column(name="nodo", type="string", length=250, nullable=false)
     */
    private $nodo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLDistrito(): ?string
    {
        return $this->lDistrito;
    }

    public function setLDistrito(string $lDistrito): self
    {
        $this->lDistrito = $lDistrito;

        return $this;
    }

    public function getLNomDis(): ?string
    {
        return $this->lNomDis;
    }

    public function setLNomDis(string $lNomDis): self
    {
        $this->lNomDis = $lNomDis;

        return $this;
    }

    public function getLDepartamento(): ?string
    {
        return $this->lDepartamento;
    }

    public function setLDepartamento(string $lDepartamento): self
    {
        $this->lDepartamento = $lDepartamento;

        return $this;
    }

    public function getLNomDpto(): ?string
    {
        return $this->lNomDpto;
    }

    public function setLNomDpto(string $lNomDpto): self
    {
        $this->lNomDpto = $lNomDpto;

        return $this;
    }

    public function getNodo(): ?string
    {
        return $this->nodo;
    }

    public function setNodo(string $nodo): self
    {
        $this->nodo = $nodo;

        return $this;
    }


}
