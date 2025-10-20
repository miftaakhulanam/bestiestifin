@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white">
        <div class="container mx-auto px-4 pt-28 pb-16">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">{{ $concept->title }}</h1>
                <div class="rounded-2xl overflow-hidden shadow-md mb-10">
                    <img src="{{ $concept->image_path ? asset('storage/' . $concept->image_path) : asset('img/kegiatan.jpg') }}"
                        alt="{{ $concept->title }}" class="w-full h-72 md:h-[420px] object-cover">
                </div>
                <div class="prose max-w-none">
                    {!! $concept->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection






