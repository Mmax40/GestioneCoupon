<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockCouponCourses
 *
 * @ORM\Table(name="mdl_block_coupon_courses", indexes={@ORM\Index(name="mo_bloccoupcour_cou_ix", columns={"couponid"}), @ORM\Index(name="mo_bloccoupcour_cou2_ix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlBlockCouponCourses
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

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

    public function getCourseid(): ?string
    {
        return $this->courseid;
    }

    public function setCourseid(string $courseid): self
    {
        $this->courseid = $courseid;

        return $this;
    }


}
