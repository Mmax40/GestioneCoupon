<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlogExternal
 *
 * @ORM\Table(name="mdl_blog_external", indexes={@ORM\Index(name="mo_blogexte_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlBlogExternal
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=0, nullable=false)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filtertags", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $filtertags = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="failedlastsync", type="boolean", nullable=false)
     */
    private $failedlastsync = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timemodified = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="timefetched", type="bigint", nullable=false)
     */
    private $timefetched = '0';

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getFiltertags(): ?string
    {
        return $this->filtertags;
    }

    public function setFiltertags(?string $filtertags): self
    {
        $this->filtertags = $filtertags;

        return $this;
    }

    public function getFailedlastsync(): ?bool
    {
        return $this->failedlastsync;
    }

    public function setFailedlastsync(bool $failedlastsync): self
    {
        $this->failedlastsync = $failedlastsync;

        return $this;
    }

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(?string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    public function getTimefetched(): ?string
    {
        return $this->timefetched;
    }

    public function setTimefetched(string $timefetched): self
    {
        $this->timefetched = $timefetched;

        return $this;
    }


}
