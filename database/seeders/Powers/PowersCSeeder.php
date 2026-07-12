<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersCSeeder extends Seeder
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
        $power->name        = 'Call to Mind';
        $power->action_type = 'Special (1 minute)';
        $power->display     = 'Mental';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>By meditating on a subject, you can recall natural memories and knowledge otherwise inaccessible to you. On a failed Knowledge check, you can manifest this power to gain a new check with a +3 competence bonus and Advantage. If successful, you instantly recall what was previously buried in your subconscious.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the bonus by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 1);

        $power              = new Power;
        $power->name        = 'Call Object';
        $power->action_type = 'Action';
        $power->display     = 'Material';
        $power->targets     = 'Small object previously touched';
        $power->range       = '100 miles';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You may psionically mark an object of size small or smaller (such as a medium sized weapon). Marking an object takes 1 minute and does not require any power points. You may only mark inanimate objects (no creatures). Detect Psionics will identify an object as psionically marked. You may have up to 3 opjects marked at any time.</p>
<p>By using this power, you call to your hand one of the marked objects, after which, the object is no longer marked. The object can travel a distance of up to 100 miles and only if it is on the same plane of existence. Marking a container (such as a chest or backpack) only brings the container to you, not any of the contents. You may mark magical items, but calling an item that involves extra-dimensional effects can have similar effects as putting a bag of holding inside a portable hole.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the range by 200 miles</dd>
    <dt>Heightened (+3)</dt> <dd>You may call an object one size category larger</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation'], 1);

        $power                 = new Power;
        $power->name           = 'Calm Emotions';
        $power->action_type    = 'Double Action';
        $power->display        = 'Mental';
        $power->range          = '120 feet';
        $power->area           = '15-foot burst';
        $power->save_attribute = 'CHA';
        $power->duration       = '1 minute';
        $power->description    = '<p>Creatures in the area become calm, depending on their Save.</p>';
        $power->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>Calming urges give a -1 conditional penalty to attack rolls</dd>
    <dt>Failure</dt> <dd>You suppress emotions effects and prevent the creature from acting hostile. If it is subject to hostility from any other creature, it ceases to be affected by Calm Emotions.</dd>
    <dt>Critical Failure</dt> <dd>As failure, but hostility doesn't end the effect</dd>
</dl>";
        $helper->addTypesToPower($power, ['Telepathy', 'Emotion'], 2);

        $power                   = new Power;
        $power->name             = 'Catapsi';
        $power->action_type      = 'Double Action';
        $power->display          = 'Mental, Visual';
        $power->maintenance_cost = '1 Power Point per round';
        $power->requirements     = 'You must have the Dispel Psionics power';
        $power->area             = '30-foot radius emanation';
        $power->targets          = 'Self';
        $power->save_attribute   = 'CHA';
        $power->duration         = 'Concentration, up to 10 minutes';
        $power->description      = '<p>By manifesting this power, you generate psychic static, interfering with the ability of other psionic characters to manifest their powers or use psi-like abilities (you are not affected). All psionic activity within the area requires 4 more power points to manifest than normal, unless a character makes a CHA Save each time they attempt to manifest a power.</p>
<p>The limit on the number of power points a subject can spend on a power remains in effect; thus, a subject may not be able to manifest its highest-level powers. If manifesting a power would cause the manifester to exceed his available power points or his spending limits, the manifestation fails automatically, but no power points are expended.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+4)</dt> <dd>Increase the range and area by 10 feet</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 5);

        $power                   = new Power;
        $power->name             = 'Chameleon';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->display          = 'Olfactory';
        $power->targets          = 'Self';
        $power->duration         = '12 hours';
        $power->description      = '<p>Your skin and equipment take on the color and texture of nearby objects, including floors and walls. You receive a +10 Enhancement bonus to Hide (Stealth) checks.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power                 = new Power;
        $power->name           = 'Charisma Blast';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Mental';
        $power->range          = '30 feet';
        $power->targets        = 'One living creature with an INT score';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'WIS';
        $power->description    = '<p>You psychically induce weakness in the target. You deal 1D4 CHA damage to the target. You need line of sight to the target.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 and Heighten +2 without spending any additional Power Points</dd>
    <dt>Heightened (+3)</dt> <dd>If the target fails their Save, they gained the Frightened 2 Condition.</dd>
    <dt>Heightened (+4)</dt> <dd>The spell gains an area effect of a 30-foot cone and all in the area are affected.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 2);

        $power                   = new Power;
        $power->name             = 'Charisma Defense';
        $power->action_type      = 'Reaction';
        $power->maintenance_cost = '1 Power Point per round';
        $power->display          = 'Mental';
        $power->targets          = 'Self';
        $power->duration         = 'Concentration';
        $power->description      = '<p>You raise a mental defense that grants a +2 bonus to WIS Saves and reduces the damage from Vitality Blast, Life Blast and CHA Blast by 1.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 and the Duration becomes 3 rounds</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by +1</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus to WIS Saves by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 1);

        $power                   = new Power;
        $power->name             = 'Charm';
        $power->action_type      = 'Double Action';
        $power->maintenance_cost = '1 Power Point per hour';
        $power->display          = 'Mental';
        $power->requirements     = 'You must have at least one Psionic Combat attack power';
        $power->targets          = 'One humanoid';
        $power->save_attribute   = 'WIS';
        $power->duration         = 'Concentration, upto 3 hours';
        $power->description      = '<p>As the Charm spell except as noted here.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +2 hours</dd>
    <dt>Heightened (+2)</dt> <dd>You can affect an Animal, Fey, or Monstrosity</dd>
    <dt>Heightened (+4)</dt> <dd>You can affect any type of creature</dd>
