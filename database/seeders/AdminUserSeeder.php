<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // <-- TAMBAHKAN INI
use Illuminate\Support\Facades\Hash; // <-- TAMBAHKAN INI

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus user lama jika ada (opsional, tapi bagus untuk testing)
        User::where('username', 'administrator')->delete();

        // Buat user administrator baru
        User::create([
            'name' => 'Administrator', // Kolom 'name' bawaan Laravel
            'username' => 'administrator',
            'email' => 'administrator@mail.com',
            'password' => Hash::make('administrator@123'),
            'is_admin' => true, // Ini dari langkah kita sebelumnya
            'email_verified_at' => now(), // Verifikasi emailnya langsung
        ]);
    }
}