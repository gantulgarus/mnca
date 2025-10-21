@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4 fw-bold">Гишүүнчлэлийн хүсэлтүүд</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light text-center">
                            <tr>
                                <th>#</th>
                                <th>Байгууллага</th>
                                <th>Гишүүнчлэлийн мэдээлэл</th>
                                <th>Овог</th>
                                <th>Нэр</th>
                                <th>Имэйл</th>
                                <th>Утас</th>
                                <th>Төлөв</th>
                                <th>Үйлдэл</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($requests as $req)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $req->organization ?? '-' }}</td>
                                    <td title="{{ $req->membership_info }}">
                                        {{ Str::limit($req->membership_info, 50) }}
                                    </td>
                                    <td>{{ $req->lastname }}</td>
                                    <td>{{ $req->firstname }}</td>
                                    <td>{{ $req->email }}</td>
                                    <td>{{ $req->phone }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('member-requests.update', $req->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" class="form-select form-select-sm"
                                                onchange="this.form.submit()">
                                                <option value="pending" {{ $req->status == 'pending' ? 'selected' : '' }}>
                                                    Хүлээгдэж буй</option>
                                                <option value="approved"
                                                    {{ $req->status == 'approved' ? 'selected' : '' }}>Батлагдсан</option>
                                                <option value="rejected"
                                                    {{ $req->status == 'rejected' ? 'selected' : '' }}>Татгалзсан</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('member-requests.destroy', $req->id) }}" method="POST"
                                            onsubmit="return confirm('Устгах уу?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i> Устгах
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-3">
                                        Одоогоор илгээгдсэн хүсэлт байхгүй байна.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    {{ $requests->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
