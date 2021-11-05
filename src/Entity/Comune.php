<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comune
 *
 * @ORM\Table(name="comune", indexes={@ORM\Index(name="IDX_79106A504E7121AF", columns={"provincia_id"})})
 * @ORM\Entity
 */
class Comune
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
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_istat", type="string", length=255, nullable=false)
     */
    private $codiceIstat;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_catastale", type="string", length=255, nullable=false)
     */
    private $codiceCatastale;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     * })
     */
    private $provincia;

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

    public function getCodiceIstat(): ?string
    {
        return $this->codiceIstat;
    }

    public function setCodiceIstat(string $codiceIstat): self
    {
        $this->codiceIstat = $codiceIstat;

        return $this;
    }

    public function getCodiceCatastale(): ?string
    {
        return $this->codiceCatastale;
    }

    public function setCodiceCatastale(string $codiceCatastale): self
    {
        $this->codiceCatastale = $codiceCatastale;

        return $this;
    }

    public function getProvincia(): ?Provincia
    {
        return $this->provincia;
    }

    public function setProvincia(?Provincia $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }


}
