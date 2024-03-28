@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <div class="head-title d-flex justify-content-center align-items-center pt-5 mt-4" style="height: 200px">
        <h3 class="display-3 fw-bolder text-white text-center" style="text-shadow: 2px 2px 4px rgba(56, 56, 56, 0.5);">Layanan
            Kami</h3>
    </div>

    {{-- Produk Layanan --}}
    <section id="Produk">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <h4 class="display-6 fw-bolder text-center mt-0 mb-1">Jenis <span class="text-success">Produk</span> Kami</i>
                </h4>
                <div class="row justify-content-center">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 g-3">
                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ asset('img/Individu.png') }}" class="bd-placeholder-img card-img-top"
                                    alt="Thumbnail">
                                <div class="card-body">
                                    <p class="fs-4 fw-bold">Tugas Individu</p>
                                    <p class="card-text" style="text-align: justify">Mengurangi beban dan stres bagi
                                        mahasiswa dengan menyelesaikan tugas-tugas individu mingguan.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-success"><i
                                                    class="fas fa-shopping-cart"></i> Pesan</button>
                                            <button type="button" class="btn btn-sm btn-primary"><i
                                                    class="fas fa-message"></i>
                                                Konsultasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ asset('img/Kelompok.png') }}" class="bd-placeholder-img card-img-top"
                                    alt="Thumbnail">
                                <div class="card-body">
                                    <p class="fs-4 fw-bold">Tugas Kelompok</p>
                                    <p class="card-text" style="text-align: justify">Menghemat waktu diskusi dan jadwal bagi
                                        mahasiswa dengan menyelesaikan tugas kelompok mereka.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-success"><i
                                                    class="fas fa-shopping-cart"></i> Pesan</button>
                                            <button type="button" class="btn btn-sm btn-primary"><i
                                                    class="fas fa-message"></i>
                                                Konsultasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ asset('img/Tugas-Akhir.png') }}" class="bd-placeholder-img card-img-top"
                                    alt="Thumbnail">
                                <div class="card-body">
                                    <p class="fs-4 fw-bold">Tugas Akhir</p>
                                    <p class="card-text" style="text-align: justify">Membantu mahasiswa dalam
                                        menyelesaikan tugas akhir mereka untuk mendapatkan nilai yang baik.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-success"><i
                                                    class="fas fa-shopping-cart"></i> Pesan</button>
                                            <button type="button" class="btn btn-sm btn-primary"><i
                                                    class="fas fa-message"></i> Konsultasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ asset('img/Ujian.png') }}" class="bd-placeholder-img card-img-top"
                                    alt="Thumbnail">
                                <div class="card-body">
                                    <p class="fs-4 fw-bold">Quiz & Ujian</p>
                                    <p class="card-text" style="text-align: justify">Membantu siswa & mahasiswa menghadapi
                                        ujian
                                        dan kuis tanpa kepanikan karena deadline dan mendapatkan nilai.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-success"><i
                                                    class="fas fa-shopping-cart"></i> Pesan</button>
                                            <button type="button" class="btn btn-sm btn-primary"><i
                                                    class="fas fa-message"></i> Konsultasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="Layanan">
        <div class="container mt-3">
            <div class="row justify-content-center py-5">
                <div class="col-md-4 card bg-white shadow py-2 px-2">
                    <div class="col d-flex align-items-start">
                        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 bg-success">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                        <div>
                            <h3 class="fs-3 text-success">Tugas Makalah</h3>
                            <p>Butuh bantuan dalam menyelesaikan tugas makalah Anda? Kami siap membantu dengan kualitas terbaik dan pengiriman tepat waktu.</p>
                            <a href="#" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 bg-success">
                        <i class="fas fa-pen text-white"></i>
                    </div>
                    <div>
                        <h3 class="fs-3 text-success">Tugas Essay</h3>
                        <p>Membutuhkan bantuan dalam menyusun esai? Tim kami siap membantu dengan ide kreatif dan penulisan yang menarik dan memuaskan.</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 bg-success">
                        <i class="fas fa-scroll text-white"></i>
                    </div>
                    <div>
                        <h3 class="fs-3 text-success">Tugas Paper</h3>
                        <p>Membutuhkan bantuan dalam menulis paper atau artikel ilmiah? Tim ahli kami akan membantu dengan penelitian mendalam dan analisis komprehensif.</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>            
        </div>
    </section> --}}

    <div class="container">
        {{-- <hr class="featurette-divider mt-1 mb-3"> --}}
    </div>

    </div>
@endsection
