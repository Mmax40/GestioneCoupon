<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCertificate
 *
 * @ORM\Table(name="mdl_certificate")
 * @ORM\Entity
 */
class MdlCertificate
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
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="intro", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $intro = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="introformat", type="smallint", nullable=false)
     */
    private $introformat = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="emailteachers", type="boolean", nullable=false)
     */
    private $emailteachers = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailothers", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $emailothers = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="savecert", type="boolean", nullable=false)
     */
    private $savecert = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="reportcert", type="boolean", nullable=false)
     */
    private $reportcert = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="delivery", type="smallint", nullable=false)
     */
    private $delivery = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="requiredtime", type="bigint", nullable=false)
     */
    private $requiredtime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="certificatetype", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $certificatetype = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="orientation", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $orientation = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="borderstyle", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $borderstyle = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="bordercolor", type="string", length=30, nullable=false, options={"default"="'0'"})
     */
    private $bordercolor = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="printwmark", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $printwmark = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="printdate", type="bigint", nullable=false)
     */
    private $printdate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="datefmt", type="bigint", nullable=false)
     */
    private $datefmt = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="printnumber", type="boolean", nullable=false)
     */
    private $printnumber = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="printgrade", type="bigint", nullable=false)
     */
    private $printgrade = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gradefmt", type="bigint", nullable=false)
     */
    private $gradefmt = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="printoutcome", type="bigint", nullable=false)
     */
    private $printoutcome = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="printhours", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $printhours = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="printteacher", type="bigint", nullable=false)
     */
    private $printteacher = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customtext", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $customtext = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="printsignature", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $printsignature = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="printseal", type="string", length=255, nullable=false, options={"default"="'0'"})
     */
    private $printseal = '\'0\'';

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
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

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(?string $intro): self
    {
        $this->intro = $intro;

        return $this;
    }

    public function getIntroformat(): ?int
    {
        return $this->introformat;
    }

    public function setIntroformat(int $introformat): self
    {
        $this->introformat = $introformat;

        return $this;
    }

    public function getEmailteachers(): ?bool
    {
        return $this->emailteachers;
    }

    public function setEmailteachers(bool $emailteachers): self
    {
        $this->emailteachers = $emailteachers;

        return $this;
    }

    public function getEmailothers(): ?string
    {
        return $this->emailothers;
    }

    public function setEmailothers(?string $emailothers): self
    {
        $this->emailothers = $emailothers;

        return $this;
    }

    public function getSavecert(): ?bool
    {
        return $this->savecert;
    }

    public function setSavecert(bool $savecert): self
    {
        $this->savecert = $savecert;

        return $this;
    }

    public function getReportcert(): ?bool
    {
        return $this->reportcert;
    }

    public function setReportcert(bool $reportcert): self
    {
        $this->reportcert = $reportcert;

        return $this;
    }

    public function getDelivery(): ?int
    {
        return $this->delivery;
    }

    public function setDelivery(int $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getRequiredtime(): ?string
    {
        return $this->requiredtime;
    }

    public function setRequiredtime(string $requiredtime): self
    {
        $this->requiredtime = $requiredtime;

        return $this;
    }

    public function getCertificatetype(): ?string
    {
        return $this->certificatetype;
    }

    public function setCertificatetype(string $certificatetype): self
    {
        $this->certificatetype = $certificatetype;

        return $this;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function setOrientation(string $orientation): self
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function getBorderstyle(): ?string
    {
        return $this->borderstyle;
    }

    public function setBorderstyle(string $borderstyle): self
    {
        $this->borderstyle = $borderstyle;

        return $this;
    }

    public function getBordercolor(): ?string
    {
        return $this->bordercolor;
    }

    public function setBordercolor(string $bordercolor): self
    {
        $this->bordercolor = $bordercolor;

        return $this;
    }

    public function getPrintwmark(): ?string
    {
        return $this->printwmark;
    }

    public function setPrintwmark(string $printwmark): self
    {
        $this->printwmark = $printwmark;

        return $this;
    }

    public function getPrintdate(): ?string
    {
        return $this->printdate;
    }

    public function setPrintdate(string $printdate): self
    {
        $this->printdate = $printdate;

        return $this;
    }

    public function getDatefmt(): ?string
    {
        return $this->datefmt;
    }

    public function setDatefmt(string $datefmt): self
    {
        $this->datefmt = $datefmt;

        return $this;
    }

    public function getPrintnumber(): ?bool
    {
        return $this->printnumber;
    }

    public function setPrintnumber(bool $printnumber): self
    {
        $this->printnumber = $printnumber;

        return $this;
    }

    public function getPrintgrade(): ?string
    {
        return $this->printgrade;
    }

    public function setPrintgrade(string $printgrade): self
    {
        $this->printgrade = $printgrade;

        return $this;
    }

    public function getGradefmt(): ?string
    {
        return $this->gradefmt;
    }

    public function setGradefmt(string $gradefmt): self
    {
        $this->gradefmt = $gradefmt;

        return $this;
    }

    public function getPrintoutcome(): ?string
    {
        return $this->printoutcome;
    }

    public function setPrintoutcome(string $printoutcome): self
    {
        $this->printoutcome = $printoutcome;

        return $this;
    }

    public function getPrinthours(): ?string
    {
        return $this->printhours;
    }

    public function setPrinthours(?string $printhours): self
    {
        $this->printhours = $printhours;

        return $this;
    }

    public function getPrintteacher(): ?string
    {
        return $this->printteacher;
    }

    public function setPrintteacher(string $printteacher): self
    {
        $this->printteacher = $printteacher;

        return $this;
    }

    public function getCustomtext(): ?string
    {
        return $this->customtext;
    }

    public function setCustomtext(?string $customtext): self
    {
        $this->customtext = $customtext;

        return $this;
    }

    public function getPrintsignature(): ?string
    {
        return $this->printsignature;
    }

    public function setPrintsignature(string $printsignature): self
    {
        $this->printsignature = $printsignature;

        return $this;
    }

    public function getPrintseal(): ?string
    {
        return $this->printseal;
    }

    public function setPrintseal(string $printseal): self
    {
        $this->printseal = $printseal;

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


}
