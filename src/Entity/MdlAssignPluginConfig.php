<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignPluginConfig
 *
 * @ORM\Table(name="mdl_assign_plugin_config", indexes={@ORM\Index(name="mo_assiplugconf_ass_ix", columns={"assignment"}), @ORM\Index(name="mo_assiplugconf_plu_ix", columns={"plugin"}), @ORM\Index(name="mo_assiplugconf_sub_ix", columns={"subtype"}), @ORM\Index(name="mo_assiplugconf_nam_ix", columns={"name"})})
 * @ORM\Entity
 */
class MdlAssignPluginConfig
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
     * @ORM\Column(name="assignment", type="bigint", nullable=false)
     */
    private $assignment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="plugin", type="string", length=28, nullable=false, options={"default"="''"})
     */
    private $plugin = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="subtype", type="string", length=28, nullable=false, options={"default"="''"})
     */
    private $subtype = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=28, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAssignment(): ?string
    {
        return $this->assignment;
    }

    public function setAssignment(string $assignment): self
    {
        $this->assignment = $assignment;

        return $this;
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

    public function getSubtype(): ?string
    {
        return $this->subtype;
    }

    public function setSubtype(string $subtype): self
    {
        $this->subtype = $subtype;

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

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
