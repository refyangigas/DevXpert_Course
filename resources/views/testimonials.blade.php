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
                            <!-- Testimonial 1 -->
                            <div class="carousel-item active">
                                <div class="testimonial-card text-center p-5 shadow-lg rounded-3">
                                    <div class="testimonial-image mx-auto mb-4">
                                        <img src="{{ asset('images/testimonials/testimonial-1.jpg') }}" alt="Testimonial 1"
                                            class="rounded-circle" width="100">
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="fs-5 fst-italic mb-4">"Pelatihan di Creative Media sangat membantu saya
                                            mengembangkan keterampilan desain grafis. Pengajarnya sangat profesional dan
                                            sabar dalam membimbing. Saya sekarang bekerja sebagai desainer di perusahaan
                                            ternama berkat ilmu yang saya dapatkan di sini."</p>
                                        <h5 class="fw-bold mb-1" style="color: var(--primary-color);">Budi Santoso</h5>
                                        <p class="small text-muted">Peserta Kursus Desain Grafis</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial 2 -->
                            <div class="carousel-item">
                                <div class="testimonial-card text-center p-5 shadow-lg rounded-3">
                                    <div class="testimonial-image mx-auto mb-4">
                                        <img src="{{ asset('images/testimonials/testimonial-2.png') }}" alt="Testimonial 2"
                                            class="rounded-circle" width="100">
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="fs-5 fst-italic mb-4">"Website yang dikembangkan oleh tim Creative Media
                                            sangat membantu bisnis kami. Tampilan yang profesional dan responsif membuat
                                            pengunjung website kami meningkat 200% dalam 3 bulan pertama setelah
                                            peluncuran."</p>
                                        <h5 class="fw-bold mb-1" style="color: var(--primary-color);">Linda Wijaya</h5>
                                        <p class="small text-muted">CEO, PT. Maju Bersama</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial 3 -->
                            <div class="carousel-item">
                                <div class="testimonial-card text-center p-5 shadow-lg rounded-3">
                                    <div class="testimonial-image mx-auto mb-4">
                                        <img src="{{ asset('images/testimonials/user-2.png') }}" alt="Testimonial 3"
                                            class="rounded-circle" width="100">
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="fs-5 fst-italic mb-4">"Berbeda dengan tempat kursus lainnya, Creative
                                            Media benar-benar memberikan jaminan sampai bisa. Saya yang awalnya gagap
                                            teknologi kini mampu membuat aplikasi sederhana berkat kesabaran para pengajar."
                                        </p>
                                        <h5 class="fw-bold mb-1" style="color: var(--primary-color);">Ahmad Faisal</h5>
                                        <p class="small text-muted">Peserta Kursus Programming</p>
                                    </div>
                                </div>
                            </div>
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
                <!-- Grid Testimonial 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/testimonials/user-1.jpg') }}" alt="User 1"
                                        class="rounded-circle" width="60">
                                </div>
                                <div class="ms-3">
                                    <h5 class="card-title mb-1">Dewi Anggraini</h5>
                                    <p class="small text-muted">Digital Marketing</p>
                                </div>
                            </div>
                            <div class="testimonial-rating mb-3">
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                            </div>
                            <p class="card-text">"Materi digital marketing yang diajarkan sangat up-to-date dan praktis
                                untuk diterapkan. Kini saya mampu mengelola kampanye digital dengan lebih efektif."</p>
                        </div>
                    </div>
                </div>

                <!-- Grid Testimonial 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/testimonials/user-2.png') }}" alt="User 2"
                                        class="rounded-circle" width="60">
                                </div>
                                <div class="ms-3">
                                    <h5 class="card-title mb-1">Hendra Wijaya</h5>
                                    <p class="small text-muted">Web Development</p>
                                </div>
                            </div>
                            <div class="testimonial-rating mb-3">
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star-half-alt" style="color: #FFD700;"></i>
                            </div>
                            <p class="card-text">"Materi web development sangat komprehensif, mulai dari HTML/CSS hingga
                                framework modern. Sistem belajarnya sangat fleksibel dan mendukung."</p>
                        </div>
                    </div>
                </div>

                <!-- Grid Testimonial 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/testimonials/testimonial-1.jpg') }}" alt="User 3"
                                        class="rounded-circle" width="60">
                                </div>
                                <div class="ms-3">
                                    <h5 class="card-title mb-1">Siti Fatimah</h5>
                                    <p class="small text-muted">Desain Interior</p>
                                </div>
                            </div>
                            <div class="testimonial-rating mb-3">
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                                <i class="fas fa-star" style="color: #FFD700;"></i>
                            </div>
                            <p class="card-text">"Kursus desain interior sangat praktis, dengan tutorial langsung
                                menggunakan software terkini. Mentor professional dan berpengalaman."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate Testimonials -->
    <section id="corporate-testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Klien Korporat</h2>

            <div class="row g-4">
                <!-- Corporate Testimonial 1 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center justify-content-center p-3"
                                style="background-color: var(--primary-color);">
                                <img src="{{ asset('images/testimonials/company-1.jpg') }}" alt="Company 1"
                                    class="img-fluid rounded-circle" style="max-width: 120px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-bold">PT. Global Solutions</h5>
                                    <p class="card-text fst-italic">"Creative Media telah membantu kami dalam mengembangkan
                                        website perusahaan dan sistem informasi internal. Hasilnya sangat profesional dan
                                        sesuai kebutuhan."</p>
                                    <p class="card-text"><small class="text-muted">- Direktur IT</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Corporate Testimonial 2 -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center justify-content-center p-3"
                                style="background-color: var(--primary-color);">
                                <img src="{{ asset('images/testimonials/company-2.jpg') }}" alt="Company 2"
                                    class="img-fluid rounded-circle" style="max-width: 120px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-bold">CV. Maju Makmur</h5>
                                    <p class="card-text fst-italic">"Kami sangat puas dengan pelatihan digital marketing
                                        yang diberikan untuk tim kami. Penjualan online kami meningkat signifikan setelah
                                        menerapkan strategi yang diajarkan."</p>
                                    <p class="card-text"><small class="text-muted">- Manager Marketing</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <a href="/contact" class="btn btn-lg"
                    style="background-color: var(--primary-color); color: white;">Daftar Sekarang</a>
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

        #corporate-testimonials .card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
    </style>
@endsection
