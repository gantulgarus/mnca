@extends('layouts.main')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-4 fw-bold">МБҮА ТББ-ын Гишүүн байгууллагууд</h3>
            @if ($memberships->isNotEmpty())
                <small class="text-muted">Нийт: {{ $memberships->count() }} гишүүн</small>
            @endif
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($memberships->isEmpty())
            <div class="card shadow-sm">
                <div class="card-body text-center py-5">
                    <i class="bi bi-people fs-1 text-muted mb-3"></i>
                    <p class="text-muted mb-0">Одоогоор бүртгэгдсэн гишүүн алга.</p>
                </div>
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($memberships as $member)
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center"
                                style="height: 120px; overflow: hidden;">
                                @if ($member->logo)
                                    <img src="{{ asset('storage/' . $member->logo) }}" class="img-fluid p-3"
                                        alt="{{ $member->organization_name }}" style="max-height: 100%; width: auto;">
                                @else
                                    <div class="text-center text-muted p-3">
                                        <i class="bi bi-building fs-1"></i>
                                        <p class="small mb-0">Лого байхгүй</p>
                                    </div>
                                @endif
                            </div>

                            <div class="card-body">
                                <h5 class="card-title h6 mb-3 text-truncate">{{ $member->organization_name }}</h5>
                                <ul class="list-unstyled small mb-0">
                                    <li class="mb-1">
                                        <i class="bi bi-geo-alt text-muted me-2"></i>
                                        {{ $member->address ?? 'Хаяг байхгүй' }}
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-telephone text-muted me-2"></i>
                                        {{ $member->phone ?? 'Утас байхгүй' }}
                                    </li>
                                    <li class="mb-1">
                                        <i class="bi bi-envelope text-muted me-2"></i>
                                        {{ $member->email ?? 'Имэйл байхгүй' }}
                                    </li>
                                    @if ($member->website)
                                        <li class="mb-1">
                                            <i class="bi bi-globe text-muted me-2"></i>
                                            <a href="{{ $member->website }}" target="_blank" class="text-decoration-none">
                                                {{ parse_url($member->website, PHP_URL_HOST) }}
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>

                            @if ($member->facebook || $member->twitter || $member->youtube)
                                <div class="card-footer bg-white border-0 pt-0">
                                    <div class="d-flex gap-2">
                                        @if ($member->facebook)
                                            <a href="{{ $member->facebook }}" target="_blank"
                                                class="btn btn-sm btn-outline-primary rounded-circle p-1" title="Facebook">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        @endif
                                        @if ($member->twitter)
                                            <a href="{{ $member->twitter }}" target="_blank"
                                                class="btn btn-sm btn-outline-info rounded-circle p-1" title="Twitter">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        @endif
                                        @if ($member->youtube)
                                            <a href="{{ $member->youtube }}" target="_blank"
                                                class="btn btn-sm btn-outline-danger rounded-circle p-1" title="YouTube">
                                                <i class="bi bi-youtube"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 d-flex justify-content-center">
                {{ $memberships->links() }}
            </div>
        @endif
    </div>
@endsection

@section('styles')
    <style>
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
        }

        .btn-social {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection
