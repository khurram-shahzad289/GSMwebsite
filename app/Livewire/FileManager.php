<?php

namespace App\Livewire;

use App\Libraries\Folder as FolderClass;
use App\Models\File;
use App\Models\Folder;
use Livewire\Component;

class FileManager extends Component
{
    public $folders = [];
    public $checked = 'no';
    public $navElements = [];
    public $noFiles = false;
    protected $listeners = ['recursive'];

    public function mount()
    {
        $this->folders = Folder::tree();
//        dd($this->folders);
    }

    public function recursive($folders)
    {
//        dd($folders);
        $this->setNavElements($folders);
        if (empty($folders['children'])) {
            $this->noFiles = true;
        }
        $this->folders = $folders['children'];
        $this->render();
    }

    private function setNavElements($folders)
    {
        $index = array_search($folders['id'], array_column($this->navElements, 'id'));
        if ($index !== false) {
            $this->navElements = array_slice($this->navElements, 0, $index + 1);
        } else {
            $this->navElements[] = $folders;
        }
    }


    public function render()
    {

        return view('livewire.file-manager', ['folders' => $this->folders]);

    }
}
