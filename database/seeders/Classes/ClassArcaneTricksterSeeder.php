<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassArcaneTricksterSeeder extends Seeder
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

        $class                = new Klass;
        $class->name          = 'Arcane Trickster';
        $class->type          = 'Prestige';
        $class->key_attribute = 'DEX or INT';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'       => '3 or more ranks in Arcana, 2 or more ranks in Concentration, 4 or more ranks in Thievery',
            'Spellcasting' => 'Able to cast the spell Mage Hand and at least one 2nd level Arcane spell',
            'Special'      => 'Sneak Attack class feature at least +2D6',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 4,
            'has_spells'     => 1,
        ], ['DEX', 'INT'], [
            'Arcane', 'Sneak Attack', 'Skill',
        ]);

        $feature              = new Feature;
        $feature->key         = 'ranged_legerdemain';
        $feature->name        = 'Ranged Legerdemain';
        $feature->description = '<p>You can use the Thievery skill through your Mage Hand spell. Using the skill through the Mage Hand increases the DC by 5.</p>
<p>You must have at least 4 ranks in the Thievery skill or the specific sub skill to use this ability.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'invisible_thief';
        $feature->name        = 'Invisible Thief';
        $feature->description = '<p>As a Free Action, you become Invisible as if you had cast a Heightened Invisibility spell.  You can remain invisible for a number of rounds equal to the class level of the class that grants this feature. These rounds need not be consecutive. You regain all rounds of use after a Long Rest.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'surprise_spell';
        $feature->name        = 'Surprise Spell';
        $feature->description = '<p>You can add your Sneak Attack damage to any spell that deals damage if the targets are flat-footed.</p>
<p>This additional damage only applies to spells that deal hit point damage, and the additional damage is of the same type as the spell.</p>
<p>If the spell allows a Save to negate or half the damage, it also negates or halves the Sneak Attack damage.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'improved_mage_hand';
        $feature->name        = 'Improved Mage Hand';
        $feature->description = '<p>Your Mage Hand spell becomes improved.</p>
    <dl>
        <dt>Range</dt> <dd>60 feet</dd>
        <dt>Duration</dt> <dd>30 minutes</dd>
        <dt>Special</dt> <dd>Increase the weight limit that the Mage Hand can manipulate by +10 pounds.</dd>
    </dl>';
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'ranged_legerdemain'        => [1],
            'arcane_spellcasting_class' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            'sneak_attack'              => [2, 5, 8],
            'skill_feat'                => [3, 6, 9],
            'improved_mage_hand'        => [7],
            'invisible_thief'           => [9],
            'surprise_spell'            => [10],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Silent Spell']);
        $class->features()->save(app()->features['feat'], ['level' => 4, 'meta' => 'Still Spell']);
    }
}
