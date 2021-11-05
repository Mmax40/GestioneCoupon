<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeExternal
 *
 * @ORM\Table(name="mdl_badge_external", indexes={@ORM\Index(name="mo_badgexte_bac_ix", columns={"backpackid"})})
 * @ORM\Entity
 */
class MdlBadgeExternal
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
     * @ORM\Column(name="backpackid", type="bigint", nullable=false)
     */
    private $backpackid;

    /**
     * @var int
     *
     * @ORM\Column(name="collectionid", type="bigint", nullable=false)
     */
    private $collectionid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entityid", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $entityid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="assertion", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $assertion = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBackpackid(): ?string
    {
        return $this->backpackid;
    }

    public function setBackpackid(string $backpackid): self
    {
        $this->backpackid = $backpackid;

        return $this;
    }

    public function getCollectionid(): ?string
    {
        return $this->collectionid;
    }

    public function setCollectionid(string $collectionid): self
    {
        $this->collectionid = $collectionid;

        return $this;
    }

    public function getEntityid(): ?string
    {
        return $this->entityid;
    }

    public function setEntityid(?string $entityid): self
    {
        $this->entityid = $entityid;

        return $this;
    }

    public function getAssertion(): ?string
    {
        return $this->assertion;
    }

    public function setAssertion(?string $assertion): self
    {
        $this->assertion = $assertion;

        return $this;
    }


}
