<?php

namespace App\Http\Controllers;

use App\Models\LegalContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class LegalContentController extends Controller
{
    public function index()
    {
        $items = LegalContent::latest()->paginate(10);
        return view('admin.legal_contents.index', compact('items'));
    }

    public function create()
    {
        return view('admin.legal_contents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required|string|max:255',
            'pdf' => 'nullable|mimes:pdf|max:20480',
        ]);

        $pdfPath = null;
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/legal_pdfs'), $filename);
            $pdfPath = 'images/legal_pdfs/' . $filename;
        }

        LegalContent::create([
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'pdf_path' => $pdfPath,
        ]);

        return redirect()->route('legal_contents.index')->with('success', 'Мэдээ амжилттай нэмэгдлээ.');
    }

    public function edit(LegalContent $legalContent)
    {
        return view('admin.legal_contents.edit', compact('legalContent'));
    }

    public function update(Request $request, LegalContent $legalContent)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required|string|max:255',
            'pdf' => 'nullable|mimes:pdf|max:20480',
        ]);

        $pdfPath = $legalContent->pdf_path;
        if ($request->hasFile('pdf')) {
            // Шинэ файлыг хадгалах
            $file = $request->file('pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/legal_pdfs'), $filename);
            $pdfPath = 'images/legal_pdfs/' . $filename;
        }

        $legalContent->update([
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'pdf_path' => $pdfPath,
        ]);

        return redirect()->route('legal_contents.index')->with('success', 'Амжилттай засагдлаа.');
    }

    public function destroy(LegalContent $legalContent)
    {
        $legalContent->delete();

        return redirect()->route('legal_contents.index')->with('success', 'Амжилттай устгалаа.');
    }

    public function showCategory($category)
    {
        $categories = [
            'framework' => 'legal_framework',
            'guidelines' => 'guidelines_manuals',
            'contact-staff' => 'contact_staff',
        ];

        if (!array_key_exists($category, $categories)) {
            abort(404);
        }

        $items = LegalContent::where('category', $categories[$category])
            ->latest()
            ->paginate(10);

        $titles = [
            'framework' => __('nav.legal_framework'),
            'guidelines' => __('nav.guidelines_manuals'),
            'contact-staff' => __('nav.contact_staff'),
        ];

        return view('admin.legal_contents.list', [
            'items' => $items,
            'pageTitle' => $titles[$category],
        ]);
    }
}
