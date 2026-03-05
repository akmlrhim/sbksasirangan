<footer class="relative bg-primary pt-10 sm:pt-12 pb-6 sm:pb-8 overflow-hidden">

  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none opacity-5">
    <svg class="absolute -top-16 -left-16 sm:-top-20 sm:-left-20 w-64 h-64 sm:w-96 sm:h-96 text-white"
      viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 200C0 200 50 150 100 180C150 210 180 150 180 150" stroke="currentColor" stroke-width="2" />
      <path d="M-20 220C-20 220 60 140 130 190C200 240 220 120 220 120" stroke="currentColor" stroke-width="1" />
    </svg>
    <svg class="absolute bottom-0 right-0 w-56 h-56 sm:w-80 sm:h-80 text-white transform rotate-180"
      viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10 190 Q 50 100 120 180 T 200 160" stroke="currentColor" stroke-width="2" fill="none" />
    </svg>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8 sm:gap-y-10 mb-8 sm:mb-12">

      {{-- Brand --}}
      <div class="col-span-2 lg:col-span-1">
        <a href="{{ route('home') }}" class="block mb-4 sm:mb-5">
          <h2 class="font-header text-2xl sm:text-3xl md:text-4xl text-white leading-none">
            {{ __('Sasirangan') }} <br> <span class="text-secondary italic">{{ __('Banjar') }}</span>
          </h2>
        </a>
        <div class="flex items-center gap-3 sm:gap-4">
          <a href="https://www.instagram.com/sbk.sasirangan"
            class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary hover:text-primary transition-all duration-300">
            <i class="fa-brands fa-instagram text-sm sm:text-lg"></i>
          </a>
          <a href="http://wa.me/6282133331163"
            class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary hover:text-primary transition-all duration-300">
            <i class="fa-brands fa-whatsapp text-sm sm:text-lg"></i>
          </a>
          <a href="https://www.tiktok.com/@sbk.sasirangan"
            class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary hover:text-primary transition-all duration-300">
            <i class="fa-brands fa-tiktok text-sm sm:text-lg"></i>
          </a>
        </div>
      </div>

      {{-- Explore --}}
      <div class="col-span-1">
        <h3 class="font-header text-lg sm:text-xl md:text-2xl text-secondary mb-3 sm:mb-5 flex items-center gap-2">
          <span class="w-4 sm:w-6 h-[2px] bg-secondary"></span> {{ __('Explore') }}
        </h3>
        <ul class="space-y-2 sm:space-y-3 font-sans text-xs sm:text-sm md:text-base">
          <li>
            <a href="{{ route('home') }}"
              class="text-white hover:text-secondary hover:pl-2 transition-all duration-300">
              {{ __('Home') }}
            </a>
          </li>
          <li>
            <a href="{{ route('about-us') }}"
              class="text-white hover:text-secondary hover:pl-2 transition-all duration-300">
              {{ __('Profile') }}
            </a>
          </li>
          <li>
            <a href="{{ url('/') }}#works"
              class="text-white hover:text-secondary hover:pl-2 transition-all duration-300">
              {{ __('Our Works') }}
            </a>
          </li>
          <li>
            <a href="{{ route('shop') }}"
              class="text-white hover:text-secondary hover:pl-2 transition-all duration-300">
              {{ __('Shop') }}
            </a>
          </li>
        </ul>
      </div>

      {{-- Info --}}
      <div class="col-span-1">
        <h3 class="font-header text-lg sm:text-xl md:text-2xl text-secondary mb-3 sm:mb-5 flex items-center gap-2">
          <span class="w-4 sm:w-6 h-[2px] bg-secondary"></span> {{ __('Info') }}
        </h3>
        <ul class="space-y-2 sm:space-y-3 font-sans text-xs sm:text-sm md:text-base">
          <li>
            <a href="{{ route('insight') }}"
              class="text-white hover:text-secondary hover:pl-2 transition-all duration-300">
              {{ __('Insight') }}
            </a>
          </li>
          <li>
            <a href="{{ route('contact') }}"
              class="text-white hover:text-secondary hover:pl-2 transition-all duration-300">
              {{ __('Contact') }}
            </a>
          </li>
        </ul>
      </div>

      {{-- Office --}}
      <div class="col-span-2 lg:col-span-1">
        <h3 class="font-header text-lg sm:text-xl md:text-2xl text-secondary mb-3 sm:mb-5 flex items-center gap-2">
          <span class="w-4 sm:w-6 h-[2px] bg-secondary"></span> {{ __('Office') }}
        </h3>

        <div class="space-y-3 sm:space-y-4 font-sans text-xs sm:text-sm md:text-base text-white mb-4 sm:mb-6">
          <div class="flex items-start gap-2 sm:gap-3">
            <i class="fa-solid fa-location-dot mt-0.5 sm:mt-1 text-secondary text-sm sm:text-base"></i>
            <p class="leading-relaxed">
              Jl. Sukarelawan Gg. Al-Manar No.2, Guntung Payung, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan
              Selatan 70712
            </p>
          </div>
          <div class="flex items-center gap-2 sm:gap-3">
            <i class="fa-solid fa-envelope text-secondary text-sm sm:text-base"></i>
            <a href="mailto:admin@sasiranganbanjar.com" class="hover:text-white transition-colors break-all">
              admin@sasiranganbanjar.com
            </a>
          </div>
        </div>
      </div>
    </div>

    <div
      class="border-t border-white/10 pt-4 sm:pt-6 mt-4 sm:mt-6 flex flex-col md:flex-row justify-between items-center text-[10px] sm:text-xs md:text-sm text-white/80 font-sans text-center md:text-left gap-2 sm:gap-0">
      <p>&copy; {{ date('Y') }} SBK Sasirangan Banjar. {{ __('All rights reserved.') }}</p>
    </div>

  </div>
</footer>
