<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAssignUserMapping
 *
 * @ORM\Table(name="mdl_assign_user_mapping", indexes={@ORM\Index(name="mo_assiusermapp_ass_ix", columns={"assignment"}), @ORM\Index(name="mo_assiusermapp_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlAssignUserMapping
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
     * @ORM\Column(name="assignment", type="bigint", nullable=false)
     */
    private $assignment = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAssignment(): ?string
    {
        return $this->assignment;
    }

    public function setAssignment(string $assignment): self
    {
        $this->assignment = $assignment;

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


}
