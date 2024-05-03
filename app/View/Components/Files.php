<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Files extends Component
{
    /**
     * Create a new component instance.
     */
    public $files = [];
    public function __construct($files)
    {
        $this->files = $files;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.files',  ['files' => $this->files]);
    }
}
