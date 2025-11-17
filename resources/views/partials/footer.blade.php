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