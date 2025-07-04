<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use Illuminate\Database\Seeder;

class ClassArchMageSeeder extends Seeder
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
        $class->name          = 'Archmage';
        $class->key_attribute = 'INT';
        $class->hit_dice      = 4;
        $class->max_level     = 5;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills' => '15 ranks in Arcana',
            'Feats'  => 'At least one Wizard School feat',
            'Spells' => 'Ability to cast 7th-level Arcane spells',
        ]);
        $helper->saveClass($class, [
            'skill_progress' => 3,
            'has_spells'     => 1,
        ], ['INT', 'WIS'], [
            'Arcane',
        ]);

        $feature              = new Feature;
        $feature->key         = 'high_arcana';
        $feature->name        = 'High Arcana';
        $feature->description = "<p>You gain the opportunity to select a special ability from among those described below by permanently eliminating one existing spell slot (she cannot eliminate a spell slot of higher level than the highest-level spell she can cast). Each special ability has a minimum required spell slot level, as specified in its description.</p>
<dl>
    <dt>Arcane Fire</dt> <dd>You the ability to change arcane spell energy into arcane fire, manifesting it as a bolt of raw magical energy. The bolt is a ranged touch attack with long range (400 feet + 40 feet/level of archmage) that deals 1D6 points of damage per class level of the archmage plus 1d6 points of damage per level of the spell used to create the effect. This ability costs one 3rd-level Spell Slot.</dd>
    <dt>Mastery of Elements</dt> <dd>The archmage can alter an arcane spell when cast so that it utilizes a different element from the one it normally uses. This ability can only alter a spell with the acid, cold, fire, electricity, or sonic descriptor. The spell's casting time is unaffected. You decide whether to alter the spell's energy type and chooses the new energy type when you begin casting. This ability costs one 2nd-level Spell Slot.</dd>
    <dt>Mastery of Shaping</dt> <dd>The archmage can alter area and effect spells that use one of the following shapes: burst, cone, cylinder, emanation, or spread. The alteration consists of creating spaces within the spell’s area or effect that are not subject to the spell. The minimum dimension for these spaces is a 5-foot cube. Furthermore, any shape-able spells have a minimum dimension of 5 feet instead of 10 feet. This ability costs one 3rd-level Spell Slot.</dd>
    <dt>Spell Power</dt> <dd>This ability increases your effective caster level by +1 (for purposes of determining level-dependent spell variables such as damage dice or range, and caster level checks only). This ability costs one 3rd-level Spell Slot.</dd>
    <dt>School Mastery</dt> <dd>You gain a Wizard School feat. You may take the Wizard School feat even though you already have the maximum number of allowed Wizard School feats. This ability costs one 1st-level Spell Slot.</dd>
    <dt>Metamagic Feat</dt> <dd>You gain 2 Spell Points and a Metamagic Feat. You may take this ability as many times as you wish. This ability costs one Cantrip Spell Slot.</dd>
    <dt>Spell-Like Ability</dt> <dd>
        <p>You can use one of your arcane spell slots (other than a slot expended to learn this or any other type of high arcana) to permanently prepare one of your arcane spells as a spell-like ability that can be used twice per day. The spell does not use any components when casting the spell, although a spell with an expensive material component cannot be selected. This ability costs one 3th-level Spell Slot.</p>
        <p>The spell-like ability normally uses a spell slot of the spell's level, although you can choose to make a spell modified by a metamagic feat into a spell-like ability at the appropriate spell level.</p>
        <p>You may use an available higher-level spell slot in order to use the spell-like ability more often. Using a slot three levels higher than the chosen spell allows you to use the spell-like ability four times per day, and a slot six levels higher lets you use it six times per day.</p>
        <p>If spell-like ability is selected more than one time, this ability can apply to the same spell chosen the first time (increasing the number of times per day it can be used) or to a different spell.</p>
    </dd>
</dl>";
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'arcane_spellcasting_class' => [1, 2, 3, 4, 5],
            'high_arcana'               => [1, 2, 3, 4, 5],
        ]);
    }
}
