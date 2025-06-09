@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Хүний нөөц</h2>
        <a href="{{ route('human-resources.create') }}" class="btn btn-primary">+ Нэмэх</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Нэр</th>
                <th>Албан тушаал</th>
                <th>Алба</th>
                <th>Байгууллага</th>
                <th>Зураг</th>
                <th>Үйлдэл</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($humanResources as $index => $hr)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $hr->name }}</td>
                    <td>{{ $hr->position }}</td>
                    <td>{{ $hr->department->name ?? 'Алга' }}</td>
                    <td>{{ $hr->company }}</td>
                    <td>
                        @if ($hr->photo)
                            <img src="{{ asset('storage/' . $hr->photo) }}" width="50" height="50"
                                class="rounded-circle">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('human-resources.edit', $hr->id) }}" class="btn btn-sm btn-warning">Засах</a>
                        <form action="{{ route('human-resources.destroy', $hr->id) }}" method="POST"
                            style="display:inline-block;" onsubmit="return confirm('Устгах уу?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Устгах</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $humanResources->links() }}
@endsection
