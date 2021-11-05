<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockInstances
 *
 * @ORM\Table(name="mdl_block_instances", indexes={@ORM\Index(name="mo_blocinst_parshopagsub_ix", columns={"parentcontextid", "showinsubcontexts", "pagetypepattern", "subpagepattern"}), @ORM\Index(name="mo_blocinst_tim_ix", columns={"timemodified"}), @ORM\Index(name="mo_blocinst_par_ix", columns={"parentcontextid"})})
 * @ORM\Entity
 */
class MdlBlockInstances
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
     * @ORM\Column(name="blockname", type="string", length=40, nullable=false, options={"default"="''"})
     */
    private $blockname = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="parentcontextid", type="bigint", nullable=false)
     */
    private $parentcontextid;

    /**
     * @var int
     *
     * @ORM\Column(name="showinsubcontexts", type="smallint", nullable=false)
     */
    private $showinsubcontexts;

    /**
     * @var int
     *
     * @ORM\Column(name="requiredbytheme", type="smallint", nullable=false)
     */
    private $requiredbytheme = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pagetypepattern", type="string", length=64, nullable=false, options={"default"="''"})
     */
    private $pagetypepattern = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subpagepattern", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $subpagepattern = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="defaultregion", type="string", length=16, nullable=false, options={"default"="''"})
     */
    private $defaultregion = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="defaultweight", type="bigint", nullable=false)
     */
    private $defaultweight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="configdata", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $configdata = 'NULL';

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBlockname(): ?string
    {
        return $this->blockname;
    }

    public function setBlockname(string $blockname): self
    {
        $this->blockname = $blockname;

        return $this;
    }

    public function getParentcontextid(): ?string
    {
        return $this->parentcontextid;
    }

    public function setParentcontextid(string $parentcontextid): self
    {
        $this->parentcontextid = $parentcontextid;

        return $this;
    }

    public function getShowinsubcontexts(): ?int
    {
        return $this->showinsubcontexts;
    }

    public function setShowinsubcontexts(int $showinsubcontexts): self
    {
        $this->showinsubcontexts = $showinsubcontexts;

        return $this;
    }

    public function getRequiredbytheme(): ?int
    {
        return $this->requiredbytheme;
    }

    public function setRequiredbytheme(int $requiredbytheme): self
    {
        $this->requiredbytheme = $requiredbytheme;

        return $this;
    }

    public function getPagetypepattern(): ?string
    {
        return $this->pagetypepattern;
    }

    public function setPagetypepattern(string $pagetypepattern): self
    {
        $this->pagetypepattern = $pagetypepattern;

        return $this;
    }

    public function getSubpagepattern(): ?string
    {
        return $this->subpagepattern;
    }

    public function setSubpagepattern(?string $subpagepattern): self
    {
        $this->subpagepattern = $subpagepattern;

        return $this;
    }

    public function getDefaultregion(): ?string
    {
        return $this->defaultregion;
    }

    public function setDefaultregion(string $defaultregion): self
    {
        $this->defaultregion = $defaultregion;

        return $this;
    }

    public function getDefaultweight(): ?string
    {
        return $this->defaultweight;
    }

    public function setDefaultweight(string $defaultweight): self
    {
        $this->defaultweight = $defaultweight;

        return $this;
    }

    public function getConfigdata(): ?string
    {
        return $this->configdata;
    }

    public function setConfigdata(?string $configdata): self
    {
        $this->configdata = $configdata;

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
