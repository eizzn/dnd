<?php

namespace Database\Seeders\Classes;

use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassAdventurerSeeder extends Seeder
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
        $class->name          = 'Adventurer';
        $class->type          = 'Base';
        $class->key_attribute = 'DEX';
        $class->hit_dice      = 8;
        $class->weapons       = 'Simple Weapons, plus the Hand Crossbow, Rapier, Sap, Shortbow, and Shortsword';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['DEX', 'CHA'], [
            'Arcane', 'Skill', 'Combat Mastery',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Arcana', 'Athletics', 'Concentration', 'Language', 'Stealth', 'Thievery',
        ]);

        $helper->addFeaturesToClass($class, [
            'arcane_rogue_feat' => [1, 3, 4, 6, 9, 10, 12, 13, 15, 18, 19, 20],
            'combat_mastery'    => [7],
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Acid Splash', 'Blade Ward', 'Daze', 'Know Direction', 'Light', 'Mage Hand', 'Mending', 'Message', 'Oilskin',
                'Poison Spray', 'Prestidigitation', 'Produce Flame', 'Resistance', 'Shield', 'Shocking Grasp', 'True Strike', ],
            1 => ['Alarm', 'Comprehend Languages', 'Delay Poison', 'Detect Magic', 'Detect Secret Doors', 'Feather Fall',
                'Grease', 'Guided Path', 'Guiding Light', 'Hawkeye', 'Healthful Rest', 'Jump', 'Locate City', 'Note', 'Swift',
                'Weapon Shift', ],
            2 => ['Animate Objects, Lesser', "Bear's Endurance", "Bull's Strength", "Cat's Grace", 'Conjure Weapon', 'Cure Wounds',
                'Darkvision', "Eagle's Splendor", "Fox's Cunning", 'Gust of Wind', 'Heroism', 'Insight of Good Fortune',
                'Invisibility', 'Keen Edge', 'Knock', 'Map', "Owl's Wisdom", 'Resist Fire', 'Skyhook', ],
            3 => ['Create Food and Water', 'Dancing Sword', 'Dispel Magic', 'Fly', 'Haste', 'Journal', 'Listening Coin',
                'Message Link', 'Misty Step', 'Sending', 'Status', 'Transmuted Weapon', 'Tongues', ],
            4 => ['Control Water', 'Freedom of Movement', 'Know Vulnerabilities', 'Secret Chest', 'Shape Stone', 'Teleport'],
            5 => ['Arcane Hand', 'Chronicle', 'Creation', 'Passwall'],
        ]);

        $helper->addSpellSlotsToClass($class, [
            1  => ['known' => 0],
            2  => ['known' => 2, 'cantrips' => 2, 'zero' => 2, 'one' => 1],
            3  => ['known' => 3, 'cantrips' => 2, 'zero' => 3, 'one' => 1],
            4  => ['known' => 4, 'cantrips' => 2, 'zero' => 4, 'one' => 2],
            5  => ['known' => 5, 'cantrips' => 2, 'zero' => 4, 'one' => 2, 'two' => 1],
            6  => ['known' => 6, 'cantrips' => 3, 'zero' => 4, 'one' => 3, 'two' => 1],
            7  => ['known' => 7, 'cantrips' => 3, 'zero' => 5, 'one' => 3, 'two' => 2],
            8  => ['known' => 8, 'cantrips' => 3, 'zero' => 5, 'one' => 3, 'two' => 2, 'three' => 1],
            9  => ['known' => 9, 'cantrips' => 3, 'zero' => 5, 'one' => 3, 'two' => 2, 'three' => 1],
            10 => ['known' => 10, 'cantrips' => 3, 'zero' => 5, 'one' => 3, 'two' => 3, 'three' => 2],
            11 => ['known' => 11, 'cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 2, 'four' => 1],
            12 => ['known' => 12, 'cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 2, 'four' => 1],
            13 => ['known' => 13, 'cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2],
            14 => ['known' => 14, 'cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 1],
            15 => ['known' => 15, 'cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 1],
            16 => ['known' => 16, 'cantrips' => 4, 'zero' => 7, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 2],
            17 => ['known' => 17, 'cantrips' => 4, 'zero' => 7, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 2],
            18 => ['known' => 18, 'cantrips' => 4, 'zero' => 7, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 2],
            19 => ['known' => 19, 'cantrips' => 4, 'zero' => 7, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 2],
            20 => ['known' => 20, 'cantrips' => 4, 'zero' => 7, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 2],
        ]);
    }
}
