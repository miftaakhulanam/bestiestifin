@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 bg-gradient-to-r from-[#15281c] to-[#173d23]">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold leading-14 text-white mb-4">Mengenal
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
    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 justify-around gap-8">
                <div
                    class="stats-card group p-8 bg-white rounded-xl hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="relative">

                        <div class="relative text-center flex flex-col items-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-[#fdc20f] to-[#ffdb5c] rounded-lg flex items-center justify-center mb-4 transform group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-map-marker-alt text-3xl text-white"></i>
                            </div>
                            <div class="text-4xl font-bold text-[#15281c] mb-2">
                                <span class="counter" data-target="185">0</span><span class="ml-1">+</span>
                            </div>
                            <div class="text-gray-600 font-medium tracking-wider">CABANG</div>
                        </div>
                    </div>
                </div>

                <div
                    class="stats-card group p-8 bg-white rounded-xl hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="relative">

                        <div class="relative text-center flex flex-col items-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-[#15281c] to-[#173d23] rounded-lg flex items-center justify-center mb-4 transform group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-users text-3xl text-white"></i>
                            </div>
                            <div class="text-4xl font-bold text-[#15281c] mb-2">
                                <span class="counter" data-target="4022">0</span><span class="ml-1">+</span>
                            </div>
                            <div class="text-gray-600 font-medium tracking-wider">PROMOTOR</div>
                        </div>
                    </div>
                </div>

                <div
                    class="stats-card group p-8 bg-white rounded-xl hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="relative">

                        <div class="relative text-center flex flex-col items-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-[#fdc20f] to-[#ffdb5c] rounded-lg flex items-center justify-center mb-4 transform group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-clipboard-check text-3xl text-white"></i>
                            </div>
                            <div class="text-4xl font-bold text-[#15281c] mb-2">
                                <span class="counter" data-target="726793">0</span><span class="ml-1">+</span>
                            </div>
                            <div class="text-gray-600 font-medium tracking-wider">TOTAL TES</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Konsep STIFIn Section -->
    <section id="konsep" class="py-20 bg-white relative">
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="h-full w-full bg-gradient-to-b from-gray-50 to-white"></div>
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="mb-12 text-center">
                <p class="text-[#15281c] uppercase tracking-wider text-sm font-semibold">Pengenalan</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-1">Konsep STIFIn</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-3">STIFIn membagi kepribadian menjadi 5 mesin kecerdasan utama
                    untuk memahami cara berpikir dan bertindak.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Sensing Card -->
                <a href="{{ route('konsep.sensing') }}" class="group">
                    <div
                        class="h-full bg-white rounded-2xl border border-red-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="p-6">
                            <div
                                class="w-16 h-16 mx-auto rounded-xl bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                                <span class="text-2xl font-bold text-white">S</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 text-center mt-4 group-hover:text-red-600">
                                Sensing</h3>
                            <p class="text-gray-600 text-center mt-2">Praktis, konkret, teliti, dan konservatif.</p>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-center text-red-600 font-medium">
                                <span>Pelajari lebih lanjut</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Thinking Card -->
                <a href="{{ route('konsep.thinking') }}" class="group">
                    <div
                        class="h-full bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="p-6">
                            <div
                                class="w-16 h-16 mx-auto rounded-xl bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                                <span class="text-2xl font-bold text-white">T</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 text-center mt-4 group-hover:text-gray-900">
                                Thinking</h3>
                            <p class="text-gray-600 text-center mt-2">Logis, analitis, sistematis, dan objektif.</p>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-center text-gray-900 font-medium">
                                <span>Pelajari lebih lanjut</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Intuiting Card -->
                <a href="{{ route('konsep.intuiting') }}" class="group">
                    <div
                        class="h-full bg-white rounded-2xl border border-blue-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="p-6">
                            <div
                                class="w-16 h-16 mx-auto rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                                <span class="text-2xl font-bold text-white">I</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 text-center mt-4 group-hover:text-blue-600">
                                Intuiting</h3>
                            <p class="text-gray-600 text-center mt-2">Visioner, konseptual, penuh ide kreatif.</p>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-center text-blue-600 font-medium">
                                <span>Pelajari lebih lanjut</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Feeling Card -->
                <a href="{{ route('konsep.feeling') }}" class="group">
                    <div
                        class="h-full bg-white rounded-2xl border border-green-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="p-6">
                            <div
                                class="w-16 h-16 mx-auto rounded-xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                                <span class="text-2xl font-bold text-white">F</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 text-center mt-4 group-hover:text-green-600">
                                Feeling</h3>
                            <p class="text-gray-600 text-center mt-2">Empatik, harmonis, unggul berkomunikasi.</p>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-center text-green-600 font-medium">
                                <span>Pelajari lebih lanjut</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Instinct Card -->
                <a href="{{ route('konsep.instinct') }}" class="group">
                    <div
                        class="h-full bg-white rounded-2xl border border-yellow-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <div class="p-6">
                            <div
                                class="w-16 h-16 mx-auto rounded-xl bg-gradient-to-br from-yellow-400 to-yellow-500 flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                                <span class="text-xl font-bold text-white">In</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 text-center mt-4 group-hover:text-yellow-600">
                                Instinct</h3>
                            <p class="text-gray-600 text-center mt-2">Naluri kuat, cepat mengambil keputusan.</p>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-center text-yellow-600 font-medium">
                                <span>Pelajari lebih lanjut</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Artikel Section -->
    <section id="artikel" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="mb-10 flex items-end justify-between gap-4 flex-wrap">
                <div>
                    <p class="text-[#15281c] uppercase tracking-wider text-sm font-semibold">Wawasan</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-1">Artikel Terbaru</h2>
                    <p class="text-gray-600 mt-2 max-w-2xl">Temukan insight seputar STIFIn, pengembangan diri, dan cara
                        memaksimalkan potensi.</p>
                </div>
                <a href="{{ route('articles.index') }}"
                    class="inline-flex items-center text-[#15281c] font-semibold hover:text-[#0f2a17]">
                    Lihat Semua
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($articles as $article)
                    @php
                        $category = 'Artikel';
                        $badgeClass = 'bg-[#fdc20f] text-[#15281c]';
                        $author = 'Bestie STIFIn';
                        $readTime = '5 menit baca';
                        $date = optional($article->created_at)->translatedFormat('d M Y');
                        $avatar = asset('img/stifin-genetic.png');
                    @endphp
                    <a href="{{ route('articles.show', $article->slug) }}" class="block">
                        <article
                            class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                            <div class="relative">
                                <img src="{{ $article->image_path ? asset('storage/' . $article->image_path) : asset('img/kegiatan.jpg') }}"
                                    alt="{{ $article->title }}" class="w-full h-56 object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                <span
                                    class="absolute top-4 left-4 text-xs font-semibold px-3 py-1 rounded-full {{ $badgeClass }}">{{ $category }}</span>
                            </div>
                            <div class="p-6">
                                <h3
                                    class="text-xl font-semibold text-gray-900 group-hover:text-[#15281c] transition-colors">
                                    {{ $article->title }}</h3>
                                <p class="text-gray-600 mt-2 line-clamp-2">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 120) }}</p>
                                <div class="mt-5 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ $avatar }}" class="w-9 h-9 rounded-full object-cover"
                                            alt="{{ $author }}">
                                        <div>
                                            <p class="text-sm font-semibold text-gray-800">{{ $author }}</p>
                                            <p class="text-xs text-gray-500">{{ $date }} • {{ $readTime }}
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 text-[#15281c] group-hover:bg-[#15281c] group-hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </a>
                @empty
                    <!-- Fallback jika belum ada artikel -->
                    <div class="col-span-full flex flex-col items-center justify-center py-12 px-4">
                        <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Artikel Segera Hadir</h3>
                        <p class="text-gray-600 text-center max-w-md">
                            Artikel menarik seputar STIFIn akan segera tersedia. Silakan kembali lagi nanti.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Galeri Section -->
    <section id="galeri" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-[#15281c] uppercase tracking-wider text-sm font-semibold">Dokumentasi</p>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Galeri Kegiatan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Dokumentasi seminar, workshop, dan kegiatan STIFIn lainnya.
                </p>
            </div>

            <!-- Image Preview Modal -->
            <div id="imageModal"
                class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden p-4">
                <div class="relative w-full h-full max-h-[95vh] flex items-center justify-center">
                    <button onclick="closeModal()" aria-label="Tutup"
                        class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center text-2xl">&times;</button>
                    <img id="modalImage" src="" alt="Preview"
                        class="max-h-[90vh] max-w-full object-contain rounded-lg shadow-2xl">
                    <div id="modalCaption"
                        class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-center text-base bg-black/50 px-4 py-2 rounded-full">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse ($galleries as $gallery)
                    <div class="gallery-item relative rounded-lg overflow-hidden shadow-md cursor-pointer hover:shadow-lg transition-shadow"
                        onclick="openModal('{{ \Illuminate\Support\Facades\Storage::url($gallery->image_path) }}', '{{ $gallery->title ?? 'Galeri STIFIn' }}', '{{ $gallery->description ?? '' }}')">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($gallery->image_path) }}"
                            alt="{{ $gallery->title ?? 'Galeri STIFIn' }}"
                            class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                        @if ($gallery->title)
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <h4 class="text-white text-sm font-semibold">{{ $gallery->title }}</h4>
                                @if ($gallery->category)
                                    <span class="text-xs text-[#fdc20f]">{{ $gallery->category }}</span>
                                @endif
                            </div>
                        @endif
                    </div>
                @empty
                    <!-- Fallback jika belum ada data galeri -->
                    <div class="col-span-full flex flex-col items-center justify-center py-12 px-4">
                        <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Galeri Segera Hadir</h3>
                        <p class="text-gray-600 text-center max-w-md">
                            Dokumentasi kegiatan STIFIn akan segera tersedia. Silakan kembali lagi nanti.
                        </p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('galeri.index') }}"
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
                            <img src="{{ asset('img/cover.png') }}" alt="Sari" class="w-12 h-12 rounded-full mr-3">
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
                            <img src="{{ asset('img/hero.png') }}" alt="Budi" class="w-12 h-12 rounded-full mr-3">
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

    @push('scripts')
        <script>
            // Image Modal Functions
            function openModal(imageSrc, title, description) {
                const modal = document.getElementById('imageModal');
                const modalImg = document.getElementById('modalImage');
                const modalCaption = document.getElementById('modalCaption');

                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
                modalImg.src = imageSrc;

                // Set caption dengan title dan description
                let captionText = title;
                if (description && description.trim() !== '') {
                    captionText += ' - ' + description;
                }
                modalCaption.textContent = captionText;

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
                document.body.style.overflow = '';
                document.removeEventListener('keydown', closeModalOnEscape);
            }

            function closeModalOnEscape(e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            }
        </script>
    @endpush
@endsection
