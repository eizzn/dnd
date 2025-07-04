<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillSurvivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Survival';
        $skill->description    = '<p>You are skilled at living in the wilderness, foraging or food and building shelter, and with training you discover the secrets of tracking and hiding your trail.</p>';
        $skill->attribute_id   = 5;
        $skill->untrained_uses = '<ul>
    <li>Sense Direction (Activity)</li>
    <li>Survive in the Wild (Activity)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Cover Tracks (Action)</li>
    <li>Track (Action)</li>
</ul>';
        $skill->armor_penalty = 1;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Sense Direction';
        $subskill->skill_id    = $skill->id;
        $subskill->description = '<p>Using the stars, the position of the sun, traits of the geography or flora, or the behavior of fauna, you can stay oriented in the wild. Typically, you roll only once per day, but some environments or changes might necessitate rolling more often. The GM determines the DC and how long this activity takes. More exotic locales or those you\'re unfamiliar with might require you to have a minimum proficiency rank to Sense Direction.</p>';
        $subskill->success     = 'You gain enough orientation to avoid becoming hopelessly lost. If you are in an environment with cardinal directions, you have a sense of those directions.';
        $subskill->save();
        $subskill->types()->save(app()->types['Secret']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Survive in the Wild';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = '<p>You build or maintain a shelter and forage enough food for yourself and maybe for other creatures as well. The GM determines the DC based on the nature of the wilderness you are trying to survive in. More exotic locales may require you to have a minimum proficiency rank to use this downtime activity.</p>';
        $subskill->success          = 'You forage enough food for yourself, and your shelter gives you basic protection from the elements, providing a subsistence living.';
        $subskill->critical_success = 'You can either provide a subsistence living for yourself and one additional creature, or you can improve your own food and shelter, granting yourself a comfortable living.';
        $subskill->failure          = "You are exposed to the elements and don't get enough food, becoming fatigued until you get sufficient food and shelter.";
        $subskill->critical_failure = "Your shelter is severely damaged or destroyed, and you take a -2 circumstance penalty to Survival checks to Survive in the Wild for 1 week. You don't find any food at all; if you don't have any stored up, you're in danger of starving or dying of thirst if you continue critically failing.";
        $subskill->save();
        $subskill->types()->save(app()->types['Downtime']);

        $subskill               = new SubSkill;
        $subskill->name         = 'Cover Tracks';
        $subskill->skill_id     = $skill->id;
        $subskill->action_type  = 'Action';
        $subskill->description  = "<p>You cover your tracks, moving at half your Speed. You don't need to roll a Survival check to cover your tracks, but anyone tracking you must exceed your Survival DC if it is higher than the normal DC to track.</p>";
        $subskill->trained_only = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Move']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Track';
        $subskill->skill_id    = $skill->id;
        $subskill->description = '<p>You follow tracks, moving at half your Speed. After a successful check to Track, you can continue following the tracks at half your Speed without rolling additional checks for up to 1 hour. You need to attempt a check anytime something significant changes in the trail, as well as once every hour. The GM determines the DCs for such checks, depending on the freshness of the trail, the weather, and the type of ground.</p>';
        $subskill->success     = "You find the trail or continue to follow the one you're already following.";
        $subskill->failure     = 'You lose the trail but can try again after a 1-hour delay.';
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Move']);
    }
}
