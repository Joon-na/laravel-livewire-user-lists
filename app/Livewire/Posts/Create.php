<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Create extends Component
{
   public \App\Livewire\Forms\PostForm $form;

    public function save(): void
    {
       $post = $this->form->store();

       $this->dispatch('PostCreated', $post->id);
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
