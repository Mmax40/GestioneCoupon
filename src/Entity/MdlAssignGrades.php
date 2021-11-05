<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignGrades
 *
 * @ORM\Table(name="mdl_assign_grades", uniqueConstraints={@ORM\UniqueConstraint(name="mo_assigrad_assuseatt_uix", columns={"assignment", "userid", "attemptnumber"})}, indexes={@ORM\Index(name="mo_assigrad_use_ix", columns={"userid"}), @ORM\Index(name="mo_assigrad_att_ix", columns={"attemptnumber"}), @ORM\Index(name="mo_assigrad_ass_ix", columns={"assignment"})})
 * @ORM\Entity
 */
class MdlAssignGrades
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
     * @ORM\Column(name="assignment", type="bigint", nullable=false)
     */
    private $assignment = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

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
     * @ORM\Column(name="grader", type="bigint", nullable=false)
     */
    private $grader = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="grade", type="decimal", precision=10, scale=5, nullable=true, options={"default"="0.00000"})
     */
    private $grade = '0.00000';

    /**
     * @var int
     *
     * @ORM\Column(name="attemptnumber", type="bigint", nullable=false)
     */
    private $attemptnumber = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAssignment(): ?string
    {
        return $this->assignment;
    }

    public function setAssignment(string $assignment): self
    {
        $this->assignment = $assignment;

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

    public function getGrader(): ?string
    {
        return $this->grader;
    }

    public function setGrader(string $grader): self
    {
        $this->grader = $grader;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(?string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getAttemptnumber(): ?string
    {
        return $this->attemptnumber;
    }

    public function setAttemptnumber(string $attemptnumber): self
    {
        $this->attemptnumber = $attemptnumber;

        return $this;
    }


}
