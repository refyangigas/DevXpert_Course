@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
    <!-- Header Section -->
    <section id="article-header" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-4">Artikel & Tips</h1>
                    <p class="lead">Kumpulan artikel, tutorial, dan tips seputar IT, desain, dan teknologi terkini dari tim ahli Creative Media.</p>
                </div>
                <div class="col-md-4">
                    <!-- Search Bar -->
                    <div class="mt-4 mt-md-0">
                        <form action="{{ route('articles.search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari artikel..." name="search">
                                <button class="btn" style="background-color: var(--primary-color); color: white;" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Article -->
    <section id="featured-article" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="featured-article-card bg-dark text-white position-relative rounded-3 overflow-hidden">
                        <img src="{{ asset('images/articles/article-1.jpg') }}" alt="Featured Article" class="w-100 opacity-50" style="height: 400px; object-fit: cover;">
                        <div class="featured-content position-absolute bottom-0 p-4 p-md-5 w-100">
                            <span class="badge" style="background-color: var(--primary-color);">TERBARU</span>
                            <h2 class="mt-2 mb-3">10 Tren Desain Web Terbaru yang Harus Anda Ketahui di 2025</h2>
                            <p class="mb-3 d-none d-md-block">Pelajari tren desain web terbaru yang akan mendominasi industri di tahun 2025. Dari animasi micro-interaction hingga desain 3D yang imersif.</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/author.jpg') }}" alt="Author" class="rounded-circle me-2" width="40">
                                <div>
                                    <p class="mb-0 small">Oleh: Admin</p>
                                    <p class="mb-0 small text-light">28 April 2025 • 5 menit membaca</p>
                                </div>
                            </div>
                            <a href="/article/10-tren-desain-web-terbaru" class="btn mt-3" style="background-color: var(--primary-color); color: white;">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Tabs -->
    <section id="article-categories" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Kategori Artikel</h2>

            <ul class="nav nav-pills justify-content-center mb-5" id="articleTabs" role="tablist">
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link active px-4" id="semua-tab" data-bs-toggle="pill" data-bs-target="#semua" type="button" role="tab" aria-controls="semua" aria-selected="true">Semua</button>
                </li>
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link px-4" id="tutorial-tab" data-bs-toggle="pill" data-bs-target="#tutorial" type="button" role="tab" aria-controls="tutorial" aria-selected="false">Tutorial</button>
                </li>
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link px-4" id="tips-trick-tab" data-bs-toggle="pill" data-bs-target="#tips-trick" type="button" role="tab" aria-controls="tips-trick" aria-selected="false">Tips & Trik</button>
                </li>
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link px-4" id="teknologi-tab" data-bs-toggle="pill" data-bs-target="#teknologi" type="button" role="tab" aria-controls="teknologi" aria-selected="false">Teknologi</button>
                </li>
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link px-4" id="desain-tab" data-bs-toggle="pill" data-bs-target="#desain" type="button" role="tab" aria-controls="desain" aria-selected="false">Desain</button>
                </li>
            </ul>

            <div class="tab-content" id="articleTabsContent">
                <!-- All Articles Tab -->
                <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="semua-tab">
                    <div class="row g-4">
                        <!-- Article 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm article-card">
                                <div class="position-relative">
                                    <img src="{{ asset('images/articles/article-1.jpg') }}" class="card-img-top" alt="Article 1" style="height: 200px; object-fit: cover;">
                                    <span class="badge position-absolute top-0 end-0 m-2" style="background-color: var(--primary-color);">Tutorial</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Cara Membuat Website Responsive dengan Bootstrap 5</h5>
                                    <p class="card-text text-muted small">25 April 2025 • 4 menit membaca</p>
                                    <p class="card-text">Pelajari langkah-langkah membuat website responsive dengan framework Bootstrap 5 untuk pengalaman pengguna yang optimal di semua perangkat.</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="/article/cara-membuat-website-responsive" class="btn btn-sm text-decoration-none" style="color: var(--primary-color);">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Article 2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm article-card">
                                <div class="position-relative">
                                    <img src="{{ asset('images/articles/article-1.jpg') }}" class="card-img-top" alt="Article 2" style="height: 200px; object-fit: cover;">
                                    <span class="badge position-absolute top-0 end-0 m-2" style="background-color: var(--primary-color);">Tips & Trik</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">5 Tips Meningkatkan Engagement di Media Sosial</h5>
                                    <p class="card-text text-muted small">20 April 2025 • 3 menit membaca</p>
                                    <p class="card-text">Pelajari strategi efektif untuk meningkatkan engagement di platform media sosial dan membangun komunitas online yang kuat.</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="/article/tips-meningkatkan-engagement" class="btn btn-sm text-decoration-none" style="color: var(--primary-color);">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Article 3 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm article-card">
                                <div class="position-relative">
                                    <img src="{{ asset('images/articles/article-1.jpg') }}" class="card-img-top" alt="Article 3" style="height: 200px; object-fit: cover;">
                                    <span class="badge position-absolute top-0 end-0 m-2" style="background-color: var(--primary-color);">Teknologi</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pengenalan AI dalam Pengembangan Web Modern</h5>
                                    <p class="card-text text-muted small">15 April 2025 • 6 menit membaca</p>
                                    <p class="card-text">Bagaimana kecerdasan buatan (AI) mengubah cara kita mengembangkan aplikasi web dan meningkatkan pengalaman pengguna.</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="/article/pengenalan-ai-web" class="btn btn-sm text-decoration-none" style="color: var(--primary-color);">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Article 4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm article-card">
                                <div class="position-relative">
                                    <img src="{{ asset('images/articles/article-1.jpg') }}" class="card-img-top" alt="Article 4" style="height: 200px; object-fit: cover;">
                                    <span class="badge position-absolute top-0 end-0 m-2" style="background-color: var(--primary-color);">Desain</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Prinsip UX/UI Design yang Harus Dikuasai Designer Pemula</h5>
                                    <p class="card-text text-muted small">10 April 2025 • 5 menit membaca</p>
                                    <p class="card-text">Pelajari prinsip-prinsip dasar desain pengalaman pengguna (UX) dan antarmuka pengguna (UI) untuk memulai karir di bidang desain.</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="/article/prinsip-ux-ui-design" class="btn btn-sm text-decoration-none" style="color: var(--primary-color);">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Article 5 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm article-card">
                                <div class="position-relative">
                                    <img src="{{ asset('images/articles/article-1.jpg') }}" class="card-img-top" alt="Article 5" style="height: 200px; object-fit: cover;">
                                    <span class="badge position-absolute top-0 end-0 m-2" style="background-color: var(--primary-color);">Tutorial</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Tutorial Lengkap Adobe Photoshop untuk Pemula</h5>
                                    <p class="card-text text-muted small">5 April 2025 • 7 menit membaca</p>
                                    <p class="card-text">Panduan langkah demi langkah untuk mempelajari dasar-dasar Adobe Photoshop, dari antarmuka hingga teknik editing foto dasar.</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="/article/tutorial-photoshop-pemula" class="btn btn-sm text-decoration-none" style="color: var(--primary-color);">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Article 6 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm article-card">
                                <div class="position-relative">
                                    <img src="{{ asset('images/articles/article-1.jpg') }}" class="card-img-top" alt="Article 6" style="height: 200px; object-fit: cover;">
                                    <span class="badge position-absolute top-0 end-0 m-2" style="background-color: var(--primary-color);">Tips & Trik</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">7 Cara Efektif Belajar Programming dari Nol</h5>
                                    <p class="card-text text-muted small">1 April 2025 • 4 menit membaca</p>
                                    <p class="card-text">Tips dan strategi untuk memulai perjalanan belajar programming dari awal, termasuk sumber daya dan alat yang direkomendasikan.</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="/article/cara-belajar-programming" class="btn btn-sm text-decoration-none" style="color: var(--primary-color);">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav class="mt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#" style="background-color: var(--primary-color); border-color: var(--primary-color);">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Tutorial Tab (placeholder) -->
                <div class="tab-pane fade" id="tutorial" role="tabpanel" aria-labelledby="tutorial-tab">
                    <div class="row g-4">
                        <!-- Tutorial artikel akan ditampilkan di sini -->
                        <div class="col-12 text-center py-5">
                            <p>Menampilkan artikel tutorial...</p>
                        </div>
                    </div>
                </div>

                <!-- Tips & Trik Tab (placeholder) -->
                <div class="tab-pane fade" id="tips-trick" role="tabpanel" aria-labelledby="tips-trick-tab">
                    <div class="row g-4">
                        <!-- Tips & Trik artikel akan ditampilkan di sini -->
                        <div class="col-12 text-center py-5">
                            <p>Menampilkan artikel tips & trik...</p>
                        </div>
                    </div>
                </div>

                <!-- Teknologi Tab (placeholder) -->
                <div class="tab-pane fade" id="teknologi" role="tabpanel" aria-labelledby="teknologi-tab">
                    <div class="row g-4">
                        <!-- Teknologi artikel akan ditampilkan di sini -->
                        <div class="col-12 text-center py-5">
                            <p>Menampilkan artikel teknologi...</p>
                        </div>
                    </div>
                </div>

                <!-- Desain Tab (placeholder) -->
                <div class="tab-pane fade" id="desain" role="tabpanel" aria-labelledby="desain-tab">
                    <div class="row g-4">
                        <!-- Desain artikel akan ditampilkan di sini -->
                        <div class="col-12 text-center py-5">
                            <p>Menampilkan artikel desain...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="py-5" style="background-color: var(--primary-color);">
        <div class="container">
            <div class="row justify-content-center text-center text-white">
                <div class="col-lg-6">
                    <h3 class="mb-4">Dapatkan Update Artikel Terbaru</h3>
                    <p class="mb-4">Berlangganan newsletter kami untuk mendapatkan informasi terbaru seputar teknologi, desain, dan tips berguna lainnya langsung ke email Anda.</p>
                    <form class="d-flex">
                        <input type="email" class="form-control me-2" placeholder="Alamat Email Anda" required>
                        <button type="submit" class="btn btn-light">Berlangganan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
<style>
    .nav-pills .nav-link {
        color: #333;
        border-radius: 30px;
    }

    .nav-pills .nav-link.active {
        background-color: var(--primary-color);
    }

    .article-card {
        transition: all 0.3s ease;
    }

    .article-card:hover {
        transform: translateY(-5px);
    }

    #article-header {
        position: relative;
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../images/bg-article.jpg');
        background-size: cover;
        background-position: center;
    }

    .featured-article-card {
        transition: all 0.3s ease;
    }

    .featured-article-card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection
