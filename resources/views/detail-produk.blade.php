@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')
    <section class="page-hero container-fluid" style="background-image: url({{ asset('images/hero/kategori.png') }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Produk Kaca Film</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('produk') }}">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <figure class="w-100">
                        <img src="{{ asset('images/produk/p1.png') }}" id="mainProductImage"
                            class="w-100 rounded shadow-lg" alt="3M Crystalline Series">
                    </figure>

                    <div class="d-flex mt-3">
                        <img src="{{ asset('images/produk/p1.png') }}"
                            data-large-src="{{ asset('images/produk/p1.png') }}"
                            class="product-thumbnail mr-2 active" alt="Logo 3M">
                        <img src="{{ asset('images/produk/p2.png') }}"
                            data-large-src="{{ asset('images/produk/p2.png') }}"
                            class="product-thumbnail mr-2" alt="Contoh Terpasang">
                        <img src="{{ asset('images/produk/p3.png') }}"
                            data-large-src="{{ asset('images/produk/p3.png') }}"
                            class="product-thumbnail mr-2" alt="Demo Kegelapan">
                        <img src="{{ asset('images/produk/p4.png') }}"
                            data-large-src="{{ asset('images/produk/p4.png') }}"
                            class="product-thumbnail mr-2" alt="Fitur Tolak Panas">
                        <img src="{{ asset('images/produk/p5.png') }}"
                            data-large-src="{{ asset('images/produk/p5.png') }}"
                            class="product-thumbnail" alt="Fitur Tolak Panas">
                    </div>
                </div>

                <div class="col-lg-7 pl-4">
                    <h2 class="font-weight-bold mb-2">{{ $name }}</h2>
                    <p class="mb-2">
                        Rasakan pengalaman berkendara premium dengan {{ $name }}. Teknologi multilayer optical
                        film eksklusif yang menolak panas lebih baik daripada kaca film gelap biasa tanpa mengubah tampilan
                        mobil Anda.
                    </p>

                    <ul class="list-unstyled text-white my-3" style="font-size: .9rem;">
                        <li class="mb-1">
                            <i class="fas fa-sun text-yellow mr-2"></i>
                            <strong>VLT (Kegelapan):</strong> 20%, 40%, 60%, 70%
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-shield-alt text-yellow mr-2"></i>
                            <strong>UV Rejection:</strong> 99.9% (SPF 1000+)
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-thermometer-half text-yellow mr-2"></i>
                            <strong>TSER (Tolak Panas):</strong> Hingga 62%
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-satellite-dish text-yellow mr-2"></i>
                            <strong>No Signal Interference:</strong> Aman untuk GPS & Sinyal HP
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-star text-yellow mr-2"></i>
                            <strong>Garansi Resmi:</strong> 5 Tahun E-Warranty
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-thumbs-up text-yellow mr-2"></i>
                            <strong>Non-Metalized:</strong> Tidak Korosi & Tidak Berubah Warna 
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-leaf text-yellow mr-2"></i>
                            <strong>Ramah Lingkungan:</strong> Bebas Logam Berat & Ramah Lingkungan
                        </li>
                    </ul>

                    <p class="text-white-50 mt-2">
                        Harga bervariasi tergantung ukuran mobil (Small, Medium, Large) dan paket
                        pemasangan (Full, SKKB).
                    </p>
                    <div class="mt-2">
                        <a href="#" class="btn btn-merah btn-lg mr-2 mb-2 shadow">
                            <i class="fas fa-calendar-alt mr-2"></i>Harga: Hubungi Kami
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
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="javascript:void(0);"
                                data-target="#deskripsi" role="tab" aria-controls="deskripsi"
                                aria-selected="true">Deskripsi Lengkap</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="spesifikasi-tab" data-toggle="tab" href="javascript:void(0);"
                                data-target="#spesifikasi" role="tab" aria-controls="spesifikasi"
                                aria-selected="false">Spesifikasi Teknis</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="garansi-tab" data-toggle="tab" href="javascript:void(0);"
                                data-target="#garansi" role="tab" aria-controls="garansi" aria-selected="false">Garansi
                                & Perawatan</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="productTabsContent">
                        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel"
                            aria-labelledby="deskripsi-tab">
                            <h4 class="text-yellow">Teknologi Superior, Kenyamanan Maksimal</h4>
                            <p>{{ $name }} adalah puncak inovasi kaca film non-metalized. Dibuat menggunakan
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

                        <div class="tab-pane fade" id="spesifikasi" role="tabpanel" aria-labelledby="spesifikasi-tab">
                            <p>Berikut adalah perbandingan data teknis untuk berbagai tipe dalam {{ $name }}:</p>
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
                            <small class="text-white-50">
                                *Data teknis berdasarkan pengujian standar industri pada kaca clear 6mm.
                            </small>
                        </div>

                        <div class="tab-pane fade" id="garansi" role="tabpanel" aria-labelledby="garansi-tab">
                            <h4 class="text-yellow">Garansi Resmi 5 Tahun</h4>
                            <p>Setiap pemasangan {{ $name }} di Mantra Sakti Autofilm dilindungi oleh garansi
                                resmi (E-Warranty) selama 5 tahun. Garansi ini mencakup:</p>
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

                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/3m.png') }}" class="card-img-top" alt="3M Autofilm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">3M Autofilm</h5>
                            <p class="card-text text-white-50 small">
                                Pelopor, menawarkan perlindungan panas & privasi superior dengan teknologi non-metalik
                                canggih.
                            </p>
                            <a href="{{ URL::to('detail-produk/3m-autofilm') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/ice.png') }}" class="card-img-top" alt="Iceview">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Iceview</h5>
                            <p class="card-text text-white-50 small">
                                Kaca film berkualitas tinggi, fokus pada penolakan panas maksimal dan kejernihan pandangan
                                yang optimal.
                            </p>
                            <a href="{{ URL::to('detail-produk/iceview') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/ilumi.png') }}" class="card-img-top" alt="Ilumi Window Film">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Ilumi Window Film</h5>
                            <p class="card-text text-white-50 small">
                                Menawarkan perlindungan UV yang baik dengan harga kompetitif, pilihan seimbang antara
                                performa dan biaya.
                            </p>
                            <a href="{{ URL::to('detail-produk/ilumi-window-film') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/llumar.png') }}" class="card-img-top" alt="Llumar">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Llumar</h5>
                            <p class="card-text text-white-50 small">
                                Kaca film global teruji, dikenal karena daya tahan, kejernihan optik, dan tolak panas yang
                                konsisten.
                            </p>
                            <a href="{{ URL::to('detail-produk/llumar') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/n1.png') }}" class="card-img-top" alt="N1 Window Film">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">N1 Window Film</h5>
                            <p class="card-text text-white-50 small">
                                Pilihan ekonomis dengan performa dasar yang memadai, menolak panas harian dan memberikan
                                privasi.
                            </p>
                            <a href="{{ URL::to('detail-produk/n1-window-film') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/perfect.png') }}" class="card-img-top" alt="Perfections">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Perfections</h5>
                            <p class="card-text text-white-50 small">
                                Menyediakan kaca film yang menggabungkan estetika premium dengan kemampuan tolak panas
                                tinggi.
                            </p>
                            <a href="{{ URL::to('detail-produk/perfections') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/solar.png') }}" class="card-img-top" alt="Solar Gard Premium">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Solar Gard Premium</h5>
                            <p class="card-text text-white-50 small">
                                Merek terkemuka, menawarkan rangkaian lengkap solusi tolak panas, keamanan, dan perlindungan
                                interior.
                            </p>
                            <a href="{{ URL::to('detail-produk/solar-gard-premium') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/una.png') }}" class="card-img-top" alt="Una Gard">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Una Gard</h5>
                            <p class="card-text text-white-50 small">
                                Kaca film nano-keramik modern yang fokus pada tolak panas tanpa mengganggu sinyal
                                elektronik.
                            </p>
                            <a href="{{ URL::to('detail-produk/una-gard') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card text-white h-100">
                        <img src="{{ asset('images/brand/vkool.png') }}" class="card-img-top" alt="V-Kool">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">V-Kool</h5>
                            <p class="card-text text-white-50 small">
                                Pelopor kaca film spektral selektif, terkenal akan tolak panas tinggi dengan transmisi
                                cahaya tampak yang jernih.
                            </p>
                            <a href="{{ URL::to('detail-produk/vkool') }}"
                                class="btn btn-merah mt-2">Lihat Detail</a>
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

            // 0. Script untuk Tab Navigation (mencegah scroll)
            $('#productTabs a[data-toggle="tab"]').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });

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
