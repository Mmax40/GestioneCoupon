<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CanaleMarketing
 *
 * @ORM\Table(name="canale_marketing", indexes={@ORM\Index(name="IDX_A59886A9F0AF24FE", columns={"affiliato_id"})})
 * @ORM\Entity
 */
class CanaleMarketing
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
     * @var string
     *
     * @ORM\Column(name="nome", type="text", length=0, nullable=false)
     */
    private $nome;

    /**
     * @var int
     *
     * @ORM\Column(name="zz", type="integer", nullable=false)
     */
    private $zz;

    /**
     * @var \GestAccount
     *
     * @ORM\ManyToOne(targetEntity="GestAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="affiliato_id", referencedColumnName="id")
     * })
     */
    private $affiliato;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getZz(): ?int
    {
        return $this->zz;
    }

    public function setZz(int $zz): self
    {
        $this->zz = $zz;

        return $this;
    }

    public function getAffiliato(): ?GestAccount
    {
        return $this->affiliato;
    }

    public function setAffiliato(?GestAccount $affiliato): self
    {
        $this->affiliato = $affiliato;

        return $this;
    }


}
