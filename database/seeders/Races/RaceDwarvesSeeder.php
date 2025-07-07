<?php

namespace Database\Seeders\Races;

use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Database\Seeder;

class RaceDwarvesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $race              = new Race;
        $race->name        = 'Dwarf';
        $race->age         = 'Dwarves mature at the same rate as humans, but they’re considered young until they reach the age of 50. On average, they live about 350 years.';
        $race->hit_points  = 10;
        $race->size        = 'Medium';
        $race->speed       = 25;
        $race->description = '<p>Kingdoms rich in ancient grandeur, halls carved into the roots of mountains, the echoing of picks and hammers in deep mines and blazing forges, a commitment to clan and tradition, and a burning hatred of goblins and orcs—these common threads unite all dwarves.</p>
<h2>Short and Stout</h2>
<p>Bold and hardy, dwarves are known as skilled warriors, miners, and workers of stone and metal. Though they stand well under 5 feet tall, dwarves are so broad and compact that they can weigh as much as a human standing nearly two feet taller. Their courage and endurance are also easily a match for any of the larger folk.</p>
<p>Dwarven skin ranges from deep brown to a paler hue tinged with red, but the most common shades are light brown or deep tan, like certain tones of earth. Their hair, worn long but in simple styles, is usually black, gray, or brown, though paler dwarves often have red hair. Male dwarves value their beards highly and groom them carefully.</p>
<h2>Long Memory, Long Grudges</h2>
<p>Dwarves can live to be more than 400 years old, so the oldest living dwarves often remember a very different world. For example, some of the oldest dwarves living in Citadel Felbarr (in the world of the Forgotten Realms) can recall the day, more than three centuries ago, when orcs conquered the fortress and drove them into an exile that lasted over 250 years. This longevity grants them a perspective on the world that shorter-lived races such as humans and halflings lack.</p>
<p>Dwarves are solid and enduring like the mountains they love, weathering the passage of centuries with stoic endurance and little change. They respect the traditions of their clans, tracing their ancestry back to the founding of their most ancient strongholds in the youth of the world, and don’t abandon those traditions lightly. Part of those traditions is devotion to the gods of the dwarves, who uphold the dwarven ideals of industrious labor, skill in battle, and devotion to the forge.</p>
<p>Individual dwarves are determined and loyal, true to their word and decisive in action, sometimes to the point of stubbornness. Many dwarves have a strong sense of justice, and they are slow to forget wrongs they have suffered. A wrong done to one dwarf is a wrong done to the dwarf’s entire clan, so what begins as one dwarf’s hunt for vengeance can become a full-blown clan feud.</p>
<h2>Clans and Kingdoms</h2>
<p>Dwarven kingdoms stretch deep beneath the mountains where the dwarves mine gems and precious metals and forge items of wonder. They love the beauty and artistry of precious metals and fine jewelry, and in some dwarves this love festers into avarice. Whatever wealth they can’t find in their mountains, they gain through trade. They dislike boats, so enterprising humans and halflings frequently handle trade in dwarven goods along water routes. Trustworthy members of other races are welcome in dwarf settlements, though some areas are off limits even to them.</p>
<p>The chief unit of dwarven society is the clan, and dwarves highly value social standing. Even dwarves who live far from their own kingdoms cherish their clan identities and affiliations, recognize related dwarves, and invoke their ancestors’ names in oaths and curses. To be clanless is the worst fate that can befall a dwarf.</p>
<p>Dwarves in other lands are typically artisans, especially weaponsmiths, armorers, and jewelers. Some become mercenaries or bodyguards, highly sought after for their courage and loyalty.</p>
<h2>Gods, Gold, and Clan</h2>
<p>Dwarves who take up the adventuring life might be motivated by a desire for treasure—for its own sake, for a specific purpose, or even out of an altruistic desire to help others. Other dwarves are driven by the command or inspiration of a deity, a direct calling or simply a desire to bring glory to one of the dwarf gods. Clan and ancestry are also important motivators. A dwarf might seek to restore a clan’s lost honor, avenge an ancient wrong the clan suffered, or earn a new place within the clan after having been exiled. Or a dwarf might search for the axe wielded by a mighty ancestor, lost on the field of battle centuries ago.</p>
<h2>Dwarven Clan Names</h2>
<h5>Northern Clans</h5>
<ul>
    <li>Arnskull</li>
    <li>Battlehammer</li>
    <li>Blackbanner</li>
    <li>Blackhammer</li>
    <li>Bucklebar</li>
    <li>Darkfell</li>
    <li>Deepaxe</li>
    <li>Deepdelve</li>
    <li>Foehammer</li>
    <li>Gallowglar</li>
    <li>Hillsfar</li>
    <li>Horn</li>
    <li>Jundeth</li>
    <li>Narlagh</li>
    <li>Orothiar</li>
    <li>Quarrymaster</li>
    <li>Rockfist</li>
    <li>Stoneshoulder</li>
    <li>Stoneshield</li>
    <li>Trueforger</li>
    <li>Watchever</li>
    <li>Worldthrone</li>
    <li>Wyrmslayer</li>
    <li>Yund</li>
