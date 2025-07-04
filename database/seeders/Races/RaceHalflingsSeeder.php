<?php

namespace Database\Seeders\Races;

use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Database\Seeder;

class RaceHalflingsSeeder extends Seeder
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
        $race->name        = 'Halfling';
        $race->age         = 'A halfling reaches adulthood at the age of 20 and generally lives into the middle of his or her second century.';
        $race->hit_points  = 6;
        $race->size        = 'Small';
        $race->speed       = 25;
        $race->description = '<p>The comforts of home are the goals of most halflings’ lives: a place to settle in peace and quiet, far from marauding monsters and clashing armies; a blazing fire and a generous meal; fine drink and fine conversation. Though some halflings live out their days in remote agricultural communities, others form nomadic bands that travel constantly, lured by the open road and the wide horizon to discover the wonders of new lands and peoples. But even these wanderers love peace, food, hearth, and home, though home might be a wagon jostling along a dirt road or a raft floating downriver.</p>
<h2>Small and Practical</h2>
<p>The diminutive halflings survive in a world full of larger creatures by avoiding notice or, barring that, avoiding offense. Standing about 3 feet tall, they appear relatively harmless and so have managed to survive for centuries in the shadow of empires and on the edges of wars and political strife. They are inclined to be stout, weighing between 40 and 45 pounds.</p>
<p>Halflings’ skin ranges from tan to pale with a ruddy cast, and their hair is usually brown or sandy brown and wavy. They have brown or hazel eyes. Halfling men often sport long sideburns, but beards are rare among them and mustaches even more so. They like to wear simple, comfortable, and practical clothes, favoring bright colors.</p>
<p>Halfling practicality extends beyond their clothing. They’re concerned with basic needs and simple pleasures and have little use for ostentation. Even the wealthiest of halflings keep their treasures locked in a cellar rather than on display for all to see. They have a knack for finding the most straightforward solution to a problem, and have little patience for dithering.</p>
<h2>Kind and Curious</h2>
<p>Halflings are an affable and cheerful people. They cherish the bonds of family and friendship as well as the comforts of hearth and home, harboring few dreams of gold or glory. Even adventurers among them usually venture into the world for reasons of community, friendship, wanderlust, or curiosity. They love discovering new things, even simple things, such as an exotic food or an unfamiliar style of clothing.</p>
<p>Halflings are easily moved to pity and hate to see any living thing suffer. They are generous, happily sharing what they have even in lean times.</p>
<h2>Blend into the Crowd</h2>
<p>Halflings are adept at fitting into a community of humans, dwarves, or elves, making themselves valuable and welcome. The combination of their inherent stealth and their unassuming nature helps halflings to avoid unwanted attention.</p>
<p>Halflings work readily with others, and they are loyal to their friends, whether halfling or otherwise. They can display remarkable ferocity when their friends, families, or communities are threatened.</p>
<h2>Pastoral Pleasantries</h2>
<p>Most halflings live in small, peaceful communities with large farms and well-kept groves. They rarely build kingdoms of their own or even hold much land beyond their quiet shires. They typically don’t recognize any sort of halfling nobility or royalty, instead looking to family elders to guide them. Families preserve their traditional ways despite the rise and fall of empires.</p>
<p>Many halflings live among other races, where the halflings’ hard work and loyal outlook offer them abundant rewards and creature comforts. Some halfling communities travel as a way of life, driving wagons or guiding boats from place to place and maintaining no permanent home.</p>
<h2>Size</h2>
<p>Halflings average about 3 feet tall and weigh about 40 poinds.</p>';
        $race->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your DEX score increases by +2</dd>
    <dt>Lucky</dt> <dd>You gain the Lucky feat</dd>
    <dt>Brave</dt> <dd>You gain a +2 bonus on Saves against being Frightened</dd>
    <dt>Nimbleness</dt> <dd>You can move through the space of any creature that is of a size larger than yours.</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Halfling']);

        $subrace           = new SubRace;
        $subrace->name     = 'Lightfoot Halfling';
        $subrace->race_id  = $race->id;
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CHA score increases by +1</dd>
    <dt>Naturally Stealthy</dt> <dd>You can attempt to hide even when you are obscured only by a creature that is at least one size larger than you.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Halfling']);

        $subrace           = new SubRace;
        $subrace->name     = 'Stout Halfling';
        $subrace->race_id  = $race->id;
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CON score increases by +1</dd>
    <dt>Stout Resilience</dt> <dd>You gaina +4 bonus on Saves vs Poison. You have Damage Reduction 2 vs Poison.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Halfling']);
    }
}
