@extends('layouts.app-blog')

@section('title', 'Blog')

@section('content')
    <main class="container mt-4">
        <div class="row g-5">
            <div class="col-md-8">
                <article class="blog-post">
                    <img class="img-fluid rounded-2" src="{{ asset('storage/' . $post->banner) }}">
                    <h3 class="blog-post-title mt-2 mb-1">{{ $post->title }}</h3>
                    <p class="blog-post-meta">
                        {{ $post->created_at->format('F d, Y') }} by <a href="#">{{ $post->author->name }}</a>
                    </p>

                    <p style="text-align: justify;">{!! $post->content !!}</p>
                </article>

                <nav class="blog-pagination" aria-label="Pagination">
                    {{-- <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a> --}}
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Nugas by ICN adalah platform yang menyediakan berbagai layanan penulisan seperti
                            membuat makalah, esai, artikel, dan paper dengan kualitas terbaik dan tepat waktu.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            @foreach ($archives as $monthYear => $posts)
                                <li>
                                    <a href="#">{{ $monthYear }}</a>
                                    <ul>
                                        @foreach ($posts as $post)
                                            <li>
                                                <a href="{{ route('blog-post', $post->slug) }}">{{ $post->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Kontak Kami</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
