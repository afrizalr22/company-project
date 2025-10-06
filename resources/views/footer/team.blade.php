@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-2 items-center py-20">
                <div class="flex items-center ">
                    <h2 class="font-bold text-4xl leading-[45px] text-center">Our Teams</h2>
                </div>
                <div>
                    <div class="w-27 h-1 bg-blue-600 mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-white mx-auto max-w-[1150px] px-5">
        <div class="text-center mb-14">
            <p class="text-gray-500 max-w-2xl mx-auto">
                Tim profesional kami yang siap membantu Anda dalam setiap proyek teknologi dan inovasi digital.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 justify-center">
            <!-- Card Anggota -->
            <div
                class="group bg-white rounded-2xl border border-transparent shadow-md hover:shadow-xl hover:border-blue-500 transition-all duration-300 p-6 flex flex-col items-center text-center">
                <div
                    class="relative w-[140px] h-[140px] rounded-full overflow-hidden bg-gradient-to-tr from-blue-600 to-indigo-600 mb-5">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team member"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="font-semibold text-lg text-gray-800">Ahmad Rizky</h3>
            </div>

            <div
                class="group bg-white rounded-2xl border border-transparent shadow-md hover:shadow-xl hover:border-blue-500 transition-all duration-300 p-6 flex flex-col items-center text-center">
                <div
                    class="relative w-[140px] h-[140px] rounded-full overflow-hidden bg-gradient-to-tr from-blue-600 to-indigo-600 mb-5">
                    <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Team member"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="font-semibold text-lg text-gray-800">Siti Aisyah</h3>
            </div>

            <div
                class="group bg-white rounded-2xl border border-transparent shadow-md hover:shadow-xl hover:border-blue-500 transition-all duration-300 p-6 flex flex-col items-center text-center">
                <div
                    class="relative w-[140px] h-[140px] rounded-full overflow-hidden bg-gradient-to-tr from-blue-600 to-indigo-600 mb-5">
                    <img src="https://randomuser.me/api/portraits/men/60.jpg" alt="Team member"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="font-semibold text-lg text-gray-800">Rafi Hidayat</h3>
            </div>

            <div
                class="group bg-white rounded-2xl border border-transparent shadow-md hover:shadow-xl hover:border-blue-500 transition-all duration-300 p-6 flex flex-col items-center text-center">
                <div
                    class="relative w-[140px] h-[140px] rounded-full overflow-hidden bg-gradient-to-tr from-blue-600 to-indigo-600 mb-5">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Team member"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                </div>
                <h3 class="font-semibold text-lg text-gray-800">Dewi Lestari</h3>
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
