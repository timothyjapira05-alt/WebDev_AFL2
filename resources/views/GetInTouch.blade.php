@extends('Template.layout')

@section('content')
<div class="py-16 md:py-24 bg-naturae-bg">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    
    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-950/5 text-naturae-darkgreen text-xs font-bold uppercase tracking-wider mb-4">
      Kontak Resmi
    </span>

    <h1 class="font-display text-4xl sm:text-5xl text-naturae-darkgreen uppercase tracking-tight mb-4">
      Hubungi Naturae
    </h1>

    <p class="text-emerald-950/75 text-sm sm:text-base leading-relaxed mb-10 max-w-xl mx-auto">
      Punya pertanyaan seputar ketersediaan varian harian, pesanan untuk acara/event, atau ingin menjadi partner reseller? Kami siap melayani Anda!
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
      
      <!-- WhatsApp Card -->
      <a href="https://wa.me/6287730720433?text=Halo%20Naturae%20Cold%20Press!%20Saya%20ingin%20tanya%20varian%20juice%20segar%20%F0%9F%A5%A4" target="_blank" rel="noopener noreferrer" class="p-6 sm:p-8 rounded-3xl bg-white border border-emerald-950/5 shadow-card hover:shadow-card-hover transition-all group block">
        <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
          📞
        </div>
        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider block mb-1">WhatsApp Admin Order</span>
        <h3 class="font-display text-xl sm:text-2xl text-naturae-darkgreen mb-2">+62 877-3072-0433</h3>
        <p class="text-xs text-gray-600 leading-relaxed mb-4">Chat langsung dengan admin kami untuk info stok hari ini dan konfirmasi pengantaran.</p>
        <span class="text-xs font-bold text-naturae-darkgreen group-hover:underline flex items-center gap-1">
          <span>Buka WhatsApp Sekarang</span>
          <span>→</span>
        </span>
      </a>

      <!-- Instagram Card -->
      <a href="https://instagram.com/naturae_coldpress" target="_blank" rel="noopener noreferrer" class="p-6 sm:p-8 rounded-3xl bg-white border border-emerald-950/5 shadow-card hover:shadow-card-hover transition-all group block">
        <div class="w-14 h-14 rounded-2xl bg-pink-50 text-pink-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
          📷
        </div>
        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider block mb-1">Instagram Official</span>
        <h3 class="font-display text-xl sm:text-2xl text-pink-700 mb-2">@naturae_coldpress</h3>
        <p class="text-xs text-gray-600 leading-relaxed mb-4">Follow cerita kesegaran harian, foto produk, dan promo menarik di akun Instagram resmi kami.</p>
        <span class="text-xs font-bold text-pink-700 group-hover:underline flex items-center gap-1">
          <span>Kunjungi Profil Instagram</span>
          <span>↗</span>
        </span>
      </a>

    </div>

    <!-- Operating Info Box -->
    <div class="mt-8 p-6 rounded-3xl bg-white border border-emerald-950/5 shadow-soft text-left sm:text-center max-w-xl mx-auto">
      <h4 class="font-display text-base text-naturae-darkgreen mb-2">📍 Area Layanan & Jam Operasional</h4>
      <p class="text-xs text-emerald-950/70 leading-relaxed">
        Pengiriman melayani area <strong>Surabaya, Sidoarjo & sekitarnya</strong>.<br>
        Jam operasional: <strong>Senin – Sabtu, 08.00 – 17.00 WIB</strong>.
      </p>
    </div>

  </div>
</div>
@endsection
