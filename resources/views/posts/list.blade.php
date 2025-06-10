@extends('layouts.main')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Мэдээний жагсаалт</h2>

        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Post Image"
                                style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text small text-muted">
                                {{ $post->published_at->format('Y/m/d') }} |
                                {{ $post->category->name ?? 'Ангилалгүй' }}
                            </p>
                            <p class="card-text flex-grow-1">{{ Str::limit(strip_tags($post->body), 100) }}</p>
                            <a href="{{ route('posts.detail', $post) }}"
                                class="btn btn-outline-primary btn-sm mt-2">Дэлгэрэнгүй</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">Мэдээ олдсонгүй.</div>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
