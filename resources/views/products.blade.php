{{-- resources/views/products.blade.php --}}
@extends('Template.layout')

@php $title = 'Produk Naturae – Cold Press Juice'; @endphp

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<section class="bg-naturae-bg pt-12 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-950/5
                border border-emerald-900/10 text-naturae-darkgreen text-xs font-bold
                uppercase tracking-wider mb-4">
      ✨ 100% Raw Cold-Pressed
    </span>

    <h1 class="font-header text-4xl sm:text-5xl md:text-6xl uppercase tracking-tight
              text-naturae-darkgreen leading-tight mb-3">
      Katalog Produk
    </h1>

    <p class="text-base sm:text-lg text-emerald-950/70 max-w-xl mx-auto">
      Pilih juice favoritmu. Semua varian diproses dingin dari buah &amp; sayur segar pilihan.
      <strong>All item Rp 20.000</strong> / botol 300 ml.
    </p>

  </div>
</section>

{{-- ===== PRODUCT GRID ===== --}}
<section class="bg-[#F5EFE4]/60 py-14">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    @if($products->isEmpty())
      {{-- Empty state --}}
      <div class="flex flex-col items-center justify-center py-24 text-center">
        <div class="text-6xl mb-4">🥤</div>
        <h2 class="font-subheader text-2xl text-naturae-darkgreen mb-2">Produk Belum Tersedia</h2>
        <p class="text-emerald-700 text-sm max-w-sm">
          Data produk belum diisi. Silakan tambahkan produk melalui phpMyAdmin / database.
        </p>
      </div>
    @else
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($products as $product)
        <article class="bg-white rounded-3xl shadow-card hover:shadow-card-hover
                        transition-all duration-300 hover:-translate-y-2
                        border border-emerald-950/5 flex flex-col overflow-hidden">

          {{-- Product image --}}
<div class="w-full h-52 bg-naturae-cream flex items-center justify-center overflow-hidden">
    @if($product->image)
        <img src="{{ asset($product->image) }}"
            alt="Foto {{ $product->name }}"
            class="w-full h-full object-cover"
            loading="lazy">
    @else
        <div class="flex flex-col items-center gap-2 text-emerald-400">
            <svg class="w-12 h-12 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span class="text-xs font-semibold">Foto belum tersedia</span>
        </div>
    @endif
</div>

          {{-- Product info --}}
          <div class="p-6 flex flex-col flex-1">

            <h2 class="font-subheader text-xl sm:text-2xl text-naturae-darkgreen mb-1 tracking-tight">
              {{ $product->name }}
            </h2>

            <p class="text-xs font-bold text-emerald-600 uppercase tracking-wider mb-3">
              {{ $product->ingredients }}
            </p>

            <p class="text-sm text-emerald-950/75 leading-relaxed mb-5 flex-1">
              {{ $product->description }}
            </p>

            {{-- Price + CTA --}}
            <div class="flex items-center justify-between mt-auto pt-4 border-t border-emerald-950/8">
              <div>
                <span class="text-[11px] font-semibold text-emerald-600 uppercase tracking-wider block">Harga</span>
                <span class="font-display text-2xl text-naturae-red font-black">
                  Rp {{ number_format($product->price, 0, ',', '.') }}
                </span>
                <span class="text-[10px] text-emerald-500 font-semibold">/ 300 ml · Cold Pressed</span>
              </div>

              <a href="https://wa.me/6287730720433?text={{ urlencode('Halo Naturae! Saya ingin pesan ' . $product->name . ' (Rp ' . number_format($product->price, 0, ',', '.') . '). Mohon informasi ketersediaan dan cara pengirimannya 🙏') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full
                        bg-naturae-darkgreen hover:bg-naturae-darkgreen-light
                        text-white text-sm font-bold tracking-wide shadow-md
                        active:scale-95 transition-all duration-200">
                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.838.879 2.796.879 3.182 0 5.768-2.587 5.768-5.766.001-3.182-2.585-5.766-5.768-5.766zm9.969 5.766c0 5.485-4.484 9.969-9.969 9.969-1.745 0-3.376-.462-4.797-1.264l-5.234 1.359 1.401-5.111c-.914-1.49-1.401-3.21-1.401-4.953 0-5.485 4.484-9.969 9.969-9.969 5.485 0 9.969 4.484 9.969 9.969z"/>
                </svg>
                Pesan
              </a>
            </div>
          </div>
        </article>
        @endforeach

      </div>
    @endif

  </div>
</section>

{{-- ===== CTA BACK TO HOME ===== --}}
<section class="bg-naturae-bg py-12 text-center">
  <a href="{{ url('/') }}"
    class="inline-flex items-center gap-2 px-6 py-3 rounded-full border-2
            border-naturae-darkgreen text-naturae-darkgreen font-bold text-sm
            hover:bg-naturae-darkgreen hover:text-white transition-all duration-200">
    ← Kembali ke Beranda
  </a>
</section>

@endsection

