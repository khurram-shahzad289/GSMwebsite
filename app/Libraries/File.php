<?php

namespace App\Libraries;


class File
{
    public function __construct(
        private string $fileId,
        private ?string $fileParentId,
        private string $fileName,
        private string $fileLink,
        private string $fileDescription,
        private int $fileSize,
        private bool $fileFeatured,
        private string $folderCreatedAt,
    )
    {

    }

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function setFileId(string $fileId): void
    {
        $this->fileId = $fileId;
    }

    public function getFileParentId(): string
    {
        return $this->fileParentId;
    }

    public function setFileParentId(string $fileParentId): void
    {
        $this->fileParentId = $fileParentId;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getFileLink(): string
    {
        return $this->fileLink;
    }

    public function setFileLink(string $fileLink): void
    {
        $this->fileLink = $fileLink;
    }

    public function getFileDescription(): string
    {
        return $this->fileDescription;
    }

    public function setFileDescription(string $fileDescription): void
    {
        $this->fileDescription = $fileDescription;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    public function isFileFeatured(): bool
    {
        return $this->fileFeatured;
    }

    public function setFileFeatured(bool $fileFeatured): void
    {
        $this->fileFeatured = $fileFeatured;
    }

    public function getFolderCreatedAt(): string
    {
        return $this->folderCreatedAt;
    }

    public function setFolderCreatedAt(string $folderCreatedAt): void
    {
        $this->folderCreatedAt = $folderCreatedAt;
    }

}
