@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-blue-gradient relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-[50px] items-center pt-15">
                <h2 class="font-bold text-4xl leading-[45px] text-center">Blog</h2>
                <div class="text-center mb-12">
                    <p class="text-white max-w-2xl mx-auto leading-relaxed">
                        Temukan beragam artikel menarik seputar teknologi, tips bisnis digital, dan perkembangan inovasi
                        terbaru yang kami sajikan untuk membantu Anda tetap update di era digital.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto max-w-[1150px] pt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Blog 1 -->
            <a href="#" class="grup">
                <div class="bg-white rounded-[20px] shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="w-full h-[220px] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80"
                            alt="Transformasi Digital Bisnis"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col justify-between h-[250px]">
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">
                                Transformasi Digital untuk Meningkatkan Efisiensi Bisnis
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Bagaimana teknologi membantu bisnis menyesuaikan diri dengan era digital untuk meningkatkan
                                produktivitas dan profitabilitas.
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Blog 2 -->
            <div class="bg-white rounded-[20px] shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="w-full h-[220px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581093588401-22a6b5a1d6a8?auto=format&fit=crop&w=800&q=80"
                        alt="Keamanan Data"
                        class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 flex flex-col justify-between h-[250px]">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">
                            Pentingnya Keamanan Data di Era Digital
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Lindungi data penting bisnis Anda dari ancaman siber yang terus berkembang dengan
                            langkah-langkah keamanan yang tepat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Blog 3 -->
            <div class="bg-white rounded-[20px] shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="w-full h-[220px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80"
                        alt="Tren Teknologi"
                        class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 flex flex-col justify-between h-[250px]">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">
                            Tren Teknologi 2025 yang Wajib Diketahui
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Dari kecerdasan buatan hingga automasi, inilah inovasi teknologi yang akan membentuk masa
                            depan bisnis Anda.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Blog 4 -->
            <div class="bg-white rounded-[20px] shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="w-full h-[220px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1526378722484-cc5c6100df01?auto=format&fit=crop&w=800&q=80"
                        alt="Cloud Computing"
                        class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 flex flex-col justify-between h-[250px]">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">
                            Keunggulan Cloud Computing untuk Bisnis Modern
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Cloud computing memberikan fleksibilitas, efisiensi, dan keamanan data yang lebih baik bagi
                            bisnis di era digital.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Blog 5 -->
            <div class="bg-white rounded-[20px] shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="w-full h-[220px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1535223289827-42f1e9919769?auto=format&fit=crop&w=800&q=80"
                        alt="AI dalam Bisnis"
                        class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 flex flex-col justify-between h-[250px]">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">
                            Pemanfaatan AI untuk Peningkatan Layanan Pelanggan
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Pelajari bagaimana kecerdasan buatan dapat membantu bisnis memahami pelanggan dan
                            meningkatkan kepuasan layanan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Blog 6 -->
            <div class="bg-white rounded-[20px] shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="w-full h-[220px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581091215367-59ab6f9e44bb?auto=format&fit=crop&w=800&q=80"
                        alt="Manajemen Proyek IT"
                        class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 flex flex-col justify-between h-[250px]">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">
                            Strategi Efektif dalam Manajemen Proyek IT
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Panduan terbaik untuk mengelola proyek IT secara efisien, mulai dari perencanaan hingga
                            pelaksanaan.
                        </p>
                    </div>
                </div>
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
