<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignOverrides
 *
 * @ORM\Table(name="mdl_assign_overrides", indexes={@ORM\Index(name="mo_assiover_ass_ix", columns={"assignid"}), @ORM\Index(name="mo_assiover_gro_ix", columns={"groupid"}), @ORM\Index(name="mo_assiover_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlAssignOverrides
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
     * @ORM\Column(name="assignid", type="bigint", nullable=false)
     */
    private $assignid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $groupid = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="userid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $userid = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $sortorder = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="allowsubmissionsfromdate", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $allowsubmissionsfromdate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="duedate", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $duedate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cutoffdate", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $cutoffdate = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAssignid(): ?string
    {
        return $this->assignid;
    }

    public function setAssignid(string $assignid): self
    {
        $this->assignid = $assignid;

        return $this;
    }

    public function getGroupid(): ?string
    {
        return $this->groupid;
    }

    public function setGroupid(?string $groupid): self
    {
        $this->groupid = $groupid;

        return $this;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(?string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(?string $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getAllowsubmissionsfromdate(): ?string
    {
        return $this->allowsubmissionsfromdate;
    }

    public function setAllowsubmissionsfromdate(?string $allowsubmissionsfromdate): self
    {
        $this->allowsubmissionsfromdate = $allowsubmissionsfromdate;

        return $this;
    }

    public function getDuedate(): ?string
    {
        return $this->duedate;
    }

    public function setDuedate(?string $duedate): self
    {
        $this->duedate = $duedate;

        return $this;
    }

    public function getCutoffdate(): ?string
    {
        return $this->cutoffdate;
    }

    public function setCutoffdate(?string $cutoffdate): self
    {
        $this->cutoffdate = $cutoffdate;

        return $this;
    }


}
