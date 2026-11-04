<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>{{ $title ?? 'Naturae — Cold Press Juice | Freshly Pressed, Simply Enjoyed' }}</title>
  <meta name="title" content="{{ $title ?? 'Naturae — Cold Press Juice' }}">
  <meta name="description" content="100% cold-pressed juice murni dari buah & sayur segar pilihan. Tanpa tambahan air, gula, atau pengawet. All item 20K.">
  <meta name="theme-color" content="#1E4324">

  <!-- Google Fonts: Urbanist (weights 400-900) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            naturae: {
              bg: '#FAF6EE',
              cream: '#F3EDE2',
              darkgreen: '#18552C',
              'darkgreen-dark': '#123F21',
              'darkgreen-light': '#236E3B',
              red: '#D62827',
              'red-light': '#FFF1EF',
              orange: '#F26122',
              'orange-light': '#FFF5EB',
              green: '#9ABD3B',
              'green-light': '#F0F9EE',
              yellow: '#FFCA26',
              dark: '#18552C',
            }
          },
          fontFamily: {
            header: ['"Keep on Truckin"', 'cursive', 'sans-serif'],
            display: ['"Keep on Truckin"', 'cursive', 'sans-serif'],
            subheader: ['"Zero Cool"', 'sans-serif'],
            subheading: ['"Zero Cool"', 'sans-serif'],
            sans: ['"Urbanist"', 'sans-serif'],
            body: ['"Urbanist"', 'sans-serif'],
          },
          boxShadow: {
            'soft': '0 10px 30px -5px rgba(30, 67, 36, 0.08)',
            'card': '0 20px 40px -15px rgba(30, 67, 36, 0.1)',
            'card-hover': '0 30px 60px -15px rgba(30, 67, 36, 0.18)',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
              '50%': { transform: 'translateY(-10px) rotate(1.5deg)' },
            },
            'float-slow': {
              '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
              '50%': { transform: 'translateY(-12px) rotate(-1.5deg)' },
            },
            'pulse-subtle': {
              '0%, 100%': { transform: 'scale(1)' },
              '50%': { transform: 'scale(1.04)' },
            }
          },
          animation: {
            float: 'float 5s ease-in-out infinite',
            'float-slow': 'float-slow 6s ease-in-out infinite',
            'pulse-subtle': 'pulse-subtle 3s ease-in-out infinite',
          }
        }
      }
    }
  </script>

  <!-- External CSS from public/css/style.css with Cache-Buster -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ file_exists(public_path('css/style.css')) ? filemtime(public_path('css/style.css')) : time() }}">
