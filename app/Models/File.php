<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['parent_id', 'name','link', 'description', 'size', 'featured'];
    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
//
//
//    public function parent()
//    {
//        return $this->belongsTo(File::class, 'parent_id');
//    }
//    public static function tree()
//    {
//        $allFiles = File::get();
//
//        $rootFiles = $allFiles->whereNull('parent_id');
//
//        self::formatTree($rootFiles, $allFiles);
//
//        return $rootFiles;
//
//    }
//
//    public function children()
//    {
//        return $this->hasMany(File::class, 'parent_id');
//    }
//    public function descendants()
//    {
//        return $this->children()->with('descendants');
//    }
//
//    private static function formatTree($files ,$allFiles)
//    {
//        foreach ($files as $file) {
//            $file->children = $allFiles->where('parent_id', $file->id)->values();
//            if($file->children->isNotEmpty()) {
//                self::formatTree($file->children, $allFiles);
//            }
//        }
//    }
}
