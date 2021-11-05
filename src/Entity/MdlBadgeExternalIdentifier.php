<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeExternalIdentifier
 *
 * @ORM\Table(name="mdl_badge_external_identifier", uniqueConstraints={@ORM\UniqueConstraint(name="mo_badgexteiden_sitintextt_uix", columns={"sitebackpackid", "internalid", "externalid", "type"})}, indexes={@ORM\Index(name="mo_badgexteiden_sit_ix", columns={"sitebackpackid"})})
 * @ORM\Entity
 */
class MdlBadgeExternalIdentifier
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
     * @ORM\Column(name="sitebackpackid", type="bigint", nullable=false)
     */
    private $sitebackpackid;

    /**
     * @var string
     *
     * @ORM\Column(name="internalid", type="string", length=128, nullable=false, options={"default"="''"})
     */
    private $internalid = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="externalid", type="string", length=128, nullable=false, options={"default"="''"})
     */
    private $externalid = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=false, options={"default"="''"})
     */
    private $type = '\'\'';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSitebackpackid(): ?string
    {
        return $this->sitebackpackid;
    }

    public function setSitebackpackid(string $sitebackpackid): self
    {
        $this->sitebackpackid = $sitebackpackid;

        return $this;
    }

    public function getInternalid(): ?string
    {
        return $this->internalid;
    }

    public function setInternalid(string $internalid): self
    {
        $this->internalid = $internalid;

        return $this;
    }

    public function getExternalid(): ?string
    {
        return $this->externalid;
    }

    public function setExternalid(string $externalid): self
    {
        $this->externalid = $externalid;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }


}
