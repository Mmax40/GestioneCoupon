<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourseCategories
 *
 * @ORM\Table(name="mdl_course_categories", indexes={@ORM\Index(name="mo_courcate_par_ix", columns={"parent"})})
 * @ORM\Entity
 */
class MdlCourseCategories
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="idnumber", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $idnumber = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=false)
     */
    private $descriptionformat = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="bigint", nullable=false)
     */
    private $parent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="coursecount", type="bigint", nullable=false)
     */
    private $coursecount = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visible = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="visibleold", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visibleold = true;

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="depth", type="bigint", nullable=false)
     */
    private $depth = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $path = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="theme", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $theme = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
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

    public function getIdnumber(): ?string
    {
        return $this->idnumber;
    }

    public function setIdnumber(?string $idnumber): self
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionformat(): ?bool
    {
        return $this->descriptionformat;
    }

    public function setDescriptionformat(bool $descriptionformat): self
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(string $parent): self
    {
        $this->parent = $parent;

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

    public function getCoursecount(): ?string
    {
        return $this->coursecount;
    }

    public function setCoursecount(string $coursecount): self
    {
        $this->coursecount = $coursecount;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getVisibleold(): ?bool
    {
        return $this->visibleold;
    }

    public function setVisibleold(bool $visibleold): self
    {
        $this->visibleold = $visibleold;

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

    public function getDepth(): ?string
    {
        return $this->depth;
    }

    public function setDepth(string $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }


}
