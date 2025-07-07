<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassRedWizardSeeder extends Seeder
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
        $class->name          = 'Red Wizard';
        $class->type          = 'Prestige';
        $class->key_attribute = 'INT';
        $class->max_level     = 6;
        $class->requirements  = $helper->getClassRequirementsString([
            'Race'      => 'Human from Thay',
            'Alignment' => 'Any non-good',
            'Skills'    => '5 ranks in Arcana',
            'Feats'     => 'One and only one Wizard School feat, Inscribe Tattoo feat, at least 1 other Item Creation feat',
            'Spells'    => 'Ability to cast 3rd-level Arcane spells',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 4,
            'skill_progress' => 2,
            'has_spells'     => true,
        ], ['INT', 'WIS'], [
            'Arcane', 'Evil', 'Wizard School',
        ]);

        $feature              = new Feature;
        $feature->key         = 'enhanced_specialization';
        $feature->name        = 'Enhanced Specialization';
        $feature->description = '<p>You can no longer take any of the eight base Wizardry School feats (Abjurer, Conjurer, Diviner, Enchanter, Evoker, Illusionist, Necromancer, or Transmuter). You may take one Expert level School feat and the following Master level School feat when you qualify.</p>
<p>When you participant in Circle Magic, your spell power contributions are at full value.</p>
<p>Increase the number of magical items that you can Attune to by +1, which must be a magical Tattoo.</p>
<p>As part of your induction, you gain a magical Tattoo.</p>';
        $helper->saveFeature($feature, ['Wizard School']);

        $feature              = new Feature;
        $feature->key         = 'spell_power';
        $feature->name        = 'Spell Power';
        $feature->description = '<p>Spells of your chosen School of Wizardry get a +1 bonus to their Save DC.</p>';
        $helper->saveFeature($feature, ['Wizard School']);

        $helper->addFeaturesToClass($class, [
            'enhanced_specialization'   => [1],
            'wizard_feat'               => [3, 6],
            'arcane_spellcasting_class' => [1, 2, 3, 4, 5, 6],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Mage Circle Leader']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Expert Level Wizard School feat']);

        $helper->addFeatsToClass($class, [
            'Mage Circle Leader'       => 2,
            'Great Mage Circle Leader' => 6,
            'Corrupted Mage Circle'    => 9,
        ], 'Arcane');
    }
}
