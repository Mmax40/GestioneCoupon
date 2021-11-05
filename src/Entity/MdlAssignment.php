<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignment
 *
 * @ORM\Table(name="mdl_assignment", indexes={@ORM\Index(name="mo_assi_cou2_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlAssignment
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", length=0, nullable=false)
     */
    private $intro;

    /**
     * @var int
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="assignmenttype", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $assignmenttype = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="resubmit", type="boolean", nullable=false)
     */
    private $resubmit = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="preventlate", type="boolean", nullable=false)
     */
    private $preventlate = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="emailteachers", type="boolean", nullable=false)
     */
    private $emailteachers = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="var1", type="bigint", nullable=true)
     */
    private $var1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="var2", type="bigint", nullable=true)
     */
    private $var2 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="var3", type="bigint", nullable=true)
     */
    private $var3 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="var4", type="bigint", nullable=true)
     */
    private $var4 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="var5", type="bigint", nullable=true)
     */
    private $var5 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="maxbytes", type="bigint", nullable=false, options={"default"="100000"})
     */
    private $maxbytes = '100000';

    /**
     * @var int
     *
     * @ORM\Column(name="timedue", type="bigint", nullable=false)
     */
    private $timedue = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timeavailable", type="bigint", nullable=false)
     */
    private $timeavailable = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(string $intro): self
    {
        $this->intro = $intro;

        return $this;
    }

    public function getIntroformat(): ?int
    {
        return $this->introformat;
    }

    public function setIntroformat(int $introformat): self
    {
        $this->introformat = $introformat;

        return $this;
    }

    public function getAssignmenttype(): ?string
    {
        return $this->assignmenttype;
    }

    public function setAssignmenttype(string $assignmenttype): self
    {
        $this->assignmenttype = $assignmenttype;

        return $this;
    }

    public function getResubmit(): ?bool
    {
        return $this->resubmit;
    }

    public function setResubmit(bool $resubmit): self
    {
        $this->resubmit = $resubmit;

        return $this;
    }

    public function getPreventlate(): ?bool
    {
        return $this->preventlate;
    }

    public function setPreventlate(bool $preventlate): self
    {
        $this->preventlate = $preventlate;

        return $this;
    }

    public function getEmailteachers(): ?bool
    {
        return $this->emailteachers;
    }

    public function setEmailteachers(bool $emailteachers): self
    {
        $this->emailteachers = $emailteachers;

        return $this;
    }

    public function getVar1(): ?string
    {
        return $this->var1;
    }

    public function setVar1(?string $var1): self
    {
        $this->var1 = $var1;

        return $this;
    }

    public function getVar2(): ?string
    {
        return $this->var2;
    }

    public function setVar2(?string $var2): self
    {
        $this->var2 = $var2;

        return $this;
    }

    public function getVar3(): ?string
    {
        return $this->var3;
    }

    public function setVar3(?string $var3): self
    {
        $this->var3 = $var3;

        return $this;
    }

    public function getVar4(): ?string
    {
        return $this->var4;
    }

    public function setVar4(?string $var4): self
    {
        $this->var4 = $var4;

        return $this;
    }

    public function getVar5(): ?string
    {
        return $this->var5;
    }

    public function setVar5(?string $var5): self
    {
        $this->var5 = $var5;

        return $this;
    }

    public function getMaxbytes(): ?string
    {
        return $this->maxbytes;
    }

    public function setMaxbytes(string $maxbytes): self
    {
        $this->maxbytes = $maxbytes;

        return $this;
    }

    public function getTimedue(): ?string
    {
        return $this->timedue;
    }

    public function setTimedue(string $timedue): self
    {
        $this->timedue = $timedue;

        return $this;
    }

    public function getTimeavailable(): ?string
    {
        return $this->timeavailable;
    }

    public function setTimeavailable(string $timeavailable): self
    {
        $this->timeavailable = $timeavailable;

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

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }


}
