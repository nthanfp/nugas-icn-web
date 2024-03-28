@extends('layouts.app')

@section('title', 'Jasa Ketik')

@section('content')
    <div class="head-title d-flex justify-content-center align-items-center pt-5 mt-4" style="height: 200px">
        <h3 class="display-3 fw-bolder text-white text-center" style="text-shadow: 2px 2px 4px rgba(56, 56, 56, 0.5);">Jasa
            Ketik</h3>
    </div>

    {{-- Deskripsi Layanan --}}
    <section id="Deskripsi">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p style="text-align: justify;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore placeat illo eius pariatur corporis
                        voluptatum accusamus voluptatem quaerat magnam excepturi! Fuga labore voluptate explicabo quas,
                        libero
                        est, sunt in ab exercitationem incidunt delectus ipsam. Autem cupiditate error qui alias repellendus
                        eos
                        possimus temporibus amet excepturi aspernatur perferendis nostrum, optio voluptatum. Laboriosam hic
                        vero
                        amet adipisci veritatis nemo sunt voluptatibus quibusdam minima magni corrupti corporis, veniam,
                        eligendi asperiores, ratione alias eveniet voluptates neque nihil. Quam cumque officia omnis ratione
                        consequatur perferendis voluptas voluptatem illum impedit alias blanditiis ipsam, neque id
                        praesentium
                        dolorum aut sed, dignissimos nobis! Autem sapiente iusto ducimus doloremque.
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

    {{-- Harga Layanan --}}
    <section id="Deskripsi">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <h6 class="display-6 fw-bolder text-center text-success mt-2 mb-2" style="text-shadow: 2px 2px 2px rgba(56, 56, 56, 0.2);">Harga Layanan</h6>
                <div class="col-md-10">
                    <p style="text-align: justify;">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa exercitationem minima nostrum! Earum optio, reprehenderit iure pariatur consequuntur adipisci?
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Barang A</td>
                                    <td>100.000</td>
                                    <td>Pcs</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Barang B</td>
                                    <td>150.000</td>
                                    <td>Pcs</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Barang C</td>
                                    <td>75.000</td>
                                    <td>Pcs</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                    
                    <p style="text-align: justify;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore placeat illo eius pariatur corporis
                        voluptatum accusamus voluptatem quaerat magnam excepturi! Fuga labore voluptate explicabo quas,
                        libero
                        est, sunt in ab exercitationem incidunt delectus ipsam. Autem cupiditate error qui alias repellendus
                        eos
                        possimus temporibus amet excepturi aspernatur perferendis nostrum, optio voluptatum. Laboriosam hic
                        vero
                        amet adipisci veritatis nemo sunt voluptatibus quibusdam minima magni corrupti corporis, veniam,
                        eligendi asperiores, ratione alias eveniet voluptates neque nihil. Quam cumque officia omnis ratione
                        consequatur perferendis voluptas voluptatem illum impedit alias blanditiis ipsam, neque id
                        praesentium
                        dolorum aut sed, dignissimos nobis! Autem sapiente iusto ducimus doloremque.
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
