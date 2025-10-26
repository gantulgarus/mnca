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
    @yield('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <!-- Top Navbar -->
    @include('layouts.top_navbar')

    <!-- Main Navbar -->
    @include('layouts.main_navbar')


    @yield('content')

    <!-- Social Fixed Buttons -->
    <div class="social-fixed d-flex flex-column gap-2">
        <a href="https://www.facebook.com/mnca.mn/" target="_blank" class="social-btn facebook">
            <i class="fab fa-facebook-f"></i>
            <span class="social-text">Facebook</span>
        </a>
        <a href="https://x.com/undesniibarilga" target="_blank" class="social-btn x">
            <i class="fab fa-x-twitter"></i> <!-- FontAwesome 6.5+ дээр X icon -->
            <span class="social-text">X</span>
        </a>
        <a href="https://www.linkedin.com/company/mnca-mn-counseling-association" target="_blank"
            class="social-btn linkedin">
            <i class="fab fa-linkedin-in"></i>
            <span class="social-text">LinkedIn</span>
        </a>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="btn btn-primary position-fixed"
        style="bottom: 30px; right: 30px; display: none; border-radius: 50%; width: 50px; height: 50px; z-index: 9999;">
        ↑
    </button>


    <!-- Footer хэсэг -->
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Scroll хийх үед товч харуулах
        window.onscroll = function() {
            let btn = document.getElementById("backToTop");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        };

        // Click хийхэд дээр очих
        document.getElementById("backToTop").addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

    @livewireScripts
    @yield('scripts')

    <!-- Facebook Messenger Plugin -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Messenger Chat Plugin -->
    <div class="fb-customerchat" attribution="biz_inbox" page_id="107202105741973" theme_color="#0084ff"
        logged_in_greeting="Hello! This is a demo messenger for testing."
        logged_out_greeting="Hi! This is a test messenger plugin.">
    </div>

</body>

</html>
