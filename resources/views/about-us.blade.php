<x-layouts>
  <main class="w-full overflow-hidden bg-white">

    <section class="relative pt-36 pb-20 md:pt-32 md:pb-32 bg-third">
      <div
        class="absolute top-0 left-0 w-64 h-64 bg-[#bfa15f]/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <div data-aos="fade-up">
          <span class="text-[#bfa15f] font-bold tracking-[0.2em] uppercase text-sm mb-4 block">Our Story</span>
          <h1 class="font-header text-5xl md:text-7xl text-primary mb-8 leading-tight">
            About Sasirangan <br> <span class="italic text-[#bfa15f]">Banjar</span>
          </h1>

          <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16">
            <a href="#"
              class="px-8 py-3 bg-primary text-white rounded-full font-medium transition hover:bg-[#142e1f] hover:shadow-lg hover:-translate-y-1">
              Contact Us
            </a>
            <a href="#"
              class="px-8 py-3 border border-primary text-primary rounded-full font-medium transition hover:bg-primary hover:text-white">
              Our Services
            </a>
          </div>
        </div>

        <div class="relative rounded-2xl overflow-hidden shadow-2xl group" data-aos="fade-up" data-aos-delay="100">
          <div class="absolute inset-0 border-[1px] border-white/20 z-20 pointer-events-none m-4 rounded-xl"></div>
          <img src="{{ asset('img/about_us_img.jpg') }}" alt="Tim Sasirangan Banjar"
            class="w-full h-[400px] md:h-[600px] object-cover transition-transform duration-1000 group-hover:scale-105">

          <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent"></div>
        </div>

      </div>
    </section>

    <section class="py-20 bg-white relative overflow-hidden">

      <div class="absolute inset-0 pointer-events-none">

        <svg class="absolute -top-20 -left-20 w-96 h-96 text-primary opacity-5" viewBox="0 0 200 200" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M0 200C0 200 50 150 100 180C150 210 180 150 180 150" stroke="currentColor" stroke-width="2" />
          <path d="M-20 220C-20 220 60 140 130 190C200 240 220 120 220 120" stroke="currentColor" stroke-width="1" />
        </svg>

        <svg class="absolute bottom-0 right-0 w-80 h-80 text-[#bfa15f] opacity-10 transform rotate-180"
          viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10 190 Q 50 100 120 180 T 200 160" stroke="currentColor" stroke-width="2" fill="none" />
        </svg>

      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-start">

          <div data-aos="fade-right">
            <div class="flex items-center gap-4 mb-6">
              <div class="h-[2px] w-12 bg-primary"></div>
              <span class="text-primary font-bold tracking-widest uppercase text-sm">Sasirangan Banjar</span>
            </div>
            <h2 class="font-header text-4xl md:text-5xl text-primary leading-tight">
              Heritage Woven into <br> <span class="italic text-secondary">Modern Fashion</span>
            </h2>
          </div>

          <div class="font-sans text-gray-600 text-lg leading-relaxed space-y-6" data-aos="fade-left">
            <p>
              <span class="text-5xl float-left mr-3 mt-[-10px] font-header text-secondary">S</span>asirangan Banjar is
              an initiative dedicated to preserving and developing the traditional Sasirangan fabrics of South
              Kalimantan. We believe that the beauty and cultural value of each piece of Sasirangan cloth deserve to be
              passed down to future generations.
            </p>
            <p>
              By infusing modern elements, we present Sasirangan in a variety of unique designs while upholding
              traditional values. Through innovative and sustainable fashion products, we strive to introduce Sasirangan
              to a wider audience, both domestically and internationally.
            </p>
          </div>
        </div>
      </div>
    </section>


    <section class="py-24 relative overflow-hidden bg-third" x-data="{
        activeSlide: 0,
        services: [{
                icon: 'fa-leaf',
                title: 'Sustainable Fashion',
                desc: 'Fashion can be eco-friendly through our dedicated sustainable practices.'
            },
            {
                icon: 'fa-school',
                title: 'Artistic Educational',
                desc: 'All of us can join the workshop online or offline to learn the craft.'
            },
            {
                icon: 'fa-handshake',
                title: 'Partnership for Global Goals',
                desc: 'Partnerships between governments, private and public bodies bring our goals closer.'
            },
            {
                icon: 'fa-users',
                title: 'Community Empowerment',
                desc: 'We promote community and women’s empowerment by fair-trade and ethical approach.'
            },
            {
                icon: 'fa-chart-line',
                title: 'Economic Resilience',
                desc: 'We collaborate to increase our economic resilience and stability.'
            }
        ],
        next() {
            this.activeSlide = this.activeSlide === this.services.length - 1 ? 0 : this.activeSlide + 1;
        },
        prev() {
            this.activeSlide = this.activeSlide === 0 ? this.services.length - 1 : this.activeSlide - 1;
        },
        goTo(index) {
            this.activeSlide = index;
        }
    }">

      <div class="absolute inset-0 w-full h-full pointer-events-none">

        <img src="{{ asset('img/element.png') }}"
          class="absolute -top-16 -left-16 w-64 h-64 md:w-80 md:h-80 object-contain opacity-5 rotate-12" alt="Decor">

        <img src="{{ asset('img/element.png') }}"
          class="absolute -bottom-16 -right-16 w-72 h-72 md:w-96 md:h-96 object-contain opacity-5 -rotate-12"
          alt="Decor">

      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
          <span class="inline-block py-1 px-3 rounded-full text-secondary font-bold tracking-[0.2em] uppercase text-md">
            What We Do
          </span>
          <h2 class="font-header text-4xl md:text-5xl text-primary mt-4">Our Services</h2>
          <div class="w-24 h-1 bg-primary mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="md:hidden relative group">

          <div class="overflow-hidden rounded-2xl">
            <div class="flex transition-transform duration-500 ease-out"
              :style="`transform: translateX(-${activeSlide * 100}%)`">

              <template x-for="(service, index) in services" :key="index">
                <div class="w-full flex-shrink-0 px-1">
                  <div
                    class="bg-white p-8 rounded-2xl shadow-xl border-b-4 border-transparent h-full flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-third/20 rounded-2xl flex items-center justify-center mb-6">
                      <i :class="`fa-solid ${service.icon}`" class="text-3xl text-primary"></i>
                    </div>
                    <h3 class="font-header text-2xl text-primary mb-3" x-text="service.title"></h3>
                    <p class="text-gray-500 leading-relaxed text-md" x-text="service.desc"></p>
                  </div>
                </div>
              </template>
            </div>
          </div>

          <button @click="prev()"
            class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-2 bg-white/10 hover:bg-[#bfa15f] text-white hover:text-primary w-10 h-10 rounded-full flex items-center justify-center backdrop-blur-md transition-all shadow-md">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button @click="next()"
            class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-2 bg-white/10 hover:bg-[#bfa15f] text-white hover:text-primary w-10 h-10 rounded-full flex items-center justify-center backdrop-blur-md transition-all shadow-md">
            <i class="fa-solid fa-chevron-right"></i>
          </button>

          <div class="flex justify-center gap-2 mt-6">
            <template x-for="(service, index) in services" :key="index">
              <button @click="goTo(index)" class="h-2 rounded-full transition-all duration-300"
                :class="activeSlide === index ? 'w-8 bg-[#bfa15f]' : 'w-2 bg-gray-300 hover:bg-gray-400'">
              </button>
            </template>
          </div>
        </div>

        <div class="hidden md:block">

          <div class="grid grid-cols-3 gap-8 mb-8">
            <template x-for="(service, index) in services.slice(0, 3)" :key="index">
              <div
                class="group bg-white p-8 rounded-2xl shadow-xl transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl border-b-4 border-transparent hover:border-[#bfa15f]"
                data-aos="fade-up" :data-aos-delay="index * 100">
                <div
                  class="w-16 h-16 bg-third/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors duration-300">
                  <i :class="`fa-solid ${service.icon}`"
                    class="text-3xl text-primary group-hover:text-[#bfa15f] transition-colors duration-300"></i>
                </div>
                <h3 class="font-header text-2xl text-primary mb-3 group-hover:text-[#bfa15f] transition-colors"
                  x-text="service.title"></h3>
                <p class="text-gray-500 leading-relaxed text-md" x-text="service.desc"></p>
              </div>
            </template>
          </div>

          <div class="grid grid-cols-2 gap-8 w-2/3 mx-auto">
            <template x-for="(service, index) in services.slice(3, 5)" :key="index + 3">
              <div
                class="group bg-white p-8 rounded-2xl shadow-xl transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl border-b-4 border-transparent hover:border-[#bfa15f]"
                data-aos="fade-up" :data-aos-delay="(index + 3) * 100">
                <div
                  class="w-16 h-16 bg-third/20 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors duration-300">
                  <i :class="`fa-solid ${service.icon}`"
                    class="text-3xl text-primary group-hover:text-[#bfa15f] transition-colors duration-300"></i>
                </div>
                <h3 class="font-header text-2xl text-primary mb-3 group-hover:text-[#bfa15f] transition-colors"
                  x-text="service.title"></h3>
                <p class="text-gray-500 leading-relaxed text-md" x-text="service.desc"></p>
              </div>
            </template>
          </div>

        </div>

      </div>
    </section>



    <section class="py-12 bg-third relative overflow-hidden">
      <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-3xl h-64 bg-primary/5 rounded-full blur-3xl -z-10">
      </div>

      <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10">

        <div class="flex justify-center -mb-5 relative z-20" data-aos="fade-down">
          <h2
            class="bg-secondary text-white px-8 py-2 rounded-full font-header text-lg md:text-xl tracking-widest shadow-lg transform transition hover:-translate-y-1 cursor-default">
            Our Partnership
          </h2>
        </div>

        <div class="bg-[#fcfaf5] p-6 pt-10 md:p-10 md:pt-14 rounded-lg shadow-lg relative border border-[#e6e2d8]"
          data-aos="fade-up">

          <div
            class="absolute -top-3 -right-4 w-20 h-6 bg-[#dcd0b6] opacity-90 rotate-[30deg] shadow-sm z-30 hidden md:block">
          </div>
          <div
            class="absolute -bottom-3 -left-4 w-20 h-6 bg-[#dcd0b6] opacity-90 rotate-[30deg] shadow-sm z-30 hidden md:block">
          </div>

          <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">

            <div
              class="md:col-span-3 flex flex-row md:flex-col justify-center gap-4 items-center md:border-r md:border-dashed md:border-primary/20 md:pr-6">
              <div
                class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full shadow-sm flex items-center justify-center overflow-hidden">
                <img src="{{ asset('img/partnership_1.png') }}" alt="Logo Partner"
                  class="w-full h-full object-contain p-1">
              </div>

              <div
                class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full shadow-sm flex items-center justify-center overflow-hidden">
                <img src="{{ asset('img/partnership_2.png') }}" alt="Logo Partner"
                  class="w-full h-full object-contain p-1">
              </div>
            </div>

            <div class="md:col-span-9 text-center md:text-justify">
              <p class="text-primary font-medium text-sm md:text-base leading-relaxed font-sans">
                Sebagian penghasilan
                <span class="font-bold text-secondary text-xs md:text-sm bg-primary/5 px-1 rounded">(2.5% dari
                  pembelian
                  > Rp. 1jt)</span>
                akan dialokasikan untuk penanaman dan pelestarian
                <span class="font-bold underline decoration-secondary decoration-2 underline-offset-2">hutan
                  Mangrove</span>
                di Pulau Burung, Tanah Bumbu, serta penanaman kembali bibit tumbuhan pewarna alami. Program ini bekerja
                sama dengan
                <span class="font-bold">Akademi Komunitas Peternakan Uswatun Hasanah</span>
                (Tanah Laut, Kalsel) yang hasilnya akan dibagikan kepada para pengrajin sasirangan lokal.
              </p>
            </div>

          </div>
        </div>

      </div>
    </section>

  </main>
</x-layouts>
