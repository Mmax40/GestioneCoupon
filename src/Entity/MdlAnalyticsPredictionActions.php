<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAnalyticsPredictionActions
 *
 * @ORM\Table(name="mdl_analytics_prediction_actions", indexes={@ORM\Index(name="mo_analpredacti_pre_ix", columns={"predictionid"}), @ORM\Index(name="mo_analpredacti_preuseact_ix", columns={"predictionid", "userid", "actionname"}), @ORM\Index(name="mo_analpredacti_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlAnalyticsPredictionActions
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
     * @ORM\Column(name="predictionid", type="bigint", nullable=false)
     */
    private $predictionid;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="actionname", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $actionname = '\'\'';

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

    public function getPredictionid(): ?string
    {
        return $this->predictionid;
    }

    public function setPredictionid(string $predictionid): self
    {
        $this->predictionid = $predictionid;

        return $this;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getActionname(): ?string
    {
        return $this->actionname;
    }

    public function setActionname(string $actionname): self
    {
        $this->actionname = $actionname;

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
