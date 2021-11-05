<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlock
 *
 * @ORM\Table(name="mdl_block", uniqueConstraints={@ORM\UniqueConstraint(name="mo_bloc_nam_uix", columns={"name"})})
 * @ORM\Entity
 */
class MdlBlock
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
     * @ORM\Column(name="name", type="string", length=40, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cron", type="bigint", nullable=false)
     */
    private $cron = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lastcron", type="bigint", nullable=false)
     */
    private $lastcron = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visible = true;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getCron(): ?string
    {
        return $this->cron;
    }

    public function setCron(string $cron): self
    {
        $this->cron = $cron;

        return $this;
    }

    public function getLastcron(): ?string
    {
        return $this->lastcron;
    }

    public function setLastcron(string $lastcron): self
    {
        $this->lastcron = $lastcron;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }


}
