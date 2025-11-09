<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung HQ</title>

    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome Free CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        /*
        ========================================
        Desain Kustom - Mantra Sakti Autofilm
        Tema: Black Matte, Mewah, Modern
        Aksen: Merah (#FF0000), Kuning (#FFD700)
        ========================================
        */

        :root {
            --warna-latar-gelap: #1a1a1a; /* Black Matte */
            --warna-latar-sekunder: #2b2b2b;
            --warna-teks-putih: #f0f0f0;
            --warna-merah-aksen: #FF0000;
            --warna-kuning-aksen: #FFD700;
            --warna-gelap-transparan: rgba(0, 0, 0, 0.75);
            --font-utama: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--font-utama);
            background-color: var(--warna-latar-gelap);
            color: var(--warna-teks-putih);
            position: relative;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            color: var(--warna-teks-putih);
        }

        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--warna-kuning-aksen);
        }
        .section-title p {
            color: #ccc;
        }

        .btn-merah {
            background-color: var(--warna-merah-aksen);
            color: #fff;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            border: none;
        }
        .btn-merah:hover {
            background-color: #cc0000;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
        }

        /* 1. Navbar */
        .navbar {
            background-color: var(--warna-gelap-transparan);
            transition: background-color 0.4s ease-out;
            padding: 15px 0;
        }
        .navbar.scrolled {
            background-color: #111; /* Latar belakang solid saat di-scroll */
            box-shadow: 0 3px 10px rgba(0,0,0,0.5);
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--warna-kuning-aksen) !important;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-item.active .nav-link {
            color: var(--warna-kuning-aksen) !important;
        }
        .dropdown-menu {
            background-color: #111;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }
        .dropdown-item {
            color: var(--warna-teks-putih);
            transition: all 0.3s;
        }
        .dropdown-item:hover {
            background-color: var(--warna-merah-aksen);
            color: #fff;
        }

        /* 2. Hero Section (Owl Carousel) */
        .hero-carousel .item {
            height: 100vh;
            min-height: 500px;
            position: relative;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero-content {
            color: #fff;
        }
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
        }
        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }
        /* Style kustom nav Owl Carousel */
        .hero-carousel .owl-nav .owl-prev,
        .hero-carousel .owl-nav .owl-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 3rem !important;
            color: rgba(255, 255, 255, 0.7) !important;
            transition: color 0.3s;
        }
        .hero-carousel .owl-nav .owl-prev:hover,
        .hero-carousel .owl-nav .owl-next:hover {
            color: var(--warna-kuning-aksen) !important;
        }
        .hero-carousel .owl-nav .owl-prev { left: 20px; }
        .hero-carousel .owl-nav .owl-next { right: 20px; }

        /* 3. Perkenalan */
        #tentang-kami img {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        /* 4. Teaser Produk */
        .card.produk-card {
            background-color: var(--warna-latar-sekunder);
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .card.produk-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(255, 215, 0, 0.1);
        }
        .card.produk-card .card-body {
            text-align: center;
        }
        .card.produk-card .card-title {
            color: var(--warna-kuning-aksen);
        }

        /* 5. Keunggulan */
        .keunggulan-item {
            text-align: center;
            padding: 20px;
        }
        .keunggulan-item .icon {
            font-size: 3.5rem;
            color: var(--warna-kuning-aksen);
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .keunggulan-item:hover .icon {
            transform: scale(1.1);
        }
        .keunggulan-item h4 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        /* 6. Galeri & Video */
        .gallery-img {
            display: block;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .gallery-img img {
            transition: transform 0.4s ease;
        }
        .gallery-img:hover img {
            transform: scale(1.1);
        }
        .embed-responsive {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* 7. Testimoni */
        #testimoni {
            background-color: var(--warna-latar-sekunder);
        }
        .testimoni-item {
            background-color: var(--warna-latar-gelap);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            margin: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .testimoni-item .quote {
            font-size: 1.1rem;
            font-style: italic;
            color: #ccc;
        }
        .testimoni-item .author {
            font-weight: 600;
            color: var(--warna-kuning-aksen);
            margin-top: 15px;
        }
        .testimoni-item .stars {
            color: #FFC107; /* Bintang Kuning */
            margin-top: 10px;
        }
        /* Style kustom dots Owl Carousel */
        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: var(--warna-kuning-aksen) !important;
        }

        /* 8. Partner */
        .partner-logo {
            text-align: center;
            padding: 15px;
        }
        .partner-logo img {
            max-height: 60px;
            filter: grayscale(100%) opacity(0.6);
            transition: all 0.3s ease;
        }
        .partner-logo img:hover {
            filter: grayscale(0%) opacity(1);
            transform: scale(1.1);
        }

        /* 9. Kontak & Outlet */
        .form-control {
            background-color: var(--warna-latar-sekunder);
            border: 1px solid #444;
            color: var(--warna-teks-putih);
            border-radius: 5px;
        }
        .form-control:focus {
            background-color: #333;
            color: var(--warna-teks-putih);
            border-color: var(--warna-kuning-aksen);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.2);
        }
        .contact-info i {
            width: 30px;
            color: var(--warna-kuning-aksen);
        }
        .card.outlet-card {
            background-color: var(--warna-latar-sekunder);
            border: none;
            border-radius: 10px;
        }
        .btn-kuning {
            background-color: var(--warna-kuning-aksen);
            color: #111;
            font-weight: 600;
            border: none;
        }
        .btn-kuning:hover {
            background-color: #dab600;
            color: #000;
        }

        /* 10. Footer */
        footer {
            background-color: #111;
            color: #ccc;
            padding: 60px 0 20px 0;
        }
        footer h5 {
            color: var(--warna-kuning-aksen);
            margin-bottom: 20px;
        }
        footer p, footer ul {
            font-size: 0.9rem;
        }
        footer ul {
            list-style: none;
            padding-left: 0;
        }
        footer ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }
        footer ul li a:hover {
            color: var(--warna-kuning-aksen);
        }
        .social-icons a {
            color: #ccc;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: var(--warna-kuning-aksen);
        }
        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            font-size: 0.85rem;
        }

        /* 11. Floating WA Bubble */
        .wa-bubble-wrapper {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        #wa-toggle {
            background-color: #25D366; /* Warna khas WA */
            color: #fff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }
        #wa-toggle:hover {
            transform: scale(1.1);
        }
        #wa-menu {
            display: none; /* Awalnya disembunyikan */
            position: absolute;
            bottom: 70px; /* Muncul di atas bubble */
            right: 0;
            width: 220px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            font-weight: 500;
        }
        #wa-menu a {
            display: block;
            padding: 12px 15px;
            color: #333;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s;
        }
        #wa-menu a:hover {
            background-color: #f0f0f0;
        }
        #wa-menu a:last-child {
            border-bottom: none;
        }
        #wa-menu a i {
            margin-right: 10px;
            color: #25D366;
        }


        /* Penyesuaian Responsif */
        @media (max-width: 991.98px) {
            .navbar {
                background-color: #111; /* Latar solid di mobile/tablet */
            }
            .hero-carousel .item {
                height: 70vh;
            }
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .contact-form {
                margin-bottom: 30px;
            }
        }
        @media (max-width: 767.98px) {
            .hero-carousel .item {
                height: 60vh;
            }
            .hero-content h1 {
                font-size: 2rem;
            }
            .section-padding {
                padding: 60px 0;
            }
            .section-title h2 {
                font-size: 2rem;
            }
            .keunggulan-item {
                margin-bottom: 20px;
            }
            .video-wrapper {
                margin-bottom: 30px;
            }
            footer .col-md-3 {
                margin-bottom: 30px;
            }
        }

    </style>
