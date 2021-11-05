<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeEndorsement
 *
 * @ORM\Table(name="mdl_badge_endorsement", indexes={@ORM\Index(name="mo_badgendo_bad_ix", columns={"badgeid"})})
 * @ORM\Entity
 */
class MdlBadgeEndorsement
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
     * @var string
     *
     * @ORM\Column(name="issuername", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $issuername = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="issuerurl", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $issuerurl = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="issueremail", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $issueremail = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="claimid", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $claimid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="claimcomment", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $claimcomment = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="dateissued", type="bigint", nullable=false)
     */
    private $dateissued = '0';

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

    public function getIssuername(): ?string
    {
        return $this->issuername;
    }

    public function setIssuername(string $issuername): self
    {
        $this->issuername = $issuername;

        return $this;
    }

    public function getIssuerurl(): ?string
    {
        return $this->issuerurl;
    }

    public function setIssuerurl(string $issuerurl): self
    {
        $this->issuerurl = $issuerurl;

        return $this;
    }

    public function getIssueremail(): ?string
    {
        return $this->issueremail;
    }

    public function setIssueremail(string $issueremail): self
    {
        $this->issueremail = $issueremail;

        return $this;
    }

    public function getClaimid(): ?string
    {
        return $this->claimid;
    }

    public function setClaimid(?string $claimid): self
    {
        $this->claimid = $claimid;

        return $this;
    }

    public function getClaimcomment(): ?string
    {
        return $this->claimcomment;
    }

    public function setClaimcomment(?string $claimcomment): self
    {
        $this->claimcomment = $claimcomment;

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


}
