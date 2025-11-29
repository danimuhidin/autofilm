<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Note: Karena ini seeder, kita gunakan path dummy untuk image
        // Dalam penggunaan real, gambar akan di-upload melalui form
        
        Gallery::create([
            'title' => 'Pemasangan Kaca Film 3M Crystalline BMW Seri 5',
            'category' => 'Mobil',
            'desc' => 'Hasil pemasangan kaca film premium 3M Crystalline pada BMW Seri 5. Tampilan elegan dengan perlindungan maksimal.',
            'image' => 'galleries/dummy1.jpg',
        ]);

        Gallery::create([
            'title' => 'Kaca Film Gedung Kantor Jakarta Pusat',
            'category' => 'Gedung',
            'desc' => 'Proyek pemasangan kaca film gedung untuk kantor di Jakarta Pusat. Mengurangi panas dan hemat energi AC.',
            'image' => 'galleries/dummy2.jpg',
        ]);

        Gallery::create([
            'title' => 'Toyota Fortuner dengan Iceberg UX Series',
            'category' => 'Mobil',
            'desc' => 'Pemasangan kaca film Iceberg UX Series pada Toyota Fortuner. Tolak panas maksimal dengan tampilan clear view.',
            'image' => 'galleries/dummy3.jpg',
        ]);

        Gallery::create([
            'title' => 'Promo Spesial Akhir Tahun',
            'category' => 'Promo',
            'desc' => 'Dapatkan diskon hingga 30% untuk pemasangan kaca film premium di akhir tahun ini!',
            'image' => 'galleries/dummy4.jpg',
        ]);

        Gallery::create([
            'title' => 'Workshop Training Pemasangan Kaca Film',
            'category' => 'Event',
            'desc' => 'Event training teknik pemasangan kaca film professional untuk teknisi partner kami.',
            'image' => 'galleries/dummy5.jpg',
        ]);

        Gallery::create([
            'title' => 'Mercedes-Benz dengan 3M Black Beauty',
            'category' => 'Mobil',
            'desc' => 'Hasil sempurna pemasangan 3M Black Beauty pada Mercedes-Benz. Tampilan premium dan eksklusif.',
            'image' => 'galleries/dummy6.jpg',
        ]);
    }
}
