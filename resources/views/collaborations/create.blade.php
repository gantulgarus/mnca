@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4">Шинэ хамтын ажиллагаа нэмэх</h2>

        <form action="{{ route('collaborations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Нэр -->
            <div class="mb-3">
                <label for="name" class="form-label">Нэр</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Линк -->
            <div class="mb-3">
                <label for="link" class="form-label">Линк</label>
                <input type="url" name="link" id="link" class="form-control @error('link') is-invalid @enderror"
                    value="{{ old('link') }}">
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
            </div>

            <!-- Submit -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Нэмэх</button>
                <a href="{{ route('collaborations.index') }}" class="btn btn-secondary">Буцах</a>
            </div>
        </form>
    </div>
@endsection
