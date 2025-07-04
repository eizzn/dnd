<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassEnlightenedFistSeeder extends Seeder
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
        $class->name          = 'Enlightened Fist';
        $class->key_attribute = 'INT or DEX';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'   => '6 ranks in Concentration, 5 ranks in Arcana',
            'Feats'    => 'Combat Casting, Arcane Strike, Psionic Fist',
            'Spells'   => 'Ability to cast 2nd-level Arcane spells',
            'Features' => 'Flurry of Blows class feature',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 4,
            'has_spells'     => 1,
            'has_powers'     => 1,
        ], ['INT', 'WIS'], [
            'Psionic', 'Arcane', 'Unarmed',
        ]);

        $feature              = new Feature;
        $feature->key         = 'fist_of_energy';
        $feature->name        = 'Fist of Energy';
        $feature->description = '<p>You may now trigger Arcane Strike to gain the following additional benefits.</p>
<ul>
    <li>You may choose to have the extra damage be Arcane, Fire, or Lightning damage.</li>
    <li>If you sacrifice a spell slot of 2nd level or higher, the effect lasts for a number of rounds equal to double the level of the spell slot sacrificed.</li>
</ul>';
        $helper->saveFeature($feature, ['Arcane', 'Psionic']);

        $feature              = new Feature;
        $feature->key         = 'arcane_fist';
        $feature->name        = 'Arcane Fist';
        $feature->description = '<p>You may now trigger Arcane Strike to deliver a spell with a touch attack or has the Ray type as part of an Unarmed Strike. You do not gain any of the bonuses for using Arcane Strike.</p>
<p>The spell must be delivered before the end of your next turn.</p>';
        $helper->saveFeature($feature, ['Arcane', 'Psionic']);

        $helper->addFeaturesToClass($class, [
            'psionic_power_class'       => [1, 3, 6, 7, 8, 9, 10],
            'arcane_spellcasting_class' => [1, 4, 6, 7, 8, 9, 10],
            'fist_of_energy'            => [2],
            'arcane_fist'               => [5],
        ]);
        $class->features()->save(app()->features['class_group_feat'], ['level' => 2, 'meta' => 'Arcane or Monk feat']);
        $class->features()->save(app()->features['class_group_feat'], ['level' => 5, 'meta' => 'Arcane or Monk feat']);
        $class->features()->save(app()->features['class_group_feat'], ['level' => 9, 'meta' => 'Arcane or Monk feat']);

        $helper->addPowersToClass($class, [
            1 => ['Burst', 'Shift'],
            2 => ['Haste', 'Mental Augmentation', 'Mental Barrier', 'Physical Augmentation', 'Space Hop'],
            3 => ['Air Walk', 'Cloud Mind', 'Energy Adaptation'],
            4 => ['Adapt Body', 'Dimension Door', 'Etherealness'],
        ]);

        $helper->addFeatsToClass($class, [
            'Greater Psionic Fist' => 3,
        ]);
    }
}
