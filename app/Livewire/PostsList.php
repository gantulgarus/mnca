<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap'; // Tailwind биш бол

    public $postsPage = 1;
    protected $queryString = ['postsPage'];

    public function render()
    {
        $posts = Post::where('category_id', 1)
            ->orderBy('published_at', 'desc')
            ->paginate(4, ['*'], 'postsPage');

        return view('livewire.posts-list', compact('posts'));
    }
}
