@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Бүртгүүлэх</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- Нэр --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Нэр</label>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    required autofocus autocomplete="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Имэйл --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Имэйл хаяг</label>
                                <input id="email" type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    required autocomplete="username">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Нууц үг --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Нууц үг</label>
                                <input id="password" type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" required
                                    autocomplete="new-password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Нууц үгээ баталгаажуулах --}}
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Нууц үг давтах</label>
                                <input id="password_confirmation" type="password" name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror" required
                                    autocomplete="new-password">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Login линк болон бүртгүүлэх товч --}}
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="text-decoration-underline" href="{{ route('login') }}">
                                    Аль хэдийн бүртгүүлсэн үү?
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    Бүртгүүлэх
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
