<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillThieverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Thievery';
        $skill->description    = "<p>You are trained in a particular set of skills favored by thieves and miscreants. Disabling devices and picking locks either are aided by or require the use of thieves' tools.</p>";
        $skill->attribute_id   = 2;
        $skill->untrained_uses = '<ul>
    <li>Palm an Object (Action)</li>
    <li>Steal an Object (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Disable a Device (Action)</li>
    <li>Pick a Lock (Action)</li>
</ul>';
        $skill->armor_penalty = 1;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Palm an Object';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>Palming a small (usually of negligible Bulk), unattended object without being noticed requires a Thievery check agains the Perception DCs of creatures who have you within their sight. You tak the object whether or not you successfully conceal that you do so.</p>';
        $subskill->success     = "If your result meets or exceeds every observer's Perception DC, you palm the object without being detected.";
        $subskill->failure     = "If your result is lower than an observing creature's Perception DC, that creature notices you palming the object. The GM determines the creature's response.";
        $subskill->save();
        $subskill->types()->save(app()->types['Manipulate']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Steal an Object';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = "<p>Stealing a small (usually of negligible Bulk) object from another person can be very difficult. If the object is worn but relatively unattended (like a loosely carried pouch filled with coins, or an object within such a pouch), the DC to steal the item without detection is equal to the creature's Perception DC. You can\'t steal an object that\'s more closely guarded (in a pocket, for example), nor can you steal from a creature who is in combat or otherwise on guard. The GM determines the response of any creature that notices your theft</p>
<p>The GM might impose a penalty on your check if the nature of the object makes it harder to steal (such as a very small item in a large pack, or a sheet of parchment mixed in with other documents). THe GM can also penalize the Perception DC of observers if they're distracted.</p>.";
        $subskill->success = "You steal the item without the bearer noticing, or an observer doesn't see you take or attempt to take the item.";
        $subskill->failure = "The item's bearer notices your attempt before you can take the object, or an observer sees you take an attempt to take the item.";
        $subskill->save();
        $subskill->types()->save(app()->types['Manipulate']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Disable a Device';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->requirements     = "Some devices require you to use thieves' tools when disabling them.";
        $subskill->description      = '<p>This action allows you to disarm a trap or some other complex device. Often, a device requiers numerous successes before becoming disabled, depending on its construction and complexity. Thieves\' tools are helpful and sometimes even required to disable a device, as determined by the GM, and sometimes a device requires a higher proficiency rank in Thievery to disable it.</p>';
        $subskill->success          = 'You achieve one success toward disabling the device.';
        $subskill->critical_success = 'You achieve two successes toward disabling the device. If you complete the process of disabling the device with this check, you leave no trace of your tampering, and you can rearm the device later, if the type of device can be rearmed.';
        $subskill->critical_failure = "You either undo one success you've already gained or, if you have no successes, you set off the device.";
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Manipulate']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Pick a Lock';
        $subskill->skill_id         = $skill->id;
        $subskill->requirements     = "You must be using thieves' tools.";
        $subskill->description      = '<p>Opening a lock without a key is very similar to Disabling a Device, but the DC of the check is determined by the complexity and construction of the lock you are attempting to pick. Unlocking even the simplest of mechanisms almost always requires three or more successful checks to accomplish. If you lack the proper tools, the GM might let you used improvised picks, which are treated as poor-quality tools.</p>';
        $subskill->success          = 'You gain one success toward opening the lock.';
        $subskill->critical_success = 'You gain two successes toward opening the lock.';
        $subskill->failure          = 'You fail to grab your opponent. If you already had the opponent grabbed or restrained by way of a Grapple, those conditions on that creature end.';
        $subskill->critical_failure = 'You either undo one success you have already gained, or, if you have no successes, you break your tools. The tools can be used while broken, but are treated as poor-quality tools. Repairing them requires replacing the tools.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Manipulate']);
    }
}
