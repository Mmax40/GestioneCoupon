<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBook
 *
 * @ORM\Table(name="mdl_book")
 * @ORM\Entity
 */
class MdlBook
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
     * @var int
     *
     * @ORM\Column(name="numbering", type="smallint", nullable=false)
     */
    private $numbering = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="navstyle", type="smallint", nullable=false, options={"default"="1"})
     */
    private $navstyle = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="customtitles", type="boolean", nullable=false)
     */
    private $customtitles = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="revision", type="bigint", nullable=false)
     */
    private $revision = '0';

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

    public function getNumbering(): ?int
    {
        return $this->numbering;
    }

    public function setNumbering(int $numbering): self
    {
        $this->numbering = $numbering;

        return $this;
    }

    public function getNavstyle(): ?int
    {
        return $this->navstyle;
    }

    public function setNavstyle(int $navstyle): self
    {
        $this->navstyle = $navstyle;

        return $this;
    }

    public function getCustomtitles(): ?bool
    {
        return $this->customtitles;
    }

    public function setCustomtitles(bool $customtitles): self
    {
        $this->customtitles = $customtitles;

        return $this;
    }

    public function getRevision(): ?string
    {
        return $this->revision;
    }

    public function setRevision(string $revision): self
    {
        $this->revision = $revision;

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
