<?php

namespace Database\Seeders\Classes;

use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassHexBladeSeeder extends Seeder
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
        $class->name          = 'Hex Blade';
        $class->key_attribute = 'CHA';
        $class->weapons       = 'Simple Weapons, Martial Weapons';
        $class->armors        = 'Light Armor, Medium Armor';
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_points'   => 4,
            'skill_progress' => 2,
            'has_spells'     => true,
        ], ['WIS', 'CHA'], [
            'Combat Mastery', 'Arcane',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Arcana', 'Concentration', 'Intimidation', 'Language',
        ]);

        $helper->addFeaturesToClass($class, [
            'class_group_feat' => [3, 4, 6, 7, 9, 10, 13, 15, 16, 18, 19, 20],
            'spell_resistance' => [4],
            'combat_mastery'   => [7, 20],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Stunning Personality']);

        $helper->addFeatsToClass($class, [
            'Mettle'            => 3,
            'Stubborn'          => 7,
            'Improved Stubborn' => 12,
            'Beautiful Defense' => 2,

            'Find Familiar'    => 4,
            'Enhance Familiar' => 8,
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Blade Ward', 'Boon', "Copper Dragon's Trickery", 'Daze', 'Detect Magic', 'Guidance', 'Hex', 'Resistance',
                'Shield', ],
            1 => ['Augment Familiar', 'Bane', 'Bless', 'Fear', 'Mage Armor', 'Magic Weapon', 'True Strike', 'Unseen Servant'],
            2 => ["Bear's Endurance", 'Bestow Curse', "Bull's Hex", "Bull's Strength", "Cat's Hex", "Cat's Grace", "Eagle's Hex",
                "Eagle's Splendor", "Fox's Hex", 'Keen Edge', "Owl's Hex", 'Shadow Double', ],
            3 => ["Bear's Hex", 'Dispel Magic', 'Haste', 'Sickness', 'Slow'],
            4 => ['Blink', 'Faithful Hound', 'Globe of Invulnerability', 'Incite Riot', 'Spell Theft'],
        ]);

        $helper->addSpellSlotsToClass($class, [
            4  => ['cantrips' => 2, 'zero' => 4, 'one' => 2],
            5  => ['cantrips' => 3, 'zero' => 4, 'one' => 2],
            6  => ['cantrips' => 3, 'zero' => 4, 'one' => 3],
            7  => ['cantrips' => 4, 'zero' => 5, 'one' => 3],
            8  => ['cantrips' => 4, 'zero' => 5, 'one' => 4, 'two' => 2],
            9  => ['cantrips' => 4, 'zero' => 5, 'one' => 4, 'two' => 2],
            10 => ['cantrips' => 4, 'zero' => 5, 'one' => 4, 'two' => 3],
            11 => ['cantrips' => 4, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 2],
            12 => ['cantrips' => 4, 'zero' => 6, 'one' => 4, 'two' => 4, 'three' => 2],
            13 => ['cantrips' => 4, 'zero' => 6, 'one' => 4, 'two' => 4, 'three' => 3],
            14 => ['cantrips' => 4, 'zero' => 6, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 2],
            15 => ['cantrips' => 4, 'zero' => 6, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 2],
            16 => ['cantrips' => 4, 'zero' => 7, 'one' => 5, 'two' => 4, 'three' => 3, 'four' => 3],
            17 => ['cantrips' => 4, 'zero' => 7, 'one' => 5, 'two' => 4, 'three' => 3, 'four' => 3],
            18 => ['cantrips' => 4, 'zero' => 7, 'one' => 5, 'two' => 4, 'three' => 3, 'four' => 3],
            19 => ['cantrips' => 4, 'zero' => 7, 'one' => 5, 'two' => 4, 'three' => 3, 'four' => 3],
            20 => ['cantrips' => 4, 'zero' => 7, 'one' => 5, 'two' => 4, 'three' => 3, 'four' => 3],
        ]);
    }
}
