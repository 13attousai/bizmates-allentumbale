<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Regions\Models\Regions::updateOrCreate(['name' => 'Hokkaido']);
        \Regions\Models\Regions::updateOrCreate(['name' => 'Tohoku']);
        \Regions\Models\Regions::updateOrCreate(['name' => 'Kanto']);
        \Regions\Models\Regions::updateOrCreate(['name' => 'Chubu']);
        \Regions\Models\Regions::updateOrCreate(['name' => 'Kansai']);
        \Regions\Models\Regions::updateOrCreate(['name' => 'Chugoku']);
        \Regions\Models\Regions::updateOrCreate(['name' => 'Shikoku']);
        \Regions\Models\Regions::updateOrCreate(['name' => 'Kyushu']);
        \Regions\Models\Regions::updateOrCreate(['name' => 'Okinawa']);
    }
}
