<x-layouts :title="$title">

  <section class="relative h-screen w-full overflow-hidden flex items-center justify-center">

    <div class="absolute inset-0 z-0">
      <img src="{{ asset('img/hero.webp') }}" fetchpriority="high" loading="eager" alt="{{ __('Background Sasirangan') }}"
        class="w-full h-full object-cover" />

      <div class="absolute inset-0 bg-black/40"></div>

      <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-black/80"></div>
    </div>

    <div class="absolute bottom-0 left-0 opacity-30 pointer-events-none z-10 text-[#f3e5b5]">
      <img src="{{ asset('img/element.png') }}" class="w-[200px] h-[200px] object-contain" alt="Element Decor" />
    </div>
    <div class="absolute top-0 right-0 opacity-30 pointer-events-none z-10 text-[#f3e5b5] rotate-180">
      <img src="{{ asset('img/element.png') }}" class="w-[200px] h-[200px] object-contain" alt="Element Decor" />
    </div>

    <div class="relative z-20 text-center px-4 max-w-5xl mx-auto">

      <h1 class="font-header text-4xl md:text-6xl lg:text-7xl leading-tight mb-4 text-[#fcf6e3] drop-shadow-2xl">
        {{ __('Vibrant Natural') }} <br>
        <span class="italic text-secondary">{{ __('Colors of Local Wisdom') }}</span>
      </h1>

      <p class="font-header text-gray-200 text-md md:text-lg mb-10 font-medium tracking-wide drop-shadow-md">
        {{ __('Elegansi Kain Sasirangan Khas Kalimantan Selatan') }}
      </p>

      <a href="{{ url('/') }}#works"
        class="group inline-flex items-center justify-center gap-3 px-8 py-3 border border-secondary rounded-full text-secondary hover:bg-secondary hover:text-white hover:shadow-secondary/30 transition-all duration-300">

        <span class="font-header font-medium tracking-wide">
          {{ __('Jelajahi Koleksi') }}
        </span>

        <i class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-1"></i>

      </a>
    </div>
  </section>


  <section class="relative py-16 md:py-32 bg-third overflow-hidden">
    <div
      class="absolute top-0 right-0 -mr-10 -mt-10 w-48 h-48 md:w-96 md:h-96 rounded-full bg-primary opacity-5 blur-3xl pointer-events-none">
    </div>
    <div
      class="absolute bottom-0 left-0 -ml-10 -mb-10 w-40 h-40 md:w-80 md:h-80 rounded-full bg-secondary opacity-10 blur-3xl pointer-events-none">
    </div>

    <div class="absolute inset-0 w-full h-full pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-[-5%] left-[-5%] w-40 md:w-64 opacity-5 rotate-45 object-contain" alt="Decor">

      <img src="{{ asset('img/element.png') }}"
        class="absolute bottom-[-5%] right-[-5%] w-48 md:w-80 opacity-5 -rotate-12 object-contain" alt="Decor">

      <img src="{{ asset('img/element.png') }}"
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 opacity-[0.02] rotate-90 object-contain hidden md:block"
        alt="Decor">
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8 relative z-10">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20 items-center">

        <div class="relative group mx-auto w-full max-w-md md:max-w-full" data-aos="fade-up">
          <div
            class="absolute inset-0 w-full h-full border-2 border-primary rounded-2xl transform translate-x-3 translate-y-3 md:translate-x-4 md:translate-y-4 transition-transform duration-500 group-hover:translate-x-2 group-hover:translate-y-2">
          </div>

          <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-[4/3] md:aspect-[4/3]">
            <img src="{{ asset('img/about.webp') }}" alt="{{ __('Proses Pembuatan Sasirangan') }}" loading="lazy"
              class="w-full h-full object-cover transform transition duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition duration-500"></div>
          </div>
        </div>

        <div class="relative text-center md:text-left" data-aos="fade-up" data-aos-delay="100">

          <div class="flex items-center justify-center md:justify-start gap-3 mb-3 md:mb-4">
            <span class="h-px w-8 md:w-10 bg-primary"></span>
            <span class="text-xs md:text-md font-sans font-bold tracking-[0.2em] text-primary uppercase">
              {{ __('Who We Are') }}
            </span>
          </div>

          <h2 class="font-header text-3xl md:text-5xl lg:text-6xl text-primary mb-4 md:mb-6 leading-tight">
            {{ __('Sasirangan Banjar') }}
          </h2>

          <p class="font-sans text-gray-600 text-base md:text-lg leading-relaxed mb-6 md:mb-8 px-2 md:px-0">
            {{ __('SBKSasirangan promotes the traditional fabrics of South Kalimantan. We advocate for a sustainable lifestyle through authentic fashion products') }}
            (<span class="italic text-primary">{{ __('dress, bags, wallets') }}</span>)
            {{ __('while empowering local women and communities.') }}
          </p>

          <div class="flex justify-center md:justify-start">
            <a href="#"
              class="inline-flex items-center gap-3 px-6 py-2.5 md:px-8 md:py-3 bg-primary text-third rounded-full text-md md:text-base font-medium transition-all duration-300 hover:bg-[#142e1f] hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-1 group">
              <span>{{ __('About Us') }}</span>
              <i
                class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
          </div>

        </div>

      </div>
    </div>
  </section>


  <section class="py-20" id="works">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-12" data-aos="fade-up">
        <span class="text-primary text-md font-bold tracking-[0.3em] uppercase mb-2 block">
          {{ __('Our Works') }}
        </span>
        <h2 class="font-header text-4xl md:text-5xl text-primary">
          {{ __('Heritage Woven into') }} <span class="italic text-secondary">{{ __('Fashion') }}</span>
        </h2>
      </div>

      <div x-data="{
          currentIndex: 0,
          totalSlides: {{ $works->count() }},
          perView: window.innerWidth >= 1024 ? 3 : 1,
          autoplayInterval: null,
      
          updateView() {
              this.perView = window.innerWidth >= 1024 ? 3 : 1;
              if (this.currentIndex > this.totalSlides - this.perView) {
                  this.currentIndex = Math.max(0, this.totalSlides - this.perView);
              }
          },
      
          next() {
              if (this.currentIndex < (this.totalSlides - this.perView)) {
                  this.currentIndex++;
              } else {
                  this.currentIndex = 0;
              }
          },
      
          prev() {
              if (this.currentIndex > 0) {
                  this.currentIndex--;
              } else {
                  this.currentIndex = this.totalSlides - this.perView;
              }
          },
      
          startAutoplay() {
              this.autoplayInterval = setInterval(() => {
                  this.next();
              }, 3000);
          },
      
          stopAutoplay() {
              clearInterval(this.autoplayInterval);
          }
      }" x-init="window.addEventListener('resize', () => updateView());
      startAutoplay()" @mouseenter="stopAutoplay()" @mouseleave="startAutoplay()"
        class="relative group/slider" data-aos="fade-up">

        @if ($works->count() > 0)
          <div class="overflow-hidden">

            <div class="flex transition-transform duration-700 ease-in-out -mx-3"
              :style="`transform: translateX(-${currentIndex * (100 / perView)}%)`">

              @foreach ($works as $index => $work)
                <div class="flex-shrink-0 px-3 transition-all duration-300" :style="`width: ${100 / perView}%`">

                  <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer bg-gray-100 h-full">

                    <div
                      class="aspect-[3/4] w-full bg-gray-200 flex items-center justify-center overflow-hidden relative">

                      @if ($work->picture)
                        <img src="{{ asset('storage/' . $work->picture) }}" alt="{{ $work->name }}"
                          class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                      @else
                        <div class="text-center group-hover:scale-110 transition-transform duration-500">
                          <i class="fa-regular fa-image text-5xl text-gray-400 mb-2"></i>
                        </div>
                      @endif

                      <div
                        class="absolute inset-0 bg-gradient-to-t from-primary/95 via-transparent to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div
                          class="transform translate-y-0 md:translate-y-4 md:group-hover:translate-y-0 transition-transform duration-300">
                          <p class="font-header text-2xl text-white italic">{{ $work->name }}</p>
                          <div class="h-0.5 w-12 bg-secondary mt-2"></div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              @endforeach

            </div>
          </div>

          <button @click="prev()"
            class="absolute top-1/2 -left-4 md:-left-12 transform -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 bg-white rounded-full shadow-lg flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300 opacity-0 group-hover/slider:opacity-100 focus:outline-none">
            <i class="fa-solid fa-chevron-left"></i>
          </button>

          <button @click="next()"
            class="absolute top-1/2 -right-4 md:-right-12 transform -translate-y-1/2 z-10 w-10 h-10 md:w-12 md:h-12 bg-white rounded-full shadow-lg flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300 opacity-0 group-hover/slider:opacity-100 focus:outline-none">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        @else
          <div
            class="flex flex-col items-center justify-center py-16 text-center border-2 border-dashed border-primary/20 rounded-lg">
            <div class="mb-4 text-primary/40">
              <i class="fa-regular fa-folder-open text-6xl md:text-7xl"></i>
            </div>
            <h3 class="font-header text-2xl text-primary mb-2">{{ __('Belum Ada Karya') }}</h3>
            <p class="text-gray-500 text-sm md:text-base max-w-md mx-auto">
              {{ __('Saat ini kami sedang menyiapkan koleksi terbaik. Silakan kembali lagi nanti.') }}
            </p>
          </div>
        @endif

      </div>

      @if ($works->isNotEmpty())
        <div class="mt-12 text-center">
          <a href="{{ route('shop') }}"
            class="inline-flex items-center gap-2 text-primary border-b-2 border-primary pb-1 font-bold tracking-widest hover:text-secondary hover:border-secondary transition-all">
            {{ __('OUR SHOP') }}
            <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </div>
      @endif

    </div>
  </section>

  <section class="relative py-20 md:py-28 bg-third overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="relative text-center mb-16 md:mb-20" data-aos="fade-up">

        <div class="relative z-10">
          <div class="flex items-center justify-center gap-4 mb-3">
            <div class="h-[1px] w-8 md:w-12 bg-secondary"></div>
            <span class="text-primary text-xs font-bold tracking-[0.3em] uppercase">
              {{ __('The Founder') }}
            </span>
            <div class="h-[1px] w-8 md:w-12 bg-secondary"></div>
          </div>

          <h2 class="font-header text-3xl md:text-4xl text-primary">
            {{ __('The Leader Behind') }} <span class="italic text-secondary">{{ __('SBK Sasirangan') }}</span>
          </h2>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">

        <div class="md:col-span-5 relative" data-aos="fade-right">
          <div
            class="absolute top-4 left-4 w-full h-full border-2 border-secondary rounded-tl-[3rem] rounded-br-[3rem] z-0">
          </div>
          <div class="relative z-10 rounded-tl-[3rem] rounded-br-[3rem] overflow-hidden shadow-2xl aspect-[4/5] group">
            <img src="{{ asset('img/founder.webp') }}" alt="Reni Andrina Rahmawati" loading="lazy"
              class="w-full h-full object-cover object-top transform transition-transform duration-700 group-hover:scale-105">
          </div>
        </div>

        <div class="md:col-span-7 md:pl-10" data-aos="fade-left">

          <h2 class="font-header text-4xl md:text-5xl text-primary mb-6">
            Reni Andrina Rahmawati
          </h2>

          <div class="relative mb-8 p-6 bg-white rounded-r-xl border-l-4 border-secondary shadow-sm">
            <i class="fa-solid fa-quote-left text-primary/10 text-4xl absolute -top-2 left-2"></i>
            <p class="font-header text-xl text-primary italic leading-relaxed relative z-10">
              "{{ __('Weaving community resilience in Banjarbaru, Kalimantan through the colours of local wisdom') }}"
            </p>
          </div>

          <div class="prose prose-lg text-gray-600 mb-8 font-sans leading-relaxed text-justify">
            <p>
              {{ __('Reni Andirna Rahmawati is the owner, manager, and instructor of the Bee World Course and Training Institute in Banjarbaru. The organization was founded in 2016 and was accredited by the National Accreditation Board in 2019.') }}
            </p>
          </div>

          <div>
            <a href="{{ route('our-team') }}"
              class="inline-flex items-center gap-3 px-6 py-2.5 md:px-8 md:py-3 bg-primary text-third rounded-full text-md md:text-base font-medium transition-all duration-300 hover:bg-[#142e1f] hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-1 group">
              <span>{{ __('View Profile') }}</span>
              <i
                class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
          </div>

        </div>

      </div>
    </div>
  </section>

</x-layouts>
