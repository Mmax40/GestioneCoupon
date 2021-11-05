<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlContextTemp
 *
 * @ORM\Table(name="mdl_context_temp")
 * @ORM\Entity
 */
class MdlContextTemp
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
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $path = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="depth", type="boolean", nullable=false)
     */
    private $depth;

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

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
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
