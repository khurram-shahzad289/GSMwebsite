<?php

namespace App\Livewire;

use App\Libraries\OrderStorage;
use Livewire\Component;

class SearchWeb extends Component
{
    public function render(OrderStorage $storage)
    {
        $package = $storage->retrieve()->getPackage();
        return view('livewire.search-web', compact('package') );
    }
}
