<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsGuardinalsSeeder extends Seeder
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

        $talsid        = new God;
        $talsid->name  = 'Talsid';
        $talsid->level = 'Guardinal';
        $talsid->save();
        $talsid->pantheons()->save(app()->pantheons['Talsid and the Five Companions'], [
            'name'      => $talsid->name,
            'title'     => 'The Celestial Lion, Leader of the Companions',
            'level'     => 'Guardinal Paragon',
            'alignment' => 'NG',
        ]);

        $god        = new God;
        $god->name  = 'Sathia';
        $god->level = 'Guardinal';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Talsid and the Five Companions'], [
            'name'      => $god->name,
            'title'     => 'The Sky Duchess',
            'level'     => 'Guardinal Paragon',
            'portfolio' => 'Representative of the avorals and patron of sculptors and painters',
            'alignment' => 'NG',
            'master_id' => $talsid->id,
        ]);

        $god        = new God;
        $god->name  = 'Manath';
        $god->level = 'Guardinal';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Talsid and the Five Companions'], [
            'name'      => $god->name,
            'title'     => 'The Horned Duke',
            'level'     => 'Guardinal Paragon',
            'alignment' => 'NG',
            'portfolio' => 'Representative of the cervidals',
            'master_id' => $talsid->id,
        ]);

        $god        = new God;
        $god->name  = 'Vhara';
        $god->level = 'Guardinal';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Talsid and the Five Companions'], [
            'name'      => $god->name,
            'title'     => 'Duchess of the Fields',
            'level'     => 'Guardinal Paragon',
            'alignment' => 'NG',
            'portfolio' => 'Representative of the equinals',
            'master_id' => $talsid->id,
        ]);

        $god        = new God;
        $god->name  = 'Kharash';
        $god->level = 'Guardinal';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Talsid and the Five Companions'], [
            'name'      => $god->name,
            'title'     => 'The Stalker',
            'level'     => 'Guardinal Paragon',
            'alignment' => 'NG',
            'portfolio' => 'Representative of the lupinals',
            'master_id' => $talsid->id,
        ]);

        $god        = new God;
        $god->name  = 'Bharrai';
        $god->level = 'Guardinal';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Talsid and the Five Companions'], [
            'name'      => $god->name,
            'title'     => 'The Great Bear, Teacher of Magic',
            'level'     => 'Guardinal Paragon',
            'alignment' => 'NG',
            'portfolio' => 'Representative of the ursinals',
            'master_id' => $talsid->id,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to the Five Companions';
        $feat->requirement = 'You must be NG';
        $feat->description = '<p>You have made a Pact with one of the Five Guardinals of Elysium</p>
<ul>
    <li>You gain the Animal Companion Class Feature, as if you were a Ranger</li>
    <li>You may now take Exalted feats as Generic feats</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Guardinal', 'Neutral', 'Good']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Conviction', 'Eldritch Blast', 'Light'],
            1 => ['Animal Friendship', 'Detect Evil', 'Summon Animals'],
            2 => ["Bull's Strength", "Cat's Grace", 'Speak with Animals'],
            3 => ['Call Animal'],
            4 => ['Dispel Evil', 'Perfection'],
            5 => ['Call Guardinal Servants'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Roar of Talsid';
        $feat->description = "<p>You devote yourself to the Guardinal Talsid</p>
<ul>
    <li>Increase your CHA by +1, to a maximum of 20</li>
    <li>When you cast the spell Bull's Strength or Perfection on yourself, the STR bonus is an additional +2</li>
    <li>Casting the Spell Sonic Burst only requires a Verbal Casting</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Pact', 'Guardinal', 'Neutral', 'Good']);
        $feat->parent_feats()->save(app()->feats['Pact to the Five Companions']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Animal Form' => 'Lion only'],
            2 => ['Sonic Burst'],
            3 => ['Shockwave'],
            5 => ['Great Shout'],
            6 => ["Lion's Roar"],
            7 => ['Celestial Roar'],
            8 => ['Fierce Pride of the Beastlands'],
            9 => ["Nature's Enmity"],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Wind of Sathia';
        $feat->description = '<p>You devote yourself to the Guardinal Sathia</p>
<ul>
    <li>Increase your DEX by +1, to a maximum of 20</li>
    <li>You gain a +1 bonus to Hit to all Ranged Attacks</li>
    <li>You gain a +1 bonus to AC against all Ranged Weapon Attacks</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Guardinal', 'Neutral', 'Good']);
        $feat->parent_feats()->save(app()->feats['Pact to the Five Companions']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Animal Form' => 'Bird only', 'Gust of Wind'],
            3 => ['Angelic Wings'],
            6 => ['Investiture of Wind'],
            7 => ['Whirlwind'],
            8 => ['Ride the Lightning'],
            9 => ['Storm of Vengeance'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Arcane of Bharrai';
        $feat->description = '<p>You devote yourself to the Guardinal Bharrai</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>You gain a Meta Magic or Item Creation Feat</li>
    <li>You gain a +1 bonus to all Saves vs Magic</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Guardinal', 'Neutral', 'Good']);
        $feat->parent_feats()->save(app()->feats['Pact to the Five Companions']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Magic Weapon', 'Detect Magic'],
            1 => ['Magic Missile'],
            3 => ['Dispel Magic'],
            6 => ['Antimagic Ray'],
            7 => ['Spell Turning'],
            8 => ['Antimagic Field'],
            9 => ['Disjunction'],
        ]);
        // TODO: create more Pact feats for the specific companions
    }
}
