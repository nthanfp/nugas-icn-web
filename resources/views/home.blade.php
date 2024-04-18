@extends('layouts.app')

@section('title', 'Jasa Joki Tugas Murah')

@section('content')
    <div class="bg-success pt-4">
        <div class="container col-xxl-8 px-4 pt-4 pb-0">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-4">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-sm mb-3 text-white">Mengubah Kesulitan Menjadi Kemudahan</h1>
                    <p class="lead text-white">Jangan biarkan kesulitan akademis menghambat impian Anda. Temukan solusi
                        dengan Nugas ICN
                        hari ini! Sambut tantangan dengan percaya diri dan raih prestasi Anda yang terbaik.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="https://wa.me/6285155022786">
                            <button type="button" class="btn bg-white btn-lg px-4 me-md-2"><i class="fa-regular fa-message"></i> Konsultasi Sekarang</button>
                        </a>
                    </div>
                </div>
                <div class="col-10 mx-auto col-sm-8 col-lg-6">
                    <img src="{{ asset('img/hero2.png') }}" class="d-block mx-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#02b875" fill-opacity="1"
            d="M0,96L30,117.3C60,139,120,181,180,197.3C240,213,300,203,360,192C420,181,480,171,540,186.7C600,203,660,245,720,218.7C780,192,840,96,900,90.7C960,85,1020,171,1080,186.7C1140,203,1200,149,1260,133.3C1320,117,1380,139,1410,149.3L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>

    <div class="container">
        <hr class="featurette-divider mt-1 mb-3">
    </div>

    {{-- Keunggulan Layanan --}}
    <section id="Keunggulan">
        <div class="container">
            <div class="row">
                <h4 class="display-6 fw-bolder fw-bolder text-center mt-2 mb-4"><span class="text-success">Keunggulan</span>
                    Kami</i></h4>
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                        <div class="rounded-circle bg-success d-flex justify-content-center align-items-center"
                            style="width: 140px; height: 140px;">
                            <i class="fas fa-lightbulb fa-4x text-white"></i>
                        </div>
                    </div>
                    <h2 class="fw-normal mt-2">Inovatif</h2>
                    <p>Menerapkan pendekatan pembelajaran yang inovatif dan berbasis teknologi untuk mengatasi kesulitan
                        belajar
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
                    <p>Memberikan akses mudah dan fleksibel melalui platform online yang dapat diakses kapan saja dan di
                        mana
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
                    <p>Dibangun dengan reputasi yang kuat sebagai mitra pendidikan yang dapat diandalkan dalam membantu
                        siswa
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
                    <p>Menyediakan solusi pendidikan yang efisien dan efektif, membantu siswa dan mahasiswa menghemat waktu
                        dan
                        energi dalam menyelesaikan tugas dan proyek akademis mereka.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Produk Layanan --}}
    <section id="Produk">
        <div class="container">
            <hr class="featurette-divider mt-4 mb-3">
            <div class="row justify-content-center">
                <h4 class="display-6 fw-bolder text-center mt-0 mb-1"><span class="text-success">Produk</span> Kami</i></h4>
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
                                            <a href="https://wa.me/6285155022786" class="btn btn-sm btn-success"><i
                                                class="fas fa-shopping-cart"></i> Pesan</i></a>
                                            <a href="https://wa.me/6285155022786" class="btn btn-sm btn-primary"><i
                                                    class="fas fa-message"></i>
                                                Konsultasi</a>
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
                                    <p class="card-text" style="text-align: justify">Menghemat waktu diskusi dan jadwal
                                        bagi
                                        mahasiswa dengan menyelesaikan tugas kelompok mereka.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="https://wa.me/6285155022786" class="btn btn-sm btn-success"><i
                                                class="fas fa-shopping-cart"></i> Pesan</i></a>
                                            <a href="https://wa.me/6285155022786" class="btn btn-sm btn-primary"><i
                                                    class="fas fa-message"></i>
                                                Konsultasi</a>
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

    {{-- Testimoni --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#dbfaef" fill-opacity="1"
            d="M0,288L30,261.3C60,235,120,181,180,149.3C240,117,300,107,360,117.3C420,128,480,160,540,170.7C600,181,660,171,720,181.3C780,192,840,224,900,218.7C960,213,1020,171,1080,160C1140,149,1200,171,1260,154.7C1320,139,1380,85,1410,58.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
        </path>
    </svg>
    <section id="Testimoni" class="pb-4" style="background-color:#dbfaef;">
        <div class="container">
            <div class="row justify-content-center">
                <h4 class="display-6 fw-bolder text-center mt-0 mb-0"><span class="text-success">Testimoni</span> Nugas
                    ICN</i></h4>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card p-3 shadow text-center px-4">
                            <div class="user-image">
                                <img src="https://api.dicebear.com/8.x/pixel-art/svg?seed=John" class="rounded-circle" width="80">
                            </div>
                            <div class="user-content">
                                <h5 class="mb-0 mt-2">Foden</h5>
                                <span>Mahasiswa</span>
                                <p>Nugas ICN sangat membantu saya mengatasi tugas-tugas sulit. Saya bisa fokus dan mendapat
                                    nilai yang lebih baik sekarang.</p>
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
                        <div class="card p-3 shadow text-center px-4">
                            <div class="user-image">
                                <img src="https://api.dicebear.com/8.x/pixel-art/svg?seed=Tama" class="rounded-circle" width="80">
                            </div>
                            <div class="user-content">
                                <h5 class="mb-0 mt-2">Tama</h5>
                                <span>Mahasiswa</span>
                                <p>Joki Tugas Kelompok dari Nugas ICN sangat membantu saya. Kami dapat menyelesaikan proyek
                                    dengan cepat dan hasilnya luar biasa!</p>
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
                        <div class="card p-3 shadow text-center px-4">
                            <div class="user-image">
                                <img src="https://api.dicebear.com/8.x/pixel-art/svg?seed=Albert" class="rounded-circle" width="80">
                            </div>
                            <div class="user-content">
                                <h5 class="mb-0 mt-2">Alberto</h5>
                                <span>Siswa</span>
                                <p>Menghadapi ujian tanpa stres berkat bantuan Joki Quiz dari Nugas ICN. Terima kasih telah
                                    membantu saya meraih nilai yang baik!</p>

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
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#dbfaef" fill-opacity="1"
            d="M0,64L40,85.3C80,107,160,149,240,181.3C320,213,400,235,480,213.3C560,192,640,128,720,117.3C800,107,880,149,960,176C1040,203,1120,213,1200,224C1280,235,1360,245,1400,250.7L1440,256L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
        </path>
    </svg>

    {{-- CTA --}}
    <section id="Call-To-Action">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('img/cta.png') }}" class="d-block mx-lg-auto img-fluid rounded-3"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Harga mulai 25 ribuan!</h1>
                    <p class="lead">Nugas ICN menawarkan layanan Joki Tugas dengan harga yang terjangkau bagi pelajar dan
                        mahasiswa. Kami memulai biaya pengerjaan tugas dari harga 25 ribu saja. Dapatkan nilai yang
                        memuaskan tanpa membuat dompet Anda kosong. Ayo segera cek harga tugas Anda sekarang!</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Cek Harga Tugas
                            Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="How-To-Order">
        <div class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="d-flex flex-column align-items-start gap-2">
                    <h3 class="fw-bold">Bagaimana Cara Ordernya?</h3>
                    <p class="text-muted">Kamu masih bingung bagaimana cara order jasa joki pembuatan tugas di SKIPNUGAS?
                        Jangan khawatir! Kamu bisa menggunakan jasa jokipengerjaan tugas kami dengan sangat mudah dan cepat.
                        Silahkan baca tutorial berikut.</p>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-primary bg-gradient fs-4 rounded-3">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4 class="fw-semibold mb-0">Featured title</h4>
                        <p class="text-muted">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                    <div class="d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-primary bg-gradient fs-4 rounded-3">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h4 class="fw-semibold mb-0">Featured title</h4>
                        <p class="text-muted">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                    <div class="d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-primary bg-gradient fs-4 rounded-3">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h4 class="fw-semibold mb-0">Featured title</h4>
                        <p class="text-muted">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                    <div class="d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-primary bg-gradient fs-4 rounded-3">
                            <i class="fas fa-table"></i>
                        </div>
                        <h4 class="fw-semibold mb-0">Featured title</h4>
                        <p class="text-muted">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    </div>
@endsection
