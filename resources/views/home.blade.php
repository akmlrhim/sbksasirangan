<x-layouts>
  <section class="relative h-screen w-full overflow-hidden flex items-center justify-center">

    <div class="absolute inset-0 z-0">
      <img src="{{ asset('img/hero.jpg') }}" loading="lazy" encoding="async" alt="Background Sasirangan"
        class="w-full h-full object-cover">

      <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-black/70"></div>
    </div>

    <div class="absolute bottom-0 left-0 opacity-30 pointer-events-none z-10 text-[#f3e5b5]">
      <img src="{{ asset('img/element.png') }}" class="w-[200px] h-[200px] object-contain" alt="Element Decor" />
    </div>
    <div class="absolute top-0 right-0 opacity-30 pointer-events-none z-10 text-[#f3e5b5] rotate-180">
      <img src="{{ asset('img/element.png') }}" class="w-[200px] h-[200px] object-contain" alt="Element Decor" />
    </div>

    <div class="relative z-20 text-center px-4 max-w-5xl mx-auto">

      <h1 class="font-header text-5xl md:text-7xl lg:text-8xl leading-tight mb-4 text-[#fcf6e3] drop-shadow-lg">
        Vibrant Natural <br>
        <span class="italic text-[#eec04b]">Colors of Local Wisdom</span>
      </h1>

      <p class="font-sans text-gray-200 text-md md:text-lg mb-10 tracking-[0.2em] uppercase opacity-90 font-bold">
        Elegansi Kain Sasirangan Khas Kalimantan Selatan
      </p>

      <a href="#"
        class="group relative inline-flex items-center justify-center px-8 py-3 overflow-hidden transition duration-300 ease-out border border-[#eec04b] rounded-full hover:shadow-lg hover:shadow-[#eec04b]/30">
        <span
          class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-[#eec04b] group-hover:translate-x-0 ease">
          <i class="fa-solid fa-arrow-down"></i>
        </span>
        <span
          class="absolute flex items-center justify-center w-full h-full text-[#eec04b] transition-all duration-300 transform group-hover:translate-x-full ease font-sans font-medium tracking-wide">
          Jelajahi Koleksi
        </span>
        <span class="relative invisible">Jelajahi Koleksi</span>
      </a>

    </div>
  </section>



  <section class="relative py-16 md:py-32 bg-third overflow-hidden">

    <div
      class="absolute top-0 right-0 -mr-10 -mt-10 w-48 h-48 md:w-96 md:h-96 rounded-full bg-primary opacity-5 blur-3xl pointer-events-none">
    </div>
    <div
      class="absolute bottom-0 left-0 -ml-10 -mb-10 w-40 h-40 md:w-80 md:h-80 rounded-full bg-[#eec04b] opacity-10 blur-3xl pointer-events-none">
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
            <img src="{{ asset('img/about.jpg') }}" alt="Proses Pembuatan Sasirangan"
              class="w-full h-full object-cover transform transition duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition duration-500"></div>
          </div>
        </div>

        <div class="relative text-center md:text-left" data-aos="fade-up" data-aos-delay="100">

          <div class="flex items-center justify-center md:justify-start gap-3 mb-3 md:mb-4">
            <span class="h-px w-8 md:w-10 bg-primary"></span>
            <span class="text-xs md:text-md font-sans font-bold tracking-[0.2em] text-primary uppercase">
              Who We Are
            </span>
          </div>

          <h2 class="font-header text-3xl md:text-5xl lg:text-6xl text-primary mb-4 md:mb-6 leading-tight">
            Sasirangan Banjar
          </h2>

          <p class="font-sans text-gray-600 text-base md:text-lg leading-relaxed mb-6 md:mb-8 px-2 md:px-0">
            SBKSasirangan promotes the traditional fabrics of South Kalimantan. We advocate for a sustainable
            lifestyle
            through authentic fashion products
            (<span class="italic text-primary">dress, bags, wallets</span>) while empowering local women and
            communities.
          </p>

          <div class="flex justify-center md:justify-start">
            <a href="#"
              class="inline-flex items-center gap-3 px-6 py-2.5 md:px-8 md:py-3 bg-primary text-third rounded-full text-md md:text-base font-medium transition-all duration-300 hover:bg-[#142e1f] hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-1 group">
              <span>About Us</span>
              <i
                class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
          </div>

        </div>

      </div>
    </div>
  </section>



  <section class="py-20 bg-third">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-12" data-aos="fade-up">
        <span class="text-primary text-md font-bold tracking-[0.3em] uppercase mb-2 block">
          Our Works
        </span>
        <h2 class="font-header text-4xl md:text-5xl text-primary">
          Heritage Woven into <span class="italic text-secondary">Fashion</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up">
          <div class="aspect-[3/4] w-full bg-gray-200">
            <img src="https://images.unsplash.com/photo-1629196914375-f7e48f477b6d?q=80&w=800&auto=format&fit=crop"
              alt="Karya 1"
              class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
          </div>

          <div
            class="absolute inset-0 bg-gradient-to-t from-primary/95 via-transparent to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
            <div
              class="transform translate-y-0 md:translate-y-4 md:group-hover:translate-y-0 transition-transform duration-300">
              <p class="font-header text-2xl text-white italic">Gigi Haruan Classic</p>
              <div class="h-0.5 w-12 bg-secondary mt-2"></div>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up"
          data-aos-delay="100">
          <div class="aspect-[3/4] w-full bg-gray-200">
            <img src="https://images.unsplash.com/photo-1629196914375-f7e48f477b6d?q=80&w=800&auto=format&fit=crop"
              alt="Karya 2"
              class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
          </div>
          <div
            class="absolute inset-0 bg-gradient-to-t from-primary/95 via-transparent to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
            <div
              class="transform translate-y-0 md:translate-y-4 md:group-hover:translate-y-0 transition-transform duration-300">
              <p class="font-header text-2xl text-white italic">Natural Indigo Dye</p>
              <div class="h-0.5 w-12 bg-secondary mt-2"></div>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up"
          data-aos-delay="200">
          <div class="aspect-[3/4] w-full bg-gray-200">
            <img src="https://images.unsplash.com/photo-1629196914375-f7e48f477b6d?q=80&w=800&auto=format&fit=crop"
              alt="Karya 3"
              class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
          </div>
          <div
            class="absolute inset-0 bg-gradient-to-t from-primary/95 via-transparent to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
            <div
              class="transform translate-y-0 md:translate-y-4 md:group-hover:translate-y-0 transition-transform duration-300">
              <p class="font-header text-2xl text-white italic">Royal Golden Silk</p>
              <div class="h-0.5 w-12 bg-secondary mt-2"></div>
            </div>
          </div>
        </div>

      </div>

      <div class="mt-16 text-center">
        <a href="#"
          class="inline-flex items-center gap-2 text-primary border-b-2 border-primary pb-1 font-bold tracking-widest hover:text-secondary hover:border-secondary transition-all">
          OUR SHOP
          <i class="fa-solid fa-arrow-right-long"></i>
        </a>
      </div>

    </div>
  </section>

  <section class="relative py-20 md:py-28 bg-third overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="relative text-center mb-16 md:mb-20" data-aos="fade-up">

        <span
          class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-6xl md:text-8xl font-header text-primary/5 z-0 whitespace-nowrap pointer-events-none select-none tracking-widest">
          LEADERSHIP
        </span>

        <div class="relative z-10">
          <div class="flex items-center justify-center gap-4 mb-3">
            <div class="h-[1px] w-8 md:w-12 bg-secondary"></div>
            <span class="text-primary text-xs font-bold tracking-[0.3em] uppercase">
              The Founder
            </span>
            <div class="h-[1px] w-8 md:w-12 bg-secondary"></div>
          </div>

          <h2 class="font-header text-3xl md:text-4xl text-primary">
            The Leader Behind <span class="italic text-secondary">SBK Sasirangan</span>
          </h2>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">

        <div class="md:col-span-5 relative" data-aos="fade-right">
          <div
            class="absolute top-4 left-4 w-full h-full border-2 border-secondary rounded-tl-[3rem] rounded-br-[3rem] z-0">
          </div>
          <div class="relative z-10 rounded-tl-[3rem] rounded-br-[3rem] overflow-hidden shadow-2xl aspect-[4/5] group">
            <img src="{{ asset('img/founder.jpg') }}" alt="Reni Andrina Rahmawati"
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
              "Weaving community resilience in Banjarbaru, Kalimantan through the colours of local wisdom"
            </p>
          </div>

          <div class="prose prose-lg text-gray-600 mb-8 font-sans leading-relaxed text-justify">
            <p>
              Reni Andirna Rahmawati is the owner, manager, and instructor of the Bee World Course and Training
              Institute in Banjarbaru. The organization was founded in 2016 and was accredited by the National
              Accreditation Board in 2019.
            </p>
          </div>

          <div>
            <a href="#"
              class="inline-flex items-center gap-3 px-6 py-2.5 md:px-8 md:py-3 bg-primary text-third rounded-full text-md md:text-base font-medium transition-all duration-300 hover:bg-[#142e1f] hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-1 group">
              <span>View Profile</span>
              <i
                class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
          </div>

        </div>

      </div>
    </div>
  </section>

</x-layouts>
