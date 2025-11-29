<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'John Doe',
            'telp' => '081234567890',
        ]);

        Contact::create([
            'name' => 'Jane Smith',
            'telp' => '082345678901',
        ]);

        Contact::create([
            'name' => 'Bob Johnson',
            'telp' => '083456789012',
        ]);
    }
}
