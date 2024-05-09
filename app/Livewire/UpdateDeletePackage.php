<?php

namespace App\Livewire;

use App\Models\Package;
use Livewire\Component;

class UpdateDeletePackage extends Component
{
    public $nameUpdate;
    public $idUpdate;
    public $priceUpdate;
    public $bandwidthUpdate;
    public $everyUpdate;
    public $totalipsUpdate;

    public $createdUpdate = false;
    public $openUpdate = false;
    public $delete = false;

    protected $rules = [
        'nameUpdate' => 'required',
        'priceUpdate' => 'required|numeric',
        'bandwidthUpdate' => 'required',
        'everyUpdate' => 'required|numeric',
        'totalipsUpdate' => 'required|numeric',
    ];
    public function deletePackage($id)
    {
        Package::deletePackage($id);
        $this->delete = true;
    }

    public function updatePackage($id)
    {
        $package = Package::getPackage($id);
        $this->nameUpdate = $package->getName();
        $this->priceUpdate = $package->getPrice();
        $this->bandwidthUpdate = $package->getBandwidth();
        $this->everyUpdate = $package->getEvery();
        $this->totalipsUpdate = $package->getTotalIps();
        $this->idUpdate = $package->getId();
        $this->openUpdate = true;
    }
    public function submitUpdate()
    {
        $this->validate();
        Package::updatePackage($this->idUpdate,[
            'name' => $this->nameUpdate,
            'price' => $this->priceUpdate,
            'bandwidth' => $this->bandwidthUpdate,
            'every' => $this->everyUpdate,
            'totalips' => $this->totalipsUpdate,
        ]);
        $this->createdUpdate = true;
        $this->reset(['nameUpdate', 'priceUpdate', 'bandwidthUpdate', 'everyUpdate', 'totalipsUpdate']);
    }
    public function render()
    {
        return view('livewire.update-delete-package', ['packages' => Package::getAllPackages()]);
    }
}
