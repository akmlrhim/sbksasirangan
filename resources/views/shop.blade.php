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
        <h1 class="font-header text-4xl md:text-5xl text-primary leading-tight">
          Our <span class="italic text-secondary">Collection</span>
        </h1>
        <p class="text-gray-500 mt-4 max-w-xl mx-auto">
          Discover authentic Sasirangan products crafted with passion and tradition.
        </p>
      </div>

      <div
        class="mb-10 flex flex-col lg:flex-row justify-between items-center gap-6 bg-white p-5 rounded-2xl shadow-sm border border-[#e6e2d8]"
        data-aos="fade-up">

        <div class="flex gap-2 overflow-x-auto w-full lg:w-auto pb-2 lg:pb-0 hide-scrollbar flex-1">
          <a href="{{ route('shop', ['search' => request('search')]) }}"
            class="px-6 py-2.5 rounded-full text-sm font-medium whitespace-nowrap transition {{ !request('category') ? 'bg-primary text-white shadow-md' : 'bg-[#fdfbf7] text-gray-600 border border-gray-200 hover:text-primary' }}">
            All Items
          </a>

          @foreach ($categories as $cat)
            <a href="{{ route('shop', ['category' => $cat, 'search' => request('search')]) }}"
              class="px-6 py-2.5 rounded-full text-sm font-medium transition {{ request('category') == $cat ? 'bg-primary text-white shadow-md' : 'bg-[#fdfbf7] text-gray-600 border border-gray-200 hover:text-primary' }}">
              {{ ucfirst($cat) }}
            </a>
          @endforeach
        </div>

        <form action="{{ route('shop') }}" method="GET" class="relative w-full md:w-[400px] lg:w-[450px]">
          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..."
            class="w-full pl-6 py-3 rounded-full bg-[#fdfbf7] border border-gray-200 focus:border-secondary focus:ring-1 focus:ring-secondary outline-none text-sm text-primary transition shadow-inner">

        </form>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
        @forelse($products as $product)
          <div
            class="group bg-white rounded-2xl overflow-hidden shadow-lg border border-[#e6e2d8] hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 relative flex flex-col"
            data-aos="fade-up">
            <a href="{{ route('product.show', $product->slug) }}">

              <div class="relative aspect-[3/4] overflow-hidden bg-gray-100 flex items-center justify-center">
                <span
                  class="absolute top-3 left-3 z-10 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider shadow-sm">
                  {{ $product->category }}
                </span>

                {!! $product->picture
                    ? '<img src="' .
                        asset('storage/' . $product->picture) .
                        '" alt="' .
                        $product->name .
                        '" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">'
                    : '<i class="fa-solid fa-image text-gray-300 text-5xl transition-transform duration-700 group-hover:scale-110"></i>' !!}
              </div>

              <div class="p-5 flex flex-col flex-grow">
                <h3
                  class="font-header text-lg text-primary mb-1 leading-tight group-hover:text-secondary transition-colors line-clamp-2">
                  <a href="#">
                    {{ $product->name }}
                  </a>
                </h3>

              </div>
            </a>

          </div>
        @empty
          <div class="col-span-full py-20 text-center" data-aos="fade-up">
            <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
              <i class="fa-solid fa-box-open text-3xl"></i>
            </div>
            <h3 class="text-3xl font-header text-primary">No Products Found</h3>
            <p class="text-gray-500">We couldn't find any products matching your criteria.</p>
            @if (request('search') || request('category'))
              <a href="{{ route('shop') }}" class="mt-6 inline-block text-secondary font-bold hover:underline">Clear
                all filters</a>
            @endif
          </div>
        @endforelse
      </div>

      <div class="flex justify-center mt-16 pb-10" data-aos="fade-up">
        <nav class="flex items-center gap-2">
          @if ($products->onFirstPage())
            <span
              class="w-12 h-12 flex items-center justify-center rounded-full border border-gray-100 text-gray-300 cursor-not-allowed">
              <i class="fa-solid fa-chevron-left"></i>
            </span>
          @else
            <a href="{{ $products->previousPageUrl() }}"
              class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-[#e6e2d8] text-primary hover:bg-primary hover:text-white hover:border-primary shadow-sm transition-all duration-300">
              <i class="fa-solid fa-chevron-left"></i>
            </a>
          @endif

          <div class="flex items-center gap-2 px-2">
            @foreach ($products->getUrlRange(max(1, $products->currentPage() - 2), min($products->lastPage(), $products->currentPage() + 2)) as $page => $url)
              @if ($page == $products->currentPage())
                <span
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-primary text-white font-bold shadow-lg shadow-primary/20 scale-110">
                  {{ $page }}
                </span>
              @else
                <a href="{{ $url }}"
                  class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-[#e6e2d8] text-gray-500 hover:text-primary hover:border-secondary transition-all">
                  {{ $page }}
                </a>
              @endif
            @endforeach
          </div>

          @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}"
              class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-[#e6e2d8] text-primary hover:bg-primary hover:text-white hover:border-primary shadow-sm transition-all duration-300">
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          @else
            <span
              class="w-12 h-12 flex items-center justify-center rounded-full border border-gray-100 text-gray-300 cursor-not-allowed">
              <i class="fa-solid fa-chevron-right"></i>
            </span>
          @endif
        </nav>
      </div>

    </div>
  </main>
</x-layouts>
