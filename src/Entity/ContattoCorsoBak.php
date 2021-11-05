<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContattoCorsoBak
 *
 * @ORM\Table(name="contatto_corso_bak", indexes={@ORM\Index(name="IDX_8FF7A6E04465899F", columns={"corso_id"}), @ORM\Index(name="IDX_8FF7A6E075836E8A", columns={"contatto_id"}), @ORM\Index(name="IDX_8FF7A6E023E587C1", columns={"canale_marketing_id"})})
 * @ORM\Entity
 */
class ContattoCorsoBak
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
     * @var int|null
     *
     * @ORM\Column(name="corso_id", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $corsoId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contatto_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $contattoId = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="canale_marketing_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $canaleMarketingId = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="prezzo", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prezzo;

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=5, nullable=false)
     */
    private $stato;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dataRichiamo", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datarichiamo = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="incassato", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $incassato;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dataIncasso", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataincasso = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dataFatturazione", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datafatturazione = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="emailInviata", type="boolean", nullable=false)
     */
    private $emailinviata;

    /**
     * @var bool
     *
     * @ORM\Column(name="attestatoInviato", type="boolean", nullable=false)
     */
    private $attestatoinviato;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dataIscrizione", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataiscrizione = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCorsoId(): ?string
    {
        return $this->corsoId;
    }

    public function setCorsoId(?string $corsoId): self
    {
        $this->corsoId = $corsoId;

        return $this;
    }

    public function getContattoId(): ?int
    {
        return $this->contattoId;
    }

    public function setContattoId(?int $contattoId): self
    {
        $this->contattoId = $contattoId;

        return $this;
    }

    public function getCanaleMarketingId(): ?int
    {
        return $this->canaleMarketingId;
    }

    public function setCanaleMarketingId(?int $canaleMarketingId): self
    {
        $this->canaleMarketingId = $canaleMarketingId;

        return $this;
    }

    public function getPrezzo(): ?string
    {
        return $this->prezzo;
    }

    public function setPrezzo(string $prezzo): self
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    public function getStato(): ?string
    {
        return $this->stato;
    }

    public function setStato(string $stato): self
    {
        $this->stato = $stato;

        return $this;
    }

    public function getDatarichiamo(): ?\DateTimeInterface
    {
        return $this->datarichiamo;
    }

    public function setDatarichiamo(?\DateTimeInterface $datarichiamo): self
    {
        $this->datarichiamo = $datarichiamo;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getIncassato(): ?string
    {
        return $this->incassato;
    }

    public function setIncassato(string $incassato): self
    {
        $this->incassato = $incassato;

        return $this;
    }

    public function getDataincasso(): ?\DateTimeInterface
    {
        return $this->dataincasso;
    }

    public function setDataincasso(?\DateTimeInterface $dataincasso): self
    {
        $this->dataincasso = $dataincasso;

        return $this;
    }

    public function getDatafatturazione(): ?\DateTimeInterface
    {
        return $this->datafatturazione;
    }

    public function setDatafatturazione(?\DateTimeInterface $datafatturazione): self
    {
        $this->datafatturazione = $datafatturazione;

        return $this;
    }

    public function getEmailinviata(): ?bool
    {
        return $this->emailinviata;
    }

    public function setEmailinviata(bool $emailinviata): self
    {
        $this->emailinviata = $emailinviata;

        return $this;
    }

    public function getAttestatoinviato(): ?bool
    {
        return $this->attestatoinviato;
    }

    public function setAttestatoinviato(bool $attestatoinviato): self
    {
        $this->attestatoinviato = $attestatoinviato;

        return $this;
    }

    public function getDataiscrizione(): ?\DateTimeInterface
    {
        return $this->dataiscrizione;
    }

    public function setDataiscrizione(?\DateTimeInterface $dataiscrizione): self
    {
        $this->dataiscrizione = $dataiscrizione;

        return $this;
    }


}
