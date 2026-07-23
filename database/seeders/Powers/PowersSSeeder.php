<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersSSeeder extends Seeder
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
        $power->name        = 'Schism';
        $power->action_type = 'Triple Action';
        $power->display     = 'Auditory, Mental';
        $power->targets     = 'Self';
        $power->duration    = '1 minute';
        $power->description = "<p>Your mind splits into two independent parts. Each part functions in complete autonomy, like two characters in one body. Your new second mind does not control your physical body. You gain 2 additional Actions, which can only be used to manifest powers and only your second mind can use.</p>
<ul>
    <li>Your second mind can manifest powers using your Power Point reserve. All Powers your second mind manifest costs 2 more Power Points. You and your second mind combined cannot spend more Power Points in a turn than your Character Level</li>
    <li>Your second mind does not provoke any Attacks of Opportunity when manifesting a power because doing so doesn't distract your primary mind.</li>
    <li>You second mind takes its first Action on your turn in the round after Schism is manifested.</li>
    <li>Both your minds communicate with each other telepathically.</li>
    <li>If you are subject to a Compulsion or Charm effect while you are of two minds, make a second Save if you fail the first. If you fail both, then only your primary mind is affected. The second mind can take Actions (still under the control of the player). The second mind is only affected if the effect is specifically targeting the second mind.</li>
</ul>";
        $helper->addTypesToPower($power, ['Telepathy'], 4);

        $power                   = new Power;
        $power->name             = "Seer's Sight";
        $power->action_type      = 'Free';
        $power->maintenance_cost = '1 Power Point per minute';
        $power->targets          = 'Self';
        $power->duration         = '10 minutes';
        $power->description      = '<p>You gain the following</p>
<ul>
    <li>Darkvision (120 feet)</li>
    <li>Advantage on WIS (Perception) checks that rely on sight.</li>
</ul>';
        $helper->addTypesToPower($power, ['Clairsentience'], 1);

        $power                   = new Power;
        $power->name             = 'Sense Link';
        $power->action_type      = 'Double Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->display          = 'Mental';
        $power->save_attribute   = 'CHA';
        $power->requirements     = 'You must have at least one Psionic Combat attack power';
        $power->range            = '200 feet';
        $power->targets          = 'One creature';
        $power->duration         = 'Concentration, up to 1 hou';
        $power->description      = "<p>You perceive what the target creature perceives using its sight, hearing, taste, or smell. Only one sense is linked, and it requires a Triple Action to switch senses.</p>
<p>You make any skill checks involving senses, such as Perception, as the subject, and only within the subject\'s field of view. You lose your DEX bonus to AC while directly sensing what the subject sense.</p>
<p>Once sense link is manifested, the link persists even if the subject moves out of range.</p>
<p>The strength of the subject's linked sense could be enhanced by other powers or items, allowing you the same enhanced sense. You are subject to any gaze attacks affecting the subject creature (if you linked vision). If you are blineded or deafened, or suffer some other sensory deprivation, the linked creature functions as an independent sensory organ, and provides you the benefit of the linked sense from its perspective while this power\'s duration lasts</p>
<p>If the target is willing, the ability damage requirement is not required.</p>";
        $power->heightened       = '<dl>
    <dt>Heightened (+2)</dt> <dd>The target can perceive one of your senses instead of the other way around</dd>
    <dt>Heightened (+2)</dt> <dd>You can link to an additional sense at the same time</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power                   = new Power;
        $power->name             = 'Sense Minds';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->display          = 'Visual';
        $power->save_attribute   = 'WIS';
        $power->range            = '60 feet';
        $power->requirements     = 'You must have the Empathy power';
        $power->duration         = 'Concentration, up to 1 hour';
        $power->description      = '<p>You can locate creatures. For the duration of the effect, you can detect any non-mindless creature in range, although the amount of information you learn depends on how long you concentrate on an area.</p>
<dl>
    <dt>1st Round</dt> <dd>Presence of absence of thoughts (from conscious creatures with INT scores of 1 or higher)</dd>
    <dt>2nd Round</dt> <dd>Number of thinking minds and the approximate INT score of each. If the highest INT is 26 or higher (and at least 10 points higher than your own INT score), you are stunned for 1 round and the effect ends.</dd>
