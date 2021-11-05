<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * GestAccount
 *
 * @ORM\Table(name="gest_account", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_DAF1BD6092FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_DAF1BD60A0D96FBF", columns={"email_canonical"})}, indexes={@ORM\Index(name="IDX_DAF1BD60F0AF24FE", columns={"affiliato_id"}), @ORM\Index(name="IDX_DAF1BD60442F1851", columns={"nascita_prov_id"}), @ORM\Index(name="IDX_DAF1BD60A313F49B", columns={"citta_id"}), @ORM\Index(name="IDX_DAF1BD604E7121AF", columns={"provincia_id"}), @ORM\Index(name="IDX_DAF1BD6092A4CA0A", columns={"nascita_comune_id"})})
 * @ORM\Entity
 */
class GestAccount
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
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $lastLogin;

    /**
     * @var bool
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var bool
     *
     * @ORM\Column(name="expired", type="boolean", nullable=false)
     */
    private $expired;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $expiresAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $confirmationToken;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", length=0, nullable=false)
     */
    private $roles;

    /**
     * @var bool
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=false)
     */
    private $credentialsExpired;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="credentials_expire_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $credentialsExpireAt;

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
     * @ORM\Column(name="created_by", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $updatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=false)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipoAffiliazione", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $tipoaffiliazione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nome", type="string", length=60, nullable=true, options={"default"="NULL"})
     */
    private $nome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cognome", type="string", length=60, nullable=true, options={"default"="NULL"})
     */
    private $cognome;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nascita_data", type="date", nullable=true, options={"default"="NULL"})
     */
    private $nascitaData;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cellulare", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $cellulare;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ragioneSociale", type="string", length=60, nullable=true, options={"default"="NULL"})
     */
    private $ragionesociale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="indirizzo", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $indirizzo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cap", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $cap = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="percentuale", type="integer", nullable=true, options={"default"="30"})
     */
    private $percentuale = 30;

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
     *   @ORM\JoinColumn(name="nascita_comune_id", referencedColumnName="id")
     * })
     */
    private $nascitaComune;

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

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CorsoGestionale", inversedBy="affiliato")
     * @ORM\JoinTable(name="affiliato_corso_gestionale",
     *   joinColumns={
     *     @ORM\JoinColumn(name="affiliato_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="corso_gestionale_id", referencedColumnName="id")
     *   }
     * )
     */
    private $corsoGestionale;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MdlCourse", inversedBy="affiliato")
     * @ORM\JoinTable(name="affiliato_corso_moodle",
     *   joinColumns={
     *     @ORM\JoinColumn(name="affiliato_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="corso_moodle_id", referencedColumnName="id")
     *   }
     * )
     */
    private $corsoMoodle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->corsoGestionale = new \Doctrine\Common\Collections\ArrayCollection();
        $this->corsoMoodle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getUsernameCanonical(): ?string
    {
        return $this->usernameCanonical;
    }

    public function setUsernameCanonical(string $usernameCanonical): self
    {
        $this->usernameCanonical = $usernameCanonical;

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

    public function getEmailCanonical(): ?string
    {
        return $this->emailCanonical;
    }

    public function setEmailCanonical(string $emailCanonical): self
    {
        $this->emailCanonical = $emailCanonical;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): self
    {
        $this->locked = $locked;

        return $this;
    }

    public function getExpired(): ?bool
    {
        return $this->expired;
    }

    public function setExpired(bool $expired): self
    {
        $this->expired = $expired;

        return $this;
    }

    public function getExpiresAt(): ?\DateTimeInterface
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(?\DateTimeInterface $expiresAt): self
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getConfirmationToken(): ?string
    {
        return $this->confirmationToken;
    }

    public function setConfirmationToken(?string $confirmationToken): self
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    public function getPasswordRequestedAt(): ?\DateTimeInterface
    {
        return $this->passwordRequestedAt;
    }

    public function setPasswordRequestedAt(?\DateTimeInterface $passwordRequestedAt): self
    {
        $this->passwordRequestedAt = $passwordRequestedAt;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getCredentialsExpired(): ?bool
    {
        return $this->credentialsExpired;
    }

    public function setCredentialsExpired(bool $credentialsExpired): self
    {
        $this->credentialsExpired = $credentialsExpired;

        return $this;
    }

    public function getCredentialsExpireAt(): ?\DateTimeInterface
    {
        return $this->credentialsExpireAt;
    }

    public function setCredentialsExpireAt(?\DateTimeInterface $credentialsExpireAt): self
    {
        $this->credentialsExpireAt = $credentialsExpireAt;

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

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getTipoaffiliazione(): ?string
    {
        return $this->tipoaffiliazione;
    }

    public function setTipoaffiliazione(?string $tipoaffiliazione): self
    {
        $this->tipoaffiliazione = $tipoaffiliazione;

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

    public function getCognome(): ?string
    {
        return $this->cognome;
    }

    public function setCognome(?string $cognome): self
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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getRagionesociale(): ?string
    {
        return $this->ragionesociale;
    }

    public function setRagionesociale(?string $ragionesociale): self
    {
        $this->ragionesociale = $ragionesociale;

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

    public function getPercentuale(): ?int
    {
        return $this->percentuale;
    }

    public function setPercentuale(?int $percentuale): self
    {
        $this->percentuale = $percentuale;

        return $this;
    }

    public function getNascitaProv()
    {
        return $this->nascitaProv;
    }

    public function setNascitaProv(?Provincia $nascitaProv): self
    {
        $this->nascitaProv = $nascitaProv;

        return $this;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia(?Provincia $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getNascitaComune()
    {
        return $this->nascitaComune;
    }

    public function setNascitaComune(?Comune $nascitaComune): self
    {
        $this->nascitaComune = $nascitaComune;

        return $this;
    }

    public function getCitta()
    {
        return $this->citta;
    }

    public function setCitta(?Comune $citta): self
    {
        $this->citta = $citta;

        return $this;
    }

    public function getAffiliato()
    {
        return $this->affiliato;
    }

    public function setAffiliato(?self $affiliato): self
    {
        $this->affiliato = $affiliato;

        return $this;
    }

    /**
     * @return Collection|CorsoGestionale[]
     */
    public function getCorsoGestionale(): Collection
    {
        return $this->corsoGestionale;
    }

    public function addCorsoGestionale(CorsoGestionale $corsoGestionale): self
    {
        if (!$this->corsoGestionale->contains($corsoGestionale)) {
            $this->corsoGestionale[] = $corsoGestionale;
        }

        return $this;
    }

    public function removeCorsoGestionale(CorsoGestionale $corsoGestionale): self
    {
        $this->corsoGestionale->removeElement($corsoGestionale);

        return $this;
    }

    /**
     * @return Collection|MdlCourse[]
     */
    public function getCorsoMoodle(): Collection
    {
        return $this->corsoMoodle;
    }

    public function addCorsoMoodle(MdlCourse $corsoMoodle): self
    {
        if (!$this->corsoMoodle->contains($corsoMoodle)) {
            $this->corsoMoodle[] = $corsoMoodle;
        }

        return $this;
    }

    public function removeCorsoMoodle(MdlCourse $corsoMoodle): self
    {
        $this->corsoMoodle->removeElement($corsoMoodle);

        return $this;
    }

}
