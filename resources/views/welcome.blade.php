@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Зүүн тал: Мэдээнүүд -->
            <div class="col-md-8">
                <!-- Том мэдээ -->
                <div class="card mb-3" style="height: 400px; position: relative; overflow: hidden;">
                    <img src="images/post1.jpg" class="card-img-top" style="height: 100%; width: 100%; object-fit: cover;"
                        alt="Том мэдээ" />

                    <!-- Overlay хэсэг -->
                    <div
                        style="
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.6);
        color: #fff;
        padding: 20px;
        ">
                        <small class="text-white">2025-06-03</small>
                        <h5 class="card-title">ҮНДСЭН ХУУЛИЙН ЦЭЦ МАРГААН ХЯНАН...</h5>
                        <p class="card-text">Том мэдээний товч агуулга эсвэл танилцуулга энд орно.</p>
                    </div>
                </div>

                <!-- Жижиг мэдээнүүд -->
                <div class="row gx-3">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/post1.jpg" class="card-img-top" alt="Жижиг мэдээ 1" />
                            <div class="card-body">
                                <small class="text-muted">2025-06-02</small>
                                <h6 class="card-title">Жижиг мэдээ 1</h6>
                                <p class="card-text">Жижиг мэдээний товч агуулга.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/post1.jpg" class="card-img-top" alt="Жижиг мэдээ 2" />
                            <div class="card-body">
                                <small class="text-muted">2025-06-01</small>
                                <h6 class="card-title">Жижиг мэдээ 2</h6>
                                <p class="card-text">Жижиг мэдээний товч агуулга.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/post1.jpg" class="card-img-top" alt="Жижиг мэдээ 3" />
                            <div class="card-body">
                                <small class="text-muted">2025-05-30</small>
                                <h6 class="card-title">Жижиг мэдээ 3</h6>
                                <p class="card-text">Жижиг мэдээний товч агуулга.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Баруун талын зураг ба статистик -->
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <!-- Нэг мөрөнд байрлах статистик -->
                    <div class="d-flex justify-content-between gap-2 mb-3 w-100">
                        <!-- ТӨМӨР -->
                        <div class="flex-fill stat border rounded p-2 bg-light shadow-sm text-center">
                            <div class="text-danger fw-bold small mb-1">ТӨМӨР</div>
                            <div class="fs-6 fw-bold">105</div>
                            <div class="small text-muted">5%</div>
                        </div>
                        <!-- БАНЗ -->
                        <div class="flex-fill stat border rounded p-2 bg-light shadow-sm text-center">
                            <div class="text-success fw-bold small mb-1">БАНЗ</div>
                            <div class="fs-6 fw-bold">4900</div>
                            <div class="small text-muted">2%</div>
                        </div>
                        <!-- ЦЕМЕНТ -->
                        <div class="flex-fill stat border rounded p-2 bg-light shadow-sm text-center">
                            <div class="text-danger fw-bold small mb-1">ЦЕМЕНТ</div>
                            <div class="fs-6 fw-bold">950</div>
                            <div class="small text-muted">5.56%</div>
                        </div>
                    </div>

                    <!-- Зураг -->
                    <img src="{{ asset('images/assosation.png') }}" alt="Ассоциацийн салбарууд"
                        class="img-fluid rounded shadow-sm w-100" />
                </div>
            </div>

        </div>
    </div>

    <!-- Hero Section: Swiper -->
    <section class="hero p-0">
        <div class="swiper hero-swiper" style="height: 250px;">
            <div class="swiper-wrapper" style="height: 250px;">
                <div class="swiper-slide" style="height: 250px;">
                    <img src="{{ asset('images/bg-1.jpg') }}" alt="Slide 1" class="w-100"
                        style="height: 250px; object-fit: cover; display: block;">
                </div>
                <div class="swiper-slide" style="height: 250px;">
                    <img src="{{ asset('images/bg-2.jpg') }}" alt="Slide 2" class="w-100"
                        style="height: 250px; object-fit: cover; display: block;">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <!-- Видео мэдээ -->
    <div class="container my-5">
        <h4 class="mb-4">Видео мэдээ</h4>
        <div class="row g-4">
            <!-- Видео 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Видео мэдээ 1"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Видео мэдээ 1</h6>
                    </div>
                </div>
            </div>

            <!-- Видео 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Видео мэдээ 2"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Видео мэдээ 2</h6>
                    </div>
                </div>
            </div>

            <!-- Видео 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Видео мэдээ 3"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Видео мэдээ 3</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Манай гишүүн байгууллагууд -->
    <div class="container my-5">
        <h4 class="mb-4 text-center">Манай гишүүн байгууллагууд</h4>
        <div class="swiper member-swiper py-2" style="height: 60px;">
            <div class="swiper-wrapper align-items-center" style="height: 60px;">
                <!-- Нэг лого -->
                <div class="swiper-slide text-center">
                    <img src="images/logo1.jpg" alt="Гишүүн 1" style="height: 60px" />
                </div>
                <div class="swiper-slide text-center">
                    <img src="images/logo2.jpg" alt="Гишүүн 2" style="height: 60px" />
                </div>
                <div class="swiper-slide text-center">
                    <img src="images/logo3.jpg" alt="Гишүүн 3" style="height: 60px" />
                </div>
                <div class="swiper-slide text-center">
                    <img src="images/logo4.jpg" alt="Гишүүн 4" style="height: 60px" />
                </div>
                <div class="swiper-slide text-center">
                    <img src="images/logo5.jpg" alt="Гишүүн 5" style="height: 60px" />
                </div>
                <div class="swiper-slide text-center">
                    <img src="images/logo6.jpg" alt="Гишүүн 6" style="height: 60px" />
                </div>
                <div class="swiper-slide text-center">
                    <img src="images/logo7.png" alt="Гишүүн 7" style="height: 60px" />
                </div>
                <!-- шаардлагатай тоогоор үргэлжлүүлж болно -->
            </div>
        </div>
    </div>

    <!-- Гишүүнчлэлийн давуу тал -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Гишүүнчлэлийн давуу тал</h2>

        {{-- <div class="swiper benefit-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide px-2">
                    <div class="card benefit-card h-100 text-center p-3">
                        <div class="text-primary mb-3 fs-1">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h5 class="card-title">Мэдээллийн шуурхай хуваалцах</h5>
                        <p class="card-text text-muted">
                            Салбарын хамгийн сүүлийн үеийн мэдээг гишүүд шуурхай авч
                            хэрэглэдэг.
                        </p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide px-2">
                    <div class="card benefit-card h-100 text-center p-3">
                        <div class="text-success mb-3 fs-1">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h5 class="card-title">Сургалт, чадавхижуулалт</h5>
                        <p class="card-text text-muted">
                            Мэргэжлийн сургалт, семинарт оролцох боломж гишүүдэд нээлттэй.
                        </p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide px-2">
                    <div class="card benefit-card h-100 text-center p-3">
                        <div class="text-purple mb-3 fs-1" style="color: #6f42c1">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5 class="card-title">Хамтын ажиллагаа</h5>
                        <p class="card-text text-muted">
                            Салбарын байгууллагуудтай хамтран ажиллах боломж бүрдэнэ.
                        </p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide px-2">
                    <div class="card benefit-card h-100 text-center p-3">
                        <div class="text-danger mb-3 fs-1">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h5 class="card-title">Санал бодлоо хүргэх</h5>
                        <p class="card-text text-muted">
                            Бодлогын хэлэлцүүлэгт оролцох, нөлөөлөх оролцоог гишүүд эдэлнэ.
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

@section('scripts')
    <!-- Swiper Initialization -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hero Swiper
            const heroSwiper = new Swiper(".hero-swiper", {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });

            // Member Swiper
            const memberSwiper = new Swiper(".member-swiper", {
                loop: true,
                slidesPerView: 5,
                spaceBetween: 40,
                speed: 6000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                freeMode: true,
                freeModeMomentum: false,
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    576: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 4,
                    },
                    992: {
                        slidesPerView: 5,
                    }
                }
            });

            // Benefit Swiper
            const benefitSwiper = new Swiper(".benefit-swiper", {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 30,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>
@endsection
<!-- Swiper Инициализаци -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".hero-swiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    // Гишүүн байгууллагуудын Swiper
    const memberSwiper = new Swiper(".member-swiper", {
        loop: true,
        slidesPerView: 5, // 👈 олон лого нэгэн зэрэг харуулах
        spaceBetween: 40,
        speed: 6000, // урсах хурд
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        freeMode: true,
        freeModeMomentum: false,
        allowTouchMove: false,
    });

    const benefitSwiper = new Swiper(".benefit-swiper", {
        loop: true,
        slidesPerView: 3, // эсвэл 1, 2 гэх мэт
        spaceBetween: 30,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>
