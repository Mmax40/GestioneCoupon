<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserInfoField
 *
 * @ORM\Table(name="mdl_user_info_field")
 * @ORM\Entity
 */
class MdlUserInfoField
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
     * @ORM\Column(name="shortname", type="string", length=255, nullable=false, options={"default"="'shortname'"})
     */
    private $shortname = '\'shortname\'';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=0, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="datatype", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $datatype = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="descriptionformat", type="boolean", nullable=false)
     */
    private $descriptionformat = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="categoryid", type="bigint", nullable=false)
     */
    private $categoryid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sortorder", type="bigint", nullable=false)
     */
    private $sortorder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="smallint", nullable=false)
     */
    private $visible = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="forceunique", type="boolean", nullable=false)
     */
    private $forceunique = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="signup", type="boolean", nullable=false)
     */
    private $signup = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="defaultdata", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $defaultdata = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="defaultdataformat", type="boolean", nullable=false)
     */
    private $defaultdataformat = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="param1", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $param1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="param2", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $param2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="param3", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $param3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="param4", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $param4 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="param5", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $param5 = 'NULL';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getShortname(): ?string
    {
        return $this->shortname;
    }

    public function setShortname(string $shortname): self
    {
        $this->shortname = $shortname;

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

    public function getDatatype(): ?string
    {
        return $this->datatype;
    }

    public function setDatatype(string $datatype): self
    {
        $this->datatype = $datatype;

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

    public function getCategoryid(): ?string
    {
        return $this->categoryid;
    }

    public function setCategoryid(string $categoryid): self
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(string $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): self
    {
        $this->required = $required;

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

    public function getVisible(): ?int
    {
        return $this->visible;
    }

    public function setVisible(int $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getForceunique(): ?bool
    {
        return $this->forceunique;
    }

    public function setForceunique(bool $forceunique): self
    {
        $this->forceunique = $forceunique;

        return $this;
    }

    public function getSignup(): ?bool
    {
        return $this->signup;
    }

    public function setSignup(bool $signup): self
    {
        $this->signup = $signup;

        return $this;
    }

    public function getDefaultdata(): ?string
    {
        return $this->defaultdata;
    }

    public function setDefaultdata(?string $defaultdata): self
    {
        $this->defaultdata = $defaultdata;

        return $this;
    }

    public function getDefaultdataformat(): ?bool
    {
        return $this->defaultdataformat;
    }

    public function setDefaultdataformat(bool $defaultdataformat): self
    {
        $this->defaultdataformat = $defaultdataformat;

        return $this;
    }

    public function getParam1(): ?string
    {
        return $this->param1;
    }

    public function setParam1(?string $param1): self
    {
        $this->param1 = $param1;

        return $this;
    }

    public function getParam2(): ?string
    {
        return $this->param2;
    }

    public function setParam2(?string $param2): self
    {
        $this->param2 = $param2;

        return $this;
    }

    public function getParam3(): ?string
    {
        return $this->param3;
    }

    public function setParam3(?string $param3): self
    {
        $this->param3 = $param3;

        return $this;
    }

    public function getParam4(): ?string
    {
        return $this->param4;
    }

    public function setParam4(?string $param4): self
    {
        $this->param4 = $param4;

        return $this;
    }

    public function getParam5(): ?string
    {
        return $this->param5;
    }

    public function setParam5(?string $param5): self
    {
        $this->param5 = $param5;

        return $this;
    }


}
