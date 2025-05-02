<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand me-4" href="/">
            <img src="{{ asset('images/logo1.svg') }}" alt="DevXpert Media Logo" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>

                @foreach ($navigationCategories as $category)
                    @if ($category->has_dropdown)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ $category->route ?? '#' }}"
                                id="navbarDropdown{{ $category->slug }}" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $category->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $category->slug }}">
                                @foreach ($category->items as $item)
                                    <li><a class="dropdown-item" href="{{ $item->route }}">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $category->route }}">{{ $category->name }}</a>
                        </li>
                    @endif
                @endforeach

                <li class="nav-item">
                    <a class="nav-link" href="/portfolio">Karya Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/testimonials">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cta-link" href="/contact">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
