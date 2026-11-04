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
  @include('partials.navbar.navbar')

  <!-- ================= MAIN CONTENT ================= -->
  <main class="flex-1">
    @yield('content')
  </main>

  <!-- ================= MASTER FOOTER ================= -->
  @include('partials.footer.footer')

  <script>
    function toggleMobileNav() {
      const el = document.getElementById('mobile-nav-menu');
      if (el) el.classList.toggle('hidden');
    }
  </script>
</body>
</html>

