<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Shiretoko'],
            [
                'region_id' => 1,
                'description' => "National park on an unspoiled peninsula",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Rishiri and Rebun'],
            [
                'region_id' => 1,
                'description' => "Small islands near Hokkaido's northern tip",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Daisetsuzan'],
            [
                'region_id' => 1,
                'description' => "Hokkaido's largest and wildest national park.",
                'rating' => 2
            ]
        );



        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Yamadera'],
            [
                'region_id' => 2,
                'description' => "Scenic temple on a steep mountainside",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Dewa Sanzan'],
            [
                'region_id' => 2,
                'description' => "Three sacred mountains with shrines",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Ginzan Onsen'],
            [
                'region_id' => 2,
                'description' => "One of Japan's nicest, old-fashioned onsen tow...",
                'rating' => 1
            ]
        );



        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Tokyo'],
            [
                'region_id' => 3,
                'description' => "Japan's capital and largest city",
                'rating' => 3
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Nikko'],
            [
                'region_id' => 3,
                'description' => "Site of Nikko Toshogu, Ieyasu's mausoleum",
                'rating' => 3
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Ogasawara Islands'],
            [
                'region_id' => 3,
                'description' => "Remote islands 1000 kilometers south of Toky...",
                'rating' => 2
            ]
        );



        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Mount Fuji'],
            [
                'region_id' => 4,
                'description' => "The country's most iconic landmark",
                'rating' => 3
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Shirakawago & Gokayama'],
            [
                'region_id' => 4,
                'description' => "Mountainous region, known for its farmhouses.",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Alpine Route'],
            [
                'region_id' => 4,
                'description' => "Spectacular route through the Northern Alps.",
                'rating' => 2
            ]
        );



        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Kyoto'],
            [
                'region_id' => 5,
                'description' => "For over 1000 years the capital of Japan.",
                'rating' => 3
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Mount Koya'],
            [
                'region_id' => 5,
                'description' => "Atmospheric temple mountain.",
                'rating' => 3
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Nara'],
            [
                'region_id' => 5,
                'description' => "Japan's first permanent capital.",
                'rating' => 3
            ]
        );



        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Miyajima'],
            [
                'region_id' => 6,
                'description' => "Island known for its shrine and large torii gate.",
                'rating' => 3
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Hiroshima'],
            [
                'region_id' => 6,
                'description' => "Regional capital with a tragic history.",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Inujima Island'],
            [
                'region_id' => 6,
                'description' => "Small island turned into a modern art site.",
                'rating' => 1
            ]
        );



        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Naoshima'],
            [
                'region_id' => 7,
                'description' => "Small island with a lot of modern art.",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Iya Valley'],
            [
                'region_id' => 7,
                'description' => "Remote valley in the center of Shikoku.",
                'rating' => 1
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Kotohira'],
            [
                'region_id' => 7,
                'description' => "Site of Shikoku's most popular shrine.",
                'rating' => 1
            ]
        );



        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Yakushima'],
            [
                'region_id' => 8,
                'description' => "Subtropical island with ancient cedar forest.",
                'rating' => 3
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Kurokawa Onsen'],
            [
                'region_id' => 8,
                'description' => "Hot spring town with attractive town and baths...",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Nagasaki'],
            [
                'region_id' => 8,
                'description' => "Attractive port city with a moving history.",
                'rating' => 2
            ]
        );



        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Yaeyama Islands'],
            [
                'region_id' => 9,
                'description' => "Okinawa's southernmost island group.",
                'rating' => 3
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Kerama Islands'],
            [
                'region_id' => 9,
                'description' => "Small island group with beautiful beaches.",
                'rating' => 2
            ]
        );
        \Destinations\Models\Destinations::updateOrCreate(
            ['name' => 'Okinawa Island'],
            [
                'region_id' => 9,
                'description' => "Okinawa Prefecture's main island.",
                'rating' => 2
            ]
        );
    }
}
