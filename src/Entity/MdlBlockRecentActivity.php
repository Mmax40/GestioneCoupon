<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockRecentActivity
 *
 * @ORM\Table(name="mdl_block_recent_activity", indexes={@ORM\Index(name="mo_blocreceacti_coutim_ix", columns={"courseid", "timecreated"})})
 * @ORM\Entity
 */
class MdlBlockRecentActivity
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

    /**
     * @var int
     *
     * @ORM\Column(name="cmid", type="bigint", nullable=false)
     */
    private $cmid;

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var bool
     *
     * @ORM\Column(name="action", type="boolean", nullable=false)
     */
    private $action;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modname", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $modname = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCourseid(): ?string
    {
        return $this->courseid;
    }

    public function setCourseid(string $courseid): self
    {
        $this->courseid = $courseid;

        return $this;
    }

    public function getCmid(): ?string
    {
        return $this->cmid;
    }

    public function setCmid(string $cmid): self
    {
        $this->cmid = $cmid;

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

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getAction(): ?bool
    {
        return $this->action;
    }

    public function setAction(bool $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getModname(): ?string
    {
        return $this->modname;
    }

    public function setModname(?string $modname): self
    {
        $this->modname = $modname;

        return $this;
    }


}
