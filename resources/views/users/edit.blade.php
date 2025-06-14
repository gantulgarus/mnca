@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Edit User</h2>
        <form action="{{ route('users.update', $user) }}" method="POST">
            @method('PUT')
            @include('users.form', ['user' => $user])
        </form>
    </div>
@endsection
