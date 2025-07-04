<?php

namespace Database\Seeders\Classes;

use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassMysticTheurgeSeeder extends Seeder
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
        $class->name          = 'Mystic Theurge';
        $class->key_attribute = 'INT or WIS';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'       => '3 or more ranks in Arcana and Religion',
            'Spellcasting' => 'Able to cast 2nd level Arcane and Divine spells',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 2,
            'has_spells'     => true,
        ], ['INT', 'WIS'], [
            'Arcane', 'Divine',
        ]);

        $helper->addFeaturesToClass($class, [
            'arcane_spellcasting_class' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            'divine_spellcasting_class' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        ]);
    }
}
