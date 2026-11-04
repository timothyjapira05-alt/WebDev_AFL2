@extends('Template.layout')

@section('content')
<div class="py-16 md:py-24 bg-naturae-bg">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

    <h1 class="font-header text-4xl sm:text-5xl text-naturae-darkgreen uppercase tracking-tight mb-4">
      Hubungi Naturae
    </h1>

    <p class="text-emerald-950/75 text-sm sm:text-base leading-relaxed mb-10 max-w-xl mx-auto">
      Punya pertanyaan seputar ketersediaan varian harian, pesanan untuk acara/event, atau ingin menjadi partner reseller? Kami siap melayani Anda!
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
      
    <!-- WA -->
      <a href="https://wa.me/6287730720433?text=Halo%20Naturae%20Cold%20Press!%20Saya%20ingin%20tanya%20varian%20juice%20segar%20%F0%9F%A5%A4" target="_blank" rel="noopener noreferrer" class="p-6 sm:p-8 rounded-3xl bg-white border border-emerald-950/5 shadow-card hover:shadow-card-hover transition-all group block">
        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider block mb-1">WhatsApp Admin Order</span>
        <h3 class="font-subheader text-xl sm:text-2xl text-naturae-darkgreen mb-2">+62 877-3072-0433</h3>
        <p class="text-xs text-gray-600 leading-relaxed mb-4">Chat langsung dengan admin kami untuk info stok hari ini dan konfirmasi pengantaran.</p>
        <span class="text-xs font-bold text-naturae-darkgreen group-hover:underline flex items-center gap-1">
          <span>Buka WhatsApp Sekarang</span>
          <span>→</span>
        </span>
      </a>

    <!-- IG -->
      <a href="https://instagram.com/naturae_coldpress" target="_blank" rel="noopener noreferrer" class="p-6 sm:p-8 rounded-3xl bg-white border border-emerald-950/5 shadow-card hover:shadow-card-hover transition-all group block">
        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider block mb-1">Instagram Official</span>
        <h3 class="font-subheader text-xl sm:text-2xl text-pink-700 mb-2">@naturae_coldpress</h3>
        <p class="text-xs text-gray-600 leading-relaxed mb-4">Follow cerita kesegaran harian, foto produk, dan promo menarik di akun Instagram resmi kami.</p>
        <span class="text-xs font-bold text-pink-700 group-hover:underline flex items-center gap-1">
          <span>Kunjungi Profil Instagram</span>
          <span>↗</span>
        </span>
      </a>

    </div>

    <div class="mt-8 p-6 rounded-3xl bg-white border border-emerald-950/5 shadow-soft text-left sm:text-center max-w-xl mx-auto">
      <h4 class="font-subheader text-base text-naturae-darkgreen mb-2">📍 Area Layanan & Jam Operasional</h4>
      <p class="text-xs text-emerald-950/70 leading-relaxed">
        Pengiriman melayani area <strong>Surabaya, Sidoarjo & sekitarnya</strong>.<br>
        Jam operasional: <strong>Senin – Sabtu, 08.00 – 17.00 WIB</strong>.
      </p>
    </div>
  </div>

  <!-- BECOME A PARTNER -->
<div id="become-a-partner" class="pt-10 md:pt-12 pb-16 md:pb-24 text-center">
  <h1 class="font-header text-4xl sm:text-5xl text-naturae-darkgreen uppercase tracking-tight mb-4 mt-20">
      Become a Partner
    </h1>

    <p class="text-emerald-950/75 text-sm sm:text-base leading-relaxed mb-10 max-w-xl mx-auto">
      Tertarik menjadi partner Naturae? Isi formulir di bawah.
    </p>

      <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-6 sm:p-8 rounded-3xl bg-white border border-emerald-950/5 shadow-card text-left">

          @if (session('success'))
            <div class="mb-4 p-3 rounded-xl bg-emerald-50 text-emerald-800 text-sm font-semibold">
              {{ session('success') }}
            </div>
          @endif

          @if ($errors->any())
            <div class="mb-4 p-3 rounded-xl bg-red-50 text-naturae-red text-sm">
              <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ route('partners.store') }}" class="space-y-4">
            @csrf

            <div>
              <label for="name" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Nama</label>
              <input id="name" type="text" name="name" value="{{ old('name') }}" required maxlength="100"
                     class="w-full rounded-xl border border-emerald-950/15 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-naturae-green">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="email" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required maxlength="150"
                       class="w-full rounded-xl border border-emerald-950/15 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-naturae-green">
              </div>
              <div>
                <label for="phone" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">No. WhatsApp</label>
                <input id="phone" type="text" name="phone" value="{{ old('phone') }}" maxlength="20"
                       class="w-full rounded-xl border border-emerald-950/15 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-naturae-green">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="business_name" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Nama Usaha</label>
                <input id="business_name" type="text" name="business_name" value="{{ old('business_name') }}" required maxlength="150"
                       class="w-full rounded-xl border border-emerald-950/15 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-naturae-green">
              </div>
              <div>
                <label for="city" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Kota / Area</label>
                <input id="city" type="text" name="city" value="{{ old('city') }}" required maxlength="100"
                       class="w-full rounded-xl border border-emerald-950/15 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-naturae-green">
              </div>
            </div>

            <div>
              <label for="message" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Pesan</label>
              <textarea id="message" name="message" rows="4" required
                        class="w-full rounded-xl border border-emerald-950/15 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-naturae-green">{{ old('message') }}</textarea>
            </div>

            <button type="submit"
                    class="w-full rounded-full bg-naturae-darkgreen hover:bg-naturae-darkgreen-light text-white font-bold py-3 text-sm transition-colors">
              Kirim
            </button>
          </form>
        </div>
      </div>
    </div>

    @if (session('success') || $errors->any())
      <script>
        document.getElementById('become-a-partner').scrollIntoView({ behavior: 'smooth', block: 'start' });
      </script>
    @endif
@endsection
