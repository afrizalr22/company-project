@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-[50px] items-center py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">(Contact As)About Us
                    </p>
                </div>
                <h2 class="font-bold text-4xl leading-[45px] text-center">We’re Ready<br>to Help You</h2>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="flex flex-row bg-white shadow-lg rounded-xl overflow-hidden w-[1000px]">

            <!-- Form Contact (Kiri) -->
            <div class="w-1/2 p-8 border-r">
                <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                <form method="" action="" class="space-y-3 text-base">
                    @csrf
                    <div>
                        <label for="nama" class="block mb-1">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="w-full border rounded-md px-2 py-1 focus:ring focus:ring-blue-400 outline-none">
                    </div>
                    <div>
                        <label for="email" class="block mb-1">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full border rounded-md px-2 py-1 focus:ring focus:ring-blue-400 outline-none">
                    </div>
                    <div>
                        <label for="info" class="block mb-1">Dapet Info Dari?</label>
                        <select name="info" id="info"
                            class="w-full border rounded-md px-2 py-1 focus:ring focus:ring-blue-400 outline-none">
                            <option value="lainnya">Lainnya</option>
                            <option value="sosialMedia">Sosial Media</option>
                            <option value="website">Website</option>
                            <option value="teman">Teman</option>
                        </select>
                    </div>
                    <div>
                        <label for="pesan" class="block mb-1">Pesan</label>
                        <textarea name="pesan" id="pesan" rows="3"
                            class="w-full border rounded-md px-2 py-1 focus:ring focus:ring-blue-400 outline-none"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="bg-blue-600 text-white px-4 py-1.5 rounded-md hover:bg-blue-700 transition">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>

            <!-- Support Info (Kanan) -->
            <div class="w-1/2 p-6 bg-gray-50">
                <h4 class="text-lg font-semibold mb-4">Support Info</h4>
                <p class="mb-2">📍 BSD City</p>
                <p class="mb-2">📞 089xxxxxxxx</p>
                <p>📧 nexicon.id@gmail.com</p>
            </div>
        </div>
    </div>
    {{-- <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
        @forelse ($abouts as $about)
            <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                    <img src="{{ Storage::url($about->thumbnail) }}" class="w-full h-full object-contain" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                    <p
                        class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        OUR {{ $about->type }}</p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">{{ $about->name }}</h2>

                        <div class="flex flex-col gap-5">
                            @forelse ($about->keypoints as $keypoint)
                                <div class="flex items-center gap-[10px]">
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="assets/icons/tick-circle.svg" alt="icon">
                                    </div>
                                    <p class="leading-[26px] font-semibold">Commit to delivering the highest quality in
                                        every
                                        project. Set the standard for excellence world</p>
                                </div>
                            @empty
                                <p>Data tidak tersedia!</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>Data tidak tersedia!</p>
        @endforelse
    </div>
    <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
        <h2 class="font-bold text-lg">Trusted by 500+ Top Leaders Worldwide</h2>
        <div class="logo-container flex flex-wrap gap-5 justify-center">
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-44.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div id="Stats" class="bg-cp-black w-full mt-20">
        <div class="container max-w-[1000px] mx-auto py-10">
            <div class="flex flex-wrap items-center justify-between p-[10px]">
                @forelse ($statistics as $statistic)
                    <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
                        <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                            <img src="{{ Storage::url($statistic->icon) }}" class="object-contain w-full h-full"
                                alt="icon">
                        </div>
                        <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">{{ $statistic->goal }}</p>
                        <p class="text-cp-light-grey">{{ $statistic->name }}</p>
                    </div>
                @empty
                    <p>Data tidak tersedia!</p>
                @endforelse
            </div>
        </div>
    </div>
    <div id="Awards" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR AWARDS</p>
                <h2 class="font-bold text-4xl leading-[45px]">We’ve Dedicated Our<br>Best Team Efforts</h2>
            </div>
            <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Explore More</a>
        </div>
        <div class="awards-card-container grid grid-cols-4 gap-[30px] justify-center">
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Solid Fundamental Crafter Async</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bali, 2020</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Most Crowded Yet Harmony Place</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Shanghai, 2021</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Small Things Made Much Big Impacts</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Zurich, 2022</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Teamwork and Solidarity</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bandung, 2023</p>
            </div>
        </div>
    </div> --}}
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
