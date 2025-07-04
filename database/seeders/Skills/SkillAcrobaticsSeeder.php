<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SkillAcrobaticsSeeder extends Seeder
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

        $skill                 = new Skill;
        $skill->name           = 'Acrobatics';
        $skill->description    = '<p>Acrobatics measures your ability to perform physical feats that require balance, coordination, and grace.</p>';
        $skill->attribute_id   = 2;
        $skill->untrained_uses = '<ul>
    <li>Balace (Action)</li>
    <li>Escape (Action)</li>
    <li>Grab Edge (Reaction)</li>
    <li>Maintain Balance (Free Action)</li>
    <li>Squeeze (Activity)</li>
    <li>Tumble Through (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Maneuver in Flight (Action)</li>
</ul>';
        $skill->armor_penalty = 1;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Balance';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->description      = '<p>You can move across a narrow surface or uneven ground by attempting an Acrobatics check against the DC of the narrow surface or uneven ground. You start this action while in a square that contains a narrow surface, uneven ground, or another similar feature. You are always flat-footed while on a narrow surface or uneven ground.</p>';
        $subskill->success          = 'You move up to your Speed across the narrow surface or uneven ground, treating it as difficult terrain.';
        $subskill->critical_success = 'You move up to your Speed across the narrow surface or uneven ground, treating it as normal terrain.';
        $subskill->failure          = 'You must stay stationary (wasting the action) or you fall. If you fall, your turn ends.';
        $subskill->critical_failure = 'You fall, and your turn ends.';
        $helper->addTypesToSimpleObject($subskill, ['Move']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Escape';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->description      = "<p>When trying to escape from restraints or a creature's Grapple, attempt an Acrobatics check. If you're tied up by a creature, the escape DC is that creature's Thievery DC. If you're restrained by manacles or some other device, the DC is based on the type of restraint. Against a Grapple, the escape DC is the Grappling creature's Athletics DC.</p>";
        $subskill->success          = 'You escape from the restraints or the Grapple, losing the grabbed or restrained condition.';
        $subskill->critical_success = 'Per a success, and you can move up to 5 feet. If you move, this action gains the move trait.';
        $subskill->failure          = "You don't escape, and you take a -2 circumstance penalty to Acrobatics checks to Escape until the end of your current turn.";
        $subskill->save();

        $subskill                   = new SubSkill;
        $subskill->name             = 'Grab Edge';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Reaction';
        $subskill->trigger          = 'You fall from or past an edge or handhold';
        $subskill->requirements     = 'You hands are not tied behind your back or otherwise restrained.';
        $subskill->description      = '<p>When you fall off an edge or past an edge or some other form of handhold, you can use this reaction in an attempt to grab it, potentially stopping your fall. If you grab on, you can then Climb up using Athletics.</p>';
        $subskill->success          = 'If you have at least one hand free, you grab on to the edge or the handhold, stopping your fall. You still take damage from the distance fallen so far, but you treat the fall as though you had fallen 20 feet fewer. If you have no hands free, you continue to fall as if you had failed the check.';
        $subskill->critical_success = 'You grab on to the edge or the handhold, whether or not you have a hand free, typically by using a suitable held item to catch yourself (catching a battle axe on a ledge, for example). You still take damage from the distance fallen so far, but you treat the fall as though you had fallen 30 feet fewer.';
        $subskill->critical_failure = "You continue to fall, and if you've fallen 20 feet or more before you use the reaction, you take 10 bludgeoning damage from the impact for every 20 feet fallen.";
        $helper->addTypesToSimpleObject($subskill, ['Manipulate']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Maintain Balance';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Reaction';
        $subskill->trigger          = 'You take damage while standing on a narrow surface or uneven ground or otherwise have your balanced tested, as determined by the GM.';
        $subskill->description      = '<p>You try to keep balance to avoid falling.</p>';
        $subskill->success          = 'You keep your balance.';
        $subskill->critical_success = "You keep your balance and don't need to attempt further checks to Maintain Balance this round.";
        $subskill->failure          = 'You fall.';
        $subskill->save();

        $subskill                   = new SubSkill;
        $subskill->name             = 'Squeeze';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>You attempt to squeeze through a small space by contorting your body to fit through.</p>';
        $subskill->success          = 'You squeeze through the tight space in 1 minute per 5 feet of squeezing.';
        $subskill->critical_success = 'You squeeze through the tight space in 10 feet of squeezing.';
        $subskill->critical_failure = 'You become stuck in the tight space. While you\'re, you can spend 1 minute attempting another Acrobatics check at the same DC. Any result other than a critical failure causes you to become unstuck.';
        $helper->addTypesToSimpleObject($subskill, ['Move']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Tumble Through';
        $subskill->skill_id    = $skill->id;
        $subskill->description = "<p>You Stride up to your Speed. During this movement, you can try to move through the space of one enemy. Attempt an Acrobatics check against the enemy's DEX DC as soon as you try to enter its space. You can Tumble Through using Climb, Fly, Swim, or another movement type in the appropriate environment.</p>";
        $subskill->success     = "You move through the enemy's space, treating the squares in its space as difficult terrain. If you don't have enough Speed to move all the way through its space, you ge the same effect as on a failure.";
        $subskill->failure     = 'Your movement ends, and you trigger reactions (such as Attacks of Opportunity) as if you had moved out of the square you started in.';
        $helper->addTypesToSimpleObject($subskill, ['Move']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Maneuver in Flight';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>If you have a fly Speed and you must conduct a difficult maneuver while flying, attempt an Acrobatics check.</p>';
        $subskill->success          = 'You succeed at the maneuver.';
        $subskill->critical_success = 'You succeed at the maneuver and gain a +2 circumstance bonus to your checks to Maneuver in Flight until the end of your next turn.';
        $subskill->failure          = "Your maneuver fails, and the GM chooses whether you simply can't move or some other detrimental effect happens. This consequence should be appropriate for the maneuver you attempted (for instance, being blown off course if you were trying to fly against a strong wind).";
        $subskill->trained_only     = 1;
        $helper->addTypesToSimpleObject($subskill, ['Move']);
    }
}
