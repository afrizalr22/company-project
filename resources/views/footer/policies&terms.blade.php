@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10">
            <x-navbar />
            <div class="flex flex-col gap-2 items-center py-20">
                <div class="flex items-center ">
                    <h2 class="font-bold text-4xl leading-[45px] text-center">Kebijakan & Ketentuan</h2>
                </div>
                <div>
                    <div class="w-75 h-1 bg-blue-600 mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-20">
        <div class="max-w-5xl mx-auto px-6">
            <!-- Konten -->
            <div class="bg-white p-8 rounded-xl shadow-md text-gray-700 leading-relaxed space-y-6">
                <p>
                    Berikut adalah kebijakan dan ketentuan penggunaan layanan Nexicon. Dengan menggunakan layanan kami,
                    klien dianggap telah membaca, memahami, dan menyetujui seluruh poin berikut:
                </p>

                <ol class="list-decimal list-inside space-y-3">
                    <li>
                        Kami mengumpulkan informasi saat klien menggunakan layanan kami, seperti nama, alamat email, nomor
                        telepon, materi dan data relevan lainnya. Informasi ini digunakan untuk menyediakan layanan terbaik
                        kami.
                    </li>
                    <li>
                        Klien diharuskan membayar uang muka sebesar 50% dari total biaya dalam waktu 7 (tujuh) hari setelah
                        penandatanganan kontrak. Pembayaran ini menandai awal pengerjaan proyek.
                    </li>
                    <li>
                        Sisa pembayaran sebesar 50% dari total biaya harus dilunasi paling lambat 7 (tujuh) hari setelah
                        pengerjaan proyek dinyatakan selesai.
                    </li>
                    <li>
                        Nexicon berhak menonaktifkan atau menghentikan layanan jika pembayaran belum diselesaikan setelah
                        melewati batas waktu yang telah ditentukan.
                    </li>
                    <li>
                        Klien bertanggung jawab untuk menyerahkan materi yang diperlukan sebelum pengerjaan dimulai. Nexicon
                        akan memulai pengerjaan setelah menerima pembayaran uang muka dan materi yang dibutuhkan.
                    </li>
                    <li>
                        Jika Nexicon harus membuat atau menyediakan materi/konten, klien akan dikenakan biaya tambahan.
                    </li>
                    <li>
                        Materi yang diserahkan oleh klien tidak boleh mengandung elemen ilegal atau melanggar hukum. Klien
                        menyetujui bahwa Nexicon tidak bertanggung jawab atas keabsahan materi tersebut.
                    </li>
                    <li>
                        Nexicon berkomitmen untuk melaksanakan pekerjaan yang diberikan oleh klien dengan sebaik-baiknya dan
                        penuh tanggung jawab. Setiap proyek akan dikerjakan dengan profesionalisme tinggi sesuai dengan
                        kesepakatan awal.
                    </li>
                    <li>
                        Nexicon berhak menggunakan elemen dari proyek klien sebagai contoh dalam portfolio Nexicon.
                    </li>
                    <li>
                        Nexicon tidak bertanggung jawab atas keterlambatan pengerjaan yang disebabkan oleh klien, termasuk
                        keterlambatan dalam penyerahan materi atau pembayaran.
                    </li>
                    <li>
                        Garansi tidak berlaku untuk error yang diakibatkan oleh modifikasi oleh user atau kesalahan pengguna
                        lainnya.
                    </li>
                </ol>

                <p class="mt-8 text-gray-600 italic">
                    Dengan menggunakan layanan Nexicon, klien dianggap telah menyetujui seluruh ketentuan di atas.
                    Untuk informasi lebih lanjut, silakan hubungi tim kami melalui halaman kontak.
                </p>
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
