<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCourse
 *
 * @ORM\Table(name="mdl_course", indexes={@ORM\Index(name="mo_cour_sor_ix", columns={"sortorder"}), @ORM\Index(name="mo_cour_cat_ix", columns={"category"}), @ORM\Index(name="mo_cour_idn_ix", columns={"idnumber"}), @ORM\Index(name="mo_cour_sho_ix", columns={"shortname"})})
 * @ORM\Entity
 */
class MdlCourse
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
     * @ORM\Column(name="category", type="bigint", nullable=false)
     */
    private $category = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=254, nullable=false, options={"default"="''"})
     */
    private $fullname = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $shortname = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $idnumber = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $summary = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="summaryformat", type="boolean", nullable=false)
     */
    private $summaryformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=21, nullable=false, options={"default"="'topics'"})
     */
    private $format = '\'topics\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="showgrades", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showgrades = true;

    /**
     * @var int
     *
     * @ORM\Column(name="newsitems", type="integer", nullable=false, options={"default"="1"})
     */
    private $newsitems = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="startdate", type="bigint", nullable=false)
     */
    private $startdate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="enddate", type="bigint", nullable=false)
     */
    private $enddate = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="relativedatesmode", type="boolean", nullable=false)
     */
    private $relativedatesmode = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="marker", type="bigint", nullable=false)
     */
    private $marker = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="maxbytes", type="bigint", nullable=false)
     */
    private $maxbytes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="legacyfiles", type="smallint", nullable=false)
     */
    private $legacyfiles = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="showreports", type="smallint", nullable=false)
     */
    private $showreports = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visible = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="visibleold", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visibleold = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="downloadcontent", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $downloadcontent = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="groupmode", type="smallint", nullable=false)
     */
    private $groupmode = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="groupmodeforce", type="smallint", nullable=false)
     */
    private $groupmodeforce = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="defaultgroupingid", type="bigint", nullable=false)
     */
    private $defaultgroupingid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $lang = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="calendartype", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $calendartype = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $theme = '\'\'';

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
     * @var bool
     *
     * @ORM\Column(name="requested", type="boolean", nullable=false)
     */
    private $requested = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="enablecompletion", type="boolean", nullable=false)
     */
    private $enablecompletion = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="completionnotify", type="boolean", nullable=false)
     */
    private $completionnotify = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cacherev", type="bigint", nullable=false)
     */
    private $cacherev = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="originalcourseid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $originalcourseid = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="showactivitydates", type="boolean", nullable=false)
     */
    private $showactivitydates = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="showcompletionconditions", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $showcompletionconditions = 'NULL';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GestAccount", mappedBy="corsoMoodle")
     */
    private $affiliato;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affiliato = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

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

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getShortname(): ?string
    {
        return $this->shortname;
    }

    public function setShortname(string $shortname): self
    {
        $this->shortname = $shortname;

        return $this;
    }

    public function getIdnumber(): ?string
    {
        return $this->idnumber;
    }

    public function setIdnumber(string $idnumber): self
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getSummaryformat(): ?bool
    {
        return $this->summaryformat;
    }

    public function setSummaryformat(bool $summaryformat): self
    {
        $this->summaryformat = $summaryformat;

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

    public function getShowgrades(): ?bool
    {
        return $this->showgrades;
    }

    public function setShowgrades(bool $showgrades): self
    {
        $this->showgrades = $showgrades;

        return $this;
    }

    public function getNewsitems(): ?int
    {
        return $this->newsitems;
    }

    public function setNewsitems(int $newsitems): self
    {
        $this->newsitems = $newsitems;

        return $this;
    }

    public function getStartdate(): ?string
    {
        return $this->startdate;
    }

    public function setStartdate(string $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getEnddate(): ?string
    {
        return $this->enddate;
    }

    public function setEnddate(string $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getRelativedatesmode(): ?bool
    {
        return $this->relativedatesmode;
    }

    public function setRelativedatesmode(bool $relativedatesmode): self
    {
        $this->relativedatesmode = $relativedatesmode;

        return $this;
    }

    public function getMarker(): ?string
    {
        return $this->marker;
    }

    public function setMarker(string $marker): self
    {
        $this->marker = $marker;

        return $this;
    }

    public function getMaxbytes(): ?string
    {
        return $this->maxbytes;
    }

    public function setMaxbytes(string $maxbytes): self
    {
        $this->maxbytes = $maxbytes;

        return $this;
    }

    public function getLegacyfiles(): ?int
    {
        return $this->legacyfiles;
    }

    public function setLegacyfiles(int $legacyfiles): self
    {
        $this->legacyfiles = $legacyfiles;

        return $this;
    }

    public function getShowreports(): ?int
    {
        return $this->showreports;
    }

    public function setShowreports(int $showreports): self
    {
        $this->showreports = $showreports;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getVisibleold(): ?bool
    {
        return $this->visibleold;
    }

    public function setVisibleold(bool $visibleold): self
    {
        $this->visibleold = $visibleold;

        return $this;
    }

    public function getDownloadcontent(): ?bool
    {
        return $this->downloadcontent;
    }

    public function setDownloadcontent(?bool $downloadcontent): self
    {
        $this->downloadcontent = $downloadcontent;

        return $this;
    }

    public function getGroupmode(): ?int
    {
        return $this->groupmode;
    }

    public function setGroupmode(int $groupmode): self
    {
        $this->groupmode = $groupmode;

        return $this;
    }

    public function getGroupmodeforce(): ?int
    {
        return $this->groupmodeforce;
    }

    public function setGroupmodeforce(int $groupmodeforce): self
    {
        $this->groupmodeforce = $groupmodeforce;

        return $this;
    }

    public function getDefaultgroupingid(): ?string
    {
        return $this->defaultgroupingid;
    }

    public function setDefaultgroupingid(string $defaultgroupingid): self
    {
        $this->defaultgroupingid = $defaultgroupingid;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getCalendartype(): ?string
    {
        return $this->calendartype;
    }

    public function setCalendartype(string $calendartype): self
    {
        $this->calendartype = $calendartype;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

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

    public function getRequested(): ?bool
    {
        return $this->requested;
    }

    public function setRequested(bool $requested): self
    {
        $this->requested = $requested;

        return $this;
    }

    public function getEnablecompletion(): ?bool
    {
        return $this->enablecompletion;
    }

    public function setEnablecompletion(bool $enablecompletion): self
    {
        $this->enablecompletion = $enablecompletion;

        return $this;
    }

    public function getCompletionnotify(): ?bool
    {
        return $this->completionnotify;
    }

    public function setCompletionnotify(bool $completionnotify): self
    {
        $this->completionnotify = $completionnotify;

        return $this;
    }

    public function getCacherev(): ?string
    {
        return $this->cacherev;
    }

    public function setCacherev(string $cacherev): self
    {
        $this->cacherev = $cacherev;

        return $this;
    }

    public function getOriginalcourseid(): ?string
    {
        return $this->originalcourseid;
    }

    public function setOriginalcourseid(?string $originalcourseid): self
    {
        $this->originalcourseid = $originalcourseid;

        return $this;
    }

    public function getShowactivitydates(): ?bool
    {
        return $this->showactivitydates;
    }

    public function setShowactivitydates(bool $showactivitydates): self
    {
        $this->showactivitydates = $showactivitydates;

        return $this;
    }

    public function getShowcompletionconditions(): ?bool
    {
        return $this->showcompletionconditions;
    }

    public function setShowcompletionconditions(?bool $showcompletionconditions): self
    {
        $this->showcompletionconditions = $showcompletionconditions;

        return $this;
    }

    /**
     * @return Collection|GestAccount[]
     */
    public function getAffiliato(): Collection
    {
        return $this->affiliato;
    }

    public function addAffiliato(GestAccount $affiliato): self
    {
        if (!$this->affiliato->contains($affiliato)) {
            $this->affiliato[] = $affiliato;
            $affiliato->addCorsoMoodle($this);
        }

        return $this;
    }

    public function removeAffiliato(GestAccount $affiliato): self
    {
        if ($this->affiliato->removeElement($affiliato)) {
            $affiliato->removeCorsoMoodle($this);
        }

        return $this;
    }

}
