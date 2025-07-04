<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SkillMedicineSeeder extends Seeder
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

        $skill                 = new Skill;
        $skill->name           = 'Medicine';
        $skill->description    = '<p>You can patch up wounds and help people recover from disease and poisons.</p>';
        $skill->attribute_id   = 5;
        $skill->untrained_uses = '<ul>
    <li>Administer First Aid (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Treat Disease (Activity)</li>
    <li>Treat Poison (Action)</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill               = new SubSkill;
        $subskill->name         = 'Administer First Aid';
        $subskill->skill_id     = $skill->id;
        $subskill->action_type  = 'Action';
        $subskill->requirements = "You must have healer's tools";
        $subskill->description  = '<p>You perform first aid on an adjacent creature that is at 0 Hit Points in an attempt to stabilize it. You can also perform first aid on an adjacent creature that is taking persistent bleed damage. The DC for either is 15. If a creature is both dying and bleeding, choose which effect you\'re trying to treat each time you roll. Youcan Administer First Aid again to attempt to remedy the other effect.</p>
<dl>
    <dt>Stabilize</dt> <dd>Attempt a Medicine check on a creature that has 0 Hit Points and the dying condition. The DC is equal to 5 + that creature’s recovery roll DC (typically 15 + its dying value).</dd>
    <dt>Stop Bleeding</dt> <dd>Attempt a Medicine check on a creature that is taking persistent bleed damage, giving them a chance to make another flat check to remove the persistent damage. The DC is usually the DC of the effect that caused the bleed.</dd>
</dl>';
        $subskill->success          = 'The create at 0 Hit Points loses the dying condition (but remains unconscious), or you end the persistent bleed damage.';
        $subskill->critical_failure = 'The creature with 0 Hit Points has its dying condition increased by 1. A creature with persistent bleed damage takes damage equal to the amount of its persistent bleed damage.';
        $helper->addTypesToSimpleObject($subskill, ['Manipulate']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Treat Disease';
        $subskill->skill_id         = $skill->id;
        $subskill->requirements     = "You must have healer's tools";
        $subskill->description      = "<p>You spend at least 8 hours caring for a diseased creature, helping it fight off a malady. Attempt a Medicine check against the disease's DC.</p>";
        $subskill->success          = 'You grant the creature a +2 circumstance bonus to its next Save against the disease.';
        $subskill->critical_success = 'You grant the creature a +4 circumstance bonus to its next Save against the disease.';
        $subskill->critical_failure = 'Your efforts cause the creature to take a -2 circumstance penalty to its next Save against the disease.';
        $subskill->trained_only     = 1;
        $helper->addTypesToSimpleObject($subskill, ['Downtime', 'Manipulate']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Treat Poison';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->requirements     = "You must have healer's tools";
        $subskill->description      = "<p>You apply specialized treatments to prevent the spread of poison. Roll a Medicine check against the poison's DC.</p>";
        $subskill->success          = 'You grant the creature a +2 circumstance bonus to its next Save against the poison.';
        $subskill->critical_success = 'You grant the creature a +4 circumstance bonus to its next Save against the poison.';
        $subskill->critical_failure = 'Your efforts cause the creature to take a -2 circumstance penalty to its next Save against the poison.';
        $subskill->trained_only     = 1;
        $helper->addTypesToSimpleObject($subskill, ['Manipulate']);

        $subskill               = new SubSkill;
        $subskill->name         = 'Treat Wounds';
        $subskill->skill_id     = $skill->id;
        $subskill->requirements = "You're wearing or holding healer's tools";
        $subskill->description  = '<p>You spend 10 minutes treating one injured living creature (targeting yourself, if you so choose). The target is then temporarily immune to Treat Wounds Actions for 1 hour, but this interval overlaps with the time you spent treating (so a patient can be treated once per hour, not once per 70 minutes).</p>
<p>THe Medicine check DC is usually 15, though the GM might adjust it based on the circumstances, such as treating a patient outside in a storm, or treating magically cursed wounds.</p>
<p>If you have at least 5 ranks in Medicine, you can attempt a DC 20 check to increase the Hit Points regained by 10. If you have at least 10 ranks in Medicine, you can instead attempt a DC 30 check to increase the Hit Points regained by 30. If you have at least 15 ranks in Medicine, you can attempt a DC 40 check to increase the Hit Points regained by 50. The damage dealt on a Critical Failure remains the same.</p>
<p>If you Succeed at your check, you can continue treating the target to grant additional healing. If you treat them for a total of 1 hour, double the Hit Points the regain from Treat Wounds.</p>
<p>The result of your Medicine check determines how many Hit Points the target regains.</p>';
        $subskill->critical_success = 'The target regains 4D8 Hit Points, and its Wounded Condition is removed';
        $subskill->success          = 'The target regains 2D8 Hit Points, and its Wounded Condition is removed';
        $subskill->failure          = 'The target takes 1D8 damage';
        $helper->addTypesToSimpleObject($subskill, ['Healing', 'Manipulate']);
    }
}
