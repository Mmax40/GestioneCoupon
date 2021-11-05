<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlChoiceOptions
 *
 * @ORM\Table(name="mdl_choice_options", indexes={@ORM\Index(name="mo_choiopti_cho_ix", columns={"choiceid"})})
 * @ORM\Entity
 */
class MdlChoiceOptions
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
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $text = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxanswers", type="bigint", nullable=true)
     */
    private $maxanswers = '0';

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getMaxanswers(): ?string
    {
        return $this->maxanswers;
    }

    public function setMaxanswers(?string $maxanswers): self
    {
        $this->maxanswers = $maxanswers;

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
