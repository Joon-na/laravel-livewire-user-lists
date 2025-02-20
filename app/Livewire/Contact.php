<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Contact')]

class Contact extends Component
{
    public function render()
    {

        sleep(3);
        return view('livewire.contact');
    }
}
