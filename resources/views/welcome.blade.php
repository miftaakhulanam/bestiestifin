<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestie Stifin - Pusat Promotor STIFIn Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        <nav class="navbar bg-transparent py-4">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('img/stifin-genetic.png') }}" alt="Bestie Stifin" class="w-24 mr-3">
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-[#fdc20f] font-medium">Home</a>
                    <a href="#konsep" class="text-white hover:text-[#fdc20f]">Konsep STIFIn</a>
                    <a href="#artikel" class="text-white hover:text-[#fdc20f]">Artikel</a>
                    <a href="#galeri" class="text-white hover:text-[#fdc20f]">Galeri</a>
                    <a href="#kontak" class="text-white hover:text-[#fdc20f]">Kontak</a>
                </div>

                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white py-4 px-4">
                <a href="#home" class="block py-2 text-[#fdc20f] font-medium">Home</a>
                <a href="#konsep" class="block py-2 text-white hover:text-[#fdc20f]">Konsep STIFIn</a>
                <a href="#artikel" class="block py-2 text-white hover:text-[#fdc20f]">Artikel</a>
                <a href="#galeri" class="block py-2 text-white hover:text-[#fdc20f]">Galeri</a>
                <a href="#kontak" class="block py-2 text-white hover:text-[#fdc20f]">Kontak</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 bg-gradient-to-r from-[#15281c] to-[#173d23]">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold leading-7 text-white mb-4">Mengenal
                        <br>Potensi Diri
                        dengan
                        <br><span class="text-[#fdc20f] type-animation w-fit">BESTIE STIFIn</span>
                    </h1>
                    <p class="text-lg text-gray-100 mb-8">Temukan kepribadian unik Anda melalui konsep STIFIn dan
                        kembangkan potensi terbaik dalam diri Anda.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#konsep"
                            class="bg-[#fdc20f] hover:bg-[#e1ab09] text-white px-6 py-3 rounded-lg font-medium">Pelajari
                            STIFIn</a>
                        <a href="#kontak"
                            class="border border-[#fdc20f] text-[#fdc20f] hover:bg-indigo-50 px-6 py-3 rounded-lg font-medium">Konsultasi
                            Gratis</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('img/cover.png') }}" alt="STIFIn Personality"
                        class="animate__animated animate__pulse animate__slow animate__infinite w-full hover:scale-105 duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 justify-around gap-8">
                <div class="text-center flex flex-col items-center">
                    <div class="text-4xl text-[#15281c] mb-3"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="text-4xl font-bold text-[#15281c] mb-2"><span class="counter"
                            data-target="185">0</span><span class="ml-1">+</span></div>
                    <div class="text-gray-600">CABANG</div>
                </div>
                <div class="text-center flex flex-col items-center">
                    <div class="text-4xl text-[#15281c] mb-3"><i class="fas fa-users"></i></div>
                    <div class="text-4xl font-bold text-[#15281c] mb-2"><span class="counter"
                            data-target="4022">0</span><span class="ml-1">+</span></div>
                    <div class="text-gray-600">PROMOTOR</div>
                </div>
                <div class="text-center flex flex-col items-center">
                    <div class="text-4xl text-[#15281c] mb-3"><i class="fas fa-clipboard-check"></i></div>
                    <div class="text-4xl font-bold text-[#15281c] mb-2"><span class="counter"
                            data-target="726793">0</span><span class="ml-1">+</span></div>
                    <div class="text-gray-600">TOTAL TES</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Konsep STIFIn Section -->
    <section id="konsep" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Konsep STIFIn</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">STIFIn merupakan konsep yang membagi kepribadian manusia
                    berdasarkan cara kerja otak menjadi 5 jenis mesin kecerdasan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="stifin-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl font-bold text-red-600">S</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Sensing</h3>
                    <p class="text-gray-600">Tipe praktis, menyukai hal konkret, detail-oriented, dan bersifat
                        konservatif.</p>
                    <a href="#" class="mt-4 inline-block text-[#15281c] font-medium">Pelajari lebih lanjut →</a>
                </div>

                <div class="stifin-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl font-bold text-blue-600">T</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Thinking</h3>
                    <p class="text-gray-600">Tipe logis, analitis, sistematis, obyektif, dan unggul dalam merencanakan.
                    </p>
                    <a href="#" class="mt-4 inline-block text-[#15281c] font-medium">Pelajari lebih lanjut →</a>
                </div>

                <div class="stifin-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl font-bold text-green-600">I</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Intuiting</h3>
                    <p class="text-gray-600">Tipe visioner, konseptual, berorientasi masa depan, dan penuh ide kreatif.
                    </p>
                    <a href="#" class="mt-4 inline-block text-[#15281c] font-medium">Pelajari lebih lanjut
                        →</a>
                </div>

                <div class="stifin-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl font-bold text-yellow-600">F</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Feeling</h3>
                    <p class="text-gray-600">Tipe empatik, harmonis, hubungan sosial baik, dan unggul dalam komunikasi.
                    </p>
                    <a href="#" class="mt-4 inline-block text-[#15281c] font-medium">Pelajari lebih lanjut
                        →</a>
                </div>

                <div class="stifin-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl font-bold text-purple-600">In</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Insting</h3>
                    <p class="text-gray-600">Tipe dengan naluri kuat, cepat mengambil keputusan, dan adaptif.</p>
                    <a href="#" class="mt-4 inline-block text-[#15281c] font-medium">Pelajari lebih lanjut
                        →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Section -->
    <section id="artikel" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Artikel Terbaru</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan artikel menarik seputar STIFIn, pengembangan diri,
                    dan potensi kecerdasan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://placehold.co/400x250/e0e7ff/4f46e5?text=Artikel+STIFIn" alt="Artikel STIFIn"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-[#15281c]">15 Juni 2023</span>
                        <h3 class="text-xl font-semibold text-gray-800 my-3">Mengenal Lebih Dalam Tes Sidik Jari STIFIn
                        </h3>
                        <p class="text-gray-600">Bagaimana tes sidik jari dapat mengungkap potensi dan kepribadian
                            Anda...</p>
                        <a href="#" class="mt-4 inline-block text-[#15281c] font-medium">Baca selengkapnya
                            →</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://placehold.co/400x250/e0e7ff/4f46e5?text=Artikel+STIFIn" alt="Artikel STIFIn"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-[#15281c]">10 Juni 2023</span>
                        <h3 class="text-xl font-semibold text-gray-800 my-3">Memaksimalkan Potensi Anak dengan STIFIn
                        </h3>
                        <p class="text-gray-600">Cara membantu anak berkembang sesuai dengan mesin kecerdasan
                            dominannya...</p>
                        <a href="#" class="mt-4 inline-block text-[#15281c] font-medium">Baca selengkapnya
                            →</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://placehold.co/400x250/e0e7ff/4f46e5?text=Artikel+STIFIn" alt="Artikel STIFIn"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-[#15281c]">5 Juni 2023</span>
                        <h3 class="text-xl font-semibold text-gray-800 my-3">STIFIn dalam Dunia Kerja dan Profesi</h3>
                        <p class="text-gray-600">Menemukan profesi yang sesuai dengan kepribadian STIFIn Anda...</p>
                        <a href="#" class="mt-4 inline-block text-[#15281c] font-medium">Baca selengkapnya
                            →</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block bg-[#15281c] hover:bg-[#0f2a17] text-white px-6 py-3 rounded-lg font-medium">Lihat
                    Semua Artikel</a>
            </div>
        </div>
    </section>

    <!-- Galeri Section -->
    <section id="galeri" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Galeri Kegiatan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Dokumentasi seminar, workshop, dan kegiatan STIFIn lainnya.
                </p>
            </div>

            <!-- Image Preview Modal -->
            <div id="imageModal"
                class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
                <div class="relative max-w-4xl w-full mx-4">
                    <button onclick="closeModal()"
                        class="absolute top-4 right-4 text-white text-4xl hover:text-gray-300">&times;</button>
                    <img id="modalImage" src="" alt="Preview" class="w-full rounded-lg">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="gallery-item rounded-lg overflow-hidden shadow-md cursor-pointer"
                    onclick="openModal('{{ asset('img/kegiatan.jpg') }}')">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Seminar STIFIn" class="w-full h-48 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden shadow-md cursor-pointer"
                    onclick="openModal('{{ asset('img/kegiatan.jpg') }}')">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Workshop STIFIn"
                        class="w-full h-48 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden shadow-md cursor-pointer"
                    onclick="openModal('{{ asset('img/kegiatan.jpg') }}')">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Konsultasi STIFIn"
                        class="w-full h-48 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden shadow-md cursor-pointer"
                    onclick="openModal('{{ asset('img/kegiatan.jpg') }}')">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Testimoni STIFIn"
                        class="w-full h-48 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden shadow-md cursor-pointer"
                    onclick="openModal('{{ asset('img/kegiatan.jpg') }}')">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Event STIFIn" class="w-full h-48 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden shadow-md cursor-pointer"
                    onclick="openModal('{{ asset('img/kegiatan.jpg') }}')">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Training STIFIn"
                        class="w-full h-48 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden shadow-md cursor-pointer"
                    onclick="openModal('{{ asset('img/kegiatan.jpg') }}')">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Kelas STIFIn" class="w-full h-48 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden shadow-md cursor-pointer"
                    onclick="openModal('{{ asset('img/kegiatan.jpg') }}')">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Webinar STIFIn"
                        class="w-full h-48 object-cover">
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block bg-[#15281c] hover:bg-[#0f2a17] text-white px-6 py-3 rounded-lg font-medium">Lihat
                    Galeri Lengkap</a>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="py-16 bg-[#173d23] text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Apa Kata Mereka?</h2>
                <p class="max-w-2xl mx-auto">Testimoni dari klien yang telah merasakan manfaat STIFIn.</p>
            </div>

            <div class="testimonials-carousel">
                <div class="testimonials-track" id="testimonialsTrack">
                    <!-- Card 1 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('img/stifin-genetic.png') }}" alt="Ahmad"
                                class="w-12 h-12 rounded-full mr-3">
                            <div>
                                <h4 class="font-semibold">Ahmad Rizki</h4>
                                <p class="text-[#fdc20f]">Entrepreneur</p>
                            </div>
                        </div>
                        <p class="text-white">"Berkat STIFIn, saya jadi lebih memahami kelebihan dan kekurangan diri
                            sendiri. Sekarang saya bisa fokus pada bidang yang sesuai."</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('img/cover.png') }}" alt="Sari"
                                class="w-12 h-12 rounded-full mr-3">
                            <div>
                                <h4 class="font-semibold">Sari Dewi</h4>
                                <p class="text-[#fdc20f]">Ibu Rumah Tangga</p>
                            </div>
                        </div>
                        <p class="text-white">"STIFIn membantu saya memahami karakter anak-anak. Sekarang lebih mudah
                            mendidik sesuai kepribadian mereka."</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('img/hero.png') }}" alt="Budi"
                                class="w-12 h-12 rounded-full mr-3">
                            <div>
                                <h4 class="font-semibold">Budi Santoso</h4>
                                <p class="text-[#fdc20f]">HR Manager</p>
                            </div>
                        </div>
                        <p class="text-white">"Kami menggunakan STIFIn untuk perekrutan. Hasilnya sangat membantu dalam
                            membentuk tim yang solid."</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                R</div>
                            <div>
                                <h4 class="font-semibold">Rina Putri</h4>
                                <p class="text-[#fdc20f]">Guru SD</p>
                            </div>
                        </div>
                        <p class="text-white">"Setelah tes STIFIn, saya bisa lebih memahami cara belajar yang tepat
                            untuk setiap murid saya."</p>
                    </div>

                    <!-- Card 5 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                D</div>
                            <div>
                                <h4 class="font-semibold">Dian Pratama</h4>
                                <p class="text-[#fdc20f]">Mahasiswa</p>
                            </div>
                        </div>
                        <p class="text-white">"STIFIn membantu saya menemukan passion dan menentukan jalur karir yang
                            tepat."</p>
                    </div>

                    <!-- Card 6 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                F</div>
                            <div>
                                <h4 class="font-semibold">Fariz Rahman</h4>
                                <p class="text-[#fdc20f]">Pengusaha</p>
                            </div>
                        </div>
                        <p class="text-white">"Konsep STIFIn membantu saya membangun bisnis dengan menempatkan tim
                            sesuai potensi mereka."</p>
                    </div>

                    <!-- Card 7 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                L</div>
                            <div>
                                <h4 class="font-semibold">Linda Susanti</h4>
                                <p class="text-[#fdc20f]">Coach</p>
                            </div>
                        </div>
                        <p class="text-white">"STIFIn menjadi tools yang sangat membantu dalam sesi coaching karir
                            klien saya."</p>
                    </div>

                    <!-- Card 8 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                H</div>
                            <div>
                                <h4 class="font-semibold">Hendra Wijaya</h4>
                                <p class="text-[#fdc20f]">Direktur</p>
                            </div>
                        </div>
                        <p class="text-white">"Penempatan karyawan jadi lebih tepat setelah menerapkan konsep STIFIn di
                            perusahaan."</p>
                    </div>

                    <!-- Card 9 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                M</div>
                            <div>
                                <h4 class="font-semibold">Maya Sari</h4>
                                <p class="text-[#fdc20f]">Psikolog</p>
                            </div>
                        </div>
                        <p class="text-white">"STIFIn melengkapi tools yang saya gunakan dalam konseling dan
                            pengembangan diri klien."</p>
                    </div>

                    <!-- Card 10 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                K</div>
                            <div>
                                <h4 class="font-semibold">Kurniawan</h4>
                                <p class="text-[#fdc20f]">Trainer</p>
                            </div>
                        </div>
                        <p class="text-white">"Program training menjadi lebih efektif dengan pemahaman STIFIn untuk
                            tiap peserta."</p>
                    </div>

                    <!-- Card 11 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                P</div>
                            <div>
                                <h4 class="font-semibold">Putri Andini</h4>
                                <p class="text-[#fdc20f]">Pelajar</p>
                            </div>
                        </div>
                        <p class="text-white">"STIFIn membantu saya memilih jurusan kuliah yang sesuai dengan potensi
                            diri."</p>
                    </div>

                    <!-- Card 12 -->
                    <div class="testimonial-card bg-[#2a583b] p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                Y</div>
                            <div>
                                <h4 class="font-semibold">Yudi Pratama</h4>
                                <p class="text-[#fdc20f]">Wirausaha</p>
                            </div>
                        </div>
                        <p class="text-white">"Konsultasi STIFIn membantu saya menemukan bidang usaha yang cocok dengan
                            karakter."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-gradient-to-r from-[#15281c] to-[#173d23] rounded-2xl p-10 text-center text-white">
                <h2 class="text-3xl font-bold mb-4">Tertarik untuk Mengenal STIFIn?</h2>
                <p class="text-gray-100 max-w-2xl mx-auto mb-8">Dapatkan konsultasi gratis dan tes STIFIn untuk
                    mengetahui potensi terbaik dalam diri Anda.</p>
                <a href="#kontak"
                    class="inline-block bg-[#fdc20f] text-[#15281c] hover:bg-[#e1ab09] px-6 py-3 rounded-lg font-medium">Hubungi
                    Kami Sekarang</a>
            </div>
        </div>
    </section>

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
                <p>&copy; 2023 Bestie Stifin. All rights reserved.</p>
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

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 550) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

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

        // Testimonials continuous smooth scroll with drag functionality
        (function() {
            const track = document.getElementById('testimonialsTrack');
            if (!track) return;

            function initCarousel() {
                // Setup initial state
                const cards = Array.from(track.children);
                const cardWidth = cards[0].offsetWidth + 24; // width + gap
                let isHovered = false;
                let isDragging = false;
                let startTime = null;
                let animationFrame = null;
                let startX = 0;
                let currentTranslate = 0;
                let prevTranslate = 0;
                let lastX = 0;
                let dragVelocity = 0;
                let lastDragTime = 0;

                // Clone first set of cards for seamless loop
                cards.forEach(card => {
                    const clone = card.cloneNode(true);
                    track.appendChild(clone);
                });

                // Set initial position and style
                let position = 0;
                track.style.cursor = 'grab';
                track.style.transition = 'transform 0.3s ease-out';

                function animate(timestamp) {
                    if (!startTime) startTime = timestamp;
                    const progress = timestamp - startTime;

                    if (!isDragging) {
                        // Slower automatic scroll (1 pixel every 30ms)
                        position = (progress / 30) % (cardWidth * cards.length);
                        requestAnimationFrame(() => {
                            track.style.transform = `translate3d(${-position}px, 0, 0)`;
                        });
                    }

                    if (!isHovered && !isDragging) {
                        animationFrame = requestAnimationFrame(animate);
                    }
                }

                function startAnimation() {
                    if (!animationFrame && !isDragging) {
                        startTime = null;
                        animationFrame = requestAnimationFrame(animate);
                    }
                }

                function stopAnimation() {
                    if (animationFrame) {
                        cancelAnimationFrame(animationFrame);
                        animationFrame = null;
                    }
                }

                function handleDragStart(e) {
                    isDragging = true;
                    startX = e.type === 'mousedown' ? e.pageX : e.touches[0].pageX;
                    lastX = startX;
                    lastDragTime = Date.now();
                    currentTranslate = position;
                    track.style.cursor = 'grabbing';

                    // Keep transition for smoother start
                    track.style.transition = 'transform 0.1s ease-out';
                }

                function handleDragMove(e) {
                    if (!isDragging) return;
                    e.preventDefault();

                    const currentX = e.type === 'mousemove' ? e.pageX : e.touches[0].pageX;
                    const diff = currentX - startX;
                    const newPosition = currentTranslate - diff;

                    // Calculate velocity with smoothing
                    const currentTime = Date.now();
                    const timeDiff = Math.max(currentTime - lastDragTime, 1);
                    const distanceDiff = currentX - lastX;
                    const newVelocity = distanceDiff / timeDiff;
                    // Smooth velocity
                    dragVelocity = dragVelocity * 0.7 + newVelocity * 0.3;

                    lastX = currentX;
                    lastDragTime = currentTime;

                    position = newPosition % (cardWidth * cards.length);
                    if (position < 0) position += cardWidth * cards.length;

                    requestAnimationFrame(() => {
                        track.style.transform = `translate3d(${-position}px, 0, 0)`;
                    });
                }

                function handleDragEnd() {
                    if (!isDragging) return;

                    isDragging = false;
                    track.style.cursor = 'grab';
                    track.style.transition = 'transform 0.5s cubic-bezier(0.4, 0, 0.2, 1)';

                    // Apply smoother momentum
                    if (Math.abs(dragVelocity) > 0.1) {
                        // Smoothly apply momentum with damping
                        const momentum = dragVelocity * 150;
                        const targetPosition = position - momentum;
                        position = targetPosition % (cardWidth * cards.length);
                        if (position < 0) position += cardWidth * cards.length;

                        requestAnimationFrame(() => {
                            track.style.transform = `translate3d(${-position}px, 0, 0)`;
                        });
                    }

                    // Smooth transition back to auto-scroll
                    setTimeout(() => {
                        track.style.transition = 'transform 0.3s ease-out';
                        if (!isHovered) startAnimation();
                    }, 500);
                }

                // Mouse and touch event listeners
                track.addEventListener('mousedown', handleDragStart);
                track.addEventListener('touchstart', handleDragStart);
                window.addEventListener('mousemove', handleDragMove);
                window.addEventListener('touchmove', handleDragMove, {
                    passive: true
                });
                window.addEventListener('mouseup', handleDragEnd);
                window.addEventListener('touchend', handleDragEnd);

                // Prevent click events during drag
                track.addEventListener('click', (e) => {
                    if (isDragging) e.preventDefault();
                });

                // Pause on hover
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

                // Handle visibility change
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden) {
                        stopAnimation();
                    } else if (!isHovered && !isDragging) {
                        startAnimation();
                    }
                });

                startAnimation();
            }

            // Initialize after everything is loaded
            if (document.readyState === 'complete') {
                initCarousel();
            } else {
                window.addEventListener('load', initCarousel);
            }
        })();
    </script>
</body>

</html>
