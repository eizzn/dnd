<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersTSeeder extends Seeder
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

        $power              = new Power;
        $power->name        = 'Telekinesis';
        $power->action_type = 'Double Action';
        $power->range       = '90 feet';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You can use your mind to perform one of the following</p>
<ul>
    <li>Move an object that weighs 5 pounds or less at a speed of 10 per turn.</li>
    <li>You can push or pull with a STR of 10</li>
    <li>You can Grapple a target within range with a STR of 10</li>
    <li>You can make a Ranged Attack that deals 1D6 Bludgeoning (Force) damage</li>
</ul>
<p>Aside from the Ranged Attack version of this power, you can continue to spend 1 Power Point to continue the Action. You spend 1 Power Point to continue the Action even if you Heighten the power.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the max weight of objects you can move by +7 pounds.</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the STR of pushing, pulling, or Grappling by +3 STR</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the damage of your Ranged Attack by +1D6</dd>
    <dt>Heightened (+4)</dt> <dd>You may pummel a 10 ft radius area with Telekinetic onslaught. All creatures in the area takes 3D6 Bludgeoning (Force) damage. Each creature makes a STR Save for half damage.</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Telekinetic onslaught damage by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Force', 'Spend Power Point'], 1);

        $power                 = new Power;
        $power->name           = 'Telekinetic Thrust';
        $power->action_type    = 'Double Action';
        $power->range          = '90 feet';
        $power->requirements   = 'You must have the Telekinesis power';
        $power->targets        = 'One or more objects or creatures with a total weight of 250 lb or less';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'DEX';
        $power->description    = '<p>You manifest your Telekinesis to cause one of the following effects</p>
<ul>
    <li>Hurl loose objects in a cone-shaped spray at targets within range. This causes 3D6 damage to all within the area.</li>
    <li>Grab an object or creature weighing 300 lbs or less and tossing it 15 feet in a direction (you can even throw a target at another target). All targets take 3D6 damage (the same as falling 15 feet). You must succeed a Ranged Touched attack to grab an unwilling target. If you wish to throw the object or creature at another target, you must make another Ranged Touch attack.</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the weight limit by 50 lbs</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D6. You can also throw a grabbed object or creature an additional 5 feet</dd>
</dl>';
        $power->saves = '<dl>
    <dt>Critical Success</dt> <dd>No damage, or not grabbed</dd>
    <dt>Success</dt> <dd>Half damage or grabbed but take half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Force'], 3);

        $power               = new Power;
        $power->name         = 'Teleport';
        $power->action_type  = 'Double Action';
        $power->requirements = 'You must have the Space Hop power';
        $power->display      = 'Visual';
        $power->range        = 'Touch';
        $power->targets      = 'You and touched objects and/or willing creatures';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>As the Teleport spell, except as noted here.</p>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation'], 5);

        $power                   = new Power;
        $power->name             = 'Teleport Trigger';
        $power->action_type      = '1 minute';
        $power->maintenance_cost = '1 Power Point per 12 hours';
        $power->requirements     = 'You must have the Teleport power';
        $power->targets          = 'Self';
        $power->duration         = '48 Hours';
        $power->description      = '<p>You specify a situation that triggers you to automatically teleport you the location where you manifest this power. If the trigger is activated, it takes no time and instantly teleports you.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+4)</dt> <dd>As a Double Reaction, if someone is teleporting into a location within 120 feet of you or from a location 120 feet from you, you may use this power and change the destination of the teleport. You cannot send them further than their spell or ability allows but you control where they end up. You cannot teleport them into a sold object. The teleporting creature gets a CHA Save to resist your attempt to alter their teleportation.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation'], 4);

        $power               = new Power;
        $power->name         = 'Temporal Acceleration';
        $power->action_type  = 'Action';
        $power->display      = 'None';
        $power->requirements = 'You must have the Time Hop power';
        $power->targets      = 'Self';
        $power->duration     = '2 rounds';
        $power->description  = '<p>You gain the Quickened Condition. The additional Action is available at the start of your next turn.</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (+4)</dt> <dd>Increase the duration by 1 round</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation'], 6);

        $power                   = new Power;
        $power->name             = 'Thicken Skin';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->display          = 'Visual';
        $power->targets          = 'Self';
        $power->duration         = '30 minutes';
        $power->description      = '<p>You skin or natural armor thickens and spreads across your body, providing a +2 enhancement bonus to your AC.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+2)</dt> <dd>You gain Damage Reduction 2/-</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the AC bonus by +1</dd>
    <dt>Heightened (+4)</dt> <dd>Increase the Damage Reduction by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 1);

        $power                 = new Power;
        $power->name           = 'Time Hop';
        $power->action_type    = 'Double Action';
        $power->display        = 'Auditory, Visual';
        $power->range          = '60 feet';
        $power->requirements   = 'You must have the Space Hop power';
        $power->targets        = 'One medium or smaller creature, or one object weighing 300 lbs or less';
        $power->save_attribute = 'CHA';
        $power->duration       = '1D4 + 1 rounds';
        $power->description    = "<p>The subject of the power hops forward in time 1D4 + 1 rounds. In effect, the subject seems to disappear in a shimmer of silver energy, then reappear after the duration of this power expires. The subject reappears in exactly the same orientation and condition as before. From the subject's point of view, no time has passed at all.</p>
