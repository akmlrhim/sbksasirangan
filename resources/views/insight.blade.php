<x-layouts>
  <main class="w-full bg-third min-h-screen relative overflow-hidden pt-36 pb-20 md:pt-42 md:pb-32">

    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-0 right-0 w-80 opacity-5 -rotate-12 transform translate-x-1/4 -translate-y-1/4"
        alt="Decor">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center mb-12" data-aos="fade-down">
        <h1 class="font-header text-5xl md:text-6xl text-primary leading-tight">
          Our <span class="italic text-secondary">Insights</span>
        </h1>
        <p class="text-gray-500 mt-4 max-w-2xl mx-auto font-sans text-lg">
          Discover the latest news and stories.
        </p>
      </div>

      <div class="max-w-xl mx-auto mb-16" data-aos="fade-up">
        <form action="{{ route('insight') }}" method="GET" class="relative group">
          <input type="text" name="search" value="{{ request('search') }}" placeholder="Search articles..."
            class="w-full pl-6 pr-16 py-4 rounded-full bg-white border border-[#e6e2d8] focus:border-secondary focus:ring-0 text-primary placeholder-gray-400 shadow-inner transition-all duration-300">
        </form>
        @if (request('search'))
          <p class="text-center mt-4 text-sm text-gray-400 font-sans">
            Showing results for: <span class="text-secondary font-bold">"{{ request('search') }}"</span>
            <a href="{{ route('insight') }}" class="ml-2 text-primary hover:underline italic">Clear search</a>
          </p>
        @endif
      </div>

      @if ($posts->count() > 0)
        @if ($posts->onFirstPage() && !request('search'))
          @php $featured = $posts->first(); @endphp
          <div class="mb-20" data-aos="fade-up">
            <div
              class="group relative bg-white rounded-3xl overflow-hidden shadow-lg border border-[#e6e2d8] grid grid-cols-1 lg:grid-cols-2">
              <div class="relative h-72 lg:h-auto overflow-hidden">
                <div class="absolute top-6 left-6 z-10">
                  <span
                    class="bg-secondary text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-md">
                    Featured News
                  </span>
                </div>
                <div class="w-full h-full bg-gray-200 flex items-center justify-center overflow-hidden">
                  {!! $featured->cover_image
                      ? '<img src="' .
                          asset('storage/' . $featured->cover_image) .
                          '" alt="' .
                          $featured->title .
                          '" class="w-full h-full object-cover">'
                      : '<i class="fa-solid fa-image text-gray-400 text-3xl"></i>' !!}
                </div>
                <div class="absolute inset-0 bg-primary/10"></div>
              </div>
              <div class="p-8 lg:p-12 flex flex-col justify-center relative">
                <div class="flex items-center gap-4 text-sm text-gray-400 mb-4 font-sans">
                  <span><i class="fa-regular fa-calendar mr-2"></i> {{ $featured->created_at->format('M d, Y') }}</span>
                </div>
                <h2
                  class="font-header text-3xl md:text-4xl text-primary mb-6 leading-snug group-hover:text-secondary transition-colors duration-300">
                  {{ $featured->title }}
                </h2>
                <p class="text-gray-500 mb-8 leading-relaxed line-clamp-3">
                  {{ $featured->content }}
                </p>
                <a href="{{ route('post.show', $featured->slug) }}"
                  class="inline-flex items-center text-primary font-bold tracking-wide border-b-2 border-secondary pb-1 hover:text-secondary transition-colors self-start group/link">
                  Read Full Story
                  <i
                    class="fa-solid fa-arrow-right ml-2 transform transition-transform group-hover/link:translate-x-1"></i>
                </a>
              </div>
            </div>
          </div>
        @endif

        {{-- Kategori Filtering  --}}
        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
          <a href="{{ route('insight', ['search' => request('search')]) }}"
            class="px-6 py-2 rounded-full font-medium transition {{ !request('category') ? 'bg-primary text-white shadow-lg' : 'bg-white text-gray-500 hover:text-primary border border-[#e6e2d8] shadow-sm' }}">
            All Posts
          </a>

          @foreach ($categories as $cat)
            <a href="{{ route('insight', ['category' => $cat, 'search' => request('search')]) }}"
              class="px-6 py-2 rounded-full font-medium transition {{ request('category') == $cat ? 'bg-primary text-white shadow-lg' : 'bg-white text-gray-500 hover:text-primary border border-[#e6e2d8] shadow-sm' }}">
              {{ ucfirst($cat) }}
            </a>
          @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
          @php
            $gridPosts = $posts->onFirstPage() && !request('search') ? $posts->skip(1) : $posts;
          @endphp

          @foreach ($gridPosts as $post)
            <div
              class="bg-white rounded-2xl overflow-hidden shadow-lg border border-[#e6e2d8] transition-all duration-300 group"
              data-aos="fade-up">
              <div class="relative h-60 overflow-hidden">
                <div class="relative w-full h-full overflow-hidden bg-gray-100 flex items-center justify-center group">
                  {!! $post->cover_image
                      ? '<img src="' .
                          asset('storage/' . $post->cover_image) .
                          '" alt="' .
                          $post->title .
                          '" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">'
                      : '<i class="fa-solid fa-image text-gray-400 text-4xl group-hover:scale-110 transition-transform duration-500"></i>' !!}
                </div>
              </div>
              <div class="p-8">
                <h3
                  class="font-header text-2xl text-primary mb-3 leading-tight group-hover:text-secondary transition-colors">
                  {{ $post->title }}
                </h3>
                <p class="text-gray-500 text-sm sm:text-md leading-relaxed mb-6 line-clamp-3">
                  {{ strip_tags($post->content) }}
                </p>
                <a href="{{ route('post.show', $post->slug) }}"
                  class="text-sm font-bold text-primary hover:text-secondary transition-colors flex items-center gap-2">
                  Read More <i class="fa-solid fa-chevron-right text-xs"></i>
                </a>
              </div>
            </div>
          @endforeach
        </div>

        <div class="flex justify-center mt-12 pb-10" data-aos="fade-up">
          <nav class="flex items-center gap-2">
            @if ($posts->onFirstPage())
              <span
                class="w-12 h-12 flex items-center justify-center rounded-full border border-gray-100 text-gray-300 cursor-not-allowed">
                <i class="fa-solid fa-chevron-left"></i>
              </span>
            @else
              <a href="{{ $posts->previousPageUrl() }}"
                class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-[#e6e2d8] text-primary hover:bg-primary hover:text-white hover:border-primary shadow-sm transition-all duration-300">
                <i class="fa-solid fa-chevron-left"></i>
              </a>
            @endif

            <div class="flex items-center gap-2 px-2">
              @foreach ($posts->getUrlRange(max(1, $posts->currentPage() - 2), min($posts->lastPage(), $posts->currentPage() + 2)) as $page => $url)
                @if ($page == $posts->currentPage())
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

            @if ($posts->hasMorePages())
              <a href="{{ $posts->nextPageUrl() }}"
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
      @else
        <div class="flex flex-col items-center justify-center py-24 text-center" data-aos="fade-up">
          <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mb-8">
            <i class="fa-regular fa-newspaper text-4xl text-gray-300"></i>
          </div>
          <h3 class="font-header text-3xl text-primary mb-2">No Results Found</h3>
          <p class="text-gray-500 max-w-md mx-auto mb-8 font-sans">
            We couldn't find any articles matching your search criteria. Try using different keywords.
          </p>
          <a href="{{ route('insight') }}"
            class="px-8 py-3 bg-primary text-white rounded-full font-bold shadow-lg hover:bg-secondary transition-all transform hover:-translate-y-1">
            View All Posts
          </a>
        </div>
      @endif
    </div>
  </main>
</x-layouts>
