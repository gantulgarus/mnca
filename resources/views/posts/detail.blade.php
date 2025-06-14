@extends('layouts.main')
@section('content')
    <div class="container py-4">
        <div class="card shadow-lg border-0 rounded-4">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top rounded-top-4" alt="Post image"
                    style="height: 300px; object-fit: cover;">
            @endif

            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $post->title }}</h5>

                <p class="text-muted mb-3 small">
                    <i class="bi bi-calendar-event"></i> {{ $post->published_at->format('Y/m/d') }}
                    &nbsp; | &nbsp;
                    <i class="bi bi-tag"></i> {{ $post->category->name ?? 'Ангилалгүй' }}
                </p>

                <div class="card-text" style="line-height: 1.8; font-size: 1.1rem;">
                    {{-- {!! str_replace('<img', '<img class="zoomable-img"', $post->body) !!} --}}
                    {!! \Illuminate\Support\Str::of($post->body)->replace('<img', '<img class="zoomable-img"') !!}

                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const zoom = mediumZoom('.zoomable-img', {
                margin: 12, // Таны хэрэгцээнд бага margin тохиромжтой
                background: 'rgba(0, 0, 0, 0.85)',
                scrollOffset: 0,
                container: null, // default хэрэглэнэ, хязгаарлахгүй
            });
        });
    </script>
@endsection