</dl>
<p>If you concentrate on a specific creature in the area of effect</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Range</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power              = new Power;
        $power->name        = 'Sensitivity to Psychic Impressions';
        $power->action_type = '1 hour';
        $power->display     = 'Auditory and Material';
        $power->area        = '60-ft radius emanation';
        $power->duration    = 'Concentration, up to 3 hours';
        $power->description = "<p>You gain historical vision in a given location. Rooms, streets, tunnels, and other discrete locations accumulate psychic impressions left by powerful emotions experienced in a given area. These impressions offer you a picture of the location's past.</p>
<p>The types of events most likely to leave a psychic impressions are those that elicit a strong emotion; battles and betrayals, marriages and murders, births and great pain, or any other event where one emotion dominates. Every day occurrences leave no residue for you to detect.</p>
<p>The vision of the event is dreamlike and shadowy. You do not gain special knowledge fo those involved in the vision, though you might be able to read large banners or other writings if they are in your language.</p>
<p>Beginning with the most recent significant event at a location and working backward in time, you can sense one distinct event for every 10 minutes you maintain Concentration, if any event exists to be sensed. Your sensitivity extends into the past a maximum number of years equal to 100 X your manifester level.</p>";
        $helper->addTypesToPower($power, ['Clairsentience'], 2);

        $power              = new Power;
        $power->name        = 'Shift';
        $power->action_type = 'Action';
        $power->targets     = 'Self';
        $power->display     = 'Auditory';
        $power->duration    = '1 round';
        $power->description = '<p>You flicker in and out of this dimension, making your movement difficult to track. You gain the Accelerated 30 (Ground) condition and gain the following benefits untill the beginning of your next turn.</p>
<ul>
    <li>For the duration, your movement does not provoke Attacks of Opportunity</li>
    <li>If you move, you gain the Unseen condition.</li>
</ul>';
        $helper->addTypesToPower($power, ['Psychoportation'], 1);

        $power                 = new Power;
        $power->name           = 'Shock Field';
        $power->action_type    = 'Double Action';
        $power->save_attribute = 'CON';
        $power->range          = '10-ft radius emanation';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You can emanate a 10-foot radius sphere of electricity centered on you.</p>
<p>All targets in the area takes 3D6 Lightning damage. Targets wearing metal armor suffers a -5 penalty on their Save.</p>';
        $power->saves = '<dl>
    <dt>Special</dt> <dd>Targets wearing metal armor suffers a -5 penalty to their Save</dd>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Lightning damage by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Electricity'], 2);

        $power                   = new Power;
        $power->name             = 'Simulate Feat';
        $power->action_type      = '10 minutes';
        $power->maintenance_cost = '1 Power Point per 3 hours';
        $power->targets          = 'Self';
        $power->duration         = '12 hours';
        $power->description      = '<p>You can temporarily gain the benefits of any feat that you have seen used. You must meet all the requirements of the feat.</p>
<p>You may have up to 3 instances of this feat active at one time.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+4)</dt> <dd>You do not need to meet the requirements to temporarily gain the benefits of a feat</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 6);

        $power                   = new Power;
        $power->name             = 'Simulate Skill';
        $power->action_type      = '1 minute';
        $power->maintenance_cost = '1 Power Point per hour';
        $power->targets          = 'Self';
        $power->duration         = '6 hours';
        $power->description      = '<p>You become skilled in a skill.</p>
<p>Pick a skill. You gain a +5 bonus to the skill, and you have Advantage on all skill checks with the choosen skill.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 2);

        $power                 = new Power;
        $power->name           = 'Sonickinesis';
        $power->action_type    = 'Double Action';
        $power->save_attribute = 'INT or CON';
        $power->range          = '30 feet';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You can generate sound, granting you the following abilities.</p>
<ul>
    <li>You can generate any sound up to your maximum range. Any listener may make a INT Save to disbelieve that the sound is genuine.</li>
    <li>You generate a 30-foot cone that deals 1D6 Sonic damage.</li>
