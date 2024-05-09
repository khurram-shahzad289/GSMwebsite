<?php

namespace App\Livewire;

use App\Models\Package;
use Livewire\Component;

class SelectPackage extends Component
{
    public function render()
    {
        return view('livewire.select-package', ['packages' =>$this->getPackages() ]);
    }
    private function getPackages(){
        return Package::getAllPackages();
    }
}
