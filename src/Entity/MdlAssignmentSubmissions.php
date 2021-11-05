<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignmentSubmissions
 *
 * @ORM\Table(name="mdl_assignment_submissions", indexes={@ORM\Index(name="mo_assisubm_ass2_ix", columns={"assignment"}), @ORM\Index(name="mo_assisubm_use2_ix", columns={"userid"}), @ORM\Index(name="mo_assisubm_mai_ix", columns={"mailed"}), @ORM\Index(name="mo_assisubm_tim_ix", columns={"timemarked"})})
 * @ORM\Entity
 */
class MdlAssignmentSubmissions
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
     * @ORM\Column(name="numfiles", type="bigint", nullable=false)
     */
    private $numfiles = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="data1", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $data1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="data2", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $data2 = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="submissioncomment", type="text", length=0, nullable=false)
     */
    private $submissioncomment;

    /**
     * @var int
     *
     * @ORM\Column(name="format", type="smallint", nullable=false)
     */
    private $format = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="teacher", type="bigint", nullable=false)
     */
    private $teacher = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemarked", type="bigint", nullable=false)
     */
    private $timemarked = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="mailed", type="boolean", nullable=false)
     */
    private $mailed = '0';

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

    public function getNumfiles(): ?string
    {
        return $this->numfiles;
    }

    public function setNumfiles(string $numfiles): self
    {
        $this->numfiles = $numfiles;

        return $this;
    }

    public function getData1(): ?string
    {
        return $this->data1;
    }

    public function setData1(?string $data1): self
    {
        $this->data1 = $data1;

        return $this;
    }

    public function getData2(): ?string
    {
        return $this->data2;
    }

    public function setData2(?string $data2): self
    {
        $this->data2 = $data2;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getSubmissioncomment(): ?string
    {
        return $this->submissioncomment;
    }

    public function setSubmissioncomment(string $submissioncomment): self
    {
        $this->submissioncomment = $submissioncomment;

        return $this;
    }

    public function getFormat(): ?int
    {
        return $this->format;
    }

    public function setFormat(int $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getTeacher(): ?string
    {
        return $this->teacher;
    }

    public function setTeacher(string $teacher): self
    {
        $this->teacher = $teacher;

        return $this;
    }

    public function getTimemarked(): ?string
    {
        return $this->timemarked;
    }

    public function setTimemarked(string $timemarked): self
    {
        $this->timemarked = $timemarked;

        return $this;
    }

    public function getMailed(): ?bool
    {
        return $this->mailed;
    }

    public function setMailed(bool $mailed): self
    {
        $this->mailed = $mailed;

        return $this;
    }


}
