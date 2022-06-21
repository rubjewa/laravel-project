<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Create extends Component
{
    public $title;
    public $description;

    // protected $rules = [
    //   'title'       => ['required', 'min:5'],
    //   'description' => ['required', 'min:5'],
    // ];

    //Method for when form is updated (realtime validation for example)
    // public function updated()
    // {
    //   $this->validateOnly()
    // }

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
        ]);

        Post::create($validatedData);

        return redirect()->to('/posts');
    }

    // public function store()
    // {
    //     Post::create([
    //       'title' =>  $this->title,
    //       'description' =>  $this->description,
    //     ]);
    //
    //     session()->flash('succes', 'Post gemaakt');
    //
    //     // Inputfields leeghalen
    //     $this->reset();
    // }

    public function render()
    {
        return view('livewire.posts.create')->layout('layouts.master');
    }
}
