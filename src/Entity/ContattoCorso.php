<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContattoCorso
 *
 * @ORM\Table(name="contatto_corso", indexes={@ORM\Index(name="IDX_8FF7A6E0516A2076", columns={"corso_gestionale_id"}), @ORM\Index(name="IDX_8FF7A6E04465899F", columns={"corso_id"}), @ORM\Index(name="IDX_8FF7A6E075836E8A", columns={"contatto_id"}), @ORM\Index(name="IDX_8FF7A6E023E587C1", columns={"canale_marketing_id"})})
 * @ORM\Entity
 */
class ContattoCorso
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
     * @var string|null
     *
     * @ORM\Column(name="incassato", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $incassato = 'NULL';

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

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_invio_attestato", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataInvioAttestato = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ora_richiamo", type="time", nullable=true, options={"default"="NULL"})
     */
    private $oraRichiamo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $tipoPagamento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="importo_annullato", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $importoAnnullato = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_annullamento", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataAnnullamento = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="esente_iva", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $esenteIva = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="split_payment", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $splitPayment = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pagamento_rateizzato", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $pagamentoRateizzato = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="annullato", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $annullato = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_gestionale", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $isGestionale = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="da_cancellare", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $daCancellare = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="invio_notifica_affiliati", type="boolean", nullable=false)
     */
    private $invioNotificaAffiliati;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formato_attestato", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $formatoAttestato = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="scadenza_prossimo_aggiornamento", type="date", nullable=true, options={"default"="NULL"})
     */
    private $scadenzaProssimoAggiornamento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fattura_emessa", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $fatturaEmessa = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_fattura", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $numeroFattura = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="email_pagamento_contanti_inviata", type="boolean", nullable=false)
     */
    private $emailPagamentoContantiInviata;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acconto_uno", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $accontoUno = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_acconto_uno", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataAccontoUno = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="acconto_due", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $accontoDue = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_acconto_due", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataAccontoDue = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="acconto_tre", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $accontoTre = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_acconto_tre", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dataAccontoTre = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="acconto_uno_iva", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $accontoUnoIva = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="acconto_due_iva", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $accontoDueIva = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="acconto_tre_iva", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $accontoTreIva = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prezzo_iva", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $prezzoIva = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="fondi_interprofessionali", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $fondiInterprofessionali = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fondo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $fondo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="avviso", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $avviso = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="progetto", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $progetto = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="edizione", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $edizione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dox", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $dox = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codid_att", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $codidAtt = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pagato", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $pagato = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="secondo_fondo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $secondoFondo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="secondo_avviso", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $secondoAvviso = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="secondo_progetto", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $secondoProgetto = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seconda_edizione", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $secondaEdizione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="secondo_dox", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $secondoDox = 'NULL';

    /**
     * @var \CanaleMarketing
     *
     * @ORM\ManyToOne(targetEntity="CanaleMarketing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="canale_marketing_id", referencedColumnName="id")
     * })
     */
    private $canaleMarketing;

    /**
     * @var \MdlCourse
     *
     * @ORM\ManyToOne(targetEntity="MdlCourse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corso_id", referencedColumnName="id")
     * })
     */
    private $corso;

    /**
     * @var \CorsoGestionale
     *
     * @ORM\ManyToOne(targetEntity="CorsoGestionale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corso_gestionale_id", referencedColumnName="id")
     * })
     */
    private $corsoGestionale;

    /**
     * @var \Contatto
     *
     * @ORM\ManyToOne(targetEntity="Contatto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contatto_id", referencedColumnName="id")
     * })
     */
    private $contatto;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setIncassato(?string $incassato): self
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

    public function getDataInvioAttestato(): ?\DateTimeInterface
    {
        return $this->dataInvioAttestato;
    }

    public function setDataInvioAttestato(?\DateTimeInterface $dataInvioAttestato): self
    {
        $this->dataInvioAttestato = $dataInvioAttestato;

        return $this;
    }

    public function getOraRichiamo(): ?\DateTimeInterface
    {
        return $this->oraRichiamo;
    }

    public function setOraRichiamo(?\DateTimeInterface $oraRichiamo): self
    {
        $this->oraRichiamo = $oraRichiamo;

        return $this;
    }

    public function getTipoPagamento(): ?string
    {
        return $this->tipoPagamento;
    }

    public function setTipoPagamento(?string $tipoPagamento): self
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    public function getImportoAnnullato(): ?string
    {
        return $this->importoAnnullato;
    }

    public function setImportoAnnullato(?string $importoAnnullato): self
    {
        $this->importoAnnullato = $importoAnnullato;

        return $this;
    }

    public function getDataAnnullamento(): ?\DateTimeInterface
    {
        return $this->dataAnnullamento;
    }

    public function setDataAnnullamento(?\DateTimeInterface $dataAnnullamento): self
    {
        $this->dataAnnullamento = $dataAnnullamento;

        return $this;
    }

    public function getEsenteIva(): ?bool
    {
        return $this->esenteIva;
    }

    public function setEsenteIva(?bool $esenteIva): self
    {
        $this->esenteIva = $esenteIva;

        return $this;
    }

    public function getSplitPayment(): ?bool
    {
        return $this->splitPayment;
    }

    public function setSplitPayment(?bool $splitPayment): self
    {
        $this->splitPayment = $splitPayment;

        return $this;
    }

    public function getPagamentoRateizzato(): ?bool
    {
        return $this->pagamentoRateizzato;
    }

    public function setPagamentoRateizzato(?bool $pagamentoRateizzato): self
    {
        $this->pagamentoRateizzato = $pagamentoRateizzato;

        return $this;
    }

    public function getAnnullato(): ?bool
    {
        return $this->annullato;
    }

    public function setAnnullato(?bool $annullato): self
    {
        $this->annullato = $annullato;

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

    public function getIsGestionale(): ?bool
    {
        return $this->isGestionale;
    }

    public function setIsGestionale(?bool $isGestionale): self
    {
        $this->isGestionale = $isGestionale;

        return $this;
    }

    public function getDaCancellare(): ?bool
    {
        return $this->daCancellare;
    }

    public function setDaCancellare(?bool $daCancellare): self
    {
        $this->daCancellare = $daCancellare;

        return $this;
    }

    public function getInvioNotificaAffiliati(): ?bool
    {
        return $this->invioNotificaAffiliati;
    }

    public function setInvioNotificaAffiliati(bool $invioNotificaAffiliati): self
    {
        $this->invioNotificaAffiliati = $invioNotificaAffiliati;

        return $this;
    }

    public function getFormatoAttestato(): ?string
    {
        return $this->formatoAttestato;
    }

    public function setFormatoAttestato(?string $formatoAttestato): self
    {
        $this->formatoAttestato = $formatoAttestato;

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

    public function getFatturaEmessa(): ?string
    {
        return $this->fatturaEmessa;
    }

    public function setFatturaEmessa(?string $fatturaEmessa): self
    {
        $this->fatturaEmessa = $fatturaEmessa;

        return $this;
    }

    public function getNumeroFattura(): ?string
    {
        return $this->numeroFattura;
    }

    public function setNumeroFattura(?string $numeroFattura): self
    {
        $this->numeroFattura = $numeroFattura;

        return $this;
    }

    public function getEmailPagamentoContantiInviata(): ?bool
    {
        return $this->emailPagamentoContantiInviata;
    }

    public function setEmailPagamentoContantiInviata(bool $emailPagamentoContantiInviata): self
    {
        $this->emailPagamentoContantiInviata = $emailPagamentoContantiInviata;

        return $this;
    }

    public function getAccontoUno(): ?string
    {
        return $this->accontoUno;
    }

    public function setAccontoUno(?string $accontoUno): self
    {
        $this->accontoUno = $accontoUno;

        return $this;
    }

    public function getDataAccontoUno(): ?\DateTimeInterface
    {
        return $this->dataAccontoUno;
    }

    public function setDataAccontoUno(?\DateTimeInterface $dataAccontoUno): self
    {
        $this->dataAccontoUno = $dataAccontoUno;

        return $this;
    }

    public function getAccontoDue(): ?string
    {
        return $this->accontoDue;
    }

    public function setAccontoDue(?string $accontoDue): self
    {
        $this->accontoDue = $accontoDue;

        return $this;
    }

    public function getDataAccontoDue(): ?\DateTimeInterface
    {
        return $this->dataAccontoDue;
    }

    public function setDataAccontoDue(?\DateTimeInterface $dataAccontoDue): self
    {
        $this->dataAccontoDue = $dataAccontoDue;

        return $this;
    }

    public function getAccontoTre(): ?string
    {
        return $this->accontoTre;
    }

    public function setAccontoTre(?string $accontoTre): self
    {
        $this->accontoTre = $accontoTre;

        return $this;
    }

    public function getDataAccontoTre(): ?\DateTimeInterface
    {
        return $this->dataAccontoTre;
    }

    public function setDataAccontoTre(?\DateTimeInterface $dataAccontoTre): self
    {
        $this->dataAccontoTre = $dataAccontoTre;

        return $this;
    }

    public function getAccontoUnoIva(): ?string
    {
        return $this->accontoUnoIva;
    }

    public function setAccontoUnoIva(?string $accontoUnoIva): self
    {
        $this->accontoUnoIva = $accontoUnoIva;

        return $this;
    }

    public function getAccontoDueIva(): ?string
    {
        return $this->accontoDueIva;
    }

    public function setAccontoDueIva(?string $accontoDueIva): self
    {
        $this->accontoDueIva = $accontoDueIva;

        return $this;
    }

    public function getAccontoTreIva(): ?string
    {
        return $this->accontoTreIva;
    }

    public function setAccontoTreIva(?string $accontoTreIva): self
    {
        $this->accontoTreIva = $accontoTreIva;

        return $this;
    }

    public function getPrezzoIva(): ?string
    {
        return $this->prezzoIva;
    }

    public function setPrezzoIva(?string $prezzoIva): self
    {
        $this->prezzoIva = $prezzoIva;

        return $this;
    }

    public function getFondiInterprofessionali(): ?bool
    {
        return $this->fondiInterprofessionali;
    }

    public function setFondiInterprofessionali(?bool $fondiInterprofessionali): self
    {
        $this->fondiInterprofessionali = $fondiInterprofessionali;

        return $this;
    }

    public function getFondo(): ?string
    {
        return $this->fondo;
    }

    public function setFondo(?string $fondo): self
    {
        $this->fondo = $fondo;

        return $this;
    }

    public function getAvviso(): ?string
    {
        return $this->avviso;
    }

    public function setAvviso(?string $avviso): self
    {
        $this->avviso = $avviso;

        return $this;
    }

    public function getProgetto(): ?string
    {
        return $this->progetto;
    }

    public function setProgetto(?string $progetto): self
    {
        $this->progetto = $progetto;

        return $this;
    }

    public function getEdizione(): ?string
    {
        return $this->edizione;
    }

    public function setEdizione(?string $edizione): self
    {
        $this->edizione = $edizione;

        return $this;
    }

    public function getDox(): ?string
    {
        return $this->dox;
    }

    public function setDox(?string $dox): self
    {
        $this->dox = $dox;

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

    public function getPagato(): ?bool
    {
        return $this->pagato;
    }

    public function setPagato(?bool $pagato): self
    {
        $this->pagato = $pagato;

        return $this;
    }

    public function getSecondoFondo(): ?string
    {
        return $this->secondoFondo;
    }

    public function setSecondoFondo(?string $secondoFondo): self
    {
        $this->secondoFondo = $secondoFondo;

        return $this;
    }

    public function getSecondoAvviso(): ?string
    {
        return $this->secondoAvviso;
    }

    public function setSecondoAvviso(?string $secondoAvviso): self
    {
        $this->secondoAvviso = $secondoAvviso;

        return $this;
    }

    public function getSecondoProgetto(): ?string
    {
        return $this->secondoProgetto;
    }

    public function setSecondoProgetto(?string $secondoProgetto): self
    {
        $this->secondoProgetto = $secondoProgetto;

        return $this;
    }

    public function getSecondaEdizione(): ?string
    {
        return $this->secondaEdizione;
    }

    public function setSecondaEdizione(?string $secondaEdizione): self
    {
        $this->secondaEdizione = $secondaEdizione;

        return $this;
    }

    public function getSecondoDox(): ?string
    {
        return $this->secondoDox;
    }

    public function setSecondoDox(?string $secondoDox): self
    {
        $this->secondoDox = $secondoDox;

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

    public function getCorso(): ?MdlCourse
    {
        return $this->corso;
    }

    public function setCorso(?MdlCourse $corso): self
    {
        $this->corso = $corso;

        return $this;
    }

    public function getCorsoGestionale(): ?CorsoGestionale
    {
        return $this->corsoGestionale;
    }

    public function setCorsoGestionale(?CorsoGestionale $corsoGestionale): self
    {
        $this->corsoGestionale = $corsoGestionale;

        return $this;
    }

    public function getContatto(): ?Contatto
    {
        return $this->contatto;
    }

    public function setContatto(?Contatto $contatto): self
    {
        $this->contatto = $contatto;

        return $this;
    }


}
