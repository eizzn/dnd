<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsSlaadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $god = God::where('name', 'Kossuth')->first();
        $god->pantheons()->save(app()->pantheons['Slaad Lord'], [
            'name'      => 'Bazim-Gorag',
            'title'     => 'The Firebringer, Lord of the Pandemonium Stone',
            'level'     => 'Slaad Lord',
            'alignment' => 'CN',
        ]);

        $god        = new God;
        $god->name  = 'Chourst';
        $god->level = 'Slaad Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Slaad Lord'], [
            'name'      => $god->name,
            'aliases'   => 'Wartle',
            'title'     => 'Lord of Randomness',
            'level'     => 'Slaad Lord',
            'alignment' => 'CN',
        ]);

        $god = God::where('name', 'Hyrsam')->first();
        $god->pantheons()->save(app()->pantheons['Slaad Lord'], [
            'name'      => 'Rennbuu',
            'title'     => 'Lord of Colors',
            'level'     => 'Slaad Lord',
            'alignment' => 'CN',
        ]);

        $god        = new God;
        $god->name  = 'Ssendam';
        $god->level = 'Slaad Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Slaad Lord'], [
            'name'      => $god->name,
            'title'     => 'Lord of Madness',
            'level'     => 'Slaad Lord',
            'alignment' => 'CN',
        ]);

        $god        = new God;
        $god->name  = 'Urae-Naas';
        $god->level = 'Slaad Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Slaad Lord'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Slaad Lord',
            'alignment' => 'CN',
        ]);

        $god        = new God;
        $god->name  = 'Ygorl';
        $god->level = 'Slaad Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Slaad Lord'], [
            'name'      => $god->name,
            'title'     => 'Lord of Entropy',
            'level'     => 'Slaad Lord',
            'alignment' => 'CN',
        ]);

        $god        = new God;
        $god->name  = 'Norsar the Many';
        $god->level = 'Slaad';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Slaad Lord'], [
            'name'      => $god->name,
            'title'     => 'White Slaad',
            'level'     => 'Slaad',
            'alignment' => 'CE',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Slaad';
        $feat->requirement = 'You must be CN and you cannot have levels in monk';
        $feat->description = '<p>You have made a Pact with one of the Slaad Lords.</p>
<p>You gain the following benefits.</p>
<ul>
    <li>You gain 2 Power Points</li>
    <li>You are immune to Chaos Phage and you cannot be inflicted with a Slaad Tadpole</li>
    <li>You learn the Slaad Language</li>
    <li>You gain one of the following feats
        <ul>
            <li>Strong Defense</li>
            <li>Tough Defense</li>
            <li>Uncanny Defense</li>
        </ul>
    </li>
    <li>You gain the Wild Talent feat</li>
    <li>Slaads will not attack you unless you attack them, or they realize that you have deceived them somehow.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Slaad', 'Chaotic', 'Neutral']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Daze', 'Detect Law', 'Dragon Claws' => 'This spell creates claws like the Red Slaad', 'Minor Illusion'],
            1 => ['Contagion' => 'If this spell is Heightened +5, you may inflict Chaos Phage with your Dragon Claws',
                'Fear', 'Jump', 'Protection From Law', ],
            2 => ['Bestow Curse', "Bull's Strength", "Cat's Grace", 'Haste', 'Touch of Madness'],
            3 => ['Amorphous Form' => 'Self only. Material Component not needed but the Action to cast is', 'Circle of Protection From Law',
                'Confusion', 'Hammer of Chaos'],
            4 => ['Crushing Despair', 'Polymorph Self'],
            5 => ['Cloak of Chaos', 'Dispel Law'],
            6 => ['Baleful Polymorph', 'Slaad Form'],
            7 => ['Word of Balance', 'Word of Chaos'],
            8 => ['Chain Chaos', 'Power Word Stun'],
            9 => ['Shapechange'],
        ]);
    }
}
