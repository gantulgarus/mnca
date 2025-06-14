@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mb-4">Шинэ ном нэмэх</h2>

        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Гарчиг</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Тайлбар</label>
                <textarea name="desc" class="form-control">{{ old('desc') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Нийтлэгдсэн огноо</label>
                <input type="date" name="published_at" class="form-control" value="{{ old('published_at') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Зураг</label>
                <input type="file" name="cover_image" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">PDF файл</label>
                <input type="file" name="pdf_file" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Нэмэх</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Буцах</a>
        </form>
    </div>
@endsection
