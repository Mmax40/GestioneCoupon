<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeIssued
 *
 * @ORM\Table(name="mdl_badge_issued", uniqueConstraints={@ORM\UniqueConstraint(name="mo_badgissu_baduse_uix", columns={"badgeid", "userid"})}, indexes={@ORM\Index(name="mo_badgissu_use_ix", columns={"userid"}), @ORM\Index(name="mo_badgissu_bad_ix", columns={"badgeid"})})
 * @ORM\Entity
 */
class MdlBadgeIssued
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
     * @ORM\Column(name="badgeid", type="bigint", nullable=false)
     */
    private $badgeid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="uniquehash", type="text", length=0, nullable=false)
     */
    private $uniquehash;

    /**
     * @var int
     *
     * @ORM\Column(name="dateissued", type="bigint", nullable=false)
     */
    private $dateissued = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dateexpire", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $dateexpire = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="issuernotified", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $issuernotified = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBadgeid(): ?string
    {
        return $this->badgeid;
    }

    public function setBadgeid(string $badgeid): self
    {
        $this->badgeid = $badgeid;

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

    public function getUniquehash(): ?string
    {
        return $this->uniquehash;
    }

    public function setUniquehash(string $uniquehash): self
    {
        $this->uniquehash = $uniquehash;

        return $this;
    }

    public function getDateissued(): ?string
    {
        return $this->dateissued;
    }

    public function setDateissued(string $dateissued): self
    {
        $this->dateissued = $dateissued;

        return $this;
    }

    public function getDateexpire(): ?string
    {
        return $this->dateexpire;
    }

    public function setDateexpire(?string $dateexpire): self
    {
        $this->dateexpire = $dateexpire;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getIssuernotified(): ?string
    {
        return $this->issuernotified;
    }

    public function setIssuernotified(?string $issuernotified): self
    {
        $this->issuernotified = $issuernotified;

        return $this;
    }


}
