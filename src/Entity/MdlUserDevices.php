<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserDevices
 *
 * @ORM\Table(name="mdl_user_devices", uniqueConstraints={@ORM\UniqueConstraint(name="mo_userdevi_pususe_uix", columns={"pushid", "userid"})}, indexes={@ORM\Index(name="mo_userdevi_use_ix", columns={"userid"}), @ORM\Index(name="mo_userdevi_uuiuse_ix", columns={"uuid", "userid"})})
 * @ORM\Entity
 */
class MdlUserDevices
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
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="appid", type="string", length=128, nullable=false, options={"default"="''"})
     */
    private $appid = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $model = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="platform", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $platform = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $version = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pushid", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $pushid = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $uuid = '\'\'';

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getAppid(): ?string
    {
        return $this->appid;
    }

    public function setAppid(string $appid): self
    {
        $this->appid = $appid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(string $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getPushid(): ?string
    {
        return $this->pushid;
    }

    public function setPushid(string $pushid): self
    {
        $this->pushid = $pushid;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

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


}
