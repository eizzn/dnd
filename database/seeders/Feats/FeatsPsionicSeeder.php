<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsPsionicSeeder extends Seeder
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

        $feat              = new Feat;
        $feat->name        = 'Psychic Speed';
        $feat->description = '<p>While you are Psionically Focused, you gain an additional Action. This additional Action can only be used to take the Stride Action.</p>';
        $helper->addTypesToFeat($feat, ['Psionic']);

        $feat              = new Feat;
        $feat->name        = 'Combat Manifestation';
        $feat->description = '<ul>
    <li>You gain a Psionic Talent</li>
    <li>You gain Advantage on Concentration checks made to manifest a power defensively or while you are grappling or pinned.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Focused Mind';
        $feat->description = '<ul>
    <li>You gain a Psionic Talent</li>
    <li>When you use the Concentration skill to become Psionically Focused, you have Advantage on the check.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Focus', 'Talent']);
        $feat->parent_feats()->save(app()->feats['Combat Manifestation']);

        $feat              = new Feat;
        $feat->name        = 'Improved Focused Mind';
        $feat->description = '<p>You may now hold an additional Psionic Focus at the same time.</p>
<p>You may take this feat up to three times.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Focused Mind']);

        $feat              = new Feat;
        $feat->name        = 'Greater Focused Mind';
        $feat->requirement = 'You must have at least one Metapsionic feat';
        $feat->description = '<p>While you are Psionically Focused, your Powers now cost 2 Power Points less instead of 1.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Improved Focused Mind']);

        $feat              = new Feat;
        $feat->name        = 'Supreme Focused Mind';
        $feat->requirement = 'You must have at least 2 Metapsionic feats';
        $feat->description = '<p>While you are Psionically Focused, your Powers now cost 3 Power Points less instead of 2.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Greater Focused Mind']);

        $feat              = new Feat;
        $feat->name        = 'Wild Talent';
        $feat->description = '<ul>
    <li>You are now considered a Psionic Character and you can use General Feats to take Psionic Feats.</li>
    <li>You gain 2 Power Points.</li>
    <li>You gain one 1st level Power</li>
    <li>If you do not have a Manifester Level, you now have a Manifester Level equal to the number of Psionic Feats</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic']);

        $feat              = new Feat;
        $feat->name        = 'Expanded Knowledge';
        $feat->description = '<ul>
    <li>You may choose a Psionic Discipline, you may now add powers from that Disciple.</li>
    <li>You learn two additional powers.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic']);

        $feat              = new Feat;
        $feat->name        = 'Psionic Talent';
        $feat->description = '<p>You gain additional Power Points. Gain an amount equal to the number of Psionic Feats you have (including this one):</p>
<p>The total Power Points gain may change if you gain or lose Psionic Feats.</p>
<p>You may take this Feat multiple times.</p>';
        $helper->addTypesToFeat($feat, ['Psionic']);

        $feat              = new Feat;
        $feat->name        = 'Overchannel';
        $feat->description = '<p>While manifesting a power, you can increase your effective manifester level by two, but in so doing you take 2D4 points of Subdual damage.</p>
<p>The effective increase in manifester level increases the number of Power Points you can expend on a single power manifestation, as well as increasing all manifester level-dependent effects, such as range, and duration.</p>';
        $helper->addTypesToFeat($feat, ['Psionic']);

        $feat              = new Feat;
        $feat->name        = 'Talented';
        $feat->trigger     = 'Expend your Psionic Focus to gain this benefits of this feat';
        $feat->description = '<p>Expend your Psionic Focus. Until the beginning of your next turn, Overchanneling a power of 3rd level or lower does not cause any damage.</p>
<p>You can now Overchannel by four levels, taking 4D4 Subdual damage.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Overchannel']);

        $feat              = new Feat;
        $feat->name        = 'Body Fuel';
        $feat->action_type = 'Free';
        $feat->description = '<p>You can, as an Action, take a point of ability damage to STR, DEX, or CON to recover 7 Power Points.</p>
