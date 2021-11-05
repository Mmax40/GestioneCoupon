<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlCacheFilters
 *
 * @ORM\Table(name="mdl_cache_filters", indexes={@ORM\Index(name="mo_cachfilt_filmd5_ix", columns={"filter", "md5key"})})
 * @ORM\Entity
 */
class MdlCacheFilters
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
     * @ORM\Column(name="filter", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $filter = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="version", type="bigint", nullable=false)
     */
    private $version = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="md5key", type="string", length=32, nullable=false, options={"default"="''"})
     */
    private $md5key = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="rawtext", type="text", length=0, nullable=false)
     */
    private $rawtext;

    /**
     * @var int
     *
     * @ORM\Column(name="timemodified", type="bigint", nullable=false)
     */
    private $timemodified = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getFilter(): ?string
    {
        return $this->filter;
    }

    public function setFilter(string $filter): self
    {
        $this->filter = $filter;

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

    public function getMd5key(): ?string
    {
        return $this->md5key;
    }

    public function setMd5key(string $md5key): self
    {
        $this->md5key = $md5key;

        return $this;
    }

    public function getRawtext(): ?string
    {
        return $this->rawtext;
    }

    public function setRawtext(string $rawtext): self
    {
        $this->rawtext = $rawtext;

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
