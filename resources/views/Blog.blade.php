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

    @forelse ($posts as $post)

        <div class="bg-white rounded-3xl overflow-hidden border border-emerald-950/5 shadow-card hover:shadow-card-hover transition-all flex flex-col">

            {{-- Article Image --}}
            @if ($post->image)
                <img
                    src="{{ $post->image_base64 }}"
                    alt="{{ $post->title }}"
                    class="w-full h-56 object-cover"
                >
            @else
                <div class="w-full h-56 bg-emerald-50 flex items-center justify-center">
                    <span class="text-emerald-800 text-sm">
                        Image Not Available
                    </span>
                </div>
            @endif

            <div class="p-6 sm:p-7 flex flex-col flex-1">

                <span class="inline-block px-3 py-1 rounded-full bg-emerald-50 text-naturae-green text-xs font-bold mb-3 self-start">
                    {{ $post->category }}
                </span>

                <h3 class="font-display text-lg text-naturae-darkgreen mb-3">
                    {{ $post->title }}
                </h3>

                <p class="text-xs sm:text-sm text-emerald-950/75 leading-relaxed mb-4">
                    {{ $post->description }}
                </p>

                <div class="mt-auto pt-4 border-t border-gray-100 text-xs font-bold text-naturae-green flex items-center justify-between">
                    <span>Baca Selengkapnya</span>
                    <span>→</span>
                </div>

            </div>
        </div>

    @empty

        <div class="col-span-full text-center py-16">
            <h3 class="text-xl font-display text-naturae-darkgreen mb-2">
                Artikel Belum Tersedia
            </h3>

            <p class="text-sm text-emerald-950/75">
                Nantikan artikel menarik dari Naturae segera!
            </p>
        </div>

    @endforelse

</div>

  </div>
</div>
@endsection