</dl>';
        $power->saves            = "<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected and aware you tried to charm it</dd>
    <dt>Success</dt> <dd>The target is unaffected, but is unaware that you tried to charm it</dd>
    <dt>Failure</dt> <dd>The target's attitude becomes friendly toward you. If it was friendly, it becomes helpful. It can't act hostile toward you</dd>
    <dt>Critical Failure</dt> <dd>Target is helpful and can't act hostile towards you</dd>
</dl>";
        $helper->addTypesToPower($power, ['Telepathy', 'Mental'], 1);

        $power                   = new Power;
        $power->name             = 'Clairvoyant Sense';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->display          = 'Auditory, Visual';
        $power->range            = 'See text';
        $power->duration         = '1 hour';
        $power->description      = "<p>You can see and hear a distant location almost as if you were there. You don’t need line of sight or line of effect, but the locale must be known, a place familiar to you or an obvious one, such as behind a door, around a corner, or in a grove of trees. Once you have selected the locale, the focus of your clairvoyant sense doesn't move, but you can rotate it in all directions to view the area as desired. Unlike other scrying powers, this power does not allow psionically or supernaturally enhanced senses to work through it.</p>
<p>If the chosen locale is magically or psionically dark, you see nothing. If it is naturally pitch black, you can see in a 10-foot radius around the center of the power’s effect or out to the extent of your natural darkvision. The power does not work across planes.</p>";
        $helper->addTypesToPower($power, ['Clairsentience'], 2);

        $power                   = new Power;
        $power->name             = 'Cloud Mind';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '1 Power Point per minute';
        $power->targets          = 'One creature with an INT score';
        $power->display          = 'None';
        $power->requirements     = 'You must have a Psionic Combat Attack power';
        $power->save_attribute   = 'WIS';
        $power->duration         = '1 hour';
        $power->description      = "<p>You make yourself completely undetectable to the subject by erasing all awareness of your presence from their mind. This power has the following effects:</p>
<ul>
    <li>You are visible and make sound, but the target just doesn't acknowledge your presence. They cannot detect you by means of any sense. Even if you have a Faerie Fire spell on you, the target does not sense you. The target cannot pinpoint your location by any means.</li>
    <li>The target remains unaware of your actions, provided you do not make any attacks or cause any obvious or directly threatening changes in the subject's environment. If you attack the subject creature, the effect ends.</li>
</ul>
<p>If you take an action that creates a sustained and obvious change in the subject's environment - for example, attacking a creature aside from the subject or moving a large or attended object the subject can see - the subject immediately gains a Save against the power. An ally of the subject creature that is able to see or perceive you can use an Action to warn the target and thereby grant it a new Save.</p>";
        $power->saves            = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Cannot perceive you</dd>
</dl>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target an additional target. Each target makes their own WIS Save.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Mental'], 2);

        $power                   = new Power;
        $power->name             = 'Cold Absorption';
        $power->action_type      = 'Reaction';
        $power->maintenance_cost = '1 Power Point per round';
        $power->duration         = '5 round';
        $power->requirements     = 'You must have the Cryokinesis power';
        $power->targets          = 'Self';
        $power->description      = '<p>You gain the ability to be resist Cold damage and possibly heal your wounds.</p>
<p>When you manifest this power, choose one.</p>
<ul>
    <li>Gain Damage Reduction 12 to Cold. You gain 1 Hit Point for every 3 points of Cold damage you absorb. This can cause ice to melt.</li>
    <li>You gain Immunity to Cold (half damage)</li>
