<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeExternalBackpack
 *
 * @ORM\Table(name="mdl_badge_external_backpack", uniqueConstraints={@ORM\UniqueConstraint(name="mo_badgexteback_bac_uix", columns={"backpackapiurl"}), @ORM\UniqueConstraint(name="mo_badgexteback_bac2_uix", columns={"backpackweburl"})}, indexes={@ORM\Index(name="mo_badgexteback_oau_ix", columns={"oauth2_issuerid"})})
 * @ORM\Entity
 */
class MdlBadgeExternalBackpack
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
     * @ORM\Column(name="backpackapiurl", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $backpackapiurl = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="backpackweburl", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $backpackweburl = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="apiversion", type="string", length=12, nullable=false, options={"default"="'1.0'"})
     */
    private $apiversion = '\'1.0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="oauth2_issuerid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $oauth2Issuerid = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBackpackapiurl(): ?string
    {
        return $this->backpackapiurl;
    }

    public function setBackpackapiurl(string $backpackapiurl): self
    {
        $this->backpackapiurl = $backpackapiurl;

        return $this;
    }

    public function getBackpackweburl(): ?string
    {
        return $this->backpackweburl;
    }

    public function setBackpackweburl(string $backpackweburl): self
    {
        $this->backpackweburl = $backpackweburl;

        return $this;
    }

    public function getApiversion(): ?string
    {
        return $this->apiversion;
    }

    public function setApiversion(string $apiversion): self
    {
        $this->apiversion = $apiversion;

        return $this;
    }

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(string $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getOauth2Issuerid(): ?string
    {
        return $this->oauth2Issuerid;
    }

    public function setOauth2Issuerid(?string $oauth2Issuerid): self
    {
        $this->oauth2Issuerid = $oauth2Issuerid;

        return $this;
    }


}
