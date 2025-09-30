<div class="row g-4">
    @foreach ($video_posts as $video)
        <div class="col-md-4">
            <div class="card">
                <div class="ratio ratio-16x9">
                    {!! $video->translation()?->body !!}
                </div>
                <div class="card-body">
                    <h6 class="card-title">{{ $video->translation()?->title }}</h6>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div id="video-pagination" class="d-flex justify-content-center mt-3">
    {{ $video_posts->links() }}
</div>
