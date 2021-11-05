<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeBackpack
 *
 * @ORM\Table(name="mdl_badge_backpack", uniqueConstraints={@ORM\UniqueConstraint(name="mo_badgback_useext_uix", columns={"userid", "externalbackpackid"})}, indexes={@ORM\Index(name="mo_badgback_ext_ix", columns={"externalbackpackid"}), @ORM\Index(name="mo_badgback_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlBadgeBackpack
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $email = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="backpackuid", type="bigint", nullable=false)
     */
    private $backpackuid;

    /**
     * @var bool
     *
     * @ORM\Column(name="autosync", type="boolean", nullable=false)
     */
    private $autosync = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $password = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="externalbackpackid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $externalbackpackid = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

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

    public function getBackpackuid(): ?string
    {
        return $this->backpackuid;
    }

    public function setBackpackuid(string $backpackuid): self
    {
        $this->backpackuid = $backpackuid;

        return $this;
    }

    public function getAutosync(): ?bool
    {
        return $this->autosync;
    }

    public function setAutosync(bool $autosync): self
    {
        $this->autosync = $autosync;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getExternalbackpackid(): ?string
    {
        return $this->externalbackpackid;
    }

    public function setExternalbackpackid(?string $externalbackpackid): self
    {
        $this->externalbackpackid = $externalbackpackid;

        return $this;
    }


}
