<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChoice
 *
 * @ORM\Table(name="mdl_choice", indexes={@ORM\Index(name="mo_choi_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlChoice
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
     * @ORM\Column(name="publish", type="boolean", nullable=false)
     */
    private $publish = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="showresults", type="boolean", nullable=false)
     */
    private $showresults = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="display", type="smallint", nullable=false)
     */
    private $display = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allowupdate", type="boolean", nullable=false)
     */
    private $allowupdate = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allowmultiple", type="boolean", nullable=false)
     */
    private $allowmultiple = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="showunanswered", type="boolean", nullable=false)
     */
    private $showunanswered = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="includeinactive", type="boolean", nullable=false, options={"default"="1"})
     */
    private $includeinactive = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="limitanswers", type="boolean", nullable=false)
     */
    private $limitanswers = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timeopen", type="bigint", nullable=false)
     */
    private $timeopen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timeclose", type="bigint", nullable=false)
     */
    private $timeclose = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="showpreview", type="boolean", nullable=false)
     */
    private $showpreview = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="completionsubmit", type="boolean", nullable=false)
     */
    private $completionsubmit = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="showavailable", type="boolean", nullable=false)
     */
    private $showavailable = '0';

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

    public function getPublish(): ?bool
    {
        return $this->publish;
    }

    public function setPublish(bool $publish): self
    {
        $this->publish = $publish;

        return $this;
    }

    public function getShowresults(): ?bool
    {
        return $this->showresults;
    }

    public function setShowresults(bool $showresults): self
    {
        $this->showresults = $showresults;

        return $this;
    }

    public function getDisplay(): ?int
    {
        return $this->display;
    }

    public function setDisplay(int $display): self
    {
        $this->display = $display;

        return $this;
    }

    public function getAllowupdate(): ?bool
    {
        return $this->allowupdate;
    }

    public function setAllowupdate(bool $allowupdate): self
    {
        $this->allowupdate = $allowupdate;

        return $this;
    }

    public function getAllowmultiple(): ?bool
    {
        return $this->allowmultiple;
    }

    public function setAllowmultiple(bool $allowmultiple): self
    {
        $this->allowmultiple = $allowmultiple;

        return $this;
    }

    public function getShowunanswered(): ?bool
    {
        return $this->showunanswered;
    }

    public function setShowunanswered(bool $showunanswered): self
    {
        $this->showunanswered = $showunanswered;

        return $this;
    }

    public function getIncludeinactive(): ?bool
    {
        return $this->includeinactive;
    }

    public function setIncludeinactive(bool $includeinactive): self
    {
        $this->includeinactive = $includeinactive;

        return $this;
    }

    public function getLimitanswers(): ?bool
    {
        return $this->limitanswers;
    }

    public function setLimitanswers(bool $limitanswers): self
    {
        $this->limitanswers = $limitanswers;

        return $this;
    }

    public function getTimeopen(): ?string
    {
        return $this->timeopen;
    }

    public function setTimeopen(string $timeopen): self
    {
        $this->timeopen = $timeopen;

        return $this;
    }

    public function getTimeclose(): ?string
    {
        return $this->timeclose;
    }

    public function setTimeclose(string $timeclose): self
    {
        $this->timeclose = $timeclose;

        return $this;
    }

    public function getShowpreview(): ?bool
    {
        return $this->showpreview;
    }

    public function setShowpreview(bool $showpreview): self
    {
        $this->showpreview = $showpreview;

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

    public function getCompletionsubmit(): ?bool
    {
        return $this->completionsubmit;
    }

    public function setCompletionsubmit(bool $completionsubmit): self
    {
        $this->completionsubmit = $completionsubmit;

        return $this;
    }

    public function getShowavailable(): ?bool
    {
        return $this->showavailable;
    }

    public function setShowavailable(bool $showavailable): self
    {
        $this->showavailable = $showavailable;

        return $this;
    }


}
