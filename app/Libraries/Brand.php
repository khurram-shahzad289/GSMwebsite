<?php

namespace App\Libraries;

use Illuminate\Support\Facades\App;

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

    public static function buildFolder($folder): Folder
    {
        return new Folder(
            \Arr::get($folder, 'id', ''),
            \Arr::get($folder, 'name', ''),
            \Arr::get($folder, 'description', ''),
            \Arr::get($folder, 'parent_id', null),
            \Arr::get($folder, 'created_at', ''),
//            \Arr::get($folder, 'files', []),
            (new \App\Models\Folder())->getFolderChildren(\Arr::get($folder, 'id', '')),
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

    public static function buildPackageList($packages)
    {
        $packageList = [];
        foreach ($packages as $package) {
            $packageList[] = new Package(
                \Arr::get($package, 'id', null),
                \Arr::get($package, 'name', ''),
                \Arr::get($package, 'price', 0),
                \Arr::get($package, 'bandwidth', ''),
                \Arr::get($package, 'every', null),
                \Arr::get($package, 'totalips', 0),
            );
        }

        return $packageList;

    }

    public static function buildPackage($package)
    {
        return new Package(
            \Arr::get($package, 'id', null),
            \Arr::get($package, 'name', ''),
            \Arr::get($package, 'price', 0),
            \Arr::get($package, 'bandwidth', ''),
            \Arr::get($package, 'every', null),
            \Arr::get($package, 'totalips', 0),
        );


    }

    public function getFolders($folders): array
    {
        $newFolders = [];
        foreach ($folders as $folder) {
            $newFolders[] = self::buildFolder($folder);
        }
        return $newFolders;
    }

    public function getFiles($files): array
    {
        $newFiles = [];
        foreach ($files as $file) {
            $newFiles[] = self::buildFile($file);
        }
        return $newFiles;
    }
}
