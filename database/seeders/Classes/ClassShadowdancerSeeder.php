<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassShadowdancerSeeder extends Seeder
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
        $feat->name        = 'Shadow Dancer';
        $feat->requirement = 'Mask must be your patron deity';
        $feat->description = '<p>Operating in the border between light and darkness, shadowdancers are nimble artists of deception. They are mysterious and unknown, never completely trusted but always inducing wonder when met.</p>
<p>Shadowdancers often work in troupes, never staying in one place too long. Some use their abilities to entertain. Others operate as thieves, using their abilities to infiltrate past defenses and dupe others. All shadowdancer troupes maintain an aura of mystery among the populace, who never know whether to think well of ill of them.</p>
<p>You gain the following</p>
<ul>
    <li>You gain the Evasion feat. If you already have the Evasion feat, then you gain the Improved Evasion feat instead.</li>
    <li>You gain Darkvision if you do not already have it.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Shadow', 'Darkness']);
        $feat->skills()->save(app()['skills']['Stealth'], ['dc' => 8]);
        $feat->skills()->save(app()['skills']['Performance'], ['dc' => 5]);
        $feat->parent_feats()->save(app()['feats']['Dodge']);
        $feat->parent_feats()->save(app()['feats']['Extend Spell Pool']);

        // add Shadow Dancer Feat to Rogue
        $rogue = Klass::where('name', 'Rogue')->firstOrFail();
        $helper->addFeatsToClass($rogue, [
            'Shadow Dancer'              => 7,
        ]);

        $trickster = Klass::where('name', 'Arcane Trickster')->firstOrFail();
        $helper->addFeatsToClass($trickster, [
            'Shadow Dancer' => 2,
        ]);

        $spellThief = Klass::where('name', 'Spellthief')->firstOrFail();
        $helper->addFeatsToClass($spellThief, [
            'Shadow Dancer' => 7,
        ]);
    }
}
