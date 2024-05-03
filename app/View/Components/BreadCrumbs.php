<?php

namespace App\View\Components;

use App\Models\File;
use App\Models\Folder;
use Closure;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\FolderDisplayController;
use Illuminate\View\Component;

class BreadCrumbs extends Component
{
    /**
     * Create a new component instance.
     */
    public $navElements = [];

    public function __construct(public $parentId)
    {
    }
    public function getNavElements()
    {
        if(is_null($this->parentId)){
            return $this->navElements = [];
        }
        else{
            do{
                $parent = (new \App\Models\Folder())->getParentFolder($this->parentId);
                $this->navElements[] = $parent;
                if(!is_null($parent->getFolderParentId())){
                    $this->parentId = $parent->getFolderParentId();
                }
            }while ($parent->getFolderParentId() !== null);

        }

        return array_reverse($this->navElements);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bread-crumbs');
    }
}
