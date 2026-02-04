<x-layouts>
  <main class="w-full bg-third min-h-screen relative overflow-hidden pt-36 pb-20 md:pt-42 md:pb-32">
    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-0 left-0 w-64 opacity-5 rotate-45 transform -translate-x-1/2 -translate-y-1/2" alt="Decor">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center mb-16" data-aos="fade-down">
        <h1 class="font-header text-5xl md:text-6xl text-primary leading-tight">
          Our <span class="italic text-secondary">Insights</span>
        </h1>
        <p class="text-gray-500 mt-4 max-w-2xl mx-auto font-sans text-lg">
          Discover the latest news and stories.
        </p>
      </div>

      @if ($posts->count() > 0)
        @if ($posts->onFirstPage())
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
                <img src="{{ asset('storage/' . $featured->picture) }}" alt="{{ $featured->title }}"
                  class="w-full h-full object-cover">
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
                  {{ $featured->excerpt }}
                </p>
                <a href="{{ route('posts.show', $featured->slug) }}"
                  class="inline-flex items-center text-primary font-bold tracking-wide border-b-2 border-secondary pb-1 hover:text-secondary transition-colors self-start group/link">
                  Read Full Story
                  <i
                    class="fa-solid fa-arrow-right ml-2 transform transition-transform group-hover/link:translate-x-1"></i>
                </a>
              </div>
            </div>
          </div>
        @endif

        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
          <button class="px-6 py-2 rounded-full bg-primary text-white font-medium shadow-lg">All Posts</button>
          <button
            class="px-6 py-2 rounded-full bg-white text-gray-500 hover:text-primary font-medium shadow-sm transition border border-transparent hover:border-gray-200">News</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
          @php
            $gridPosts = $posts->onFirstPage() ? $posts->skip(1) : $posts;
          @endphp

          @foreach ($gridPosts as $post)
            <div
              class="bg-white rounded-2xl overflow-hidden shadow-lg border border-[#e6e2d8] transition-all duration-300 group"
              data-aos="fade-up">
              <div class="relative h-60 overflow-hidden">
                <img src="{{ asset('storage/' . $post->picture) }}" alt="{{ $post->title }}"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
              </div>
              <div class="p-8">
                <h3
                  class="font-header text-2xl text-primary mb-3 leading-tight group-hover:text-secondary transition-colors">
                  {{ $post->title }}
                </h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3">
                  {{ $post->excerpt }}
                </p>
                <a href="{{ route('posts.show', $post->slug) }}"
                  class="text-sm font-bold text-primary hover:text-secondary transition-colors flex items-center gap-2">
                  Read More <i class="fa-solid fa-chevron-right text-xs"></i>
                </a>
              </div>
            </div>
          @endforeach
        </div>

        <div class="flex justify-center mt-12">
          {{ $posts->links() }}
        </div>
      @else
        <div class="flex flex-col items-center justify-center py-24 text-center" data-aos="fade-up">
          <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mb-8">
            <i class="fa-regular fa-newspaper text-4xl text-gray-300"></i>
          </div>
          <h3 class="font-header text-3xl text-primary mb-2">No Insights Found</h3>
          <p class="text-gray-500 max-w-md mx-auto mb-8 font-sans">
            We haven't published any stories yet. Please check back later for more updates about Sasirangan culture.
          </p>
          <a href="/"
            class="px-8 py-3 bg-primary text-white rounded-full font-bold shadow-lg hover:bg-secondary transition-all transform hover:-translate-y-1">
            Back to Home
          </a>
        </div>
      @endif
    </div>
  </main>
</x-layouts>
