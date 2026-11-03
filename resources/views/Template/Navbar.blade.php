<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1E4324;">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex items-center gap-2" href="{{ url('/') }}" style="color: #FAF6EE;">
            <span style="background-color: #D93829; color: white; padding: 2px 8px; border-radius: 999px; font-size: 11px;">naturae</span>
            <span>Naturae Cold Press</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto gap-2 align-items-center">
                <a class="nav-link text-white" href="{{ url('/') }}">Beranda</a>
                <a class="nav-link text-white" href="{{ url('/#produk') }}">Varian Produk</a>
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
