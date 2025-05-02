<section id="portfolio-section" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">KARYA SISWA</h2>

        <div class="row g-4">
            @if (isset($featuredPortfolios) && $featuredPortfolios->count() > 0)
                @foreach ($featuredPortfolios as $portfolio)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm portfolio-card">
                            <div class="portfolio-img position-relative overflow-hidden">
                                <img src="{{ asset('storage/' . $portfolio->image) }}" class="card-img-top"
                                    alt="{{ $portfolio->title }}">
                                <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                    <div class="portfolio-info text-center p-3">
                                        <h5>{{ $portfolio->title }}</h5>
                                        <p class="text-white mb-0">{{ $portfolio->category_name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $portfolio->title }}</h5>
                                <p class="card-text text-muted small">Karya: {{ $portfolio->student_name }} |
                                    {{ $portfolio->category_name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Portfolio Item 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm portfolio-card">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="{{ asset('images/portfolio/portfolio-1.jpg') }}" class="card-img-top"
                                alt="Portfolio 1">
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
            @endif
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('portfolio') }}" class="btn btn-lg"
                style="background-color: var(--primary-color); color: white;">
                Lihat Semua Karya
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
