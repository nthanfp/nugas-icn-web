@extends('layouts.app-blog')

@section('title', 'Blog')

@section('content')
    <main class="container mt-4">
        <div class="row mb-2 g-4">
            @foreach ($posts as $post)
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('storage/' . $post->banner) }}" class="card-img-top" alt="Thumbnail">
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success">{{ $post->category->name }}</strong>
                            <h4 class="mb-0">{{ $post->title }} </h4>
                            <div class="mb-1 text-muted">{{ $post->created_at->format('d M Y') }}</div>
                            <p class="mb-2">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog-post', ['slug' => $post->slug]) }}" class="stretched-link">Lanjut
                                membaca</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </main>
@endsection
