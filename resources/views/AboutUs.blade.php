@extends('Template.layout')

@section('content')
<div class="py-16 md:py-24 bg-naturae-bg">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    
    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-950/5 text-naturae-darkgreen text-xs font-bold uppercase tracking-wider mb-4">
      Tentang Kami
    </span>

    <h1 class="font-display text-4xl sm:text-5xl text-naturae-darkgreen uppercase tracking-tight mb-4">
      Cerita di Balik Naturae
    </h1>

    <p class="font-display text-xl sm:text-2xl text-naturae-red mb-8">
      "Freshly Pressed, Simply Enjoyed."
    </p>

    <div class="bg-white rounded-3xl p-8 sm:p-10 border border-emerald-950/5 shadow-card text-left space-y-6 text-emerald-950/80 leading-relaxed text-sm sm:text-base">
      <p>
        <strong>Naturae</strong> lahir dari keyakinan sederhana: hidup sehat seharusnya tidak rumit dan tidak harus mahal. Di tengah kesibukan masyarakat perkotaan, kami ingin menghadirkan cara paling praktis untuk menikmati kebaikan nutrisi alami dari buah dan sayur segar.
      </p>

      <p>
        Setiap botol jus Naturae diekstrak dengan metode <em>cold-pressed</em> hidrolik perlahan tanpa pisau berputar cepat. Proses ini menjaga enzim alami, vitamin, mineral, serta warna cerah buah tanpa rusak oleh panas gesekan.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 border-t border-gray-100">
        <div class="p-4 rounded-2xl bg-[#FFF3F1] border border-red-100">
          <h4 class="font-display text-sm text-naturae-red mb-1">100% Raw Juice</h4>
          <p class="text-xs text-gray-600">Tanpa setetes pun air tambahan atau sirup pemanis buatan.</p>
        </div>
        <div class="p-4 rounded-2xl bg-[#FFF7ED] border border-orange-100">
          <h4 class="font-display text-sm text-naturae-orange mb-1">All Item 20K</h4>
          <p class="text-xs text-gray-600">Harga bersahabat agar gaya hidup sehat bisa dinikmati siapa saja.</p>
        </div>
        <div class="p-4 rounded-2xl bg-[#F1F9EE] border border-emerald-100">
          <h4 class="font-display text-sm text-naturae-green mb-1">Fresh Daily</h4>
          <p class="text-xs text-gray-600">Diproduksi segar setiap pagi untuk menjamin mutu dan kesegaran maksimal.</p>
        </div>
      </div>
    </div>

    <div class="mt-10">
      <a href="{{ route('products') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-naturae-darkgreen hover:bg-naturae-darkgreen-light text-white font-bold text-sm shadow-md transition-all">
        <span>Lihat Menu Varian Kami</span>
        <span>→</span>
      </a>
    </div>

  </div>
</div>
@endsection
