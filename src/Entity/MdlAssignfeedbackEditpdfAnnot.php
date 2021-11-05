<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackEditpdfAnnot
 *
 * @ORM\Table(name="mdl_assignfeedback_editpdf_annot", indexes={@ORM\Index(name="mo_assieditanno_grapag_ix", columns={"gradeid", "pageno"}), @ORM\Index(name="mo_assieditanno_gra_ix", columns={"gradeid"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackEditpdfAnnot
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
     * @ORM\Column(name="gradeid", type="bigint", nullable=false)
     */
    private $gradeid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pageno", type="bigint", nullable=false)
     */
    private $pageno = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="x", type="bigint", nullable=true)
     */
    private $x = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="y", type="bigint", nullable=true)
     */
    private $y = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="endx", type="bigint", nullable=true)
     */
    private $endx = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="endy", type="bigint", nullable=true)
     */
    private $endy = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $path = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true, options={"default"="'line'"})
     */
    private $type = '\'line\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="colour", type="string", length=10, nullable=true, options={"default"="'black'"})
     */
    private $colour = '\'black\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="draft", type="boolean", nullable=false, options={"default"="1"})
     */
    private $draft = true;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getGradeid(): ?string
    {
        return $this->gradeid;
    }

    public function setGradeid(string $gradeid): self
    {
        $this->gradeid = $gradeid;

        return $this;
    }

    public function getPageno(): ?string
    {
        return $this->pageno;
    }

    public function setPageno(string $pageno): self
    {
        $this->pageno = $pageno;

        return $this;
    }

    public function getX(): ?string
    {
        return $this->x;
    }

    public function setX(?string $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?string
    {
        return $this->y;
    }

    public function setY(?string $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getEndx(): ?string
    {
        return $this->endx;
    }

    public function setEndx(?string $endx): self
    {
        $this->endx = $endx;

        return $this;
    }

    public function getEndy(): ?string
    {
        return $this->endy;
    }

    public function setEndy(?string $endy): self
    {
        $this->endy = $endy;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getColour(): ?string
    {
        return $this->colour;
    }

    public function setColour(?string $colour): self
    {
        $this->colour = $colour;

        return $this;
    }

    public function getDraft(): ?bool
    {
        return $this->draft;
    }

    public function setDraft(bool $draft): self
    {
        $this->draft = $draft;

        return $this;
    }


}
