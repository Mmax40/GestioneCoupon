<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAttendanceregisterAggregate
 *
 * @ORM\Table(name="mdl_attendanceregister_aggregate", indexes={@ORM\Index(name="mo_atteaggr_reg_ix", columns={"register"}), @ORM\Index(name="mo_atteaggr_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlAttendanceregisterAggregate
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
     * @ORM\Column(name="register", type="bigint", nullable=false)
     */
    private $register = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="bigint", nullable=false)
     */
    private $duration = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="onlinesess", type="boolean", nullable=true, options={"default"="1"})
     */
    private $onlinesess = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="total", type="boolean", nullable=false, options={"default"="1"})
     */
    private $total = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="grandtotal", type="boolean", nullable=false)
     */
    private $grandtotal = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="refcourse", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $refcourse = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lastsessionlogout", type="bigint", nullable=true)
     */
    private $lastsessionlogout = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getRegister(): ?string
    {
        return $this->register;
    }

    public function setRegister(string $register): self
    {
        $this->register = $register;

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

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getOnlinesess(): ?bool
    {
        return $this->onlinesess;
    }

    public function setOnlinesess(?bool $onlinesess): self
    {
        $this->onlinesess = $onlinesess;

        return $this;
    }

    public function getTotal(): ?bool
    {
        return $this->total;
    }

    public function setTotal(bool $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getGrandtotal(): ?bool
    {
        return $this->grandtotal;
    }

    public function setGrandtotal(bool $grandtotal): self
    {
        $this->grandtotal = $grandtotal;

        return $this;
    }

    public function getRefcourse(): ?string
    {
        return $this->refcourse;
    }

    public function setRefcourse(?string $refcourse): self
    {
        $this->refcourse = $refcourse;

        return $this;
    }

    public function getLastsessionlogout(): ?string
    {
        return $this->lastsessionlogout;
    }

    public function setLastsessionlogout(?string $lastsessionlogout): self
    {
        $this->lastsessionlogout = $lastsessionlogout;

        return $this;
    }


}
