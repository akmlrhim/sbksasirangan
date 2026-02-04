<x-layouts>
  <main class="w-full bg-third min-h-screen relative overflow-hidden pt-36 pb-20 md:pt-42 md:pb-32">

    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-0 right-0 w-64 opacity-5 -rotate-12 translate-x-1/3 -translate-y-1/4" alt="Decor">
      <img src="{{ asset('img/element.png') }}" class="absolute top-1/2 left-0 w-80 opacity-5 rotate-45 -translate-x-1/2"
        alt="Decor">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

      <div class="text-center mb-12" data-aos="fade-down">
        <span class="text-secondary font-bold tracking-[0.2em] uppercase text-sm mb-3 block">
          Official Store
        </span>
        <h1 class="font-header text-4xl md:text-5xl text-primary leading-tight">
          Our <span class="italic text-secondary">Collection</span>
        </h1>
        <p class="text-gray-500 mt-4 max-w-xl mx-auto">
          Discover authentic Sasirangan products crafted with passion and tradition.
        </p>
      </div>

      <div
        class="mb-10 flex flex-col md:flex-row justify-between items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-[#e6e2d8]"
        data-aos="fade-up">

        <div class="flex gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 hide-scrollbar">
          <button
            class="px-5 py-2 rounded-full bg-primary text-white text-sm font-medium whitespace-nowrap shadow-md">All
            Items</button>
          <button
            class="px-5 py-2 rounded-full bg-[#fdfbf7] text-gray-600 hover:text-primary hover:bg-gray-100 border border-gray-200 text-sm font-medium whitespace-nowrap transition">Kain</button>
          <button
            class="px-5 py-2 rounded-full bg-[#fdfbf7] text-gray-600 hover:text-primary hover:bg-gray-100 border border-gray-200 text-sm font-medium whitespace-nowrap transition">Kemeja</button>
          <button
            class="px-5 py-2 rounded-full bg-[#fdfbf7] text-gray-600 hover:text-primary hover:bg-gray-100 border border-gray-200 text-sm font-medium whitespace-nowrap transition">Aksesoris</button>
        </div>

        <div class="relative w-full md:w-72">
          <input type="text" placeholder="Search products..."
            class="w-full pl-10 pr-4 py-2.5 rounded-full bg-[#fdfbf7] border border-gray-200 focus:border-secondary focus:ring-1 focus:ring-secondary outline-none text-sm text-primary transition">
          <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">

        @forelse($products as $product)
          <div
            class="group bg-white rounded-2xl overflow-hidden shadow-lg border border-[#e6e2d8] hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 relative flex flex-col"
            data-aos="fade-up">

            <div class="relative aspect-[3/4] overflow-hidden bg-gray-100">
              <span
                class="absolute top-3 left-3 z-10 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider shadow-sm">
                {{ $product->category }}
              </span>

              <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

            </div>

            <div class="p-5 flex flex-col flex-grow">
              <h3
                class="font-header text-lg text-primary mb-1 leading-tight group-hover:text-secondary transition-colors line-clamp-2">
                <a href="#">
                  {{ $product->name }}
                </a>
              </h3>

              <div class="mt-auto pt-3 flex items-center justify-between border-t border-gray-100">
                <span class="text-gray-400 text-xs font-sans">Price</span>
                <span class="text-lg font-bold text-secondary">
                  Rp {{ number_format($product->price, 0, ',', '.') }}
                </span>
              </div>
            </div>
          </div>

        @empty
          <div class="col-span-full py-20 text-center">
            <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
              <i class="fa-solid fa-box-open text-3xl"></i>
            </div>
            <h3 class="text-3xl font-header text-primary">No Products Found</h3>
            <p class="text-gray-500">We couldn't find any products matching your criteria.</p>
          </div>
        @endforelse

      </div>

      <div class="mt-16 flex justify-center">
        {{ $products->links() }}
      </div>

    </div>
  </main>
</x-layouts>
