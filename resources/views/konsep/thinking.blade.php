@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white">
        <div class="container mx-auto px-4 pt-28 pb-16">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">
                    {{ $concept->title ?? 'Mesin Kecerdasan Thinking' }}</h1>
                <div class="rounded-2xl overflow-hidden shadow-md mb-10">
                    @if (isset($concept) && $concept->image_path)
                        @if (str_starts_with($concept->image_path, 'uploads/'))
                            <img src="{{ Storage::url($concept->image_path) }}" alt="{{ $concept->title ?? 'Thinking' }}"
                                class="w-full h-72 md:h-[420px] object-cover">
                        @else
                            <img src="{{ asset('img/' . $concept->image_path) }}" alt="{{ $concept->title ?? 'Thinking' }}"
                                class="w-full h-72 md:h-[420px] object-cover">
                        @endif
                    @else
                        <img src="{{ asset('img/hero.png') }}" alt="Thinking" class="w-full h-72 md:h-[420px] object-cover">
                    @endif
                </div>
                <div class="prose max-w-none">
                    @if (isset($concept) && $concept->content)
                        {!! $concept->content !!}
                    @else
                        <p class="text-gray-700 leading-8">Tipe Thinking memproses informasi melalui analisis logis dan
                            sistematis. Kuat dalam berpikir abstrak, pemecahan masalah, dan pengambilan keputusan objektif.
                        </p>
                        <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-3">Ciri Utama</h2>
                        <ul class="list-disc pl-6 text-gray-700 space-y-2">
                            <li>Analitis dan sistematis</li>
                            <li>Berorientasi data dan struktur</li>
                            <li>Objektif dan rasional</li>
                            <li>Kuat di strategi dan perencanaan</li>
                        </ul>
                        <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-3">Arah Pengembangan</h2>
                        <p class="text-gray-700 leading-8">Menyeimbangkan dengan kecerdasan emosional, komunikasi
                            interpersonal,
                            dan empati akan memperkaya efektivitas Thinking dalam kolaborasi.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
