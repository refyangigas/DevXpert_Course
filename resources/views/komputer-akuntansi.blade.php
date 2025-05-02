@extends('layouts.app')

@section('title', 'Komputer Akuntansi')

@section('content')
    <!-- Hero Section -->
    <section id="accounting-hero" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-3">Komputer Akuntansi</h1>
                    <p class="lead mb-4">Optimalkan pengelolaan keuangan dan sistem akuntansi perusahaan Anda dengan solusi
                        komputer akuntansi yang efisien, akurat, dan mudah digunakan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <section id="work-process" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Bagaimana Kami Bekerja</h2>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="process-timeline">
                        <div class="process-step">
                            <div class="process-number">1</div>
                            <div class="process-content">
                                <h4>Analisis Kebutuhan</h4>
                                <p>Mengidentifikasi kebutuhan akuntansi spesifik bisnis Anda dan struktur laporan yang
                                    diperlukan.</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="process-number">2</div>
                            <div class="process-content">
                                <h4>Pengembangan Sistem</h4>
                                <p>Menyiapkan dan mengonfigurasi sistem akuntansi yang sesuai dengan kebutuhan bisnis Anda.
                                </p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="process-number">3</div>
                            <div class="process-content">
                                <h4>Implementasi & Pelatihan</h4>
                                <p>Mengimplementasikan sistem dan melatih tim Anda untuk mengoperasikan software akuntansi
                                    dengan percaya diri.</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="process-number">4</div>
                            <div class="process-content">
                                <h4>Dukungan Berkelanjutan</h4>
                                <p>Menyediakan dukungan teknis dan pembaruan sistem untuk memastikan operasi akuntansi yang
                                    lancar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Pertanyaan Umum</h2>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse1" aria-expanded="true">
                                    Software akuntansi apa yang paling cocok untuk bisnis saya?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pemilihan software akuntansi tergantung pada ukuran bisnis, kompleksitas transaksi, dan
                                    kebutuhan pelaporan.
                                    Untuk UKM, kami merekomendasikan Accurate atau MYOB, sementara untuk perusahaan menengah
                                    ke atas,
                                    software seperti Odoo Accounting atau SAP Business One bisa lebih tepat. Kami akan
                                    membantu Anda
                                    menganalisis kebutuhan spesifik dan merekomendasikan solusi terbaik.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse2" aria-expanded="false">
                                    Berapa biaya implementasi sistem komputer akuntansi?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Biaya implementasi bervariasi berdasarkan kompleksitas sistem dan ukuran perusahaan
                                    Anda.
                                    Paket layanan kami dimulai dari Rp 10 juta untuk implementasi dasar hingga Rp 75 juta
                                    untuk
                                    sistem enterprise yang komprehensif. Biaya ini mencakup instalasi, konfigurasi, migrasi
                                    data,
                                    pelatihan staf, dan dukungan pasca-implementasi selama 3 bulan pertama.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse3" aria-expanded="false">
                                    Berapa lama waktu yang dibutuhkan untuk implementasi sistem?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Timeframe implementasi bervariasi dari 2 minggu untuk bisnis kecil hingga 3 bulan untuk
                                    perusahaan besar dengan kebutuhan kompleks. Proses ini mencakup pengaturan sistem,
                                    migrasi data,
                                    kustomisasi, pengujian, dan pelatihan pengguna. Kami bekerja secara efisien untuk
                                    meminimalkan
                                    gangguan terhadap operasi bisnis harian Anda.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse4" aria-expanded="false">
                                    Apakah sistem dapat diintegrasikan dengan software lain yang kami gunakan?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, sebagian besar sistem akuntansi modern mendukung integrasi dengan software lain.
                                    Kami dapat membantu mengintegrasikan sistem akuntansi Anda dengan platform e-commerce,
                                    sistem CRM, aplikasi perbankan, software penggajian, dan berbagai sistem manajemen
                                    bisnis lainnya.
                                    Integrasi ini membantu mengotomatisasi alur kerja dan mengurangi input data manual.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Siap Mengoptimalkan Sistem Keuangan Anda?</h2>
            <p class="lead mb-4 col-lg-8 mx-auto">Jadwalkan konsultasi gratis dengan tim komputer akuntansi kami untuk
                membahas solusi yang tepat untuk kebutuhan bisnis Anda.</p>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        /* Process Timeline */
        .process-timeline {
            position: relative;
            padding: 20px 0;
        }

        .process-step {
            display: flex;
            margin-bottom: 40px;
            position: relative;
        }

        .process-step:last-child {
            margin-bottom: 0;
        }

        .process-number {
            flex-shrink: 0;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 20px;
            font-size: 18px;
        }

        .process-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            flex-grow: 1;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            #accounting-hero {
                padding-top: 60px;
                text-align: center;
            }

            .process-step {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .process-number {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
@endsection
