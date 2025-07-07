<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersBSeeder extends Seeder
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
        $power->name           = 'Baleful Sending';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Material, Visual';
        $power->range          = '60 feet';
        $power->targets        = 'One corporeal creature';
        $power->save_attribute = 'CON';
        $power->requirements   = 'You must have the Teleport power';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You disperse minuscule portions of the subject using Psychoportation, dealing 9D6 points of damage by making a Ranged Touch attack. Targets can be protected from the effects of baleful teleport by dimensional anchor.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>One quarter damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by 1D6</dd>
    <dt>Heightened (+3)</dt> <dd>Instead, you simply teleport the whole target to a place that you know. The target takes no damage from being teleported.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation'], 5);

        $power              = new Power;
        $power->name        = 'Barrage';
        $power->action_type = 'Action';
        $power->display     = 'Visual';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You boost your movements to super-natural high levels, allowing you to strike at many targets in what others perceive as the blink of an eye. Your actions are so rapid that they leave visual echoes of your previous position in the air as you move. These quickly fade.</p>
<p>You may use an Action to make a single Ranged attack with one ranged weapon (or several thrown weapons of the same type) against each target within one range increment of your weapon, similar to the Whirlwind feat. You still expend ammunition as normal for these attacks.</p>
<p>You may not make more attacks with Barrage than your manifester level.</p>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 5);

        $power              = new Power;
        $power->name        = 'Battlesense';
        $power->action_type = 'Triple Action';
        $power->display     = 'Mental';
        $power->targets     = 'Self and up to 5 other willing creatures';
        $power->duration    = '10 minutes';
        $power->description = "<p>You link the minds of your allies, dramatically improving their coordination. When you manifest this power, a type of heads-up display appears in each target's mind, improving their coordination and group awareness. Each affected target gains an additional Action which can only be used to take the Aid Another Action.</p>
<p>Additionally, chose one of the following benefits. All members gain the benefits of the chosen.</p>
<ul>
    <li>+1 Circumstance bonus to attack rolls</li>
    <li>+1 Circumstance bonus to AC</li>
    <li>+2 Circumstance bonus to weapon damage</li>
    <li>+5 Circumstance bonus to Base Speed</li>
</ul>";
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can choose an additional special ability. You may not choose the same ability a second time.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 3);

        $power              = new Power;
        $power->name        = 'Bend Reality';
        $power->action_type = 'Triple Action';
        $power->display     = 'Visual';
        $power->range       = 'See text';
        $power->targets     = 'See text';
        $power->duration    = 'See text';
        $power->description = '<p>Bend reality lets you create nearly any type of effect.</p>
<ul>
    <li>Duplicate any power of 6th level or lower, provided you have access to the discipline</li>
    <li>Duplicate any power of 5th level or lower, even if you do not have access to the discipline</li>
    <li>Undo the harmful effects of many powers, such as Dominate (Psionic), Geas/Quest, or Insanity</li>
</ul>
<p>A duplicated power allows Saves as normal</p>
<p>Manifesting this power causes the manifester to take 2 points of CON damage.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>
        You may manifest this power with the following effects. Increase the CON damage to 5
        <ul>
            <li>Duplicate any power of 8th level or lower, provided you have access to the discipline</li>
            <li>Duplicate any power of 7th level or lower, even if you do not have access to the discipline</li>
            <li>Undo the harmful effects of many other powers, such as Microcosm, Geas/Quest, or Insanity</li>
            <li>Create a nonpsionic item of up to 25,000 gp in value</li>
            <li>Create a psionic item, or add to the powers of an existing psionic item</li>
            <li>Grant a permanent +1 inherent bonus to an ability score. A character can have up to 5 ability boosts total, with at most +3 to a single attribute. This requires 1,000 experience from the recipient and 200 experience from the manifestor</li>
            <li>Remove all injuries and afflictions from the target</li>
            <li>Revive the dead, as the Resurrection spell, however it will require 2 manifestations, once to create the body, and once more to return life to the body.</li>
            <li>Transport any creature from one plane to any other plane of existence. You must be able to see the target or have mental contact and have visited the destination personally. An unwilling target gets a CHA Save to resist. Manifesting this version of the power requires six Actions</li>
            <li>Undo misfortune. Manifesting this version of the power forces a reroll of any roll made within the last round (including your last turn). Reality reshapes itself to accomodate the new result. The reroll, however may be as bad or worse than the original roll. An unwilling target gets a CHA Save to negate the effect.</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 8);

        $power                 = new Power;
        $power->name           = 'Bio-electricity';
        $power->action_type    = 'Action';
        $power->display        = 'Auditory, Visual';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'CON';
        $power->description    = '<p>You generate electricity from your body, causing 3D4 Electricity damage to all who are in contact with you.</p>
