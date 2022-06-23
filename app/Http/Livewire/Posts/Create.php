<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Http\Livewire\Trix;

class Create extends Component
{
    public $title;
    public $description;

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
        ]);

        Post::create($validatedData);

        return redirect()->to('/posts');
    }

    public function render()
    {
        return view('livewire.posts.create')->layout('layouts.master');
    }
}
