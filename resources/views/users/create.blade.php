@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Add User</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @include('users.form')
        </form>
    </div>
@endsection
