@extends('layouts.app')

@section('title', 'Testimonial')

@section('content')
    <!-- Header Section -->
    <section id="testimonial-header" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-4">Testimonial</h1>
                    <p class="lead">Dengarkan pengalaman dari alumni dan klien yang telah mempercayakan pelatihan dan jasa
                        mereka kepada Creative Media.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Testimonials -->
    <section id="featured-testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Mereka?</h2>

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @forelse($featuredTestimonials as $index => $testimonial)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="testimonial-card text-center p-5 shadow-lg rounded-3">
                                        <div class="testimonial-image mx-auto mb-4">
                                            @if ($testimonial->image ?? null)
                                                <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                    alt="{{ $testimonial->name }}" class="rounded-circle" width="100">
                                            @else
                                                <img src="{{ asset('images/testimonials/user-1.jpg') }}"
                                                    alt="{{ $testimonial->name ?? 'Default' }}" class="rounded-circle"
                                                    width="100">
                                            @endif
                                        </div>
                                        <div class="testimonial-content">
                                            <p class="fs-5 fst-italic mb-4">
                                                "{{ $testimonial->content ?? 'Belum ada testimonial saat ini.' }}"</p>
                                            <h5 class="fw-bold mb-1" style="color: var(--primary-color);">
                                                {{ $testimonial->name ?? 'Sample Name' }}</h5>
                                            <p class="small text-muted">{{ $testimonial->position ?? 'Sample Position' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="carousel-item active">
                                    <div class="testimonial-card text-center p-5 shadow-lg rounded-3">
                                        <p>Belum ada testimonial saat ini. Silahkan tambahkan testimonial melalui panel
                                            admin.</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Grid -->
    <section id="testimonial-grid" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Testimonial Siswa & Klien</h2>

            <div class="row g-4">
                @forelse($gridTestimonials as $testimonial)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0">
                                        @if ($testimonial->image ?? null)
                                            <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                alt="{{ $testimonial->name }}" class="rounded-circle" width="60">
                                        @else
                                            <img src="{{ asset('images/testimonials/user-1.jpg') }}"
                                                alt="{{ $testimonial->name ?? 'Default' }}" class="rounded-circle"
                                                width="60">
                                        @endif
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="card-title mb-1">{{ $testimonial->name ?? 'Sample Name' }}</h5>
                                        <p class="small text-muted">{{ $testimonial->position ?? 'Sample Position' }}</p>
                                    </div>
                                </div>
                                <div class="testimonial-rating mb-3">
                                    @php
                                        $rating = $testimonial->rating ?? 5;
                                    @endphp
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-{{ $i <= $rating ? 'star' : ($i - 0.5 <= $rating ? 'star-half-alt' : 'star') }}"
                                            style="color: #FFD700;"></i>
                                    @endfor
                                </div>
                                <p class="card-text">"{{ $testimonial->content ?? 'Belum ada testimonial saat ini.' }}"</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Belum ada testimonial saat ini. Silahkan tambahkan testimonial melalui panel admin.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="testimonial-cta" class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Siap Menjadi Bagian dari Kisah Sukses?</h2>
            <p class="lead mb-4">Bergabunglah dengan ribuan siswa dan klien kami yang telah sukses mengembangkan karir dan
                bisnis mereka.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="/contact" class="btn btn-lg" style="background-color: var(--primary-color); color: white;">Daftar
                    Sekarang</a>
                <a href="/contact" class="btn btn-lg btn-outline-light">Hubungi Kami</a>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .testimonial-card {
            background-color: #fff;
            position: relative;
        }

        .testimonial-card:before {
            content: '\201C';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 60px;
            font-family: Georgia, serif;
            color: var(--primary-color);
            opacity: 0.2;
        }

        #testimonial-header {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/bg-testimonial.jpg');
            background-size: cover;
            background-position: center;
        }

        .testimonial-image img {
            border: 3px solid var(--primary-color);
            padding: 2px;
        }
    </style>
@endsection