<p>Only living creatures can take advantage of this feat.</p>';
        $helper->addTypesToFeat($feat, ['Psionic']);
        $feat->parent_feats()->save(app()->feats['Overchannel']);
        $feat->parent_feats()->save(app()->feats['Talented']);

        $feat              = new Feat;
        $feat->name        = 'Boost Construct';
        $feat->description = '<p>When you create an Astral Construct, you can give it one additional special ability from any menu that the construct currently has an ability from.</p>';
        $helper->addTypesToFeat($feat, ['Psionic']);

        $feat              = new Feat;
        $feat->name        = 'Psionic Fist';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>While you are Psionicly Focused, your Unarmed Strikes deal an additional 2 point of damage. Additionally, if you expend your Psionic Focus as part of your Strike, your Strike is resolved as a Touch Attack (TAC) and deals an additional +2D6.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Psionic', 'Psionic Focus', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Greater Psionic Fist';
        $feat->action_type = 'Free';
        $feat->description = '<p>At the beginning of your turn, expend your Psionic Focus. Your unarmed Strikes deal an additional +5D6 damage until the beginning of your next turn.</p>';
        $helper->addTypesToFeat($feat, ['Melee', 'Psionic', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Psionic Fist']);

        $feat              = new Feat;
        $feat->name        = 'Divine Fist';
        $feat->action_type = 'Action';
        $feat->description = '<p>As an Action, you may expend a Divine Spell Slot. For the next 1 minute, your Unarmed Strikes deal an additional +!D6 damage for each level of the Spell Slot expended. Half the damage is Fire and the other half is Divine.</p>';
        $helper->addTypesToFeat($feat, ['Melee', 'Psionic', 'Fire', 'Divine']);
        $feat->parent_feats()->save(app()->feats['Psionic Fist']);

        $feat              = new Feat;
        $feat->name        = 'Psionic Weapon';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>While you are Psionicly Focused, your melee weapons deal an additional 1 point of damage. Additionally, if you expend your Psionic Focus as part of your Strike, your Strike is resolved as a Touch Attack (TAC) and deals an additional Weapon Die of damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Psionic', 'Psionic Focus', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Greater Psionic Weapon';
        $feat->action_type = 'Free';
        $feat->description = '<p>At the beginning of your turn, expend your Psionic Focus. Your melee weapon Strikes deal an additional +3 Weapon Dice of damage until the beginning of your next turn.</p>';
        $helper->addTypesToFeat($feat, ['Melee', 'Psionic', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Psionic Weapon']);

        $feat              = new Feat;
        $feat->name        = 'Psionic Shot';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>While you are Psionicly Focused, your ranged weapons deal an additional 1 point of damage. Additionally, if you expend your Psionic Focus as part of your Strike, your Strike is resolved as a Ranged Touch Attack (TAC) and deals an additional Weapon Die of damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ranged', 'Psionic', 'Psionic Focus', 'Talent']);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);

        $feat              = new Feat;
        $feat->name        = 'Greater Psionic Shot';
        $feat->action_type = 'Free';
        $feat->description = '<p>At the beginning of your turn, expend your Psionic Focus. Your ranged weapon Strikes deal an additional +3 Weapon Die of damage until the beginning of your next turn.</p>';
        $helper->addTypesToFeat($feat, ['Ranged', 'Psionic', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Psionic Weapon']);

        $feat              = new Feat;
        $feat->name        = 'Psionic Combat Buffer';
        $feat->trigger     = 'Expend your Psionic Focus to gain this benefits of this feat';
        $feat->requirement = 'You must have at least 3 Psionic Combat powers';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>Expend your Psionic Focus, for the next 1 minute, the Power Point costs of all your Psionic Combat powers cost 1 Power Point less.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Focus', 'Psionic Combat', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Improved Psionic Combat Buffer';
        $feat->trigger     = 'Expend your Psionic Focus to gain this benefits of this feat';
        $feat->requirement = 'You must have at least 7 Psionic Combat powers';
        $feat->description = '<p>Expend your Psionic Focus, for the next 1 minute, the Power Point costs of all your Psionic Combat powers costs 2 Power Points less.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Focus', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Psionic Combat Buffer']);

        $feat              = new Feat;
        $feat->name        = 'Delay Power';
        $feat->action_type = 'Action';
        $feat->description = '<p>Expend your Psionic Focus and add an additional Action to the manifestation of the power. You can manifest a power that will take effect at a later time. When you manifest the power, you choose one of three trigger mechanisms.</p>
<ul>
    <li>The power activates when you take an Action to activate it. After 8 hours, if the power is still delayed, it will activate automatically.</li>
    <li>It activates when a creature enters the area that the power will affect (only powers that affect areas can use this trigger conditions). After 8 hours, if the power is still delayed, it will activate automatically.</li>
    <li>It activates on your turn somewhere between 3 and 10 rounds without requiring an Action. You must set the delay when you manifest the power, and it cannot be changed after.</li>
</ul>
<p>Only powers that target Self, or has an area value can be delayed.</p>
<p>Any decisions you would make about the delayed power, including attack rolls, designating targets, or determining or shaping an area, are decided when the power is manifested. Any effecs resolved by those affected by the power, including Saves, are decided when the delay period ends.</p>
<p>A delayed power can be dispelled normally during the delay (or dismissed by you as an Action), and can be detected normally in the area or on the target by the use of powers that can detect psionic effects.</p>
<p>Using this feat increases the Power Point cost of the power by 2.</p>';
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);

        $feat              = new Feat;
        $feat->name        = 'Empower Power';
        $feat->action_type = 'Free';
        $feat->description = '<p>Expend your Psionic Focus. You can empower a Power. The following variables are increased by one-half.</p>
<ul>
    <li>Damage</li>
    <li>Healing</li>
</ul>
<p>Using this feat increases the Power Point cost of the power by 2.</p>';
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);

        $feat              = new Feat;
        $feat->name        = 'Enlarge Power';
        $feat->action_type = 'Free';
        $feat->description = '<p>Expend your Psionic Focus. You can manifest an enlarged power. Enlarged powers have their ranges doubled.</p>
<p>Using this feat increases the Power Point cost of the power by 1.</p>';
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);

        $feat              = new Feat;
        $feat->name        = 'Extend Power';
        $feat->action_type = 'Free';
        $feat->description = "<p>Expend your Psionic Focus. You can manifest an extended power. An extended power's duration is doubled.</p>
<p>Using this feat increases the Power Point cost of the power by 1.</p>";
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);

        $feat              = new Feat;
        $feat->name        = 'Maximum Power';
        $feat->action_type = 'Free';
        $feat->description = '<p>Expend your Psionic Focus. You can manifest a maximized power. The following variables are the maximum possible value.</p>
<ul>
    <li>Damage</li>
    <li>Healing</li>
</ul>
<p>Using this feat increases the Power Point cost of the power by 2.</p>';
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);

        $feat              = new Feat;
        $feat->name        = 'Opportunity Power';
        $feat->action_type = 'Reaction';
        $feat->description = '<p>Expend your Psionic Focus. When you make an Attack of Opportunity, you can use any power you know with a range of touch, if you have at least one hand free. The power must be a Double Action activation power or less. You manifest the power as a Reaction.</p>
<p>Using this feat increases the Power Point cost of the power by 1.</p>';
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Attack of Opportunity', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Improved Reaction']);

        $feat              = new Feat;
        $feat->name        = 'Quicken Power';
        $feat->action_type = 'Free';
        $feat->description = '<p>Expend your Psionic Focus. You can quicken a power. A quickened power reduces the number of required Actions by 2.</p>
