<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassBladesingerSeeder extends Seeder
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
        $class->name          = 'Bladesinger';
        $class->key_attribute = 'DEX or INT';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Race'         => 'Elf or Half-Elf',
            'Skills'       => '7 or more ranks in Concentration, 7 or more ranks in Performance, 5 or more ranks in Acrobatics',
            'Feats'        => 'Intelligent Strike, Weapon Finesse, Combat Casting, Weapon Focus, Superior Intellect, Quick Mind, Light Armor Caster',
            'Spellcasting' => 'Able to cast 1st level Arcane spells',
            'Special'      => 'You cannot have the Ring Caster Feat. You cannot take the Ring Caster Feat',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 2,
            'has_spells'     => 1,
        ], ['DEX', 'INT'], [
            'Arcane', 'Heroic Surge', 'Combat Mastery', 'Fighter Feat',
        ]);

        $feature              = new Feature;
        $feature->key         = 'bladesong';
        $feature->name        = 'Bladesong';
        $feature->description = '<p>You are skilled at combining arcane spell casting with dance.</p>
<p>While wearing no armor or light armor, and no shield, and wielding a one-handed blade in one hand and nothing in the other, you gain the following abilities.</p>
<ul>
    <li>You may use an Action to make a Performance check with DC 8. If you succeed, you gain a +2 bonus to AC and a +2 bonus to DEX Saves until the beginning of your next turn and you may take a 5-foot step as part of your performance. This 5-foot step is considered a Disengage Action. If you are casting a spell with a Somatic Casting Component, you may make a Performance check as part of the Somatic Casting Component and gain these benefits.</li>
    <li>When casting a spell Defensively with a Somatic Casting Component, you may use CHA (Performance) instead of WIS (Concentration).</li>
    <li>You do not suffer Armor Penalty for casting Somatic Casting Spells while wearing Light Armor.</li>
</ul>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'lesser_spellsong';
        $feature->name        = 'Lesser Spellsong';
        $feature->description = '<p>You gain an additional Action. This Action can only be used for the Arcane Strike feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'greater_spellsong';
        $feature->name        = 'Greater Spellsong';
        $feature->description = '<p>When you use Arcane Strike, you deal an additional +1D6 damage. This includes cantrips, which now deal 1D6 damage.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'bladesong_fury';
        $feature->name        = 'Bladesong of Fury';
        $feature->description = '<ul>
    <li>Your Arcane Strike deals an Additional +1D6 damage.</li>
    <li>When you use Arcane Strike, you may use a Heroic Surge. If you do, you may use Arcane Strike again. You may not use this ability more than once each turn.</li>
</ul>';
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'bladesong'                 => [1],
            'arcane_spellcasting_class' => [2, 3, 4, 5, 6, 8, 9],
            'fighter_feat'              => [3, 6, 9],
            'lesser_spellsong'          => [4],
            'greater_spellsong'         => [7],
            'heroic_surge'              => [4, 8],
            'combat_mastery'            => [5],
            'bladesong_fury'            => [10],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Uncanny Defense', 'idx' => 0]);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Arcane Strike', 'idx' => 1]);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Mobile', 'idx' => 2]);

        $helper->addSpellsToClass($class, [
            0 => ['Call Attuned Weapon'],
            1 => ['Snatch'],
            4 => ['Spellsong'],
        ]);
    }
}
