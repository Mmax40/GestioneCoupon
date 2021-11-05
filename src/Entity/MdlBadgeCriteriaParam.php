<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeCriteriaParam
 *
 * @ORM\Table(name="mdl_badge_criteria_param", indexes={@ORM\Index(name="mo_badgcritpara_cri_ix", columns={"critid"})})
 * @ORM\Entity
 */
class MdlBadgeCriteriaParam
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
     * @ORM\Column(name="critid", type="bigint", nullable=false)
     */
    private $critid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCritid(): ?string
    {
        return $this->critid;
    }

    public function setCritid(string $critid): self
    {
        $this->critid = $critid;

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
