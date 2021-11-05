<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CorsoGestionale
 *
 * @ORM\Table(name="corso_gestionale", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_1AE9DE9BA2D1D11B", columns={"scheda_pdf_id"})})
 * @ORM\Entity
 */
class CorsoGestionale
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
     * @var string|null
     *
     * @ORM\Column(name="sigla_corso", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $siglaCorso = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nome", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $nome = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="percentuale_affiliato", type="decimal", precision=8, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $percentualeAffiliato = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ore", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $ore = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="in_aula", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $inAula = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="inizio_corso", type="date", nullable=true, options={"default"="NULL"})
     */
    private $inizioCorso = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fine_corso", type="date", nullable=true, options={"default"="NULL"})
     */
    private $fineCorso = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="costo_orario_docente", type="decimal", precision=8, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $costoOrarioDocente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="spese_organizzazione_corso", type="decimal", precision=8, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $speseOrganizzazioneCorso = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_esame", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataEsame = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $tipo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="titolo", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $titolo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sotto_titolo", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $sottoTitolo = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verifica_apprendimento", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $verificaApprendimento = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sicurezza", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $sicurezza = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="superamento_prova_finale", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $superamentoProvaFinale = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="superamento_prova_finale_online", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $superamentoProvaFinaleOnline = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="corso_qualificato", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $corsoQualificato = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ente", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $ente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_accreditamento", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $numeroAccreditamento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfp_agrari", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $cfpAgrari = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_agrari", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataAgrari = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_agrari", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $numeroAgrari = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_evento_agrari", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $codiceEventoAgrari = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfp_architetti", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $cfpArchitetti = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_architetti", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataArchitetti = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_architetti", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $numeroArchitetti = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_evento_architetti", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $codiceEventoArchitetti = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfp_periti_industriali", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $cfpPeritiIndustriali = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_periti_industriali", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataPeritiIndustriali = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_periti_industriali", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $numeroPeritiIndustriali = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_evento_periti_industriali", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $codiceEventoPeritiIndustriali = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfp_geometri", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $cfpGeometri = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_geometri", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataGeometri = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_geometri", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $numeroGeometri = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_evento_geometri", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $codiceEventoGeometri = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfp_ingegneri", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $cfpIngegneri = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_ingegneri", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataIngegneri = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_ingegneri", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $numeroIngegneri = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_evento_ingegneri", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $codiceEventoIngegneri = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_docente", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $emailDocente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prezzo_minimo", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $prezzoMinimo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prezzo_massimo", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $prezzoMassimo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="perc_provvigione", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $percProvvigione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sede_corso", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $sedeCorso = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="indirizzo", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $indirizzo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="referente_aula", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $referenteAula = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="posti_disponibili", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $postiDisponibili = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $createdBy = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $updatedBy = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="videoconferenza", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $videoconferenza = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="progdid", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $progdid = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="inspd", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $inspd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="legge", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $legge = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_mansione", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $isMansione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_codat", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $isCodat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_codidatt", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $isCodidatt = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="scadenza_prossimo_aggiornamento", type="date", nullable=true, options={"default"="NULL"})
     */
    private $scadenzaProssimoAggiornamento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_credito_formativo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $isCreditoFormativo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $categoria = 'NULL';

    /**
     * @var \File
     *
     * @ORM\ManyToOne(targetEntity="File")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="scheda_pdf_id", referencedColumnName="id")
     * })
     */
    private $schedaPdf;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GestAccount", mappedBy="corsoGestionale")
     */
    private $affiliato;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affiliato = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSiglaCorso(): ?string
    {
        return $this->siglaCorso;
    }

    public function setSiglaCorso(?string $siglaCorso): self
    {
        $this->siglaCorso = $siglaCorso;

        return $this;
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

    public function getPercentualeAffiliato(): ?string
    {
        return $this->percentualeAffiliato;
    }

    public function setPercentualeAffiliato(?string $percentualeAffiliato): self
    {
        $this->percentualeAffiliato = $percentualeAffiliato;

        return $this;
    }

    public function getOre(): ?string
    {
        return $this->ore;
    }

    public function setOre(?string $ore): self
    {
        $this->ore = $ore;

        return $this;
    }

    public function getInAula(): ?bool
    {
        return $this->inAula;
    }

    public function setInAula(?bool $inAula): self
    {
        $this->inAula = $inAula;

        return $this;
    }

    public function getInizioCorso(): ?\DateTimeInterface
    {
        return $this->inizioCorso;
    }

    public function setInizioCorso(?\DateTimeInterface $inizioCorso): self
    {
        $this->inizioCorso = $inizioCorso;

        return $this;
    }

    public function getFineCorso(): ?\DateTimeInterface
    {
        return $this->fineCorso;
    }

    public function setFineCorso(?\DateTimeInterface $fineCorso): self
    {
        $this->fineCorso = $fineCorso;

        return $this;
    }

    public function getCostoOrarioDocente(): ?string
    {
        return $this->costoOrarioDocente;
    }

    public function setCostoOrarioDocente(?string $costoOrarioDocente): self
    {
        $this->costoOrarioDocente = $costoOrarioDocente;

        return $this;
    }

    public function getSpeseOrganizzazioneCorso(): ?string
    {
        return $this->speseOrganizzazioneCorso;
    }

    public function setSpeseOrganizzazioneCorso(?string $speseOrganizzazioneCorso): self
    {
        $this->speseOrganizzazioneCorso = $speseOrganizzazioneCorso;

        return $this;
    }

    public function getDataEsame(): ?\DateTimeInterface
    {
        return $this->dataEsame;
    }

    public function setDataEsame(?\DateTimeInterface $dataEsame): self
    {
        $this->dataEsame = $dataEsame;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getTitolo(): ?string
    {
        return $this->titolo;
    }

    public function setTitolo(?string $titolo): self
    {
        $this->titolo = $titolo;

        return $this;
    }

    public function getSottoTitolo(): ?string
    {
        return $this->sottoTitolo;
    }

    public function setSottoTitolo(?string $sottoTitolo): self
    {
        $this->sottoTitolo = $sottoTitolo;

        return $this;
    }

    public function getVerificaApprendimento(): ?bool
    {
        return $this->verificaApprendimento;
    }

    public function setVerificaApprendimento(?bool $verificaApprendimento): self
    {
        $this->verificaApprendimento = $verificaApprendimento;

        return $this;
    }

    public function getSicurezza(): ?bool
    {
        return $this->sicurezza;
    }

    public function setSicurezza(?bool $sicurezza): self
    {
        $this->sicurezza = $sicurezza;

        return $this;
    }

    public function getSuperamentoProvaFinale(): ?bool
    {
        return $this->superamentoProvaFinale;
    }

    public function setSuperamentoProvaFinale(?bool $superamentoProvaFinale): self
    {
        $this->superamentoProvaFinale = $superamentoProvaFinale;

        return $this;
    }

    public function getSuperamentoProvaFinaleOnline(): ?bool
    {
        return $this->superamentoProvaFinaleOnline;
    }

    public function setSuperamentoProvaFinaleOnline(?bool $superamentoProvaFinaleOnline): self
    {
        $this->superamentoProvaFinaleOnline = $superamentoProvaFinaleOnline;

        return $this;
    }

    public function getCorsoQualificato(): ?bool
    {
        return $this->corsoQualificato;
    }

    public function setCorsoQualificato(?bool $corsoQualificato): self
    {
        $this->corsoQualificato = $corsoQualificato;

        return $this;
    }

    public function getEnte(): ?string
    {
        return $this->ente;
    }

    public function setEnte(?string $ente): self
    {
        $this->ente = $ente;

        return $this;
    }

    public function getNumeroAccreditamento(): ?string
    {
        return $this->numeroAccreditamento;
    }

    public function setNumeroAccreditamento(?string $numeroAccreditamento): self
    {
        $this->numeroAccreditamento = $numeroAccreditamento;

        return $this;
    }

    public function getCfpAgrari(): ?string
    {
        return $this->cfpAgrari;
    }

    public function setCfpAgrari(?string $cfpAgrari): self
    {
        $this->cfpAgrari = $cfpAgrari;

        return $this;
    }

    public function getDataAgrari(): ?\DateTimeInterface
    {
        return $this->dataAgrari;
    }

    public function setDataAgrari(?\DateTimeInterface $dataAgrari): self
    {
        $this->dataAgrari = $dataAgrari;

        return $this;
    }

    public function getNumeroAgrari(): ?string
    {
        return $this->numeroAgrari;
    }

    public function setNumeroAgrari(?string $numeroAgrari): self
    {
        $this->numeroAgrari = $numeroAgrari;

        return $this;
    }

    public function getCodiceEventoAgrari(): ?string
    {
        return $this->codiceEventoAgrari;
    }

    public function setCodiceEventoAgrari(?string $codiceEventoAgrari): self
    {
        $this->codiceEventoAgrari = $codiceEventoAgrari;

        return $this;
    }

    public function getCfpArchitetti(): ?string
    {
        return $this->cfpArchitetti;
    }

    public function setCfpArchitetti(?string $cfpArchitetti): self
    {
        $this->cfpArchitetti = $cfpArchitetti;

        return $this;
    }

    public function getDataArchitetti(): ?\DateTimeInterface
    {
        return $this->dataArchitetti;
    }

    public function setDataArchitetti(?\DateTimeInterface $dataArchitetti): self
    {
        $this->dataArchitetti = $dataArchitetti;

        return $this;
    }

    public function getNumeroArchitetti(): ?string
    {
        return $this->numeroArchitetti;
    }

    public function setNumeroArchitetti(?string $numeroArchitetti): self
    {
        $this->numeroArchitetti = $numeroArchitetti;

        return $this;
    }

    public function getCodiceEventoArchitetti(): ?string
    {
        return $this->codiceEventoArchitetti;
    }

    public function setCodiceEventoArchitetti(?string $codiceEventoArchitetti): self
    {
        $this->codiceEventoArchitetti = $codiceEventoArchitetti;

        return $this;
    }

    public function getCfpPeritiIndustriali(): ?string
    {
        return $this->cfpPeritiIndustriali;
    }

    public function setCfpPeritiIndustriali(?string $cfpPeritiIndustriali): self
    {
        $this->cfpPeritiIndustriali = $cfpPeritiIndustriali;

        return $this;
    }

    public function getDataPeritiIndustriali(): ?\DateTimeInterface
    {
        return $this->dataPeritiIndustriali;
    }

    public function setDataPeritiIndustriali(?\DateTimeInterface $dataPeritiIndustriali): self
    {
        $this->dataPeritiIndustriali = $dataPeritiIndustriali;

        return $this;
    }

    public function getNumeroPeritiIndustriali(): ?string
    {
        return $this->numeroPeritiIndustriali;
    }

    public function setNumeroPeritiIndustriali(?string $numeroPeritiIndustriali): self
    {
        $this->numeroPeritiIndustriali = $numeroPeritiIndustriali;

        return $this;
    }

    public function getCodiceEventoPeritiIndustriali(): ?string
    {
        return $this->codiceEventoPeritiIndustriali;
    }

    public function setCodiceEventoPeritiIndustriali(?string $codiceEventoPeritiIndustriali): self
    {
        $this->codiceEventoPeritiIndustriali = $codiceEventoPeritiIndustriali;

        return $this;
    }

    public function getCfpGeometri(): ?string
    {
        return $this->cfpGeometri;
    }

    public function setCfpGeometri(?string $cfpGeometri): self
    {
        $this->cfpGeometri = $cfpGeometri;

        return $this;
    }

    public function getDataGeometri(): ?\DateTimeInterface
    {
        return $this->dataGeometri;
    }

    public function setDataGeometri(?\DateTimeInterface $dataGeometri): self
    {
        $this->dataGeometri = $dataGeometri;

        return $this;
    }

    public function getNumeroGeometri(): ?string
    {
        return $this->numeroGeometri;
    }

    public function setNumeroGeometri(?string $numeroGeometri): self
    {
        $this->numeroGeometri = $numeroGeometri;

        return $this;
    }

    public function getCodiceEventoGeometri(): ?string
    {
        return $this->codiceEventoGeometri;
    }

    public function setCodiceEventoGeometri(?string $codiceEventoGeometri): self
    {
        $this->codiceEventoGeometri = $codiceEventoGeometri;

        return $this;
    }

    public function getCfpIngegneri(): ?string
    {
        return $this->cfpIngegneri;
    }

    public function setCfpIngegneri(?string $cfpIngegneri): self
    {
        $this->cfpIngegneri = $cfpIngegneri;

        return $this;
    }

    public function getDataIngegneri(): ?\DateTimeInterface
    {
        return $this->dataIngegneri;
    }

    public function setDataIngegneri(?\DateTimeInterface $dataIngegneri): self
    {
        $this->dataIngegneri = $dataIngegneri;

        return $this;
    }

    public function getNumeroIngegneri(): ?string
    {
        return $this->numeroIngegneri;
    }

    public function setNumeroIngegneri(?string $numeroIngegneri): self
    {
        $this->numeroIngegneri = $numeroIngegneri;

        return $this;
    }

    public function getCodiceEventoIngegneri(): ?string
    {
        return $this->codiceEventoIngegneri;
    }

    public function setCodiceEventoIngegneri(?string $codiceEventoIngegneri): self
    {
        $this->codiceEventoIngegneri = $codiceEventoIngegneri;

        return $this;
    }

    public function getEmailDocente(): ?string
    {
        return $this->emailDocente;
    }

    public function setEmailDocente(?string $emailDocente): self
    {
        $this->emailDocente = $emailDocente;

        return $this;
    }

    public function getPrezzoMinimo(): ?string
    {
        return $this->prezzoMinimo;
    }

    public function setPrezzoMinimo(?string $prezzoMinimo): self
    {
        $this->prezzoMinimo = $prezzoMinimo;

        return $this;
    }

    public function getPrezzoMassimo(): ?string
    {
        return $this->prezzoMassimo;
    }

    public function setPrezzoMassimo(?string $prezzoMassimo): self
    {
        $this->prezzoMassimo = $prezzoMassimo;

        return $this;
    }

    public function getPercProvvigione(): ?string
    {
        return $this->percProvvigione;
    }

    public function setPercProvvigione(?string $percProvvigione): self
    {
        $this->percProvvigione = $percProvvigione;

        return $this;
    }

    public function getSedeCorso(): ?string
    {
        return $this->sedeCorso;
    }

    public function setSedeCorso(?string $sedeCorso): self
    {
        $this->sedeCorso = $sedeCorso;

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

    public function getReferenteAula(): ?string
    {
        return $this->referenteAula;
    }

    public function setReferenteAula(?string $referenteAula): self
    {
        $this->referenteAula = $referenteAula;

        return $this;
    }

    public function getPostiDisponibili(): ?int
    {
        return $this->postiDisponibili;
    }

    public function setPostiDisponibili(?int $postiDisponibili): self
    {
        $this->postiDisponibili = $postiDisponibili;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function getVideoconferenza(): ?bool
    {
        return $this->videoconferenza;
    }

    public function setVideoconferenza(?bool $videoconferenza): self
    {
        $this->videoconferenza = $videoconferenza;

        return $this;
    }

    public function getProgdid(): ?string
    {
        return $this->progdid;
    }

    public function setProgdid(?string $progdid): self
    {
        $this->progdid = $progdid;

        return $this;
    }

    public function getInspd(): ?bool
    {
        return $this->inspd;
    }

    public function setInspd(?bool $inspd): self
    {
        $this->inspd = $inspd;

        return $this;
    }

    public function getLegge(): ?string
    {
        return $this->legge;
    }

    public function setLegge(?string $legge): self
    {
        $this->legge = $legge;

        return $this;
    }

    public function getIsMansione(): ?string
    {
        return $this->isMansione;
    }

    public function setIsMansione(?string $isMansione): self
    {
        $this->isMansione = $isMansione;

        return $this;
    }

    public function getIsCodat(): ?string
    {
        return $this->isCodat;
    }

    public function setIsCodat(?string $isCodat): self
    {
        $this->isCodat = $isCodat;

        return $this;
    }

    public function getIsCodidatt(): ?string
    {
        return $this->isCodidatt;
    }

    public function setIsCodidatt(?string $isCodidatt): self
    {
        $this->isCodidatt = $isCodidatt;

        return $this;
    }

    public function getScadenzaProssimoAggiornamento(): ?\DateTimeInterface
    {
        return $this->scadenzaProssimoAggiornamento;
    }

    public function setScadenzaProssimoAggiornamento(?\DateTimeInterface $scadenzaProssimoAggiornamento): self
    {
        $this->scadenzaProssimoAggiornamento = $scadenzaProssimoAggiornamento;

        return $this;
    }

    public function getIsCreditoFormativo(): ?string
    {
        return $this->isCreditoFormativo;
    }

    public function setIsCreditoFormativo(?string $isCreditoFormativo): self
    {
        $this->isCreditoFormativo = $isCreditoFormativo;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(?string $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getSchedaPdf(): ?File
    {
        return $this->schedaPdf;
    }

    public function setSchedaPdf(?File $schedaPdf): self
    {
        $this->schedaPdf = $schedaPdf;

        return $this;
    }

    /**
     * @return Collection|GestAccount[]
     */
    public function getAffiliato(): Collection
    {
        return $this->affiliato;
    }

    public function addAffiliato(GestAccount $affiliato): self
    {
        if (!$this->affiliato->contains($affiliato)) {
            $this->affiliato[] = $affiliato;
            $affiliato->addCorsoGestionale($this);
        }

        return $this;
    }

    public function removeAffiliato(GestAccount $affiliato): self
    {
        if ($this->affiliato->removeElement($affiliato)) {
            $affiliato->removeCorsoGestionale($this);
        }

        return $this;
    }

}
