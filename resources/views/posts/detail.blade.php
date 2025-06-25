@extends('layouts.main')
@section('content')
    <div class="container py-4">
        <div class="card shadow-sm border-0 rounded-4">
            @if ($post->image)
                <img src="{{ asset($post->image) }}" class="card-img-top rounded-top-4" alt="Post image"
                    style="height: 500px; object-fit: cover;">
            @endif

            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $post->translation()->title ?? 'No translation' }}</h5>

                <p class="text-muted mb-3 small">
                    <i class="bi bi-calendar-event"></i> {{ $post->published_at->format('Y/m/d') }}
                    &nbsp; | &nbsp;
                    <i class="bi bi-tag"></i> {{ $post->category->name ?? 'Ангилалгүй' }}
                </p>

                <div class="card-text" style="line-height: 1.8; font-size: 1.1rem;">
                    @php
                        $body = $post->translation()->body ?? '';

                        $bodyWithFancybox = preg_replace_callback(
                            '/<img[^>]+src="([^"]+)"[^>]*>/i',
                            function ($matches) {
                                $src = $matches[1];
                                return '
                <div class="col-6 col-md-3 mb-3">
                    <a data-fancybox="gallery" href="' .
                                    $src .
                                    '">
                        <img src="' .
                                    $src .
                                    '"
                             class="img-fluid rounded shadow-sm"
                             style="width: 100%; height: 200px; object-fit: cover;">
                    </a>
                </div>';
                            },
                            $body,
                        );
                    @endphp

                    <div class="row">
                        {!! $bodyWithFancybox !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Fancybox.bind("[data-fancybox]", {
                Thumbs: {
                    autoStart: false,
                },
                Toolbar: {
                    display: {
                        left: [],
                        middle: ["zoom"], // Zoom товчийг нэмэх хэсэг
                        right: ["close"],
                    },
                },
            });
        });
    </script>
@endsection
