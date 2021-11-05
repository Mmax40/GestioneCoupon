<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserPrivateKey
 *
 * @ORM\Table(name="mdl_user_private_key", indexes={@ORM\Index(name="mo_userprivkey_scrval_ix", columns={"script", "value"}), @ORM\Index(name="mo_userprivkey_use_ix", columns={"userid"})})
 * @ORM\Entity
 */
class MdlUserPrivateKey
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
     * @ORM\Column(name="script", type="string", length=128, nullable=false, options={"default"="''"})
     */
    private $script = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=128, nullable=false, options={"default"="''"})
     */
    private $value = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="instance", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $instance = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="iprestriction", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $iprestriction = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="validuntil", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $validuntil = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timecreated", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $timecreated = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getScript(): ?string
    {
        return $this->script;
    }

    public function setScript(string $script): self
    {
        $this->script = $script;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
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

    public function getInstance(): ?string
    {
        return $this->instance;
    }

    public function setInstance(?string $instance): self
    {
        $this->instance = $instance;

        return $this;
    }

    public function getIprestriction(): ?string
    {
        return $this->iprestriction;
    }

    public function setIprestriction(?string $iprestriction): self
    {
        $this->iprestriction = $iprestriction;

        return $this;
    }

    public function getValiduntil(): ?string
    {
        return $this->validuntil;
    }

    public function setValiduntil(?string $validuntil): self
    {
        $this->validuntil = $validuntil;

        return $this;
    }

    public function getTimecreated(): ?string
    {
        return $this->timecreated;
    }

    public function setTimecreated(?string $timecreated): self
    {
        $this->timecreated = $timecreated;

        return $this;
    }


}
