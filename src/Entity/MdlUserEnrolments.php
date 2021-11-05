<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserEnrolments
 *
 * @ORM\Table(name="mdl_user_enrolments", uniqueConstraints={@ORM\UniqueConstraint(name="mo_userenro_enruse_uix", columns={"enrolid", "userid"})}, indexes={@ORM\Index(name="mo_userenro_use_ix", columns={"userid"}), @ORM\Index(name="mo_userenro_mod_ix", columns={"modifierid"}), @ORM\Index(name="mo_userenro_enr_ix", columns={"enrolid"})})
 * @ORM\Entity
 */
class MdlUserEnrolments
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
     * @ORM\Column(name="status", type="bigint", nullable=false)
     */
    private $status = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="enrolid", type="bigint", nullable=false)
     */
    private $enrolid;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="timestart", type="bigint", nullable=false)
     */
    private $timestart = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timeend", type="bigint", nullable=false, options={"default"="2147483647"})
     */
    private $timeend = '2147483647';

    /**
     * @var int
     *
     * @ORM\Column(name="modifierid", type="bigint", nullable=false)
     */
    private $modifierid = '0';

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getEnrolid(): ?string
    {
        return $this->enrolid;
    }

    public function setEnrolid(string $enrolid): self
    {
        $this->enrolid = $enrolid;

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

    public function getTimestart(): ?string
    {
        return $this->timestart;
    }

    public function setTimestart(string $timestart): self
    {
        $this->timestart = $timestart;

        return $this;
    }

    public function getTimeend(): ?string
    {
        return $this->timeend;
    }

    public function setTimeend(string $timeend): self
    {
        $this->timeend = $timeend;

        return $this;
    }

    public function getModifierid(): ?string
    {
        return $this->modifierid;
    }

    public function setModifierid(string $modifierid): self
    {
        $this->modifierid = $modifierid;

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


}
