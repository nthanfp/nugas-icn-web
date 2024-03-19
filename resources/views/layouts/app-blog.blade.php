<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Nugas by ICN') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
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
    <div class="bg-success">
        <div class="container">
            <header class="blog-header text-white lh-1 py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="nav-link text-white d-none d-sm-none d-md-block" href="#">Subscribe</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-white"
                            href="#">{{ config('app.name', 'Nugas by ICN') }}</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <div class="d-none d-sm-none d-md-flex">
                            <a class="link-secondary" href="#" aria-label="Search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                                    <title>Search</title>
                                    <circle cx="10.5" cy="10.5" r="7.5"></circle>
                                    <path d="M21 21l-5.2-5.2"></path>
                                </svg>
                            </a>
                            <a class="btn btn-sm bg-white" href="#">Konsultasi Tugas</a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between" style="text-decoration: none;">
                    <a class="p-2 nav-link text-white" href="#">World</a>
                    <a class="p-2 nav-link text-white" href="#">U.S.</a>
                    <a class="p-2 nav-link text-white" href="#">Technology</a>
                    <a class="p-2 nav-link text-white" href="#">Design</a>
                    <a class="p-2 nav-link text-white" href="#">Culture</a>
                    <a class="p-2 nav-link text-white" href="#">Business</a>
                    <a class="p-2 nav-link text-white" href="#">Politics</a>
                    <a class="p-2 nav-link text-white" href="#">Opinion</a>
                    <a class="p-2 nav-link text-white" href="#">Science</a>
                    <a class="p-2 nav-link text-white" href="#">Health</a>
                    <a class="p-2 nav-link text-white" href="#">Style</a>
                    <a class="p-2 nav-link text-white" href="#">Travel</a>
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
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
                <p class="text-center text-muted">© 2022 Company, Inc</p>
            </footer>
        </div>
    </div>
</body>

</html>
