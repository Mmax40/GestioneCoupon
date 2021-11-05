<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignmentUpgrade
 *
 * @ORM\Table(name="mdl_assignment_upgrade", indexes={@ORM\Index(name="mo_assiupgr_old_ix", columns={"oldcmid"}), @ORM\Index(name="mo_assiupgr_old2_ix", columns={"oldinstance"})})
 * @ORM\Entity
 */
class MdlAssignmentUpgrade
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
     * @ORM\Column(name="oldcmid", type="bigint", nullable=false)
     */
    private $oldcmid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="oldinstance", type="bigint", nullable=false)
     */
    private $oldinstance = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="newcmid", type="bigint", nullable=false)
     */
    private $newcmid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="newinstance", type="bigint", nullable=false)
     */
    private $newinstance = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getOldcmid(): ?string
    {
        return $this->oldcmid;
    }

    public function setOldcmid(string $oldcmid): self
    {
        $this->oldcmid = $oldcmid;

        return $this;
    }

    public function getOldinstance(): ?string
    {
        return $this->oldinstance;
    }

    public function setOldinstance(string $oldinstance): self
    {
        $this->oldinstance = $oldinstance;

        return $this;
    }

    public function getNewcmid(): ?string
    {
        return $this->newcmid;
    }

    public function setNewcmid(string $newcmid): self
    {
        $this->newcmid = $newcmid;

        return $this;
    }

    public function getNewinstance(): ?string
    {
        return $this->newinstance;
    }

    public function setNewinstance(string $newinstance): self
    {
        $this->newinstance = $newinstance;

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


}
