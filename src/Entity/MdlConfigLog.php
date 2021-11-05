<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlConfigLog
 *
 * @ORM\Table(name="mdl_config_log", indexes={@ORM\Index(name="mo_conflog_tim_ix", columns={"timemodified"}), @ORM\Index(name="mo_conflog_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlConfigLog
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plugin", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $plugin = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="oldvalue", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $oldvalue = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

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

    public function getPlugin(): ?string
    {
        return $this->plugin;
    }

    public function setPlugin(?string $plugin): self
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

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getOldvalue(): ?string
    {
        return $this->oldvalue;
    }

    public function setOldvalue(?string $oldvalue): self
    {
        $this->oldvalue = $oldvalue;

        return $this;
    }


}
