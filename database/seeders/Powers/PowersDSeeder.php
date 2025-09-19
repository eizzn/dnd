<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersDSeeder extends Seeder
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
        $power->name        = 'Danger Sense';
        $power->action_type = 'Triple Action';
        $power->display     = 'Visual';
        $power->targets     = 'Self';
        $power->duration    = '3 hours';
        $power->description = '<p>The round before you are about to be attacked, you become aware of danger. You know the direction and the general nature of the attack (charging beast, arrow barrage, magic spell attack, psionic attack, etc) and direction, but not who is attacking or details of the spell or power. You gain a free round of Actions before anyone else.</p>
<p>This power has no effect while you are already in combat.</p>
<p>If you have this power active and you surprise attack creature that has this power active, you become aware of the individual with the power, but not in time to change Actions that are already in motion.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You gain the benefits of the Uncanny Dodge Class Feature. If you already have the Uncanny Dodge Class Feature, then you gain the benefits of the Improved Uncanny Dodge Class Feature instead.</dd>
    <dt>Heightened (+2)</dt> <dd>You gain the benefits of the Improved Uncanny Dodge Class Feature.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 3);

        $power                 = new Power;
        $power->name           = 'Daze';
        $power->action_type    = 'Action';
        $power->display        = 'Material, Mental';
        $power->range          = '30 feet';
        $power->duration       = '1 round';
        $power->save_attribute = 'CHA';
        $power->targets        = 'One humanoid creature';
        $power->description    = '<p>You cloud the targets mind momentarily. If the target fails their Save, they lose one Action this turn. If the target has already taken all their Actions, this power has no effect.</p>
<p>If you use this power on the same target in the same round multiple times, they get Advantage on the Save.</p>';
        $power->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Lose one Action this turn</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power                 = new Power;
        $power->name           = 'Deafness';
        $power->action_type    = 'Double Action';
        $power->display        = 'Visual';
        $power->save_attribute = 'CON';
        $power->requirements   = 'You must have the Body Adjustment Power';
        $power->range          = 'Touch';
        $power->targets        = 'Living creature touched';
        $power->duration       = '1 minute';
        $power->description    = '<p>Make a Melee Touch Attack. If you hit, the target is Deaf. At the beginning of the targets turn, they may make a CON Save. If they Succeed, the Deafness Condition ends. After the Duration, the Deafness Condition ends without needed a Save.</p>';
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>The Deafness Condition ends</dd>
    <dt>Failure</dt> <dd>The Deafness Condition continues</dd>
</dl>';
        $power->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power                 = new Power;
        $power->name           = 'Death Urge';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Mental';
        $power->range          = '120 feet';
        $power->targets        = 'One living target within range';
        $power->requirements   = 'The target must have lost at least 5 points of ability damage';
        $power->save_attribute = 'WIS';
        $power->duration       = '1 round';
        $power->description    = "<p>You plant a hidden death-urge impulse in the target's unconscious. On the target's next turn it looks for the quickest method to end its life and attempts to do so. The target takes no other Action on its turn except attempting to harm itself.</p>
<p>If armed, the subject uses all of its Actions to attack itself. The attacks automatically succeed, but an attack roll still needs to made to determine if the hits are Critical hits or not.</p>
<p>If unarmed, the target moves adjacent to the nearest enemy and provokes an attack, offering its opponent an opening, which the opponent may or may not choose to take advantage of.</p>
<p>If the target is unarmed and no enemy is nearby, the target simply does nothing at all. A target close to an immediate and lethal hazard such as a cliff or a fire might hurl itself off the cliff or into the fire instead of striking itself with a weapon.</p>";
        $power->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the duration by 1 round.</dd>
