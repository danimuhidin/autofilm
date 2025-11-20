@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="page-hero container-fluid" style="background-image: url({{ asset('images/hero/garage.png') }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Hubungi Mantra Sakti Autofilm</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="contact-hq py-5">
        <div class="container">
            <h2 class="section-title">Hubungi Kantor Pusat</h2>
            <div class="row">

                <!-- Kolom Kiri: Formulir Kontak -->
                <div class="col-md-7 mb-5 mb-md-0">
                    <h3 class="contact-subtitle">Kirim Pertanyaan Anda</h3>
                    <p class="text-secondary mb-4">Punya pertanyaan umum, kritik, saran, atau peluang bisnis? Silakan isi
                        formulir di bawah ini.</p>
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formNama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="formNama" placeholder="Nama Anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formEmail">Alamat Email</label>
                                <input type="email" class="form-control" id="formEmail" placeholder="email@anda.com"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formTelepon">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="formTelepon" placeholder="0812xxxxxx">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formSubjek">Subjek</label>
                                <input type="text" class="form-control" id="formSubjek" placeholder="Subjek Pesan"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formPesan">Pesan Anda</label>
                            <textarea class="form-control" id="formPesan" rows="6" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-merah">Kirim Pesan</button>
                    </form>
                </div>

                <!-- Kolom Kanan: Info Kontak HQ & Maps -->
                <div class="col-md-5">
                    <h3 class="contact-subtitle">Informasi Kantor Pusat</h3>
                    <ul class="contact-info-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>
                                <strong>Alamat:</strong><br>
                                Jl. Mekar Puspita No.23, Cibaduyut, Kec. Bojongloa Kidul,
                                Kota Bandung, Jawa Barat 40236, Bandung, Jawa Barat 40236
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>
                                <strong>Telepon:</strong><br>
                                081244000805
                            </span>
                        </li>
                        <li>
                            <i class="fab fa-instagram"></i>
                            <span>
                                <strong>Instagram:</strong><br>
                                @mantrasaktiautofilm
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>
                                <strong>Jam Operasional:</strong><br>
                                Senin - Jumat: 08.00 - 17.00<br>
                                Sabtu: 08.00 - 14.00<br>
                                Minggu/Libur: Tutup
                            </span>
                        </li>
                    </ul>

                    <div class="map-responsive mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.5292365265803!2d107.60129351836224!3d-6.954015962128362!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8ebd164e4f5%3A0x86b84352dc5f73e5!2sJl.%20Mekar%20Pratama%20No.6!5e0!3m2!1sid!2sus!4v1763391977185!5m2!1sid!2sus"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="outlet-section py-5">
        <div class="container">
            <h2 class="section-title mb-2">Temukan Outlet Terdekat Kami</h2>
            <p class="text-center text-secondary col-md-12 mx-auto mb-5">
                Untuk pemasangan retail dan konsultasi langsung, silakan hubungi jaringan outlet resmi kami di bawah ini.
            </p>
            <div id="daftar-outlet">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 h-100">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-2" style="color: var(--warna-kuning-aksen);">
                                    <b>Mantra Sakti - Bekasi</b>
                                </h5>
                                <p class="card-text text-white-50">
                                    Grand Wisata, Ruko AA 15 No.16, Lambangsari, Tambun Selatan, Bekasi Regency, West Java
                                    17510
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> 0813-2323-0805
                                </p>
                                <a target="_blank"
                                    href="https://maps.app.goo.gl/pD8kd49jh9NFmbi17"
                                    class="btn btn-kuning btn-sm">
                                    Lihat Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 h-100">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-2" style="color: var(--warna-kuning-aksen);">
                                    <b>Mantra Sakti - Tangerang</b>
                                </h5>
                                <p class="card-text text-white-50">
                                    Ruko Mendrisio, Jl. Boulevard iL Lago No.68, Cihuni, Kec. Pagedangan, Kabupaten
                                    Tangerang, Banten 15334
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> 0821-1000-2805
                                </p>
                                <a target="_blank"
                                    href="https://maps.app.goo.gl/k2FjnR7xc3t38g7K8"
                                    class="btn btn-kuning btn-sm">
                                    Lihat Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 h-100">
                        <div class="card outlet-card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-2" style="color: var(--warna-kuning-aksen);">
                                    <b>Mantra Sakti - Cibubur</b>
                                </h5>
                                <p class="card-text text-white-50">
                                    Jl Alternatif Cibubur, Cibubur Point Automotif Center Ruko Blok B5, Kota Depok, Jawa
                                    Barat 16454
                                </p>
                                <p class="card-text text-white-50">
                                    <i class="fas fa-phone-alt"></i> 0812-1100-9805
                                </p>
                                <a target="_blank"
                                    href="https://maps.app.goo.gl/23v6Vzd5qYoupWw1A"
                                    class="btn btn-kuning btn-sm">Lihat Google Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ URL::to('/outlet') }}" class="btn btn-merah">Lihat
                    Semua Jaringan Outlet</a>
            </div>
        </div>
    </section>

@endsection
