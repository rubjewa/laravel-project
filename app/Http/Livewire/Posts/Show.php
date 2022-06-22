<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Show extends Component
{
    public Post $post;

    // public function mount($post)
    // {
    //     $this->post = $post;
    // }

    public function mount($id)
    {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.posts.show')->layout('layouts.master');
        //Override standard app.blade.php with layouts.master
    }
}
