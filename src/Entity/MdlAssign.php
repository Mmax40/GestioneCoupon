<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssign
 *
 * @ORM\Table(name="mdl_assign", indexes={@ORM\Index(name="mo_assi_cou_ix", columns={"course"}), @ORM\Index(name="mo_assi_tea_ix", columns={"teamsubmissiongroupingid"})})
 * @ORM\Entity
 */
class MdlAssign
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
     * @ORM\Column(name="intro", type="text", length=0, nullable=false)
     */
    private $intro;

    /**
     * @var int
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="alwaysshowdescription", type="boolean", nullable=false)
     */
    private $alwaysshowdescription = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="nosubmissions", type="boolean", nullable=false)
     */
    private $nosubmissions = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="submissiondrafts", type="boolean", nullable=false)
     */
    private $submissiondrafts = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="sendnotifications", type="boolean", nullable=false)
     */
    private $sendnotifications = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="sendlatenotifications", type="boolean", nullable=false)
     */
    private $sendlatenotifications = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="duedate", type="bigint", nullable=false)
     */
    private $duedate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="allowsubmissionsfromdate", type="bigint", nullable=false)
     */
    private $allowsubmissionsfromdate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="grade", type="bigint", nullable=false)
     */
    private $grade = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="requiresubmissionstatement", type="boolean", nullable=false)
     */
    private $requiresubmissionstatement = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="completionsubmit", type="boolean", nullable=false)
     */
    private $completionsubmit = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cutoffdate", type="bigint", nullable=false)
     */
    private $cutoffdate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gradingduedate", type="bigint", nullable=false)
     */
    private $gradingduedate = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="teamsubmission", type="boolean", nullable=false)
     */
    private $teamsubmission = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="requireallteammemberssubmit", type="boolean", nullable=false)
     */
    private $requireallteammemberssubmit = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="teamsubmissiongroupingid", type="bigint", nullable=false)
     */
    private $teamsubmissiongroupingid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="blindmarking", type="boolean", nullable=false)
     */
    private $blindmarking = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="hidegrader", type="boolean", nullable=false)
     */
    private $hidegrader = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="revealidentities", type="boolean", nullable=false)
     */
    private $revealidentities = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="attemptreopenmethod", type="string", length=10, nullable=false, options={"default"="'none'"})
     */
    private $attemptreopenmethod = '\'none\'';

    /**
     * @var int
     *
     * @ORM\Column(name="maxattempts", type="integer", nullable=false, options={"default"="-1"})
     */
    private $maxattempts = -1;

    /**
     * @var bool
     *
     * @ORM\Column(name="markingworkflow", type="boolean", nullable=false)
     */
    private $markingworkflow = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="markingallocation", type="boolean", nullable=false)
     */
    private $markingallocation = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="sendstudentnotifications", type="boolean", nullable=false, options={"default"="1"})
     */
    private $sendstudentnotifications = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="preventsubmissionnotingroup", type="boolean", nullable=false)
     */
    private $preventsubmissionnotingroup = '0';

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

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(string $intro): self
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

    public function getAlwaysshowdescription(): ?bool
    {
        return $this->alwaysshowdescription;
    }

    public function setAlwaysshowdescription(bool $alwaysshowdescription): self
    {
        $this->alwaysshowdescription = $alwaysshowdescription;

        return $this;
    }

    public function getNosubmissions(): ?bool
    {
        return $this->nosubmissions;
    }

    public function setNosubmissions(bool $nosubmissions): self
    {
        $this->nosubmissions = $nosubmissions;

        return $this;
    }

    public function getSubmissiondrafts(): ?bool
    {
        return $this->submissiondrafts;
    }

    public function setSubmissiondrafts(bool $submissiondrafts): self
    {
        $this->submissiondrafts = $submissiondrafts;

        return $this;
    }

    public function getSendnotifications(): ?bool
    {
        return $this->sendnotifications;
    }

    public function setSendnotifications(bool $sendnotifications): self
    {
        $this->sendnotifications = $sendnotifications;

        return $this;
    }

    public function getSendlatenotifications(): ?bool
    {
        return $this->sendlatenotifications;
    }

    public function setSendlatenotifications(bool $sendlatenotifications): self
    {
        $this->sendlatenotifications = $sendlatenotifications;

        return $this;
    }

    public function getDuedate(): ?string
    {
        return $this->duedate;
    }

    public function setDuedate(string $duedate): self
    {
        $this->duedate = $duedate;

        return $this;
    }

    public function getAllowsubmissionsfromdate(): ?string
    {
        return $this->allowsubmissionsfromdate;
    }

    public function setAllowsubmissionsfromdate(string $allowsubmissionsfromdate): self
    {
        $this->allowsubmissionsfromdate = $allowsubmissionsfromdate;

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

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    public function getRequiresubmissionstatement(): ?bool
    {
        return $this->requiresubmissionstatement;
    }

    public function setRequiresubmissionstatement(bool $requiresubmissionstatement): self
    {
        $this->requiresubmissionstatement = $requiresubmissionstatement;

        return $this;
    }

    public function getCompletionsubmit(): ?bool
    {
        return $this->completionsubmit;
    }

    public function setCompletionsubmit(bool $completionsubmit): self
    {
        $this->completionsubmit = $completionsubmit;

        return $this;
    }

    public function getCutoffdate(): ?string
    {
        return $this->cutoffdate;
    }

    public function setCutoffdate(string $cutoffdate): self
    {
        $this->cutoffdate = $cutoffdate;

        return $this;
    }

    public function getGradingduedate(): ?string
    {
        return $this->gradingduedate;
    }

    public function setGradingduedate(string $gradingduedate): self
    {
        $this->gradingduedate = $gradingduedate;

        return $this;
    }

    public function getTeamsubmission(): ?bool
    {
        return $this->teamsubmission;
    }

    public function setTeamsubmission(bool $teamsubmission): self
    {
        $this->teamsubmission = $teamsubmission;

        return $this;
    }

    public function getRequireallteammemberssubmit(): ?bool
    {
        return $this->requireallteammemberssubmit;
    }

    public function setRequireallteammemberssubmit(bool $requireallteammemberssubmit): self
    {
        $this->requireallteammemberssubmit = $requireallteammemberssubmit;

        return $this;
    }

    public function getTeamsubmissiongroupingid(): ?string
    {
        return $this->teamsubmissiongroupingid;
    }

    public function setTeamsubmissiongroupingid(string $teamsubmissiongroupingid): self
    {
        $this->teamsubmissiongroupingid = $teamsubmissiongroupingid;

        return $this;
    }

    public function getBlindmarking(): ?bool
    {
        return $this->blindmarking;
    }

    public function setBlindmarking(bool $blindmarking): self
    {
        $this->blindmarking = $blindmarking;

        return $this;
    }

    public function getHidegrader(): ?bool
    {
        return $this->hidegrader;
    }

    public function setHidegrader(bool $hidegrader): self
    {
        $this->hidegrader = $hidegrader;

        return $this;
    }

    public function getRevealidentities(): ?bool
    {
        return $this->revealidentities;
    }

    public function setRevealidentities(bool $revealidentities): self
    {
        $this->revealidentities = $revealidentities;

        return $this;
    }

    public function getAttemptreopenmethod(): ?string
    {
        return $this->attemptreopenmethod;
    }

    public function setAttemptreopenmethod(string $attemptreopenmethod): self
    {
        $this->attemptreopenmethod = $attemptreopenmethod;

        return $this;
    }

    public function getMaxattempts(): ?int
    {
        return $this->maxattempts;
    }

    public function setMaxattempts(int $maxattempts): self
    {
        $this->maxattempts = $maxattempts;

        return $this;
    }

    public function getMarkingworkflow(): ?bool
    {
        return $this->markingworkflow;
    }

    public function setMarkingworkflow(bool $markingworkflow): self
    {
        $this->markingworkflow = $markingworkflow;

        return $this;
    }

    public function getMarkingallocation(): ?bool
    {
        return $this->markingallocation;
    }

    public function setMarkingallocation(bool $markingallocation): self
    {
        $this->markingallocation = $markingallocation;

        return $this;
    }

    public function getSendstudentnotifications(): ?bool
    {
        return $this->sendstudentnotifications;
    }

    public function setSendstudentnotifications(bool $sendstudentnotifications): self
    {
        $this->sendstudentnotifications = $sendstudentnotifications;

        return $this;
    }

    public function getPreventsubmissionnotingroup(): ?bool
    {
        return $this->preventsubmissionnotingroup;
    }

    public function setPreventsubmissionnotingroup(bool $preventsubmissionnotingroup): self
    {
        $this->preventsubmissionnotingroup = $preventsubmissionnotingroup;

        return $this;
    }


}
