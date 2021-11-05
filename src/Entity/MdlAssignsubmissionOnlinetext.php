<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignsubmissionOnlinetext
 *
 * @ORM\Table(name="mdl_assignsubmission_onlinetext", indexes={@ORM\Index(name="mo_assionli_ass_ix", columns={"assignment"}), @ORM\Index(name="mo_assionli_sub_ix", columns={"submission"})})
 * @ORM\Entity
 */
class MdlAssignsubmissionOnlinetext
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
     * @ORM\Column(name="submission", type="bigint", nullable=false)
     */
    private $submission = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="onlinetext", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $onlinetext = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="onlineformat", type="smallint", nullable=false)
     */
    private $onlineformat = '0';

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

    public function getSubmission(): ?string
    {
        return $this->submission;
    }

    public function setSubmission(string $submission): self
    {
        $this->submission = $submission;

        return $this;
    }

    public function getOnlinetext(): ?string
    {
        return $this->onlinetext;
    }

    public function setOnlinetext(?string $onlinetext): self
    {
        $this->onlinetext = $onlinetext;

        return $this;
    }

    public function getOnlineformat(): ?int
    {
        return $this->onlineformat;
    }

    public function setOnlineformat(int $onlineformat): self
    {
        $this->onlineformat = $onlineformat;

        return $this;
    }


}
