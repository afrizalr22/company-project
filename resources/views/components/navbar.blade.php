<nav class="flex flex-wrap items-center justify-between bg-cp-light-blue p-[20px_30px] rounded-[20px] gap-y-3">
    <div class="flex items-center gap-3">
        <div class="flex shrink-0 h-[43px] overflow-hidden">
            <img src="assets/logo/logo-navbar.png" class="object-contain w-full h-full" alt="logo">
        </div>
        {{-- <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">ShaynaComp</p>
            <p id="CompanyTagline" class="text-sm text-cp-light-grey">Build Futuristic Dreams</p>
        </div> --}}
    </div>
    <ul class="flex flex-wrap items-center gap-[50px] mx-auto text-white">
        <li
            class="{{ request()->routeIs('front.index') ? 'text-cp-dark-blue' : '' }} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{ route('front.index') }}">Home</a>
        </li>
        <!-- Dropdown -->
        <li id="layanan-menu" class="relative font-semibold transition-all duration-300">
            <a href="#" id="layanan-toggle" class="hover:text-cp-dark-blue" aria-haspopup="true"
                aria-expanded="false">
                Layanan Kami
            </a>
            <!-- Inisialisasi: hidden + opacity-0 + scale-95 untuk animasi -->
            <ul id="layanan-dropdown"
                class="absolute left-0 mt-2 hidden w-56 bg-white text-black rounded-lg shadow-lg z-50 opacity-0 scale-95 transform transition-all duration-200 origin-top">
                <li><a href="#" class="block px-4 py-2 hover:bg-cp-light-blue hover:text-white">IT Solutions</a>
                </li>
                <li><a href="#" class="block px-4 py-2 hover:bg-cp-light-blue hover:text-white">Support &
                        Maintenance</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-cp-light-blue hover:text-white">Pembuatan
                        Website</a></li>
            </ul>
        </li>

        <li
            class="{{ request()->routeIs('front.team') ? 'text-cp-dark-blue' : '' }} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{ route('front.team') }}">Gallery</a>
        </li>
        <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="">Blog</a>
        </li>
        <li
            class="{{ request()->routeIs('front.about') ? 'text-cp-dark-blue' : '' }} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{ route('front.about') }}">About</a>
        </li>
    </ul>
    {{-- <a href="{{ route('front.appointment') }}" class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Get a Quote</a> --}}
</nav>
