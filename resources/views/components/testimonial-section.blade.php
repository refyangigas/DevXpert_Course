<section id="testimonial-section" class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center mb-5">TESTIMONI</h2>

        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h3 class="display-5 fw-bold">
                    Dengarkan<br>
                    langsung dari<br>
                    <span class="text-white">SISWA</span><br>
                    dan<br>
                    <span class="text-white">KLIEN</span><br>
                    kami yang<br>
                    <span class="text-white">PUAS</span>
                </h3>
            </div>
            <div class="col-lg-7">
                <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @forelse($homeTestimonials as $index => $testimonial)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <div class="testimonial-card p-4 bg-dark border border-2"
                                    style="border-color: var(--primary-color) !important;">
                                    <div class="row">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="testimonial-image text-center">
                                                @if($testimonial->image ?? null)
                                                    <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                        alt="{{ $testimonial->name }}" class="rounded-circle" width="100">
                                                @else
                                                    <img src="{{ asset('images/testimonials/testimonial-1.jpg') }}"
                                                        alt="{{ $testimonial->name ?? 'Default' }}" class="rounded-circle" width="100">
                                                @endif
                                                <h5 class="mt-3 mb-0" style="color: var(--primary-color);">{{ $testimonial->name ?? 'Sample Name' }}</h5>
                                                <p class="small">{{ $testimonial->position ?? 'Sample Position' }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="testimonial-content">
                                                <div class="testimonial-rating mb-3">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @php
                                                            $rating = $testimonial->rating ?? 5;
                                                        @endphp
                                                        <i class="fas fa-{{ $i <= $rating ? 'star' : ($i - 0.5 <= $rating ? 'star-half-alt' : 'star') }}" style="color: #FFD700;"></i>
                                                    @endfor
                                                </div>
                                                <p class="fst-italic">"{{ $testimonial->content ?? 'Belum ada testimonial saat ini. Silahkan tambahkan testimonial melalui panel admin.' }}"</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="carousel-item active">
                                <div class="testimonial-card p-4 bg-dark border border-2"
                                    style="border-color: var(--primary-color) !important;">
                                    <div class="row">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="testimonial-image text-center">
                                                <img src="{{ asset('images/testimonials/testimonial-1.jpg') }}"
                                                    alt="Default" class="rounded-circle" width="100">
                                                <h5 class="mt-3 mb-0" style="color: var(--primary-color);">Sample Name</h5>
                                                <p class="small">Sample Position</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="testimonial-content">
                                                <div class="testimonial-rating mb-3">
                                                    <i class="fas fa-star" style="color: #FFD700;"></i>
                                                    <i class="fas fa-star" style="color: #FFD700;"></i>
                                                    <i class="fas fa-star" style="color: #FFD700;"></i>
                                                    <i class="fas fa-star" style="color: #FFD700;"></i>
                                                    <i class="fas fa-star" style="color: #FFD700;"></i>
                                                </div>
                                                <p class="fst-italic">"Belum ada testimonial saat ini. Silahkan tambahkan testimonial melalui panel admin."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <!-- Controls -->
                    <div class="text-center mt-4">
                        <button class="btn btn-sm rounded-circle me-2"
                            style="background-color: var(--primary-color); width: 40px; height: 40px;" type="button"
                            data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                            <i class="fas fa-chevron-left text-white"></i>
                        </button>
                        <button class="btn btn-sm rounded-circle"
                            style="background-color: var(--primary-color); width: 40px; height: 40px;" type="button"
                            data-bs-target="#testimonial-carousel" data-bs-slide="next">
                            <i class="fas fa-chevron-right text-white"></i>
                        </button>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <a href="/testimonials" class="btn btn-lg"
                        style="background-color: var(--primary-color); color: white;">
                        Lihat Semua Testimonial
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
