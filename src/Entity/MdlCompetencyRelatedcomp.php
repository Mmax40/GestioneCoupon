<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyRelatedcomp
 *
 * @ORM\Table(name="mdl_competency_relatedcomp")
 * @ORM\Entity
 */
class MdlCompetencyRelatedcomp
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
     * @ORM\Column(name="competencyid", type="bigint", nullable=false)
     */
    private $competencyid;

    /**
     * @var int
     *
     * @ORM\Column(name="relatedcompetencyid", type="bigint", nullable=false)
     */
    private $relatedcompetencyid;

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var int|null
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timemodified = 'NULL';

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

    public function getCompetencyid(): ?string
    {
        return $this->competencyid;
    }

    public function setCompetencyid(string $competencyid): self
    {
        $this->competencyid = $competencyid;

        return $this;
    }

    public function getRelatedcompetencyid(): ?string
    {
        return $this->relatedcompetencyid;
    }

    public function setRelatedcompetencyid(string $relatedcompetencyid): self
    {
        $this->relatedcompetencyid = $relatedcompetencyid;

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

    public function setTimemodified(?string $timemodified): self
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
