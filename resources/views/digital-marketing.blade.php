@extends('layouts.app')

@section('title', 'Digital Marketing')

@section('content')
    <!-- Hero Section -->
    <section id="digital-hero" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-3">Digital Marketing</h1>
                    <p class="lead mb-4">Tingkatkan brand awareness, engagement, dan konversi bisnis Anda dengan strategi
                        digital marketing yang terukur dan efektif.</p>
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
                                <h4>Audit & Analisis</h4>
                                <p>Menganalisis situasi digital Anda saat ini, kompetitor, dan peluang pasar.</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="process-number">2</div>
                            <div class="process-content">
                                <h4>Strategi & Perencanaan</h4>
                                <p>Mengembangkan strategi digital marketing yang selaras dengan tujuan bisnis Anda.</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="process-number">3</div>
                            <div class="process-content">
                                <h4>Eksekusi & Optimasi</h4>
                                <p>Menjalankan kampanye dan terus mengoptimalkan untuk hasil yang lebih baik.</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="process-number">4</div>
                            <div class="process-content">
                                <h4>Monitoring & Pelaporan</h4>
                                <p>Memantau performa dan menyediakan laporan transparan tentang hasil kampanye.</p>
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
                                    Berapa lama waktu yang dibutuhkan untuk melihat hasil digital marketing?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Hasil dari digital marketing bervariasi tergantung pada strategi, industri, dan kondisi
                                    pasar. Kampanye paid ads dapat memberikan hasil segera, sementara SEO membutuhkan 3-6
                                    bulan untuk menunjukkan peningkatan signifikan. Social media marketing biasanya
                                    menunjukkan peningkatan engagement dalam 1-3 bulan dengan strategi konten yang
                                    konsisten.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse2" aria-expanded="false">
                                    Berapa anggaran yang dibutuhkan untuk digital marketing?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Anggaran digital marketing sangat fleksibel dan dapat disesuaikan dengan ukuran bisnis
                                    Anda. Kami menawarkan paket mulai dari Rp 5 juta hingga Rp 50 juta per bulan tergantung
                                    pada skala dan kompleksitas kampanye. Setiap paket dirancang untuk memberikan ROI yang
                                    optimal sesuai tujuan bisnis Anda.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse3" aria-expanded="false">
                                    Platform social media apa yang sebaiknya digunakan untuk bisnis saya?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pemilihan platform social media harus didasarkan pada target audiens dan jenis bisnis
                                    Anda. B2B biasanya lebih efektif di LinkedIn, produk visual cocok untuk Instagram dan
                                    Pinterest, bisnis lokal mendapat manfaat dari Google Business Profile, dan merek
                                    consumer goods biasanya berkinerja baik di Facebook dan Instagram. Kami akan membantu
                                    menganalisis di mana audiens Anda paling aktif.
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
            <h2 class="mb-4">Siap Meningkatkan Kehadiran Digital Anda?</h2>
            <p class="lead mb-4 col-lg-8 mx-auto">Jadwalkan konsultasi gratis dengan tim digital marketing kami untuk
                membahas strategi yang tepat untuk bisnis Anda.</p>
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
            #digital-hero {
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
