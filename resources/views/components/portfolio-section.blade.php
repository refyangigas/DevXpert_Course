<section id="portfolio-section" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">KARYA SISWA</h2>

        <div class="row g-4">
            <!-- Portfolio Item 1 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="portfolio-img position-relative overflow-hidden">
                        <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top" alt="Portfolio 1">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-info text-center p-3">
                                <h5>E-Commerce Website</h5>
                                <p class="text-white mb-0">Web Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">E-Commerce Fashion Website</h5>
                        <p class="card-text text-muted small">Karya: Budi Santoso | Web Design</p>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="portfolio-img position-relative overflow-hidden">
                        <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                            alt="Portfolio 2">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-info text-center p-3">
                                <h5>Branding Project</h5>
                                <p class="text-white mb-0">Desain Grafis</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Branding untuk Kafe Lokal</h5>
                        <p class="card-text text-muted small">Karya: Siti Nurhaliza | Desain Grafis</p>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="portfolio-img position-relative overflow-hidden">
                        <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                            alt="Portfolio 3">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="portfolio-info text-center p-3">
                                <h5>Mobile App UI Design</h5>
                                <p class="text-white mb-0">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Travel App UI Design</h5>
                        <p class="card-text text-muted small">Karya: Ahmad Rizky | UI/UX</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="/portfolio" class="btn btn-lg" style="background-color: var(--primary-color); color: white;">
                Lihat Semua Karya
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .portfolio-img {
        height: 220px;
    }

    .portfolio-img img {
        height: 100%;
        object-fit: cover;
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

    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-card {
        transition: all 0.3s ease;
    }

    .portfolio-card:hover {
        transform: translateY(-10px);
    }
</style>
