<x-layouts :title="$title">
  <main class="w-full bg-third min-h-screen relative overflow-hidden pt-36 pb-20 md:pt-42 md:pb-32">
    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-0 right-0 w-80 opacity-5 -rotate-12 transform translate-x-1/4 -translate-y-1/4"
        alt="Decor">
      <img src="{{ asset('img/element.png') }}"
        class="absolute bottom-0 left-0 w-96 opacity-5 rotate-45 transform -translate-x-1/3 translate-y-1/4"
        alt="Decor">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <nav class="mb-3" data-aos="fade-down">
        <a href="{{ route('shop') }}"
          class="inline-flex items-center text-sm font-bold text-gray-400 hover:text-secondary transition-colors mb-8 group">
          <i class="fa-solid fa-arrow-left-long mr-2 transform group-hover:-translate-x-2 transition-transform"></i>
          {{ __('Back to Shop') }}
        </a>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-7" data-aos="fade-right">
          <div class="bg-white p-4 rounded-[2.5rem] shadow-xl border border-[#e6e2d8] overflow-hidden group">
            <div
              class="aspect-[4/5] w-full bg-gray-100 rounded-[2rem] overflow-hidden flex items-center justify-center">
              {!! $product->picture
                  ? '<img src="' .
                      asset('storage/' . $product->picture) .
                      '" alt="' .
                      $product->name .
                      '" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">'
                  : '<i class="fa-solid fa-image text-gray-300 text-8xl transition-transform duration-700 group-hover:scale-110"></i>' !!}
            </div>
          </div>
        </div>

        <div class="lg:col-span-5 flex flex-col" data-aos="fade-left">
          <div class="mb-6">
            <span
              class="bg-secondary/10 text-secondary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">
              {{ $product->category }}
            </span>
            <h1 class="font-header text-4xl md:text-5xl text-primary mt-6 mb-4 leading-tight">
              {{ $product->name }}
            </h1>
          </div>

          <div class="py-8 border-y border-[#e6e2d8] mb-8">
            <h3 class="text-primary font-bold uppercase tracking-widest text-sm mb-4 font-header">
              {{ __('Description') }}</h3>
            <article
              class="prose prose-sm md:prose-base max-w-none font-sans text-gray-600 leading-snug 
                          prose-p:mb-2 prose-p:mt-0 prose-p:leading-snug
                          prose-ul:list-disc prose-ul:my-2 prose-li:my-0
                          prose-strong:text-primary prose-strong:font-bold">
              {!! $product->description !!}
            </article>
          </div>

          @php
            // Pesan WhatsApp multibahasa (bisa disesuaikan jika ingin dinamis)
            $greeting = __('Halo Sasirangan Banjar, saya ingin memesan:');
            $productLabel = __('Produk:');
            $linkLabel = __('Link:');

            $waMessage = urlencode(
                "$greeting\n\n*$productLabel* " . $product->name . "\n*$linkLabel* " . url()->current(),
            );
          @endphp

          <a href="https://wa.me/628123456789?text={{ $waMessage }}" target="_blank"
            class="w-full bg-primary text-white py-5 rounded-full font-bold shadow-lg hover:bg-secondary transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 active:scale-95">
            <i class="fa-brands fa-whatsapp text-2xl"></i>
            {{ __('Order via WhatsApp') }}
          </a>
        </div>
      </div>

      <section class="mt-32" data-aos="fade-up">

        <div class="flex flex-col md:flex-row items-center justify-between mb-12 border-b border-[#e6e2d8] pb-6 gap-4">
          <div class="text-center md:text-left">
            <span class="text-xs font-bold text-gray-400 uppercase tracking-[0.2em] mb-2 block">
              {{ $relatedProducts->isNotEmpty() ? __('Curated For You') : __('Discover More') }}
            </span>
            <h2 class="font-header text-3xl md:text-4xl text-primary">
              @if ($relatedProducts->isNotEmpty())
                {{ __('You Might') }} <span class="italic text-secondary">{{ __('Also Like') }}</span>
              @else
                {{ __('Explore Our') }} <span class="italic text-secondary">{{ __('Collection') }}</span>
              @endif
            </h2>
          </div>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

          @forelse ($relatedProducts as $item)
            <a href="{{ route('product.show', $item->slug) }}" class="group block h-full">
              <div
                class="relative bg-white rounded-2xl overflow-hidden border border-[#e6e2d8] mb-4 shadow-sm hover:shadow-md transition-all duration-300 aspect-[3/4]">

                <div class="w-full h-full flex items-center justify-center bg-gray-50 overflow-hidden">
                  @if ($item->picture)
                    <img src="{{ asset('storage/' . $item->picture) }}" alt="{{ $item->name }}"
                      class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                  @else
                    <div class="text-center text-gray-300 group-hover:text-primary transition-colors duration-300">
                      <i class="fa-solid fa-image text-4xl mb-2"></i>
                      <p class="text-xs uppercase tracking-widest">{{ __('No Image') }}</p>
                    </div>
                  @endif
                </div>

                <div
                  class="absolute inset-x-0 bottom-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-center">
                  <span
                    class="bg-white/90 backdrop-blur-sm text-primary text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-lg">
                    {{ __('Detail') }} </span>
                </div>
              </div>

              <div class="space-y-1">
                <h3
                  class="font-header text-lg text-primary group-hover:text-secondary transition-colors duration-300 truncate">
                  {{ $item->name }}
                </h3>
              </div>
            </a>

          @empty
            <div class="col-span-full">
              <div
                class="rounded-3xl bg-gray-50 border-2 border-dashed border-[#e6e2d8] p-12 text-center flex flex-col items-center justify-center group hover:border-secondary/30 transition-colors duration-300">
                <div
                  class="w-16 h-16 rounded-full bg-white flex items-center justify-center text-secondary mb-4 shadow-sm group-hover:scale-110 transition-transform duration-300">
                  <i class="fa-solid fa-bag-shopping text-2xl"></i>
                </div>
                <h3 class="font-header text-2xl text-primary mb-2">{{ __('Continue Shopping') }}</h3>
                <p class="text-gray-500 max-w-md mx-auto mb-8">
                  {{ __("We couldn't find specific recommendations for this item, but we have plenty of other beautiful patterns waiting for you.") }}
                </p>
                <a href="{{ route('shop') }}"
                  class="inline-block bg-primary text-white px-8 py-3 rounded-full font-bold text-sm tracking-widest hover:bg-secondary transition-colors shadow-lg hover:shadow-xl">
                  {{ __('BROWSE CATALOG') }}
                </a>
              </div>
            </div>
          @endforelse
        </div>

      </section>

    </div>
  </main>
</x-layouts>
