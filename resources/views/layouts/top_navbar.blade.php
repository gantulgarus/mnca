<nav class="navbar navbar-expand-lg navbar-dark custom-topbar">
    <div
        class="container d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center py-2">

        <!-- Contact Info (hide on small screens) -->
        <div
            class="d-none d-md-flex flex-column flex-sm-row align-items-start align-items-sm-center small text-white mb-2 mb-lg-0">
            <span class="me-sm-3">
                <i class="bi bi-telephone-fill"></i> (+976) 7011 1515
            </span>
            <span class="me-sm-3 mt-1 mt-sm-0">
                <i class="bi bi-telephone-fill"></i> (+976) 94444173
            </span>
            <span class="mt-1 mt-sm-0">
                <i class="bi bi-envelope-fill"></i> info@mca.mn
            </span>
        </div>

        <!-- Language Switch & Social Icons (always visible) -->
        <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center small text-white">
            <!-- Language Switch -->
            <div class="mb-2 mb-sm-0 me-sm-4">
                <a href="{{ route('lang.switch', ['locale' => 'mn']) }}"
                    class="text-white me-2 @if (app()->getLocale() === 'mn') fw-bold @endif">🇲🇳 MN</a> |
                <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
                    class="text-white ms-2 @if (app()->getLocale() === 'en') fw-bold @endif">🇬🇧 EN</a>
            </div>

            <!-- Social Icons -->
            <div class="d-none d-md-flex align-items-center">
                <a href="https://www.facebook.com/mnca.mn/" target="_blank" class="text-white me-3">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://x.com/undesniibarilga" target="_blank" class="text-white me-3">
                    <i class="fab fa-x-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/company/mnca-mn-counseling-association" target="_blank"
                    class="text-white">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
