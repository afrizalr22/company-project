@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-2 items-center py-20">
                <div class="flex items-center ">
                    <h2 class="font-bold text-4xl leading-[45px] text-center">Tentang Kami</h2>
                </div>
                <div>
                    <div class="w-50 h-1 bg-blue-600 mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-white mx-auto max-w-[1150px] px-6 pt-20">
        <!-- Bagian Tentang Kami -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start mb-14">
            <!-- Gambar -->
            <div class="flex justify-center lg:justify-start">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=700&q=80"
                    alt="Tentang Kami - Nexicon" class="w-[500px] h-[380px] object-cover rounded-[10px] shadow-lg mt-2">
            </div>

            <!-- Teks -->
            <div class="text-gray-700 flex flex-col justify-between">
                <div>
                    <p class="mb-4 leading-relaxed">
                        Kami, <strong>PT. Next Generation Solutions (Nexicon)</strong> adalah perusahaan System
                        Integrator yang hadir untuk membantu setiap bisnis bertransformasi menuju era digital. Kami
                        berfokus menghadirkan solusi teknologi yang inovatif, terintegrasi, dan mampu memberikan dampak
                        nyata bagi perusahaan dan masyarakat.
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Berdiri sejak tahun <strong>2024</strong>, Nexicon berkembang pesat dan dipercaya oleh berbagai
                        instansi — mulai dari pemerintahan, perusahaan swasta, hingga UMKM. Tahun <strong>2025</strong>
                        menjadi momentum penting dalam membangun fondasi digital yang lebih kuat bagi mitra kami.
                    </p>
                    <p class="mb-4 leading-relaxed">
                        Nama <strong>Nexicon</strong> berasal dari kata <em>Next</em> (berikutnya) dan <em>Icon</em>
                        (simbol), mencerminkan semangat kami untuk menjadi simbol inovasi dan kemajuan teknologi.
                    </p>
                </div>
            </div>
        </div>

        <!-- Bagian Visi & Misi -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10 pb-16">
            <!-- Kolom Visi -->
            <div class="bg-gray-50 rounded-[10px] p-8 shadow-sm border border-gray-100">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3 border-b border-gray-200 pb-2">Visi Kami</h3>
                <p class="leading-relaxed text-gray-700">
                    Menjadi ikon solusi teknologi masa depan yang memimpin perubahan digital untuk dunia yang lebih baik.
                </p>
            </div>

            <!-- Kolom Misi -->
            <div class="bg-gray-50 rounded-[10px] p-8 shadow-sm border border-gray-100">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3 border-b border-gray-200 pb-2">Misi Kami</h3>
                <ul class="list-decimal list-inside space-y-2 text-gray-700 leading-relaxed">
                    <li>Menghadirkan solusi teknologi yang inovatif dan bernilai tinggi.</li>
                    <li>Menjadi simbol kepercayaan dan profesionalisme di bidang teknologi.</li>
                    <li>Mendorong kolaborasi lintas sektor untuk efisiensi digital.</li>
                    <li>Membantu bisnis dan masyarakat beradaptasi di era digital.</li>
                </ul>
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
