@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mb-4">Ном засварлах</h2>

        <form action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Гарчиг</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $book->title) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Тайлбар</label>
                <textarea name="desc" class="form-control">{{ old('desc', $book->desc) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Нийтлэгдсэн огноо</label>
                <input type="date" name="published_at" class="form-control"
                    value="{{ old('published_at', $book->published_at) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Одоогийн зураг:</label><br>
                @if ($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="cover" width="120">
                @else
                    <p>Зураг оруулаагүй</p>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label">Шинэ зураг (хэрвээ солих бол):</label>
                <input type="file" name="cover_image" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Одоогийн PDF файл:</label><br>
                @if ($book->pdf_file)
                    <a href="{{ asset('storage/' . $book->pdf_file) }}" target="_blank">Одоо байгаа PDF үзэх</a>
                @else
                    <p>Файл оруулаагүй</p>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label">Шинэ PDF файл (хэрвээ солих бол):</label>
                <input type="file" name="pdf_file" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Хадгалах</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Буцах</a>
        </form>
    </div>
@endsection
