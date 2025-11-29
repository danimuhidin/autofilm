<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Tips Memilih Kaca Film yang Tepat untuk Kendaraan Anda',
                'desc' => 'Memilih kaca film yang tepat sangat penting untuk kenyamanan berkendara. Berikut adalah beberapa tips yang dapat membantu Anda dalam memilih kaca film terbaik untuk kendaraan Anda. Pertimbangkan faktor seperti tingkat kejernihan, perlindungan UV, dan regulasi setempat.',
            ],
            [
                'title' => 'Manfaat Kaca Film untuk Rumah dan Kantor',
                'desc' => 'Kaca film tidak hanya bermanfaat untuk kendaraan, tetapi juga untuk bangunan. Dengan memasang kaca film di rumah atau kantor, Anda dapat menghemat energi AC, meningkatkan privasi, dan melindungi furniture dari sinar UV yang berbahaya.',
            ],
            [
                'title' => 'Promo Spesial: Diskon 20% untuk Pemasangan Kaca Film Premium',
                'desc' => 'Dapatkan diskon hingga 20% untuk pemasangan kaca film premium di bulan ini! Jangan lewatkan kesempatan emas ini untuk meningkatkan kenyamanan dan keamanan kendaraan atau bangunan Anda dengan produk berkualitas tinggi.',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
