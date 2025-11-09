<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Mantra Sakti Autofilm</title>

    <!-- Bootstrap 4.5 CSS CDN (Sesuai Homepage) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome 5 CSS CDN (Sesuai Homepage) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Font (Asumsi font Poppins/Inter untuk tema profesional) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- 
    ======================================================================
    STYLE KUSTOM (BLACK MATTE THEME)
    Ini adalah duplikat style dari homepage untuk menjaga konsistensi.
    ======================================================================
    -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212; /* Latar belakang hitam matte */
            color: #e0e0e0; /* Warna teks utama */
        }

        h1, h2, h3, h4, h5, h6 {
            color: #ffffff;
            font-weight: 600;
        }

        .text-warning {
            color: #FFC107 !important; /* Aksen Kuning (Highlight/Ikon) */
        }

        .text-danger {
            color: #E53935 !important; /* Aksen Merah (CTA) */
        }

        .section-padding {
            padding: 80px 0;
        }

        

        

        /* == 1. Navbar (REUSED FROM HOMEPAGE) == */
        .navbar-custom {
            background-color: #1a1a1a;
            border-bottom: 1px solid #333;
            padding: 1rem 1rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .navbar-custom .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem;
            color: #fff;
            line-height: 1;
        }
        .navbar-custom .navbar-brand .text-warning {
            display: block;
            font-size: 0.8rem;
            font-weight: 400;
            letter-spacing: 1px;
            margin-top: 2px;
        }
        .navbar-custom .nav-link {
            color: #f0f0f0;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.9rem;
            margin: 0 0.5rem;
            transition: color 0.3s;
        }
        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-item.active .nav-link {
            color: #FFC107; /* Aksen Kuning */
        }
        


        /* == 7. Footer (REUSED FROM HOMEPAGE) == */
        .footer-custom {
            background-color: #1a1a1a;
            border-top: 1px solid #333;
            padding: 60px 0 30px;
        }
        .footer-custom h5 {
            color: #FFC107;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .footer-custom p, .footer-custom a {
            color: #e0e0e0;
            text-decoration: none;
        }
        .footer-custom a:hover {
            color: #fff;
        }
        .footer-custom .list-unstyled li {
            margin-bottom: 10px;
        }
        .footer-social a {
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s;
            color: #FFC107;
        }
        .footer-social a:hover {
            color: #fff;
        }

        /* == 8. WA Bubble (REUSED FROM HOMEPAGE) == */
        .wa-bubble {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366;
            color: #fff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
            z-index: 1000;
            opacity: 0; /* JS akan memunculkan ini */
            transform: scale(0.8);
        }
        .wa-bubble.show {
            opacity: 1;
            transform: scale(1);
        }
        .wa-bubble:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
        }
    </style>
