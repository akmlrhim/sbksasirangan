<x-layouts :title="$title">
  <main class="w-full bg-third min-h-screen relative overflow-hidden pt-36 pb-20 md:pt-44 md:pb-32"
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
                document.getElementById('fragment-container').innerHTML = html;
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
    
            let queryString = params.toString();
    
            const url = queryString ?
                `{{ route('insight') }}?${queryString}` :
                `{{ route('insight') }}`;
    
            this.fetchData(url);
        },
    
        handlePagination(e) {
            const link = e.target.closest('a');
            if (!link) return;
            if (link.classList.contains('read-more-link')) return;
    
            e.preventDefault();
            this.fetchData(link.href);
        }
    }">

    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-0 right-0 w-80 opacity-5 -rotate-12 transform translate-x-1/4 -translate-y-1/4"
        alt="Decor">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" id="scroll-target">

      <div class="text-center mb-12" data-aos="fade-down">
        <h1 class="font-header text-5xl md:text-6xl text-primary leading-tight">
          {{ __('Our') }} <span class="italic text-secondary">{{ __('Insights') }}</span>
        </h1>
        <p class="text-gray-500 mt-4 max-w-2xl mx-auto font-sans text-lg">
          {{ __('Discover the latest news and stories.') }}
        </p>
      </div>

      <div class="max-w-xl mx-auto mb-16" data-aos="fade-up">
        <form @submit.prevent="activeCategory = null; applyFilter()" class="relative group">
          <input type="text" x-model="search" placeholder="{{ __('Search articles...') }}"
            class="w-full pl-6 pr-16 py-4 rounded-full bg-white border border-[#e6e2d8] focus:border-secondary focus:ring-0 text-primary placeholder-gray-400 shadow-inner transition-all duration-300">
          <button type="submit"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-secondary">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
      </div>

      <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
        <button @click="activeCategory = null; search = ''; applyFilter()"
          :class="!activeCategory ? 'bg-primary text-white shadow-lg' :
              'bg-white text-gray-500 hover:text-primary border border-[#e6e2d8] shadow-sm'"
          class="px-6 py-2 rounded-full font-medium transition cursor-pointer">
          {{ __('All Posts') }}
        </button>

        @foreach ($categories as $cat)
          <button @click="activeCategory = '{{ $cat }}'; applyFilter()"
            :class="activeCategory === '{{ $cat }}' ? 'bg-primary text-white shadow-lg' :
                'bg-white text-gray-500 hover:text-primary border border-[#e6e2d8] shadow-sm'"
            class="px-6 py-2 rounded-full font-medium transition cursor-pointer">
            {{ ucfirst($cat) }}
          </button>
        @endforeach
      </div>

      <div id="fragment-container" @click="handlePagination($event)"
        :class="{ 'opacity-50 pointer-events-none': isLoading }" class="transition-opacity duration-300 min-h-[400px]">

        @fragment('posts-area')

          @if ($posts->count() > 0)
            @if ($posts->onFirstPage() && !request('search') && !request('category'))
              @php $featured = $posts->first(); @endphp
              <div class="mb-20" data-aos="fade-up">
                <div
                  class="group relative bg-white rounded-3xl overflow-hidden shadow-lg border border-[#e6e2d8] grid grid-cols-1 lg:grid-cols-2">
                  <div class="relative h-72 lg:h-auto overflow-hidden">
                    <div class="absolute top-6 left-6 z-10">
                      <span
                        class="bg-secondary text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-md">{{ __('Featured News') }}</span>
                    </div>
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center overflow-hidden">
                      {!! $featured->cover_image
                          ? '<img src="' . asset('storage/' . $featured->cover_image) . '" class="w-full h-full object-cover">'
                          : '<i class="fa-solid fa-image text-gray-400 text-3xl"></i>' !!}
                    </div>
                    <div class="absolute inset-0 bg-primary/10"></div>
                  </div>
                  <div class="p-8 lg:p-12 flex flex-col justify-center relative">
                    <div class="flex items-center gap-4 text-sm text-gray-400 mb-4 font-sans">
                      <span><i class="fa-regular fa-calendar mr-2"></i>
                        {{ $featured->created_at->translatedFormat('d M Y') }}</span>
                    </div>
                    <h2
                      class="font-header text-3xl md:text-4xl text-primary mb-6 leading-snug group-hover:text-secondary transition-colors duration-300">
                      {{ $featured->title }}
                    </h2>
                    <p class="text-gray-500 mb-8 leading-relaxed line-clamp-3">{{ strip_tags($featured->content) }}</p>
                    <a href="{{ route('post.show', $featured->slug) }}"
                      class="read-more-link inline-flex items-center text-primary font-bold tracking-wide border-b-2 border-secondary pb-1 hover:text-secondary transition-colors self-start group/link">
                      {{ __('Read Full Story') }} <i
                        class="fa-solid fa-arrow-right ml-2 transition-transform group-hover/link:translate-x-1"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
              @php
                $gridPosts =
                    $posts->onFirstPage() && !request('search') && !request('category') ? $posts->skip(1) : $posts;
              @endphp

              @foreach ($gridPosts as $post)
                <div
                  class="bg-white rounded-2xl overflow-hidden shadow-lg border border-[#e6e2d8] transition-all duration-300 group"
                  data-aos="fade-up">
                  <div class="relative h-60 overflow-hidden">
                    <div
                      class="relative w-full h-full overflow-hidden bg-gray-100 flex items-center justify-center group">
                      {!! $post->cover_image
                          ? '<img src="' .
                              asset('storage/' . $post->cover_image) .
                              '" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">'
                          : '<i class="fa-solid fa-image text-gray-400 text-4xl group-hover:scale-110 transition-transform duration-500"></i>' !!}
                    </div>
                  </div>
                  <div class="p-8">
                    <div class="flex items-center gap-2 text-xs text-gray-400 mb-3 font-sans">
                      <i class="fa-regular fa-calendar"></i> {{ $post->created_at->translatedFormat('d M Y') }}
                    </div>
                    <h3
                      class="font-header text-2xl text-primary mb-3 leading-tight group-hover:text-secondary transition-colors">
                      {{ $post->title }}
                    </h3>
                    <p class="text-gray-500 text-sm sm:text-md leading-relaxed mb-6 line-clamp-3">
                      {{ strip_tags($post->content) }}</p>
                    <a href="{{ route('post.show', $post->slug) }}"
                      class="read-more-link text-sm font-bold text-primary hover:text-secondary transition-colors flex items-center gap-2">
                      {{ __('Read More') }} <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                  </div>
                </div>
              @endforeach
            </div>

            {{-- pagination  --}}
            <div class="flex justify-center mt-16 pb-12" data-aos="fade-up">
              <nav class="flex items-center gap-2 p-2 bg-white/50 backdrop-blur-sm rounded-full">

                @if ($posts->onFirstPage())
                  <span
                    class="w-10 h-10 flex items-center justify-center rounded-full text-gray-300 cursor-not-allowed transition-colors">
                    <i class="fa-solid fa-chevron-left text-sm"></i>
                  </span>
                @else
                  <a href="{{ $posts->previousPageUrl() }}"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-gray-600 hover:bg-primary hover:text-white shadow-sm hover:shadow-md border border-gray-100 hover:border-primary transition-all duration-300 group">
                    <i class="fa-solid fa-chevron-left text-sm group-hover:-translate-x-0.5 transition-transform"></i>
                  </a>
                @endif

                <div class="hidden md:flex items-center gap-1.5 px-2">
                  @foreach ($posts->getUrlRange(max(1, $posts->currentPage() - 2), min($posts->lastPage(), $posts->currentPage() + 2)) as $page => $url)
                    @if ($page == $posts->currentPage())
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
                  <span class="text-primary font-bold">{{ $posts->currentPage() }}</span>
                  <span class="mx-1">/</span>
                  <span>{{ $posts->lastPage() }}</span>
                </div>

                @if ($posts->hasMorePages())
                  <a href="{{ $posts->nextPageUrl() }}"
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
          @else
            <div class="flex flex-col items-center justify-center py-24 text-center" data-aos="fade-up">
              <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mb-8">
                <i class="fa-regular fa-newspaper text-4xl text-gray-300"></i>
              </div>
              <h3 class="font-header text-3xl text-primary mb-2">{{ __('No Results Found') }}</h3>
              <p class="text-gray-500 max-w-md mx-auto mb-8 font-sans">
                {{ __('No articles found matching your criteria.') }}
              </p>
              <button @click="activeCategory = null; search = ''; applyFilter()"
                class="px-8 py-3 bg-primary text-white rounded-full font-bold shadow-lg hover:bg-secondary transition-all transform hover:-translate-y-1">
                {{ __('View All Posts') }}
              </button>
            </div>
          @endif

        @endfragment

      </div>

    </div>
  </main>
</x-layouts>
