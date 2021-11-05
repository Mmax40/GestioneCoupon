<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlComments
 *
 * @ORM\Table(name="mdl_comments", indexes={@ORM\Index(name="mo_comm_use_ix", columns={"userid"}), @ORM\Index(name="mo_comm_concomite_ix", columns={"contextid", "commentarea", "itemid"})})
 * @ORM\Entity
 */
class MdlComments
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
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="component", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $component = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="commentarea", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $commentarea = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="itemid", type="bigint", nullable=false)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=false)
     */
    private $content;

    /**
     * @var bool
     *
     * @ORM\Column(name="format", type="boolean", nullable=false)
     */
    private $format = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

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

    public function getContextid(): ?string
    {
        return $this->contextid;
    }

    public function setContextid(string $contextid): self
    {
        $this->contextid = $contextid;

        return $this;
    }

    public function getComponent(): ?string
    {
        return $this->component;
    }

    public function setComponent(?string $component): self
    {
        $this->component = $component;

        return $this;
    }

    public function getCommentarea(): ?string
    {
        return $this->commentarea;
    }

    public function setCommentarea(string $commentarea): self
    {
        $this->commentarea = $commentarea;

        return $this;
    }

    public function getItemid(): ?string
    {
        return $this->itemid;
    }

    public function setItemid(string $itemid): self
    {
        $this->itemid = $itemid;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getFormat(): ?bool
    {
        return $this->format;
    }

    public function setFormat(bool $format): self
    {
        $this->format = $format;

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
