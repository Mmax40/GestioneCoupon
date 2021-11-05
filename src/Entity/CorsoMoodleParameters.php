<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsoMoodleParameters
 *
 * @ORM\Table(name="corso_moodle_parameters", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_4D1A1074465899F", columns={"corso_id"}), @ORM\UniqueConstraint(name="UNIQ_4D1A107A2D1D11B", columns={"scheda_pdf_id"})})
 * @ORM\Entity
 */
class CorsoMoodleParameters
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
     * @ORM\Column(name="email_docente", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $emailDocente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="perc_provvigione", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $percProvvigione = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="spese_docenti", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $speseDocenti = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="spese_marketing", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $speseMarketing = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="spese_varie", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $speseVarie = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $categoria = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="legge", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $legge = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_mansione", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $isMansione = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_codat", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $isCodat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_credito_formativo", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $isCreditoFormativo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="durata", type="decimal", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $durata = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="firma", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $firma = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="progdid", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $progdid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="titolo", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $titolo = 'NULL';

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
     * @var \File
     *
     * @ORM\ManyToOne(targetEntity="File")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="scheda_pdf_id", referencedColumnName="id")
     * })
     */
    private $schedaPdf;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEmailDocente(): ?string
    {
        return $this->emailDocente;
    }

    public function setEmailDocente(?string $emailDocente): self
    {
        $this->emailDocente = $emailDocente;

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

    public function getSpeseDocenti(): ?string
    {
        return $this->speseDocenti;
    }

    public function setSpeseDocenti(?string $speseDocenti): self
    {
        $this->speseDocenti = $speseDocenti;

        return $this;
    }

    public function getSpeseMarketing(): ?string
    {
        return $this->speseMarketing;
    }

    public function setSpeseMarketing(?string $speseMarketing): self
    {
        $this->speseMarketing = $speseMarketing;

        return $this;
    }

    public function getSpeseVarie(): ?string
    {
        return $this->speseVarie;
    }

    public function setSpeseVarie(?string $speseVarie): self
    {
        $this->speseVarie = $speseVarie;

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

    public function getLegge(): ?string
    {
        return $this->legge;
    }

    public function setLegge(?string $legge): self
    {
        $this->legge = $legge;

        return $this;
    }

    public function getIsMansione(): ?bool
    {
        return $this->isMansione;
    }

    public function setIsMansione(?bool $isMansione): self
    {
        $this->isMansione = $isMansione;

        return $this;
    }

    public function getIsCodat(): ?bool
    {
        return $this->isCodat;
    }

    public function setIsCodat(?bool $isCodat): self
    {
        $this->isCodat = $isCodat;

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

    public function getDurata(): ?string
    {
        return $this->durata;
    }

    public function setDurata(?string $durata): self
    {
        $this->durata = $durata;

        return $this;
    }

    public function getFirma(): ?string
    {
        return $this->firma;
    }

    public function setFirma(?string $firma): self
    {
        $this->firma = $firma;

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

    public function getTitolo(): ?string
    {
        return $this->titolo;
    }

    public function setTitolo(?string $titolo): self
    {
        $this->titolo = $titolo;

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

    public function getSchedaPdf(): ?File
    {
        return $this->schedaPdf;
    }

    public function setSchedaPdf(?File $schedaPdf): self
    {
        $this->schedaPdf = $schedaPdf;

        return $this;
    }


}
