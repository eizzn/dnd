<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsDwarvenSeeder extends Seeder
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
        $feat->name        = 'Dwarven Ancestral Foes';
        $feat->description = '<p>You have shaped your hatred of ancestral dwarven foes into a powerful weapon. Choose two of the following creature traits.</p>
<ul>
    <li>Drow</li>
    <li>Duergar</li>
    <li>Giant</li>
    <li>Orc</li>
</ul>
<p>You gain a +2 circumstance bonus to Hit and Damage rolls against creatures with one of the chosen traits for each Die of damage. In addition, if a creature critically succeeds at an attack against you and deals damage to you, you gain your bonus to damage against that creature for 1 minute regardless of whether it has the chosen trait.</p>
<p><strong>Special</strong> Your GM can add appropriate creature traits to this list if your character is from a community that commonly fights other types of enemies.</p>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Dwarf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Dwarven Craftsman';
        $feat->description = '<p>You trained as a smith at a dwarven forge.</p>
<ul>
    <li>You gain a +4 bonus to a specific Craft skill (ex. Blacksmithing, Gemcutting, etc)</li>
    <li>You have the ability to create one magic item (even if you do not have any spell casting ability or an Item Creation feat). The required spells are supplied by your gods but you must meet the level requirement. As you gain in level, you may augment your magic item.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Dwarf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Dwarven Lore';
        $feat->description = '<p>You eagerly absorbed the old stories and traditions of your ancestors, your gods, and the dwarven people, studying in subjects and techniques passed down for generation upon generation.</p>
<ul>
    <li>Increase your INT by 1, to a maximum of 20.</li>
    <li>You gain a +2 bonus to Crafting and Religion checks</li>
    <li>You gain a +4 bonus on Lore checks that are related to Dwarves</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Ability Boost', 'Dwarf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Dwarven Stonecunning';
        $feat->description = "<p>You have a knack for noticing even small inconsistencies and craftsmanship techniques in the stonework around you.</p>
<ul>
    <li>Increase your WIS by 1, to a maximum of 20</li>
    <li>You gain a +2 circumstance bonus to Perception checks to notice unusual stonework. This bonus applies to check to discover mechanical traps made of stone or hidden within stone.</li>
</ul>
<p>If you aren't using the Seek action or searching. The GM automatically rolls a secret check for you to notice unusual stonework anyway. This checks doesn't gain the circumstance bonus, and it takes a -2 circumstance penalty.</p>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Ability Boost', 'Dwarf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Dwarven Weapons';
        $feat->description = '<p>Your kin instilled in you an affinity for hard-hitting weapons, and you prefer these to more elegant arms. You are trained with the following weapons.</p>
<ul>
    <li>Battle Axe</li>
    <li>Pick</li>
    <li>Warhammer</li>
    <li>You also gain access to all uncommon dwarf weapons. For the purpose of determining your proficiency, martial dwarf weapons are simple weapons and advanced dwarf weapons are martial weapons.</li>
</ul>
<p>You gain a +1 bonus to all Melee Weapon Attacks</p>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Dwarf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Unburdened Iron';
        $feat->description = "<p>You've learned techniques first devised by your ancestors during their ancient wars, allowing you to comfortably wear massive suits of armor.</p>
<ul>
    <li>Increase your CON by 1, to a maximum of 20.</li>
    <li>Ignore the reduction to your Speed from any armor you wear.</li>
    <li>In addition, any time you're taking a penalty to your Speed from some other reason (such as from the encumbered condition), deduct 5 feet from the penalty. For example the encumbered condition normally gives a -10-foot penalty to Speed, but it gives you only a -5-foot penalty. If your Speed is taking multiple penalties, pick only one penalty to reduce.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Ability Boost', 'Dwarf' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Giant Bane';
        $feat->description = '<p>Your squat stature and your hatred for giantkind give you an edge when fighting them.</p>
<ul>
    <li>You gain the Favored Enemy feature against Giants. If you already have the Favored Enemy feature vs Giants, the bonuses stack.</li>
    <li>You gain a +3 circumstance bonus to your AC against Giants.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Dwarf' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Dwarven Toughness';
        $feat->description = '<p>Dwarves are tough.</p>
<ul>
    <li>If you gain a feat that increases your CON, the maximum is increased to 22.</li>
    <li>Increase your CON by 1, up to a maximum of 22.</li>
    <li>You gain the Poison Resistance feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Ability Boost', 'Dwarf' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Duergar Psionics';
        $feat->description = '<p>Duergar have natural Psionic abilities.</p>
<ul>
    <li>You gain 1 Power Point.</li>
    <li>You gain the Expansion power as a 1st level power. Use WIS as your primary ability.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Power Point', 'Ancestry', 'Duergar' => 3]);
        $helper->addPowersToFeat($feat, [
            1 => ['Expansion'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Duergar Psionics';
        $feat->description = '<p>Duergar have natural Psionic abilities.</p>
<ul>
    <li>You gain 2 Power Points.</li>
    <li>You gain the Invisibility power as a 2nd level power. Use WIS as your primary ability.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Power Point', 'Ancestry', 'Duergar' => 5]);
        $helper->addPowersToFeat($feat, [
            2 => ['Invisibility'],
        ]);
        $feat->parent_feats()->save(app()->feats['Duergar Psionics']);

        $feat              = new Feat;
        $feat->name        = 'Dwarven Master Smith';
        $feat->description = '<p>You are able to substitute INT (Crafting) checks to require Spells for crafting magical items. The DC is 20 + the required Spells spell level. If successful, you suffer a point of CON damage equal to the Spell level of the required Spell, and half damage on failure.</p>';
        $helper->addTypesToFeat($feat, ['Ancestry', 'Dwarf' => 5]);
        $feat->parent_feats()->save(app()->feats['Dwarven Craftsman']);

        $feat              = new Feat;
        $feat->name        = 'Improved Dwarven Weapons';
        $feat->description = "<p>You've learned cunning techniques to get the best effects out of your dwarven weapons. Whenever you critically hit using a Dwarven weapon, you apply the weapon's critical specialization effect.</p>";
        $helper->addTypesToFeat($feat, ['Ancestry', 'Dwarf' => 5]);
        $feat->parent_feats()->save(app()->feats['Dwarven Weapons']);

        $feat              = new Feat;
        $feat->name        = 'Improved Dwarven Toughness';
        $feat->description = '<p>Your hardiness lets you withstand more punishment than most before going down.</p>
<ul>
    <li>Increase your CON by 1, up to maximum of 22</li>
    <li>Increase your maximum Hit Points by your character level.</li>
    <li>When you have the dying condition, the DC of your recovery check is equal to 9 + your dying value (instead of 10 + your dying value).</li>
    <li>If you have the Toughness feat, the Hit Points gained from it and this feat are cumulative, and the DC of your recovery checks is equal to 6 + your dying value.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Ancestry', 'Dwarf' => 9]);
        $feat->parent_feats()->save(app()->feats['Dwarven Toughness']);
    }
}
