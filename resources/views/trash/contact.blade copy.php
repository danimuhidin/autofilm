<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami & Daftar Outlet - Mantra Sakti Autofilm</title>
    
    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Google Fonts (Misal: Inter atau Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS Kustom untuk Tema Black Matte -->
    <style>
        :root {
            --warna-latar: #1a1a1a;
            --warna-permukaan: #2a2a2a; /* Untuk card, navbar */
            --warna-batas: #444;
            --warna-teks-primer: #f0f0f0;
            --warna-teks-sekunder: #aaa;
            --warna-merah-cta: #dc3545; /* Merah Bootstrap */
            --warna-kuning-highlight: #ffc107; /* Kuning Bootstrap */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--warna-latar);
            color: var(--warna-teks-primer);
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }

        /* --- 1. Navigasi --- */
        .navbar {
            background-color: var(--warna-permukaan) !important;
            border-bottom: 1px solid var(--warna-batas);
            padding: 1rem 1.5rem;
        }
        .navbar-brand img {
            height: 50px;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: var(--warna-teks-primer);
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }
        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .show > .nav-link {
            color: var(--warna-kuning-highlight);
        }
        /* Penanda Halaman Aktif */
        .navbar-dark .navbar-nav .nav-link.active {
            color: var(--warna-kuning-highlight);
            font-weight: 700;
        }
        .dropdown-menu {
            background-color: var(--warna-permukaan);
            border: 1px solid var(--warna-batas);
        }
        .dropdown-item {
            color: var(--warna-teks-primer);
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .dropdown-item:hover, .dropdown-item:focus {
            color: #fff;
            background-color: var(--warna-merah-cta);
        }
        /* Penanda Dropdown Item Aktif */
        .dropdown-item.active {
            color: #fff;
            background-color: var(--warna-merah-cta);
        }
        .btn-cta-nav {
            background-color: var(--warna-merah-cta);
            color: #fff;
            border-radius: 25px;
            padding: 0.5rem 1.5rem;
        }
        .btn-cta-nav:hover {
            background-color: #c82333;
            color: #fff;
        }

        /* --- 2. Hero Section (Singkat) --- */
        .hero-short {
            position: relative;
            min-height: 35vh;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            /* Ganti dengan URL gambar yang relevan */
            background-image: url('https://placehold.co/1920x400/222/555?text=Hubungi+Kami');
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
        }
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-top: 10px;
            justify-content: center;
        }
        .breadcrumb-item a {
            color: var(--warna-kuning-highlight);
        }
        .breadcrumb-item.active {
            color: var(--warna-teks-sekunder);
        }

        /* --- 3. Konten & Formulir --- */
        section {
            padding: 60px 0;
        }
        .section-title {
            text-align: center;
            color: var(--warna-kuning-highlight);
            margin-bottom: 40px;
            font-weight: 700;
        }
        .contact-subtitle {
            margin-bottom: 20px;
            color: var(--warna-teks-primer);
        }

        /* Style Formulir Black Matte */
        .form-control {
            background-color: #333;
            border: 1px solid var(--warna-batas);
            color: var(--warna-teks-primer);
            border-radius: 8px;
        }
        .form-control:focus {
            background-color: #444;
            border-color: var(--warna-kuning-highlight);
            box-shadow: none;
            color: var(--warna-teks-primer);
        }
        .form-control::placeholder {
            color: #888;
        }

        /* Info Kontak HQ */
        .contact-info-list {
            list-style: none;
            padding-left: 0;
        }
        .contact-info-list li {
            font-size: 1.1rem;
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }
        .contact-info-list .fas {
            color: var(--warna-kuning-highlight);
            width: 25px;
            margin-right: 15px;
            margin-top: 5px;
            text-align: center;
        }
        .contact-info-list span {
            display: block;
        }

        /* Google Maps Responsif */
        .map-responsive {
            overflow: hidden;
            padding-bottom: 75%; /* Rasio aspek 4:3, bisa diubah ke 56.25% untuk 16:9 */
            position: relative;
            height: 0;
            border-radius: 8px;
            border: 2px solid var(--warna-batas);
        }
        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        /* --- 4. Daftar Outlet --- */
        .outlet-section {
            background-color: #222; /* Sedikit beda untuk memisahkan section */
        }
        .card {
            background-color: var(--warna-permukaan);
            border: 1px solid var(--warna-batas);
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .card-header {
            background-color: #333;
            border-bottom: 1px solid var(--warna-batas);
            font-weight: 700;
            color: var(--warna-kuning-highlight);
        }
        .card-title {
            color: var(--warna-teks-primer);
        }
        .card-text {
            color: var(--warna-teks-sekunder);
        }
        .btn-danger {
            background-color: var(--warna-merah-cta);
            border-color: var(--warna-merah-cta);
            border-radius: 25px;
            font-weight: 600;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
        .btn-outline-danger {
            color: var(--warna-merah-cta);
            border-color: var(--warna-merah-cta);
            border-radius: 25px;
            font-weight: 600;
        }
        .btn-outline-danger:hover {
            background-color: var(--warna-merah-cta);
            border-color: var(--warna-merah-cta);
            color: #fff;
        }

        /* --- 5. Footer --- */
        footer {
            background-color: #111;
            color: var(--warna-teks-sekunder);
            padding: 50px 0 20px 0;
        }
        footer h5 {
            color: var(--warna-kuning-highlight);
            margin-bottom: 20px;
        }
        footer a {
            color: var(--warna-teks-sekunder);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: var(--warna-kuning-highlight);
        }
        footer ul {
            padding-left: 0;
            list-style: none;
        }
        footer li {
            margin-bottom: 10px;
        }
        .social-icons a {
            color: var(--warna-teks-sekunder);
            font-size: 1.5rem;
            margin-right: 15px;
        }
        .social-icons a:hover {
            color: var(--warna-kuning-highlight);
        }
        .footer-bottom {
            border-top: 1px solid var(--warna-batas);
            padding-top: 20px;
            margin-top: 20px;
        }

        /* --- 6. Floating WA Bubble --- */
        .wa-bubble {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: #fff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transition: transform 0.3s ease;
            display: none; /* Disembunyikan dulu, muncul via JS */
        }
        .wa-bubble:hover {
            transform: scale(1.1);
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- 1. Header & Navbar (SAMA PERSIS) -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <!-- Ganti dengan logo Anda -->
                <img src="https://placehold.co/150x50/1a1a1a/ffc107?text=MANTRA+SAKTI" alt="Mantra Sakti Autofilm Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kami.html">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduk" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produk & Layanan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownProduk">
                            <a class="dropdown-item" href="produk-spectra.html">Spectra Series</a>
                            <a class="dropdown-item" href="produk-black.html">Black Series</a>
                            <a class="dropdown-item" href="layanan-ppf.html">Paint Protection Film</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.html">Galeri</a>
                    </li>
                    <!-- Halaman Aktif Ditandai di Sini -->
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownKontak" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kontak & Outlet
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownKontak">
                            <a class="dropdown-item active" href="hubungi-kami.html">Hubungi Kami</a>
                            <a class="dropdown-item" href="semua-outlet.html">Daftar Semua Outlet</a>
                        </div>
                    </li>
                    <li class="nav-item ml-lg-2">
                        <a class="nav-link btn btn-cta-nav" href="#">Booking Online</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. Hero Section (Singkat) -->
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

    <!-- 3. Informasi Kontak Pusat & Formulir -->
    <section class="contact-hq">
        <div class="container">
            <h2 class="section-title">Hubungi Kantor Pusat</h2>
            <div class="row">
                
                <!-- Kolom Kiri: Formulir Kontak -->
                <div class="col-md-7 mb-5 mb-md-0">
                    <h3 class="contact-subtitle">Kirim Pertanyaan Anda</h3>
                    <p class="text-secondary mb-4">Punya pertanyaan umum, kritik, saran, atau peluang bisnis? Silakan isi formulir di bawah ini.</p>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formNama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="formNama" placeholder="Nama Anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formEmail">Alamat Email</label>
                                <input type="email" class="form-control" id="formEmail" placeholder="email@anda.com" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formTelepon">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="formTelepon" placeholder="0812xxxxxx">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formSubjek">Subjek</label>
                                <input type="text" class="form-control" id="formSubjek" placeholder="Subjek Pesan" required>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.471612053075!2d106.82496417585012!3d-6.20150036072462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fd540de!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1678888888888!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Daftar Jaringan Outlet -->
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
                            <p class="card-text">Ruko Saphire Commercial, Blok SA-10, Jl. Bulevar Selatan, Summarecon Bekasi.</p>
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
                <a href="semua-outlet.html" class="btn btn-lg btn-outline-warning" style="border-radius: 25px;">Lihat Semua Jaringan Outlet</a>
            </div>
        </div>
    </section>


    <!-- 5. Footer (SAMA PERSIS) -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Ganti dengan logo Anda -->
                    <img src="https://placehold.co/180x60/111/ffc107?text=MANTRA+SAKTI" alt="Mantra Sakti Footer Logo" class="mb-3" style="height: 60px;">
                    <p>Dealer resmi dan spesialis pemasangan kaca film premium. Kami memberikan solusi terbaik untuk kenyamanan dan keamanan berkendara Anda.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Navigasi</h5>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="tentang-kami.html">Tentang Kami</a></li>
                        <li><a href="galeri.html">Galeri</a></li>
                        <li><a href="hubungi-kami.html">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Produk Unggulan</h5>
                    <ul>
                        <li><a href="produk-spectra.html">Spectra Series</a></li>
                        <li><a href="produk-black.html">Black Series</a></li>
                        <li><a href="layanan-ppf.html">Paint Protection Film</a></li>
                        <li><a href="#">Layanan Detailing</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Hubungi Kami</h5>
                    <ul class="contact-info-list" style="font-size: 0.9rem;">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jl. Raya Autofilm No. 123, Jakarta Pusat</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>(021) 1234-5678</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@mantrasakti.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom">
                <div class="col-12 text-center">
                    <p>&copy; 2025 Mantra Sakti Autofilm. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- 6. Floating WA Bubble (SAMA PERSIS) -->
    <!-- Ganti NXXXX dengan nomor WA Anda -->
    <a href="https://api.whatsapp.com/send?phone=6281234567890&text=Halo%20Mantra%20Sakti,%20saya%20tertarik%20dengan%20produk%20Anda." class="wa-bubble" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>


    <!-- Bootstrap 4.5 JS, jQuery, dan Popper.js (SAMA PERSIS) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JS Kustom (SAMA PERSIS) -->
    <script>
        $(document).ready(function() {
            // Fungsionalitas WA Bubble (Contoh: Muncul setelah 2 detik)
            setTimeout(function() {
                $('.wa-bubble').fadeIn(500);
            }, 2000);

            // Tambahan: Smooth scroll jika diperlukan
            // ...
        });
    </script>
</body>
</html>