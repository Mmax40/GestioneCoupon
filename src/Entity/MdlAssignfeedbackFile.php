<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackFile
 *
 * @ORM\Table(name="mdl_assignfeedback_file", indexes={@ORM\Index(name="mo_assifile_ass2_ix", columns={"assignment"}), @ORM\Index(name="mo_assifile_gra_ix", columns={"grade"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackFile
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
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade = '0';

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

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

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
