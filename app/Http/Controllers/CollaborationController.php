<?php

namespace App\Http\Controllers;

use App\Models\Collaboration;
use Illuminate\Http\Request;

class CollaborationController extends Controller
{
    public function index()
    {
        $collaborations = Collaboration::all();
        return view('collaborations.index', compact('collaborations'));
    }

    public function create()
    {
        return view('collaborations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:4096',
            'link'  => 'nullable|url',
        ]);

        $data = $request->only(['name', 'link']);

        // Зураг байвал хадгалах
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images/posts'), $imageName);
            $data['image'] = 'images/posts/' . $imageName;
        }

        Collaboration::create($data);

        return redirect()->route('collaborations.index')->with('success', 'Хамтын ажиллагаа амжилттай нэмэгдлээ');
    }

    public function edit(Collaboration $collaboration)
    {
        return view('collaborations.edit', compact('collaboration'));
    }

    public function update(Request $request, Collaboration $collaboration)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:4096',
            'link'  => 'nullable|url',
        ]);

        $data = $request->only(['name', 'link']);

        // Зураг байвал хадгалах
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images/posts'), $imageName);
            $data['image'] = 'images/posts/' . $imageName;
        }

        $collaboration->update($data);

        return redirect()->route('collaborations.index')->with('success', 'Хамтын ажиллагаа амжилттай шинэчлэгдлээ');
    }

    public function destroy(Collaboration $collaboration)
    {
        $collaboration->delete();
        return redirect()->route('collaborations.index')->with('success', 'Хамтын ажиллагаа устгагдлаа');
    }
}
