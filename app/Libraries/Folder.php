<?php

namespace App\Libraries;

class Folder
{
    public function __construct(
        private ?string $folderId,
        private string $folderName,
        private string $folderDescription,
        private ?string $folderParentId,
        private string $folderCreatedAt,
        private array $folderFiles,
        private array $folderChildren,
    )
    {

    }

    public function getFolderId(): string
    {
        return $this->folderId;
    }

    public function setFolderId(string $folderId): void
    {
        $this->folderId = $folderId;
    }

    public function getFolderName(): string
    {
        return $this->folderName;
    }

    public function setFolderName(string $folderName): void
    {
        $this->folderName = $folderName;
    }

    public function getFolderDescription(): string
    {
        return $this->folderDescription;
    }

    public function setFolderDescription(string $folderDescription): void
    {
        $this->folderDescription = $folderDescription;
    }

    public function getFolderParentId(): ?string
    {
        return $this->folderParentId;
    }

    public function setFolderParentId(string $folderParentId): void
    {
        $this->folderParentId = $folderParentId;
    }

    public function getFolderCreatedAt(): string
    {
        return $this->folderCreatedAt;
    }

    public function setFolderCreatedAt(string $folderCreatedAt): void
    {
        $this->folderCreatedAt = $folderCreatedAt;
    }

    public function getFolderFiles(): array
    {
        return $this->folderFiles;
    }

    public function setFolderFiles(array $folderFiles): void
    {
        $this->folderFiles = $folderFiles;
    }

    public function getFolderChildren(): array
    {
        return $this->folderChildren;
    }

    public function setFolderChildren(array $folderChildren): void
    {
        $this->folderChildren = $folderChildren;
    }

}
