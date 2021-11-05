<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlContentbankContent
 *
 * @ORM\Table(name="mdl_contentbank_content", indexes={@ORM\Index(name="mo_contcont_use2_ix", columns={"usercreated"}), @ORM\Index(name="mo_contcont_nam_ix", columns={"name"}), @ORM\Index(name="mo_contcont_con_ix", columns={"contextid"}), @ORM\Index(name="mo_contcont_conconins_ix", columns={"contextid", "contenttype", "instanceid"}), @ORM\Index(name="mo_contcont_use_ix", columns={"usermodified"})})
 * @ORM\Entity
 */
class MdlContentbankContent
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
     * @ORM\Column(name="contenttype", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $contenttype = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var bool
     *
     * @ORM\Column(name="visibility", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visibility = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="instanceid", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $instanceid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="configdata", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $configdata = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="usercreated", type="bigint", nullable=false)
     */
    private $usercreated;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usermodified", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $usermodified = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=true)
     */
    private $timemodified = '0';

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

    public function getContenttype(): ?string
    {
        return $this->contenttype;
    }

    public function setContenttype(string $contenttype): self
    {
        $this->contenttype = $contenttype;

        return $this;
    }

    public function getContextid(): ?string
    {
        return $this->contextid;
    }

    public function setContextid(string $contextid): self
    {
        $this->contextid = $contextid;

        return $this;
    }

    public function getVisibility(): ?bool
    {
        return $this->visibility;
    }

    public function setVisibility(bool $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getInstanceid(): ?string
    {
        return $this->instanceid;
    }

    public function setInstanceid(?string $instanceid): self
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    public function getConfigdata(): ?string
    {
        return $this->configdata;
    }

    public function setConfigdata(?string $configdata): self
    {
        $this->configdata = $configdata;

        return $this;
    }

    public function getUsercreated(): ?string
    {
        return $this->usercreated;
    }

    public function setUsercreated(string $usercreated): self
    {
        $this->usercreated = $usercreated;

        return $this;
    }

    public function getUsermodified(): ?string
    {
        return $this->usermodified;
    }

    public function setUsermodified(?string $usermodified): self
    {
        $this->usermodified = $usermodified;

        return $this;
    }

    public function getTimecreated(): ?string
    {
        return $this->timecreated;
    }

    public function setTimecreated(string $timecreated): self
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(?string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }


}