</ul>';
        $power->heightened       = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by +5</dd>
    <dt>Heightened (+2)</dt> <dd>The Duration becomes 5 rounds</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Duration by 2 rounds</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Cold'], 2);

        $power                   = new Power;
        $power->name             = 'Combat Sense';
        $power->action_type      = 'Free';
        $power->maintenance_cost = '1 Power Point per hour';
        $power->targets          = 'Self';
        $power->duration         = '4 hours';
        $power->description      = '<p>You gain the combat skills of a trained warrior.</p>
<ul>
    <li>You gain a +1 bonus to all Attacks</li>
    <li>You become skilled with all Weapons</li>
    <li>You become skilled with all Shields and Armor</li>
    <li>You gain 1 Heroic Surge. You lose this Heroic Surge if you do not use it before the end of the duration.</li>
    <li>You may pick 1 Talent that you qualify for and gain its benefits while this Power is active.</li>
</ul>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may pick an additional Talent</dd>
    <dt>Heightened (+3)</dt> <dd>You may pick a Feat that you qualify for</dd>
    <dt>Heightened (+3)</dt> <dd>You gain an additional Heroic Surge</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 3);

        $power                   = new Power;
        $power->name             = 'Compression';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per minute';
        $power->targets          = 'Self';
        $power->display          = 'Olfactory';
        $power->duration         = '1 hour';
        $power->description      = '<p>You shrink to size Tiny and your equipment shrinks with you, but returns to natural size if removed. Your reach changes to 0 feet. This spell has no effect if you are already Tiny.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power                   = new Power;
        $power->name             = 'Concealing Ectoplasm';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->requirements     = 'You must have the Ectoplasmic Creation power';
        $power->display          = 'Material';
        $power->targets          = 'Self';
        $power->duration         = '1 hour';
        $power->description      = '<p>You weave a quasi-real ectoplasmic membrane around yourself. You remain visible within the translucent, amorphous enclosure. This distortion grants you concealment (granting a 20% miss chance). You can pick up or drop objects, easily reaching through the film. Anything you hold is enveloped by the ectoplasm. Likewise, you can engage in melee, make ranged attacks, and manifest powers without hinderance.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+2)</dt> <dd>The miss chance becomes 50%</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 2);

        $power                   = new Power;
        $power->name             = 'Contingency';
        $power->action_type      = '10 minutes or longer, see text';
        $power->maintenance_cost = '3 Power Points per day';
        $power->targets          = 'Self';
        $power->duration         = '1 month or until discharged';
        $power->description      = '<p>You can place another power upon your person so that it comes into effect under some condition you dictate when manifesting psionic contingency. The contingency power and the companion power are manifested at the same time. The 10-minute manifesting time is the minimum total for both manifestation. If the companion power has a manifesting time longer than 10 minutes, use that instead.</p>
<p>The power to be brought into effect by the contingency must be one that affects your person and be of a power level no higher than one-third your manifester level (rounded down, maximum 6th level).</p>
<p>The conditions needed to bring the power into effect must be clear, although they can be general. In all cases, the contingency immediately brings into effect the companion power, the later being manifested instantaneously only when the prescribed circumstances occur. If complicated or convoluted conditions are prescribed, the power combination may fail when called on.</p>
<p>Having a contingency power counts as an Attuned magic item.</p>';
        $helper->addTypesToPower($power, ['Clairsentience', 'Attunement'], 6);

        $power                   = new Power;
        $power->name             = 'Control Air';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->display          = 'Mental';
        $power->range            = '500 foot range';
        $power->area             = '50-ft radius emanation';
        $power->duration         = 'Concentration, up to 1 hour';
        $power->requirements     = 'You must have the Telekinesis power';
        $power->description      = '<p>You have some control over wind speed and direction. The speed of the wind within the area of this power can be increased or decreased yb up to 10 miles per hour with an Action.</p>
<p>You may alter the direction of the wind by as much as 90 degrees.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>Modify the wind speed by an additional 10 miles per hour. This power can be heightened at most 5 times.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Air'], 2);

        $power                   = new Power;
        $power->name             = 'Control Body';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '3 Power Points per minute';
        $power->display          = 'Material';
        $power->requirements     = 'You must have the Telekinesis power';
        $power->range            = '150 feet';
        $power->targets          = 'One medium or smaller creature with humanoid physiology';
        $power->save_attribute   = 'STR';
        $power->duration         = 'Concentration, up to 30 minutes';
        $power->description      = "<p>You telekinetically control the actions of any humanoid (including undead or outsiders with humanoid physiology) that is within range and to which you have line of sight. Control body doesn't require mental contact with the subject, since you are actually forcing limb movements independent of the target's mind. You can force the subject to stand up, sit down, walk, turn around, and so on, but operating the vocal cords is too difficult. You can also hold the subject immobile, rendering it helpless. You cannot force the subject to manifest powers, cast spells, or use any special ability that is not a function of just its body movements. If you lose line of sight to the subject, the effect of this power ends.</p>
