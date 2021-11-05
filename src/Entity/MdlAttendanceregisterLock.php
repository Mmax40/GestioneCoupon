<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAttendanceregisterLock
 *
 * @ORM\Table(name="mdl_attendanceregister_lock", indexes={@ORM\Index(name="mo_attelock_reg_ix", columns={"register"}), @ORM\Index(name="mo_attelock_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlAttendanceregisterLock
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
     * @ORM\Column(name="takenon", type="bigint", nullable=false)
     */
    private $takenon = '0';

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

    public function getTakenon(): ?string
    {
        return $this->takenon;
    }

    public function setTakenon(string $takenon): self
    {
        $this->takenon = $takenon;

        return $this;
    }


}
