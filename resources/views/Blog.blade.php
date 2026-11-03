@extends('Template.layout')

@section('content')
<div class="py-16 md:py-24 bg-naturae-bg">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-100 text-amber-800 text-xs font-bold uppercase tracking-wider mb-4">
        Tips & Jurnal Sehat
      </span>

      <h1 class="font-display text-4xl sm:text-5xl text-naturae-darkgreen uppercase tracking-tight mb-4">
        Inspirasi & Edukasi Nutrisi
      </h1>

      <p class="text-emerald-950/75 text-sm sm:text-base leading-relaxed">
        Artikel ringan seputar cold-press juice, hidrasi alami, dan tips menjaga kesehatan di tengah rutinitas harian.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Article 1 -->
      <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-card hover:shadow-card-hover transition-all flex flex-col justify-between">
        <div>
          <span class="inline-block px-3 py-1 rounded-full bg-red-50 text-naturae-red text-xs font-bold mb-3">
            Hidrasi & Recovery
          </span>
          <h3 class="font-display text-lg text-naturae-darkgreen mb-3">
            Kenapa Semangka Sangat Bagus Setelah Berolahraga?
          </h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed mb-4">
            Semangka mengandung lebih dari 90% air alami, asam amino L-sitrulin, serta likopen tinggi yang membantu meredakan pegal otot dan menggantikan cairan tubuh dengan cepat.
          </p>
        </div>
        <div class="pt-4 border-t border-gray-100 text-xs font-bold text-naturae-red flex items-center justify-between">
          <span>Baca Selengkapnya</span>
          <span>→</span>
        </div>
      </div>

      <!-- Article 2 -->
      <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-card hover:shadow-card-hover transition-all flex flex-col justify-between">
        <div>
          <span class="inline-block px-3 py-1 rounded-full bg-orange-50 text-naturae-orange text-xs font-bold mb-3">
            Imunitas & Kulit
          </span>
          <h3 class="font-display text-lg text-naturae-darkgreen mb-3">
            Rahasia Kombinasi Vitamin A & C pada Wortel dan Apel
          </h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed mb-4">
            Beta-karoten dari wortel segar berpadu dengan pektin apel fuji membantu regenerasi sel kulit, menjaga kesehatan mata, dan memberikan perlindungan ekstra bagi daya tahan tubuh.
          </p>
        </div>
        <div class="pt-4 border-t border-gray-100 text-xs font-bold text-naturae-orange flex items-center justify-between">
          <span>Baca Selengkapnya</span>
          <span>→</span>
        </div>
      </div>

      <!-- Article 3 -->
      <div class="bg-white rounded-3xl p-6 sm:p-7 border border-emerald-950/5 shadow-card hover:shadow-card-hover transition-all flex flex-col justify-between">
        <div>
          <span class="inline-block px-3 py-1 rounded-full bg-emerald-50 text-naturae-green text-xs font-bold mb-3">
            Detoksifikasi Alami
          </span>
          <h3 class="font-display text-lg text-naturae-darkgreen mb-3">
            Cara Menikmati Sayur Hijau Tanpa Bau Langu
          </h3>
          <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed mb-4">
            Banyak orang menghindari sayur karena aromanya. Padahal, sentuhan manis alami nanas madu dan apel segar mampu menyamarkan rasa langu pakcoy menjadi minuman yang luar biasa nikmat.
          </p>
        </div>
        <div class="pt-4 border-t border-gray-100 text-xs font-bold text-naturae-green flex items-center justify-between">
          <span>Baca Selengkapnya</span>
          <span>→</span>
        </div>
      </div>

    </div>

  </div>
</div>
@endsection
