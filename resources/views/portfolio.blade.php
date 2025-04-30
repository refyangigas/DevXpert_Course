@extends('layouts.app')

@section('title', 'Karya Siswa')

@section('content')
    <!-- Header Section -->
    <section id="portfolio-header" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4">Karya Siswa</h1>
                    <p class="lead">Showcase hasil karya terbaik dari siswa-siswi Creative Media. Kreativitas tanpa batas
                        dalam dunia desain, teknologi, dan multimedia.</p>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="{{ asset('images/portfolio/header-img.png') }}" alt="Portfolio Header" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Filter Section -->
    <section id="portfolio-filter" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills portfolio-filter justify-content-center mb-5" id="portfolioFilter">
                        <li class="nav-item mx-1">
                            <button class="nav-link active px-4" data-filter="*">Semua</button>
                        </li>
                        <li class="nav-item mx-1">
                            <button class="nav-link px-4" data-filter=".web-design">Web Design</button>
                        </li>
                        <li class="nav-item mx-1">
                            <button class="nav-link px-4" data-filter=".graphic-design">Desain Grafis</button>
                        </li>
                        <li class="nav-item mx-1">
                            <button class="nav-link px-4" data-filter=".ui-ux">UI/UX</button>
                        </li>
                        <li class="nav-item mx-1">
                            <button class="nav-link px-4" data-filter=".mobile-app">Mobile App</button>
                        </li>
                        <li class="nav-item mx-1">
                            <button class="nav-link px-4" data-filter=".video">Video & Animasi</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container g-4" id="portfolioGrid">
                <!-- Portfolio Item 1 -->
                <div class="col-md-6 col-lg-4 portfolio-item web-design">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                                alt="Portfolio 1">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-info text-center p-3">
                                    <h5>E-Commerce Website</h5>
                                    <p class="text-white mb-0">Web Design</p>
                                    <a href="#portfolioModal1" data-bs-toggle="modal" class="btn btn-light btn-sm mt-2">
                                        <i class="fas fa-eye me-1"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">E-Commerce Fashion Website</h5>
                            <p class="card-text text-muted small">Karya: Budi Santoso | Angkatan: 2024</p>
                            <div class="d-flex align-items-center mt-2">
                                <div class="portfolio-tech">
                                    <span class="badge bg-light text-dark me-1">HTML</span>
                                    <span class="badge bg-light text-dark me-1">CSS</span>
                                    <span class="badge bg-light text-dark">JavaScript</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="col-md-6 col-lg-4 portfolio-item graphic-design">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                                alt="Portfolio 2">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-info text-center p-3">
                                    <h5>Branding Project</h5>
                                    <p class="text-white mb-0">Desain Grafis</p>
                                    <a href="#portfolioModal2" data-bs-toggle="modal" class="btn btn-light btn-sm mt-2">
                                        <i class="fas fa-eye me-1"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Branding untuk Kafe Lokal</h5>
                            <p class="card-text text-muted small">Karya: Siti Nurhaliza | Angkatan: 2023</p>
                            <div class="d-flex align-items-center mt-2">
                                <div class="portfolio-tech">
                                    <span class="badge bg-light text-dark me-1">Photoshop</span>
                                    <span class="badge bg-light text-dark me-1">Illustrator</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="col-md-6 col-lg-4 portfolio-item ui-ux">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                                alt="Portfolio 3">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-info text-center p-3">
                                    <h5>Travel App UI Design</h5>
                                    <p class="text-white mb-0">UI/UX Design</p>
                                    <a href="#portfolioModal3" data-bs-toggle="modal" class="btn btn-light btn-sm mt-2">
                                        <i class="fas fa-eye me-1"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Travel App UI Design</h5>
                            <p class="card-text text-muted small">Karya: Ahmad Rizky | Angkatan: 2024</p>
                            <div class="d-flex align-items-center mt-2">
                                <div class="portfolio-tech">
                                    <span class="badge bg-light text-dark me-1">Figma</span>
                                    <span class="badge bg-light text-dark">Adobe XD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 4 -->
                <div class="col-md-6 col-lg-4 portfolio-item mobile-app">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                                alt="Portfolio 4">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-info text-center p-3">
                                    <h5>Aplikasi Belajar Online</h5>
                                    <p class="text-white mb-0">Mobile App Development</p>
                                    <a href="#portfolioModal4" data-bs-toggle="modal" class="btn btn-light btn-sm mt-2">
                                        <i class="fas fa-eye me-1"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi Belajar Online</h5>
                            <p class="card-text text-muted small">Karya: Maya Indah | Angkatan: 2023</p>
                            <div class="d-flex align-items-center mt-2">
                                <div class="portfolio-tech">
                                    <span class="badge bg-light text-dark me-1">Flutter</span>
                                    <span class="badge bg-light text-dark me-1">Firebase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 5 -->
                <div class="col-md-6 col-lg-4 portfolio-item video">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                                alt="Portfolio 5">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-info text-center p-3">
                                    <h5>Motion Graphic Edukasi</h5>
                                    <p class="text-white mb-0">Video & Animasi</p>
                                    <a href="#portfolioModal5" data-bs-toggle="modal" class="btn btn-light btn-sm mt-2">
                                        <i class="fas fa-eye me-1"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Motion Graphic Edukasi</h5>
                            <p class="card-text text-muted small">Karya: Denny Wijaya | Angkatan: 2024</p>
                            <div class="d-flex align-items-center mt-2">
                                <div class="portfolio-tech">
                                    <span class="badge bg-light text-dark me-1">After Effects</span>
                                    <span class="badge bg-light text-dark">Premiere Pro</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 6 -->
                <div class="col-md-6 col-lg-4 portfolio-item web-design">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                                alt="Portfolio 6">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-info text-center p-3">
                                    <h5>Company Profile Website</h5>
                                    <p class="text-white mb-0">Web Design</p>
                                    <a href="#portfolioModal6" data-bs-toggle="modal" class="btn btn-light btn-sm mt-2">
                                        <i class="fas fa-eye me-1"></i> Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Company Profile Website</h5>
                            <p class="card-text text-muted small">Karya: Rudi Hartono | Angkatan: 2023</p>
                            <div class="d-flex align-items-center mt-2">
                                <div class="portfolio-tech">
                                    <span class="badge bg-light text-dark me-1">Bootstrap</span>
                                    <span class="badge bg-light text-dark me-1">PHP</span>
                                    <span class="badge bg-light text-dark">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <button class="btn btn-lg" style="background-color: var(--primary-color); color: white;">
                        Lihat Lebih Banyak <i class="fas fa-arrow-down ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Student Section -->
    <section id="featured-student" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Siswa Berprestasi</h2>
                    <p class="text-muted">Mengenal lebih dekat siswa-siswi berprestasi Creative Media</p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/testimonials/testimonial-1.jpg') }}" alt="Featured Student"
                        class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-lg-6">
                    <div class="featured-student-content">
                        <h3 class="mb-3">Nico Robin</h3>
                        <p class="text-muted mb-3">UI/UX Designer & Frontend Developer</p>
                        <p>Budi adalah salah satu siswa berprestasi dari program Web Development Creative Media. Selama
                            belajar di Creative Media, Budi berhasil mengembangkan berbagai proyek website dan aplikasi yang
                            telah digunakan oleh beberapa bisnis lokal.</p>
                        <p>Kini Budi bekerja sebagai UI/UX Designer di salah satu startup teknologi terkemuka di Indonesia.
                        </p>

                        <div class="mt-4">
                            <h5>Karya Unggulan:</h5>
                            <ul class="list-group list-group-flush mt-2">
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="fas fa-check-circle me-2" style="color: var(--primary-color);"></i>
                                    E-Commerce Platform untuk UMKM
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="fas fa-check-circle me-2" style="color: var(--primary-color);"></i> Website
                                    Edukasi Interaktif
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="fas fa-check-circle me-2" style="color: var(--primary-color);"></i> Aplikasi
                                    Manajemen Perpustakaan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Creative Media Section -->
    <section id="join-creative-media" class="py-5" style="background-color: var(--primary-color);">
        <div class="container">
            <div class="row justify-content-center text-center text-white">
                <div class="col-lg-8">
                    <h2 class="mb-4">Ingin Menjadi Seperti Mereka?</h2>
                    <p class="lead mb-4">Bergabunglah dengan Creative Media dan dapatkan pendidikan berkualitas di bidang
                        IT & Multimedia dari pengajar profesional.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="/contact" class="btn btn-light">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals -->
    <!-- Portfolio Modal 1 -->
    <div class="modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="portfolioModalLabel1">E-Commerce Fashion Website</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" alt="Portfolio 1"
                                class="img-fluid mb-3">
                        </div>
                        <div class="col-md-6">
                            <h5>Detail Project</h5>
                            <p class="text-muted mb-3">Karya: Budi Santoso | Angkatan: 2024</p>
                            <p>E-Commerce Fashion Website adalah project akhir dari program Web Development. Website ini
                                dibangun menggunakan HTML, CSS, dan JavaScript dengan tambahan framework Bootstrap.</p>
                            <p>Fitur utama website ini termasuk katalog produk, keranjang belanja, proses checkout, dan
                                sistem review produk.</p>

                            <h5 class="mt-4">Teknologi yang Digunakan</h5>
                            <div class="d-flex flex-wrap mt-2">
                                <span class="badge bg-light text-dark me-1 mb-1">HTML</span>
                                <span class="badge bg-light text-dark me-1 mb-1">CSS</span>
                                <span class="badge bg-light text-dark me-1 mb-1">JavaScript</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Bootstrap</span>
                                <span class="badge bg-light text-dark me-1 mb-1">PHP</span>
                                <span class="badge bg-light text-dark me-1 mb-1">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-dark me-2">
                        <i class="fas fa-external-link-alt me-1"></i> Lihat Demo
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .nav-pills .nav-link {
            color: #333;
            border-radius: 30px;
            font-weight: 500;
        }

        .nav-pills .nav-link.active {
            background-color: var(--primary-color);
            color: white;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .portfolio-img {
            height: 250px;
        }

        .portfolio-img img {
            height: 100%;
            object-fit: cover;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .card {
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        #portfolio-header {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/bg-portfolio.jpg');
            background-size: cover;
            background-position: center;
        }

        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }
    </style>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.portfolio-filter button');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to current button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    portfolioItems.forEach(item => {
                        if (filterValue === '*') {
                            item.style.display = 'block';
                        } else if (item.classList.contains(filterValue.substring(1))) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
@endsection
