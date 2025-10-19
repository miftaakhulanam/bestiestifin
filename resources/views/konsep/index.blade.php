@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-green-950 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-yellow-400 mb-4">Konsep STIFIn</h1>
                <p class="text-gray-300 max-w-2xl mx-auto">Memahami 5 mesin kecerdasan dalam metode STIFIn untuk pengembangan
                    diri yang optimal.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Sensing -->
                <div class="bg-green-900 rounded-xl p-6 hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-hands text-red-500 text-2xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-yellow-400 text-center mb-3">Sensing</h2>
                    <p class="text-gray-300 text-center mb-4">Tipe praktis yang detail-oriented dengan kemampuan teknis yang
                        kuat.</p>
                    <div class="text-center">
                        <a href="{{ route('konsep.sensing') }}"
                            class="inline-block px-6 py-2 bg-green-800 text-yellow-400 rounded-lg hover:bg-green-700 transition duration-300">Pelajari
                            Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Thinking -->
                <div class="bg-green-900 rounded-xl p-6 hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-brain text-blue-500 text-2xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-yellow-400 text-center mb-3">Thinking</h2>
                    <p class="text-gray-300 text-center mb-4">Tipe analitis dengan pemikiran logis dan sistematis.</p>
                    <div class="text-center">
                        <a href="{{ route('konsep.thinking') }}"
                            class="inline-block px-6 py-2 bg-green-800 text-yellow-400 rounded-lg hover:bg-green-700 transition duration-300">Pelajari
                            Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Intuiting -->
                <div class="bg-green-900 rounded-xl p-6 hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-lightbulb text-purple-500 text-2xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-yellow-400 text-center mb-3">Intuiting</h2>
                    <p class="text-gray-300 text-center mb-4">Tipe visioner dengan kreativitas dan ide-ide inovatif.</p>
                    <div class="text-center">
                        <a href="{{ route('konsep.intuiting') }}"
                            class="inline-block px-6 py-2 bg-green-800 text-yellow-400 rounded-lg hover:bg-green-700 transition duration-300">Pelajari
                            Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Feeling -->
                <div class="bg-green-900 rounded-xl p-6 hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-heart text-pink-500 text-2xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-yellow-400 text-center mb-3">Feeling</h2>
                    <p class="text-gray-300 text-center mb-4">Tipe empatik dengan kecerdasan emosional yang tinggi.</p>
                    <div class="text-center">
                        <a href="{{ route('konsep.feeling') }}"
                            class="inline-block px-6 py-2 bg-green-800 text-yellow-400 rounded-lg hover:bg-green-700 transition duration-300">Pelajari
                            Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Instinct -->
                <div class="bg-green-900 rounded-xl p-6 hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-bolt text-yellow-500 text-2xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-yellow-400 text-center mb-3">Instinct</h2>
                    <p class="text-gray-300 text-center mb-4">Tipe spontan dengan kemampuan adaptasi yang cepat.</p>
                    <div class="text-center">
                        <a href="{{ route('konsep.instinct') }}"
                            class="inline-block px-6 py-2 bg-green-800 text-yellow-400 rounded-lg hover:bg-green-700 transition duration-300">Pelajari
                            Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
