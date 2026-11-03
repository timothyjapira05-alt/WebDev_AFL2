@extends('Template.layout')

@section('content')

  <!-- HERO SECTION (POSTER VIBE) -->
  <section id="hero" class="relative pt-6 pb-20 md:pt-12 md:pb-28 overflow-hidden bg-naturae-bg">
    <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-amber-100/40 rounded-full blur-3xl -z-10 pointer-events-none"></div>
    <div class="absolute top-40 right-10 w-[300px] h-[300px] bg-red-100/40 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8">
        
        <!-- Left: Poster Typography -->
        <div class="flex-1 text-center lg:text-left z-20 max-w-2xl">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-950/5 border border-emerald-900/10 text-naturae-darkgreen text-xs font-bold uppercase tracking-wider mb-5">
            <span>✨ 100% Raw Cold-Pressed Juice</span>
          </div>

          <h1 class="font-display text-5xl sm:text-6xl md:text-7xl lg:text-8xl tracking-tight text-naturae-darkgreen leading-[0.95] uppercase mb-4 drop-shadow-sm select-none">
            COLD<br>
            PRESS<br>
            JUICE
          </h1>

          <p class="font-display text-2xl sm:text-3xl text-naturae-darkgreen/90 tracking-tight mb-4">
            Freshly Pressed, Simply Enjoyed.
          </p>

          <p class="text-base sm:text-lg text-emerald-950/75 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
            Sari murni buah & sayur segar pilihan tanpa pemanasan, tanpa air tambahan, dan tanpa bahan pengawet. Nutrisi alami terjaga maksimal untuk gaya hidup aktifmu.
          </p>

          <!-- Action Buttons -->
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

          <!-- 3 Quick Value Badges -->
          <div class="grid grid-cols-3 gap-3 pt-4 border-t border-emerald-950/10 text-left">
            <div class="flex items-center gap-2">
              <span class="text-emerald-700 font-bold">✓</span>
              <span class="text-xs sm:text-sm font-semibold text-emerald-950">100% Buah Asli</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="text-amber-600 font-bold">✓</span>
              <span class="text-xs sm:text-sm font-semibold text-emerald-950">Tanpa Gula Tambahan</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="text-red-600 font-bold">✓</span>
              <span class="text-xs sm:text-sm font-semibold text-emerald-950">Nutrisi Utuh Alami</span>
            </div>
          </div>

        </div>

        <!-- Right: 3 Hero Bottles + ALL ITEM 20K Badge -->
        <div class="flex-1 relative w-full flex items-center justify-center py-6 min-h-[460px]">
          
          <!-- Round Badge: ALL ITEM 20K -->
          <div class="absolute top-2 left-4 sm:left-8 z-30 animate-pulse-subtle">
            <div class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full border-4 border-naturae-red bg-white/95 shadow-xl flex flex-col items-center justify-center transform -rotate-12 hover:rotate-0 transition-transform">
              <span class="text-[10px] sm:text-xs font-black tracking-wider text-naturae-red uppercase">ALL ITEM</span>
              <span class="text-2xl sm:text-3xl font-display text-naturae-red font-black leading-none">20k</span>
              <span class="text-[9px] text-gray-500 font-bold -mt-0.5">300 ml</span>
            </div>
          </div>

          <!-- Trio of 3D-styled Bottles -->
          <div class="relative flex items-end justify-center gap-3 sm:gap-5 z-10 pt-8 pb-4">
            
            <!-- Bottle 1: Tropical Splash -->
            <div class="transform -rotate-3 hover:rotate-0 hover:scale-105 transition-all duration-300">
              <div class="w-[110px] sm:w-[130px] md:w-[145px] h-[280px] sm:h-[330px] md:h-[360px] flex flex-col items-center drop-shadow-xl">
                <div class="w-[50px] sm:w-[56px] h-[24px] bg-white rounded-t-md shadow border-b-2 border-gray-300"></div>
                <div class="w-[46px] sm:w-[50px] h-[20px] bg-gradient-to-b from-[#FF5E48] to-[#E63926]"></div>
                <div class="w-[85px] sm:w-[105px] md:w-[115px] flex-1 rounded-[24px] bg-gradient-to-b from-[#FF5E48] via-[#E63926] to-[#C92817] shadow-2xl flex flex-col justify-between p-2 border border-white/30 relative overflow-hidden">
                  <div class="absolute top-0 left-2 bottom-0 w-2 bg-white/30 rounded-full blur-[1px]"></div>
                  <div class="my-auto w-full bg-white/95 rounded-lg py-2.5 px-1.5 text-center shadow border border-amber-100 flex flex-col items-center">
                    <div class="w-7 h-7 rounded-full bg-naturae-red text-white flex flex-col items-center justify-center text-[7.5px] font-display mb-1">
                      <span>natu</span><span class="-mt-0.5">rae</span>
                    </div>
                    <p class="text-[6.5px] font-semibold text-emerald-900 italic">Freshly Pressed Simply Enjoyed</p>
                    <p class="text-[6px] font-bold text-gray-500 uppercase tracking-wider mb-1">WATERMELON · PINEAPPLE · LEMON</p>
                    <div class="w-full py-0.5 px-1 rounded-full bg-naturae-red text-white text-[7.5px] font-display uppercase">
                      Tropical Splash
                    </div>
                    <div class="text-[6px] text-gray-500 pt-1 mt-1 border-t border-gray-200">300 ml · Cold Pressed</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Bottle 2: Fresh Immunity -->
            <div class="transform -translate-y-4 hover:-translate-y-6 hover:scale-105 transition-all duration-300 z-10">
              <div class="w-[110px] sm:w-[130px] md:w-[145px] h-[280px] sm:h-[330px] md:h-[360px] flex flex-col items-center drop-shadow-xl">
                <div class="w-[50px] sm:w-[56px] h-[24px] bg-white rounded-t-md shadow border-b-2 border-gray-300"></div>
                <div class="w-[46px] sm:w-[50px] h-[20px] bg-gradient-to-b from-[#FFA733] to-[#F58220]"></div>
                <div class="w-[85px] sm:w-[105px] md:w-[115px] flex-1 rounded-[24px] bg-gradient-to-b from-[#FFA733] via-[#F58220] to-[#DF6E10] shadow-2xl flex flex-col justify-between p-2 border border-white/30 relative overflow-hidden">
                  <div class="absolute top-0 left-2 bottom-0 w-2 bg-white/30 rounded-full blur-[1px]"></div>
                  <div class="my-auto w-full bg-white/95 rounded-lg py-2.5 px-1.5 text-center shadow border border-amber-100 flex flex-col items-center">
                    <div class="w-7 h-7 rounded-full bg-naturae-red text-white flex flex-col items-center justify-center text-[7.5px] font-display mb-1">
                      <span>natu</span><span class="-mt-0.5">rae</span>
                    </div>
                    <p class="text-[6.5px] font-semibold text-emerald-900 italic">Freshly Pressed Simply Enjoyed</p>
                    <p class="text-[6px] font-bold text-gray-500 uppercase tracking-wider mb-1">PINEAPPLE · APPLE · CARROT</p>
                    <div class="w-full py-0.5 px-1 rounded-full bg-naturae-orange text-white text-[7.5px] font-display uppercase">
                      Fresh Immunity
                    </div>
                    <div class="text-[6px] text-gray-500 pt-1 mt-1 border-t border-gray-200">300 ml · Cold Pressed</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Bottle 3: Green Vitality -->
            <div class="transform rotate-3 hover:rotate-0 hover:scale-105 transition-all duration-300">
              <div class="w-[110px] sm:w-[130px] md:w-[145px] h-[280px] sm:h-[330px] md:h-[360px] flex flex-col items-center drop-shadow-xl">
                <div class="w-[50px] sm:w-[56px] h-[24px] bg-white rounded-t-md shadow border-b-2 border-gray-300"></div>
                <div class="w-[46px] sm:w-[50px] h-[20px] bg-gradient-to-b from-[#54BA46] to-[#35872A]"></div>
                <div class="w-[85px] sm:w-[105px] md:w-[115px] flex-1 rounded-[24px] bg-gradient-to-b from-[#54BA46] via-[#35872A] to-[#25681D] shadow-2xl flex flex-col justify-between p-2 border border-white/30 relative overflow-hidden">
                  <div class="absolute top-0 left-2 bottom-0 w-2 bg-white/30 rounded-full blur-[1px]"></div>
                  <div class="my-auto w-full bg-white/95 rounded-lg py-2.5 px-1.5 text-center shadow border border-amber-100 flex flex-col items-center">
                    <div class="w-7 h-7 rounded-full bg-naturae-red text-white flex flex-col items-center justify-center text-[7.5px] font-display mb-1">
                      <span>natu</span><span class="-mt-0.5">rae</span>
                    </div>
                    <p class="text-[6.5px] font-semibold text-emerald-900 italic">Freshly Pressed Simply Enjoyed</p>
                    <p class="text-[6px] font-bold text-gray-500 uppercase tracking-wider mb-1">PINEAPPLE · APPLE · PAKCOY</p>
                    <div class="w-full py-0.5 px-1 rounded-full bg-naturae-green text-white text-[7.5px] font-display uppercase">
                      Green Vitality
                    </div>
                    <div class="text-[6px] text-gray-500 pt-1 mt-1 border-t border-gray-200">300 ml · Cold Pressed</div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- PRODUK SECTION dihapus dari Home – kini tersedia di halaman /products -->

  <!-- CTA BANNER menuju halaman Products -->
  <section class="py-12 bg-[#F5EFE4]/60">
    <div class="max-w-3xl mx-auto px-4 text-center">
      <h2 class="font-display text-2xl sm:text-3xl text-naturae-darkgreen uppercase tracking-tight mb-3">
        Lihat Seluruh Produk Kami
      </h2>
      <p class="text-sm text-emerald-950/70 mb-6">
        Temukan varian cold-pressed juice pilihan kami — Tropical Splash, Fresh Immunity, dan Green Vitality. <strong>All item Rp 20.000</strong> / botol 300 ml.
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

  <!-- KENAPA COLD PRESS? -->
  <section id="manfaat" class="py-16 md:py-24 bg-naturae-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14">
        <span class="text-xs font-bold text-naturae-green tracking-widest uppercase bg-emerald-950/5 px-3 py-1 rounded-full">
          Edukasi Nutrisi
        </span>
        <h2 class="font-display text-3xl sm:text-4xl md:text-5xl text-naturae-darkgreen uppercase tracking-tight mt-3 mb-4">
          Kenapa Memilih Cold Press?
        </h2>
        <p class="text-emerald-950/75 text-sm sm:text-base leading-relaxed">
          Metode terbaik mengekstraksi buah dan sayur segar agar kandungan nutrisi, rasa, dan warna aslinya tetap hidup seperti saat dipetik.
        </p>
      </div>

      <!-- 4 Poin Keunggulan -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-soft">
          <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl mb-5">❄️</div>
          <h3 class="font-display text-lg text-naturae-darkgreen mb-2">Teknologi Cold Pressed</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Diekstrak menggunakan tekanan hidrolik perlahan tanpa pisau berputar yang menghasilkan panas perusak enzim.</p>
        </div>

        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-soft">
          <div class="w-12 h-12 rounded-2xl bg-red-50 text-naturae-red flex items-center justify-center text-xl mb-5">💧</div>
          <h3 class="font-display text-lg text-naturae-darkgreen mb-2">100% Sari Murni</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Murni tanpa tambahan air, tanpa sirup pemanis, dan tanpa pewarna. Rasa manis murni dari buah matang pilihan.</p>
        </div>

        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-soft">
          <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-naturae-green flex items-center justify-center text-xl mb-5">🛡️</div>
          <h3 class="font-display text-lg text-naturae-darkgreen mb-2">Nutrisi & Enzim Utuh</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Kandungan vitamin A, C, K, folat, dan antioksidan alami terserap lebih optimal oleh tubuh tanpa oksidasi cepat.</p>
        </div>

        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-soft">
          <div class="w-12 h-12 rounded-2xl bg-amber-50 text-naturae-orange flex items-center justify-center text-xl mb-5">⏱️</div>
          <h3 class="font-display text-lg text-naturae-darkgreen mb-2">Segar Setiap Hari</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Dibuat dalam batch segar harian untuk menjamin kualitas terbaik sampai ke tangan Anda.</p>
        </div>
      </div>

      <!-- Perbandingan Blender vs Cold Press -->
      <div class="bg-white rounded-3xl p-6 sm:p-8 border border-emerald-950/10 shadow-soft max-w-4xl mx-auto">
        <h4 class="font-display text-xl text-naturae-darkgreen text-center mb-6">
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

  <!-- CARA PESAN (INFO RINGKAS) -->
  <section id="cara-pesan" class="py-16 md:py-24 bg-[#FAF6EE]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14">
        <span class="text-xs font-bold text-naturae-red tracking-widest uppercase bg-red-100/60 px-3 py-1 rounded-full">
          Simpel & Cepat
        </span>
        <h2 class="font-display text-3xl sm:text-4xl md:text-5xl text-naturae-darkgreen uppercase tracking-tight mt-3 mb-4">
          Cara Pemesanan
        </h2>
        <p class="text-emerald-950/75 text-sm sm:text-base leading-relaxed">
          Pemesanan sangat mudah langsung melalui kontak WhatsApp resmi Naturae.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="relative bg-white rounded-3xl p-8 border border-emerald-950/5 shadow-soft">
          <span class="absolute top-4 right-6 font-display text-5xl font-black text-gray-100">01</span>
          <div class="w-14 h-14 rounded-2xl bg-red-50 text-naturae-red flex items-center justify-center text-2xl mb-6">🥤</div>
          <h3 class="font-display text-xl text-naturae-darkgreen mb-3">Pilih Varian</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Pilih varian favoritmu dari katalog menu (Tropical Splash, Fresh Immunity, atau Green Vitality).</p>
        </div>

        <div class="relative bg-white rounded-3xl p-8 border border-emerald-950/5 shadow-soft">
          <span class="absolute top-4 right-6 font-display text-5xl font-black text-gray-100">02</span>
          <div class="w-14 h-14 rounded-2xl bg-amber-50 text-naturae-orange flex items-center justify-center text-2xl mb-6">💬</div>
          <h3 class="font-display text-xl text-naturae-darkgreen mb-3">Hubungi WhatsApp</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Klik tombol WhatsApp pada varian atau hubungi admin di +62 877-3072-0433 untuk mengirim pesanan.</p>
        </div>

        <div class="relative bg-white rounded-3xl p-8 border border-emerald-950/5 shadow-soft">
          <span class="absolute top-4 right-6 font-display text-5xl font-black text-gray-100">03</span>
          <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-naturae-green flex items-center justify-center text-2xl mb-6">🛵</div>
          <h3 class="font-display text-xl text-naturae-darkgreen mb-3">Pengiriman Segar</h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed">Jus dingin segar segera diproses dan diantarkan langsung ke lokasi Anda di Surabaya & sekitarnya.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- GALERI INSTAGRAM -->
  <section id="galeri" class="py-16 md:py-24 bg-[#F5EFE4]/40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
        <div>
          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-pink-100 text-pink-700 text-xs font-bold uppercase tracking-wider mb-3">
            Komunitas Naturae
          </span>
          <h2 class="font-display text-3xl sm:text-4xl text-naturae-darkgreen uppercase tracking-tight">
            Ikuti Keseruan Kami di Instagram
          </h2>
          <p class="text-emerald-950/70 text-sm mt-2">
            Cerita kesegaran harian dan promo spesial bersama <strong>@naturae_coldpress</strong>.
          </p>
        </div>

        <a href="https://instagram.com/naturae_coldpress" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white border border-pink-200 text-pink-700 font-bold text-xs sm:text-sm shadow-sm hover:shadow transition-all self-start md:self-auto">
          <span>Follow @naturae_coldpress</span>
          <span>↗</span>
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-3xl overflow-hidden border border-emerald-950/5 shadow-soft">
          <div class="h-44 bg-gradient-to-br from-amber-200/60 to-orange-100 flex items-center justify-center text-4xl">📸</div>
          <div class="p-5">
            <span class="text-[10px] font-bold uppercase bg-amber-50 text-amber-700 px-2 py-0.5 rounded-full">Morning Ritual</span>
            <p class="text-xs text-gray-700 italic mt-3">"Memulai hari dengan sebotol Fresh Immunity dingin. Manis alami dari wortel & apel bikin melek!"</p>
          </div>
        </div>

        <div class="bg-white rounded-3xl overflow-hidden border border-emerald-950/5 shadow-soft">
          <div class="h-44 bg-gradient-to-br from-red-200/60 to-pink-100 flex items-center justify-center text-4xl">🏃‍♂️</div>
          <div class="p-5">
            <span class="text-[10px] font-bold uppercase bg-red-50 text-red-700 px-2 py-0.5 rounded-full">Post-Workout</span>
            <p class="text-xs text-gray-700 italic mt-3">"Lari pagi selesai, rehidrasi pakai Tropical Splash. Segar semangkanya langsung balikin energi!"</p>
          </div>
        </div>

        <div class="bg-white rounded-3xl overflow-hidden border border-emerald-950/5 shadow-soft">
          <div class="h-44 bg-gradient-to-br from-emerald-200/60 to-teal-100 flex items-center justify-center text-4xl">💼</div>
          <div class="p-5">
            <span class="text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded-full">Work Focus</span>
            <p class="text-xs text-gray-700 italic mt-3">"Meeting seharian tetap fokus ditemani Green Vitality. Cara gampang konsumsi sayur pakcoy tanpa ribet!"</p>
          </div>
        </div>

        <div class="bg-white rounded-3xl overflow-hidden border border-emerald-950/5 shadow-soft">
          <div class="h-44 bg-gradient-to-br from-yellow-200/60 to-amber-100 flex items-center justify-center text-4xl">✨</div>
          <div class="p-5">
            <span class="text-[10px] font-bold uppercase bg-yellow-50 text-yellow-700 px-2 py-0.5 rounded-full">Weekend Chill</span>
            <p class="text-xs text-gray-700 italic mt-3">"Restock botol Naturae untuk akhir pekan bareng keluarga. All item cuma 20k!"</p>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection
