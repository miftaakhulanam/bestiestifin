@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 py-16 pt-24">
        <div class="container mx-auto px-4">
            <article class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    @if ($article->image_path)
                        <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->title }}"
                            class="w-full h-[400px] object-cover">
                    @else
                        <img src="{{ asset('img/kegiatan.jpg') }}" alt="{{ $article->title }}"
                            class="w-full h-[400px] object-cover">
                    @endif

                    <div class="p-8">
                        <!-- Meta informasi artikel -->
                        <div class="flex items-center mb-6">
                            <div
                                class="w-10 h-10 bg-[#15281c] rounded-full flex items-center justify-center text-white font-bold mr-3">
                                B
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Bestie STIFIn</p>
                                <p class="text-sm text-gray-600">
                                    {{ optional($article->created_at)->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>

                        <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $article->title }}</h1>

                        <div class="prose prose-lg max-w-none">
                            {!! $article->content !!}
                        </div>

                        <!-- Tags Section -->
                        @if ($article->tags)
                            <div class="mt-8 pt-6 border-t border-gray-200">
                                <h3 class="text-sm font-semibold text-gray-600 mb-3">Tagar:</h3>
                                <div class="flex flex-wrap gap-2">
                                    @foreach (explode(',', $article->tags) as $tag)
                                        <span
                                            class="px-3 py-1 bg-[#fdc20f] text-[#15281c] text-xs font-semibold rounded-full">
                                            {{ trim($tag) }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Share Section -->
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Bagikan Artikel</h3>
                            <div class="flex space-x-4">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}&quote={{ urlencode($article->title) }}"
                                    target="_blank"
                                    class="w-10 h-10 bg-[#1877f2] rounded-full flex items-center justify-center text-white hover:bg-[#166fe5] transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->title) }}"
                                    target="_blank"
                                    class="w-10 h-10 bg-[#1da1f2] rounded-full flex items-center justify-center text-white hover:bg-[#1a94df] transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . request()->url()) }}"
                                    target="_blank"
                                    class="w-10 h-10 bg-[#25d366] rounded-full flex items-center justify-center text-white hover:bg-[#20bd5b] transition duration-300">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                                    target="_blank"
                                    class="w-10 h-10 bg-[#0077b5] rounded-full flex items-center justify-center text-white hover:bg-[#006ba7] transition duration-300">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <button onclick="copyToClipboard('{{ request()->url() }}', this)"
                                    class="w-10 h-10 bg-gray-600 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition duration-300"
                                    title="Copy Link">
                                    <i class="fas fa-link"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

    @push('scripts')
        <script>
            function copyToClipboard(text, buttonElement) {
                // Gunakan method yang paling reliable
                const textArea = document.createElement("textarea");
                textArea.value = text;

                // Hindari scroll ke textArea
                textArea.style.top = "0";
                textArea.style.left = "0";
                textArea.style.position = "fixed";
                textArea.style.opacity = "0";

                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();

                try {
                    const successful = document.execCommand('copy');
                    document.body.removeChild(textArea);

                    if (successful) {
                        showCopySuccess(buttonElement);
                    } else {
                        showCopyError();
                    }
                } catch (err) {
                    document.body.removeChild(textArea);
                    console.error('Copy failed: ', err);
                    showCopyError();
                }
            }

            function showCopySuccess(buttonElement) {
                const originalIcon = buttonElement.innerHTML;
                buttonElement.innerHTML = '<i class="fas fa-check"></i>';
                buttonElement.classList.add('bg-green-600', 'hover:bg-green-700');
                buttonElement.classList.remove('bg-gray-600', 'hover:bg-gray-700');

                setTimeout(() => {
                    buttonElement.innerHTML = originalIcon;
                    buttonElement.classList.remove('bg-green-600', 'hover:bg-green-700');
                    buttonElement.classList.add('bg-gray-600', 'hover:bg-gray-700');
                }, 2000);
            }

            function showCopyError() {
                alert('Gagal menyalin link. Silakan salin manual dari address bar.');
            }
        </script>
    @endpush
@endsection
