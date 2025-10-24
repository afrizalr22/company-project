@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-blue-gradient relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-2 items-center py-20">
                <div class="flex items-center ">
                    <h2 class="font-bold text-4xl leading-[45px] text-center">Sejarah Kami</h2>
                </div>
                <div>
                    <div class="w-50 h-1 bg-blue-600 mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <!-- Konten Sejarah -->
            <div class="text-gray-700 leading-relaxed text-justify space-y-5">
                <p>
                    Nexicon berawal dari mimpi besar para mahasiswa yang lahir dari diskusi sederhana di sela-sela tugas
                    kuliah.
                    Kami memiliki satu pemikiran yang sama:
                    <span class="italic text-blue-600">
                        “bagaimana menciptakan solusi teknologi yang mampu memberikan dampak positif bagi masyarakat dan
                        dunia bisnis.”
                    </span>
                    Dari kampus, perjalanan ini dimulai dengan semangat belajar, berinovasi, dan bekerja keras untuk
                    menciptakan perubahan.
                </p>

                <p>
                    Berbekal tekad, keahlian yang terus diasah, serta keinginan untuk memberi dampak positif,
                    kami membangun Nexicon sebagai langkah awal untuk mewujudkan mimpi tersebut.
                    Kami percaya bahwa dengan kolaborasi, kerja keras, dan keberanian untuk bermimpi besar,
                    kami bisa menciptakan sesuatu yang bermakna—bukan hanya bagi kami,
                    tetapi juga bagi mereka yang membutuhkan teknologi untuk bertumbuh.
                </p>
            </div>

            <!-- Kutipan (Opsional) -->
            <div class="mt-12">
                <p class="text-gray-500 italic">
                    "Dari mimpi kampus menuju solusi nyata untuk masa depan digital."
                </p>
            </div>
        </div>
    </div>
    <footer class="bg-blue-gradient w-full relative overflow-hidden">
        <div
            class="container max-w-[1130px] mx-auto flex flex-col md:flex-row flex-wrap gap-10 md:gap-y-4 items-start justify-between pt-10 md:pt-[100px] pb-10 md:pb-[110px] relative z-10 px-5">

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
                        class="text-white hover:text-gray-700 transition-all duration-300">Policies &
                        Terms</a>
                    <a href="{{ route('coverage.area') }}"
                        class="text-white hover:text-gray-700 transition-all duration-300">Coverage
                        Area</a>
                </div>

                <div class="flex flex-col w-full md:w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">Company</p>
                    <a href="{{ route('about.us') }}"
                        class="text-white hover:text-gray-700 transition-all duration-300">About
                        Us</a>
                    <a href="{{ route('our.history') }}"
                        class="text-white hover:text-gray-700 transition-all duration-300">Our
                        History</a>
                    <a href="{{ route('front.contact') }}"
                        class="text-white hover:text-gray-700 transition-all duration-300">Contact
                        Us</a>
                    <a href="{{ route('our.services') }}"
                        class="text-white hover:text-gray-700 transition-all duration-300">Our
                        Services</a>
                    <a href="{{ route('our.team') }}"
                        class="text-white hover:text-gray-700 transition-all duration-300">Team
                        Us</a>
                    <a href="{{ route('front.blog') }}"
                        class="text-white hover:text-gray-700 transition-all duration-300">Blog</a>
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
                            class="w-full py-2 mt-2 bg-white hover:bg-blue-700 text-blue hover:text-white font-semibold rounded-lg shadow-md transition duration-200 ease-in-out">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
@endsection
