<div>
    @if ($posts->count())
        @foreach ($posts as $index => $post)
            @if ($index === 0)
                <!-- Том мэдээ - Hero Post -->
                <div class="card mb-4 position-relative" style="overflow: hidden; border-radius: 16px;">
                    <a href="{{ route('posts.detail', $post->id) }}" style="text-decoration: none; color: inherit;">
                        <img src="{{ asset($post->image ?? 'images/post1.jpg') }}" class="card-img-top"
                            alt="{{ $post->translation()?->title }}"
                            style="width: 100%; object-fit: cover; height: 500px;" />

                        <!-- Read more indicator -->
                        <div class="read-more">
                            <i class="fas fa-arrow-right text-dark"></i>
                        </div>

                        <!-- Overlay -->
                        <div class="post-overlay">
                            <div class="mb-2">
                                <small
                                    class="text-white-80">{{ $post->published_at->format('Y оны m сарын d') }}</small>
                            </div>
                            <h5 class="text-white m-0 fw-bold">{{ $post->translation()?->title }}</h5>
                            @if ($post->translation()?->excerpt)
                                <p class="text-white-80 mt-2 mb-0 d-none d-md-block">
                                    {{ Str::limit($post->translation()?->excerpt, 120) }}
                                </p>
                            @endif
                        </div>
                    </a>
                </div>
            @else
                @if ($index === 1)
                    <div class="row gx-4 gy-3">
                @endif
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
                @if ($loop->last)
</div>
@endif
@endif
@endforeach

<!-- Pagination -->
<div class="d-flex justify-content-end mt-4">
    {{ $posts->links('vendor.pagination.bootstrap-4') }}
</div>
@else
<div class="alert alert-info text-center py-4">
    <i class="fas fa-info-circle me-2"></i>Мэдээлэл олдсонгүй
</div>
@endif
</div>
