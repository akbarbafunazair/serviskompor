@include('partials.navbar')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url('{{ asset('carserv/img/sumpal.jpg') }}');">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Kontak Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<style>
    /* -- Kembali ke gaya lama, card grid standard tanpa scroll horizontal/geser -- */

    .contact-section-old {
        background: #fff;
        padding: 2rem 0 3rem 0;
    }
    .contact-title-old-main {
        font-family: 'Montserrat', Arial, sans-serif;
        font-weight: bold;
        color: #101010;
        font-size: 2.2rem;
        text-align: center;
        margin-bottom: 0.65rem;
        letter-spacing: 0.01em;
    }
    .contact-title-old-secondary {
        font-size: 1.11rem;
        color: #ea1919;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 0.08em;
        margin-bottom: 0.5rem;
        text-align: center;
    }
    .contact-desc-old {
        color: #232323;
        text-align: center;
        font-size: 1.08em;
        max-width: 650px;
        margin: 0 auto 2.2rem auto;
    }
    .contact-row-old {
        display: flex;
        flex-wrap: wrap;
        gap: 2.2rem;
        justify-content: center;
        margin-bottom: 2.8rem;
    }
    @media (max-width: 991.98px){
        .contact-row-old {
            flex-direction: column;
            align-items: center;
            gap:1.4rem;
        }
    }
    .contact-card-old {
        background: #f8f8fa;
        border-radius: 1.3rem;
        box-shadow: 0 5px 24px 0 rgba(180,0,0,0.11), 0 1.3px 12px 0 rgba(20,0,0,0.03);
        min-width: 250px;
        max-width: 344px;
        width: 100%;
        padding: 2.1rem 1.4rem 1.5rem 1.4rem;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 2.4px solid #ee2330;
        position: relative;
        margin-bottom: 0;
    }
    .contact-card-old .contact-icon-big {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.12rem;
        width: 66px;
        height: 66px;
        border-radius: 50%;
        background: #fff0f1;
        box-shadow: 0 2.5px 10px 0 rgba(220,20,60,0.09);
        font-size: 2.3rem;
        color: #ee2330;
    }
    .contact-card-old .contact-card-title {
        font-size: 1.09rem;
        font-weight: bold;
        color: #101010;
        margin-bottom: 0.68rem;
        letter-spacing: 0.01em;
    }
    .contact-card-old .contact-card-content ul {
        list-style: none;
        padding: 0;
        margin: 0 0 0.99em 0;
    }
    .contact-card-old .contact-card-content ul li {
        margin-bottom: .49em;
        font-size: 1.025em;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #101010;
    }
    .contact-card-old .contact-card-content ul li .icon {
        color: #ee2330;
        margin-right: .6em;
        font-size: 1.14em;
    }
    .contact-card-old .label-pink {
        display: inline-block;
        margin-top: 1.2rem;
        background: #ee2330;
        color: #fff;
        padding: 0.42em 1.24em 0.46em 1.24em;
        font-size: 1em;
        font-weight: 600;
        border-radius: 1.45em;
        letter-spacing: 0.01em;
        box-shadow: 0 0.8px 5px rgba(220,20,60,0.11);
    }
    .contact-card-old .contact-link-wa {
        display: inline-flex;
        align-items: center;
        font-weight: bold;
        font-size: 1.18em;
        color: #24c35b;
        background: #eafcf3;
        border-radius: 9px;
        padding: .43em 1.08em .43em .96em;
        margin: 0.12em 0 .86em 0;
        text-decoration: none;
        transition: background .12s,color .12s;
        border: 1.1px solid #22c55e19;
    }
    .contact-card-old .contact-link-wa:hover {
        background: #bbf5d2;
        color: #095c1e;
    }
    .contact-card-old .contact-link-wa .icon-wa {
        color: #25D366;
        margin-right: .66em;
        font-size: 1.25em;
    }
    .contact-card-old .contact-link-emailbox {
        display: flex;
        gap: 0.9em;
        align-items: center;
        justify-content: center;
        padding-top: .13em;
    }
    .contact-card-old .contact-link-email {
        font-weight: 700;
        color: #ee2330;
        font-size: 1.11em;
        text-decoration: none;
        letter-spacing: .004em;
        display: flex;
        align-items: center;
        background: #fff0f1;
        border-radius: 9px;
        padding: .44em 1.13em;
        border: 1.1px solid #ee233011;
        transition: background .13s, color .13s;
    }
    .contact-card-old .contact-link-email:hover {
        background: #fee4e7;
        color: #af111c;
        text-decoration: underline;
    }
    .contact-card-old .contact-link-email .icon-email {
        color: #ee2330;
        font-size: 1.13em;
        margin-right: .5em;
    }
    .contact-card-old .desc {
        color: #6d2222;
        font-size: .98em;
        margin-top: 0.7em;
        font-weight: 500;
    }
    /* Responsive Google Maps - BESARIN DI HP */
    .responsive-map {
        position: relative;
        width: 100%;
        max-width: 680px;
        margin: 0 auto;
        padding-bottom: 44%;
        height: 0;
        overflow: hidden;
        margin-bottom: 2.1rem;
        border-radius: 0.86rem;
        box-shadow: 0 2px 14px 0 rgba(160,26,26,0.12);
    }
    .responsive-map iframe {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        border: 0;
        min-height: 340px;
        max-width: 100vw;
        filter: grayscale(14%) contrast(113%);
        border-radius: 0.86rem;
    }
    @media (max-width: 991.98px) {
        .responsive-map {max-width: 99vw; padding-bottom: 58%;}
        .responsive-map iframe { min-height: 240px;}
    }
    @media (max-width: 576px) {
        .responsive-map {padding-bottom: 82%; max-width: 100vw;}
        .responsive-map iframe {min-height: 190px;}
    }
    /* Tagline akhir (footer tagline) */
    .kontak-tagline-akhir {
        font-size: 1.19em;
        font-weight: bold;
        color: #181818;
        display: inline-block;
        margin-top: 0.5em;
        background: none !important;
        padding: 0 !important;
        border-radius: 0 !important;
        box-shadow: none !important;
    }
    .contact-card-old .area-ul li strong {
        font-weight: bold; color: #ee2330;
    }
