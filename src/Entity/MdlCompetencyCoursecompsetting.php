<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyCoursecompsetting
 *
 * @ORM\Table(name="mdl_competency_coursecompsetting", uniqueConstraints={@ORM\UniqueConstraint(name="mo_compcour_cou_uix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlCompetencyCoursecompsetting
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
     * @var bool|null
     *
     * @ORM\Column(name="pushratingstouserplans", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $pushratingstouserplans = 'NULL';

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
     * @var int|null
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $usermodified = 'NULL';

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

    public function getPushratingstouserplans(): ?bool
    {
        return $this->pushratingstouserplans;
    }

    public function setPushratingstouserplans(?bool $pushratingstouserplans): self
    {
        $this->pushratingstouserplans = $pushratingstouserplans;

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

    public function setUsermodified(?string $usermodified): self
    {
        $this->usermodified = $usermodified;

        return $this;
    }


}
