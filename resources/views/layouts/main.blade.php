<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-topbar">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- Contact Info -->
            <div class="d-flex align-items-center small text-white">
                <span class="me-3">
                    <i class="bi bi-telephone-fill"></i> (+976) 7011 1515
                </span>
                <span class="me-3">
                    <i class="bi bi-telephone-fill"></i> (+976) 94444173
                </span>
                <span>
                    <i class="bi bi-envelope-fill"></i> info@mca.mn
                </span>
            </div>

            <!-- Language Switch & Social Icons -->
            <div class="d-flex align-items-center small text-white">
                <!-- Language Switch -->
                <div class="me-4">
                    <a href="#" class="text-white me-2">🇲🇳 MN</a> |
                    <a href="#" class="text-white ms-2">🇬🇧 EN</a>
                </div>

                <!-- Social Icons -->
                <div>
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 custom-navbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="images/logo-filled.png" alt="Logo" height="40" />
            </a>

            <!-- Toggle for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu & Login -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 custom-nav-links">
                    <li class="nav-item"><a class="nav-link nav-hover" href="{{ route('about') }}">ТАНИЛЦУУЛГА</a></li>
                    <li class="nav-item"><a class="nav-link nav-hover" href="#">ГИШҮҮНЧЛЭЛ</a></li>
                    <li class="nav-item"><a class="nav-link nav-hover" href="#">МЭДЭЭ</a></li>
                    <li class="nav-item"><a class="nav-link nav-hover" href="#">ТОВХИМОЛ</a></li>
                    <li class="nav-item"><a class="nav-link nav-hover" href="https://mcis.gov.mn/mn/grants">ТУСГАЙ
                            ЗӨВШӨӨРӨЛ</a></li>
                    <li class="nav-item"><a class="nav-link nav-hover" href="#">ДУЛААН ШИЙДЭЛ</a></li>
                    <li class="nav-item"><a class="nav-link nav-hover" href="https://job-mnca.mn/">JOB</a></li>
                </ul>
                <button class="btn custom-login-btn">НЭВТРЭХ</button>
            </div>
        </div>
    </nav>


    @yield('content')

    <!-- Footer хэсэг -->
    <footer class="footer-with-bg text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- Байршлын газрын зураг -->
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Байршил</h5>
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.253256162402!2d106.91905861561638!3d47.91830637921154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d9697b8f1234567%3A0x123456789abcdef0!2z0KHQtdC80L7QvdCwINCQ0YDQsNCy0LjQutC-0LPQvtCy0LDRgtCw0YLQvtCy0LAsIDgxMDA!5e0!3m2!1smn!2smn!4v1684500000000!5m2!1smn!2smn"
                            style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="Манай байршлын газрын зураг"></iframe>
                    </div>
                </div>

                <!-- Холбоо барих -->
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Холбоо барих</h5>
                    <p>
                        <i class="fa fa-map-marker-alt me-2"></i> Улаанбаатар, Сүхбаатар
                        дүүрэг, 1-р хороо
                    </p>
                    <p><i class="fa fa-phone me-2"></i> (+976) 7011 1515</p>
                    <p><i class="fa fa-envelope me-2"></i> info@mca.mn</p>
                    <p><i class="fa fa-globe me-2"></i> www.mca.mn</p>
                </div>

                <!-- Санал хүсэлт -->
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Санал хүсэлт илгээх</h5>
                    <form id="feedbackForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Нэр</label>
                            <input type="text" class="form-control" id="name" placeholder="Таны нэр"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Имэйл</label>
                            <input type="email" class="form-control" id="email" placeholder="Таны имэйл"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Санал хүсэлт</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Таны санал" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Илгээх</button>
                    </form>
                </div>
            </div>

            <hr class="bg-light" />
            <div class="text-center">
                &copy; 2025 Монголын Барилгын Үндэсний Ассоциаци. Бүх эрх хуулиар
                хамгаалагдсан.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')

</body>

</html>
