@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white py-16">
        <div class="container mx-auto px-4 mt-16">
            <div class="text-center mb-10">
                <p class="text-[#15281c] uppercase tracking-wider text-sm font-semibold">Dokumentasi</p>
                <h1 class="text-4xl font-bold text-gray-900 mb-3">Galeri Kegiatan</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Dokumentasi berbagai kegiatan STIFIn, mulai dari seminar,
                    workshop, hingga sesi konsultasi.</p>
            </div>

            <!-- Filter Categories -->
            <div class="filters flex flex-wrap justify-center gap-3 mb-10">
                <button class="px-4 py-2 rounded-full bg-[#15281c] text-white transition">Semua</button>
                <button
                    class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 transition">Seminar</button>
                <button
                    class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 transition">Workshop</button>
                <button
                    class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 transition">Training</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 transition">Event</button>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($galleries as $gallery)
                    <div class="gallery-item group relative overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm hover:shadow-xl transition cursor-pointer"
                        role="button" tabindex="0">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($gallery->image_path) }}"
                            alt="{{ $gallery->title }}"
                            class="w-full h-64 object-cover transform transition duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            @if ($gallery->category)
                                <span
                                    class="inline-block px-3 py-1 bg-[#fdc20f] text-[#15281c] text-xs font-semibold rounded-full mb-2 category">{{ $gallery->category }}</span>
                            @else
                                <span
                                    class="inline-block px-3 py-1 bg-gray-200 text-gray-700 text-xs font-semibold rounded-full mb-2 category">Umum</span>
                            @endif
                            <h3 class="text-lg font-semibold text-white">{{ $gallery->title ?? 'Tanpa Judul' }}</h3>
                            @if ($gallery->description)
                                <p class="text-gray-200 text-sm mt-1">{{ $gallery->description }}</p>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-span-full flex flex-col items-center justify-center py-16 px-4">
                        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Belum Ada Galeri</h3>
                        <p class="text-gray-600 text-center max-w-md mb-6">
                            Saat ini belum ada dokumentasi kegiatan yang tersedia. Silakan kembali lagi nanti untuk melihat
                            galeri kegiatan STIFIn yang menarik.
                        </p>
                        <a href="{{ route('home') }}"
                            class="inline-flex items-center px-6 py-3 bg-[#15281c] text-white rounded-lg hover:bg-[#0f1f13] transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Kembali ke Beranda
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Image Preview Modal -->
            <div id="imageModal" class="fixed inset-0 bg-black/90 flex items-center justify-center z-50 hidden p-4">
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

            <!-- Pagination -->
            @if (
                $galleries->count() > 0 &&
                    ($galleries instanceof \Illuminate\Contracts\Pagination\Paginator ||
                        $galleries instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator))
                <div class="mt-12 flex justify-center">
                    {{ $galleries->links() }}
                </div>
            @endif
        </div>
    </div>

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
                modalCaption.textContent = title;

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

            // Add click event to gallery items
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.addEventListener('click', function() {
                    const img = this.querySelector('img');
                    const title = this.querySelector('h3').textContent;
                    const description = this.querySelector('p').textContent;
                    openModal(img.src, title, description);
                });
            });

            // Category filter functionality
            const filterButtons = document.querySelectorAll('.filters button');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const category = button.textContent.toLowerCase();

                    // Toggle visual state using Tailwind classes
                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-[#15281c]', 'text-white');
                        btn.classList.add('bg-gray-100', 'text-gray-700');
                    });
                    button.classList.remove('bg-gray-100', 'text-gray-700');
                    button.classList.add('bg-[#15281c]', 'text-white');

                    // Filter items
                    galleryItems.forEach(item => {
                        const itemCategory = item.querySelector('.category').textContent.toLowerCase();
                        if (category === 'semua' || category === itemCategory) {
                            item.style.display = '';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
