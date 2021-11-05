<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletionAggrMethd
 *
 * @ORM\Table(name="mdl_course_completion_aggr_methd", uniqueConstraints={@ORM\UniqueConstraint(name="mo_courcompaggrmeth_coucri_uix", columns={"course", "criteriatype"})}, indexes={@ORM\Index(name="mo_courcompaggrmeth_cri_ix", columns={"criteriatype"}), @ORM\Index(name="mo_courcompaggrmeth_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlCourseCompletionAggrMethd
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
     * @var int|null
     *
     * @ORM\Column(name="criteriatype", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $criteriatype = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="method", type="boolean", nullable=false)
     */
    private $method = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="decimal", precision=10, scale=5, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

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

    public function setCriteriatype(?string $criteriatype): self
    {
        $this->criteriatype = $criteriatype;

        return $this;
    }

    public function getMethod(): ?bool
    {
        return $this->method;
    }

    public function setMethod(bool $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
