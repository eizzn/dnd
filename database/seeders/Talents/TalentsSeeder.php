<?php

namespace Database\Seeders\Talents;

use App\Models\Feat;
use App\Models\Talent;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class TalentsSeeder extends Seeder
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

        $talent              = new Talent;
        $talent->name        = 'Die Hard';
        $talent->description = '<ul>
    <li>If you are attacked with an effect that causes CON Damage, you may make a CON Save with a DC 15. If you succeed, you take half Damage rounded down.</li>
    <li>You gain a +5 bonus to your recovery Save. You die from the Dying condition at Dying 5, rather than Dying 4.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 2]);
        $talent->feats()->save(app()->feats['Endurance']);

        $talent              = new Talent;
        $talent->name        = 'Careful Strike';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to make a melee attack';
        $talent->description = '<p>Before making your attack roll, you may choose to take a bonus to Hit, up to +3. If you hit, your suffer a penalty to damage equal to double the bonus to hit per Weapon Die with a minimum of 1 point of damage per Die.</p>
<blockquote>
    Ex. You take a +2 bonus to Hit with a weapon that deals 2D6 damage. This causes your attack to deal -4 damage per Dice. The player rolls a 4 and a 6, which deals 1 + 2 damage (4 - 4 = 0, but a minimum of 1 and 6 - 4 = 2) for a total of 3 points of damage.
</blockquote>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Step Strike';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are within 5 feet of an opponent';
        $talent->description = '<p>Make a Melee Attack with a -1 penalty to Hit and Damage. You may move 5 feet as part of this attack, before or after striking. This move does not provoke Attacks of Opportunity.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Strike', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Strong Strike';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to make a Melee Attack';
        $talent->description = '<p>Make a melee attack with a -1 penalty to Hit and a +3 bonus to Damage. Your position in initiative order is also shifted by -4 slower starting at the next initiative cycle.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Strike', 'Finisher', 'Initiative', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Quick Strike';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to make a Melee Attack';
        $talent->description = '<p>Make a melee attack with a -1 penalty to Hit and -2 to Damage. Your position in initiative order is shifted by +4 faster starting at the next initiative cycle.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Initiative', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Distracting Strike';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to make a Melee Attack';
        $talent->description = '<p>Make a Melee attack with a -1 penalty to Hit and -3 to Damage. If you hit and deal damage, the next Melee attack against the target made by anyone other than yourself has Advantage to hit as long as it is made before the start of your next turn.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Evasive Strike';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to make a Melee Attack';
        $talent->description = '<p>Make a Melee attack with a -1 penalty to Hit and -2 to Damage. If you hit and deal damage, you do not trigger Attacks of Opportunity from that target until the start of your next turn.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Goading Strike';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to make a Melee Attack';
        $talent->description = '<p>Make a Melee attack with a -1 penalty to Hit. If you hit and deal damage, the target makes a WIS Save (DC 13). If they fail the Save, they have Disadvantage on all Melee attacks until the start of your next turn except against you.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Engaging Strike';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to make a Melee Attack';
        $talent->description = '<p>Make a Melee attack with a -1 penalty to Hit and Damage. If you hit and deal damage, the target does not get to make Attacks of Opportunity against other creatures until the start of your next turn (they may still make Attacks of Opportunity against you).</p>
<p>Each additional time you use this Talent against the same opponent in the same Encounter, your penalty to Hit and Damage increases by -1.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 3, 'Diminishing']);

        $talent              = new Talent;
        $talent->name        = 'Focused Strike';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'You are about to make a Melee or Ranged Attack';
        $talent->description = '<p>Spend a Heroic Surge (making this an Action), you gain Advantage on the attack and if you hit, you deal an additional +10 damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 6]);

        $talent              = new Talent;
        $talent->name        = 'Distract and Strike';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'You are weilding 2 Melee weapons and are in combat with a humanoid with a Melee weapon';
        $talent->description = '<p>You attempt to distract your opponent with one Melee attack to improve the chance of your other Melee attack to succeed.</p>
<p>Use an Action to make a Melee Weapon attack without any ability modifier Bonus (ie STR). If you hit, then you deal damage without any ability modifier Bonus (ie STR). Unless you Critically miss, your next attack gains Advantage to Hit.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 6]);

        $talent              = new Talent;
        $talent->name        = 'Step Parry';
        $talent->action_type = 'Free';
        $talent->trigger     = 'You have a Reaction and are attacked by a Melee Attack';
        $talent->description = "<p>If you've taken the Parry Action and are attacked with a Melee Attack that misses you, you may immediately take a 5-foot step.</p>";
        $helper->addTypesToSimpleObject($talent, ['Talent' => 6]);

        $talent              = new Talent;
        $talent->name        = 'Improved Fight Defensively';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'You take the Fight Defensively Action';
        $talent->description = '<p>You make a normal melee Strike with a -2 penalty to Hit for a +4 bonus to AC until the beginning of your next turn.</p>
<p>If you take the Total Defense Action, you gain an additional +2 bonus to your AC.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 3]);
        $talent->feats()->save(app()->feats['Weapon Finesse']);

        $talent              = new Talent;
        $talent->name        = 'Weapon Tie Up';
        $talent->action_type = 'Reaction';
        $talent->trigger     = 'You successfully use the Block Action';
        $talent->description = '<p>If you successfully block a Melee Attack, you may use a Reaction to perform this Talent. Make an opposed Attack roll. If you win, the target cannot make any attacks with that weapon until the beginning of their next turn, otherwise, you suffer a -2 penalty to your AC and are Slowed 1 on your next turn.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Finisher', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Improved Aid Another';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You perform the Aid Another Action';
        $talent->description = '<p>When you perform the Aid Another Action, you grant an addition +2 bonus.</p>';
        $helper->addTypesToSimpleObject($talent, ['Aid', 'Talent' => 4]);

        $talent              = new Talent;
        $talent->name        = 'Feinting Strike';
        $talent->action_type = 'Action';
        $talent->description = '<p>Make a melee strike against an opponent with a -4 to Hit and -4 to Damage. As part of this attack, you make a Feint Action against the opponent with a +2 bonus.</p>
