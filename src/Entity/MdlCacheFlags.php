<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCacheFlags
 *
 * @ORM\Table(name="mdl_cache_flags", indexes={@ORM\Index(name="mo_cachflag_fla_ix", columns={"flagtype"}), @ORM\Index(name="mo_cachflag_nam_ix", columns={"name"})})
 * @ORM\Entity
 */
class MdlCacheFlags
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
     * @ORM\Column(name="flagtype", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $flagtype = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=false)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="expiry", type="bigint", nullable=false)
     */
    private $expiry;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getFlagtype(): ?string
    {
        return $this->flagtype;
    }

    public function setFlagtype(string $flagtype): self
    {
        $this->flagtype = $flagtype;

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

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getExpiry(): ?string
    {
        return $this->expiry;
    }

    public function setExpiry(string $expiry): self
    {
        $this->expiry = $expiry;

        return $this;
    }


}
