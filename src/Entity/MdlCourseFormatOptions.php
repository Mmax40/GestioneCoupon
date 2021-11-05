<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseFormatOptions
 *
 * @ORM\Table(name="mdl_course_format_options", uniqueConstraints={@ORM\UniqueConstraint(name="mo_courformopti_couforsecn_uix", columns={"courseid", "format", "sectionid", "name"})}, indexes={@ORM\Index(name="mo_courformopti_cou_ix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlCourseFormatOptions
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
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=21, nullable=false, options={"default"="''"})
     */
    private $format = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="sectionid", type="bigint", nullable=false)
     */
    private $sectionid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

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

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getSectionid(): ?string
    {
        return $this->sectionid;
    }

    public function setSectionid(string $sectionid): self
    {
        $this->sectionid = $sectionid;

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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
