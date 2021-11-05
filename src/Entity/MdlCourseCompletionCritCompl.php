<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletionCritCompl
 *
 * @ORM\Table(name="mdl_course_completion_crit_compl", uniqueConstraints={@ORM\UniqueConstraint(name="mo_courcompcritcomp_usecou_uix", columns={"userid", "course", "criteriaid"})}, indexes={@ORM\Index(name="mo_courcompcritcomp_tim_ix", columns={"timecompleted"}), @ORM\Index(name="mo_courcompcritcomp_use_ix", columns={"userid"}), @ORM\Index(name="mo_courcompcritcomp_cou_ix", columns={"course"}), @ORM\Index(name="mo_courcompcritcomp_cri_ix", columns={"criteriaid"})})
 * @ORM\Entity
 */
class MdlCourseCompletionCritCompl
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
     * @ORM\Column(name="criteriaid", type="bigint", nullable=false)
     */
    private $criteriaid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gradefinal", type="decimal", precision=10, scale=5, nullable=true, options={"default"="NULL"})
     */
    private $gradefinal = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="unenroled", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $unenroled = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timecompleted", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timecompleted = 'NULL';

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

    public function getCriteriaid(): ?string
    {
        return $this->criteriaid;
    }

    public function setCriteriaid(string $criteriaid): self
    {
        $this->criteriaid = $criteriaid;

        return $this;
    }

    public function getGradefinal(): ?string
    {
        return $this->gradefinal;
    }

    public function setGradefinal(?string $gradefinal): self
    {
        $this->gradefinal = $gradefinal;

        return $this;
    }

    public function getUnenroled(): ?string
    {
        return $this->unenroled;
    }

    public function setUnenroled(?string $unenroled): self
    {
        $this->unenroled = $unenroled;

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


}
