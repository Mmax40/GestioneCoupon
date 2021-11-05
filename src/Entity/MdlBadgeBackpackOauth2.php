<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeBackpackOauth2
 *
 * @ORM\Table(name="mdl_badge_backpack_oauth2", indexes={@ORM\Index(name="mo_badgbackoaut_ext_ix", columns={"externalbackpackid"}), @ORM\Index(name="mo_badgbackoaut_use_ix", columns={"usermodified"}), @ORM\Index(name="mo_badgbackoaut_use2_ix", columns={"userid"}), @ORM\Index(name="mo_badgbackoaut_iss_ix", columns={"issuerid"})})
 * @ORM\Entity
 */
class MdlBadgeBackpackOauth2
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
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

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
     * @var int
     *
     * @ORM\Column(name="externalbackpackid", type="bigint", nullable=false)
     */
    private $externalbackpackid;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="text", length=0, nullable=false)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="refreshtoken", type="text", length=0, nullable=false)
     */
    private $refreshtoken;

    /**
     * @var int|null
     *
     * @ORM\Column(name="expires", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $expires = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="scope", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $scope = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
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

    public function getExternalbackpackid(): ?string
    {
        return $this->externalbackpackid;
    }

    public function setExternalbackpackid(string $externalbackpackid): self
    {
        $this->externalbackpackid = $externalbackpackid;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getRefreshtoken(): ?string
    {
        return $this->refreshtoken;
    }

    public function setRefreshtoken(string $refreshtoken): self
    {
        $this->refreshtoken = $refreshtoken;

        return $this;
    }

    public function getExpires(): ?string
    {
        return $this->expires;
    }

    public function setExpires(?string $expires): self
    {
        $this->expires = $expires;

        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }


}
