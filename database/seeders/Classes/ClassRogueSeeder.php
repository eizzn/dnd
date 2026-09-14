<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Klass;
use Illuminate\Database\Seeder;

class ClassRogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $class                = new Klass;
        $class->name          = 'Rogue';
        $class->type          = 'Base';
        $class->key_attribute = 'DEX';
        $class->weapons       = 'Simple Weapons, plus the Hand Crossbow, Rapier, Sap, Shortbow, and Shortsword';
        $class->armors        = 'Light Armor';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['DEX', 'INT'], [
            'Rogue', 'Skill', 'Sneak Attack', 'Heroic Surge',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Deception', 'Language', 'Stealth', 'Thievery',
        ]);

        $helper->addFeaturesToClass($class, [
            'class_group_feat'    => [3, 6, 9, 12, 15, 18, 20],
            'skill_feat'          => [1, 7, 13, 16],
            'surprise_attack'     => [1],
            'precision_attack'    => [2, 5, 8, 11, 14, 17, 20],
            'uncanny_dodge'       => [5],
            'evasion'             => [7],
            'hide_in_plain_sight' => [9],
            'heroic_surge'        => [4, 10],
        ]);
        $class->features()->save(app()->features['talent'], ['level' => 2, 'meta' => 'Improved Reaction']);

        $feat              = new Feat;
        $feat->name        = 'Sneak Attack';
        $feat->description = "<p>You have the ability to deal extra damage under the following conditions</p>
<ul>
    <li>You have Advantage on attack rolls against the target</li>
    <li>The target is denied their DEX bonus to AC.</li>
    <li>The target is flanked. The flankers don't have to be your allies.</li>
</ul>
<p>You can deal your Sneak Attack damage to the following attack types</p>
<ul>
    <li>Melee attack with a Finesse or Agile weapon</li>
    <li>Melee attack with a Nonlethal weapon</li>
    <li>Ranged attacks made within 60 feet (thrown weapons must be a Light Weapon)</li>
</ul>
<p>Each time you take this feat, the Sneak Attack damage increases by +1D6.</p>";
        $helper->addTypesToFeat($feat, ['Sneak Attack', 'Precision']);

        $feat              = new Feat;
        $feat->name        = 'Sudden Strike';
        $feat->description = '<p>This ability qualifies as a Sneak Attack. You have the ability to deal extra damage under the following conditions</p>
<ul>
    <li>The target is denied their DEX bonus to AC.</li>
</ul>
<p>You can deal your Sneak Attack damage to the following attack types</p>
<ul>
    <li>Melee attack with a Finesse or Agile weapon</li>
    <li>Melee attack with a Nonlethal weapon</li>
</ul>
<p>Each time you take this feat, the Sudden Strike damage increases by +1D6.</p>';
        $helper->addTypesToFeat($feat, ['Sneak Attack', 'Precision']);

        $feat              = new Feat;
        $feat->name        = 'Skirmish';
        $feat->description = '<p>This ability qualifies as a Sneak Attack. You have the ability to deal extra damage under the following conditions</p>
<ul>
    <li>You use an Action to move at least 15 feet before attacking. The extra damage applies with all attacks made with Actions, not Reactions.</li>
</ul>
<p>You can deal your Sneak Attack damage to the following attack types</p>
<ul>
    <li>Melee attack with a Finesse or Agile weapon</li>
    <li>Ranged attacks made within 60 feet (thrown weapons must be a Light Weapon)</li>
</ul>
<p>Each time you take this feat, the Skirmish damage increases by +1D6.</p>';
        $helper->addTypesToFeat($feat, ['Sneak Attack', 'Precision']);

        $feat              = new Feat;
        $feat->name        = 'Bleeding Strike';
        $feat->trigger     = 'You successfully Hit with a Sneak Attack';
        $feat->description = '<p>Deal one Sneak Attack dice less damage. The target now has Persistent Damage [Bleed] 1.</p>';
        $helper->addTypesToFeat($feat, ['Precision']);

        $feat              = new Feat;
        $feat->name        = 'Debilitating Strike';
        $feat->trigger     = 'Your Strike hits a flat-footed creature';
        $feat->description = '<p>You apply one of the following debilitation, which lasts until the end of your next turn</p>
<ul>
    <li><strong>Debilitation</strong> The target becomes Entangled</li>
    <li><strong>Debilitation</strong> The target becomes Enfeebled 1</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Precision']);

        $feat              = new Feat;
        $feat->name        = 'Double Debilitating Strike';
        $feat->trigger     = 'Your Strike hits a flat-footed creature';
        $feat->description = '<p>When you use Debilitating Strike, you can apply two debilitation simultaneously. Curing one cures both.</p>';
        $helper->addTypesToFeat($feat, ['Precision']);
        $feat->parent_feats()->save(app()->feats['Debilitating Strike']);

        $feat              = new Feat;
        $feat->name        = 'Master Strike';
        $feat->trigger     = 'Your Strike hits a flat-footed creature';
        $feat->description = '<p>You apply the following enhancement</p>
<p>The target must attempt a CON Save at your class DC, with the following effects. It is bolstered.</p>
<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>The target is Enfeebled 2 until the end of your next turn</dd>
    <dt>Failure</dt> <dd>The target is Paralyzed for 4 rounds</dd>
    <dt>Critical Failure</dt> <dd>The target is Paralyzed for 4 rounds, knocked unconscious for 2 hours, or killed (your choice)</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Precision']);
        $feat->parent_feats()->save(app()->feats['Double Debilitating Strike']);

        $helper->addFeatsToClass($class, [
            'Improved Feint'   => 2,
            'Weapon Finesse'   => 2,
            'Sharpshooter'     => 7,
            'Evasion'          => 7,
            'Improved Evasion' => 13,
            'Resolve'          => 17,

            'Bleeding Strike'            => 7,
            'Debilitating Strike'        => 9,
            'Double Debilitating Strike' => 12,
            'Master Strike'              => 15,
            'Weapon Focus'               => 5,

            'Extra Melee Action'        => 7,
            'Extra Ranged Action'       => 6,
        ]);
    }
}
