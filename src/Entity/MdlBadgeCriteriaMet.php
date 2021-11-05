<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeCriteriaMet
 *
 * @ORM\Table(name="mdl_badge_criteria_met", indexes={@ORM\Index(name="mo_badgcritmet_cri_ix", columns={"critid"}), @ORM\Index(name="mo_badgcritmet_use_ix", columns={"userid"}), @ORM\Index(name="mo_badgcritmet_iss_ix", columns={"issuedid"})})
 * @ORM\Entity
 */
class MdlBadgeCriteriaMet
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
     * @var int|null
     *
     * @ORM\Column(name="issuedid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $issuedid = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="critid", type="bigint", nullable=false)
     */
    private $critid;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

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

    public function getIssuedid(): ?string
    {
        return $this->issuedid;
    }

    public function setIssuedid(?string $issuedid): self
    {
        $this->issuedid = $issuedid;

        return $this;
    }

    public function getCritid(): ?string
    {
        return $this->critid;
    }

    public function setCritid(string $critid): self
    {
        $this->critid = $critid;

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
