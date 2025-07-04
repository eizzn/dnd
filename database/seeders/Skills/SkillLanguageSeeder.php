<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SkillLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $skill               = new Skill;
        $skill->name         = 'Language';
        $skill->description  = '';
        $skill->attribute_id = 4;
        $skill->trained_uses = '<ul>
    <li>Comprehend Language</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Comprehend Language';
        $subskill->skill_id    = $skill->id;
        $subskill->description = '<p>You learn a new language. Each time you buy ranks in the Language skill, you either increase your proficiency with a language you already know, or learn a new language.</p>
<table>
    <thead>
        <tr>
            <th>Ranks</th>
            <th>Ability</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Basic Understanding requiring a skill check</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Can understand basic conversations. Can speak requiring a skill check</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Can hold basic conversation. Can read requiring a skill check</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Fluent conversation and can read</td>
        </tr>
    </tbody>
</table>';
        $helper->addTypesToSimpleObject($subskill);
    }
}
