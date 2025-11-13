@include('partials.navbar')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{ asset('carserv/img/carousel-bg-1.jpg') }});">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('carserv/img/about.jpg') }}" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Tahun</span></h1>
                        <h4 class="text-white">Berpengalaman</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// Tentang Kami //</h6>
                <h1 class="mb-4"><span class="text-primary">GasHome</span> Is The Best Place For Your Auto Care</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Professional & Expert</h6>
                                <span>Diam dolor diam ipsum sit amet diam et eos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Quality Servicing Center</h6>
                                <span>Diam dolor diam ipsum sit amet diam et eos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6>Awards Winning Workers</h6>
                                <span>Diam dolor diam ipsum sit amet diam et eos</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
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


 <!-- Team Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
            <h1 class="mb-5">Our Expert Technicians</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('carserv/img/team-1.jpg') }}" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('carserv/img/team-2.jpg') }}" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('carserv/img/team-3.jpg') }}" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('carserv/img/team-4.jpg') }}" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@include('partials.footer')