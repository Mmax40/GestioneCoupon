<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyEvidence
 *
 * @ORM\Table(name="mdl_competency_evidence", indexes={@ORM\Index(name="mo_compevid_use_ix", columns={"usercompetencyid"})})
 * @ORM\Entity
 */
class MdlCompetencyEvidence
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
     * @ORM\Column(name="usercompetencyid", type="bigint", nullable=false)
     */
    private $usercompetencyid;

    /**
     * @var int
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var bool
     *
     * @ORM\Column(name="action", type="boolean", nullable=false)
     */
    private $action;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actionuserid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $actionuserid = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="descidentifier", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $descidentifier = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="desccomponent", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $desccomponent = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="desca", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $desca = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $url = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="grade", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $grade = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var int
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUsercompetencyid(): ?string
    {
        return $this->usercompetencyid;
    }

    public function setUsercompetencyid(string $usercompetencyid): self
    {
        $this->usercompetencyid = $usercompetencyid;

        return $this;
    }

    public function getContextid(): ?string
    {
        return $this->contextid;
    }

    public function setContextid(string $contextid): self
    {
        $this->contextid = $contextid;

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

    public function getActionuserid(): ?string
    {
        return $this->actionuserid;
    }

    public function setActionuserid(?string $actionuserid): self
    {
        $this->actionuserid = $actionuserid;

        return $this;
    }

    public function getDescidentifier(): ?string
    {
        return $this->descidentifier;
    }

    public function setDescidentifier(string $descidentifier): self
    {
        $this->descidentifier = $descidentifier;

        return $this;
    }

    public function getDesccomponent(): ?string
    {
        return $this->desccomponent;
    }

    public function setDesccomponent(string $desccomponent): self
    {
        $this->desccomponent = $desccomponent;

        return $this;
    }

    public function getDesca(): ?string
    {
        return $this->desca;
    }

    public function setDesca(?string $desca): self
    {
        $this->desca = $desca;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(?string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

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

    public function getUsermodified(): ?string
    {
        return $this->usermodified;
    }

    public function setUsermodified(string $usermodified): self
    {
        $this->usermodified = $usermodified;

        return $this;
    }


}
