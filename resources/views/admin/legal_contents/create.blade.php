@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h3 class="mb-4">Шинэ мэдээ нэмэх</h3>

        <form action="{{ route('legal_contents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Төрөл</label>
                <select name="category" class="form-select" required>
                    <option value="legal_framework">Хууль эрх зүй</option>
                    <option value="guidelines_manuals">Зөвлөмж гарын авлага</option>
                    <option value="contact_staff">Ажилтантай холбогдох</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Гарчиг</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Тайлбар</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">PDF файл</label>
                <input type="file" name="pdf" class="form-control" accept="application/pdf">
            </div>

            <button type="submit" class="btn btn-success">Хадгалах</button>
            <a href="{{ route('legal_contents.index') }}" class="btn btn-secondary">Буцах</a>
        </form>
    </div>
@endsection
