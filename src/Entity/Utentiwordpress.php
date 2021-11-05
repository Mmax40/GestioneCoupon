<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utentiwordpress
 *
 * @ORM\Table(name="UtentiWordpress")
 * @ORM\Entity
 */
class Utentiwordpress
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
     * @var string|null
     *
     * @ORM\Column(name="Nome", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nome = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cognome", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $cognome = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Indirizzo1", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $indirizzo1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Citta", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $citta = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Stato", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $stato = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cap", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $cap = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nazione", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nazione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $tel = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cap2", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $cap2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodFiscale", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $codfiscale = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Citta2", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $citta2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumIscrizioneAlbo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $numiscrizionealbo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ProvIscrizioneAlbo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $proviscrizionealbo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodiceAteco", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $codiceateco = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Note", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Importato", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $importato = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MetodoPagamento", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $metodopagamento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prezzo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $prezzo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Corso", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $corso = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCognome(): ?string
    {
        return $this->cognome;
    }

    public function setCognome(?string $cognome): self
    {
        $this->cognome = $cognome;

        return $this;
    }

    public function getIndirizzo1(): ?string
    {
        return $this->indirizzo1;
    }

    public function setIndirizzo1(?string $indirizzo1): self
    {
        $this->indirizzo1 = $indirizzo1;

        return $this;
    }

    public function getCitta(): ?string
    {
        return $this->citta;
    }

    public function setCitta(?string $citta): self
    {
        $this->citta = $citta;

        return $this;
    }

    public function getStato(): ?string
    {
        return $this->stato;
    }

    public function setStato(?string $stato): self
    {
        $this->stato = $stato;

        return $this;
    }

    public function getCap(): ?string
    {
        return $this->cap;
    }

    public function setCap(?string $cap): self
    {
        $this->cap = $cap;

        return $this;
    }

    public function getNazione(): ?string
    {
        return $this->nazione;
    }

    public function setNazione(?string $nazione): self
    {
        $this->nazione = $nazione;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getCap2(): ?string
    {
        return $this->cap2;
    }

    public function setCap2(?string $cap2): self
    {
        $this->cap2 = $cap2;

        return $this;
    }

    public function getCodfiscale(): ?string
    {
        return $this->codfiscale;
    }

    public function setCodfiscale(?string $codfiscale): self
    {
        $this->codfiscale = $codfiscale;

        return $this;
    }

    public function getCitta2(): ?string
    {
        return $this->citta2;
    }

    public function setCitta2(?string $citta2): self
    {
        $this->citta2 = $citta2;

        return $this;
    }

    public function getNumiscrizionealbo(): ?string
    {
        return $this->numiscrizionealbo;
    }

    public function setNumiscrizionealbo(?string $numiscrizionealbo): self
    {
        $this->numiscrizionealbo = $numiscrizionealbo;

        return $this;
    }

    public function getProviscrizionealbo(): ?string
    {
        return $this->proviscrizionealbo;
    }

    public function setProviscrizionealbo(?string $proviscrizionealbo): self
    {
        $this->proviscrizionealbo = $proviscrizionealbo;

        return $this;
    }

    public function getCodiceateco(): ?string
    {
        return $this->codiceateco;
    }

    public function setCodiceateco(?string $codiceateco): self
    {
        $this->codiceateco = $codiceateco;

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

    public function getImportato(): ?string
    {
        return $this->importato;
    }

    public function setImportato(?string $importato): self
    {
        $this->importato = $importato;

        return $this;
    }

    public function getMetodopagamento(): ?string
    {
        return $this->metodopagamento;
    }

    public function setMetodopagamento(?string $metodopagamento): self
    {
        $this->metodopagamento = $metodopagamento;

        return $this;
    }

    public function getPrezzo(): ?string
    {
        return $this->prezzo;
    }

    public function setPrezzo(?string $prezzo): self
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    public function getCorso(): ?string
    {
        return $this->corso;
    }

    public function setCorso(?string $corso): self
    {
        $this->corso = $corso;

        return $this;
    }


}
