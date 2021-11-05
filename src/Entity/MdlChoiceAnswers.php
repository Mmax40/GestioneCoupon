<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChoiceAnswers
 *
 * @ORM\Table(name="mdl_choice_answers", indexes={@ORM\Index(name="mo_choiansw_use_ix", columns={"userid"}), @ORM\Index(name="mo_choiansw_cho_ix", columns={"choiceid"}), @ORM\Index(name="mo_choiansw_opt_ix", columns={"optionid"})})
 * @ORM\Entity
 */
class MdlChoiceAnswers
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
     * @ORM\Column(name="choiceid", type="bigint", nullable=false)
     */
    private $choiceid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="optionid", type="bigint", nullable=false)
     */
    private $optionid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getChoiceid(): ?string
    {
        return $this->choiceid;
    }

    public function setChoiceid(string $choiceid): self
    {
        $this->choiceid = $choiceid;

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

    public function getOptionid(): ?string
    {
        return $this->optionid;
    }

    public function setOptionid(string $optionid): self
    {
        $this->optionid = $optionid;

        return $this;
    }

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }


}
