<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container  d-flex align-items-center justify-content-between">
        <a class="navbar-brand me-4" href="/">
            <img src="{{ asset('images/logo1.svg') }}" alt="Creative Media Logo" height="60">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Bidang Studi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
                        <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                        <li><a class="dropdown-item" href="#">Komputer Akuntansi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTraining" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Jasa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownTraining">
                        <li><a class="dropdown-item" href="#">IT & Multimedia</a></li>
                        <li><a class="dropdown-item" href="#">Branding & Design</a></li>
                        <li><a class="dropdown-item" href="#">Web Development</a></li>
                        <li><a class="dropdown-item" href="#">Mobile Apps Development</a></li>
                    </ul>
                </li>
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
