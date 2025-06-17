<?php

namespace App\Http\Controllers;

use App\Models\HumanResource;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HumanResourceController extends Controller
{
    public function index()
    {
        $humanResources = HumanResource::with('department')->latest()->paginate(10);
        return view('human_resources.index', compact('humanResources'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('human_resources.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'company' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('images/human_resources'), $imageName);
            $validated['photo'] = 'images/human_resources/' . $imageName;
        }

        HumanResource::create($validated);

        return redirect()->route('human-resources.index')->with('success', 'Амжилттай нэмэгдлээ.');
    }

    public function show(HumanResource $humanResource)
    {
        return view('human_resources.show', compact('humanResource'));
    }

    public function edit(HumanResource $humanResource)
    {
        $departments = Department::all();
        return view('human_resources.edit', compact('humanResource', 'departments'));
    }

    public function update(Request $request, HumanResource $humanResource)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'company' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('photo')) {
            // Хуучин зураг устгах
            if ($humanResource->photo && file_exists(public_path($humanResource->photo))) {
                unlink(public_path($humanResource->photo));
            }

            $image = $request->file('photo');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('images/human_resources'), $imageName);
            $validated['photo'] = 'images/human_resources/' . $imageName;
        }

        $humanResource->update($validated);

        return redirect()->route('human-resources.index')->with('success', 'Амжилттай засагдлаа.');
    }

    public function destroy(HumanResource $humanResource)
    {
        $humanResource->delete();

        return redirect()->route('human-resources.index')->with('success', 'Амжилттай устгагдлаа.');
    }
}
