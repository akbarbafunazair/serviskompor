@include('partials.navbar')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{ asset('carserv/img/sumpal.jpg') }});">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<style>
    .service-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        background: #fff;
        padding: 40px 32px 32px 32px;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(60,60,60,.04);
        transition:box-shadow .15s;
    }
    .service-icon {
        font-size: 3rem;
        color: #ff0000;
        margin-bottom: 24px;
    }
    .service-card h5 {
        margin-bottom: 16px;
        font-weight: 700;
        font-size: 1.24rem;
    }
    .service-card p {
        flex: 1 1 auto;
        text-align: justify;
        margin-bottom: 0;
        min-height: 110px;
    }
    .service-link {
        margin-top: 24px;
        align-self: flex-start;
        font-weight: 500;
        color: #6c757d;
        text-decoration: none;
        border-bottom: 1.5px solid #6c757d;
        transition: color 0.15s, border-color 0.15s;
    }
    .service-link:hover {
        color: #ff0000;
        border-color: #ff0000;
        text-decoration: none;
    }
    @media (max-width: 991.98px) {
        .service-card {
            padding: 32px 16px;
        }
    .testimonial-item {
    background: none !important;
    padding: 0 !important;
    box-shadow: none !important;
}
    }
</style>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card h-100">
                    <div class="service-icon text-center">
                        <i class="fa fa-certificate"></i>
                    </div>
                    <h5>Layanan Servis Berkualitas</h5>
                    <p>
                        Kami menyediakan layanan servis kompor gas dan water heater dengan standar tinggi. 
                        Mulai dari perbaikan kompor yang tidak menyala, api kecil, bau gas, hingga water heater yang tidak panas. 
                        Setiap pekerjaan dilakukan langsung oleh teknisi ahli untuk memastikan kualitas dan keamanan terbaik bagi Anda.
                    </p>
                    <a class="service-link" href="{{ route('contact') }}">Hubungi Kami</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card h-100 bg-light">
                    <div class="service-icon text-center">
                        <i class="fa fa-users-cog"></i>
                    </div>
                    <h5>Teknisi Ahli Berpengalaman</h5>
                    <p>
                        Tim kami berpengalaman menangani berbagai merek kompor dan water heater seperti Modena, Rinnai, Ariston, dan banyak lagi. 
                        Setiap pemeriksaan dilakukan secara menyeluruh dengan pengerjaan yang teliti, serta selalu mengutamakan penggunaan sparepart original untuk hasil yang optimal.
                    </p>
                    <a class="service-link" href="{{ route('contact') }}">Hubungi Kami</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card h-100">
                    <div class="service-icon text-center">
                        <i class="fa fa-tools"></i>
                    </div>
                    <h5>Peralatan Lengkap & Modern</h5>
                    <p>
                        Kami menggunakan peralatan servis yang lengkap dan modern untuk memastikan seluruh proses perbaikan berjalan lancar dan maksimal. 
                        Dari pengecekan kebocoran gas hingga penggantian komponen penting, semua dilakukan sesuai standar keamanan demi kenyamanan Anda.
                    </p>
                    <a class="service-link" href="{{ route('contact') }}">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/4.jpeg') }}" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, 0.38); border-radius: 8px;">
                        <h1 class="display-4 mb-0">
                            <span style="color: #dc3545;">10</span> 
                            <span class="fs-4 text-white">Tahun</span>
                        </h1>
                        <h4 class="text-white">Berpengalaman</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// Tentang Kami //</h6>
                <h1 class="mb-4"><span class="text-primary">GasHome</span> Adalah Jasa Servis Kompor Gas & Water Heater Terpercaya di Jabodetabek</h1>
                <p class="mb-4" style="text-align: justify; text-justify: inter-word;">GasHome menyediakan layanan servis kompor gas dan water heater panggilan untuk area Jakarta, Bogor, Depok, Tangerang, dan Bekasi. Kami menangani berbagai kerusakan seperti kompor tidak menyala, api kecil, bau gas, water heater tidak panas, error, hingga penggantian sparepart. Dengan teknisi berpengalaman lebih dari 15 tahun dan peralatan lengkap, kami memastikan setiap perbaikan aman, cepat, dan bergaransi.</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6 style="">Profesional & Berpengalaman</h6>
                                <span style="text-align: justify; display: block; text-justify: inter-word;">Teknisi ahli dalam menangani servis kompor gas, water heater gas maupun listrik, serta pengecekan kebocoran gas. Sudah berpengalaman memperbaiki berbagai merek seperti Rinnai, Modena, Ariston, Electrolux, dan lainnya.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6 style="">Pelayanan Cepat & Berkualitas</h6>
                                <span style="text-align: justify; display: block; text-justify: inter-word;">Kami mengutamakan kualitas servis dengan standar tinggi. Pemeriksaan dilakukan secara menyeluruh, hasil perbaikan rapi, dan menggunakan sparepart original untuk memastikan usia pakai lebih panjang.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6 style="">Teknisi Terpercaya & Bergaransi</h6>
                                <span style="text-align: justify; display: block; text-justify: inter-word;">Setiap pekerjaan ditangani oleh teknisi bersertifikat dan menggunakan metode servis yang aman. Kami memberikan garansi untuk setiap layanan agar pelanggan merasa nyaman dan percaya.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/contact') }}" class="btn btn-primary py-3 px-5" style="">Hubungi Kami<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

    <style>
        .gallery-img-wrapper {
            width: 100%;
            aspect-ratio: 4/3;
            overflow: hidden;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 12px;
            background: #eee;
        }
        @media (max-width: 576px) {
            .gallery-img-wrapper {
                aspect-ratio: 1/1;
            }
        }
    </style>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Galeri //</h6>
                <h1 class="mb-5">Galeri Dokumentasi</h1>
            </div>

            <div class="owl-carousel testimonial-carousel position-relative">

                <div class="testimonial-item text-center">
                    <div class="gallery-img-wrapper">
                        <img src="{{ asset('carserv/img/1.jpeg') }}" class="gallery-img" alt="Galeri 1">
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="gallery-img-wrapper">
                        <img src="{{ asset('carserv/img/2.jpeg') }}" class="gallery-img" alt="Galeri 2">
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="gallery-img-wrapper">
                        <img src="{{ asset('carserv/img/3.jpeg') }}" class="gallery-img" alt="Galeri 3">
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="gallery-img-wrapper">
                        <img src="{{ asset('carserv/img/4.jpeg') }}" class="gallery-img" alt="Galeri 4">
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="gallery-img-wrapper">
                        <img src="{{ asset('carserv/img/5.jpeg') }}" class="gallery-img" alt="Galeri 5">
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="gallery-img-wrapper">
                        <img src="{{ asset('carserv/img/6.jpeg') }}" class="gallery-img" alt="Galeri 6">
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="gallery-img-wrapper">
                        <img src="{{ asset('carserv/img/7.jpeg') }}" class="gallery-img" alt="Galeri 7">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('partials.footer')