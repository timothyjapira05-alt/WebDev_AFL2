@extends('Template.layout')

@section('content')
<div class="py-16 md:py-24 bg-naturae-bg">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    
    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-red-100 text-naturae-red text-xs font-bold uppercase tracking-wider mb-4">
      Perjalanan Kami
    </span>

    <h1 class="font-display text-4xl sm:text-5xl text-naturae-darkgreen uppercase tracking-tight mb-8">
      Our Story
    </h1>

    <div class="bg-white rounded-3xl p-8 sm:p-10 border border-emerald-950/5 shadow-card text-left space-y-6 text-emerald-950/80 leading-relaxed text-sm sm:text-base">
      <h3 class="font-display text-xl text-naturae-darkgreen">
        Dari Dapur Kecil Menuju Komunitas Hidup Sehat
      </h3>

      <p>
        Semua berawal dari poster sederhana dan kecintaan kami pada minuman segar alami. Di iklim tropis yang terik, seringkali kita tergoda minuman manis tinggi gula yang justru membuat tubuh lelah.
      </p>

      <p>
        Kami meracik kombinasi buah yang tidak hanya bernutrisi tinggi, tapi juga memiliki rasa yang benar-benar enak dan menyegarkan:
      </p>

      <ul class="space-y-3 pt-2">
        <li class="flex items-start gap-3">
          <span class="w-6 h-6 rounded-full bg-naturae-red text-white flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">1</span>
          <div>
            <strong class="text-naturae-red">Tropical Splash:</strong> Perpaduan semangka manis juicy, nanas madu, dan perasan lemon segar untuk rehidrasi tubuh setelah aktivitas.
          </div>
        </li>
        <li class="flex items-start gap-3">
          <span class="w-6 h-6 rounded-full bg-naturae-orange text-white flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">2</span>
          <div>
            <strong class="text-naturae-orange">Fresh Immunity:</strong> Manis lembut apel fuji dan wortel segar dengan nanas untuk perlindungan imun ekstra dan kulit bercahaya.
          </div>
        </li>
        <li class="flex items-start gap-3">
          <span class="w-6 h-6 rounded-full bg-naturae-green text-white flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">3</span>
          <div>
            <strong class="text-naturae-green">Green Vitality:</strong> Menikmati sayur pakcoy segar tanpa rasa langu berkat manis buah nanas & apel yang renyah di tenggorokan.
          </div>
        </li>
      </ul>

      <p class="pt-4 border-t border-gray-100 text-xs text-gray-500 italic">
        "Kami berkomitmen mempertahankan harga terjangkau All Item 20K dengan mutu buah terbaik setiap hari."
      </p>
    </div>

    <div class="mt-10">
      <a href="{{ route('products') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-naturae-darkgreen hover:bg-naturae-darkgreen-light text-white font-bold text-sm shadow-md transition-all">
        <span>Jelajahi Menu Produk</span>
        <span>→</span>
      </a>
    </div>

  </div>
</div>
@endsection
