@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Мэдэгдлийн жагсаалт</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-3 text-end">
            <a href="{{ route('notifications.create') }}" class="btn btn-primary">+ Шинэ мэдэгдэл</a>
        </div>

        <table class="table table-bordered align-middle">
            <thead>
                <tr class="table-light">
                    <th>ID</th>
                    <th>Гарчиг</th>
                    <th>Агуулга</th>
                    <th>Төлөв</th>
                    <th>Үүссэн огноо</th>
                    <th>Үйлдэл</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notifications as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title ?? '-' }}</td>
                        <td>{{ Str::limit($item->message, 60) }}</td>
                        <td>
                            @if ($item->is_active)
                                <span class="badge bg-success">Идэвхтэй</span>
                            @else
                                <span class="badge bg-secondary">Идэвхгүй</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <a href="{{ route('notifications.edit', $item) }}" class="btn btn-sm btn-warning">Засах</a>
                            <form action="{{ route('notifications.destroy', $item) }}" method="POST" class="d-inline"
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

        {{ $notifications->links() }}
    </div>
@endsection
