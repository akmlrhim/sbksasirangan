<x-layouts>
  <main class="w-full overflow-hidden bg-third relative pt-36 pb-20 md:pt-42 md:pb-32">

    <div class="absolute inset-0 pointer-events-none">
      <img src="{{ asset('img/element.png') }}" class="absolute top-0 right-0 w-64 opacity-5 rotate-12" alt="">
      <img src="{{ asset('img/element.png') }}" class="absolute bottom-0 left-0 w-64 opacity-5 -rotate-12" alt="">
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

      <div class="text-center mb-12" data-aos="fade-down">
        <span class="text-secondary font-bold tracking-[0.2em] uppercase text-sm mb-2 block">Get In Touch</span>
        <h1 class="font-header text-4xl md:text-5xl text-primary leading-tight">
          Contact <span class="italic text-secondary">Us</span>
        </h1>
      </div>

      <div
        class="bg-white rounded-3xl shadow-lg overflow-hidden flex flex-col md:flex-row border border-[#e6e2d8] mb-12"
        data-aos="fade-up">

        <div
          class="w-full md:w-5/12 bg-primary text-white p-10 md:p-14 relative overflow-hidden flex flex-col justify-between">

          <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-white/5 rounded-full blur-2xl pointer-events-none">
          </div>

          <div>
            <h3 class="font-header text-3xl mb-8">Information</h3>

            <div class="space-y-8">
              <div class="flex items-start gap-4 group">
                <div
                  class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0 text-secondary group-hover:bg-secondary group-hover:text-white transition-colors duration-300">
                  <i class="fa-solid fa-envelope text-xl"></i>
                </div>
                <div>
                  <p class="text-xs text-gray-400 uppercase tracking-wider font-semibold mb-1">Email</p>
                  <a href="mailto:admin@sasiranganbanjar.com"
                    class="text-md font-medium hover:text-secondary transition break-all">
                    admin@sasiranganbanjar.com
                  </a>
                </div>
              </div>

              <div class="flex items-start gap-4 group">
                <div
                  class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0 text-secondary group-hover:bg-secondary group-hover:text-white transition-colors duration-300">
                  <i class="fa-solid fa-location-dot text-xl"></i>
                </div>
                <div>
                  <p class="text-xs text-gray-400 uppercase tracking-wider font-semibold mb-1">Address</p>
                  <p class="text-md leading-snug text-gray-200">
                    Jl. Sukarelawan Gg. Al-Manar No.2, Guntung Payung, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan
                    Selatan 70712
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-12">
            <p class="text-md text-white uppercase tracking-wider font-bold mb-6">Follow Our Socials</p>
            <div class="space-y-4">

              <a href="#"
                class="flex items-center gap-4 group p-3 rounded-xl hover:bg-white/10 transition-all duration-300">
                <div
                  class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                  <i class="fa-brands fa-instagram text-lg"></i>
                </div>
                <span class="text-md font-medium group-hover:text-secondary transition-colors">Instagram</span>
              </a>

              <a href="#"
                class="flex items-center gap-4 group p-3 rounded-xl hover:bg-white/10 transition-all duration-300">
                <div
                  class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                  <i class="fa-brands fa-youtube text-lg"></i>
                </div>
                <span class="text-md font-medium group-hover:text-secondary transition-colors">Youtube</span>
              </a>

              <a href="#"
                class="flex items-center gap-4 group p-3 rounded-xl hover:bg-white/10 transition-all duration-300">
                <div
                  class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                  <i class="fa-brands fa-whatsapp text-lg"></i>
                </div>
                <span class="text-md font-medium group-hover:text-secondary transition-colors">Whatsapp</span>
              </a>

            </div>
          </div>
        </div>

        <div class="w-full md:w-7/12 bg-white p-10 md:p-14">
          <div class="mb-8">
            <h3 class="font-header text-3xl text-primary">Have a Question?</h3>
            <p class="text-gray-500 mt-2">Drop us a line and we’ll get back to you shortly.</p>
          </div>

          <form action="#" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="group relative">
                <input type="text" id="name" placeholder=" "
                  class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary peer border" />
                <label for="name"
                  class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Your
                  Name</label>
              </div>
              <div class="group relative">
                <input type="email" id="email" placeholder=" "
                  class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary peer border" />
                <label for="email"
                  class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email
                  Address</label>
              </div>
            </div>

            <div class="group relative">
              <textarea id="message" rows="4" placeholder=" "
                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary peer border resize-none"></textarea>
              <label for="message"
                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-8 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Message</label>
            </div>

            <div class="pt-2">
              <button type="submit"
                class="w-full md:w-auto px-8 py-3 bg-[#d94826] hover:bg-[#c03c1e] text-white font-bold rounded-lg shadow-lg transition-all duration-300 flex items-center justify-center gap-2 transform hover:-translate-y-1">
                Send Message <i class="fa-solid fa-paper-plane text-sm"></i>
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="w-full bg-white p-4 rounded-2xl shadow-xl border border-[#e6e2d8]" data-aos="fade-up"
        data-aos-delay="100">
        <div class="w-full h-[400px] rounded-xl overflow-hidden relative group">

          <iframe loading="lazy"
            src="https://maps.google.com/maps?q=sbksasirangan&#038;t=m&#038;z=17&#038;output=embed&#038;iwloc=near"
            title="sbksasirangan" width="100%" height="100%" aria-label="sbksasirangan"></iframe>
        </div>
      </div>

    </div>
  </main>
</x-layouts>
