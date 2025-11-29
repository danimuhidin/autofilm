<?php

namespace Database\Seeders;

use App\Models\Mission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $missions = [
            ['desc' => 'Deliver exceptional products and services that exceed customer expectations'],
            ['desc' => 'Build lasting partnerships based on trust and mutual success'],
            ['desc' => 'Invest in our people and empower them to reach their full potential'],
        ];

        foreach ($missions as $mission) {
            Mission::create($mission);
        }
    }
}
