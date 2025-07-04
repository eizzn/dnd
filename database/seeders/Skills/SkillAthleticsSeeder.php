<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillAthleticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Athletics';
        $skill->description    = '<p>Training in Athletics is the result of conditioning that allows you to perform deeds of physical prowess.</p>';
        $skill->attribute_id   = 1;
        $skill->untrained_uses = '<ul>
    <li>Break Grapple (Action)</li>
    <li>Break Open (Action)</li>
    <li>Climb (Action)</li>
    <li>Grapple (Action)</li>
    <li>High Jump (Activity)</li>
    <li>Long Jump (Activity)</li>
    <li>Shove (Action)</li>
    <li>Swim (Action)</li>
    <li>Trip (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Disarm (Action)</li>
</ul>';
        $skill->armor_penalty = 1;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Break Grapple';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->description      = "<p>You attempt to break an opponent's Grapple with an Athletics check against that creature's Athletics DC.</p>";
        $subskill->success          = "You break free from your opponent's Grapple and remove the grabbed or restrained conditions you gained from it.";
        $subskill->critical_success = "You remove the grabbed or restrained condition you gained from the opponent's Grapple, and you can either knock the opponent prone or grab the opponent as if you succeeded at a Grapple against that creature. If you grab the opponent, this action gains the attack trait.";
        $subskill->critical_failure = "If you were grabbed, you become restrained. If you're already restrained, you can't attempt to Break a Grapple again until the start of your next turn.'";
        $subskill->critical_failure = "If you were grabbed, you become restrained. If you're already restrained, you can't attempt to Break a Grapple again until the start of your next turn.'";
        $subskill->save();

        $subskill                   = new SubSkill;
        $subskill->name             = 'Break Open';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->description      = '<p>Using your body, a lever, or some other tool, you attempt to forcefully open a door, window, or container; lift a heavy gate; or break open some kind of bonds restraining your mobility. With a high enough result, you can even smash through walls.</p>';
        $subskill->success          = 'You break the door, window, or container open, and the door, window, or container gains the broken condition.';
        $subskill->critical_success = 'You open the door, window, or container but can avoid damaging it in the process.';
        $subskill->failure          = 'Your attempt jams the door, window, or container shut, imposing a -2 circumstance penalty on all future attempts to open it.';
        $subskill->save();
        $subskill->types()->save(app()->types['Attack']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Climb';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->requirements     = 'You have both hands free.';
        $subskill->description      = '<p>You move up, down, or across an incline. Unless the climb is particularly easy, you must attempt an Athletcis check. The DC is determined by the GM based on the nature of the inlcine and any environmental circumstances. If you fail, the Grab Edge use of Acrobatcis might allow you to catch yourself. You are flat-footed while climbing unless you have a climb Speed.</p>';
        $subskill->success          = 'You move 5 feet up, down, or safely down the incline. If you Speed is 40 feet or greater, you move 10 feet instead.';
        $subskill->critical_success = 'You move half your Speed up, across or safely down the incline.';
        $subskill->critical_failure = 'You fall. If you began the climb on stable ground, you fall and land prone.';
        $subskill->save();
        $subskill->types()->save(app()->types['Move']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Grapple';
        $subskill->skill_id         = $skill->id;
        $subskill->requirements     = 'You have at least one free hand. Your target cannot be more than two sizes larger than you.';
        $subskill->description      = '<p>You attempt to grab an opponent. Grappling requires you to roll an Athletics check against the opponent\'s CON DC. This Action triggers Attacks of Opportunity from your opponent unless you have the Improved Grapple feat.</p>';
        $subskill->success          = 'Your opponent is grabbed until the end of your next turn unless you move or your opponent Escapes using Acrobatics or Breaks the Grapple with Athletics.';
        $subskill->critical_success = 'Your opponent is restrained until the end of your next turn unless you move or your opponent gets loose.';
        $subskill->failure          = 'You fail to grab your opponent. If you already had the opponent grabbed or restrained by way of a Grapple, those conditions on that creature end.';
        $subskill->critical_failure = 'If you already had the opponent grabbed or restrained, they get free. Your target can grab you as if they succeeded at the Grapple Action against you or force you to fall and land prone.';
        $subskill->save();
        $subskill->types()->save(app()->types['Attack']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'High Jump';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Double Action';
        $subskill->description      = '<p>You Stride, and if you move at least 10 feet, roll a DC 30 Athletics check in an attempt to Leap vertically. This DC might be increased or decreased due to the situation, as determined by the GM.</p>';
        $subskill->success          = 'You Leap, increasing the vertical distance to 5 feet.';
        $subskill->critical_success = 'You Leap, increasing your vertical distance to 8 feet or increasing your vertical distance to 5 feet and your horizontal distance to 10 feet.';
        $subskill->failure          = 'You Leap the maximum height allowed by the Leap action.';
        $subskill->critical_failure = 'Instead of Leaping, you fall prone in your space.';
        $subskill->save();
        $subskill->types()->save(app()->types['Move']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Long Jump';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Double Action';
        $subskill->description      = '<p>You Stride, and if you move at least 10 feet, roll an Athletics check in an attempt to Leap horizontally in the same direction. The DC of the check is equal to 5 plus the total distance in feet you\'re attempting to move during your Leap (so Leaping 20 feet would require a DC 25 check). You can\'t Leap farther than your Speed. This DC might be increased or decreased due to the situation, as determined by the GM.</p>';
        $subskill->success          = 'You Leap, increasing the distance you move horizontally to the desired distance.';
        $subskill->failure          = 'You Leap the maximum distance allowed by the Leap action.';
        $subskill->critical_failure = 'You Leap the maximum distance allowed by the Leap action, then fall prone.';
        $subskill->save();
        $subskill->types()->save(app()->types['Move']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Shove';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->requirements     = 'You have at least one hand free. The target can\'t be more than two sizes larger than you.';
        $subskill->description      = '<p>You push an opponent away from you. Attempt an Athletics check against your opponent\'s CON check.</p>';
        $subskill->success          = 'You push your opponent back 5 feet. You can move 5 feet in the same direction as your opponent. If you do, this Action gains the move trait.';
        $subskill->critical_success = 'You push your opponent up to 10 feet back. You can move 10 feet in the same direction as your opponent. If you do, this Action gains the move trait.';
        $subskill->critical_failure = 'You lose your balance, fall, and land prone.';
        $subskill->save();
        $subskill->types()->save(app()->types['Attack']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Swim';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>You use your arms and legs to swim through water. In most calm water, you succeed at the action without needing to attempt a check. If you must breathe air and you\'re submerged in water, you must hold your breath each round. If you fail to hold your breath, you begin to drown. If the water you are swimming in is turbulent or otherwise dangerous, you might have to attempt an Athletics check to Swim.</p>
<p>If you end your turn in the water and haven\'t succeeded at a Swim action that turn, you sink down 10 feet or float up 10 feet, as determined by the GM. However, if your last action on your turn was to enter the water, you don\'t sink or float that turn.</p>';
        $subskill->success          = 'You move 5 feet horizontally through the water. If your Speed is 15 feet or greater, you move 10 feet insteand, and if your Speed is 60 feet or greater, you move 15 feet instead. You can swim upward or downward, but doing so counts as moving through difficult terrain.';
        $subskill->critical_success = 'Per a success, but you can move an additional 5 feet.';
        $subskill->critical_failure = 'You make no progress, and this action counts as 2 actions holding your breath.';
        $subskill->save();
        $subskill->types()->save(app()->types['Move']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Trip';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->requirements     = 'You have at least one hand free. Your target can\'t be more than two sizes larger than you.';
        $subskill->description      = '<p>You try to knock an opponent to the ground. Attempt an Athletics check against the target\'s DEX check. This Action triggers Attacks of Opportunity from your opponent unless you have the Improved Trip or similar feat.</p>';
        $subskill->success          = 'The target falls prone.';
        $subskill->critical_success = 'The target falls prone and takes 1D6 Bludgeoning damage.';
        $subskill->critical_failure = 'You lose your balance and fall, and land prone.';
        $subskill->save();
        $subskill->types()->save(app()->types['Attack']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Disarm';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->requirements     = 'You have at least one hand free. The target can\'t be more than two sizes larger than you.';
        $subskill->description      = '<p>You try to knock something out of an opponent\'s grasp. A Disarm attack requires you to roll an Athletcis check against the opponent\'s DEX check. This Action triggers Attacks of Opportunity from your opponent unless you have the Improved Disarm feat.</p>';
        $subskill->success          = 'You weakien your opponent\'s grasp on the item. Until the start of that creature\'s turn, attempts to Disarm the opponent of that item get a +2 circumstance bonus.';
        $subskill->critical_success = 'You knock the item out of the opponent\'s grasp. It falls to the ground in the opponent\'s space.';
        $subskill->critical_failure = 'You lose your balance and become flat-footed until the start of your next turn.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Attack']);
    }
}
