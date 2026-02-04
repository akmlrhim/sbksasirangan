<x-layouts>
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
      <nav class="mb-8" data-aos="fade-down">
        <ol class="flex items-center gap-2 text-sm font-sans text-gray-400">
          <li><a href="/" class="hover:text-secondary transition">Home</a></li>
          <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
          <li><a href="{{ route('shop') }}" class="hover:text-secondary transition">Store</a></li>
          <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
          <li class="text-primary font-bold truncate">{{ $product->name }}</li>
        </ol>
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
            <h3 class="text-primary font-bold uppercase tracking-widest text-sm mb-4 font-header">Description</h3>
            <article
              class="prose prose-sm md:prose-base max-w-none font-sans text-gray-600 leading-snug 
													prose-p:mb-2 prose-p:mt-0 prose-p:leading-snug
													prose-ul:list-disc prose-ul:my-2 prose-li:my-0
													prose-strong:text-primary prose-strong:font-bold">
              {!! $product->description !!}
            </article>
          </div>

          <div class="space-y-4 mb-10">
            <div class="flex items-center gap-4 text-sm">
              <span class="w-24 text-gray-400 font-bold uppercase tracking-tighter text-[10px]">Availability</span>
              <span class="text-primary font-medium italic"><i
                  class="fa-solid fa-check-circle text-green-600 mr-2"></i>In Stock (Handmade)</span>
            </div>
          </div>

          @php
            $waMessage = urlencode(
                "Halo Sasirangan Banjar, saya ingin memesan:\n\n*Produk:* " .
                    $product->name .
                    "\n*Harga:* Rp " .
                    number_format($product->price, 0, ',', '.') .
                    "\n*Link:* " .
                    url()->current(),
            );
          @endphp

          <a href="https://wa.me/628123456789?text={{ $waMessage }}" target="_blank"
            class="w-full bg-primary text-white py-5 rounded-full font-bold shadow-lg hover:bg-secondary transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 active:scale-95">
            <i class="fa-brands fa-whatsapp text-2xl"></i>
            Order via WhatsApp
          </a>
        </div>
      </div>

      <section class="mt-32" data-aos="fade-up">
        <div class="flex items-center justify-between mb-12 border-b border-[#e6e2d8] pb-6">
          <h2 class="font-header text-3xl text-primary">You Might <span class="italic text-secondary">Also Like</span>
          </h2>
          <a href="{{ route('shop') }}" class="text-secondary font-bold hover:underline transition">View All</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          @foreach ($relatedProducts as $item)
            <a href="{{ route('product.show', $item->slug) }}" class="group block">
              <div
                class="aspect-[3/4] bg-white rounded-2xl overflow-hidden border border-[#e6e2d8] mb-4 relative shadow-sm flex items-center justify-center">
                {!! $item->picture
                    ? '<img src="' .
                        asset('storage/' . $item->picture) .
                        '" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">'
                    : '<i class="fa-solid fa-image text-gray-200 text-3xl transition-transform duration-700 group-hover:scale-110"></i>' !!}
              </div>
              <h3 class="font-header text-primary group-hover:text-secondary transition truncate">{{ $item->name }}
              </h3>
              <p class="text-secondary font-bold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
            </a>
          @endforeach
        </div>
      </section>
    </div>
  </main>
</x-layouts>
