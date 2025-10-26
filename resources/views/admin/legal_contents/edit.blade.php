@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h3 class="mb-4">Мэдээ засах</h3>

        <form action="{{ route('legal_contents.update', $legalContent) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Төрөл</label>
                <select name="category" class="form-select" required>
                    <option value="legal_framework" {{ $legalContent->category == 'legal_framework' ? 'selected' : '' }}>
                        Хууль эрх зүй</option>
                    <option value="guidelines_manuals"
                        {{ $legalContent->category == 'guidelines_manuals' ? 'selected' : '' }}>Зөвлөмж гарын авлага
                    </option>
                    <option value="contact_staff" {{ $legalContent->category == 'contact_staff' ? 'selected' : '' }}>
                        Ажилтантай холбогдох</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Гарчиг</label>
                <input type="text" name="title" class="form-control" value="{{ $legalContent->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Тайлбар</label>
                <textarea name="description" class="form-control" rows="3">{{ $legalContent->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">PDF файл</label><br>
                @if ($legalContent->pdf_path)
                    <a href="{{ asset($legalContent->pdf_path) }}" target="_blank" class="d-block mb-2">Одоогийн
                        файл харах</a>
                @endif
                <input type="file" name="pdf" class="form-control" accept="application/pdf">
            </div>

            <button type="submit" class="btn btn-primary">Хадгалах</button>
            <a href="{{ route('legal_contents.index') }}" class="btn btn-secondary">Буцах</a>
        </form>
    </div>
@endsection
