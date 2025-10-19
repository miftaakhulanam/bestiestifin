@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white">
        <div class="container mx-auto px-4 pt-28 pb-16">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Mesin Kecerdasan Instinct</h1>
                <div class="rounded-2xl overflow-hidden shadow-md mb-10">
                    <img src="{{ asset('img/kegiatan.jpg') }}" alt="Instinct" class="w-full h-72 md:h-[420px] object-cover">
                </div>
                <div class="prose max-w-none">
                    <p class="text-gray-700 leading-8">Tipe Instinct mengandalkan naluri, kecepatan bertindak, dan adaptasi
                        tinggi. Mereka sigap mengambil keputusan dalam situasi dinamis dan memiliki daya tahan yang kuat.
                    </p>
                    <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-3">Ciri Utama</h2>
                    <ul class="list-disc pl-6 text-gray-700 space-y-2">
                        <li>Spontan dan cepat merespons</li>
                        <li>Adaptif terhadap perubahan</li>
                        <li>Tangguh secara mental</li>
                        <li>Berani mengambil risiko</li>
                    </ul>
                    <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-3">Arah Pengembangan</h2>
                    <p class="text-gray-700 leading-8">Menguatkan perencanaan, komunikasi terstruktur, dan analisis mendalam
                        membuat Instinct lebih efektif dalam jangka panjang.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
