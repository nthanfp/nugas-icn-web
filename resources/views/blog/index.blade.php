@extends('layouts.app-blog')

@section('title', 'Blog')

@section('content')
    <main class="container mt-4">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2 g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://placehold.co/800x450/green/white" class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h4 class="mb-0">Joki Tugas Kuliah Murah & Cepat</h4>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-2">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://placehold.co/800x450/green/white" class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h4 class="mb-0">Joki Tugas Kuliah Murah & Cepat</h4>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-2">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://placehold.co/800x450/green/white" class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h4 class="mb-0">Joki Tugas Kuliah Murah & Cepat</h4>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-2">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
