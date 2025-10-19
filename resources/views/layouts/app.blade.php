<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestie Stifin - Pusat Promotor STIFIn Indonesia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        :root {
            --primary: #fdc20f;
            --secondary: #10b981;
            --accent: #fdc20f;
            --light: #f3f4f6;
            --dark: #1f2937;
        }

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .navbar {
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            /* Use the same gradient as the hero section for the scrolled navbar */
            background-image: linear-gradient(to right, #15281c, #173d23);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Ensure navbar links are readable on the dark gradient */
        .navbar.scrolled a,
        .navbar.scrolled .text-indigo-600 {
            color: #ffffff !important;
        }

        .stifin-card {
            transition: transform 0.3s ease;
        }

        .stifin-card:hover {
            transform: translateY(-5px);
        }

        .type-animation {
            display: inline-block;
            overflow: hidden;
            border-right: .08em solid var(--primary);
            white-space: nowrap;
            vertical-align: bottom;
            /* Use max-width in ch units so animation stops at text length instead of parent width */
            max-width: 0ch;
            /* Set steps to approximate character count (13 for "BESTIE STIFIn") */
            animation: typing 2s steps(20, end) forwards, blink-caret .75s step-end infinite;
        }

        @keyframes typing {
            from {
                max-width: 0ch;
            }

            to {
                max-width: 13ch;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: var(--primary)
            }
        }

        .stat-card {
            border-left: 4px solid var(--primary);
        }

        .gallery-item {
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        .gallery-item img {
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Testimonials carousel */
        .testimonials-carousel {
            overflow: hidden;
            position: relative;
            padding: 1rem 0;
            margin: 0 auto;
            max-width: 100%;
        }

        .testimonials-track {
            display: flex;
            gap: 1.5rem;
            transition: transform 0.5s ease;
            will-change: transform;
        }

        .testimonial-card {
            flex: 0 0 calc(25% - 1.125rem);
            /* 4 cards per view on largest screens */
            min-width: 280px;
            opacity: 0.9;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            opacity: 1;
            transform: translateY(-5px);
        }

        /* 3 cards per view */
        @media (max-width: 1280px) {
            .testimonial-card {
                flex: 0 0 calc(33.333% - 1rem);
            }
        }

        /* 2 cards per view */
        @media (max-width: 768px) {
            .testimonial-card {
                flex: 0 0 calc(50% - 0.75rem);
            }
        }

        /* 1 card per view */
        @media (max-width: 480px) {
            .testimonial-card {
                flex: 0 0 calc(100% - 0.5rem);
            }
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Header & Navigation -->
    <header class="fixed w-full z-50">
        <nav
            class="navbar {{ request()->routeIs('home') ? 'bg-transparent' : 'bg-gradient-to-r from-[#15281c] to-[#173d23]' }} py-4">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('img/stifin-genetic.png') }}" alt="Bestie Stifin" class="w-24 mr-3">
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}#home"
                        class="{{ request()->routeIs('home') ? 'text-[#fdc20f]' : 'text-white hover:text-[#fdc20f]' }} font-medium">Home</a>
                    <div class="relative group">
                        <button
                            class="{{ request()->routeIs('konsep.*') ? 'text-[#fdc20f]' : 'text-white hover:text-[#fdc20f]' }} inline-flex items-center">
                            <span>Konsep STIFIn</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div
                            class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-gradient-to-r from-[#15281c] to-[#173d23] ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="py-1">
                                <a href="{{ route('konsep.sensing') }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-[#15281c] hover:text-white">Sensing
                                    (Si)</a>
                                <a href="{{ route('konsep.thinking') }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-[#15281c] hover:text-white">Thinking
                                    (Ti)</a>
                                <a href="{{ route('konsep.intuiting') }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-[#15281c] hover:text-white">Intuiting
                                    (Ii)</a>
                                <a href="{{ route('konsep.feeling') }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-[#15281c] hover:text-white">Feeling
                                    (Fi)</a>
                                <a href="{{ route('konsep.instinct') }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-[#15281c] hover:text-white">Instinct
                                    (In)</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('articles.index') }}"
                        class="{{ request()->routeIs('articles.*') ? 'text-[#fdc20f]' : 'text-white hover:text-[#fdc20f]' }}">Artikel</a>
                    <a href="{{ route('galeri.index') }}"
                        class="{{ request()->routeIs('galeri.*') ? 'text-[#fdc20f]' : 'text-white hover:text-[#fdc20f]' }}">Galeri</a>
                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'text-[#fdc20f]' : 'text-white hover:text-[#fdc20f]' }}">Kontak</a>
                </div>

                <div class="md:hidden">
                    <button id="menu-toggle"
                        class="{{ request()->routeIs('home') ? 'text-white' : 'text-white' }} focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white py-4 px-4">
                <a href="{{ route('home') }}#home"
                    class="block py-2 {{ request()->routeIs('home') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Home</a>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="w-full text-left py-2 {{ request()->routeIs('konsep.*') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }} flex items-center justify-between">
                        <span>Konsep STIFIn</span>
                        <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="pl-4 space-y-2 mt-2" x-show="open" x-collapse>
                        <a href="{{ route('konsep.sensing') }}"
                            class="block py-2 {{ request()->routeIs('konsep.sensing') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Sensing
                            (Si)</a>
                        <a href="{{ route('konsep.thinking') }}"
                            class="block py-2 {{ request()->routeIs('konsep.thinking') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Thinking
                            (Ti)</a>
                        <a href="{{ route('konsep.feeling') }}"
                            class="block py-2 {{ request()->routeIs('konsep.feeling') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Feeling
                            (Fi)</a>
                        <a href="{{ route('konsep.intuiting') }}"
                            class="block py-2 {{ request()->routeIs('konsep.intuiting') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Intuiting
                            (Ii)</a>
                        <a href="{{ route('konsep.instinct') }}"
                            class="block py-2 {{ request()->routeIs('konsep.instinct') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Instinct
                            (In)</a>
                    </div>
                </div>
                <a href="{{ route('articles.index') }}"
                    class="block py-2 {{ request()->routeIs('articles.*') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Artikel</a>
                <a href="{{ route('galeri.index') }}"
                    class="block py-2 {{ request()->routeIs('galeri.*') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Galeri</a>
                <a href="{{ route('contact') }}"
                    class="block py-2 {{ request()->routeIs('contact') ? 'text-[#fdc20f] font-medium' : 'text-gray-700 hover:text-[#fdc20f]' }}">Kontak</a>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer id="kontak" class="bg-[#173d23] text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('img/stifin-genetic.png') }}" alt="Bestie Stifin" class="w-28 mr-3">
                    </div>
                    <p class="text-white">Membantu Anda menemukan dan mengembangkan potensi diri melalui konsep
                        STIFIn.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-white hover:text-[#fdc20f]">Home</a></li>
                        <li><a href="#konsep" class="text-white hover:text-[#fdc20f]">Konsep STIFIn</a></li>
                        <li><a href="#artikel" class="text-white hover:text-[#fdc20f]">Artikel</a></li>
                        <li><a href="#galeri" class="text-white hover:text-[#fdc20f]">Galeri</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Layanan Kami</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-white hover:text-[#fdc20f]">Tes STIFIn</a></li>
                        <li><a href="#" class="text-white hover:text-[#fdc20f]">Konsultasi</a></li>
                        <li><a href="#" class="text-white hover:text-[#fdc20f]">Seminar & Workshop</a></li>
                        <li><a href="#" class="text-white hover:text-[#fdc20f]">Pelatihan</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3 text-[#fdc20f]"></i>
                            <span class="text-white">Jl. STIFIn No. 123, Jakarta</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3 text-[#fdc20f]"></i>
                            <span class="text-white">+62 123 456 789</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-[#fdc20f]"></i>
                            <span class="text-white">info@bestiestifin.com</span>
                        </li>
                    </ul>

                    <div class="flex space-x-4 mt-4">
                        <a href="#"
                            class="w-10 h-10 bg-[#fdc20f] rounded-full flex items-center justify-center hover:bg-[#15281c]">
                            <i class="fab fa-facebook-f text-[#15281c]"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-[#fdc20f] rounded-full flex items-center justify-center hover:bg-[#15281c]">
                            <i class="fab fa-instagram text-[#15281c]"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-[#fdc20f] rounded-full flex items-center justify-center hover:bg-[#15281c]">
                            <i class="fab fa-twitter text-[#15281c]"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-[#fdc20f] rounded-full flex items-center justify-center hover:bg-[#15281c]">
                            <i class="fab fa-youtube text-[#15281c]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Bestie Stifin. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Image Modal Functions
        function openModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            modalImg.src = imageSrc;

            // Add escape key listener
            document.addEventListener('keydown', closeModalOnEscape);

            // Add click outside listener
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.removeEventListener('keydown', closeModalOnEscape);
        }

        function closeModalOnEscape(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        }

        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Navbar scroll effect (only on home page)
        @if (request()->routeIs('home'))
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 400) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        @endif

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (document.querySelector(targetId)) {
                    document.querySelector(targetId).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Number counters (animate when stats section comes into view)
        (function() {
            const counters = document.querySelectorAll('.counter');
            if (!counters.length) return;

            function animateCount(el, target, duration = 2000) {
                const start = 0;
                const startTime = performance.now();

                function tick(now) {
                    const elapsed = now - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const value = Math.floor(progress * (target - start) + start);
                    el.textContent = value;
                    if (progress < 1) requestAnimationFrame(tick);
                    else el.textContent = target; // ensure exact
                }

                requestAnimationFrame(tick);
            }

            const statsSection = counters[0].closest('section');
            if (!statsSection) return;

            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        counters.forEach(c => {
                            const target = parseInt(c.dataset.target, 10) || 0;
                            animateCount(c, target, 1800);
                        });
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            observer.observe(statsSection);
        })();

        // Testimonials continuous smooth scroll with drag functionality (stable pause/resume)
        (function() {
            const track = document.getElementById('testimonialsTrack');
            if (!track) return;

            function initCarousel() {
                const cards = Array.from(track.children);
                const gap = 24; // match CSS gap
                const cardWidth = cards[0].offsetWidth + gap;
                let isHovered = false;
                let isDragging = false;
                let animationFrame = null;
                let startX = 0;
                let lastX = 0;
                let lastDragTime = 0;
                let dragVelocity = 0;

                // Clone for seamless loop
                cards.forEach(card => {
                    track.appendChild(card.cloneNode(true));
                });

                const totalWidth = cardWidth * cards.length;
                let offset = 0; // persistent offset in px
                let lastTs = 0; // last timestamp for delta-time

                track.style.cursor = 'grab';
                track.style.transition = 'transform 0.3s ease-out';

                function tick(ts) {
                    if (!lastTs) lastTs = ts;
                    const delta = ts - lastTs;
                    lastTs = ts;

                    if (!isDragging) {
                        // Advance ~1px every 30ms
                        offset = (offset + delta / 30) % totalWidth;
                        track.style.transform = `translate3d(${-offset}px, 0, 0)`;
                    }

                    if (!isHovered && !isDragging) {
                        animationFrame = requestAnimationFrame(tick);
                    } else {
                        animationFrame = null;
                    }
                }

                function startAnimation() {
                    if (!animationFrame) {
                        lastTs = 0; // let next tick set baseline; offset persists
                        animationFrame = requestAnimationFrame(tick);
                    }
                }

                function stopAnimation() {
                    if (animationFrame) cancelAnimationFrame(animationFrame);
                    animationFrame = null;
                }

                function handleDragStart(e) {
                    isDragging = true;
                    startX = e.type === 'mousedown' ? e.pageX : e.touches[0].pageX;
                    lastX = startX;
                    lastDragTime = Date.now();
                    track.style.cursor = 'grabbing';
                    track.style.transition = 'transform 0.1s ease-out';
                    stopAnimation();
                }

                function handleDragMove(e) {
                    if (!isDragging) return;
                    e.preventDefault();
                    const currentX = e.type === 'mousemove' ? e.pageX : e.touches[0].pageX;
                    const diff = currentX - startX;

                    // Update velocity (smoothed)
                    const now = Date.now();
                    const dt = Math.max(now - lastDragTime, 1);
                    const dx = currentX - lastX;
                    const v = dx / dt;
                    dragVelocity = dragVelocity * 0.7 + v * 0.3;
                    lastX = currentX;
                    lastDragTime = now;

                    let newOffset = offset - diff;
                    newOffset = ((newOffset % totalWidth) + totalWidth) % totalWidth;
                    offset = newOffset;
                    track.style.transform = `translate3d(${-offset}px, 0, 0)`;
                }

                function handleDragEnd() {
                    if (!isDragging) return;
                    isDragging = false;
                    track.style.cursor = 'grab';
                    track.style.transition = 'transform 0.3s ease-out';

                    // Momentum
                    if (Math.abs(dragVelocity) > 0.05) {
                        const momentum = dragVelocity * 200; // px
                        offset = ((offset - momentum) % totalWidth + totalWidth) % totalWidth;
                        track.style.transform = `translate3d(${-offset}px, 0, 0)`;
                    }

                    if (!isHovered) startAnimation();
                }

                // Events
                track.addEventListener('mousedown', handleDragStart);
                track.addEventListener('touchstart', handleDragStart, {
                    passive: false
                });
                window.addEventListener('mousemove', handleDragMove);
                window.addEventListener('touchmove', handleDragMove, {
                    passive: false
                });
                window.addEventListener('mouseup', handleDragEnd);
                window.addEventListener('touchend', handleDragEnd);

                // Prevent click during drag
                track.addEventListener('click', (e) => {
                    if (isDragging) e.preventDefault();
                });

                // Hover pause
                track.addEventListener('mouseenter', () => {
                    isHovered = true;
                    stopAnimation();
                });
                track.addEventListener('mouseleave', () => {
                    if (!isDragging) {
                        isHovered = false;
                        startAnimation();
                    }
                });

                // Visibility
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden) stopAnimation();
                    else if (!isHovered && !isDragging) startAnimation();
                });

                startAnimation();
            }

            if (document.readyState === 'complete') initCarousel();
            else window.addEventListener('load', initCarousel);
        })();
    </script>
    @stack('scripts')
</body>

</html>
