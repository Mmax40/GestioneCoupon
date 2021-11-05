<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockPositions
 *
 * @ORM\Table(name="mdl_block_positions", uniqueConstraints={@ORM\UniqueConstraint(name="mo_blocposi_bloconpagsub_uix", columns={"blockinstanceid", "contextid", "pagetype", "subpage"})}, indexes={@ORM\Index(name="mo_blocposi_blo_ix", columns={"blockinstanceid"}), @ORM\Index(name="mo_blocposi_con_ix", columns={"contextid"})})
 * @ORM\Entity
 */
class MdlBlockPositions
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
     * @ORM\Column(name="blockinstanceid", type="bigint", nullable=false)
     */
    private $blockinstanceid;

    /**
     * @var int
     *
     * @ORM\Column(name="contextid", type="bigint", nullable=false)
     */
    private $contextid;

    /**
     * @var string
     *
     * @ORM\Column(name="pagetype", type="string", length=64, nullable=false, options={"default"="''"})
     */
    private $pagetype = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="subpage", type="string", length=16, nullable=false, options={"default"="''"})
     */
    private $subpage = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="smallint", nullable=false)
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=16, nullable=false, options={"default"="''"})
     */
    private $region = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="bigint", nullable=false)
     */
    private $weight;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBlockinstanceid(): ?string
    {
        return $this->blockinstanceid;
    }

    public function setBlockinstanceid(string $blockinstanceid): self
    {
        $this->blockinstanceid = $blockinstanceid;

        return $this;
    }

    public function getContextid(): ?string
    {
        return $this->contextid;
    }

    public function setContextid(string $contextid): self
    {
        $this->contextid = $contextid;

        return $this;
    }

    public function getPagetype(): ?string
    {
        return $this->pagetype;
    }

    public function setPagetype(string $pagetype): self
    {
        $this->pagetype = $pagetype;

        return $this;
    }

    public function getSubpage(): ?string
    {
        return $this->subpage;
    }

    public function setSubpage(string $subpage): self
    {
        $this->subpage = $subpage;

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

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }


}
