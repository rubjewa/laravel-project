<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class ShowAll extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.posts.show-all', [
          'posts' => Post::all()
          ])
          ->layout('layouts.master');
    }
}
