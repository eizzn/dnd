<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillDiplomacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill               = new Skill;
        $skill->name         = 'Diplomacy';
        $skill->description  = '<p>You influence others through negotiation and flattery.</p>';
        $skill->attribute_id = 6;
        $skill->trained_uses = '<ul>
    <li>Bon Mot (Action)</li>
</ul>';
        $skill->untrained_uses = '<ul>
    <li>Gather Information (Activity)</li>
    <li>Make an Impression (Activity)</li>
    <li>Persuasion (Action)</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Bon Mat';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = "<p>You launch an insightful quip at a foe, distracting them. Choose a foe within 30 feet and roll a Diplomacy check against the target's WIS DC.</p>";
        $subskill->critical_success = 'The target is distracted and takes a –3 status penalty to Perception and WIS Saves for 1 minute. The target can end the effect early with a retort to your Bon Mot. This can either be a single Action that has the Concentrate trait or an appropriate skill Action to frame their retort. The GM determines which skill actions qualify, though they must take at least 1 action. Typically, the retort needs to use a linguistic CHA-based skill action.';
        $subskill->success          = 'As critical success, but the penalty is –2.';
        $subskill->failure          = 'No effect';
        $subskill->critical_failure = 'Your quip is atrocious. You take the same penalty an enemy would take had you succeeded. This ends after 1 minute or if you issue another Bon Mot and succeed.';
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Emotion']);
        $subskill->types()->save(app()->types['Lingual']);
        $subskill->types()->save(app()->types['Mental']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Gather Information';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>You canvass local markets, taverns, and gathering places in an attempt to learn about a specific individual or topic. The GM determines the DC of the check and the amount of time it takes (typically if you spend an entire day of downtime to Gather Information, you can attempt three or four checks), along with any benefits you might be able to gain by spending coin on bribes, drinks, or gifts.</p>';
        $subskill->success          = 'You collect information about the individual or topic. The GM determines the specifics.';
        $subskill->critical_failure = 'You collect incorrect information about the individual or topic.';
        $subskill->save();
        $subskill->types()->save(app()->types['Downtime']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Make an Impression';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = "<p>With at least 1 minute of conversation consisting of charismatic overtures, flattery, and other acts of goodwill, you seek to mak a good impression on someone to make them temporarily agreeable. At the end of the conversation, attempt a Diplomacy check against the target's WIS DC, modified by any circumstances the GM sees fit. Good impressions (or bad impressions, on a critical failure) last for only the current social encounter unless the GM decides otherwise. The attitudes are listed in the Conditions section. The attempt fails if the target can't understand you.</p>";
        $subskill->success          = "The target's attitude toward you improves by one step (from hostile to unfriendly, from unfriendly to indifferent, from indifferent to friendly, or from friendly to helpful).";
        $subskill->critical_success = "The target's attitude toward you improves by two steps (from hostile to indifferent, from unfriendly to friendly, or from indifferent or friendly to helpful).";
        $subskill->failure          = "The target's attitude toward you decreases by one step (from helpful to friendly, from friendly to indifferent, from indifferent to unfriendly, from unfriendly to hostile).";
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Lingual']);
        $subskill->types()->save(app()->types['Mental']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Request';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->description      = "<p>You can make a request of a creature that's friendly or helpful to you. You must couch the request in terms that the target would accept given their current attitude toward you. The GM sets the DC based on the difficulty of the request. Some requests are unsavory or impossible, and even a helpful NPC would never agree to them.</p>";
        $subskill->success          = 'The target agrees to your request, but might demand added provisions or alterations to the request.';
        $subskill->critical_success = 'The target agrees to your request without qualifications, or agrees to a request that would ordinarily require it to have an attitude one step better toward you.';
        $subskill->failure          = 'The target refuses the request, though they might propose an alternative that is less extreme.';
        $subskill->critical_failure = 'Not only does the target refuse the request, but their attitude toward you also decreases by one step due to the temerity of the request.';
        $subskill->save();
        $subskill->types()->save(app()->types['Auditory']);
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Lingual']);
        $subskill->types()->save(app()->types['Mental']);
    }
}
