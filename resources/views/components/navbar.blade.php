<nav x-data="{ mobileOpen: false, profileOpen: false }" class="bg-primary sticky top-0 z-50 shadow-lg border-b border-green-900">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">

      <div class="flex-shrink-0 flex items-center">
        <a href="#" class="flex flex-col items-center leading-none">
          <img src="{{ asset('logo.png') }}" alt="SBK Logo" class="h-12 w-auto object-contain">
        </a>
      </div>

      <div class="hidden md:flex space-x-6 items-center">

        <a href="#" class="text-green-100 hover:text-white px-3 py-2 font-medium transition-colors">
          Home
        </a>

        <div class="relative group h-20 flex items-center" @mouseenter="profileOpen = true"
          @mouseleave="profileOpen = false">
          <button
            class="text-green-100 hover:text-white px-3 py-2 font-medium inline-flex items-center gap-2 transition-colors focus:outline-none">
            Profile
            <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200"
              :class="{ 'rotate-180': profileOpen }"></i>
          </button>

          <div x-show="profileOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
            class="absolute left-0 top-16 mt-2 w-48 bg-white rounded-md shadow-xl py-2 z-50" style="display: none;">
            <a href="#" class="block px-4 py-2 text-md text-primary hover:bg-green-50 font-medium">About Us</a>
            <a href="#" class="block px-4 py-2 text-md text-primary hover:bg-green-50 font-medium">Vision &
              Mission</a>
          </div>
        </div>

        <a href="#" class="text-green-100 hover:text-white px-3 py-2 font-medium transition-colors">
          Contact
        </a>

        <a href="#" class="text-green-100 hover:text-white px-3 py-2 font-medium transition-colors">
          Insight
        </a>

        <a href="#" class="text-green-100 hover:text-white px-3 py-2 font-medium transition-colors">
          Shop
        </a>

      </div>

      <div class="hidden md:flex items-center space-x-4">
        <div
          class="flex items-center text-md font-medium text-green-100 bg-white/10 rounded-full px-1 py-1 backdrop-blur-sm">
          <button class="px-3 py-1 rounded-full bg-white text-primary shadow-sm transition-all font-bold">ID</button>
          <button class="px-3 py-1 rounded-full hover:text-white hover:bg-white/10 transition-all">EN</button>
        </div>
      </div>

      <div class="md:hidden flex items-center">
        <button @click="mobileOpen = !mobileOpen"
          class="text-green-100 hover:text-white focus:outline-none p-2 text-xl">
          <i x-show="!mobileOpen" class="fa-solid fa-bars"></i>
          <i x-show="mobileOpen" class="fa-solid fa-xmark" style="display: none;"></i>
        </button>
      </div>

    </div>
  </div>

  <div x-show="mobileOpen" class="md:hidden bg-primary border-t border-green-800 absolute w-full left-0 shadow-lg"
    style="display: none;">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="#"
        class="block px-3 py-2 rounded-md text-base font-medium text-green-100 hover:text-white hover:bg-green-800">Home</a>

      <div x-data="{ subOpen: false }">
        <button @click="subOpen = !subOpen"
          class="w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-green-100 hover:text-white hover:bg-green-800">
          Profile
          <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200"
            :class="{ 'rotate-180': subOpen }"></i>
        </button>
        <div x-show="subOpen" class="pl-4 space-y-1 bg-green-900/30">
          <a href="#" class="block px-3 py-2 text-md font-medium text-green-200 hover:text-white">About Us</a>
          <a href="#" class="block px-3 py-2 text-md font-medium text-green-200 hover:text-white">Vision &
            Mission</a>
        </div>
      </div>

      <a href="#"
        class="block px-3 py-2 rounded-md text-base font-medium text-green-100 hover:text-white hover:bg-green-800">Contact</a>
      <a href="#"
        class="block px-3 py-2 rounded-md text-base font-medium text-green-100 hover:text-white hover:bg-green-800">Insight</a>
      <a href="#"
        class="block px-3 py-2 rounded-md text-base font-medium text-green-100 hover:text-white hover:bg-green-800">Shop</a>
    </div>
  </div>
</nav>
