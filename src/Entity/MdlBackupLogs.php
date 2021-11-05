<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBackupLogs
 *
 * @ORM\Table(name="mdl_backup_logs", uniqueConstraints={@ORM\UniqueConstraint(name="mo_backlogs_bacid_uix", columns={"backupid", "id"})}, indexes={@ORM\Index(name="mo_backlogs_bac_ix", columns={"backupid"})})
 * @ORM\Entity
 */
class MdlBackupLogs
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
     * @var int
     *
     * @ORM\Column(name="loglevel", type="smallint", nullable=false)
     */
    private $loglevel;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=0, nullable=false)
     */
    private $message;

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

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

    public function getLoglevel(): ?int
    {
        return $this->loglevel;
    }

    public function setLoglevel(int $loglevel): self
    {
        $this->loglevel = $loglevel;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

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


}
