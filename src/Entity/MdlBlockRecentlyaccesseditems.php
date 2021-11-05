<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockRecentlyaccesseditems
 *
 * @ORM\Table(name="mdl_block_recentlyaccesseditems", uniqueConstraints={@ORM\UniqueConstraint(name="mo_blocrece_usecoucmi_uix", columns={"userid", "courseid", "cmid"})}, indexes={@ORM\Index(name="mo_blocrece_use_ix", columns={"userid"}), @ORM\Index(name="mo_blocrece_cou_ix", columns={"courseid"}), @ORM\Index(name="mo_blocrece_cmi_ix", columns={"cmid"})})
 * @ORM\Entity
 */
class MdlBlockRecentlyaccesseditems
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid;

    /**
     * @var int
     *
     * @ORM\Column(name="cmid", type="bigint", nullable=false)
     */
    private $cmid;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="timeaccess", type="bigint", nullable=false)
     */
    private $timeaccess;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCourseid(): ?string
    {
        return $this->courseid;
    }

    public function setCourseid(string $courseid): self
    {
        $this->courseid = $courseid;

        return $this;
    }

    public function getCmid(): ?string
    {
        return $this->cmid;
    }

    public function setCmid(string $cmid): self
    {
        $this->cmid = $cmid;

        return $this;
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

    public function getTimeaccess(): ?string
    {
        return $this->timeaccess;
    }

    public function setTimeaccess(string $timeaccess): self
    {
        $this->timeaccess = $timeaccess;

        return $this;
    }


}
