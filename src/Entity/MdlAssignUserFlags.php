<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignUserFlags
 *
 * @ORM\Table(name="mdl_assign_user_flags", indexes={@ORM\Index(name="mo_assiuserflag_mai_ix", columns={"mailed"}), @ORM\Index(name="mo_assiuserflag_use_ix", columns={"userid"}), @ORM\Index(name="mo_assiuserflag_ass_ix", columns={"assignment"})})
 * @ORM\Entity
 */
class MdlAssignUserFlags
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
     * @ORM\Column(name="assignment", type="bigint", nullable=false)
     */
    private $assignment = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locked", type="bigint", nullable=false)
     */
    private $locked = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mailed", type="smallint", nullable=false)
     */
    private $mailed = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="extensionduedate", type="bigint", nullable=false)
     */
    private $extensionduedate = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="workflowstate", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $workflowstate = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="allocatedmarker", type="bigint", nullable=false)
     */
    private $allocatedmarker = '0';

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

    public function getAssignment(): ?string
    {
        return $this->assignment;
    }

    public function setAssignment(string $assignment): self
    {
        $this->assignment = $assignment;

        return $this;
    }

    public function getLocked(): ?string
    {
        return $this->locked;
    }

    public function setLocked(string $locked): self
    {
        $this->locked = $locked;

        return $this;
    }

    public function getMailed(): ?int
    {
        return $this->mailed;
    }

    public function setMailed(int $mailed): self
    {
        $this->mailed = $mailed;

        return $this;
    }

    public function getExtensionduedate(): ?string
    {
        return $this->extensionduedate;
    }

    public function setExtensionduedate(string $extensionduedate): self
    {
        $this->extensionduedate = $extensionduedate;

        return $this;
    }

    public function getWorkflowstate(): ?string
    {
        return $this->workflowstate;
    }

    public function setWorkflowstate(?string $workflowstate): self
    {
        $this->workflowstate = $workflowstate;

        return $this;
    }

    public function getAllocatedmarker(): ?string
    {
        return $this->allocatedmarker;
    }

    public function setAllocatedmarker(string $allocatedmarker): self
    {
        $this->allocatedmarker = $allocatedmarker;

        return $this;
    }


}
