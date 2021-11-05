<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyCoursecomp
 *
 * @ORM\Table(name="mdl_competency_coursecomp", uniqueConstraints={@ORM\UniqueConstraint(name="mo_compcour_coucom_uix", columns={"courseid", "competencyid"})}, indexes={@ORM\Index(name="mo_compcour_cou2_ix", columns={"courseid"}), @ORM\Index(name="mo_compcour_com_ix", columns={"competencyid"}), @ORM\Index(name="mo_compcour_courul_ix", columns={"courseid", "ruleoutcome"})})
 * @ORM\Entity
 */
class MdlCompetencyCoursecomp
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCourseid(): ?string
    {
        return $this->courseid;
    }

    public function setCourseid(string $courseid): self
    {
        $this->courseid = $courseid;

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


}
