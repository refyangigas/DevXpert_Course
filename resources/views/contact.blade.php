@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <!-- Header Section -->
    <section id="contact-header" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4">Hubungi Kami</h1>
                    <p class="lead">Punya pertanyaan atau ingin konsultasi? Jangan ragu untuk menghubungi kami melalui form
                        berikut atau kontak langsung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section id="contact-section" class="py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="card border-0 shadow-lg rounded-3">
                        <div class="card-body p-5">
                            <h3 class="mb-4 fw-bold">Kirim Pesan</h3>

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                        id="subject" name="subject" value="{{ old('subject') }}" required>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5"
                                        required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-lg"
                                    style="background-color: var(--primary-color); color: white; border-color: var(--primary-color);">Kirim
                                    Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div class="bg-dark text-white p-5 h-100 rounded-3">
                        <h3 class="mb-4 fw-bold">Informasi Kontak</h3>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marker-alt fa-2x" style="color: var(--primary-color);"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Alamat</h5>
                                <p>Jalan Contoh No. 123, Kota Surabaya</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-phone fa-2x" style="color: var(--primary-color);"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Telepon</h5>
                                <p>0821-3131-4040 / 0821-3131-0210</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-envelope fa-2x" style="color: var(--primary-color);"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Email</h5>
                                <p>info@creativemedia.id</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-clock fa-2x" style="color: var(--primary-color);"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Jam Kerja</h5>
                                <p>Senin - Jumat: 08.00 - 17.00<br>
                                    Sabtu: 09.00 - 15.00</p>
                            </div>
                        </div>
                        <div class="social-media-icons mt-4">
                            <h5 class="mb-3">Ikuti Kami</h5>
                            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section id="map-section" class="mb-0">
        <div class="container-fluid p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.25267134371!2d112.63810996724288!3d-7.274666923865692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Kota%20SBY%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1651157861932!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- WhatsApp CTA Section -->
    <section id="contact-whatsapp-cta" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h3 class="mb-4">Butuh Respon Cepat?</h3>
                    <p class="lead mb-4">Hubungi kami melalui WhatsApp untuk mendapatkan respon instan dari tim kami.</p>
                    <a href="https://wa.me/6282131314040" class="btn btn-success btn-lg">
                        <i class="fab fa-whatsapp me-2"></i> Chat via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
