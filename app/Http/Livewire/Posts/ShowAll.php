<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class ShowAll extends Component
{
    use WithPagination; //Add Pagination trait from livewire to page
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        return view('livewire.posts.show-all', [
          'posts' => Post::paginate(5),
          ])
          ->layout('layouts.master');
    }
}
