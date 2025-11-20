@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="page-hero container-fluid" style="background-image: url({{ asset('images/hero/tentang.png') }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Tentang Mantra Sakti Autofilm</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-6">
                    <h4 class="mb-3" style="color: var(--warna-kuning-aksen);">Distributor Resmi Kaca Film Terbaik di Indonesia</h4>
                    <p>Mantra Sakti Autofilm bukan sekadar bengkel biasa. Kami adalah
                        distributor resmi dan pusat instalasi kaca film premium terpercaya di Indonesia.</p>
                    <p>Didirikan atas kecintaan terhadap dunia otomotif dan kebutuhan akan perlindungan berkualitas, kami
                        mendedikasikan diri untuk menyediakan produk kaca film 100% original dengan standar pemasangan
                        tertinggi. Sejak awal berdiri, kami telah melayani ribuan pelanggan, memberikan solusi terbaik untuk
                        kenyamanan, privasi, dan keamanan berkendara.</p>
                    <p>Kami percaya bahwa setiap kendaraan berhak mendapatkan perlindungan terbaik. Itulah mengapa kami
                        hanya bermitra dengan merek-merek ternama dunia dan memastikan setiap teknisi kami terlatih secara
                        profesional dan bersertifikat.</p>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 pl-lg-4">
                    <img src="{{ asset('images/hq.jpg') }}" alt="Workshop Mantra Sakti Autofilm"
                        class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background-color: var(--warna-latar-sekunder);">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri: Visi -->
                <div class="col-md-6 text-center text-md-left mb-5 mb-md-0">
                    <i class="fas fa-eye vision-mission-icon"></i>
                    <h3 class="font-weight-bold mb-3">Visi Kami</h3>
                    <p>Menjadi tolok ukur (benchmark) industri kaca film di Indonesia; sebagai distributor dan pusat
                        instalasi yang paling terpercaya, profesional, dan berorientasi pada kepuasan pelanggan.</p>
                </div>
                <!-- Kolom Kanan: Misi -->
                <div class="col-md-6 text-center text-md-left">
                    <i class="fas fa-bullseye vision-mission-icon"></i>
                    <h3 class="font-weight-bold mb-3">Misi Kami</h3>
                    <ul class="mission-list">
                        <li>Menyediakan 100% produk kaca film original dan bergaransi resmi.</li>
                        <li>Memberikan layanan instalasi yang presisi, cepat, dan bersih oleh teknisi bersertifikat.</li>
                        <li>Menjamin kepuasan penuh setiap pelanggan melalui konsultasi profesional dan layanan purna jual
                            yang responsif.</li>
                        <li>Terus berinovasi dalam teknik pemasangan dan pilihan produk untuk memenuhi kebutuhan pasar.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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
                        <p>Kami hanya menjual produk asli dengan kartu garansi resmi dari distributor. Kenyamanan Anda
                            terjamin penuh selama bertahun-tahun.</p>
                    </div>
                </div>
                <!-- Item 2: Profesional -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-user-cog"></i></span>
                        <h5>Teknisi Profesional</h5>
                        <p>Tim installer kami telah tersertifikasi dan sangat berpengalaman, memastikan pemasangan yang
                            presisi, rapi, dan tanpa cacat.</p>
                    </div>
                </div>
                <!-- Item 3: Original -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-thumbs-up"></i></span>
                        <h5>Produk Original</h5>
                        <p>Jaminan 100% produk asli dari merek-merek terbaik dunia. Hati-hati barang tiruan, percayakan
                            hanya pada kami sebagai distributor resmi.</p>
                    </div>
                </div>
                <!-- Item 4: Presisi -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="feature-box">
                        <span class="feature-icon"><i class="fas fa-check-circle"></i></span>
                        <h5>Hasil Presisi</h5>
                        <p>Detail adalah kunci. Kami menggunakan SOP ketat dan alat modern untuk menjamin hasil pemasangan
                            yang rapi, bersih, dan sempurna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-padding section-bg-dark">
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
                        <img src="https://placehold.co/400x400/555/777?text=Budi+S." class="card-img-top"
                            alt="Foto Budi Santoso">
                        <div class="card-body">
                            <h5 class="card-title">Budi Santoso</h5>
                            <h6 class="card-subtitle mb-2">Founder & CEO</h6>
                            <p class="card-text">"Kepuasan Anda adalah prioritas utama kami. Kami tidak hanya menjual
                                produk, kami menjual kepercayaan."</p>
                        </div>
                    </div>
                </div>
                <!-- Tim 2: Lead Technician -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-card h-100">
                        <img src="https://placehold.co/400x400/555/777?text=Andi+P." class="card-img-top"
                            alt="Foto Andi Permana">
                        <div class="card-body">
                            <h5 class="card-title">Andi Permana</h5>
                            <h6 class="card-subtitle mb-2">Lead Technician</h6>
                            <p class="card-text">"Presisi dan kebersihan adalah tanda tangan saya di setiap mobil yang kami
                                kerjakan. Tidak ada kompromi."</p>
                        </div>
                    </div>
                </div>
                <!-- Tim 3: Customer Relations -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-card h-100">
                        <img src="https://placehold.co/400x400/555/777?text=Citra+L." class="card-img-top"
                            alt="Foto Citra Lestari">
                        <div class="card-body">
                            <h5 class="card-title">Citra Lestari</h5>
                            <h6 class="card-subtitle mb-2">Customer Relations</h6>
                            <p class="card-text">"Kami di sini untuk mendengarkan dan memberikan solusi terbaik untuk
                                kebutuhan kenyamanan dan keamanan Anda."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
