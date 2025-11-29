<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'name' => 'PT Maju Jaya Sentosa',
            'address' => 'Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta 10220',
            'telp' => '021-5551234',
        ]);

        Partner::create([
            'name' => 'CV Berkah Auto',
            'address' => 'Jl. Ahmad Yani No. 45, Surabaya, Jawa Timur 60234',
            'telp' => '031-7778899',
        ]);

        Partner::create([
            'name' => 'UD Sejahtera Motor',
            'address' => 'Jl. Gatot Subroto No. 88, Bandung, Jawa Barat 40262',
            'telp' => '022-4445566',
        ]);

        Partner::create([
            'name' => 'Toko Mobil Makmur',
            'address' => 'Jl. Diponegoro No. 67, Semarang, Jawa Tengah 50241',
            'telp' => '024-8889900',
        ]);
    }
}
