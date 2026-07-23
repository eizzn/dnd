<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersHSeeder extends Seeder
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

        $power                 = new Power;
        $power->name           = 'Hail of Ectoplasmic Shards';
        $power->action_type    = 'Double Action';
        $power->display        = 'Auditory, Visual';
        $power->save_attribute = 'DEX';
        $power->requirements   = 'You must have the Ectoplasmic Creation power';
        $power->range          = '120 foot range';
        $power->area           = '20-ft radius emanation';
        $power->targets        = 'One creature or location in space';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>A tiny ectoplasmic crystal emanates from your outstretched hand and rapidly expands to a 2-foot-diameter ball of crystal as it speeds toward the location you designate. You can choose to aim this crystal at a single target or at a specific point in space (a grid intersection).</p>
<p>If you aim the crystal at a single target, you must make a Ranged Touch Attack to strike the target. Any creature or object struck by the ball of crystal takes 5d6 points of Bludgeoning damage.</p>
<p>Whether the crystal hits its target, misses, or was aimed at a point in space, it explodes upon arrival at the location you designated. Anyone within 20 feet of the explosion takes 9D6 points of Slashing damage from the thousands of crystal shards that spray forth.</p>';
        $power->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 5);

        $power                   = new Power;
        $power->name             = 'Haste';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '2 Power Point per minute';
        $power->display          = 'Auditory';
        $power->requirements     = 'You must have the Burst power';
        $power->targets          = 'One creature';
        $power->range            = 'Touch';
        $power->duration         = '10 minutes';
        $power->description      = '<p>The target acts faster. It gains the Quick condition and can be used for Strike and Stride Actions.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+1)</dt> <dd>The range becomes 30 feet</dd>
    <dt>Heightened (+3)</dt> <dd>You can target up to 5 creatures (either touch each one or heighten the range)</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 3);

        $power              = new Power;
        $power->name        = 'Heal';
        $power->action_type = 'Double Action';
        $power->display     = 'Visual';
        $power->range       = 'Touch';
        $power->targets     = 'Creature touched';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You heal the Target for 3D8 Hit Points.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can heal others with a range of touch.</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the amount healed by +1D8</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power              = new Power;
        $power->name        = 'Hypercognition';
        $power->action_type = 'Double Action';
        $power->display     = 'Mental';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You make lightning-fast deductions based on only the slightest clue, pattern, or scrap of memory resident in your mind. You can make reasonable statements about a person, place, or object, seemingly from very little knowledge. However, your knowledge is in fact the result of a rigorously logical process that you force your mind to undertake, digging up and correlating every possible piece of knowledge bearing on the topic (possibly even extracting echoes of knowledge from the Astral Plane).</p>
<p>The nature of the knowledge you gain concerning the subject of your analysis might include the answer to a riddle, the way out of a maze, stray bits of information about a person, legends about a place or an object, or even a conclusion concerning a dilemma that your conscious mind is unable to arrive at.</p>
<p>An INT check may be required to obtain the desired information. If so, you can manifest hypercognition as an immediate action prior to making the check and receive a +20 bonus for doing so.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 8);
    }
}