<p>If you are holding onto a piece of metal, you can deliver your Electricity attack through it to any who are also in contact with the metal object.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D4</dd>
</dl>';
        $power->saves = '<dl>
    <dt>Special</dt> <dd>If the target is wearing any form of metal armor, they suffer a -5 penalty to their Save</dd>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism', 'Electricity'], 1);

        $power              = new Power;
        $power->name        = 'Biofeedback';
        $power->action_type = 'Action';
        $power->display     = 'Material, Visual';
        $power->duration    = '10 minutes';
        $power->description = '<p>You gain Damage Resistance to Bludgeoning, Piercing, and Slashing attacks.</p>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power                 = new Power;
        $power->name           = 'Blindness';
        $power->action_type    = 'Double Action';
        $power->display        = 'Visual';
        $power->save_attribute = 'CON';
        $power->requirements   = 'You must have the Body Adjustment Power';
        $power->range          = 'Touch';
        $power->targets        = 'Living creature touched';
        $power->duration       = '1 minute';
        $power->description    = "<p>You make a Melee Touch Attack. If you hit, the target is Blinded. At the beginning of the target's turn, they may make a CON Save. If they Succeed, the Blindness is ended. After the Duration, the Blindness is ended without needing a Save.</p>";
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>The Blindness Condition ends</dd>
    <dt>Failure</dt> <dd>The Blindness Condition continues</dd>
</dl>';
        $power->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 3);

        $power              = new Power;
        $power->name        = 'Body Adjustment';
        $power->action_type = 'Double Action';
        $power->display     = 'Auditory, Material';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous';
        $power->description = "<p>You take control of your body's healing process, curing yourself of 1D6 + 6 points of damage.</p>";
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the amount healed by +1D6 +1</dd>
    <dt>Heightened (+2)</dt> <dd>
        <p>By expending your Psionic Focus, you may as a Reaction, place yourself in a state of suspended animation. While in this suspended state, you do not age, breathe, grow hungry, sleep, or regain Power Points, Spell Points, or spent Spell Slots. You are unaware of your surroundings and cannot use subconscious powers. Outside forces can damage your body, but as long as your head remains attached to your torso and your brain remains intact, the physical damage can be healed.</p>
        <p>You may activate this power in response to being fatally injured to defer death.</p>
        <p>While in a suspended state, you may come out of it if you have a positive amount of Hit Points (although you cannot sense the outside world so you cannot choose to end the state of suspended animation based on outside events, and your mind is unconscious so you cannot choose to end this after a certain amount of time, the only trigger that you can notice is that you were healed enough to not die should you end the suspended animation state).</p>
    </dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism', 'Healing'], 1);

        $power              = new Power;
        $power->name        = 'Body Equilibrium';
        $power->action_type = 'Action';
        $power->display     = 'Auditory';
        $power->targets     = 'Self';
        $power->duration    = '10 minutes';
        $power->description = "<p>You can adjust your body's equilibrium to correspond with any solid or liquid that you stand on. Thus, you can walk on water, quicksand or even a spider's web without sinking or breaking through. You can not take more than 2 Move Actions in a single turn or the effect will fail.</p>
<p>If you fall from any height while this power is active, damage form the impact is halved.</p>";
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+2)</dt> <dd>This Power simulates the effects of the spell Floating Step, but Self only.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power              = new Power;
        $power->name        = 'Body Purification';
        $power->action_type = 'Triple Action';
        $power->display     = 'Auditory, Material';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You can do the following</p>
<ul>
    <li>You restore up to 2 points of Ability Score damage.</li>
    <li>Allow target to make an additional Save vs a Disease afflicting it with a +2 bonus.</li>
    <li>Allow target to make an additional Save vs a Poison afflicting it with a +2 bonus.</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the ability restored by 1</dd>
    <dt>Heightened (+1)</dt> <dd>You can target others with a range of Touch</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism', 'Healing'], 3);

        $power              = new Power;
        $power->name        = 'Body Restoration';
        $power->action_type = 'Triple Action';
        $power->display     = 'Auditory, Material';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You can do the following</p>
<ul>
    <li>End the Blindness condition. This does not end Blindness caused by physical damage</li>
    <li>End the Deafness condition. This does not end Deafness caused by physical damage</li>
    <li>End the Paralyzed condition. This does not end Paralysis caused by physical damage</li>
    <li>End the Fatigued condition.</li>
    <li>Remove one level of Exhaustion. If this removes the Exhaustion condition, then you gain the Fatigued condition.</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can target others with a range of Touch</dd>
    <dt>Heightened (+8)</dt> <dd>
        <p>You may also do the following</p>
        <ul>
            <li>End the Drained condition.</li>
            <li>End the Enervated condition.</li>
            <li>End the Exhausted condition.</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 3);

        $power                 = new Power;
        $power->name           = 'Brain Disruption';
        $power->action_type    = 'Double Action';
        $power->display        = 'Material, Visual';
        $power->requirements   = 'The target must have suffered amount of ability damage (See text)';
        $power->targets        = 'One humanoid';
        $power->range          = '90 feet';
        $power->save_attribute = 'WIS';
        $power->duration       = 'Concentration + 1 round';
        $power->description    = "<p>You mess with the targets mind. You can cause the following affects</p>
