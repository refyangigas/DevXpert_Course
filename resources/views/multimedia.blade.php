@extends('layouts.app')

@section('title', 'IT dan Multimedia')

@section('content')
    <!-- Header Section -->
    <section id="service-header" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-4">IT dan Multimedia</h1>
                    <p class="lead">Tingkatkan citra brand dan efisiensi bisnis Anda dengan layanan IT dan Multimedia kami
                        yang inovatif dan berkualitas tinggi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="service-process" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Proses Pengembangan Kami</h2>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-number">1</div>
                            <div class="timeline-content">
                                <h4>Konsultasi & Penemuan</h4>
                                <p>Kami mengawali dengan pemahaman mendalam tentang bisnis, target audiens, dan tujuan multimedia Anda.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">2</div>
                            <div class="timeline-content">
                                <h4>Strategi & Storyboarding</h4>
                                <p>Mengembangkan rencana kreatif dan struktur konten untuk memaksimalkan dampak visual dan pesan Anda.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">3</div>
                            <div class="timeline-content">
                                <h4>Produksi Konten</h4>
                                <p>Proses kreatif pembuatan aset multimedia dengan standar profesional menggunakan teknologi terkini.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">4</div>
                            <div class="timeline-content">
                                <h4>Pengembangan IT</h4>
                                <p>Implementasi solusi IT yang terintegrasi untuk mendukung kebutuhan multimedia dan operasional bisnis Anda.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">5</div>
                            <div class="timeline-content">
                                <h4>Review & Revisi</h4>
                                <p>Evaluasi menyeluruh dan penyempurnaan untuk memastikan hasil sesuai dengan visi dan standar kualitas.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">6</div>
                            <div class="timeline-content">
                                <h4>Implementasi & Dukungan</h4>
                                <p>Peluncuran solusi akhir dan layanan support berkelanjutan untuk memastikan semua berjalan optimal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="multimedia-services" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Layanan IT dan Multimedia Kami</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-camera-video-fill fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Video Production</h3>
                            <p class="card-text">Layanan produksi video profesional untuk konten marketing, company profile, tutorial, event, dan kebutuhan promosi lainnya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-brush-fill fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Desain Grafis</h3>
                            <p class="card-text">Jasa desain profesional untuk branding, marketing materials, sosial media, UI/UX, hingga kebutuhan cetak berkualitas tinggi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-display fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Animasi & Motion Graphics</h3>
                            <p class="card-text">Pembuatan animasi menarik dan motion graphics untuk menjelaskan produk, konsep, atau meningkatkan engagement konten Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-ear-fill fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Audio Production</h3>
                            <p class="card-text">Layanan rekaman dan editing audio untuk podcast, voice over, jingle iklan, dan kebutuhan audio lainnya dengan kualitas studio.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-hdd-network-fill fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Infrastruktur IT</h3>
                            <p class="card-text">Solusi infrastruktur IT terpadu termasuk jaringan, server, keamanan data, dan sistem penyimpanan untuk mendukung operasional bisnis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-phone-fill fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Aplikasi & Software Development</h3>
                            <p class="card-text">Pengembangan aplikasi mobile, desktop, dan software khusus untuk mengotomatisasi dan meningkatkan efisiensi proses bisnis Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="service-faq" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Pertanyaan Umum</h2>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    Berapa lama waktu yang dibutuhkan untuk menyelesaikan proyek multimedia?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Durasi proyek multimedia bervariasi tergantung pada kompleksitas dan jenis proyek. Video pendek atau desain sederhana bisa selesai dalam beberapa hari, sementara proyek yang lebih kompleks seperti company profile video atau sistem IT terintegrasi membutuhkan 2-8 minggu. Kami akan memberikan timeline yang jelas setelah konsultasi awal.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Bagaimana proses revisi untuk proyek multimedia?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Paket standar kami mencakup 2-3 ronde revisi untuk memastikan hasil akhir sesuai dengan ekspektasi Anda. Kami menggunakan sistem manajemen proyek yang memudahkan Anda memberikan feedback dan melacak progress. Revisi tambahan dapat disediakan dengan biaya yang disepakati.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Apakah DevXpert Media menyediakan layanan konsultasi IT?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, kami menawarkan layanan konsultasi IT untuk membantu bisnis Anda mengidentifikasi solusi terbaik untuk kebutuhan teknologi informasi. Konsultasi ini mencakup analisis infrastruktur yang ada, rekomendasi peningkatan, strategi digital, dan rencana implementasi.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Bagaimana dengan hak cipta untuk konten multimedia yang dibuat?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Setelah proyek selesai dan pembayaran penuh diterima, hak cipta atas konten multimedia yang dibuat akan menjadi milik klien. Kami menyediakan semua file sumber yang relevan dan dokumentasi yang diperlukan. Dalam beberapa kasus, kami mungkin meminta izin untuk menampilkan karya dalam portfolio kami.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Preview Section -->
    <section id="portfolio-preview" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Portfolio Pilihan</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="portfolio-item shadow-sm rounded overflow-hidden">
                        <img src="../images/portfolio/multimedia-1.jpg" class="img-fluid w-100" alt="Portfolio item">
                        <div class="p-3">
                            <h5 class="fw-bold">Company Profile PT Tekno Maju</h5>
                            <p class="mb-0 text-muted">Video Production, Motion Graphics</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item shadow-sm rounded overflow-hidden">
                        <img src="../images/portfolio/multimedia-2.jpg" class="img-fluid w-100" alt="Portfolio item">
                        <div class="p-3">
                            <h5 class="fw-bold">Redesign Sistem IT Bank BCD</h5>
                            <p class="mb-0 text-muted">IT Infrastructure, Network Security</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="portfolio-item shadow-sm rounded overflow-hidden">
                        <img src="../images/portfolio/multimedia-3.jpg" class="img-fluid w-100" alt="Portfolio item">
                        <div class="p-3">
                            <h5 class="fw-bold">Aplikasi Mobile Startup HealthTech</h5>
                            <p class="mb-0 text-muted">App Development, UI/UX Design</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="/portfolio" class="btn btn-outline-dark">Lihat Semua Portfolio</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="service-cta" class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Siap Meningkatkan Bisnis Anda dengan IT dan Multimedia?</h2>
            <p class="lead mb-4">Hubungi tim ahli kami untuk konsultasi gratis dan diskusikan bagaimana solusi IT dan Multimedia kami dapat membantu bisnis Anda.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="/contact" class="btn btn-lg"
                    style="background-color: var(--primary-color); color: white;">Hubungi Kami</a>
                <a href="/portfolio" class="btn btn-lg btn-outline-light">Lihat Portfolio</a>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        #service-header {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/bg-it-multimedia.jpg');
            background-size: cover;
            background-position: center;
            padding-top: 120px;
            padding-bottom: 80px;
        }

        .timeline {
            position: relative;
            padding: 0;
        }

        .timeline:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50px;
            width: 4px;
            background: var(--primary-color);
            z-index: 0;
        }

        .timeline-item {
            position: relative;
            padding-left: 120px;
            margin-bottom: 50px;
        }

        .timeline-number {
            position: absolute;
            left: 0;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            font-weight: bold;
            z-index: 1;
        }

        .timeline-content {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            display: inline-block;
            height: 70px;
            width: 70px;
            text-align: center;
            line-height: 70px;
            border-radius: 10px;
            background-color: rgba(var(--primary-color-rgb), 0.1);
        }

        .portfolio-item {
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
        }

        .portfolio-item img {
            transition: transform 0.5s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.05);
        }
    </style>
@endsection
