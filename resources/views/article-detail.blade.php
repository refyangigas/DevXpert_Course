@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <!-- Article Header -->
    <header id="article-detail-header" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('articles.index') }}"
                                    class="text-white">Artikel</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                {{ Str::limit($article->title, 30) }}</li>
                        </ol>
                    </nav>

                    @if ($article->category)
                        <span class="badge mb-2"
                            style="background-color: var(--primary-color);">{{ $article->category->name }}</span>
                    @endif
                    <h1 class="display-5 fw-bold mb-3">{{ $article->title }}</h1>

                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('storage/' . $article->author_image) }}" alt="{{ $article->author_name }}"
                            class="rounded-circle" width="100">
                        <div>
                            <h6 class="mb-0">{{ $article->author_name }}</h6>
                            <div class="d-flex align-items-center">
                                <small class="me-3">{{ $article->published_at->format('d F Y') }}</small>
                                <small><i class="far fa-clock me-1"></i> {{ $article->reading_time }} menit membaca</small>
                            </div>
                        </div>
                    </div>

                    <!-- Social Share -->
                    <div class="d-flex align-items-center">
                        <span class="me-3">Bagikan:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                            target="_blank" class="me-2 text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}"
                            target="_blank" class="me-2 text-white"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                            target="_blank" class="me-2 text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . url()->current()) }}"
                            target="_blank" class="me-2 text-white"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Article Content -->
    <section id="article-content" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Featured Image -->
                    <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}"
                        class="img-fluid rounded mb-4 w-100" style="max-height: 500px; object-fit: cover;">


                    <!-- Article Text -->
                    <div class="article-text">
                        @if ($article->excerpt)
                            <p class="lead">{{ $article->excerpt }}</p>
                        @endif

                        {!! $article->content !!}

                        <!-- Tags -->
                        @if ($article->tags->count() > 0)
                            <div class="mt-5 pt-4 border-top">
                                <div class="d-flex align-items-center">
                                    <span class="me-3">Tags:</span>
                                    @foreach ($article->tags as $tag)
                                        <a href="{{ route('articles.tag', $tag->slug) }}"
                                            class="badge bg-light text-dark me-2 p-2">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Author Box -->
                    <div class="author-box d-flex p-4 my-5 bg-light rounded">
                        <div class="author-avatar me-3">
                            <img src="{{ asset('storage/' . $article->author_image) }}" alt="{{ $article->author_name }}"
                                class="rounded-circle me-3" width="50">
                        </div>
                        <div class="author-info">
                            <h5 class="mb-1">{{ $article->author_name }}</h5>
                            <p class="text-muted mb-2">{{ $article->author_title }}</p>
                            <p class="mb-0">Content writer di Creative Media dengan pengalaman lebih dari 5 tahun di
                                bidang web design dan digital marketing.</p>
                            <div class="mt-2">
                                <a href="#" class="me-2" style="color: var(--primary-color);"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#" class="me-2" style="color: var(--primary-color);"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="me-2" style="color: var(--primary-color);"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Related Articles -->
                    @if ($relatedArticles->count() > 0)
                        <div class="related-articles mt-5 pt-5 border-top">
                            <h3 class="mb-4">Artikel Terkait</h3>
                            <div class="row g-4">
                                @foreach ($relatedArticles as $relatedArticle)
                                    <div class="col-md-6">
                                        <div class="card h-100 border-0 shadow-sm">
                                            <img src="{{ asset('storage/' . $relatedArticle->featured_image) }}"
                                                class="card-img-top" alt="{{ $relatedArticle->title }}"
                                                style="height: 180px; object-fit: cover;">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $relatedArticle->title }}</h5>
                                                <p class="card-text small text-muted">
                                                    {{ $relatedArticle->published_at->format('d F Y') }}</p>
                                                <a href="{{ route('articles.show', $relatedArticle->slug) }}"
                                                    class="stretched-link" style="color: var(--primary-color);"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="sidebar-sticky">
                        <!-- Search Widget -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Cari Artikel</h5>
                                <form action="{{ route('articles.search') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search"
                                            placeholder="Kata kunci...">
                                        <button class="btn" type="submit"
                                            style="background-color: var(--primary-color); color: white;">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Kategori</h5>
                                <ul class="list-group list-group-flush">
                                    @foreach ($categories as $category)
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <a href="{{ route('articles.category', $category->slug) }}"
                                                class="text-decoration-none text-dark">{{ $category->name }}</a>
                                            <span class="badge rounded-pill"
                                                style="background-color: var(--primary-color);">{{ $category->article_count }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Popular Posts Widget -->
                        @if ($popularArticles->count() > 0)
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Artikel Populer</h5>

                                    @foreach ($popularArticles as $popularArticle)
                                        <!-- Popular Post -->
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('storage/' . $popularArticle->featured_image) }}"
                                                    alt="{{ $popularArticle->title }}" class="rounded" width="70"
                                                    height="70" style="object-fit: cover;">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1"><a
                                                        href="{{ route('articles.show', $popularArticle->slug) }}"
                                                        class="text-decoration-none text-dark">{{ $popularArticle->title }}</a>
                                                </h6>
                                                <small
                                                    class="text-muted">{{ $popularArticle->published_at->format('d F Y') }}</small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Tags Widget -->
                        @if ($tags->count() > 0)
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Tags</h5>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($tags as $tag)
                                            <a href="{{ route('articles.tag', $tag->slug) }}"
                                                class="badge bg-light text-dark p-2">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- CTA Widget -->
                        <div class="card border-0 shadow-sm text-white" style="background-color: var(--primary-color);">
                            <div class="card-body p-4 text-center">
                                <h5 class="card-title mb-3">Tertarik Belajar Web Design?</h5>
                                <p>Daftar kursus kami dan dapatkan diskon 20% untuk pendaftaran bulan ini!</p>
                                <a href="/contact" class="btn btn-light">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .sidebar-sticky {
            position: sticky;
            top: 100px;
        }

        #article-detail-header {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('../images/bg-article-detail.jpg');
            background-size: cover;
            background-position: center;
        }

        .article-text h2 {
            color: var(--dark-color);
            font-weight: 600;
        }

        .article-text p {
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(255, 255, 255, 0.5);
        }
    </style>
@endsection
