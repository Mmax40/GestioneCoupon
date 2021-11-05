<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockRssClient
 *
 * @ORM\Table(name="mdl_block_rss_client")
 * @ORM\Entity
 */
class MdlBlockRssClient
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
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=0, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="preferredtitle", type="string", length=64, nullable=false, options={"default"="''"})
     */
    private $preferredtitle = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=false)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="shared", type="boolean", nullable=false)
     */
    private $shared = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $url = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="skiptime", type="bigint", nullable=false)
     */
    private $skiptime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="skipuntil", type="bigint", nullable=false)
     */
    private $skipuntil = '0';

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPreferredtitle(): ?string
    {
        return $this->preferredtitle;
    }

    public function setPreferredtitle(string $preferredtitle): self
    {
        $this->preferredtitle = $preferredtitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShared(): ?bool
    {
        return $this->shared;
    }

    public function setShared(bool $shared): self
    {
        $this->shared = $shared;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getSkiptime(): ?string
    {
        return $this->skiptime;
    }

    public function setSkiptime(string $skiptime): self
    {
        $this->skiptime = $skiptime;

        return $this;
    }

    public function getSkipuntil(): ?string
    {
        return $this->skipuntil;
    }

    public function setSkipuntil(string $skipuntil): self
    {
        $this->skipuntil = $skipuntil;

        return $this;
    }


}
