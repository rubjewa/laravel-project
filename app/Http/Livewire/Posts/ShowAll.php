<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class ShowAll extends Component
{
    use WithPagination; //Add Pagination trait from livewire to page
    protected $paginationTheme = 'bootstrap';

    public $term;

    public function showPost($id)
    {
        $post = Post::findOrFail($id);

        return redirect()->route('showpost', $id);
    }

    public function mount()
    {
        // $commonCategories = Post::select('tags')->distinct()->get();
      // dd($commonCategories);
    }

    public function render()
    {
        return view('livewire.posts.show-all', [
          'posts' => Post::when($this->term, function ($query, $term) {
              return $query->where('title', 'LIKE', "%$term%")->orWhere('description', 'LIKE', "%$term%")->orWhere('tags', 'LIKE', "%$term%");
          })->paginate(4),
          ])->layout('layouts.master');
    }
}
