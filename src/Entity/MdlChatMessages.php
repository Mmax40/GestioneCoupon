<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChatMessages
 *
 * @ORM\Table(name="mdl_chat_messages", indexes={@ORM\Index(name="mo_chatmess_use_ix", columns={"userid"}), @ORM\Index(name="mo_chatmess_cha_ix", columns={"chatid"}), @ORM\Index(name="mo_chatmess_gro_ix", columns={"groupid"}), @ORM\Index(name="mo_chatmess_timcha_ix", columns={"timestamp", "chatid"})})
 * @ORM\Entity
 */
class MdlChatMessages
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
     * @ORM\Column(name="chatid", type="bigint", nullable=false)
     */
    private $chatid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="groupid", type="bigint", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="issystem", type="boolean", nullable=false)
     */
    private $issystem = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=0, nullable=false)
     */
    private $message;

    /**
     * @var int
     *
     * @ORM\Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getChatid(): ?string
    {
        return $this->chatid;
    }

    public function setChatid(string $chatid): self
    {
        $this->chatid = $chatid;

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

    public function getGroupid(): ?string
    {
        return $this->groupid;
    }

    public function setGroupid(string $groupid): self
    {
        $this->groupid = $groupid;

        return $this;
    }

    public function getIssystem(): ?bool
    {
        return $this->issystem;
    }

    public function setIssystem(bool $issystem): self
    {
        $this->issystem = $issystem;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    public function setTimestamp(string $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }


}
