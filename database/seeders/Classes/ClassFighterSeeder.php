<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
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
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $class                = new Klass;
        $class->name          = 'Fighter';
        $class->type          = 'Base';
        $class->key_attribute = 'STR or DEX';
        $class->hit_dice      = 10;
        $class->weapons       = 'Simple Weapons, Martial Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $helper->saveClass($class, [
            'skill_points'   => 3,
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
    }
}
