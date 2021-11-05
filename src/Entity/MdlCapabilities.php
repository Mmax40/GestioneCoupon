<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCapabilities
 *
 * @ORM\Table(name="mdl_capabilities", uniqueConstraints={@ORM\UniqueConstraint(name="mo_capa_nam_uix", columns={"name"})})
 * @ORM\Entity
 */
class MdlCapabilities
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
     * @ORM\Column(name="captype", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $captype = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="contextlevel", type="bigint", nullable=false)
     */
    private $contextlevel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="component", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $component = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="riskbitmask", type="bigint", nullable=false)
     */
    private $riskbitmask = '0';

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

    public function getCaptype(): ?string
    {
        return $this->captype;
    }

    public function setCaptype(string $captype): self
    {
        $this->captype = $captype;

        return $this;
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

    public function getComponent(): ?string
    {
        return $this->component;
    }

    public function setComponent(string $component): self
    {
        $this->component = $component;

        return $this;
    }

    public function getRiskbitmask(): ?string
    {
        return $this->riskbitmask;
    }

    public function setRiskbitmask(string $riskbitmask): self
    {
        $this->riskbitmask = $riskbitmask;

        return $this;
    }


}
