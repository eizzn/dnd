<?php

namespace Database\Seeders\Rules;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class CombatPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page              = new Page;
        $page->name        = 'Combat';
        $page->description = '<h2>The Order of Combat</h2>
<p>A typical combat encounter is a clash between two sides, a Flurry of weapon swings, feints, parries, footwork, and Spellcasting. The game organizes the chaos of combat into a cycle of rounds and turns. A round represents about 6 seconds in the game world. During a round, each participant in a battle takes a turn. The order of turns is determined at the beginning of a combat encounter, when everyone rolls Initiative. Once everyone has taken a turn, the fight continues to the next round if neither side has defeated the other.</p>
<h3>Combat Step by Step</h3>
<ol>
    <li><strong>Determine Surprise</strong> The GM determines whether anyone involved in the combat encounter is surprised.</li>
    <li><strong>Establish positions</strong> The GM decides where all the characters and Monsters are located. Given the adventurer\'s Marching Order or their stated positions in the room or other location, the GM figures out where the adversaires are and how far away and in what direction.</li>
    <li><strong>Roll Initiative</strong> Everyone involved in the combat encounter rolls Initiative, determining the order of combatant\'s turns.</li>
    <li><strong>Take turns</strong> Each participant in the battle takes a turn in Initiative order.</li>
    <li><strong>Begin the next round</strong> When everyone involved in the combat has had a turn, the round ends. Repeat step 4 until the fighting stops.</li>
</ol>';
        $page->order = 2;
        $page->save();

        $rule              = new Rule;
        $rule->key         = 'surprise';
        $rule->name        = 'Surprise';
        $rule->description = '<p>A band of adventurers sneaks up on a Bandit camp, springing from the trees to Attack them. A Gelatinous Cube glides down a dungeon Passage, unnoticed by the adventurers until the cube engulfs one of them. In these situations, one side of the battle gains Surprise over the other.</p>
<p>The GM determines who might be surprised. If neither side tries to be stealthy, they automatically notice each other. Otherwise, the GM compares the DEX (Stealth) checks of anyone Hiding with the passive WIS (Perception) score of each creature on the opposing side. Any character or monster that doesn’t notice a threat is surprised at the start of the encounter.</p>
<p>If you’re surprised, you can’t move or take an action on your first turn of the combat, and you can’t take a Reaction until that turn ends. A member of a group can be surprised even if the other members aren’t.</p>';
        $rule->order = 10;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'initiative';
        $rule->name        = 'Initiative';
        $rule->description = '<p>Initiative determines the order of turns during combat. When combat starts, every participant makes a DEX check to determine their place in the Initiative order. The GM makes one roll for an entire group of identical creatures, so each member of the group acts at the same time.</p>
<p>The GM ranks the combatants in order from the one with the highest DEX check total to the one with the lowest. This is the order (called the Initiative order) in which they act during each round. The Initiative order remains the same from round to round.</p>
<p>If a tie occurs, the GM decides the order among tied GM--controlled creatures, and the players decide the order among their tied characters. The GM can decide the order if the tie is between a monster and a player character.</p>
<p>Optionally, the GM can have the tied characters and Monsters each roll a d20 to determine the order, highest roll going first.</p>';
        $rule->order = 20;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'dodge';
        $rule->name        = 'Dodge';
        $rule->description = '<p>As a Double Action, you focus on avoiding attacks. Until the start of your next turn, you gain the following</p>
<ul>
    <li>All attacks made against you is made at Disadvantage</li>
    <li>If you can see the attacker, you make all DEX Saves with Advantage.</li>
</ul>
<p>You lose these benefits if become incapacitated or if your Speed drops to 0.</p>';
        $rule->order       = 22;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'critical_hits';
        $rule->name        = 'Critical Hits';
        $rule->description = "<p>When you score a Critical Hit, you get to roll extra dice for the attack's  damage against the target. Roll all of the attack's damage dice twice and add them together. Then add any relevant modifiers as normal.</p>
