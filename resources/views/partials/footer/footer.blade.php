<footer id="kontak" class="relative bg-[#1A381F] text-emerald-50 overflow-hidden pt-16 pb-12 mt-16">
  <div class="absolute top-0 left-0 right-0 overflow-hidden leading-none -translate-y-[99%] pointer-events-none">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-12 text-[#1A381F] fill-current">
      <path d="M0,0 C200,80 400,-20 600,60 C800,140 1000,20 1200,80 L1200,120 L0,120 Z"></path>
    </svg>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-emerald-800/40">
      
      <div class="md:col-span-5 space-y-4">
        <div class="flex items-center gap-3">
          <img src="{{ asset('assets/naturae-logo.webp') }}?v={{ file_exists(public_path('assets/naturae-logo.webp')) ? filemtime(public_path('assets/naturae-logo.webp')) : time() }}" alt="Naturae Logo" class="w-10 h-10 object-contain shadow select-none">
          <div>
            <span class="font-header text-2xl tracking-normal text-white block leading-none">Naturae</span>
            <span class="text-[10px] tracking-widest text-emerald-300 uppercase font-bold mt-1 block">Cold Press Juice</span>
          </div>
        </div>
        <p class="text-xs sm:text-sm text-emerald-200/80 leading-relaxed max-w-sm">
          Freshly Pressed, Simply Enjoyed. 100% cold-pressed juice buah & sayur murni tanpa pemanasan, tanpa air tambahan, dan tanpa pengawet.
        </p> 
      </div>
      
      <div class="md:col-span-3 space-y-3">
        <h4 class="font-display text-sm uppercase tracking-wider text-emerald-200 font-bold">Navigasi Halaman</h4>
        <ul class="space-y-2 text-xs sm:text-sm text-emerald-200/70">
          <li><a href="{{ url('/') }}" class="hover:text-white transition-colors">Beranda</a></li>
          <li><a href="{{ url('products') }}" class="hover:text-white transition-colors">Products</a></li>
          <li><a href="{{ url('/Blog') }}" class="hover:text-white transition-colors">Blog</a></li>
          <li><a href="{{ url('/Story') }}" class="hover:text-white transition-colors">Our Story</a></li>
          <li><a href="{{ url('/about_us') }}" class="hover:text-white transition-colors">About Us</a></li>
          <li><a href="{{ url('/GetInTouch') }}" class="hover:text-white transition-colors">Get In Touch</a></li>
        </ul>
      </div>

      <div class="md:col-span-3 space-y-3">
        <h4 class="font-display text-sm uppercase tracking-wider text-emerald-200 font-bold">Kontak Resmi</h4>
        <div class="space-y-3">
          <a href="https://wa.me/6287730720433" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-3 rounded-2xl bg-emerald-900/40 hover:bg-emerald-900/70 border border-emerald-800/40 transition-colors">
            <div>
              <span class="text-[10px] text-emerald-300/80 block uppercase tracking-wider font-semibold">WhatsApp Order</span>
              <span class="text-sm font-bold text-white tracking-wide">+62 877-3072-0433</span>
            </div>
          </a>

            <a href="https://instagram.com/naturae_coldpress" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-3 rounded-2xl bg-emerald-900/40 hover:bg-emerald-900/70 border border-emerald-800/40 transition-colors">
            <div>
              <span class="text-[10px] text-emerald-300/80 block uppercase tracking-wider font-semibold">Instagram Official</span>
              <span class="text-sm font-bold text-white tracking-wide">@naturae_coldpress</span>
            </div>
          </a>
        </div>
      </div>

    </div>

    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-emerald-200/60">
      <p>© 2026 Naturae. All rights reserved.</p>
      <div class="flex items-center gap-4 text-emerald-100 font-semibold">
        <a href="https://wa.me/6287730720433" target="_blank" class="hover:text-white transition-colors">+62 877-3072-0433</a>
        <span class="opacity-40">|</span>
        <a href="https://instagram.com/naturae_coldpress" target="_blank" class="hover:text-white transition-colors">@naturae_coldpress</a>
      </div>
    </div>
  </div>
</footer>

