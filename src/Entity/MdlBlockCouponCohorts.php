<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockCouponCohorts
 *
 * @ORM\Table(name="mdl_block_coupon_cohorts", indexes={@ORM\Index(name="mo_bloccoupcoho_cou_ix", columns={"couponid"}), @ORM\Index(name="mo_bloccoupcoho_coh_ix", columns={"cohortid"})})
 * @ORM\Entity
 */
class MdlBlockCouponCohorts
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
     * @ORM\Column(name="couponid", type="bigint", nullable=false)
     */
    private $couponid;

    /**
     * @var int
     *
     * @ORM\Column(name="cohortid", type="bigint", nullable=false)
     */
    private $cohortid;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCouponid(): ?string
    {
        return $this->couponid;
    }

    public function setCouponid(string $couponid): self
    {
        $this->couponid = $couponid;

        return $this;
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


}
