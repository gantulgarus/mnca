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
                        href="{{ route('about') }}">{{ __('nav.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('memberships.list') ? 'active' : '' }}"
                        href="{{ route('memberships.list') }}">{{ __('nav.membership') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.list') ? 'active' : '' }}"
                        href="{{ route('posts.list') }}">{{ __('nav.news') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('books.list') ? 'active' : '' }}"
                        href="{{ route('books.list') }}">{{ __('nav.publications') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.license_posts') ? 'active' : '' }}"
                        href="{{ route('posts.license_posts') }}">{{ __('nav.license') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('warm-solution') ? 'active' : '' }}"
                        href="{{ route('warm-solution') }}">{{ __('nav.warm_solution') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('jobs') ? 'active' : '' }}"
                        href="https://job-mnca.mn/">{{ __('nav.jobs') }}</a>
                </li>
            </ul>
            <a class="btn btn-primary px-3 py-2 rounded-pill" href="{{ route('login') }}">{{ __('nav.login') }}</a>
        </div>
    </div>
</nav>
