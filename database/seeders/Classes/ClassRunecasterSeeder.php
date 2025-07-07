<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use Illuminate\Database\Seeder;

class ClassRunecasterSeeder extends Seeder
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
        $class->name          = 'Rune Caster';
        $class->type          = 'Prestige';
        $class->key_attribute = 'WIS';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills' => '6 ranks in Crafting, 6 ranks in Arcana, 6 ranks in Religion',
            'Feats'  => 'Inscribe Rune',
            'Spells' => 'Ability to cast 2nd-level Divine spells',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_progress' => 4,
            'has_spells'     => true,
        ], ['INT', 'WIS'], [
            'Divine', 'Rune',
        ]);

        $feature              = new Feature;
        $feature->key         = 'rune_craft';
        $feature->name        = 'Rune Craft';
        $feature->description = '<p>Each time you gain this feature, you gain a +1 bonus to your Craft skill checks whenever it involves inscribing a Rune.</p>';
        $helper->saveFeature($feature, ['Skill']);

        $feature              = new Feature;
        $feature->key         = 'rune_power';
        $feature->name        = 'Rune Power';
        $feature->description = '<p>Each time you gain this feature, increase the DC of all Runes that you create by +1.</p>';
        $helper->saveFeature($feature, ['Skill']);

        $feature              = new Feature;
        $feature->key         = 'improved_inscribe_rune';
        $feature->name        = 'Improved Inscribe Rune';
        $feature->description = "<p>You can create Runes that are more powerful or versatile according to the following table.</p>
<table>
    <thead>
        <tr>
            <th>Uses/Trigger</th>
            <th>Cost to Create</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>One</td>
            <td>Spell Level X Caster Level X 50gp</td>
        </tr>
        <tr>
            <td>Charges</td>
            <td>Spell Level X Caster Level X 50gp</td>
        </tr>
        <tr>
            <td>Charges Per day</td>
            <td>Spell Level X Caster Level X 400gp</td>
        </tr>
        <tr>
            <td>Permanent (until dispelled)</td>
            <td>Spell Level X Caster Level X 2000gp</td>
        </tr>
        <tr>
            <td>Works when touched</td>
            <td>Base cost</td>
        </tr>
        <tr>
            <td>Works when read or passed</td>
            <td>Base cost  X 2</td>
        </tr>
    </tbody>
</table>
<dl>
    <dt>Works when read or passed</dt> <dd>Any attempt to study, identify, or fathom a rune's meaning count as \"reading\" the Rune. Passing through a portal that bears a Rune counts as \"passing\" the Rune. A Rune must have an unbroken line of effect to a target to affect that target, and the target must be within 30 feet.</dd>
</dl>
<p>A Rune that is triggered when passed can be set to almost any special conditions you specify. Runes can be set according to physical characteristics (such as height or weight) or creature type, subtype, or species.</p>
<p>Runes respond to invisible creatures normally but are not triggered by those who travel ethereally. When placing a Rune with a \"pass\" trigger, you can specify a password or phrase that protects a creature using it from triggering the Rune.</p>";
        $helper->saveFeature($feature, ['Item Creation']);

        $feature              = new Feature;
        $feature->key         = 'maximize_rune';
        $feature->name        = 'Maximize Rune';
        $feature->description = '<p>You can create Runes that are maximized, as if under the effects of a Maximize Spell feat without altering the leve of the spell being used to create the Rune. Maximizing the Rune adds +5 to the DC of the Craft check required to inscribe it.</p>';
        $helper->saveFeature($feature, ['Skill']);

        $feature              = new Feature;
        $feature->key         = 'rune_chant';
        $feature->name        = 'Rune Chant';
        $feature->description = '<p>Whenever you cast a Divine spell, you may trace a Rune in the air as an additional Somatic Casting component. This allows you to gain the benefits of your Rune power abilities for the spell.</p>';
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'divine_spellcasting_class' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            'divine_feat'               => [1, 5, 9],
            'rune_craft'                => [1, 4, 7],
            'rune_power'                => [2, 5, 9],
            'improved_inscribe_rune'    => [3],
            'maximize_rune'             => [6],
            'rune_chant'                => [10],
        ]);
    }
}