</head>
<body class="font-sans antialiased selection:bg-naturae-red selection:text-white min-h-screen flex flex-col justify-between">

  <!-- ================= MASTER NAVBAR ================= -->
  <header class="sticky top-0 z-50 bg-[#FAF6EE]/95 backdrop-blur-md border-b border-emerald-950/5 py-3.5 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between">
        
        <!-- Logo & Brand -->
        <a href="{{ url('/') }}" class="flex items-center gap-3 group">
          <img src="{{ asset('assets/naturae-logo.webp') }}?v={{ file_exists(public_path('assets/naturae-logo.webp')) ? filemtime(public_path('assets/naturae-logo.webp')) : time() }}" alt="Naturae Logo" class="w-10 h-10 object-contain shadow-xs group-hover:scale-105 transition-transform select-none">
          <div class="flex flex-col">
            <span class="font-header text-2xl tracking-normal text-naturae-darkgreen group-hover:text-naturae-red transition-colors leading-none">
              naturae
            </span>
            <span class="text-[10px] tracking-widest text-emerald-800 uppercase font-bold mt-1">
              Cold Press Juice
            </span>
          </div>
        </a>

        <!-- Desktop Navigation Links (Consistent on ALL pages) -->
        <nav class="hidden lg:flex absolute left-1/2 -translate-x-1/2 items-center gap-6" aria-label="Menu Navigasi">
          <a href="{{ route('products') }}" class="text-lg font-semibold {{ Request::is('products') ? 'text-naturae-red font-bold' : 'text-emerald-950/80 hover:text-naturae-red' }} transition-colors">
            Products
          </a>
          <a href="{{ url('/Blog') }}" class="text-lg font-semibold {{ Request::is('Blog') ? 'text-naturae-red font-bold' : 'text-emerald-950/80 hover:text-naturae-red' }} transition-colors">
            Blog
          </a>
          <a href="{{ url('/Story') }}" class="text-lg font-semibold {{ Request::is('Story') ? 'text-naturae-red font-bold' : 'text-emerald-950/80 hover:text-naturae-red' }} transition-colors">
            Our Story
          </a>
          <a href="{{ url('/about_us') }}" class="text-lg font-semibold {{ Request::is('about_us') ? 'text-naturae-red font-bold' : 'text-emerald-950/80 hover:text-naturae-red' }} transition-colors">
            About Us
          </a>
          <a href="{{ url('/GetInTouch') }}" class="text-lg font-semibold {{ Request::is('GetInTouch') ? 'text-naturae-red font-bold' : 'text-emerald-950/80 hover:text-naturae-red' }} transition-colors">
            Get In Touch
          </a>
        </nav>

        <!-- Hamburger Menu -->
        <div class="flex items-center gap-3">
          <button onclick="toggleMobileNav()" class="lg:hidden p-2 rounded-lg text-emerald-950 hover:bg-emerald-950/5">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

      </div>

      <!-- Hamburg Dropdown -->
      <div id="mobile-nav-menu" class="hidden lg:hidden pt-4 pb-2 border-t border-emerald-950/10 mt-3 space-y-2">
        <a href="{{ route('products') }}" class="block px-3 py-2 text-sm font-semibold text-emerald-950 hover:bg-emerald-950/5 rounded-lg">Products</a>
        <a href="{{ url('/Blog') }}" class="block px-3 py-2 text-sm font-semibold text-emerald-950 hover:bg-emerald-950/5 rounded-lg">Blog</a>
        <a href="{{ url('/Story') }}" class="block px-3 py-2 text-sm font-semibold text-emerald-950 hover:bg-emerald-950/5 rounded-lg">Our Story</a>
        <a href="{{ url('/about_us') }}" class="block px-3 py-2 text-sm font-semibold text-emerald-950 hover:bg-emerald-950/5 rounded-lg">About Us</a>
        <a href="{{ url('/GetInTouch') }}" class="block px-3 py-2 text-sm font-semibold text-emerald-950 hover:bg-emerald-950/5 rounded-lg">Get In Touch</a>
      </div>
    </div>
  </header>

  <!-- ================= MAIN CONTENT ================= -->
  <main class="flex-1">
    @yield('content')
  </main>

  <!-- ================= MASTER FOOTER ================= -->
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
            <li><a href="{{ url('/#produk') }}" class="hover:text-white transition-colors">Menu Varian</a></li>
            <li><a href="{{ url('/#manfaat') }}" class="hover:text-white transition-colors">Kenapa Cold Press?</a></li>
            <li><a href="{{ url('/about_us') }}" class="hover:text-white transition-colors">About Us</a></li>
            <li><a href="{{ url('/Story') }}" class="hover:text-white transition-colors">Our Story</a></li>
            <li><a href="{{ url('/Blog') }}" class="hover:text-white transition-colors">Blog</a></li>
            <li><a href="{{ url('/GetInTouch') }}" class="hover:text-white transition-colors">Get In Touch</a></li>
          </ul>
        </div>

        <div class="md:col-span-4 space-y-4">
          <h4 class="font-display text-sm uppercase tracking-wider text-emerald-200 font-bold">Kontak Resmi (Dari Poster)</h4>
          <div class="space-y-3">
            <a href="https://wa.me/6287730720433" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-3 rounded-2xl bg-emerald-900/40 hover:bg-emerald-900/70 border border-emerald-800/40 transition-colors">
              <span class="text-xl">📞</span>
              <div>
                <span class="text-[10px] text-emerald-300/80 block uppercase tracking-wider font-semibold">WhatsApp Order</span>
                <span class="text-sm font-bold text-white tracking-wide">+62 877-3072-0433</span>
              </div>
            </a>

            <a href="https://instagram.com/naturae_coldpress" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-3 rounded-2xl bg-emerald-900/40 hover:bg-emerald-900/70 border border-emerald-800/40 transition-colors">
              <span class="text-xl">📷</span>
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

  <script>
    function toggleMobileNav() {
      const el = document.getElementById('mobile-nav-menu');
      if (el) el.classList.toggle('hidden');
    }
  </script>
</body>
</html>

