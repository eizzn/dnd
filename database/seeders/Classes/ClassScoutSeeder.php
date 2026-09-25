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
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['CON', 'DEX'], [
            'Skill', 'Sneak Attack', 'Combat Mastery',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Acrobatics', 'Athletics', 'Language', 'Stealth', 'Survival']
        );

        $helper->addFeaturesToClass($class, [
            'rogue_feat'      => [4, 10, 15, 18, 20],
            'fighter_feat'    => [3, 7, 12, 17],
            'skirmish'        => [2, 5, 9, 13, 17],
            'surprise_attack' => [1],
            'combat_mastery'  => [7],
        ]);
    }
}
