<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Nugas by ICN') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
            <div class="container container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/navbar.png') }}" alt="Logo" class="img-fluid" width="190">
                </a>
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
    {{-- <footer class="container mt-4">
        <p class="float-end"><a href="#">Kembali ke atas</a></p>
        <p>&copy; 2024 PT. Tugas Mudah Bermanfaat. &middot; <a href="#">Privacy</a> &middot; <a
                href="#">Terms</a>
        </p>
    </footer> --}}
    <div class="bg-dark text-white">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-white text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-white">© 2022 Company, Inc</span>
                </div>
    
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-white" href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
                    <li class="ms-3"><a class="text-white" href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                    <li class="ms-3"><a class="text-white" href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
                </ul>            
            </footer>
        </div>
    </div>
</body>

</html>
