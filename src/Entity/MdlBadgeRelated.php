<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeRelated
 *
 * @ORM\Table(name="mdl_badge_related", uniqueConstraints={@ORM\UniqueConstraint(name="mo_badgrela_badrel_uix", columns={"badgeid", "relatedbadgeid"})}, indexes={@ORM\Index(name="mo_badgrela_rel_ix", columns={"relatedbadgeid"}), @ORM\Index(name="mo_badgrela_bad_ix", columns={"badgeid"})})
 * @ORM\Entity
 */
class MdlBadgeRelated
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
     * @var int|null
     *
     * @ORM\Column(name="relatedbadgeid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $relatedbadgeid = 'NULL';

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

    public function getRelatedbadgeid(): ?string
    {
        return $this->relatedbadgeid;
    }

    public function setRelatedbadgeid(?string $relatedbadgeid): self
    {
        $this->relatedbadgeid = $relatedbadgeid;

        return $this;
    }


}
