<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CostoCanaleMarketing
 *
 * @ORM\Table(name="costo_canale_marketing", indexes={@ORM\Index(name="IDX_D9739E1D23E587C1", columns={"canale_marketing_id"})})
 * @ORM\Entity
 */
class CostoCanaleMarketing
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $costo;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=0, nullable=false)
     */
    private $note;

    /**
     * @var \CanaleMarketing
     *
     * @ORM\ManyToOne(targetEntity="CanaleMarketing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="canale_marketing_id", referencedColumnName="id")
     * })
     */
    private $canaleMarketing;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getCosto(): ?string
    {
        return $this->costo;
    }

    public function setCosto(string $costo): self
    {
        $this->costo = $costo;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCanaleMarketing(): ?CanaleMarketing
    {
        return $this->canaleMarketing;
    }

    public function setCanaleMarketing(?CanaleMarketing $canaleMarketing): self
    {
        $this->canaleMarketing = $canaleMarketing;

        return $this;
    }


}
