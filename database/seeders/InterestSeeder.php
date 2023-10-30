<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CASTLES
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/castles/tower.jpg',
            'name' => 'Castle tower (tenshukaku)',
            'description' => "Also known as donjon or castle keep, this is the innermost, best defended and most prominent structure of a castle. Most castle towers have between two to five stories, and there are often more floors inside than there are stories on the outside.",
            'type' => \Interests\States\InterestState::CASTLE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/castles/walls.jpg',
            'name' => 'Walls and moats',
            'description' => "Several rings of walls and moats serve as the main defense measure of castles. Osaka Castle and the former Edo Castle (now Tokyo's Imperial Palace) offer the most impressive examples.",
            'type' => \Interests\States\InterestState::CASTLE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/castles/guard.jpg',
            'name' => 'Guard towers (yagura)',
            'description' => "Also known as turrets, these are watch towers and storage rooms along the castle walls, often placed at the corners. Castles usually have multiple guard towers. They are much smaller in size than the main castle tower and are usually made up of two floors.",
            'type' => \Interests\States\InterestState::CASTLE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/castles/gates.jpg',
            'name' => 'Gates',
            'description' => "Castles have a number of well defended entrance gates. The typical castle gate consists of two gates which are placed at a 90 degree angle to each other, creating a small inner yard which is heavily defended from all sides.",
            'type' => \Interests\States\InterestState::CASTLE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/castles/palace.jpg',
            'name' => 'Palace (goten)',
            'description' => "The palace houses the lord's residence and offices. Most castles have lost their palace over time. A rare surviving example is the Ninomaru Palace of Nijo Castle. Among the few castles with reconstructed palaces are Kumamoto Castle, Hikone Castle and Nagoya Castle.",
            'type' => \Interests\States\InterestState::CASTLE
        ]);

        // SHRINES
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/shrines/torii.jpg',
            'name' => 'Torii',
            'description' => 'One or more torii gates mark the approach and entrance to a shrine. They come in various colors and are made of various materials. Most torii, however are made of wood, and many are painted orange and black.',
            'type' => \Interests\States\InterestState::SHRINE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/shrines/komainu.jpg',
            'name' => 'Komainu',
            'description' => 'Komainu are a pair of guardian dogs or lions, often found on each side of a shrine\'s entrance.',
            'type' => \Interests\States\InterestState::SHRINE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/shrines/purification.jpg',
            'name' => 'Purification trough',
            'description' => 'Found near the entrance, the water of these fountains is used for purification. You are supposed to clean your hands and mouth before approaching the main hall.',
            'type' => \Interests\States\InterestState::SHRINE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/shrines/offering.jpg',
            'name' => 'Main and offering hall',
            'description' => "Depending on the shrine's architecture style, the main hall (honden) and offering hall (haiden) are two separate buildings or combined into one building. The main hall's innermost chamber contains the shrine's sacred object, while visitors make their prayers and offerings at the offering hall",
            'type' => \Interests\States\InterestState::SHRINE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/shrines/stage.jpg',
            'name' => 'Stage',
            'description' => "Stages for kagura dance or noh theater performances can be found at some shrines.",
            'type' => \Interests\States\InterestState::SHRINE
        ]);

        // TEMPLES
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/temples/main_hall.jpg',
            'name' => 'Main hall',
            'description' => 'The sacred objects of worship, such as statues, are displayed in the main hall. Depending on the sect and temple, the main hall is called kondo, hondo, butsuden, amidado or hatto in Japanese.',
            'type' => \Interests\States\InterestState::TEMPLE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/temples/lecture_hall.jpg',
            'name' => 'Lecture hall',
            'description' => 'Lecture halls are for meetings and lectures and often also display objects of worship. Lecture halls are called kodo.',
            'type' => \Interests\States\InterestState::TEMPLE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/temples/pagoda.jpg',
            'name' => 'Pagoda',
            'description' => 'The pagoda, a structure that has evolved from the Indian stupa, usually comes with three (sanju no to) or five (goju no to) stories. Pagodas store remains of the Buddha such as a tooth, usually in the form of a representation.',
            'type' => \Interests\States\InterestState::TEMPLE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/temples/gates.jpg',
            'name' => 'Gates',
            'description' => 'Gates mark the entrance to the temple grounds. There is usually one main gate, and possibly several additional gates, along the temple\'s main approach.',
            'type' => \Interests\States\InterestState::TEMPLE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/temples/bell.jpg',
            'name' => 'Bell',
            'description' => 'On New Year\'s Eve, temple bells are rung 108 times, corresponding to the Buddhist concept of 108 worldly desires.',
            'type' => \Interests\States\InterestState::TEMPLE
        ]);

        // MUSEUMS
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/museums/Nara National Museum.jpg',
            'name' => 'Nara National Museum',
            'description' => "Located in Nara Park, the outstanding Nara National Museum is an old fashioned, highly educational museum about Buddhist statues. The museum displays a permanent collection of Japanese Buddhist art and religious artifacts. It also hosts annual exhibitions of treasures from nearby Todaiji Temple every autumn.",
            'type' => \Interests\States\InterestState::MUSEUM
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/museums/Adachi Museum of Art.jpg',
            'name' => 'Adachi Museum of Art',
            'description' => "This museum's star attraction is its beautiful garden, which is widely considered to be one of Japan's best. But the museum also houses an outstanding exhibition of Japanese paintings and tableware, most notably a large collection of paintings by Yokoyama Taikan.",
            'type' => \Interests\States\InterestState::MUSEUM
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/museums/Kubota Itchiku Art Museum.jpg',
            'name' => 'Kubota Itchiku Art Museum',
            'description' => "The Kubota Itchiku Art Museum presents a collection of outstanding kimono created with the highly labor-intensive tie-dyeing technique by Kubota Itchiku. The intriguing museum buildings and surrounding gardens further enhance the appeal of this museum near Mount Fuji.",
            'type' => \Interests\States\InterestState::MUSEUM
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/museums/National Art Center Tokyo.jpg',
            'name' => 'National Art Center Tokyo',
            'description' => "The National Art Center Tokyo (Kokuritsu Shin-Bijutsukan) in Roppongi is one of Japan's largest museums. The museum maintains no permanent collection but hosts excellent exhibitions that change periodically. The facility's futuristic building is part of the attraction.",
            'type' => \Interests\States\InterestState::MUSEUM
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/museums/Miho Museum.jpg',
            'name' => 'Miho Museum',
            'description' => "The Miho Museum features structures of interesting designs integrated into the natural surroundings. The museum captivates with a theme of contrasting steel, glass and warm stone, complemented by panoramic views of the surrounding valleys. The museum's exhibits consist of works from ancient civilizations such as the Egyptians, Romans, and various Asian cultures.",
            'type' => \Interests\States\InterestState::MUSEUM
        ]);

        // HISTORIC SITE
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/historic_sites/Former Castle Town.jpg',
            'name' => 'Former Castle Town',
            'description' => "A few lanes, lined by the white walls and wooden gates of former samurai mansions are beautifully preserved in the Jokamachi district of Hagi today. Some houses are open to the public.",
            'type' => \Interests\States\InterestState::HISTORIC_SITE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/historic_sites/Samurai District.jpg',
            'name' => 'Samurai District',
            'description' => "A beautifully preserved samurai district with several former samurai mansions open to the public. Kakunodate's samurai district is famous for its many weeping cherry trees.",
            'type' => \Interests\States\InterestState::HISTORIC_SITE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/historic_sites/Nagamachi.jpg',
            'name' => 'Nagamachi',
            'description' => "Narrow lanes and old mansions are preserved in Nagamachi, one of Kanazawa's former samurai districts. Kanazawa used to be the capital of the Edo Period's second wealthiest feudal domain.",
            'type' => \Interests\States\InterestState::HISTORIC_SITE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/historic_sites/Kitsuki.jpg',
            'name' => 'Kitsuki',
            'description' => "Kitsuki is unique for having two samurai districts on hills sandwiching a merchant district in the valley in between. They are among the most pleasantly preserved samurai districts in Japan.",
            'type' => \Interests\States\InterestState::HISTORIC_SITE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/historic_sites/Old Town.jpg',
            'name' => 'Old Town',
            'description' => "The highlight of Tsuwano's old town is the Tonomachi district where one street block of the former samurai district is particularly nicely preserved with earthen walls, historic buildings and a water canal filled with carps.",
            'type' => \Interests\States\InterestState::HISTORIC_SITE
        ]);

        // INDUSTRY AND COMMERCE
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/industry_and_commerce/Henn-na Hotel.jpg',
            'name' => 'Henn-na Hotel',
            'description' => "Human contact is minimal at the futuristic Henn-na Hotel (lit. \"strange hotel\"), as most of the tasks from check-in to porter services are handled by various types of robots. The first Henn-na Hotel opened at Huis Ten Bosch, a theme park near Nagasaki. Several more opened afterwards in different parts of the country.",
            'type' => \Interests\States\InterestState::INDUSTRY_AND_COMMERCE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/industry_and_commerce/Toyota Factory Tour and Museums.jpg',
            'name' => 'Toyota Factory Tour and Museums',
            'description' => "Toyota, Japan's leading car manufacturer, has its headquarters in the city of Toyota, less than one hour east of central Nagoya. There are several museums in Nagoya where visitors can learn about the history of the company and view new and old Toyota car models. There are also plant tours that are held once daily.",
            'type' => \Interests\States\InterestState::INDUSTRY_AND_COMMERCE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/industry_and_commerce/Sado Kinzan Gold Mine.jpg',
            'name' => 'Sado Kinzan Gold Mine',
            'description' => "Sado Kinzan on Sado Island used to be the most productive gold mine in Japan, producing nearly 400 kg of gold annually as well as smaller amounts of silver and copper. The gold mine ended operations in 1989. It is now open to the public with two walking courses that lead through the mining tunnels.",
            'type' => \Interests\States\InterestState::INDUSTRY_AND_COMMERCE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/industry_and_commerce/Kamaishi Iron History Museum.jpg',
            'name' => 'Kamaishi Iron History Museum',
            'description' => "The Iron and Steel Museum commemorates the history of the iron industry in Kamaishi City. The city became a major producer of iron and steel after magnetite was discovered there in the 18th century and Japan's first blast furnace was constructed in the 19th century.",
            'type' => \Interests\States\InterestState::INDUSTRY_AND_COMMERCE
        ]);
        \Interests\Models\Interests::updateOrCreate([
            'image' => 'images/industry_and_commerce/Shiroi Koibito Park.jpg',
            'name' => 'Shiroi Koibito Park',
            'description' => "The Shiroi Koibito Park is a theme park by Ishiya, a chocolate company which is most famous for its flagship product, the Shiroi Koibito cookie. The park consists of a free area with a shop, cafe and restaurant and a paid area with various chocolate related exhibits and, more interestingly, a few large windows through which visitors can observe the cookie production process in the factory.",
            'type' => \Interests\States\InterestState::INDUSTRY_AND_COMMERCE
        ]);
    }
}
