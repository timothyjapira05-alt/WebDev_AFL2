@extends('Template.layout')

@section('content')

  <!-- HERO -->
  <section id="hero" class="relative pt-6 pb-18 md:pt-12 md:pb-28 overflow-hidden bg-naturae-bg">
    <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-amber-100/40 rounded-full blur-3xl -z-10 pointer-events-none"></div>
    <div class="absolute top-40 right-10 w-[300px] h-[300px] bg-red-100/40 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8">
        
        <!-- Tulisan Inti -->
        <div class="flex-1 text-center lg:text-left z-20 max-w-2xl">

          <h1 class="font-header text-5xl sm:text-6xl md:text-7xl lg:text-8xl tracking-tight text-naturae-darkgreen leading-[0.95] uppercase mb-4 drop-shadow-sm select-none">
            COLD<br>
            PRESS<br>
            JUICE
          </h1>

          <p class="font-subheader text-2xl sm:text-3xl text-naturae-darkgreen/90 tracking-normal mb-4">
            Freshly Pressed, Simply Enjoyed.
          </p>

          <p class="text-base sm:text-lg text-emerald-950/75 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
            Sari murni buah & sayur segar pilihan tanpa pemanasan, tanpa air tambahan, dan tanpa bahan pengawet. Nutrisi alami terjaga maksimal untuk gaya hidup aktifmu.
          </p>

          <!-- Tombol 1 -->
          <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 mb-10">
            <a href="{{ route('products') }}" class="px-7 py-4 rounded-full bg-naturae-darkgreen hover:bg-naturae-darkgreen-light active:scale-95 text-white font-extrabold text-base tracking-wide shadow-lg hover:shadow-xl transition-all duration-200 flex items-center gap-2">
              <span>Lihat Semua Produk</span>
              <span>→</span>
            </a>

            <a href="https://wa.me/6287730720433?text=Halo%20Naturae%20Cold%20Press!%20Saya%20tertarik%20dengan%20produk%20juice%20segar%20Anda" target="_blank" rel="noopener noreferrer" class="px-6 py-4 rounded-full bg-white hover:bg-naturae-cream border-2 border-emerald-900/15 text-naturae-darkgreen font-bold text-base transition-all duration-200 shadow-sm flex items-center gap-2">
              <span>Hubungi Kami via WA</span>
              <span>↗</span>
            </a>
          </div>
        </div>

        <!-- Right: 3 Hero Bottles + ALL ITEM 20K Badge -->
        <div class="flex-1 relative w-full flex items-center justify-center py-6 min-h-[460px]">

                    <!-- Product Photos -->
          <div class="relative flex items-end justify-center gap-0 w-full max-w-[420px] sm:max-w-[520px] md:max-w-[600px] mx-auto z-10 pt-8 pb-4">

            <!-- Produk 1: Tropical Splash + badge -->
            <div class="relative z-20 flex-1 min-w-0 transform -rotate-3 hover:rotate-0 hover:scale-105 transition-all duration-300">

              <!-- ALL ITEM 20K -->
              <div class="absolute top-[13%] left-[20%] -translate-x-1/2 -translate-y-1/2 z-30">
                <div class="animate-pulse-subtle">
                  <div class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full border-4 border-naturae-red bg-white/95 shadow-xl flex flex-col items-center justify-center transform -rotate-12 hover:rotate-0 transition-transform">
                    <span class="text-[10px] sm:text-xs font-black tracking-wider text-naturae-red uppercase">ALL ITEM</span>
                    <span class="text-2xl sm:text-3xl font-display text-naturae-red font-black leading-none">20k</span>
                    <span class="text-[9px] text-gray-500 font-bold -mt-0.5">300 ml</span>
                  </div>
                </div>
              </div>

              <img src="{{ asset('assets/tropical-splash-home.webp') }}"
                   alt="Naturae Tropical Splash - Watermelon, Pineapple, Lemon"
                   draggable="false"
                   class="w-full aspect-[4/9] object-cover mix-blend-multiply select-none">
            </div>

            <!-- Produk 2: Fresh Immunity -->
            <div class="flex-1 min-w-0 -ml-6 sm:-ml-8 md:-ml-10 transform -translate-y-4 hover:-translate-y-6 hover:scale-105 transition-all duration-300 z-10">
              <img src="{{ asset('assets/fresh-immunity-home.webp') }}"
                   alt="Naturae Fresh Immunity - Pineapple, Apple, Carrot"
                   draggable="false"
                   class="w-full aspect-[4/9] object-cover mix-blend-multiply select-none">
            </div>

            <!-- Produk 3: Green Vitality -->
            <div class="flex-1 min-w-0 -ml-6 sm:-ml-8 md:-ml-10 transform rotate-3 hover:rotate-0 hover:scale-105 transition-all duration-300">
              <img src="{{ asset('assets/green-vitality-home.webp') }}"
                   alt="Naturae Green Vitality - Pineapple, Apple, Pakcoy"
                   draggable="false"
                   class="w-full aspect-[4/9] object-cover mix-blend-multiply select-none">
            </div>

          </div>
      </div>
    </div>
  </section>

  <!-- KENAPA COLD PRESS? -->
  <section id="manfaat" class="py-16 md:py-24 bg-naturae-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-14">
        <h2 class="font-header text-3xl sm:text-4xl md:text-5xl text-naturae-darkgreen uppercase tracking-tight mt-3 mb-4">
          Kenapa Memilih Cold Press?
        </h2>
        <p class="text-emerald-950/75 text-sm sm:text-base leading-relaxed">
          Metode terbaik mengekstraksi buah dan sayur segar agar kandungan nutrisi, rasa, dan warna aslinya tetap hidup seperti saat dipetik.
        </p>
      </div>

      <!-- 4 Poin Keunggulan -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-soft">
          <h3 class="font-subheader text-lg text-naturae-darkgreen mb-2">Teknologi Cold Pressed</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Diekstrak menggunakan tekanan hidrolik perlahan tanpa pisau berputar yang menghasilkan panas perusak enzim.</p>
        </div>

        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-soft">
          <h3 class="font-subheader text-lg text-naturae-darkgreen mb-2">100% Sari Murni</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Murni tanpa tambahan air, tanpa sirup pemanis, dan tanpa pewarna. Rasa manis murni dari buah matang pilihan.</p>
        </div>

        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-soft">
          <h3 class="font-subheader text-lg text-naturae-darkgreen mb-2">Nutrisi & Enzim Utuh</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Kandungan vitamin A, C, K, folat, dan antioksidan alami terserap lebih optimal oleh tubuh tanpa oksidasi cepat.</p>
        </div>

        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-soft">
          <h3 class="font-subheader text-lg text-naturae-darkgreen mb-2">Segar Setiap Hari</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Dibuat dalam batch segar harian untuk menjamin kualitas terbaik sampai ke tangan Anda.</p>
        </div>
      </div>

      <!-- Perbandingan Blender vs Cold Press -->
      <div class="bg-white rounded-3xl p-6 sm:p-8 border border-emerald-950/10 shadow-soft max-w-4xl mx-auto">
        <h4 class="font-subheader text-xl text-naturae-darkgreen text-center mb-6">
          Perbandingan Singkat: Jus Blender Biasa vs Naturae Cold-Pressed
        </h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="p-4 rounded-2xl bg-red-50/70 border border-red-100">
            <p class="font-bold text-xs uppercase tracking-wider text-red-700 mb-2">✕ Jus Blender Biasa</p>
            <ul class="text-xs text-gray-700 space-y-2">
              <li>• Pisau putar menimbulkan panas yang merusak vitamin</li>
              <li>• Sering ditambahi air dan gula pasir berlebih</li>
              <li>• Banyak busa dan cepat teroksidasi / berubah warna</li>
            </ul>
          </div>

          <div class="p-4 rounded-2xl bg-emerald-50/70 border border-emerald-100">
            <p class="font-bold text-xs uppercase tracking-wider text-emerald-800 mb-2">✓ Naturae Cold Press</p>
            <ul class="text-xs text-emerald-950 space-y-2">
              <li>• Ditekan perlahan, vitamin & enzim tetap utuh aktif</li>
              <li>• 100% konsentrat sari buah alami tanpa air & gula</li>
              <li>• Tekstur halus, warna cerah alami, rasa manis murni</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- CTA BANNER menuju halaman Products -->
  <section class="py-12 bg-[#F5EFE4]/60">
    <div class="max-w-3xl mx-auto px-4 text-center">
      <h2 class="font-header text-2xl sm:text-3xl text-naturae-darkgreen uppercase tracking-tight mb-3">
        Lihat Seluruh Produk Kami
      </h2>
      <p class="text-sm text-emerald-950/70 mb-6">
        Temukan varian cold-pressed juice pilihan kami. Tropical Splash, Fresh Immunity, dan Green Vitality. <strong>All item Rp 20.000</strong> / botol 300 ml.
      </p>
      <a href="{{ route('products') }}"
         class="inline-flex items-center gap-2 px-8 py-4 rounded-full
                bg-naturae-darkgreen hover:bg-naturae-darkgreen-light
                text-white font-extrabold text-base tracking-wide
                shadow-lg hover:shadow-xl transition-all duration-200 active:scale-95">
        <span>Lihat Semua Produk</span>
        <span>→</span>
      </a>
    </div>
  </section>

  <!-- CARA PESAN -->
  <section id="cara-pesan" class="py-16 md:py-24 bg-[#F5EFE4]/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14">
        <h2 class="font-header text-3xl sm:text-4xl md:text-5xl text-naturae-darkgreen uppercase tracking-tight mt-3 mb-4">
          Cara Pemesanan
        </h2>
        <p class="text-emerald-950/75 text-sm sm:text-base leading-relaxed">
          Pemesanan sangat mudah langsung melalui kontak WhatsApp resmi Naturae.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="relative bg-white rounded-3xl p-8 border border-emerald-950/5 shadow-soft">
          <span class="absolute top-4 right-6 font-header text-5xl font-black text-gray-100">01</span>
          <h3 class="font-subheader text-xl text-naturae-darkgreen mb-3">Pilih Varian</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Pilih varian favoritmu dari katalog menu (Tropical Splash, Fresh Immunity, atau Green Vitality).</p>
        </div>

        <div class="relative bg-white rounded-3xl p-8 border border-emerald-950/5 shadow-soft">
          <span class="absolute top-4 right-6 font-header text-5xl font-black text-gray-100">02</span>
          <h3 class="font-subheader text-xl text-naturae-darkgreen mb-3">Hubungi WhatsApp</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Klik tombol WhatsApp pada varian atau hubungi admin di +62 877-3072-0433 untuk mengirim pesanan.</p>
        </div>

        <div class="relative bg-white rounded-3xl p-8 border border-emerald-950/5 shadow-soft">
          <span class="absolute top-4 right-6 font-header text-5xl font-black text-gray-100">03</span>
          <h3 class="font-subheader text-xl text-naturae-darkgreen mb-3">Pengiriman Segar</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Jus dingin segar segera diproses dan diantarkan langsung ke lokasi Anda di Surabaya & sekitarnya.</p>
        </div>
      </div>
    </div>
  </section>

@endsection
