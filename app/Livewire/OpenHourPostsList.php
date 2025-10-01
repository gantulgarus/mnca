<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class OpenHourPostsList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $open_hour_posts = Post::where('category_id', 6)
            ->orderBy('published_at', 'desc')
            ->paginate(3, ['*'], 'openHourPage');

        return view('livewire.open-hour-posts-list', [
            'open_hour_posts' => $open_hour_posts
        ]);
    }
}
