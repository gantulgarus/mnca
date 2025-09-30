<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class VideoPostsList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap'; // Tailwind биш бол

    public function render()
    {
        $video_posts = Post::where('category_id', 3)
            ->orderBy('published_at', 'desc')
            ->paginate(3, ['*'], 'videoPage');

        return view('livewire.video-posts-list', [
            'video_posts' => $video_posts
        ]);
    }
}
