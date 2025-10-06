<nav id="navbar" class="bg-blue-500 p-[20px_30px] rounded-[20px] transition-all duration-500 ease-in-out z-50">

    <div class="flex flex-wrap items-center justify-between gap-y-3 max-w-[1130px] mx-auto">
        <div class="flex items-center gap-3">
            <div class="flex shrink-0 h-[43px] overflow-hidden">
                <img src="assets/logo/logo-navbar.png" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>

        <ul class="flex flex-wrap items-center gap-[50px] mx-auto text-white">
            <li
                class="{{ request()->routeIs('front.index') ? 'text-blue-950' : '' }} font-semibold hover:text-blue-950 transition-all duration-300">
                <a href="{{ route('front.index') }}">Home</a>
            </li>

            <!-- Dropdown -->
            <li id="layanan-menu" class="relative font-semibold transition-all duration-300 group">
                <a href="#" class="hover:text-blue-950">Layanan Kami</a>
                <ul id="layanan-dropdown"
                    class="absolute left-0 top-full w-56 bg-blue-600 text-white rounded-lg shadow-lg z-50 
                           hidden opacity-0 scale-95 transform transition-all duration-200 origin-top
                           group-hover:block group-hover:opacity-100 group-hover:scale-100">
                    <li><a href="{{ route('front.itsolutions') }}"
                            class="{{ request()->routeIs('front.itsolutions') ? 'text-blue-950' : '' }} px-4 py-2 hover:bg-cp-light-blue hover:text-blue-950">IT
                            Solutions</a></li>
                    <li><a href="{{ route('front.maintenance') }}"
                            class="{{ request()->routeIs('front.maintenance') ? 'text-blue-950 block' : 'block' }} px-4 py-2 hover:bg-cp-light-blue hover:text-blue-950">Support
                            & Maintenance</a></li>
                    <li><a href="{{ route('front.build_website') }}"
                            class="{{ request()->routeIs('front.build_website') ? 'text-blue-950' : '' }} px-4 py-2 hover:bg-cp-light-blue hover:text-blue-950">Pembuatan
                            Website</a></li>
                </ul>
            </li>

            <li class="font-semibold hover:text-blue-950 transition-all duration-300">
                <a href="">Produk</a>
            </li>
            <li
                class="{{ request()->routeIs('front.team') ? 'text-blue-950' : '' }} font-semibold hover:text-blue-950 transition-all duration-300">
                <a href="{{ route('front.team') }}">Gallery</a>
            </li>
            <li
                class="{{ request()->routeIs('front.blog') ? 'text-blue-950' : '' }} font-semibold hover:text-blue-950 transition-all duration-300">
                <a href="">Blog</a>
            </li>
            <li
                class="{{ request()->routeIs('front.about') ? 'text-blue-950' : '' }} font-semibold hover:text-blue-950 transition-all duration-300">
                <a href="{{ route('front.about') }}">About</a>
            </li>
        </ul>
    </div>
</nav>

<!-- placeholder untuk mencegah ketiban -->
<div id="nav-placeholder"></div>
