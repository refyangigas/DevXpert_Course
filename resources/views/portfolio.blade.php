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

                @forelse($portfolios ?? [] as $portfolio)
                    <div class="col-md-6 col-lg-4 portfolio-item {{ $portfolio->category }}">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="portfolio-img position-relative overflow-hidden">
                                <img src="{{ asset('storage/' . $portfolio->image) }}" class="card-img-top"
                                    alt="{{ $portfolio->title }}">
                                <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                    <div class="portfolio-info text-center p-3">
                                        <h5>{{ $portfolio->title }}</h5>
                                        <p class="text-white mb-0">{{ $portfolio->getCategoryNameAttribute() }}</p>
                                        <a href="#portfolioModal{{ $portfolio->id }}" data-bs-toggle="modal"
                                            class="btn btn-light btn-sm mt-2">
                                            <i class="fas fa-eye me-1"></i> Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $portfolio->title }}</h5>
                                <p class="card-text text-muted small">Karya: {{ $portfolio->student_name }} | Angkatan:
                                    {{ $portfolio->batch ?? '-' }}</p>
                                <div class="d-flex align-items-center mt-2">
                                    <div class="portfolio-tech">
                                        @if ($portfolio->technologies)
                                            @foreach ($portfolio->technologies as $tech)
                                                <span class="badge bg-light text-dark me-1">{{ $tech }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

                <!-- Load More Button (Hanya ditampilkan jika ada portfolio dan jumlahnya lebih dari 6) -->
                @if (isset($portfolios) && $portfolios->count() > 6)
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <button id="loadMoreBtn" class="btn btn-lg"
                                style="background-color: var(--primary-color); color: white;">
                                Lihat Lebih Banyak <i class="fas fa-arrow-down ms-2"></i>
                            </button>
                        </div>
                    </div>
                @endif
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
                        <a href="{{ route('contact') }}" class="btn btn-light">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals -->
    @if (isset($portfolios) && $portfolios->count() > 0)
        @foreach ($portfolios as $portfolio)
            <div class="modal fade" id="portfolioModal{{ $portfolio->id }}" tabindex="-1"
                aria-labelledby="portfolioModalLabel{{ $portfolio->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="portfolioModalLabel{{ $portfolio->id }}">{{ $portfolio->title }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                                        class="img-fluid mb-3">
                                </div>
                                <div class="col-md-6">
                                    <h5>Detail Project</h5>
                                    <p class="text-muted mb-3">Karya: {{ $portfolio->student_name }} | Angkatan:
                                        {{ $portfolio->batch ?? '-' }}</p>

                                    @if ($portfolio->description)
                                        <p>{{ $portfolio->description }}</p>
                                    @endif

                                    @if ($portfolio->details)
                                        <div class="mt-3">
                                            {!! $portfolio->details !!}
                                        </div>
                                    @endif

                                    <h5 class="mt-4">Teknologi yang Digunakan</h5>
                                    <div class="d-flex flex-wrap mt-2">
                                        @if ($portfolio->technologies)
                                            @foreach ($portfolio->technologies as $tech)
                                                <span class="badge bg-light text-dark me-1 mb-1">{{ $tech }}</span>
                                            @endforeach
                                        @else
                                            <p class="text-muted small">Tidak ada data teknologi</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            @if ($portfolio->demo_link)
                                <a href="{{ 'https://' . $portfolio->demo_link }}" class="btn btn-outline-dark me-2"
                                    target="_blank">
                                    <i class="fas fa-external-link-alt me-1"></i> Lihat Demo
                                </a>
                            @endif
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <!-- Fallback Modals (jika belum ada data) -->
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

        <!-- Tambahkan modal fallback lainnya sesuai kebutuhan -->
    @endif
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

            // Load More Button Functionality (jika dibutuhkan)
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            if (loadMoreBtn) {
                const initialItemsToShow = 6;
                const itemsToAdd = 3;

                // Sembunyikan item setelah yang ke-6
                const items = document.querySelectorAll('.portfolio-item');
                if (items.length > initialItemsToShow) {
                    for (let i = initialItemsToShow; i < items.length; i++) {
                        items[i].style.display = 'none';
                    }
                }

                let visibleItems = initialItemsToShow;
                loadMoreBtn.addEventListener('click', function() {
                    for (let i = visibleItems; i < visibleItems + itemsToAdd && i < items.length; i++) {
                        items[i].style.display = 'block';
                    }

                    visibleItems += itemsToAdd;

                    // Sembunyikan tombol jika semua item sudah ditampilkan
                    if (visibleItems >= items.length) {
                        loadMoreBtn.style.display = 'none';
                    }
                });
            }
        });
    </script>
@endsection