</dl>';
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 4);

        $power                 = new Power;
        $power->name           = 'Deceleration';
        $power->action_type    = 'Double Action';
        $power->display        = 'Auditory';
        $power->range          = '60 feet';
        $power->targets        = 'One medium or smaller creature';
        $power->duration       = '10 minutes';
        $power->requirements   = 'You must have the Telekinesis power';
        $power->save_attribute = 'STR';
        $power->description    = '<p>You cause a passive telekinetic field on the target that slows their movement.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>The target can only take one Move Action per turn or only one Attack Action per turn. (if the target takes 2 Move Actions, then they can only make 1 Attack Action, and vice versa)</dd>
    <dt>Failure</dt> <dd>The target can only take one Move Action per turn and only one Attack Action per turn.</dd>
    <dt>Critical Failure</dt> <dd>As failure, and the target also loses one Action each turn</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can affect a creature one size category larger</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Force'], 1);

        $power                 = new Power;
        $power->name           = 'Deja Vu';
        $power->action_type    = 'Double Action';
        $power->display        = 'Mental';
        $power->range          = '90 feet';
        $power->targets        = 'One living target within range';
        $power->requirements   = 'The target must have lost at least 1 point of ability damage';
        $power->save_attribute = 'WIS';
        $power->duration       = '1 round';
        $power->description    = "<p>You cause the target to repeat the Actions it took on its previous turn. If the situation has changed in such a way that the subject can't take the same Actions again (if its foe is dead, or the subject has run out of Power Points, etc), the subject stands still and takes no Actions for 1 round.</p>
<p>The subject can still defend itself.</p>";
        $power->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the duration by +1</dd>
</dl>';
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power                 = new Power;
        $power->name           = 'Demoralize';
        $power->action_type    = 'Double Action';
        $power->display        = 'Material and Mental';
        $power->area           = '30 feet radius emanation';
        $power->targets        = 'All living creatures in the area, excluding yourself';
        $power->save_attribute = 'WIS';
        $power->duration       = '1 minute';
        $power->description    = '<p>You fill all near you with self-doubt. All within the area must make a WIS Save or become Shaken for the duration. At the end of each affected creatures turn, they may make another Save to end the effect. Creatures without an INT score are unaffected.</p>';
        $power->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the range by +5 feet.</dd>
</dl>';
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>No longer Shaken</dd>
    <dt>Failure</dt> <dd>Shaken</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power                 = new Power;
        $power->name           = 'Destructive Teleport';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Mental';
        $power->range          = '60 feet';
        $power->targets        = 'One living creature';
        $power->requirements   = 'You must have the Baleful Teleport power';
        $power->save_attribute = 'CON';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You teleport part of a target. Based on their CON Save, on a fail, you teleport a limb (non-vital). On a critical fail, you teleport something more vital (vital internal organ, or the head).</p>';
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>1/3 remaining Hit Points and lose a limb</dd>
    <dt>Critical Failure</dt> <dd>Dying 3 condition</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation'], 7);

        $power              = new Power;
        $power->name        = 'Detect Psionics';
        $power->action_type = 'Double Action';
        $power->display     = 'Auditory, Visual';
        $power->targets     = 'Self';
        $power->area        = '60-ft Cone-shaped';
        $power->duration    = 'Concentration, 10 minutes';
        $power->description = '<p>You detect psionic auras. A psionic aura is given off by any active or permanent power, or during the use of any psionic feat. Characters who have levels in a psionic class, creatures with the psionic subtype, and creatures with the Wild Talent feat possess psionic auras. The amount of information revealed by the manifestation of this power depends on how long you study a particular area or subject.</p>
<dl>
    <dt>1st round</dt> <dd>Presence or absence of psionic auras</dd>
    <dt>2nd round</dt> <dd>Number of different psionic auras and the strength of the most potent aura</dd>
    <dt>3rd round</dt> <dd>The strength and location of each aura. If the items or creatures bearing the auras are in line of sight, you can make Concentration check to determine the discipline involved in each aura (Make on check per aura; DC 10 + power level, or 10 + 1/2 manifester level). If the aura emanates from a psionic item, you can attempt to identify its properties</dd>
