<header class="sticky top-0 z-50 bg-[#FAF6EE]/95 backdrop-blur-md border-b border-emerald-950/5 py-3.5 shadow-xs">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between">
      
      <!-- Logo & Brand -->
      <a href="{{ url('/') }}" class="flex items-center gap-3 group">
        <img src="{{ asset('assets/naturae-logo.webp') }}?v={{ file_exists(public_path('assets/naturae-logo.webp')) ? filemtime(public_path('assets/naturae-logo.webp')) : time() }}" alt="Naturae Logo" class="w-10 h-10 object-contain shadow-xs group-hover:scale-105 transition-transform select-none">
        <div class="flex flex-col">
          <span class="font-header text-2xl tracking-normal text-naturae-darkgreen group-hover:text-naturae-red transition-colors leading-none">
            Naturae  
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

