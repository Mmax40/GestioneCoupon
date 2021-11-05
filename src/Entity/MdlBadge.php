<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadge
 *
 * @ORM\Table(name="mdl_badge", indexes={@ORM\Index(name="mo_badg_use2_ix", columns={"usercreated"}), @ORM\Index(name="mo_badg_typ_ix", columns={"type"}), @ORM\Index(name="mo_badg_cou_ix", columns={"courseid"}), @ORM\Index(name="mo_badg_use_ix", columns={"usermodified"})})
 * @ORM\Entity
 */
class MdlBadge
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
     * @ORM\Column(name="description", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="usercreated", type="bigint", nullable=false)
     */
    private $usercreated;

    /**
     * @var int
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified;

    /**
     * @var string
     *
     * @ORM\Column(name="issuername", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $issuername = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="issuerurl", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $issuerurl = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="issuercontact", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $issuercontact = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="expiredate", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $expiredate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="expireperiod", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $expireperiod = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false, options={"default"="1"})
     */
    private $type = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $courseid = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=0, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="messagesubject", type="text", length=0, nullable=false)
     */
    private $messagesubject;

    /**
     * @var bool
     *
     * @ORM\Column(name="attachment", type="boolean", nullable=false, options={"default"="1"})
     */
    private $attachment = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="notification", type="boolean", nullable=false, options={"default"="1"})
     */
    private $notification = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nextcron", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $nextcron = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $version = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $language = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageauthorname", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $imageauthorname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageauthoremail", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $imageauthoremail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageauthorurl", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $imageauthorurl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagecaption", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $imagecaption = 'NULL';

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

    public function getUsercreated(): ?string
    {
        return $this->usercreated;
    }

    public function setUsercreated(string $usercreated): self
    {
        $this->usercreated = $usercreated;

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

    public function getIssuername(): ?string
    {
        return $this->issuername;
    }

    public function setIssuername(string $issuername): self
    {
        $this->issuername = $issuername;

        return $this;
    }

    public function getIssuerurl(): ?string
    {
        return $this->issuerurl;
    }

    public function setIssuerurl(string $issuerurl): self
    {
        $this->issuerurl = $issuerurl;

        return $this;
    }

    public function getIssuercontact(): ?string
    {
        return $this->issuercontact;
    }

    public function setIssuercontact(?string $issuercontact): self
    {
        $this->issuercontact = $issuercontact;

        return $this;
    }

    public function getExpiredate(): ?string
    {
        return $this->expiredate;
    }

    public function setExpiredate(?string $expiredate): self
    {
        $this->expiredate = $expiredate;

        return $this;
    }

    public function getExpireperiod(): ?string
    {
        return $this->expireperiod;
    }

    public function setExpireperiod(?string $expireperiod): self
    {
        $this->expireperiod = $expireperiod;

        return $this;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCourseid(): ?string
    {
        return $this->courseid;
    }

    public function setCourseid(?string $courseid): self
    {
        $this->courseid = $courseid;

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

    public function getMessagesubject(): ?string
    {
        return $this->messagesubject;
    }

    public function setMessagesubject(string $messagesubject): self
    {
        $this->messagesubject = $messagesubject;

        return $this;
    }

    public function getAttachment(): ?bool
    {
        return $this->attachment;
    }

    public function setAttachment(bool $attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }

    public function getNotification(): ?bool
    {
        return $this->notification;
    }

    public function setNotification(bool $notification): self
    {
        $this->notification = $notification;

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

    public function getNextcron(): ?string
    {
        return $this->nextcron;
    }

    public function setNextcron(?string $nextcron): self
    {
        $this->nextcron = $nextcron;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getImageauthorname(): ?string
    {
        return $this->imageauthorname;
    }

    public function setImageauthorname(?string $imageauthorname): self
    {
        $this->imageauthorname = $imageauthorname;

        return $this;
    }

    public function getImageauthoremail(): ?string
    {
        return $this->imageauthoremail;
    }

    public function setImageauthoremail(?string $imageauthoremail): self
    {
        $this->imageauthoremail = $imageauthoremail;

        return $this;
    }

    public function getImageauthorurl(): ?string
    {
        return $this->imageauthorurl;
    }

    public function setImageauthorurl(?string $imageauthorurl): self
    {
        $this->imageauthorurl = $imageauthorurl;

        return $this;
    }

    public function getImagecaption(): ?string
    {
        return $this->imagecaption;
    }

    public function setImagecaption(?string $imagecaption): self
    {
        $this->imagecaption = $imagecaption;

        return $this;
    }


}
