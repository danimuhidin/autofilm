<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Resmi - Mantra Sakti Autofilm</title>

    <!-- Bootstrap 4.6 CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" xintegrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <!-- Font Awesome 5 Free CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" xintegrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl Carousel 2 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" xintegrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" xintegrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4fuzrMi/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* == TEMA BLACK MATTE & KONSISTENSI == */
        :root {
            --primary-red: #d90429;
            --primary-yellow: #ffc107;
            --matte-black: #1a1a1a;
            --dark-gray: #2b2b2b;
            --light-gray: #f0f0f0;
            --medium-gray: #aaa;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--matte-black);
            color: var(--light-gray);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            color: #ffffff;
        }

        p {
            color: var(--medium-gray);
            line-height: 1.7;
        }

        a {
            color: var(--primary-yellow);
        }
        a:hover {
            color: #fff;
            text-decoration: none;
        }

        section {
            padding: 60px 0;
        }

        .btn-danger {
            background-color: var(--primary-red);
            border-color: var(--primary-red);
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #a0031e;
            border-color: #a0031e;
            transform: translateY(-2px);
        }

        /* == 1. NAVBAR (REPLIKASI) == */
        .navbar-dark {
            background-color: var(--dark-gray) !important;
            padding: 15px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #fff !important;
        }
        .navbar-brand span {
            color: var(--primary-red);
        }
        .navbar-nav .nav-link {
            color: var(--light-gray) !important;
            font-weight: 600;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-red) !important; /* Sorot halaman aktif */
        }
        .dropdown-menu {
            background-color: var(--dark-gray);
            border: 1px solid #444;
        }
        .dropdown-item {
            color: var(--light-gray);
            transition: all 0.3s ease;
        }
        .dropdown-item:hover {
            background-color: var(--primary-red);
            color: #fff;
        }

        /* == 2. HERO SECTION (SINGKAT) == */
        .hero-short {
            position: relative;
            min-height: 30vh;
            background-image: url('https://placehold.co/1920x400/2b2b2b/444?text=Kemitraan+Profesional');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
        }
        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
        }
        .breadcrumb {
            background: none;
            padding: 0;
            margin-top: 10px;
            justify-content: center;
        }
        .breadcrumb-item a {
            color: var(--primary-yellow);
        }
        .breadcrumb-item.active {
            color: var(--light-gray);
        }

        /* == 4. DAFTAR BRAND PARTNER == */
        .card.brand-card {
            background-color: var(--dark-gray);
            border: 1px solid #444;
            border-radius: 8px;
            transition: all 0.3s ease;
            height: 100%;
        }
        .card.brand-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }
        .card.brand-card .card-img-top {
            background-color: #fff; /* Latar putih untuk logo */
            padding: 20px;
            object-fit: contain;
            height: 150px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .card.brand-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* == 5. PARTNER WORKSHOP (LOGO SLIDER) == */
        .logo-carousel-section {
            background-color: #111; /* Latar abu-abu sangat gelap */
            padding: 40px 0;
        }
        .logo-carousel .item {
            padding: 20px;
            text-align: center;
        }
        .logo-carousel .item img {
            max-width: 150px;
            height: auto;
            filter: grayscale(100%) brightness(0.7);
            transition: filter 0.3s ease;
            opacity: 0.7;
        }
        .logo-carousel .item img:hover {
            filter: grayscale(0%) brightness(1);
            opacity: 1;
        }
        /* Style panah Owl Carousel */
        .logo-carousel-section .owl-nav button {
            color: var(--primary-yellow) !important;
            font-size: 2rem !important;
        }
        .logo-carousel-section .owl-nav button:hover {
            background: transparent !important;
            color: #fff !important;
        }

        /* == 6. AJAKAN MENJADI PARTNER (B2B) == */
        .b2b-features ul {
            list-style: none;
            padding-left: 0;
        }
        .b2b-features li {
            margin-bottom: 15px;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
        }
        .b2b-features li .fas {
            color: var(--primary-yellow);
            margin-right: 15px;
            font-size: 1.2rem;
            width: 20px;
        }
        .form-control {
            background-color: #333;
            border: 1px solid #444;
            color: white;
            border-radius: 5px;
            padding: 1.25rem 0.75rem;
        }
        .form-control:focus {
            background-color: #444;
            border-color: var(--primary-yellow);
            color: white;
            box-shadow: none;
        }
        .form-control::placeholder {
            color: #888;
        }
        .custom-select {
            background-color: #333;
            border: 1px solid #444;
            color: white;
            border-radius: 5px;
            height: calc(1.5em + 1.5rem + 2px); /* Samakan tinggi */
        }
        .custom-select:focus {
            border-color: var(--primary-yellow);
            box-shadow: none;
        }


        /* == 7. FOOTER (REPLIKASI) == */
        footer {
            background-color: var(--dark-gray);
            color: var(--medium-gray);
            padding: 60px 0 20px 0;
        }
        footer h5 {
            color: #fff;
            margin-bottom: 20px;
            font-weight: 600;
        }
        footer ul {
            list-style: none;
            padding-left: 0;
        }
        footer ul li a {
            color: var(--medium-gray);
            margin-bottom: 10px;
            display: inline-block;
            transition: color 0.3s ease;
        }
        footer ul li a:hover {
            color: var(--primary-yellow);
        }
        footer .social-icons a {
            color: #fff;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s ease;
        }
        footer .social-icons a:hover {
            color: var(--primary-yellow);
        }
        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            margin-top: 40px;
        }

        /* == 8. FLOATING WA BUBBLE (REPLIKASI) == */
        .wa-bubble {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1030;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.2rem;
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            transform: scale(0);
            transition: transform 0.3s ease-in-out;
        }
        .wa-bubble.show {
            transform: scale(1);
        }

    </style>
