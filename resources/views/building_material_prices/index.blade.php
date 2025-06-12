@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4>Барилгын материалын ханш</h4>
        <a href="{{ route('building_material_prices.create') }}" class="btn btn-primary mb-3">Нэмэх</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Материал</th>
                    <th>Үнэ</th>
                    <th>Хувь</th>
                    <th>Хандлага</th>
                    <th>Огноо</th>
                    <th>Үйлдэл</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prices as $price)
                    <tr>
                        <td>{{ $price->material_name }}</td>
                        <td>{{ number_format($price->price, 2) }}</td>
                        <td>{{ $price->percentage_change }}%</td>
                        <td>{{ $price->trend }}</td>
                        <td>{{ $price->date }}</td>
                        <td>
                            <a href="{{ route('building_material_prices.edit', $price) }}"
                                class="btn btn-sm btn-warning">Засах</a>
                            <form action="{{ route('building_material_prices.destroy', $price) }}" method="POST"
                                class="d-inline" onsubmit="return confirm('Устгах уу?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Устгах</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
