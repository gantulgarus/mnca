@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Мэдэгдэл засах</h2>

        <form action="{{ route('notifications.update', $notification) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Гарчиг</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $notification->title) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Мэдэгдлийн агуулга <span class="text-danger">*</span></label>
                <textarea name="message" class="form-control" rows="4" required>{{ old('message', $notification->message) }}</textarea>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="is_active" id="is_active" class="form-check-input"
                    {{ $notification->is_active ? 'checked' : '' }}>
                <label for="is_active" class="form-check-label">Идэвхтэй болгох</label>
            </div>

            <button class="btn btn-success">Шинэчлэх</button>
            <a href="{{ route('notifications.index') }}" class="btn btn-secondary">Буцах</a>
        </form>
    </div>
@endsection