<dl>
    <dt>Brain Lock</dt> <dd>
        <p>The target must have at least 1 point of Ability damage</p>
        <p>The subject's higher mind is locked away. He stands Dazed as long as this power is in effect or until they Save. They may only take the following actions.</p>
        <ul>
            <li>A Brain Locked flyer must descend to the closest safe level area below it</li>
            <li>A Brain Locked air-breathing swimmer must make for the surface.</li>
        </ul>
        <p>Each round on its turn, the subject may attempt a new Save to end the Effect. The Save attempt is a Triple Action that does provoke Attacks of Opportunity.</p>
    </dd>
    <dt>Crisis of Breath</dt> <dd>
        <p>This version requires an additional 2 Power Points to manifest. The target must have at least 3 points of Ability damage.</p>
        <p>You compel the subject to purge its entire store of air in one explosive exhalation, and thereby disrupt the subject's automatic breathing cycle. The subject's lungs to not automatically function again while the power's duration lasts.</p>
        <p>If the target Succeeds its WIS Save, they must consciously use an Action to breathe and can go 2 rounds without breathing.</p>
        <p>If the target Fails their Save, they must consciously use a Double Action to breathe and must breathe every round.</p>
        <p>If a target goes too many rounds without breathing, they must make a CON Save or become Unconscious. The DC of this Save increase by +1 for each consecutive round they do not take a breath. Once the target takes a breath, the DC resets.</p>
    </dd>
</dl>
<p>For every 2 Power Points spend above the minimum required, the Save DC increases by 1</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>
        <p>This power can affect the following</p>
        <ul>
            <li>Animal</li>
            <li>Fey</li>
            <li>Monstrosity</li>
            <li>Giants</li>
        </ul>
    </dd>
    <dt>Heightened (+4)</dt> <dd>
        <p>This power can affect the following</p>
        <ul>
            <li>Aberration</li>
            <li>Dragon</li>
            <li>Extra Planar Creatures</li>
        </ul>
    </dd>
</dl>';
        $power->saves = '<dl>
    <dt>Success</dt> <dd>
        <dl>
            <dt>Brain Lock</dt> <dd>The Brain Lock ends</dd>
            <dt>Crisis of Breath</dt> <dd>Requires an Action to consciously breathe and can go 2 rounds without breathing or start to make CON Saves to not become Unconscious</dd>
        </dl>
    </dd>
    <dt>Failure</dt> <dd>
        <dl>
            <dt>Brain Lock</dt> <dd>The Brain Lock continues</dd>
            <dt>Crisis of Breath</dt> <dd>Requires a Double Action to consciously breathe and must breathe every round or start to make CON Saves to not become Unconscious</dd>
        </dl>
    </dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 2);

        $power                 = new Power;
        $power->name           = 'Brutalize Wounds';
        $power->action_type    = 'Double Action';
        $power->display        = 'Visual';
        $power->targets        = '1 creature';
        $power->save_attribute = 'WIS';
        $power->requirements   = 'The target must have suffered at least 5 points of ability damage';
        $power->duration       = '1 minute';
        $power->description    = "<p>You invade the target's mind and temporarily reduce their ability to ward off attacks. If the target succeeds on its Save, its hardiness is still depleted, and the target takes 1 extra point of damage per die of damage it is dealt from Melee or Ranged attacks while the duration lasts. If it fails its Save, it takes maximum damage plus 1 point of extra damage per die of damage it is dealt from Melee or Ranged attacks while the duration lasts.</p>
<blockquote>
    A greatsword that normally deals 1D12 damage hits the target, they take 13 points of damage from the hit automatically
</blockquote>
<p>A target that knows that it is under the effect may spend an Action to make an additional Save. They cannot suffer a worse condition as a result of this Save.</p>";
        $power->saves = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>Only suffer an addition point of damage per die of damage</dd>
    <dt>Failure</dt> <dd>Suffer maximum damage</dd>
    <dt>Critical Failure</dt> <dd>Double maximum damage</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Compulsion', 'Ability Damage'], 5);

        $power              = new Power;
        $power->name        = 'Burst';
        $power->action_type = 'Action';
        $power->display     = 'Auditory';
        $power->targets     = 'Self';
        $power->duration    = '5 rounds';
        $power->description = '<p>You gain the Quick condition. The extra Action may only be used for Stride Actions.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>The Action type becomes Free Action.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 1);
    }
}