<p>Using this feat increases the Power Point cost of the power by 3.</p>';
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);
        $feat->parent_feats()->save(app()->feats['Improved Reaction']);

        $feat              = new Feat;
        $feat->name        = 'Split Psionic Ray';
        $feat->action_type = 'Free';
        $feat->description = "<p>Expend your Psionic Focus. You can split psionic rays you manifest. The split ray affects any two targets that are both within the power's range and within 30 feet of each other. If the ray deals damage, each target takes as much damage as a single target would take.</p>
<p>Using this feat increases the Power Point cost of the power by 1.</p>";
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);

        $feat              = new Feat;
        $feat->name        = 'Twin Power';
        $feat->action_type = 'Free';
        $feat->description = '<p>Expend your Psionic Focus. You can twin a power. Manifesting a twinned power causes it to take effect twice. Resolve each manifestation separately.</p>
<p>Using this feat increases the Power Point cost of the power by 3.</p>';
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);

        $feat              = new Feat;
        $feat->name        = 'Widen Power';
        $feat->action_type = 'Free';
        $feat->description = '<p>Expend your Psionic Focus. You can widen a power. Manifesting a widened power causes its area to be doubled.</p>
<p>Using this feat increases the Power Point cost of the power by 2.</p>';
        $helper->addTypesToFeat($feat, ['Metapsionic', 'Psionic', 'Psionic Focus']);

        $feat              = new Feat;
        $feat->name        = 'Psionic Combatant';
        $feat->description = '<ul>
    <li>You gain 2 Psionic Talents</li>
    <li>You gain 5 Power Points. These Power Points may only be used to pay for Psionic Combat Powers.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Combat', 'Talent']);
        $feat->parent_feats()->save(app()->feats['Combat Manifestation']);

        $feat              = new Feat;
        $feat->name        = 'Defensive Psionic Combatant';
        $feat->description = '<ul>
    <li>You gain a Psionic Talent</li>
    <li>You gain 3 Power Points. These Power Points may only be used to pay for Psionic Combat Powers</li>
    <li>When manifesting a Defensive Psionic Combat power, Heightening it costs 1 Power Point less.</li>
    <li>If you Expended your Psionic Focus as part of manifesting the Defensive Psionic Combat power, you are immune to Ability Damage from Psionic Combat attacks until the beginning of your next turn.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Combat', 'Psionic Focus', 'Talent']);
        $feat->parent_feats()->save(app()->feats['Combat Manifestation']);

        $feat              = new Feat;
        $feat->name        = 'Aggressive Psionic Combatant';
        $feat->description = "<ul>
    <li>You gain a Psionic Talent</li>
    <li>You gain 3 Power Points. These Power Points may only be used to pay for Psionic Combat Powers</li>
    <li>When manifesting a Psionic Combat Attack power, you may Expend your Psionic Focus as part of manifesting the power. If you do, you may add your Primary Attribute's modifier to the damage.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Psionic', 'Psionic Combat', 'Talent']);
        $feat->parent_feats()->save(app()->feats['Combat Manifestation']);

        $feat              = new Feat;
        $feat->name        = 'Crane Stance';
        $feat->requirement = 'You are Unarmed';
        $feat->description = "<p>You enter the Stance of the Crane, holding your arms in an imitation of a crane's wings and using flowing, defensive motions.</p>
