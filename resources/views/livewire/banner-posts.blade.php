{{-- In your banner-posts.blade.php --}}
<div>
    @if ($posts->count())
        <div class="swiper banner-swiper @if ($height == 'tall') banner-tall @else banner-short @endif">
            <div class="swiper-wrapper">
                @foreach ($posts as $post)
                    <div class="swiper-slide">
                        <a href="{{ route('posts.detail', $post->id) }}" title="{{ $post->translation()?->title }}">
                            <img src="{{ asset($post->image ?? 'images/default.jpg') }}"
                                alt="{{ $post->translation()?->title }}" class="w-100">
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    @else
        <div class="alert alert-info">Мэдээ олдсонгүй</div>
    @endif
</div>
