@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')
    <section class="page-hero container-fluid" style="background-image: url({{ asset('images/hero/kategori.png') }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Kaca Film Mobil</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Produk Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kaca Film Mobil</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="deskripsi-kategori py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0 pr-md-3">
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
                </div>
                <div class="col-lg-5 text-center d-none d-lg-block">
                    <div class="icon-wrapper">
                        <img src="{{ asset('images/window-car.png') }}" alt="Icon Kaca Film Mobil"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="daftar-produk py-5">
        <div class="container py-4">
            <div class="section-title">
                <h2>Pilihan Produk Kaca Film Mobil</h2>
                <p>
                    Berikut adalah beberapa produk kaca film mobil unggulan yang kami tawarkan. Setiap produk dirancang
                    untuk
                    memberikan performa terbaik dalam menolak panas, melindungi dari sinar UV, dan meningkatkan kenyamanan
                    berkendara Anda.
                </p>
            </div>

            <div class="row">
                <!-- Produk 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/3m.png') }}" class="card-img-top"
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
                            <a href="#" class="btn btn-merah mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/ice.png') }}" class="card-img-top"
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
                            <a href="#" class="btn btn-merah mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{ asset('images/brand/ilumi.png') }}" class="card-img-top"
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
                            <a href="#" class="btn btn-merah mt-auto">Lihat Detail</a>
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
                    <div class="section-title">
                        <h2 class="font-weight-bold">Bingung Memilih Produk ?</h2>
                        <p class="mt-4">
                            Konsultan kami siap membantu Anda menemukan kaca film yang paling sesuai dengan kebutuhan, tipe
                            mobil, dan anggaran Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
