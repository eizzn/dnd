<?php

namespace Database\Seeders\Classes;

use App\Models\Klass;
use Illuminate\Database\Seeder;

class ClassSacredFistSeeder extends Seeder
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
        $class->name          = 'Sacred Fist';
        $class->type          = 'Prestige';
        $class->key_attribute = 'WIS or DEX';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'   => '6 or more ranks in Concentration, 5 or more ranks in Religion',
            'Feats'    => 'Combat Casting, Improved Unarmed Strike, Stunning Fist, Psionic Fist',
            'Spells'   => 'Able to cast 1st level Divine spells from a Halfling god',
            'Features' => 'Flurry of Blows Class Feature',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_progress' => 4,
            'has_spells'     => 1,
            'has_powers'     => 1,
        ], ['DEX', 'CON', 'WIS', 'CHA'], [
            'Psionic', 'Divine', 'Skill', 'Unarmed',
        ]);

        $helper->addFeaturesToClass($class, [
            'psionic_power_class'       => [1, 3, 5, 6, 7, 8, 9, 10],
            'divine_spellcasting_class' => [1, 2, 4, 6, 7, 8, 9, 10],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Divine Fist']);
        $class->features()->save(app()->features['class_group_feat'], ['level' => 5, 'meta' => 'Divine, Druid or Monk feat']);
        $class->features()->save(app()->features['class_group_feat'], ['level' => 9, 'meta' => 'Divine, Druid or Monk feat']);
    }
}
