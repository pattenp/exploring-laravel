<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{

    public $email;
    public $password;

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
