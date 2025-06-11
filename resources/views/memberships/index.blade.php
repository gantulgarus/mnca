@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Гишүүдийн жагсаалт</h1>
        <a href="{{ route('memberships.create') }}" class="btn btn-primary mb-3">+ Шинэ гишүүн нэмэх</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Байгууллагын нэр</th>
                    <th>Имэйл</th>
                    <th>Утас</th>
                    <th>Logo</th>
                    <th>Үйлдэл</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($memberships as $membership)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $membership->organization_name }}</td>
                        <td>{{ $membership->email }}</td>
                        <td>{{ $membership->phone }}</td>
                        <td>
                            @if ($membership->logo)
                                <img src="{{ asset('storage/' . $membership->logo) }}" alt="Logo" class="img-thumbnail"
                                    width="100">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('memberships.show', $membership) }}"
                                class="btn btn-info btn-sm">Дэлгэрэнгүй</a>
                            <a href="{{ route('memberships.edit', $membership) }}" class="btn btn-warning btn-sm">Засах</a>
                            <form action="{{ route('memberships.destroy', $membership) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Устгахдаа итгэлтэй байна уу?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Устгах</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
