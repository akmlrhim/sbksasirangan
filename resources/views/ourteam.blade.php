<x-layouts :title="$title">
  <main class="relative w-full overflow-hidden bg-third pt-36 pb-20 md:pt-44 md:pb-32">

    <div class="absolute inset-0 pointer-events-none select-none">
      <img src="{{ asset('img/element.png') }}" class="absolute top-0 right-0 w-64 opacity-5 rotate-12" alt="">
      <img src="{{ asset('img/element.png') }}" class="absolute bottom-0 left-0 w-64 opacity-5 -rotate-12" alt="">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-16 items-start mb-20">
        <div class="md:col-span-7 space-y-8" data-aos="fade-right">
          <div class="space-y-2">
            <h1 class="font-header text-4xl md:text-5xl lg:text-6xl text-primary leading-[1.1]">
              {{ __('Reni Andrina') }} <br>
              <span class="text-[#eec04b] italic font-header">{{ __('Rahmawati') }}</span>
            </h1>
          </div>
          <div class="grid grid-cols-1 gap-5 pt-2">
            <div
              class="group flex items-start gap-4 p-5 rounded-2xl bg-white/50 border border-gray-100 shadow-sm transition-all hover:shadow-md">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center shadow-sm">
                <i class="fa-solid fa-location-dot text-lg"></i>
              </div>
              <div>
                <h3 class="text-primary font-bold text-lg mb-1">{{ __('Region') }}</h3>
                <p class="text-gray-600 text-sm md:text-base font-medium">
                  {{ __('Banjarbaru, South Kalimantan, Indonesia') }}</p>
              </div>
            </div>
            <div
              class="group flex items-start gap-4 p-5 rounded-2xl bg-white/50 border border-gray-100 shadow-sm transition-all hover:shadow-md">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center shadow-sm">
                <i class="fa-solid fa-briefcase text-lg"></i>
              </div>
              <div>
                <h3 class="text-primary font-bold text-lg mb-1">{{ __('Affiliations & Roles') }}</h3>
                <p class="text-gray-600 text-sm md:text-base font-medium leading-relaxed">
                  {{ __('Owner, Manager, & Instructor at') }} <br>
                  <span class="text-primary font-semibold">{{ __('Bee World Course and Training Institute') }}</span>
                </p>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap items-center gap-4 pt-4">
            <div class="flex items-center gap-3">
              <a href="#"
                class="w-11 h-11 rounded-full bg-white border border-primary/20 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all shadow-sm"><i
                  class="fa-brands fa-instagram text-lg"></i></a>
              <a href="#"
                class="w-11 h-11 rounded-full bg-white border border-primary/20 text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all shadow-sm"><i
                  class="fa-brands fa-linkedin-in text-lg"></i></a>
            </div>
            <div class="hidden sm:block w-px h-8 bg-gray-300 mx-2"></div>
            <a href="mailto:reni@sasiranganbanjar.com"
              class="flex items-center gap-3 px-7 py-3 bg-[#eec04b] text-white rounded-full shadow-lg hover:bg-[#d4a837] transition-all">
              <i class="fa-regular fa-envelope"></i>
              <span class="font-bold text-sm tracking-wide">reni@sasiranganbanjar.com</span>
            </a>
          </div>
        </div>
        <div class="md:col-span-5 relative" data-aos="fade-left">
          <div class="relative w-full rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/5]">
            <img src="{{ asset('img/founder.webp') }}" alt="{{ __('Founder') }}" class="w-full h-full object-cover">
            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-200 pt-16" data-aos="fade-up">
        <h2 class="font-header text-3xl md:text-4xl font-bold text-primary mb-8">{{ __('Biography') }}</h2>
        <div
          class="prose prose-lg prose-headings:text-primary text-gray-600 leading-relaxed max-w-none text-justify space-y-6">
          <p>
            {{ __('Reni Andirna Rahmawati is the owner, manager, and instructor of the Bee World Course and Training Institute in Banjarbaru. The organization was founded in 2016 and was accredited by the National Accreditation Board in 2019.') }}
          </p>
          <p>
            {{ __('Apart from being an instructor at the Course and Training Institute, she also works as a teacher and professional speaker in several schools, foundations, and private and government agencies in Banjarbaru and Banjarmasin. Reni received an award as the best manager of the Course and Training Institute in 2017 – 2019 in the city of Banjarbaru.') }}
          </p>
          <p>
            {{ __('She is committed to training her community in making Sasirangan, the original traditional fabric of South Kalimantan. She uses natural dyes and introduces the culture and local wisdom behind making the product. She also focuses on educating craftsmen and the public to switch to using natural dyes to reduce the impact on soil and water pollution. She is bridging the space between the craftsmen and a broader audience by selling products through the website. Through this project, the traditional textiles of Sasirangan can be known beyond the island of Borneo.') }}
          </p>
          <p>
            {{ __('Reni and her team also plant seeds of natural dye plants and share them with the community to help replant, which expresses gratitude to nature for giving life to the craftsmen. Additionally, Reni provides training in the processing of agricultural products harvested from villages so that farmers can be more creative with their products.') }}
          </p>
          <p>
            {{ __('Recently, Reni has also been an active volunteer during the COVID 19 pandemic, by collecting donations and coordinating tailors in the Banjarbaru and Banjarmasin areas to sew Hazmat suits and masks, and make face shields to be distributed to health workers in South Kalimantan.') }}
          </p>
        </div>
      </div>

      <section class="py-24">
        <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
          <h2 class="font-header text-4xl md:text-5xl text-primary leading-tight">
            {{ __('Dedication Behind the') }} <br>
            <span class="text-[#eec04b] italic font-header">{{ __('Work of Sasirangan') }}</span>
          </h2>
        </div>

        <div class="mb-24" x-data="{
            atBeginning: true,
            atEnd: false,
            next() {
                const container = this.$refs.container;
                container.scrollBy({ left: container.offsetWidth, behavior: 'smooth' });
            },
            prev() {
                const container = this.$refs.container;
                container.scrollBy({ left: -container.offsetWidth, behavior: 'smooth' });
            },
            check() {
                const container = this.$refs.container;
                this.atBeginning = container.scrollLeft <= 5;
                this.atEnd = Math.abs(container.scrollWidth - (container.scrollLeft + container.clientWidth)) <= 5;
            }
        }" x-init="setTimeout(() => check(), 100)">
          <div class="flex items-center justify-between mb-10">
            <div class="flex items-center gap-4 flex-1">
              <h3 class="text-2xl font-header font-bold text-primary">{{ __('Management Team') }}</h3>
              <div class="h-px flex-1 bg-gray-200"></div>
            </div>
            <div class="flex gap-2 ml-4">
              <button @click="prev()" :disabled="atBeginning"
                :class="atBeginning ? 'opacity-30 cursor-not-allowed' : 'hover:bg-primary hover:text-white'"
                class="w-10 h-10 rounded-full border border-primary text-primary flex items-center justify-center transition-all">
                <i class="fa-solid fa-chevron-left"></i>
              </button>
              <button @click="next()" :disabled="atEnd"
                :class="atEnd ? 'opacity-30 cursor-not-allowed' : 'hover:bg-primary hover:text-white'"
                class="w-10 h-10 rounded-full border border-primary text-primary flex items-center justify-center transition-all">
                <i class="fa-solid fa-chevron-right"></i>
              </button>
            </div>
          </div>

          <div x-ref="container" @scroll.debounce.50ms="check()"
            class="flex overflow-hidden snap-x snap-mandatory scrollbar-hide scroll-smooth">
            @forelse ($management as $member)
              <div class="snap-start flex-shrink-0 w-full md:w-[calc(25%-1.5rem)] md:mr-8 group"
                x-data="{ showBio: false }">
                <div class="relative overflow-hidden rounded-2xl aspect-[3/4] mb-5 shadow-sm bg-gray-100">
                  @if ($member->profile_picture)
                    <img src="{{ asset('storage/' . $member->profile_picture) }}"
                      class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                      alt="{{ $member->name }}">
                  @else
                    <div
                      class="w-full h-full flex items-center justify-center bg-gray-200 transition-transform duration-700 group-hover:scale-110">
                      <i class="fa-solid fa-user text-5xl text-gray-400"></i>
                    </div>
                  @endif

                  <div x-show="showBio" x-transition class="absolute inset-0 bg-white/98 z-30 p-6 flex flex-col"
                    style="display: none;">
                    <button @click="showBio = false" class="self-end text-gray-400 hover:text-primary"><i
                        class="fa-solid fa-xmark text-2xl"></i></button>
                    <h4 class="font-header text-xl text-center text-primary font-bold mb-4">{{ $member->name }}</h4>
                    <div
                      class="flex-1 overflow-y-auto text-sm text-gray-600 leading-relaxed scrollbar-hide text-center">
                      <p>{{ $member->biography }}</p>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <h3 class="text-lg font-bold text-primary mb-3">
                    <button @click="showBio = true"
                      class="hover:text-secondary font-header transition-colors focus:outline-none">
                      {{ $member->name }}
                    </button>
                  </h3>
                  <div class="flex items-center justify-center gap-4">
                    <div class="flex gap-3">
                      @if ($member->ig_link)
                        <a href="{{ $member->ig_link }}" class="text-primary/50 hover:text-primary"><i
                            class="fa-brands fa-instagram text-xl"></i></a>
                      @endif
                      @if ($member->linkedin_link)
                        <a href="{{ $member->linkedin_link }}" class="text-primary/50 hover:text-primary"><i
                            class="fa-brands fa-linkedin-in text-xl"></i></a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <p class="w-full text-center text-gray-400">{{ __('No team members found.') }}</p>
            @endforelse
          </div>
        </div>

        <div x-data="{
            atBeginning: true,
            atEnd: false,
            next() {
                const container = this.$refs.container;
                container.scrollBy({ left: container.offsetWidth, behavior: 'smooth' });
            },
            prev() {
                const container = this.$refs.container;
                container.scrollBy({ left: -container.offsetWidth, behavior: 'smooth' });
            },
            check() {
                const container = this.$refs.container;
                this.atBeginning = container.scrollLeft <= 5;
                this.atEnd = Math.abs(container.scrollWidth - (container.scrollLeft + container.clientWidth)) <= 5;
            }
        }" x-init="setTimeout(() => check(), 100)">

          <div class="flex items-center justify-between mb-10">
            <div class="flex items-center gap-4 flex-1">
              <h3 class="text-2xl font-header font-bold text-primary">{{ __('Our Artisans') }}</h3>
              <div class="h-px flex-1 bg-gray-200"></div>
            </div>
            <div class="flex gap-2 ml-4">
              <button @click="prev()" :disabled="atBeginning"
                :class="atBeginning ? 'opacity-30 cursor-not-allowed' : 'hover:bg-primary hover:text-white'"
                class="w-10 h-10 rounded-full border border-primary text-primary flex items-center justify-center transition-all">
                <i class="fa-solid fa-chevron-left"></i>
              </button>
              <button @click="next()" :disabled="atEnd"
                :class="atEnd ? 'opacity-30 cursor-not-allowed' : 'hover:bg-primary hover:text-white'"
                class="w-10 h-10 rounded-full border border-primary text-primary flex items-center justify-center transition-all">
                <i class="fa-solid fa-chevron-right"></i>
              </button>
            </div>
          </div>

          <div x-ref="container" @scroll.debounce.50ms="check()"
            class="flex overflow-hidden snap-x snap-mandatory scrollbar-hide scroll-smooth">
            @forelse($artisans as $artisan)
              <div class="snap-start flex-shrink-0 w-full md:w-[calc(25%-1.5rem)] md:mr-8 group"
                x-data="{ showBio: false }">
                <div class="relative overflow-hidden rounded-2xl aspect-[3/4] mb-5 shadow-sm bg-gray-100">
                  @if ($artisan->profile_picture)
                    <img src="{{ asset('storage/' . $artisan->profile_picture) }}"
                      class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                      alt="{{ $artisan->name }}">
                  @else
                    <div
                      class="w-full h-full flex items-center justify-center bg-gray-200 transition-transform duration-700 group-hover:scale-110">
                      <i class="fa-solid fa-user text-5xl text-gray-400"></i>
                    </div>
                  @endif

                  <div x-show="showBio" x-transition class="absolute inset-0 bg-white/98 z-30 p-6 flex flex-col"
                    style="display: none;">
                    <button @click="showBio = false" class="self-end text-gray-400 hover:text-primary"><i
                        class="fa-solid fa-xmark text-2xl"></i></button>
                    <h4 class="font-header text-xl text-center text-primary font-bold mb-4">{{ $artisan->name }}</h4>
                    <div
                      class="flex-1 overflow-y-auto text-sm text-gray-600 leading-relaxed scrollbar-hide text-center">
                      <p>{{ $artisan->biography }}</p>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <h3 class="text-lg font-bold text-primary mb-3">
                    <button @click="showBio = true"
                      class="hover:text-secondary font-header transition-colors focus:outline-none">
                      {{ $artisan->name }}
                    </button>
                  </h3>
                  <div class="flex items-center justify-center gap-4">
                    @if ($artisan->ig_link)
                      <a href="{{ $artisan->ig_link }}" class="text-primary/50 hover:text-primary"><i
                          class="fa-brands fa-instagram text-xl"></i></a>
                    @endif
                  </div>
                </div>
              </div>
            @empty
              <p class="w-full text-center text-gray-400">{{ __('No artisans found.') }}</p>
            @endforelse
          </div>
        </div>
      </section>
    </div>
  </main>

  <style>
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }

    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</x-layouts>
