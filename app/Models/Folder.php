<?php

namespace App\Models;

use App\Libraries\Brand as Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = ['name', 'description', 'parent_id'];



    public static function getFolderChildren(int $id){
        $folderList = [];
        $folders = Folder::where('parent_id', $id)->get();
        foreach ($folders as $folder) {
            $folderList[] = Brand::buildFolder($folder);
        }
        return $folderList;
    }
    public function getAllNullFolders(){
        $foldersList = [];
        $folders = Folder::whereNull('parent_id')->get()->toArray();
        foreach ($folders as $folder){
            $foldersList[] = Brand::buildFolder($folder);
        }

         return $foldersList;

    }
    public static function createFolder($name, $description, $parentId){
        Folder::create([
            'name' => $name,
            'description' => $description,
            'parent_id' => $parentId,
        ]);
    }
    public static function getParentFolder(int $id) : \App\Libraries\Folder
    {
        return Brand::buildFolder(Folder::where('id', $id)->first()->toArray());
    }


}