</ul>';
        $power->heightened     = '<dl>
    <dt>Heightened (+3)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Sonic'], 1);

        $power                   = new Power;
        $power->name             = 'Sound Absorption';
        $power->action_type      = 'Reaction';
        $power->maintenance_cost = '1 Power Point per round';
        $power->duration         = '5 rounds';
        $power->targets          = 'Self';
        $power->description      = '<p>You gain the ability to absorb the energy from sound, and possibly healing your wounds from the absorbed energy.</p>
<p>When you manifest this power, choose one.</p>
<ul>
    <li>Gain Damage Reduction 10 to Sonic. You gain 1 Hit Point for every 5 points of Sonic damage you absorb. This causes the area around you to be engulfed in silence. Nomral speach is insufficient to gain any Hit Points. 3 Medium sized creatures shouting is sufficient to gain 1 Hit Point.</li>
    <li>You gain Damage resistance to Sonic (half damage)</li>
</ul>';
        $power->heightened       = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by +5</dd>
    <dt>Heightened (+2)</dt> <dd>The Duration becomes 5 rounds</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Duration by 2 rounds</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Sonic'], 2);

        $power               = new Power;
        $power->name         = 'Space Hop';
        $power->action_type  = 'Action';
        $power->targets      = 'Self';
        $power->requirements = 'You must have the Shift power';
        $power->display      = 'Visual Auditory';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>You quickly travel a short distance through another dimension back into your original dimension. You teleport up to 30 feet to an unoccupied space that you can see.</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 2 and Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation'], 2);

        $power                   = new Power;
        $power->name             = 'Steadfast Perception';
        $power->action_type      = 'Double Action';
        $power->maintenance_cost = '1 Power Point per hour';
        $power->display          = 'Visual';
        $power->targets          = 'Self';
        $power->duration         = '3 hours';
        $power->description      = '<p>Your vision cannot be distracted or misled, granting you immunity to all figments and glamors. Moreover, your Search checks receive a +6 enhancement bonus for the duration. This power also grants you another Save against someone using False Sensory input on you.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 4);

        $power                 = new Power;
        $power->name           = 'Strength Blast';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Mental';
        $power->range          = '30 feet';
        $power->targets        = 'One living creature with an INT score';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'CON';
        $power->description    = '<p>You psychically induce weakness in the target. You deal 1D4 STR damage to the target. You need line of sight to the target.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 and Heighten +2 without spending any additional Power Points</dd>
    <dt>Heightened (+3)</dt> <dd>If the target fails their Save, they gain the Enfeebled 2 Condition.</dd>
    <dt>Heightened (+4)</dt> <dd>The spell gains an area effect of a 30-foot cone and all in the area are affected.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 1);

        $power              = new Power;
        $power->name        = 'Strength Defense';
        $power->action_type = 'Reaction';
        $power->display     = 'Mental';
        $power->range       = 'Self';
        $power->duration    = '1 round';
        $power->description = '<p>You raise a mental defense that grants a +2 bonus to CON Saves and gain resistance to Vitality Blast, Life Blast and STR Blast.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 and the Duration becomes 3 rounds</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the bonus to CON Saves by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 1);

        $power              = new Power;
        $power->name        = 'Suspend Life';
        $power->action_type = 'Triple Action';
        $power->display     = 'Olfactory';
        $power->targets     = 'Self';
        $power->duration    = 'Permanent unless ended or dismissed; see text';
        $power->description = '<p>You can place yourself into a trance so deep that you are almost in suspended animation. Even powers that detect life or thought are incapable of determining that you are alive.</p>
<p>While you are suspended, you are aware of your surroundings. You feel the passage of one day for every year that actually passes. Though on a slower schedule, you grow hungry after a “day” without food (though a year passes in actuality) and begin to suffer the effects of thirst and starvation as appropriate.</p>
<p>If you take any damage, you come out of your trance 4 rounds later. The trance can also be ended by a successful use of dispel psionics. If you choose to dismiss the power, your trance ends 10 rounds later.</p>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 6);
    }
}
