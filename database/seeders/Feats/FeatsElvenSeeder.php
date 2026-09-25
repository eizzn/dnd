<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsElvenSeeder extends Seeder
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
        $feat->name        = 'Ancestral Longevity';
        $feat->description = "<p>You have accumulated a vast array of lived knowledge over the years. During your daily preparations, you can reflect upon your life experience to gain a +4 bonus in one skill of your choice that you have less than 4 ranks in. This proficiency lasts until you prepare again. Since this proficiency is temporary, you can't use it as a prerequisite for a skill increase or a permanent character option like a feat.</p>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Elf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Drow Magic';
        $feat->description = '
<ul>
    <li>Increase your DEX, INT, or WIS by 1, up to a maximum of 20.</li>
    <li>You can cast Dancing Lights as a Cantrip 2 times per Long Rest. The spell is Heightened to a Spell Level equal to half your Character Level rounded up</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Ancestry', 'Drow' => 1]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Dancing Lights'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Elven Lore';
        $feat->description = "<p>You've studied in traditional elven arts, learning about arcane magic and the world around you.</p>
<ul>
    <li>Increase your INT by 1, to a maximum of 20.</li>
    <li>You gain a +2 bonus to Arcana and Nature checks</li>
    <li>You gain a +4 bonus to Lore checks that are related to Elves</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Ability Boost', 'Elf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Elven Weapons';
        $feat->description = '<p>You favor bows and other elegant weapons. You are trained with the following weapons</p>
<ul>
    <li>Longbow</li>
    <li>Composite Longbows</li>
    <li>Long Sword</li>
    <li>Rapier</li>
    <li>Shortbow</li>
    <li>Composite Shortbow</li>
</ul>
<p>If you already have proficiency with any of these weapons through Elf Weapon Training, then you gain a +1 bonus to Hit with those weapons that are on this list.</p>
<p>In addition, you gain access to all uncommon elf weapons. For the purpose of determining your proficiency, martial elf weapons are simple weapons and advanced elf weapons are martial weapons.</p>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Elf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Forlorn';
        $feat->description = '<p>Watching your friends age and die fills you with moroseness that protects you against harmful emotions.</p>
<ul>
    <li>You gain a Heroic Surge</li>
    <li>You gain a +1 circumstance bonus to Saves against emotion effects. If you roll a success on a Save against an emotion effect, you get a critical success instead.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Heroic Surge', 'Elf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Nimble Elf';
        $feat->description = '<p>Your muscles are tightly honed.</p>
<ul>
    <li>Increase your DEX by +1, to a maximum of 20.</li>
    <li>Your Speed increases by 5 feet</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Ability Boost', 'Elf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Otherworldly Magic';
        $feat->description = "<p>Your elven magic manifests as a simple arcane spell, even if you aren't formally trained in magic.</p>
<ul>
    <li>Choose one cantrip from the Wizard spell list. You can cast this cantrip as an arcane innate spell at will. This cantrip is Heightened to a spell level equal to half your level rounded up.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Elf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Improved Drow Magic';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>Increase your DEX, INT, or WIS by 1, up to a maximum of 20.</li>
    <li>You can cast Faerie Fire as a 1st level spell once per Long Rest.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Ancestry', 'Drow' => 3]);
        $feat->parent_feats()->save(app()->feats['Drow Magic']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Faerie Fire' => '1/day'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ageless Patience';
        $feat->description = "<p>You work at a pace born from longevity that enhances your thoroughness. You can voluntarily spend twice as much time as normal on a Perception check or skill check to gain a +2 circumstance bonus to that check. You also don't treat a natural 3 as worse than usual on these checks; you get a critical failure  only if your result is 10 lower than the DC.</p>
<blockquote>
    For Example: you could get these benefits if you spend 2 Actions to Seek, which normally takes 1 Action. You can get these benefits during exploration by taking twice as long exploring as normal, or in downtime by spending twice as much downtime.
</blockquote>
<p>The GM might determine a situation doesn't grant you a benefit if a delay would be directly counterproductive to your success, such as a tense negotiation with an impatient creature.</p>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Elf' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Greater Drow Magic';
        $feat->description = '<p>You gain the following:</p>
<ul>
    <li>You can cast Darkness as a 2nd level spell once per Long Rest.</li>
    <li>You can cast Levitate as a 2nd level spell once per Long Rest.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Drow' => 5]);
        $feat->parent_feats()->save(app()->feats['Improved Drow Magic']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Darkness' => '1/day', 'Levitate' => '1/day'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Elven Weapons';
        $feat->description = "<p>You are attuned to the weapons of your elven ancestors and are particularly deadly when using them.</p>
<ul>
    <li>You gain a Talent</li>
    <li>Whenever you critically hit using an elf weapon or one of the weapons listed in the Elven Weapons feat, you apply the weapon's critical specialization effect.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Talent', 'Elf' => 5]);
        $feat->parent_feats()->save(app()->feats['Elven Weapons']);

        $feat              = new Feat;
        $feat->name        = 'Improved Ancestral Longevity';
        $feat->description = "<p>You've learned to refine the knowledge and skills you're gained through your life. When you choose a skill for Ancestral Longevity, you gain a +8 bonus instead.</p>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Elf' => 9]);

        $feat              = new Feat;
        $feat->name        = 'Improved Nimble Elf';
        $feat->description = '<p>You move in a graceful dance, and even your steps are broad.</p>
<p>As a Free Action, you may move 5 feet. This movement does not Provoke Attacks of Opportunity. You may do this only once per round.</p>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Elf' => 9]);
        $feat->parent_feats()->save(app()->feats['Nimble Elf']);
    }
}
