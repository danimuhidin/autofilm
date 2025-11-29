<?php

namespace Database\Seeders;

use App\Models\Jumbotron;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JumbotronSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Note: Karena ini seeder, kita gunakan path dummy untuk image
        // Dalam penggunaan real, gambar akan di-upload melalui form
        
        Jumbotron::create([
            'title' => 'Promo Akhir Tahun - Diskon hingga 30%',
            'desc' => 'Dapatkan diskon spesial untuk pemasangan kaca film premium. Penawaran terbatas!',
            'link' => '/produk',
            'image' => 'jumbotrons/promo1.jpg',
        ]);

        Jumbotron::create([
            'title' => 'Kaca Film 3M Crystalline Series',
            'desc' => 'Teknologi terdepan untuk perlindungan maksimal kendaraan Anda.',
            'link' => '/detail-produk/3M-Crystalline',
            'image' => 'jumbotrons/product1.jpg',
        ]);

        Jumbotron::create([
            'title' => 'Pemasangan Profesional dengan Garansi Resmi',
            'desc' => 'Dipasang oleh teknisi berpengalaman dengan garansi hingga 5 tahun.',
            'link' => '/outlet',
            'image' => 'jumbotrons/service1.jpg',
        ]);
    }
}
