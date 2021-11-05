<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlogAssociation
 *
 * @ORM\Table(name="mdl_blog_association", indexes={@ORM\Index(name="mo_blogasso_con_ix", columns={"contextid"}), @ORM\Index(name="mo_blogasso_blo_ix", columns={"blogid"})})
 * @ORM\Entity
 */
class MdlBlogAssociation
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
     * @var int
     *
     * @ORM\Column(name="blogid", type="bigint", nullable=false)
     */
    private $blogid;

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

    public function getBlogid(): ?string
    {
        return $this->blogid;
    }

    public function setBlogid(string $blogid): self
    {
        $this->blogid = $blogid;

        return $this;
    }


}