<p>In each round of the power's duration, on what would have been the subject's turn, it can attempt a DC 15 CHA check. Success allows the subject to return. The subject can act normally on its next turn after this power ends.</p>
<p>If the space form which the subject departed is occupied upon his return to the time stream, they appear in the closest unoccupied space, still in their original orientation. Determine the closest space randomly if necessary/</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can affect a creature one size category larger, or double the weight of an object to be affected.</dd>
    <dt>Heightened (+2)</dt> <dd>You can affect an additional target. Any additional target cannot be more than 15 feet from another target of the power.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Time'], 3);

        $power               = new Power;
        $power->name         = 'Time Regression';
        $power->action_type  = 'Triple Action';
        $power->display      = 'None';
        $power->targets      = 'Self';
        $power->requirements = 'You must have the Time Hop power';
        $power->duration     = 'Instantaneous';
        $power->description  = "<p>You can regress apparent time 1 round into the past. In effect, you \"replay\" the previous round of activity. The power regresses time to the point along the time stream just prior to your previous turn, undoing the effects of everyone else's Actions in the meantime. Once you have used this power, only you retain knowledge of what happened during the round that is being replayed; however, you can communicate that knowledge verbally to your companions, if desired. During the round that you live through a second time, you can act on knowledge you previously gained by already living through the immediate future. In all likelihood, you'll probably not choose to manifest this power during your second pass through the time stream, instead taking completely new Actions.</p>
<p>Altering the time stream in such a fashion is mentally taxing and you suffer 4 points of ability damage to CHA, INT, and WIS. This damage cannot be ignored through any special effects or abilities, but can be healed as any other ability damage.</p>";
        $helper->addTypesToPower($power, ['Psychoportation'], 9);

        $power              = new Power;
        $power->name        = 'Tower of Iron Will';
        $power->action_type = 'Action';
        $power->display     = 'Auditory';
        $power->area        = '10-ft Radius emanation';
        $power->targets     = 'Self';
        $power->duration    = '1 round';
        $power->description = '<p>You generate a bastion of thought so strong that it offers protection to you and everyone around you, improving the self-control of all. You and all creatures in the power\'s area gains a +5 bonus to INT, WIS, and CHA Saves, and Damage Reduction 5 vs ability damage from Psionic Combat.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 5);

        $power               = new Power;
        $power->name         = 'True Creation';
        $power->action_type  = 'Special (10 minutes)';
        $power->requirements = 'You must have the Ectoplasmic Creation power';
        $power->display      = 'Material, Visual, Auditory';
        $power->range        = '0 feet';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>As the spell True Creation, except as noted here.</p>
<p>Manifesting this power causes the manifester to take 7 points of CON damage.</p>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Creation'], 8);
    }
}
