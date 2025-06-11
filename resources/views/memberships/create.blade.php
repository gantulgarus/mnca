@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Шинэ гишүүн нэмэх</h1>

        <form action="{{ route('memberships.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('memberships.form')
            <button type="submit" class="btn btn-success">Хадгалах</button>
            <a href="{{ route('memberships.index') }}" class="btn btn-secondary">Буцах</a>
        </form>
    </div>
@endsection
