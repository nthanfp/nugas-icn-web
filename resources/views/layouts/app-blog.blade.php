<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Simple Meta --}}
    <meta name="description" content="{{ $post->excerpt }}">
    <meta name="keywords" content="Nugas, ICN, penulisan, makalah, esai, artikel, paper, jasa penulisan">
    <meta name="author" content="Nugas by ICN">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    {{-- Open Graph --}}
    <meta name="og:title" content="{{ $post->title }}" />
    <meta name="og:type" content="article" />
    <meta name="og:url" content="{{ url()->current() }}" />
    <meta name="og:image" content="{{ asset($post->thumbnail) }}" />
    <meta name="og:site_name" content="{{ config('app.name', 'Nugas by ICN') }}" />
    <meta name="og:description" content="{{ $post->excerpt }}" />
    <meta name="og:locale" content="id_ID" />

    {{-- Title & Icon --}}
    <title>@yield('title') - {{ config('app.name', 'Nugas by ICN') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon.ico') }}">

    <title>@yield('title') - {{ config('app.name', 'Nugas by ICN') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon.ico') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'resources/css/blog.css'])
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body>
    </div>
    <div class="bg-success">
        <div class="container">
            <header class="blog-header text-white lh-1 py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="nav-link text-white d-none d-sm-none d-md-block" href="#">Subscribe</a>
                    </div>
                    <div class="col-4 text-center">
                        <img src="{{ asset('img/navbar.png') }}" alt="Logo" class="blog-header-logo img-fluid"
                            width="200">
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <div class="d-none d-sm-none d-md-flex">
                            <a class="btn btn-sm bg-white" href="#">Konsultasi Tugas</a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between" style="text-decoration: none;">
                    <a class="p-2 nav-link text-white" href="{{ route('landing') }}">Beranda</a>
                    <a class="p-2 nav-link text-white" href="{{ route('layanan') }}">Layanan</a>
                    <a class="p-2 nav-link text-white" href="{{ route('landing') }}">Ketentuan</a>
                    <a class="p-2 nav-link text-white" href="{{ route('layanan') }}">Joki Individu</a>
                    <a class="p-2 nav-link text-white" href="{{ route('layanan') }}">Joki Kelompok</a>
                    <a class="p-2 nav-link text-white" href="{{ route('layanan') }}">Joki Tugas Akhir</a>
                    <a class="p-2 nav-link text-white" href="{{ route('layanan') }}">Joki Ujian</a>
                </nav>
            </div>
        </div>
    </div>
    @yield('content')
    </main>
    <div class="container">
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="{{ route('landing') }}" class="nav-link px-2 text-muted">Beranda</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('layanan') }}" class="nav-link px-2 text-muted">Layanan</a>
                    </li>
                </ul>
                <p class="text-center text-muted">© 2024 {{ config('app.name', 'Nugas by ICN') }}</p>
            </footer>
        </div>
    </div>
</body>

</html>
