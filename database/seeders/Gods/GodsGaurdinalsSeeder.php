<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsGaurdinalsSeeder extends Seeder
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
            'master_id' => $talsid->id,
        ]);

        $god        = new God;
        $god->name  = 'Bharrai';
        $god->level = 'Guardinal';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Talsid and the Five Companions'], [
            'name'      => $god->name,
            'title'     => 'The Great Bear',
            'level'     => 'Guardinal Paragon',
            'alignment' => 'NG',
            'master_id' => $talsid->id,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to the Five Companions';
        $feat->requirement = 'You must be NG';
        $feat->description = '<p>YOu have made a Pact with one of the Five Guardinals of Elysium</p>
<ul>
    <li>You gain the Animal Companion Class Feature, as if you were a Ranger</li>
    <li>You may now take Exalted feats as Generic feats</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Guardinal', 'Neutral', 'Good']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Conviction', 'Eldritch Blast', 'Light'],
            1 => ['Animal Friendship', 'Detect Evil', 'Protection From Evil', 'Summon Animals'],
            2 => ["Bull's Strength", "Cat's Grace", 'Scent', 'Speak with Animals', 'Undead Bane Weapon'],
            3 => ['Call Animal', 'Circle of Protection From Evil'],
            4 => ['Dispel Evil', 'Perfection'],
            5 => ['Call Guardinal Servants', 'Commune with Nature'],
            // TODO: complete this spell list
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
        ]);

        // TODO: create more Pact feats for the specific companions
    }
}
