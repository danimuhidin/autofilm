@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="hero-short container-fluid p-0">
        <div class="hero-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-12 hero-content">
                    <h1 class="display-4">Kontak & Jaringan Outlet Kami</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-hq">
        <div class="container">
            <h2 class="section-title">Hubungi Kantor Pusat</h2>
            <div class="row">

                <!-- Kolom Kiri: Formulir Kontak -->
                <div class="col-md-7 mb-5 mb-md-0">
                    <h3 class="contact-subtitle">Kirim Pertanyaan Anda</h3>
                    <p class="text-secondary mb-4">Punya pertanyaan umum, kritik, saran, atau peluang bisnis? Silakan isi
                        formulir di bawah ini.</p>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formNama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="formNama" placeholder="Nama Anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formEmail">Alamat Email</label>
                                <input type="email" class="form-control" id="formEmail" placeholder="email@anda.com"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formTelepon">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="formTelepon" placeholder="0812xxxxxx">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formSubjek">Subjek</label>
                                <input type="text" class="form-control" id="formSubjek" placeholder="Subjek Pesan"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formPesan">Pesan Anda</label>
                            <textarea class="form-control" id="formPesan" rows="6" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg px-5">Kirim Pesan</button>
                    </form>
                </div>

                <!-- Kolom Kanan: Info Kontak HQ & Maps -->
                <div class="col-md-5">
                    <h3 class="contact-subtitle">Informasi Kantor Pusat</h3>
                    <ul class="contact-info-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>
                                <strong>Alamat:</strong><br>
                                Jl. Raya Autofilm No. 123, Blok A5
                                Jakarta Pusat, DKI Jakarta 10110
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>
                                <strong>Telepon:</strong><br>
                                (021) 1234-5678
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>
                                <strong>Email:</strong><br>
                                info@mantrasakti-autofilm.com
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>
                                <strong>Jam Operasional:</strong><br>
                                Senin - Sabtu (08.00 - 17.00 WIB)
                            </span>
                        </li>
                    </ul>

                    <div class="map-responsive mt-4">
                        <!-- Ganti src dengan embed Google Maps lokasi Anda -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.471612053075!2d106.82496417585012!3d-6.20150036072462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fd540de!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1678888888888!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="outlet-section">
        <div class="container">
            <h2 class="section-title">Temukan Outlet Terdekat Kami</h2>
            <p class="text-center text-secondary col-md-8 mx-auto" style="margin-top: -20px; margin-bottom: 40px;">
                Untuk pemasangan retail dan konsultasi langsung, silakan hubungi jaringan outlet resmi kami di bawah ini.
            </p>
            <div class="row">

                <!-- Contoh Outlet Card 1 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">Jakarta Selatan</div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Mantra Sakti - Pondok Indah</h5>
                            <p class="card-text">Jl. Sultan Iskandar Muda No. 20, Arteri Pondok Indah, Jakarta Selatan.</p>
                            <p class="card-text">
                                <i class="fab fa-whatsapp" style="color: #25D366;"></i> 0812-1111-2222
                            </p>
                            <div class="mt-auto pt-3">
                                <a href="#" class="btn btn-danger btn-block mb-2">Lihat Google Maps</a>
                                <a href="#" class="btn btn-outline-danger btn-block">Chat WA Outlet</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contoh Outlet Card 2 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">Bekasi</div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Mantra Sakti - Summarecon Bekasi</h5>
                            <p class="card-text">Ruko Saphire Commercial, Blok SA-10, Jl. Bulevar Selatan, Summarecon
                                Bekasi.</p>
                            <p class="card-text">
                                <i class="fab fa-whatsapp" style="color: #25D366;"></i> 0812-3333-4444
                            </p>
                            <div class="mt-auto pt-3">
                                <a href="#" class="btn btn-danger btn-block mb-2">Lihat Google Maps</a>
                                <a href="#" class="btn btn-outline-danger btn-block">Chat WA Outlet</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contoh Outlet Card 3 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">Tangerang</div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Mantra Sakti - Gading Serpong</h5>
                            <p class="card-text">Ruko Paramount Center, Blok B No. 15, Gading Serpong, Tangerang.</p>
                            <p class="card-text">
                                <i class="fab fa-whatsapp" style="color: #25D366;"></i> 0812-5555-6666
                            </p>
                            <div class="mt-auto pt-3">
                                <a href="#" class="btn btn-danger btn-block mb-2">Lihat Google Maps</a>
                                <a href="#" class="btn btn-outline-danger btn-block">Chat WA Outlet</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center mt-4">
                <a href="semua-outlet.html" class="btn btn-lg btn-outline-warning" style="border-radius: 25px;">Lihat
                    Semua Jaringan Outlet</a>
            </div>
        </div>
    </section>

@endsection