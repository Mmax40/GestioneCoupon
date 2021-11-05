<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyModulecomp
 *
 * @ORM\Table(name="mdl_competency_modulecomp", uniqueConstraints={@ORM\UniqueConstraint(name="mo_compmodu_cmicom_uix", columns={"cmid", "competencyid"})}, indexes={@ORM\Index(name="mo_compmodu_cmi_ix", columns={"cmid"}), @ORM\Index(name="mo_compmodu_com_ix", columns={"competencyid"}), @ORM\Index(name="mo_compmodu_cmirul_ix", columns={"cmid", "ruleoutcome"})})
 * @ORM\Entity
 */
class MdlCompetencyModulecomp
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
     * @ORM\Column(name="cmid", type="bigint", nullable=false)
     */
    private $cmid;

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
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder;

    /**
     * @var int
     *
     * @ORM\Column(name="competencyid", type="bigint", nullable=false)
     */
    private $competencyid;

    /**
     * @var bool
     *
     * @ORM\Column(name="ruleoutcome", type="boolean", nullable=false)
     */
    private $ruleoutcome;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCmid(): ?string
    {
        return $this->cmid;
    }

    public function setCmid(string $cmid): self
    {
        $this->cmid = $cmid;

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

    public function getUsermodified(): ?string
    {
        return $this->usermodified;
    }

    public function setUsermodified(string $usermodified): self
    {
        $this->usermodified = $usermodified;

        return $this;
    }

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(string $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getCompetencyid(): ?string
    {
        return $this->competencyid;
    }

    public function setCompetencyid(string $competencyid): self
    {
        $this->competencyid = $competencyid;

        return $this;
    }

    public function getRuleoutcome(): ?bool
    {
        return $this->ruleoutcome;
    }

    public function setRuleoutcome(bool $ruleoutcome): self
    {
        $this->ruleoutcome = $ruleoutcome;

        return $this;
    }


}
