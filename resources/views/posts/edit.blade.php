@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Мэдээ засах</h2>
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Ангилал --}}
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

            {{-- Огноо --}}
            <div class="mb-3">
                <label for="published_at" class="form-label">Огноо</label>
                <input type="date" name="published_at" id="published_at" class="form-control"
                    value="{{ old('published_at', \Carbon\Carbon::parse($post->published_at)->format('Y-m-d')) }}" required>
            </div>

            {{-- Зураг --}}
            <div class="mb-3">
                <label for="image" class="form-label">Зураг</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($post->image)
                    <div class="mt-2">
                        <img src="{{ asset($post->image) }}" width="150">
                    </div>
                @endif
            </div>

            {{-- Хэлээр таб хуваарилалт --}}
            <ul class="nav nav-tabs mb-3" id="langTabs" role="tablist">
                @foreach (['mn' => 'Монгол', 'en' => 'English'] as $locale => $label)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if ($loop->first) active @endif"
                            id="{{ $locale }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $locale }}"
                            type="button" role="tab" aria-controls="{{ $locale }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content" id="langTabContent">
                @foreach (['mn' => 'Монгол', 'en' => 'English'] as $locale => $label)
                    <div class="tab-pane fade @if ($loop->first) show active @endif"
                        id="{{ $locale }}" role="tabpanel" aria-labelledby="{{ $locale }}-tab">

                        {{-- Гарчиг --}}
                        <div class="mb-3">
                            <label for="title_{{ $locale }}" class="form-label">Гарчиг ({{ $label }})</label>
                            <input type="text" name="title[{{ $locale }}]" id="title_{{ $locale }}"
                                class="form-control"
                                value="{{ old("title.$locale", $post->translations->where('locale', $locale)->first()?->title) }}"
                                @if ($locale === 'mn') required @endif>
                        </div>

                        {{-- Агуулга --}}
                        <div class="mb-3">
                            <label for="body_{{ $locale }}" class="form-label">Агуулга ({{ $label }})</label>
                            <textarea name="body[{{ $locale }}]" id="body_{{ $locale }}" class="form-control body" rows="5"
                                @if ($locale === 'mn') required @endif>{{ old("body.$locale", $post->translations->where('locale', $locale)->first()?->body) }}</textarea>
                        </div>

                    </div>
                @endforeach
            </div>

            <button class="btn btn-success mt-2">Шинэчлэх</button>
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
                codeviewFilter: false, // HTML шүүлтүүрийг идэвхгүй болгоно
                codeviewIframeFilter: false, // Iframe шүүлтүүрийг идэвхгүй болгоно
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
