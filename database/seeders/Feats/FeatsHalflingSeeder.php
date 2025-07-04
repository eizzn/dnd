<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsHalflingSeeder extends Seeder
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
        $feat->name        = 'Lucky';
        $feat->trigger     = 'You fail a skill check or Save';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You can reroll the triggering check or Save and take the better of the two results. You can use this ability 3 times per Long Rest.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Fortune', 'Halfling' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Nimble Escape';
        $feat->description = '<ul>
    <li>Increase your DEX by 1, to a maximum of 20</li>
    <li>You gain an extra Action. This extra Action can only be used to take the Disengage or Hide Action.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Move', 'Halfling' => 1]);
    }
}
