@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container col-xxl-8 px-4 py-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-4">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-sm mb-3">Mengubah Kesulitan Menjadi Kemudahan</h1>
                <p class="lead">Jangan biarkan kesulitan akademis menghambat impian Anda. Temukan solusi dengan Nugas ICN hari ini! Sambut tantangan dengan percaya diri dan raih prestasi Anda yang terbaik.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Konsultasi Sekarang</button>
                </div>
            </div>
            <div class="col-10 mx-auto col-sm-8 col-lg-6">
                <img src="{{ asset('img/hero.png') }}" class="d-block mx-auto img-fluid" alt="Bootstrap Themes"
                    width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <div class="container">
        <hr class="featurette-divider mb-3">
    </div>

    <div class="container marketing">
        
        <div class="row">
            <h4 class="display-6 text-center mt-2 mb-4">Keunggulan Kami</i></h4>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 140px; height: 140px;">
                        <i class="fas fa-lightbulb fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Inovatif</h2>
                <p>Menerapkan pendekatan pembelajaran yang inovatif dan berbasis teknologi untuk mengatasi kesulitan belajar dengan efektif.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 140px; height: 140px;">
                        <i class="fas fa-user-alt fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Personalisasi</h2>
                <p>Menyediakan solusi pendidikan yang disesuaikan dengan kebutuhan individu setiap siswa atau mahasiswa untuk memastikan pencapaian akademis yang maksimal.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 140px; height: 140px;">
                        <i class="fas fa-chalkboard-teacher fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Ahli</h2>
                <p>Memiliki tim tutor yang berkualifikasi tinggi dan berpengalaman dalam berbagai mata pelajaran untuk memberikan bimbingan terbaik kepada setiap pengguna.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 140px; height: 140px;">
                        <i class="fas fa-laptop fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Mudah</h2>
                <p>Memberikan akses mudah dan fleksibel melalui platform online yang dapat diakses kapan saja dan di mana saja sesuai kebutuhan pengguna.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 140px; height: 140px;">
                        <i class="fas fa-shield-alt fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Terpercaya</h2>
                <p>Dibangun dengan reputasi yang kuat sebagai mitra pendidikan yang dapat diandalkan dalam membantu siswa dan mahasiswa mengatasi tantangan akademis.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="d-flex justify-content-center"> <!-- Membuat konten menjadi tengah -->
                    <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 140px; height: 140px;">
                        <i class="fas fa-stopwatch fa-4x text-white"></i>
                    </div>
                </div>
                <h2 class="fw-normal mt-2">Efesien</h2>
                <p>Menyediakan solusi pendidikan yang efisien dan efektif, membantu siswa dan mahasiswa menghemat waktu dan energi dalam menyelesaikan tugas dan proyek akademis mereka.</p>
            </div>
        </div>

        <hr class="featurette-divider">
        
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
                        class="text-body-secondary">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                    exciting prose here.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                        fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See
                        for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea
                    of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                        fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                        class="text-body-secondary">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                    really intended to be actually read, simply here to give you a better view of what this would
                    look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                        fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

    </div>
@endsection
