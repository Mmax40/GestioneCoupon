<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlConfigPlugins
 *
 * @ORM\Table(name="mdl_config_plugins", uniqueConstraints={@ORM\UniqueConstraint(name="mo_confplug_plunam_uix", columns={"plugin", "name"})})
 * @ORM\Entity
 */
class MdlConfigPlugins
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
     * @ORM\Column(name="plugin", type="string", length=100, nullable=false, options={"default"="'core'"})
     */
    private $plugin = '\'core\'';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false, options={"default"="''"})
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

    public function getPlugin(): ?string
    {
        return $this->plugin;
    }

    public function setPlugin(string $plugin): self
    {
        $this->plugin = $plugin;

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
