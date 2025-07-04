<?php

namespace Database\Seeders\Classes;

use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassPsychicWarriorSeeder extends Seeder
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
        $class->name          = 'Psychic Warrior';
        $class->key_attribute = 'STR or CON or WIS';
        $class->weapons       = 'Simple Weapons, Martial Weapons, plus 2 Exotic Weapons';
        $class->armors        = 'All Armor and Shields';
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_points'   => 4,
            'skill_progress' => 4,
            'has_powers'     => true,
        ], ['CON', 'WIS'], [
            'Psionic', 'Combat Master',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Athletics', 'Concentration', 'Language']);
        $helper->addFeaturesToClass($class, [
            'combat_mastery' => [7],
            'psychic_feat'   => [3, 4, 6, 7, 12, 13, 15, 16, 18, 19, 20],
        ]);

        $helper->addFeatsToClass($class, [
            'Psionic Talent'     => 2,
            'Expanded Knowledge' => 4,

            'Psychic Speed' => 6,

            'Focused Mind'          => 6,
            'Improved Focused Mind' => 9,
            'Greater Focused Mind'  => 12,
            'Supreme Focused Mind'  => 15,

            'Stunning Fist'          => 6,
            'Improved Stunning Fist' => 12,
        ]);

        $helper->addPowersToClass($class, [
            1 => ['Absorb Weapon', 'Body Adjustment', 'Burst', 'Call Object', 'Chameleon', 'Detect Psionics', 'Dissipating Touch',
                'Distract', 'Empty Mind', 'Expansion', 'Inertial Armor', 'Photokinesis', 'Vigor', ],
            2 => ['Acid', 'Animal Sight', 'Biofeedback', 'Body Equilibrium', 'Body Purification', 'Cloud Mind', 'Compression',
                'Concealing Ectoplasm', 'Danger Sense', 'Deafness', 'Dimension Swap', 'Ectoplasmic Weapon', 'Exhaust', 'Flex Form',
                'Invisibility', 'Levitate', 'Physical Augmentation', 'Scent', 'Weapon Arm', ],
            3 => ['Battlesense', 'Blindness', 'Drain Vigor', 'Ectoplasmic Form', 'Immovability', 'Ubiquitous Sight'],
            4 => ['Dimension Door', 'Energy Adaptation', 'Inertial Barrier', "Out of Time's Grip", 'Psychic Drain'],
            5 => ['Adapt Body', 'Barrage', 'Brutalize Wounds', 'Catapsi', 'Metaconcert'],
            6 => ["Lion's Roar", 'Mind Blank', 'Suspend Life'],
        ]);

        $helper->addPowerMetasToClass($class, [
            1  => ['points' => 1, 'known' => 1, 'max_level_power' => 1],
            2  => ['points' => 2, 'known' => 2, 'max_level_power' => 1],
            3  => ['points' => 4, 'known' => 3, 'max_level_power' => 1],
            4  => ['points' => 6, 'known' => 4, 'max_level_power' => 2],
            5  => ['points' => 8, 'known' => 5, 'max_level_power' => 2],
            6  => ['points' => 12, 'known' => 6, 'max_level_power' => 2],
            7  => ['points' => 16, 'known' => 7, 'max_level_power' => 3],
            8  => ['points' => 20, 'known' => 8, 'max_level_power' => 3],
            9  => ['points' => 24, 'known' => 9, 'max_level_power' => 3],
            10 => ['points' => 28, 'known' => 10, 'max_level_power' => 4],
            11 => ['points' => 34, 'known' => 11, 'max_level_power' => 4],
            12 => ['points' => 40, 'known' => 12, 'max_level_power' => 4],
            13 => ['points' => 46, 'known' => 13, 'max_level_power' => 5],
            14 => ['points' => 52, 'known' => 14, 'max_level_power' => 5],
            15 => ['points' => 58, 'known' => 15, 'max_level_power' => 5],
            16 => ['points' => 64, 'known' => 16, 'max_level_power' => 6],
            17 => ['points' => 70, 'known' => 17, 'max_level_power' => 6],
            18 => ['points' => 76, 'known' => 18, 'max_level_power' => 6],
            19 => ['points' => 82, 'known' => 19, 'max_level_power' => 6],
            20 => ['points' => 90, 'known' => 20, 'max_level_power' => 6],
        ]);
    }
}
