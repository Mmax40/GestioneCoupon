<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackEditpdfQuick
 *
 * @ORM\Table(name="mdl_assignfeedback_editpdf_quick", indexes={@ORM\Index(name="mo_assieditquic_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackEditpdfQuick
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
     * @ORM\Column(name="rawtext", type="text", length=0, nullable=false)
     */
    private $rawtext;

    /**
     * @var int
     *
     * @ORM\Column(name="width", type="bigint", nullable=false, options={"default"="120"})
     */
    private $width = '120';

    /**
     * @var string|null
     *
     * @ORM\Column(name="colour", type="string", length=10, nullable=true, options={"default"="'yellow'"})
     */
    private $colour = '\'yellow\'';

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

    public function getRawtext(): ?string
    {
        return $this->rawtext;
    }

    public function setRawtext(string $rawtext): self
    {
        $this->rawtext = $rawtext;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;

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


}
