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
            'category_id' => 'required|exists:categories,id',
            'published_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'title.mn' => 'required|string|max:255',
            'body.mn' => 'nullable|string',
            'title.en' => 'nullable|string|max:255',
            'body.en' => 'nullable|string',
        ]);

        // Зураг байвал хадгалах
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
            $data['image'] = $imagePath;
        }

        $post = new Post();
        $post->category_id = $request->category_id;
        $post->published_at = $request->published_at;

        $post->save();

        foreach (['mn', 'en'] as $locale) {
            if ($request->input("title.$locale")) {
                $post->translations()->create([
                    'locale' => $locale,
                    'title' => $request->input("title.$locale"),
                    'body' => $request->input("body.$locale"),
                ]);
            }
        }

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
            'category_id' => 'required|exists:categories,id',
            'published_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'title.mn' => 'required|string|max:255',
            'body.mn' => 'nullable|string',
            'title.en' => 'nullable|string|max:255',
            'body.en' => 'nullable|string',
        ]);

        $post->category_id = $request->category_id;
        $post->published_at = $request->published_at;

        // Хуучин зураг устгах ба шинэ зургийг хадгалах
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $post->image = $request->file('image')->store('posts', 'public');
        }

        $post->save();

        // Орчуулгуудыг шинэчлэх
        foreach (['mn', 'en'] as $locale) {
            $translationData = [
                'title' => $request->input("title.$locale"),
                'body' => $request->input("body.$locale"),
            ];

            // Байгаа бол шинэчлэх, байхгүй бол үүсгэх
            $post->translations()->updateOrCreate(
                ['locale' => $locale],
                $translationData
            );
        }

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
        $posts = Post::orderBy('published_at', 'desc')->paginate(6);
        return view('posts.list', compact('posts'));
    }
    public function detail(Post $post)
    {
        return view('posts.detail', compact('post'));
    }
}
