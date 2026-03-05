<x-layouts :title="$title">
  <main class="w-full bg-third min-h-screen relative overflow-hidden pt-28 pb-16 sm:pt-36 sm:pb-20 md:pt-44 md:pb-32"
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
            const url = queryString ? `{{ route('insight') }}?${queryString}` : `{{ route('insight') }}`;
            this.fetchData(url);
        }
    }">

    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-0 right-0 w-64 sm:w-80 opacity-5 -rotate-12 transform translate-x-1/4 -translate-y-1/4"
        alt="Decor">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" id="scroll-target">

      <div class="text-center mb-8 sm:mb-12" data-aos="fade-down">
        <h1 class="font-header text-4xl sm:text-5xl md:text-6xl text-primary leading-tight">
          {{ __('Our') }} <span class="italic text-secondary">{{ __('Insights') }}</span>
        </h1>
        <p class="text-gray-500 mt-3 sm:mt-4 max-w-2xl mx-auto font-sans text-sm sm:text-base md:text-lg">
          {{ __('Discover the latest news and stories.') }}
        </p>
      </div>

      @if ($posts->count() > 0 || request('search') || request('category'))
        <div class="max-w-xl mx-auto mb-10 sm:mb-16" data-aos="fade-up">
          <form @submit.prevent="applyFilter()" class="relative group">
            <input type="text" x-model="search" placeholder="{{ __('Search articles...') }}"
              class="w-full pl-5 sm:pl-6 pr-12 sm:pr-16 py-3 sm:py-4 rounded-full bg-white border border-[#e6e2d8] focus:border-secondary focus:ring-0 text-sm sm:text-base text-primary placeholder-gray-400 shadow-inner transition-all duration-300">
            <button type="submit"
              class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-secondary text-sm sm:text-base">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </div>

        <div class="flex flex-wrap justify-center gap-2 sm:gap-4 mb-8 sm:mb-12" data-aos="fade-up">
          <button @click="activeCategory = ''; search = ''; applyFilter()"
            :class="!activeCategory ? 'bg-primary text-white shadow-lg' :
                'bg-white text-gray-500 hover:text-primary border border-[#e6e2d8] shadow-sm'"
            class="px-4 py-1.5 sm:px-6 sm:py-2 rounded-full text-xs sm:text-sm md:text-base font-medium transition cursor-pointer">
            {{ __('All Posts') }}
          </button>

          @foreach ($categories as $cat)
            <button @click="activeCategory = '{{ $cat }}'; applyFilter()"
              :class="activeCategory === '{{ $cat }}' ? 'bg-primary text-white shadow-lg' :
                  'bg-white text-gray-500 hover:text-primary border border-[#e6e2d8] shadow-sm'"
              class="px-4 py-1.5 sm:px-6 sm:py-2 rounded-full text-xs sm:text-sm md:text-base font-medium transition cursor-pointer">
              {{ ucfirst($cat) }}
            </button>
          @endforeach
        </div>
      @endif

      <div id="fragment-container"
        @click="if($event.target.closest('a') && !$event.target.closest('.read-more-link')) { $event.preventDefault(); fetchData($event.target.closest('a').href); }"
        :class="{ 'opacity-50 pointer-events-none': isLoading }" class="transition-opacity duration-300 min-h-[400px]">

        @fragment('posts-area')
          @if ($posts->count() > 0)
            @if ($posts->onFirstPage() && !request('search') && !request('category'))
              @php $featured = $posts->first(); @endphp
              <div class="mb-12 sm:mb-20" data-aos="fade-up">
                <div
                  class="group relative bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg border border-[#e6e2d8] grid grid-cols-1 lg:grid-cols-2">
                  <div class="relative h-60 sm:h-72 lg:h-auto overflow-hidden">
                    <div class="absolute top-4 left-4 sm:top-6 sm:left-6 z-10">
                      <span
                        class="bg-secondary text-white px-3 py-1 sm:px-4 sm:py-1.5 rounded-full text-[10px] sm:text-xs font-bold uppercase tracking-wider shadow-md">{{ __('Featured News') }}</span>
                    </div>
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center overflow-hidden">
                      {!! $featured->cover_image
                          ? '<img src="' . asset('storage/' . $featured->cover_image) . '" class="w-full h-full object-cover">'
                          : '<i class="fa-solid fa-image text-gray-400 text-3xl"></i>' !!}
                    </div>
                  </div>
                  <div class="p-6 sm:p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-2 sm:gap-4 text-xs sm:text-sm text-gray-400 mb-3 sm:mb-4 font-sans">
                      <span><i
                          class="fa-regular fa-calendar mr-1.5 sm:mr-2"></i>{{ $featured->created_at->translatedFormat('d M Y') }}</span>
                    </div>
                    <h2
                      class="font-header text-2xl sm:text-3xl md:text-4xl text-primary mb-4 sm:mb-6 leading-snug group-hover:text-secondary transition-colors duration-300">
                      {{ $featured->title }}
                    </h2>
                    <p class="text-gray-500 text-sm sm:text-base mb-6 sm:mb-8 leading-relaxed line-clamp-3">
                      {{ strip_tags($featured->content) }}</p>
                    <a href="{{ route('post.show', $featured->slug) }}"
                      class="read-more-link inline-flex items-center text-primary text-sm sm:text-base font-bold border-b-2 border-secondary pb-1 hover:text-secondary self-start group/link">
                      {{ __('Read Full Story') }} <i
                        class="fa-solid fa-arrow-right ml-2 text-xs sm:text-sm transition-transform group-hover/link:translate-x-1"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-16 sm:mb-20">
              @php
                $gridPosts =
                    $posts->onFirstPage() && !request('search') && !request('category') ? $posts->skip(1) : $posts;
              @endphp

              @foreach ($gridPosts as $post)
                <div
                  class="bg-white rounded-xl sm:rounded-2xl overflow-hidden shadow-lg border border-[#e6e2d8] transition-all duration-300 group"
                  data-aos="fade-up">
                  <div class="relative h-48 sm:h-60 overflow-hidden bg-gray-100 flex items-center justify-center">
                    {!! $post->cover_image
                        ? '<img src="' .
                            asset('storage/' . $post->cover_image) .
                            '" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">'
                        : '<i class="fa-solid fa-image text-gray-400 text-3xl sm:text-4xl"></i>' !!}
                  </div>
                  <div class="p-5 sm:p-8">
                    <div class="flex items-center gap-2 text-[10px] sm:text-xs text-gray-400 mb-2 sm:mb-3 font-sans">
                      <i class="fa-regular fa-calendar"></i> {{ $post->created_at->translatedFormat('d M Y') }}
                    </div>
                    <h3
                      class="font-header text-xl sm:text-2xl text-primary mb-2 sm:mb-3 leading-tight group-hover:text-secondary transition-colors">
                      {{ $post->title }}</h3>
                    <p class="text-gray-500 text-xs sm:text-sm leading-relaxed mb-4 sm:mb-6 line-clamp-3">
                      {{ strip_tags($post->content) }}
                    </p>
                    <a href="{{ route('post.show', $post->slug) }}"
                      class="read-more-link text-xs sm:text-sm font-bold text-primary hover:text-secondary flex items-center gap-1.5 sm:gap-2">
                      {{ __('Read More') }} <i class="fa-solid fa-chevron-right text-[10px] sm:text-xs"></i>
                    </a>
                  </div>
                </div>
              @endforeach
            </div>

            @if ($posts->hasPages())
              <div class="flex justify-center mt-12 sm:mt-16 pb-8 sm:pb-12">
                {{ $posts->links() }}
              </div>
            @endif
          @else
            <div class="flex flex-col items-center justify-center py-16 sm:py-24 text-center" data-aos="fade-up">
              <div
                class="w-16 h-16 sm:w-20 sm:h-20 bg-gray-100 rounded-full flex items-center justify-center mb-6 sm:mb-8">
                <i
                  class="fa-regular fa-{{ request('search') || request('category') ? 'magnifying-glass' : 'newspaper' }} text-3xl sm:text-4xl text-gray-300"></i>
              </div>

              @if (request('search') || request('category'))
                <h3 class="font-header text-2xl sm:text-3xl text-primary mb-2">{{ __('No Results Found') }}</h3>
                <p class="text-gray-500 text-sm sm:text-base max-w-md mx-auto mb-6 sm:mb-8 font-sans px-4">
                  {{ __('We couldn\'t find any articles matching "') }}<span
                    class="font-bold text-primary">{{ request('search') ?? request('category') }}</span>".
                </p>
                <button @click="activeCategory = ''; search = ''; applyFilter()"
                  class="text-secondary text-sm sm:text-base font-bold underline cursor-pointer">
                  {{ __('Clear all filters') }}
                </button>
              @else
                <h3 class="font-header text-2xl sm:text-3xl text-primary mb-2">{{ __('No Articles Yet') }}</h3>
                <p class="text-gray-500 text-sm sm:text-base max-w-md mx-auto mb-6 sm:mb-8 font-sans px-4">
                  {{ __('We are currently working on fresh content. Stay tuned!') }}
                </p>
              @endif
            </div>
          @endif
        @endfragment
      </div>
    </div>
  </main>
</x-layouts>
