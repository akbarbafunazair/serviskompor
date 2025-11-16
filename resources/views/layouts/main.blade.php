<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Servis Kompor & Water Heather Professional - Jabodetabek </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('carserv/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('carserv/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('carserv/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('carserv/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('carserv/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('carserv/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @include('partials.navbar')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('carserv/img/kompor.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Layanan Servis Kompor //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Ahli Servis Kompor Semua Merk, Cepat dan Terpercaya</h1>
                                    <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Hubungi Kami<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('carserv/img/hotpoint.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('carserv/img/GasHome.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Layanan Servis Water Heather //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Ahli Servis Water Heather Semua Merk, Cepat dan Terpecaya</h1>
                                    <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Hubungi Kami<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('carserv/img/water.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


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


   <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                    <p class="text-white mb-0">Tahun Pengalaman</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                    <p class="text-white mb-0">Teknisi Berpengalaman</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1000</h2>
                    <p class="text-white mb-0">Pelanggan Puas</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1000</h2>
                    <p class="text-white mb-0">Layanan Terselesaikan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Jasa Kami //</h6>
                <h1 class="mb-5">Jelajahi Jasa Kami</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-fire fa-2x me-3"></i>
                            <h4 class="m-0">Pemeriksaan & Perbaikan Kompor Gas Profesional</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-hot-tub fa-2x me-3"></i>
                            <h4 class="m-0">Servis Water Heater Gas & Listrik</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-gas-pump fa-2x me-3"></i>
                            <h4 class="m-0">Pengecekan Keamanan Kompor & Jalur Gas</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-cogs fa-2x me-3"></i>
                            <h4 class="m-0">Penggantian Sparepart Kompor & Water Heater</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/31.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Pemeriksaan & Perbaikan Kompor Gas Profesional</h3>
                                    <p class="mb-4">Layanan perbaikan kompor gas untuk masalah api kecil, api merah, kompor tidak menyala, bau gas, hingga pemantik rusak. Pemeriksaan dilakukan menyeluruh untuk memastikan jalur gas aman dan berfungsi normal.</p>
                                    <p><i class="fa fa-fire text-danger me-3"></i>Api Tidak Menyala / Api Kecil</p>
                                    <p><i class="fa fa-bolt text-warning me-3"></i>Pemantik / Igniter Bermasalah</p>
                                    <p><i class="fa fa-burn text-danger me-3"></i>Api Merah / Tidak Stabil</p>
                                    <p><i class="fa fa-gas-pump text-primary me-3"></i>Pemeriksaan Jalur Gas & Keamanan</p>
                                    <a href="{{ url('/contact') }}" class="btn btn-primary py-3 px-5 mt-3">Hubungi Kami<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/32.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Servis Water Heater Gas & Listrik</h3>
                                    <p class="mb-4">Melayani perbaikan water heater yang tidak panas, air hanya hangat, error, atau menyala sebentar lalu mati. Kami menangani water heater gas dan listrik dari berbagai merek seperti Modena, Rinnai, Ariston, dan lainnya.</p>
                                    <p><i class="fa fa-tint text-info me-3"></i>Water Heater Tidak Panas</p>
                                    <p><i class="fa fa-thermometer-half text-danger me-3"></i>Sensor / Thermostat Bermasalah</p>
                                    <p><i class="fa fa-water text-primary me-3"></i>Flushing & Pembersihan Kerak</p>
                                    <p><i class="fa fa-hot-tub text-warning me-3"></i>Perbaikan Water Heater Gas & Listrik</p>
                                    <a href="{{ url('/contact') }}" class="btn btn-primary py-3 px-5 mt-3">Hubungi Kami<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/33.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Pengecekan Keamanan Kompor & Jalur Gas</h3>
                                    <p class="mb-4">Layanan pengecekan kebocoran gas, selang, regulator, valve, dan sambungan pipa untuk memastikan penggunaan kompor tetap aman. Cocok untuk rumah, apartemen, dan tempat usaha.</p>
                                    <p><i class="fa fa-gas-pump text-primary me-3"></i>Cek Kebocoran Gas</p>
                                    <p><i class="fa fa-sliders-h text-success me-3"></i>Pemeriksaan Regulator & Selang</p>
                                    <p><i class="fa fa-random text-warning me-3"></i>Cek Jalur Gas & Valve</p>
                                    <p><i class="fa fa-shield-alt text-success me-3"></i>Uji Keamanan & Kalibrasi</p>
                                    <a href="{{ url('/contact') }}" class="btn btn-primary py-3 px-5 mt-3">Hubungi Kami<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/34.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Penggantian Sparepart Kompor & Water Heater</h3>
                                    <p class="mb-4">Kami menyediakan penggantian sparepart kompor dan water heater dengan komponen original agar lebih aman dan tahan lama. Mendukung berbagai merek dan tipe.</p>
                                    <p><i class="fa fa-toolbox text-secondary me-3"></i>Burner / Kompor Head</p>
                                    <p><i class="fa fa-bolt text-warning me-3"></i>Igniter / Pemantik</p>
                                    <p><i class="fa fa-thermometer-quarter text-danger me-3"></i>Thermostat / Sensor</p>
                                    <p><i class="fa fa-cogs text-primary me-3"></i>Elemen Pemanas & Komponen Listrik</p>
                                    <a href="{{ url('/contact') }}" class="btn btn-primary py-3 px-5 mt-3">Hubungi Kami<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    
    <!-- Brand Section Start -->
    <style>
        body, html {
            overflow-x: hidden;
        }
        /* Brand carousel styles */
        .brand-carousel .brand-logo-item {
            text-align: center;
            padding: 22px 14px 8px 14px;
        }
        .brand-carousel .brand-logo-item img {
            max-width: 148px;    /* LEBIH BESAR lagi */
            width: 115vw;        /* LEBIH BESAR lagi */
            height: auto;
            max-height: 137px;   /* LEBIH BESAR lagi */
            display: inline-block;
            margin: 0 auto 13px auto;
            /* Cegah gambar gepeng & burem */
            object-fit: contain;
            aspect-ratio: 1.5/1; /* ratio mendekati landscape banner logo pada umumnya */
            image-rendering: auto;
            image-rendering: crisp-edges;
            image-rendering: -webkit-optimize-contrast;
            transition: transform 0.18s cubic-bezier(.4,2,.6,.9);
        }
        /* Efek hover biar atraktif sedikit */
        .brand-carousel .brand-logo-item img:hover {
            transform: scale(1.11);
        }
        @media (max-width: 480px) {
            .brand-carousel .brand-logo-item img {
                max-width: 118px;     /* LEBIH BESAR lagi */
                max-height: 96px;     /* LEBIH BESAR lagi */
                width: 68vw;          /* LEBIH BESAR lagi */
                aspect-ratio: 1.32/1;
            }
        }
        .brand-carousel .brand-logo-item div {
            font-size: 17px;
            font-weight: 500;
            color: #3d3d3d;
        }
        .brand-section-title {
            text-align: center;
            margin-bottom: 44px;
        }
    </style>
    <div class="container-xxl py-5">
            <div class="container">
                <div class="brand-section-title">
                    <h6 class="text-primary text-uppercase">// Brand Kompor & Water Heater //</h6>
                    <h2 class="mb-4">Brand Kompor & Water Heater Yang Kami Layani</h2>
                </div>
                <div class="owl-carousel brand-carousel">
                    <!-- Kompor -->
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/ariston.png') }}" alt="Ariston" loading="lazy">
                        <div>Ariston</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/modena.png') }}" alt="Modena" loading="lazy">
                        <div>Modena</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/tecnogas.png') }}" alt="Tecnogas" loading="lazy">
                        <div>Tecnogas</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/azalea.png') }}" alt="Azelea" loading="lazy">
                        <div>Azelea</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/delizia.png') }}" alt="Delizia" loading="lazy">
                        <div>Delizia</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/panelsolar.png') }}" alt="Panel Solar" loading="lazy">
                        <div>Panel Solar</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/teka.png') }}" alt="Teka" loading="lazy">
                        <div>Teka</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/electrolux.png') }}" alt="Elektrolux" loading="lazy">
                        <div>Elektrolux</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/solahart.png') }}" alt="Solahart" loading="lazy">
                        <div>Solahart</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/wika.png') }}" alt="Wika" loading="lazy">
                        <div>Wika</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/stiebel.jpeg') }}" alt="Stiebel Elektron" loading="lazy">
                        <div>Stiebel Elektron</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/lagermania.png') }}" alt="Lagermania" loading="lazy">
                        <div>Lagermania</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/panelsolar.png') }}" alt="Panel Surya" loading="lazy">
                        <div>Panel Surya</div>
                    </div>
                    <div class="brand-logo-item">
                        <img src="{{ asset('carserv/img/electrolux.png') }}" alt="Brand Lain" loading="lazy">
                        <div>Elektrolux</div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        $(document).ready(function(){
            $('.brand-carousel').owlCarousel({
                loop:true,
                margin:18,
                autoplay:true,
                autoplayTimeout:1900,
                smartSpeed:850,
                autoplayHoverPause:true,
                responsive:{
                    0:{items:2},
                    380:{items:3},
                    600:{items:4},
                    992:{items:6}
                }
            });
        });
    </script>
    <!-- Brand Section End -->

        <!-- Lokasi Section Start -->
        <style>
            .lokasi-section {
                background: #f6f6f6;
                padding: 64px 0 56px 0;
            }
            .lokasi-title {
                margin-bottom: 24px;
            }
            .lokasi-title h6 {
                color:rgb(253, 13, 13);
                text-transform: uppercase;
                font-size: 15px;
                font-weight: 700;
                margin-bottom:10px;
                letter-spacing: 1.6px;
            }
            .lokasi-title h2 {
                font-size: 2.05rem;
                font-weight: 800;
                margin-bottom: .7rem;
                letter-spacing: .2px;
            }
            .lokasi-content-row {
                display: flex;
                align-items: stretch;
                gap: 42px;
                justify-content: center;
                margin-top: 18px;
            }
            .lokasi-info-col, .lokasi-maps-col {
                flex: 1 1 350px;
                min-width: 290px;
                max-width: 530px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .lokasi-info-col {
                background: #fff;
                border-radius: 16px;
                box-shadow: 0 5px 24px 0 rgba(30,55,155,0.05);
                padding: 32px 28px 26px 32px;
                height: 100%;
                width: 100%;
            }
            .lokasi-info-list {
                padding: 0;
                margin: 0 0 12px 0;
                list-style: none;
            }
            .lokasi-info-list li {
                display: flex;
                align-items: flex-start;
                gap: 16px;
                margin-bottom: 22px;
                font-size: 1.05rem;
            }
            .lokasi-info-list .lokasi-icon {
                color:rgb(255, 0, 0);
                font-size: 1.45rem;
                min-width: 38px;
                text-align: center;
            }
            .lokasi-info-list .lokasi-label {
                font-weight: 600;
                color: #222;
            }
            .lokasi-info-list .lokasi-detail {
                color: #444;
                display: block;
                font-weight: 400;
            }
            .lokasi-cta {
                display: flex;
                gap: 16px;
            }
            .lokasi-cta a {
                border-radius: 8px;
                padding: 16px 0;
                text-decoration: none;
                font-weight: 600;
                font-size: 1.12rem;
                color: #fff;
                transition: background .18s;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                gap: 11px;
            }
            .lokasi-cta .wa-btn {
                background: #25d366;
            }
            .lokasi-cta .wa-btn:hover {
                background: #19b655;
            }
            .lokasi-maps-col {
                align-items: center;
                justify-content: center;
                width: 100%;
            }
            .lokasi-maps-col iframe {
                border: 0;
                border-radius: 14px;
                width: 100%;
                min-height: 350px;
                max-width: 510px;
                box-shadow: 0 2px 14px 0 rgba(120,120,120,0.10);
                height: 100%;
            }
            @media (max-width: 1024px) {
                .lokasi-content-row {
                    flex-direction: column;
                    align-items: stretch;
                    gap: 26px;
                }
                .lokasi-info-col,
                .lokasi-maps-col {
                    max-width: 100%;
                    min-width: 0;
                    width: 100%;
                }
                .lokasi-maps-col iframe {
                    min-height: 230px;
                    max-width: 100%;
                }
            }
            @media (max-width: 576px) {
                .lokasi-section {
                    padding: 38px 0 28px 0;
                }
                .lokasi-title h2 {
                    font-size: 1.15rem;
                }
                .lokasi-info-col {
                    padding: 18px 6px 16px 7px;
                }
                .lokasi-cta a {
                    padding: 11px 0;
                    font-size: 0.98rem;
                }
                .lokasi-maps-col iframe {
                    min-height: 170px;
                }
                .lokasi-info-list li {
                    font-size: 0.97rem;
                }
            }
        </style>
        <div class="lokasi-section">
            <div class="container">
                <div class="lokasi-title text-center">
                    <h6>// Lokasi Layanan //</h6>
                    <h2>Jangkauan Layanan JABODETABEK & Sekitar</h2>
                </div>
                <div class="lokasi-content-row">
                    <div class="lokasi-info-col">
                        <ul class="lokasi-info-list">
                            <li>
                                <span class="lokasi-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <div>
                                    <span class="lokasi-label">Alamat:</span><br>
                                    <span class="lokasi-detail">
                                        Pasar Minggu, Jakarta Selatan <br>
                                        <small style="color:rgb(255, 0, 0);">(Kunjungan ke lokasi pelanggan - Workshop tidak menerima kunjungan tanpa janji)</small>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="lokasi-icon"><i class="fas fa-shipping-fast"></i></span>
                                <div>
                                    <span class="lokasi-label">Area Layanan:</span><br>
                                    <span class="lokasi-detail">
                                        Jakarta, Bogor, Depok, Tangerang, Bekasi <br>
                                        <span style="color:rgb(255, 0, 0); font-size: 95%;">(Jabodetabek & sekitarnya, bisa request luar kota)</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="lokasi-icon"><i class="fas fa-clock"></i></span>
                                <div>
                                    <span class="lokasi-label">Jam Layanan:</span><br>
                                    <span class="lokasi-detail">
                                        Setiap Hari - 24 Jam <br>
                                        <span style="color:rgb(255, 0, 0);">*Siap melayani kebutuhan Anda kapan saja</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="lokasi-icon"><i class="fab fa-whatsapp"></i></span>
                                <div>
                                    <span class="lokasi-label">WhatsApp:</span><br>
                                    <span class="lokasi-detail">
                                        <a href="https://wa.me/6282315715306?text=Hai%20GasHome%2C%20Saya%20menemukan%20Informasi%20anda%20di%20Website%20terkait%20Servis%20Kompor%20%26%20Water%20Heather.%20Saya%20ingin%20bertanya%20terlebih%20dahulu%2C%20Apakah%20Jadwal%20Tersedia%3F%20" target="_blank" rel="noopener" style="color:#25d366;font-weight:600;text-decoration:none;">
                                            +62 823-1571-5306 <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                        <div class="lokasi-cta mt-2">
                            <a href="https://wa.me/6282315715306?text=Hai%20GasHome%2C%20Saya%20menemukan%20Informasi%20anda%20di%20Website%20terkait%20Servis%20Kompor%20%26%20Water%20Heather.%20Saya%20ingin%20bertanya%20terlebih%20dahulu%2C%20Apakah%20Jadwal%20Tersedia%3F%20" class="wa-btn" target="_blank" rel="noopener" style="font-size:1.15rem;">
                                <i class="fab fa-whatsapp"></i>Chat WhatsApp
                            </a>
                        </div>
                    </div>
                    <div class="lokasi-maps-col">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793717.1064921314!2d106.3657386707756!3d-6.229728461154552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1575c646999%3A0xcc840e3e8bec5c66!2sJabodetabek!5e0!3m2!1sen!2sid!4v1681510899641!5m2!1sen!2sid" 
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Jangkauan Jabodetabek">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lokasi Section End -->
    
    
    <!-- Testimoni Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimoni //</h6>
                <h1 class="mb-5">Apa Kata Pelanggan Kami?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">

                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('carserv/img/cewe.png') }}" style="width: 80px; height: 80px;" alt="Testimoni Kartun 1">
                    <h5 class="mb-0">Bu Rini</h5>
                    <p>Ibu Rumah Tangga</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Pelayanannya bener-bener bagus, teknisinya datang tepat waktu! Kompor saya sekarang nyala lagi seperti baru. Makasih banyak ya!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('carserv/img/cowo.png') }}" style="width: 80px; height: 80px;" alt="Testimoni Kartun 2">
                    <h5 class="mb-0">Pak Deden</h5>
                    <p>Pegawai Kantor</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Seneng banget sama responnya yang cepat! Water heater rusak langsung diperbaiki, jadi nggak perlu mandi air dingin lagi.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('carserv/img/cewe.png') }}" style="width: 80px; height: 80px;" alt="Testimoni Kartun 3">
                    <h5 class="mb-0">Mbak Yuni</h5>
                    <p>Wirausaha</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Servisnya rapih, teknisi ramah dan informatif. Harga juga masih aman di kantong. Next time pasti order lagi deh!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('carserv/img/cowo.png') }}" style="width: 80px; height: 80px;" alt="Testimoni Kartun 4">
                    <h5 class="mb-0">Mas Rafi</h5>
                    <p>Mahasiswa</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Panggil servis ke kosan cepet prosesnya. Enak banget, nggak ribet dan ramah. Recommended banget pokoknya!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimoni End -->

    @include('partials.footer')


    <!-- WhatsApp Chat Widget -->
    <div class="whatsapp-chat-widget">
        <!-- Chat Window -->
        <div class="whatsapp-chat-window" id="whatsappChatWindow">
            <div class="whatsapp-chat-header">
                <div class="whatsapp-chat-avatar">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="whatsapp-chat-info">
                    <h6 class="mb-0">GasHome Support</h6>
                    <small class="text-muted">Biasanya merespons dalam beberapa menit</small>
                </div>
                <button class="whatsapp-chat-close" id="whatsappChatClose">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="whatsapp-chat-body">
                <div class="whatsapp-chat-message">
                    <div class="whatsapp-message-bubble">
                        <p class="mb-0">Halo! 👋</p>
                        <p class="mb-0">Ada yang bisa kami bantu? Klik tombol di bawah untuk chat langsung via WhatsApp!</p>
                    </div>
                </div>
            </div>
            <div class="whatsapp-chat-footer">
                <a href="https://wa.me/6282315715306?text=Hai%20GasHome%2C%20Saya%20menemukan%20Informasi%20anda%20di%20Website%20terkait%20Servis%20Kompor%20%26%20Water%20Heather.%20Saya%20ingin%20bertanya%20terlebih%20dahulu%2C%20Apakah%20Jadwal%20Tersedia%3F%20" 
                   target="_blank" 
                   rel="noopener" 
                   class="whatsapp-chat-button">
                    <i class="fab fa-whatsapp me-2"></i>
                    Buka WhatsApp
                </a>
            </div>
        </div>
        
        <!-- Floating Button -->
        <button class="whatsapp-chat-button-float" id="whatsappChatButton">
            <i class="fab fa-whatsapp"></i>
            <span class="whatsapp-pulse"></span>
        </button>
    </div>

    <style>
        /* WhatsApp Chat Widget Styles */
        .whatsapp-chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        .whatsapp-chat-button-float {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #25d366;
            border: none;
            color: white;
            font-size: 28px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.3s ease;
            animation: float 3s ease-in-out infinite;
        }

        .whatsapp-chat-button-float:hover {
            background: #20ba5a;
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
        }

        .whatsapp-pulse {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #25d366;
            animation: pulse 2s infinite;
            z-index: -1;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .whatsapp-chat-window {
            position: absolute;
            bottom: 80px;
            right: 0;
            width: 350px;
            max-width: calc(100vw - 40px);
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            display: none;
            flex-direction: column;
            overflow: hidden;
            animation: slideUp 0.3s ease;
        }

        .whatsapp-chat-window.active {
            display: flex;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .whatsapp-chat-header {
            background: #25d366;
            color: white;
            padding: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .whatsapp-chat-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .whatsapp-chat-info {
            flex: 1;
        }

        .whatsapp-chat-info h6 {
            color: white;
            font-weight: 600;
            margin: 0;
        }

        .whatsapp-chat-info small {
            color: rgba(255, 255, 255, 0.9);
        }

        .whatsapp-chat-close {
            background: transparent;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background 0.2s;
        }

        .whatsapp-chat-close:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .whatsapp-chat-body {
            padding: 20px;
            background: #f0f0f0;
            min-height: 120px;
            max-height: 300px;
            overflow-y: auto;
        }

        .whatsapp-message-bubble {
            background: white;
            padding: 12px 16px;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            margin-bottom: 12px;
        }

        .whatsapp-message-bubble p {
            margin: 0;
            color: #333;
            line-height: 1.5;
        }

        .whatsapp-message-bubble p + p {
            margin-top: 8px;
        }

        .whatsapp-chat-footer {
            padding: 16px;
            background: white;
            border-top: 1px solid #e0e0e0;
        }

        .whatsapp-chat-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #25d366;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }

        .whatsapp-chat-button:hover {
            background: #20ba5a;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
        }

        @media (max-width: 576px) {
            .whatsapp-chat-widget {
                bottom: 15px;
                right: 15px;
            }

            .whatsapp-chat-window {
                width: calc(100vw - 30px);
                right: 0;
            }

            .whatsapp-chat-button-float {
                width: 56px;
                height: 56px;
                font-size: 24px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatButton = document.getElementById('whatsappChatButton');
            const chatWindow = document.getElementById('whatsappChatWindow');
            const closeButton = document.getElementById('whatsappChatClose');

            // Toggle chat window
            chatButton.addEventListener('click', function() {
                chatWindow.classList.toggle('active');
            });

            // Close chat window
            closeButton.addEventListener('click', function() {
                chatWindow.classList.remove('active');
            });

            // Close when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.whatsapp-chat-widget')) {
                    chatWindow.classList.remove('active');
                }
            });
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('carserv/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('carserv/js/main.js') }}"></script>
</body>

</html>