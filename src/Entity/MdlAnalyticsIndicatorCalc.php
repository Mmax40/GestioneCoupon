<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAnalyticsIndicatorCalc
 *
 * @ORM\Table(name="mdl_analytics_indicator_calc", indexes={@ORM\Index(name="mo_analindicalc_con_ix", columns={"contextid"}), @ORM\Index(name="mo_analindicalc_staendcon_ix", columns={"starttime", "endtime", "contextid"})})
 * @ORM\Entity
 */
class MdlAnalyticsIndicatorCalc
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
     * @ORM\Column(name="starttime", type="bigint", nullable=false)
     */
    private $starttime;

    /**
     * @var int
     *
     * @ORM\Column(name="endtime", type="bigint", nullable=false)
     */
    private $endtime;

    /**
     * @var int
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="sampleorigin", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $sampleorigin = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="sampleid", type="bigint", nullable=false)
     */
    private $sampleid;

    /**
     * @var string
     *
     * @ORM\Column(name="indicator", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $indicator = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

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

    public function getStarttime(): ?string
    {
        return $this->starttime;
    }

    public function setStarttime(string $starttime): self
    {
        $this->starttime = $starttime;

        return $this;
    }

    public function getEndtime(): ?string
    {
        return $this->endtime;
    }

    public function setEndtime(string $endtime): self
    {
        $this->endtime = $endtime;

        return $this;
    }

    public function getContextid(): ?string
    {
        return $this->contextid;
    }

    public function setContextid(string $contextid): self
    {
        $this->contextid = $contextid;

        return $this;
    }

    public function getSampleorigin(): ?string
    {
        return $this->sampleorigin;
    }

    public function setSampleorigin(string $sampleorigin): self
    {
        $this->sampleorigin = $sampleorigin;

        return $this;
    }

    public function getSampleid(): ?string
    {
        return $this->sampleid;
    }

    public function setSampleid(string $sampleid): self
    {
        $this->sampleid = $sampleid;

        return $this;
    }

    public function getIndicator(): ?string
    {
        return $this->indicator;
    }

    public function setIndicator(string $indicator): self
    {
        $this->indicator = $indicator;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

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
