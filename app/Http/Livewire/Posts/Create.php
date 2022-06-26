<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Http\Livewire\Trix;
use Flash;

class Create extends Component
{
    public $title;
    public $description;
    public $stringArray = [];
    public $tags;

    // Validation Rules
    protected $rules = [
      'title'       => 'required|string|min:5|max:255',
      'description' => 'required|min:5',
      'tags'        => 'nullable',
    ];

    public function submit()
    {
        // Validate request
        $this->validate();

        foreach ($this->stringArray as $term) {
            $term = ucfirst($term);
        }

        $this->tags = implode(";", $this->stringArray);

        Post::create([
                'title'       =>    $this->title,
                'description' =>    $this->description,
                'tags'        =>    $this->tags,
            ]);

        $this->reset();
        return redirect()->to('/posts/create');
    }


    public function render()
    {
        return view('livewire.posts.create')->layout('layouts.master');
    }
}