<blockquote>
    For example, if you score a Critical Hit with a dagger, roll 2D4 for the damage, rather than 1D4, and then add your relevant ability modifier. If the attack involves other damage dice, such as from the Rogue's Sneak Attack feature, you roll those dice twice as well.
</blockquote>
<dl>
    <dt>Rank 1 (4.7%)</dt> <dd>16 - 18</dd>
    <dt>Rank 2 (9.3%)</dt> <dd>15 - 18</dd>
    <dt>Rank 3 (16.3%)</dt> <dd>14 - 18</dd>
    <dt>Rank 4 (26%)</dt> <dd>13 - 18</dd>
</dl>";
        $rule->order = 25;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'flanking';
        $rule->name        = 'Flanking';
        $rule->description = "<p>When you and an ally are on opposite sides of an enemy, you're flanking that enemy. While the enemy is flanked, it is Flat-Footed (taking a -1 circumstance penalty to AC) to the creature who are flanking it. To flank a foe, you and your ally must be on opposites sides or opposite corners of the creature. A line drawn between the center of your space to the center of your ally's space must pass through either opposite sides or opposite corners of the enemy's space.</p>
<p>Both you and the ally have to be threatening that enemy: this means you both must be wielding weapons or ready to make unarmed attacks and not under any effects that prevent you from making attacks. If you have reach, you determine whether you are flanking creatures out to the distance of your reach because you threaten all of those squares.</p>";
        $rule->order = 30;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'disengage';
        $rule->name        = 'Disengage';
        $rule->description = '<p>As a Double Action, you may make 1 move Action. This move Action does not Provoke Attacks of Opportunity.</p>';
        $rule->order       = 40;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'two-weapon-fighting';
        $rule->name        = 'Two-Weapon Fighting';
        $rule->description = '<p>While wielding a weapon in each hand, you do not gain the STR bonus to Hit or Damage and you suffer a -1 to Hit penalty for each weapon you are wielding that does not have the Agile trait.</p>';
        $rule->order       = 100;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'charge';
        $rule->name        = 'Charge';
        $rule->description = "<p>As a Double Action, you may move up to your speed and attack. You gain a +2 bonus to Hit and damage. This movement provokes Attacks of Opportunity from the first square you enter that is threatened.</p>
<blockquote>
    Ex. A barbarian charges at a target 20 feet away. Along the way, he passes through a square that is threatened by an ally of the target. The first square does not provoke an attack, but the second and third squares do. The barbarian continues the charge after suffering the consequences of the Attacks of Opportunity and enters the square adjacent to the target. This is the first square that the target threatens and does not provoke an Attack of Opportunity. The barbarian now can make his charge attack. If the target had a reach weapon, or was size large and had reach, the first square still does not provoke an Attack of Opportunity, but the second square does.
</blockquote>
<p>In addition, there are several restrictions to abide by when performing a charge.</p>
<ul>
    <li>You must move at least 10 feet during a charge</li>
    <li>Your entire charge must be in a straight line</li>
    <li>You may not charge if part or all of the movement is across difficult terrain.</li>
    <li>You cannot charge through another creature's space. If the creature is an ally, then you may move through his space if you succeed in a Athletics check to completely jump over your ally, or are two size categories smaller than your ally.</li>
    <li>You must end your charge at the closest position from your starting position that you could attack the target from.</li>
</ul>
<p>Certain weapons are much deadlier when used with the momentum from the charge. In general, all weapons from the spear and lance families deal double damage with an attack from a charge. These same weapons deal double damage when used to attack a character who is charging.</p>";
        $rule->order = 200;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'overrun';
        $rule->name        = 'Overrun';
        $rule->description = "<p>You can attempt to overrun as an Action. You attempt to plow past or over your opponent and move through their square as you move. You can only overrun an opponent who is one size category larger than you or smaller. You can make only one overrun once per round.</p>
