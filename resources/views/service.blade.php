@include('partials.navbar')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url('{{ asset('carserv/img/carousel-bg-2.jpg') }}');">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Jasa</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Jasa</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


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

<!-- FAQ Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h6 class="text-primary text-uppercase">// FAQ //</h6>
                <h2 class="mb-4">Pertanyaan yang Sering Diajukan</h2>
            </div>
        </div>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faq1-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1-body" aria-expanded="false" aria-controls="faq1-body">
                        Apakah bisa servis di hari yang sama?
                    </button>
                </h2>
                <div id="faq1-body" class="accordion-collapse collapse" aria-labelledby="faq1-header" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Bisa, kami usahakan teknisi datang di hari yang sama sesuai ketersediaan jadwal dan lokasi Anda.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faq2-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-body" aria-expanded="false" aria-controls="faq2-body">
                        Apakah ada garansi setelah servis?
                    </button>
                </h2>
                <div id="faq2-body" class="accordion-collapse collapse" aria-labelledby="faq2-header" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, kami memberikan garansi pengerjaan dan sparepart (jika ada penggantian) sesuai ketentuan yang berlaku.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faq3-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3-body" aria-expanded="false" aria-controls="faq3-body">
                        Bagaimana cara memesan layanan?
                    </button>
                </h2>
                <div id="faq3-body" class="accordion-collapse collapse" aria-labelledby="faq3-header" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Anda bisa menghubungi kami melalui WhatsApp, telepon, atau form kontak yang tersedia di website ini.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faq4-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4-body" aria-expanded="false" aria-controls="faq4-body">
                        Apakah menerima servis untuk apartemen atau kantor?
                    </button>
                </h2>
                <div id="faq4-body" class="accordion-collapse collapse" aria-labelledby="faq4-header" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Tentu saja. Kami melayani servis di apartemen, kantor, restoran, maupun rumah tangga.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faq5-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5-body" aria-expanded="false" aria-controls="faq5-body">
                        Apakah harga sudah termasuk sparepart?
                    </button>
                </h2>
                <div id="faq5-body" class="accordion-collapse collapse" aria-labelledby="faq5-header" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Harga jasa servis belum termasuk sparepart. Jika ada penggantian, teknisi akan menginformasikan biaya sebelumnya.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Section End -->


@include('partials.footer')