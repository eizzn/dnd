<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsFightingSeeder extends Seeder
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
        $feat->name        = 'Light Armor Proficiency';
        $feat->description = '<p>You have trained to master the use of light armor, gaining the following benefits.</p>
<ul>
    <li>Increase your STR or DEX score by 1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain proficiency with Light Armor</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Talent', 'Armor', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Medium Armor Proficiency';
        $feat->requirement = 'You must be proficient with Light Armor';
        $feat->description = '<p>You have trained to master the use of Medium Armor and Shields. You gain the following benefits.</p>
<ul>
    <li>Increase your STR or DEX score by 1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain proficiency with Medium Armor and Shields</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Talent', 'Armor', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Heavy Armor Proficiency';
        $feat->requirement = 'You must be proficient with Light and Medium Armor';
        $feat->description = '<p>You have trained to master the use of Heavy Armor. You gain the following benefits.</p>
<ul>
    <li>Increase your STR score by 1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain proficiency with Heavy Armor</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Talent', 'Armor', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Shield Master';
        $feat->requirement = 'You have proficiency with shields and are wielding a shield';
        $feat->description = "<p>You are skilled at using a shield.</p>
<ul>
    <li>Increase your STR or CON score by +1, to a maximum of 20</li>
    <li>If you are wielding a Shield, you gain a +1 Bonus to AC, even if you do not use an Action to raise your shield.</li>
    <li>If you have taken the Raise a Shield Action and you must make a DEX Save that allows half damage a successful Save, you may use a Reaction to add the shields' bonus to AC to your DEX Save</li>
    <li>You gain a +2 bonus to Bull Rush attacks and deal an additional +3 Damage if you hit</li>
    <li>If you use your shield to make a Melee Attack and your shield has a magical bonus, you can add the magical bonus to your attack roll with the shield (if you have taken the Raise a Shield Action, then attack with the shield, you lose the bonus from your Shield as if you had not taken the Raise a Shield Action)</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Melee', 'Shield', 'Fighter Feat' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Improved Shield Master';
        $feat->requirement = 'You are wielding a shield';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>Increase your STR or CON score by +1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>Whenever you take the Raise a Shield Action, you gain an additional +1 bonus to your AC</li>
    <li>You gain an additional Action. This additional Action can only be used for the Raise a Shield Action or to use the Shield Defender Talent.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Shield', 'Talent', 'Extra Action', 'Fighter Feat' => 7]);
        $feat->parent_feats()->save(app()->feats['Shield Master']);

        $feat              = new Feat;
        $feat->name        = 'Combat Mastery';
        $feat->description = '<ul>
    <li>You gain a Talent.</li>
    <li>You gain a +1 bonus to hit with Melee and Ranged attacks.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Melee Mastery';
        $feat->description = '<ul>
    <li>You gain 2 Talents.</li>
    <li>You gain a +1 bonus to hit with Melee attacks.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Ranged Mastery';
        $feat->description = '<ul>
    <li>You gain 2 Talents.</li>
    <li>You gain a +1 bonus to hit with Ranged attacks.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Weapons Group Mastery';
        $feat->description = '<ul>
    <li>You gain 3 Talents.</li>
    <li>Choose a Weapon Group. You gain a +1 bonus to hit when wielding a weapon from that group.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Weapon Focus';
        $feat->description = '<p>Choose one weapon (such as Long Sword). You can choose Unarmed Strike, Grapple, or Ray as your weapon for the purposes of this feat. You gain proficiency with the weapon if you do not already have proficiency.</p>
<ul>
    <li>You gain 2 Talents.</li>
    <li>You gain a +1 bonus an all attack rolls you make using the selected weapon.</li>
    <li>You gain a +1 bonus to all checks to resist having your selected weapon Disarmed</li>
    <li>You may take this Feat multiple times. Each time, you must choose a different weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent', 'Fighter Feat' => 4]);

        $feat              = new Feat;
        $feat->name        = 'Weapon Specialization';
        $feat->description = '<ul>
    <li>You gain a Talent.</li>
    <li>Choose a weapon you have Weapon Focus with. You gain a +5 bonus to damage to all attacks made with that weapon.</li>
    <li>You may take this Feat multiple times. Each time, you must choose a different weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Talent', 'Fighter Feat' => 6]);
        $feat->parent_feats()->save(app()->feats['Weapon Focus']);

        $feat              = new Feat;
        $feat->name        = 'Improved Weapon Focus';
        $feat->description = '<ul>
    <li>You gain 2 Talents.</li>
    <li>Choose one of the weapons you have chosen for Weapon Focus. Your bonus from your chosen weapon from Weapon Focus is now +2.</li>
    <li>You may take this Feat multiple times. Each time, you must choose a different weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent', 'Fighter Feat' => 9]);
        $feat->parent_feats()->save(app()->feats['Weapon Focus']);

        $feat              = new Feat;
        $feat->name        = 'Improved Weapon Specialization';
        $feat->description = '<ul>
    <li>You gain a Talent.</li>
    <li>Choose a weapon you have Improved Weapon Focus with. Your bonus damage from your Weapon Specialization is now +10</li>
    <li>You may take this Feat multiple times. Each time, you must choose a different weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Talent', 'Fighter Feat' => 12]);
        $feat->parent_feats()->save(app()->feats['Improved Weapon Focus']);

        $feat              = new Feat;
        $feat->name        = 'Extra Melee Action';
        $feat->description = '<p>You gain an additional Action. This additional Action can only be used to make a Melee Weapon attack.</p>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Extra Action']);

        $feat              = new Feat;
        $feat->name        = 'Extra Ranged Action';
        $feat->description = '<p>You gain an additional Action. This additional Action can only be used to make a Ranged Weapon attack.</p>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Extra Action']);

        $feat              = new Feat;
        $feat->name        = 'Talents Master';
        $feat->description = '<p>You gain 5 Talents.</p>
