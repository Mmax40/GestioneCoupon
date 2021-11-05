<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBackupCourses
 *
 * @ORM\Table(name="mdl_backup_courses", uniqueConstraints={@ORM\UniqueConstraint(name="mo_backcour_cou_uix", columns={"courseid"})})
 * @ORM\Entity
 */
class MdlBackupCourses
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
     * @ORM\Column(name="courseid", type="bigint", nullable=false)
     */
    private $courseid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="laststarttime", type="bigint", nullable=false)
     */
    private $laststarttime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lastendtime", type="bigint", nullable=false)
     */
    private $lastendtime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="laststatus", type="string", length=1, nullable=false, options={"default"="'5'"})
     */
    private $laststatus = '\'5\'';

    /**
     * @var int
     *
     * @ORM\Column(name="nextstarttime", type="bigint", nullable=false)
     */
    private $nextstarttime = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCourseid(): ?string
    {
        return $this->courseid;
    }

    public function setCourseid(string $courseid): self
    {
        $this->courseid = $courseid;

        return $this;
    }

    public function getLaststarttime(): ?string
    {
        return $this->laststarttime;
    }

    public function setLaststarttime(string $laststarttime): self
    {
        $this->laststarttime = $laststarttime;

        return $this;
    }

    public function getLastendtime(): ?string
    {
        return $this->lastendtime;
    }

    public function setLastendtime(string $lastendtime): self
    {
        $this->lastendtime = $lastendtime;

        return $this;
    }

    public function getLaststatus(): ?string
    {
        return $this->laststatus;
    }

    public function setLaststatus(string $laststatus): self
    {
        $this->laststatus = $laststatus;

        return $this;
    }

    public function getNextstarttime(): ?string
    {
        return $this->nextstarttime;
    }

    public function setNextstarttime(string $nextstarttime): self
    {
        $this->nextstarttime = $nextstarttime;

        return $this;
    }


}
