<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Religion';
        $skill->description    = '<p>The secrets of deities, dogma, faith, and the realms of divine creatures both sublime and sinister are open to you. You also understand how magic works, though your training gives a religious slant to that knowledge.</p>';
        $skill->attribute_id   = 5;
        $skill->specified      = 1;
        $skill->untrained_uses = '<ul>
    <li>Recall Knowledge (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Identify Magic (Activity)</li>
    <li>Read Scipture (Activity)</li>
</ul>';
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Recall Knowledge';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>You can use Religion to remember a bit of information on the subject of divine agents, the finer points of theology, and obscure myths regarding a faith. You can also recall some bit of lore about creatures with divine significance. The GM dtermines the DCs for such checks.</p>';
        $subskill->success          = 'You recall the knowledge accurately';
        $subskill->critical_failure = 'You call incorrect information.';
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Identify Magic';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>Once you discover that an item, ongoing effect or location is magical, you can spend an hour to attempt to identify the particulars of the its magic. If your attempt is interrupted, you must start over. The GM sets the DC for your check. Cursed or esoteric items usually have higher DCs or might even be impossible to identify using Religion alone. Heightening a spell doesn\'t increase the DC.</p>';
        $subskill->success          = 'For an item or location, you get a sense of what it does and learn any means of activating it. For an ongoing effect, you learn the effect’s name and what it does. You can’t try again in hopes of getting a critical success.';
        $subskill->critical_success = 'You learn all the attributes of the magic, including whether it is cursed.';
        $subskill->failure          = 'You fail to identify the magic and can’t try again for 1 day.';
        $subskill->critical_failure = 'You misidentify the magic as something else of the GM’s choice.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Read Scripture';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>You can read and understand religious writing, Secret including allegories, homilies, and proverbs, as long as it is in a language you can normally read. This usually takes about 1 minute per page of text. To read and understand the nuances of particularly archaic or obscure texts, the GM may require you to attempt a Religion check to see if you understand the true meaning of the scripture. The GM might have you attempt one check for the entire text or one check for each section of a larger text.</p>';
        $subskill->success          = 'you understand the true meaning of the text.';
        $subskill->critical_failure = 'You misread the text.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);
    }
}
