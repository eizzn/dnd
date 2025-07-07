<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassHalruaanElderSeeder extends Seeder
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
        $class->name          = 'Halruaan Elder';
        $class->type          = 'Prestige';
        $class->key_attribute = 'INT';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'  => '7 ranks in Arcana',
            'Feats'   => 'Two Wizard School feats',
            'Spells'  => 'Ability to cast 4th-level Arcane spells',
            'Region'  => 'Halruaa',
            'Special' => 'You must petition for entry into the Halruaan Council of Elders and, after a divination background check by current elders, be accepted to that ruling body',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 4,
            'skill_progress' => 2,
            'has_spells'     => 1,
        ], ['INT', 'WIS'], [
            'Arcane', 'Wizard School',
        ]);

        $feature              = new Feature;
        $feature->key         = 'circle_link';
        $feature->name        = 'Circle Link';
        $feature->description = '<p>You are skilled in participating in Mage Circles</p>
<ul>
    <li>You gain 1 Spell Point</li>
    <li>When you participate in a Mage Circle, you grant an additional 2 Spell Points.</li>
    <li>You also go through a ritual that allows you to be contacted by a Halruaan Crystal Orb. You must pay the 2,000gp cost of the ritual (plus any other fees the Halruaan council may require).</li>
</ul>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'specialization_master';
        $feature->name        = 'Specialization Master';
        $feature->description = "<p>You may take a Wizard School feat, even if you've already taken the maximum limit.</p>";
        $helper->saveFeature($feature, ['Wizard School']);

        $helper->addFeaturesToClass($class, [
            'circle_link'               => [1],
            'wizard_feat'               => [3, 5, 7],
            'arcane_spellcasting_class' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            'specialization_master'     => [2, 9],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Extend Spell Pool']);

        $helper->addFeatsToClass($class, [
            'Mage Circle Leader'       => 1,
            'Great Mage Circle Leader' => 5,
        ]);

        /**********************************************************************/

        $class                = new Klass;
        $class->name          = 'Magehound';
        $class->type          = 'Prestige';
        $class->key_attribute = 'WIS or DEX';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'         => '5 or more ranks in Acrobatics, 5 or more ranks in Athletics, 3 or more ranks in Arcana',
            'Class Features' => 'Mind Blade Class Feature, Flurry of Blows Class Feature',
            'Feats'          => 'Improved Unarmed Strike, Attack of Opportunity',
            'Talent'         => 'Psionic Combat Power',
        ]);
        $class->description = '<p>The Magehound are Mind Blade wielding monks who police the Arcane spell casters of Halruaa</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 2,
        ], ['WIS', 'DEX', 'CHA']);

        $feature              = new Feature;
        $feature->key         = 'deflect_ray';
        $feature->name        = 'Deflect Ray';
        $feature->description = '<p>You can now deflect Magic Missiles, or arcane magic spells that have the Ray trait or the area is a Line as if your Deflect Ranged Attack (except you cannot catch and attack with the ray or line spell). You must have your Mind Blade readied and you may only deflect spells with your Mind Blade.</p>';
        $helper->saveFeature($feature, ['Psionic', 'Mind Blade']);

        $feature              = new Feature;
        $feature->key         = 'reflect_ray';
        $feature->name        = 'Reflect Ray';
        $feature->description = '<p>You may now reflect Magic Missiles, or arcane magic spells that have the Ray trait or the area is a Line by spending 2 Reactions (as the Deflect Ranged Attack describes) or by expending your Psionic Focus.</p>';
        $helper->saveFeature($feature, ['Psionic', 'Mind Blade']);

        $helper->addFeaturesToClass($class, [
            'spell_resistance'    => [1],
            'enhance_mind_blade'  => [1],
            'psionic_power_class' => [2, 3, 4, 5, 6, 7, 8, 9, 10],
            'deflect_ray'         => [3],
            'reflect_ray'         => [7],
            'psychic_feat'        => [9],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Deflect Ranged Attack']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Psychic Strike']);
        $class->features()->save(app()->features['feat'], ['level' => 6, 'meta' => 'Psychic Strike']);
        $class->features()->save(app()->features['feat'], ['level' => 10, 'meta' => 'Psychic Strike']);
        $class->features()->save(app()->features['feat'], ['level' => 5, 'meta' => 'Improved Psychic Strike']);

        $helper->addPowersToClass($class, [
            1 => ['Telekinetic Strike'],
            2 => ['Haste'],
            3 => ['Telekinetic Force', 'Telekinetic Maneuver', 'Telekinetic Thrust'],
            4 => ['Schism'],
        ]);

        $features = app()->features;
        unset($features['psychic_strike']);
        unset($features['deflect_ray']);
        unset($features['reflect_ray']);
        unset($features['enhance_mind_blade']);
        app()->features = $features;
    }
}
