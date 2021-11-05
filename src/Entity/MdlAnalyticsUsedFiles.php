<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlAnalyticsUsedFiles
 *
 * @ORM\Table(name="mdl_analytics_used_files", indexes={@ORM\Index(name="mo_analusedfile_mod_ix", columns={"modelid"}), @ORM\Index(name="mo_analusedfile_modactfil_ix", columns={"modelid", "action", "fileid"}), @ORM\Index(name="mo_analusedfile_fil_ix", columns={"fileid"})})
 * @ORM\Entity
 */
class MdlAnalyticsUsedFiles
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
     * @ORM\Column(name="modelid", type="bigint", nullable=false)
     */
    private $modelid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fileid", type="bigint", nullable=false)
     */
    private $fileid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $action = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="bigint", nullable=false)
     */
    private $time = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getModelid(): ?string
    {
        return $this->modelid;
    }

    public function setModelid(string $modelid): self
    {
        $this->modelid = $modelid;

        return $this;
    }

    public function getFileid(): ?string
    {
        return $this->fileid;
    }

    public function setFileid(string $fileid): self
    {
        $this->fileid = $fileid;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }


}
