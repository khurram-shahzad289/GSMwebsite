<?php

namespace App\Models;

use App\Libraries\Brand as Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = ['name', 'description', 'parent_id'];


//    public function files()
//    {
//        return $this->hasMany(File::class);
//    }
//    public function parent()
//    {
//        return $this->belongsTo(Folder::class, 'parent_id');
//    }
//    public static function buildTree($folders, $parentId = null)
//    {
//        $tree = [];
//
//        foreach ($folders as $folder) {
//            if ($folder['parent_id'] === $parentId) {
//                $children = self::buildTree($folders, $folder['id']);
//                if ($children) {
//                    $folder['children'] = $children;
//                }
//                $tree[] = $folder;
//            }
//        }
//
//        return $tree;
//    }



//    protected $guarded = [];

    public static function buildTree($folders, $files, $parentId = null)
    {

        $tree = [];

        foreach ($folders as $folder) {
            if ($folder['parent_id'] === $parentId) {
                $folder['files'] = self::getFiles($files, $folder['id']);
//                $folder['children'] = self::buildTree($folders, $files, $folder['id']);
                $folder['children'] = array_merge($folder['files'], self::buildTree($folders, $files, $folder['id'])) ;
                $tree[] = $folder;
            }
        }

        return $tree;
    }


//    public static function buildTree($folders, $files, $parentId = null)
//    {
//
//        $tree = [];
//
//        foreach ($folders as $folder) {
//
//            if ($folder->getFolderParentId() === $parentId) {
//                $folder->setFolderFiles(self::getFiles($files, $folder->getFolderId()));
//                $folder->setFolderChildren(array_merge($folder->getFolderFiles(), self::buildTree($folders, $files, $folder->getFolderId())));
//
//                $tree[] = $folder;
//            }
//        }
//
//        return $tree;
//    }


//    protected static function getFiles($files, $parentId)
//    {
//        $folderFiles = [];
//
//        foreach ($files as $file) {
//            if ($file->getFileParentId() === $parentId) {
//                $folderFiles[] = $file;
//            }
//        }
//
//        return $folderFiles;
//    }

    protected static function getFiles($files, $parentId)
    {
        $folderFiles = [];

        foreach ($files as $file) {
            if ($file['parent_id'] === $parentId) {
                $folderFiles[] = $file;
            }
        }

        return $folderFiles;
    }

    public static function tree()
    {
//        $allFolders = (new Brand())->getFolders(Folder::get()->toArray());
//        $allFiles = (new Brand())->getFiles(File::get()->toArray());

        $allFolders = Folder::get()->toArray();
        $allFiles = File::get()->toArray();

        return self::buildTree($allFolders,$allFiles);
    }


}
