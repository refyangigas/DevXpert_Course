<section id="article-section" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">ARTIKEL TERBARU</h2>

        <div class="row g-4">
            @php
                // Use $latestArticles from controller if exists, otherwise fetch from database
                if (!isset($latestArticles)) {
                    $latestArticles = App\Models\Article::with('category')
                        ->published()
                        ->latest('published_at')
                        ->take(3)
                        ->get();
                }
            @endphp

            @forelse($latestArticles as $article)
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm article-card">
                        <div class="position-relative">
                            <img src="{{ $article->featured_image && Storage::disk('public')->exists($article->featured_image)
                                ? asset('storage/' . $article->featured_image)
                                : asset('images/placeholder.jpg') }}"
                                class="card-img-top" alt="{{ $article->title }}"
                                style="height: 200px; object-fit: cover;">
                            <span class="badge position-absolute top-0 end-0 m-2"
                                style="background-color: var(--primary-color);">
                                {{ $article->category ? $article->category->name : 'Artikel' }}
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text text-muted small">
                                {{ $article->published_at->format('d F Y') }} •
                                {{ $article->reading_time }} menit membaca
                            </p>
                            <p class="card-text">{{ $article->excerpt }}</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="{{ route('articles.show', $article->slug) }}"
                                class="btn btn-sm text-decoration-none" style="color: var(--primary-color);">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Belum ada artikel yang tersedia.</p>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('articles.index') }}" class="btn btn-lg"
                style="background-color: var(--primary-color); color: white;">
                Lihat Semua Artikel
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
