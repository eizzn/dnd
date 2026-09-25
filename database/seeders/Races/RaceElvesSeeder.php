<?php

namespace Database\Seeders\Races;

use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Database\Seeder;

class RaceElvesSeeder extends Seeder
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
        $race->name        = 'Elf';
        $race->age         = 'Although elves reach physical maturity at about the same age as humans, the elven understanding of adulthood goes beyond physical growth to encompass worldly experience. An elf typically claims adulthood and an adult name around the age of 100 and can live to be 750 years old';
        $race->hit_points  = 6;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '<p>Elves are a magical people of otherworldly grace, living in the world but not entirely part of it. They live in places of ethereal beauty, in the midst of ancient forests or in silvery spires glittering with faerie light, where soft music drifts through the air and gentle fragrances waft on the breeze. Elves love nature and magic, art and artistry, music and poetry, and the good things of the world.</p>
<h2>Slender and Graceful</h2>
<p>With their unearthly grace and fine features, elves appear hauntingly beautiful to humans and members of many other races. They are slightly shorter than humans on average, ranging from well under 5 feet tall to just over 6 feet. They are more slender than humans, weighing only 100 to 145 pounds. Males and females are about the same height, and males are only marginally heavier than females.</p>
<p>Elves’ coloration encompasses the normal human range and also includes skin in shades of copper, bronze, and almost bluish-white, hair of green or blue, and eyes like pools of liquid gold or silver. Elves have no facial and little body hair. They favor elegant clothing in bright colors, and they enjoy simple yet lovely jewelry.</p>
<h2>A timeless perspective</h2>
<p>Elves can live well over 700 years, giving them a broad perspective on events that might trouble the shorter-lived races more deeply. They are more often amused than excited, and more likely to be curious than greedy. They tend to remain aloof and unfazed by petty happenstance. When pursuing a goal, however, whether adventuring on a mission or learning a new skill or art, elves can be focused and relentless. They are slow to make friends and enemies, and even slower to forget them. They reply to petty insults with disdain and to serious insults with vengeance.</p>
<p>Like the branches of a young tree, elves are flexible in the face of danger. They trust in diplomacy and compromise to resolve differences before they escalate to violence. They have been known to retreat from intrusions into their woodland homes, confident that they can simply wait the invaders out. But when the need arises, elves reveal a stern martial side, demonstrating skill with sword, bow, and strategy.</p>
<h2>Hidden Woodland Realms</h2>
<p>Most elves dwell in small forest villages hidden among the trees. Elves hunt game, gather food, and grow vegetables, and their skill and magic allow them to support themselves without the need for clearing and plowing land. They are talented artisans, crafting finely worked clothes and art objects. Their contact with outsiders is usually limited, though a few elves make a good living by trading crafted items for metals (which they have no interest in mining).</p>
<p>Elves encountered outside their own lands are commonly traveling minstrels, artists, or sages. Human nobles compete for the services of elf instructors to teach swordplay or magic to their children.</p>';
        $race->benefits = "<dl>
    <dt>Darkvision</dt> <dd>Accustomed to twilight forests and the night sky, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.</dd>
    <dt>Keen Senses</dt> <dd>You gain a +2 Racial bonus to Perception checks</dd>
    <dt>Fey Ancestry</dt> <dd>You gain a +4 bonus to Saves against being Charmed, and magic can’t put you to sleep.</dd>
    <dt>Trance</dt> <dd>Elves don't need to sleep. Instead, they meditate deeply, remaining semiconscious, for 4 hours a day. (The Common word for such meditation is “trance.”) While meditating, you can dream after a fashion; such dreams are actually mental exercises that have become reflexive through years of practice. After resting in this way, you gain the same benefit that a human does from 8 hours of sleep.</dd>
</dl>";
        $helper->addTypesToSimpleObject($race, ['Elf']);

        $subrace              = new SubRace;
        $subrace->name        = 'High Elf (Sun)';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>The sun elves of Faerun (also called gold elves or sunrise elves) have bronze skin and hair of copper, black, or golden blond. Their eyes are golden, silver, or black. Moon elves (also called silver elves or gray elves) are much paler, with alabaster skin sometimes tinged with blue. They often have hair of silver-white, black, or blue, but various shades of blond, brown, and red are not uncommon. Their eyes are blue or green and flecked with gold.</p>';
        $subrace->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your INT score increases by +1</dd>
    <dt>Elf Weapon Training</dt> <dd>You have proficiency with Longsword, Shortsword, Shortbow, and Longbow.</dd>
    <dt>Cantrip</dt> <dd>You know one cantrip of your choice from the wizard spell list. Intelligence is your spellcasting ability for it.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Elf']);

        $subrace              = new SubRace;
        $subrace->name        = 'Moon Elf';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Often mistaken for drow by the uninformed, moon elves are the secretive subrace of elvenkind that dwell deep within the forests, hidden out of sight from all but the most perceptive and brave explorers. Moon elves live in carefully hidden villages, usually in deeply shaded parts of the forest, though their temples and other religious sights typically are built in clearings where they can be bathed in the open moonlight.</p>
