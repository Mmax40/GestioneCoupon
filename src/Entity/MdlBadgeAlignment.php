<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeAlignment
 *
 * @ORM\Table(name="mdl_badge_alignment", indexes={@ORM\Index(name="mo_badgalig_bad_ix", columns={"badgeid"})})
 * @ORM\Entity
 */
class MdlBadgeAlignment
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
     * @ORM\Column(name="badgeid", type="bigint", nullable=false)
     */
    private $badgeid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="targetname", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $targetname = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="targeturl", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $targeturl = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="targetdescription", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $targetdescription = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="targetframework", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $targetframework = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="targetcode", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $targetcode = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBadgeid(): ?string
    {
        return $this->badgeid;
    }

    public function setBadgeid(string $badgeid): self
    {
        $this->badgeid = $badgeid;

        return $this;
    }

    public function getTargetname(): ?string
    {
        return $this->targetname;
    }

    public function setTargetname(string $targetname): self
    {
        $this->targetname = $targetname;

        return $this;
    }

    public function getTargeturl(): ?string
    {
        return $this->targeturl;
    }

    public function setTargeturl(string $targeturl): self
    {
        $this->targeturl = $targeturl;

        return $this;
    }

    public function getTargetdescription(): ?string
    {
        return $this->targetdescription;
    }

    public function setTargetdescription(?string $targetdescription): self
    {
        $this->targetdescription = $targetdescription;

        return $this;
    }

    public function getTargetframework(): ?string
    {
        return $this->targetframework;
    }

    public function setTargetframework(?string $targetframework): self
    {
        $this->targetframework = $targetframework;

        return $this;
    }

    public function getTargetcode(): ?string
    {
        return $this->targetcode;
    }

    public function setTargetcode(?string $targetcode): self
    {
        $this->targetcode = $targetcode;

        return $this;
    }


}
