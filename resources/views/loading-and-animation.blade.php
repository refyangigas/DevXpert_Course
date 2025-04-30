{{-- Loading Indicator (bisa dimasukkan di app.blade.php) --}}
<div id="loading-indicator">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

{{-- CSS untuk Loading Indicator dan Animasi --}}
<style>
/* === Loading Indicator === */
#loading-indicator {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease;
}

.spinner {
    margin: 100px auto 0;
    width: 70px;
    text-align: center;
}

.spinner > div {
    width: 18px;
    height: 18px;
    background-color: var(--primary-color);
    border-radius: 100%;
    display: inline-block;
    animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
    animation-delay: -0.32s;
}

.spinner .bounce2 {
    animation-delay: -0.16s;
}

@keyframes sk-bouncedelay {
    0%, 80%, 100% {
        transform: scale(0);
    } 40% {
        transform: scale(1.0);
    }
}

.loader-hidden {
    opacity: 0;
    visibility: hidden;
}

/* === Animation Classes === */
.fade-in {
    opacity: 0;
    animation: fadeIn 1s forwards;
}

.slide-up {
    opacity: 0;
    transform: translateY(50px);
    animation: slideUp 1s forwards;
}

.scale-in {
    opacity: 0;
    transform: scale(0.8);
    animation: scaleIn 1s forwards;
}

.slide-in-left {
    opacity: 0;
    transform: translateX(-50px);
    animation: slideInLeft 1s forwards;
}

.slide-in-right {
    opacity: 0;
    transform: translateX(50px);
    animation: slideInRight 1s forwards;
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
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scaleIn {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>

{{-- JavaScript untuk Loading Indicator dan Animasi on Scroll --}}
<script>
// Loading Indicator
document.addEventListener('DOMContentLoaded', function() {
    // Hide loading indicator once page is loaded
    const loadingIndicator = document.getElementById('loading-indicator');
    if (loadingIndicator) {
        loadingIndicator.classList.add('loader-hidden');
    }

    // Show loading indicator when navigating to another page
    document.addEventListener('click', function(e) {
        const target = e.target;

        // Check if the clicked element is a link to another page
        if (target.tagName === 'A' &&
            target.href &&
            !target.href.includes('#') &&
            !target.target &&
            target.href !== window.location.href) {

            // Show loading indicator
            loadingIndicator.classList.remove('loader-hidden');
        }
    });

    // Simple animation on scroll
    const animateElements = function() {
        const elements = document.querySelectorAll('.fade-in, .slide-up, .scale-in, .slide-in-left, .slide-in-right');

        elements.forEach(function(element) {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            // If element is in viewport
            if (elementPosition < windowHeight - 50) {
                element.style.animationPlayState = 'running';
            }
        });
    };

    // Run on load
    animateElements();

    // Run on scroll
    window.addEventListener('scroll', animateElements);
});
</script>
