<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginForm extends Form
{
    #[Rule('required|email')]
    public $email;

    #[Rule('required')]
    public $password;
    
    public function store(){
        if(Auth::attempt($this->validate())){
            return redirect()->route('home');
           }
           throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.']
           ]);
    }
}
