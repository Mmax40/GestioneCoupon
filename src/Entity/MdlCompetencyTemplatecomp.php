<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyTemplatecomp
 *
 * @ORM\Table(name="mdl_competency_templatecomp", indexes={@ORM\Index(name="mo_comptemp_tem_ix", columns={"templateid"}), @ORM\Index(name="mo_comptemp_com_ix", columns={"competencyid"})})
 * @ORM\Entity
 */
class MdlCompetencyTemplatecomp
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
     * @ORM\Column(name="templateid", type="bigint", nullable=false)
     */
    private $templateid;

    /**
     * @var int
     *
     * @ORM\Column(name="competencyid", type="bigint", nullable=false)
     */
    private $competencyid;

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $sortorder = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTemplateid(): ?string
    {
        return $this->templateid;
    }

    public function setTemplateid(string $templateid): self
    {
        $this->templateid = $templateid;

        return $this;
    }

    public function getCompetencyid(): ?string
    {
        return $this->competencyid;
    }

    public function setCompetencyid(string $competencyid): self
    {
        $this->competencyid = $competencyid;

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

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(?string $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }


}
