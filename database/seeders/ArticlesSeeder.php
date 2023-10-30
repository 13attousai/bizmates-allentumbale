<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Articles\Models\Articles::updateOrCreate(
            ['title' => 'Sake brewery hopping near central Kobe'],
            [
                'description' => 'Visiting sake breweries in the five sake districts near Kobe',
                'content' => 'Japanese sake originated as early as the 4th century, and records showed that it was used mostly for religious purposes, while Japanese sake as we know today dates back to around the 18th century with the advancement in brewing technology and flavor.

                One of the prominent sake regions in Japan are the five sake brewing districts in Kobe and Nishinomiya not far from downtown Kobe, which altogether make up the Nadagogo sake district. The amount of sake produced in Nadagogo is the largest in Japan. The district is well situated for sake brewing with the availability and access to good quality water and sake rice, which originated in the nearby plains and now grown in the same region, and having the Rokko mountain range at its back in the north, from which cold air descends and creates ideal sake brewing temperatures. Additionally, the sake breweries of Nadagogo are also located at the shore of the Seto Inland Sea, and sake boats known as tarukaisen facilitated the export of sake from Nada to Edo, then Tokyo.
                
                A unique characteristic of many of the sake breweries in the Nadagogo district is that their warehouses were built with the lengths of the warehouse spanning from east to west. Windows on the northern side are typically larger than the south-facing ones to take advantage of the cold air coming down from the Rokko mountains in the north and to regulate the airflow - ensuring that more cold air enters and stays in the warehouses than escapes. However, only few original warehouses remain today as many did not survive the Great Hanshin Earthquake, which struck in 1995 and killed over 6000 people in Kobe, Nishinomiya and Ashiya - the cities in which the sake breweries of Nadagogo span.',
                'cover' => 'article1.jpg',
            ]
        );

        \Articles\Models\Articles::updateOrCreate(
            ['title' => 'Japan Mobility Show 2023'],
            [
                'description' => 'Automotives and mobility at the event formerly known as the Tokyo Motor Show',
                'content' => "After a hiatus of three years the biennial automotive event, the Japan Mobility Show, will be held from October 28 till November 5, 2023 at the Tokyo Big Sight in Odaiba. Formerly known as the Tokyo Motor Show, the event was last held four years ago in October 2019. This is the first year that Japan Mobility Show is produced under its new name in an endeavor to be more inclusive of the various types of vehicles, not just automobiles.

                The theme of this year's event is to encourage visitors to consider the future of transport with a focus on creating a green and environmentally friendly society. Additionally, this year's event also hopes to inspire both adults and children to dream big for the future of mobility. As with previous years, the Japan Mobility Show is held at Tokyo Big Sight, an exhibition and convention center on Odaiba.",
                'cover' => 'article2.jpg',
            ]
        );

        \Articles\Models\Articles::updateOrCreate(
            ['title' => 'Autumn tours with Akita dogs in northern Japan'],
            [
                'description' => 'Experience northern Akita together with Akita dogs',
                'content' => "Akita Prefecture in northeastern Japan is known for its excellent outdoors, unique traditions, delicious cuisine, and notably, for its dog breed, the Akita dog, which bears the prefecture name. Additionally, visitors to Akita can expect to see spectacular fall colors (koyo) in autumn as the leaves change their colors from green to vibrant hues of yellow, orange and red. It is said that Akita is one of the best places in Japan to see and experience autumn colors, and this is evident by the stellar koyo spots nearby like Shirakami Sanchi, Japan's last remaining virgin beech forest and a UNESCO World Heritage Site, as well as Lake Towada and the Hachimantai mountain range in the Towada-Hachimantai National Park.

                Odate City in Akita is the birth place of the Akita dogs, one of the six native Japanese breed of dogs, and contains several Akita dog-related sights like a visitor center and a museum to learn more about the breed and meet the dogs in person. Akita dogs are known to be a large breed with physical characteristics like a wide face and pointy ears, large paws, long and straight forelegs, bushy and curled tails. Of the six native Japanese breeds, Akita dogs are the largest ones measuring over 65 centimeters on their fours and can be over 160 centimeters when standing on their hind legs.
                
                Akita dogs are known to be loyal dogs, and the most famous Akita dog is Hachiko, who continued to wait for his owner after he passed away unexpectedly, and whose image is commemorated at Shibuya Station in central Tokyo.",
                'cover' => 'article3.jpg',
            ]
        );

        \Articles\Models\Articles::updateOrCreate(
            ['title' => 'Toranomon Hills completed in central Tokyo'],
            [
                'description' => 'Complex of four skyscrapers opened fully on October 6',
                'content' => "With a vision to create a new global business hub in the center of Tokyo, the Mori Building company has recently completed the Toranomon Hills complex in the Toranomon district. From small and aging buildings, the area was transformed into a modern business district comprising of four modern skyscrapers with office space, shops, restaurants, hotels and residences as well as the new Toranomon Hills subway station, which opened in 2020. With the opening of the Station Tower on October 6, 2023, the complex was completed.",
                'cover' => 'article4.jpg',
            ]
        );

        \Articles\Models\Articles::updateOrCreate(
            ['title' => 'MUSASHI JAPAN Crafting Elegance and Sustainability in the heart of Asakusa'],
            [
                'description' => 'Asakusa is renowned for its stunning Sensoji Temple, drawing in countless visitors daily. However, just a few minutes away, lies the extraordinary Kappabashi Street.',
                'content' => "Nestled right next to Tawaramachi Station, this vibrant street, affectionately known as \"Kitchen Town,\" boasts an extensive array of kitchen essentials, leaving no culinary need unmet. From cutting-edge appliances to specialized cookware and signage, it's a one-stop destination for kitchen aficionados of all levels.",
                'cover' => 'article5.jpg',
            ]
        );
    }
}
