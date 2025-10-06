@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-2 items-center py-20">
                <div class="flex items-center ">
                    <h2 class="font-bold text-4xl leading-[45px] text-center">Services</h2>
                </div>
                <div>
                    <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-5xl mx-auto px-6 pt-10">
        <!-- Header -->
        <div class="text-center mb-12">
            <p class="text-gray-600 text-base leading-relaxed max-w-3xl mx-auto">
                Kami menyediakan berbagai layanan teknologi untuk membantu bisnis Anda tumbuh dengan solusi yang tepat,
                efisien, dan profesional.
            </p>
        </div>

        {{-- IT Solution --}}
        <div class="mb-14">
            <h3 class="text-2xl font-semibold text-blue-700 mb-5 border-l-4 border-blue-600 pl-3">1. IT Solution</h3>
            <div class="grid sm:grid-cols-2 gap-6">
                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Instalasi & Pengelolaan CCTV</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Pemasangan dan pengelolaan sistem CCTV dari titik strategis, kabel, hingga integrasi aplikasi
                        pemantauan.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Access Control</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Atur akses ruangan dengan sistem kartu, sidik jari, atau face recognition untuk keamanan lebih
                        baik.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Absensi Digital</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sistem absensi online real-time yang cepat dan akurat, cocok untuk manajemen karyawan modern.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Pemantauan Server & Jaringan</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Pantau server dan jaringan secara real-time dengan notifikasi otomatis jika ada gangguan.
                    </p>
                </div>
            </div>
        </div>

        {{-- Support & Maintenance --}}
        <div class="mb-14">
            <h3 class="text-2xl font-semibold text-blue-700 mb-5 border-l-4 border-blue-600 pl-3">2. Support &
                Maintenance</h3>
            <div class="grid sm:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Instalasi & Manajemen Kabel</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Pemasangan jaringan LAN dan kabel yang rapi serta efisien untuk mendukung sistem kerja Anda.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Konfigurasi Mikrotik & Router</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Konfigurasi perangkat jaringan agar koneksi tetap stabil, cepat, dan aman.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Perawatan Perangkat IT</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Layanan maintenance rutin untuk menjaga performa sistem dan mencegah gangguan teknis.
                    </p>
                </div>
            </div>
        </div>

        {{-- Pembuatan Website --}}
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-blue-700 mb-5 border-l-4 border-blue-600 pl-3">3. Pembuatan Website
            </h3>
            <div class="grid sm:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Landing Page</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Website promosi cepat dan efisien untuk menarik pelanggan dengan desain profesional.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Company Profile</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Tampilkan profil bisnis Anda dengan tampilan elegan yang mencerminkan profesionalitas.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Portfolio</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sajikan karya atau proyek Anda dalam tampilan visual yang menarik dan responsif.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">E-commerce</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Toko online dengan sistem transaksi aman dan tampilan yang user-friendly.
                    </p>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Redesign & Perbaikan Website</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Kami bantu perbarui tampilan dan performa website agar lebih modern dan cepat.
                    </p>
                </div>
            </div>
        </div>

        {{-- CTA --}}
        <div class="text-center mt-14">
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Butuh Bantuan Teknologi?</h4>
            <p class="text-gray-600 text-sm mb-4">Konsultasikan kebutuhan Anda dengan tim kami — gratis dan tanpa
                komitmen awal.</p>
            <a href="{{ url('/contact') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded-full transition">
                Konsultasi Gratis
            </a>
        </div>
    </div>
    <footer class="bg-cp-dark-blue w-full relative overflow-hidden mt-20">
        <div
            class="container max-w-[1130px] mx-auto flex flex-col md:flex-row flex-wrap gap-10 md:gap-y-4 items-start justify-between pt-10 md:pt-[100px] pb-10 md:pb-[220px] relative z-10 px-5">

            <!-- Logo & Sosmed -->
            <div class="flex flex-col gap-6 md:gap-10 w-full md:w-auto">
                <div class="flex items-center gap-3">
                    <div class="flex shrink-0 h-[43px] overflow-hidden">
                        <img src="{{ asset('assets/logo/logo-navbar.png') }}" class="object-contain w-full h-full"
                            alt="logo">
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/youtube.svg') }}" class="w-full h-full object-contain"
                                alt="youtube">
                        </div>
                    </a>
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/whatsapp.svg') }}" class="w-full h-full object-contain"
                                alt="whatsapp">
                        </div>
                    </a>
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/facebook.svg') }}" class="w-full h-full object-contain"
                                alt="facebook">
                        </div>
                    </a>
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/instagram.svg') }}" class="w-full h-full object-contain"
                                alt="instagram">
                        </div>
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div class="flex flex-col md:flex-row flex-wrap gap-10 md:gap-[50px] w-full md:w-auto">

                <div class="flex flex-col w-full md:w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">Usefull Links</p>
                    <a href="{{ route('policies.terms') }}"
                        class="text-cp-light-grey hover:text-white transition-all duration-300">Policies &
                        Terms</a>
                    <a href="{{ route('coverage.area') }}"
                        class="text-cp-light-grey hover:text-white transition-all duration-300">Coverage
                        Area</a>
                </div>

                <div class="flex flex-col w-full md:w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">Company</p>
                    <a href="{{ route('about.us') }}"
                        class="text-cp-light-grey hover:text-white transition-all duration-300">About
                        Us</a>
                    <a href="{{ route('our.history') }}"
                        class="text-cp-light-grey hover:text-white transition-all duration-300">Our
                        History</a>
                    <a href="{{ route('front.about') }}"
                        class="text-cp-light-grey hover:text-white transition-all duration-300">Contact
                        Us</a>
                    <a href="{{ route('our.services') }}"
                        class="text-cp-light-grey hover:text-white transition-all duration-300">Our
                        Services</a>
                    <a href="{{ route('our.team') }}"
                        class="text-cp-light-grey hover:text-white transition-all duration-300">Team
                        Us</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Blog</a>
                </div>

                <!-- Form Kontak -->
                <div class="flex flex-col w-full md:w-[320px] ">
                    <p class="font-bold text-2xl text-white mb-2">Formulir Kontak</p>

                    <form action="" method="POST" class="flex flex-col gap-4">
                        <!-- Nama -->
                        <div class="flex flex-col">
                            <label for="nama" class="text-sm font-medium text-white mb-1">Nama</label>
                            <input id="nama" name="nama" type="text"
                                class="px-3 py-2 rounded-lg border bg-white text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <!-- Email -->
                        <div class="flex flex-col">
                            <label for="email" class="text-sm font-medium text-white mb-1">Email</label>
                            <input id="email" name="email" type="email"
                                class="px-3 py-2 rounded-lg border bg-white text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <!-- Pesan -->
                        <div class="flex flex-col">
                            <label for="pesan" class="text-sm font-medium text-white mb-1">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="4"
                                class="px-3 py-2 rounded-lg border bg-white text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"></textarea>
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" id="submit"
                            class="w-full py-2 mt-2 bg-white hover:bg-blue-700 text-blue font-semibold rounded-lg shadow-md transition duration-200 ease-in-out">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Background Text -->
        <div class="absolute pb-5 md:-bottom-[135px] w-full">
            <p
                class="font-extrabold text-[50px] md:text-[250px] leading-50px] md:leading-[375px] text-center text-white opacity-5">
                NEXICON
            </p>
        </div>
    </footer>
@endsection
