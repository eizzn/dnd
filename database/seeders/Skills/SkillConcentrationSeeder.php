<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillConcentrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Concentration';
        $skill->description    = '<p>You are particularly good at focusing your mind</p>';
        $skill->attribute_id   = 5;
        $skill->untrained_uses = '<ul>
    <li>Maintain Spell Concentration (Reaction)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Focus Mind (Action)</li>
</ul>';
        $skill->armor_penalty = 1;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Focus Mind';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Triple Action';
        $subskill->description = '<p>Merely holding a reservoir of Power Points in mind gives Psionic Characters a special energy. Psionic characters can put that energy to work without actually paying a Power Point cost. You can become Psionically Focused as a special use of the Concentration skill.</p>
<p>If you have 1 or more Power Points available, you can meditate to attempt to become Psionically Focused. The DC to become Psionically Focused is 20. Meditating is Triple Action that provokes Attacks of Opportunity. When you are Psionically Focused you gain the following.</p>
<ul>
    <li>Your Psionic Powers cost 1 Power Point less to manifest.</li>
    <li>You gain a +1 bonus to INT and WIS checks.</li>
    <li>You gain a +1 bonus to Perception checks</li>
    <li>You gain Advantage on checks to manifest a Power Defensively</li>
    <li>You may Expend your Psionically Focus on any single Concentration check you make, instead of rolling, assume your rolled a 13.</li>
</ul>
<p>Once you are Psionically Focused, you remain Focused until you Expend your Focus, become Unconscious, or go to sleep (or enter a meditative trance, in the case of elans), or until your Power Point reserve drops to 0.</p>';
        $subskill->success          = 'You become Psionically Focused';
        $subskill->failure          = 'You fail to become Psionically Focused';
        $subskill->critical_failure = 'You cannot try to focus your mind again for 1 minute.';
        $subskill->save();
        $subskill->types()->save(app()->types['Mental']);
        $subskill->types()->save(app()->types['Psionic']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Maintain Spell Concentration';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Reaction';
        $subskill->trigger     = 'You take damage while your are concentrating on a spell.';
        $subskill->description = '<p>While Concentrating on a Spell or Power, if you take damage, you can Maintain your Concentration on the Spell or Power.</p>';
        $subskill->success     = 'You maintain your concentration on the spell.';
        $subskill->failure     = 'The spell you were concentrating on ends.';
        $subskill->save();
        $subskill->types()->save(app()->types['Mental']);
    }
}
