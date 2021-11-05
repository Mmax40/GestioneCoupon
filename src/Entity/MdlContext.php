<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlContext
 *
 * @ORM\Table(name="mdl_context", uniqueConstraints={@ORM\UniqueConstraint(name="mo_cont_conins_uix", columns={"contextlevel", "instanceid"})}, indexes={@ORM\Index(name="mo_cont_pat_ix", columns={"path"}), @ORM\Index(name="mo_cont_ins_ix", columns={"instanceid"})})
 * @ORM\Entity
 */
class MdlContext
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
     * @ORM\Column(name="contextlevel", type="bigint", nullable=false)
     */
    private $contextlevel = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="instanceid", type="bigint", nullable=false)
     */
    private $instanceid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $path = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="depth", type="boolean", nullable=false)
     */
    private $depth = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getContextlevel(): ?string
    {
        return $this->contextlevel;
    }

    public function setContextlevel(string $contextlevel): self
    {
        $this->contextlevel = $contextlevel;

        return $this;
    }

    public function getInstanceid(): ?string
    {
        return $this->instanceid;
    }

    public function setInstanceid(string $instanceid): self
    {
        $this->instanceid = $instanceid;

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

    public function getDepth(): ?bool
    {
        return $this->depth;
    }

    public function setDepth(bool $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): self
    {
        $this->locked = $locked;

        return $this;
    }


}
