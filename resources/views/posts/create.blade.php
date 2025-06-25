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

            <!-- Ерөнхий мэдээлэл -->

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
                <label for="image" class="form-label">Зураг</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>


            {{-- <div class="mb-3">
                <label for="title" class="form-label">Гарчиг</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Агуулга</label>
                <textarea name="body" id="body" class="form-control" rows="6">{{ old('body') }}</textarea>
            </div> --}}

            <!-- Монгол, Англи хэлний таб -->
            <ul class="nav nav-tabs" id="langTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="mn-tab" data-bs-toggle="tab" data-bs-target="#mn" type="button"
                        role="tab" aria-controls="mn" aria-selected="true">Монгол</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="en-tab" data-bs-toggle="tab" data-bs-target="#en" type="button"
                        role="tab" aria-controls="en" aria-selected="false">English</button>
                </li>
            </ul>
            <div class="tab-content mt-3" id="langTabContent">
                <!-- Монгол хэл -->
                <div class="tab-pane fade show active" id="mn" role="tabpanel" aria-labelledby="mn-tab">
                    <div class="mb-3">
                        <label class="form-label">Гарчиг</label>
                        <input type="text" name="title[mn]" class="form-control" value="{{ old('title.mn') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Агуулга</label>
                        <textarea name="body[mn]" class="form-control body" rows="5">{{ old('body.mn') }}</textarea>
                    </div>
                </div>

                <!-- Англи хэл -->
                <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-tab">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title[en]" class="form-control" value="{{ old('title.en') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Body</label>
                        <textarea name="body[en]" class="form-control body" rows="5">{{ old('body.en') }}</textarea>
                    </div>
                </div>
            </div>


            <button class="btn btn-primary mt-2">Хадгалах</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.body').summernote({
                placeholder: 'Агуулгаа энд бичнэ үү...',
                tabsize: 2,
                height: 300,
                callbacks: {
                    onImageUpload: function(files) {
                        uploadImage(files[0], $(this));
                    }
                }
            });

            function uploadImage(file, editor) {
                var formData = new FormData();
                formData.append('image', file);

                $.ajax({
                    url: '/upload-summernote-image',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        editor.summernote('insertImage', response.url);
                    },
                    error: function(xhr) {
                        console.error("Зураг нэмэхэд алдаа гарлаа", xhr.responseText);
                    }
                });
            }
        });
    </script>
@endsection