<ul>
    <li>+1 circumstance bonus to AC</li>
    <li>You only take a -1 penalty to Hit for taking the Fighting Defensively Action</li>
    <li>If you take the Fighting Defensively Action, you gain an Additional +1 Dodge bonus to your AC.</li>
    <li>You gain an Additional Action. This additional Action may only be used to make Parry Actions or Deflect Ranged Attack Actions</li>
    <li>Reduce the DC for High Jump and Long Jump by 5</li>
    <li>When you Leap, you can move an additional 5 feet horizontally or 2 feet vertically</li>
    <li>As a Free Action, while you are in this Stance, you may spend 1 Power Point to gain a +2 Psychic Bonus to your AC until the beginning of your next turn.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Stance', 'Unarmed', 'Agile', 'Finesse', 'Nonlethal']);

        $feat              = new Feat;
        $feat->name        = 'Dragon Stance';
        $feat->requirement = 'You are Unarmed';
        $feat->description = '<p>You enter the Stance of the Dragon and make powerful strikes.</p>
<ul>
    <li>You gain a +2 bonus to your STR while you are in this Stance</li>
    <li>You can make Dragon Punch attacks. This attack is an Unarmed Strike that deals your base Unarmed Strike damage plus an Extra Damage Dice and Double your STR modifier</li>
    <li>You gain a +1 bonus to Hit and Damage to Sunder attacks while in Dragon Stance. You also Double your STR modifier to Damage on the Sunder attack if you hit.</li>
    <li>You gain Damage Resistance vs Fire while in Dragon Stance</li>
    <li>As a Free Action, while you are in this Stance, you may spend 1 Power Point to gain a +2 bonus to your STR until the beginning of your next turn.</li>
    <li>
        <p>You cannot take the following Actions while in Dragon Stance</p>
        <ul>
            <li>Flurry of Blows</li>
            <li>Grapple Attacks</li>
        </ul>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Unarmed', 'Backswing', 'Nonlethal']);

        $feat              = new Feat;
        $feat->name        = 'Horse Stance';
        $feat->requirement = 'You are Unarmed and touching the ground';
        $feat->description = "<p>You enter the Stance of the Horse, making yourself difficult to shove/push, grapple and trip.</p>
