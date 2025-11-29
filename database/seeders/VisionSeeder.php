<?php

namespace Database\Seeders;

use App\Models\Vision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $visions = [
            ['desc' => 'To be the leading provider of innovative solutions in our industry'],
            ['desc' => 'To create sustainable value for our customers and stakeholders'],
            ['desc' => 'To foster a culture of excellence and continuous improvement'],
        ];

        foreach ($visions as $vision) {
            Vision::create($vision);
        }
    }
}
