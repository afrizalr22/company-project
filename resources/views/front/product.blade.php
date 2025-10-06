@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-[50px] items-center py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Product
                    </p>
                </div>
                <h2 class="font-bold text-4xl leading-[45px] text-center">Product</h2>
            </div>
        </div>
    </div>
    <div class="container mx-auto max-w-[1150px] px-6 py-14">
        <!-- Judul Halaman -->
        <div class="text-center mb-12">
            <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Kami menyediakan berbagai solusi dan produk teknologi yang dirancang untuk mendukung kebutuhan bisnis modern
                —
                mulai dari infrastruktur, keamanan, hingga sistem digital terintegrasi.
            </p>
        </div>

        <!-- Grid Produk -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Produk 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?auto=format&fit=crop&w=800&q=80"
                    alt="Instalasi & Pengelolaan CCTV" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Instalasi & Pengelolaan CCTV</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sistem keamanan terpadu dengan CCTV berkualitas tinggi yang dapat diakses secara real-time melalui
                        smartphone atau komputer.
                    </p>
                </div>
            </div>

            <!-- Produk 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1581091870622-9c62b1e8e4b6?auto=format&fit=crop&w=800&q=80"
                    alt="Access Control" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Access Control</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sistem kontrol akses modern menggunakan kartu, sidik jari, atau face recognition untuk keamanan
                        ruangan dan gedung.
                    </p>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80"
                    alt="Absensi Digital" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Absensi Digital</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Kelola kehadiran karyawan secara otomatis dan akurat, langsung terintegrasi dengan dashboard dan
                        laporan kehadiran.
                    </p>
                </div>
            </div>

            <!-- Produk 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=800&q=80"
                    alt="Pemantauan Server & Jaringan" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Pemantauan Server & Jaringan</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sistem pemantauan real-time untuk mendeteksi gangguan server dan jaringan agar bisnis tetap berjalan
                        lancar.
                    </p>
                </div>
            </div>

            <!-- Produk 5 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1581090700227-1e37b190418e?auto=format&fit=crop&w=800&q=80"
                    alt="Website Development" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Pembuatan Website</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Kami membangun website profesional: landing page, company profile, portfolio, dan e-commerce sesuai
                        kebutuhan bisnis Anda.
                    </p>
                </div>
            </div>

            <!-- Produk 6 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=800&q=80"
                    alt="Support & Maintenance" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Support & Maintenance</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Layanan dukungan dan perawatan rutin untuk menjaga performa perangkat IT Anda tetap optimal setiap
                        saat.
                    </p>
                </div>
            </div>
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
