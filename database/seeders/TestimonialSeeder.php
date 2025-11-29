<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Budi Santoso',
            'desc' => 'Pelayanan sangat memuaskan! Kaca film terpasang dengan rapi dan hasil sangat bagus. Tim Mantra Sakti sangat profesional dan ramah. Harga juga sangat kompetitif. Sangat recommend untuk yang mau pasang kaca film berkualitas!',
        ]);

        Testimonial::create([
            'name' => 'Siti Nurhaliza',
            'desc' => 'Sudah 3 kali pasang kaca film di Mantra Sakti dan selalu puas dengan hasilnya. Kualitas kaca film terjamin original, garansi jelas, dan hasil pemasangan rapih tanpa gelembung. Terima kasih Mantra Sakti!',
        ]);

        Testimonial::create([
            'name' => 'Andi Wijaya',
            'desc' => 'Kaca film 3M Crystalline memang the best! Tolak panas luar biasa tapi tetap terang. Sejak pasang di Mantra Sakti, kabin mobil jadi lebih adem dan AC lebih dingin. Worth it banget!',
        ]);

        Testimonial::create([
            'name' => 'Rina Anggraini',
            'desc' => 'Tempat pasang kaca film terbaik di kota! Konsultasi detail, pilihan produk lengkap, harga transparan, dan hasil pemasangan sangat memuaskan. Staff sangat helpful dan profesional.',
        ]);

        Testimonial::create([
            'name' => 'Denny Pratama',
            'desc' => 'Awalnya ragu mau pasang kaca film premium, tapi setelah konsultasi dengan tim Mantra Sakti jadi yakin. Hasilnya memang beda, kualitas terjamin dan garansi resmi 5 tahun. Highly recommended!',
        ]);
    }
}
