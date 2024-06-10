<?php

namespace App\Livewire;

use App\Libraries\Order;
use App\Libraries\OrderStorage;
use App\Models\Package;
use Livewire\Component;

class SelectPackage extends Component
{

    public function packageSelected($id)
    {
        $package = Package::getPackage($id);
        $storage = new OrderStorage();

        $storage->modify(function (Order $order) use ($package) {
            $order->setPackage($package);
        });
        return redirect()->route('shopping_cart');
    }

    public function render()
    {
        return view('livewire.select-package', ['packages' => $this->getPackages()]);
    }

    private function getPackages()
    {
        return Package::getAllPackages();
    }
}
