<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBackupControllers
 *
 * @ORM\Table(name="mdl_backup_controllers", uniqueConstraints={@ORM\UniqueConstraint(name="mo_backcont_bac_uix", columns={"backupid"})}, indexes={@ORM\Index(name="mo_backcont_useite_ix", columns={"userid", "itemid"}), @ORM\Index(name="mo_backcont_typite_ix", columns={"type", "itemid"}), @ORM\Index(name="mo_backcont_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlBackupControllers
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
     * @ORM\Column(name="backupid", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $backupid = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=20, nullable=false, options={"default"="'backup'"})
     */
    private $operation = '\'backup\'';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $type = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $format = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="interactive", type="smallint", nullable=false)
     */
    private $interactive;

    /**
     * @var int
     *
     * @ORM\Column(name="purpose", type="smallint", nullable=false)
     */
    private $purpose;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="execution", type="smallint", nullable=false)
     */
    private $execution;

    /**
     * @var int
     *
     * @ORM\Column(name="executiontime", type="bigint", nullable=false)
     */
    private $executiontime;

    /**
     * @var string
     *
     * @ORM\Column(name="checksum", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $checksum = '\'\'';

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
     * @var string
     *
     * @ORM\Column(name="progress", type="decimal", precision=15, scale=14, nullable=false, options={"default"="0.00000000000000"})
     */
    private $progress = '0.00000000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="text", length=0, nullable=false)
     */
    private $controller;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBackupid(): ?string
    {
        return $this->backupid;
    }

    public function setBackupid(string $backupid): self
    {
        $this->backupid = $backupid;

        return $this;
    }

    public function getOperation(): ?string
    {
        return $this->operation;
    }

    public function setOperation(string $operation): self
    {
        $this->operation = $operation;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getItemid(): ?string
    {
        return $this->itemid;
    }

    public function setItemid(string $itemid): self
    {
        $this->itemid = $itemid;

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

    public function getInteractive(): ?int
    {
        return $this->interactive;
    }

    public function setInteractive(int $interactive): self
    {
        $this->interactive = $interactive;

        return $this;
    }

    public function getPurpose(): ?int
    {
        return $this->purpose;
    }

    public function setPurpose(int $purpose): self
    {
        $this->purpose = $purpose;

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getExecution(): ?int
    {
        return $this->execution;
    }

    public function setExecution(int $execution): self
    {
        $this->execution = $execution;

        return $this;
    }

    public function getExecutiontime(): ?string
    {
        return $this->executiontime;
    }

    public function setExecutiontime(string $executiontime): self
    {
        $this->executiontime = $executiontime;

        return $this;
    }

    public function getChecksum(): ?string
    {
        return $this->checksum;
    }

    public function setChecksum(string $checksum): self
    {
        $this->checksum = $checksum;

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

    public function getProgress(): ?string
    {
        return $this->progress;
    }

    public function setProgress(string $progress): self
    {
        $this->progress = $progress;

        return $this;
    }

    public function getController(): ?string
    {
        return $this->controller;
    }

    public function setController(string $controller): self
    {
        $this->controller = $controller;

        return $this;
    }


}
