<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminFolders extends Component
{
    public $folders = [];

    public function show($folders)
    {
        if (empty($folders)) {
            return redirect()->route('dashboard');
        }
        $this->folders = $folders;
    }
    public function render()
    {
        return view('livewire.admin.admin-folders', ['folders' => $this->folders]);
    }
}
