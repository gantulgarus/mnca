@extends('layouts.main')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 fw-bold">{{ $pageTitle }}</h2>

        @if ($items->count() > 0)
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">№</th>
                            <th>Гарчиг</th>
                            <th class="text-center" style="width: 180px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $index => $item)
                            <tr>
                                <td>{{ $items->firstItem() + $index }}</td>
                                <td class="fw-semibold">{{ $item->title }}</td>
                                <td class="text-center">
                                    @if ($item->pdf_path)
                                        <a href="{{ asset($item->pdf_path) }}" download class="btn btn-sm btn-danger">
                                            <i class="bi bi-download"></i> Татах
                                        </a>
                                        <a href="{{ asset($item->pdf_path) }}" target="_blank"
                                            class="btn btn-sm btn-primary me-1">
                                            <i class="bi bi-eye"></i> Харах
                                        </a>
                                    @else
                                        <span class="text-muted">PDF байхгүй</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $items->links() }}
            </div>
        @else
            <p class="text-muted">Одоогоор мэдээлэл байхгүй байна.</p>
        @endif
    </div>
@endsection
