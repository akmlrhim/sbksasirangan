<nav x-data="{
    mobileOpen: false,
    profileOpen: false,
    scrolled: (window.pageYOffset > 20),
    isLoading: false,

    async switchLanguage(locale) {
        this.isLoading = true;
        try {
            await fetch('/lang/' + locale);

            const response = await fetch(window.location.href);
            const html = await response.text();

            const parser = new DOMParser();
            const newDoc = parser.parseFromString(html, 'text/html');

            document.body.innerHTML = newDoc.body.innerHTML;

        } catch (err) {
            console.error(err);
            window.location.reload();
        } finally {
            this.isLoading = false;
        }
    }
}" @scroll.window="scrolled = (window.pageYOffset > 20)"
  class="fixed w-full z-50 top-0 transition-all duration-500 px-4 pt-6">

  <div x-show="isLoading" class="fixed inset-0 bg-black/50 z-[60] flex items-center justify-center backdrop-blur-sm"
    style="display: none;">
    <div class="text-white font-bold animate-pulse">Switching Language...</div>
  </div>

  <div
    class="transition-all duration-500 ease-in-out bg-primary shadow-2xl border border-white/10 max-w-7xl mx-auto rounded-full"
    :class="{ 'bg-primary/95 backdrop-blur-md': scrolled }">

    <div class="flex justify-between items-center h-20 px-6 md:px-8">

      <div class="flex-shrink-0 flex items-center gap-2">
        <a href="{{ route('home') }}"
          class="group flex items-center gap-2 transition-transform duration-300 hover:scale-105">
          <img src="{{ asset('logo.png') }}" alt="SBK Logo" class="h-10 w-auto object-contain brightness-0 invert">
        </a>
      </div>

      <div class="hidden md:flex items-center space-x-8">

        <a href="{{ route('home') }}"
          class="text-white/90 hover:text-secondary text-md font-bold uppercase transition-colors relative group">
          {{ __('Home') }}
          <span
            class="absolute -bottom-1 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </a>

        <div class="relative group h-20 flex items-center" @mouseenter="profileOpen = true"
          @mouseleave="profileOpen = false">
          <button
            class="text-white/90 group-hover:text-secondary text-md font-bold uppercase inline-flex items-center gap-1 focus:outline-none transition-colors relative">
            {{ __('Profile') }}
            <i
              class="fa-solid fa-chevron-down text-[10px] transition-transform duration-300 group-hover:rotate-180 opacity-70"></i>
          </button>

          <div x-show="profileOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="absolute left-0 top-16 mt-2 w-48 bg-primary border border-white/10 rounded-xl shadow-2xl py-2 z-50 overflow-hidden"
            style="display: none;">
            <a href="{{ route('about-us') }}"
              class="block px-6 py-3 text-md text-white hover:bg-white/5 hover:text-secondary transition-colors border-b border-white/5">{{ __('About Us') }}</a>
            <a href="{{ route('our-team') }}"
              class="block px-6 py-3 text-md text-white hover:bg-white/5 hover:text-secondary transition-colors border-b border-white/5">{{ __('Our Team') }}</a>
            <a href="{{ route('gallery') }}"
              class="block px-6 py-3 text-md text-white hover:bg-white/5 hover:text-secondary transition-colors">{{ __('Gallery') }}</a>
          </div>
        </div>

        <a href="{{ route('insight') }}"
          class="text-white/90 hover:text-secondary text-md font-bold uppercase transition-colors relative group">
          {{ __('Insight') }}
          <span
            class="absolute -bottom-1 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="{{ route('shop') }}"
          class="text-white/90 hover:text-secondary text-md font-bold uppercase transition-colors relative group">
          {{ __('Shop') }}
          <span
            class="absolute -bottom-1 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="{{ route('contact') }}"
          class="text-white/90 hover:text-secondary text-md font-bold uppercase transition-colors relative group">
          {{ __('Contact') }}
          <span
            class="absolute -bottom-1 left-0 w-0 h-[2px] bg-secondary transition-all duration-300 group-hover:w-full"></span>
        </a>

        <div
          class="ml-6 flex items-center bg-black/20 backdrop-blur-xl rounded-full p-1 shadow-inner border border-white/20">

          <button @click="switchLanguage('id')"
            class="px-6 py-2 rounded-full text-md font-bold transition-all duration-300 transform hover:scale-105 focus:outline-none cursor-pointer
                {{ app()->getLocale() == 'id' ? 'bg-white text-primary shadow-lg' : 'text-white/70 hover:text-white' }}">
            ID
          </button>

          <button @click="switchLanguage('en')"
            class="px-6 py-2 rounded-full text-md font-bold transition-all duration-300 transform hover:scale-105 focus:outline-none cursor-pointer
                {{ app()->getLocale() == 'en' ? 'bg-white text-primary shadow-lg' : 'text-white/70 hover:text-white' }}">
            EN
          </button>
        </div>

      </div>

      <div class="md:hidden flex items-center">
        <button @click="mobileOpen = !mobileOpen"
          class="text-white hover:text-secondary focus:outline-none p-2 text-xl transition-colors">
          <i x-show="!mobileOpen" class="fa-solid fa-bars"></i>
          <i x-show="mobileOpen" class="fa-solid fa-xmark" style="display: none;"></i>
        </button>
      </div>

    </div>
  </div>

  <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
    class="md:hidden bg-primary/95 backdrop-blur-md border border-white/10 absolute w-[calc(100%-2rem)] left-4 shadow-xl pointer-events-auto mt-4 rounded-3xl overflow-hidden"
    style="display: none;">

    <div class="px-4 py-6 space-y-2 max-h-[80vh] overflow-y-auto">
      <a href="{{ route('home') }}"
        class="block px-4 py-3 rounded-lg text-md font-bold text-white hover:text-secondary hover:bg-white/5 uppercase tracking-wider border-b border-white/5">{{ __('Home') }}</a>

      <div x-data="{ subOpen: false }" class="border-b border-white/5">
        <button @click="subOpen = !subOpen"
          class="w-full flex justify-between items-center px-4 py-3 rounded-lg text-md font-bold text-white hover:text-secondary hover:bg-white/5 uppercase tracking-wider focus:outline-none">
          <span>{{ __('Profile') }}</span>
          <i class="fa-solid fa-chevron-down text-md transition-transform duration-300"
            :class="{ 'rotate-180': subOpen }"></i>
        </button>
        <div x-show="subOpen" class="bg-black/20 rounded-lg mb-2 mx-2 overflow-hidden">
          <a href="{{ route('about-us') }}"
            class="block px-8 py-3 text-md font-bold text-white hover:text-secondary border-l-2 border-transparent hover:border-secondary transition-colors">{{ __('About Us') }}</a>
          <a href="{{ route('our-team') }}"
            class="block px-8 py-3 text-md font-bold text-white hover:text-secondary border-l-2 border-transparent hover:border-secondary transition-colors">{{ __('Our Team') }}</a>
          <a href="{{ route('gallery') }}"
            class="block px-8 py-3 text-md font-bold text-white hover:text-secondary border-l-2 border-transparent hover:border-secondary transition-colors">{{ __('Gallery') }}</a>
        </div>
      </div>

      <a href="{{ route('insight') }}"
        class="block px-4 py-3 rounded-lg text-md font-bold text-white hover:text-secondary hover:bg-white/5 uppercase tracking-wider border-b border-white/5">{{ __('Insight') }}</a>
      <a href="{{ route('shop') }}"
        class="block px-4 py-3 rounded-lg text-md font-bold text-white hover:text-secondary hover:bg-white/5 uppercase tracking-wider border-b border-white/5">{{ __('Shop') }}</a>
      <a href="{{ route('contact') }}"
        class="block px-4 py-3 rounded-lg text-md font-bold text-white hover:text-secondary hover:bg-white/5 uppercase tracking-wider border-b border-white/5">{{ __('Contact') }}</a>

      <div class="pt-4 flex justify-center pb-2">
        <div class="inline-flex items-center bg-black/20 rounded-full p-1 border border-white/10">

          <button @click="switchLanguage('id')"
            class="px-6 py-2 rounded-full text-md font-bold shadow-sm w-20 text-center transition-all focus:outline-none cursor-pointer
                {{ app()->getLocale() == 'id' ? 'bg-white text-primary' : 'text-white/70 hover:text-white' }}">
            ID
          </button>

          <button @click="switchLanguage('en')"
            class="px-6 py-2 rounded-full text-md font-bold w-20 text-center transition-all focus:outline-none cursor-pointer
                {{ app()->getLocale() == 'en' ? 'bg-white text-primary' : 'text-white/70 hover:text-white' }}">
            EN
          </button>

        </div>
      </div>

    </div>
  </div>
</nav>
