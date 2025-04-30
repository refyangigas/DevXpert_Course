@extends('layouts.app')

@section('title', '10 Tren Desain Web Terbaru yang Harus Anda Ketahui di 2025')

@section('content')
    <!-- Article Header -->
    <header id="article-detail-header" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="/articles" class="text-white">Artikel</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">10 Tren Desain Web</li>
                        </ol>
                    </nav>

                    <span class="badge mb-2" style="background-color: var(--primary-color);">DESAIN</span>
                    <h1 class="display-5 fw-bold mb-3">10 Tren Desain Web Terbaru yang Harus Anda Ketahui di 2025</h1>

                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('images/author.jpg') }}" alt="Author" class="rounded-circle me-3" width="50">
                        <div>
                            <h6 class="mb-0">Admin</h6>
                            <div class="d-flex align-items-center">
                                <small class="me-3">28 April 2025</small>
                                <small><i class="far fa-clock me-1"></i> 5 menit membaca</small>
                            </div>
                        </div>
                    </div>

                    <!-- Social Share -->
                    <div class="d-flex align-items-center">
                        <span class="me-3">Bagikan:</span>
                        <a href="#" class="me-2 text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-2 text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-2 text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="me-2 text-white"><i class="fab fa-whatsapp"></i></a>
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
                    <img src="{{ asset('images/articles/featured.jpg') }}" alt="Featured Image" class="img-fluid rounded mb-4 w-100" style="max-height: 500px; object-fit: cover;">

                    <!-- Article Text -->
                    <div class="article-text">
                        <p class="lead">Dunia desain web terus berkembang dengan cepat. Setiap tahun, tren baru muncul yang mengubah cara website dirancang dan bagaimana pengguna berinteraksi dengan mereka. Artikel ini akan membahas 10 tren desain web terbaru yang sedang populer di tahun 2025.</p>

                        <h2 class="mt-5 mb-3">1. Desain 3D yang Imersif</h2>
                        <p>Berkat peningkatan kemampuan browser dan koneksi internet yang lebih cepat, elemen 3D yang imersif semakin banyak digunakan dalam desain web. Desainer sekarang dapat menciptakan pengalaman yang lebih mendalam dan menarik dengan objek 3D yang dapat diputar, digeser, dan bahkan berinteraksi dengan pengguna.</p>
                        <p>Tren ini memungkinkan brand untuk menampilkan produk mereka dengan cara yang lebih dinamis dan interaktif, memberikan pengguna pengalaman yang lebih mendekati dunia nyata sebelum mereka memutuskan untuk membeli.</p>

                        <h2 class="mt-5 mb-3">2. Micro-interactions yang Lebih Canggih</h2>
                        <p>Micro-interactions telah menjadi standar dalam desain web modern, tetapi di tahun 2025, mereka menjadi lebih canggih dan bermakna. Umpan balik visual kecil seperti animasi saat mengarahkan kursor, efek hover yang halus, dan transisi yang mulus menciptakan pengalaman yang lebih menyenangkan dan intuitif.</p>
                        <p>Desainer semakin fokus pada detail-detail kecil yang menambah personality pada website dan membuat navigasi lebih mudah dimengerti dan diingat oleh pengguna.</p>

                        <h2 class="mt-5 mb-3">3. Dark Mode Sebagai Pilihan Default</h2>
                        <p>Dark mode terus mendapatkan popularitas dan sekarang sering menjadi pilihan default untuk banyak website. Selain memberikan estetika yang elegan dan modern, dark mode juga memiliki manfaat praktis seperti mengurangi ketegangan mata dan menghemat baterai pada perangkat dengan layar OLED.</p>
                        <p>Banyak website sekarang menawarkan toggle switching yang mudah antara light dan dark mode, memberi pengguna kontrol atas pengalaman visual mereka.</p>

                        <div class="my-5 p-4 bg-light rounded">
                            <blockquote class="mb-0">
                                <p class="fst-italic">"Desain yang baik bukan hanya tentang tampilan, tetapi juga tentang bagaimana ia berfungsi. Tren terbaru menunjukkan pergeseran menuju pengalaman yang lebih personal dan immersif."</p>
                                <footer class="blockquote-footer mt-2">John Smith, <cite title="Source Title">UX Designer Senior</cite></footer>
                            </blockquote>
                        </div>

                        <h2 class="mt-5 mb-3">4. Glassmorphism dan Efek Blur</h2>
                        <p>Glassmorphism, dengan efek transparan seperti kaca yang blur, terus berkembang sejak popularitasnya dimulai beberapa tahun lalu. Di 2025, teknik ini telah matang dengan implementasi yang lebih halus dan praktis.</p>
                        <p>Elemen dengan efek kaca ini menciptakan kedalaman dan hirearki visual yang menarik, sambil tetap menjaga fungsionalitas dan kejelasan tampilan. Glassmorphism sering digunakan untuk card, modal, dan komponen UI lainnya untuk memberikan kesan modern dan elegan.</p>

                        <h2 class="mt-5 mb-3">5. Desain yang Dipersonalisasi dengan AI</h2>
                        <p>Kecerdasan buatan (AI) telah mengubah cara website merespon pengguna individu. Di 2025, banyak website menggunakan AI untuk menganalisis perilaku pengguna dan menyesuaikan tata letak, konten, dan bahkan elemen visual berdasarkan preferensi individu.</p>
                        <p>Dari rekomendasi konten yang dipersonalisasi hingga perubahan dinamis pada UI berdasarkan pola penggunaan, AI memungkinkan pengalaman web yang benar-benar disesuaikan untuk setiap pengunjung.</p>

                        <h2 class="mt-5 mb-3">6. Scrollytelling yang Imersif</h2>
                        <p>Storytelling melalui scrolling (scrollytelling) telah menjadi cara populer untuk menyajikan konten naratif online. Teknik ini menggabungkan animasi, perubahan visual, dan transisi yang dipicu oleh scrolling untuk menciptakan pengalaman bercerita yang imersif.</p>
                        <p>Di 2025, scrollytelling telah menjadi lebih canggih dengan penambahan elemen interaktif, paralaks yang lebih halus, dan integrasi konten multimedia yang mulus, menjadikannya alat yang kuat untuk brand storytelling dan konten edukatif.</p>

                        <h2 class="mt-5 mb-3">7. Tipografi Ekspresif dan Variabel</h2>
                        <p>Tipografi terus menjadi elemen penting dalam desain web, dengan font variabel yang memberikan fleksibilitas dan kreativitas yang lebih besar. Font variabel memungkinkan satu file font untuk mencakup berbagai variasi berat, lebar, dan gaya, menghasilkan loading yang lebih cepat dan lebih banyak pilihan desain.</p>
                        <p>Penggunaan tipografi ekspresif dan kreatif, sering dikombinasikan dengan animasi teks yang halus, membantu membangun personality merek dan menciptakan hirarki konten yang jelas.</p>

                        <h2 class="mt-5 mb-3">8. Desain Berbasis Gesture</h2>
                        <p>Seiring dengan meningkatnya penggunaan perangkat mobile dan tablet, desain berbasis gesture semakin menjadi standar. Website modern kini mengadopsi interaksi yang lebih intuitif seperti swipe, pinch, dan tap yang umum digunakan di aplikasi mobile.</p>
                        <p>Gerakan-gerakan ini tidak hanya membuat navigasi lebih alami tetapi juga memungkinkan pengalaman yang lebih kaya dan interaktif, terutama untuk aplikasi web dan e-commerce.</p>

                        <h2 class="mt-5 mb-3">9. Minimalist Navigation</h2>
                        <p>Navigasi minimalis terus mendominasi trend desain web, dengan fokus pada kesederhanaan dan kejelasan. Menu hamburger, navigasi tersembunyi, dan struktur menu yang disederhanakan membantu mengurangi kekacauan visual dan meningkatkan fokus pada konten.</p>
                        <p>Pendekatan ini tidak hanya menciptakan tampilan yang lebih bersih tetapi juga meningkatkan kecepatan loading dan pengalaman user secara keseluruhan, terutama pada perangkat mobile.</p>

                        <h2 class="mt-5 mb-3">10. Sustainability dalam Desain Web</h2>
                        <p>Kesadaran lingkungan telah merambah ke desain web, dengan lebih banyak designer dan developer yang fokus pada "green web design". Prinsip ini meliputi optimasi file untuk mengurangi konsumsi daya, mengurangi penggunaan video dan animasi berat yang tidak perlu, dan menggunakan warna yang membutuhkan lebih sedikit energi pada layar OLED.</p>
                        <p>Sustainability dalam desain web tidak hanya baik untuk lingkungan tetapi juga meningkatkan kecepatan website dan pengalaman pengguna secara keseluruhan.</p>

                        <h2 class="mt-5 mb-3">Kesimpulan</h2>
                        <p>Tren desain web terus berkembang dengan penekanan pada pengalaman yang lebih personal, interaktif, dan imersif. Di 2025, kita melihat desainer web menggabungkan teknologi terbaru dengan prinsip desain yang solid untuk menciptakan website yang tidak hanya indah secara visual tetapi juga fungsional dan ramah pengguna.</p>
                        <p>Dengan mengikuti tren-tren ini, desainer dan developer dapat memastikan bahwa website mereka tetap relevan, menarik, dan efektif dalam dunia digital yang terus berubah.</p>

                        <!-- Tags -->
                        <div class="mt-5 pt-4 border-top">
                            <div class="d-flex align-items-center">
                                <span class="me-3">Tags:</span>
                                <a href="#" class="badge bg-light text-dark me-2 p-2">Web Design</a>
                                <a href="#" class="badge bg-light text-dark me-2 p-2">UI/UX</a>
                                <a href="#" class="badge bg-light text-dark me-2 p-2">Trends</a>
                                <a href="#" class="badge bg-light text-dark me-2 p-2">2025</a>
                            </div>
                        </div>
                    </div>

                    <!-- Author Box -->
                    <div class="author-box d-flex p-4 my-5 bg-light rounded">
                        <div class="author-avatar me-3">
                            <img src="{{ asset('images/author.jpg') }}" alt="Author" class="rounded-circle" width="100">
                        </div>
                        <div class="author-info">
                            <h5 class="mb-1">Admin</h5>
                            <p class="text-muted mb-2">Web Designer & Content Creator</p>
                            <p class="mb-0">Content writer di Creative Media dengan pengalaman lebih dari 5 tahun di bidang web design dan digital marketing.</p>
                            <div class="mt-2">
                                <a href="#" class="me-2" style="color: var(--primary-color);"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="me-2" style="color: var(--primary-color);"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="me-2" style="color: var(--primary-color);"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Related Articles -->
                    <div class="related-articles mt-5 pt-5 border-top">
                        <h3 class="mb-4">Artikel Terkait</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <img src="{{ asset('images/articles/article-1.jpg') }}" class="card-img-top" alt="Related Article 1" style="height: 180px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">Cara Membuat Website Responsive dengan Bootstrap 5</h5>
                                        <p class="card-text small text-muted">25 April 2025</p>
                                        <a href="#" class="stretched-link" style="color: var(--primary-color);"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <img src="{{ asset('images/articles/article-4.jpg') }}" class="card-img-top" alt="Related Article 2" style="height: 180px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">Prinsip UX/UI Design yang Harus Dikuasai Designer Pemula</h5>
                                        <p class="card-text small text-muted">10 April 2025</p>
                                        <a href="#" class="stretched-link" style="color: var(--primary-color);"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="comments-section mt-5 pt-5 border-top">
                        <h3 class="mb-4">Komentar (3)</h3>

                        <!-- Comment 1 -->
                        <div class="comment d-flex mb-4">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{ asset('images/testimonials/user-1.jpg') }}" alt="Commenter 1" class="rounded-circle" width="60">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Dewi Anggraini</h5>
                                <p class="text-muted small mb-2">28 April 2025, 14:30</p>
                                <p>Artikel yang sangat informatif! Saya baru saja mulai belajar web design dan ini sangat membantu untuk memahami tren terkini. Terima kasih telah berbagi.</p>
                                <button class="btn btn-sm" style="color: var(--primary-color);">Balas</button>
                            </div>
                        </div>

                        <!-- Comment 2 -->
                        <div class="comment d-flex mb-4">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{ asset('images/testimonials/user-2.jpg') }}" alt="Commenter 2" class="rounded-circle" width="60">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Hendra Wijaya</h5>
                                <p class="text-muted small mb-2">28 April 2025, 15:45</p>
                                <p>Saya sudah menerapkan beberapa tren ini di project saya dan hasilnya sangat bagus! Glassmorphism dan desain 3D memang sangat menarik perhatian klien.</p>
                                <button class="btn btn-sm" style="color: var(--primary-color);">Balas</button>

                                <!-- Reply to Comment 2 -->
                                <div class="comment-reply d-flex mt-3 ps-4">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="{{ asset('images/author.jpg') }}" alt="Author Reply" class="rounded-circle" width="50">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1">Admin</h5>
                                        <p class="text-muted small mb-2">28 April 2025, 16:20</p>
                                        <p>Terima kasih atas feedbacknya, Hendra! Senang mendengar Anda berhasil menerapkannya dengan baik. Jangan ragu untuk berbagi portfolio Anda di forum kami.</p>
                                        <button class="btn btn-sm" style="color: var(--primary-color);">Balas</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment 3 -->
                        <div class="comment d-flex mb-4">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{ asset('images/testimonials/user-3.jpg') }}" alt="Commenter 3" class="rounded-circle" width="60">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Siti Fatimah</h5>
                                <p class="text-muted small mb-2">29 April 2025, 09:10</p>
                                <p>Apakah ada rekomendasi tools terbaik untuk membuat efek glassmorphism dan 3D? Saya ingin mencobanya tapi masih bingung harus mulai dari mana. Terima kasih!</p>
                                <button class="btn btn-sm" style="color: var(--primary-color);">Balas</button>
                            </div>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form mt-5">
                            <h4 class="mb-4">Tinggalkan Komentar</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="Nama Anda" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" placeholder="Email Anda" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="5" placeholder="Komentar Anda" required></textarea>
                                </div>
                                <button type="submit" class="btn" style="background-color: var(--primary-color); color: white;">Kirim Komentar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="sidebar-sticky">
                        <!-- Search Widget -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Cari Artikel</h5>
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Kata kunci...">
                                        <button class="btn" type="button" style="background-color: var(--primary-color); color: white;">
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
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <a href="#" class="text-decoration-none text-dark">Tutorial</a>
                                        <span class="badge rounded-pill" style="background-color: var(--primary-color);">12</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <a href="#" class="text-decoration-none text-dark">Tips & Trik</a>
                                        <span class="badge rounded-pill" style="background-color: var(--primary-color);">8</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <a href="#" class="text-decoration-none text-dark">Teknologi</a>
                                        <span class="badge rounded-pill" style="background-color: var(--primary-color);">6</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <a href="#" class="text-decoration-none text-dark">Desain</a>
                                        <span class="badge rounded-pill" style="background-color: var(--primary-color);">9</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <a href="#" class="text-decoration-none text-dark">Berita</a>
                                        <span class="badge rounded-pill" style="background-color: var(--primary-color);">4</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Popular Posts Widget -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Artikel Populer</h5>

                                <!-- Popular Post 1 -->
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('images/articles/article-2.jpg') }}" alt="Popular Post 1" class="rounded" width="70" height="70" style="object-fit: cover;">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1"><a href="#" class="text-decoration-none text-dark">5 Tips Meningkatkan Engagement di Media Sosial</a></h6>
                                        <small class="text-muted">20 April 2025</small>
                                    </div>
                                </div>

                                <!-- Popular Post 2 -->
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('images/articles/article-3.jpg') }}" alt="Popular Post 2" class="rounded" width="70" height="70" style="object-fit: cover;">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1"><a href="#" class="text-decoration-none text-dark">Pengenalan AI dalam Pengembangan Web Modern</a></h6>
                                        <small class="text-muted">15 April 2025</small>
                                    </div>
                                </div>

                                <!-- Popular Post 3 -->
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('images/articles/article-5.jpg') }}" alt="Popular Post 3" class="rounded" width="70" height="70" style="object-fit: cover;">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1"><a href="#" class="text-decoration-none text-dark">Tutorial Lengkap Adobe Photoshop untuk Pemula</a></h6>
                                        <small class="text-muted">5 April 2025</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Tags</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="#" class="badge bg-light text-dark p-2">Web Design</a>
                                    <a href="#" class="badge bg-light text-dark p-2">UI/UX</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Programming</a>
                                    <a href="#" class="badge bg-light text-dark p-2">HTML</a>
                                    <a href="#" class="badge bg-light text-dark p-2">CSS</a>
                                    <a href="#" class="badge bg-light text-dark p-2">JavaScript</a>
                                    <a href="#" class="badge bg-light text-dark p-2">PHP</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Laravel</a>
                                    <a href="#" class="badge bg-light text-dark p-2">WordPress</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Marketing</a>
                                    <a href="#" class="badge bg-light text-dark p-2">SEO</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Mobile</a>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Widget -->
                        <div class="card border-0 shadow-sm text-white" style="background-color: var(--primary-color);">
                            <div class="card-body p-4 text-center">
                                <h5 class="card-title mb-3">Tertarik Belajar Web Design?</h5>
                                <p>Daftar kursus kami dan dapatkan diskon 20% untuk pendaftaran bulan ini!</p>
                                <a href="/register" class="btn btn-light">Daftar Sekarang</a>
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
        background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('../images/bg-article-detail.jpg');
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

    .comment-reply {
        border-left: 3px solid var(--primary-color);
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.5);
    }
</style>
@endsection
