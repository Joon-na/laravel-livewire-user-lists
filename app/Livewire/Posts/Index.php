<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\On;
use Livewire\Component;



class Index extends Component
{

    #[On('PostCreated')]

    public function updateList($post){

    }

    public function placeholder(){
        return <<<BLADE
        <div>
            Loading ...
        </div>
        BLADE;
    }
    public function render()
    {
        sleep(3);
        $posts = \App\Models\Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', [
            'posts' => $posts
        ]);
    }
}
