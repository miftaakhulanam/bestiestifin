@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 mt-16">
            <div class="text-center mb-12">
                <p class="text-[#15281c] uppercase tracking-wider text-sm font-semibold">Wawasan</p>
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Artikel STIFIn</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan berbagai artikel menarik seputar STIFIn, pengembangan
                    diri, dan potensi kecerdasan.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($articles as $article)
                    @php
                        $category = 'Artikel';
                        $badgeClass = 'bg-white text-[#15281c]';
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
                                        <img src="{{ $avatar }}"
                                            class="w-9 h-9 rounded-full object-center bg-[#15281c]"
                                            alt="{{ $author }}">
                                        <div>
                                            <p class="text-sm font-semibold text-gray-800">{{ $author }}</p>
                                            <p class="text-xs text-gray-500">{{ $date }} • {{ $readTime }}</p>
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
                    <div class="col-span-full flex flex-col items-center justify-center py-16 px-4">
                        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Belum Ada Artikel</h3>
                        <p class="text-gray-600 text-center max-w-md mb-6">
                            Saat ini belum ada artikel yang tersedia. Silakan kembali lagi nanti untuk membaca
                            artikel-artikel menarik seputar STIFIn.
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

            @if ($articles->count() > 0)
                <div class="mt-12 flex justify-center">
                    {{ $articles->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
