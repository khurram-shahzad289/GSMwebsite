<?php

namespace App\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';
    public $phone;
    public $country = '';
    public $city = '';
    public $address = '';
    public $zip = '';

    /** @var string */
    public $email = '';
    public $username = '';
    public $terms = false;

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';
    public function register()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required'],
            'country' => ['required'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'terms' => ['required'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $user = User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'country' => $this->country,
            'city' => $this->city,
            'address' => $this->address,
            'zip' => $this->zip,
            'email' => $this->email,
            'username' => $this->username,
            'terms' => $this->terms,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);
        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app');
    }
}
