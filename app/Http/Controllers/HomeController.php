<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Membership;
use Illuminate\Http\Request;
use App\Models\BuildingMaterialPrice;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->where('category_id', 1)->orderBy('published_at', 'desc')->take(4)
            ->get();

        // 'category_id' 3 is for video posts
        $video_posts = Post::with('category')->where('category_id', 3)->orderBy('published_at', 'desc')->take(3)
            ->get();

        $memberships = Membership::all();

        $building_material_prices = BuildingMaterialPrice::latest()->get();

        return view('home', compact('posts', 'video_posts', 'memberships', 'building_material_prices'));
    }
}
