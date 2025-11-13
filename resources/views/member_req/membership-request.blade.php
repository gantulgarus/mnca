@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">

            {{-- Зургийг голлуулсан хэсэг --}}
            <div class="col-md-8 text-center mb-4">
                <img src="{{ asset('images/contact.jpeg') }}" alt="Contact Icon" class="img-fluid shadow-sm rounded-4 mb-3"
                    style="max-width: 100%; height: auto;">

                {{-- Зурагны доорх холбоо барих мэдээлэл --}}
                <div class="contact-info text-muted mt-3 fs-6">
                    <p class="mb-1">📞 <strong>Call Center:</strong> 70111515</p>
                    <p class="mb-1">💬 <strong>Chatbot:</strong> Шууд холбогдох</p>
                    <p class="mb-1">👩‍💼 <strong>Мэдээллийн ажилтан:</strong> Холбогдох</p>
                    <p class="mb-1">🔗 <strong>License.mn:</strong>
                        <a href="https://license.mn" target="_blank">license.mn</a>
                    </p>
                    <p class="mb-1">🏗️ <strong>Барилгын мэдээллийн сан:</strong>
                        <a href="https://www.mcis.gov.mn" target="_blank">www.mcis.gov.mn</a>
                    </p>
                    <p class="mb-0">📘 <strong>Тусгай зөвшөөрлийн гарын авлага:</strong> Зөвлөмжтэй холбогдох</p>
                </div>
            </div>

            {{-- Санал хүсэлт илгээх хэсэг --}}
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-5">

                        <div class="text-center mb-4">
                            <h2 class="fw-bold mb-3 text-primary">Ажилтантай холбогдох</h2>
                            <p class="text-muted">
                                Та санал хүсэлтээ дэлгэрэнгүй бичиж илгээнэ үү. Бид тун удахгүй хариу өгөх болно.
                            </p>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('membership.request.store') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="lastname" class="form-label fw-semibold">Эцэг/эх-ийн нэр</label>
                                    <input type="text" id="lastname" name="lastname" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstname" class="form-label fw-semibold">Нэр</label>
                                    <input type="text" id="firstname" name="firstname" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">И-мэйл хаяг</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="form-label fw-semibold">Утасны дугаар</label>
                                <input type="text" id="phone" name="phone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="suggestion" class="form-label fw-semibold">Санал хүсэлт</label>
                                <textarea id="suggestion" name="suggestion" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                                    Илгээх
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