<p>If you perform this Talent on the same opponent in the same encounter, the penalty increases by -1 each additional time.</p>';
        $helper->addTypesToSimpleObject($talent, ['Feint', 'Strike', 'Talent' => 10, 'Diminishing']);
        $talent->feats()->save(app()->feats['Improved Feint']);

        $talent              = new Talent;
        $talent->name        = 'Awesome Blow';
        $talent->action_type = 'Triple Action';
        $talent->description = "<p>You strike your target with such force that you push the target in a direction of your choice. You may make an attack with the Power Attack feat as part of this Talent. If you hit, the target must make a CON Save against a DC equal to the damage dealt.</p>
<p>You can only push the opponent in a straight line, and the opponent can't move closer to the attacking creature than the square it started in. If an obstacle prevents the completion of the opponent's move, the opponent and the obstacle each take 1d6 points of damage, and the opponent stops in the space adjacent to the obstacle.</p>
<p>For each size category the target is larger than you, the target gains a +5 bonus to their Save. For each size category the target is smaller than you, the target suffers a -5 penalty to their Save.</p>
<dl>
    <dt>Critical Failure</dt> <dd>The target is pushed back up to 15 feet and is Stunned 1</dd>
    <dt>Failure</dt> <dd>The target is pushed back up to 10 feet</dd>
    <dt>Success</dt> <dd>The target is not pushed back 5 feet</dd>
    <dt>Critical Success</dt> <dd>The target is not pushed back and you take 1D6 damage</dd>
</dl>";
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Power Attack']);

        $talent              = new Talent;
        $talent->name        = 'Blind Swing';
        $talent->action_type = 'Action';
        $talent->description = '<p>You make a wild Melee attack quickly.</p>
<p>You may use this Talent only once a turn. You strike blindly and quickly. Pick one of the following.</p>
<ul>
    <li>Take a -2 penalty to all your attacks until the beginning of your next turn. Gain a +5 bonus to your Initiative position starting your next turn.</li>
    <li>Gain a +2 bonus to your Initiative position starting this turn. Take a -4 penalty to all your attacks until the beginning of your next turn.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Initiative', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Focused Initiative';
        $talent->action_type = 'Double Action';
        $talent->description = '<p>Make a Melee Attack. You gain a bonus to your Initiative position by +4 faster starting at the next initiative cycle. You may take this Action multiple times per turn.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Melee', 'Initiative', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Two-Weapon Parry';
        $talent->action_type = 'Action';
        $talent->requirement = 'You are wielding two melee weapons, one in each hand';
        $talent->description = '<p>You use your two weapons to parry attacks. If either weapon is agile or if either weapon has the parry trait, you gain a +2 circumstance bonus to AC until the start of your next turn. Otherwise, you gain a +1 circumstance bonus to AC until the start of your next turn instead. You lose the circumstance bonus if you no longer meet the requirement.</p>';
        $helper->addTypesToFeat($talent, ['Melee', 'Talent' => 2]);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);

        $talent              = new Talent;
        $talent->name        = 'Knockdown Strike';
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You are wielding a weapon that does not have the Agile or Finesse type';
        $talent->description = "<p>You strike with such force, the target is knocked prone.</p>
<p>Make a melee strike ignoring the target's Damage Reduction. If you hit, you deal -10 damage. If you deal no damage, it is an automatic fail. The Target must make a STR Save. The DC is equal to your Melee Attack roll total.</p>
<ul>
    <li>If the Target has the Athletics or Acrobatics skill, they may add either to their Save</li>
    <li>The Target gets a +4 to their STR Save for each Size Category above Medium</li>
    <li>The Target gets a -4 to their STR Save for each Size Category below Medium</li>
</ul>
<dl>
    <dt>Critical Success</dt> <dd>The target does not fall prone and has Advantage to hit you with their next attack.</dd>
    <dt>Success</dt> <dd>The target does not fall prone.</dd>
    <dt>Failure</dt> <dd>The target falls prone</dd>
    <dt>Critical Failure</dt> <dd>The target falls prone and is Stunned: 1</dd>
</dl>";
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Fierce Attack';
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You are wielding a weapon that does not have the Agile or Finesse type.';
        $talent->description = '<p>If you hit with a Melee Attack, you gain a +10 bonus to damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Open', 'Rage', 'Attack', 'Melee']);
        $talent->attributes()->save(app()->attributes['STR'], ['dc' => 15]);
        $talent->feats()->save(app()->feats['Power Attack']);

        $talent              = new Talent;
        $talent->name        = 'Improved Power Attack';
        $talent->description = '<ul>
    <li>When you hit with a Melee Weapon attack, reroll any 1s and 2s that you rolled for the damage dice</li>
    <li>
        <p>When you use your Power Attack feat, use these values instead.</p>
        <table>
            <thead>
                <tr>
                    <th>To Hit</th>
                    <th>AC</th>
                    <th>Damage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>-1</td>
                    <td>-1</td>
                    <td>+4 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-2</td>
                    <td>-1</td>
                    <td>+6 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-3</td>
                    <td>-2</td>
                    <td>+8 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-4</td>
                    <td>-2</td>
                    <td>+10 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-5</td>
                    <td>-3</td>
                    <td>+15 per Weapon Die</td>
                </tr>
            </tbody>
        </table>
    </li>
