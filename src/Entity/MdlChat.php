<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChat
 *
 * @ORM\Table(name="mdl_chat", indexes={@ORM\Index(name="mo_chat_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlChat
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
     * @var int
     *
     * @ORM\Column(name="keepdays", type="bigint", nullable=false)
     */
    private $keepdays = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="studentlogs", type="smallint", nullable=false)
     */
    private $studentlogs = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="chattime", type="bigint", nullable=false)
     */
    private $chattime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="schedule", type="smallint", nullable=false)
     */
    private $schedule = '0';

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

    public function getKeepdays(): ?string
    {
        return $this->keepdays;
    }

    public function setKeepdays(string $keepdays): self
    {
        $this->keepdays = $keepdays;

        return $this;
    }

    public function getStudentlogs(): ?int
    {
        return $this->studentlogs;
    }

    public function setStudentlogs(int $studentlogs): self
    {
        $this->studentlogs = $studentlogs;

        return $this;
    }

    public function getChattime(): ?string
    {
        return $this->chattime;
    }

    public function setChattime(string $chattime): self
    {
        $this->chattime = $chattime;

        return $this;
    }

    public function getSchedule(): ?int
    {
        return $this->schedule;
    }

    public function setSchedule(int $schedule): self
    {
        $this->schedule = $schedule;

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
