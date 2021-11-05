<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletionCriteria
 *
 * @ORM\Table(name="mdl_course_completion_criteria", indexes={@ORM\Index(name="mo_courcompcrit_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlCourseCompletionCriteria
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
     * @var int
     *
     * @ORM\Column(name="criteriatype", type="bigint", nullable=false)
     */
    private $criteriatype = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $module = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="moduleinstance", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $moduleinstance = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="courseinstance", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $courseinstance = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="enrolperiod", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $enrolperiod = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timeend", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timeend = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gradepass", type="decimal", precision=10, scale=5, nullable=true, options={"default"="NULL"})
     */
    private $gradepass = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="role", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $role = 'NULL';

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

    public function getCriteriatype(): ?string
    {
        return $this->criteriatype;
    }

    public function setCriteriatype(string $criteriatype): self
    {
        $this->criteriatype = $criteriatype;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getModuleinstance(): ?string
    {
        return $this->moduleinstance;
    }

    public function setModuleinstance(?string $moduleinstance): self
    {
        $this->moduleinstance = $moduleinstance;

        return $this;
    }

    public function getCourseinstance(): ?string
    {
        return $this->courseinstance;
    }

    public function setCourseinstance(?string $courseinstance): self
    {
        $this->courseinstance = $courseinstance;

        return $this;
    }

    public function getEnrolperiod(): ?string
    {
        return $this->enrolperiod;
    }

    public function setEnrolperiod(?string $enrolperiod): self
    {
        $this->enrolperiod = $enrolperiod;

        return $this;
    }

    public function getTimeend(): ?string
    {
        return $this->timeend;
    }

    public function setTimeend(?string $timeend): self
    {
        $this->timeend = $timeend;

        return $this;
    }

    public function getGradepass(): ?string
    {
        return $this->gradepass;
    }

    public function setGradepass(?string $gradepass): self
    {
        $this->gradepass = $gradepass;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }


}
