<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Azienda
 *
 * @ORM\Table(name="azienda", indexes={@ORM\Index(name="IDX_FBA3BDC2A313F49B", columns={"citta_id"}), @ORM\Index(name="IDX_FBA3BDC24E7121AF", columns={"provincia_id"}), @ORM\Index(name="IDX_FBA3BDC2F0AF24FE", columns={"affiliato_id"})})
 * @ORM\Entity
 */
class Azienda
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
     * @ORM\Column(name="tipo_mercato", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $tipoMercato = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ragione_sociale", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $ragioneSociale = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="indirizzo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $indirizzo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cap", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $cap = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="partita_iva", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $partitaIva = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_fiscale", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $codiceFiscale = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

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
     * @var string|null
     *
     * @ORM\Column(name="codice_ateco", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $codiceAteco = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_sdi", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $codiceSdi = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="datore_di_lavoro", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $datoreDiLavoro = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="consulente_del_lavoro", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $consulenteDelLavoro = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tecnico_specialista", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $tecnicoSpecialista = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="medico_competente", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $medicoCompetente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rspp", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $rspp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rls", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $rls = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="settore_lavorativo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $settoreLavorativo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fondoaz", type="text", length=255, nullable=true, options={"default"="NULL"})
     */
    private $fondoaz = 'NULL';

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     * })
     */
    private $provincia;

    /**
     * @var \Comune
     *
     * @ORM\ManyToOne(targetEntity="Comune")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="citta_id", referencedColumnName="id")
     * })
     */
    private $citta;

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

    public function getTipoMercato(): ?string
    {
        return $this->tipoMercato;
    }

    public function setTipoMercato(?string $tipoMercato): self
    {
        $this->tipoMercato = $tipoMercato;

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

    public function getIndirizzo(): ?string
    {
        return $this->indirizzo;
    }

    public function setIndirizzo(?string $indirizzo): self
    {
        $this->indirizzo = $indirizzo;

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

    public function getPartitaIva(): ?string
    {
        return $this->partitaIva;
    }

    public function setPartitaIva(?string $partitaIva): self
    {
        $this->partitaIva = $partitaIva;

        return $this;
    }

    public function getCodiceFiscale(): ?string
    {
        return $this->codiceFiscale;
    }

    public function setCodiceFiscale(?string $codiceFiscale): self
    {
        $this->codiceFiscale = $codiceFiscale;

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

    public function getCodiceAteco(): ?string
    {
        return $this->codiceAteco;
    }

    public function setCodiceAteco(?string $codiceAteco): self
    {
        $this->codiceAteco = $codiceAteco;

        return $this;
    }

    public function getCodiceSdi(): ?string
    {
        return $this->codiceSdi;
    }

    public function setCodiceSdi(?string $codiceSdi): self
    {
        $this->codiceSdi = $codiceSdi;

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

    public function getDatoreDiLavoro(): ?string
    {
        return $this->datoreDiLavoro;
    }

    public function setDatoreDiLavoro(?string $datoreDiLavoro): self
    {
        $this->datoreDiLavoro = $datoreDiLavoro;

        return $this;
    }

    public function getConsulenteDelLavoro(): ?string
    {
        return $this->consulenteDelLavoro;
    }

    public function setConsulenteDelLavoro(?string $consulenteDelLavoro): self
    {
        $this->consulenteDelLavoro = $consulenteDelLavoro;

        return $this;
    }

    public function getTecnicoSpecialista(): ?string
    {
        return $this->tecnicoSpecialista;
    }

    public function setTecnicoSpecialista(?string $tecnicoSpecialista): self
    {
        $this->tecnicoSpecialista = $tecnicoSpecialista;

        return $this;
    }

    public function getMedicoCompetente(): ?string
    {
        return $this->medicoCompetente;
    }

    public function setMedicoCompetente(?string $medicoCompetente): self
    {
        $this->medicoCompetente = $medicoCompetente;

        return $this;
    }

    public function getRspp(): ?string
    {
        return $this->rspp;
    }

    public function setRspp(?string $rspp): self
    {
        $this->rspp = $rspp;

        return $this;
    }

    public function getRls(): ?string
    {
        return $this->rls;
    }

    public function setRls(?string $rls): self
    {
        $this->rls = $rls;

        return $this;
    }

    public function getSettoreLavorativo(): ?string
    {
        return $this->settoreLavorativo;
    }

    public function setSettoreLavorativo(?string $settoreLavorativo): self
    {
        $this->settoreLavorativo = $settoreLavorativo;

        return $this;
    }

    public function getFondoaz(): ?string
    {
        return $this->fondoaz;
    }

    public function setFondoaz(?string $fondoaz): self
    {
        $this->fondoaz = $fondoaz;

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

    public function getCitta(): ?Comune
    {
        return $this->citta;
    }

    public function setCitta(?Comune $citta): self
    {
        $this->citta = $citta;

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