<ul>
    <li>+10 circumstance bonus against being Shoved, Tripped, or Grappled</li>
    <li>You gain a +2 Deflection bonus to AC</li>
    <li>You gain Damage Resistance to Bludgeoning. If the Bludgeoning damage is 5 or less, then you take no damage.</li>
    <li>You have a DEX modifier cap to your AC of +0, meaning you don't add your DEX to your AC</li>
    <li>Your land Speed becomes 5 ft and you may not Burrow, Climb, Fly, or Swim</li>
    <li>You are immune to being Stunned by Stunning Fist attacks</li>
    <li>You must be touching the ground with both feet to gain the benefits of this stance.</li>
    <li>As a Free Action, while you are in this Stance, you may spend 1 Power Point to gain Damage Reduction 3 until the beginning of your next turn.</li>
    <li>
        <p>You may not make the following attacks</p>
        <ul>
            <li>Trip attacks</li>
            <li>Grapple attacks</li>
            <li>Stunning Fist</li>
            <li>Quivering Palm</li>
        </ul>
    </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Stance', 'Unarmed', 'Forceful', 'Nonlethal']);

        $feat              = new Feat;
        $feat->name        = 'Mantis Stance';
        $feat->requirement = 'You are Unarmed';
        $feat->description = '<p>You enter the Stance of the Mantis, low to the ground with your hands held like picks.</p>
<ul>
    <li>You may make all your Unarmed Strikes Nonlethal without any penalties. If you do, your Unarmed Strikes deal an additional +5 Damage</li>
    <li>You gain an additional use of Stunning Fist</li>
    <li>At the beginning of combat, if you do not have any uses of Stunning Fist, you gain one use of Stunning Fist</li>
    <li>The DC to resist your Stunning Fist increases by +2</li>
    <li>As an Action, you may spend 3 Power Points and 2 uses of Stunning Fist to make all of your Unarmed Strikes be Stunning Fist attacks until the beginning of your next turn.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Unarmed', 'Agile', 'Nonlethal']);
        $feat->parent_feats()->save(app()->feats['Stunning Fist']);

        $feat              = new Feat;
        $feat->name        = 'Monkey Stance';
        $feat->requirement = 'You are Unarmed, except for staves';
        $feat->description = '<p>You can enter the Stance of the Monkey, improving your Acrobatics and Feints.</p>
<ul>
    <li>You gain a +5 bonus on all Acrobatics checks</li>
    <li>You gain a +3 bonus on Feint checks</li>
    <li>You gain a +2 bonus to AC while in this Stance</li>
    <li>If you perform an Acrobatics check to make an Acrobatic move, you gain a +1 bonus to your next Unarmed Strike Damage attack that you make in the same turn.</li>
    <li>You gain a +10 bonus to all your Climb checks and you gain a +5 bonus to your Climb Speed.</li>
    <li>You gain the Improved Flurry of Blows Feat.</li>
    <li>You are treated as having the Weapon Focus feat for all Staves.</li>
    <li>You may take the Weapon Specialization feat for Staves, even if you do not qualify at 6th Character Level</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Unarmed']);

        $feat              = new Feat;
        $feat->name        = 'Snake Stance';
        $feat->requirement = 'You are Unarmed';
        $feat->description = '<p>You can enter the Stance of the Snake.</p>
<ul>
    <li>You gain the Improved Initiative feat</li>
    <li>You gain a +2 bonus on all Grapple checks</li>
    <li>You deal an additional +2 damage on Grapple based attacks</li>
    <li>You may spend 1 Power Point as an Immediate Action and gain a +5 bonus to your Initiative</li>
    <li>You gain an Additional use of Stunning Fist</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Unarmed']);

        $feat              = new Feat;
        $feat->name        = 'Tiger Stance';
        $feat->requirement = 'You are Unarmed';
        $feat->description = '<p>You enter the Stance of the Tiger.</p>
<ul>
    <li>You gain the Tiger Claw attack. It deals your Unarmed Strike damage but the damage type becomes Slashing.</li>
    <li>While in this Stance, you gain a +2 bonus to STR.</li>
    <li>On a Critical Hit with your Tiger Claw, if you deal damage, the target takes 1D4 Persistent Bleed damage</li>
    <li>You gain a +5 bonus to all your Jump results while in this Stance</li>
    <li>As an Action, you may spend 1 Power Point to have your Tiger Claw attacks ignore Damage Resistance until the beginning of your next turn.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Unarmed', 'Agile', 'Finesse', 'Nonlethal']);

        $feat              = new Feat;
        $feat->name        = 'Koryo Style';
        $feat->requirement = 'You are Unarmed';
        $feat->description = '<p>You enter the Stance taught in Koryo</p>
