<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlUserInfoData
 *
 * @ORM\Table(name="mdl_user_info_data", uniqueConstraints={@ORM\UniqueConstraint(name="mo_userinfodata_usefie_uix", columns={"userid", "fieldid"})})
 * @ORM\Entity
 */
class MdlUserInfoData
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
     * @var int
     *
     * @ORM\Column(name="fieldid", type="bigint", nullable=false)
     */
    private $fieldid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=0, nullable=false)
     */
    private $data;

    /**
     * @var bool
     *
     * @ORM\Column(name="dataformat", type="boolean", nullable=false)
     */
    private $dataformat = '0';

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

    public function getFieldid(): ?string
    {
        return $this->fieldid;
    }

    public function setFieldid(string $fieldid): self
    {
        $this->fieldid = $fieldid;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getDataformat(): ?bool
    {
        return $this->dataformat;
    }

    public function setDataformat(bool $dataformat): self
    {
        $this->dataformat = $dataformat;

        return $this;
    }


}
