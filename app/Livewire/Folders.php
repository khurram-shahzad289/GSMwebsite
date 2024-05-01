<?php

namespace App\Livewire;

use App\Models\File;
use App\Models\Folder;
use Livewire\Component;

class Folders extends Component
{
    public string $selectType='';
    public $name;
    public $description;
    public $parentId;
    public $parentIdFile;
    public $files;
    public string $link = '';
    public $fileSize;
    public bool $featured = false;

    protected $rules = [
        'parentIdFile' => 'required',
    ];
    public function mount()
    {
        $this->files = Folder::all();
    }
    public function render()
    {
        return view('livewire.folders',['files' => $this->files]);
    }
    public function createFolder()
    {
        $folder = Folder::create([
            'name' => $this->name,
            'description' => $this->description,
            'parent_id' => $this->parentId,
        ]);

        // Reset form fields after creating file
        $this->reset(['name', 'description', 'parentId']);

        // You can emit an event or do other stuff here if needed
    }

    public function createFile()
    {
//        dd($this->link);
        $file = File::create([
            'parent_id' => $this->parentIdFile,
            'name' => $this->name,
            'link' => $this->link,
            'description' => $this->description,
            'size' => $this->fileSize,
            'featured' => $this->featured,
        ]);

        // Reset form fields after creating file
        $this->reset(['name','link', 'description', 'fileSize', 'featured']);

        // You can emit an event or do other stuff here if needed
    }

    public function folder()
    {
        $this->selectType = 'folder';
    }
    public function file()
    {
        $this->selectType = 'file';
    }
}
