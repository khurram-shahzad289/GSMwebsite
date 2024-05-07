<?php

namespace App\View\Components;

use App\Models\Folder;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeFolders extends Component
{
    public $folders = [];
    /**
     * Create a new component instance.
     */
    public function __construct($folders, $files, public string $route)
    {
//        dd($files);
//        dd(empty($folders));
//        dd();
        if(empty($folders) && empty($files)){
            $folderModel =  new Folder();
            $this->folders = $folderModel->getAllNullFolders();
        }
        else{
            $this->folders = $folders;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-folders', ['folders' => $this->folders]);
    }
}
