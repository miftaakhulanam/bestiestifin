@extends('layouts.app')

@section('content')
    <section class="pt-28 pb-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <p class="text-[#15281c] uppercase tracking-wider text-sm font-semibold">Hubungi Kami</p>
                <h1 class="text-4xl font-bold text-gray-900 mt-1">Kontak</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mt-3">Kami siap membantu kebutuhan Anda terkait STIFIn. Silakan
                    hubungi kami melalui kontak berikut atau kunjungi lokasi kami.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <!-- Map -->
                <div class="lg:col-span-3">
                    <div class="rounded-2xl overflow-hidden shadow-sm border border-gray-100">
                        <iframe title="Lokasi Bestie STIFIn"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.927159980714!2d112.727!3d-7.135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDgnMDYuMCJTIDExMsKwNDMnMzcuMCJF!5e0!3m2!1sen!2sid!4v1700000000000"
                            width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <h2 class="text-2xl font-bold text-gray-900">Informasi Kontak</h2>
                        <p class="text-gray-600 mt-2">Silakan pilih kanal yang paling nyaman untuk Anda.</p>

                        <div class="mt-6 space-y-5">
                            <div class="flex items-start gap-3">
                                <span
                                    class="w-10 h-10 rounded-xl bg-[#fdc20f] text-[#15281c] flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <div>
                                    <p class="text-sm text-gray-500">Alamat</p>
                                    <p class="font-semibold text-gray-900">Jl. STIFIn No. 123, Jakarta</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <span
                                    class="w-10 h-10 rounded-xl bg-[#fdc20f] text-[#15281c] flex items-center justify-center">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <div>
                                    <p class="text-sm text-gray-500">Telepon</p>
                                    <p class="font-semibold text-gray-900">+62 123 456 789</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <span
                                    class="w-10 h-10 rounded-xl bg-[#fdc20f] text-[#15281c] flex items-center justify-center">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="font-semibold text-gray-900">info@bestiestifin.com</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <span
                                    class="w-10 h-10 rounded-xl bg-[#fdc20f] text-[#15281c] flex items-center justify-center">
                                    <i class="fab fa-whatsapp"></i>
                                </span>
                                <div>
                                    <p class="text-sm text-gray-500">WhatsApp</p>
                                    <p class="font-semibold text-gray-900">+62 812-3456-7890</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 grid grid-cols-2 gap-3">
                            <a href="tel:+62123456789"
                                class="inline-flex items-center justify-center h-12 rounded-xl bg-[#15281c] text-white font-semibold hover:bg-[#0f2a17] transition">
                                <i class="fas fa-phone mr-2"></i> Telepon
                            </a>
                            <a href="mailto:info@bestiestifin.com"
                                class="inline-flex items-center justify-center h-12 rounded-xl border border-[#15281c] text-[#15281c] font-semibold hover:bg-[#15281c] hover:text-white transition">
                                <i class="fas fa-envelope mr-2"></i> Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection







