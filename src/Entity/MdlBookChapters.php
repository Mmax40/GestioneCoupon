<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBookChapters
 *
 * @ORM\Table(name="mdl_book_chapters", indexes={@ORM\Index(name="mo_bookchap_boo_ix", columns={"bookid"})})
 * @ORM\Entity
 */
class MdlBookChapters
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
     * @ORM\Column(name="bookid", type="bigint", nullable=false)
     */
    private $bookid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pagenum", type="bigint", nullable=false)
     */
    private $pagenum = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="subchapter", type="bigint", nullable=false)
     */
    private $subchapter = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $title = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=false)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="contentformat", type="smallint", nullable=false)
     */
    private $contentformat = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="importsrc", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $importsrc = '\'\'';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBookid(): ?string
    {
        return $this->bookid;
    }

    public function setBookid(string $bookid): self
    {
        $this->bookid = $bookid;

        return $this;
    }

    public function getPagenum(): ?string
    {
        return $this->pagenum;
    }

    public function setPagenum(string $pagenum): self
    {
        $this->pagenum = $pagenum;

        return $this;
    }

    public function getSubchapter(): ?string
    {
        return $this->subchapter;
    }

    public function setSubchapter(string $subchapter): self
    {
        $this->subchapter = $subchapter;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getContentformat(): ?int
    {
        return $this->contentformat;
    }

    public function setContentformat(int $contentformat): self
    {
        $this->contentformat = $contentformat;

        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(bool $hidden): self
    {
        $this->hidden = $hidden;

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

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    public function getImportsrc(): ?string
    {
        return $this->importsrc;
    }

    public function setImportsrc(string $importsrc): self
    {
        $this->importsrc = $importsrc;

        return $this;
    }


}