<p>If you force the subject to engage in combat, its attack bonus is equal to your base attack bonus + your primary ability modifier, and its bonus on damage rolls is equal to your primary ability modifier. A subject of this power cannot make Attacks of Opportunity. The subject gains no benefit to AC from its DEX, but it does gain a bonus to its AC to your INT bonus.</p>
<p>Although the subject's body is under your control, the subject's mind is not. Creatures capable of taking purely mental actions (such as manifesting powers) can do so.</p>";
        $power->heightened       = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the size category this power can affect</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Force'], 4);

        $power                   = new Power;
        $power->name             = 'Control Object';
        $power->action_type      = 'Double Action';
        $power->maintenance_cost = '2 Power Points per minute';
        $power->display          = 'Material';
        $power->range            = '120 feet';
        $power->targets          = 'One unattended object weighing up to 100 lbs';
        $power->duration         = 'Concentration, up to 30 minutes';
        $power->description      = '<p>You telekinetically "bring to life" an inanimate object. Though it is not actually alive, the object moves under your control.</p>
<p>Live vegetation cannot be controlled in this fashion, nor can already animated objects or undead. The controlled object moves like a puppet, with jerky and clumsy movements, at a speed of up to 20 feet. If its form is rigid, it makes creaking, groaning, or grating sounds as you control it.</p>
<p>A controlled object can attack an opponent if you spend an Action to do so. It has one slam attack, at a base attack bonus equal to your base attack bonus plus your INT modifier. If the attack hits, it deals points of damage equal to 1d6 plus your INT modifier. A controlled object has its usual hardness and hit points.</p>
<p>You can use this power on a nonmagical lock, making it move in such a way as to attempt to unlock itself. If another character makes an Open Lock check involving a lock that you are concentrating on controlling, the character gains a +4 bonus on the check.</p>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Force'], 1);

        $power                   = new Power;
        $power->name             = 'Control Sound';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->display          = 'Auditory';
        $power->range            = '150 feet';
        $power->targets          = 'One sound or mixture of related sounds';
        $power->save_attribute   = 'CON';
        $power->duration         = 'Concentration, up to 1 hour';
        $power->description      = "<p>You are able to generate Electricity</p>
<ul>
    <li>You can shape and alter existing sounds. You can target one sound, such as a person speaking or singing, or a group of related sounds, such as the pattern of many raindrops or the tramp of soldiers passing by. A sound as quiet as a snapping finger can be controlled. You can substitute any sound you have heard for the target sound. If you attempt to exactly duplicate the voice of a specific individual, or an inherently terrifying sound (such as a dragon's roar), you must succeed on a Deception check with a +3 circumstance bonus opposed by the intended listener's Perception check to avoid arousing suspicion.</li>
    <li>You can create any sound.</li>
    <li>You can entirely muffle a noise or magnify a sound to such loudness that it drowns out all other conversation in the immediate area. In this way, you can provide yourself or any with a +3 circumstance bonus on Move Silently and Listen checks.</li>
    <li>You can create a Sonic attack. All in a 15-foot cone in front of you takes 1D6 Sonic damage on a Failed CON Save, or half as much on a Successful one. This has a duration of Instantaneous</li>
</ul>";
        $power->heightened       = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Sonic attack area of effect to a 30-foot cone</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the Sonic attack area of effect to a 60-foot cone</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Sonic attack by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Sonic'], 2);

        $power                 = new Power;
        $power->name           = 'Cryokinesis';
        $power->action_type    = 'Double Action';
        $power->range          = '30 feet';
        $power->save_attribute = 'CON';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You are able to generate Cold affects</p>
<ul>
    <li>Lower the temperature by -30 degrees (this requires a maintenance cost of 1 Power Point per minute)</li>
    <li>Create a handful of ice</li>
    <li>Deliver a freezing Touch attack that deals 1D8 Cold damage</li>
    <li>Shoot a freezing ray as a Ranged Touch attack that deals 1D8 Cold damage</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the temperature drop by -10 degrees</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the range by +30 feet</dd>
    <dt>Heightened (+1)</dt> <dd>The target must make a CON Save or lose 1 Action on their next turn</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the damage of the Touch attach by +1D8</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the damage of the Ranged Touch attack by +1D8</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Cold'], 1);

        $power                   = new Power;
        $power->name             = 'Crystalline Armor';
        $power->action_type      = 'Reaction';
        $power->maintenance_cost = '1 Power Point per round';
        $power->targets          = 'Self';
        $power->duration         = 'Concentration';
        $power->description      = '<p>You cover yourself in hard ectoplasm. You gain Damage Reduction 10 and your Speed is reduced by half until the start of your next turn.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Damage Reduction by +2</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 1);
    }
}
