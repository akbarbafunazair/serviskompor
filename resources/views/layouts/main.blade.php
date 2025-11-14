<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
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
                    <img class="w-100" src="{{ asset('carserv/img/carousel-bg-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Repair Service Center</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('carserv/img/carousel-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('carserv/img/carousel-bg-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Wash Service Center</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('carserv/img/carousel-2.png') }}" alt="">
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
                        <a class="service-link" href="#">Hubungi Kami</a>
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
                        <a class="service-link" href="#">Hubungi Kami</a>
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
                        <a class="service-link" href="#">Hubungi Kami</a>
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
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/about.jpg') }}" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">10 <span class="fs-4">Tahun</span></h1>
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
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
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
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Pemeriksaan & Perbaikan Kompor Gas Profesional</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Servis Water Heater Gas & Listrik</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Pengecekan Keamanan Kompor & Jalur Gas</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
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
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/service-1.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Pemeriksaan & Perbaikan Kompor Gas Profesional</h3>
                                    <p class="mb-4">Layanan perbaikan kompor gas untuk masalah api kecil, api merah, kompor tidak menyala, bau gas, hingga pemantik rusak. Pemeriksaan dilakukan menyeluruh untuk memastikan jalur gas aman dan berfungsi normal.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Api Tidak Menyala / Api Kecil</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Pemantik / Igniter Bermasalah</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Api Merah / Tidak Stabil</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Pemeriksaan Jalur Gas & Keamanan</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/service-2.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Servis Water Heater Gas & Listrik</h3>
                                    <p class="mb-4">Melayani perbaikan water heater yang tidak panas, air hanya hangat, error, atau menyala sebentar lalu mati. Kami menangani water heater gas dan listrik dari berbagai merek seperti Modena, Rinnai, Ariston, dan lainnya.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Water Heater Tidak Panas</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Sensor / Thermostat Bermasalah</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Flushing & Pembersihan Kerak</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Perbaikan Water Heater Gas & Listrik</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/service-3.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Pengecekan Keamanan Kompor & Jalur Gas</h3>
                                    <p class="mb-4">Layanan pengecekan kebocoran gas, selang, regulator, valve, dan sambungan pipa untuk memastikan penggunaan kompor tetap aman. Cocok untuk rumah, apartemen, dan tempat usaha.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Cek Kebocoran Gas</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Pemeriksaan Regulator & Selang</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Cek Jalur Gas & Valve</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Uji Keamanan & Kalibrasi</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/service-4.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Penggantian Sparepart Kompor & Water Heater</h3>
                                    <p class="mb-4">Kami menyediakan penggantian sparepart kompor dan water heater dengan komponen original agar lebih aman dan tahan lama. Mendukung berbagai merek dan tipe.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Burner / Kompor Head</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Igniter / Pemantik</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Thermostat / Sensor</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Elemen Pemanas & Komponen Listrik</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
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
            padding: 18px 12px 6px 12px;
        }
        .brand-carousel .brand-logo-item img {
            max-width: 90px;
            width: 80vw;
            height: auto;
            max-height: 85px;
            display: inline-block;
            margin: 0 auto 10px auto;
            /* Cegah gambar gepeng & burem */
            object-fit: contain;
            aspect-ratio: 1.5/1; /* ratio mendekati landscape banner logo pada umumnya */
            image-rendering: auto;
            image-rendering: crisp-edges;
            image-rendering: -webkit-optimize-contrast;
        }
        @media (max-width: 480px) {
            .brand-carousel .brand-logo-item img {
                max-width: 70px;
                max-height: 57px;
                width: 38vw;
                aspect-ratio: 1.3/1;
            }
        }
        .brand-carousel .brand-logo-item div {
            font-size: 14px;
            font-weight: 500;
            color: #3d3d3d;
        }
        .brand-section-title {
            text-align: center;
            margin-bottom: 40px;
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
                    <img src="{{ asset('carserv/img/linea.png') }}" alt="Linea" loading="lazy">
                    <div>Linea</div>
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
                <!-- Water Heater -->
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-ariston.png') }}" alt="Ariston WH" loading="lazy">
                    <div>Ariston Water Heater</div>
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-rheem.png') }}" alt="Rheem" loading="lazy">
                    <div>Rheem</div>
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-modena.png') }}" alt="Modena WH" loading="lazy">
                    <div>Modena Water Heater</div>
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-paloma.png') }}" alt="Paloma" loading="lazy">
                    <div>Paloma</div>
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-rinnai.png') }}" alt="Rinnai WH" loading="lazy">
                    <div>Rinnai</div>
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-others.png') }}" alt="Brand Lain" loading="lazy">
                    <div>Lagermania (WH)</div>
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-others.png') }}" alt="Brand Lain" loading="lazy">
                    <div>Teka (WH)</div>
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-others.png') }}" alt="Brand Lain" loading="lazy">
                    <div>Linea (WH)</div>
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('carserv/img/brand-wh-others.png') }}" alt="Brand Lain" loading="lazy">
                    <div>Elektrolux (WH)</div>
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
                color: #0d6efd;
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
                color: #0d6efd;
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
                                        Jl. Contoh No. 123, Jakarta Selatan, DKI Jakarta <br>
                                        <small style="color:#888;">(Kunjungan ke lokasi pelanggan - Workshop tidak menerima kunjungan tanpa janji)</small>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="lokasi-icon"><i class="fas fa-shipping-fast"></i></span>
                                <div>
                                    <span class="lokasi-label">Area Layanan:</span><br>
                                    <span class="lokasi-detail">
                                        Jakarta, Bogor, Depok, Tangerang, Bekasi <br>
                                        <span style="color: #2196f3; font-size: 95%;">(Jabodetabek & sekitarnya, bisa request luar kota)</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="lokasi-icon"><i class="fas fa-clock"></i></span>
                                <div>
                                    <span class="lokasi-label">Jam Layanan:</span><br>
                                    <span class="lokasi-detail">
                                        Setiap Hari - 24 Jam <br>
                                        <span style="color:#2196f3">*Siap melayani kebutuhan Anda kapan saja</span>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="lokasi-icon"><i class="fab fa-whatsapp"></i></span>
                                <div>
                                    <span class="lokasi-label">WhatsApp:</span><br>
                                    <span class="lokasi-detail">
                                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" style="color:#25d366;font-weight:600;text-decoration:none;">
                                            +62 812-3456-7890 <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                        <div class="lokasi-cta mt-2">
                            <a href="https://wa.me/6281234567890" class="wa-btn" target="_blank" rel="noopener" style="font-size:1.15rem;">
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
    
    
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('carserv/img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('carserv/img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('carserv/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('carserv/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @include('partials.footer')

    <!-- Back to Top -->
    <a href="{{ asset('carserv/#') }}" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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