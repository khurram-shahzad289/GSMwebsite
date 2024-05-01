<?php

namespace App\Libraries;

class Brand
{
    public function getAllPolicyDocuments(): array
    {
        return [
            new Policy('Terms Of Service', route('policy.terms_of_service')),
            new Policy('Privacy Policy', route('policy.privacy_policy')),
            new Policy('Return Policy', route('policy.return_policy')),
            new Policy('Cancellation Policy', route('policy.cancellation_policy')),
            new Policy('Refund Policy', route('policy.refund_policy')),
        ];
    }

    public static function buildFolder($folder)
    {
        return new Folder(
            \Arr::get($folder, 'id', ''),
            \Arr::get($folder, 'name', ''),
            \Arr::get($folder, 'description', ''),
            \Arr::get($folder, 'parent_id', null),
            \Arr::get($folder, 'created_at', ''),
            \Arr::get($folder, 'files', []),
            \Arr::get($folder, 'children', []),
        );
    }
    public static function buildFile($file)
    {
        return new File(
            \Arr::get($file, 'id', ''),
            \Arr::get($file, 'parent_id', ''),
            \Arr::get($file, 'name', ''),
            \Arr::get($file, 'link', ''),
            \Arr::get($file, 'description', ''),
            \Arr::get($file, 'size', 0),
            \Arr::get($file, 'featured', ''),
            \Arr::get($file, 'created_at', ''),
        );
    }
    public function getFolders($folders):array
    {
        $newFolders = [];
        foreach ($folders as $folder) {
            $newFolders[] = self::buildFolder($folder);
        }
        return $newFolders;
    }
    public function getFiles($files):array
    {
        $newFiles = [];
        foreach ($files as $file) {
            $newFiles[] = self::buildFile($file);
        }
        return $newFiles;
    }
}
