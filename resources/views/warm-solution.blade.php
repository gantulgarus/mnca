@extends('layouts.main')

@section('content')
    <div class="container py-5">
        <h2 class="text-warning fw-bold mb-4">Дулаан шийдэл төслүүд</h2>

        <!-- Swiper -->
        <div class="swiper mySwiper mb-5">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="swiper-slide d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/financier-' . $i . '.png') }}" alt="Financier {{ $i }}"
                            class="img-fluid" style="max-height: 80px; object-fit: contain;">
                    </div>
                @endfor
            </div>
        </div>


        <div class="row">
            <div class="col-md-9">
                <!-- I төслийн хэсэг -->
                <div class="mb-5">
                    <h5 class="fw-semibold text-primary">Дулаан шийдэл I төсөл (2018–2022)</h5>
                    <p>
                        "Дулаан шийдэл I" төсөл нь 2018–2022 онуудад Улаанбаатар хотын гэр хорооллын хувийн сууцыг дулаалж,
                        дулаан алдагдлыг багасгаснаар агаарын бохирдлыг бууруулахад хувь нэмэр оруулах зорилготой хэрэгжсэн.
                    </p>
                </div>

                <!-- II төслийн хэсэг -->
                <div class="mb-5">
                    <h5 class="fw-semibold text-primary">Дулаан шийдэл II төсөл (2022–2026)</h5>
                    <p>
                        Хувийн сууцны салбар дахь тогтвортой хэрэглээ ба үйлдвэрлэл рүү чиглэсэн бодлогыг дэмжин, Монголын
                        нөхцөлд
                        нийцсэн, үр ашигтай эрчим хүчний шийдлүүдийг боловсруулан нэвтрүүлж, хүлэмжийн хийн ялгарлыг
                        бууруулахад
                        хувь нэмрээ оруулан эрүүл мэнд, эдийн засаг, нийгмийн хувьд үр ашигтай байх зах зээлийг бий болгох
                        зорилготой.
                    </p>
                </div>

                <!-- Төслийн гол үр дүн -->
                <div class="mb-5">
                    <h5 class="fw-bold text-success">Төслийн гол үр дүн:</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">✅ 3,556 тн Хүлэмжийн хийг бууруулав</li>
                        <li class="list-group-item">✅ 73 БЖДБ эрхлэгчдийг сургав</li>
                        <li class="list-group-item">✅ 1,546 Өрхийг дулаалав</li>
                        <li class="list-group-item">✅ 2,411 тн Түлшний хэрэглээг хэмнэв</li>
                        <li class="list-group-item">✅ 20 Дулаалгын шийдэл боловсруулав</li>
                    </ul>
                </div>

                <!-- Зорилтууд -->
                <div class="mb-5">
                    <h5 class="fw-bold text-success">Зорилт:</h5>
                    <ol class="ps-3">
                        <li>Олон нийтэд эрчим хүчний хэмнэлтийн талаарх мэдээлэл хүргэх, чадавхыг нэмэгдүүлэх</li>
                        <li>Хувийн сууцанд тохирсон эрчим хүчний хэмнэлттэй шийдлүүдийг боловсруулах</li>
                        <li>Ногоон зээлийн хүртээмж, сувгийг нэмэгдүүлэх</li>
                        <li>Эрчим хүчний хэмнэлтийн чиглэлээр БЖДБ-үүдийг чадавхжуулах</li>
                        <li>Улаанбаатар хот болон аймгийн төвүүдэд хэрэгжүүлж болохуйц цогц технологи болон сургалтын багцыг
                            бэлтгэх</li>
                        <li>Төслийн цаашдын тогтвортой байдлыг хангаж, эрчим хүчний хэмнэлттэй бүтээгдэхүүний зах зээлийг
                            хөгжүүлэх</li>
                    </ol>
                </div>

                <!-- Ололт амжилт -->
                <div class="mb-5">
                    <h5 class="fw-bold text-success">Төслийн ололт, амжилт:</h5>
                    <ul class="list-unstyled">
                        <li>📌 Айл өрхийн дулаан алдагдал, агаарын бохирдлын тухай мэдлэг, хандлагын судалгаа боловсруулав.
                        </li>
                        <li>📌 Гэр хорооллын айл өрхийн санхүүгийн нөхцөл байдлыг тодорхойлох судалгаа хийв.</li>
                        <li>📌 Сууцны ангилал ба халаалтын эх үүсвэрийн талаарх судалгаа хийж, дулаан алдагдлын эх үүсвэрийг
                            тогтоов.</li>
                        <li>📌 БЖДБ эрхлэгчдийн мэдээллийн сан бүрдүүлж, эдийн засаг ба мэргэжлийн чадамжийг үнэлэв.</li>
                        <li>📌 Монголын Барилгын Үндэсний Ассоциацитай хамтран ногоон ажлын байранд зуучлах салбар
                            байгуулсан.</li>
                        <li>📌 "Дулаан шийдэл төсөл" Facebook хуудас болон 75052000 дугаарын дуудлагын төвийг ажиллуулж
                            байна.</li>
                        <li>📌 Эрчим хүчний зөвлөхийн үнэлгээ, дулаалгын чанарын шалгалтын маягтыг нормд тусгав.</li>
                    </ul>
                </div>

                <!-- зураг -->
                <div class="mb-5">
                    <div class="row">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="col-md-4 mb-3">
                                <div class="overflow-hidden rounded" style="height: 200px;">
                                    <a href="{{ asset('images/warm-' . $i . '.png') }}" data-fancybox="warm-project-gallery"
                                        data-caption="Дулаан шийдэл төсөл {{ $i }}"
                                        data-thumb="{{ asset('images/warm-' . $i . '.png') }}">
                                        <img src="{{ asset('images/warm-' . $i . '.png') }}" alt="Warm {{ $i }}"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="col-md-3 text-center mt-4 mt-md-0">
                <div>
                    <a href="https://dulaalga.mn" target="_blank"
                        class="text-warning fw-semibold d-block mt-2 text-decoration-none">
                        <img src="{{ asset('images/dulaan.png') }}" class="img-fluid mb-3" alt="Switch Off Air Pollution">
                    </a>
                </div>
                <div>
                    <a href="https://mnca.mn" target="_blank"
                        class="text-warning fw-semibold d-block mt-2 text-decoration-none">
                        <img src="{{ asset('images/mbua.png') }}" class="img-fluid mb-3" alt="МБҮА">
                    </a>
                </div>
                <div>
                    <a href="https://dulaalga.mn" target="_blank"
                        class="text-warning fw-semibold d-block mt-2 text-decoration-none">
                        🌐 https://dulaalga.mn/
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        /* Custom styling for zoom controls */
        .fancybox__toolbar {
            padding: 16px;
        }

        .fancybox__button--zoom {
            display: none !important;
        }
    </style>
@endsection


@section('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.mySwiper', {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    576: {
                        slidesPerView: 4,
                    },
                    768: {
                        slidesPerView: 5,
                    },
                    992: {
                        slidesPerView: 6,
                    }
                }
            });
        });
    </script>

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Main options
            Thumbs: {
                type: "modern", // Thumbnail view
            },
            Toolbar: {
                display: {
                    left: ["infobar"],
                    middle: ["zoomIn", "zoomOut", "toggle1to1", "rotateCCW", "rotateCW"],
                    right: ["slideshow", "thumbs", "close"],
                },
            },
            Image: {
                zoom: true, // Enable zoom
                wheel: true, // Mouse wheel zoom
                click: true, // Toggle zoom on click
                fit: "contain", // Fit image to screen initially
            },
            // Zoom options
            on: {
                init: (fancybox) => {
                    console.log(`Fancybox initialized`);
                },
                "Carousel.change": (fancybox, carousel, slide) => {
                    console.log(`Slide changed to ${slide.index}`);
                },
            }
        });
    </script>
@endsection
