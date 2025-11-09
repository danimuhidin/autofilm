<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Portofolio - Mantra Sakti Autofilm</title>
    
    <!-- Bootstrap 4.5.2 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome Free 5.15.1 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <!-- Lightbox2 CSS CDN (Requirement) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    
    <!-- Google Fonts (Konsistensi) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- CSS Kustom (Konsistensi Tema) -->
    <style>
        /*
        ========================================
        TEMA GLOBAL & KONSISTENSI
        (Hitam Dof, Aksen Merah & Kuning)
        ========================================
        */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212; /* Latar belakang hitam dof gelap */
            color: #f1f1f1;
            overflow-x: hidden; /* Mencegah scroll horizontal */
        }

        /* Warna Kustom */
        .text-yellow {
            color: #fca311 !important; /* Kuning highlight */
        }
        .text-red {
            color: #d90429 !important; /* Merah CTA */
        }
        .bg-matte-black {
            background-color: #1a1a1a !important; /* Hitam dof lebih pekat */
        }
        
        /* Tombol Kustom */
        .btn-danger-custom {
            background-color: #d90429;
            border-color: #d90429;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 25px;
            padding: 10px 30px;
            transition: all 0.3s ease;
        }
        .btn-danger-custom:hover {
            background-color: #b00321;
            border-color: #b00321;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(217, 4, 41, 0.3);
        }

        /*
        ========================================
        1. NAVBAR (REUSABLE)
        ========================================
        */
        .navbar {
            border-bottom: 3px solid #d90429; /* Aksen merah */
            padding: 1rem 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }
        .navbar-brand .fa-star {
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            font-weight: 600;
            color: #f1f1f1;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #fca311; /* Kuning saat hover */
        }
        .navbar-nav .nav-link.active {
            color: #fca311 !important; /* Kuning untuk link aktif */
        }
        .dropdown-menu {
            background-color: #1a1a1a;
            border: 1px solid #333;
        }
        .dropdown-item {
            color: #f1f1f1;
        }
        .dropdown-item:hover {
            background-color: #d90429;
            color: #fff;
        }

        /*
        ========================================
        2. HERO SECTION GALERI (KHUSUS HALAMAN INI)
        ========================================
        */
        .gallery-hero {
            position: relative;
            min-height: 35vh;
            background: url('https://placehold.co/1920x400/000000/333333?text=Galeri+Portofolio+Kami') no-repeat center center;
            background-size: cover;
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
            background-color: rgba(0, 0, 0, 0.75); /* Overlay lebih gelap */
        }
        .hero-content {
            position: relative;
            z-index: 2;
            padding: 2rem;
        }
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: #fff;
        }
        /* Kustomisasi Breadcrumb */
        .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0;
            justify-content: center;
        }
        .breadcrumb-item {
            color: #ccc;
        }
        .breadcrumb-item a {
            color: #fca311; /* Kuning */
            font-weight: 600;
            text-decoration: none;
        }
        .breadcrumb-item a:hover {
            text-decoration: underline;
        }
        .breadcrumb-item.active {
            color: #fff;
            font-weight: 600;
        }

        /*
        ========================================
        3. FILTER CONTROLS (KHUSUS HALAMAN INI)
        ========================================
        */
        .filter-controls {
            padding: 4rem 0 2rem 0;
        }
        .filter-btn-group .btn {
            background-color: #333;
            color: #fff;
            border: 1px solid #555;
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            margin: 0 5px;
            border-radius: 25px; /* Rounded buttons */
            transition: all 0.3s ease;
        }
        .filter-btn-group .btn:hover {
            background-color: #444;
        }
        .filter-btn-group .btn.active {
            background-color: #d90429; /* Merah saat aktif */
            border-color: #d90429;
            box-shadow: 0 2px 5px rgba(217, 4, 41, 0.3);
        }
        .filter-btn-group .btn:focus {
            box-shadow: none;
        }

        /*
        ========================================
        4. GALLERY GRID (KHUSUS HALAMAN INI)
        ========================================
        */
        .gallery-grid {
            padding-bottom: 5rem;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            background: #2a2a2a;
        }
        .gallery-item a {
            display: block;
            text-decoration: none;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            transition: transform 0.4s ease, opacity 0.4s ease;
        }
        /* Efek hover pada item galeri */
        .gallery-item .overlay-icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(217, 4, 41, 0.7); /* Overlay merah transparan */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            color: #fff;
            opacity: 0;
            transition: all 0.4s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.1);
            opacity: 0.5;
        }
        .gallery-item:hover .overlay-icon {
            opacity: 1;
        }
        
        /* Lightbox Kustomisasi */
        .lb-data .lb-details {
            color: #f1f1f1;
            font-family: 'Poppins', sans-serif;
        }
        .lb-data .lb-caption {
            font-size: 1.1rem;
            font-weight: 500;
        }
        .lb-data .lb-number {
            font-size: 0.9rem;
        }
        .lb-loader, .lb-nav {
            /* Pastikan elemen UI Lightbox terlihat di atas overlay gelap */
            z-index: 1051; 
        }

        /*
        ========================================
        5. FOOTER (REUSABLE)
        ========================================
        */
        .footer {
            border-top: 3px solid #333;
            padding: 4rem 0 1rem 0;
        }
        .footer h5 {
            color: #fca311; /* Kuning */
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .footer p, .footer a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer a:hover {
            color: #fff;
            text-decoration: underline;
        }
        .footer .list-unstyled li {
            margin-bottom: 0.75rem;
        }
        .footer .social-icons a {
            color: #fff;
            font-size: 1.5rem;
            margin: 0 0.75rem;
            transition: color 0.3s ease;
        }
        .footer .social-icons a:hover {
            color: #fca311; /* Kuning saat hover */
            text-decoration: none;
        }
        .footer .copyright {
            border-top: 1px solid #333;
            margin-top: 2rem;
            padding-top: 1.5rem;
            font-size: 0.9rem;
            color: #888;
        }

        /*
        ========================================
        6. WA BUBBLE (REUSABLE)
        ========================================
        */
        .wa-bubble {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: #fff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
            z-index: 1030;
        }
        .wa-bubble:hover {
            transform: scale(1.1) translateY(-2px);
            box-shadow: 0 6px 15px rgba(37, 211, 102, 0.4);
            color: #fff;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#mainNavbar" data-offset="80">

    <!-- 1. NAVBAR (REUSABLE & KONSISTEN) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-matte-black sticky-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand text-yellow" href="index.html">
                <i class="fas fa-star"></i> MANTRA SAKTI
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLayanan" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Layanan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarLayanan">
                            <a class="dropdown-item" href="layanan-mobil.html">Kaca Film Mobil</a>
                            <a class="dropdown-item" href="layanan-gedung.html">Kaca Film Gedung</a>
                            <a class="dropdown-item" href="layanan-stiker.html">Stiker & Wrapping</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <!-- Halaman ini ditandai sebagai 'active' -->
                        <a class="nav-link active" href="galeri.html">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.html">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.html">Kontak</a>
                    </li>
                    <li class="nav-item ml-lg-3">
                        <a class="btn btn-danger-custom btn-sm" href="kontak.html" style="padding: 8px 20px; border-radius: 20px;">
                            <i class="fas fa-calendar-alt mr-1"></i> Booking Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION GALERI (BARU) -->
    <section class="gallery-hero container-fluid p-0">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Galeri Portofolio Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 3. TOMBOL FILTER (BARU) -->
    <section class="filter-controls text-center">
        <div class="container">
            <div class="btn-group filter-btn-group" role="group" aria-label="Filter Galeri">
                <button type="button" class="btn active" data-filter="*">Semua</button>
                <button type="button" class="btn" data-filter=".mobil">Kaca Film Mobil</button>
                <button type="button" class="btn" data-filter=".gedung">Kaca Film Gedung</button>
            </div>
        </div>
    </section>

    <!-- 4. GRID GALERI (BARU) -->
    <section class="gallery-grid">
        <div class="container">
            <div class="row gallery-container">

                <!-- Item 1 (Mobil) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+Alphard" data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film 3M di Toyota Alphard">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+1" class="img-fluid" alt="Pemasangan Toyota Alphard">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <!-- Item 2 (Gedung) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/555/fff?text=Pemasangan+Gedung+A" data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Oneway di Gedung Perkantoran">
                            <img src="https://placehold.co/400x300/555/fff?text=Gedung+1" class="img-fluid" alt="Pemasangan Kaca Film Gedung">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <!-- Item 3 (Mobil) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+Pajero" data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film V-Kool di Mitsubishi Pajero">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+2" class="img-fluid" alt="Pemasangan Mitsubishi Pajero">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <!-- Item 4 (Mobil) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+Civic" data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Solar Gard di Honda Civic">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+3" class="img-fluid" alt="Pemasangan Honda Civic">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <!-- Item 5 (Gedung) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/555/fff?text=Pemasangan+Ruko" data-lightbox="galeri-portofolio" data-title="Pemasangan Stiker Sandblast di Ruko Minimalis">
                            <img src="https://placehold.co/400x300/555/fff?text=Gedung+2" class="img-fluid" alt="Pemasangan Stiker Sandblast Ruko">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>
                
                <!-- Item 6 (Gedung) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/555/fff?text=Pemasangan+Kafe" data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Riben di Jendela Kafe">
                            <img src="https://placehold.co/400x300/555/fff?text=Gedung+3" class="img-fluid" alt="Pemasangan Kaca Film Kafe">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <!-- Item 7 (Mobil) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+CRV" data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Hitam di Honda CR-V">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+4" class="img-fluid" alt="Pemasangan Honda CR-V">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <!-- Item 8 (Mobil) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+Xpander" data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Masterpiece di Mitsubishi Xpander">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+5" class="img-fluid" alt="Pemasangan Mitsubishi Xpander">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>
                
                <!-- Item 9 (Gedung) -->
                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/555/fff?text=Pemasangan+Apartemen" data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film di Balkon Apartemen">
                            <img src="https://placehold.co/400x300/555/fff?text=Gedung+4" class="img-fluid" alt="Pemasangan Kaca Film Apartemen">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. FOOTER (REUSABLE & KONSISTEN) -->
    <footer class="footer bg-matte-black text-white">
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Tentang Kami -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase">Mantra Sakti Autofilm</h5>
                    <p>Spesialis pemasangan kaca film mobil dan gedung, stiker, dan wrapping profesional. Kami hanya menggunakan produk original bergaransi resmi.</p>
                    <div class="social-icons mt-4">
                        <a href="#" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                        <a href="#" target="_blank" rel="noopener"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <!-- Kolom 2: Link Cepat -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase">Link Cepat</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="layanan-mobil.html">Layanan</a></li>
                        <li><a href="galeri.html">Galeri</a></li>
                        <li><a href="artikel.html">Artikel</a></li>
                        <li><a href="kontak.html">Kontak</a></li>
                    </ul>
                </div>
                <!-- Kolom 3: Layanan Utama -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase">Layanan</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="layanan-mobil.html">Kaca Film Mobil</a></li>
                        <li><a href="layanan-gedung.html">Kaca Film Gedung</a></li>
                        <li><a href="layanan-stiker.html">Stiker Sandblast</a></li>
                        <li><a href="layanan-stiker.html">Wrapping Mobil</a></li>
                    </ul>
                </div>
                <!-- Kolom 4: Hubungi Kami -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase">Hubungi Kami</h5>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-fw mr-2"></i>Jl. Contoh Alamat No. 123, Jakarta</li>
                        <li><i class="fas fa-phone-alt fa-fw mr-2"></i>+62 812 3456 7890</li>
                        <li><i class="fas fa-envelope fa-fw mr-2"></i>info@mantrasakti.com</li>
                        <li><i class="fas fa-clock fa-fw mr-2"></i>Senin - Sabtu: 09.00 - 17.00</li>
                    </ul>
                </div>
            </div>
            <!-- Copyright -->
            <div class="row">
                <div class="col-12 text-center copyright">
                    &copy; <span id="currentYear"></span> Mantra Sakti Autofilm. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- 6. FLOATING WA BUBBLE (REUSABLE & KONSISTEN) -->
    <a href="https://api.whatsapp.com/send?phone=6281234567890&text=Halo%20Mantra%20Sakti%2C%20saya%20tertarik%20dengan%20layanan%20kaca%20film." class="wa-bubble" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JAVASCRIPT LIBRARIES -->
    <!-- 1. jQuery 3.5.1 CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- 2. Popper.js 1.16.1 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- 3. Bootstrap 4.5.2 JS CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- 4. Lightbox2 JS CDN (Requirement) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- 5. SKRIP KUSTOM (FILTER & INISIALISASI) -->
    <script>
        $(document).ready(function() {
            
            // Inisialisasi Copyright Year
            $('#currentYear').text(new Date().getFullYear());

            // Inisialisasi Lightbox2 (Opsi kustom)
            lightbox.option({
                'resizeDuration': 250,
                'wrapAround': true, // Kembali ke awal setelah gambar terakhir
                'fadeDuration': 300,
                'imageFadeDuration': 300,
                'albumLabel': 'Gambar %1 dari %2' // Label kustom Indonesia
            });

            // Skrip Filter Galeri (jQuery)
            $('.filter-btn-group .btn').on('click', function() {
                // Atur status aktif pada tombol
                $('.filter-btn-group .btn').removeClass('active');
                $(this).addClass('active');

                // Dapatkan nilai filter dari atribut data-filter
                var filterValue = $(this).attr('data-filter');
                
                // Logika filter
                if (filterValue === '*') {
                    // Tampilkan semua item
                    $('.gallery-container .gallery-item-wrapper').fadeIn('slow');
                } else {
                    // Sembunyikan semua item terlebih dahulu
                    $('.gallery-container .gallery-item-wrapper').fadeOut('fast');
                    // Tampilkan hanya item yang sesuai dengan filter
                    $('.gallery-container .gallery-item-wrapper').filter(filterValue).fadeIn('slow');
                }
            });

        });
    </script>

</body>
</html>