@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white">
        <div class="container mx-auto px-4 pt-28 pb-16">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Mesin Kecerdasan Sensing</h1>
                <div class="rounded-2xl overflow-hidden shadow-md mb-10">
                    <img src="{{ asset('img/sensing-hero.jpeg') }}" alt="Sensing"
                        class="w-full h-72 md:h-[420px] object-cover">
                    </div>
                <div class="prose max-w-none">
                    <p class="text-gray-700 leading-8">Tipe Sensing memproses informasi melalui pengalaman langsung dan
                        detail konkret. Mereka cenderung pragmatis, realistis, dan sangat memperhatikan hal-hal teknis yang
                        bisa diterapkan.</p>
                    <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-3">Ciri Utama</h2>
                    <ul class="list-disc pl-6 text-gray-700 space-y-2">
                        <li>Detail-oriented dan teliti</li>
                        <li>Praktis, realistis, dan terstruktur</li>
                        <li>Nyaman dengan prosedur dan standar</li>
                        <li>Kuat pada keterampilan teknis dan fisik</li>
                                </ul>
                    <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-3">Arah Pengembangan</h2>
                    <p class="text-gray-700 leading-8">Melatih fleksibilitas, berpikir abstrak, serta memperkuat kemampuan
                        melihat gambaran besar akan membantu Sensing berkembang lebih seimbang.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
