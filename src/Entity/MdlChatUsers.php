<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChatUsers
 *
 * @ORM\Table(name="mdl_chat_users", indexes={@ORM\Index(name="mo_chatuser_cha_ix", columns={"chatid"}), @ORM\Index(name="mo_chatuser_use_ix", columns={"userid"}), @ORM\Index(name="mo_chatuser_las_ix", columns={"lastping"}), @ORM\Index(name="mo_chatuser_gro_ix", columns={"groupid"})})
 * @ORM\Entity
 */
class MdlChatUsers
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
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=16, nullable=false, options={"default"="''"})
     */
    private $version = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=45, nullable=false, options={"default"="''"})
     */
    private $ip = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="firstping", type="bigint", nullable=false)
     */
    private $firstping = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lastping", type="bigint", nullable=false)
     */
    private $lastping = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lastmessageping", type="bigint", nullable=false)
     */
    private $lastmessageping = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $sid = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="course", type="bigint", nullable=false)
     */
    private $course = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $lang = '\'\'';

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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getFirstping(): ?string
    {
        return $this->firstping;
    }

    public function setFirstping(string $firstping): self
    {
        $this->firstping = $firstping;

        return $this;
    }

    public function getLastping(): ?string
    {
        return $this->lastping;
    }

    public function setLastping(string $lastping): self
    {
        $this->lastping = $lastping;

        return $this;
    }

    public function getLastmessageping(): ?string
    {
        return $this->lastmessageping;
    }

    public function setLastmessageping(string $lastmessageping): self
    {
        $this->lastmessageping = $lastmessageping;

        return $this;
    }

    public function getSid(): ?string
    {
        return $this->sid;
    }

    public function setSid(string $sid): self
    {
        $this->sid = $sid;

        return $this;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }


}
