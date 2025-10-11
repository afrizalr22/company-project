  @extends('front.layouts.app')
  @section('content')
      <div id="header" class="bg-[#F6F7FA] relative overflow-hidden">
          <div class="container max-w-[1130px] mx-auto relative pt-10 pb-20">
              <x-navbar />
              @forelse ($hero_sections as $hero_section)
                  <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20 pt-10 items-center text-center">
                      <div class="flex flex-col gap-[10px] max-w-[650px]">
                          <h1 class="font-extrabold text-[50px] leading-[65px]">
                              {{ $hero_section->heading }}
                          </h1>
                          <p class="text-cp-light-grey leading-[30px] max-w-[437px]">{{ $hero_section->subheading }}</p>
                      </div>
                  </div>
          </div>
      @empty
          <p class="text-center">Data tidak tersedia!</p>
          @endforelse
      </div>
      <div id="header" class="relative overflow-hidden">
          <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
              @forelse ($about_tims as $about_tim)
                  <div id="Hero"
                      class="flex flex-col md:flex-row gap-10 md:gap-20 mt-10 md:mt-20 pb-10 md:pb-20 items-center w-full">

                      <!-- Image -->
                      <div class="w-full md:basis-[43%] h-auto md:h-full flex-shrink-0">
                          <img src="{{ Storage::url($about_tim->poster) }}" class="object-cover w-full h-full rounded-xl"
                              alt="poster">
                      </div>

                      <!-- Content -->
                      <div class="flex flex-col gap-5 w-full md:flex-1 md:w-[50%] text-left px-4 md:px-0 mt-5 md:mt-0">
                          <p class="font-semibold text-sm">{{ $about_tim->subheading }}</p>

                          <h1
                              class="font-extrabold text-2xl md:text-[50px] leading-snug md:leading-[65px] md:max-w-[536px]">
                              {{ $about_tim->heading }}
                          </h1>

                          <p
                              class="text-cp-light-grey text-sm md:text-base leading-relaxed md:leading-[30px] 
                              md:max-w-[449px] text-justify">
                              Tim kami terdiri dari profesional yang berpengalaman dalam berbagai aspek,
                              menggabungkan keahlian teknologi, kreativitas, dan wawasan untuk memberikan
                              solusi yang intuitif, efisien, dan dirancang untuk memaksimalkan potensi bisnis anda.
                          </p>

                          <!-- Achievement -->
                          <div class="flex items-center gap-3">
                              <img src="{{ asset('assets/icons/crown.svg') }}" class="object-contain w-5 h-5"
                                  alt="icon">
                              <p class="font-semibold text-sm">{{ $about_tim->achivment1 }}</p>
                          </div>
                          <div class="flex items-center gap-3">
                              <img src="{{ asset('assets/icons/crown.svg') }}" class="object-contain w-5 h-5"
                                  alt="icon">
                              <p class="font-semibold text-sm">{{ $about_tim->achivment2 }}</p>
                          </div>
                          <div class="flex items-center gap-3">
                              <img src="{{ asset('assets/icons/crown.svg') }}" class="object-contain w-5 h-5"
                                  alt="icon">
                              <p class="font-semibold text-sm">{{ $about_tim->achivment3 }}</p>
                          </div>

                          <!-- Button -->
                          <a href=""
                              class="bg-cp-light-blue px-6 py-3 w-fit rounded-xl
                               hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 
                               font-bold text-white text-sm md:text-base">
                              Hubungi Kami
                          </a>
                      </div>
                  </div>
              @empty
                  <p class="text-center">Data tidak tersedia!</p>
              @endforelse
          </div>
      </div>
      {{-- <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
          <h2 class="font-bold text-lg">Trusted by 500+ Top Leaders Worldwide</h2>
          <div class="logo-container flex flex-wrap gap-5 justify-center">
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-54.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-52.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-55.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-44.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-51.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-55.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-52.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-54.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
              <div
                  class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                  <div class="overflow-hidden h-9">
                      <img src="{{ asset('assets/logo/logo-51.svg') }}" class="object-contain w-full h-full"
                          alt="logo">
                  </div>
              </div>
          </div>
      </div> --}}
      <div id="header" class="bg-[#F6F7FA] relative overflow-hidden">
          <div id="OurPrinciples"
              class="container bg-[#F6F7FA] max-w-[1130px] pb-20 mx-auto flex flex-col gap-[30px] mt-20">
              <div class="flex items-center justify-between">
                  <div class="flex flex-col gap-[14px]">
                      <h2 class="font-bold text-4xl leading-[45px]">Kenapa Memilih Jasa Kami?</h2>
                      <p class="font-semibold text-sm">Alasan kenapa Anda harus memilih kami sebagai partner.</p>
                  </div>
              </div>
              <div class="flex flex-wrap items-center gap-[30px] justify-center">
                  @forelse ($principles as $principle)
                      <div
                          class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
                          <div class="thumbnail h-[200px] mx-auto flex shrink-0 overflow-hidden">
                              <img src="{{ Storage::url($principle->icon) }}" class=" object-center" alt="icons">
                          </div>
                          <div class="flex flex-col p-[0_30px_30px_30px] gap-5">
                              <div class="flex flex-col gap-1">
                                  <p class="title text-center font-bold text-xl leading-[30px]">{{ $principle->title }}</p>
                                  <p class="leading-[30px] text-cp-light-grey text-center">{{ $principle->subtitle }}</p>
                              </div>
                          </div>
                      </div>
                  @empty
                      <p>Data tidak tersedia!</p>
                  @endforelse
              </div>
          </div>
      </div>
      <div class="relative overflow-hidden"> {{-- Needs solutions --}}
          <div class="container max-w-[1130px] mx-auto relative pt-10 z-10 px-5">
              @forelse ($needs_solutions as $needs_solution)
                  <div id="Hero"
                      class="flex flex-col md:flex-row gap-10 md:gap-20 mt-10 md:mt-20 pb-10 md:pb-20 items-center overflow-hidden">

                      <div class="w-full md:w-1/2 flex-shrink-0 top-0 right-0 overflow-hidden z-0">
                          <img src="{{ Storage::url($needs_solution->thumbnail) }}"
                              class="object-cover w-full h-auto rounded-lg" alt="poster">
                      </div>

                      <div class="flex flex-col gap-5 w-full md:w-1/2 text-left">
                          <h1 class="font-extrabold text-3xl md:text-[50px] leading-snug md:leading-[65px]">
                              {{ $needs_solution->heading }}
                          </h1>
                          <p class="text-cp-light-grey leading-relaxed text-justify text-sm md:text-base">
                              {{ $needs_solution->short_article }}
                          </p>
                          <a href="#"
                              class="bg-cp-light-blue px-6 py-3 w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] 
            transition-all duration-300 font-bold text-white text-sm md:text-base">
                              Selengkapnya...
                          </a>
                      </div>
                  </div>
              @empty
                  <p>Data tidak tersedia!</p>
              @endforelse
          </div>
      </div>
      {{-- Hero Inovasi Teknologi --}}
      <div id="header" class="bg-[#F6F7FA] relative overflow-hidden">
          <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
              @forelse ($technology_solutions as $technology_solution)
                  <div
                      class="flex flex-col md:flex-row gap-10 md:gap-20 mt-10 md:mt-20 pb-10 md:pb-20 items-center overflow-hidden">
                      <div class="flex flex-col gap-5 w-full md:w-1/2 overflow-hidden px-4 md:px-0">
                          <h1 class="font-extrabold text-2xl md:text-[32px] lg:text-[40px] leading-snug md:leading-[50px]">
                              {{ $technology_solution->heading }}
                          </h1>
                          <p class="text-cp-light-grey leading-relaxed text-justify text-sm md:text-base">
                              {{ $technology_solution->article }}
                          </p>
                          <a href=""
                              class="bg-cp-light-blue px-6 py-3 w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] 
          transition-all duration-300 font-bold text-white">
                              Selengkapnya
                          </a>
                      </div>

                      <!-- Image -->
                      <div class="w-full md:w-1/2 flex-shrink-0 overflow-hidden z-0 px-4 md:px-0">
                          <img src="{{ Storage::url($technology_solution->thumbnail) }}" alt="solusi"
                              class="object-cover w-full h-auto">
                      </div>

                  </div>
              @empty
                  <p class="text-center">Data tidak tersedia</p>
              @endforelse
          </div>
      </div>
      {{-- <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
          @forelse ($products as $product)
              <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                  <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                      <img src="{{ Storage::url($product->thumbnail) }}" class="w-full h-full object-contain"
                          alt="thumbnail">
                  </div>
                  <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                      <p
                          class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                          {{ $product->tagline }}</p>
                      <div class="flex flex-col gap-[10px]">
                          <h2 class="font-bold text-4xl leading-[45px]">{{ $product->name }}</h2>
                          <p class="leading-[30px] text-cp-light-grey">{{ $product->about }}</p>
                      </div>
                      <a href="{{ route('front.appointment') }}"
                          class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Book
                          Appointment</a>
                  </div>
              </div>
          @empty
              <p>Data tidak tersedia!</p>
          @endforelse
      </div> --}}
      <div id="Teams" class="w-full py-20 px-[10px] mt-20">
          <div class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] items-center">
              <div class="flex flex-col gap-[14px] items-center">
                  <p class="badge w-fit bg-cp-light-blue text-white p-[8px_16px] rounded-full uppercase font-bold text-sm">
                      OUR POWERFUL TEAM</p>
                  <h2 class="font-bold text-4xl leading-[45px] text-center">We Share Same Dreams <br> Change The
                      World
                  </h2>
              </div>
              <div
                  class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
                  @forelse ($teams as $team)
                      <div
                          class="card bg-white flex flex-col h-full justify-center items-center p-[30px] px-[29px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
                          <div
                              class="w-[100px] h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
                              <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
                                  <img src="{{ Storage::url($team->avatar) }}"
                                      class="object-cover w-full h-full object-center" alt="photo">
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
                  <a href="{{ route('our.team') }}" class="view-all-card">
                      <div
                          class="card bg-white flex flex-col h-full justify-center items-center p-[30px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
                          <div class="w-[60px] h-[60px] flex shrink-0">
                              <img src="{{ asset('assets/icons/profile-2user.svg') }}" alt="icon">
                          </div>
                          <div class="flex flex-col gap-1 text-center">
                              <p class="font-bold text-xl leading-[30px]">View All</p>
                              <p class="text-cp-light-grey">Our Great People</p>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
      </div>
      <div class="w-full py-20 px-[10px] bg-[#F6F7FA] mt-20">
          <div class="container w-full mx-auto flex flex-col gap-[30px] items-center">
              <div class="flex flex-col gap-[14px] items-center">
                  <p class="badge w-fit bg-cp-light-blue text-white p-[8px_16px] rounded-full uppercase font-bold text-sm">
                      OUR CLIENTS</p>
                  <h2 class="font-bold text-4xl leading-[45px] text-center">Trusted by Our Valued Clients
                  </h2>
              </div>
              <div class="w-full flex justify-center">
                  <div class="flex flex-wrap justify-center gap-10 max-w-[1150px] px-6">
                      <div class="flex items-center justify-center w-[150px] h-[80px]">
                          <img src="{{ asset('assets/backgrounds/banner.jpg') }}" alt="logo"
                              class="object-contain w-full h-full" />
                      </div>
                      <div class="flex items-center justify-center w-[150px] h-[80px]">
                          <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}" alt="logo"
                              class="object-contain w-full h-full" />
                      </div>
                      <div class="flex items-center justify-center w-[150px] h-[80px]">
                          <img src="{{ asset('assets/icons/arrow-down-line.svg') }}" alt="logo"
                              class="object-contain w-full h-full" />
                      </div>
                      <div class="flex items-center justify-center w-[150px] h-[80px]">
                          <img src="{{ asset('assets/icons/building-4-black.svg') }}" alt="logo"
                              class="object-contain w-full h-full" />
                      </div>
                      <div class="flex items-center justify-center w-[150px] h-[80px]">
                          <img src="{{ asset('assets/icons/buildings.svg') }}" alt="logo"
                              class="object-contain w-full h-full" />
                      </div>
                      <div class="flex items-center justify-center w-[150px] h-[80px]">
                          <img src="{{ asset('assets/backgrounds/banner.jpg') }}" alt="logo"
                              class="object-contain w-full h-full" />
                      </div>
                      <div class="flex items-center justify-center w-[150px] h-[80px]">
                          <img src="{{ asset('assets/backgrounds/banner.jpg') }}" alt="logo"
                              class="object-contain w-full h-full" />
                      </div>
                      <div class="flex items-center justify-center w-[150px] h-[80px]">
                          <img src="{{ asset('assets/backgrounds/banner.jpg') }}" alt="logo"
                              class="object-contain w-full h-full" />
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <footer class="bg-cp-dark-blue w-full relative overflow-hidden">
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

  @push('after-scripts')
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"
          integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

      <!-- JavaScript -->
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
      <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
      <script src="{{ asset('js/carousel.js') }}"></script>
      <script src="{{ asset('js/accordion.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
      <script src="{{ asset('js/modal-video.js') }}"></script>
  @endpush
