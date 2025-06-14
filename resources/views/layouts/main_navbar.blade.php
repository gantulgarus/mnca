<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 custom-navbar">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo-filled.png') }}" alt="Logo" height="40" />
        </a>

        <!-- Toggle for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu & Login -->
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">ТАНИЛЦУУЛГА</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('memberships.list') ? 'active' : '' }}"
                        href="{{ route('memberships.list') }}">ГИШҮҮНЧЛЭЛ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.list') ? 'active' : '' }}"
                        href="{{ route('posts.list') }}">МЭДЭЭ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('books.list') ? 'active' : '' }}"
                        href="{{ route('books.list') }}">ТОВХИМОЛ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('grants') ? 'active' : '' }}"
                        href="https://mcis.gov.mn/mn/grants">ТУСГАЙ ЗӨВШӨӨРӨЛ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('warm-solution') ? 'active' : '' }}"
                        href="{{ route('warm-solution') }}">ДУЛААН
                        ШИЙДЭЛ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('jobs') ? 'active' : '' }}" href="https://job-mnca.mn/">JOB</a>
                </li>
            </ul>
            <a class="btn btn-primary px-3 py-2 rounded-pill" href="{{ route('login') }}">НЭВТРЭХ</a>
        </div>
    </div>
</nav>
