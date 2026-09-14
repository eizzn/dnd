<?php

namespace Database\Seeders\Talents;

use App\Models\Feat;
use App\Models\Talent;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PsionicTalentsSeeder extends Seeder
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

        $talent              = new Talent;
        $talent->name        = 'Catfall';
        $talent->action_type = 'Action';
        $talent->description = '<p>You recover instantly from a fall and can absorb some damage from falling.</p>
<ul>
    <li>You gain Damage Resistance to Falling damage</li>
    <li>Adjust the Falling damage as if you had fallen 20 feet shorter.</li>
    <li>If you are Psionically Focused, then adjust the Falling damage as if you had fallen 50 feet shorter</li>
    <li>If you expend your Psionic Focus, then adjust the Falling damage as if you had fallen 100 feet shorter</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Swift Invisibility';
        $talent->requirement = 'You must have the Chameleon Psychometabolism power';
        $talent->action_type = 'Free';
        $talent->description = '<p>As part of using this Talent, spend 1 Power Point. You become invisible until the end of this current turn cycle. You do not become visible for Attacking, Casting Spells or Manifesting Powers.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 2, 'Psychometabolism', 'Psionic']);

        $talent              = new Talent;
        $talent->name        = 'Clinging Shadow Strike';
        $talent->action_type = 'Action';
        $talent->description = '<p>You make a single melee attack and spend 1 Power Point. If it hits, you deal an extra 1D6 Damage, and the target must make a CON Save (DC 11 + your WIS modifier) or suffer a 20% Miss Chance on all Melee and Ranged attacks for 1 round. A successful save negates the Miss Chance, but not the extra damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Sanctify Ki Strike';
        $talent->description = '<p>Your Unarmed Strikes deal an additional 1 point of damage against Evil creatures or Evil Outsiders and Evil Undead. In addition, your Unarmed Strikes over any Natural Damage Reduction of Evil Outsiders and Evil Undead.</p>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Talent' => 3]);
        $talent->feats()->save(Feat::where('name', 'Improved Unarmed Strike')->first());

        $talent              = new Talent;
        $talent->name        = 'Easy Focused Mind';
        $talent->description = '<p>You gain a +1 bonus to your Concentration checks to become Psionically Focused</p>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psionic Focus', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Improved Easy Focused Mind';
        $talent->description = '<ul>
    <li>You gain a +1 bonus to Concentration checks to Maintain a Power</li>
    <li>You gain an Additional +1 bonus to your Concentration checks to become Psionically Focused</li>
</ul>';
        $talent->parent_id = Talent::where('name', 'Easy Focused Mind')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psionic Focus', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Greater Easy Focused Mind';
        $talent->parent_id   = Talent::where('name', 'Improved Easy Focused Mind')->first()->id;
        $talent->description = '<ul>
    <li>You gain an Additional +1 bonus to Concentration checks to Maintain a Power</li>
    <li>You gain an Additional +1 bonus to your Concentration checks to become Psionically Focused</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psionic Focus', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Improved Flurry of Blows';
        $talent->requirement = 'You must have the Flurry of Blows Class Feature';
        $talent->description = '<ul>
    <li>You may spend 3 Power Points to gain the benefits of the Improved Two-Weapon Fighter Feat along with the Two-Weapon Fighter Feat when using Flurry of Blows.</li>
    <li>If at some point you gain the Improved Two-Weapon Fighter Feat, then you may choose to replace this Talent with the Greater Flurry of Blows Talent.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Greater Flurry of Blows';
        $talent->requirement = 'You must have the Flurry of Blows Class Feature';
        $talent->description = '<ul>
    <li>You may spend 5 Power Points to gain the benefits of the Greater Two-Weapon Fighter Feat instead of the Two-Weapon Fighter Feat when using Flurry of Blows.</li>
    <li>If at some point you gain the Greater Two-Weapon Fighter Feat, then you may choose to replace this Talent with any other Talent that you qualify for.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Talent' => 12]);

        $talent              = new Talent;
        $talent->name        = 'Fist of the Heavens';
        $talent->description = '<p>The Save DC of your Stunning Fist increases by 2 when you use it against an Evil Creature. If the Stunning attack succeeds, the creature is staggered for 1 round following the round it is stunned.</p>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Talent' => 5]);
        $talent->attributes()->save(app()->attributes['WIS'], ['dc' => 15]);
        $talent->feats()->save(Feat::where('name', 'Stunning Fist')->first());

        $talent              = new Talent;
        $talent->name        = 'Knockback Strike';
        $talent->action_type = 'Double Action';
        $talent->description = '<p>You focus your strength into a blow powerful enough to push an enemy away from you.</p>
