@extends('layouts.app')

@section('title', 'Mobile App Development')

@section('content')
    <!-- Header Section -->
    <section id="service-header" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-4">Mobile App Development</h1>
                    <p class="lead">Wujudkan ide aplikasi mobile Anda dengan layanan pengembangan aplikasi profesional yang berorientasi pada pengguna dan bisnis Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="service-process" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Proses Pengembangan Aplikasi Kami</h2>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-number">1</div>
                            <div class="timeline-content">
                                <h4>Konsultasi & Analisis Kebutuhan</h4>
                                <p>Identifikasi tujuan bisnis, target pengguna, fitur utama, dan kebutuhan teknis untuk aplikasi Anda.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">2</div>
                            <div class="timeline-content">
                                <h4>Wireframing & Prototyping</h4>
                                <p>Pembuatan sketsa alur aplikasi dan prototype interaktif untuk memvisualisasikan pengalaman pengguna.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">3</div>
                            <div class="timeline-content">
                                <h4>Desain UI/UX</h4>
                                <p>Perancangan antarmuka visual yang menarik dan pengalaman pengguna yang intuitif mengikuti pedoman platform.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">4</div>
                            <div class="timeline-content">
                                <h4>Development</h4>
                                <p>Pengembangan aplikasi dengan teknologi terkini (Native, React Native, atau Flutter) sesuai kebutuhan proyek Anda.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">5</div>
                            <div class="timeline-content">
                                <h4>Testing & Quality Assurance</h4>
                                <p>Pengujian menyeluruh pada berbagai perangkat untuk memastikan kinerja, keamanan, dan pengalaman pengguna optimal.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-number">6</div>
                            <div class="timeline-content">
                                <h4>Deployment & Dukungan</h4>
                                <p>Publikasi aplikasi ke app store, pemeliharaan berkelanjutan, dan pengembangan fitur baru sesuai kebutuhan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="tech-stack" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Teknologi yang Kami Gunakan</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center py-4">
                        <div class="card-body">
                            <div class="tech-icon mb-3">
                                <i class="bi bi-apple fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">iOS Development</h3>
                            <p class="card-text">Swift, SwiftUI, Objective-C</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center py-4">
                        <div class="card-body">
                            <div class="tech-icon mb-3">
                                <i class="bi bi-android2 fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Android Development</h3>
                            <p class="card-text">Kotlin, Java, Jetpack Compose</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center py-4">
                        <div class="card-body">
                            <div class="tech-icon mb-3">
                                <i class="bi bi-phone fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Cross-Platform</h3>
                            <p class="card-text">React Native, Flutter, Ionic</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center py-4">
                        <div class="card-body">
                            <div class="tech-icon mb-3">
                                <i class="bi bi-hdd-network fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Backend</h3>
                            <p class="card-text">Node.js, Firebase, AWS, Laravel</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center py-4">
                        <div class="card-body">
                            <div class="tech-icon mb-3">
                                <i class="bi bi-database fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">Database</h3>
                            <p class="card-text">MongoDB, MySQL, Firestore, Realm</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center py-4">
                        <div class="card-body">
                            <div class="tech-icon mb-3">
                                <i class="bi bi-tools fs-1" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="card-title h5 fw-bold">DevOps</h3>
                            <p class="card-text">CI/CD, Docker, Git, Fastlane</p>
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
                                    Berapa lama waktu yang dibutuhkan untuk mengembangkan aplikasi mobile?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Waktu pengembangan bervariasi tergantung pada kompleksitas aplikasi. Aplikasi sederhana dengan fungsionalitas dasar membutuhkan waktu sekitar 2-3 bulan, aplikasi dengan kompleksitas menengah sekitar 3-6 bulan, dan aplikasi kompleks dengan fitur canggih bisa memakan waktu 6-12 bulan. Kami akan memberikan estimasi yang lebih akurat setelah fase konsultasi dan perencanaan.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Bagaimana dengan proses publikasi aplikasi ke App Store dan Google Play?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kami menangani seluruh proses publikasi aplikasi ke App Store dan Google Play, termasuk persiapan aset, optimasi metadata, dan kepatuhan terhadap pedoman. Kami juga dapat membantu membuat akun developer jika Anda belum memilikinya. Proses review dari Apple biasanya memakan waktu 1-3 hari, sementara Google Play biasanya beberapa jam hingga 1 hari.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Platform mana yang sebaiknya saya pilih - iOS, Android, atau keduanya?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pilihan platform tergantung pada target pasar dan anggaran Anda. Jika target pasar Anda lebih banyak menggunakan iOS, mulailah dengan iOS; jika lebih banyak pengguna Android, prioritaskan Android. Untuk menjangkau kedua platform dengan anggaran terbatas, pendekatan cross-platform seperti React Native atau Flutter bisa menjadi solusi efektif. Kami dapat membantu Anda menganalisis target pasar dan merekomendasikan pendekatan terbaik.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Bagaimana dengan pemeliharaan aplikasi setelah diluncurkan?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kami menawarkan paket pemeliharaan yang mencakup pembaruan OS, perbaikan bug, peningkatan keamanan, dan analisis performa. Kami juga menyediakan layanan pengembangan berkelanjutan untuk menambahkan fitur baru berdasarkan feedback pengguna dan tren pasar. Kontrak pemeliharaan biasanya berjalan selama 6-12 bulan dan dapat diperpanjang sesuai kebutuhan.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="faqHeading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                    Apakah saya akan memiliki hak cipta penuh atas aplikasi?
                                </button>
                            </h3>
                            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, setelah pembayaran penuh, Anda akan memiliki hak cipta dan kepemilikan penuh atas aplikasi yang dikembangkan. Kami akan menyerahkan semua kode sumber, aset, dan dokumentasi terkait. Kami hanya meminta izin untuk menampilkan aplikasi dalam portfolio kami sebagai referensi pekerjaan, tanpa mengungkapkan informasi rahasia atau kode sumber.
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
            <h2 class="mb-4">Siap Mengembangkan Aplikasi Mobile Anda?</h2>
            <p class="lead mb-4">Hubungi tim developer kami sekarang untuk konsultasi gratis dan diskusikan ide aplikasi mobile Anda.</p>
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/bg-mobile-app.jpg');
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

        .tech-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 80px;
            width: 80px;
            border-radius: 50%;
            background-color: rgba(var(--primary-color-rgb), 0.1);
            margin-bottom: 1rem;
        }
    </style>
@endsection