</dl>
<p>Psionically charged locations, multiple disciplines, or strong local psionic emanations may confuse or conceal weaker auras.</p>
<dl>
    <dt>Aura Strength</dt> <dd>A psionic aura’s strength depends on a functioning power’s level or an item’s manifester level. If an aura falls into more than one category, detect Psionics indicates the stronger of the two. Detection of an overwhelming aura (see the accompanying table) dazes you for 1 round and the power ends.</dd>
</dl>
<table>
    <thead>
        <tr>
            <th rowspan="2">Power or Item</th>
            <th colspan="4">Aura Strength</th>
        </tr>
        <tr>
            <th>Faint</th>
            <th>Moderate</th>
            <th>Strong</th>
            <th>Overwhelming</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Functioning power (power level)</td>
            <td>3rd or lower</td>
            <td>4th - 6th</td>
            <td>7th - 9th</td>
            <td>10th+ (deity level)</td>
        </tr>
        <tr>
            <td>Psionic item or creature (manifester level)</td>
            <td>5th or lower</td>
            <td>6th - 11th</td>
            <td>12th - 20th</td>
            <td>21st+ (artifact)</td>
        </tr>
    </tbody>
</table>
<dl>
    <dt>Lingering Aura</dt> <dd>A psionic aura lingers after its original source dissipates (in the case of a power) or is destroyed (in the case of a psionic item). If detect Psionics is manifested and directed at such a location, the power indicates an aura of dim (even weaker than a faint aura). How long the aura lingers at this dim level depends on its original strength:</dd>
</dl>
<table>
    <thead>
        <tr>
            <th>Original Strength</th>
            <th>Duration</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Faint</td>
            <td>1D6 minutes</td>
        </tr>
        <tr>
            <td>Moderate</td>
            <td>1D6 X 10 minutes</td>
        </tr>
        <tr>
            <td>Strong</td>
            <td>1D6 hours</td>
        </tr>
        <tr>
            <td>Overwhelming</td>
            <td>1D6 days</td>
        </tr>
    </tbody>
</table>
<p>Each round, you can turn to detect Psionics in a new area. You can tell the difference between magical and psionic auras.</p>
<p>The power can penetrate barriers, but 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt blocks it.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The duration becomes 1 hour (no Concentration)</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience', 'Detection'], 1);

        $power                 = new Power;
        $power->name           = 'Dexterity Blast';
        $power->action_type    = 'Double Action';
        $power->display        = 'Mental';
        $power->range          = '30 feet';
        $power->targets        = 'One living creature with an INT score';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'CON';
        $power->description    = '<p>You psychically induce sluggishness in the target. You deal 1D4 + 1 DEX damage to the target. You need line of sight to the target.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>If the target fails their Save, they gain the Sluggish 2 condition for 2 rounds.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 2);

        $power              = new Power;
        $power->name        = 'Dexterity Defense';
        $power->action_type = 'Action';
        $power->display     = 'Mental';
        $power->targets     = 'Self';
        $power->duration    = '1 round';
        $power->description = '<p>You raise a mental defense that grants a +2 bonus to CON Saves and gain resistance to Vitality Blast, Life Blast and DEX Blast.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to activate this power by 1 and Power Point cost by 3</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus to CON Saves by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 1);

        $power              = new Power;
        $power->name        = 'Dimension Door';
        $power->action_type = 'Double Action';
        $power->display     = 'Visual';
        $power->range       = '120 feet';
        $power->targets     = 'Self and touched object or willing creature';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>As the dimension door spell, except as noted here.</p>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation'], 4);

        $power              = new Power;
        $power->name        = 'Dimension Slide';
        $power->action_type = 'Action';
        $power->display     = 'Visual';
        $power->range       = '30 feet';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous';
        $power->description = "<p>You instantly transfer yourself from your current location to any other spot within range to which you have line of sight. You can bring along possessions that amount to as much as a medium load, including living creatures that weigh as much as 20 pounds. Movement caused by the use of Dimension Slide does not provoke Attacks of Opportunity.</p>
