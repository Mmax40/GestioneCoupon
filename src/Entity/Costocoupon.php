<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Costocoupon
 *
 * @ORM\Table(name="CostoCoupon")
 * @ORM\Entity
 */
class Costocoupon
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PrezzoCoupon", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $prezzocoupon = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Note", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodiceCoupon", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $codicecoupon = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrezzocoupon(): ?float
    {
        return $this->prezzocoupon;
    }

    public function setPrezzocoupon(?float $prezzocoupon): self
    {
        $this->prezzocoupon = $prezzocoupon;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCodicecoupon(): ?string
    {
        return $this->codicecoupon;
    }

    public function setCodicecoupon(?string $codicecoupon): self
    {
        $this->codicecoupon = $codicecoupon;

        return $this;
    }


}
