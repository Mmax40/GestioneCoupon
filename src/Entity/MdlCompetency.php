<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetency
 *
 * @ORM\Table(name="mdl_competency", uniqueConstraints={@ORM\UniqueConstraint(name="mo_comp_comidn_uix", columns={"competencyframeworkid", "idnumber"})}, indexes={@ORM\Index(name="mo_comp_rul_ix", columns={"ruleoutcome"})})
 * @ORM\Entity
 */
class MdlCompetency
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
     * @var string|null
     *
     * @ORM\Column(name="idnumber", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $idnumber = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="competencyframeworkid", type="bigint", nullable=false)
     */
    private $competencyframeworkid;

    /**
     * @var int
     *
     * @ORM\Column(name="parentid", type="bigint", nullable=false)
     */
    private $parentid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $path = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruletype", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $ruletype = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="ruleoutcome", type="boolean", nullable=false)
     */
    private $ruleoutcome = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruleconfig", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $ruleconfig = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="scaleid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $scaleid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="scaleconfiguration", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $scaleconfiguration = 'NULL';

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

    public function getIdnumber(): ?string
    {
        return $this->idnumber;
    }

    public function setIdnumber(?string $idnumber): self
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    public function getCompetencyframeworkid(): ?string
    {
        return $this->competencyframeworkid;
    }

    public function setCompetencyframeworkid(string $competencyframeworkid): self
    {
        $this->competencyframeworkid = $competencyframeworkid;

        return $this;
    }

    public function getParentid(): ?string
    {
        return $this->parentid;
    }

    public function setParentid(string $parentid): self
    {
        $this->parentid = $parentid;

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

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(string $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getRuletype(): ?string
    {
        return $this->ruletype;
    }

    public function setRuletype(?string $ruletype): self
    {
        $this->ruletype = $ruletype;

        return $this;
    }

    public function getRuleoutcome(): ?bool
    {
        return $this->ruleoutcome;
    }

    public function setRuleoutcome(bool $ruleoutcome): self
    {
        $this->ruleoutcome = $ruleoutcome;

        return $this;
    }

    public function getRuleconfig(): ?string
    {
        return $this->ruleconfig;
    }

    public function setRuleconfig(?string $ruleconfig): self
    {
        $this->ruleconfig = $ruleconfig;

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

    public function setScaleconfiguration(?string $scaleconfiguration): self
    {
        $this->scaleconfiguration = $scaleconfiguration;

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
