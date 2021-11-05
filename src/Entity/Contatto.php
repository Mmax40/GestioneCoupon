<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contatto
 *
 * @ORM\Table(name="contatto", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_3E28FCC9F459D4F0", columns={"utente_moodle_id"})}, indexes={@ORM\Index(name="full", columns={"nome", "cognome", "telefono", "cellulare", "email", "note"}), @ORM\Index(name="IDX_3E28FCC98A5CC3E5", columns={"secondo_albo_provincia_id"}), @ORM\Index(name="IDX_3E28FCC992A4CA0A", columns={"nascita_comune_id"}), @ORM\Index(name="IDX_3E28FCC94B17572D", columns={"residenza_comune_id"}), @ORM\Index(name="IDX_3E28FCC9442F1851", columns={"nascita_prov_id"}), @ORM\Index(name="IDX_3E28FCC9867ABD2E", columns={"commerciale_id"}), @ORM\Index(name="IDX_3E28FCC94FC56EA3", columns={"residenza_provincia_id"}), @ORM\Index(name="IDX_3E28FCC9FA121DDD", columns={"primo_albo_provincia_id"}), @ORM\Index(name="IDX_3E28FCC9F0AF24FE", columns={"affiliato_id"})})
 * @ORM\Entity
 */
class Contatto
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
     * @ORM\Column(name="cognome", type="string", length=255, nullable=false)
     */
    private $cognome;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nascita_data", type="date", nullable=true, options={"default"="NULL"})
     */
    private $nascitaData = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sessoMaschile", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $sessomaschile = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codiceFiscale", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $codicefiscale = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cellulare", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $cellulare = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $telefono = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="professione", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $professione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="albo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $albo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numIscrizione", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $numiscrizione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ultimoContatto", type="date", nullable=true, options={"default"="NULL"})
     */
    private $ultimocontatto = 'NULL';

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
     * @var string|null
     *
     * @ORM\Column(name="email_secondaria", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $emailSecondaria = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pec", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $pec = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="email_marketing", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $emailMarketing = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="libero_professionista", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $liberoProfessionista = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="partita_iva", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $partitaIva = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seconda_professione", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $secondaProfessione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ragione_sociale", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $ragioneSociale = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_partecipante", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $emailPartecipante = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="indirizzo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $indirizzo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_civico", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $numeroCivico = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cap", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $cap = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="carta_identita", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $cartaIdentita = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mansione", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $mansione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codid_att", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $codidAtt = 'NULL';

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nascita_prov_id", referencedColumnName="id")
     * })
     */
    private $nascitaProv;

    /**
     * @var \Comune
     *
     * @ORM\ManyToOne(targetEntity="Comune")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="residenza_comune_id", referencedColumnName="id")
     * })
     */
    private $residenzaComune;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="residenza_provincia_id", referencedColumnName="id")
     * })
     */
    private $residenzaProvincia;

    /**
     * @var \GestAccount
     *
     * @ORM\ManyToOne(targetEntity="GestAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commerciale_id", referencedColumnName="id")
     * })
     */
    private $commerciale;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="secondo_albo_provincia_id", referencedColumnName="id")
     * })
     */
    private $secondoAlboProvincia;

    /**
     * @var \Comune
     *
     * @ORM\ManyToOne(targetEntity="Comune")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nascita_comune_id", referencedColumnName="id")
     * })
     */
    private $nascitaComune;

    /**
     * @var \GestAccount
     *
     * @ORM\ManyToOne(targetEntity="GestAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="affiliato_id", referencedColumnName="id")
     * })
     */
    private $affiliato;

    /**
     * @var \MdlUser
     *
     * @ORM\ManyToOne(targetEntity="MdlUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utente_moodle_id", referencedColumnName="id")
     * })
     */
    private $utenteMoodle;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="primo_albo_provincia_id", referencedColumnName="id")
     * })
     */
    private $primoAlboProvincia;

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

    public function getCognome(): ?string
    {
        return $this->cognome;
    }

    public function setCognome(string $cognome): self
    {
        $this->cognome = $cognome;

        return $this;
    }

    public function getNascitaData(): ?\DateTimeInterface
    {
        return $this->nascitaData;
    }

    public function setNascitaData(?\DateTimeInterface $nascitaData): self
    {
        $this->nascitaData = $nascitaData;

        return $this;
    }

    public function getSessomaschile(): ?bool
    {
        return $this->sessomaschile;
    }

    public function setSessomaschile(?bool $sessomaschile): self
    {
        $this->sessomaschile = $sessomaschile;

        return $this;
    }

    public function getCodicefiscale(): ?string
    {
        return $this->codicefiscale;
    }

    public function setCodicefiscale(?string $codicefiscale): self
    {
        $this->codicefiscale = $codicefiscale;

        return $this;
    }

    public function getCellulare(): ?string
    {
        return $this->cellulare;
    }

    public function setCellulare(?string $cellulare): self
    {
        $this->cellulare = $cellulare;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getProfessione(): ?string
    {
        return $this->professione;
    }

    public function setProfessione(?string $professione): self
    {
        $this->professione = $professione;

        return $this;
    }

    public function getAlbo(): ?string
    {
        return $this->albo;
    }

    public function setAlbo(?string $albo): self
    {
        $this->albo = $albo;

        return $this;
    }

    public function getNumiscrizione(): ?string
    {
        return $this->numiscrizione;
    }

    public function setNumiscrizione(?string $numiscrizione): self
    {
        $this->numiscrizione = $numiscrizione;

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

    public function getUltimocontatto(): ?\DateTimeInterface
    {
        return $this->ultimocontatto;
    }

    public function setUltimocontatto(?\DateTimeInterface $ultimocontatto): self
    {
        $this->ultimocontatto = $ultimocontatto;

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

    public function getEmailSecondaria(): ?string
    {
        return $this->emailSecondaria;
    }

    public function setEmailSecondaria(?string $emailSecondaria): self
    {
        $this->emailSecondaria = $emailSecondaria;

        return $this;
    }

    public function getPec(): ?string
    {
        return $this->pec;
    }

    public function setPec(?string $pec): self
    {
        $this->pec = $pec;

        return $this;
    }

    public function getEmailMarketing(): ?bool
    {
        return $this->emailMarketing;
    }

    public function setEmailMarketing(?bool $emailMarketing): self
    {
        $this->emailMarketing = $emailMarketing;

        return $this;
    }

    public function getLiberoProfessionista(): ?bool
    {
        return $this->liberoProfessionista;
    }

    public function setLiberoProfessionista(?bool $liberoProfessionista): self
    {
        $this->liberoProfessionista = $liberoProfessionista;

        return $this;
    }

    public function getPartitaIva(): ?string
    {
        return $this->partitaIva;
    }

    public function setPartitaIva(?string $partitaIva): self
    {
        $this->partitaIva = $partitaIva;

        return $this;
    }

    public function getSecondaProfessione(): ?string
    {
        return $this->secondaProfessione;
    }

    public function setSecondaProfessione(?string $secondaProfessione): self
    {
        $this->secondaProfessione = $secondaProfessione;

        return $this;
    }

    public function getRagioneSociale(): ?string
    {
        return $this->ragioneSociale;
    }

    public function setRagioneSociale(?string $ragioneSociale): self
    {
        $this->ragioneSociale = $ragioneSociale;

        return $this;
    }

    public function getEmailPartecipante(): ?string
    {
        return $this->emailPartecipante;
    }

    public function setEmailPartecipante(?string $emailPartecipante): self
    {
        $this->emailPartecipante = $emailPartecipante;

        return $this;
    }

    public function getIndirizzo(): ?string
    {
        return $this->indirizzo;
    }

    public function setIndirizzo(?string $indirizzo): self
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    public function getNumeroCivico(): ?string
    {
        return $this->numeroCivico;
    }

    public function setNumeroCivico(?string $numeroCivico): self
    {
        $this->numeroCivico = $numeroCivico;

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

    public function getCartaIdentita(): ?string
    {
        return $this->cartaIdentita;
    }

    public function setCartaIdentita(?string $cartaIdentita): self
    {
        $this->cartaIdentita = $cartaIdentita;

        return $this;
    }

    public function getMansione(): ?string
    {
        return $this->mansione;
    }

    public function setMansione(?string $mansione): self
    {
        $this->mansione = $mansione;

        return $this;
    }

    public function getCodidAtt(): ?string
    {
        return $this->codidAtt;
    }

    public function setCodidAtt(?string $codidAtt): self
    {
        $this->codidAtt = $codidAtt;

        return $this;
    }

    public function getNascitaProv(): ?Provincia
    {
        return $this->nascitaProv;
    }

    public function setNascitaProv(?Provincia $nascitaProv): self
    {
        $this->nascitaProv = $nascitaProv;

        return $this;
    }

    public function getResidenzaComune(): ?Comune
    {
        return $this->residenzaComune;
    }

    public function setResidenzaComune(?Comune $residenzaComune): self
    {
        $this->residenzaComune = $residenzaComune;

        return $this;
    }

    public function getResidenzaProvincia(): ?Provincia
    {
        return $this->residenzaProvincia;
    }

    public function setResidenzaProvincia(?Provincia $residenzaProvincia): self
    {
        $this->residenzaProvincia = $residenzaProvincia;

        return $this;
    }

    public function getCommerciale(): ?GestAccount
    {
        return $this->commerciale;
    }

    public function setCommerciale(?GestAccount $commerciale): self
    {
        $this->commerciale = $commerciale;

        return $this;
    }

    public function getSecondoAlboProvincia(): ?Provincia
    {
        return $this->secondoAlboProvincia;
    }

    public function setSecondoAlboProvincia(?Provincia $secondoAlboProvincia): self
    {
        $this->secondoAlboProvincia = $secondoAlboProvincia;

        return $this;
    }

    public function getNascitaComune(): ?Comune
    {
        return $this->nascitaComune;
    }

    public function setNascitaComune(?Comune $nascitaComune): self
    {
        $this->nascitaComune = $nascitaComune;

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

    public function getUtenteMoodle(): ?MdlUser
    {
        return $this->utenteMoodle;
    }

    public function setUtenteMoodle(?MdlUser $utenteMoodle): self
    {
        $this->utenteMoodle = $utenteMoodle;

        return $this;
    }

    public function getPrimoAlboProvincia(): ?Provincia
    {
        return $this->primoAlboProvincia;
    }

    public function setPrimoAlboProvincia(?Provincia $primoAlboProvincia): self
    {
        $this->primoAlboProvincia = $primoAlboProvincia;

        return $this;
    }


}
