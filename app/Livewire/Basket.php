<?php

namespace App\Livewire;

use App\Libraries\OrderStorage;
use Livewire\Component;

class Basket extends Component
{
    public function deletePackage()
    {
        $storage = new OrderStorage();
        $storage->delete();
        return redirect()->route('home');
    }
    public function render(OrderStorage $storage)
    {
        $package = $storage->retrieve()->getPackage();
        return view('livewire.basket', ['package' => $package]);
    }
}
