<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{

    #[\Livewire\Attributes\Rule(['required'])]
    public string $body = "";


    public function store()
    {

        $post = Auth::user()->posts()->create(
            $this->validate()
        );

        flash('Post created successfully');

        $this->reset();

        return $post;
    }
}
