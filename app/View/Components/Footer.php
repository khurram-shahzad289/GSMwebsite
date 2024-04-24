<?php

namespace App\View\Components;

use App\Libraries\Brand;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
//    public Brand $brand;
    /**
     * Create a new component instance.
     */
    public function __construct(public Brand $brand)
    {
//        $this->brand = $brand;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
