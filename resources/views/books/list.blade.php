@extends('layouts.main')

@section('content')
    <div class="container py-4">
        <h3 class="mb-4 fw-bold">Товхимол</h3>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @forelse ($books as $book)
                <div class="col">
                    <div class="card flex-md-row h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        {{-- Зураг хэсэг --}}
                        @if ($book->cover_image)
                            <div class="col-md-5">
                                <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}"
                                    class="img-fluid h-100 w-100" style="object-fit: cover;">
                            </div>
                        @endif

                        {{-- Контент хэсэг --}}
                        <div class="col-md-7 d-flex flex-column p-3">
                            <small class="text-muted">
                                {{ \Carbon\Carbon::parse($book->published_at)->format('Y.m.d') }}
                            </small>

                            <h5 class="fw-bold text-dark mt-2">{{ $book->title }}</h5>

                            <p class="text-secondary mt-2 mb-4">
                                {{ Str::limit($book->desc, 140) }}
                            </p>

                            <div class="mt-auto d-flex gap-2">
                                @if ($book->pdf_file)
                                    <a href="{{ asset('storage/' . $book->pdf_file) }}" class="btn btn-sm btn-primary px-3"
                                        download>
                                        <i class="bi bi-download"></i> Татах
                                    </a>
                                @endif

                                <a href="#" class="btn btn-sm btn-outline-primary px-3 btn-pdf-view"
                                    data-bs-toggle="modal" data-bs-target="#pdfModal"
                                    data-pdf-url="{{ $book->pdf_file ? asset('storage/' . $book->pdf_file) : '' }}">
                                    <i class="bi bi-info-circle"></i> Унших
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">Товхимол олдсонгүй.</div>
                </div>
            @endforelse
        </div>
        <div class="mt-4 d-flex justify-content-center">
            {{ $books->links() }}
        </div>
    </div>
    <!-- PDF Viewer Modal -->
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 90vw;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Хаах"></button>
                </div>
                <div class="modal-body p-0" style="height: 80vh;">
                    <iframe id="pdfFrame" src="" frameborder="0" style="width: 100%; height: 100%;"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pdfModal = document.getElementById('pdfModal');
            const pdfFrame = document.getElementById('pdfFrame');

            pdfModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const pdfUrl = button.getAttribute('data-pdf-url');

                if (pdfUrl) {
                    pdfFrame.src = pdfUrl;
                } else {
                    pdfFrame.src = ''; // Файл байхгүй тохиолдолд хоосон байлгах
                    alert('PDF файл олдсонгүй.');
                    // Модал автоматаар хаагдах
                    const modal = bootstrap.Modal.getInstance(pdfModal);
                    modal.hide();
                }
            });

            pdfModal.addEventListener('hidden.bs.modal', function() {
                // Modal хаагдах үед iframe-н src-г цэвэрлэх (шийдэлтэй байдалд шилжүүлэх)
                pdfFrame.src = '';
            });
        });
    </script>
@endsection
