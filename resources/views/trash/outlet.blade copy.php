<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Outlet Resmi - Mantra Sakti Autofilm</title>

    <!-- Bootstrap 4.x CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome Free (Wajib untuk Ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Google Fonts (Poppins sebagai contoh font bersih) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* == INI ADALAH SIMULASI GAYA DARI style.css ANDA == */
        /* == Tema Utama: Black Matte (Hitam Dof) == */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212; /* Latar belakang hitam dof utama */
            color: #f0f0f0; /* Teks putih pudar */
            overflow-x: hidden; /* Mencegah scroll horizontal */
        }

        /* == Warna Aksen == */
        .text-merah { color: #dc3545; }
        .text-kuning { color: #ffc107; }
        .bg-merah { background-color: #dc3545; }
        .bg-kuning { background-color: #ffc107; }

        /* == Tombol CTA (Merah) == */
        .btn-merah {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 12px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(220, 53, 69, 0.3);
        }
        .btn-merah:hover {
            background-color: #c82333;
            border-color: #bd2130;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(220, 53, 69, 0.5);
        }

        /* == 1. Elemen Global: Navbar == */
        .navbar-dark.bg-dof {
            background-color: #1a1a1a !important; /* Latar belakang Navbar, sedikit beda dari body */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            padding: 1rem 1.5rem;
        }
        .navbar-dark .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #fff;
        }
        .navbar-dark .navbar-brand .text-kuning {
            font-style: italic;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #f0f0f0;
            font-weight: 600;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ffc107; /* Aksen Kuning saat hover */
        }
        /* Penanda Halaman Aktif (Kuning) */
        .navbar-dark .navbar-nav .nav-item.active .nav-link,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #ffc107;
            border-bottom: 2px solid #ffc107;
        }
        /* Styling Dropdown (Konsisten) */
        .dropdown-menu {
            background-color: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
        }
        .dropdown-item {
            color: #f0f0f0;
            transition: all 0.3s ease;
        }
        .dropdown-item:hover, .dropdown-item:focus {
            color: #fff;
            background-color: #dc3545; /* Aksen Merah saat hover */
        }
        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            background-color: #dc3545;
        }

        /* == 2. Hero Section (Singkat) == */
        .hero-short {
            position: relative;
            min-height: 35vh; /* Lebih pendek dari hero utama */
            background-image: url('https://images.unsplash.com/photo-1594392361111-38f33c307a8f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218MHx8YWJzdHJhY3QsbWFwLGJsYWNr&ixlib=rb-4.0.3&q=80&w=1500');
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
            background-color: rgba(0, 0, 0, 0.75); /* Overlay lebih gelap agar teks terbaca */
        }
        .hero-short h1 {
            font-weight: 700;
            color: #fff;
        }
        /* Breadcrumb styling */
        .breadcrumb {
            background-color: transparent;
            padding-top: 0.5rem;
            justify-content: center;
        }
        .breadcrumb-item a {
            color: #ffc107; /* Aksen Kuning */
            font-weight: 600;
        }
        .breadcrumb-item a:hover {
            text-decoration: none;
            color: #fff;
        }
        .breadcrumb-item.active {
            color: #f0f0f0;
            font-weight: 600;
        }

        /* == 3. Filter Kota == */
        .form-control {
            border-radius: 8px;
        }
        /* Style form di tema gelap */
        .form-control.bg-dark, .form-control:focus {
            background-color: #2a2a2a;
            color: #f0f0f0;
            border: 1px solid #444;
        }
        .form-control.bg-dark:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25); /* Fokus kuning */
            border-color: #ffc107;
        }

        /* == 4. Daftar Detail Outlet == */
        .outlet-info h2 {
            font-weight: 700;
            color: #ffc107; /* Aksen Kuning pada Judul Outlet */
        }
        .outlet-info ul {
            list-style: none;
            padding-left: 0;
            font-size: 1.1rem;
        }
        .outlet-info ul li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }
        /* Ikon (Kuning) */
        .outlet-info ul li .fas,
        .outlet-info ul li .fab {
            color: #ffc107;
            width: 30px; /* Memberi ruang untuk ikon */
            margin-top: 4px; /* Menyelaraskan dengan teks */
        }
        .btn-outline-light {
            border-radius: 8px;
            font-weight: 600;
        }
        .btn-outline-light:hover {
            background-color: #f0f0f0;
            color: #121212;
        }
        /* Google Maps Embed */
        .map-embed {
            border: 0;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        /* Horizontal Rule (Pemisah) */
        hr.custom-hr {
            border-top: 1px solid #444; /* Garis pemisah abu-abu gelap */
        }


        /* == 5. Elemen Global: Footer == */
        .footer-dark {
            background-color: #1a1a1a; /* Sama dengan Navbar */
            color: #aaa; /* Warna teks footer lebih redup */
            padding: 50px 0 30px 0;
            margin-top: 50px;
        }
        .footer-dark h5 {
            color: #ffc107; /* Aksen Kuning */
            font-weight: 700;
            margin-bottom: 20px;
        }
        .footer-dark p, .footer-dark li {
            font-size: 0.95rem;
        }
        .footer-dark a {
            color: #aaa;
            transition: color 0.3s ease;
        }
        .footer-dark a:hover {
            color: #ffc107;
            text-decoration: none;
        }
        .footer-social-icons {
            font-size: 1.5rem;
        }
        .footer-social-icons a {
            margin: 0 10px;
        }
        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 20px;
            margin-top: 30px;
        }

        /* == 6. Elemen Global: WA Bubble == */
        .wa-bubble {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 60px;
            height: 60px;
            background-color: #25D366; /* Warna WhatsApp */
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
            z-index: 1030;
        }
        .wa-bubble:hover {
            color: #fff;
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
        }
    </style>
