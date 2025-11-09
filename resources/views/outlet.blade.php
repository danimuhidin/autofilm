@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

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

@endsection