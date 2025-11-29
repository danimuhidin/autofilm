<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outlet::create([
            'name' => 'Mantra Sakti Autofilm - Cabang Sudirman',
            'address' => 'Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta 10220',
            'telp' => '021-5551234',
            'link1' => 'https://maps.google.com/?q=Mantra+Sakti+Sudirman',
            'link2' => 'https://instagram.com/mantrasakti_sudirman',
            'operation_hours' => 'Senin - Sabtu, 08:00 - 18:00',
        ]);

        Outlet::create([
            'name' => 'Mantra Sakti Autofilm - Cabang Surabaya',
            'address' => 'Jl. Ahmad Yani No. 45, Surabaya, Jawa Timur 60234',
            'telp' => '031-7778899',
            'link1' => 'https://maps.google.com/?q=Mantra+Sakti+Surabaya',
            'link2' => 'https://instagram.com/mantrasakti_surabaya',
            'operation_hours' => 'Senin - Sabtu, 09:00 - 17:00',
        ]);

        Outlet::create([
            'name' => 'Mantra Sakti Autofilm - Cabang Bandung',
            'address' => 'Jl. Gatot Subroto No. 88, Bandung, Jawa Barat 40262',
            'telp' => '022-4445566',
            'link1' => 'https://maps.google.com/?q=Mantra+Sakti+Bandung',
            'link2' => 'https://instagram.com/mantrasakti_bandung',
            'operation_hours' => 'Senin - Jumat, 08:00 - 17:00; Sabtu, 08:00 - 14:00',
        ]);

        Outlet::create([
            'name' => 'Mantra Sakti Autofilm - Cabang Semarang',
            'address' => 'Jl. Diponegoro No. 67, Semarang, Jawa Tengah 50241',
            'telp' => '024-8889900',
            'link1' => 'https://maps.google.com/?q=Mantra+Sakti+Semarang',
            'link2' => 'https://instagram.com/mantrasakti_semarang',
            'operation_hours' => 'Senin - Sabtu, 08:00 - 17:00',
        ]);
    }
}
