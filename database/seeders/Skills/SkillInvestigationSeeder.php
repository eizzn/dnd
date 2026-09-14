<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillInvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $skill                 = new Skill;
        $skill->name           = 'Insight';
        $skill->description    = '<p></p>';
        $skill->attribute_id   = 4;
        $skill->untrained_uses = '<ul>
    <li>Sense Motive</li>
    <li>Research</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Sense Motive';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '';
        $subskill->save();

        $subskill              = new SubSkill;
        $subskill->name        = 'Research';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '';
        $subskill->save();
    }
}
