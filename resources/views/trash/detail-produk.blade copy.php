<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3M Crystalline Series - Mantra Sakti Autofilm</title>

  <!-- Bootstrap 4.5 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome 5 Free -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Owl Carousel 2 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Google Fonts (Inter) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    /* == TEMA BLACK MATTE (SAMA PERSIS DENGAN HALAMAN UTAMA) == */
    body {
      font-family: 'Inter', sans-serif;
      background-color: #121212;
      /* Background Hitam Dof Utama */
      color: #f8f9fa;
      /* Teks putih */
    }

    .bg-black-matte {
      background-color: #1a1a1a !important;
      /* Warna hitam sedikit lebih terang untuk panel */
      border-bottom: 1px solid #333;
    }

    .bg-dark-secondary {
      background-color: #222;
      /* Warna latar sekunder */
    }

    /* Konsistensi Warna */
    .text-red {
      color: #e50914 !important;
      /* Merah CTA */
    }

    .text-yellow {
      color: #f0a500 !important;
      /* Kuning Aksen */
    }

    /* == Navbar == */
    .navbar-dark .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.8);
      transition: color 0.3s;
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link.active {
      color: #f0a500;
      /* Kuning saat hover/active */
    }

    .navbar-brand .logo-text-yellow {
      color: #f0a500;
      font-weight: 700;
    }

    .dropdown-menu {
      background-color: #1a1a1a;
      border: 1px solid #333;
    }

    .dropdown-item {
      color: rgba(255, 255, 255, 0.8);
    }

    .dropdown-item:hover {
      background-color: #333;
      color: #f0a500;
    }

    /* == Tombol == */
    .btn-merah {
      background-color: #e50914;
      border-color: #e50914;
      color: #fff;
      font-weight: 500;
      transition: all 0.3s;
    }

    .btn-merah:hover {
      background-color: #c40812;
      border-color: #c40812;
      color: #fff;
      transform: translateY(-2px);
    }

    .btn-outline-merah {
      background-color: transparent;
      border: 2px solid #e50914;
      color: #e50914;
      font-weight: 500;
      transition: all 0.3s;
    }

    .btn-outline-merah:hover {
      background-color: #e50914;
      border-color: #e50914;
      color: #fff;
    }

    /* == Breadcrumb (Baru) == */
    .breadcrumb-dark {
      background-color: transparent;
      padding-left: 0;
      margin-bottom: 0;
    }

    .breadcrumb-dark .breadcrumb-item a {
      color: #f0a500;
      /* Link kuning */
      text-decoration: none;
    }

    .breadcrumb-dark .breadcrumb-item a:hover {
      text-decoration: underline;
    }

    .breadcrumb-dark .breadcrumb-item.active {
      color: #6c757d;
      /* Warna abu-abu untuk item aktif */
    }

    /* == Galeri Produk (Baru) == */
    #mainProductImage {
      border: 1px solid #333;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .product-thumbnail {
      width: 100px;
      height: 80px;
      object-fit: cover;
      cursor: pointer;
      border: 2px solid #444;
      opacity: 0.7;
      transition: all 0.3s;
      border-radius: .25rem;
    }

    .product-thumbnail:hover,
    .product-thumbnail.active {
      opacity: 1;
      border-color: #f0a500;
      /* Border kuning saat aktif/hover */
    }

    /* == Tabs Detail (Baru) == */
    .nav-tabs .nav-link {
      background-color: transparent;
      border: 1px solid #333;
      border-bottom-color: #333;
      color: #aaa;
    }

    .nav-tabs .nav-link.active {
      background-color: #222;
      /* Latar tab aktif */
      border-color: #444 #444 #222;
      color: #fff;
      font-weight: 500;
    }

    .nav-tabs {
      border-bottom: 1px solid #444;
    }

    .tab-content {
      padding-top: 1.5rem;
    }

    .table-dark {
      border: 1px solid #444;
    }

    /* == Produk Terkait (Owl Carousel) == */
    .product-card {
      background-color: #1a1a1a;
      border: 1px solid #333;
      transition: all 0.3s;
    }

    .product-card:hover {
      border-color: #f0a500;
      transform: translateY(-5px);
    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
      background: #f0a500;
      /* Dots kuning */
    }

    /* == Footer (SAMA) == */
    .footer-dark {
      background-color: #1a1a1a;
      border-top: 1px solid #333;
    }

    .footer-dark h5 {
      color: #f0a500;
      /* Judul footer kuning */
    }

    .footer-dark .list-unstyled a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-dark .list-unstyled a:hover {
      color: #f0a500;
    }

    .footer-social a {
      color: #aaa;
      margin-right: 15px;
      font-size: 1.5rem;
      transition: color 0.3s;
    }

    .footer-social a:hover {
      color: #f0a500;
    }

    /* == WA Bubble (SAMA) == */
    .wa-bubble {
      position: fixed;
      bottom: 25px;
      right: 25px;
      background-color: #25D366;
      /* Warna WhatsApp */
      color: #fff;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.5rem;
      text-decoration: none;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      z-index: 1000;
      transition: transform 0.3s;
    }

    .wa-bubble:hover {
      transform: scale(1.1);
      color: #fff;
    }
  </style>
