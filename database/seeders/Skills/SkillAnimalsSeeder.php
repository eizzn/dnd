<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillAnimalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Animal Handling';
        $skill->description    = '<p>You are trained in handling, training, and riding animals</p>';
        $skill->attribute_id   = 5;
        $skill->untrained_uses = '<ul>
    <li>Command an Animal (Action)</li>
    <li>Handle an Animal (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Ride an Animal (Action)</li>
    <li>Train an Animal (Activity)<li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Command an Animal';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>You issue an order to an animal that’s obeying Concentrate you, either because you previously used Handle an Animal successfully (see below) or you have the Ride feat. Most animals know the Leap, Seek, Stand, Stride, and Strike basic actions. If an animal knows an activity, such as a horse’s Gallop, you can command the animal to perform the activity, but you must spend as many Command an Animal actions as the activity’s number of actions. The animal uses the action you command.</p>
<p>Most animals understand only the simplest instructions, so you might be able to instruct your animal to move to a certain square but not dictate a specific path to get there, or command it to attack a certain creature but not to make its attack nonlethal. The GM decides the specifics of the action your animal uses.</p>';
        $subskill->success          = 'The animal does as you command on its next turn';
        $subskill->failure          = 'The animal is hesitant or resistant, and it does nothing';
        $subskill->critical_failure = 'The animal misbehaves or misunderstands, and it takes some other Action determined by the GM';
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Handle an Animal';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>You prepare a helpful animal to accept your commands. If you are trained in Nature, you can use Handle an Animal on a friendly or indifferent animal as well.</p>';
        $subskill->success     = 'Until the end of your turn, you can use the Command the Animal action to direct the animal. You can Mount the animal.';
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Ride an Animal';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Varies';
        $subskill->description = '<p>You attempt an Action while mounted. If you attempt to ride a creature that is ill suited as a mount, you take a -5 penalty on your Ride check.</p>
<table>
    <thead>
        <tr>
            <th>Task</th>
            <th>DC</th>
            <th>Action Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Guide with knees</td>
            <td>5</td>
            <td>Action</td>
            <td>You guide your mount with your knees so that you can use both hands in combat. Make your Ride check at the start of your turn. If you fail, you can use only one hand this round because you need to use the other to control your mount.</td>
        </tr>
        <tr>
            <td>Stay in saddle</td>
            <td>5</td>
            <td>Reaction</td>
            <td>You can try to avoid falling when your mount rears or bolts unexpectedly or when you take damage.</td>
        </tr>
        <tr>
            <td>Fight with Warhorse</td>
            <td>10</td>
            <td>Action</td>
            <td>You can direct your war-trained mount to attack in battle this round.</td>
        </tr>
        <tr>
            <td>Cover</td>
            <td>15</td>
            <td>Action</td>
            <td>You can drop down and hang alongside your mount, using it as cover. You can\'t take Attack or Spell casting Actions. You have to use another Action to stop using your mount as cover.</td>
        </tr>
        <tr>
            <td>Soft Fall</td>
            <td>15</td>
            <td>Reaction</td>
            <td>You can try to take no damage when you rall off a mount, when it is killed or when it falls, for example. If you fail your check, you take 1D6 points of falling damage.</td>
        </tr>
        <tr>
            <td>Leap</td>
            <td>15</td>
            <td>Action</td>
            <td>You can get your mount to leap obstacles as part of its movement. Use your skill modifier or the mount\'s Athletcis (Jump) check, whichever is better, to see how far the mount jumps. If you fail your check, you fall off the mount when it leaps and take the appropriate falling damage.</td>
        </tr>
        <tr>
            <td>Spur Mount</td>
            <td>15</td>
            <td>Action</td>
            <td>
                <p>You can spur your mount to greater speed. A successful check increases the mount\'s speed by 10 feet for 1 round but deals 1 point of damage to the mount.</p>
                <p>You can use this ability every round, but each consecutive round of additional speed deals twice as much damage to the mount as the previous round.</p>
            </td>
        </tr>
        <tr>
            <td>Fast Mount/Dismount</td>
            <td>20</td>
            <td>Action</td>
            <td>
                <p>You can attempt to mount or dismount from a mount of up to one size category larger than yourself. If you succeed, the Action used for this skill is refunded back to you.</p>
                <p>You can\'t fast mount/dismount from a mount more than one size category larger than you.</p>
                <ul>
                    <li>If the mount is bareback, you take a -5 penalty to your check</li>
                    <li>If your mount has a military saddle, you get a +2 circumstance bonus to your check</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>';
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Train an Animal';
        $subskill->skill_id    = $skill->id;
        $subskill->description = '<p>You can teach an animal a specific trick with one week of work and a successful check against the indicated DC. An animal with an INT score of 1 can learn a maximum of three tricks, while an animal with an INT score of 2 can learn a maximum of six tricks. Possible tricks (and their associated DCs) include, but are not necessarily limited to, the following.</p>
<table>
    <thead>
        <tr>
            <th>Task</th>
            <th>DC</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Attack</td>
            <td>20</td>
            <td>The animal attacks apparent enemies. You may point to a particular creature that you wish the animal to attack, and it will comply if able. Normally, an animal will attack only humanoids, monstrous humanoids, giants, or other animals. Teaching an animal to attack all creatures (including such unnatural creatures as undead and aberrations) counts as two tricks.</td>
        </tr>
        <tr>
            <td>Come</td>
            <td>15</td>
            <td>The animal comes to you, even if it normally would not do so.</td>
        </tr>
        <tr>
            <td>Defend</td>
            <td>20</td>
            <td>The animal defends you (or is ready to defend you if no threat is present), even without any command being given. Alternatively, you can command the animal to defend a specific other character.</td>
        </tr>
        <tr>
            <td>Down</td>
            <td>15</td>
            <td>The animal breaks off from combat or otherwise backs down. An animal that doesn’t know this trick continues to fight until it must flee (due to injury, a fear effect, or the like) or its opponent is defeated.</td>
        </tr>
        <tr>
            <td>Fetch</td>
            <td>15</td>
            <td>The animal goes and gets something. If you do not point out a specific item, the animal fetches some random object.</td>
        </tr>
        <tr>
            <td>Guard</td>
            <td>20</td>
            <td>The animal stays in place and prevents others from approaching.</td>
        </tr>
        <tr>
            <td>Heel</td>
            <td>15</td>
            <td>The animal follows you closely, even to places where it normally wouldn’t go.</td>
        </tr>
        <tr>
            <td>Perform</td>
            <td>15</td>
            <td>The animal performs a variety of simple tricks, such as sitting up, rolling over, roaring or barking, and so on.</td>
        </tr>
        <tr>
            <td>Seek</td>
            <td>15</td>
            <td>The animal moves into an area and looks around for anything that is obviously alive or animate.</td>
        </tr>
        <tr>
            <td>Stay</td>
            <td>15</td>
            <td>The animal stays in place, waiting for you to return. It does not challenge other creatures that come by, though it still defends itself if it needs to.</td>
        </tr>
        <tr>
            <td>Track</td>
            <td>20</td>
            <td>The animal tracks the scent presented to it. (This requires the animal to have the scent ability)</td>
        </tr>
        <tr>
            <td>Work</td>
            <td>15</td>
            <td>The animal pulls or pushes a medium or heavy load.</td>
        </tr>
    </tbody>
</table>';
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Manipulate']);
    }
}
