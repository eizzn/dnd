<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillIntimidationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Intimidation';
        $skill->description    = '<p>You bend others to your will through threats.</p>';
        $skill->attribute_id   = 6;
        $skill->untrained_uses = '<ul>
    <li>Demoralize (Action)</li>
    <li>Coerce (Activity)</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Coerce';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = "<p>With threats either veiled or overt, you attempt to intimidate a creature into doing what you want. You must spend at least 1 minute of conversation with a creature you can see and who can either see or sense you. At the end of the conversation, you attempt an Intimidation check against the target's DEX DC, modified by the circumstances at the GM's discretion.</p>";
        $subskill->success          = "The target gives you the information you seek or agrees to follow your directions so long as they aren't likely to harm the target in any way. The target continues to comply for an amount of time determined by the GM but not exceeding 1 day, at which point the target becomes unfriendly (if it wasn't already unfriendly or hostile) and might act against you, including reporting you to the authorities.";
        $subskill->critical_success = 'Per a success, but even afterwards, the target is too scared of you to retaliate against you.';
        $subskill->failure          = "The target doesn't do what you say, and if it was not already unfriendly or hostile, it becomes unfriendly.";
        $subskill->critical_failure = "The target doesn't attempt the request, becomes hostile if it wasn't already, and can't be coerced by you for at least 1 week.";
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Emotion']);
        $subskill->types()->save(app()->types['Lingual']);
        $subskill->types()->save(app()->types['Mental']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Demoralize';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = "<p>With a sudden shout, a well-timed taunt, or a cutting put-down, you can shake an enemy's resolve. Choose a creature within 30 feet of you who can sense or see you. Attempt an Intimidation check against that target's DEX DC. If the target does not understand the language you are speaking, you're not speaking a language, or they can't hear you, you take a -4 circumstance penalty to the check and demoralize loses the lingual trait.</p>";
        $subskill->success          = 'The target becomes frightened 1.';
        $subskill->critical_success = 'The target becomes frightened 2 and is fleeing until the end of its next turn.';
        $subskill->critical_failure = "You can't attempt to demoralize the target again for 10 minutes.";
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Emotion']);
        $subskill->types()->save(app()->types['Lingual']);
        $subskill->types()->save(app()->types['Mental']);
    }
}