</head>

<body class="bg-black-matte text-white">

  <!-- 1. HEADER & NAVBAR (SAMA PERSIS) -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black-matte sticky-top shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">
          MANTRA SAKTI <span class="logo-text-yellow">AUTOFILM</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <!-- Link "Produk Kami" ditandai sebagai 'active' -->
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownProduk" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produk Kami
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownProduk">
                <a class="dropdown-item" href="#">Kaca Film Mobil</a>
                <a class="dropdown-item" href="#">Kaca Film Gedung</a>
                <a class="dropdown-item" href="#">Coating & Detailing</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- AKHIR HEADER & NAVBAR -->

  <main>

    <!-- 2. BREADCRUMB -->
    <section class="py-3" style="background-color: #1f1f1f;">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Produk Kami</a></li>
            <li class="breadcrumb-item"><a href="#">Kaca Film Mobil</a></li>
            <li class="breadcrumb-item active" aria-current="page">3M Crystalline Series</li>
          </ol>
        </nav>
      </div>
    </section>
    <!-- AKHIR BREADCRUMB -->


    <!-- 3. PRODUCT SUMMARY (GALERI & INFO UTAMA) -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <!-- Kolom Kiri (Galeri Produk) -->
          <div class="col-lg-6 mb-4 mb-lg-0">
            <!-- Gambar Utama -->
            <img src="https://placehold.co/600x450/333/FFF?text=3M+Crystalline" id="mainProductImage"
              class="img-fluid rounded shadow-lg" alt="3M Crystalline Series">

            <!-- Thumbnails -->
            <div class="d-flex mt-3">
              <img src="https://placehold.co/150x112/555/FFF?text=Logo+3M"
                data-large-src="https://placehold.co/600x450/333/FFF?text=3M+Crystalline"
                class="product-thumbnail mr-2 active" alt="Logo 3M">
              <img src="https://placehold.co/150x112/555/FFF?text=Mobil+Terpasang"
                data-large-src="https://placehold.co/600x450/333/FFF?text=Contoh+Terpasang"
                class="product-thumbnail mr-2" alt="Contoh Terpasang">
              <img src="https://placehold.co/150x112/555/FFF?text=Demo+Kegelapan"
                data-large-src="https://placehold.co/600x450/333/FFF?text=Swatch+Kegelapan"
                class="product-thumbnail mr-2" alt="Demo Kegelapan">
              <img src="https://placehold.co/150x112/555/FFF?text=Fitur+Tolak+Panas"
                data-large-src="https://placehold.co/600x450/333/FFF?text=Fitur+Produk" class="product-thumbnail"
                alt="Fitur Tolak Panas">
            </div>
          </div>

          <!-- Kolom Kanan (Info Utama) -->
          <div class="col-lg-6">
            <h1 class="font-weight-bold mb-3">3M Crystalline Series</h1>
            <p class="lead text-white-50 mb-4">
              Rasakan pengalaman berkendara premium dengan 3M Crystalline Series. Teknologi multilayer optical film
              eksklusif yang menolak panas lebih baik daripada kaca film gelap biasa tanpa mengubah tampilan mobil Anda.
            </p>

            <!-- Spesifikasi Kunci -->
            <ul class="list-unstyled text-white my-4" style="font-size: 1.1rem;">
              <li class="mb-2">
                <i class="fas fa-sun text-yellow mr-2" style="width: 20px;"></i>
                <strong>VLT (Kegelapan):</strong> 20%, 40%, 60%, 70%
              </li>
              <li class="mb-2">
                <i class="fas fa-shield-alt text-yellow mr-2" style="width: 20px;"></i>
                <strong>UV Rejection:</strong> 99.9% (SPF 1000+)
              </li>
              <li class="mb-2">
                <i class="fas fa-thermometer-half text-yellow mr-2" style="width: 20px;"></i>
                <strong>TSER (Tolak Panas):</strong> Hingga 62%
              </li>
              <li class="mb-2">
                <i class="fas fa-satellite-dish text-yellow mr-2" style="width: 20px;"></i>
                <strong>No Signal Interference:</strong> Aman untuk GPS & Sinyal HP
              </li>
              <li class="mb-2">
                <i class="fas fa-star text-yellow mr-2" style="width: 20px;"></i>
                <strong>Garansi Resmi:</strong> 5 Tahun E-Warranty
              </li>
            </ul>

            <!-- Harga -->
            <h2 class="text-red font-weight-bold my-4">Harga: Hubungi Kami</h2>
            <p class="text-white-50">Harga bervariasi tergantung ukuran mobil (Small, Medium, Large) dan paket
              pemasangan (Full, SKKB).</p>

            <!-- Tombol CTA -->
            <div class="mt-4">
              <a href="#" class="btn btn-merah btn-lg mr-2 mb-2 shadow">
                <i class="fas fa-calendar-alt mr-2"></i>Pesan Pemasangan
              </a>
              <a href="#" class="btn btn-outline-merah btn-lg mb-2">
                <i class="fab fa-whatsapp mr-2"></i>Tanya Admin (WA)
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- AKHIR PRODUCT SUMMARY -->


    <!-- 4. DESKRIPSI DETAIL & SPESIFIKASI (TABS) -->
    <section class="py-5 bg-dark-secondary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Navigasi Tabs -->
            <ul class="nav nav-tabs" id="productTabs" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab"
                  aria-controls="deskripsi" aria-selected="true">Deskripsi Lengkap</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="spesifikasi-tab" data-toggle="tab" href="#spesifikasi" role="tab"
                  aria-controls="spesifikasi" aria-selected="false">Spesifikasi Teknis</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="garansi-tab" data-toggle="tab" href="#garansi" role="tab"
                  aria-controls="garansi" aria-selected="false">Garansi & Perawatan</a>
              </li>
            </ul>

            <!-- Konten Tabs -->
            <div class="tab-content" id="productTabsContent">
              <!-- Tab 1: Deskripsi Lengkap -->
              <div class="tab-pane fade show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                <h4 class="text-yellow">Teknologi Superior, Kenyamanan Maksimal</h4>
                <p>3M Crystalline Series adalah puncak inovasi kaca film non-metalized. Dibuat menggunakan teknologi
                  multilayer optical film (MOF) yang dipatenkan, kaca film ini terdiri dari lebih dari 200 lapisan
                  mikro namun lebih tipis dari selembar Post-it® Note.</p>
                <p>Keunggulan utamanya adalah kemampuan menolak panas inframerah (IRR) secara superior hingga 97% tanpa
                  menggunakan lapisan metal. Ini berarti Anda mendapatkan perlindungan panas maksimal tanpa risiko
                  interferensi sinyal GPS, radio, atau ponsel. Selain itu, kaca film ini tidak akan korosi atau berubah
                  warna menjadi ungu seiring waktu.</p>

                <h5 class="mt-4">Keunggulan Utama:</h5>
                <ul class="text-white-50">
                  <li><strong>Penolakan Panas Ekstrem:</strong> Menjaga kabin tetap sejuk dan nyaman, mengurangi beban
                    kerja AC dan menghemat bahan bakar.</li>
                  <li><strong>Kejernihan Optik:</strong> Varian terang (seperti CR70) menawarkan tolak panas tinggi
                    namun tetap jernih, menjaga visibilitas berkendara terutama di malam hari.</li>
                  <li><strong>Perlindungan UV Total:</strong> Memblokir 99.9% sinar UV berbahaya, setara dengan SPF
                    1000+, melindungi interior mobil dari pudar dan kulit Anda dari kerusakan.</li>
                  <li><strong>Tampilan Elegan:</strong> Memberikan tampilan pabrikan yang natural pada kaca mobil Anda,
                    tanpa efek cermin (low reflection).</li>
                </ul>
              </div>

              <!-- Tab 2: Spesifikasi Teknis -->
              <div class="tab-pane fade" id="spesifikasi" role="tabpanel" aria-labelledby="spesifikasi-tab">
                <p>Berikut adalah perbandingan data teknis untuk berbagai tipe dalam 3M Crystalline Series:</p>
                <div class="table-responsive">
                  <table class="table table-dark table-striped table-bordered mt-3">
                    <thead>
                      <tr class="text-yellow">
                        <th scope="col">Tipe</th>
                        <th scope="col">VLT (Visible Light Transmitted)</th>
                        <th scope="col">VLR (Visible Light Reflected)</th>
                        <th scope="col">IRR (Infrared Rejection)</th>
                        <th scope="col">TSER (Total Solar Energy Rejected)</th>
                        <th scope="col">UV Blocked</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Crystalline 70 (CR70)</td>
                        <td>69% (Paling Terang)</td>
                        <td>9%</td>
                        <td>97%</td>
                        <td>50%</td>
                        <td>99.9%</td>
                      </tr>
                      <tr>
                        <td>Crystalline 60 (CR60)</td>
                        <td>60%</td>
                        <td>9%</td>
                        <td>97%</td>
                        <td>53%</td>
                        <td>99.9%</td>
                      </tr>
                      <tr>
                        <td>Crystalline 40 (CR40)</td>
                        <td>39% (Kegelapan 40%)</td>
                        <td>6%</td>
                        <td>97%</td>
                        <td>60%</td>
                        <td>99.9%</td>
                      </tr>
                      <tr>
                        <td>Crystalline 20 (CR20)</td>
                        <td>21% (Kegelapan 60%)</td>
                        <td>5%</td>
                        <td>97%</td>
                        <td>62%</td>
                        <td>99.9%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <small class="text-white-50">*Data teknis berdasarkan pengujian standar industri pada kaca
                  clear 6mm.</small>
              </div>

              <!-- Tab 3: Garansi & Perawatan -->
              <div class="tab-pane fade" id="garansi" role="tabpanel" aria-labelledby="garansi-tab">
                <h4 class="text-yellow">Garansi Resmi 3M Indonesia 5 Tahun</h4>
                <p>Setiap pemasangan 3M Crystalline Series di Mantra Sakti Autofilm dilindungi oleh garansi resmi
                  (E-Warranty) dari 3M Indonesia selama 5 tahun. Garansi ini mencakup:</p>
                <ul class="text-white-50">
                  <li>Perubahan warna (menjadi ungu atau pudar).</li>
                  <li>Gelembung (blistering) atau delaminasi.</li>
                  <li>Penurunan performa tolak panas.</li>
                </ul>
                <p>Garansi tidak mencakup kerusakan akibat kesalahan pengguna, seperti goresan benda tajam atau
                  kecelakaan.</p>

                <h5 class="mt-4">Cara Perawatan Kaca Film:</h5>
                <ul class="text-white-50">
                  <li>Jangan membuka kaca jendela selama 3x24 jam setelah pemasangan.</li>
                  <li>Jangan membersihkan kaca film selama 7 hari pertama, biarkan kering sempurna.</li>
                  <li>Gunakan kain microfiber lembut dan air bersih atau cairan pembersih kaca non-abrasif (bebas
                    amonia).</li>
                  <li>Hindari penggunaan sikat, spons kasar, atau benda tajam pada permukaan kaca film.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- AKHIR DESKRIPSI DETAIL -->


    <!-- 5. PRODUK TERKAIT (CAROUSEL) -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center text-white mb-4">Produk Lainnya yang Mungkin Anda Suka</h2>
        <div class="owl-carousel owl-theme" id="produkTerkaitCarousel">

          <!-- Item 1 -->
          <div class="item">
            <div class="card product-card text-white h-100">
              <img src="https://placehold.co/300x200/444/FFF?text=3M+Black+Beauty" class="card-img-top"
                alt="3M Black Beauty">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">3M Black Beauty</h5>
                <p class="card-text text-white-50 small">Tampilan hitam pekat yang elegan dengan performa tolak panas
                  stabil.</p>
                <a href="#" class="btn btn-outline-merah btn-sm mt-auto">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="item">
            <div class="card product-card text-white h-100">
              <img src="https://placehold.co/300x200/444/FFF?text=Iceberg+Window+Film" class="card-img-top"
                alt="Iceberg Window Film">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Iceberg Window Film (UX Series)</h5>
                <p class="card-text text-white-50 small">Kaca film premium dengan teknologi 'Clear View' dan tolak panas
                  maksimal.</p>
                <a href="#" class="btn btn-outline-merah btn-sm mt-auto">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="item">
            <div class="card product-card text-white h-100">
              <img src="https://placehold.co/300x200/444/FFF?text=Nexgard+Premium" class="card-img-top"
                alt="Nexgard Premium">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Nexgard Premium (Carbon)</h5>
                <p class="card-text text-white-50 small">Performa tinggi dari Korea dengan harga yang sangat kompetitif.
                </p>
                <a href="#" class="btn btn-outline-merah btn-sm mt-auto">Lihat Detail</a>
              </div>
            </div>
          </div>

          <!-- Item 4 (Opsional) -->
          <div class="item">
            <div class="card product-card text-white h-100">
              <img src="https://placehold.co/300x200/444/FFF?text=Paket+Coating" class="card-img-top"
                alt="Paket Coating">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Nano Ceramic Coating</h5>
                <p class="card-text text-white-50 small">Lindungi cat mobil Anda dengan lapisan proteksi premium 9H.
                </p>
                <a href="#" class="btn btn-outline-merah btn-sm mt-auto">Lihat Detail</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- AKHIR PRODUK TERKAIT -->

  </main>

  <!-- 6. FOOTER (SAMA PERSIS) -->
  <footer class="footer-dark py-5">
    <div class="container">
      <div class="row">
        <!-- Info Perusahaan -->
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <h5 class="mb-3">MANTRA SAKTI AUTOFILM</h5>
          <p class="text-white-50">Spesialis pemasangan kaca film mobil dan gedung, coating, dan detailing premium di
            Indonesia. Dealer resmi 3M, Iceberg, Nexgard, dan lainnya.</p>
        </div>
        <!-- Link Cepat -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h5 class="mb-3">Link Cepat</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#">Home</a></li>
            <li class="mb-2"><a href="#">Produk</a></li>
            <li class="mb-2"><a href="#">Galeri</a></li>
            <li class="mb-2"><a href="#">Kontak</a></li>
          </ul>
        </div>
        <!-- Kontak -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="mb-3">Hubungi Kami</h5>
          <ul class="list-unstyled text-white-50">
            <li class="mb-2"><i class="fas fa-map-marker-alt mr-2 text-yellow"></i> Jl. Raya X No. 123, Jakarta</li>
            <li class="mb-2"><i class="fas fa-phone-alt mr-2 text-yellow"></i> (021) 123-4567</li>
            <li class="mb-2"><i class="fab fa-whatsapp mr-2 text-yellow"></i> 0812-3456-7890</li>
            <li class="mb-2"><i class="fas fa-envelope mr-2 text-yellow"></i> info@mantrasakti.com</li>
          </ul>
        </div>
        <!-- Social Media -->
        <div class="col-lg-3 col-md-6">
          <h5 class="mb-3">Ikuti Kami</h5>
          <p class="text-white-50">Dapatkan info promo dan hasil terbaru kami.</p>
          <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>
      <hr style="border-top: 1px solid #333;">
      <div class="row">
        <div class="col-12 text-center">
          <p class="text-white-50 small mb-0">&copy; <span id="currentYear"></span> Mantra Sakti Autofilm. All Rights
            Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- AKHIR FOOTER -->


  <!-- 7. FLOATING WA BUBBLE (SAMA PERSIS) -->
  <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Mantra%20Sakti%2C%20saya%20tertarik%20dengan%20produk..."
    target="_blank" class="wa-bubble">
    <i class="fab fa-whatsapp"></i>
  </a>


  <!-- JavaScript Libraries (jQuery, Popper, Bootstrap, Owl Carousel) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Script Kustom Halaman Ini -->
  <script>
    $(document).ready(function () {

      // 1. Script untuk Galeri Produk
      $('.product-thumbnail').on('click', function () {
        // Hapus kelas 'active' dari semua thumbnail
        $('.product-thumbnail').removeClass('active');
        // Tambah kelas 'active' ke thumbnail yang diklik
        $(this).addClass('active');

        // Ganti gambar utama
        var newImageSrc = $(this).data('large-src');
        $('#mainProductImage').attr('src', newImageSrc);
      });

      // 2. Script untuk Inisialisasi Owl Carousel (Produk Terkait)
      $('#produkTerkaitCarousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false, // Sembunyikan panah nav
        dots: true, // Tampilkan titik-titik nav
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
          0: {
            items: 1 // 1 item di mobile
          },
          768: {
            items: 2 // 2 item di tablet
          },
          992: {
            items: 3 // 3 item di desktop
          }
        }
      });

      // 3. Script untuk Tahun Copyright di Footer
      document.getElementById('currentYear').textContent = new Date().getFullYear();

    });
  </script>

</body>

</html>