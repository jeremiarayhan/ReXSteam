<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $game = [
          ['name' => 'Apex Legends', 'description' => 'Apex Legends is an online multiplayer battle royale game featuring squads of three players using pre-made characters with distinctive abilities, called "Legends", similar to those of hero shooters. Alternate modes have been introduced allowing for single and for two-player squads since the games release.', 'category' => 'FPS', 'developer' => 'Respawn Entertainment', 'publisher' => 'Electronic Arts', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1172470/header.jpg?t=1621457566', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256832561/movie480_vp9.webm?t=1619624593'],
          ['name' => 'Euro Truck Simulator 2', 'description' => 'Travel across Europe as king of the road, a trucker who delivers important cargo across impressive distances! With dozens of cities to explore, your endurance, skill and speed will all be pushed to their limits.', 'category' => 'Simulation', 'developer' => 'SCS Software', 'publisher' => 'SCS Software', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/227300/header.jpg?t=1619119593', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256827292/movie480_vp9.webm?t=1616622379'],
          ['name' => 'Forza Horizon 4', 'description' => 'Forza Horizon 4 is a racing video game set in an open world environment based in a fictionalised Great Britain, with regions that include condensed representations of Edinburgh, the Scottish Highlands, the Lake District (including Derwentwater), Ambleside and the Cotswolds (including Broadway), Bamburgh among others.', 'category' => 'Racing', 'developer' => 'Turn 10 Studios', 'publisher' => 'Xbox Game Studios', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1293830/header.jpg?t=1615337540', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256820720/movie480_vp9.webm?t=1612810706'],
          ['name' => 'Grand Theft Auto V', 'description' => 'Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective. Players complete missions—linear scenarios with set objectives—to progress through the story. Outside of the missions, players may freely roam the open world.', 'category' => 'Adventure', 'developer' => 'Rockstar Games', 'publisher' => 'Rockstar Games', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/271590/header.jpg?t=1618856444', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256820720/movie480_vp9.webm?t=1612810706'],
          ['name' => 'GTFO - Rundown 005/Rebirth', 'description' => 'GTFO players form a team of four scavengers who are forced to explore the vast underground complex in order to complete the Wardens objectives. ... The players must strategize, plan, ration resources and stealthily kill enemies to survive, and work to fulfill the Wardens demands and be allowed to escape.', 'category' => 'Survival', 'developer' => '10 Chambers Collective', 'publisher' => '10 Chambers', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/493520/header.jpg?t=1619710162', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256832724/movie480_vp9.webm?t=1619710158'],
          ['name' => 'It takes two', 'description' => 'It Takes Two is an action-adventure video game with elements from platform games. It is specifically designed for split-screen cooperative multiplayer, which means that it must be played with another player through either local or online play. ... The game also features a large number of minigames.', 'category' => 'Platform', 'developer' => 'Hazelight Studios', 'publisher' => 'Electronic Arts', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1426210/header_alt_assets_0.jpg?t=1620487863', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256827093/movie480_vp9.webm?t=1616514535'],
          ['name' => 'Monster Hunter: World', 'description' => 'Monster Hunter: World is an action role-playing game developed and published by Capcom and the fifth mainline installment in the Monster Hunter series. ... In the game, the player takes the role of a Hunter, tasked to hunt down and either kill or trap monsters that roam in one of several environmental spaces.', 'category' => 'Action-RPG', 'developer' => 'Capcom', 'publisher' => 'Capcom', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/582010/header.jpg?t=1613693233', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256769022/movie480.webm?t=1596524406'],
          ['name' => 'Planet Coaster', 'description' => 'Planet Coaster is a construction and management simulation video game. Similar to its spiritual predecessor, the game allows players to build different theme park rides and roller-coasters. These player-created attractions can be shared through a mechanic called "global village".', 'category' => 'Simulation', 'developer' => 'Frontier Developments plc', 'publisher' => 'Frontier Developments plc', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/493340/header.jpg?t=1617973118', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256674785/movie480.webm?t=1488290537'],
          ['name' => 'Tekken 7', 'description' => 'TEKKEN 7 represents the final chapter of the 20-year-long Mishima feud. Unveil the epic ending to the emotionally charged family warfare between the members of the Mishima Clan as they struggle to settle old scores and wrestle for control of a global empire, putting the balance of the world in peril.', 'category' => 'Fighting', 'developer' => 'Bandai Namco', 'publisher' => 'Bandai Namco', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/389730/header.jpg?t=1616774938', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256807403/movie480_vp9.webm?t=1604043392'],
          ['name' => 'Terraria', 'description' => 'Terraria is an action-adventure sandbox game developed by Re-Logic. The game features exploration, crafting, building, painting, and combat with a variety of creatures in a procedurally generated 2D world. Terraria received generally positive reviews, with praise given to its sandbox elements.', 'category' => 'Sandbox', 'developer' => 'Re-Logic', 'publisher' => 'Re-Logic', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/105600/header.jpg?t=1590092560', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256785003/movie480_vp9.webm?t=1589654781'],
          ['name' => 'Totally Accurate Battle Simulator', 'description' => 'Totally Accurate Battle Simulator (TABS) is a ragdoll physics battle simulation fighting video game developed by Landfall Games.', 'category' => 'Simulation', 'developer' => 'Landfall Games', 'publisher' => 'Landfall Games', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/508440/header.jpg?t=1617880814', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256828204/movie480_vp9.webm?t=1617300058'],
          ['name' => 'Valheim', 'description' => 'Valheim is an open-world survival game played from a third-person perspective. As fallen Vikings, players must craft tools, build shelters and fight enemies to survive. The game uses distinctive low-resolution stylized 3D graphics, with a combat system inspired by action games.', 'category' => 'Survival', 'developer' => 'Iron Gates AB', 'publisher' => 'Coffee Stain Studios', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/892970/header.jpg?t=1617258628', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256820008/movie480_vp9.webm?t=1612278985'],
          ['name' => 'Tom Clancy Rainbow Six Siege', 'description' => 'Tom Clancys Rainbow Six Siege is a first-person shooter game, in which players utilize many different operators from the Rainbow team. Different operators have different nationalities, weapons, and gadgets. Players can also complete in-game "challenges" to get a small amount of renown.', 'category' => 'FPS', 'developer' => 'Ubisoft', 'publisher' => 'Ubisoft', 'price' => 250000, 'coverLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/359550/header.jpg?t=1617836257', 'trailerLink' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256806810/movie480_vp9.webm?t=1603820794'],
        ];

        foreach($game as $g){
          Game::create($g);
        }
    }
}