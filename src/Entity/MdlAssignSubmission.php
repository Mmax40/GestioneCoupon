<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignSubmission
 *
 * @ORM\Table(name="mdl_assign_submission", uniqueConstraints={@ORM\UniqueConstraint(name="mo_assisubm_assusegroatt_uix", columns={"assignment", "userid", "groupid", "attemptnumber"})}, indexes={@ORM\Index(name="mo_assisubm_assusegrolat_ix", columns={"assignment", "userid", "groupid", "latest"}), @ORM\Index(name="mo_assisubm_ass_ix", columns={"assignment"}), @ORM\Index(name="mo_assisubm_use_ix", columns={"userid"}), @ORM\Index(name="mo_assisubm_att_ix", columns={"attemptnumber"})})
 * @ORM\Entity
 */
class MdlAssignSubmission
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $status = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="attemptnumber", type="bigint", nullable=false)
     */
    private $attemptnumber = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="latest", type="boolean", nullable=false)
     */
    private $latest = '0';

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

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getTimecreated(): ?string
    {
        return $this->timecreated;
    }

    public function setTimecreated(string $timecreated): self
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getGroupid(): ?string
    {
        return $this->groupid;
    }

    public function setGroupid(string $groupid): self
    {
        $this->groupid = $groupid;

        return $this;
    }

    public function getAttemptnumber(): ?string
    {
        return $this->attemptnumber;
    }

    public function setAttemptnumber(string $attemptnumber): self
    {
        $this->attemptnumber = $attemptnumber;

        return $this;
    }

    public function getLatest(): ?bool
    {
        return $this->latest;
    }

    public function setLatest(bool $latest): self
    {
        $this->latest = $latest;

        return $this;
    }


}
