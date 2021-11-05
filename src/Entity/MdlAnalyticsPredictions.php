<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAnalyticsPredictions
 *
 * @ORM\Table(name="mdl_analytics_predictions", indexes={@ORM\Index(name="mo_analpred_con_ix", columns={"contextid"}), @ORM\Index(name="mo_analpred_modcon_ix", columns={"modelid", "contextid"}), @ORM\Index(name="mo_analpred_mod_ix", columns={"modelid"})})
 * @ORM\Entity
 */
class MdlAnalyticsPredictions
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
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var int
     *
     * @ORM\Column(name="sampleid", type="bigint", nullable=false)
     */
    private $sampleid;

    /**
     * @var int
     *
     * @ORM\Column(name="rangeindex", type="integer", nullable=false)
     */
    private $rangeindex;

    /**
     * @var string
     *
     * @ORM\Column(name="prediction", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prediction;

    /**
     * @var string
     *
     * @ORM\Column(name="predictionscore", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $predictionscore;

    /**
     * @var string
     *
     * @ORM\Column(name="calculations", type="text", length=0, nullable=false)
     */
    private $calculations;

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timestart", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timestart = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timeend", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timeend = 'NULL';

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

    public function getContextid(): ?string
    {
        return $this->contextid;
    }

    public function setContextid(string $contextid): self
    {
        $this->contextid = $contextid;

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

    public function getRangeindex(): ?int
    {
        return $this->rangeindex;
    }

    public function setRangeindex(int $rangeindex): self
    {
        $this->rangeindex = $rangeindex;

        return $this;
    }

    public function getPrediction(): ?string
    {
        return $this->prediction;
    }

    public function setPrediction(string $prediction): self
    {
        $this->prediction = $prediction;

        return $this;
    }

    public function getPredictionscore(): ?string
    {
        return $this->predictionscore;
    }

    public function setPredictionscore(string $predictionscore): self
    {
        $this->predictionscore = $predictionscore;

        return $this;
    }

    public function getCalculations(): ?string
    {
        return $this->calculations;
    }

    public function setCalculations(string $calculations): self
    {
        $this->calculations = $calculations;

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

    public function getTimestart(): ?string
    {
        return $this->timestart;
    }

    public function setTimestart(?string $timestart): self
    {
        $this->timestart = $timestart;

        return $this;
    }

    public function getTimeend(): ?string
    {
        return $this->timeend;
    }

    public function setTimeend(?string $timeend): self
    {
        $this->timeend = $timeend;

        return $this;
    }


}
