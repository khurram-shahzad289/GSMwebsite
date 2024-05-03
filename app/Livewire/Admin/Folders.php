<?php

namespace App\Livewire\Admin;

use App\Models\File;
use App\Models\Folder;
use Livewire\Component;

class Folders extends Component
{
    public string $selectType='';
    public $name;
    public $description;
    public $parentId;
    public $files;
    public string $link = '';
    public $fileSize;
    public bool $featured = false;
    public bool $created = false;

    protected $rules = [
        'parentIdFile' => 'required',
    ];
    public function mount()
    {
        $this->files = Folder::all();
    }
    public function render()
    {
        return view('livewire.admin.folders',['files' => $this->files]);
    }
    public function createFolder()
    {
        Folder::createFolder($this->name, $this->description, $this->parentId);

        $this->created = true;
        $this->reset(['name', 'description', 'parentId']);

    }

    public function createFile()
    {

        File::createFile($this->parentId, $this->name,$this->link, $this->description,  $this->fileSize ,$this->featured);
        $this->created = true;
        $this->reset(['name','link', 'description', 'fileSize', 'featured']);

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
