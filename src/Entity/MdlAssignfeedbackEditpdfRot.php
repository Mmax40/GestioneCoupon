<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignfeedbackEditpdfRot
 *
 * @ORM\Table(name="mdl_assignfeedback_editpdf_rot", uniqueConstraints={@ORM\UniqueConstraint(name="mo_assieditrot_grapag_uix", columns={"gradeid", "pageno"})}, indexes={@ORM\Index(name="mo_assieditrot_gra_ix", columns={"gradeid"})})
 * @ORM\Entity
 */
class MdlAssignfeedbackEditpdfRot
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
     * @var string
     *
     * @ORM\Column(name="pathnamehash", type="text", length=0, nullable=false)
     */
    private $pathnamehash;

    /**
     * @var bool
     *
     * @ORM\Column(name="isrotated", type="boolean", nullable=false)
     */
    private $isrotated = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="degree", type="bigint", nullable=false)
     */
    private $degree = '0';

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

    public function getPathnamehash(): ?string
    {
        return $this->pathnamehash;
    }

    public function setPathnamehash(string $pathnamehash): self
    {
        $this->pathnamehash = $pathnamehash;

        return $this;
    }

    public function getIsrotated(): ?bool
    {
        return $this->isrotated;
    }

    public function setIsrotated(bool $isrotated): self
    {
        $this->isrotated = $isrotated;

        return $this;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): self
    {
        $this->degree = $degree;

        return $this;
    }


}
