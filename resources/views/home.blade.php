@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Carousel Section (Enhanced) -->
    <section id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <!-- Slide 1: Pelatihan IT & Multimedia -->
            <div class="carousel-item active">
                <img src="{{ asset('images/slider/slider1.png') }}" class="d-block w-100" alt="Pelatihan IT & Multimedia">
                <div class="carousel-caption">
                    <h1>Kembangkan Keahlian Digital Anda</h1>
                    <p>Raih masa depan cerah dengan pelatihan IT & Multimedia profesional</p>
                    <a href="{{ route('contact') }}" class="btn btn-lg mt-3"
                        style="background-color: var(--primary-color); color: white;">Hubungi Kami</a>
                </div>
            </div>

            <!-- Slide 2: Karya Siswa/Portfolio -->
            <div class="carousel-item">
                <img src="{{ asset('images/slider/slider2.jpg') }}" class="d-block w-100" alt="Karya Siswa">
                <div class="carousel-caption">
                    <h1>Karya Terbaik Siswa Kami</h1>
                    <p>Lihat hasil karya menakjubkan dari para siswa Creative Media</p>
                    <a href="{{ route('portfolio') }}" class="btn btn-lg mt-3"
                        style="background-color: var(--primary-color); color: white;">Lihat Karya</a>
                </div>
            </div>

            <!-- Slide 3: Testimonial -->
            <div class="carousel-item">
                <img src="{{ asset('images/slider/slider3.jpg') }}" class="d-block w-100" alt="Testimonial">
                <div class="carousel-caption">
                    <h1>Apa Kata Mereka?</h1>
                    <p>Dengarkan pengalaman dari alumni dan klien yang telah mempercayakan pelatihan</p>
                    <a href="{{ route('testimonials') }}" class="btn btn-lg mt-3"
                        style="background-color: var(--primary-color); color: white;">Lihat Testimonial</a>
                </div>
            </div>

            <!-- Slide 4: Artikel & Tips -->
            <div class="carousel-item">
                <img src="{{ asset('images/slider/slider4.jpg') }}" class="d-block w-100" alt="Artikel & Tips">
                <div class="carousel-caption">
                    <h1>Artikel & Tips Terbaru</h1>
                    <p>Pelajari tren dan perkembangan terbaru dalam dunia IT & Multimedia</p>
                    <a href="{{ route('articles') }}" class="btn btn-lg mt-3"
                        style="background-color: var(--primary-color); color: white;">Baca Artikel</a>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>

    <!-- CTA Section with WhatsApp Button (Enhanced) -->
    <section id="whatsapp-cta" class="bg-light py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-none d-md-block animate-slide-right">
                <span class="badge py-2 px-3" style="background-color: var(--primary-color);">HOT</span>
                <span class="ms-2">Promo Spesial: Diskon 20% untuk pendaftaran bulan ini!</span>
            </div>
            <div class="animate-slide-left">
                <span class="me-2">Hubungi Kami via WhatsApp:</span>
                <a href="https://wa.me/6282131314040" class="btn btn-success btn-sm">
                    <i class="fab fa-whatsapp"></i> Chat Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section (Enhanced with Animation) -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 mx-auto text-center animate-fade-in">
                    <h2 class="section-title position-relative pb-3 mb-3">LAYANAN KAMI</h2>
                    <p class="text-muted">Kami menyediakan beragam layanan profesional di bidang IT & Multimedia untuk
                        memenuhi kebutuhan Anda</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-3 mb-4">
                    <div class="service-card text-center h-100 animate-slide-up delay-100">
                        <div class="service-icon-wrap">
                            <img src="{{ asset('images/services/Training.png') }}" alt="Training Icon" class="service-icon">
                        </div>
                        <h4 class="mt-4">COURSE & TRAININGS</h4>
                        <p>
                            Tersedia 35 jenis kursus IT & Multimedia dengan format private atau belajar kelompok kecil.
                            Meliputi Digital Marketing, Graphic Design, Interior Design, Architecture Design, Web Design,
                            Programming, Motion Graphic, Video Editing dll.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-3 mb-4">
                    <div class="service-card text-center h-100 animate-slide-up delay-200">
                        <div class="service-icon-wrap">
                            <img src="{{ asset('images/services/branding.png') }}" alt="Branding Icon"
                                class="service-icon">
                        </div>
                        <h4 class="mt-4">BRANDING & DESIGN</h4>
                        <p>
                            Need Branding support? Atau Jasa Design yang tepat? Akhirnya ada Jasa Branding & Design yang
                            berbeda dari lainnya, kami menawarkan full proses media komunikasi dan proses pemasaran buat
                            usaha atau perusahaan Anda.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-3 mb-4">
                    <div class="service-card text-center h-100 animate-slide-up delay-300">
                        <div class="service-icon-wrap">
                            <img src="{{ asset('images/services/corses.png') }}" alt="Web Development Icon"
                                class="service-icon">
                        </div>
                        <h4 class="mt-4">WEB DEVELOPMENT</h4>
                        <p>
                            Memiliki website merupakan solusi untuk membuat Company Profile, Toko Bar, E-Commerce, Website
                            Instansi atau lembaga dll. Didesain dengan fitur SEO (Search Engine Optimization) yang akan
                            meningkatkan peringkat di halaman pertama Google.
                        </p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-3 mb-4">
                    <div class="service-card text-center h-100 animate-slide-up delay-400">
                        <div class="service-icon-wrap">
                            <img src="{{ asset('images/services/Mobile.png') }}" alt="Mobile Apps Icon"
                                class="service-icon">
                        </div>
                        <h4 class="mt-4">MOBILE APPS DEVELOPMENT</h4>
                        <p>
                            Aplikasi mobile baik Android, IPhone, desktop memiliki peranan penting dalam bisnis. Kami
                            menawarkan jasa pembuatan aplikasi berbagai platform seperti mobile, web, API yang menyesuaikan
                            dengan kebutuhan dalam dunia bisnis dan media.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Section with Parallax Background (Enhanced) -->
    <section id="promo" class="promo-section py-5"
        style="background-image: url('{{ asset('images/slider/slider1.png') }}'); background-attachment: fixed; background-size: cover; background-position: center;">
        <div class="promo-overlay">
            <div class="container text-center text-white py-5">
                <div class="animate-zoom-in">
                    <h2 class="display-4 fw-bold">DAPATKAN PROMO SPESIAL BULAN INI</h2>
                    <h3 class="mb-4">INFO: 082131314040 / 082131310210</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section (With Animation) -->
    <div class="animate-fade-in">
        @include('components.portfolio-section')
    </div>

    <!-- Testimonial Section (With Animation) -->
    <div class="animate-fade-in">
        @include('components.testimonial-section')
    </div>

    <!-- Article Section (With Animation) -->
    <div class="animate-fade-in">
        @include('components.article-section')
    </div>

    <!-- Stats Section (With Animation) -->
    <section id="stats" class="py-5" style="background-color: var(--primary-color);">
        <div class="container py-3">
            <div class="row text-center text-white">
                <div class="col-6 col-md-3 mb-4 mb-md-0 animate-slide-up delay-100">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 animate-zoom-in delay-300">35+</div>
                        <p>Kursus</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0 animate-slide-up delay-200">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 animate-zoom-in delay-400">3000+</div>
                        <p>Alumni</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 animate-slide-up delay-300">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 animate-zoom-in delay-500">15+</div>
                        <p>Pengajar Pro</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 animate-slide-up delay-400">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 animate-zoom-in delay-600">100+</div>
                        <p>Project</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Registration (With Animation) -->
    <section id="cta-register" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0 animate-slide-right">
                    <h2 class="mb-3">Siap Mulai Perjalanan Digital Anda?</h2>
                    <p class="lead mb-0">Daftar sekarang dan dapatkan konsultasi gratis dengan tim ahli kami untuk memilih
                        program yang tepat untuk Anda.</p>
                </div>
                <div class="col-lg-5 text-lg-end animate-slide-left">
                    <a href="/contact" class="btn btn-lg me-2"
                        style="background-color: var(--primary-color); color: white;">
                        <i class="fas fa-user-plus me-2"></i> Tanya Kami?
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        /* Enhanced Styles for Home Page */
        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            padding: 20px 30px;
            max-width: 600px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .carousel-caption h1 {
            font-weight: 700;
            font-size: 2.5rem;
        }

        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .service-card {
            border-radius: 10px;
            padding: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            background-color: #fff;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .service-icon-wrap {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon-wrap {
            background-color: #f9e6ee;
            /* Light pink */
            transform: scale(1.1);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: rotate(10deg);
        }

        .promo-section {
            position: relative;
        }

        .promo-overlay {
            background-color: rgba(0, 0, 0, 0.7);
            width: 100%;
            height: 100%;
        }

        .stat-item {
            padding: 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-5px);
        }

        /* Additional animations */
        @media (max-width: 768px) {
            .carousel-caption h1 {
                font-size: 1.8rem;
            }

            .carousel-caption p {
                font-size: 0.9rem;
            }

            .carousel-caption {
                padding: 15px;
            }
        }
    </style>
@endsection