<p>Moon elves have more purple skin than their other kin, ranging from light lavender to dark violet, though light shades of blue are not uncommon Their hair typically ranges from a multitude of strange colors, with the most common being aqua, white, green and dark blue.
As part of their culture, moon elves often tattoo their face with simple patterns, and pierce their ears with intricate silver jewelry.</p>
<p>Moon elves, like their drow cousins, typically live in a matriarchal society, with women commonly serving as soldiers, while men typically take up druidcraft, and serve as spiritual leaders.</p>';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>You DEX score increases by +1</dd>
    <dt>Elf Weapon Training</dt> <dd>You have proficiency with Longsword, Shortsword, Shortbow, and Longbow.</dd>
    <dt>Bathed in Moonlight</dt> <dd>You gain a +2 bonus to Stealth checks</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Elf']);

        $subrace              = new SubRace;
        $subrace->name        = 'Wood Elf';
        $subrace->race_id     = $race->id;
        $subrace->description = "<p>As a wood elf, you have keen senses and intuition, and your fleet feet carry you quickly and stealthily through your native forests. In Faerûn, wood elves (also called wild elves, green elves, or forest elves) are reclusive and distrusting of non-elves.</p>
<p>Wood elves' skin tends to be copper-ish in hue, sometimes with traces of green. Their hair tends toward browns and blacks, but it is occasionally blond or copper-colored. Their eyes are green, brown, or hazel.</p>";
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>You WIS score increases by +1</dd>
    <dt>Elf Weapon Training</dt> <dd>You have proficiency with Longsword, Shortsword, Shortbow, and Longbow.</dd>
    <dt>Fleet of Foot</dt> <dd>Your base walking speed increases to 35 feet.</dd>
    <dt>Mask of the Wild</dt> <dd>You can attempt to hide even when you are only lightly obscured by foliage, heavy rain, falling snow, mist, and other natural phenomena.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Elf']);

        $subrace              = new SubRace;
        $subrace->name        = 'Star Elf';
        $subrace->race_id     = $race->id;
        $subrace->regions     = 'Yuirwood/Aglarond';
        $subrace->description = "<p>The green depths of the Yuirwood hide an ancient secret long forgotten by folk beyond Aglarond's borders, and not widely known even within - the star elves, an elven subrace that retreated from Faerun to an extraplanar refuge known as Sildeyuir. Sometimes referred to in ancient texts as mithral elves, the star elves concealed the existence of their hidden kingdom for almost two thousand years, leaving behind nothing but mysterious ruins and old, strong magic in the stone circles of the Yuirwood.</p>
<p>While the star elves have kept themselves apart from the rest of Faerun for many centuries, their isolation is coming to an end. Besieged by an insidious peril from beyond the circles of the world, they face the possibility of being driven from Sildeyuir back to their ancient abode in the Yuirwood.</p>";
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>You CHA score increase by +1</dd>
    <dt>Otherworldly Touch</dt> <dd>Between sunset and sunrise a star elf confers the Ghost Touch ability to any melee weapon they wield and any armor they wear.</dd>
    <dt>Extraplanar</dt> <dd>Star elves are not outsiders, but they are not native to Faerun. Spells and effects that target extraplanar creatures affect star elves. Banishment, dismissal, and similar effects that banish outsiders return a star elf to Sildeyuir.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Elf']);

        $subrace              = new SubRace;
        $subrace->name        = 'Drow';
        $subrace->race_id     = $race->id;
        $subrace->regions     = 'Underdark';
        $subrace->description = '<p></p>';
        $subrace->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>You DEX score increases by +1</dd>
    <dt>Darkvision</dt> <dd>Accustomed to twilit forests and the night sky, you have superior vision in dark and dim conditions. You can see in dim light within 120 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.</dd>
    <dt>Elf Weapon Training</dt> <dd>You have proficiency with Hand Crossbows.</dd>
    <dt>Magic</dt> <dd>You know the Dancing Lights cantrip. Use INT as you spellcasting ability.</dd>
    <dt>Sunlight Sensitivity</dt> <dd>You have Disadvantage on attack rolls and on WIS (Perception) checks that rely on sight when you, the target of your attack, or whatever you are trying to perceive is in direct sunlight.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Elf', 'Drow']);
    }
}
