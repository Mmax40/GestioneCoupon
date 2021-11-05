<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyPlancomp
 *
 * @ORM\Table(name="mdl_competency_plancomp", uniqueConstraints={@ORM\UniqueConstraint(name="mo_compplan_placom_uix", columns={"planid", "competencyid"})})
 * @ORM\Entity
 */
class MdlCompetencyPlancomp
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
     * @ORM\Column(name="planid", type="bigint", nullable=false)
     */
    private $planid;

    /**
     * @var int
     *
     * @ORM\Column(name="competencyid", type="bigint", nullable=false)
     */
    private $competencyid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $sortorder = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var int|null
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timemodified = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPlanid(): ?string
    {
        return $this->planid;
    }

    public function setPlanid(string $planid): self
    {
        $this->planid = $planid;

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

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(?string $sortorder): self
    {
        $this->sortorder = $sortorder;

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

    public function setTimemodified(?string $timemodified): self
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


}
