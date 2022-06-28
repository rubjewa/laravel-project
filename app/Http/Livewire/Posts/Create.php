<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Http\Livewire\Trix;

class Create extends Component
{
    public $title;
    public $description;
    // public $featured;
    public $tags;


    public $stringArray = [];

    // Validation Rules
    protected $rules = [
      'title'       => 'required|string|min:5|max:255',
      'description' => 'required|min:5',
      'tags'        => 'nullable',
      // 'featured'    => 'boolean',
    ];

    public function submit()
    {
        // Validate request
        $this->validate();

        if ($featured) {
            $this->featured = 1;
        }

        foreach ($this->stringArray as $term) {
            $term = ucfirst($term);
        }

        $this->tags = implode(";", $this->stringArray);

        Post::create([
                'title'       =>    $this->title,
                'description' =>    $this->description,
                // 'featured'    =>    $this->featured,
                'tags'        =>    $this->tags,
            ]);

        $this->reset();

        return redirect()->to('/posts/create');
        // dd($this);
    }


    public function render()
    {
        return view('livewire.posts.create')->layout('layouts.master');
    }
}
