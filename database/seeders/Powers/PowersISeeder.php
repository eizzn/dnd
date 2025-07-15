<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersISeeder extends Seeder
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
        $power->name        = 'Ice Armor';
        $power->action_type = 'Double Action';
        $power->targets     = 'Self';
        $power->duration    = '3 hours';
        $power->description = '<p>You freeze water out of the air around you, creating a layer of solid ice that protects you like armor. It grants the following effects.</p>
<ul>
    <li>Treat the ice as breastplate armor with Hardness 1 and 60 Hit Points.</li>
    <li>You gain Damage Resistance to Bludgeoning, Piercing, Slashing, and Fire attacks. The Ice Armor takes the other half of the damage (reduced by its Hardness). If the damage is Fire, then the Ice Armor takes full damage.</li>
</ul>
<p>This power does not work in environments where there is no water in the air.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>Increase the Hardness by +1 and the Hit Points by +30</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Cold'], 2);

        $power              = new Power;
        $power->name        = 'Immovability';
        $power->action_type = 'Double Action';
        $power->display     = 'Visual';
        $power->targets     = 'Self';
        $power->duration    = 'Concentration, up to 1 day';
        $power->description = '<p>You are almost impossible to move. Your weight does not vary, instead, you mentally attach yourself to the underlying fabric of the plane. Thus, you could conceivably anchor yourself in midair. Any creature attempting to physically move you must succeed on a opposed STR check, and you gain a +20 bonus on the check. You can\'t voluntarily move to a new location unless you stop Concentrating, which ends this power.</p>
<p>You cannot apply your DEX bonus to AC; however, your anchored body gains Damage Reduction: 15.</p>
<p>You may make simple physical melee attacks, but you may not take any movement Actions. Powers with the Teleportation descriptor, or any telekinetic effect, automatically fail against you.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>Reduce the number of Actions needed to manifest this power</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Force'], 3);

        $power              = new Power;
        $power->name        = 'Incarnate';
        $power->action_type = '1 minute';
        $power->display     = 'Material';
        $power->range       = 'Touch';
        $power->targets     = 'Creature touched';
        $power->duration    = 'Permanent, see text';
        $power->description = '<p>This power makes certain other powers permanent. You must heighten the power to be made permanent by 3 additional Power Points (even if the power does not have a Heighten option), after which you must cast Incarnate.</p>
<p>Each Incarnate spell counts as a Attuned magic item. You may remove an Incarnated Power by manifesting Incarnate again on the power to be removed.</p>';
        $helper->addTypesToPower($power, ['Clairsentience', 'Attunement'], 5);

        $power               = new Power;
        $power->name         = 'Inertial Armor';
        $power->action_type  = 'Double Action';
        $power->display      = 'Visual';
        $power->targets      = 'Self';
        $power->duration     = '8 hours';
        $power->requirements = 'You must have the Telekinesis power';
        $power->description  = '<p>You ward yourself with a tangible field of force, gaining a +4 armor bonus to AC (does not stack with physical armor, but does work with shields) and a +1 bonus to STR and DEX Saves. You use your unarmored proficiency to calculate your AC.</p>
<p>Your Inertial Armor can be invisible or can appear as a colored glow, at your option.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 2 and Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Force'], 1);

        $power               = new Power;
        $power->name         = 'Inertial Barrier';
        $power->action_type  = 'Double Action';
        $power->display      = 'Auditory, Mental';
        $power->targets      = 'Self';
        $power->duration     = '1 hour';
        $power->requirements = 'You must have the Telekinesis power';
        $power->description  = '<p>You create a skin-tight psychokinetic barrier around yourself that grants Damage Reduction 7 to Bludgeoning, Piercing, and Slashing damage.</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Damage Reduction by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Force'], 4);

        $power                 = new Power;
        $power->name           = 'Insanity';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Mental';
        $power->requirements   = 'The target must have at least 2 point of ability damage from Psionic Combat';
        $power->range          = '90 feet';
        $power->save_attribute = 'WIS';
        $power->targets        = 'One living creature';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>As the Confusion Spell, except as noted here.</p>
<p>Creatures affected by this power are Confused and behave randomly.</p>
<p>Only Psychic Chirurgery, Reality Revision, and other similar extreme measures can restore the target\'s sanity if it is permanent.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the powers Save DC by +1</dd>
</dl>';
        $power->saves = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Confused for 3 rounds</dd>
    <dt>Failure</dt> <dd>Confused for 1 week</dd>
    <dt>Critical Failure</dt> <dd>Confused Permanently</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 7);

        $power               = new Power;
        $power->name         = 'Intellect Fortress';
        $power->action_type  = 'Action';
        $power->display      = 'Auditory';
        $power->requirements = 'You must have Dispel Psionics power';
        $power->targets      = 'Self';
        $power->area         = '20-foot radius';
        $power->duration     = '1 round';
        $power->description  = '<p>You encase yourself and your allies in a shimmering fortress of telekinetic force. All protected by the power gains Resistance against all damage from psionic sources.</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 and Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Psionic Combat'], 4);

        $power                 = new Power;
        $power->name           = 'Intelligence Blast';
        $power->action_type    = 'Double Action';
        $power->display        = 'Mental';
        $power->range          = '30 feet';
        $power->targets        = 'One living creature with an INT score';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'WIS';
        $power->description    = '<p>You psychically befuddle the targets brain. You deal 1D4 INT damage to the target. You need line of sight to the target.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Take half damage</dd>
    <dt>Failure</dt> <dd>Take full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>Increase the INT damage by +1 and the Save DC by +1</dd>
    <dt>Heightened (+3)</dt> <dd>If the target fails their Save, they gain the Stupefied 1 condition for 2 round.</dd>
    <dt>Heightened (+4)</dt> <dd>The spell gains an area effect of a 30 foot cone and all in the area are affected.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 1);

        $power              = new Power;
        $power->name        = 'Intelligence Defense';
        $power->action_type = 'Action';
        $power->display     = 'Mental';
        $power->targets     = 'Self';
        $power->duration    = '1 round';
        $power->description = '<p>You raise a mental defense that grants a +2 bonus to WIS Saves and reduces the damage from Vitality Blast, Life Blast and INT Blast by 1.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 2 and Power Point cost by 1</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by +1</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus to WIS Saves by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 1);

        $power              = new Power;
        $power->name        = 'Invisibility';
        $power->action_type = 'Double Action';
        $power->display     = 'None';
        $power->targets     = 'Self';
        $power->duration    = 'Concentration, up to 10 minutes';
        $power->description = '<p>You cloud peoples minds, causing them to not be able to notice you through sight. You become Invisible as the spell.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this by 2 and Power Point cost by 1</dd>
    <dt>Heightened (+4)</dt> <dd>As the Invisibility spell when it is Heightened +2</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 2);
    }
}
