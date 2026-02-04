<nav x-data="{ mobileOpen: false, profileOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
  :class="{ 'bg-primary/95 backdrop-blur-md shadow-lg': scrolled, 'bg-primary': !scrolled }"
  class="fixed w-full top-0 z-50 border-b border-white/10 transition-all duration-300">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">

      <div class="flex-shrink-0 flex items-center">
        <a href="#"
          class="group flex flex-col items-center leading-none transition-transform duration-300 hover:scale-105">
          <img src="{{ asset('logo.png') }}" alt="SBK Logo" class="h-12 w-auto object-contain">
        </a>
      </div>

      <div class="hidden md:flex space-x-8 items-center">

        <a href="{{ route('home') }}"
          class="group relative text-green-100 hover:text-white px-1 py-2 text-md font-medium capitalize transition-colors">
          Home
          <span
            class="absolute bottom-0 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </a>

        <div class="relative group h-20 flex items-center" @mouseenter="profileOpen = true"
          @mouseleave="profileOpen = false">

          <button
            class="group relative text-green-100 hover:text-white px-1 py-2 text-md font-medium capitalize inline-flex items-center gap-2 focus:outline-none transition-colors">
            Profile
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-300 group-hover:text-secondary"
              :class="{ 'rotate-180': profileOpen }"></i>
            <span
              class="absolute bottom-0 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
          </button>

          <div x-show="profileOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-2"
            class="absolute left-0 top-16 mt-2 w-48 bg-white rounded-sm shadow-2xl py-2 z-50 border-t-2 border-secondary"
            style="display: none;">

            <a href="{{ route('about-us') }}"
              class="block px-6 py-3 text-sm text-[#1a3c28] hover:bg-[#1a3c28]/5 hover:text-secondary hover:pl-8 transition-all duration-300 font-medium border-b border-gray-100">
              About Us
            </a>
            <a href="#"
              class="block px-6 py-3 text-sm text-[#1a3c28] hover:bg-[#1a3c28]/5 hover:text-secondary hover:pl-8 transition-all duration-300 font-medium">
              Vision & Mission
            </a>
          </div>
        </div>

        <a href="{{ route('insight') }}"
          class="group relative text-green-100 hover:text-white px-1 py-2 text-md font-medium capitalize transition-colors">
          Insight
          <span
            class="absolute bottom-0 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="{{ route('shop') }}"
          class="group relative text-green-100 hover:text-white px-1 py-2 text-md font-medium capitalize transition-colors">
          Shop
          <span
            class="absolute bottom-0 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="{{ route('contact') }}"
          class="group relative text-green-100 hover:text-white px-1 py-2 text-md font-medium capitalize transition-colors">
          Contact
          <span
            class="absolute bottom-0 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </a>

      </div>

      <div class="hidden md:flex items-center space-x-4">
        <div
          class="flex items-center text-md font-medium text-green-100 border border-white/20 rounded-full p-1 bg-white/5 backdrop-blur-sm">
          <button
            class="px-3 py-1 rounded-full bg-white text-[#1a3c28] shadow-sm transition-all transform hover:scale-105">ID</button>
          <button class="px-3 py-1 rounded-full hover:text-white hover:bg-white/10 transition-all">EN</button>
        </div>
      </div>

      <div class="md:hidden flex items-center">
        <button @click="mobileOpen = !mobileOpen"
          class="text-green-100 hover:text-secondary focus:outline-none p-2 text-xl transition-colors duration-300">
          <i x-show="!mobileOpen"
            class="fa-solid fa-bars transform transition-transform duration-300 hover:rotate-180"></i>
          <i x-show="mobileOpen" class="fa-solid fa-xmark transform transition-transform duration-300 hover:rotate-90"
            style="display: none;"></i>
        </button>
      </div>

    </div>
  </div>

  <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4"
    class="md:hidden bg-[#1a3c28] border-t border-green-800 absolute w-full left-0 shadow-2xl" style="display: none;">

    <div class="px-4 pt-4 pb-6 space-y-2">
      <a href="#"
        class="block px-4 py-3 rounded-lg text-sm font-medium capitalize tracking-wider text-green-100 hover:text-[#1a3c28] hover:bg-secondary transition-all duration-300">Home</a>

      <div x-data="{ subOpen: false }" class="rounded-lg overflow-hidden">
        <button @click="subOpen = !subOpen"
          class="w-full text-left flex justify-between items-center px-4 py-3 text-sm font-medium capitalize tracking-wider text-green-100 hover:text-[#1a3c28] hover:bg-secondary transition-all duration-300">
          Profile
          <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"
            :class="{ 'rotate-180': subOpen }"></i>
        </button>
        <div x-show="subOpen" x-collapse class="pl-4 bg-black/20">
          <a href="#"
            class="block px-4 py-3 text-sm text-green-200 hover:text-white border-l-2 border-secondary/30 hover:border-secondary transition-all">About
            Us</a>
          <a href="#"
            class="block px-4 py-3 text-sm text-green-200 hover:text-white border-l-2 border-secondary/30 hover:border-secondary transition-all">Vision
            & Mission</a>
        </div>
      </div>

      <a href="{{ route('insight') }}"
        class="block px-4 py-3 rounded-lg text-sm font-medium capitalize tracking-wider text-green-100 hover:text-[#1a3c28] hover:bg-secondary transition-all duration-300">Insight</a>
      <a href="{{ route('shop') }}"
        class="block px-4 py-3 rounded-lg text-sm font-medium capitalize tracking-wider text-green-100 hover:text-[#1a3c28] hover:bg-secondary transition-all duration-300">Shop</a>

      <a href="{{ route('contact') }}"
        class="block px-4 py-3 rounded-lg text-sm font-medium capitalize tracking-wider text-green-100 hover:text-[#1a3c28] hover:bg-secondary transition-all duration-300">Contact</a>
    </div>
  </div>
</nav>
