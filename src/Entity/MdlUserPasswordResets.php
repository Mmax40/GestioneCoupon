<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserPasswordResets
 *
 * @ORM\Table(name="mdl_user_password_resets", indexes={@ORM\Index(name="mo_userpassrese_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlUserPasswordResets
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="timerequested", type="bigint", nullable=false)
     */
    private $timerequested;

    /**
     * @var int
     *
     * @ORM\Column(name="timererequested", type="bigint", nullable=false)
     */
    private $timererequested = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $token = '\'\'';

    public function getId(): ?string
    {
        return $this->id;
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

    public function getTimerequested(): ?string
    {
        return $this->timerequested;
    }

    public function setTimerequested(string $timerequested): self
    {
        $this->timerequested = $timerequested;

        return $this;
    }

    public function getTimererequested(): ?string
    {
        return $this->timererequested;
    }

    public function setTimererequested(string $timererequested): self
    {
        $this->timererequested = $timererequested;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }


}
