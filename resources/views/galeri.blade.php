@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

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

    <section class="filter-controls text-center">
        <div class="container">
            <div class="btn-group filter-btn-group" role="group" aria-label="Filter Galeri">
                <button type="button" class="btn active" data-filter="*">Semua</button>
                <button type="button" class="btn" data-filter=".mobil">Kaca Film Mobil</button>
                <button type="button" class="btn" data-filter=".gedung">Kaca Film Gedung</button>
            </div>
        </div>
    </section>

    <section class="gallery-grid">
        <div class="container">
            <div class="row gallery-container">

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+Alphard"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film 3M di Toyota Alphard">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+1" class="img-fluid"
                                alt="Pemasangan Toyota Alphard">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/555/fff?text=Pemasangan+Gedung+A"
                            data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film Oneway di Gedung Perkantoran">
                            <img src="https://placehold.co/400x300/555/fff?text=Gedung+1" class="img-fluid"
                                alt="Pemasangan Kaca Film Gedung">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+Pajero"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film V-Kool di Mitsubishi Pajero">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+2" class="img-fluid"
                                alt="Pemasangan Mitsubishi Pajero">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+Civic"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Solar Gard di Honda Civic">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+3" class="img-fluid"
                                alt="Pemasangan Honda Civic">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/555/fff?text=Pemasangan+Ruko"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Stiker Sandblast di Ruko Minimalis">
                            <img src="https://placehold.co/400x300/555/fff?text=Gedung+2" class="img-fluid"
                                alt="Pemasangan Stiker Sandblast Ruko">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/555/fff?text=Pemasangan+Kafe"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Riben di Jendela Kafe">
                            <img src="https://placehold.co/400x300/555/fff?text=Gedung+3" class="img-fluid"
                                alt="Pemasangan Kaca Film Kafe">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+CRV" data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film Hitam di Honda CR-V">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+4" class="img-fluid"
                                alt="Pemasangan Honda CR-V">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/333/fff?text=Pemasangan+Xpander"
                            data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film Masterpiece di Mitsubishi Xpander">
                            <img src="https://placehold.co/400x300/333/fff?text=Mobil+5" class="img-fluid"
                                alt="Pemasangan Mitsubishi Xpander">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="https://placehold.co/800x600/555/fff?text=Pemasangan+Apartemen"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film di Balkon Apartemen">
                            <img src="https://placehold.co/400x300/555/fff?text=Gedung+4" class="img-fluid"
                                alt="Pemasangan Kaca Film Apartemen">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script>
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
    </script>
@endpush
