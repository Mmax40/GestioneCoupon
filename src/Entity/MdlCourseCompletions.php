<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletions
 *
 * @ORM\Table(name="mdl_course_completions", uniqueConstraints={@ORM\UniqueConstraint(name="mo_courcomp_usecou_uix", columns={"userid", "course"})}, indexes={@ORM\Index(name="mo_courcomp_cou_ix", columns={"course"}), @ORM\Index(name="mo_courcomp_tim_ix", columns={"timecompleted"}), @ORM\Index(name="mo_courcomp_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlCourseCompletions
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timeenrolled", type="bigint", nullable=false)
     */
    private $timeenrolled = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timestarted", type="bigint", nullable=false)
     */
    private $timestarted = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timecompleted", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timecompleted = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="reaggregate", type="bigint", nullable=false)
     */
    private $reaggregate = '0';

    public function getId(): ?string
    {
        return $this->id;
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

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getTimeenrolled(): ?string
    {
        return $this->timeenrolled;
    }

    public function setTimeenrolled(string $timeenrolled): self
    {
        $this->timeenrolled = $timeenrolled;

        return $this;
    }

    public function getTimestarted(): ?string
    {
        return $this->timestarted;
    }

    public function setTimestarted(string $timestarted): self
    {
        $this->timestarted = $timestarted;

        return $this;
    }

    public function getTimecompleted(): ?string
    {
        return $this->timecompleted;
    }

    public function setTimecompleted(?string $timecompleted): self
    {
        $this->timecompleted = $timecompleted;

        return $this;
    }

    public function getReaggregate(): ?string
    {
        return $this->reaggregate;
    }

    public function setReaggregate(string $reaggregate): self
    {
        $this->reaggregate = $reaggregate;

        return $this;
    }


}
