<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockCouponGroups
 *
 * @ORM\Table(name="mdl_block_coupon_groups", indexes={@ORM\Index(name="mo_bloccoupgrou_cou_ix", columns={"couponid"}), @ORM\Index(name="mo_bloccoupgrou_gro_ix", columns={"groupid"})})
 * @ORM\Entity
 */
class MdlBlockCouponGroups
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
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid;

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

    public function getGroupid(): ?string
    {
        return $this->groupid;
    }

    public function setGroupid(string $groupid): self
    {
        $this->groupid = $groupid;

        return $this;
    }


}
