<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAttendanceregister
 *
 * @ORM\Table(name="mdl_attendanceregister", indexes={@ORM\Index(name="mo_atte_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlAttendanceregister
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $type = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="offlinesessions", type="boolean", nullable=false)
     */
    private $offlinesessions = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sessiontimeout", type="smallint", nullable=false, options={"default"="30"})
     */
    private $sessiontimeout = '30';

    /**
     * @var int
     *
     * @ORM\Column(name="dayscertificable", type="smallint", nullable=false, options={"default"="10"})
     */
    private $dayscertificable = '10';

    /**
     * @var bool
     *
     * @ORM\Column(name="offlinecomments", type="boolean", nullable=false, options={"default"="1"})
     */
    private $offlinecomments = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="mandatoryofflinecomm", type="boolean", nullable=false, options={"default"="1"})
     */
    private $mandatoryofflinecomm = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="offlinespecifycourse", type="boolean", nullable=false)
     */
    private $offlinespecifycourse = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="mandofflspeccourse", type="boolean", nullable=false)
     */
    private $mandofflspeccourse = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="intro", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $intro = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pendingrecalc", type="boolean", nullable=false)
     */
    private $pendingrecalc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="completiontotaldurationmins", type="bigint", nullable=false)
     */
    private $completiontotaldurationmins = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getOfflinesessions(): ?bool
    {
        return $this->offlinesessions;
    }

    public function setOfflinesessions(bool $offlinesessions): self
    {
        $this->offlinesessions = $offlinesessions;

        return $this;
    }

    public function getSessiontimeout(): ?int
    {
        return $this->sessiontimeout;
    }

    public function setSessiontimeout(int $sessiontimeout): self
    {
        $this->sessiontimeout = $sessiontimeout;

        return $this;
    }

    public function getDayscertificable(): ?int
    {
        return $this->dayscertificable;
    }

    public function setDayscertificable(int $dayscertificable): self
    {
        $this->dayscertificable = $dayscertificable;

        return $this;
    }

    public function getOfflinecomments(): ?bool
    {
        return $this->offlinecomments;
    }

    public function setOfflinecomments(bool $offlinecomments): self
    {
        $this->offlinecomments = $offlinecomments;

        return $this;
    }

    public function getMandatoryofflinecomm(): ?bool
    {
        return $this->mandatoryofflinecomm;
    }

    public function setMandatoryofflinecomm(bool $mandatoryofflinecomm): self
    {
        $this->mandatoryofflinecomm = $mandatoryofflinecomm;

        return $this;
    }

    public function getOfflinespecifycourse(): ?bool
    {
        return $this->offlinespecifycourse;
    }

    public function setOfflinespecifycourse(bool $offlinespecifycourse): self
    {
        $this->offlinespecifycourse = $offlinespecifycourse;

        return $this;
    }

    public function getMandofflspeccourse(): ?bool
    {
        return $this->mandofflspeccourse;
    }

    public function setMandofflspeccourse(bool $mandofflspeccourse): self
    {
        $this->mandofflspeccourse = $mandofflspeccourse;

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

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(?string $intro): self
    {
        $this->intro = $intro;

        return $this;
    }

    public function getIntroformat(): ?int
    {
        return $this->introformat;
    }

    public function setIntroformat(int $introformat): self
    {
        $this->introformat = $introformat;

        return $this;
    }

    public function getPendingrecalc(): ?bool
    {
        return $this->pendingrecalc;
    }

    public function setPendingrecalc(bool $pendingrecalc): self
    {
        $this->pendingrecalc = $pendingrecalc;

        return $this;
    }

    public function getCompletiontotaldurationmins(): ?string
    {
        return $this->completiontotaldurationmins;
    }

    public function setCompletiontotaldurationmins(string $completiontotaldurationmins): self
    {
        $this->completiontotaldurationmins = $completiontotaldurationmins;

        return $this;
    }


}