<p>If you somehow attempt to transfer yourself to a location occupied by a solid body or a location you can't see the power simply fails to function.</p>";
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to activate this power by 1.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation'], 3);

        $power              = new Power;
        $power->name        = 'Dimension Swap';
        $power->action_type = 'Action';
        $power->display     = 'Visual';
        $power->range       = '60 feet';
        $power->targets     = 'Self and one ally in range or 2 allies in range';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You instantly swap positions between your current position and that of a designated ally in range. Alternatively, by using a Triple Action, you can swap the position of any two allies in range.</p>
<p>This power affects creatures of size Large or smaller. You can bring along objects, but not other creatures.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can increase the size category by one larger.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation'], 2);

        $power                 = new Power;
        $power->name           = 'Disable';
        $power->action_type    = 'Double Action';
        $power->display        = 'Visual';
        $power->area           = '30-ft Cone-shaped emanation';
        $power->save_attribute = 'WIS';
        $power->duration       = '1 minute';
        $power->description    = '<p>You broadcast a mental compulsion that convinces one or more creatures of up to 4 Hit Dice believes that they are Stunned. Creatures with the fewest Hit Dice are affected first. Among creatures with equal Hit Dice, those who are closest to you are affected first and must make a WIS Save to ignore this effect. Hit Dice that are not sufficient to affect a creature are wasted. Creatures that are rendered Helpless or are destroyed when they reach 0 Hit Points cannot be affected.</p>
<p>A Stunned creature can make a WIS Save at the end of each of their turns to end this effect. A creature that receives healing is freed from this Compulsion. A creature that takes damage is also instantly freed of this Compulsion.</p>';
        $power->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum Hit Dice by +1 and the range by +5 feet.</dd>
</dl>';
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Stunned</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Compulsion'], 1);

        $power                 = new Power;
        $power->name           = 'Disintegrate';
        $power->action_type    = 'Double Action';
        $power->requirements   = 'You must have the Matter Agitation power';
        $power->display        = 'Visual, Auditory';
        $power->range          = '120 feet';
        $power->save_attribute = 'CON';
        $power->targets        = 'One creature or unattended object';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>Like the Disintegrate spell, except as noted here.</p>';
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increase by 1D10</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis'], 6);

        $power                 = new Power;
        $power->name           = 'Dismiss Ectoplasm';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Auditory, Visual';
        $power->save_attribute = 'CHA';
        $power->requirements   = 'You must have the Ectoplasmic Creation power';
        $power->range          = '120 foot range';
        $power->area           = '30-ft radius emanation';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You dismiss creatures, objects, or effects composed of ectoplasm, such as astral constructs or the ectoplasmic cocoon power, or that were formerly composed of ectoplasm, such as items created by metacreativity (creation) powers.</p>
