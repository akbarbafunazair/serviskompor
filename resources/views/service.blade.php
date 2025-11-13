@include('partials.navbar')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url('{{ asset('carserv/img/carousel-bg-2.jpg') }}');">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Jasa</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
    /* Hilangkan scroll horizontal di mobile */
    body, html {
        overflow-x: hidden;
    }
    /* Fix untuk menghilangkan margin dan overflow */
    .container, .container-xxl {
        max-width: 100vw;
        overflow-x: hidden;
        padding-left: 12px !important;
        padding-right: 12px !important;
    }
    /* Brand wrapper row: pastikan tidak overflow */
    .row.g-4.align-items-center.justify-content-center {
        margin-left: 0 !important;
        margin-right: 0 !important;
        flex-wrap: wrap;
        overflow-x: hidden;
    }
    /* Brand column: responsif di semua layar */
    .brand-logo-col {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
        margin-bottom: 1.5rem !important;
        flex: 0 0 50%;
        max-width: 50%;
    }
    @media (min-width: 576px) {
        .brand-logo-col {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }
    }
    @media (min-width: 768px) {
        .brand-logo-col {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }
    @media (min-width: 992px) {
        .brand-logo-col {
            flex: 0 0 16.6667%;
            max-width: 16.6667%;
        }
    }
    .brand-logo-col img {
        max-width: 100%;
        height: auto;
        max-height:70px;
        display: inline-block;
    }
</style>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-7 text-center">
                <h6 class="text-primary text-uppercase">// Brand Kompor //</h6>
                <h2 class="mb-4">Brand Kompor Yang Kami Layani</h2>
            </div>
        </div>
        <div class="row g-4 align-items-center justify-content-center">
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-kompor-rinnai.png') }}" alt="Rinnai" class="img-fluid mb-2">
                <div>Rinnai</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-kompor-modena.png') }}" alt="Modena" class="img-fluid mb-2">
                <div>Modena</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-kompor-domo.png') }}" alt="Domo" class="img-fluid mb-2">
                <div>Domo</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-kompor-rubenz.png') }}" alt="Rubenz" class="img-fluid mb-2">
                <div>Rubenz</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-kompor-others.png') }}" alt="Brand Lain" class="img-fluid mb-2">
                <div>Lainnya</div>
            </div>
        </div>
        <hr class="my-5" />
        <div class="row justify-content-center mb-4 mt-5">
            <div class="col-lg-7 text-center">
                <h6 class="text-primary text-uppercase">// Brand Water Heater //</h6>
                <h2 class="mb-4">Brand Water Heater Yang Kami Layani</h2>
            </div>
        </div>
        <div class="row g-4 align-items-center justify-content-center">
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-wh-ariston.png') }}" alt="Ariston" class="img-fluid mb-2">
                <div>Ariston</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-wh-rheem.png') }}" alt="Rheem" class="img-fluid mb-2">
                <div>Rheem</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-wh-modena.png') }}" alt="Modena WH" class="img-fluid mb-2">
                <div>Modena</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-wh-paloma.png') }}" alt="Paloma" class="img-fluid mb-2">
                <div>Paloma</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-wh-rinnai.png') }}" alt="Rinnai WH" class="img-fluid mb-2">
                <div>Rinnai</div>
            </div>
            <div class="brand-logo-col text-center">
                <img src="{{ asset('carserv/img/brand-wh-others.png') }}" alt="Brand Lain" class="img-fluid mb-2">
                <div>Lainnya</div>
            </div>
        </div>
    </div>
</div>
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