<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassPaladinSeeder extends Seeder
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
        $class->name          = 'Paladin';
        $class->type          = 'Base';
        $class->key_attribute = 'STR or CHA';
        $class->weapons       = 'Simple Weapons, Martial Weapons';
        $class->armors        = 'Light Armor, Medium Armor and Shields';
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_points'   => 4,
            'skill_progress' => 2,
            'has_spells'     => 1,
        ], ['WIS', 'CHA'], [
            'Divine Warrior', 'Divine', 'Combat Mastery',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Animal Handling', 'Athletics', 'Concentration', 'Diplomacy', 'Language', 'Religion',
        ]);

        $helper->addFeaturesToClass($class, [
            'class_group_feat'    => [3, 6, 9, 12, 15, 18, 20],
            'divine_warrior'      => [2],
            'glorious_resistance' => [3],
            'combat_mastery'      => [7],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Combat Casting']);

        $feat              = new Feat;
        $feat->name        = 'Divine Mount';
        $feat->action_type = 'Triple Action';
        $feat->description = '<p>You may summon a mount (treat it as a young animal companion) by sacrificing one 1st level Spell Slot. As long as your mount exists, you do not recover the Spell Slot. It appears next to you at the beginning of your next turn.</p>
<p>You may sacrifice higher level Spell Slots to gain more powerful mounts. Certain feats also allow you to select different mounts.</p>';
        $helper->addTypesToFeat($feat, ['Divine']);

        $feat              = new Feat;
        $feat->name        = 'Improved Smite';
        $feat->description = '<p>Increase the damage of all your Smite spells by +1/die of damage</p>';
        $helper->addTypesToFeat($feat, ['Divine', 'Smite']);

        $feat              = new Feat;
        $feat->name        = 'Quicken Smite';
        $feat->description = '<p>You gain an additional Action each turn. This Action can only be used to cast Smite Spells.</p>';
        $helper->addTypesToFeat($feat, ['Divine', 'Smite']);

        $feat              = new Feat;
        $feat->name        = 'Ranged Smite';
        $feat->description = '<p>You can apply your Smite spells to Ranged Attacks.</p>';
        $helper->addTypesToFeat($feat, ['Divine', 'Smite']);

        $feat              = new Feat;
        $feat->name        = 'Improved Aura';
        $feat->description = '<p>All your Aura spells that you cast have their area and duration doubled. This applies before applying any meta magic effects.</p>';
        $helper->addTypesToFeat($feat, ['Aura', 'Divine']);

        $feat              = new Feat;
        $feat->name        = 'Greater Aura';
        $feat->description = '<p>You may now Concentrate on 2 auras at the same time. You cannot Concentrate 2 versions of the same Aura at the same time.</p>';
        $helper->addTypesToFeat($feat, ['Aura', 'Divine']);

        $helper->addFeatsToClass($class, [
            'Shield Master'            => 1,
            'Improved Shield Master'   => 7,
            'Divine Mount'             => 3,
            'Weapon Focus'             => 4,
            'Weapon Specialization'    => 6,
            'Power Attack'             => 2,
            'Improved Bull Rush'       => 3,
            'Swipe'                    => 3,
            'Cleave'                   => 3,
            'Great Cleave'             => 6,
            'Brutal Critical'          => 5,
            'Improved Brutal Critical' => 9,
            'Greater Brutal Critical'  => 13,
            'Weapon Finesse'           => 2,
            'Improved Disarm'          => 3,
            'Sentinel'                 => 2,
            'Stubborn'                 => 7,
            'Improved Stubborn'        => 12,
            'Beautiful Defense'        => 5,
            'Improved Smite'           => 5,
            'Ranged Smite'             => 7,
            'Quicken Smite'            => 10,
            'Improved Aura'            => 5,
            'Greater Aura'             => 10,
        ]);

        $helper->addSpellSlotsToClass($class, [
            2  => ['cantrips' => 2, 'zero' => 3, 'one' => 2],
            3  => ['cantrips' => 3, 'zero' => 3, 'one' => 2],
            4  => ['cantrips' => 3, 'zero' => 4, 'one' => 3],
            5  => ['cantrips' => 4, 'zero' => 4, 'one' => 3, 'two' => 2],
            6  => ['cantrips' => 4, 'zero' => 4, 'one' => 4, 'two' => 2],
            7  => ['cantrips' => 4, 'zero' => 5, 'one' => 4, 'two' => 2],
            8  => ['cantrips' => 4, 'zero' => 5, 'one' => 4, 'two' => 3, 'three' => 2],
            9  => ['cantrips' => 4, 'zero' => 5, 'one' => 4, 'two' => 3, 'three' => 2],
            10 => ['cantrips' => 4, 'zero' => 5, 'one' => 5, 'two' => 3, 'three' => 2],
            11 => ['cantrips' => 4, 'zero' => 6, 'one' => 5, 'two' => 3, 'three' => 2, 'four' => 1],
            12 => ['cantrips' => 4, 'zero' => 6, 'one' => 5, 'two' => 3, 'three' => 3, 'four' => 1],
            13 => ['cantrips' => 4, 'zero' => 6, 'one' => 5, 'two' => 4, 'three' => 3, 'four' => 1],
            14 => ['cantrips' => 4, 'zero' => 6, 'one' => 6, 'two' => 4, 'three' => 3, 'four' => 1, 'five' => 1],
            15 => ['cantrips' => 4, 'zero' => 6, 'one' => 6, 'two' => 4, 'three' => 3, 'four' => 1, 'five' => 1],
            16 => ['cantrips' => 4, 'zero' => 7, 'one' => 6, 'two' => 4, 'three' => 3, 'four' => 2, 'five' => 1],
            17 => ['cantrips' => 4, 'zero' => 7, 'one' => 6, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 1, 'six' => 1],
            18 => ['cantrips' => 4, 'zero' => 7, 'one' => 6, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 1, 'six' => 1],
            19 => ['cantrips' => 4, 'zero' => 7, 'one' => 6, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 1, 'six' => 1],
            20 => ['cantrips' => 4, 'zero' => 7, 'one' => 6, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Golden Barding', 'Light', 'Smite'],
            1 => ['Cloak of Bravery', 'Bless', 'Clear Mind', 'Compelled Duel', 'Cure Wounds', 'Detect Magic', 'Divine Favor',
                'Divine Smite', 'Energize Shield', 'Heroism', 'Knight Unburdened', 'Shieldbearer', ],
            2 => ['Aid', 'Call Mount', 'Heal Animal Companion', 'Keen Edge', 'Magic Weapon', 'Protection From Poison', 'Winged Mount'],
            3 => [],
            4 => [],
            5 => ['Divine Weapon'],
        ]);
    }
}