<p>An ectoplasmic creature that fails its WIS Save dissipates into so much constituent ectoplasm, which evaporates immediately.</p>
<p>A creature under the effect of the ectoplasmic form power that fails its saving throw is either destroyed out right or physically shifted to a random location on the Astral Plane (50% chance for either result).</p>
<p>Other ongoing powers that create ectoplasmic objects or effects, such as ectoplasmic cocoon, are dismissed if you succeed on a manifester level check (1d20 + your manifester level, maximum +10) against a DC of 11 + the power’s manifester level.</p>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 3);

        $power              = new Power;
        $power->name        = 'Dismissal';
        $power->action_type = 'Triple Action';
        $power->range       = '60 feet';
        $power->targets     = 'One extraplanar creature';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>This power forces an extra-planer creature back to its proper plane of existence.</p>';
        $power->saves       = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>The target will be sent back to its home plane of existence in 10 rounds. There is a 20% chance the creature is sent to a random plane instead.</dd>
    <dt>Failure</dt> <dd>The target is sent back to its home plane of existence immediately. There is a 10% chance the creature is sent to a random plane instead.</dd>
    <dt>Critical Failure</dt> <dd>As Failure, and the target is barred from returning to this plane of existence for at least 10 years.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation'], 4);

        $power               = new Power;
        $power->name         = 'Dispel Psionics';
        $power->action_type  = 'Double Action';
        $power->requirements = 'You must have the Detect Psionics power';
        $power->display      = 'Visual';
        $power->targets      = 'One manifester, creature, or object';
        $power->range        = '200 foot range';
        $power->area         = '20-ft radius emanation';
        $power->duration     = 'Instantaneous or 1D4 rounds';
        $power->description  = "<p>You can use this power to end ongoing powers that have been manifested on a creature or object, to temporarily suppress the psionic abilities of a psionic item, or to end ongoing powers within an area. A dispelled power ends as if its duration had expired. Some powers, can’t be defeated by dispel psionics, or can be ended only if you manifest dispel psionics at a high enough manifester level.</p>
<p>The effect of a power with an Instantaneous duration can't be dispelled since the effect is already over before this power can take effect.</p>
<p>You can choose to use this power in one of two ways.</p>
<dl>
    <dt>Targeted Dispel</dt> <dd>
        <p>One object, creature, or power is the target of the dispel psionics power. You make a dispel check (1d20 + your manifester level, maximum +10) against the power or against each ongoing power currently in effect on the object or creature. The DC for this dispel check is 11 + the power’s manifester level. If you succeed on a particular check, that power is dispelled; if you fail, that power remains in effect.</p>
        <p>If you target an object or creature that is the effect of an ongoing power or is under the effect of an ongoing power, you make a dispel check to end the power or its effect. If the object that you target is a psionic item, you make a dispel check against the item’s manifester level. If you succeed, all the item’s psionic properties are suppressed for 1d4 rounds, after which the item recovers on its own. A suppressed item becomes nonpsionic for the duration of the effect. An interdimensional interface is temporarily closed. A psionic item’s physical properties are unchanged: A suppressed psionic sword is still a sword (a masterwork sword, in fact). Artifacts and deities are unaffected by mortal power such as this.</p>
        <p>You automatically succeed on your dispel check against any power that you manifested yourself</p>
    </dd>
    <dt>Area Dispel</dt> <dd>
        <p>When dispel psionics is used in this way, the power affects everything within a 20-foot radius. For each creature within the area that is the subject of one or more powers, you make a dispel check against the power with the highest manifester level. If that check fails, you make dispel checks against progressively weaker powers until you dispel one power (which discharges the dispel psionics power so far as that target is concerned) or until you fail all your checks. The creature’s psionic items are not affected.</p>
        <p>For each object within the area that is the target of one or more powers, you make dispel checks as with creatures. Psionic items are not affected by an area dispel</p>
        <p>For each ongoing area or effect power whose point of origin is within the area of the dispel psionics power, you can make a dispel check to dispel the power.</p>
        <p>If an object or creature that is the effect of an ongoing power is in the area, you can make a dispel check to end the power that created that object or construct in addition to attempting to dispel powers targeting the creature or object. You can choose to automatically succeed on dispel checks against any power that you have manifested.</p>
    </dd>
