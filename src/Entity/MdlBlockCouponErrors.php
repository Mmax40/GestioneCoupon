<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockCouponErrors
 *
 * @ORM\Table(name="mdl_block_coupon_errors", indexes={@ORM\Index(name="mo_bloccouperro_cou_ix", columns={"couponid"})})
 * @ORM\Entity
 */
class MdlBlockCouponErrors
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
     * @var string
     *
     * @ORM\Column(name="errortype", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $errortype = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="errormessage", type="text", length=0, nullable=false)
     */
    private $errormessage;

    /**
     * @var bool
     *
     * @ORM\Column(name="iserror", type="boolean", nullable=false, options={"default"="1"})
     */
    private $iserror = true;

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

    public function getCouponid(): ?string
    {
        return $this->couponid;
    }

    public function setCouponid(string $couponid): self
    {
        $this->couponid = $couponid;

        return $this;
    }

    public function getErrortype(): ?string
    {
        return $this->errortype;
    }

    public function setErrortype(string $errortype): self
    {
        $this->errortype = $errortype;

        return $this;
    }

    public function getErrormessage(): ?string
    {
        return $this->errormessage;
    }

    public function setErrormessage(string $errormessage): self
    {
        $this->errormessage = $errormessage;

        return $this;
    }

    public function getIserror(): ?bool
    {
        return $this->iserror;
    }

    public function setIserror(bool $iserror): self
    {
        $this->iserror = $iserror;

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