</head>

<body class="bg-dof">

    <!-- 1. HEADER & NAVBAR (Identik dengan halaman utama) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dof sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                MANTRA <span class="text-kuning">SAKTI</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <!-- 
                        Bagian Aktif:
                        - 'active' ditambahkan ke <li> induk (dropdown)
                        - 'active' ditambahkan ke <a> anak (link spesifik)
                    -->
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kontak & Outlet
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Hubungi Kami</a>
                            <a class="dropdown-item active" href="daftar-outlet.html">Daftar Outlet</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="btn btn-merah btn-sm" href="#">Booking Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (Singkat) -->
    <section class="hero-short container-fluid p-0">
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <h1 class="display-4 font-weight-bold">Jaringan Outlet Resmi Mantra Sakti Autofilm</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Outlet</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 3. FILTER KOTA -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="filterKota" class="font-weight-bold h4">Filter Berdasarkan Kota</label>
                            <select class="form-control form-control-lg bg-dark text-light border-secondary" id="filterKota">
                                <option value="semua">Semua Kota</option>
                                <option value="jakarta">Jakarta</option>
                                <option value="surabaya">Surabaya</option>
                                <option value="bandung">Bandung</option>
                                <option value="medan">Medan</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. DAFTAR DETAIL OUTLET -->
    <section class="pb-5">
        <div class="container">

            <!-- == OUTLET 1: JAKARTA SELATAN == -->
            <div class="row my-5 align-items-center">
                <!-- Kolom Kiri: Peta -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- Placeholder Google Maps Embed -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.011961596564!2d106.82718231476901!3d-6.262103995466826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d3b5c3c13d%3A0x626d24490f055964!2sBlok%20M%20Square!5e0!3m2!1sen!2sid!4v1678888888888" 
                                class="embed-responsive-item map-embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Kolom Kanan: Informasi -->
                <div class="col-md-6 outlet-info">
                    <h2>Mantra Sakti - Jakarta Selatan</h2>
                    <ul class="mt-4">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat:</strong><br>
                                Jl. Melawai V, Blok M Square Lt. 5 Blok B No. 120, Jakarta Selatan, DKI Jakarta 12160
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <div><strong>Telepon:</strong> (021) 7278 1234</div>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div><strong>WhatsApp:</strong> 0812-1111-2222</div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><strong>Jam Operasional:</strong> Senin - Minggu (09.00 - 18.00)</div>
                        </li>
                    </ul>
                    <!-- Tombol Aksi -->
                    <a href="https://wa.me/6281211112222" target="_blank" class="btn btn-merah mr-2 mt-3"><i class="fab fa-whatsapp"></i> Hubungi via WhatsApp</a>
                    <a href="https://goo.gl/maps/..." target="_blank" class="btn btn-outline-light mt-3"><i class="fas fa-map-marked-alt"></i> Buka di Google Maps</a>
                </div>
            </div>

            <!-- Pemisah -->
            <hr class="custom-hr">

            <!-- == OUTLET 2: SURABAYA == -->
            <div class="row my-5 align-items-center">
                <!-- Kolom Kiri: Peta -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- Placeholder Google Maps Embed -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7533890069!2d112.74188441477501!3d-7.26826199475155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f910f01b171f%3A0x2f52093551d5015d!2sTunjungan%20Plaza!5e0!3m2!1sen!2sid!4v1678888999999" 
                                class="embed-responsive-item map-embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Kolom Kanan: Informasi -->
                <div class="col-md-6 outlet-info">
                    <h2>Mantra Sakti - Surabaya</h2>
                    <ul class="mt-4">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat:</strong><br>
                                Jl. Basuki Rahmat No. 8-12, Tunjungan Plaza 4, Lt. 3, Surabaya, Jawa Timur 60261
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <div><strong>Telepon:</strong> (031) 531 5678</div>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div><strong>WhatsApp:</strong> 0812-3333-4444</div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><strong>Jam Operasional:</strong> Senin - Minggu (10.00 - 20.00)</div>
                        </li>
                    </ul>
                    <!-- Tombol Aksi -->
                    <a href="https://wa.me/6281233334444" target="_blank" class="btn btn-merah mr-2 mt-3"><i class="fab fa-whatsapp"></i> Hubungi via WhatsApp</a>
                    <a href="https://goo.gl/maps/..." target="_blank" class="btn btn-outline-light mt-3"><i class="fas fa-map-marked-alt"></i> Buka di Google Maps</a>
                </div>
            </div>

            <!-- Pemisah -->
            <hr class="custom-hr">

            <!-- == OUTLET 3: BANDUNG == -->
            <div class="row my-5 align-items-center">
                <!-- Kolom Kiri: Peta -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- Placeholder Google Maps Embed -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.970222097951!2d107.59560631477283!3d-6.894082995018698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c6ffffff7%3A0x6a06c867f66a2f8!2sPaskal%2023!5e0!3m2!1sen!2sid!4v1678889000000" 
                                class="embed-responsive-item map-embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Kolom Kanan: Informasi -->
                <div class="col-md-6 outlet-info">
                    <h2>Mantra Sakti - Bandung</h2>
                    <ul class="mt-4">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Alamat:</strong><br>
                                Jl. Pasir Kaliki No. 25-27, Paskal 23 Mall, Lt. 2, Bandung, Jawa Barat 40181
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <div><strong>Telepon:</strong> (022) 601 9876</div>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div><strong>WhatsApp:</strong> 0812-5555-6666</div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><strong>Jam Operasional:</strong> Senin - Minggu (10.00 - 20.00)</div>
                        </li>
                    </ul>
                    <!-- Tombol Aksi -->
                    <a href="https://wa.me/6281255556666" target="_blank" class="btn btn-merah mr-2 mt-3"><i class="fab fa-whatsapp"></i> Hubungi via WhatsApp</a>
                    <a href="https://goo.gl/maps/..." target="_blank" class="btn btn-outline-light mt-3"><i class="fas fa-map-marked-alt"></i> Buka di Google Maps</a>
                </div>
            </div>

        </div>
    </section>


    <!-- 5. FOOTER (Identik dengan halaman utama) -->
    <footer class="footer-dark">
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Tentang Kami -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>MANTRA SAKTI AUTOFILM</h5>
                    <p>Spesialis pemasangan dan perawatan kaca film premium untuk kebutuhan otomotif dan bangunan Anda. Dealer resmi dengan jaminan kualitas dan garansi.</p>
                </div>
                <!-- Kolom 2: Link Cepat -->
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Link Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Produk</a></li>
                        <li><a href="#">Daftar Outlet</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <!-- Kolom 3: Kontak & Sosial Media -->
                <div class="col-md-5">
                    <h5>Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt text-kuning"></i> Jl. Raya Pusat No. 1, Jakarta</li>
                        <li><i class="fas fa-phone text-kuning"></i> (021) 555-0101</li>
                        <li><i class="fas fa-envelope text-kuning"></i> info@mantrasakti.com</li>
                    </ul>
                    <div class="footer-social-icons mt-3">
                        <a href="#" class="text-kuning"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-kuning"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-kuning"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="row footer-bottom">
                <div class="col text-center">
                    <p class="mb-0">&copy; 2025 Mantra Sakti Autofilm. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- 6. FLOATING WA BUBBLE (Identik dengan halaman utama) -->
    <a href="https://wa.me/6281288889999" class="wa-bubble" target="_blank" id="wa-bubble">
        <i class="fab fa-whatsapp"></i>
    </a>


    <!-- CDN WAJIB: jQuery, Popper.js, Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script Kustom (jika ada, misal untuk bubble) -->
    <script>
        // Script sederhana untuk menunjukkan/menyembunyikan bubble saat scroll (opsional)
        $(window).scroll(function() {
            var bubble = $('#wa-bubble');
            if ($(this).scrollTop() > 100) {
                // Contoh sederhana, bisa dikembangkan
            } else {
                //
            }
        });

        // (Anda bisa menambahkan JS untuk filter kota di sini nanti)
    </script>

</body>
</html>