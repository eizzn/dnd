<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassArcaneArcherSeeder extends Seeder
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
        $class->name          = 'Arcane Archer';
        $class->type          = 'Prestige';
        $class->key_attribute = 'DEX or INT';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Race'         => 'Elf or Half-Elf',
            'Skills'       => '5 or more ranks in Concentration',
            'Feats'        => 'Point-Blank Shot, Rapid Shot, Weapon Focus (Long Bow), Light Armor Caster',
            'Spellcasting' => 'Able to cast 1st level Arcane spells or 2nd level Ranger spells',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 4,
            'has_spells'     => 1,
        ], ['DEX', 'INT'], [
            'Arcane', 'Ranged',
        ]);

        $feature              = new Feature;
        $feature->key         = 'enhance_arrow';
        $feature->name        = 'Enhance Arrow';
        $feature->description = '<p>You can make any non-magical arrow you fire magical with an Action. Each time you gain this class feature, your non-magical arrows gain a +1 bonus to Hit and Damage. This magical bonus ends at the beginning of your next turn.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'imbue_arrow';
        $feature->name        = 'Imbue Arrow';
        $feature->description = "<p>You gain the ability to place touch spells, or spells with an area of effect upon an arrow with an Action. When the arrow is fired, the spell affects everyone where the arrow lands. This allows you to use the bow's range rather than the spell's range.</p>
<p>The arrow must be fired in the round it is imbued or the spell is wasted.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'seeker_arrow';
        $feature->name        = 'Seeker Arrow';
        $feature->description = '<p>You can launch an arrow to hit a target that you know is within range. As an Action, sacrifice a 1st level spell slot, until the beginning of your next turn, any arrow you fire ignores Cover and Concealment.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'phase_arrow';
        $feature->name        = 'Phase Arrow';
        $feature->description = '<p>You can launch an arrow that travels to the target in a straight path, passing through any nonmagical barrier or wall in its way. As an Action, sacrifice a 2nd level spell slot, until the beginning of your next turn, the next arrow you fire ignores Cover and Concealment and is made as a ranged touch attack.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'piercing_arrow';
        $feature->name        = 'Piercing Arrow';
        $feature->description = '<p>You can launch an arrow that deals extra damage. As an Action, sacrifice a 4th level spell slot, until the beginning of your next turn, add a +10 precision damage to the next arrow you shoot, then triple that damage.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'death_arrow';
        $feature->name        = 'Arrow of Death';
        $feature->description = "<p>You can create an arrow of death that forces the target, if damaged by the arrow's attack, to make a DC 20 CON Save. On a fail, it gains the Dying 1 condition.</p>
<p>It takes one day to make an Arrow of Death, and the arrow only functions for the creater. It costs 1,000 gp and causes 1 CON damage to create. You may have only one Death Arrow in existence at a time.</p>";
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'enhance_arrow'             => [1, 4, 8],
            'arcane_spellcasting_class' => [1, 3, 5, 7, 9],
            'class_group_feat'          => [2, 5, 8],
            'imbue_arrow'               => [2],
            'seeker_arrow'              => [4],
            'phase_arrow'               => [6],
            'piercing_arrow'            => [8],
            'death_arrow'               => [10],
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Chill Touch', 'Disrupt Undead', 'Light', 'Shocking Grasp'],
            1 => ['Burning Hands', 'Gust of Wind', 'Sleep'],
            2 => ['Blindness', 'Blur', "Cat's Grace", 'Darkness', 'Spider Climb'],
            3 => ['Fireball', 'Lightning', 'Slow', 'Stinking Cloud'],
            4 => ['Arcane Eye', 'Banishment'],
            5 => ['Baleful Polymorph'],
        ]);

        $helper->addFeatsToClass($class, [
            'Peerless Archer'          => 2,
            'Improved Peerless Archer' => 5,
            'Greater Peerless Archer'  => 9,
        ]);
    }
}
