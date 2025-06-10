@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Шинэ мэдээ нэмэх</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Гарчиг</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Ангилал</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="published_at" class="form-label">Огноо</label>
                <input type="date" name="published_at" id="published_at" class="form-control"
                    value="{{ old('published_at', date('Y-m-d')) }}" required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Агуулга</label>
                <textarea name="body" id="body" class="form-control" rows="6">{{ old('body') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Зураг</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <button class="btn btn-primary mt-2">Хадгалах</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#body').summernote({
                placeholder: 'Агуулгаа энд бичнэ үү...',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endsection
