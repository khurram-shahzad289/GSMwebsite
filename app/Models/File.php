<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Libraries\Brand as Brand;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'link',
        'description',
        'size',
        'featured'
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    public static function getFolderFiles($folder_id)
    {
        $filesList = [];
        $files = File::where('parent_id', $folder_id)->get();
        foreach ($files as $file) {
            $filesList[] = Brand::buildFile($file);
        }
        return $filesList;
    }

    public static function createFile($parent_id, $name, $link, $description, $size, $featured)
    {
        File::create([
            'parent_id' => $parent_id,
            'name' => $name,
            'link' => $link,
            'description' => $description,
            'size' => $size,
            'featured' => $featured
        ]);
    }

}