</head>

<!-- Body dengan data-spy untuk Bootstrap ScrollSpy -->
<body data-spy="scroll" data-target="#mainNavbar" data-offset="80">

    <!-- 1. Header & Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
            <div class="container">
                <a class="navbar-brand" href="#home">Mantra Sakti</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduk" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produk Kami
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownProduk">
                                <a class="dropdown-item" href="#produk-kami">Kaca Film Mobil</a>
                                <a class="dropdown-item" href="#produk-kami">Kaca Film Gedung</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galeri">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownKontak" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kontak & Outlet
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownKontak">
                                <a class="dropdown-item" href="#kontak-outlet">Hubungi Kami (HQ)</a>
                                <a class="dropdown-item" href="#daftar-outlet">Daftar Outlet</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#partner">Partner</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- 2. Hero Section (Carousel) -->
    <section class="hero-carousel p-0" id="home">
        <div class="owl-carousel owl-theme" id="hero-slider">
            <!-- Slide 1 -->
            <div class="item" style="background-image: url('https://placehold.co/1920x1080/222/FFF?text=Mobil+Mewah+Tertinted');">
                <div class="hero-overlay">
                    <div class="container hero-content">
                        <h1>Privasi dan Perlindungan Terbaik</h1>
                        <p>Rasakan kenyamanan berkendara premium dengan kaca film terbaik.</p>
                        <a href="#kontak-outlet" class="btn btn-merah">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="item" style="background-image: url('https://placehold.co/1920x1080/333/FFF?text=Gedung+Modern+Reflektif');">
                <div class="hero-overlay">
                    <div class="container hero-content">
                        <h1>Solusi Efisiensi Energi Gedung</h1>
                        <p>Kurangi panas dan hemat biaya operasional dengan kaca film arsitektural.</p>
                        <a href="#kontak-outlet" class="btn btn-merah">Hubungi Tim Proyek</a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="item" style="background-image: url('https://placehold.co/1920x1080/444/FFF?text=Interior+Mobil+Sejuk');">
                <div class="hero-overlay">
                    <div class="container hero-content">
                        <h1>Kualitas Premium, Pemasangan Presisi</h1>
                        <p>Didukung oleh teknisi profesional dan produk bergaransi resmi.</p>
                        <a href="#kontak-outlet" class="btn btn-merah">Booking Pemasangan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Perkenalan Perusahaan (Tentang Kami) -->
    <section id="tentang-kami" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://placehold.co/600x400/FFD700/1a1a1a?text=Mantra+Sakti+HQ" class="img-fluid rounded" alt="Gedung Mantra Sakti Autofilm">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-3" style="color: var(--warna-kuning-aksen);">Selamat Datang di Mantra Sakti Autofilm</h2>
                    <h4 class="mb-4">Pusat Kaca Film Premium di Indonesia</h4>
                    <p class="text-white-50">Mantra Sakti Autofilm adalah distributor utama dan pusat spesialis pemasangan kaca film premium untuk otomotif dan arsitektural. Sebagai kantor pusat, kami menjamin ketersediaan produk original, standar pemasangan tertinggi, dan layanan garansi resmi yang terpercaya.</p>
                    <p class="text-white-50">Kami tidak hanya melayani pelanggan retail, tetapi juga menjadi mitra terpercaya bagi jaringan outlet kami yang tersebar di berbagai kota. Percayakan kebutuhan privasi, keamanan, dan estetika Anda pada ahlinya.</p>
                    <a href="#produk-kami" class="btn btn-outline-warning mt-3">Lihat Produk Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Teaser Produk Unggulan -->
    <section id="produk-kami" class="section-padding" style="background-color: var(--warna-latar-sekunder);">
        <div class="container">
            <div class="section-title">
                <h2>Produk & Layanan Kami</h2>
                <p>Solusi lengkap untuk kebutuhan kaca film Anda.</p>
            </div>
            <div class="row">
                <!-- Produk 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card produk-card h-100">
                        <img src="https://placehold.co/600x400/555/FFF?text=Kaca+Film+Mobil" class="card-img-top" alt="Kaca Film Mobil">
                        <div class="card-body">
                            <h4 class="card-title">Kaca Film Mobil</h4>
                            <p class="card-text text-white-50">Tingkatkan privasi, tolak panas UV, dan tampil lebih elegan. Tersedia berbagai brand premium dengan tingkat kegelapan bervariasi.</p>
                        </div>
                    </div>
                </div>
                <!-- Produk 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card produk-card h-100">
                        <img src="https://placehold.co/600x400/666/FFF?text=Kaca+Film+Gedung" class="card-img-top" alt="Kaca Film Gedung">
                        <div class="card-body">
                            <h4 class="card-title">Kaca Film Gedung</h4>
                            <p class="card-text text-white-50">Solusi hemat energi untuk kantor, ruko, dan residensial. Menjaga suhu ruangan tetap sejuk dan melindungi interior dari pudar.</p>
                        </div>
                    </div>
                </div>
                <!-- Produk 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card produk-card h-100">
                        <img src="https://placehold.co/600x400/777/FFF?text=Pemasangan+Profesional" class="card-img-top" alt="Layanan Pemasangan Profesional">
                        <div class="card-body">
                            <h4 class="card-title">Pemasangan Profesional</h4>
                            <p class="card-text text-white-50">Teknisi kami tersertifikasi dan berpengalaman, menjamin pemasangan yang presisi, bebas gelembung, dan bergaransi resmi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Keunggulan (Why Choose Us) -->
    <section id="keunggulan" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Mengapa Memilih Mantra Sakti?</h2>
                <p>Komitmen kami adalah kepuasan dan jaminan kualitas.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-shield-alt"></i></div>
                        <h4>Garansi Resmi</h4>
                        <p class="text-white-50">Jaminan garansi produk resmi hingga 7 tahun dari brand partner terkemuka.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-users-cog"></i></div>
                        <h4>Teknisi Profesional</h4>
                        <p class="text-white-50">Tim installer kami terlatih dan tersertifikasi untuk hasil pemasangan terbaik.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-thumbs-up"></i></div>
                        <h4>Produk Original</h4>
                        <p class="text-white-50">Kami hanya menyediakan produk 100% asli dan berkualitas tinggi dari brand terpercaya.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="keunggulan-item">
                        <div class="icon"><i class="fas fa-check-circle"></i></div>
                        <h4>Hasil Presisi</h4>
                        <p class="text-white-50">Pemasangan detail dan rapi tanpa celah, gelembung, atau cacat sedikitpun.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Teaser Galeri & Video Showcase -->
    <section id="galeri" class="section-padding" style="background-color: var(--warna-latar-sekunder);">
        <div class="container">
            <div class="section-title">
                <h2>Portofolio Pemasangan Kami</h2>
                <p>Lihat hasil kerja presisi dari tim profesional kami.</p>
            </div>
            
            <!-- Teaser Galeri -->
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 col-6"><a href="https://placehold.co/600x400/888/FFF?text=Galeri+1" class="gallery-img"><img src="https://placehold.co/600x400/888/FFF?text=Galeri+1" class="img-fluid" alt="Galeri 1"></a></div>
                <div class="col-lg-4 col-md-6 col-6"><a href="https://placehold.co/600x400/888/FFF?text=Galeri+2" class="gallery-img"><img src="https://placehold.co/600x400/888/FFF?text=Galeri+2" class="img-fluid" alt="Galeri 2"></a></div>
                <div class="col-lg-4 col-md-6 col-6"><a href="https://placehold.co/600x400/888/FFF?text=Galeri+3" class="gallery-img"><img src="https://placehold.co/600x400/888/FFF?text=Galeri+3" class="img-fluid" alt="Galeri 3"></a></div>
                <div class="col-lg-4 col-md-6 col-6"><a href="https://placehold.co/600x400/888/FFF?text=Galeri+4" class="gallery-img"><img src="https://placehold.co/600x400/888/FFF?text=Galeri+4" class="img-fluid" alt="Galeri 4"></a></div>
                <div class="col-lg-4 col-md-6 col-6"><a href="https://placehold.co/600x400/888/FFF?text=Galeri+5" class="gallery-img"><img src="https://placehold.co/600x400/888/FFF?text=Galeri+5" class="img-fluid" alt="Galeri 5"></a></div>
                <div class="col-lg-4 col-md-6 col-6"><a href="https://placehold.co/600x400/888/FFF?text=Galeri+6" class="gallery-img"><img src="https://placehold.co/600x400/888/FFF?text=Galeri+6" class="img-fluid" alt="Galeri 6"></a></div>
            </div>

            <!-- Video Showcase -->
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 video-wrapper">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- Ganti URL dengan video YouTube Anda -->
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 video-wrapper">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- Ganti URL dengan video YouTube Anda -->
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Testimoni (Carousel) -->
    <section id="testimoni" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Pelanggan Kami</h2>
                <p>Kepuasan mereka adalah prioritas utama kami.</p>
            </div>
            <div class="owl-carousel owl-theme" id="testimoni-slider">
                <!-- Testimoni 1 -->
                <div class="item">
                    <div class="testimoni-item">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="quote">"Pemasangan sangat rapi dan presisi. Mobil jadi jauh lebih adem dan tampilannya makin gagah. Pelayanan di HQ sangat profesional!"</p>
                        <h5 class="author">Budi Setiawan</h5>
                    </div>
                </div>
                <!-- Testimoni 2 -->
                <div class="item">
                    <div class="testimoni-item">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="quote">"Konsultasi untuk kaca film gedung sangat membantu. Tim Mantra Sakti memberikan solusi yang tepat untuk kantor kami. Sangat direkomendasikan."</p>
                        <h5 class="author">Citra Lestari</h5>
                    </div>
                </div>
                <!-- Testimoni 3 -->
                <div class="item">
                    <div class="testimoni-item">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="quote">"Produk 100% original, garansi resmi jelas. Teknisi ramah dan sangat teliti. Tidak salah pilih Mantra Sakti sebagai pusatnya."</p>
                        <h5 class="author">Andi Wijaya</h5>
                    </div>
                </div>
                <!-- Testimoni 4 -->
                <div class="item">
                    <div class="testimoni-item">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="quote">"Pelayanan cepat dan hasilnya memuaskan. Dari sekian banyak tempat, di sinilah yang paling terpercaya kualitas dan orisinalitasnya."</p>
                        <h5 class="author">Rina Maheswari</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Partner (Logo Brand) -->
    <section id="partner" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Brand Partner Resmi Kami</h2>
                <p>Kami hanya bekerja dengan brand terbaik dan terpercaya.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-6 partner-logo"><img src="https://placehold.co/150x80/eee/aaa?text=Brand+1" alt="Partner 1" class="img-fluid"></div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo"><img src="https://placehold.co/150x80/eee/aaa?text=Brand+2" alt="Partner 2" class="img-fluid"></div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo"><img src="https://placehold.co/150x80/eee/aaa?text=Brand+3" alt="Partner 3" class="img-fluid"></div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo"><img src="https://placehold.co/150x80/eee/aaa?text=Brand+4" alt="Partner 4" class="img-fluid"></div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo"><img src="https://placehold.co/150x80/eee/aaa?text=Brand+5" alt="Partner 5" class="img-fluid"></div>
                <div class="col-lg-2 col-md-4 col-6 partner-logo"><img src="https://placehold.co/150x80/eee/aaa?text=Brand+6" alt="Partner 6" class="img-fluid"></div>
            </div>
        </div>
    </section>

    <!-- 9. Kontak & Daftar Outlet -->
    <section id="kontak-outlet" class="section-padding" style="background-color: var(--warna-latar-sekunder);">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Kami & Temukan Outlet</h2>
                <p>Siap membantu kebutuhan Anda di Kantor Pusat atau cabang terdekat.</p>
            </div>
            
            <!-- Bagian 1: Kontak Pusat (HQ) -->
            <div class="row mb-5">
                <!-- Kiri: Formulir Kontak -->
                <div class="col-lg-7 mb-4 mb-lg-0 contact-form">
                    <h4>Kirim Pertanyaan (Kantor Pusat)</h4>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama Anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email Anda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTelepon">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="inputTelepon" placeholder="cth: 08123456789">
                        </div>
                        <div class="form-group">
                            <label for="inputPesan">Pesan Anda</label>
                            <textarea class="form-control" id="inputPesan" rows="5" placeholder="Tuliskan kebutuhan atau pertanyaan Anda..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-merah">Kirim Pesan</button>
                    </form>
                </div>

                <!-- Kanan: Info Kontak Pusat -->
                <div class="col-lg-5">
                    <h4>Informasi Kantor Pusat (HQ)</h4>
                    <p class="text-white-50">Hubungi kami langsung di kantor pusat untuk layanan korporat, kemitraan, atau konsultasi proyek skala besar.</p>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Raya Pusat No. 123, Jakarta, Indonesia</p>
                        <p><i class="fas fa-phone-alt"></i> (021) 1234 5678</p>
                        <p><i class="fas fa-envelope"></i> hq@mantrasakti.com</p>
                        <p><i class="fas fa-clock"></i> <strong>Jam Operasional HQ:</strong><br>
                           Senin - Jumat: 08.00 - 17.00<br>
                           Sabtu: 08.00 - 14.00<br>
                           Minggu/Libur: Tutup</p>
                    </div>
                </div>
            </div>

            <!-- Bagian 2: Daftar Outlet Cabang -->
            <div id="daftar-outlet" class="pt-5">
                <h3 class="text-center mb-4">Jaringan Outlet Resmi Kami</h3>
                <div class="row">
                    <!-- Outlet 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title" style="color: var(--warna-kuning-aksen);">Mantra Sakti - Jakarta</h5>
                                <p class="card-text text-white-50">Jl. Otomotif Raya No. 1, Kelapa Gading, Jakarta Utara</p>
                                <p class="card-text text-white-50"><i class="fas fa-phone-alt"></i> (021) 9876 5432</p>
                                <a href="#" class="btn btn-kuning btn-sm">Lihat Google Maps</a>
                            </div>
                        </div>
                    </div>
                    <!-- Outlet 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title" style="color: var(--warna-kuning-aksen);">Mantra Sakti - Surabaya</h5>
                                <p class="card-text text-white-50">Jl. Raya Darmo No. 45, Wonokromo, Surabaya</p>
                                <p class="card-text text-white-50"><i class="fas fa-phone-alt"></i> (031) 1234 5678</p>
                                <a href="#" class="btn btn-kuning btn-sm">Lihat Google Maps</a>
                            </div>
                        </div>
                    </div>
                    <!-- Outlet 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title" style="color: var(--warna-kuning-aksen);">Mantra Sakti - Bandung</h5>
                                <p class="card-text text-white-50">Jl. Sukajadi No. 99, Sukasari, Bandung</p>
                                <p class="card-text text-white-50"><i class="fas fa-phone-alt"></i> (022) 8765 4321</p>
                                <a href="#" class="btn btn-kuning btn-sm">Lihat Google Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Logo & Deskripsi -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="navbar-brand" style="font-size: 2rem;">Mantra Sakti</h5>
                    <p>Pusat distributor dan spesialis pemasangan kaca film premium untuk otomotif dan gedung. Kualitas, orisinalitas, dan garansi adalah prioritas kami.</p>
                </div>
                <!-- Kolom 2: Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#produk-kami">Produk</a></li>
                        <li><a href="#galeri">Galeri</a></li>
                        <li><a href="#tentang-kami">Tentang Kami</a></li>
                        <li><a href="#kontak-outlet">Kontak</a></li>
                    </ul>
                </div>
                <!-- Kolom 3: Kontak HQ -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Kontak HQ</h5>
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Jl. Raya Pusat No. 123, Jakarta
                    </p>
                    <p>
                        <i class="fas fa-phone-alt"></i> (021) 1234 5678
                    </p>
                    <p>
                        <i class="fas fa-envelope"></i> hq@mantrasakti.com
                    </p>
                </div>
                <!-- Kolom 4: Media Sosial -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Ikuti Kami</h5>
                    <p>Dapatkan info terbaru dan promo menarik.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Mantra Sakti Autofilm. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- 11. Elemen Global: Floating WhatsApp Bubble -->
    <div class="wa-bubble-wrapper">
        <!-- Div menu yang awalnya tersembunyi -->
        <div id="wa-menu">
            <!-- Ganti 62... dengan nomor WA yang sesuai -->
            <a href="https://wa.me/6281234567001" target="_blank">
                <i class="fas fa-car"></i> Admin 1 (Mobil)
            </a>
            <a href="https://wa.me/6281234567002" target="_blank">
                <i class="fas fa-building"></i> Admin 2 (Gedung)
            </a>
            <a href="https://wa.me/6281234567003" target="_blank">
                <i class="fas fa-map-pin"></i> Outlet Jakarta
            </a>
            <a href="https://wa.me/6281234567004" target="_blank">
                <i class="fas fa-map-pin"></i> Outlet Surabaya
            </a>
            <a href="https://wa.me/6281234567005" target="_blank">
                <i class="fas fa-exclamation-circle"></i> Layanan Komplain
            </a>
        </div>
        <!-- Bubble utama untuk toggle -->
        <div id="wa-toggle">
            <i class="fab fa-whatsapp"></i>
        </div>
    </div>


    <!-- JavaScript Libraries (Harus diletakkan sebelum </body>) -->
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- Bootstrap 4 JS (Bundle - termasuk Popper.js) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Skrip Kustom -->
    <script>
        $(document).ready(function(){

            // 1. Inisialisasi Owl Carousel untuk Hero
            $('#hero-slider').owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                nav: true, // Menampilkan navigasi (panah)
                dots: false, // Menyembunyikan dots
                autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                animateOut: 'fadeOut', // Efek transisi
                navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
            });

            // 2. Inisialisasi Owl Carousel untuk Testimoni
            $('#testimoni-slider').owlCarousel({
                loop: true,
                margin: 30,
                nav: false, // Menyembunyikan navigasi (panah)
                dots: true, // Menampilkan dots
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1
                    },
                    768:{
                        items:2
                    },
                    992:{
                        items:3
                    }
                }
            });

            // 3. Fungsionalitas Navbar (Background solid saat scroll)
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('.navbar').addClass('scrolled');
                } else {
                    $('.navbar').removeClass('scrolled');
                }
            });

            // 4. Fungsionalitas Smooth Scroll untuk link Navbar
            $('a.nav-link[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 70 // Offset 70px untuk fixed navbar
                    }, 800); // Durasi scroll
                }
                
                // Menutup menu mobile setelah diklik (jika terbuka)
                if($('.navbar-toggler').is(':visible')) {
                    $('.navbar-collapse').collapse('hide');
                }
            });

            // 5. Fungsionalitas Floating WA Bubble (REVISI BARU)
            $('#wa-toggle').on('click', function() {
                // Menggunakan slideToggle untuk memunculkan/menyembunyikan menu
                $('#wa-menu').slideToggle(300);
            });

        });
    </script>

