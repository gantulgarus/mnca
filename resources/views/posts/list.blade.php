@extends('layouts.main')

@section('content')
    <div class="container py-4">
        <h3 class="mb-4 fw-bold">Мэдээний жагсаалт</h3>

        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($post->image)
                            <a href="{{ route('posts.detail', $post) }}">
                                <img src="{{ asset($post->image) }}" class="card-img-top" alt="Post Image"
                                    style="height: 200px; object-fit: cover;">
                            </a>
                        @else
                            <a href="{{ route('posts.detail', $post) }}">
                                <img src="{{ asset('images/default-post-image.png') }}" class="card-img-top"
                                    alt="Post Image" style="height: 200px; object-fit: cover;">
                            </a>
                        @endif

                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('posts.detail', $post) }}" class="text-decoration-none">
                                <h6 class="card-title text-dark fw-semibold mb-2" style="line-height: 1.4;">
                                    {{-- {{ Str::limit($post->title, 80) }} --}}
                                    {{ $post->translation()->title ?? 'No translation' }}
                                </h6>
                            </a>

                            <p class="card-text small text-muted mt-auto">
                                {{ $post->published_at->format('Y/m/d') }} |
                                {{ $post->category->name ?? 'Ангилалгүй' }}
                            </p>
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">Мэдээ олдсонгүй.</div>
                </div>
            @endforelse
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
