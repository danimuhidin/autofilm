<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Note: Karena ini seeder, kita gunakan path dummy untuk image
        // Dalam penggunaan real, gambar akan di-upload melalui form
        
        Hero::create([
            'title' => 'Perlindungan Maksimal untuk Kendaraan Anda',
            'image' => 'heroes/hero1.jpg',
        ]);

        Hero::create([
            'title' => 'Kaca Film Premium 3M Crystalline',
            'image' => 'heroes/hero2.jpg',
        ]);

        Hero::create([
            'title' => 'Spesialis Kaca Film Mobil & Gedung',
            'image' => 'heroes/hero3.jpg',
        ]);
    }
}
