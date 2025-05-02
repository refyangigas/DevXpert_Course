<footer class="bg-dark text-white py-5">
    <div class="container">
        <!-- Top Footer Section -->
        <div class="row mb-4">
            <!-- Logo & Description -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="footer-brand mb-3">
                    <h4 class="text-uppercase fw-bold"><span class="text-primary">DevXpert</span> Media</h4>
                    <div class="colored-line mt-2 mb-3"></div>
                </div>
                <p class="mb-4">Tempat belajar IT & Multimedia terbaik untuk semua kalangan. Kursus dan pelatihan
                    terbaik dengan mentor profesional.</p>
                <div class="social-media-icons mb-4">
                    <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="me-2"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="me-2"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="me-2"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5 class="text-uppercase fw-bold">Navigasi</h5>
                <div class="colored-line mt-2 mb-3"></div>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2"><a href="/" class="footer-link"><i
                                class="fas fa-chevron-right me-2 small"></i>Beranda</a></li>
                    <li class="mb-2"><a href="/portfolio" class="footer-link"><i
                                class="fas fa-chevron-right me-2 small"></i>Karya Siswa</a></li>
                    <li class="mb-2"><a href="/testimonials" class="footer-link"><i
                                class="fas fa-chevron-right me-2 small"></i>Testimonial</a></li>
                    <li class="mb-2"><a href="/articles" class="footer-link"><i
                                class="fas fa-chevron-right me-2 small"></i>Artikel</a></li>
                    <li class="mb-2"><a href="/contact" class="footer-link"><i
                                class="fas fa-chevron-right me-2 small"></i>Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5 col-md-6">
                <h5 class="text-uppercase fw-bold">Hubungi Kami</h5>
                <div class="colored-line mt-2 mb-3"></div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0">Jalan Contoh No. 123, Kota</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0">0821-3131-4040</p>
                                    <p class="mb-0">0821-3131-0210</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="mb-0">info@DevXpertmedia.id</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <p class="mb-0">Senin - Jumat: 09:00 - 17:00</p>
                                    <p class="mb-0">Sabtu: 09:00 - 15:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="footer-map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664463015933!2d106.82496631476883!3d-6.175392395531569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1651651321642!5m2!1sen!2sid"
                        width="100%" height="200" style="border:0; border-radius: 8px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="footer-divider my-4"></div>

        <!-- Bottom Footer -->
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <p class="mb-0">&copy; {{ date('Y') }} DevXpert Media. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Modern Footer Styles */
    footer {
        position: relative;
        background: linear-gradient(to right, #1a1a1a, #2d2d2d);
    }

    .colored-line {
        height: 3px;
        width: 50px;
        background: var(--primary-color);
    }

    .footer-brand h4 {
        font-size: 1.5rem;
        letter-spacing: 1px;
    }

    .footer-brand h4 .text-primary {
        color: var(--primary-color) !important;
    }

    .social-media-icons {
        display: flex;
    }

    .social-media-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: #fff;
        transition: all 0.3s ease;
    }

    .social-media-icons a:hover {
        background: var(--primary-color);
        transform: translateY(-3px);
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        transition: all 0.3s ease;
        display: block;
        text-decoration: none;
    }

    .footer-links a:hover {
        color: var(--primary-color);
        transform: translateX(5px);
    }

    .contact-icon {
        min-width: 35px;
        height: 35px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact-info .d-flex {
        height: 100%;
    }

    .footer-map-container {
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .footer-divider {
        height: 1px;
        background: rgba(255, 255, 255, 0.1);
    }

    .footer-bottom-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 0.9rem;
        padding: 0 10px;
    }

    .footer-bottom-links a:hover {
        color: var(--primary-color);
    }

    .footer-bottom-links .list-inline-item:not(:last-child) {
        border-right: 1px solid rgba(255, 255, 255, 0.2);
        margin-right: 0;
    }

    @media (max-width: 991px) {
        .contact-info .row {
            margin-right: -5px;
            margin-left: -5px;
        }

        .contact-info [class*="col-"] {
            padding-right: 5px;
            padding-left: 5px;
        }
    }

    @media (max-width: 767px) {
        .footer-bottom-links {
            text-align: center;
            margin-top: 15px;
        }

        .contact-info .col-md-6 {
            margin-bottom: 15px;
        }

        .col-md-6.text-md-end {
            text-align: center !important;
        }
    }
</style>
