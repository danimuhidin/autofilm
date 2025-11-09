@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')
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
                            data-large-src="https://placehold.co/600x450/333/FFF?text=Fitur+Produk"
                            class="product-thumbnail" alt="Fitur Tolak Panas">
                    </div>
                </div>

                <!-- Kolom Kanan (Info Utama) -->
                <div class="col-lg-6">
                    <h1 class="font-weight-bold mb-3">3M Crystalline Series</h1>
                    <p class="lead text-white-50 mb-4">
                        Rasakan pengalaman berkendara premium dengan 3M Crystalline Series. Teknologi multilayer optical
                        film
                        eksklusif yang menolak panas lebih baik daripada kaca film gelap biasa tanpa mengubah tampilan mobil
                        Anda.
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
                        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel"
                            aria-labelledby="deskripsi-tab">
                            <h4 class="text-yellow">Teknologi Superior, Kenyamanan Maksimal</h4>
                            <p>3M Crystalline Series adalah puncak inovasi kaca film non-metalized. Dibuat menggunakan
                                teknologi
                                multilayer optical film (MOF) yang dipatenkan, kaca film ini terdiri dari lebih dari 200
                                lapisan
                                mikro namun lebih tipis dari selembar Post-it® Note.</p>
                            <p>Keunggulan utamanya adalah kemampuan menolak panas inframerah (IRR) secara superior hingga
                                97% tanpa
                                menggunakan lapisan metal. Ini berarti Anda mendapatkan perlindungan panas maksimal tanpa
                                risiko
                                interferensi sinyal GPS, radio, atau ponsel. Selain itu, kaca film ini tidak akan korosi
                                atau berubah
                                warna menjadi ungu seiring waktu.</p>

                            <h5 class="mt-4">Keunggulan Utama:</h5>
                            <ul class="text-white-50">
                                <li><strong>Penolakan Panas Ekstrem:</strong> Menjaga kabin tetap sejuk dan nyaman,
                                    mengurangi beban
                                    kerja AC dan menghemat bahan bakar.</li>
                                <li><strong>Kejernihan Optik:</strong> Varian terang (seperti CR70) menawarkan tolak panas
                                    tinggi
                                    namun tetap jernih, menjaga visibilitas berkendara terutama di malam hari.</li>
                                <li><strong>Perlindungan UV Total:</strong> Memblokir 99.9% sinar UV berbahaya, setara
                                    dengan SPF
                                    1000+, melindungi interior mobil dari pudar dan kulit Anda dari kerusakan.</li>
                                <li><strong>Tampilan Elegan:</strong> Memberikan tampilan pabrikan yang natural pada kaca
                                    mobil Anda,
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
                            <p>Setiap pemasangan 3M Crystalline Series di Mantra Sakti Autofilm dilindungi oleh garansi
                                resmi
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
                                <li>Gunakan kain microfiber lembut dan air bersih atau cairan pembersih kaca non-abrasif
                                    (bebas
                                    amonia).</li>
                                <li>Hindari penggunaan sikat, spons kasar, atau benda tajam pada permukaan kaca film.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <p class="card-text text-white-50 small">Tampilan hitam pekat yang elegan dengan performa tolak
                                panas
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
                            <p class="card-text text-white-50 small">Kaca film premium dengan teknologi 'Clear View' dan
                                tolak panas
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
                            <p class="card-text text-white-50 small">Performa tinggi dari Korea dengan harga yang sangat
                                kompetitif.
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
                            <p class="card-text text-white-50 small">Lindungi cat mobil Anda dengan lapisan proteksi
                                premium 9H.
                            </p>
                            <a href="#" class="btn btn-outline-merah btn-sm mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            // 1. Script untuk Galeri Produk
            $('.product-thumbnail').on('click', function() {
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

        });
    </script>
@endpush