<p>You may take this Feat multiple times.</p>';
        $helper->addTypesToFeat($feat, ['Talent', 'Fighter Feat', 'Generic' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Sentinel';
        $feat->description = "<p>You have mastered techniques to take advantage of every drop in any enemy's guard, gaining the following benefits</p>
<ul>
    <li>You gain a Reaction. This Reaction can only be used to make Attacks of Opportunity.</li>
    <li>While in this Stance, you can make an Attack of Opportunity against opponents who make a Bull Rush attack even if they have the Improved Bull Rush Feat.</li>
    <li>While in this Stance, opponents who try to Tumble Through any square you threaten suffers a -10 penalty to their Acrobatics check.</li>
    <li>While in this Stance, when you hit a creature with an Attack of Opportunity, the creature's speed becomes 0 for the rest of the turn.</li>
    <li>While in this Stance, creatures within 5 feet of you provoke Attacks of Opportunity from you even if they take the Disengage action before leaving your reach.</li>
    <li>When a creature within 5 feet of you makes an attack against a target other than you (and that target doesn't have this feat), you can make an Attack of Opportunity against the attacking creature.</li>
    <li>
        <p>You may not take the following Actions while in this Stance</p>
        <ul>
            <li>Charge</li>
            <li>Stride Actions that move you more than 5 feet</li>
        </ul>
    </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Stance', 'Attack of Opportunity', 'Talent', 'Fighter Feat' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Juggernaut Stance';
        $feat->requirement = 'You are wielding a Two-Handed Melee weapon';
        $feat->description = "<p>You enter the Juggernaut Stance, planting your feet and refusing to yield ground.</p>
<ul>
    <li>While in this Stance, the first Action you take must be a Stride Action, and you must move at least 15 feet. If you don't, you end the Stance and suffer a -2 penalty to your AC until the beginning of your next turn (ending the Stance at the end of your turn Voluntarily does not cause this AC penalty).</li>
    <li>While in this Stance, you gain a +5 bonus to your Speed.</li>
    <li>While in this Stance, all your Charge attacks deal an additional +5 Damage.</li>
    <li>While in this Stance, you gain a +2 bonus to AC vs. Attacks of Opportunity.</li>
    <li>You may use a Heroic Surge while in this Stance. If you do, you may make a Trip Attack against any Target that you successfully Hit and Deal Damage to with a Charge Attack.</li>";
        $helper->addTypesToFeat($feat, ['Stance', 'Fighter Feat' => 5, 'Melee', 'Talent', 'Attack of Opportunity']);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Reckless Stance';
        $feat->requirement = 'You are wielding a Melee weapon';
        $feat->description = '<p>You enter the Reckless Stance, abandoning caution in favor of raw aggression.</p>
<ul>
    <li>Increase your STR by +1, to a maximum of 20.</li>
    <li>You take a -2 penalty to AC while you are in this Stance.</li>
    <li>While in this Stance you gain an Additional Action. This additional Action can only be used to make a Melee Weapon Attack.</li>
    <li>While in this Stance, all your Melee Weapon Attacks deal an additional +5 Damage.</li>
    <li>While in this Stance you may not make Ranged Weapon Attacks or cast any Spells.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Fighter Feat' => 6, 'Melee', 'Attack', 'Ability Boost', 'Extra Action']);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Whirling Stance';
        $feat->requirement = 'You are wielding two Melee weapons, one in each hand';
        $feat->description = '<p>You enter the Whirling Stance, weaving both weapons together into one continuous assault.</p>
<ul>
    <li>You gain a Heroic Surge.</li>
    <li>You gain a +1 bonus to AC while you are in this Stance.</li>
    <li>If you score a Critical Hit with one of your weapons, you gain a Free Action. This Free Action can only be used to make a single Melee attack with your other weapon against a different target within reach.</li>
    <li>While in this Stance, you may use a Heroic Surge. If you do, the next Melee Attack that hits is automatically a Critical Hit.</li>
    <li>
        <p>While in this Stance, you may not benefit from the Following Feats.</p>
        <ul>
            <li>Power Attack.</li>
            <li>Swipe Feat.</li>
            <li>Any of the Cleave Feats.</li>
            <li>Bull Rush.</li>
        </ul>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Fighter Feat' => 5, 'Melee', 'Extra Action', 'Heroic Surge']);
        $feat->parent_feats()->save(app()->feats['Two-Weapon Fighter']);

        $feat              = new Feat;
        $feat->name        = 'Duelist Stance';
        $feat->requirement = 'You are wielding a single one-handed Melee weapon and have nothing in your other hand';
        $feat->description = '<p>You enter the Duelist Stance, focusing your full skill against a single foe.</p>
<ul>
    <li>Increase your DEX by +1, to a maximum of 20.</li>
    <li>While in this Stance, you gain a +2 bonus to Athletics and Acrobatics checks.</li>
    <li>While in this Stance, you gain a +2 bonus to AC against Attacks of Opportunity.</li>
    <li>Choose one opponent within your reach when you enter this Stance, or as a Free Action on your turn thereafter. You gain a +1 circumstance bonus to AC and to Hit against that opponent.</li>
    <li>While in this Stance, you gain a Reaction. This Reaction can only be used to make a Melee attack against your chosen opponent immediately after they miss you with a Melee attack.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Fighter Feat' => 5, 'Melee', 'Finesse', 'Extra Action', 'Ability Boost']);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Skirmisher Stance';
        $feat->requirement = 'You are wearing Light or no Armor';
        $feat->description = '<p>You enter the Skirmisher Stance, relying on footwork to stay just out of reach.</p>
<ul>
    <li>Increase your DEX by +1, to a maximum of 20.</li>
    <li>While in this Stance you gain a +10 bonus to your Speed.</li>
    <li>While in this Stance you gain a +4 bonus to AC vs. Attacks of Opportunity.</li>
    <li>If you have moved at least 10 feet since the start of your last turn, you gain a +1 circumstance bonus to Hit and a +2 bonus to Damage with any Weapon Attack until the start of your next turn.</li>
    <li>
        <p>You may not take the following Actions while in this Stance</p>
        <ul>
            <li>Fight Defensively</li>
            <li>Total Defense</li>
        </ul>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Fighter Feat' => 6, 'Finesse', 'Move']);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Sharpshooter';
        $feat->requirement = 'You cannot take Move Actions while in this Stance';
        $feat->description = '<p>You have mastered range weapons and can make shots that others find impossible. You gain the following benefits.</p>
<ul>
    <li>While in this Stance, you do not suffer the long range penalty for making a ranged attack at long range</li>
    <li>Your ranged attacks ignore one-quarter cover</li>
    <li>While in this Stance, you may choose to take a -3 penalty to the attack roll. If the attack hits, it deals an additional +10 Damage.</li>
    <li>If you have the Improved Disarm feat, while in this Stance, you may make Disarm attempts at range with a ranged attack without any penalties</li>
    <li>If you have the Improved Trip feat, while in this Stance, you may make Trip attempts at range with a ranged attack without any penalties</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Ranged', 'Fighter Feat' => 7]);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);
        $feat->parent_feats()->save(app()->feats['Ranged Mastery']);

        $feat              = new Feat;
        $feat->name        = 'Stunning Fist';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>Your Unarmed Strike has a chance to Stun your target. To attempt a Stunning Strike, you must add an Action to your Strike and spend a Heroic Surge, 2 Spell Points, or 3 Power Points, and if the Strike successfully hits, the target must make a Stunning Save (10 + Character Proficiency Bonus + WIS modifier). If the Target Fails their Save, they gain the Stunned: 1 condition.</li>
    <li>You may use a Heroic Surge as part of making a Stunning Fist attack. If you do, you gain a +2 Bonus to Hit and if the Target Fails their Save, they are Stunned for an additional round.</li>
    <li>Each additional time this Action is used against the same opponent in the same Encounter, they gain a +2 bonus to their Save.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Heroic Surge', 'Unarmed', 'Diminishing', 'Fighter Feat' => 8]);

        $feat              = new Feat;
        $feat->name        = 'Improved Stunning Fist';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>The DC for your Stun Save is increased by +3</li>
    <li>Your Stunning Fist now causes Stunned 3.</li>
</ul>>';
        $helper->addTypesToFeat($feat, ['Melee', 'Unarmed', 'Heroic Surge', 'Fighter Feat' => 12]);
        $feat->parent_feats()->save(app()->feats['Stunning Fist']);
    }
}
