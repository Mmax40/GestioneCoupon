<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlConfig
 *
 * @ORM\Table(name="mdl_config", uniqueConstraints={@ORM\UniqueConstraint(name="mo_conf_nam_uix", columns={"name"})})
 * @ORM\Entity
 */
class MdlConfig
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=false)
     */
    private $value;

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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
