<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeManualAward
 *
 * @ORM\Table(name="mdl_badge_manual_award", indexes={@ORM\Index(name="mo_badgmanuawar_iss2_ix", columns={"issuerrole"}), @ORM\Index(name="mo_badgmanuawar_bad_ix", columns={"badgeid"}), @ORM\Index(name="mo_badgmanuawar_rec_ix", columns={"recipientid"}), @ORM\Index(name="mo_badgmanuawar_iss_ix", columns={"issuerid"})})
 * @ORM\Entity
 */
class MdlBadgeManualAward
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
    private $badgeid;

    /**
     * @var int
     *
     * @ORM\Column(name="recipientid", type="bigint", nullable=false)
     */
    private $recipientid;

    /**
     * @var int
     *
     * @ORM\Column(name="issuerid", type="bigint", nullable=false)
     */
    private $issuerid;

    /**
     * @var int
     *
     * @ORM\Column(name="issuerrole", type="bigint", nullable=false)
     */
    private $issuerrole;

    /**
     * @var int
     *
     * @ORM\Column(name="datemet", type="bigint", nullable=false)
     */
    private $datemet;

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

    public function getRecipientid(): ?string
    {
        return $this->recipientid;
    }

    public function setRecipientid(string $recipientid): self
    {
        $this->recipientid = $recipientid;

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

    public function getIssuerrole(): ?string
    {
        return $this->issuerrole;
    }

    public function setIssuerrole(string $issuerrole): self
    {
        $this->issuerrole = $issuerrole;

        return $this;
    }

    public function getDatemet(): ?string
    {
        return $this->datemet;
    }

    public function setDatemet(string $datemet): self
    {
        $this->datemet = $datemet;

        return $this;
    }


}
