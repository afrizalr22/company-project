@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-blue-gradient relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-[50px] items-center pt-15">
                <h2 class="font-bold text-4xl leading-[45px] text-center">Web
                    Development
                </h2>
                <div class="text-center mb-12">
                    <p class="text-white max-w-2xl mx-auto leading-relaxed">Kami menyediakan layanan pembuatan website
                        profesional yang dirancang untuk mendukung identitas dan kebutuhan bisnis Anda. Dengan desain
                        modern, fitur fungsional, serta performa optimal, kami membantu Anda membangun kehadiran digital
                        yang kuat dan terpercaya.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Section 1 -->
            <div class="flex flex-col md:flex-row items-center mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Landing Page</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Landing Page adalah halaman tunggal yang dirancang khusus untuk promosi produk, layanan, atau
                        campaign tertentu. Desainnya simpel, responsif, dan langsung mengarahkan pengunjung ke tujuan
                        utama—baik itu pembelian, pendaftaran, atau kontak. Cocok untuk bisnis yang ingin tampil cepat dan
                        menarik secara online.
                    </p>
                </div>
                <div class="md:w-1/2 mt-6 md:mt-0 md:pl-10">
                    <img src="/assets/buildwebsite/LandingPage.webp" alt="Landing Page"
                        class="rounded-xl shadow-lg w-full object-cover">
                </div>
            </div>

            <!-- Section 2 (Menyilang) -->
            <div class="flex flex-col md:flex-row-reverse items-center mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Company Profile</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Punya usaha atau perusahaan? Yuk, tampil lebih profesional dengan website company profile. Di sini
                        kamu bisa tunjukkan siapa kamu, apa yang kamu tawarkan, dan gimana cara orang menghubungi kamu.
                        Desainnya simpel, informatif, dan bisa dibuka dari HP atau laptop. Cocok buat ningkatin kepercayaan
                        calon klien dan partner bisnis
                    </p>
                </div>
                <div class="md:w-1/2 mt-6 md:mt-0 md:pr-10">
                    <img src="/assets/buildwebsite/CompanyProfile.webp" alt="Company Profile"
                        class="rounded-xl shadow-lg w-full object-cover">
                </div>
            </div>

            <!-- Section 3 -->
            <div class="flex flex-col md:flex-row items-center mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Portfolio</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Website Portfolio cocok untuk menampilkan karya, pengalaman, dan profil profesional kamu secara
                        profesional. Dirancang dengan layout yang menarik dan mudah dinavigasi, website ini pas untuk
                        freelancer, fotografer, desainer, atau siapa pun yang ingin memperkuat identitas digital—Kami
                        menghadirkan desain yang unik dan sesuai kebutuhan kamu.
                    </p>
                </div>
                <div class="md:w-1/2 mt-6 md:mt-0 md:pl-10">
                    <img src="/assets/buildwebsite/Portfolio.webp" alt="Portofolio"
                        class="rounded-xl shadow-lg w-full object-cover">
                </div>
            </div>

            <!-- Section 4 (Menyilang) -->
            <div class="flex flex-col md:flex-row-reverse items-center mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">E-commerce
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Website E-commerce adalah solusi lengkap untuk berjualan online. Kami bangun toko online dengan
                        fitur seperti keranjang belanja, manajemen produk, integrasi pembayaran, dan notifikasi otomatis.
                        Tampilan modern, mudah digunakan, dan siap bantu bisnis kamu berkembang di ranah digital.
                    </p>
                </div>
                <div class="md:w-1/2 mt-6 md:mt-0 md:pr-10">
                    <img src="/assets/buildwebsite/E-commerce.webp" alt="E-commerce"
                        class="rounded-xl shadow-lg w-full object-cover">
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Redesign & Perbaikan Website</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Website yang optimal adalah wajah digital bisnis kamu. Kami tawarkan layanan optimasi dan redesign
                        untuk website yang sudah ada—baik dari sisi tampilan, navigasi, kecepatan, maupun fungsionalitas.
                        Solusi tepat untuk kamu yang ingin tampil lebih profesional di dunia digital.
                    </p>
                </div>
                <div class="md:w-1/2 mt-6 md:mt-0 md:pl-10">
                    <img src="/assets/buildwebsite/redesign.webp" alt="Portofolio"
                        class="rounded-xl shadow-lg w-full object-cover">
                </div>
            </div>

            <!-- Section Konsultasi -->
            <div class="text-center bg-blue-600 text-white py-10 px-6 rounded-xl shadow-lg">
                <h3 class="text-2xl font-semibold mb-4">Konsultasi Gratis untuk Pertumbuhan Bisnis Anda</h3>
                <p class="max-w-3xl mx-auto text-sm md:text-base leading-relaxed opacity-90">
                    Kami menyediakan layanan konsultasi gratis untuk membantu mengembangkan bisnis Anda.
                    Anda tidak perlu membayar mahal konsultan digital jika Anda bisa mendapatkan jasa konsultasi profesional
                    secara GRATIS.
                    <br><br>
                    Anda tidak salah memilih kami sebagai partner. Dengan pengalaman dan keahlian yang kami miliki,
                    kami siap membantu mewujudkan solusi terbaik untuk kesuksesan bisnis Anda.
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
