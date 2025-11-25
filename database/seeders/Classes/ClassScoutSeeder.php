<?php

namespace Database\Seeders\Classes;

use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassScoutSeeder extends Seeder
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
        $class->name          = 'Scout';
        $class->type          = 'Base';
        $class->key_attribute = 'DEX';
        $class->weapons       = 'Simple Weapons, plus the Hand Crossbow, Light Crossbow, Heavy Crossbow, Longbow, Shortbow, and Short Sword';
        $class->armors        = 'Light Armor';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 6,
        ], ['CON', 'DEX'], [
            'Skill', 'Sneak Attack', 'Combat Mastery',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Acrobatics', 'Athletics', 'Language', 'Stealth', 'Survival']
        );

        $helper->addFeaturesToClass($class, [
            'class_group_feat' => [4, 10, 15, 18, 20],
            'fighter_feat'     => [3, 7, 12, 17],
            'skirmish'         => [2, 5, 9, 13, 17],
            'surprise_attack'  => [1],
            'combat_mastery'   => [7],
        ]);

        $helper->addFeatsToClass($class, [
            'Improved Feint'   => 2,
            'Weapon Finesse'   => 2,
            'Sharpshooter'     => 7,
            'Evasion'          => 7,
            'Improved Evasion' => 13,
            'Resolve'          => 17,

            'Bleeding Strike'            => 7,
            'Debilitating Strike'        => 9,
            'Double Debilitating Strike' => 15,
            'Master Strike'              => 19,
        ]);
    }
}
