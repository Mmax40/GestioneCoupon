<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignsubmissionFile
 *
 * @ORM\Table(name="mdl_assignsubmission_file", indexes={@ORM\Index(name="mo_assifile_ass_ix", columns={"assignment"}), @ORM\Index(name="mo_assifile_sub_ix", columns={"submission"})})
 * @ORM\Entity
 */
class MdlAssignsubmissionFile
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
     * @var int
     *
     * @ORM\Column(name="numfiles", type="bigint", nullable=false)
     */
    private $numfiles = '0';

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

    public function getNumfiles(): ?string
    {
        return $this->numfiles;
    }

    public function setNumfiles(string $numfiles): self
    {
        $this->numfiles = $numfiles;

        return $this;
    }


}
