<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAnalyticsModelsLog
 *
 * @ORM\Table(name="mdl_analytics_models_log", indexes={@ORM\Index(name="mo_analmodelog_mod_ix", columns={"modelid"})})
 * @ORM\Entity
 */
class MdlAnalyticsModelsLog
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
     * @ORM\Column(name="version", type="bigint", nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="evaluationmode", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $evaluationmode = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $target = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="indicators", type="text", length=0, nullable=false)
     */
    private $indicators;

    /**
     * @var string|null
     *
     * @ORM\Column(name="timesplitting", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $timesplitting = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="score", type="decimal", precision=10, scale=5, nullable=false, options={"default"="0.00000"})
     */
    private $score = '0.00000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="info", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $info = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="dir", type="text", length=0, nullable=false)
     */
    private $dir;

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var int
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=false)
     */
    private $usermodified;

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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getEvaluationmode(): ?string
    {
        return $this->evaluationmode;
    }

    public function setEvaluationmode(string $evaluationmode): self
    {
        $this->evaluationmode = $evaluationmode;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getIndicators(): ?string
    {
        return $this->indicators;
    }

    public function setIndicators(string $indicators): self
    {
        $this->indicators = $indicators;

        return $this;
    }

    public function getTimesplitting(): ?string
    {
        return $this->timesplitting;
    }

    public function setTimesplitting(?string $timesplitting): self
    {
        $this->timesplitting = $timesplitting;

        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(string $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function getDir(): ?string
    {
        return $this->dir;
    }

    public function setDir(string $dir): self
    {
        $this->dir = $dir;

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

    public function getUsermodified(): ?string
    {
        return $this->usermodified;
    }

    public function setUsermodified(string $usermodified): self
    {
        $this->usermodified = $usermodified;

        return $this;
    }


}
