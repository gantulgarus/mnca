@extends('layouts.main')

@section('content')
    <div class="container my-4">
        <div class="row">
            <!-- Зүүн тал: Мэдээнүүд -->
            <div class="col-md-8">
                @livewire('posts-list')
            </div>

            <!-- Баруун талын зураг ба статистик -->
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <!-- Нэг мөрөнд байрлах статистик -->
                    <div class="w-100">
                        @livewire('material-prices')
                    </div>

                    <!-- Vertical Banner Section - өндөр -->
                    <div class="w-100">
                        @livewire('banner-posts', ['categoryId' => 4, 'height' => 'tall'])
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Horizontal Banner Section: Swiper - бага өндөр -->
    <div class="container-fluid px-0">
        @livewire('banner-posts', ['categoryId' => 5, 'height' => 'short'])
    </div>

    <!-- Видео мэдээ -->
    <div class="container my-5 video-section">
        <h2 class="section-title">{{ __('section_title.video_news') }}</h2>
        <p class="section-subtitle">Сүүлийн үеийн видео мэдээ, тайлбарууд</p>
        @livewire('video-posts-list')
    </div>

    <!-- Манай гишүүн байгууллагууд -->
    <div class="container my-5">
        <div class="member-section">
            <h2 class="section-title">{{ __('section_title.member_orgs') }}</h2>
            <p class="section-subtitle">Манай холбоонд нэгдсэн мэргэжлийн байгууллагууд</p>

            <div class="position-relative">
                <div class="swiper member-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($memberships as $member)
                            <div class="swiper-slide member-slide">
                                <div class="member-logo-container">
                                    @if ($member->logo)
                                        <img src="{{ asset($member->logo) }}" alt="{{ $member->organization_name }}"
                                            class="member-logo"
                                            onerror="this.onerror=null;this.src='{{ asset('images/default-logo.png') }}'" />
                                    @else
                                        <div class="member-logo-alt">
                                            {{ strtoupper(substr($member->organization_name, 0, 2)) }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-prev member-swiper-prev"></div>
                <div class="swiper-button-next member-swiper-next"></div>
            </div>
        </div>
    </div>

    <!-- Гишүүнчлэлийн давуу тал -->
    <div class="container py-5 benefit-section">
        <h2 class="section-title">{{ __('benefit.title') }}</h2>
        <p class="section-subtitle">Манай гишүүдийн олж авдаг онцгой давуу талууд</p>

        <div class="swiper benefit-swiper mb-4" style="height: 280px;">
            <div class="swiper-wrapper">
                @foreach (__('benefit.items') as $item)
                    <div class="swiper-slide px-2">
                        <div class="card benefit-card h-100 text-center p-4">
                            <div class="{{ $item['color'] ?? 'text-primary' }} mb-3 fs-1 icon-gradient-{{ str_replace('text-', '', $item['color'] ?? 'primary') }}"
                                style="{{ $item['style'] ?? '' }}">
                                <i class="{{ $item['icon'] }}"></i>
                            </div>
                            <h5 class="card-title fw-semibold">{{ $item['title'] }}</h5>
                            <p class="card-text text-muted">{{ $item['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Add pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Нээлттэй цаг -->
    <div class="container my-5 open-hour-section">
        <h2 class="section-title">Нээлттэй цаг</h2>
        <p class="section-subtitle">Нээлттэй цагийн мэдээ, мэдээлэл</p>
        @livewire('open-hour-posts-list')
    </div>

    <!-- Хамтын ажиллагаа -->
    <div class="container my-5 collaboration-section">
        <h2 class="section-title">Хамтын ажиллагаа</h2>
        <p class="section-subtitle">Бидний хамтран ажилладаг байгууллагууд</p>

        <div class="swiper collaboration-swiper mb-4" style="height: 120px;">
            <div class="swiper-wrapper">
                @foreach ($collaborations as $item)
                    <div class="swiper-slide px-2 d-flex justify-content-center align-items-center">
                        <div class="card collaboration-card h-100 text-center p-2 d-flex justify-content-center align-items-center"
                            style="height: 100px;" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="{{ $item->name }}">
                            @if ($item->image)
                                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                                    class="collaboration-img img-fluid" style="max-height: 80px; object-fit: contain;">
                            @else
                                <div class="d-flex align-items-center justify-content-center border rounded p-2 bg-light"
                                    style="width: 150px; height: 80px;">
                                    <span class="text-muted text-center small">{{ $item->name }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing swipers...');
            // Bootstrap tooltip идэвхжүүлэх
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })

            // Initialize all banner swipers
            const bannerSwipers = document.querySelectorAll('.banner-swiper');
            bannerSwipers.forEach((swiperElement) => {
                new Swiper(swiperElement, {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: swiperElement.querySelector('.swiper-pagination'),
                        clickable: true,
                    },
                    navigation: {
                        nextEl: swiperElement.querySelector('.swiper-button-next'),
                        prevEl: swiperElement.querySelector('.swiper-button-prev'),
                    },
                });
            });

            // Price Statistics Swiper with Navigation
            const priceSwiperElement = document.querySelector(".price-swiper");
            if (priceSwiperElement) {
                console.log('Initializing price swiper...');
                new Swiper(priceSwiperElement, {
                    loop: false,
                    slidesPerView: 3,
                    spaceBetween: 10,
                    pagination: {
                        el: priceSwiperElement.querySelector('.swiper-pagination'),
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.price-swiper-next',
                        prevEl: '.price-swiper-prev',
                    },
                });
                console.log('Price swiper initialized');
            }

            // Member Swiper - Improved
            const memberSwiper = new Swiper(".member-swiper", {
                loop: true,
                slidesPerView: 5,
                spaceBetween: 30,
                speed: 8000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                freeMode: true,
                freeModeMomentum: false,
                navigation: {
                    nextEl: ".member-swiper-next",
                    prevEl: ".member-swiper-prev",
                },
                pagination: {
                    el: ".member-swiper .swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 25
                    },
                    992: {
                        slidesPerView: 5,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 6,
                        spaceBetween: 35
                    }
                }
            });

            // Benefit Swiper
            const benefitSwiper = new Swiper(".benefit-swiper", {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 25,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".benefit-swiper .swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 25
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                }
            });

            // Collaboration Swiper
            const collaborationSwiperSelector = new Swiper(".collaboration-swiper", {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 25,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".collaboration-swiper .swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
            });
        });
    </script>
@endsection
