<?php

namespace App\Livewire;

use App\Libraries\OrderStorage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Basket extends Component
{
    public function deletePackage()
    {
        $storage = new OrderStorage();
        $storage->delete();
        return redirect()->route('home');
    }
    public function checkout()
    {
        if (!Auth::user()){
            return redirect()->intended(route('login'));
        }
        return redirect()->route('payment');
    }
    public function render(OrderStorage $storage)
    {
        $package = $storage->retrieve()->getPackage();
        return view('livewire.basket', ['package' => $package]);
    }
}
