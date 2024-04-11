@php
    $randomNumber = rand(1, 3);
    $url = asset("img/{$randomNumber}.png");
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Nugas by ICN adalah platform yang menyediakan berbagai layanan penulisan seperti membuat makalah, esai, artikel, dan paper dengan kualitas terbaik dan tepat waktu.">
    <meta name="keywords" content="Nugas, ICN, penulisan, makalah, esai, artikel, paper, jasa penulisan">
    <meta name="author" content="Nugas by ICN">
    <title>@yield('title') - {{ config('app.name', 'Nugas by ICN') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon.ico') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'resources/css/blog.css'])
    <style>
        .head-title {
            position: relative;
            padding: 20px;
            display: inline-block;
            background-image: linear-gradient(rgba(2, 184, 117, 0.5), rgba(2, 184, 117, 0.5)), url({{ $url }});
            /* Gradient overlay diikuti oleh gambar latar belakang */
            background-size: cover;
        }

        .feature-icon {
            width: 4rem;
            height: 4rem;
            border-radius: .75rem;
        }

        .icon-link>.bi {
            margin-top: .125rem;
            margin-left: .125rem;
            fill: currentcolor;
            transition: transform .25s ease-in-out;
        }

        .icon-link:hover>.bi {
            transform: translate(.25rem);
        }

        .icon-square {
            width: 3rem;
            height: 3rem;
            border-radius: .75rem;
        }

        .text-shadow-1 {
            text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25);
        }

        .text-shadow-2 {
            text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25);
        }

        .text-shadow-3 {
            text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25);
        }

        .card-cover {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .feature-icon-small {
            width: 3rem;
            height: 3rem;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .dropdown-item.bg-light.text-black:hover {
            background-color: #28a745;
            /* Warna hijau (success) saat hover */
            color: #fff;
            /* Warna teks putih saat hover */
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-success" data-bs-theme="dark">
            <div class="container container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/navbar.png') }}" alt="Logo" class="img-fluid" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('landing') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('layanan') }}">Layanan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('layanan') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu bg-light text-black">
                                @foreach ($categories as $category)
                                <li><a class="dropdown-item bg-light text-black" href="{{ route('layanan-custom', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li> 
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="text-white pt-5 mt-5 border-top" style="background-color: #343a40">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 ">
                <div class="col mb-3">
                    <h5 class="text-white">{{ config('app.name', 'Nugas by ICN') }}</h5>
                    <p class="text-white">
                        Jl. Surya Sumantri No. 123
                        Kelurahan Cihampelas
                        Kecamatan Coblong
                        Kota Bandung, Jawa Barat
                        Indonesia
                    </p>
                    <p class="text-white">
                        <li>
                            <strong>Phone: </strong> +62 852 5022 4211
                        </li>
                        <li>
                            <strong>Email: </strong> nugas.icn@gmail.com
                        </li>
                    </p>
                </div>

                <div class="col mb-3">
                </div>

                <div class="col mb-3">
                    <h5 class="text-white">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="text-white">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="text-white">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 pb-2 mt-4 mb-0 border-top">
                <p class="text-white">© 2022 {{ config('app.name', 'Nugas by ICN') }}, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
