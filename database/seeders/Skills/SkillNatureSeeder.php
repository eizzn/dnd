<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillNatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Nature';
        $skill->description    = '<p>You know a great deal about the natural world, and you can command and train animals and magical beasts.</p>';
        $skill->attribute_id   = 5;
        $skill->untrained_uses = '<ul>
    <li>Recall Knowledge (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Identify Magic (Activity)</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Recall Knowledge';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->description      = '<p>You can use Nature to remember a bit of knowledge on flora, fauna, geography, weather, the environment, or creatures of natural significance. The GM determines the DCs for such checks.</p>';
        $subskill->success          = 'You recall the knowledge.';
        $subskill->critical_failure = 'You recall erroneous knowledge.';
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Identify Magic';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>Once you discover that an item, ongoing effect or location is magical, you can spend an hour to attempt to identify the nature and particulars of its magic. If you attempt is interruped in any way, you must start over. The GM sets the DC for your check. Cursed or particularly esoteric items usually have higher DCs or might even be impossible to identify using Nature alone. Heightening a spell doesn\'t increase the DC.</p>';
        $subskill->success          = 'For an item or location, you get a sense of what it does and learn any means of activating it. For an ongoing effect, you learn the effect\'s name and what it does. You can\'t try again in hopes of getting a critical success.';
        $subskill->critical_success = 'You learn all the attributes of the magic, including whether it is curse.';
        $subskill->failure          = "You fail to identify the magic and can't try again for 1 day.";
        $subskill->critical_failure = "You misidentify the magic as something else of the GM's choice.";
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);
    }
}
