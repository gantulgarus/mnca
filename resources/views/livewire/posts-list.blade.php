<div>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card h-100 position-relative" style="overflow: hidden; border-radius: 12px;">
                    <a href="{{ route('posts.detail', $post->id) }}" style="text-decoration: none; color: inherit;">
                        <img src="{{ asset($post->image ?? 'images/post1.jpg') }}" class="card-img-top"
                            alt="{{ $post->translation()?->title }}" style="height: 250px; object-fit: cover;" />

                        <!-- Read more indicator -->
                        <div class="read-more">
                            <i class="fas fa-arrow-right text-dark"></i>
                        </div>

                        <!-- Overlay -->
                        <div class="post-overlay small-overlay">
                            <div class="mb-1">
                                <small class="text-white-80">{{ $post->published_at->format('Y-m-d') }}</small>
                            </div>
                            <h6 class="text-white m-0 fw-semibold fs-24">
                                {{ Str::limit($post->translation()?->title, 40) }}</h6>
                            @if ($post->translation()?->excerpt)
                                <p class="text-white-80 mt-1 mb-0 small d-none d-sm-block">
                                    {{ Str::limit($post->translation()?->excerpt, 80) }}
                                </p>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-end mt-4">
        {{ $posts->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
