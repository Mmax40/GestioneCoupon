<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCohortMembers
 *
 * @ORM\Table(name="mdl_cohort_members", uniqueConstraints={@ORM\UniqueConstraint(name="mo_cohomemb_cohuse_uix", columns={"cohortid", "userid"})}, indexes={@ORM\Index(name="mo_cohomemb_use_ix", columns={"userid"}), @ORM\Index(name="mo_cohomemb_coh_ix", columns={"cohortid"})})
 * @ORM\Entity
 */
class MdlCohortMembers
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
     * @ORM\Column(name="cohortid", type="bigint", nullable=false)
     */
    private $cohortid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timeadded", type="bigint", nullable=false)
     */
    private $timeadded = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCohortid(): ?string
    {
        return $this->cohortid;
    }

    public function setCohortid(string $cohortid): self
    {
        $this->cohortid = $cohortid;

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

    public function getTimeadded(): ?string
    {
        return $this->timeadded;
    }

    public function setTimeadded(string $timeadded): self
    {
        $this->timeadded = $timeadded;

        return $this;
    }


}
