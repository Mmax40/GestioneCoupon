<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAnalyticsUsedAnalysables
 *
 * @ORM\Table(name="mdl_analytics_used_analysables", indexes={@ORM\Index(name="mo_analusedanal_mod_ix", columns={"modelid"}), @ORM\Index(name="mo_analusedanal_modact_ix", columns={"modelid", "action"}), @ORM\Index(name="mo_analusedanal_ana_ix", columns={"analysableid"})})
 * @ORM\Entity
 */
class MdlAnalyticsUsedAnalysables
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
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $action = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="analysableid", type="bigint", nullable=false)
     */
    private $analysableid;

    /**
     * @var int
     *
     * @ORM\Column(name="firstanalysis", type="bigint", nullable=false)
     */
    private $firstanalysis;

    /**
     * @var int
     *
     * @ORM\Column(name="timeanalysed", type="bigint", nullable=false)
     */
    private $timeanalysed;

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

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

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

    public function getFirstanalysis(): ?string
    {
        return $this->firstanalysis;
    }

    public function setFirstanalysis(string $firstanalysis): self
    {
        $this->firstanalysis = $firstanalysis;

        return $this;
    }

    public function getTimeanalysed(): ?string
    {
        return $this->timeanalysed;
    }

    public function setTimeanalysed(string $timeanalysed): self
    {
        $this->timeanalysed = $timeanalysed;

        return $this;
    }


}
