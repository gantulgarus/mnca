<div>
    @if ($video_posts->count())
        <div class="row gx-3">
            @foreach ($video_posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 position-relative">
                        <a href="{{ route('posts.detail', $post->id) }}" style="text-decoration: none; color: inherit;">
                            <div class="ratio ratio-16x9">
                                {!! $post->translation()?->body !!}
                            </div>

                            <div
                                style="
                                position: absolute;
                                bottom: 0;
                                left: 0;
                                width: 100%;
                                height: 30%;
                                background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0));
                                padding: 5px 10px;
                                display: flex;
                                flex-direction: column;
                                justify-content: flex-end;
                            ">
                                <small class="text-white">{{ $post->published_at->format('Y-m-d') }}</small>
                                <h6 class="text-white m-0">{{ Str::limit($post->translation()?->title, 50) }}</h6>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-3">
            {{ $video_posts->links('vendor.pagination.bootstrap-4') }}
        </div>
    @else
        <div class="alert alert-info">Видео мэдээ олдсонгүй</div>
    @endif
</div>
