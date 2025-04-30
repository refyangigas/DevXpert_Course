// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Handle Navbar Scrolling Effect
    const navbar = document.querySelector('.navbar');

    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
                navbar.classList.add('py-2');
                navbar.classList.remove('py-3');
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.classList.remove('py-2');
                navbar.classList.add('py-3');
            }
        });
    }

    // Initialize Parallax effect
    initParallax();

    // Handle dropdown hover effect on desktop
    const dropdownItems = document.querySelectorAll('.navbar .dropdown');

    if (window.innerWidth >= 992) {
        dropdownItems.forEach(function(item) {
            item.addEventListener('mouseenter', function() {
                const dropdown = this.querySelector('.dropdown-menu');
                if (dropdown) {
                    dropdown.classList.add('show');
                }
            });

            item.addEventListener('mouseleave', function() {
                const dropdown = this.querySelector('.dropdown-menu');
                if (dropdown) {
                    dropdown.classList.remove('show');
                }
            });
        });
    }
});

// Function to initialize parallax effect
function initParallax() {
    const parallaxContainers = document.querySelectorAll('.parallax-container');

    if (parallaxContainers.length > 0) {
        parallaxContainers.forEach(function(container) {
            const img = container.getAttribute('data-image-src');
            if (img) {
                container.style.backgroundImage = `url(${img})`;
            }
        });

        window.addEventListener('scroll', function() {
            let scrollPosition = window.pageYOffset;

            parallaxContainers.forEach(function(container) {
                const containerOffset = container.offsetTop;
                const containerHeight = container.offsetHeight;

                // Check if container is in viewport
                if (
                    scrollPosition + window.innerHeight > containerOffset &&
                    containerOffset + containerHeight > scrollPosition
                ) {
                    // Apply parallax effect
                    const speed = 0.5; // Parallax speed (0.5 means background moves half as fast as scroll)
                    const yPos = (scrollPosition - containerOffset) * speed;
                    container.style.backgroundPosition = `center ${yPos}px`;
                }
            });
        });
    }
}

// Add smooth scrolling to all links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});
