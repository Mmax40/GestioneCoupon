<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUrl
 *
 * @ORM\Table(name="mdl_url", indexes={@ORM\Index(name="mo_url_cou_ix", columns={"course"})})
 * @ORM\Entity
 */
class MdlUrl
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
     * @var string
     *
     * @ORM\Column(name="externalurl", type="text", length=0, nullable=false)
     */
    private $externalurl;

    /**
     * @var int
     *
     * @ORM\Column(name="display", type="smallint", nullable=false)
     */
    private $display = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="displayoptions", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $displayoptions = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="parameters", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $parameters = 'NULL';

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

    public function getExternalurl(): ?string
    {
        return $this->externalurl;
    }

    public function setExternalurl(string $externalurl): self
    {
        $this->externalurl = $externalurl;

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

    public function getDisplayoptions(): ?string
    {
        return $this->displayoptions;
    }

    public function setDisplayoptions(?string $displayoptions): self
    {
        $this->displayoptions = $displayoptions;

        return $this;
    }

    public function getParameters(): ?string
    {
        return $this->parameters;
    }

    public function setParameters(?string $parameters): self
    {
        $this->parameters = $parameters;

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
