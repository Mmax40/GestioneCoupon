<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCompetencyPlan
 *
 * @ORM\Table(name="mdl_competency_plan", indexes={@ORM\Index(name="mo_compplan_stadue_ix", columns={"status", "duedate"}), @ORM\Index(name="mo_compplan_usesta_ix", columns={"userid", "status"}), @ORM\Index(name="mo_compplan_tem_ix", columns={"templateid"})})
 * @ORM\Entity
 */
class MdlCompetencyPlan
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

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
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="templateid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $templateid = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="origtemplateid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $origtemplateid = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duedate", type="bigint", nullable=true)
     */
    private $duedate = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="reviewerid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $reviewerid = 'NULL';

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
    private $timemodified = '0';

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getTemplateid(): ?string
    {
        return $this->templateid;
    }

    public function setTemplateid(?string $templateid): self
    {
        $this->templateid = $templateid;

        return $this;
    }

    public function getOrigtemplateid(): ?string
    {
        return $this->origtemplateid;
    }

    public function setOrigtemplateid(?string $origtemplateid): self
    {
        $this->origtemplateid = $origtemplateid;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDuedate(): ?string
    {
        return $this->duedate;
    }

    public function setDuedate(?string $duedate): self
    {
        $this->duedate = $duedate;

        return $this;
    }

    public function getReviewerid(): ?string
    {
        return $this->reviewerid;
    }

    public function setReviewerid(?string $reviewerid): self
    {
        $this->reviewerid = $reviewerid;

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
