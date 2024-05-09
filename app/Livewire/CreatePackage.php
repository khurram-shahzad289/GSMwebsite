<?php

namespace App\Livewire;

use App\Models\Package;
use Livewire\Component;

class CreatePackage extends Component
{

    public $name;
    public $price;
    public $bandwidth;
    public $every;
    public $totalips;

    public $created = false;

    protected $rules = [
        'name' => 'required',
        'price' => 'required|numeric',
        'bandwidth' => 'required',
        'every' => 'required|numeric',
        'totalips' => 'required|numeric',
    ];


    public function submit()
    {
        $this->validate();
        Package::createPackage([
            'name' => $this->name,
            'price' => $this->price,
            'bandwidth' => $this->bandwidth,
            'every' => $this->every,
            'totalips' => $this->totalips,
        ]);
        $this->created = true;
        $this->reset(['name', 'price', 'bandwidth', 'every', 'totalips']);
    }
    public function render()
    {
        return view('livewire.create-package');
    }
}
