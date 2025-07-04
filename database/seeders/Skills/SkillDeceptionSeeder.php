<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillDeceptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Deception';
        $skill->description    = '<p>You can trick and bamboozle others through disguises, lies, and other forms of subterfuge.</p>';
        $skill->attribute_id   = 6;
        $skill->untrained_uses = '<ul>
    <li>Create a Diversion (Activity)</li>
    <li>Impersonate (Activity)</li>
    <li>Lie (Activity)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Feint (Action)</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Create a Diversion';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = "<p>With a gesture, a trick, or some distracting words, you can create a diversion that draws creatures' attention elsewhere. If you use a gesture or trick, this action gains the Manipulate trait. If you use distracting words, it gains the auditory and lingual traits.</p>
<p>Attempt a single Deception check and compare it to the Perception DCs of the creatures whose attention you're attempting to divert. Whether you succeed or fail, creatures you attempt to affect gain a +4 circumstance bonus to their Perception DCs against your attempts to Create a Diversion for 1 minute.</p>";
        $subskill->success = 'You become merely sensed, rather than seen, with regard to each creature whose Perception DC your result meets or exceeds. This lasts until the end of your turn or until you act to do anything except Step or use the Hide Or Sneak actions of the Stealth skill. If you do anything else, your sensed condition ends just before you act. For instance, if you succeed at a Deception check, momentarily becoming sensed by a creature (rather than seen), and then attack that creature, it is not flat-footed against your attack.';
        $subskill->failure = "You don't divert the attention of any creatures whose Perception DC exceeds your result, and those creatures are aware you were trying to trick them.";
        $subskill->save();
        $subskill->types()->save(app()->types['Mental']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Impersonate';
        $subskill->skill_id    = $skill->id;
        $subskill->description = "<p>You try to fool someone with an untruth. Doing so takes at least 1 round, or longer if the lie is elaborate. You roll a single Deception check and compare it against the Perception DC of every creature you are trying to fool. The GM may modify this DC based on the situation and the nature of the lie you are tyring to tell. Elaborate or highly unbelievable lies are much harder to get a creature to believe than simpler and more believable lies, and some lies are so big it's impossible to get anyone to believe them.</p>
<p>At the GM's discretion, if a creature initially believes your lie, it might still be able to attempt a Perception check against your Deception DC (success on the creature's part gains the failure effect below) to realize it's a lie. This usually happens if the creature discovers enough evidence to counter your statements.</p>";
        $subskill->success          = 'The target believes your lie.';
        $subskill->failure          = "The target doesn't believe your lie and gains a +4 circumstance bonus to Perception checks against further attempts by you to Lie to it for the duration of your conversation. The target is alos more likely to be suspicious of you in the future.";
        $subskill->critical_failure = 'You fail to complete the item. You ruin 10% of the raw materials you supplied, but can salvage the rest.';
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Lingual']);
        $subskill->types()->save(app()->types['Mental']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Feint';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->requirements     = 'You are within melee reach of the target.';
        $subskill->description      = "<p>With misleading flourish, you leave an opponent unprepared for your real attack. You attempt a Deception check against that opponent's Perception DC.</p>";
        $subskill->success          = 'The target is flat-footed against the next melee attack that you attempt against it before the end of your current turn.';
        $subskill->critical_success = 'The target is flat-footed against all melee attacks you attempt against it until the end of your next turn.';
        $subskill->critical_failure = 'You are flat-footed against melee attacks the target attempts against you until the end of your next turn.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Mental']);
    }
}
