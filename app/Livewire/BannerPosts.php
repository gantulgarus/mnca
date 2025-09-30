<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class BannerPosts extends Component
{
    // In your BannerPosts Livewire component
    public $categoryId;
    public $height = 'short'; // default value

    public function mount($categoryId, $height = 'short')
    {
        $this->categoryId = $categoryId;
        $this->height = $height;
    }

    public function render()
    {
        // Тухайн category_id-тай бүх идэвхтэй мэдээг авах
        $posts = Post::where('category_id', $this->categoryId)
            ->orderBy('published_at', 'desc')
            ->get();

        return view('livewire.banner-posts', compact('posts'));
    }
}
