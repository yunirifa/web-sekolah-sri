<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Sekolah') | {{ config('app.name') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .navbar-brand { font-weight: 700; }
        .navbar-brand img { height: 40px; width: auto; }

        .hero-section {
            position: relative;
            min-height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            background:
                linear-gradient(180deg, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.75) 100%),
                url('{{ asset('images/hero-bg.jpeg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .hero-section .container {
            position: relative;
            z-index: 1;
        }
        .hero-section h1 {
            font-size: 3.2rem;
            letter-spacing: 1px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.5);
        }
        .hero-section p {
            font-size: 1.2rem;
            max-width: 650px;
            margin: 20px auto 0;
            opacity: 0.95;
        }
        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.3);
            padding: 6px 18px;
            border-radius: 30px;
            font-size: 0.85rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 20px;
            backdrop-filter: blur(4px);
        }

        .stat-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform .2s;
        }
        .stat-card:hover { transform: translateY(-5px); }
        .card-img-top { height: 220px; object-fit: cover; }
        footer { background-color: #212529; color: #fff; padding: 40px 0; margin-top: 60px; }
        .section-title { font-weight: 700; margin-bottom: 30px; }
        .navbar { box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
    </style>

    @stack('styles')
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand text-primary d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-smk.png') }}" alt="Logo SMKN 1 Cijati">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profil*') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('profil.index') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('guru*') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('guru.index') }}">Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galeri*') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('galeri.index') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('berita*') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('berita.index') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('jurusan*') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('jurusan.index') }}">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ekstrakurikuler*') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('ekstrakurikuler.index') }}">Ekstrakurikuler</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <div class="container text-center">
        <p class="mb-1 fw-semibold">{{ config('app.name') }}</p>
        <p class="mb-0 small text-white-50">&copy; {{ date('Y') }} Seluruh hak cipta dilindungi.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>