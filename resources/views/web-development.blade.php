```blade
@extends('layouts.app')

@section('title', 'Web Development')

@section('content')
    <!-- Header Section -->
    <section id="service-header" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-4">Web Development</h1>
                    <p class="lead">Kembangkan kehadiran online profesional Anda dengan layanan pengembangan website kami
                        yang komprehensif dan modern.</p>
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
                                <h4>Konsultasi & Analisis Kebutuhan</h4>
                                <p>Kami memulai dengan memahami tujuan bisnis, target audiens, dan kebutuhan fungsional
                                    website Anda.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">2</div>
                            <div class="timeline-content">
                                <h4>Perencanaan & Wireframing</h4>
                                <p>Pengembangan sitemap dan wireframes untuk merencanakan struktur dan alur pengguna yang
                                    optimal.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">3</div>
                            <div class="timeline-content">
                                <h4>Desain UI/UX</h4>
                                <p>Menciptakan tampilan visual yang menarik dan pengalaman pengguna yang intuitif.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">4</div>
                            <div class="timeline-content">
                                <h4>Development</h4>
                                <p>Pengembangan front-end dan back-end dengan kode yang bersih dan efisien menggunakan
                                    teknologi modern.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">5</div>
                            <div class="timeline-content">
                                <h4>Testing & Quality Assurance</h4>
                                <p>Pengujian menyeluruh untuk memastikan fungsionalitas, kompatibilitas, responsif, dan
                                    keamanan website.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">6</div>
                            <div class="timeline-content">
                                <h4>Peluncuran & Pemeliharaan</h4>
                                <p>Deployment website dan layanan dukungan berkelanjutan untuk memastikan kinerja optimal.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="service-faq" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Pertanyaan Umum</h2>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    Berapa lama waktu yang dibutuhkan untuk mengembangkan website?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Waktu pengembangan website bervariasi tergantung pada kompleksitas proyek. Website
                                    sederhana biasanya membutuhkan waktu 2-4 minggu, sementara website yang lebih kompleks
                                    dengan fitur custom dapat membutuhkan 2-3 bulan. Kami akan memberikan estimasi waktu
                                    yang akurat setelah konsultasi awal.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Apakah saya bisa mengupdate konten website sendiri?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, kami mengembangkan website dengan CMS (Content Management System) yang memudahkan
                                    Anda untuk mengelola dan memperbarui konten sendiri tanpa pengetahuan teknis khusus.
                                    Kami juga menyediakan pelatihan singkat tentang cara menggunakan CMS tersebut.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Apakah DevXpert Media menyediakan layanan hosting?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, kami menawarkan solusi hosting yang andal dengan performa dan keamanan tinggi. Kami
                                    juga dapat membantu Anda memilih penyedia hosting yang tepat jika Anda lebih suka
                                    mengelola hosting sendiri.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Bagaimana dengan dukungan pasca-peluncuran website?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kami menyediakan paket dukungan dan pemeliharaan berkelanjutan untuk memastikan website
                                    Anda tetap berfungsi optimal. Paket ini mencakup pembaruan keamanan, backup rutin,
                                    pemecahan masalah, dan peningkatan performa.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="service-cta" class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Siap Mengembangkan Website Profesional Anda?</h2>
            <p class="lead mb-4">Hubungi tim kami sekarang untuk konsultasi gratis dan diskusikan kebutuhan proyek web
                development Anda.</p>
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/bg-web-development.jpg');
            background-size: cover;
            background-position: center;
            padding-top: 120px;
            padding-bottom: 80px;
        }

        .testimonial-card {
            background-color: #fff;
            position: relative;
        }

        .testimonial-card:before {
            content: '\201C';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 60px;
            font-family: Georgia, serif;
            color: var(--primary-color);
            opacity: 0.2;
        }

        .testimonial-image img {
            border: 3px solid var(--primary-color);
            padding: 2px;
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
```