</ul>
<h5>Southern Clans</h5>
<ul>
    <li>Belindorn</li>
    <li>Bladebite</li>
    <li>Breakadder</li>
    <li>Crownshield</li>
    <li>Gemscepter</li>
    <li>Ghalkin</li>
    <li>Goldthumb</li>
    <li>Gordrivver</li>
    <li>Malthin</li>
    <li>Mastemyr</li>
    <li>Sorndar</li>
    <li>Talnoth</li>
    <li>Undurr</li>
    <li>Velm</li>
    <li>Zord</li>
</ul>';
        $race->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CON score increases by +2</dd>
    <dt>Speed</dt> <dd>You speed is not reduced by wearing Heavy Armor</dd>
    <dt>Darkvision</dt> <dd>Accustomed to life underground, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.</dd>
    <dt>Dwarven Resilience</dt> <dd>You gain a +4 bonus on Saves vs Poison. You have Damage Reduction 2 vs Poison.</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Dwarf']);

        $subrace           = new SubRace;
        $subrace->name     = 'Gold Dwarf';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'the Great Rift';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your WIS score increases by +1</dd>
    <dt>Dwarven Combat Training</dt> <dd>You have proficiency with the Battleaxe, Handaxe, Light Hammer, and Warhammer</dd>
    <dt>Stonecunning</dt> <dd>Whenever you make an INT (History) check related to the origin of stonework, you are considered proficient in the History skill and add double proficiency bonus to the check, instead of your normal proficiency bonus</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Dwarf', 'Duergar']);

        $subrace           = new SubRace;
        $subrace->name     = 'Shield Dwarf';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'the North';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +1</dd>
    <dt>Dwarven Combat Training</dt> <dd>you have proficiency with the Battleaxe, Handaxe, Light Hammer, and Warhammer</dd>
    <dt>Stonecunning</dt> <dd>Whenever you make an INT (History) check related to the origin of stonework, you are considered proficient in the History skill and add double proficiency bonus to the check, instead of your normal proficiency bonus</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Dwarf', 'Duergar']);

        $subrace           = new SubRace;
        $subrace->name     = 'Gray Dwarf (Duergar)';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Underdark';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +1</dd>
    <dt>Superior Darkvision</dt> <dd>Your Darkvision has a range of 120 feet</dd>
    <dt>Stonecunning</dt> <dd>Whenever you make an INT (History) check related to the origin of stonework, you are considered proficient in the History skill and add double proficiency bonus to the check, instead of your normal proficiency bonus</dd>
    <dt>Psionics</dt> <dd>You gain the Wild Talent feat</dd>
    <dt>Sunlight Sensitivity</dt> <dd>You have Disadvantage on attack rolls and on WIS (Perception) checks that rely on sight when you, the target of your attack, or whatever you are trying to perceive is in direct sunlight.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Dwarf', 'Duergar']);
    }
}
