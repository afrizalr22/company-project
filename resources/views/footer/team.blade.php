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
        <div
            class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
            @forelse ($footer_team as $team)
                <div
                    class="card bg-white flex flex-col h-full justify-center items-center p-[30px] px-[29px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
                    <div
                        class="w-[100px] h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
                        <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
                            <img src="{{ Storage::url($team->avatar) }}" class="object-cover w-full h-full object-center"
                                alt="photo">
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 text-center">
                        <p class="font-bold text-xl leading-[30px]">{{ $team->name }}</p>
                        <p class="text-cp-light-grey">{{ $team->occupation }}</p>
                    </div>
                    <div class="flex items-center justify-center gap-[10px]">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="{{ asset('assets/icons/global.svg') }}" alt="icon">
                        </div>
                        <p class="text-cp-dark-blue font-semibold">{{ $team->location }}</p>
                    </div>
                </div>
            @empty
                <p>Data tidak tersedia!</p>
            @endforelse
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
