<?php

namespace App\Livewire;

use App\Libraries\OrderStorage;
use Livewire\Component;

class Payment extends Component
{
    public function render(OrderStorage $orderStorage)
    {
        $package = $orderStorage->retrieve()->getPackage();
        return view('livewire.payment', compact('package'));
    }
}
