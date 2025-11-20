@extends('layouts.app')

@section('title', 'Mantra Sakti Autofilm - Spesialis Kaca Film Mobil & Gedung')
@section('page-title', 'Dashboard')

@section('content')

    <section class="page-hero container-fluid" style="background-image: url({{ asset('images/hero/galeri.png') }});">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold">Galeri Portofolio Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="filter-controls text-center py-4">
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
                        <a href="{{ asset('images/galeri/g1.jpg') }}"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Llumar">
                            <img src="{{ asset('images/galeri/g1.jpg') }}" class="img-fluid"
                                alt="Pemasangan Llumar">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/p1.png') }}"
                            data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film Oneway di Gedung Perkantoran">
                            <img src="{{ asset('images/galeri/p1.png') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film Gedung">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g2.jpg') }}"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Depan">
                            <img src="{{ asset('images/galeri/g2.jpg') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film Depan">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g3.jpg') }}"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film 3M Cristalline">
                            <img src="{{ asset('images/galeri/g3.jpg') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film 3M Cristalline">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/p2.png') }}"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Stiker Sandblast di Ruko Minimalis">
                            <img src="{{ asset('images/galeri/p2.png') }}" class="img-fluid"
                                alt="Pemasangan Stiker Sandblast Ruko">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/p3.png') }}"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film Riben di Jendela Kafe">
                            <img src="{{ asset('images/galeri/p3.png') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film Kafe">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g7.jpg') }}" data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Solar Gard">
                            <img src="{{ asset('images/galeri/g7.jpg') }}" class="img-fluid"
                                alt="Pemasangan Solar Gard">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper mobil">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/g5.jpg') }}"
                            data-lightbox="galeri-portofolio"
                            data-title="Pemasangan Kaca Film Ilumi">
                            <img src="{{ asset('images/galeri/g5.jpg') }}" class="img-fluid"
                                alt="Pemasangan Kaca Film Ilumi">
                            <div class="overlay-icon"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 gallery-item-wrapper gedung">
                    <div class="gallery-item">
                        <a href="{{ asset('images/galeri/p4.png') }}"
                            data-lightbox="galeri-portofolio" data-title="Pemasangan Kaca Film di Balkon Apartemen">
                            <img src="{{ asset('images/galeri/p4.png') }}" class="img-fluid"
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
