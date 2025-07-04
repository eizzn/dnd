<?php

namespace Database\Seeders\Classes;

use App\Models\Klass;
use Illuminate\Database\Seeder;

class ClassCerebremancerSeeder extends Seeder
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
        $class->name          = 'Cerebremancer';
        $class->key_attribute = 'INT or CHA';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'            => '3 or more ranks in Arcane, 3 or more ranks in Concentration',
            'SpellCasting'      => 'Able to cast 2nd level Arcane spells',
            'Power Manifesting' => 'Able to manifest 2nd level Psionic powers',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 4,
            'skill_progress' => 2,
            'has_spells'     => true,
            'has_powers'     => true,
        ], ['INT', 'WIS', 'CHA'], [
            'Arcane', 'Psionic',
        ]);

        $helper->addFeaturesToClass($class, [
            'arcane_spellcasting_class' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            'psionic_power_class'       => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        ]);
    }
}
