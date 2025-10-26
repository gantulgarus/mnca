@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h3 class="mb-4">Хууль эрх зүйн мэдээний жагсаалт</h3>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('legal_contents.create') }}" class="btn btn-primary mb-3">+ Шинэ мэдээ нэмэх</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Төрөл</th>
                    <th>Гарчиг</th>
                    <th>PDF</th>
                    <th>Үйлдэл</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            @switch($item->category)
                                @case('legal_framework')
                                    Хууль эрх зүй
                                @break

                                @case('guidelines_manuals')
                                    Зөвлөмж гарын авлага
                                @break

                                @case('contact_staff')
                                    Ажилтантай холбогдох
                                @break
                            @endswitch
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>
                            @if ($item->pdf_path)
                                <a href="{{ asset($item->pdf_path) }}" target="_blank">Харах</a>
                            @else
                                <span class="text-muted">Файл байхгүй</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('legal_contents.edit', $item) }}" class="btn btn-sm btn-warning">Засах</a>
                            <form action="{{ route('legal_contents.destroy', $item) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Устгах уу?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Устгах</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $items->links() }}
    </div>
@endsection
