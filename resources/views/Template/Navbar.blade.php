<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #18552C;">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex items-center gap-2" href="{{ url('/') }}" style="color: #FAF6EE;">
            <img src="{{ asset('assets/naturae-logo.webp') }}" alt="Naturae Logo" style="width: 36px; height: 36px; object-fit: contain;">
            <span class="font-header" style="font-family: 'Keep on Truckin', cursive; font-size: 24px; line-height: 1;">Naturae</span>
            <span style="font-family: 'Urbanist', sans-serif; font-size: 12px; font-weight: 700; opacity: 0.9; text-transform: uppercase; letter-spacing: 0.05em;">Cold Press</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto gap-2 align-items-center">
                <a class="nav-link text-white" href="{{ url('/') }}">Beranda</a>
                <a class="nav-link text-white" href="{{ route('products') }}">Products</a>
                <a class="nav-link text-warning fw-bold" href="{{ url('/#pesan') }}">🛒 Pesan Sekarang</a>
                <a class="nav-link text-white-50" href="{{ url('/about_us') }}">About Us</a>
                <a class="nav-link text-white-50" href="{{ url('/Story') }}">Our Story</a>
                <a class="nav-link text-white-50" href="{{ url('/Blog') }}">Blog</a>
                <a class="nav-link text-white-50" href="{{ url('/GetInTouch') }}">Get in Touch</a>
                <a class="btn btn-sm btn-danger rounded-pill px-3 ms-lg-2 fw-bold" href="{{ url('/#pesan') }}">Order (WA)</a>
            </div>
        </div>
    </div>
</nav>