<p>Make an Unarmed Strike. If you hit, attempt an Athletics check to Shove the target.</p>
<p>You may Expend your Psionic Focus to make this attack with a single Action with a +7 bonus to your Athletics check and increase the push distance by 10 feet.</p>';
        $helper->addTypesToSimpleObject($talent, ['Concentrate', 'Psionic', 'Talent' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Improved Knockback';
        $talent->description = '<p>When you successfully Shove a creature, increase both the distance you can push the creature and the distance you can move to follow along with the target by 5 feet on a Success or 10 feet on a Critical Success.</p>
<p>If you push the target into an obstacle, it takes Bludgeoning damage equal to 6 plus your STR modifier, or 8 plus your STR modifier if you have at least 15 ranks in Athletics.</p>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Talent' => 12]);

        $talent              = new Talent;
        $talent->name        = 'Scent, Psionic';
        $talent->requirement = 'You must have the Body Adjustment Psychometabolism power';
        $talent->description = '<p>While you are Psionically Focused, you gain the Scent ability</p>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psychometabolism', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Mental Leap';
        $talent->description = '<p>You gain the following</p>
<ul>
    <li>You gain a +5 bonus to Athletics checks made to Jump.</li>
    <li>If you are Psionically Focused, then the bonus becomes +7 instead.</li>
    <li>If you expend your Psionic Focus, then the bonus becomes +15</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Move', 'Psionic', 'Psionic Focus', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Mental Strength';
        $talent->description = '<p>You gain the following</p>
<ul>
    <li>You gain a +5 bonus to Athletics checks to pure physical strength (for example: lifting or pulling something heavy). This bonus does not apply to Saves. Note, this Talent should not overlap with Mental Leap.</li>
    <li>If you are Psionically Focused, then the bonus becomes +7 instead.</li>
    <li>If you expend your Psionic Focus, then you gain a +4 bonus to your STR for 2 rounds, and you gain +10 bonus to your Athletics checks for the duration.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psionic Focus', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Mental Dexterity';
        $talent->description = '<p>You gain the following</p>
<ul>
    <li>You gain a +5 bonus to Athletics checks to manual dexterity or agility (for example: keeping your balance or performing somersaults). This bonus does not apply to Saves.</li>
    <li>If you are Psionically Focused, then the bonus becomes +7 instead.</li>
    <li>If you expend your Psionic Focus, then you gain a +4 bonus to your DEX for 2 rounds, and you gain a +10 bonus to your Athletics checks for the duration.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psionic Focus', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Mental Constitution';
        $talent->description = '<p>You gain the following</p>
<ul>
    <li>You gain a +5 bonus to Athletics checks for feats of endurance (for example: holding your breath or Death Checks). This bonus does not apply to Saves.</li>
    <li>If you are Psionically Focused, then the bonus becomes +7 instead.</li>
    <li>If you expend your Psionic Focus, then you gain a +4 bonus to your CON for 2 rounds, and you gain a +10 bonus to your Athletics checks for the duration.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psionic Focus', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Powered Manifestation';
        $talent->description = '<p>As an Action, you may Expend your Psionic Focus. If you do, the next Power you Manifest costs 5 Power Points less (to a minimum of 1 Power Point).</p>';
        $helper->addTypesToSimpleObject($talent, ['Metapsionic', 'Psionic', 'Psionic Focus', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Psionic Combat Power';
        $talent->description = '<p>You may select a Psionic Combat Power and add it to your list of known Powers.</p>
<p>You may take this Talent up to 5 times.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 3, 'Psionic Combat']);

        $talent              = new Talent;
        $talent->name        = 'Quick Focused Mind';
        $talent->description = '<p>Becoming Psionically Focused requires one less Action.</p>
<p>You may take this Talent up to three times.</p>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psionic Focus', 'Talent' => 8]);
        $talent->feats()->save(app()->feats['Focused Mind']);

        $talent              = new Talent;
        $talent->name        = 'Quick Stand';
        $talent->action_type = 'Free';
        $talent->description = '<p>You gain the following</p>
<ul>
    <li>When you get up from Prone, it is a Free Action instead of an Action.</li>
    <li>If you are Psionically Focused, then you may move up to 5 feet as part of getting up from Prone. This movement does not provoke Attacks of Opportunity.</li>
    <li>If you expend your Psionic Focus, then you may move up to 10 feet and make a one Action Unarmed Strike, before or after your movement. This movement does not provoke Attacks of Opportunity.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Speed of Thought';
        $talent->description = '<p>You gain the following</p>
<ul>
    <li>You gain a +5 bonus to your Speed</li>
    <li>If you are Psionically Focused, your Speed is +10 instead</li>
    <li>If you expend your Psionic Focus, your Speed is +20 until the beginning of your next turn.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Move', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Turtle Skin';
        $talent->description = '<ul>
    <li>While you are Psionically Focused, your gain an Additional Damage Reduction of +1</li>
    <li>If you expend your Psionic Focus, you gain an Additional Damage Reduction of +10 until the beginning of your next turn.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Psionic Focus', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Up the Walls';
        $talent->description = '<p>While you are psionically focused, you can take part or all of a Stride Action on vertical surfaces. If you end your Stride Action still on a vertical surface, you must use another Stride Action or fall prone, talking falling damage. Treat the horizontal surface as a normal floor for the purpose of measuring your movement.</p>
<p>You can take other Move Actions in conjunction with this feat, including tumbling to avoid Attacks of Opportunity.</p>';
        $helper->addTypesToSimpleObject($talent, ['Move', 'Psionic', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Spider Stance';
        $talent->parent_id   = Talent::where('name', 'Up the Walls')->first()->id;
        $talent->description = '<p>While you are psionically focused, you gain the benefits of a Spider Climb spell.</p>';
        $helper->addTypesToSimpleObject($talent, ['Move', 'Psionic', 'Talent' => 9]);
    }
}
