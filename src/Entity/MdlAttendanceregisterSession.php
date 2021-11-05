<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAttendanceregisterSession
 *
 * @ORM\Table(name="mdl_attendanceregister_session", indexes={@ORM\Index(name="mo_attesess_reg_ix", columns={"register"}), @ORM\Index(name="mo_attesess_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlAttendanceregisterSession
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
     * @ORM\Column(name="login", type="bigint", nullable=false)
     */
    private $login = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="logout", type="bigint", nullable=false)
     */
    private $logout = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="bigint", nullable=false)
     */
    private $duration = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="onlinesess", type="boolean", nullable=false, options={"default"="1"})
     */
    private $onlinesess = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="refcourse", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $refcourse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $comments = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="addedbyuserid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $addedbyuserid = 'NULL';

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

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getLogout(): ?string
    {
        return $this->logout;
    }

    public function setLogout(string $logout): self
    {
        $this->logout = $logout;

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

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getOnlinesess(): ?bool
    {
        return $this->onlinesess;
    }

    public function setOnlinesess(bool $onlinesess): self
    {
        $this->onlinesess = $onlinesess;

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

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getAddedbyuserid(): ?string
    {
        return $this->addedbyuserid;
    }

    public function setAddedbyuserid(?string $addedbyuserid): self
    {
        $this->addedbyuserid = $addedbyuserid;

        return $this;
    }


}
