<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Nugas by ICN') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'resources/css/carousel.css'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
            <div class="container container-fluid">
                <a class="navbar-brand" href="#">Nugas by ICN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ketentuan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="container">
        <p class="float-end"><a href="#">Kembali ke atas</a></p>
        <p>&copy; 2024 PT. Tugas Mudah Bermanfaat. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
        </p>
    </footer>
</body>

</html>
