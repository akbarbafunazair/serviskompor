    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                        <a href="https://maps.app.goo.gl/zaqNi3Qms6ZxN9tp7" target="_blank" rel="noopener" style="color:inherit; text-decoration:none;">
                            Pasar Minggu, Jakarta Selatan
                        </a>
                    </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                        <a href="https://wa.me/6282315715306?text=Hai%20GasHome%2C%20Saya%20menemukan%20Informasi%20anda%20di%20Website%20terkait%20Servis%20Kompor%20%26%20Water%20Heather.%20Saya%20ingin%20bertanya%20terlebih%20dahulu%2C%20Apakah%20Jadwal%20Tersedia%3F%20" 
                           target="_blank" 
                           rel="noopener" 
                           style="color:inherit; text-decoration:none;">
                            +62 823 1571 5306 (WhatsApp)
                        </a>
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                        <a href="mailto:info@servispanggilan.com" style="color:inherit; text-decoration:none;">
                            info@servispanggilan.com
                        </a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Jam Buka</h4>
                    <h6 class="text-light">Senin - Minggu</h6>
                    <p class="mb-4">24 Jam </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Layanan Kami</h4>
                    <a class="btn btn-link" href="{{ url('/service#servis-kompor-gas') }}">Servis Kompor Gas</a>
                    <a class="btn btn-link" href="{{ url('/service#service-water-heater') }}">Service Water Heater</a>
                    <a class="btn btn-link" href="{{ url('/service#pemasangan-kompor') }}">Pemasangan & Instalasi Kompor</a>
                    <a class="btn btn-link" href="{{ url('/service') }}">Lihat Semua Layanan</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Lokasi Kami</h4>
                    <div style="border-radius:8px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.09);">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793717.1064921314!2d106.3657386707756!3d-6.229728461154552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1575c646999%3A0xcc840e3e8bec5c66!2sJabodetabek!5e0!3m2!1sen!2sid!4v1681510899641!5m2!1sen!2sid" 
                            width="100%" 
                            height="110" 
                            frameborder="0" 
                            style="border:0; min-height:90px; max-height:120px; aspect-ratio: 3/1;"
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Jangkauan Jabodetabek">
                        </iframe>
                    </div>
                    <p class="mt-2 mb-0" style="font-size:0.96rem;color:#bbb;">
                        Jangkauan layanan: JABODETABEK & Sekitarnya
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">GasHome</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="">GasHome</a>
                        <br>Distributed By: <a class="border-bottom" href="" target="_blank">GasHome</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/about') }}">About</a>
                            <a href="{{ url('/service') }}">Service</a>
                            <a href="{{ url('/contact') }}">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('carserv/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('carserv/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('carserv/js/main.js') }}"></script>