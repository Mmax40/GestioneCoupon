<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyTemplatecohort
 *
 * @ORM\Table(name="mdl_competency_templatecohort", uniqueConstraints={@ORM\UniqueConstraint(name="mo_comptemp_temcoh_uix", columns={"templateid", "cohortid"})}, indexes={@ORM\Index(name="mo_comptemp_tem2_ix", columns={"templateid"})})
 * @ORM\Entity
 */
class MdlCompetencyTemplatecohort
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
     * @ORM\Column(name="cohortid", type="bigint", nullable=false)
     */
    private $cohortid;

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

    public function getCohortid(): ?string
    {
        return $this->cohortid;
    }

    public function setCohortid(string $cohortid): self
    {
        $this->cohortid = $cohortid;

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


}
