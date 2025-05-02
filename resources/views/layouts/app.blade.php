<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevXpert Media - @yield('title', 'Home')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Simplified Loading Indicator Style -->
    <style>
        #pre-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner-dots {
            width: 70px;
            text-align: center;
        }

        .spinner-dots>div {
            width: 18px;
            height: 18px;
            background-color: var(--primary-color);
            border-radius: 100%;
            display: inline-block;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner-dots .dot1 {
            animation-delay: -0.32s;
        }

        .spinner-dots .dot2 {
            animation-delay: -0.16s;
        }

        @keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                transform: scale(0);
            }

            40% {
                transform: scale(1.0);
            }
        }

        /* Animation Classes (Keep this part) */
        .animate-fade-in {
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        .animate-slide-up {
            opacity: 0;
            transform: translateY(30px);
            animation: slideUp 1s forwards;
        }

        .animate-slide-left {
            opacity: 0;
            transform: translateX(-30px);
            animation: slideLeft 1s forwards;
        }

        .animate-slide-right {
            opacity: 0;
            transform: translateX(30px);
            animation: slideRight 1s forwards;
        }

        .animate-zoom-in {
            opacity: 0;
            transform: scale(0.9);
            animation: zoomIn 1s forwards;
        }

        /* Animation Delays */
        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-500 {
            animation-delay: 0.5s;
        }

        /* Animation Keyframes */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideLeft {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideRight {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes zoomIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>

    @yield('styles')

    <!-- Preloader Script - Critical and Inline -->
    <script>
        // This simple script will handle the loader visibility
        document.addEventListener("DOMContentLoaded", function() {
            // Start animation check
            checkAnimations();
        });

        // Hide loader when everything is loaded
        window.addEventListener("load", function() {
            hidePreloader();
        });

        // Backup timeout to hide loader after 3 seconds no matter what
        setTimeout(hidePreloader, 3000);

        function hidePreloader() {
            const loader = document.getElementById('pre-loader');
            if (loader && loader.parentNode) {
                loader.parentNode.removeChild(loader);
            }
        }

        function checkAnimations() {
            const animateElements = document.querySelectorAll(
                '.animate-fade-in, .animate-slide-up, .animate-slide-left, .animate-slide-right, .animate-zoom-in');

            animateElements.forEach(function(element) {
                element.style.animationPlayState = 'paused';
            });

            function checkVisibility() {
                animateElements.forEach(function(element) {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;

                    if (elementTop < windowHeight - 50) {
                        element.style.animationPlayState = 'running';
                    }
                });
            }

            // Initial check
            checkVisibility();

            // Check on scroll
            window.addEventListener('scroll', checkVisibility);
        }
    </script>
</head>

<body>
    <!-- Simple Preloader - Will be fully removed from DOM when page loads -->
    <div id="pre-loader">
        <div class="spinner-dots">
            <div class="dot1"></div>
            <div class="dot2"></div>
            <div class="dot3"></div>
        </div>
    </div>

    <!-- Navbar -->
    @include('layouts.partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery (needed for some components) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Parallax JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    @yield('scripts')
</body>

</html>
