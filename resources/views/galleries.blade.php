<x-layouts :title="$title">
  <main class="w-full min-h-screen bg-third" x-data="{
      activeTab: 'all',
      isLoading: true,
      lightboxOpen: false,
      lightboxImage: '',
      lightboxTitle: '',
      openLightbox(img, title) {
          this.lightboxImage = img;
          this.lightboxTitle = title;
          this.lightboxOpen = true;
          document.body.style.overflow = 'hidden';
      },
      closeLightbox() {
          this.lightboxOpen = false;
          setTimeout(() => {
              this.lightboxImage = '';
              this.lightboxTitle = '';
          }, 300);
          document.body.style.overflow = '';
      },
      init() {
          setTimeout(() => { this.isLoading = false; }, 800);
      }
  }" @keydown.escape.window="closeLightbox()">

    <section class="w-full flex flex-col md:flex-row min-h-[300px] sm:min-h-[400px] md:h-[600px] pt-16 sm:pt-20">
      <div
        class="w-full md:w-1/2 bg-primary flex flex-col justify-center px-6 sm:px-8 md:px-16 lg:px-24 py-12 sm:py-16 md:py-0 relative overflow-hidden">
        <div
          class="absolute top-0 left-0 w-16 h-16 sm:w-24 sm:h-24 border-l-[3px] sm:border-l-4 border-t-[3px] sm:border-t-4 border-secondary/30 m-4 sm:m-6">
        </div>

        <div class="max-w-lg z-10" data-aos="fade-right">
          <span
            class="text-secondary tracking-[0.2em] text-[10px] sm:text-xs md:text-sm font-bold font-sans uppercase mb-1.5 sm:mb-2 block">
            {{ __('Documentation') }}
          </span>
          <h1
            class="text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-header font-bold tracking-tight leading-tight">
            {{ __('Our Gallery') }}
          </h1>
          <p
            class="mt-3 sm:mt-4 md:mt-6 text-white font-medium text-sm sm:text-base md:text-lg tracking-wide font-sans font-light leading-relaxed">
            {{ __('Menyelami keindahan motif dan aktivitas Sasirangan Banjar melalui lensa kamera.') }}
          </p>
          <div class="mt-6 sm:mt-8 h-1 w-16 sm:w-24 bg-secondary rounded"></div>
        </div>
      </div>

      <div class="w-full md:w-1/2 h-[200px] sm:h-[300px] md:h-full relative overflow-hidden group">
        <img src="{{ asset('img/gallery.jpg') }}" loading="lazy" alt="{{ __('Dokumentasi kegiatan Sasirangan') }}"
          class="w-full h-full object-cover object-center transition-transform duration-[3000ms] ease-out group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/30 to-transparent"></div>
      </div>
    </section>

    <section
      class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20 relative min-h-[600px] sm:min-h-[800px]">

      <div
        class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 sm:mb-10 gap-4 sm:gap-6 border-b border-primary/10 pb-4 sm:pb-6"
        data-aos="fade-up">
        <div class="relative flex-shrink-0">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-header text-primary">{{ __('Latest Archives') }}</h2>
        </div>

        <div class="w-full md:w-auto overflow-x-auto pb-2 scrollbar-hide">
          <div class="flex flex-nowrap gap-x-4 sm:gap-x-6 md:gap-x-8">
            <button @click="activeTab = 'all'"
              class="whitespace-nowrap text-xs sm:text-sm capitalize transition-all duration-300 pb-1 border-b-[1.5px] sm:border-b-2 font-header outline-none"
              :class="activeTab === 'all' ? 'text-primary font-bold border-primary' :
                  'text-gray-400 font-medium border-transparent hover:text-primary'">
              {{ __('All') }}
            </button>

            @foreach ($galleries as $item)
              <button @click="activeTab = '{{ (string) $item->id }}'"
                class="whitespace-nowrap text-xs sm:text-sm capitalize transition-all duration-300 pb-1 border-b-[1.5px] sm:border-b-2 font-header outline-none"
                :class="activeTab === '{{ (string) $item->id }}' ? 'text-primary font-bold border-primary' :
                    'text-gray-400 font-medium border-transparent hover:text-primary'">
                {{ $item->title }}
              </button>
            @endforeach
          </div>
        </div>
      </div>

      <div x-show="activeTab !== 'all'" x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="mb-8 sm:mb-12 min-h-[50px] sm:min-h-[60px]">
        @foreach ($galleries as $descItem)
          <div x-show="activeTab === '{{ (string) $descItem->id }}'"
            class="max-w-3xl mx-auto text-center space-y-3 sm:space-y-4">
            <h3 class="text-xl sm:text-2xl font-header text-primary">{{ $descItem->title }}</h3>
            <div class="h-0.5 w-12 sm:w-16 bg-secondary mx-auto"></div>
            <p class="text-gray-600 font-sans leading-relaxed text-sm sm:text-base md:text-lg">
              {{ $descItem->description }}
            </p>
          </div>
        @endforeach
      </div>

      <div class="relative w-full min-h-[300px] sm:min-h-[400px]">

        <div x-show="isLoading" x-transition:leave="transition ease-in duration-500" x-transition:leave-end="opacity-0"
          class="absolute inset-0 z-40 flex flex-col items-center justify-start pt-16 sm:pt-20 bg-third">
          <div class="w-10 h-10 sm:w-12 sm:h-12 border-4 border-primary/10 border-t-primary rounded-full animate-spin">
          </div>
          <span
            class="mt-3 sm:mt-4 text-[10px] sm:text-xs font-bold tracking-widest text-primary font-sans animate-pulse">
            {{ __('LOADING...') }}
          </span>
        </div>

        <div x-show="!isLoading">
          @if ($galleries->isEmpty())
            <div
              class="flex flex-col items-center justify-center py-16 sm:py-24 text-center border-2 border-dashed border-primary/10 rounded-2xl sm:rounded-3xl">
              <div
                class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-primary/5 flex items-center justify-center mb-3 sm:mb-4">
                <i class="fa-regular fa-images text-2xl sm:text-3xl text-primary/40"></i>
              </div>
              <p class="text-gray-400 font-sans tracking-wide text-xs sm:text-sm">
                {{ __('No gallery items found.') }}
              </p>
            </div>
          @else
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-4 sm:gap-6 space-y-4 sm:space-y-6">
              @foreach ($galleries as $item)
                @php
                  $images = is_string($item->images) ? json_decode($item->images, true) : $item->images;
                  $images = is_array($images) ? array_filter($images) : [];
                  $itemTitle = e($item->title);
                  $itemId = (string) $item->id;
                @endphp

                @foreach ($images as $image)
                  @php $imagePath = asset('storage/' . $image); @endphp
                  <div x-show="activeTab === 'all' || activeTab === '{{ $itemId }}'"
                    x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" class="break-inside-avoid group relative">

                    <div
                      class="bg-white p-1.5 sm:p-2 md:p-2.5 rounded-xl shadow-sm hover:shadow-xl transition-all duration-500 border border-primary/5 cursor-zoom-in"
                      @click="openLightbox('{{ $imagePath }}', '{{ $itemTitle }}')">
                      <div class="relative overflow-hidden rounded-lg bg-gray-100">
                        <img src="{{ $imagePath }}" loading="lazy" alt="{{ $item->title }}"
                          class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                      </div>
                    </div>
                  </div>
                @endforeach
              @endforeach
            </div>
          @endif
        </div>
      </div>
    </section>

    <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-[100] bg-black/90 backdrop-blur-sm flex items-center justify-center p-4"
      @click="closeLightbox()">

      <button @click.stop="closeLightbox()"
        class="absolute top-4 right-4 sm:top-6 sm:right-6 md:top-8 md:right-8 text-white/50 hover:text-white transition-colors z-50 p-2 outline-none">
        <i class="fa-solid fa-xmark text-2xl sm:text-3xl md:text-4xl"></i>
      </button>

      <div class="relative max-w-5xl w-full flex flex-col items-center" @click.stop>
        <img :src="lightboxImage" :alt="lightboxTitle"
          class="max-w-full max-h-[70vh] sm:max-h-[80vh] object-contain rounded-md shadow-2xl transition-all">
        <p x-text="lightboxTitle"
          class="mt-4 sm:mt-6 text-white/90 font-header text-sm sm:text-base md:text-lg tracking-widest uppercase text-center">
        </p>
      </div>
    </div>

  </main>
</x-layouts>
