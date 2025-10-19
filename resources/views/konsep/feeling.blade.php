@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white">
        <div class="container mx-auto px-4 pt-28 pb-16">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Mesin Kecerdasan Feeling</h1>
                <div class="rounded-2xl overflow-hidden shadow-md mb-10">
                    <img src="{{ asset('img/cover.png') }}" alt="Feeling" class="w-full h-72 md:h-[420px] object-cover">
                </div>
                <div class="prose max-w-none">
                    <p class="text-gray-700 leading-8">Tipe Feeling memproses informasi melalui emosi dan nilai personal.
                        Unggul dalam membangun hubungan, memahami orang lain, dan menciptakan harmoni.</p>
                    <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-3">Ciri Utama</h2>
                    <ul class="list-disc pl-6 text-gray-700 space-y-2">
                        <li>Empati dan kepekaan tinggi</li>
                        <li>Komunikatif dan kooperatif</li>
                        <li>Berorientasi pada nilai dan relasi</li>
                        <li>Peduli pada dampak sosial</li>
                    </ul>
                    <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-3">Arah Pengembangan</h2>
                    <p class="text-gray-700 leading-8">Menguatkan objektivitas, batasan personal, serta kemampuan analitis
                        akan membuat Feeling lebih seimbang dalam mengambil keputusan.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
