<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use Illuminate\Database\Seeder;

class ClassFighterSeeder extends Seeder
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
        $class->name          = 'Fighter';
        $class->key_attribute = 'STR or DEX';
        $class->hit_dice      = 10;
        $class->weapons       = 'Simple Weapons, Martial Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $helper->saveClass($class, [
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['STR', 'CON'], [
            'Fighter Feat', 'Heroic Surge', 'Combat Mastery',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Acrobatics', 'Animal Handling', 'Athletics', 'Intimidation', 'Language']);

        $feature              = new Feature;
        $feature->key         = 'good_at_talents';
        $feature->name        = 'Good at Talents';
        $feature->description = '<p>Whenever you gain a feat that grants one or more Talents, you gain one additional Talent.</p>';
        $helper->saveFeature($feature, ['Talent']);

        $feature              = new Feature;
        $feature->key         = 'heroic_surge';
        $feature->name        = 'Heroic Surge';
        $feature->description = '<p>You gain a Heroic Surge. You may use a Heroic Surge to gain the Quickened condition for 1 round. Some feats also require the use of a Heroic Surge to trigger the feats benefit.</p>';
        $helper->saveFeature($feature, ['Heroic Surge']);

        $feature              = new Feature;
        $feature->key         = 'combat_flexibility';
        $feature->name        = 'Combat Flexibility';
        $feature->description = "<p>When you make your daily preparations, you gain one fighter feat that you don't have (you may change this each time your make your daily preparations). You can use that feat until your next daily preparations. You must meet all its other prerequisites.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'improved_flexibility';
        $feature->name        = 'Improved Flexibility';
        $feature->description = '<p>When you use combat flexibility, you can gain two fighter feats instead of one. The second feat must be of 14th level of lower and can be one that has the first feat as a prerequisite. You must meet all their other prerequisites.</p>';
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'good_at_talents'      => [2],
            'combat_mastery'       => [5, 10, 17],
            'fighter_feat'         => [1, 2, 3, 4, 8, 9, 11, 13, 14, 15, 16, 19, 20],
            'heroic_surge'         => [6, 12, 18],
            'combat_flexibility'   => [7],
            'improved_flexibility' => [12],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 5, 'meta' => 'Extra Melee Action or Extra Ranged Action']);

        $helper->addFeatsToClass($class, [
            'Power Attack'       => 1,
            'Improved Sunder'    => 2,
            'Improved Bull Rush' => 2,
            'Improved Feint'     => 2,
            'Swipe'              => 2,
            'Cleave'             => 3,
            'Great Cleave'       => 5,
            'Stunning Fist'      => 8,

            'Brutal Critical'          => 5,
            'Improved Brutal Critical' => 9,
            'Greater Brutal Critical'  => 13,

            'Weapon Finesse'              => 1,
            'Improved Disarm'             => 2,
            'Improved Trip'               => 2,
            'Whirlwind Strike'            => 10,
            'Intelligent Strike'          => 1,
            'Two-Weapon Fighter'          => 1,
            'Improved Two-Weapon Fighter' => 8,
            'Greater Two-Weapon Fighter'  => 15,
            'Multi Attacker'              => 3,
            'Improved Multi Attacker'     => 6,
            'Sharpshooter'                => 7,
            'Shield Master'               => 1,
            'Improved Shield Master'      => 7,
            'Medium Armor Master'         => 2,
            'Heavy Armor Master'          => 2,
            'Weapon Focus'                => 4,
            'Weapon Specialization'       => 6,
            'Sentinel'                    => 2,
            'Peerless Archer'             => 9,
            'Improved Peerless Archer'    => 13,
            'Greater Peerless Archer'     => 17,

            'Deflect Ranged Attack' => 7,
        ]);
    }
}
