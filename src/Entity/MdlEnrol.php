<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlEnrol
 *
 * @ORM\Table(name="mdl_enrol", indexes={@ORM\Index(name="mo_enro_enr_ix", columns={"enrol"}), @ORM\Index(name="mo_enro_cou_ix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlEnrol
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
     * @var string
     *
     * @ORM\Column(name="enrol", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $enrol = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="bigint", nullable=false)
     */
    private $status = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

    /**
     * @var int
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="enrolperiod", type="bigint", nullable=true)
     */
    private $enrolperiod = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="enrolstartdate", type="bigint", nullable=true)
     */
    private $enrolstartdate = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="enrolenddate", type="bigint", nullable=true)
     */
    private $enrolenddate = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="expirynotify", type="boolean", nullable=true)
     */
    private $expirynotify = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="expirythreshold", type="bigint", nullable=true)
     */
    private $expirythreshold = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="notifyall", type="boolean", nullable=true)
     */
    private $notifyall = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $password = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cost", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $cost = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $currency = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=true)
     */
    private $roleid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="customint1", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $customint1 = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="customint2", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $customint2 = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="customint3", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $customint3 = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="customint4", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $customint4 = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="customint5", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $customint5 = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="customint6", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $customint6 = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="customint7", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $customint7 = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="customint8", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $customint8 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customchar1", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $customchar1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customchar2", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $customchar2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customchar3", type="string", length=1333, nullable=true, options={"default"="NULL"})
     */
    private $customchar3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customdec1", type="decimal", precision=12, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $customdec1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customdec2", type="decimal", precision=12, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $customdec2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customtext1", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $customtext1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customtext2", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $customtext2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customtext3", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $customtext3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customtext4", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $customtext4 = 'NULL';

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

    public function getEnrol(): ?string
    {
        return $this->enrol;
    }

    public function setEnrol(string $enrol): self
    {
        $this->enrol = $enrol;

        return $this;
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

    public function getCourseid(): ?string
    {
        return $this->courseid;
    }

    public function setCourseid(string $courseid): self
    {
        $this->courseid = $courseid;

        return $this;
    }

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(string $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEnrolperiod(): ?string
    {
        return $this->enrolperiod;
    }

    public function setEnrolperiod(?string $enrolperiod): self
    {
        $this->enrolperiod = $enrolperiod;

        return $this;
    }

    public function getEnrolstartdate(): ?string
    {
        return $this->enrolstartdate;
    }

    public function setEnrolstartdate(?string $enrolstartdate): self
    {
        $this->enrolstartdate = $enrolstartdate;

        return $this;
    }

    public function getEnrolenddate(): ?string
    {
        return $this->enrolenddate;
    }

    public function setEnrolenddate(?string $enrolenddate): self
    {
        $this->enrolenddate = $enrolenddate;

        return $this;
    }

    public function getExpirynotify(): ?bool
    {
        return $this->expirynotify;
    }

    public function setExpirynotify(?bool $expirynotify): self
    {
        $this->expirynotify = $expirynotify;

        return $this;
    }

    public function getExpirythreshold(): ?string
    {
        return $this->expirythreshold;
    }

    public function setExpirythreshold(?string $expirythreshold): self
    {
        $this->expirythreshold = $expirythreshold;

        return $this;
    }

    public function getNotifyall(): ?bool
    {
        return $this->notifyall;
    }

    public function setNotifyall(?bool $notifyall): self
    {
        $this->notifyall = $notifyall;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(?string $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getRoleid(): ?string
    {
        return $this->roleid;
    }

    public function setRoleid(?string $roleid): self
    {
        $this->roleid = $roleid;

        return $this;
    }

    public function getCustomint1(): ?string
    {
        return $this->customint1;
    }

    public function setCustomint1(?string $customint1): self
    {
        $this->customint1 = $customint1;

        return $this;
    }

    public function getCustomint2(): ?string
    {
        return $this->customint2;
    }

    public function setCustomint2(?string $customint2): self
    {
        $this->customint2 = $customint2;

        return $this;
    }

    public function getCustomint3(): ?string
    {
        return $this->customint3;
    }

    public function setCustomint3(?string $customint3): self
    {
        $this->customint3 = $customint3;

        return $this;
    }

    public function getCustomint4(): ?string
    {
        return $this->customint4;
    }

    public function setCustomint4(?string $customint4): self
    {
        $this->customint4 = $customint4;

        return $this;
    }

    public function getCustomint5(): ?string
    {
        return $this->customint5;
    }

    public function setCustomint5(?string $customint5): self
    {
        $this->customint5 = $customint5;

        return $this;
    }

    public function getCustomint6(): ?string
    {
        return $this->customint6;
    }

    public function setCustomint6(?string $customint6): self
    {
        $this->customint6 = $customint6;

        return $this;
    }

    public function getCustomint7(): ?string
    {
        return $this->customint7;
    }

    public function setCustomint7(?string $customint7): self
    {
        $this->customint7 = $customint7;

        return $this;
    }

    public function getCustomint8(): ?string
    {
        return $this->customint8;
    }

    public function setCustomint8(?string $customint8): self
    {
        $this->customint8 = $customint8;

        return $this;
    }

    public function getCustomchar1(): ?string
    {
        return $this->customchar1;
    }

    public function setCustomchar1(?string $customchar1): self
    {
        $this->customchar1 = $customchar1;

        return $this;
    }

    public function getCustomchar2(): ?string
    {
        return $this->customchar2;
    }

    public function setCustomchar2(?string $customchar2): self
    {
        $this->customchar2 = $customchar2;

        return $this;
    }

    public function getCustomchar3(): ?string
    {
        return $this->customchar3;
    }

    public function setCustomchar3(?string $customchar3): self
    {
        $this->customchar3 = $customchar3;

        return $this;
    }

    public function getCustomdec1(): ?string
    {
        return $this->customdec1;
    }

    public function setCustomdec1(?string $customdec1): self
    {
        $this->customdec1 = $customdec1;

        return $this;
    }

    public function getCustomdec2(): ?string
    {
        return $this->customdec2;
    }

    public function setCustomdec2(?string $customdec2): self
    {
        $this->customdec2 = $customdec2;

        return $this;
    }

    public function getCustomtext1(): ?string
    {
        return $this->customtext1;
    }

    public function setCustomtext1(?string $customtext1): self
    {
        $this->customtext1 = $customtext1;

        return $this;
    }

    public function getCustomtext2(): ?string
    {
        return $this->customtext2;
    }

    public function setCustomtext2(?string $customtext2): self
    {
        $this->customtext2 = $customtext2;

        return $this;
    }

    public function getCustomtext3(): ?string
    {
        return $this->customtext3;
    }

    public function setCustomtext3(?string $customtext3): self
    {
        $this->customtext3 = $customtext3;

        return $this;
    }

    public function getCustomtext4(): ?string
    {
        return $this->customtext4;
    }

    public function setCustomtext4(?string $customtext4): self
    {
        $this->customtext4 = $customtext4;

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
