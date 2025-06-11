@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Гишүүний мэдээлэл засах</h1>

        <form action="{{ route('memberships.update', $membership) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('memberships.form', ['membership' => $membership])
            <button type="submit" class="btn btn-primary">Шинэчлэх</button>
            <a href="{{ route('memberships.index') }}" class="btn btn-secondary">Буцах</a>
        </form>
    </div>
@endsection