<ul>
    <li>You gain a +5 bonus to all your Jump results while in this Stance</li>
    <li>You gain a +1 bonus to Hit on all Unarmed Strikes you make with your leg, knee, or foot</li>
    <li>All Unarmed Strikes you make with your leg, knee or foot deals an additional +5 damage</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Unarmed', 'Nonlethal']);

        $feat              = new Feat;
        $feat->name        = 'Shoto Style';
        $feat->requirement = 'You must have the Pyrokinesis Power';
        $feat->description = '<p>You are trained in the Martial Arts style of the Shoto.</p>
<p>You gain the following</p>
<ul>
    <li>You gain 2 Power Points</li>
    <li>You gain a Heroic Surge</li>
    <li>When you use the Pyrokinesis power to make a Ranged Touch attack, you deal an additional +3 damage.</li>
    <li>If you have the Dragon Punch Feat, you may spend a Heroic Surge and manifest your Pyrokinesis Power and add the Damage to the target you hit with your Dragon Punch.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Stance', 'Heroic Surge']);
        $feat->parent_feats()->save(app()->feats['Improved Unarmed Strike']);

        $feat              = new Feat;
        $feat->name        = 'Tu Lung Style';
        $feat->requirement = 'You must have the Electrokinesis power and the Burst power';
        $feat->description = '<p>You are trained in the Martial Arts style of Tu Lung</p>
<ul>
    <li>You gain 2 Power Points</li>
    <li>You gain a Heroic Surge</li>
    <li>You gain a +5 bonus on all Athletics (High Jump and Long Jump) checks</li>
    <li>Using a Move Action, you may use a vertical surfaces as a platform to make vertical and horizontal jumps.</li>
    <li>When you use the Electrokinesis power to deliver a Touch attack, it deals an additional +3 damage.</li>
    <li>If you are Grappling or being Grappled, you may spend a Heroic Surge and manifest your Electrokinesis Power against that target that you are Grappling or are being Grappled by.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Heroic Surge']);
        $feat->parent_feats()->save(app()->feats['Improved Unarmed Strike']);
        $feat->parent_feats()->save(app()->feats['Wild Talent']);

        $feat              = new Feat;
        $feat->name        = 'Timeless Body';
        $feat->requirement = 'You must have at least 1 Psychometabolism power of 3rd level or higher';
        $feat->description = "<p>Your Psionic powers sustain you so that you suffer none of the frailty of old age, and you can't be aged magically or psionically. You can still die of old age, however. In addition, you no longer need food or water.</p>";
        $helper->addTypesToFeat($feat, ['Psionic']);

        $feat              = new Feat;
        $feat->name        = 'Acid Psi-Resistance';
        $feat->requirement = 'You must have the Acid Psychometabolism power';
        $feat->description = '<p>Due to your ability to generate Acid, you have developed a level of resistance.</p>
<p>You have Resistance to Acid. If the damage before your resistance is applied is 5 Acid damage or less, then you take no damage.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychometabolism', 'Acid']);

        $feat              = new Feat;
        $feat->name        = 'Acid Psi-Immunity';
        $feat->requirement = 'You must have the Acid Psychometabolism power';
        $feat->description = '<p>You are Immune to Acid</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychometabolism', 'Acid']);
        $feat->parent_feats()->save(app()->feats['Acid Psi-Resistance']);

        $feat              = new Feat;
        $feat->name        = 'Venom Psi-Resistance';
        $feat->requirement = 'You must have the Venom Psychometabolism power';
        $feat->description = '<p>Due to your ability to generate Toxins, you have developed a level of resistance.</p>
<p>You have Resistance to Poison. If the damage before your resistance is applied is 5 Poison damage or less, then you take no damage.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychometabolism', 'Poison']);

        $feat              = new Feat;
        $feat->name        = 'Venom Psi-Immunity';
        $feat->requirement = 'You must have the Venom Psychometabolism power';
        $feat->description = '<p>You are Immune to Poison</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychometabolism', 'Poison']);
        $feat->parent_feats()->save(app()->feats['Venom Psi-Resistance']);

        $feat              = new feat;
        $feat->name        = 'Fire Psi-Resistance';
        $feat->requirement = 'You must have the Pyrokinesis power';
        $feat->description = '<p>Due to your ability to generate Fire, you have developed a level of resistance.</p>