</body>
</html>

{{-- @extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')
    <section class="hero-kategori container-fluid p-0">
        <div class="container">
            <h1 class="display-4">Kaca Film Mobil</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Produk Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kaca Film Mobil</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="deskripsi-kategori py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <h2 class="mb-3">Solusi Privasi dan Perlindungan Total Untuk Mobil Anda</h2>
                    <p class="lead text-muted-light">
                        Kaca film bukan hanya soal gaya atau membuat mobil terlihat lebih gelap. Ini adalah investasi vital
                        untuk kenyamanan, privasi, dan keamanan Anda selama berkendara.
                    </p>
                    <p>
                        Di Mantra Sakti Autofilm, kami menyediakan rangkaian produk kaca film premium yang dirancang khusus
                        untuk iklim tropis Indonesia. Produk kami menawarkan penolakan panas (TSER) superior, perlindungan
                        99.9% terhadap sinar UV yang berbahaya, serta berbagai tingkat kegelapan (VLT) untuk menyesuaikan
                        kebutuhan privasi Anda tanpa mengorbankan visibilitas di malam hari.
                    </p>
                    <a href="#daftar-produk" class="btn btn-warning mt-3">Lihat Pilihan Produk</a>
                </div>
                <div class="col-lg-5 text-center d-none d-lg-block">
                    <div class="icon-wrapper">
                        <!-- Ikon besar yang relevan -->
                        <i class="fas fa-car"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="daftar-produk py-5" id="daftar-produk">
        <div class="container py-4">
            <h3 class="text-center mb-5">Pilihan Produk Kaca Film Mobil</h3>

            <div class="row">
                <!-- Produk 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/ffffff/111111?text=3M+Logo" class="card-img-top"
                            alt="Logo 3M Crystalline">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">3M Crystalline Series</h5>
                            <p class="card-text text-muted-light small">
                                Teknologi nano-film optik multilayer yang superior, menolak panas lebih baik dari film gelap
                                konvensional.
                            </p>
                            <ul class="list-unstyled small my-3">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 70%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UV Rejection:</strong> 99.9%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>TSER (Tolak Panas):</strong>
                                    Hingga 62%</li>
                            </ul>
                            <a href="#" class="btn btn-danger mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/ffffff/111111?text=V-Kool+Logo" class="card-img-top"
                            alt="Logo V-Kool Solitaire">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">V-Kool Solitaire</h5>
                            <p class="card-text text-muted-light small">
                                Dikenal dengan kejernihan pandang (clear view) yang luar biasa sambil memberikan
                                perlindungan panas maksimal.
                            </p>
                            <ul class="list-unstyled small my-3">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 40% - 70%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UV Rejection:</strong> 99.9%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>TSER (Tolak Panas):</strong>
                                    Hingga 70%</li>
                            </ul>
                            <a href="#" class="btn btn-danger mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="https://placehold.co/600x400/ffffff/111111?text=Spectrum+Logo" class="card-img-top"
                            alt="Logo Spectrum Black">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Spectrum Black IR</h5>
                            <p class="card-text text-muted-light small">
                                Memberikan tampilan hitam pekat yang elegan untuk privasi maksimal dengan teknologi penolak
                                inframerah (IR).
                            </p>
                            <ul class="list-unstyled small my-3">
                                <li><i class="fas fa-sun fa-fw"></i> <strong>VLT (Kegelapan):</strong> 20% - 80%</li>
                                <li><i class="fas fa-shield-alt fa-fw"></i> <strong>UV Rejection:</strong> 99%</li>
                                <li><i class="fas fa-thermometer-half fa-fw"></i> <strong>TSER (Tolak Panas):</strong>
                                    Hingga 55%</li>
                            </ul>
                            <a href="#" class="btn btn-danger mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-kategori py-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <h2 class="display-4 font-weight-bold">Bingung Memilih Produk?</h2>
                    <p class="lead my-4">
                        Konsultan kami siap membantu Anda menemukan kaca film yang paling sesuai dengan kebutuhan, tipe
                        mobil, dan anggaran Anda.
                    </p>
                    <!-- Tombol Kuning kontras di atas background merah -->
                    <a href="https://api.whatsapp.com/send?phone=628123456789&text=Halo%20Mantra%20Sakti%2C%20saya%20butuh%20konsultasi%20kaca%20film."
                        class="btn btn-warning btn-lg" target="_blank">
                        <i class="fab fa-whatsapp"></i> Konsultasi Gratis Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection --}}