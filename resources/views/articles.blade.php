@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
    <!-- Header Section -->
    <section id="article-header" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-4">Artikel & Tips</h1>
                    <p class="lead">Kumpulan artikel, tutorial, dan tips seputar IT, desain, dan teknologi terkini dari tim
                        ahli Creative Media.</p>
                </div>
                <div class="col-md-4">
                    <!-- Search Bar -->
                    <div class="mt-4 mt-md-0">
                        <form action="{{ route('articles.search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari artikel..." name="search"
                                    value="{{ $search ?? '' }}">
                                <button class="btn" style="background-color: var(--primary-color); color: white;"
                                    type="submit">
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
    @if ($featured)
        <section id="featured-article" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="featured-article-card bg-dark text-white position-relative rounded-3 overflow-hidden">
                            <img src="{{ asset('storage/' . $featured->featured_image) }}" alt="{{ $featured->title }}"
                                class="w-100 opacity-50" style="height: 400px; object-fit: cover;">
                            <div class="featured-content position-absolute bottom-0 p-4 p-md-5 w-100">
                                <span class="badge" style="background-color: var(--primary-color);">
                                    {{ $featured->category ? $featured->category->name : 'TERBARU' }}
                                </span>
                                <h2 class="mt-2 mb-3">{{ $featured->title }}</h2>
                                <p class="mb-3 d-none d-md-block">{{ $featured->excerpt }}</p>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $featured->author_image) }}"
                                        alt="{{ $featured->author_name }}" class="rounded-circle me-2" width="40">
                                    <div>
                                        <p class="mb-0 small">Oleh: {{ $featured->author_name }}</p>
                                        <p class="mb-0 small text-light">{{ $featured->published_at->format('d F Y') }} •
                                            {{ $featured->reading_time }} menit membaca</p>
                                    </div>
                                </div>
                                <a href="{{ route('articles.show', $featured->slug) }}" class="btn mt-3"
                                    style="background-color: var(--primary-color); color: white;">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Category Tabs -->
    <section id="article-categories" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">
                @if (isset($search))
                    Hasil Pencarian: "{{ $search }}"
                @elseif(isset($currentCategory))
                    Kategori: {{ $currentCategory->name }}
                @elseif(isset($currentTag))
                    Tag: {{ $currentTag->name }}
                @else
                    Kategori Artikel
                @endif
            </h2>

            <ul class="nav nav-pills justify-content-center mb-5" id="articleTabs" role="tablist">
                <li class="nav-item mx-1" role="presentation">
                    <a class="nav-link {{ !isset($currentCategory) && !isset($currentTag) && !isset($search) ? 'active' : '' }} px-4"
                        href="{{ route('articles.index') }}">Semua</a>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-item mx-1" role="presentation">
                        <a class="nav-link {{ isset($currentCategory) && $currentCategory->id === $category->id ? 'active' : '' }} px-4"
                            href="{{ route('articles.category', $category->slug) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content" id="articleTabsContent">
                <div class="tab-pane fade show active" id="semua" role="tabpanel">
                    @if ($articles->count() > 0)
                        <div class="row g-4">
                            @foreach ($articles as $article)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card h-100 border-0 shadow-sm article-card">
                                        <div class="position-relative">
                                            <img src="{{ asset('storage/' . $article->featured_image) }}"
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
                                                {{ $article->reading_time }} menit membaca</p>
                                            <p class="card-text">{{ $article->excerpt }}</p>
                                        </div>
                                        <div class="card-footer bg-white border-0">
                                            <a href="{{ route('articles.show', $article->slug) }}"
                                                class="btn btn-sm text-decoration-none"
                                                style="color: var(--primary-color);">
                                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-5">
                            {{ $articles->links() }}
                        </div>
                    @else
                        <div class="text-center py-5">
                            <p>Belum ada artikel yang tersedia.</p>
                        </div>
                    @endif
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
            color: white;
        }

        .article-card {
            transition: all 0.3s ease;
        }

        .article-card:hover {
            transform: translateY(-5px);
        }

        #article-header {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/bg-article.jpg');
            background-size: cover;
            background-position: center;
        }

        .featured-article-card {
            transition: all 0.3s ease;
        }

        .featured-article-card:hover {
            transform: translateY(-5px);
        }

        .pagination {
            justify-content: center;
        }

        .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .page-link {
            color: var(--primary-color);
        }
    </style>
@endsection
