<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsMainTreeSeeder extends Seeder
{
    /*,,*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $feat              = new Feat;
        $feat->name        = 'Power Attack';
        $feat->action_type = 'Action';
        $feat->requirement = 'Wield a melee weapon that does not have the Agile or Finesse type.';
        $feat->description = '<ul>
    <li>Increase your STR score by 1, to a maximum of 20</li>
    <li>When you attack with a Melee weapon that does not have the Finesse or Agile trait, you get +1 damage per Weapon Die of the weapon you are using. If you use the weapon in 2 hands, you get +2 damage per Weapon Die of the weapon you are using.</li>
    <li>
        <p>At the beginning of your turn, you may choose to use this feat. If you do, the bonus to damage and the penalties to Hit applies until the beginning your next turn. The bonus to damage is in addition to the damage mentioned above.</p>
        <table>
            <thead>
                <tr>
                    <th>To Hit</th>
                    <th>Damage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>-1</td>
                    <td>+3 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-2</td>
                    <td>+6 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-3</td>
                    <td>+9 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-4</td>
                    <td>+12 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-5</td>
                    <td>+15 per Weapon Die</td>
                </tr>
            </tbody>
        </table>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Melee', 'Rage', 'Fighter Feat' => 1, 'Generic' => 2]);
        $feat->attributes()->save(app()->attributes['STR'], ['dc' => 13]);

        $feat              = new Feat;
        $feat->name        = 'Improved Sunder';
        $feat->action_type = 'Double Action';
        $feat->requirement = 'Wield a melee weapon that does not have the Agile or Finesse type.';
        $feat->description = "<p>You are skilled at breaking weapons</p>
<ul>
    <li>You gain a Heroic Surge</li>
    <li>When you strike an opponent's weapon or shield with a Sunder attack, you inflict an additional +3 damage. If the opponent is performing a Total Defense Stance, you deal an additional +3 damage (+6 total).</li>
    <li>You may spend a Heroic Surge as part of your Sunder attempt. If you do, the Additional Action from your Heroic Surge is used to make the Sunder attempt, and you deal an additional +5 damage.</li>
    <li>Each additional time you use this Action against the same opponent in the same Encounter, you deal a cumulative -3 Sunder damage.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Melee', 'Open', 'Rage', 'Diminishing', 'Heroic Surge', 'Fighter Feat' => 2, 'Generic' => 4]);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Improved Bull Rush';
        $feat->action_type = 'Double Action';
        $feat->description = '<p>You are skilled at rushing with your shield</p>
<ul>
    <li>You gain a Heroic Surge.</li>
    <li>When you perform a Bull Rush you do not provoke an Attack of Opportunity from the defender, but you do provoke from anyone else. You also gain a +4 bonus on the opposed STR check you make to push back the defender.</li>
    <li>You may spend a Heroic Surge as part of the Bull Rush attack. If you do, the extra Action from Heroic Surge is used as part of the Double Action to make the Bull Rush attack, and if you succeed, you may push the target an additional 5 feet.</li>
    <li>Each additional time you use this Action against the same opponent in the same Encounter, the bonus to the opposed STR check is reduced by -2.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Open', 'Rage', 'Diminishing', 'Heroic Surge', 'Melee', 'Attack', 'Fighter Feat' => 2, 'Generic' => 4]);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Swipe';
        $feat->action_type = 'Action';
        $feat->requirement = 'Wield a melee weapon that does not have the Agile or Finesse type and does Slashing damage';
        $feat->description = '<p>You take a mighty swing against two adjacent enemies.</p>
<p>Make a melee Strike and compare the attack result to the AC of up to two foes, both of whom must be within your melee reach and adjacent to each other. Roll damage only once, and apply it to each creature you hit. If you Critically Hit one target and not the other, roll the extra Critical Hit damage separately.</p>
<p>Hitting either of the two targets can trigger Cleave, but you cannot strike either of the two initial targets with the additional attack from Cleave.</p>';
        $helper->addTypesToFeat($feat, ['Melee', 'Rage', 'Attack', 'Fighter Feat' => 2, 'Generic' => 4]);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Cleave';
        $feat->requirement = 'Wield a melee weapon that does not have the Agile or Finesse trait.';
        $feat->trigger     = 'Your melee Strike kills or knocks a creature Prone, and another foe is adjacent to them. Only once a turn.';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>All of your Melee Attacks deal an additional +2 damage.</li>
    <li>As a Free Action, make a melee Strike against the second foe.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attack', 'Melee', 'Open', 'Rage', 'Talent', 'Fighter Feat' => 2, 'Generic' => 6]);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Great Cleave';
        $feat->requirement = 'Wield a melee weapon that does not have the Agile or Finesse trait.';
        $feat->trigger     = 'Your melee Strike kills or knocks a creature Prone, and another foe is adjacent to them.';
        $feat->description = "<ul>
    <li>You gain a Talent</li>
    <li>All of your Melee Attacks deal an additional +4 Damage. This additional Damage replaces the additional Damage from Cleave.</li>
    <li>When you Cleave, if your Strike also kills the second target or knocks the second target Prone, you can continue to make melee Strikes until you make a Strike that doesn't kill or knock Prone a creature or until there are no creatures adjacent to the most recent creature you attacked while Cleaving, whichever comes first.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Attack', 'Melee', 'Open', 'Rage', 'Talent', 'Fighter Feat' => 4, 'Generic' => 10]);
        $feat->attributes()->save(app()->attributes['STR'], ['dc' => 15]);
        $feat->parent_feats()->save(app()->feats['Cleave']);

        $feat              = new Feat;
        $feat->name        = 'Supreme Cleave';
        $feat->requirement = 'Wield a Martial Melee weapon that does not have the Agile or Finesse trait.';
        $feat->trigger     = 'Your melee Strike kills or knocks a creature Prone, and another foe is within melee range after moving 5 feet.';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>All of your Melee Attacks deal an additional +7 Damage. This additional Damage replaces the additional Damage from Great Cleave.</li>
    <li>When you Cleave, you may take a Step as part of making the Cleave attack (move, then make the Cleave attack). You may not move more than a total of 10 feet total in a round in this way.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attack', 'Melee', 'Open', 'Rage', 'Talent', 'Fighter Feat' => 12, 'Generic' => 16]);
        $feat->attributes()->save(app()->attributes['STR'], ['dc' => 17]);
        $feat->parent_feats()->save(app()->feats['Great Cleave']);

        $feat              = new Feat;
        $feat->name        = 'Brutal Critical';
        $feat->trigger     = 'You score a critical hit against a target with an attack';
        $feat->description = '<ul>
    <li>All of your Melee Attacks deal and additional +2 Damage.</li>
    <li>Your Critical Hits are particularly devastating. On a Critical Hit, add one extra damage die. This is in addition to any extra dice you already gain if the weapon is Deadly or Fatal. The target also takes Persistent Damage [Bleed] equal to one damage die.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Rage' => 5, 'Fighter Feat' => 5]);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Improved Brutal Critical';
        $feat->trigger     = 'You score a critical hit against a target with an attack';
        $feat->description = '<p>Your critical hits are particularly devastating.</p>
<ul>
    <li>All of your Melee Attacks deal an additional +4 Damage. This additional Damage replaces the additional Damage from Brutal Critical.</li>
    <li>On a Critical Hit, add two extra damage dice instead of the one extra die from Brutal Critical. This is in addition to any extra dice you already gain if the weapon is Deadly or Fatal. The target also takes Persistent Damage [Bleed] equal to two damage die.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Rage' => 9, 'Fighter Feat' => 9]);
        $feat->parent_feats()->save(app()->feats['Brutal Critical']);

        $feat              = new Feat;
        $feat->name        = 'Greater Brutal Critical';
        $feat->trigger     = 'You score a critical hit against a target with an attack';
        $feat->description = '<p>Your critical hits are particularly devastating.</p>
<ul>
    <li>All of your Melee Attacks deal an additional +7 Damage. This additional Damage replaces the additional Damage from Improved Brutal Critical.</li>
    <li>On a Critical Hit, add three extra damage dice instead of the two extra dice from Improved Brutal Critical. This is in addition to any extra dice you already gain if the weapon is Deadly or Fatal. The target also takes Persistent Damage [Bleed] equal to three damage die.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Rage' => 13, 'Fighter Feat' => 13]);
        $feat->parent_feats()->save(app()->feats['Improved Brutal Critical']);

        $feat              = new Feat;
        $feat->name        = 'Improved Critical';
        $feat->requirement = 'Any Combat Mastery Feat';
        $feat->description = '<p>Your attacks are deadly</p>
<ul>
    <li>All of your Melee Attacks deal an additional +2 Damage</li>
    <li>Your critical threat range increases by 1 (18-20).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Rage', 'Fighter Feat', 'Generic' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Greater Critical';
        $feat->description = '<p>Your attacks are even more deadly</p>
<ul>
    <li>All of your Melee Attacks deal an additional +4 Damage. This replaces the bonus damage from Improved Critical</li>
    <li>Your critical threat range increases by 2 (17-20). This replaces the increase from Improved Critical.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Rage', 'Fighter Feat', 'Generic' => 12]);
        $feat->parent_feats()->save(app()->feats['Improved Critical']);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = 'Weapon Finesse';
        $feat->requirement = 'Wield only melee weapons that has the Agile type.';
        $feat->description = "<ul>
    <li>Increase your DEX score by 1, to a maximum of 20</li>
    <li>You gain a Heroic Surge</li>
    <li>If you are wielding a weapon with the Finesse type, you may use your DEX modifier bonus to Hit instead of STR.</li>
    <li>If you are wielding a weapon with the Finesse type, at the beginning of your turn, you may select an opponent that you are aware of within 30 feet of you. You gain a +1 Dodge bonus against that opponent as long as you are aware of where the opponent is.</li>
    <li>If you're holding a shield, its armor check penalty applies to your attack rolls.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Heroic Surge', 'Melee', 'Finesse', 'Generic' => 1]);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 13]);

        $feat              = new Feat;
        $feat->name        = 'Heroic Surger';
        $feat->description = '<ul>
    <li>Increase your DEX score by 1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a Heroic Surge</li>
    <li>During any turn you use a Heroic Surge, your Speed increases by +5 (this does not stack with multiple instances of this Feat).</li>
</ul>
<p>You may take this feat multiple times</p>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Heroic Surge', 'Talent', 'Finesse', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Improved Disarm';
        $feat->requirement = 'You are not wielding a weapon with the Charge type';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge.</li>
    <li>You do not provoke an Attack of Opportunity when you attempt to Disarm an opponent, nor does the opponent have a chance to disarm you in response to your failed Disarm. You also gain a +2 bonus to the opposed attack roll you make to Disarm your opponent.</li>
    <li>You may spend a Heroic Surge as part of your Disarm attempt. If you do, the extra Action from Heroic Surge is used as part of the Double Action to make the disarm attempt, and if you succeed on the Disarm attempt, you may decide where the disarmed object lands (within 20 feet). If you have a free hand, you can end up with the disarmed weapon in hand.</li>
    <li>Each additional time you use this Action against the same opponent in the same Encounter, you suffer a -2 cumulative penalty to your Disarm roll.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attack', 'Heroic Surge', 'Diminishing', 'Rogue' => 2, 'Fighter Feat' => 2]);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Improved Trip';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge.</li>
    <li>You do not provoke an Attack of Opportunity when you attempt to trip an opponent while you are unarmed. You also gain a +4 bonus on your STR check to trip your opponent. If you trip an opponent in melee combat, you immediately get a Free Action to make a melee attack against that opponent.</li>
    <li>You may spend a Heroic Surge as part of your Trip attempt. If you do, the extra Action from Heroic Surge is used as part of the Double Action to make the trip attempt, and if you succeed on the Trip attempt, until the end of your next turn, you gain Advantage to all attacks you make against the tripped opponent.</li>
    <li>Each additional time you use this Action against the same opponent in the same Encounter, the bonus to STR check to trip your opponent is reduced by -2.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attack', 'Heroic Surge', 'Diminishing', 'Rogue' => 2, 'Fighter Feat' => 2]);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Improved Feint';
        $feat->requirement = 'You are not wielding a weapon with the Two-Hand type';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>You gain a Talent</li>
    <li>Performing a Feint in combat is now an Action instead of a Double Action.</li>
    <li>You may spend a Heroic Surge as part of your Feint Action. If you do, the extra Action from Heroic Surge is used to perform the Feint and you gain a +2 bonus to your Feint check.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Feint', 'Heroic Surge', 'Diminishing', 'Talent', 'Fighter Feat' => 4, 'Rogue' => 4, 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Whirlwind Strike';
        $feat->requirement = 'You are not wielding a weapon with the Two-Hand type';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>You gain a Talent</li>
    <li>You attack all foes within your Melee reach. Make a melee Strike against all enemies within your melee reach.</li>
    <li>You may spend a Heroic Surge as part of your Whirlwind Attack. If you do, the extra Action from Heroic Surge is used as part of the Double Action to make the Whirlwind Attack, and you get a +2 bonus to Hit and Damage on all of your Whirlwind attacks.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attack', 'Heroic Surge', 'Melee', 'Fighter Feat' => 10, 'Talent']);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Dexterous Strike';
        $feat->requirement = 'You are wielding a weapon that has the Finesse trait';
        $feat->trigger     = 'You score a Hit with a melee attack with a weapon that has the Finesse trait';
        $feat->description = '<ul>
    <li>Increase your DEX score by 1, to a maximum of 20.</li>
    <li>You gain a Heroic Surge</li>
    <li>You may apply your DEX bonus to melee damage attacks made with a weapon with the Finesse trait (this is in addition to your STR modifier, minimum +0). If you are wearing Medium or Heavy armor, apply the Armor Check penalty to your DEX bonus to damage (minimum 1 point of DEX damage).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Heroic Surge', 'Attack', 'Precision', 'Melee', 'Fighter Feat' => 2]);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 13]);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Intelligent Strike';
        $feat->requirement = 'You are wielding a weapon that has the Finesse trait';
        $feat->trigger     = 'You score a Hit with a melee attack with a weapon that has the Finesse trait';
        $feat->description = '<ul>
    <li>Increase your INT score by 1, to a maximum of 20.</li>
    <li>You gain a Heroic Surge</li>
    <li>You may apply your INT bonus to melee damage attacks made with a weapon with the Finesse trait (this is in addition to your STR modifier, minimum +0). If you are wearing Medium or Heavy armor, apply the Armor Check penalty to your INT bonus to damage (minimum 1 point of INT damage).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Heroic Surge', 'Attack', 'Precision', 'Melee', 'Fighter Feat' => 2]);
        $feat->attributes()->save(app()->attributes['INT'], ['dc' => 13]);
        $feat->parent_feats()->save(app()->feats['Weapon Finesse']);

        $feat              = new Feat;
        $feat->name        = 'Arcane Strike';
        $feat->action_type = 'Action';
        $feat->requirement = 'Ability to cast 2nd level arcane spells';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>
        <p>You can channel arcane energy into a melee weapon, your unarmed strike, or natural weapons. You must sacrifice one of your spells for the day to do this, but you gain a bonus to all your attack rolls to Hit until the beginning of your next turn according to the following table. The damage is applied to your next Melee attack that Hits and the type is Arcane.</p>
        <table>
            <thead>
                <tr>
                    <th>Spell Slot Level</th><th>To Hit</th><th>Damage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td><td>+1</td><td>+3</td>
                </tr>
                <tr>
                    <td>1</td><td>+2</td><td>+1D4 +3</td>
                </tr>
                <tr>
                    <td>2</td><td>+2</td><td>+2D4 +5</td>
                </tr>
                <tr>
                    <td>3</td><td>+2</td><td>+3D4 +7</td>
                </tr>
                <tr>
                    <td>4</td><td>+3</td><td>+4D6 +10</td>
                </tr>
                <tr>
                    <td>5</td><td>+3</td><td>+5D6 +15</td>
                </tr>
                <tr>
                    <td>6</td><td>+3</td><td>+6D6 +20</td>
                </tr>
                <tr>
                    <td>7</td><td>+4</td><td>+7D8 +30</td>
                </tr>
                <tr>
                    <td>8</td><td>+4</td><td>+8D8 +45</td>
                </tr>
                <tr>
                    <td>9</td><td>+4</td><td>+9D8 +60</td>
                </tr>
                <tr>
                    <td>10</td><td>+5</td><td>+10D10 +80</td>
                </tr>
                <tr>
                    <td>11</td><td>+5</td><td>+12D10 +100</td>
                </tr>
            </body>
        </table>
        <p>You may use a Heroic Surge to activate this ability. If you do, the extra Action from Heroic Surge is used to fulfill the Action needed to active Arcane Strike, and treat the spell level sacrificed as 1 level higher to determine bonus to hit and damage.</p>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Heroic Surge', 'Open', 'Arcane' => 5, 'Fighter Feat' => 3]);
        $feat->parent_feats()->save(app()->feats['Intelligent Strike']);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = 'Multi Attacker';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You can apply up to 2 points of your STR bonus to Hit and Damage when attacking with multiple hands</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Talent', 'Fighter Feat', 'Generic' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Improved Multi Attacker';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You can apply up to 4 points of your STR bonus to Hit and Damage when attacking with multiple hands</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Talent', 'Fighter Feat', 'Generic' => 11]);
        $feat->parent_feats()->save(app()->feats['Multi Attacker']);

        $feat              = new Feat;
        $feat->name        = 'Two-Weapon Fighter';
        $feat->requirement = 'You are wielding two melee weapons, each in a different hand';
        $feat->description = '<ul>
    <li>Increase your DEX score by 1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>The penalty for attacking multiple times is tracked separately for each hand.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attack', 'Ability Boost', 'Talent', 'Melee', 'Fighter Feat', 'Generic' => 2]);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 13]);

        $feat              = new Feat;
        $feat->name        = 'Improved Two-Weapon Fighter';
        $feat->action_type = 'Action';
        $feat->requirement = 'You are wielding two melee weapons, each in a different hand';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>As part of the first Melee attack you make with your primary-hand weapon, you may also make a Melee attack with your off-hand weapon. The attack with your off-hand weapon may be against a different opponent.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attack', 'Open', 'Melee', 'Talent', 'Fighter Feat' => 8, 'Generic' => 9]);
        $feat->parent_feats()->save(app()->feats['Two-Weapon Fighter']);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 15]);

        $feat              = new Feat;
        $feat->name        = 'Greater Two-Weapon Fighter';
        $feat->action_type = 'Action';
        $feat->requirement = 'You are wielding two melee weapons, each in a different hand';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You gain an additional Action. This additional Action can only be used to make a Melee attack with your off-hand weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attack', 'Melee', 'Talent', 'Extra Action', 'Fighter Feat' => 14]);
        $feat->parent_feats()->save(app()->feats['Improved Two-Weapon Fighter']);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 17]);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = 'Point-Blank Shot';
        $feat->requirement = 'While in this Stance, you cannot take Move Actions';
        $feat->description = "<ul>
    <li>Increase your DEX score by 1, to a maximum of 20</li>
    <li>While in this Stance, all of your Ranged Attacks deal an additional +2 Damage.</li>
    <li>When using a ranged volley weapon while in this stance, you don't take the circumstance penalty to your attack rolls within the weapon's volley range.</li>
    <li>When using a ranged weapon without the volley trait, you gain a +5 circumstance bonus to damage rolls on attacks made within the weapon's first range increment.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Stance', 'Ranged', 'Fighter Feat', 'Generic' => 1]);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 13]);

        $feat              = new Feat;
        $feat->name        = 'Improved Point-Blank Shot';
        $feat->requirement = 'While in this Stance, you cannot take Move Actions';
        $feat->description = '<ul>
    <li>Increase your DEX score by 1, to a maximum of 20</li>
    <li>While in this Stance, all of your Ranged Attacks deal an additional +10 Damage. This additional Damage replaces the additional Damage from Point-Blank Shot</li>
    <li>When attempting a Ranged Disarm attack, you suffer a -2 penalty instead of the normal -5. If you have the Improved Disarm feat, the penalty becomes -0.</li>
    <li>Targets benefit from one rank less of Cover or Concealment</li>
    <li>Increase the range for any Sneak Attack by 10 feet.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Stance', 'Ranged', 'Fighter Feat' => 5]);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 15]);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);

        $feat              = new Feat;
        $feat->name        = 'Rapid Shot';
        $feat->requirement = 'You are wielding a Composite Longbow, Composite Shortbow, Longbow, or Shortbow';
        $feat->description = '<ul>
    <li>All of your Ranged Attacks deal an additional +1 Damage</li>
    <li>You gain an extra Action. This extra Action can only be used as a Manipulate Action to load your Composite Longbow, Composite Shortbow, Longbow, or Shortbow.</li>
    <li>You cannot take Move Actions while in this Stance.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stance', 'Ranged', 'Extra Action', 'Fighter Feat', 'Generic' => 2]);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 13]);

        $feat              = new Feat;
        $feat->name        = 'Manyshot';
        $feat->action_type = 'Action';
        $feat->description = '<p>You may use an Action to nock 2 - 4 arrows at the same time. You may fire multiple arrows at the same time.</p>
<table>
    <thead>
        <tr>
            <th>Arrows</th>
            <th>Penalty</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2</td>
            <td>-2 to Hit. -1 to Damage</td>
        </tr>
        <tr>
            <td>3</td>
            <td>-4 to Hit. -2 to Damage</td>
        </tr>
        <tr>
            <td>4</td>
            <td>-6 to Hit. -4 to Damage</td>
        </tr>
    </tbody>
</table>
<p>Make a single attack for all the arrows. Damage Reduction and Resistance apply to each arrow separately against each arrow.</p>';
        $helper->addTypesToFeat($feat, ['Ranged', 'Fighter Feat', 'Generic' => 6]);
        $feat->parent_feats()->save(app()->feats['Rapid Shot']);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 17]);

        $feat              = new Feat;
        $feat->name        = 'Far Shot';
        $feat->action_type = 'Triple Action';
        $feat->requirement = 'While in this Stance, you cannot take Move Actions';
        $feat->description = "<ul>
    <li>Double the range of your Ranged Weapon attacks.</li>
    <li>While in this Stance, you can make a single ranged attack as a Triple Action. If you hit, roll an additional 5 Weapon Dice and add a +20 bonus to damage.</li>
    <li>When using a ranged weapon without the volley trait, you gain a +5 circumstance bonus to damage rolls on attacks made within the weapon's first, second, and third range increment.</li>
    <li>While in this Stance, you are considered Prone.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Open', 'Stance', 'Ranged', 'Fighter Feat', 'Generic' => 6]);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);

        $feat              = new Feat;
        $feat->name        = 'Strong Shot';
        $feat->requirement = 'While in this Stance, you cannot take Move Actions';
        $feat->description = '<ul>
    <li>While in this Stance, all of your Ranged Attacks deal an additional +10 Damage</li>
    <li>While in this Stance, you suffer a -2 penalty to your AC.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Open', 'Stance', 'Ranged', 'Fighter Feat' => 5]);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);
        $feat->attributes()->save(app()->attributes['STR'], ['dc' => 13]);

        $feat              = new Feat;
        $feat->name        = 'Rapid Reload';
        $feat->requirement = 'While in this Stance, you cannot take Move Actions';
        $feat->description = '<ul>
    <li>While in this Stance, all of your Ranged Attacks deal an additional +2 Damage</li>
    <li>While in this Stance, you gain an extra Action. This extra Action can only be used as a Manipulate Action to load your Hand Crossbow, Light Crossbow, or Heavy Crossbow. You must have a free hand to load your weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ranged', 'Extra Action', 'Stance', 'Fighter Feat', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Peerless Archer';
        $feat->requirement = 'You are wielding a Composite Longbow, Composite Shortbow, Longbow, or Shortbow';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain a Talent</li>
    <li>You gain a +3 bonus to Crafting (bowmaking) skill</li>
    <li>Targets benefit from one rank less of Cover or Concealment</li>
    <li>
        <p>You may create magical +1 arrows using the Enchant Item cantrip</p>
        <dl>
            <dt>Cost</dt> <dd>1 gp (One) / 20 gp (Twenty-Five)</dd>
            <dt>Arrows per Day</dt> <dd>25</dd>
        </dl>
    </li>
    <li>If you have the Power Attack feat, you may apply it to Ranged attacks with bows</li>
    <li>If you have a Sneak Attack, increase the Sneak Attack range by 10 feet.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ranged', 'Talent', 'Fighter Feat' => 7, 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Enchant Item'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Peerless Archer';
        $feat->requirement = 'You are wielding a Composite Longbow, Composite Shortbow, Longbow, or Shortbow';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>
        <p>You may create magical +2 arrows using the Enchant Item Cantrip.</p>
        <dl>
            <dt>Cost (+2)</dt> <dd>1 gp (One) / 8 gp (Ten)</dd>
            <dt>Arrows per Day</dt> <dd>10</dd>
        </dl>
    </li>
    <li>If you have a Sneak Attack, increase the Sneak Attack range by 20 feet. This replaces the extra range from Peerless Archer.</li>
    <li>You gain the Tripping Shot Talent. If you already have that Talent, you may gain a different Talent.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ranged', 'Fighter Feat' => 11, 'Talent', 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Peerless Archer']);

        $feat              = new Feat;
        $feat->name        = 'Greater Peerless Archer';
        $feat->requirement = 'You are wielding a Composite Longbow, Composite Shortbow, Longbow, or Shortbow';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain a Talent</li>
    <li>All your Ranged Attacks made with a Composite Longbow, Composite Shortbow, Longbow, or Shortbow deal an additional +5 damage.</li>
    <li>
        <p>If you can cast any 1st level Spell (either from a Class or Feat), you may create magical +3 arrows</p>
        <dl>
            <dt>Cost (+3)</dt> <dd>3 gp (One) / 7 gp (Three)</dd>
            <dt>Arrows per Day</dt> <dd>3</dd>
        </dl>
    </li>
    <li>
        <p>If you can cast any 3rd level Spell (either from a Class or Feat), you may create magical Arrows of Slaying by sacrificing a 3rd level Spell Slot, or the ability to cast a 3rd level spell you have gained from a Feat. Once the Arrow of Slaying is used, you may regain the sacrificed Spell Slot or Sacrificed ability to cast a 3rd level Spell from a Feat.</p>
        <dl>
            <dt>Cost (+3)</dt> <dd>2,000 gp (One)</dd>
            <dt>Arrows per Week</dt> <dd>1</dd>
        </dl>
    </li>
    <li>If you have a Sneak Attack, increase the Sneak Attack range by 30 feet. This replaces the extra range from Peerless Archer and Improved Peerless Archer.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ranged', 'Talent', 'Fighter Feat' => 15, 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Improved Peerless Archer']);

        $feat              = new Feat;
        $feat->name        = 'Thrown Weapon Master';
        $feat->action_type = 'Action';
        $feat->requirement = 'You are wielding a weapon with the Thrown type';
        $feat->description = "<p>You excel at thrown weapons and gain the following benefits</p>
<ul>
    <li>You gain a Talent</li>
    <li>You may use a single Action to throw up to 3 weapons with the thrown type and has a bulk of 'L' (except the Handaxe). You may not use this feature again until the beginning of your next turn.</li>
    <li>If you have the Quick Draw Talent, when you throw a weapon with the Thrown type, you may immediately draw another weapon with the Thrown type as part of the same Action.</li>
    <li>Increase the range of your thrown weapons by +10</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ranged', 'Thrown', 'Talent', 'Fighter Feat' => 3]);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = 'Improved Grapple';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge.</li>
    <li>You gain a Talent</li>
    <li>You do not provoke an Attack of Opportunity when you make a touch attack to start a Grapple. You gain a +4 bonus on all Grapple checks.</li>
    <li>You may spend a Heroic Surge as part of your Grapple attempt. If you do, the extra Action from Heroic Surge is used to make the grapple attempt. If you succeed on the Grapple attempt, you may make a free Unarmed Strike attack (as detailed in the Grapple rules).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Open', 'Unarmed', 'Heroic Surge', 'Grapple', 'Talent', 'Fighter Feat', 'Generic' => 2]);
        $feat->parent_feats()->save(app()->feats['Improved Unarmed Strike']);

        $feat              = new Feat;
        $feat->name        = 'Deflect Ranged Attack';
        $feat->action_type = 'Reaction';
        $feat->requirement = 'You must have the Improved Unarmed Strike Feat or a Combat Mastery Feat. You are not Flat-Footed and you are aware of the Ranged Attack';
        $feat->description = "<ul>
    <li>You gain a Talent.</li>
    <li>You may use your Reaction to deflect ranged attacks (projectiles or thrown). If you don't have the Improved Unarmed Strike Feat, then you must use a weapon the qualifies for your Combat Mastery Feat. For each Reaction, you can deflect a ranged attack for each free hand you have.</li>
    <li>You may spend another Reaction to make a Ranged Attack with a ranged weapon you just deflected.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Fighter Feat', 'Talent', 'Generic' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Deflect Magical Attack';
        $feat->action_type = 'Reaction';
        $feat->requirement = 'You have the Improved Unarmed Strike Feat or can manifest a Mind Blade';
        $feat->description = '<p>You gain the ability to deflect certain magical attacks that target you.</p>
<p>You may use your Reaction to deflect ranged Magical attacks (one that requires a Ranged Spell Attack or a Ranged Touch Attack). Use the following guidelines to help determine if an effect can be deflected.</p>
<ul>
    <li>Any affect that has a physical component can be treated as per the rules of Deflect Ranged Attack.</li>
    <li>All effects with the Ray type can be deflected.</li>
    <li>All Electricity attacks, such as Lightning Bolt (but not Shocking Grasp since it is not a Ranged attack) can be deflected.</li>
    <li>A stream of Poison can be deflected, but not a cloud of Poison.</li>
    <li>Since this is a Psionic effect, it can interact with some Illusion spells, such as Phantasms. A successful Melee attack against any Phantasm can be Dispelled by spending 1 Power Point.</li>
    <li>A Fireball cannot be deflected, since it is an area of effect.</li>
    <li>While a Magic Missile can be deflected, each Reaction would only deflect one Missile.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Fighter Feat' => 12, 'Spend Power Point']);
        $feat->parent_feats()->save(app()->feats['Deflect Ranged Attack']);

        $feat              = new Feat;
        $feat->name        = 'Greater Unarmed Strike';
        $feat->description = '<ul>
    <li>You gain 2 Talents, 2 Heroic Surges, or 1 of each</li>
    <li>
        <p>Your Unarmed Strikes deal more damage</p>
        <table>
            <thead>
                <tr>
                    <th>Size</th>
                    <th>Damage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiny</td>
                    <td>1D4</td>
                </tr>
                <tr>
                    <td>Small</td>
                    <td>1D6</td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td>2D4</td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td>3D4</td>
                </tr>
                <tr>
                    <td>Huge</td>
                    <td>3D6</td>
                </tr>
            </tbody>
        </table>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Unarmed', 'Fighter Feat' => 7, 'Heroic Surge', 'Talent']);
        $feat->parent_feats()->save(app()->feats['Improved Unarmed Strike']);

        $feat              = new Feat;
        $feat->name        = 'Master Unarmed Strike';
        $feat->description = '<ul>
    <li>You gain 2 Talents, 2 Heroic Surges, or 1 of each</li>
    <li>
        <p>Your Unarmed Strikes deal more damage</p>
        <table>
            <thead>
                <tr>
                    <th>Size</th>
                    <th>Damage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiny</td>
                    <td>1D6</td>
                </tr>
                <tr>
                    <td>Small</td>
                    <td>2D4</td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td>3D6</td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td>3D8</td>
                </tr>
                <tr>
                    <td>Huge</td>
                    <td>3D10</td>
                </tr>
            </tbody>
        </table>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Unarmed', 'Fighter Feat' => 12, 'Heroic Surge', 'Talent']);
        $feat->parent_feats()->save(app()->feats['Improved Unarmed Strike']);

        $feat              = new Feat;
        $feat->name        = 'Perfect Unarmed Strike';
        $feat->description = '<ul>
    <li>You gain 2 Talents, 2 Heroic Surges, or 1 of each</li>
    <li>
        <p>Your Unarmed Strikes deal more damage</p>
        <table>
            <thead>
                <tr>
                    <th>Size</th>
                    <th>Damage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiny</td>
                    <td>2D4</td>
                </tr>
                <tr>
                    <td>Small</td>
                    <td>3D4</td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td>3D8</td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td>3D10</td>
                </tr>
                <tr>
                    <td>Huge</td>
                    <td>3D12</td>
                </tr>
            </tbody>
        </table>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Unarmed', 'Talent', 'Fighter Feat' => 15, 'Heroic Surge']);
        $feat->parent_feats()->save(app()->feats['Master Unarmed Strike']);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = 'Mounted Combatant';
        $feat->description = "<p>You are a dangerous foe to face while mounted. While you are mounted and aren't incapacitated, you gain the following benefits.</p>
<ul>
    <li>You gain a Talent</li>
    <li>You gain a +2 bonus to Melee Attack rolls against any unmounted creature that is smaller than your mount. This is in addition to the +1 bonus you would get for making a Melee Attack from higher ground.</li>
    <li>You can force an attack targeting your mount to target you instead.</li>
    <li>If your mount is subjected to an effect that allows it to make a DEX Save to take only half damage, it instead takes no damage if it succeeds on the Save, and only half damage if it fails.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Mounted', 'Talent', 'Fighter Feat', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Ride-By Attack';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You gain a +1 bonus to Hit to all Melee Attacks made while mounted and Charging.</li>
    <li>When you are mounted and use the Charge Action, you may continue your move past the defender. This movement does not provoke Attacks of Opportunity.</li>
    <li>Add an extra damage dice to the melee weapon when used in a Ride-By Attack.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Mounted', 'Talent', 'Fighter Feat' => 2]);
        $feat->parent_feats()->save(app()->feats['Mounted Combatant']);

        $feat              = new Feat;
        $feat->name        = 'Improved Mounted Combatant';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain a Talent</li>
    <li>While mounted, Increase your AC by +1</li>
    <li>You gain an extra Action. This Action can only be used to direct your mount to take a specific Action.</li>
    <li>You can spur your mount to move faster once each turn. Make a DC 20 WIS (Ride an Animal) check. If you succeed, your mount may make one Stride Action with a +10 bonus to their Speed.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Mounted', 'Extra Action', 'Talent', 'Fighter Feat', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Ride-By Attack']);
        $feat->skills()->save(app()->skills['Animal Handling'], ['dc' => 7, 'meta' => 'Ride an Animal']);

        $feat              = new Feat;
        $feat->name        = 'Greater Mounted Combatant';
        $feat->description = '<p>You become even more skilled at combat while mounted. You gain the following</p>
<ul>
    <li>You gain a Talent</li>
    <li>You gain a +1 to all Melee attacks made while Mounted</li>
    <li>All your Melee attacks while Mounted add an additional Weapon Damage Dice.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Mounted', 'Talent', 'Fighter Feat', 'Generic' => 7]);
        $feat->parent_feats()->save(app()->feats['Improved Mounted Combatant']);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = 'Polearm Master';
        $feat->requirement = 'You are weilding a polearm';
        $feat->description = '<p>You are skilled with fighting with polearms. You gain the following benefits.</p>
<ul>
    <li>You gain a Talent</li>
    <li>When you deal damage with a polearm, add an additional weapon dice</li>
    <li>While you are wielding a polearm that offers reach, other creatures provoke Attacks of Opportunity from you when they enter the reach you have with that weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Reach', 'Talent', 'Fighter Feat' => 2]);
    }
}
