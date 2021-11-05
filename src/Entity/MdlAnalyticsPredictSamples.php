<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAnalyticsPredictSamples
 *
 * @ORM\Table(name="mdl_analytics_predict_samples", indexes={@ORM\Index(name="mo_analpredsamp_modanatimra_ix", columns={"modelid", "analysableid", "timesplitting", "rangeindex"}), @ORM\Index(name="mo_analpredsamp_mod_ix", columns={"modelid"})})
 * @ORM\Entity
 */
class MdlAnalyticsPredictSamples
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
     * @ORM\Column(name="modelid", type="bigint", nullable=false)
     */
    private $modelid;

    /**
     * @var int
     *
     * @ORM\Column(name="analysableid", type="bigint", nullable=false)
     */
    private $analysableid;

    /**
     * @var string
     *
     * @ORM\Column(name="timesplitting", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $timesplitting = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="rangeindex", type="bigint", nullable=false)
     */
    private $rangeindex;

    /**
     * @var string
     *
     * @ORM\Column(name="sampleids", type="text", length=0, nullable=false)
     */
    private $sampleids;

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

    public function getModelid(): ?string
    {
        return $this->modelid;
    }

    public function setModelid(string $modelid): self
    {
        $this->modelid = $modelid;

        return $this;
    }

    public function getAnalysableid(): ?string
    {
        return $this->analysableid;
    }

    public function setAnalysableid(string $analysableid): self
    {
        $this->analysableid = $analysableid;

        return $this;
    }

    public function getTimesplitting(): ?string
    {
        return $this->timesplitting;
    }

    public function setTimesplitting(string $timesplitting): self
    {
        $this->timesplitting = $timesplitting;

        return $this;
    }

    public function getRangeindex(): ?string
    {
        return $this->rangeindex;
    }

    public function setRangeindex(string $rangeindex): self
    {
        $this->rangeindex = $rangeindex;

        return $this;
    }

    public function getSampleids(): ?string
    {
        return $this->sampleids;
    }

    public function setSampleids(string $sampleids): self
    {
        $this->sampleids = $sampleids;

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
