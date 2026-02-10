<x-layouts :title="$title">
  <main class="w-full bg-third min-h-screen relative overflow-hidden pt-36 pb-20 md:pt-42 md:pb-32">
    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}"
        class="absolute top-0 right-0 w-80 opacity-5 -rotate-12 transform translate-x-1/4 -translate-y-1/4"
        alt="Decor">
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="mb-12" data-aos="fade-down">
        <a href="{{ route('insight') }}"
          class="inline-flex items-center text-sm font-bold text-gray-400 hover:text-secondary transition-colors mb-8 group">
          <i class="fa-solid fa-arrow-left-long mr-2 transform group-hover:-translate-x-2 transition-transform"></i>
          {{ __('Back to Insights') }}
        </a>

        <div class="flex items-center gap-3 mb-6">
          <span class="bg-secondary/10 text-secondary px-4 py-1.5 rounded-full text-sm font-bold capitalize">
            {{ $post->category }}
          </span>
          <span class="h-1 w-1 bg-gray-300 rounded-full"></span>
          <span class="text-gray-400 text-sm font-medium">
            {{-- Perbaikan: Gunakan translatedFormat agar nama bulan berubah (May -> Mei) --}}
            <i class="fa-regular fa-clock mr-1"></i> {{ $post->created_at->translatedFormat('d M Y') }}
          </span>
        </div>

        <h1 class="font-header text-2xl md:text-3xl text-primary leading-tight mb-2">
          {{ $post->title }}
        </h1>

      </div>

      <div class="mb-16 rounded-[2rem] overflow-hidden shadow-md border border-[#e6e2d8] relative group"
        data-aos="zoom-in">
        <div class="aspect-[16/9] w-full bg-gray-200 flex items-center justify-center overflow-hidden">
          {!! $post->cover_image
              ? '<img src="' .
                  asset('storage/' . $post->cover_image) .
                  '" alt="' .
                  $post->title .
                  '" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">'
              : '<i class="fa-solid fa-image text-gray-300 text-7xl"></i>' !!}
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        <article
          class="lg:col-span-12 prose prose-sm md:prose-base max-w-none font-sans text-gray-600 leading-snug
                prose-headings:font-header prose-headings:text-primary prose-headings:mb-2 prose-h2:mt-6 prose-h2:mb-2 prose-h3:mt-4
                prose-p:mb-2 prose-p:mt-0 prose-p:leading-snug
                prose-img:rounded-2xl prose-img:shadow-lg prose-img:my-4 prose-img:mx-auto
                prose-blockquote:border-l-secondary prose-blockquote:bg-white/50 prose-blockquote:py-1 prose-blockquote:px-4 prose-blockquote:rounded-r-xl prose-blockquote:italic prose-blockquote:text-gray-500 prose-blockquote:my-4
                prose-ul:list-disc prose-ul:my-2 prose-li:my-0
                prose-ol:list-decimal prose-ol:my-2
                prose-strong:text-primary prose-strong:font-bold
                prose-a:text-secondary prose-a:no-underline hover:prose-a:underline transition-all"
          data-aos="fade-up">
          {!! $post->content !!}
        </article>
      </div>

      <div
        class="mt-20 pt-10 border-t border-[#e6e2d8] flex flex-col md:flex-row justify-between items-start md:items-center gap-8"
        data-aos="fade-up">
        <div class="flex flex-col gap-2">
          <span class="text-xs font-bold text-primary uppercase tracking-[0.2em]">{{ __('Article Source') }}</span>
          <a href="{{ $post->source }}" target="_blank"
            class="flex items-center gap-2 text-sm text-gray-500 hover:text-secondary transition-colors group">
            <i
              class="fa-solid fa-arrow-up-right-from-square text-xs transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5"></i>
            <span class="italic break-all line-clamp-1 max-w-[280px] md:max-w-md">{{ $post->source }}</span>
          </a>
        </div>

        <div class="flex flex-col md:items-end gap-3">
          <span class="text-xs font-bold text-primary uppercase tracking-[0.2em]">{{ __('Share this Insight') }}</span>
          <div class="flex gap-3">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
              target="_blank"
              class="w-11 h-11 rounded-full bg-white border border-[#e6e2d8] text-primary hover:bg-primary hover:text-white transition-all flex items-center justify-center shadow-sm hover:-translate-y-1.5 active:scale-95">
              <i class="fa-brands fa-facebook-f text-sm"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}"
              target="_blank"
              class="w-11 h-11 rounded-full bg-white border border-[#e6e2d8] text-primary hover:bg-primary hover:text-white transition-all flex items-center justify-center shadow-sm hover:-translate-y-1.5 active:scale-95">
              <i class="fa-brands fa-x-twitter text-sm"></i>
            </a>
            <a href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' ' . request()->fullUrl()) }}"
              target="_blank"
              class="w-11 h-11 rounded-full bg-white border border-[#e6e2d8] text-primary hover:bg-primary hover:text-white transition-all flex items-center justify-center shadow-sm hover:-translate-y-1.5 active:scale-95">
              <i class="fa-brands fa-whatsapp text-sm"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </main>
</x-layouts>
