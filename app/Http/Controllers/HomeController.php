<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Membership;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->where('category_id', 1)->orderBy('published_at', 'desc')->get();

        // 'category_id' 3 is for video posts
        $video_posts = Post::with('category')->where('category_id', 3)->orderBy('published_at', 'desc')->get();

        $memberships = Membership::all();

        return view('home', compact('posts', 'video_posts', 'memberships'));
    }
}
