@php
    $randomNumber = rand(1, 3);
    $url = asset("img/{$randomNumber}.webp");
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Google Robot --}}
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    {{-- Title --}}
    <title>@yield('title') - {{ config('app.name', 'Nugas by ICN') }} - Joki Tugas Terbaik</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/webp" href="{{ asset('img/favicon/favicon.ico') }}">

    <!-- Primary Meta Tags -->
    <meta name="title" content="@yield('title') - {{ config('app.name', 'Nugas by ICN') }} - Joki Tugas Terbaik" />
    <meta name="description"
        content="Nugas by ICN adalah platform yang menyediakan berbagai layanan penulisan seperti membuat makalah, esai, artikel, dan paper dengan kualitas terbaik dan tepat waktu." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title"
        content="@yield('title') - {{ config('app.name', 'Nugas by ICN') }} - Joki Tugas Terbaik" />
    <meta property="og:description"
        content="Nugas by ICN adalah platform yang menyediakan berbagai layanan penulisan seperti membuat makalah, esai, artikel, dan paper dengan kualitas terbaik dan tepat waktu." />
    <meta property="og:image" content="{{ asset('img/og-image.webp') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title"
        content="@yield('title') - {{ config('app.name', 'Nugas by ICN') }} - Joki Tugas Terbaik" />
    <meta property="twitter:description"
        content="Nugas by ICN adalah platform yang menyediakan berbagai layanan penulisan seperti membuat makalah, esai, artikel, dan paper dengan kualitas terbaik dan tepat waktu." />
    <meta property="twitter:image" content="{{ asset('img/og-image.webp') }}" />

    <!-- Meta Tags Generated with https://metatags.io -->

    {{-- Fonts Google Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">

    {{-- Fontawesome --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Vite loaders --}}
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
                    <img src="{{ asset('img/navbar.webp') }}" alt="Logo" class="img-fluid" width="150">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('layanan') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu bg-light text-black">
                                @foreach ($categories as $category) <li><a class="dropdown-item bg-light text-black" href="{{ route('layanan-custom', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li> @endforeach
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
                        Graha Rancamanyar,
                        Kelurahan Rancamanyar,
                        Kecamatan Baleendah,
                        Kab. Bandung, Jawa Barat, 40375
                        Indonesia
                    </p>
                    <p class="text-white">
                        <li>
                            <strong>Phone: </strong> +62 851 5502 2786
                        </li>
                        <li>
                            <strong>Email: </strong> nugas.icn@gmail.com
                        </li>
                    </p>
                </div>

                <div class="col mb-3">
                </div>

                <div class="col mb-3">
                    <h5 class="text-white">Menu</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="{{ route('landing') }}"
                                class="nav-link p-0 text-white">Beranda</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('layanan') }}"
                                class="nav-link p-0 text-white">Layanan</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('landing') }}"
                                class="nav-link p-0 text-white">Ketentuan</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('blog') }}"
                                class="nav-link p-0 text-white">Blog</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="text-white">Layanan</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a
                                href="{{ route('layanan-custom', ['slug' => 'jasa-tulis-tangan']) }}"
                                class="nav-link p-0 text-white">Jasa Tulis Tangan</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('layanan-custom', ['slug' => 'jasa-ketik']) }}"
                                class="nav-link p-0 text-white">Jasa Ketik</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('layanan-custom', ['slug' => 'makalah']) }}"
                                class="nav-link p-0 text-white">Makalah</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('layanan-custom', ['slug' => 'essay']) }}"
                                class="nav-link p-0 text-white">Essay</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="text-white">Layanan</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Jasa Tulis
                                Tangan</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Jasa Ketik</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Makalah</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Essay</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 pb-2 mt-4 mb-0 border-top">
                <p class="text-white">© 2024 {{ config('app.name', 'Nugas by ICN') }}, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/661f87e8a0c6737bd12ce285/1hrlilpgg';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L02GFZQ21V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-L02GFZQ21V');
    </script>

    </body>

</html>
