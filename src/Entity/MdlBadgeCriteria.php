<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBadgeCriteria
 *
 * @ORM\Table(name="mdl_badge_criteria", uniqueConstraints={@ORM\UniqueConstraint(name="mo_badgcrit_badcri_uix", columns={"badgeid", "criteriatype"})}, indexes={@ORM\Index(name="mo_badgcrit_bad_ix", columns={"badgeid"}), @ORM\Index(name="mo_badgcrit_cri_ix", columns={"criteriatype"})})
 * @ORM\Entity
 */
class MdlBadgeCriteria
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
     * @ORM\Column(name="criteriatype", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $criteriatype = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="method", type="boolean", nullable=false, options={"default"="1"})
     */
    private $method = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=false)
     */
    private $descriptionformat = '0';

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

    public function getCriteriatype(): ?string
    {
        return $this->criteriatype;
    }

    public function setCriteriatype(?string $criteriatype): self
    {
        $this->criteriatype = $criteriatype;

        return $this;
    }

    public function getMethod(): ?bool
    {
        return $this->method;
    }

    public function setMethod(bool $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionformat(): ?bool
    {
        return $this->descriptionformat;
    }

    public function setDescriptionformat(bool $descriptionformat): self
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }


}