</ul>';
        $talent->parent_id = Talent::where('name', 'Fierce Attack')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Rage', 'Talent' => 7]);
        $talent->feats()->save(app()->feats['Power Attack']);

        $talent              = new Talent;
        $talent->name        = 'Greater Power Attack';
        $talent->requirement = 'You are wielding a weapon that does not have the Agile or Finesse type.';
        $talent->description = '<ul>
    <li>You get +2 damage per Weapon Die of the weapon you are using. If you use the weapon in 2 hands, you get +3 damage per Weapon Die of the weapon you are using.</li>
    <li>
        <p>When you use your Power Attack feat, use these values instead.</p>
        <table>
            <thead>
                <tr>
                    <th>To Hit</th>
                    <th>AC</th>
                    <th>Damage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>-1</td>
                    <td>-1</td>
                    <td>+5 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-2</td>
                    <td>-1</td>
                    <td>+7 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-3</td>
                    <td>-2</td>
                    <td>+9 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-4</td>
                    <td>-2</td>
                    <td>+12 per Weapon Die</td>
                </tr>
                <tr>
                    <td>-5</td>
                    <td>-3</td>
                    <td>+20 per Weapon Die</td>
                </tr>
            </tbody>
        </table>
    </li>
</ul>';
        $talent->parent_id = Talent::where('name', 'Improved Power Attack')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Rage', 'Talent' => 15]);
        $talent->feats()->save(app()->feats['Brutal Critical']);

        $talent              = new Talent;
        $talent->name        = 'Deadly Aim';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'You are about to make a Ranged Weapon attack';
        $talent->description = '<ul>
    <li>You aim for a weak spot.</li>
    <li>Make a Ranged Weapon attack with a -1 penalty to Hit. If you hit, you deal an additional +10 damage.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Ranged', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Leap Attack';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'Make a charge attack';
        $talent->description = '<p>You can combine a powerful charge and a mighty leap into one devastating attack</p>
<p>You can make Charge attacks as part of an Athletics skill check to make a High Jump or Long Jump during a Charge. If you cover at least 10 feat of horizontal distance with your jump and your jump to a square from which you threaten your target, you deal an additional +10 damage. If you use this Talent with a two-handed weapon wielded in 2 hands, you instead deal +25 damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Charge', 'Melee', 'Move', 'Finisher', 'Talent' => 3]);
        $talent->feats()->save(app()->feats['Power Attack']);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 10, 'meta' => 'High Jump or Long Jump']);

        $talent              = new Talent;
        $talent->name        = 'Crushing Grapple';
        $talent->description = '<p>Like a powerful constrictor, you crush targets in your unyielding grasp. When you successfully Grapple a creature, you can deal Bludgeoning damage to that creature equal to your STR modifier. You can make this nonlethal with no penalty.</p>';
        $helper->addTypesToSimpleObject($talent, ['Grapple', 'Unarmed', 'Talent' => 2]);
        $talent->feats()->save(app()->feats['Improved Grapple']);

        $talent              = new Talent;
        $talent->name        = 'Whirling Throw';
        $talent->requirement = 'You have a creature Grabbed or Restrained';
        $talent->description = "<p>You propel your Grabbed or Restrained foe a great distance. You can throw the creature any distance up to 10 feet, plus 5 feet + your STR modifier. If you successfully throw the creature, it takes Bludgeoning damage equal to your STR modifier plus 1D6 per 10 feet your throw it.</p>
<p>Attempt an Athletics check against the foe's CON DC. You take a -2 circumstance on your check if the target is one size larger than you and a -4 circumstance penalty if it's larger than that. You get a +2 circumstance bonus to your checks if the target is one size smaller than you and a +4 circumstance bonus if it's smaller than that.</p>
<dl>
    <dt>Critical Success</dt> <dd>You throw the creature the desired distance</dd>
    <dt>Failure</dt> <dd>You don't throw the creature</dd>
    <dt>Critical Failure</dt> <dd>You don't throw the creature, and it's no longer Grabbed or Restrained by you</dd>
</dl>";
        $helper->addTypesToSimpleObject($talent, ['Grapple', 'Unarmed', 'Talent' => 6]);
        $talent->feats()->save(app()->feats['Improved Grapple']);

        $talent              = new Talent;
        $talent->name        = 'Flurry of Talents';
        $talent->requirement = 'You must have levels in Monk';
        $talent->description = '<p>You flurry in a combination of Talents. You can replace one or more of your attacks during a Flurry of Blows with Grapple, Shoves, or Trips.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 4]);

        $talent              = new Talent;
        $talent->name        = 'Clever Positioning';
        $talent->requirement = 'You are in in melee range with an opponent';
        $talent->action_type = 'Double Action';
        $talent->description = '<p>You make a melee attack, and while your opponent is slightly off balance from your blow, you find the leverage needed to pull him into your space while moving into his space.</p>
