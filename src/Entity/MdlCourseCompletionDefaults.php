<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCompletionDefaults
 *
 * @ORM\Table(name="mdl_course_completion_defaults", uniqueConstraints={@ORM\UniqueConstraint(name="mo_courcompdefa_coumod_uix", columns={"course", "module"})}, indexes={@ORM\Index(name="mo_courcompdefa_cou_ix", columns={"course"}), @ORM\Index(name="mo_courcompdefa_mod_ix", columns={"module"})})
 * @ORM\Entity
 */
class MdlCourseCompletionDefaults
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
    private $course;

    /**
     * @var int
     *
     * @ORM\Column(name="module", type="bigint", nullable=false)
     */
    private $module;

    /**
     * @var bool
     *
     * @ORM\Column(name="completion", type="boolean", nullable=false)
     */
    private $completion = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="completionview", type="boolean", nullable=false)
     */
    private $completionview = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="completionusegrade", type="boolean", nullable=false)
     */
    private $completionusegrade = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="completionexpected", type="bigint", nullable=false)
     */
    private $completionexpected = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customrules", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $customrules = 'NULL';

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

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getCompletion(): ?bool
    {
        return $this->completion;
    }

    public function setCompletion(bool $completion): self
    {
        $this->completion = $completion;

        return $this;
    }

    public function getCompletionview(): ?bool
    {
        return $this->completionview;
    }

    public function setCompletionview(bool $completionview): self
    {
        $this->completionview = $completionview;

        return $this;
    }

    public function getCompletionusegrade(): ?bool
    {
        return $this->completionusegrade;
    }

    public function setCompletionusegrade(bool $completionusegrade): self
    {
        $this->completionusegrade = $completionusegrade;

        return $this;
    }

    public function getCompletionexpected(): ?string
    {
        return $this->completionexpected;
    }

    public function setCompletionexpected(string $completionexpected): self
    {
        $this->completionexpected = $completionexpected;

        return $this;
    }

    public function getCustomrules(): ?string
    {
        return $this->customrules;
    }

    public function setCustomrules(?string $customrules): self
    {
        $this->customrules = $customrules;

        return $this;
    }


}
