@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Мэдээ засах</h2>
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Гарчиг</label>
                <input type="text" name="title" id="title" class="form-control"
                    value="{{ old('title', $post->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Ангилал</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="">-- Сонгох --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="published_at" class="form-label">Огноо</label>
                <input type="date" name="published_at" id="published_at" class="form-control"
                    value="{{ old('published_at', \Carbon\Carbon::parse($post->published_at)->format('Y-m-d')) }}" required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Агуулга</label>
                <textarea name="body" id="body" class="form-control" rows="5" required>{{ old('body', $post->body) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Зураг</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($post->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $post->image) }}" width="150">
                    </div>
                @endif
            </div>

            <button class="btn btn-success mt-2">Шинэчлэх</button>
        </form>
    </div>
@endsection
