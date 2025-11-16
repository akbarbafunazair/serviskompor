<head>
    <meta charset="utf-8">
    <title>Service Panggilan Jabodetabek - Servis Kompor & Water Heather. </title>
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

<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Jakarta, Bogor, Depok, Tangerang, Bekasi</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Senin - Minggu : 24 Jam </small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <a href="https://wa.me/6282315715306?text=Hai%20GasHome%2C%20Saya%20menemukan%20Informasi%20anda%20di%20Website%20terkait%20Servis%20Kompor%20%26%20Water%20Heather.%20Saya%20ingin%20bertanya%20terlebih%20dahulu%2C%20Apakah%20Jadwal%20Tersedia%3F%20" target="_blank" style="text-decoration: none; color: inherit;">
                    <small>+62 823 1571 5306 </small>
                </a>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-tools me-3"></i>GasHome Service</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" 
                class="nav-item nav-link {{ request()->routeIs('home') ? 'active text-primary' : '' }}">
                Home
            </a>
            <a href="{{ route('about') }}" 
                class="nav-item nav-link {{ request()->routeIs('about') ? 'active text-primary' : '' }}">
                About
            </a>
            <a href="{{ route('service') }}" 
                class="nav-item nav-link {{ request()->routeIs('service') ? 'active text-primary' : '' }}">
                Services
            </a>
            <a href="{{ route('contact') }}" 
                class="nav-item nav-link {{ request()->routeIs('contact') ? 'active text-primary' : '' }}">
                Contact
            </a>
        </div>
        <a href="https://wa.me/6282315715306?text=Hai%20GasHome%2C%20Saya%20menemukan%20Informasi%20anda%20di%20Website%20terkait%20Servis%20Kompor%20%26%20Water%20Heather.%20Saya%20ingin%20bertanya%20terlebih%20dahulu%2C%20Apakah%20Jadwal%20Tersedia%3F%20" target="_blank" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
            WHATSAPP<i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>
<!-- Navbar End -->