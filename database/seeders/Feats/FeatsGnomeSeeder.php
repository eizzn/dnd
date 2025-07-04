<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsGnomeSeeder extends Seeder
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

        $feat              = new Feat;
        $feat->name        = 'Animal Accomplice';
        $feat->description = '<p>A rapport develops between you and an animal, which becomes magically bonded to you.</p>
<ul>
    <li>You gain the Find Familiar Feat. The type of animal is up to you, but most gnomes choose animals with a burrow Speed.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Gnome' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Animal Whisperer';
        $feat->description = '<p>You gain the following:</p>
<ul>
    <li>You can cast Animal Friendship as a Cantrip at will.</li>
    <li>You can cast Speak with Animals as a 1st level spell 2 times per Long Rest.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Gnome' => 1]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Animal Friendship'],
            1 => ['Speak with Animals'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Gnome Magic';
        $feat->description = '<p>You gain the following:</p>
<ul>
    <li>You can cast Minor Illusion as a 1st level spell 2 times per Long Rest.</li>
    <li>You gain a +2 Save bonus vs all Illusion spells.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Gnome' => 1]);
        $helper->addSpellsToFeat($feat, [
            1 => ['Minor Illusion'],
        ]);
    }
}
