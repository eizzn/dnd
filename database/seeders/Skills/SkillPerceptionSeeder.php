<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillPerceptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill              = new Skill;
        $skill->name        = 'Perception';
        $skill->description = '<p>Perception measures your ability to be aware of your environment. Every creature has Perception, which works with and is limited by a creature`s senses. Whenever you need to attempt a check based on your awareness, you`ll attempt a Perception check. Your Perception uses your WIS modifier, so you`ll use the following formula when attempting a Perception check.<br>
<blockquote>
Perception check result = D20 roll + WIS modifier + proficiency bonus + other bonuses + penalties
</blockquote>
    Nearly all creatures are at least trained in Perception, so you will almost always add a proficiency bonus to your Perception modifier. You might add a circumstance bonus for advantageous situations or environments, and typically get status bonus from spells or other magical effects. Items can also grant you a bonus to Perception, typically in a certain situation.
</p>';
        $skill->attribute_id   = 5;
        $skill->untrained_uses = '<ul>
    <li>Appraise (Action)</li>
    <li>Initiative (Action)</li>
    <li>Search (Action)</li>
</ul>';
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Appraise';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>You are able to accurately estimate the approximate cost of jewels, gems and works of precious metals.</p>';
        $subskill->save();

        $subskill              = new SubSkill;
        $subskill->name        = 'Initiative';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>Roll a Perception roll to determine your place in initiative order.</p>';
        $subskill->save();

        $subskill              = new SubSkill;
        $subskill->name        = 'Search';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Triple Action';
        $subskill->description = '<p>You can find secret doors, simple traps, hidden compartments, and other details not readily apparent. The Search (Spot) skill lets you notice something, such as a hiding rogue. The Search skill lets a character discern some small detail or irregularity through active effort. Search does not allow you to find complex traps.</p>
<p>You generally must be within 10 feet of the object or surface to be searched. The table below gives DCs for typical tasks involving the Search Skill.</p>
<table>
    <thead>
        <tr>
            <th>Task</th>
            <th>Search DC</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ransack a chest full of junk to find a certain item</td>
            <td>10</td>
        </tr>
        <tr>
            <td>Notice a typical secret door or a simple trap</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Notice a well hidden secret door</td>
            <td>30</td>
        </tr>
    </tbody>
</table>';
        $subskill->save();
    }
}