<p>As part of this Talent, you make a single melee attack against a target. If your attack hits, the target takes damage normally and must make a DEX Save (DC 12 + your DEX modifier). If this save fails, you swap positions with the target. if the target is Large or larger, you can occupy any of the squares that make up its space. THe target must in turn occupy the square, or one of the squares, you previously occupied. You cannot use this Talent if you or the target would end up sharing the same space as another creature or an impassable terrain feature, such as a wall. If your target occupies a larger space than you do, they choose his final position according to the guidelines given above.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Improved Crane Stance';
        $talent->trigger     = 'You are targeted with a Melee Attack by an attacker you can see';
        $talent->requirement = 'You are in Crane Stance';
        $talent->description = "<p>You interpose your arm between yourself and your opponent. Your circumstance bonus to AC from Crane Stance increase to +3 against the triggering attack. If the attack misses you, you can immediately make a Crane Wing Strike against the attacker at a -2 penalty, even if the attacker isn't within your reach.</p>";
        $helper->addTypesToSimpleObject($talent, ['Talent' => 6, 'Stance']);
        $talent->feats()->save(app()->feats['Crane Stance']);

        $talent              = new Talent;
        $talent->name        = 'Improved Dragon Stance';
        $talent->action_type = 'Action';
        $talent->requirement = 'You are in Dragon Stance';
        $talent->description = "<p>You can roar as an Action, instilling Fear in your enemies. Enemies within a 15-foot emanation must succeed at a WIS Save against your Intimidation DC or be Frightened 1 (Frightened 2 on a Critical Failure). When a creature Frightened by your roar begins its turn adjacent to you, it can't reduce its Frightened value below 1 on that turn. Your first attack that hits a Frightened creature after you roar and before the end of your next turn gains a +4 circumstance bonus to damage.</p>
<p>After you use your roar, you can't use it again for 5 rounds. Its effects end immediately if you leave Dragon Stance. Creatures in the area of your roar are then temporarily immune for 1 minute. Each additional time you use your roar against the same opponent in the same Encounter, the opponent gains a cumulative +1 bonus to their WIS Save.</p>";
        $helper->addTypesToSimpleObject($talent, ['Diminishing', 'Talent' => 6, 'Stance']);
        $talent->feats()->save(app()->feats['Dragon Stance']);

        $talent              = new Talent;
        $talent->name        = 'Improved Horse Stance';
        $talent->requirement = 'You are in Horse Stance';
        $talent->description = '<p>You become harder to move and harder to hurt. You gain the following</p>
<ul>
    <li>You gain a +1 circumstance bonus to AC while you are in your Horse Stance</li>
    <li>+7 circumstance bonus against being Shoved, Tripped, or Grappled</li>
    <li>Your DEX modifier cap to AC becomes +1 instead of +0</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 6, 'Stance']);
        $talent->feats()->save(app()->feats['Horse Stance']);

        $talent              = new Talent;
        $talent->name        = 'Improved Mantis Stance';
        $talent->requirement = 'You are in Mantis Stance';
        $talent->description = '<p>When you make Stunning Fist attacks, the target takes a -2 penalty to their Save</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 6, 'Stance']);
        $talent->feats()->save(app()->feats['Mantis Stance']);

        $talent              = new Talent;
        $talent->name        = 'Improved Tiger Stance';
        $talent->requirement = 'You are in Tiger Stance';
        $talent->description = '<p>You make a fierce swipe with both hands. Make a Tiger Claw Strike. It deals an extra weapon damage dice, and you can push the target 5 feet away as if you had successfully Shoved them. If the attack is a Critical Success and deals damage, add your STR modifier to the Persistent Bleed damage from your Tiger Claw</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 6, 'Stance']);
        $talent->feats()->save(app()->feats['Tiger Stance']);

        $talent              = new Talent;
        $talent->name        = 'Quick Draw';
        $talent->action_type = 'Free';
        $talent->description = '<p>You can draw weapons quickly</p>
<ul>
    <li>You can draw a weapon as a Free Action</li>
    <li>You can draw a hidden weapon as an Action</li>
    <li>You can sheath a weapon as a Free Action</li>
    <li>You can only take 3 of these Free Actions per turn</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Quick Staff';
        $talent->description = '<p>When you use Weapon Finesse to gain a dodge bonus while wielding a quarterstaff, you gain an additional +2 bonus to your dodge bonus.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 1]);
        $talent->feats()->save(app()->feats['Weapon Finesse']);
        $talent->feats()->save(app()->feats['Weapon Focus'], ['meta' => 'quarterstaff']);

        $talent              = new Talent;
        $talent->name        = 'Shielded Axe';
        $talent->description = '<p>When you fight with both a Dwarven Waraxe in your main hand and a Handaxe in your offhand, you can still gain the shield bonus for a buckler strapped to your offhand. In addition, you do not take the usual -1 penalty to attack rolls when using a buckler.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 7]);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);

        $talent              = new Talent;
        $talent->name        = 'Spellrazor';
        $talent->description = '<p>You can cast a spell that requires a Touch Attack or Touch Spell Attack and make a Melee Attack with a Light Agile weapon as part of the Actions used to cast the spell. This Melee Attack can be used to deliver the Touch Attack from the spell.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 5]);
        $talent->feats()->save(app()->feats['Combat Casting']);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);

        $talent              = new Talent;
        $talent->name        = 'Slide Ally';
        $talent->action_type = 'Action';
        $talent->description = '<p>You use an Action to attack an opponent. If you hit, any ally that is currently adjacent to the opponent can move 10 feet and the opponent that you hit cannot make Attacks of Opportunity against any of your allies. You still suffer Attacks of Opportunity from the opponent.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Improved Reaction';
        $talent->action_type = 'Reaction';
        $talent->trigger     = "A creature within your reach uses a manipulate action or a move Action, makes a ranged attack, or leaves a square during a move Action it's using.";
        $talent->description = '
<ul>
    <li>You gain a Reaction</li>
    <li>You may take this Talent multiple times. Each time you gain another Reaction, allowing you to take more Reactions each turn. You may not take more than 3 Reactions each turn.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Reaction', 'Talent' => 1]);

        $talent                    = new Talent;
        $talent->name              = 'Deny Advantage';
        $talent->description       = '<p>You are skilled at fighting while Flanked</p>
<ul>
    <li>Your opponents do not gain a Flanking Bonus against you unless they have the Improved Flanking Talent.</li>
