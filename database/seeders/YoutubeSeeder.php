<?php

namespace Database\Seeders;

use App\Models\Youtube;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $youtubes = [
            ['link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'],
            ['link' => 'https://youtu.be/9bZkp7q19f0'],
            ['link' => 'https://www.youtube.com/watch?v=jNQXAC9IVRw'],
        ];

        foreach ($youtubes as $youtube) {
            Youtube::create($youtube);
        }
    }
}
