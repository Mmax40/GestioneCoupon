<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyFramework
 *
 * @ORM\Table(name="mdl_competency_framework", uniqueConstraints={@ORM\UniqueConstraint(name="mo_compfram_idn_uix", columns={"idnumber"})})
 * @ORM\Entity
 */
class MdlCompetencyFramework
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
     * @var string|null
     *
     * @ORM\Column(name="shortname", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $shortname = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

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
     * @var int
     *
     * @ORM\Column(name="descriptionformat", type="smallint", nullable=false)
     */
    private $descriptionformat = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="scaleid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $scaleid = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="scaleconfiguration", type="text", length=0, nullable=false)
     */
    private $scaleconfiguration;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visible = true;

    /**
     * @var string
     *
     * @ORM\Column(name="taxonomies", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $taxonomies = '\'\'';

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
     * @var int|null
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $usermodified = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getShortname(): ?string
    {
        return $this->shortname;
    }

    public function setShortname(?string $shortname): self
    {
        $this->shortname = $shortname;

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

    public function getDescriptionformat(): ?int
    {
        return $this->descriptionformat;
    }

    public function setDescriptionformat(int $descriptionformat): self
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    public function getScaleid(): ?string
    {
        return $this->scaleid;
    }

    public function setScaleid(?string $scaleid): self
    {
        $this->scaleid = $scaleid;

        return $this;
    }

    public function getScaleconfiguration(): ?string
    {
        return $this->scaleconfiguration;
    }

    public function setScaleconfiguration(string $scaleconfiguration): self
    {
        $this->scaleconfiguration = $scaleconfiguration;

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

    public function getTaxonomies(): ?string
    {
        return $this->taxonomies;
    }

    public function setTaxonomies(string $taxonomies): self
    {
        $this->taxonomies = $taxonomies;

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

    public function setUsermodified(?string $usermodified): self
    {
        $this->usermodified = $usermodified;

        return $this;
    }


}
