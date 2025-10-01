@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4">Хамтын ажиллагаа засах</h2>

        <form action="{{ route('collaborations.update', $collaboration->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Нэр -->
            <div class="mb-3">
                <label for="name" class="form-label">Нэр</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name', $collaboration->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Линк -->
            <div class="mb-3">
                <label for="link" class="form-label">Линк</label>
                <input type="url" name="link" id="link" class="form-control @error('link') is-invalid @enderror"
                    value="{{ old('link', $collaboration->link) }}">
                @error('link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Зураг -->
            <div class="mb-3">
                <label for="image" class="form-label">Зураг</label>
                <input type="file" name="image" id="image"
                    class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                @if ($collaboration->image)
                    <div class="mt-2">
                        <p>Одоогийн зураг:</p>
                        <img src="{{ asset('storage/' . $collaboration->image) }}" alt="{{ $collaboration->name }}"
                            class="img-fluid rounded shadow-sm" style="max-height: 150px;">
                    </div>
                @endif
            </div>

            <!-- Submit -->
            <div class="d-flex justify-content-between">
                <a href="{{ route('collaborations.index') }}" class="btn btn-secondary">Буцах</a>
                <button type="submit" class="btn btn-primary">Хадгалах</button>
            </div>
        </form>
    </div>
@endsection