</style>

<section class="contact-section-old wow fadeInUp" data-wow-delay="0.08s">
    <div class="container">
        <div class="contact-header-combined" style="max-width:920px; margin:0 auto 2.35rem auto;">
            <div class="contact-title-old-secondary" style="margin-bottom:0.28rem;">// Hubungi Kami //</div>
            <div class="contact-title-old-main" style="margin-bottom:0.42rem;">Butuh Bantuan Servis Kompor Gas &amp; Water Heater?</div>
            <div class="contact-desc-old" style="text-align:justify; text-justify:inter-word; margin-bottom:0;">
                <b>GasHome</b> siap membantu Anda 24 jam di area <strong>Jabodetabek</strong> sebagai <strong>spesialis servis kompor gas &amp; water heater</strong> – solusi cepat untuk semua masalah: api kecil/mati, heater rusak, error, ganti sparepart, hingga kebocoran gas.<br>
                <span style="color:#ee2330">Teknisi ahli, pengerjaan jujur, bergaransi!</span>
            </div>
        </div>

        <div class="contact-row-old">
            <!-- Card Area Layanan -->
            <div class="contact-card-old">
                <div class="contact-icon-big">
                    <i class="fa fa-map-marker-alt"></i>
                </div>
                <div class="contact-card-title">Wilayah Layanan</div>
                <div class="contact-card-content">
                    <ul class="area-ul">
                        <li><span class="icon"><i class="fa fa-circle"></i></span> <strong>Jakarta</strong></li>
                        <li><span class="icon"><i class="fa fa-circle"></i></span> <strong>Bogor</strong></li>
                        <li><span class="icon"><i class="fa fa-circle"></i></span> <strong>Depok</strong></li>
                        <li><span class="icon"><i class="fa fa-circle"></i></span> <strong>Tangerang</strong></li>
                        <li><span class="icon"><i class="fa fa-circle"></i></span> <strong>Bekasi</strong></li>
                    </ul>
                </div>
                <div class="label-pink">Seluruh <b>JABODETABEK</b></div>
            </div>
            <!-- Card Jenis Tempat -->
            <div class="contact-card-old">
                <div class="contact-icon-big">
                    <i class="fa fa-store"></i>
                </div>
                <div class="contact-card-title">Layanan Untuk</div>
                <div class="contact-card-content">
                    <ul>
                        <li><span class="icon"><i class="fa fa-home"></i></span> Rumah Tinggal</li>
                        <li><span class="icon"><i class="fa fa-utensils"></i></span> Restoran & Cafe</li>
                        <li><span class="icon"><i class="fa fa-city"></i></span> Apartemen & Hotel</li>
                        <li><span class="icon"><i class="fa fa-briefcase"></i></span> Kantor, Ruko, Lainnya</li>
                    </ul>
                </div>
                <div class="desc">Panggilan ke lokasi Anda: bisa pribadi, usaha, maupun bisnis lainnya.</div>
            </div>
            <!-- Card Kontak WA + Email -->
            <div class="contact-card-old">
                <div class="contact-icon-big">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="contact-card-title">Kontak 24 Jam</div>
                <div class="contact-card-content" style="margin-bottom:0.7em">
                    <a href="https://wa.me/6282315715306?text=Hai%20GasHome%2C%20Saya%20menemukan%20Informasi%20anda%20di%20Website%20terkait%20Servis%20Kompor%20%26%20Water%20Heather.%20Saya%20ingin%20bertanya%20terlebih%20dahulu%2C%20Apakah%20Jadwal%20Tersedia%3F%20" target="_blank" rel="noopener" class="contact-link-wa">
                        <span class="icon-wa"><i class="fab fa-whatsapp"></i></span>
                        0823 1571 5306
                    </a>
                    <div class="contact-link-emailbox" style="margin-bottom: 0.4em;">
                        <a href="mailto:info@servispanggilan.com" class="contact-link-email">
                            <span class="icon-email"><i class="fa fa-envelope"></i></span>
                            info@servispanggilan.com
                        </a>
                    </div>
                </div>
                <div class="label-pink" style="background:#fff; color:#ea1919; border:1.2px solid #ee2330;">
                    <i class="fa fa-clock me-1"></i> 24 Jam Siap Melayani
                </div>
            </div>
        </div>

        <!-- Google Maps Start: Area JABODETABEK -->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="responsive-map">
                    <iframe
                        loading="lazy"
                        allowfullscreen
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31726.358688911373!2d106.82654621088553!3d-6.2464779657913725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f153b9235e53%3A0x301576d14febd9f0!2sJabodetabek!5e0!3m2!1sid!2sid!4v1718000000000!5m2!1sid!2sid">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Tagline -->
        <div class="row mt-4 justify-content-center">
            <div class="col-12 text-center">
                <span class="kontak-tagline-akhir">
                    Kami siap melayani Anda di seluruh JABODETABEK 24 Jam!
                </span>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

@include('partials.footer')