</dl>";
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase your bonus to dispel check by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 3);

        $power              = new Power;
        $power->name        = 'Dissipating Touch';
        $power->action_type = 'Double Action';
        $power->display     = 'Auditory, Visual';
        $power->range       = 'Touch';
        $power->targets     = 'Creature or object touched';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>Your mere touch can disperse the surface material of a foe or object, sending a tiny portion of it far away. Make a melee Touch Attack. If you hit, you deal 2D6 Slashing points of damage.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation'], 1);

        $power                 = new Power;
        $power->name           = 'Distract';
        $power->action_type    = 'Distract';
        $power->display        = 'Mental';
        $power->range          = '60 feet';
        $power->targets        = 'On creature';
        $power->save_attribute = 'CHA';
        $power->duration       = 'Concentration, up to 10 minutes';
        $power->description    = "<p>You cause the target's mind to wander, distracting them. The target makes all Perception checks with Disadvantage.</p>";
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power              = new Power;
        $power->name        = 'Divination';
        $power->action_type = 'Triple Action';
        $power->display     = 'Visual, Mental';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>Divination can provide a useful piece of advice in reply to a question concerning a specific goal, event, or activity that is to occur within 1 week. The advice can be as simple as a short phrase, or it might take the form of a cryptic rhyme or omen.</p>
<p>The base chance for a correct divination is 70% + 1% per manifester level. The DM adjusts the chance if unusual circumstances require it. If the dice roll fails, the manifester knows the power failed, unless specific psionics or magic yielding false information is at work.</p>
<p>Multiple divinations about the same action by the same manifester use the same dice roll result as the first divination and yield the same answer each time.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 4);

        $power                 = new Power;
        $power->name           = 'Dominate';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Mental';
        $power->requirements   = 'The target must have lost at least 5 points of ability damage';
        $power->range          = '200 feet';
        $power->targets        = 'One humanoid creature';
        $power->save_attribute = 'CHA';
        $power->duration       = '1 day, or until dismissed';
        $power->description    = '<p>As the Dominate spell, except as noted here.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Target is unaffected</dd>
    <dt>Success</dt> <dd>Slowed 1 for 1 round as it fights off your commands</dd>
    <dt>Failure</dt> <dd>The target follows your orders but attempts a WIS Save at the end of each of its turns. On success, the spell is dismissed</dd>
    <dt>Critical Failure</dt> <dd>As failure, but the target receives a new save only whenever you give it a new order that is against its nature</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+5)</dt> <dd>You can target a non-humanoid creature</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 4);

        $power              = new Power;
        $power->name        = 'Drain Life';
        $power->action_type = 'Double Action';
        $power->range       = 'Touch';
        $power->targets     = 'Creature touched';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You are able to drain the life force from the touched target and heal your own damage.</p>
<p>Make a Melee Touch attack, the target loses 4 CON and 20 Hit Points unless they successfully make a CON Save, and you gain Hit Points equal to the amount of Hit Point damage the target suffers. Treat your Melee Touch attack as an Armed attack.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>Increase the CON damage by +1 and the Hit Point damage by 5</dd>
</dl>';
        $power->saves = '<dt>
    <dt>Critical Success</dt> <dd>The target loses one quarter Hit Points and no CON</dd>
    <dt>Success</dt> <dd>The target loses one half Hit Points and one half CON damage</dd>
    <dt>Failure</dt> <dd>The target loses full Hit Points and full CON damage</dd>
    <dt>Critical Failure</dt> <dd>The targets suffers as Failure, and is Fatigued</dd>
</dt>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 5);

        $power              = new Power;
        $power->name        = 'Drain Vigor';
        $power->action_type = 'Double Action';
        $power->range       = 'Touch';
        $power->targets     = 'Creature touched';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You transfer vigor from target creature touched and heals your own wounds.</p>
<p>Make a Melee Touch attack. if you hit, you deal 3D6 Negative damage and heals you of the same amount.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage and heal by +1D6</dd>
    <dt>Heightened (+4)</dt> <dd>You may manifest this power at a range of 30 feet.</dd>
</dl>';
        $power->saves = '<dl>
    <dt>Critical Success</dt> <dd>You take damage equal to the number of dice, not the total the dice rolled</dd>
    <dt>Success</dt> <dd>Half damage and half life gain</dd>
    <dt>Failure</dt> <dd>Full damage and full life gain</dd>
    <dt>Critical Failure</dt> <dd>The target also suffers 2 points of CON damage.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 3);
    }
}