</head>
<body>

    <!-- 
    ======================================================================
    1. HEADER & NAVBAR (REUSED FROM HOMEPAGE)
    PENTING: Link "Tentang Kami" diberi kelas .active
    ======================================================================
    -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.html">
                MANTRA SAKTI
                <span class="text-warning">AUTOFILM</span>
            </a>
            
            <!-- Tombol Toggler untuk Mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menu Navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item active"> <!-- INI HALAMAN AKTIF -->
                        <a class="nav-link" href="tentang-kami.html">Tentang Kami <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <!-- Dropdown Contoh -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduk" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produk
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownProduk">
                            <a class="dropdown-item" href="#">Produk A</a>
                            <a class="dropdown-item" href="#">Produk B</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <!-- Tombol CTA -->
                <a class="btn btn-cta ml-lg-3" href="#">Booking Sekarang</a>
            </div>
        </div>
    </nav>


    <!-- 
    ======================================================================
    2. HERO SECTION (SINGKAT)
    ======================================================================
    -->
    <header class="hero-short">
        <div class="overlay"></div>
        <!-- Konten di tengah -->
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center" style="position: relative; z-index: 2; min-height: 30vh;">
            <h1 class="display-4 font-weight-bold">Tentang Mantra Sakti Autofilm</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </header>


    <!-- 
    ======================================================================
    3. PERKENALAN PERUSAHAAN (SIAPA KAMI)
    ======================================================================
    -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <!-- Kolom Kiri: Gambar -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://placehold.co/600x450/444/666?text=Workshop+Profesional" alt="Workshop Mantra Sakti Autofilm" class="img-fluid rounded shadow-lg">
                </div>
                <!-- Kolom Kanan: Teks -->
                <div class="col-lg-6">
                    <h2 class="font-weight-bold mb-3">Distributor Resmi Kaca Film Terbaik di Indonesia</h2>
                    <p class="lead" style="color: #ccc;">Mantra Sakti Autofilm bukan sekadar bengkel biasa. Kami adalah distributor resmi dan pusat instalasi kaca film premium terpercaya di Indonesia.</p>
                    <p>Didirikan atas kecintaan terhadap dunia otomotif dan kebutuhan akan perlindungan berkualitas, kami mendedikasikan diri untuk menyediakan produk kaca film 100% original dengan standar pemasangan tertinggi. Sejak awal berdiri, kami telah melayani ribuan pelanggan, memberikan solusi terbaik untuk kenyamanan, privasi, dan keamanan berkendara.</p>
                    <p>Kami percaya bahwa setiap kendaraan berhak mendapatkan perlindungan terbaik. Itulah mengapa kami hanya bermitra dengan merek-merek ternama dunia dan memastikan setiap teknisi kami terlatih secara profesional dan bersertifikat.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- 
    ======================================================================
    4. VISI & MISI
    ======================================================================
    -->
    <section class="section-padding section-bg-dark">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri: Visi -->
                <div class="col-md-6 text-center text-md-left mb-5 mb-md-0">
                    <i class="fas fa-eye vision-mission-icon"></i>
                    <h3 class="font-weight-bold mb-3">Visi Kami</h3>
                    <p>Menjadi tolok ukur (benchmark) industri kaca film di Indonesia; sebagai distributor dan pusat instalasi yang paling terpercaya, profesional, dan berorientasi pada kepuasan pelanggan.</p>
                </div>
                <!-- Kolom Kanan: Misi -->
                <div class="col-md-6 text-center text-md-left">
                    <i class="fas fa-bullseye vision-mission-icon"></i>
                    <h3 class="font-weight-bold mb-3">Misi Kami</h3>
                    <ul class="mission-list">
                        <li>Menyediakan 100% produk kaca film original dan bergaransi resmi.</li>
                        <li>Memberikan layanan instalasi yang presisi, cepat, dan bersih oleh teknisi bersertifikat.</li>
                        <li>Menjamin kepuasan penuh setiap pelanggan melalui konsultasi profesional dan layanan purna jual yang responsif.</li>
                        <li>Terus berinovasi dalam teknik pemasangan dan pilihan produk untuk memenuhi kebutuhan pasar.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- 
    ======================================================================
    5. NILAI-NILAI KAMI (PENGULANGAN KEUNGGULAN)
    ======================================================================
    -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold">Nilai-Nilai Inti Kami</h2>
                    <p class="lead" style="color: #ccc;">Empat pilar yang menjadi fondasi kepercayaan pelanggan kami.</p>
                </div>
            </div>
            <div class="row">
                <!-- Item 1: Garansi -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-shield-alt"></i></span>
                        <h5>Garansi Resmi</h5>
                        <p>Kami hanya menjual produk asli dengan kartu garansi resmi dari distributor. Kenyamanan Anda terjamin penuh selama bertahun-tahun.</p>
                    </div>
                </div>
                <!-- Item 2: Profesional -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-user-cog"></i></span>
                        <h5>Teknisi Profesional</h5>
                        <p>Tim installer kami telah tersertifikasi dan sangat berpengalaman, memastikan pemasangan yang presisi, rapi, dan tanpa cacat.</p>
                    </div>
                </div>
                <!-- Item 3: Original -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-thumbs-up"></i></span>
                        <h5>Produk Original</h5>
                        <p>Jaminan 100% produk asli dari merek-merek terbaik dunia. Hati-hati barang tiruan, percayakan hanya pada kami sebagai distributor resmi.</p>
                    </div>
                </div>
                <!-- Item 4: Presisi -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <h5>Hasil Presisi</h5>
                        <p>Detail adalah kunci. Kami menggunakan SOP ketat dan alat modern untuk menjamin hasil pemasangan yang rapi, bersih, dan sempurna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- 
    ======================================================================
    6. TEMUI TIM KAMI
    ======================================================================
    -->
    <section class="section-padding section-bg-dark">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold">Tim Profesional Kami</h2>
                    <p class="lead" style="color: #ccc;">Wajah di balik layanan premium Mantra Sakti Autofilm.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Tim 1: Founder -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-card h-100">
                        <img src="https://placehold.co/400x400/555/777?text=Budi+S." class="card-img-top" alt="Foto Budi Santoso">
                        <div class="card-body">
                            <h5 class="card-title">Budi Santoso</h5>
                            <h6 class="card-subtitle mb-2">Founder & CEO</h6>
                            <p class="card-text">"Kepuasan Anda adalah prioritas utama kami. Kami tidak hanya menjual produk, kami menjual kepercayaan."</p>
                        </div>
                    </div>
                </div>
                <!-- Tim 2: Lead Technician -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-card h-100">
                        <img src="https://placehold.co/400x400/555/777?text=Andi+P." class="card-img-top" alt="Foto Andi Permana">
                        <div class="card-body">
                            <h5 class="card-title">Andi Permana</h5>
                            <h6 class="card-subtitle mb-2">Lead Technician</h6>
                            <p class="card-text">"Presisi dan kebersihan adalah tanda tangan saya di setiap mobil yang kami kerjakan. Tidak ada kompromi."</p>
                        </div>
                    </div>
                </div>
                <!-- Tim 3: Customer Relations -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-card h-100">
                        <img src="https://placehold.co/400x400/555/777?text=Citra+L." class="card-img-top" alt="Foto Citra Lestari">
                        <div class="card-body">
                            <h5 class="card-title">Citra Lestari</h5>
                            <h6 class="card-subtitle mb-2">Customer Relations</h6>
                            <p class="card-text">"Kami di sini untuk mendengarkan dan memberikan solusi terbaik untuk kebutuhan kenyamanan dan keamanan Anda."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 
    ======================================================================
    7. FOOTER (REUSED FROM HOMEPAGE)
    ======================================================================
    -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Tentang -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-uppercase">Mantra Sakti Autofilm</h5>
                    <p>Distributor resmi dan pusat instalasi kaca film premium di Indonesia. Kami menyediakan produk original dengan garansi resmi dan pemasangan profesional.</p>
                </div>
                <!-- Kolom 2: Navigasi Cepat -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-uppercase">Navigasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="tentang-kami.html">Tentang Kami</a></li>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="#">Produk</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
                <!-- Kolom 3: Kontak -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase">Kontak Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt mr-2 text-warning"></i> Jl. Otomotif Raya No. 123, Jakarta Selatan</li>
                        <li class="mb-2"><i class="fas fa-phone-alt mr-2 text-warning"></i> (021) 1234 5678</li>
                        <li class="mb-2"><i class="fas fa-envelope mr-2 text-warning"></i> info@mantrasakti.com</li>
                        <li class="mb-2"><i class="fas fa-clock mr-2 text-warning"></i> Sen - Sab: 09.00 - 17.00</li>
                    </ul>
                </div>
                <!-- Kolom 4: Social Media -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase">Ikuti Kami</h5>
                    <p>Dapatkan info terbaru dan promo spesial kami.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                        <a href="#" aria-label="Tiktok"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <hr style="border-top: 1px solid #444;">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; <span id="currentYear"></span> Mantra Sakti Autofilm. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- 
    ======================================================================
    8. FLOATING WA BUBBLE (REUSED FROM HOMEPAGE)
    ======================================================================
    -->
    <!-- Ganti 628... dengan nomor WA Anda -->
    <a href="https://wa.me/628123456789" class="wa-bubble" target="_blank" id="waBubble" aria-label="Hubungi via WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>


    <!-- 
    ======================================================================
    JAVASCRIPT (SAMA DENGAN HOMEPAGE)
    ======================================================================
    -->
    <!-- jQuery 3.5.1 CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js 2.5.4 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <!-- Bootstrap 4.5.2 JS CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script Kustom (Sama dengan Homepage) -->
    <script>
    $(document).ready(function() {
        
        // 1. JS untuk Copyright Year (Reusable)
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // 2. JS untuk Floating WA Bubble (Reusable)
        var waBubble = $('#waBubble');
        
        // Tampilkan bubble setelah scroll 200px
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                waBubble.addClass('show');
            } else {
                waBubble.removeClass('show');
            }
        });

    });
    </script>
</body>
</html>