<p>You have Resistance to Fire. If the damage before your resistance is applied is 5 Fire damage or less, then you take no damage.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychokinesis', 'Fire']);

        $feat              = new Feat;
        $feat->name        = 'Fire Psi-Immunity';
        $feat->requirement = 'You must have the Pyrokinesis power';
        $feat->description = '<p>You are Immune to Fire</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychokinesis', 'Fire']);
        $feat->parent_feats()->save(app()->feats['Fire Psi-Resistance']);

        $feat              = new Feat;
        $feat->name        = 'Cold Psi-Resistance';
        $feat->requirement = 'You must have the Cryokinesis power';
        $feat->description = '<p>Due to your ability to generate Cold, you have developed a level of resistance.</p>
<p>You have Resistance to Cold. If the damage before your resistance is applied is 5 Cold damage or less, then you take no damage.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychokinesis', 'Cold']);

        $feat              = new Feat;
        $feat->name        = 'Cold Psi-Immunity';
        $feat->requirement = 'You must have the Cryokinesis power';
        $feat->description = '<p>You are Immune to Cold</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychokinesis', 'Cold']);
        $feat->parent_feats()->save(app()->feats['Cold Psi-Resistance']);

        $feat              = new Feat;
        $feat->name        = 'Electricity Psi-Resistance';
        $feat->requirement = 'You must have the Electrokinesis power';
        $feat->description = '<p>Due to your ability to generate Electricity, you have developed a level of resistance.</p>
<p>You have Resistance to Electricity. If the damage before your resistance is applied is 5 Electricity damage or less, then you take no damage.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychokinesis', 'Electricity']);

        $feat              = new Feat;
        $feat->name        = 'Electricity Psi-Immunity';
        $feat->requirement = 'You must have the Electrokinesis power';
        $feat->description = '<p>You are Immune to Electricity</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychokinesis', 'Electricity']);
        $feat->parent_feats()->save(app()->feats['Electricity Psi-Resistance']);

        $feat              = new Feat;
        $feat->name        = 'Sonic Psi-Resistance';
        $feat->requirement = 'You must have the Sonickinesis power';
        $feat->description = '<p>Due to your ability to generate Sonics, you have developed a level of resistance.</p>
<p>You have Resistance to Sonic. If the damage before your resistance is applied is 5 Sonic damage or less, then you take no damage.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychokinesis', 'Sonic']);

        $feat              = new Feat;
        $feat->name        = 'Sonic Psi-Immunity';
        $feat->requirement = 'You must have the Sonickinesis power';
        $feat->description = '<p>You are Immune to Sonic</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Psychokinesis', 'Sonic']);
        $feat->parent_feats()->save(app()->feats['Sonic Psi-Resistance']);

        $feat              = new Feat;
        $feat->name        = 'Ghost Touch';
        $feat->requirement = 'Must be Psionicly Focused';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>While you are Psionically Focused, your Unarmed Strikes deals damage normally against Incorporeal creatures and creatures that are in the Ethereal Plane. You also deal an additional +5 damage to Incorporeal and Ethereal. If an Incorporeal or Ethereal creature tries to grab you or pass through you, they suffer the additional damage for doing so.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Incorporeal']);

        $feat              = new Feat;
        $feat->name        = 'Ghost Weapon';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>Expend your Psionic Focus, up to 2 weapons (one held in each hand) gains the Ghost Touched ability for 30 minutes. Those weapons also deal an additional +15 damage to Incorporeal and Ethereal creatures. Incorporeal and Ethereal creatures cannot touch these weapons without taking the additional damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Incorporeal']);

        $feat              = new Feat;
        $feat->name        = 'Dorje Mastery';
        $feat->description = '<p>Psionic dorjes are more potent in your hands</p>
<ul>
    <li>As an additional Action, you may trigger a Dorje and treat the manifestation as if it were heightened by +4 Power Points. The amount of total Power Points cannot exceed your Power Points per turn limit.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic']);
        $feat->parent_feats()->save(app()->feats['Craft Dorje']);
    }
}
