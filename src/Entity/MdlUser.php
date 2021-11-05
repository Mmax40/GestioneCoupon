<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUser
 *
 * @ORM\Table(name="mdl_user", uniqueConstraints={@ORM\UniqueConstraint(name="mo_user_mneuse_uix", columns={"mnethostid", "username"})}, indexes={@ORM\Index(name="mo_user_alt_ix", columns={"alternatename"}), @ORM\Index(name="mo_user_fir2_ix", columns={"firstnamephonetic"}), @ORM\Index(name="mo_user_ema_ix", columns={"email"}), @ORM\Index(name="mo_user_cit_ix", columns={"city"}), @ORM\Index(name="mo_user_con_ix", columns={"confirmed"}), @ORM\Index(name="mo_user_las3_ix", columns={"lastnamephonetic"}), @ORM\Index(name="mo_user_aut_ix", columns={"auth"}), @ORM\Index(name="mo_user_cou_ix", columns={"country"}), @ORM\Index(name="mo_user_fir_ix", columns={"firstname"}), @ORM\Index(name="mo_user_mid_ix", columns={"middlename"}), @ORM\Index(name="mo_user_idn_ix", columns={"idnumber"}), @ORM\Index(name="mo_user_las2_ix", columns={"lastaccess"}), @ORM\Index(name="mo_user_las_ix", columns={"lastname"}), @ORM\Index(name="mo_user_del_ix", columns={"deleted"})})
 * @ORM\Entity(repositoryClass="App\Repository\MdlUserRepository")
 */
class MdlUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="auth", type="string", length=20, nullable=false, options={"default"="'manual'"})
     */
    private $auth;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmed", type="boolean", nullable=false)
     */
    private $confirmed;

    /**
     * @var bool
     *
     * @ORM\Column(name="policyagreed", type="boolean", nullable=false)
     */
    private $policyagreed;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="suspended", type="boolean", nullable=false)
     */
    private $suspended;

    /**
     * @var int
     *
     * @ORM\Column(name="mnethostid", type="bigint", nullable=false)
     */
    private $mnethostid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $username; //'\'\''

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="idnumber", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $idnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="emailstop", type="boolean", nullable=false)
     */
    private $emailstop;

    /**
     * @var string
     *
     * @ORM\Column(name="phone1", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=120, nullable=false, options={"default"="''"})
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false, options={"default"="''"})
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=30, nullable=false, options={"default"="'en'"})
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="calendartype", type="string", length=30, nullable=false, options={"default"="'gregorian'"})
     */
    private $calendartype;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=100, nullable=false, options={"default"="'99'"})
     */
    private $timezone;

    /**
     * @var int
     *
     * @ORM\Column(name="firstaccess", type="bigint", nullable=false)
     */
    private $firstaccess;

    /**
     * @var int
     *
     * @ORM\Column(name="lastaccess", type="bigint", nullable=false)
     */
    private $lastaccess;

    /**
     * @var int
     *
     * @ORM\Column(name="lastlogin", type="bigint", nullable=false)
     */
    private $lastlogin;

    /**
     * @var int
     *
     * @ORM\Column(name="currentlogin", type="bigint", nullable=false)
     */
    private $currentlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="lastip", type="string", length=45, nullable=false, options={"default"="''"})
     */
    private $lastip;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=15, nullable=false, options={"default"="''"})
     */
    private $secret;

    /**
     * @var int
     *
     * @ORM\Column(name="picture", type="bigint", nullable=false)
     */
    private $picture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=false, options={"default"="1"})
     */
    private $descriptionformat = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="mailformat", type="boolean", nullable=false, options={"default"="1"})
     */
    private $mailformat = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="maildigest", type="boolean", nullable=false)
     */
    private $maildigest;

    /**
     * @var bool
     *
     * @ORM\Column(name="maildisplay", type="boolean", nullable=false, options={"default"="2"})
     */
    private $maildisplay;

    /**
     * @var bool
     *
     * @ORM\Column(name="autosubscribe", type="boolean", nullable=false, options={"default"="1"})
     */
    private $autosubscribe = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="trackforums", type="boolean", nullable=false)
     */
    private $trackforums;

    /**
     * @var int
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=false)
     */
    private $timecreated;

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified;

    /**
     * @var int
     *
     * @ORM\Column(name="trustbitmask", type="bigint", nullable=false)
     */
    private $trustbitmask;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagealt", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $imagealt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastnamephonetic", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $lastnamephonetic = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstnamephonetic", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $firstnamephonetic = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $middlename = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="alternatename", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $alternatename = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="moodlenetprofile", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $moodlenetprofile = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAuth(): ?string
    {
        return $this->auth;
    }

    public function setAuth(string $auth): self
    {
        $this->auth = $auth;

        return $this;
    }

    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): self
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getPolicyagreed(): ?bool
    {
        return $this->policyagreed;
    }

    public function setPolicyagreed(bool $policyagreed): self
    {
        $this->policyagreed = $policyagreed;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getSuspended(): ?bool
    {
        return $this->suspended;
    }

    public function setSuspended(bool $suspended): self
    {
        $this->suspended = $suspended;

        return $this;
    }

    public function getMnethostid(): ?string
    {
        return $this->mnethostid;
    }

    public function setMnethostid(string $mnethostid): self
    {
        $this->mnethostid = $mnethostid;

        return $this;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIdnumber(): ?string
    {
        return $this->idnumber;
    }

    public function setIdnumber(string $idnumber): self
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

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

    public function getEmailstop(): ?bool
    {
        return $this->emailstop;
    }

    public function setEmailstop(bool $emailstop): self
    {
        $this->emailstop = $emailstop;

        return $this;
    }

    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    public function setPhone1(string $phone1): self
    {
        $this->phone1 = $phone1;

        return $this;
    }

    public function getPhone2(): ?string
    {
        return $this->phone2;
    }

    public function setPhone2(string $phone2): self
    {
        $this->phone2 = $phone2;

        return $this;
    }

    public function getInstitution(): ?string
    {
        return $this->institution;
    }

    public function setInstitution(string $institution): self
    {
        $this->institution = $institution;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getCalendartype(): ?string
    {
        return $this->calendartype;
    }

    public function setCalendartype(string $calendartype): self
    {
        $this->calendartype = $calendartype;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getFirstaccess(): ?string
    {
        return $this->firstaccess;
    }

    public function setFirstaccess(string $firstaccess): self
    {
        $this->firstaccess = $firstaccess;

        return $this;
    }

    public function getLastaccess(): ?string
    {
        return $this->lastaccess;
    }

    public function setLastaccess(string $lastaccess): self
    {
        $this->lastaccess = $lastaccess;

        return $this;
    }

    public function getLastlogin(): ?string
    {
        return $this->lastlogin;
    }

    public function setLastlogin(string $lastlogin): self
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    public function getCurrentlogin(): ?string
    {
        return $this->currentlogin;
    }

    public function setCurrentlogin(string $currentlogin): self
    {
        $this->currentlogin = $currentlogin;

        return $this;
    }

    public function getLastip(): ?string
    {
        return $this->lastip;
    }

    public function setLastip(string $lastip): self
    {
        $this->lastip = $lastip;

        return $this;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionformat(): ?bool
    {
        return $this->descriptionformat;
    }

    public function setDescriptionformat(bool $descriptionformat): self
    {
        $this->descriptionformat = $descriptionformat;

        return $this;
    }

    public function getMailformat(): ?bool
    {
        return $this->mailformat;
    }

    public function setMailformat(bool $mailformat): self
    {
        $this->mailformat = $mailformat;

        return $this;
    }

    public function getMaildigest(): ?bool
    {
        return $this->maildigest;
    }

    public function setMaildigest(bool $maildigest): self
    {
        $this->maildigest = $maildigest;

        return $this;
    }

    public function getMaildisplay(): ?bool
    {
        return $this->maildisplay;
    }

    public function setMaildisplay(bool $maildisplay): self
    {
        $this->maildisplay = $maildisplay;

        return $this;
    }

    public function getAutosubscribe(): ?bool
    {
        return $this->autosubscribe;
    }

    public function setAutosubscribe(bool $autosubscribe): self
    {
        $this->autosubscribe = $autosubscribe;

        return $this;
    }

    public function getTrackforums(): ?bool
    {
        return $this->trackforums;
    }

    public function setTrackforums(bool $trackforums): self
    {
        $this->trackforums = $trackforums;

        return $this;
    }

    public function getTimecreated(): ?string
    {
        return $this->timecreated;
    }

    public function setTimecreated(string $timecreated): self
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    public function getTimemodified(): ?string
    {
        return $this->timemodified;
    }

    public function setTimemodified(string $timemodified): self
    {
        $this->timemodified = $timemodified;

        return $this;
    }

    public function getTrustbitmask(): ?string
    {
        return $this->trustbitmask;
    }

    public function setTrustbitmask(string $trustbitmask): self
    {
        $this->trustbitmask = $trustbitmask;

        return $this;
    }

    public function getImagealt(): ?string
    {
        return $this->imagealt;
    }

    public function setImagealt(?string $imagealt): self
    {
        $this->imagealt = $imagealt;

        return $this;
    }

    public function getLastnamephonetic(): ?string
    {
        return $this->lastnamephonetic;
    }

    public function setLastnamephonetic(?string $lastnamephonetic): self
    {
        $this->lastnamephonetic = $lastnamephonetic;

        return $this;
    }

    public function getFirstnamephonetic(): ?string
    {
        return $this->firstnamephonetic;
    }

    public function setFirstnamephonetic(?string $firstnamephonetic): self
    {
        $this->firstnamephonetic = $firstnamephonetic;

        return $this;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function setMiddlename(?string $middlename): self
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getAlternatename(): ?string
    {
        return $this->alternatename;
    }

    public function setAlternatename(?string $alternatename): self
    {
        $this->alternatename = $alternatename;

        return $this;
    }

    public function getMoodlenetprofile(): ?string
    {
        return $this->moodlenetprofile;
    }

    public function setMoodlenetprofile(?string $moodlenetprofile): self
    {
        $this->moodlenetprofile = $moodlenetprofile;

        return $this;
    }


}