</head>
<body>

    <!-- 1. HEADER & NAVBAR -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">MANTRA<span>SAKTI</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tentang.html">Tentang Kami</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduk" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produk
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownProduk">
                                <a class="dropdown-item" href="produk-kategori.html?brand=3m">3M AutoFilm</a>
                                <a class="dropdown-item" href="produk-kategori.html?brand=vkool">V-Kool</a>
                                <a class="dropdown-item" href="produk-kategori.html?brand=huper">Huper Optik</a>
                                <div class="dropdown-divider" style="border-top: 1px solid #444;"></div>
                                <a class="dropdown-item" href="produk.html">Semua Produk</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeri.html">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <!-- Halaman ini aktif -->
                            <a class="nav-link active" href="partner.html">Partner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.html">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- 2. HERO SECTION (SINGKAT) -->
        <section class="container-fluid p-0">
            <div class="hero-short">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1>Partner & Jaringan Kami</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Partner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- 3. PENGANTAR KEMITRAAN -->
        <section class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h2 class="mb-4">Komitmen pada Keaslian dan Kemitraan</h2>
                    <p class="lead" style="color: var(--light-gray);">Di Mantra Sakti Autofilm, kami percaya bahwa bisnis yang hebat dibangun di atas kepercayaan. Itulah mengapa kami hanya bermitra dengan brand-brand terbaik dunia dan memastikan setiap produk yang kami distribusikan adalah 100% otentik dan bergaransi resmi.</p>
                    <p>Kami mendedikasikan diri untuk membangun kemitraan jangka panjang yang saling menguntungkan, baik dengan principal brand kami maupun dengan jaringan reseller dan workshop di seluruh Indonesia. Kami bukan hanya pemasok; kami adalah partner strategis Anda untuk bertumbuh.</p>
                </div>
            </div>
        </section>

        <!-- 4. DAFTAR BRAND PARTNER RESMI -->
        <section class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Brand yang Kami Distribusikan Secara Resmi</h2>
                    <p>Kami bangga menjadi distributor resmi untuk brand kaca film terkemuka di dunia.</p>
                </div>
            </div>

            <div class="row">
                <!-- Card Brand 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card brand-card">
                        <img src="https://placehold.co/400x150/ffffff/000000?text=3M+Logo&font=roboto" class="card-img-top" alt="Logo 3M">
                        <div class="card-body">
                            <h5 class="card-title">3M Automotive Window Films</h5>
                            <p class="card-text">Sebagai pelopor dalam teknologi kaca film, 3M menawarkan perlindungan superior terhadap panas dan UV dengan kejernihan optik yang tak tertandingi.</p>
                            <a href="#" class="btn btn-danger mt-3">Lihat Produk 3M</a>
                        </div>
                    </div>
                </div>

                <!-- Card Brand 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card brand-card">
                        <img src="https://placehold.co/400x150/ffffff/000000?text=V-KOOL+Logo&font=roboto" class="card-img-top" alt="Logo V-Kool">
                        <div class="card-body">
                            <h5 class="card-title">V-KOOL</h5>
                            <p class="card-text">Dikenal dengan teknologi XIR® eksklusifnya, V-Kool adalah pemimpin pasar premium yang menawarkan penolakan panas inframerah terbaik di kelasnya.</p>
                            <a href="#" class="btn btn-danger mt-3">Lihat Produk V-Kool</a>
                        </div>
                    </div>
                </div>

                <!-- Card Brand 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card brand-card">
                        <img src="https://placehold.co/400x150/ffffff/000000?text=Huper+Optik+Logo&font=roboto" class="card-img-top" alt="Logo Huper Optik">
                        <div class="card-body">
                            <h5 class="card-title">Hüper Optik</h5>
                            <p class="card-text">Menggunakan teknologi Nano-Ceramic canggih dari Jerman, Hüper Optik memberikan daya tahan dan performa tolak panas yang luar biasa tanpa gangguan sinyal.</p>
                            <a href="#" class="btn btn-danger mt-3">Lihat Produk Hüper Optik</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. PARTNER WORKSHOP & RESELLER (LOGO SLIDER) -->
        <section class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2>Dipercaya oleh Jaringan Workshop</h2>
                        <p>Kami mendukung ratusan workshop dan reseller di seluruh penjuru negeri.</p>
                    </div>
                </div>
                <div class="owl-carousel owl-theme logo-carousel">
                    <div class="item"><img src="https://placehold.co/150x80/777/FFF?text=Workshop+1" alt="Logo Workshop 1"></div>
                    <div class="item"><img src="https://placehold.co/150x80/777/FFF?text=Reseller+A" alt="Logo Reseller A"></div>
                    <div class="item"><img src="https://placehold.co/150x80/777/FFF?text=Toko+Otomotif" alt="Logo Toko Otomotif"></div>
                    <div class="item"><img src="https://placehold.co/150x80/777/FFF?text=Workshop+2" alt="Logo Workshop 2"></div>
                    <div class="item"><img src="https://placehold.co/150x80/777/FFF?text=Auto+Detailing" alt="Logo Auto Detailing"></div>
                    <div class="item"><img src="https://placehold.co/150x80/777/FFF?text=Workshop+3" alt="Logo Workshop 3"></div>
                    <div class="item"><img src="https://placehold.co/150x80/777/FFF?text=Reseller+B" alt="Logo Reseller B"></div>
                </div>
            </div>
        </section>

        <!-- 6. AJAKAN MENJADI PARTNER (B2B) -->
        <section class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Tertarik Menjadi Partner Kami?</h2>
                    <p>Bergabunglah dengan jaringan distributor dan reseller resmi Mantra Sakti Autofilm.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Kolom Kiri: Keuntungan -->
                <div class="col-md-6 mb-4 mb-md-0 b2b-features">
                    <h3 class="mb-4">Keuntungan Menjadi Partner</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> 100% Produk Original & Bergaransi Resmi</li>
                        <li><i class="fas fa-check"></i> Harga Distributor Khusus (B2B)</li>
                        <li><i class="fas fa-check"></i> Dukungan Marketing & Materi Promosi</li>
                        <li><i class="fas fa-check"></i> Pelatihan Produk & Teknik Pemasangan</li>
                        <li><i class="fas fa-check"></i> Program Insentif & Reward Menarik</li>
                        <li><i class="fas fa-check"></i> Prioritas Stok dan Dukungan Teknis</li>
                    </ul>
                </div>

                <!-- Kolom Kanan: Formulir -->
                <div class="col-md-6">
                    <h3 class="mb-4">Formulir Pengajuan Kemitraan</h3>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="namaBisnis" placeholder="Nama Bisnis / Workshop" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="namaKontak" placeholder="Nama Anda (Kontak Person)" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Email Bisnis" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" id="telepon" placeholder="No. Telepon / WA" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <select id="tipeKemitraan" class="custom-select" required>
                                <option value="" selected disabled>Pilih Tipe Kemitraan...</option>
                                <option value="reseller">Reseller / Toko</option>
                                <option value="workshop">Workshop / Jasa Pemasangan</option>
                                <option value="corporate">Corporate / Fleet</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan singkat mengenai bisnis Anda..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger btn-block">Ajukan Kemitraan</button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <!-- 7. FOOTER (REPLIKASI) -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Tentang Kami -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>MANTRA<span>SAKTI</span></h5>
                    <p>Distributor resmi kaca film premium 3M, V-Kool, dan Hüper Optik. Kami menjamin keaslian produk dan kualitas pemasangan terbaik.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <!-- Kolom 2: Quick Links -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Navigasi Cepat</h5>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="tentang.html">Tentang Kami</a></li>
                        <li><a href="produk.html">Produk</a></li>
                        <li><a href="galeri.html">Galeri</a></li>
                        <li><a href="partner.html">Partner</a></li>
                        <li><a href="kontak.html">Kontak</a></li>
                    </ul>
                </div>
                <!-- Kolom 3: Kategori Produk -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Kategori Produk</h5>
                    <ul>
                        <li><a href="#">3M Crystalline</a></li>
                        <li><a href="#">3M Black Beauty</a></li>
                        <li><a href="#">V-Kool VIP</a></li>
                        <li><a href="#">V-Kool 40</a></li>
                        <li><a href="#">Hüper Optik Ceramic</a></li>
                    </ul>
                </div>
                <!-- Kolom 4: Hubungi Kami -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Hubungi Kami</h5>
                    <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
                        <li><span class="fa-li"><i class="fas fa-map-marker-alt" style="color: var(--primary-yellow);"></i></span>Jl. Otomotif Raya No. 123, Jakarta, Indonesia</li>
                        <li><span class="fa-li"><i class="fas fa-phone-alt" style="color: var(--primary-yellow);"></i></span>(021) 1234 5678</li>
                        <li><span class="fa-li"><i class="fas fa-envelope" style="color: var(--primary-yellow);"></i></span>info@mantrasaktifilm.com</li>
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

    <!-- 8. FLOATING WA BUBBLE (REPLIKASI) -->
    <a href="https://wa.me/6281234567890" target="_blank" class="wa-bubble" id="waBubble">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- SCRIPTS -->
    <!-- jQuery 3.5.1 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" xintegrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Bootstrap 4.6 JS (Termasuk Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Owl Carousel 2 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" xintegrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom JS untuk WA Bubble & Owl Carousel -->
    <script>
        $(document).ready(function(){

            // 1. Inisialisasi Owl Carousel untuk Logo Partner
            $('.logo-carousel').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayHoverPause: true,
                nav: false, // Anda bisa set ke true jika ingin panah navigasi
                dots: true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });

            // 2. Fungsionalitas Floating WA Bubble
            var waBubble = $('#waBubble');
            
            // Tampilkan bubble setelah 2 detik
            setTimeout(function() {
                waBubble.addClass('show');
            }, 2000);

            // Atau bisa juga tampilkan setelah scroll
            /*
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) { // Tampil setelah scroll 200px
                    waBubble.addClass('show');
                } else {
                    waBubble.removeClass('show');
                }
            });
            */

        });
    </script>

</body>
</html>