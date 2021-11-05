<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAnalyticsModels
 *
 * @ORM\Table(name="mdl_analytics_models", indexes={@ORM\Index(name="mo_analmode_enatra_ix", columns={"enabled", "trained"})})
 * @ORM\Entity
 */
class MdlAnalyticsModels
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
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="trained", type="boolean", nullable=false)
     */
    private $trained = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=1333, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

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
     * @var string|null
     *
     * @ORM\Column(name="predictionsprocessor", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $predictionsprocessor = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="version", type="bigint", nullable=false)
     */
    private $version;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contextids", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $contextids = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timecreated = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

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

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getTrained(): ?bool
    {
        return $this->trained;
    }

    public function setTrained(bool $trained): self
    {
        $this->trained = $trained;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getPredictionsprocessor(): ?string
    {
        return $this->predictionsprocessor;
    }

    public function setPredictionsprocessor(?string $predictionsprocessor): self
    {
        $this->predictionsprocessor = $predictionsprocessor;

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

    public function getContextids(): ?string
    {
        return $this->contextids;
    }

    public function setContextids(?string $contextids): self
    {
        $this->contextids = $contextids;

        return $this;
    }

    public function getTimecreated(): ?string
    {
        return $this->timecreated;
    }

    public function setTimecreated(?string $timecreated): self
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
