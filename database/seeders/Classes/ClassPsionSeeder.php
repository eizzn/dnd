<?php

namespace Database\Seeders\Classes;

use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassPsionSeeder extends Seeder
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
        $class->name          = 'Psion';
        $class->type          = 'Base';
        $class->key_attribute = 'INT';
        $class->weapons       = 'Simple Weapons';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 4,
            'skill_progress' => 2,
            'has_powers'     => true,
        ], ['INT', 'WIS', 'CHA'], [
            'Psionic',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Language']);

        $helper->addFeaturesToClass($class, [
            'psychic_feat' => [2, 3, 6, 9, 12, 15, 18, 20],
        ]);

        $helper->addFeatsToClass($class, [
            'Boost Construct'      => 2,
            'Combat Manifestation' => 2,
            'Psionic Talent'       => 2,
            'Expanded Knowledge'   => 3,
            'Overchannel'          => 8,
            'Talented'             => 12,
            'Body Fuel'            => 15,

            'Psionic Combat Buffer'          => 5,
            'Improved Psionic Combat Buffer' => 10,

            'Psionic Fist'         => 2,
            'Greater Psionic Fist' => 7,

            'Psionic Weapon'         => 2,
            'Greater Psionic Weapon' => 7,

            'Psionic Shot'         => 2,
            'Greater Psionic Shot' => 7,

            'Focused Mind'          => 6,
            'Improved Focused Mind' => 12,
            'Greater Focused Mind'  => 16,
            'Supreme Focused Mind'  => 20,

            'Delay Power'       => 3,
            'Empower Power'     => 4,
            'Enlarge Power'     => 2,
            'Extend Power'      => 3,
            'Maximum Power'     => 5,
            'Opportunity Power' => 6,
            'Quicken Power'     => 7,
            'Split Psionic Ray' => 3,
            'Twin Power'        => 7,
            'Widen Power'       => 5,
        ]);

        $helper->addPowersToClass($class, [
            1 => ['Astral Construct', 'Astral Traveler', 'Attraction', 'Awareness', 'Bio-electricity', 'Body Adjustment',
                'Burst', 'Call to Mind', 'Chameleon', 'Charisma Defense', 'Charm', 'Creation', 'Compression', 'Control Object',
                'Daze', 'Detect Psionics', 'Deja Vu', 'Demoralize', 'Dexterity Defense', 'Disable', 'Dissipating Touch',
                'Distract', 'Ectoplasmic Shard', 'Ectoplasmic Sheen', 'Ectoplasmic', 'Empathy', 'Empty Mind', 'Expansion',
                'Fear', 'Inertial Armor', 'Intelligence Blast', 'Intelligence Defense', 'Matter Agitation', 'Missive', 'Psionic Repair',
                'Photokinesis', 'Pyrokinesis', 'Sense Link', 'Sense Minds', 'Shift', 'Strength Blast', 'Strength Defense',
                'Telekinesis', 'Venom', 'Vigor', 'Vitality Blast', 'Wisdom Defense', ],
            2 => ['Animal Sight', 'Aversion', 'Biofeedback', 'Body Equilibrium', 'Brain Disruption', 'Charisma Blast',
                'Clairvoyant Sense', 'Cloud Mind', 'Concealing Ectoplasm', 'Control Air', 'Control Sound', 'Danger Sense',
                'Dexterity Blast', 'Deafness', 'Dimension Swap', 'Ectoplasmic Weapon', 'Entangling Ectoplasm', 'Exhaust',
                'Flex Form', 'Heal', 'Invisibility', 'Levitate', 'Mental Augmentation', 'Mind Trap', 'Mindlink', 'Object Reading',
                'Physical Augmentation', 'Power Defense', 'Read Thoughts', 'Repair Ectoplasmic Damage', 'Sensitivity to Psychic Impressions',
                'Space Hop', 'Weapon Arm', 'Ubiquitous Sight', ],
            3 => ['Air Walk', 'Blindness', 'Body Purification', 'Dismiss Ectoplasm', 'Dispel Psionics', 'Ectoplasmic Form',
                "Gem Dragon's Roar", 'Haste', 'Memory Modification', 'Psionic Blast', 'Time Hop', 'Wings', 'Wisdom Blast', ],
            4 => ['Control Body', 'Death Urge', 'Dimension Door', 'Dismissal', 'Divination', 'Dominate', 'Energy Adaptation',
                'Fabricate', 'Fly', 'Inertial Barrier', 'Intellect Fortress', 'Life Blast', 'Metamorphosis', "Out of Time's Grip",
                'Power Leech', 'Psychic Reformation', 'Quintessence', 'Schism', 'Teleport Trigger', 'Wall of Ectoplasm', 'Wither', ],
            5 => ['Adapt Body', 'Baleful Sending', 'Brutalize Wounds', 'Catapsi', 'Ectoplasmic Creation, Major', 'Hail of Ectoplasmic Shards',
                'Incarnate', 'Metaconcert', 'Mind Probe', 'Psychic Crush', 'Teleport', 'Tower of Iron Will', ],
            6 => ['Aura Alteration', 'Contingency', 'Ectoplasmic Crystallize', 'Disintegrate', 'Fuse Flesh', 'Mind Switch',
                'Null Psionics Field', 'Plane Shift', 'Regeneration', 'Resonating Agony', 'Simulate Feat', 'Suspend Life', ],
            7 => ['Destructive Teleport', 'Energy Conversion', 'Fission', 'Insanity', "Lion's Roar", 'Mind Blank', 'Reddopsi',
                'Temporal Acceleration', 'Ultrablast', ],
            8 => ['Astral Seed', 'Bend Reality', 'Fusion', 'Hypercognition', 'Matter Manipulation', 'Mind Seed', 'True Creation'],
            9 => ['Apopsi', 'Assimilate', 'Etherealness', 'Genesis', 'Metafaculty', 'Microcosm', 'Psychic Chirurgery',
                'Time Regression', ],
        ]);

        $helper->addPowerMetasToClass($class, [
            1  => ['points' => 2, 'known' => 3, 'max_level_power' => 1],
            2  => ['points' => 6, 'known' => 5, 'max_level_power' => 1],
            3  => ['points' => 11, 'known' => 7, 'max_level_power' => 2],
            4  => ['points' => 17, 'known' => 9, 'max_level_power' => 2],
            5  => ['points' => 25, 'known' => 11, 'max_level_power' => 3],
            6  => ['points' => 35, 'known' => 13, 'max_level_power' => 3],
            7  => ['points' => 46, 'known' => 15, 'max_level_power' => 4],
            8  => ['points' => 58, 'known' => 17, 'max_level_power' => 4],
            9  => ['points' => 72, 'known' => 19, 'max_level_power' => 5],
            10 => ['points' => 88, 'known' => 21, 'max_level_power' => 5],
            11 => ['points' => 106, 'known' => 22, 'max_level_power' => 6],
            12 => ['points' => 126, 'known' => 23, 'max_level_power' => 6],
            13 => ['points' => 147, 'known' => 24, 'max_level_power' => 7],
            14 => ['points' => 170, 'known' => 25, 'max_level_power' => 7],
            15 => ['points' => 195, 'known' => 26, 'max_level_power' => 8],
            16 => ['points' => 221, 'known' => 27, 'max_level_power' => 8],
            17 => ['points' => 250, 'known' => 28, 'max_level_power' => 9],
            18 => ['points' => 280, 'known' => 29, 'max_level_power' => 9],
            19 => ['points' => 311, 'known' => 30, 'max_level_power' => 9],
            20 => ['points' => 343, 'known' => 31, 'max_level_power' => 9],
        ]);
    }
}
