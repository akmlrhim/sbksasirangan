<x-layouts :title="$title">
  <main class="w-full bg-third min-h-screen relative overflow-hidden pt-36 pb-20 md:pt-42 md:pb-32"
    x-data="{
        activeCategory: '{{ request('category') }}',
        search: '{{ request('search') }}',
        isLoading: false,
    
        async fetchData(url) {
            if (!url) return;
            this.isLoading = true;
            window.history.pushState({}, '', url);
    
            try {
                const response = await fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                const html = await response.text();
                document.getElementById('product-container').innerHTML = html;
                document.getElementById('scroll-target').scrollIntoView({ behavior: 'smooth' });
            } catch (error) {
                console.error('Error:', error);
            } finally {
                this.isLoading = false;
            }
        },
    
        applyFilter() {
            let params = new URLSearchParams();
            if (this.activeCategory) params.append('category', this.activeCategory);
            if (this.search) params.append('search', this.search);
    
            const queryString = params.toString();
            const url = queryString ?
                `{{ route('shop') }}?${queryString}` :
                `{{ route('shop') }}`;
    
            this.fetchData(url);
        },
    
        handlePagination(e) {
            const link = e.target.closest('a');
            if (!link) return;
            if (link.closest('.product-card')) return;
    
            e.preventDefault();
            this.fetchData(link.href);
        }
    }">

    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-0 right-0 w-64 opacity-5 -rotate-12 translate-x-1/3 -translate-y-1/4" alt="Decor">
      <img src="{{ asset('img/element.png') }}" class="absolute top-1/2 left-0 w-80 opacity-5 rotate-45 -translate-x-1/2"
        alt="Decor">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" id="scroll-target">

      <div class="text-center mb-12" data-aos="fade-down">
        <h1 class="font-header text-4xl md:text-5xl text-primary leading-tight">
          {{ __('Our') }} <span class="italic text-secondary">{{ __('Collection') }}</span>
        </h1>
        <p class="text-gray-500 mt-4 max-w-xl mx-auto">
          {{ __('Discover authentic Sasirangan products crafted with passion and tradition.') }}
        </p>
      </div>

      <div
        class="mb-10 flex flex-col lg:flex-row justify-between items-center gap-6 bg-white p-5 rounded-2xl shadow-sm border border-[#e6e2d8]"
        data-aos="fade-up">

        <div class="flex gap-2 overflow-x-auto w-full lg:w-auto pb-2 lg:pb-0 hide-scrollbar flex-1">
          <button @click="activeCategory = null; search = ''; applyFilter()"
            :class="!activeCategory ? 'bg-primary text-white shadow-md' :
                'bg-[#fdfbf7] text-gray-600 border border-gray-200 hover:text-primary'"
            class="px-6 py-2.5 rounded-full text-sm font-medium whitespace-nowrap transition cursor-pointer">
            {{ __('All Items') }}
          </button>

          @foreach ($categories as $cat)
            <button @click="activeCategory = '{{ $cat }}'; applyFilter()"
              :class="activeCategory === '{{ $cat }}' ? 'bg-primary text-white shadow-md' :
                  'bg-[#fdfbf7] text-gray-600 border border-gray-200 hover:text-primary'"
              class="px-6 py-2.5 rounded-full text-sm font-medium whitespace-nowrap transition cursor-pointer">
              {{ ucfirst($cat) }}
            </button>
          @endforeach
        </div>

        <form @submit.prevent="applyFilter()" class="relative w-full md:w-[400px] lg:w-[450px]">
          <input type="text" x-model="search" placeholder="{{ __('Search products...') }}"
            class="w-full pl-6 py-3 rounded-full bg-[#fdfbf7] border border-gray-200 focus:border-secondary focus:ring-1 focus:ring-secondary outline-none text-sm text-primary transition shadow-inner">
          <button type="submit"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-secondary">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
      </div>

      <div id="product-container" @click="handlePagination($event)"
        :class="{ 'opacity-50 pointer-events-none': isLoading }" class="transition-opacity duration-300 min-h-[400px]">

        @fragment('products-list')

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
            @forelse($products as $product)
              <div
                class="product-card group relative overflow-hidden rounded-2xl shadow-lg border border-[#e6e2d8] h-full"
                data-aos="fade-up">
                <a href="{{ route('product.show', $product->slug) }}" class="block h-full">
                  <div class="aspect-[3/4] w-full bg-gray-200 relative overflow-hidden">

                    <span
                      class="absolute top-3 left-3 z-20 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider shadow-sm">
                      {{ $product->category }}
                    </span>

                    @if ($product->picture)
                      <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}"
                        class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110">
                    @else
                      <div
                        class="w-full h-full flex items-center justify-center bg-gray-100 text-center group-hover:scale-110 transition-transform duration-500">
                        <i class="fa-solid fa-image text-gray-300 text-5xl"></i>
                      </div>
                    @endif

                    <div
                      class="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/20 to-transparent opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                      <div
                        class="transform translate-y-0 md:translate-y-4 md:group-hover:translate-y-0 transition-transform duration-300 w-full">
                        <h3 class="font-header text-2xl text-white italic leading-tight mb-1">
                          {{ $product->name }}
                        </h3>
                      </div>
                    </div>

                  </div>
                </a>
              </div>
            @empty
              <div class="col-span-full py-20 text-center" data-aos="fade-up">
                <div
                  class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                  <i class="fa-solid fa-box-open text-3xl"></i>
                </div>
                <h3 class="text-3xl font-header text-primary">{{ __('No Products Found') }}</h3>
                <p class="text-gray-500 mt-2">
                  @if (filled($search) || filled($category))
                    {{ __("We couldn't find any products matching your criteria.") }}
                  @else
                    {{ __('No products found at the moment. Please check back later.') }}
                  @endif
                </p>
                @if (request('search') || request('category'))
                  <button @click="activeCategory = null; search = ''; applyFilter()"
                    class="mt-6 inline-block text-secondary font-bold hover:underline cursor-pointer">
                    {{ __('Clear all filters') }}
                  </button>
                @endif
              </div>
            @endforelse
          </div>

          @if ($products->isNotEmpty())
            <div class="flex justify-center mt-16 pb-12" data-aos="fade-up">
              <nav class="flex items-center gap-2 p-2 bg-white/50 backdrop-blur-sm rounded-full">

                @if ($products->onFirstPage())
                  <span
                    class="w-10 h-10 flex items-center justify-center rounded-full text-gray-300 cursor-not-allowed transition-colors">
                    <i class="fa-solid fa-chevron-left text-sm"></i>
                  </span>
                @else
                  <a href="{{ $products->previousPageUrl() }}"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-gray-600 hover:bg-primary hover:text-white shadow-sm hover:shadow-md border border-gray-100 hover:border-primary transition-all duration-300 group">
                    <i class="fa-solid fa-chevron-left text-sm group-hover:-translate-x-0.5 transition-transform"></i>
                  </a>
                @endif

                <div class="hidden md:flex items-center gap-1.5 px-2">
                  @foreach ($products->getUrlRange(max(1, $products->currentPage() - 2), min($products->lastPage(), $products->currentPage() + 2)) as $page => $url)
                    @if ($page == $products->currentPage())
                      <span
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white font-bold shadow-lg shadow-primary/30 scale-110 transition-transform">
                        {{ $page }}
                      </span>
                    @else
                      <a href="{{ $url }}"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-gray-500 hover:text-primary hover:bg-gray-50 border border-transparent hover:border-gray-200 transition-all duration-300 font-medium">
                        {{ $page }}
                      </a>
                    @endif
                  @endforeach
                </div>

                <div class="md:hidden flex items-center px-4 font-medium text-gray-500 text-sm font-sans">
                  <span class="text-primary font-bold">{{ $products->currentPage() }}</span>
                  <span class="mx-1">/</span>
                  <span>{{ $products->lastPage() }}</span>
                </div>

                @if ($products->hasMorePages())
                  <a href="{{ $products->nextPageUrl() }}"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-gray-600 hover:bg-primary hover:text-white shadow-sm hover:shadow-md border border-gray-100 hover:border-primary transition-all duration-300 group">
                    <i class="fa-solid fa-chevron-right text-sm group-hover:translate-x-0.5 transition-transform"></i>
                  </a>
                @else
                  <span
                    class="w-10 h-10 flex items-center justify-center rounded-full text-gray-300 cursor-not-allowed transition-colors">
                    <i class="fa-solid fa-chevron-right text-sm"></i>
                  </span>
                @endif
              </nav>
            </div>
          @endif

        @endfragment

      </div>

    </div>
  </main>
</x-layouts>
