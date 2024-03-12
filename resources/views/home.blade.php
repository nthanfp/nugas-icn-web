@extends('layouts.app')

@section('title', 'Jasa Joki Tugas Murah')

@section('content')
    <div class="bg-success">
        <div class="container col-xxl-8 px-4 py-4">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-4">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-sm mb-3 text-white">Mengubah Kesulitan Menjadi Kemudahan</h1>
                    <p class="lead text-white">Jangan biarkan kesulitan akademis menghambat impian Anda. Temukan solusi dengan Nugas ICN
                        hari ini! Sambut tantangan dengan percaya diri dan raih prestasi Anda yang terbaik.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn bg-white btn-lg px-4 me-md-2">Konsultasi Sekarang</button>
                    </div>
                </div>
                <div class="col-10 mx-auto col-sm-8 col-lg-6">
                    <img src="{{ asset('img/hero2.png') }}" class="d-block mx-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#02b875" fill-opacity="1" d="M0,96L30,117.3C60,139,120,181,180,197.3C240,213,300,203,360,192C420,181,480,171,540,186.7C600,203,660,245,720,218.7C780,192,840,96,900,90.7C960,85,1020,171,1080,186.7C1140,203,1200,149,1260,133.3C1320,117,1380,139,1410,149.3L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>

    <div class="container">
        <hr class="featurette-divider mt-1 mb-3">
    </div>

    <div class="container marketing">

        {{-- Keunggulan Layanan --}}
        <div class="row">
            <h4 class="display-6 text-center mt-2 mb-4">Keunggulan Kami</i></h4>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                        style="width: 140px; height: 140px;">
                        <i class="fas fa-lightbulb fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Inovatif</h2>
                <p>Menerapkan pendekatan pembelajaran yang inovatif dan berbasis teknologi untuk mengatasi kesulitan belajar
                    dengan efektif.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                        style="width: 140px; height: 140px;">
                        <i class="fas fa-user-alt fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Personalisasi</h2>
                <p>Menyediakan solusi pendidikan yang disesuaikan dengan kebutuhan individu setiap siswa atau mahasiswa
                    untuk memastikan pencapaian akademis yang maksimal.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                        style="width: 140px; height: 140px;">
                        <i class="fas fa-chalkboard-teacher fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Ahli</h2>
                <p>Memiliki tim tutor yang berkualifikasi tinggi dan berpengalaman dalam berbagai mata pelajaran untuk
                    memberikan bimbingan terbaik kepada setiap pengguna.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                        style="width: 140px; height: 140px;">
                        <i class="fas fa-laptop fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Mudah</h2>
                <p>Memberikan akses mudah dan fleksibel melalui platform online yang dapat diakses kapan saja dan di mana
                    saja sesuai kebutuhan pengguna.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                        style="width: 140px; height: 140px;">
                        <i class="fas fa-shield-alt fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Terpercaya</h2>
                <p>Dibangun dengan reputasi yang kuat sebagai mitra pendidikan yang dapat diandalkan dalam membantu siswa
                    dan mahasiswa mengatasi tantangan akademis.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                        style="width: 140px; height: 140px;">
                        <i class="fas fa-stopwatch fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Efesien</h2>
                <p>Menyediakan solusi pendidikan yang efisien dan efektif, membantu siswa dan mahasiswa menghemat waktu dan
                    energi dalam menyelesaikan tugas dan proyek akademis mereka.</p>
            </div>
        </div>

        {{-- Produk Layanan --}}
        <hr class="featurette-divider mt-4 mb-3">
        <div class="row justify-content-center">
            <h4 class="display-6 text-center mt-0 mb-1">Produk Kami</i></h4>
            <div class="row justify-content-center">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 g-3">
                    <div class="col">
                        <div class="card shadow-sm border-success">
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
                                        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-message"></i>
                                            Konsultasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm border-success">
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
                                        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-message"></i>
                                            Konsultasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm border-success">
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
                        <div class="card shadow-sm border-success">
                            <img src="{{ asset('img/Ujian.png') }}" class="bd-placeholder-img card-img-top"
                                alt="Thumbnail">
                            <div class="card-body">
                                <p class="fs-4 fw-bold">Quiz & Ujian</p>
                                <p class="card-text" style="text-align: justify">Membantu siswa & mahasiswa menghadapi ujian
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

        {{-- Testimoni --}}
        <hr class="featurette-divider mt-4 mb-3">
        <div class="row justify-content-center">
            <h4 class="display-6 text-center mt-0 mb-0">Testimoni</i></h4>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="border-success card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="https://i.imgur.com/PKHvlRS.jpg" class="rounded-circle" width="80">
                        </div>
                        <div class="user-content">
                            <h5 class="mb-0 mt-2">Bruce Hardy</h5>
                            <span>Mahasiswa</span>
                            <p>Nugas ICN sangat membantu saya mengatasi tugas-tugas sulit. Saya bisa fokus dan mendapat nilai yang lebih baik sekarang.</p>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-secondary"></i>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="border-success card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="https://i.imgur.com/w2CKRB9.jpg" class="rounded-circle" width="80">
                        </div>
                        <div class="user-content">
                            <h5 class="mb-0 mt-2">Mark Smith</h5>
                            <span>Mahasiswa</span>
                            <p>Joki Tugas Kelompok dari Nugas ICN sangat membantu saya. Kami dapat menyelesaikan proyek dengan cepat dan hasilnya luar biasa!</p>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="border-success card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80">
                        </div>
                        <div class="user-content">
                            <h5 class="mb-0 mt-2">Veera Duncan</h5>
                            <span>Siswa</span>
                            <p>Menghadapi ujian tanpa stres berkat bantuan Joki Quiz dari Nugas ICN. Terima kasih telah membantu saya meraih nilai yang baik!</p>
    
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-success"></i>
                            <i class="fa fa-star text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
