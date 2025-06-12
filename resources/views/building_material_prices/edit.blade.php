@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4>Материал засах</h4>

        <form action="{{ route('building_material_prices.update', $buildingMaterialPrice) }}" method="POST">
            @csrf
            @method('PUT')
            @include('building_material_prices.form', ['price' => $buildingMaterialPrice])
        </form>
    </div>
@endsection
