<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'pdf_file' => 'nullable|mimes:pdf|max:25000',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('images/books/covers'), $imageName);
            $data['cover_image'] = 'images/books/covers/' . $imageName;
        }

        if ($request->hasFile('pdf_file')) {
            $pdf = $request->file('pdf_file');
            $pdfName = uniqid() . '.' . $pdf->extension();
            $pdf->move(public_path('files/books/pdfs'), $pdfName);
            $data['pdf_file'] = 'files/books/pdfs/' . $pdfName;
        }

        Book::create($data);

        return redirect()->route('books.index')->with('success', 'Book created.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'pdf_file' => 'nullable|mimes:pdf|max:25000',
            'published_at' => 'nullable|date',
        ]);

        // Cover image шинэчлэх
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('images/books/covers'), $imageName);
            $data['cover_image'] = 'images/books/covers/' . $imageName;
        }

        // PDF шинэчлэх
        if ($request->hasFile('pdf_file')) {
            $pdf = $request->file('pdf_file');
            $pdfName = uniqid() . '.' . $pdf->extension();
            $pdf->move(public_path('files/books/pdfs'), $pdfName);
            $data['pdf_file'] = 'files/books/pdfs/' . $pdfName;
        }

        $book->update($data);

        return redirect()->route('books.index')->with('success', 'Book updated.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted.');
    }

    public function list()
    {
        $books = Book::orderBy('published_at', 'desc')->paginate(6);
        return view('books.list', compact('books'));
    }
}