</ul>';
        $helper->addTypesToFeat($talent, ['Flanking', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Pack Tactics';
        $talent->trigger     = 'A threatening ally is within 5 feet of a creature you threaten';
        $talent->parent_id   = Talent::where('name', 'Improved Reaction')->firstOrFail()->id;
        $talent->description = '<p>You gain Flanking bonuses against the creature you threaten, so long as another ally also threatens the same creature, even though your ally is not directly across from you. Your ally does not gain a Flanking bonus unless another ally is directly across from them or they also have this Feat.</p>';
        $helper->addTypesToSimpleObject($talent, ['Flanking', 'Talent' => 4]);

        $talent              = new Talent;
        $talent->name        = 'Improved Flanking';
        $talent->trigger     = 'You are Flanking an opponent';
        $talent->parent_id   = Talent::where('name', 'Improved Reaction')->firstOrFail()->id;
        $talent->description = '<p>You gain a +1 bonus to hit the opponents you are Flanking.</p>';
        $helper->addTypesToSimpleObject($talent, ['Animal Companion', 'Flanking', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Greater Flanking';
        $talent->trigger     = 'You gain a Flanking bonus against an opponent';
        $talent->parent_id   = Talent::where('name', 'Improved Reaction')->firstOrFail()->id;
        $talent->description = '<ul>
    <li>When you hit an opponent with a Melee attack that you are Flanking, you deal an additional +5 damage.</li>
    <li>Any creature that you are Flanking must use an additional Action to use any Movement Action or to cast Spells. (example: a creature being Flanked wishes to use an Action to move away from the current situation. That creature is forced to use 2 Actions to make 1 Action worth of movement)</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Animal Companion', 'Flanking', 'Talent' => 12]);

        $talent              = new Talent;
        $talent->name        = 'Acrobatic Charge';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You perform a Charge';
        $talent->description = '<p>You can charge over difficult terrain that normally slows movement or allies blocking your path. This ability enables you to run down steep stairs, leap down from a balcony, or to tumble over tables to get to your target.</p>
<p>Depending on the circumstance, you may still need to make appropriate Acrobatics or Athletics checks to successfully move over the terrain.</p>';
        $helper->addTypesToSimpleObject($talent, ['Attack', 'Charge', 'Move', 'Finisher', 'Talent' => 3]);
        $talent->skills()->save(app()->skills['Acrobatics'], ['dc' => 4]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 4]);

        $talent              = new Talent;
        $talent->name        = 'Acrobatic Strike';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'You perform a Charge';
        $talent->description = '<p>You make a Charge attack at an opponent. If you Succeed on a DC 13 Acrobatics check, you do not Provoke Attacks of Opportunity for your Charge.</p>
<p>As part of using this Talent, you may use a Heroic Surge. If you do, you gain a +2 Bonus to your Acrobatics check and to your Hit. If you hit with a Melee Attack, you deal normal Damage plus the following depending on your Damage Type.</p>
<dl>
    <dt>Bludgeoning</dt> <dd>The Target must make a CON Save vs your Attack roll. If they fail, the Target is Stunned: 1</dd>
    <dt>Piercing</dt> <dd>Your Attack ignores Damage Reduction</dd>
    <dt>Slashing</dt> <dd>Your Attack is considered a Critical Hit. If you rolled a Critical, then add an additional Weapon Die of Damage</dd>
</dl>';
        $helper->addTypesToSimpleObject($talent, ['Attack', 'Charge', 'Move', 'Finisher', 'Heroic Surge', 'Talent' => 7]);
        $talent->skills()->save(app()->skills['Acrobatics'], ['dc' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Acrobatic Throw';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'You perform a Grapple';
        $talent->description = '<p>You attempt to Grapple your opponent and then toss them using your acrobatics.</p>
<p>As part of using this Talent, you may use a Heroic Surge. If you do, you gain a +2 Bonus to your Grapple and Acrobatics check and you make your initial Grapple check as if you have the Improved Grapple Feat.</p>
<ul>
    <li>You make a Grapple check to start the Grapple.</li>
    <li>You may make an Acrobatics check and use that result as your Grapple check.</li>
    <li>If you Critically Succeed on the Grapple check, you may immediately throw the opponent up to 10 feet in any direction, ending the Grapple. The Target takes 2D6 Non-lethal Bludgeoning Damage from the throw.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Attack', 'Grapple', 'Heroic Surge', 'Talent' => 7]);
        $talent->feats()->save(app()->feats['Improved Unarmed Strike']);
        $talent->skills()->save(app()->skills['Acrobatics'], ['dc' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Acrobatic Disarm';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'You attempt a Disarm';
        $talent->description = '<p>You attempt to Disarm you opponent. As part of this Action, you may make a Charge Action. If you Succeed on a DC 13 Acrobatics check, you gain a +2 bonus to the Disarm check.</p>
<p>As part of using this Talent, you may use a Heroic Surge. If you do, you automatically Succeed on the Acrobatics check.</p>';
        $helper->addTypesToSimpleObject($talent, ['Attack', 'Heroic Surge', 'Talent' => 7]);
        $talent->feats()->save(app()->feats['Improved Disarm']);
        $talent->skills()->save(app()->skills['Acrobatics'], ['dc' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Improved Dodge';
        $talent->description = '<p>The Dodge bonus from your Dodge feat becomes +2 and +4 when taking the Full Defense Action.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 6]);
        $talent->feats()->save(app()->feats['Dodge']);

        $talent              = new Talent;
        $talent->name        = 'Greater Dodge';
        $talent->description = '<p>The Dodge bonus from your Dodge feat becomes +3 and +5 when taking the Full Defense Action.</p>';
        $talent->parent_id   = Talent::where('name', 'Improved Dodge')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Talent' => 10]);
        $talent->feats()->save(app()->feats['Dodge']);

        $talent              = new Talent;
        $talent->name        = 'Mounted Archery';
        $talent->description = '<p>The penalty you take when using a Ranged Weapon while Mounted is halved:</p>
<ul>
    <li>-1 instead of -2 if your Mount uses 2 Actions to Move</li>
    <li>-2 instead of -3 if your Mount uses 3 Actions to Move</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 3, 'Mounted']);
        $talent->feats()->save(app()->feats['Mounted Combatant']);
        $talent->skills()->save(app()->skills['Animal Handling'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Improved Overrun';
        $talent->trigger     = 'You make an Overrun Action';
        $talent->description = '<p>When you attempt an Overrun, the target may not choose to avoid you. You also gain a +3 bonus to your STR check.</p>
<p>Each additional time you use this Talent against the same opponent in the same Encounter, the bonus decreases by -1 to a minimum of +0.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 2, 'Diminishing', 'Mounted']);
        $talent->feats()->save(app()->feats['Power Attack']);

        $talent              = new Talent;
        $talent->name        = 'Trample';
        $talent->trigger     = 'You are mounted and make an Overrun Action';
        $talent->description = '<p>When you attempt an Overrun while mounted, your target may not choose to avoid you. If you successfully knock your target prone, your mount may make one hoof attack as a Free Action.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 4, 'Mounted']);
        $talent->feats()->save(app()->feats['Mounted Combatant']);

        $talent              = new Talent;
        $talent->name        = 'Acrobatic Rider';
        $talent->trigger     = 'You are mounted and wearing Light or no Armor';
        $talent->description = '<p>You gain a +5 bonus to your Athletics or Acrobatics check that involves performing stunts while mounted. Some Talents including but are not limited to the following</p>
<ul>
    <li>Mounting onto or dismounting from a mount moving at full speed</li>
    <li>Turning in the saddle to sit facing in the opposite direction while the mount is moving at full speed</li>
    <li>Hanging on the side of the saddle, such that the mount grants Full Concealment while the mount is moving at full speed</li>
    <li>Grabbing something from the ground while the mount is moving at full speed</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 5, 'Mounted']);
        $talent->skills()->save(app()->skills['Acrobatics'], ['dc' => 5]);
        $talent->skills()->save(app()->skills['Animal Handling'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Crusher';
        $talent->description = '<p>You gain the following benefits.</p>
<ul>
    <li>Once per turn, when you hit a creature with an attack that deals Bludgeoning damage and the weapon die roll is high enough (see table), you can move the target 5 feet to an unoccupied space provided the target is no more than one size larger than you.
        <table>
            <thead>
                <tr>
                    <th>Die</th>
                    <th>Range</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>D4</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>D6</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>D8</td>
                    <td>7 - 8</td>
                </tr>
                <tr>
                    <td>D10</td>
                    <td>8 - 10</td>
                </tr>
                <tr>
                    <td>D12</td>
                    <td>9 - 12</td>
                </tr>
            </tbody>
        </table>
    </li>
    <li>When you score a Critical Hit that deals Bludgeoning damage to a creature, that creature becomes Prone.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Piercer';
        $talent->description = "<p>You gain the following benefits.</p>
<ul>
    <li>Once per turn, when you hit a creature with an attack that deals Piercing damage, you can reroll one of the attack's damage dice, and you must use the new roll.</li>
    <li>When you score a Critical Hit that deals Piercing damage to a creature, you can roll one additional weapon die when determining the extra Piercing damage the target takes.</li>
</ul>";
        $helper->addTypesToSimpleObject($talent, ['Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Slasher';
        $talent->description = '<p>You gain the following benefits.</p>
<ul>
    <li>Once per turn, when you hit a creature with an attack that deals Slashing damage, you can reduce the Speed of the target by 10 feet until the start of your next turn.</li>
    <li>When you score a Critical Hit that deals Slashing damage to a creature, you grievously wound it. Until the start of your next turn, the target is Hampered: 15.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Heavy Weapon Master';
        $talent->requirement = 'Wield a Martial Melee weapon that does not have the Agile or Finesse trait.';
        $talent->description = "<p>When you roll for damage with your Martial Melee weapon, reroll all 1's and 2's</p>";
        $helper->addTypesToSimpleObject($talent, ['Attack', 'Melee', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Power Attack']);

        $talent              = new Talent;
        $talent->name        = 'Counter Grapple';
        $talent->trigger     = 'You must be in a Grappling with an opponent and be wearing Light Armor or no Armor';
        $talent->description = '<p>When Grappling or Pinned, if you are wearing Light Armor or no Armor, you can attempt either a Grapple check or a Break Grapple check. If you fail the check, you can immediately attempt the other check as an Action.</p>';
        $helper->addTypesToSimpleObject($talent, ['Grapple', 'Talent' => 8]);
        $talent->feats()->save(app()->feats['Improved Grapple']);

        $talent              = new Talent;
        $talent->name        = 'Sleeper Lock';
        $talent->trigger     = 'You must be in a Grappling with an opponent and be wearing Light Armor or no Armor';
        $talent->action_type = 'Triple Action';
        $talent->description = '<p>You learn how to render an opponent unconscious while Grappling. If you have your opponent Pinned while Grappling you may use this Talent to attempt to make your opponent go unconscious. Make a STR challenge vs the opponents STR (the opponent may choose to use DEX instead). If you win, the opponent must make a CON Save (DC 10 + WIS modifier + Character Proficiency) or fall Unconscious for 1D3 + 1 rounds. A creature with no discernible anatomy or does not need to breath has immunity to this effect.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 8]);
        $talent->feats()->save(app()->feats['Improved Grapple']);

        $talent              = new Talent;
        $talent->name        = 'Devastating Grapple';
        $talent->trigger     = 'You must be in a Grappling with an opponent and be wearing Light Armor or no Armor';
        $talent->action_type = 'Triple Action';
        $talent->description = '<p>If you have an opponent Pinned and you are able to maintain the Pin for 3 consecutive rounds, the opponent must make a CON Save (DC 10 + WIS modifier + Character Proficiency) at the end of the third round. If the opponent fails the Save, they become Unconscious. A creature with no discernible anatomy is immune to the effect of this ability.</p>';
        $talent->parent_id   = Talent::where('name', 'Sleeper Lock')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Talent' => 12]);
        $talent->feats()->save(app()->feats['Improved Grapple']);

        $throw              = new Talent;
        $throw->name        = 'Thrower';
        $throw->description = '<p>You gain a +1 bonus to Hit to all Thrown weapons.</p>
<p>Add a +1 bonus to the Critical Hit threat range of any weapon that you throw that you also have the Weapon Focus feat with.</p>';
        $throw->parent_id = Talent::where('name', 'Quick Draw')->first()->id;
        $helper->addTypesToSimpleObject($throw, ['Ranged', 'Talent' => 5]);
        $throw->feats()->save(app()->feats['Point-Blank Shot']);

        $talent              = new Talent;
        $talent->name        = 'Doubletoss';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may throw two weapons at one or two targets within 30 feet. The normal penalties for multiple attacks still apply.</p>';
        $talent->parent_id   = $throw->id;
        $helper->addTypesToSimpleObject($talent, ['Ranged', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Sneaky Shot';
        $talent->requirement = 'You are not in combat';
        $talent->description = '<p>You may make a Palm an Object check opposed by Perception check. If you Succeed, you may make a Ranged attack with a thrown weapon and your Target is denied their DEX bonus to AC.</p>';
        $talent->parent_id   = $throw->id;
        $helper->addTypesToSimpleObject($talent, ['Ranged', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Running Toss';
        $talent->trigger     = 'You take a Stride Action or a Tumble Through Action';
        $talent->description = '<p>As part of a Stride Action or a Tumble Through Action, you may make a Ranged attack with a thrown weapon with a -1 penalty to Hit and Damage.</p>';
        $talent->parent_id   = $throw->id;
        $helper->addTypesToSimpleObject($talent, ['Ranged', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Precise Shot';
        $talent->description = "<ul>
    <li>When you roll for damage from a Ranged Weapon attack, reroll all 1's and 2's</li>
</ul>";
        $helper->addTypesToSimpleObject($talent, ['Ranged', 'Attack', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Point-Blank Shot']);

        $talent              = new Talent;
        $talent->name        = 'Tripping Shot';
        $talent->action_type = 'Double Action';
        $talent->description = '<p>Make a Ranged attack with a -2 penalty to Hit and a -4 penalty to Damage. If you hit, you make a normal Trip attempt. If you succeed, the target is Tripped. If you fail, the target does not get to attempt a Trip attack in return.</p>';
        $helper->addTypesToSimpleObject($talent, ['Ranged', 'Talent' => 7]);
        $talent->feats()->save(app()->feats['Point-Blank Shot']);
        $talent->feats()->save(app()->feats['Improved Trip']);

        $talent              = new Talent;
        $talent->name        = 'Distracting Shot';
        $talent->description = "<p>The sheer power of your attacks, or the overwhelming number of them leaves an enemy flustered.</p>
<p>If you Critically Hit your target with a Ranged weapon or hit it at least twice on the same turn with a Ranged weapon, it's Flat-Footed until the start of your next turn.</p>";
        $helper->addTypesToSimpleObject($talent, ['Ranged', 'Talent' => 12]);
        $talent->feats()->save(app()->feats['Point-Blank Shot']);

        $talent              = new Talent;
        $talent->name        = 'Improved Distracting Shot';
        $talent->description = "<p>Even a single missile can throw off your enemy's balance, and more powerful attacks leave it flustered for longer.</p>
<p>If you Hit your target with a Ranged weapon attack, it's Flat-Footed until the start of your next turn.</p>
<p>If you Critically hit your target or hit it twice on the same turn with a Ranged weapon, it's Flat-Footed until the end of your next turn instead.</p>";
        $talent->parent_id = Talent::where('name', 'Distracting Shot')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Ranged', 'Talent' => 16]);

        $talent              = new Talent;
        $talent->name        = 'Bleeding Strike';
        $talent->action_type = 'Double Action';
        $talent->description = '<p>Your blow inflicts wounds that bleed profusely.</p>
<p>Make a Slashing or Piercing Strike with a weapon or Unarmed Strike. On a hit, the target also gains Persistent Damage: 1 (bleeding). If the user Succeeds a DC 12 Medicine check or receives any magical healing, then the Bleeding stops.</p>
<p>You may spend a Heroic Surge as part of this attack. If you do, the Persistent Damage becomes 3.</p>';
        $helper->addTypesToSimpleObject($talent, ['Finisher', 'Precision', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Lethal Strike';
        $talent->action_type = 'Triple Action';
        $talent->description = '<p>You stab your foe in a vital organ, possibly killing them outright.</p>
<p>Spend a Heroic Surges and make a Strike. If you hit, the target must make a CON Save vs your Class DC.</p>
<dl>
    <dt>Critical Success</dt> <dd>6 Precision damage</dd>
    <dt>Success</dt> <dd>3D6 Precision damage</dd>
    <dt>Failure</dt> <dd>9D6 Precision damage</dd>
    <dt>Critical Failure</dt> <dd>12D6 Precision damage</dd>
</dl>';
        $helper->addTypesToSimpleObject($talent, ['Finisher', 'Precision', 'Talent' => 18]);

        $talent              = new Talent;
        $talent->name        = 'Perfect Strike';
        $talent->action_type = 'Action';
        $talent->description = '<p>You focus on your next attack, insuring that you successfully hit.</p>
<p>Spend a Heroic Surge and gain Advantage on your next melee attack to Hit roll.</p>';
        $helper->addTypesToSimpleObject($talent, ['Finisher', 'Talent' => 6]);

        $talent              = new Talent;
        $talent->name        = 'Stunning Strike';
        $talent->action_type = 'Double Action';
        $talent->description = "<p>You attempt a dizzying blow.</p>
<p>Spend a Heroic Surge, the next Melee attack you make, if you hit, they must make a CON Save vs your Class DC.</p>
<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>The Target can't use Reactions until the beginning of their next turn</dd>
    <dt>Failure</dt> <dd>The Target is Stunned: 1</dd>
    <dt>Critical Failure</dt> <dd>The Target is Stunned: 3</dd>
</dl>";
        $helper->addTypesToSimpleObject($talent, ['Finisher', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Unbalancing Strike';
        $talent->action_type = 'Double Action';
        $talent->description = '<p>Your attack leaves your target off balance.</p>
<p>Make a melee strike. If you hit and deal damage, the target is Flat-Footed until the beginning of your next turn.</p>
<p>If you use this Talent against the same opponent in the same Encounter, you gain a cumulative -1 penalty to Hit.</p>';
        $helper->addTypesToSimpleObject($talent, ['Finisher', 'Talent' => 4, 'Diminishing']);

        $talent              = new Talent;
        $talent->name        = 'Quick Stride';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to make a Stride Action';
        $talent->description = '<p>Make a Stride Action with a -5 Speed penalty. Your position in initiative order is shifted by +2 faster starting at the next initiative cycle.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Initiative', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Death Blow';
        $talent->action_type = 'Double Action';
        $talent->trigger     = 'You are facing an opponent that is at least 10 levels lower than you';
        $talent->description = '<p>You overwhelm an inferior opponent with a single attack that has a high chance of killing the opponent.</p>
<p>Make a single attack with a -5 penalty. The damage is applied to the opponents CON.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 12]);
        $talent->feats()->save(app()->feats['Weapon Specialization']);

        $talent              = new Talent;
        $talent->name        = 'Piercing Attack';
        $talent->action_type = 'Action';
        $talent->trigger     = 'You are about to deliver an attack that has Precision damage';
        $talent->description = '<p>Your attack that deals Precision damage requires an additional Action. Take a -1 penalty to Hit and the attack gains the Piercing type.</p>';
        $helper->addTypesToSimpleObject($talent, ['Precision', 'Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Called Shot';
        $talent->description = '<p>You aim for a vital spot. Make either a Melee or Ranged attack with a -3 penalty to Hit. If you hit, the attack deals +10 Precision damage</p>';
        $helper->addTypesToSimpleObject($talent, ['Precision', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Jump Attack';
        $talent->action_type = 'Double Action';
        $talent->description = "<p>You launch yourself at a foe. Make a Leap or attempt a High Jump or long Jump. During any part of the jump, if you're adjacent to a foe, you can immediately Strike that foe with a Melee Attack, even if the foe is in midair. Your Strike deals an additional Die of damage. You fall to the ground after the Strike. If the distance you fall is no more than the height of your jump, you land upright and take no damage.</p>";
        $helper->addTypesToSimpleObject($talent, ['Talent' => 4]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Improved Snare Crafting';
        $talent->description = '<p>You gain the formula for 2 Snares.</p>
<p>Each day during your daily preparations, you can Prepare four Snares from your formulas for quick deployment; if they normally take 1 minute to Craft, you can Craft them with 3 Interact Actions if they have been Prepared.</p>';
        $helper->addTypesToSimpleObject($talent, ['Item Creation', 'Talent' => 4]);
        $talent->feats()->save(app()->feats['Snare Crafting']);
        $talent->skills()->save(app()->skills['Crafting'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Swift Snare Crafting';
        $talent->description = "<p>You gain the formula for 2 Snares.</p>
<p>You can rig a Snare in only Moments. You can Craft Snares that normally take 1 minute to Craft with 3 Interact Actions, even if you haven't prepared them.</p>";
        $talent->parent_id = Talent::where('name', 'Improved Snare Crafting')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Item Creation', 'Talent' => 6]);
        $talent->skills()->save(app()->skills['Crafting'], ['dc' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Deadly Snare Crafting';
        $talent->description = '<p>Your snares are particularly difficult for enemies to avoid.</p>
<p>When you set a Snare, the Save DC for that Snare is equal to its normal DC or your Class DC, whichever is higher.</p>';
        $talent->parent_id = Talent::where('name', 'Improved Snare Crafting')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Item Creation', 'Talent' => 8]);
        $talent->skills()->save(app()->skills['Crafting'], ['dc' => 9]);

        $talent              = new Talent;
        $talent->name        = 'Improved Extra Limb';
        $talent->description = '<p>The penalties to one of your Grafted limbs is reduced by +4.</p>
<p>You may take this Talent multiple times. Each time reducing the penalties to one of your Grafted limbs.</p>';
        $helper->addTypesToSimpleObject($talent, ['Graft', 'Talent' => 3]);

        $feat   = Feat::where('name', 'Improved Mounted Combatant')->first();
        $talent = Talent::where('name', 'Improved Overrun')->first();
        $feat->talents()->save($talent);
        $talent = Talent::where('name', 'Trample')->first();
        $feat->talents()->save($talent);

        $this->call(FightingTalentsSeeder::class);
        $this->call(MiscellaneousTalentsSeeder::class);
        $this->call(PsionicTalentsSeeder::class);
    }
}
