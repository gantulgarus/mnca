<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    // Бүх гишүүдийг харуулах
    public function index()
    {
        $memberships = Membership::latest()->paginate(10); // Сүүлд нэмэгдсэн гишүүдийг 10-аар хуудаслах
        return view('memberships.index', compact('memberships'));
    }

    // Шинэ гишүүн бүртгэх форм
    public function create()
    {
        return view('memberships.create');
    }

    // Шинэ гишүүн хадгалах
    public function store(Request $request)
    {
        $validated = $request->validate([
            'organization_name' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'website' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'youtube' => 'nullable|max:255',
            'logo' => 'nullable|image|max:4096', // 4MB хүртэлх зураг
        ]);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('images/logo'), $imageName);
            $validated['logo'] = 'images/logo/' . $imageName;
        }

        Membership::create($validated);
        return redirect()->route('memberships.index')->with('success', 'Гишүүн амжилттай бүртгэгдлээ.');
    }

    // Гишүүний мэдээлэл харах
    public function show(Membership $membership)
    {
        return view('memberships.show', compact('membership'));
    }

    // Засварлах форм
    public function edit(Membership $membership)
    {
        return view('memberships.edit', compact('membership'));
    }

    // Гишүүний мэдээллийг шинэчлэх
    public function update(Request $request, Membership $membership)
    {
        $validated = $request->validate([
            'organization_name' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'website' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'youtube' => 'nullable|max:255',
            'logo' => 'nullable|image|max:4096', // 4MB хүртэлх зураг
        ]);

        if ($request->hasFile('logo')) {
            // Хуучин зургийг устгахыг хүсвэл энд нэмнэ
            $image = $request->file('logo');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('images/logo'), $imageName);
            $validated['logo'] = 'images/logo/' . $imageName;
        }

        $membership->update($validated);
        return redirect()->route('memberships.index')->with('success', 'Мэдээлэл амжилттай шинэчлэгдлээ.');
    }

    // Устгах
    public function destroy(Membership $membership)
    {
        $membership->delete();
        return redirect()->route('memberships.index')->with('success', 'Гишүүн амжилттай устгагдлаа.');
    }

    public function list()
    {
        $memberships = Membership::orderBy('created_at', 'desc')->paginate(6);
        return view('memberships.list', compact('memberships'));
    }
}
