<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * File
 *
 * @ORM\Table(name="file", indexes={@ORM\Index(name="IDX_8C9F36106759BAE5", columns={"proprietario_id"})})
 * @ORM\Entity
 */
class File
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
     * @var bool
     *
     * @ORM\Column(name="privato", type="boolean", nullable=false)
     */
    private $privato;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="relativePath", type="string", length=255, nullable=false)
     */
    private $relativepath;

    /**
     * @var string
     *
     * @ORM\Column(name="filesystemName", type="string", length=255, nullable=false)
     */
    private $filesystemname;

    /**
     * @var string
     *
     * @ORM\Column(name="mimeType", type="string", length=255, nullable=false)
     */
    private $mimetype;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="fileExtension", type="string", length=255, nullable=false)
     */
    private $fileextension;

    /**
     * @var string
     *
     * @ORM\Column(name="md5", type="string", length=32, nullable=false)
     */
    private $md5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $createdBy = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $updatedBy = 'NULL';

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $deletedAt = 'NULL';

    /**
     * @var \GestAccount
     *
     * @ORM\ManyToOne(targetEntity="GestAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proprietario_id", referencedColumnName="id")
     * })
     */
    private $proprietario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrivato(): ?bool
    {
        return $this->privato;
    }

    public function setPrivato(bool $privato): self
    {
        $this->privato = $privato;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRelativepath(): ?string
    {
        return $this->relativepath;
    }

    public function setRelativepath(string $relativepath): self
    {
        $this->relativepath = $relativepath;

        return $this;
    }

    public function getFilesystemname(): ?string
    {
        return $this->filesystemname;
    }

    public function setFilesystemname(string $filesystemname): self
    {
        $this->filesystemname = $filesystemname;

        return $this;
    }

    public function getMimetype(): ?string
    {
        return $this->mimetype;
    }

    public function setMimetype(string $mimetype): self
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getFileextension(): ?string
    {
        return $this->fileextension;
    }

    public function setFileextension(string $fileextension): self
    {
        $this->fileextension = $fileextension;

        return $this;
    }

    public function getMd5(): ?string
    {
        return $this->md5;
    }

    public function setMd5(string $md5): self
    {
        $this->md5 = $md5;

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

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getProprietario(): ?GestAccount
    {
        return $this->proprietario;
    }

    public function setProprietario(?GestAccount $proprietario): self
    {
        $this->proprietario = $proprietario;

        return $this;
    }


}
