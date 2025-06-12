@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4>Материал нэмэх</h4>

        <form action="{{ route('building_material_prices.store') }}" method="POST">
            @csrf
            @include('building_material_prices.form')
        </form>
    </div>
@endsection
