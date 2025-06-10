<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Мэдээ жагсаалт
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    // Мэдээ нэмэх форм
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    // Мэдээ хадгалах
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
            'published_at' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $data = $request->only(['title', 'body', 'published_at', 'category_id']);

        // Зураг байвал хадгалах
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
            $data['image'] = $imagePath;
        }

        Post::create($data);

        return redirect()->route('posts.index')->with('success', 'Мэдээ амжилттай нэмэгдлээ');
    }

    // Мэдээ засварлах форм
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    // Мэдээ шинэчлэх
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
            'published_at' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['title', 'body', 'published_at', 'category_id']);

        // Шинэ зураг байвал хадгалаад, хуучныг устгах
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Мэдээ амжилттай шинэчлэгдлээ');
    }

    // Мэдээ устгах
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Мэдээ амжилттай устгагдлаа');
    }

    public function list()
    {
        $posts = Post::latest()->paginate(9);
        return view('posts.list', compact('posts'));
    }
    public function detail(Post $post)
    {
        return view('posts.detail', compact('post'));
    }
}