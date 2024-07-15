@extends('layouts.app')

@section('title', 'Jasa Ketik')

@section('content')
    <div class="head-title d-flex justify-content-center align-items-center pt-5 mt-4" style="height: 200px">
        <h3 class="display-3 fw-bolder text-white text-center" style="text-shadow: 2px 2px 4px rgba(56, 56, 56, 0.5);">
            {{ $jokiCategory->name }}</h3>
    </div>

    {{-- Deskripsi Layanan --}}
    <section id="Deskripsi">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p style="text-align: justify;">{{ $jokiCategory->description }}</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <hr class="featurette-divider my-2">
            </div>
        </div>
    </div>

    {{-- Harga Layanan --}}
    <section id="Deskripsi">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <h4 class="display-6 fw-bolder fw-bolder text-center mt-2 mb-4"
                    style="text-shadow: 2px 2px 2px rgba(56, 56, 56, 0.2);"><span class="text-success">Harga</span>
                    Layanan</i></h4>
                <div class="col-md-10">
                    <p style="text-align: justify;">
                        Berikut adalah daftar harga untuk layanan yang kami sediakan. Dengan harga yang kompetitif dan
                        kualitas terjamin, kami siap membantu Anda menyelesaikan berbagai tugas akademik dan proyek dengan
                        sempurna.
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" width="20px">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jokiCategory->prices as $index => $servicePrice)
                                    <tr>
                                        <th scope="row" class="text-center">{{ $index + 1 }}</th>
                                        <td>{{ $servicePrice->name }}</td>
                                        <td>Rp {{ number_format($servicePrice->price, 0, ',', '.') }}</td>
                                        <td>{{ $servicePrice->unit }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <p style="text-align: justify;">
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <hr class="featurette-divider my-2">
            </div>
        </div>
    </div>

    {{-- Portofolio Layanan --}}
    <section id="Deskripsi">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <h4 class="display-6 fw-bolder fw-bolder text-center mt-2 mb-4"
                    style="text-shadow: 2px 2px 2px rgba(56, 56, 56, 0.2);"><span class="text-success">Portofolio</span>
                    Layanan</i></h4>
                <div class="col-md-10">
                    <p style="text-align: justify;">
                        Portofolio layanan kami menampilkan beberapa contoh pekerjaan kami sebelumnya. Dari desain yang
                        inovatif hingga implementasi yang sukses, kami telah membantu berbagai klien mencapai tujuan mereka.
                        Lihatlah beberapa contoh di bawah ini untuk mendapatkan gambaran lebih jelas tentang layanan kami.
                    </p>
                    </p>
                    <div class="row row-cols-1 row-cols-md-3 g-3 mb-3">
                        <div class="col">
                            <iframe src="https://drive.google.com/file/d/1n00_q2HEWCxrD6xzVqMT3TTaM72VVA3b/preview" height="400" allow="autoplay"></iframe>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="https://placehold.co/300x200/blue/white" class="bd-placeholder-img card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">Another wider card with supporting text below as a natural lead-in
                                        to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="https://placehold.co/300x200/red/white" class="bd-placeholder-img card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">Yet another wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p style="text-align: justify;">
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <hr class="featurette-divider my-2">
            </div>
        </div>
    </div>

    </div>
@endsection
