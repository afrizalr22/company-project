  @extends('front.layouts.app')
  @section('content')
      <div id="header" class="bg-blue-gradient relative ">
          <div class="container max-w-[1130px] mx-auto relative pt-10 pb-20">
              <x-navbar />
              @forelse ($hero_sections as $hero_section)
                  <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20 pt-10 items-center text-center">
                      <div class="flex flex-col gap-[10px] max-w-[650px]">
                          <h1 class="font-extrabold text-[50px] leading-[65px]">
                              {{ $hero_section->heading }}
                          </h1>
                          <p class="text-white leading-[30px] max-w-[437px]">{{ $hero_section->subheading }}</p>
                      </div>
                  </div>
          </div>
      @empty
          <p class="text-center">Data tidak tersedia!</p>
          @endforelse
      </div>
      <div id="header" class="relative overflow-hidden">
          <div class="container max-w-[1130px] mx-auto relative pt-10">
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
      <div id="header" class="bg-blue-gradient relative overflow-hidden">
          <div id="OurPrinciples" class="container max-w-[1130px] pb-20 mx-auto flex flex-col gap-[30px] mt-20">
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
                          <a href="{{ route('our.services') }}"
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
      <div id="header" class="bg-blue-gradient relative overflow-hidden">
          <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
              @forelse ($technology_solutions as $technology_solution)
                  <div
                      class="flex flex-col md:flex-row gap-10 md:gap-20 mt-10 md:mt-20 pb-10 md:pb-20 items-center overflow-hidden">
                      <div class="flex flex-col gap-5 w-full md:w-1/2 overflow-hidden px-4 md:px-0">
                          <h1 class="font-extrabold text-2xl md:text-[32px] lg:text-[40px] leading-snug md:leading-[50px]">
                              {{ $technology_solution->heading }}
                          </h1>
                          <p class="text-white leading-relaxed text-justify text-sm md:text-base">
                              {{ $technology_solution->article }}
                          </p>
                          <a href="{{ route('our.services') }}"
                              class="bg-cp-light-blue px-6 py-3 w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] 
          transition-all duration-300 font-bold text-white">
                              Selengkapnya
                          </a>
                      </div>
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
      <div class="w-full py-20 px-[10px] bg-blue-gradient mt-20">
          <div class="container w-full mx-auto flex flex-col gap-[30px] items-center">
              <div class="flex flex-col gap-[14px] items-center">
                  <p class="badge w-fit bg-cp-light-blue text-white p-[8px_16px] rounded-full uppercase font-bold text-sm">
                      OUR CLIENTS</p>
                  <h2 class="font-bold text-4xl leading-[45px] text-center">Trusted by Our Valued Clients
                  </h2>
              </div>
              <div class="w-full flex justify-center">
                  @forelse ($clients as $client)
                      <div class="flex flex-wrap justify-center gap-10 max-w-[1150px] px-6">
                          <div class="flex items-center justify-center w-[150px] h-[80px]">
                              <img src="{{ storage::url($client->logo) }}" alt="logo"
                                  class="object-contain w-full h-full" />
                          </div>
                      </div>
                  @empty
                      <p class="text-center">Data tidak tersedia!</p>
                  @endforelse
              </div>
          </div>
      </div>
      <div class="bg-white py-16">
          <div
              class="container mx-auto max-w-[900px] px-6 bg-blue-gradient rounded-2xl shadow-md p-8 flex flex-col lg:flex-row items-center justify-between gap-6">

              <!-- Artikel Singkat -->
              <div class="text-center lg:text-left">
                  <h3 class="text-2xl font-bold text-white mb-3">
                      Siap Meningkatkan Bisnis Anda ke Level Berikutnya?
                  </h3>
                  <p class="text-white max-w-[500px] leading-relaxed">
                      Kami membantu Anda merancang solusi digital yang efisien, aman, dan terintegrasi untuk memperkuat
                      kinerja bisnis di era teknologi modern.
                  </p>
              </div>

              <!-- Tombol Hubungi Kami -->
              <div class="flex justify-center lg:justify-end w-full lg:w-auto">
                  <a href=""
                      class="bg-white hover:bg-blue-400 text-sky-500 hover:text-white font-semibold px-8 py-3
                      rounded-full shadow-md transition-all duration-300">
                      Hubungi Kami
                  </a>
              </div>
          </div>
      </div>
      <a href="javascript:void(0)"
          class="nexshow-chat fixed bottom-6 right-6 bg-gradient-to-tr from-blue-400 to-blue-800 text-white text-sm px-5 py-3 rounded-full shadow-lg flex items-center gap-2 hover:opacity-90 transition z-[98]">
          <i><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path fill="currentColor" fill-rule="evenodd"
                      d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                      clip-rule="evenodd" />
                  <path fill="currentColor"
                      d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
              </svg>
          </i>
          Butuh Bantuan?
      </a>
      <!-- Kotak Chat WhatsApp -->
      <div id="whatsapp-chat"
          class="hidden fixed bottom-24 right-6 w-[350px] bg-white rounded-xl shadow-xl z-[99] overflow-hidden animate-[showchat_1s_ease]">
          <!-- Header -->
          <div class="bg-gradient-to-tr from-blue-400 to-blue-800 text-white p-5 relative">
              <div class="head-home">
                  <h3 class="text-lg font-semibold mb-2">Hallo!</h3>
                  <p class="text-sm leading-relaxed">
                      Klik salah satu perwakilan kami di bawah ini untuk mengobrol di WhatsApp, atau kirim email ke
                      <span class="underline">nexicon.id@gmail.com</span>
                      Kami siap membantu😊
                  </p>
              </div>
              <div class="get-new hidden">
                  <div id="get-label" class="text-sm"></div>
                  <div id="get-nama" class="text-base font-semibold"></div>
              </div>
              <a href="javascript:void(0)" class="absolute top-2 right-4 text-3xl text-white font-light close-chat">×</a>
          </div>

          <!-- Home Chat -->
          <div class="home-chat">
              <!-- Kontak 1 -->
              <a href="javascript:void(0)" class="informasi flex items-center p-4 hover:bg-gray-100 transition">
                  <div class="relative">
                      <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi8b11SkKpxmpMiyBd4MJUBvIESt_aaezR7Df0e0p2ysfzL8SYRLADvu4rHxcVIEu-QO7ORvXzKwC7YyRnoZjT3hYXAjpOr_pXXfv2TI7hW3AcQxLqj9Z0vc4w0gnSz61tB1oYARraE3mc/s70/supportmale.png"
                          class="w-12 h-12 rounded-full mr-3">
                      <i
                          class="fab fa-whatsapp absolute bottom-0 right-1 text-green-500 text-xs bg-white rounded-full p-1"></i>
                  </div>
                  <div>
                      <span class="chat-label text-xs text-gray-500">Support</span>
                      <span class="chat-nama block text-sm font-semibold text-gray-800">Customer Service 1</span>
                  </div>
                  <span class="my-number hidden">6283811003426</span>
              </a>

              <!-- Kontak 2 -->
              <a href="javascript:void(0)" class="informasi flex items-center p-4 hover:bg-gray-100 transition">
                  <div class="relative">
                      <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgcHhxsA6GcvXZs9UwVBp5Nad7ZNbMmPHaK5-5QoXHwD3L8ijWW4DFI0czofvgBWjNbamF4D7n4P3e_EbEn_F6aRytmORs69tRECbFC1J47S2AXp4YWsfMBp1nwr8S26P7mL_BcBvG7zjw/s70/supportfemale.png"
                          class="w-12 h-12 rounded-full mr-3">
                      <i
                          class="fab fa-whatsapp absolute bottom-0 right-1 text-green-500 text-xs bg-white rounded-full p-1"></i>
                  </div>
                  <div>
                      <span class="chat-label text-xs text-gray-500">Sales</span>
                      <span class="chat-nama block text-sm font-semibold text-gray-800">Customer Service 2</span>
                  </div>
                  <span class="my-number hidden">6283811003426</span>
              </a>

              <div class="nex-msg text-center text-gray-600 text-xs p-4 border-t">
                  Call us at <b>+6283811003426</b> from <i>0:00hs to 24:00hs</i>
              </div>
          </div>

          <!-- Start Chat -->
          <div class="start-chat hidden">
              <div class="bg-gray-100 text-center p-6">
                  <span class="inline-block bg-gray-200 text-gray-700 text-sm p-3 rounded-lg">
                      Hello! What can I do for you?
                  </span>
              </div>
              <div class="nex-msg flex items-center border-t border-gray-200 p-3">
                  <textarea id="chat-input" placeholder="Write a response" maxlength="120" rows="1"
                      class="flex-1 border-none focus:ring-0 resize-none outline-none text-sm"></textarea>
                  <a href="javascript:void(0)" id="send-it"
                      class="ml-3 bg-gray-200 px-3 py-2 rounded-md text-sm font-semibold hover:bg-gray-300 transition">Send</a>
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
