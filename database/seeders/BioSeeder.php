<?php

namespace Database\Seeders;

use App\Models\Bio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bio::create([
            'title' => 'Kacafilm Premium',
            'brand_name' => 'Kacafilm',
            'tagline' => 'Your Trusted Window Film Solution',
            'greeting_home' => 'Welcome to Kacafilm - We provide the best quality window film for your vehicle and building.',
            'greeting_about' => 'About Us - Kacafilm has been serving customers with premium quality window film products since 2020.',
            'address' => 'Jl. Example Street No. 123, Jakarta, Indonesia',
            'telp' => '+62 21 1234 5678',
            'whatsapp' => '+62 812 3456 7890',
            'ig_name' => '@kacafilm',
            'ig_link' => 'https://instagram.com/kacafilm',
            'fb_name' => 'Kacafilm Official',
            'fb_link' => 'https://facebook.com/kacafilm',
            'youtube_name' => 'Kacafilm Channel',
            'youtube_link' => 'https://youtube.com/@kacafilm',
            'tiktok_name' => '@kacafilm',
            'tiktok_link' => 'https://tiktok.com/@kacafilm',
            'email' => 'info@kacafilm.com',
            'operation_time' => 'Mon - Sat: 08:00 - 17:00',
            'link_maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666!2d106.666!3d-6.666',
            'link_maps_direction' => 'https://goo.gl/maps/example',
        ]);
    }
}
