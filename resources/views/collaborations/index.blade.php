@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Хамтын ажиллагаа</h1>
        <a href="{{ route('collaborations.create') }}" class="btn btn-primary mb-3">Шинэ нэмэх</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Нэр</th>
                    <th>Зураг</th>
                    <th>Холбоос</th>
                    <th>Үйлдэл</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collaborations as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>
                            @if ($item->image)
                                <img src="{{ asset($item->image) }}" width="80">
                            @endif
                        </td>
                        <td>
                            @if ($item->link)
                                <a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('collaborations.edit', $item) }}" class="btn btn-sm btn-warning">Засах</a>
                            <form action="{{ route('collaborations.destroy', $item) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Устгах</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
