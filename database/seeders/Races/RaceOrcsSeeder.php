<?php

namespace Database\Seeders\Races;

use App\Models\Alphabet;
use App\Models\Language;
use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Database\Seeder;

class RaceOrcsSeeder extends Seeder
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
        $race->name        = 'Orc';
        $race->age         = 'Orcs are considered adults at 11 to 14 years. They typically live for about 50 years';
        $race->hit_points  = 10;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '<p>Savage and fearless, orc tribes are ever in search of elves, dwarves, and humans to destroy. Motivated by their hatred of the civilized races of the world and their need to satisfy the demands of their deities, the orcs know that if they fight well and brings glory to their tribe, Gruumsh will call them home.</p>
<h2>Age</h2>
<p>Orcs reach adulthood at age 12 and live up to 50 years.</p>
<h2>Size</h2>
<p>Orcs are usually over 6 feet tall and weigh between 230 and 280 pounds.</p>';
        $race->benefits = "<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +2.</dd>
    <dt>Aggressive</dt> <dd>You gain an additional Action. This additional Action can only be taken to move towards an enemy of your choice that you can see or hear. You cannot take use this Action if the move does not bring you within melee range of the target.</dd>
    <dt>Darkvision</dt> <dd>You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</dd>
</dl>";
        $helper->addTypesToSimpleObject($race, ['Orc', 'Extra Action']);

        $subrace           = new SubRace;
        $subrace->name     = 'Mountain Orc';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'The North';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CON score increases by +1</dd>
    <dt>Primal Intuition</dt> <dd>
        You have proficiency in two of the following skills of your choice.
        <ul>
            <li>Animal Handling</li>
            <li>Insight</li>
            <li>Intimidation</li>
            <li>Medicine</li>
            <li>Nature</li>
            <li>Survival</li>
        </ul>
    </dd>
    <dt>Powerful Build</dt> <dd>You count as one size larger when determining your carrying capacity and the weight you can push, drag, or lift.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Orc']);

        $subrace           = new SubRace;
        $subrace->name     = 'Gray Orc';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Eastern Faerun';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your WIS score increases by +1</dd>
    <dt>Orcish Combat Training</dt> <dd>you have proficiency with the Battleaxe, Handaxe, Bastard Sword, and Short Bow</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Orc']);

        $subrace              = new SubRace;
        $subrace->name        = 'Orog';
        $subrace->race_id     = $race->id;
        $subrace->regions     = 'Underdark';
        $subrace->description = '<p>The result of a male orc and a female ogre</p>';
        $subrace->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CON score increases by +2</dd>
    <dt>Superior Darkvision</dt> <dd>Your Darkvision has a range of 120 feet</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Orc']);

        $subrace              = new SubRace;
        $subrace->name        = 'Ogrillon';
        $subrace->race_id     = $race->id;
        $subrace->regions     = 'The North';
        $subrace->description = '<p>The result of a female orc and a male ogre. Ogrillons are all sterile</p>';
        $subrace->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>You CON score increases by +2 and your STR score increases by an additional +2</dd>
    <dt>Ability Score Decrease</dt> <dd>You CHA and INT scores decreases by -2</dd>
    <dt>Racial Quality</dt> <dd>You count as a Giant</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Orc', 'Giant']);

        $dethek = Alphabet::where('name', 'Dethek')->first();

        $lang              = new Language;
        $lang->name        = 'Daraktan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Orcish';
        $lang->speakers    = 'Orcs';
        $lang->description = '<p>Also known as Orcish, it is the modern language spoken by orcs.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Hulgorkyn';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Orcish';
        $lang->speakers    = 'Orcs';
        $lang->description = '<p>The archaic and mostly forgotten language spoken by orcs.</p>';
        $lang->save();
    }
}
