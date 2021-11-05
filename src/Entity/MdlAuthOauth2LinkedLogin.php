<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAuthOauth2LinkedLogin
 *
 * @ORM\Table(name="mdl_auth_oauth2_linked_login", uniqueConstraints={@ORM\UniqueConstraint(name="mo_authoautlinklogi_useiss_uix", columns={"userid", "issuerid", "username"})}, indexes={@ORM\Index(name="mo_authoautlinklogi_use2_ix", columns={"userid"}), @ORM\Index(name="mo_authoautlinklogi_issuse_ix", columns={"issuerid", "username"}), @ORM\Index(name="mo_authoautlinklogi_iss_ix", columns={"issuerid"}), @ORM\Index(name="mo_authoautlinklogi_use_ix", columns={"usermodified"})})
 * @ORM\Entity
 */
class MdlAuthOauth2LinkedLogin
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
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var int
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="issuerid", type="bigint", nullable=false)
     */
    private $issuerid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $username = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=0, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmtoken", type="string", length=64, nullable=false, options={"default"="''"})
     */
    private $confirmtoken = '\'\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="confirmtokenexpires", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $confirmtokenexpires = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTimecreated(): ?string
    {
        return $this->timecreated;
    }

    public function setTimecreated(string $timecreated): self
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    public function getUsermodified(): ?string
    {
        return $this->usermodified;
    }

    public function setUsermodified(string $usermodified): self
    {
        $this->usermodified = $usermodified;

        return $this;
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

    public function getIssuerid(): ?string
    {
        return $this->issuerid;
    }

    public function setIssuerid(string $issuerid): self
    {
        $this->issuerid = $issuerid;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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

    public function getConfirmtoken(): ?string
    {
        return $this->confirmtoken;
    }

    public function setConfirmtoken(string $confirmtoken): self
    {
        $this->confirmtoken = $confirmtoken;

        return $this;
    }

    public function getConfirmtokenexpires(): ?string
    {
        return $this->confirmtokenexpires;
    }

    public function setConfirmtokenexpires(?string $confirmtokenexpires): self
    {
        $this->confirmtokenexpires = $confirmtokenexpires;

        return $this;
    }


}
