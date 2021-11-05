<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackComments
 *
 * @ORM\Table(name="mdl_assignfeedback_comments", indexes={@ORM\Index(name="mo_assicomm_ass_ix", columns={"assignment"}), @ORM\Index(name="mo_assicomm_gra_ix", columns={"grade"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackComments
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
     * @var string|null
     *
     * @ORM\Column(name="commenttext", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $commenttext = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="commentformat", type="smallint", nullable=false)
     */
    private $commentformat = '0';

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

    public function getCommenttext(): ?string
    {
        return $this->commenttext;
    }

    public function setCommenttext(?string $commenttext): self
    {
        $this->commenttext = $commenttext;

        return $this;
    }

    public function getCommentformat(): ?int
    {
        return $this->commentformat;
    }

    public function setCommentformat(int $commentformat): self
    {
        $this->commentformat = $commentformat;

        return $this;
    }


}
