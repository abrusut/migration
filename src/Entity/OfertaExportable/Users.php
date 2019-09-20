<?php

namespace App\Entity\OfertaExportable;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="ip_address", type="string", length=15, nullable=false)
     */
    private $ipAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activation_code", type="string", length=40, nullable=true)
     */
    private $activationCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forgotten_password_code", type="string", length=40, nullable=true)
     */
    private $forgottenPasswordCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="forgotten_password_time", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $forgottenPasswordTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remember_code", type="string", length=40, nullable=true)
     */
    private $rememberCode;

    /**
     * @var int
     *
     * @ORM\Column(name="created_on", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdOn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_login", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $lastLogin;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=100, nullable=true)
     */
    private $company;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var int
     *
     * @ORM\Column(name="cqr_group_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cqrGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="cqr_profile_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cqrProfileId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getActivationCode(): ?string
    {
        return $this->activationCode;
    }

    public function setActivationCode(?string $activationCode): self
    {
        $this->activationCode = $activationCode;

        return $this;
    }

    public function getForgottenPasswordCode(): ?string
    {
        return $this->forgottenPasswordCode;
    }

    public function setForgottenPasswordCode(?string $forgottenPasswordCode): self
    {
        $this->forgottenPasswordCode = $forgottenPasswordCode;

        return $this;
    }

    public function getForgottenPasswordTime(): ?int
    {
        return $this->forgottenPasswordTime;
    }

    public function setForgottenPasswordTime(?int $forgottenPasswordTime): self
    {
        $this->forgottenPasswordTime = $forgottenPasswordTime;

        return $this;
    }

    public function getRememberCode(): ?string
    {
        return $this->rememberCode;
    }

    public function setRememberCode(?string $rememberCode): self
    {
        $this->rememberCode = $rememberCode;

        return $this;
    }

    public function getCreatedOn(): ?int
    {
        return $this->createdOn;
    }

    public function setCreatedOn(int $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    public function getLastLogin(): ?int
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?int $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCqrGroupId(): ?int
    {
        return $this->cqrGroupId;
    }

    public function setCqrGroupId(int $cqrGroupId): self
    {
        $this->cqrGroupId = $cqrGroupId;

        return $this;
    }

    public function getCqrProfileId(): ?int
    {
        return $this->cqrProfileId;
    }

    public function setCqrProfileId(int $cqrProfileId): self
    {
        $this->cqrProfileId = $cqrProfileId;

        return $this;
    }


}
