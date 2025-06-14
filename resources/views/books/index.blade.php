@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Шинээр нэмэх</a>

        @foreach ($books as $book)
            <div class="card mb-3">
                <div class="card-body">
                    <h4>{{ $book->title }}</h4>
                    <p>{{ $book->desc }}</p>
                    @if ($book->cover_image)
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="" width="100">
                    @endif
                    <br>
                    @if ($book->pdf_file)
                        <a href="{{ asset('storage/' . $book->pdf_file) }}" target="_blank">View PDF</a>
                    @endif
                    <p>Published at: {{ $book->published_at }}</p>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach

        {{ $books->links() }}
    </div>
@endsection
