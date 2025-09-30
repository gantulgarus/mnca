@if ($posts->count() > 0)
    <!-- Том мэдээ -->
    @php $firstPost = $posts->first(); @endphp

    <div class="card mb-3" style="height: 400px; position: relative; overflow: hidden;">
        <a href="{{ route('posts.detail', $firstPost->id) }}" style="text-decoration: none; color: inherit;">
            @if ($firstPost->image)
                <img src="{{ asset($firstPost->image) }}" class="card-img-top"
                    style="height: 100%; width: 100%; object-fit: cover;">
            @endif
            <div class="overlay p-3"
                style="position: absolute; bottom: 0; left: 0; width: 100%;
                        background: rgba(0, 0, 0, 0.6); color: #fff; padding: 20px;">
                <small>{{ $firstPost->published_at->format('Y-m-d') }}</small>
                <h6>{{ $firstPost->translation()->title }}</h6>
            </div>
        </a>
    </div>

    <!-- Жижиг мэдээнүүд -->
    <div class="row gx-3">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <a href="{{ route('posts.detail', $post->id) }}" style="text-decoration: none; color: inherit;">
                        <img src="{{ asset($post->image ?? 'images/post1.jpg') }}" class="card-img-top"
                            style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <small class="text-muted">{{ $post->published_at->format('Y-m-d') }}</small>
                            <h6 class="card-title" style="font-size: 0.8rem;">
                                {{ Str::limit($post->translation()?->title, 50) }}
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Хуудаслалт -->
    <div id="posts-pagination" class="d-flex justify-content-end mt-3">
        {{ $posts->links() }}
    </div>
@else
    <div class="alert alert-info">Мэдээлэл олдсонгүй</div>
@endif
