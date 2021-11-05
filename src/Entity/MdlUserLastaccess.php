<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserLastaccess
 *
 * @ORM\Table(name="mdl_user_lastaccess", uniqueConstraints={@ORM\UniqueConstraint(name="mo_userlast_usecou_uix", columns={"userid", "courseid"})}, indexes={@ORM\Index(name="mo_userlast_cou_ix", columns={"courseid"}), @ORM\Index(name="mo_userlast_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlUserLastaccess
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
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timeaccess", type="bigint", nullable=false)
     */
    private $timeaccess = '0';

    public function getId(): ?string
    {
        return $this->id;
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

    public function getCourseid(): ?string
    {
        return $this->courseid;
    }

    public function setCourseid(string $courseid): self
    {
        $this->courseid = $courseid;

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