<p>If you're attempting to overrun an opponent, follow these steps.</p>
<ol>
    <li>You suffer Attacks of Opportunity normally as part of your move.</li>
    <li>
        <p>The opponent has the option to simply avoid your attack and allow you to pass by.</p>
        <dl>
            <dt>Avoid</dt> <dd>The target doesn't suffer any ill effects and you keep moving. The target may make additional Attacks of Opportunity if they have the ability to as you move through additional threatened squares of the target.</dd>
            <dt>Blocks</dt> <dd>You and the target make opposed STR checks. If there is a size difference between you and the target, the larger gets a +5 bonus for each size category difference. You and the target gain an additional +5 bonus for having four or more legs or is otherwise more stable than a normal humanoid. If you win, you knock the target prone and continue your move (the target does not get any additional Attacks of Opportunity for moving through additional squares the target threatened). If you lose, you stop immediately and the target may make a Free STR check to try to knock you prone. Either way, you must move 5 feet back the way you came. If the target succeeded in knocking you prone, then you fall prone after moving back 5 feet.</dd>
        </dl>
    </li>
</ol>";
        $rule->order = 210;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'heroic-surge';
        $rule->name        = 'Heroic Surge';
        $rule->description = '<p>Some character classes or feats grant Heroic Surges. A Heroic Surge may be used to during your turn as a Free Action to gain an additional Action or gain Advantage on your next Strike Action. Certain Feats allow Heroic Surges to be used in other ways.</p>
<blockquote>
    Ex. Rendar, on his turn, uses a Heroic Action to gain an additional Action. He has 4 Actions this turn which may be used for Stride, Strike, or Spell Casting Actions. Heroic Surge does not apply the Quickened condition, it simply grants an additional Action.
</blockquote>
<p>You cannot use more than one Heroic Surge per turn.</p>
<p>You regain back one Heroic Surge after taking a Short Rest or all your Heroic Surges after a Long Rest.</p>';
        $rule->order = 300;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'shield-bash';
        $rule->name        = 'Shield Bash';
        $rule->description = '<p>A shield can be used to perform a Shield Bash. It deals damage as follows.</p>
<table>
    <thead>
        <tr>
            <th>Attack Type</th>
            <th>Damage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Bash</td>
            <td>
                <dl>
                    <dt>Light Shield</dt> <dd>1D3 B</dd>
                    <dt>Heavy Shield</dt> <dd>1D4 B</dd>
                </dl>
            </td>
        </tr>
        <tr>
            <td>Boss Bash</td>
            <td>
                <dl>
                    <dt>Light Shield</dt> <dd>1D4 B</dd>
                    <dt>Heavy Shield</dt> <dd>1D6 B</dd>
                </dl>
            </td>
        </tr>
        <tr>
            <td>Spiked</td>
            <td>
                <dl>
                    <dt>Light Shield</dt> <dd>1D4 P</dd>
                    <dt>Heavy Shield</dt> <dd>1D6 P</dd>
                </dl>
            </td>
        </tr>
    </tbody>
</table>';
        $rule->order = 400;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'parry';
        $rule->name        = 'Parry';
        $rule->description = '<p>You can focus on defending yourself. You cannot be weilding a shield and you must be considered armed (either armed with a Melee Weapon or have the Improved Unarmed Strike Feat).</p>
<p>While armed, you may spend an Action and gain a +1 bonus to your AC until the beginning of your next turn. You may spend up to 3 Actions a turn to Parry.</p>';
        $rule->order = 500;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'heavy_armor_use';
        $rule->name        = 'Heavy Armor Use';
        $rule->description = '<p>Fighting in heavy armor is tiring.</p>
<p>If you are not proficient in Heavy Armor, after 3 rounds of combat (making melee, ranged attacks, moving or casting spells), you must make a DC 12 CON Save or become Fatigued. You must make this Save each round after the 3rd until you Fail or combat ends</p>
<p>If you are proficient in Heavy Armor, then you must start making Saves after 10 rounds.</p>';
        $rule->order       = 1000;
        $page->rules()->save($rule);
    }
}
