<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockCoupon
 *
 * @ORM\Table(name="mdl_block_coupon", uniqueConstraints={@ORM\UniqueConstraint(name="mo_bloccoup_sub_uix", columns={"submission_code"})}, indexes={@ORM\Index(name="mo_bloccoup_log_ix", columns={"logoid"}), @ORM\Index(name="mo_bloccoup_cla_ix", columns={"claimed"}), @ORM\Index(name="mo_bloccoup_use_ix", columns={"userid"}), @ORM\Index(name="mo_bloccoup_bat_ix", columns={"batchid"}), @ORM\Index(name="mo_bloccoup_own_ix", columns={"ownerid"})})
 * @ORM\Entity
 */
class MdlBlockCoupon
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
     * @var int|null
     *
     * @ORM\Column(name="userid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $userid = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ownerid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $ownerid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="for_user_email", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $forUserEmail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="for_user_name", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $forUserName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="for_user_gender", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $forUserGender = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="enrolperiod", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $enrolperiod = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="senddate", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $senddate = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="issend", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $issend = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="redirect_url", type="string", length=256, nullable=true, options={"default"="NULL"})
     */
    private $redirectUrl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_body", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $emailBody = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="submission_code", type="string", length=64, nullable=false, options={"default"="''"})
     */
    private $submissionCode = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="logoid", type="bigint", nullable=false)
     */
    private $logoid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="typ", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $typ = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="claimed", type="boolean", nullable=false)
     */
    private $claimed = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="renderqrcode", type="boolean", nullable=false, options={"default"="1"})
     */
    private $renderqrcode = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="roleid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $roleid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="batchid", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $batchid = 'NULL';

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
     * @var int|null
     *
     * @ORM\Column(name="timeexpired", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timeexpired = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timeclaimed", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timeclaimed = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(?string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getOwnerid(): ?string
    {
        return $this->ownerid;
    }

    public function setOwnerid(?string $ownerid): self
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    public function getForUserEmail(): ?string
    {
        return $this->forUserEmail;
    }

    public function setForUserEmail(?string $forUserEmail): self
    {
        $this->forUserEmail = $forUserEmail;

        return $this;
    }

    public function getForUserName(): ?string
    {
        return $this->forUserName;
    }

    public function setForUserName(?string $forUserName): self
    {
        $this->forUserName = $forUserName;

        return $this;
    }

    public function getForUserGender(): ?string
    {
        return $this->forUserGender;
    }

    public function setForUserGender(?string $forUserGender): self
    {
        $this->forUserGender = $forUserGender;

        return $this;
    }

    public function getEnrolperiod(): ?string
    {
        return $this->enrolperiod;
    }

    public function setEnrolperiod(?string $enrolperiod): self
    {
        $this->enrolperiod = $enrolperiod;

        return $this;
    }

    public function getSenddate(): ?string
    {
        return $this->senddate;
    }

    public function setSenddate(?string $senddate): self
    {
        $this->senddate = $senddate;

        return $this;
    }

    public function getIssend(): ?bool
    {
        return $this->issend;
    }

    public function setIssend(?bool $issend): self
    {
        $this->issend = $issend;

        return $this;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(?string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    public function getEmailBody(): ?string
    {
        return $this->emailBody;
    }

    public function setEmailBody(?string $emailBody): self
    {
        $this->emailBody = $emailBody;

        return $this;
    }

    public function getSubmissionCode(): ?string
    {
        return $this->submissionCode;
    }

    public function setSubmissionCode(string $submissionCode): self
    {
        $this->submissionCode = $submissionCode;

        return $this;
    }

    public function getLogoid(): ?string
    {
        return $this->logoid;
    }

    public function setLogoid(string $logoid): self
    {
        $this->logoid = $logoid;

        return $this;
    }

    public function getTyp(): ?string
    {
        return $this->typ;
    }

    public function setTyp(?string $typ): self
    {
        $this->typ = $typ;

        return $this;
    }

    public function getClaimed(): ?bool
    {
        return $this->claimed;
    }

    public function setClaimed(bool $claimed): self
    {
        $this->claimed = $claimed;

        return $this;
    }

    public function getRenderqrcode(): ?bool
    {
        return $this->renderqrcode;
    }

    public function setRenderqrcode(bool $renderqrcode): self
    {
        $this->renderqrcode = $renderqrcode;

        return $this;
    }

    public function getRoleid(): ?string
    {
        return $this->roleid;
    }

    public function setRoleid(?string $roleid): self
    {
        $this->roleid = $roleid;

        return $this;
    }

    public function getBatchid(): ?string
    {
        return $this->batchid;
    }

    public function setBatchid(?string $batchid): self
    {
        $this->batchid = $batchid;

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

    public function getTimeexpired(): ?string
    {
        return $this->timeexpired;
    }

    public function setTimeexpired(?string $timeexpired): self
    {
        $this->timeexpired = $timeexpired;

        return $this;
    }

    public function getTimeclaimed(): ?string
    {
        return $this->timeclaimed;
    }

    public function setTimeclaimed(?string $timeclaimed): self
    {
        $this->timeclaimed = $timeclaimed;

        return $this;
    }


}
