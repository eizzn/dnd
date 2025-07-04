<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillSocietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Society';
        $skill->description    = '<p>You understand the people and systems that make civilization run, and you know the historical events that make societies what they are today. Further, you can use that knowledge to navigate the twisted workings of settlements, whether they’re physical, societal, or economic.</p>';
        $skill->attribute_id   = 4;
        $skill->untrained_uses = '<ul>
    <li>Recall Knowledge (Action)</li>
    <li>Subsist on the Streets (Activity)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Create Forgery (Activity)</li>
    <li>Decipher Writing (Activity)</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Recall Knowledge';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>You can use Society to remember a bit of knowledge Secret regarding local history, important personalities, and legal institutions, or about creatures with complex societies. The GM determines the DCs for such checks.</p>';
        $subskill->success          = 'You recall the knowledge accurately';
        $subskill->critical_failure = 'You recall incorrect information';
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Subsist on the Streets';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>You find shelter and beg or scrounge enough food for at least yourself and maybe for other creatures as well. The GM determines the DC based on the nature of the settlement in which you are trying to subsist. You may need to have a minimum proficiency to use this downtime activity in more dangerous or highly organized settlements.</p>';
        $subskill->success          = 'You acquire enough food for yourself and your shelter gives you basic protection from the elements, providing a subsistence living.';
        $subskill->critical_success = 'You can either provide a subsistence living for yourself and one additional creature, or you can improve your own food and shelter, granting yourself a comfortable living.';
        $subskill->failure          = 'You are exposed to the elements and don’t get enough food; you become fatigued until you attain sufficient food and shelter.';
        $subskill->critical_failure = 'City guards, criminals, or other dangerous elements flush you out of your shelter and put you on notice, and you take a –2 circumstance penalty to Society checks to Subsist in the Streets for 1 week. You don’t find any food at all; if you don’t have any stored up, you’re in danger of starving or dying of thirst if you continue critically failing.';
        $subskill->save();
        $subskill->types()->save(app()->types['Downtime']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Create Forgery';
        $subskill->skill_id    = $skill->id;
        $subskill->description = '<p>You create a forged document, usually over the course of several hours, a day, or a week. You must have the proper writing material to create a forgery. If the document’s handwriting doesn’t need to be specific to a person, you need only to have seen a similar document before, and you gain up to a +4 circumstance bonus to the check (the GM determines the bonus). To forge a specific person’s handwriting, you need a sample of that person’s handwriting.</p>
<p>Once someone observes the document, the GM rolls your Society check. If the result exceeds 20, the GM compares it to the observer’s Society DC. If the result is 20 or lower, the observer uses Perception or Society, whichever is higher. An observer who is closely scrutinizing documents on the lookout for a forgery can attempt a Perception or Society check against your Society DC (if they succeed, they know your document is a forgery). Once the GM rolls your check for a document, that same result is used no matter how many creatures observe that document.</p>';
        $subskill->success = 'The forgery goes undetected.';
        $subskill->failure = 'The observer knows your document is a forgery.';
        $subskill->save();
        $subskill->types()->save(app()->types['Downtime']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Decipher Writing';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>You can take at least 1 minute per page (usually an Secret hour per page or longer) in an attempt to decipher writing in an unfamiliar language, a coded message, or text written in an incomplete or archaic form. The DC is determined by the GM based on the state of the document.</p>';
        $subskill->success          = 'You understand the general content of the page.';
        $subskill->critical_success = 'You have a thorough understanding of the page’s content, if not an exact word-for-word translation.';
        $subskill->failure          = "You can't understand the document and take a -5 circumstance penalty to further Society checks to decipher the writing on that page.";
        $subskill->critical_failure = 'You believe your understand the text on that page, but you have in fact misconstrued its message.';
        $subskill->save();
        $subskill->types()->save(app()->types['Downtime']);
        $subskill->types()->save(app()->types['Secret']);
    }
}
