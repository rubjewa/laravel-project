<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class Home extends Component
{
    use WithPagination; //Add Pagination trait from livewire to page
    protected $paginationTheme = 'bootstrap';

    public function showPost($id)
    {
        $post = Post::findOrFail($id);

        return redirect()->route('showpost', $id);
    }

    public function render()
    {
        return view('livewire.home', [
        'posts' => Post::paginate(4),
        ])->layout('layouts.master');
    }
}
