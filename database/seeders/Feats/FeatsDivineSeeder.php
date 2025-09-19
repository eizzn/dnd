<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsDivineSeeder extends Seeder
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
        $feat->name        = 'Improved Channel Divinity';
        $feat->description = '<p>You become better at Channeling your Divine power. Your Channel Divinity now only costs 1 Spell Point.</p>';
        $helper->addTypesToFeat($feat, ['Divine' => 2, 'Channel Divinity', 'Generic' => 2]);
        $feat->features()->save(app()->features['channel_divinity']);

        $feat              = new Feat;
        $feat->name        = 'Quick Channel Divinity';
        $feat->description = '<p>You can now manifest your Channel Divinity abilities with one fewer Action.</p>';
        $helper->addTypesToFeat($feat, ['Divine' => 2, 'Channel Divinity', 'Generic' => 2]);
        $feat->features()->save(app()->features['channel_divinity']);

        $feat              = new Feat;
        $feat->name        = 'Empowered Channel Divinity';
        $feat->description = '<p>Your Channel Divinity becomes more powerful.</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>You gain a +5 Bonus to your Channel Divinity roll.</li>
    <li>If you have the Channel Divinity Caster Class Feature, your spell is automatically Heightened +2</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine' => 2, 'Channel Divinity', 'Generic' => 3]);
        $feat->features()->save(app()->features['channel_divinity']);

        $feat              = new Feat;
        $feat->name        = 'Favored of the Companions';
        $feat->requirement = 'Must be NG';
        $feat->description = '<p>You swear allegiance to Talisid or one of the other Five Companions, the paragons of the guardinals, and in exchange, gain power to act on their behalf.</p>
<ul>
    <li>Increase one of your Attributes by +1, to a maximum of 20</li>
    <li>If you have the Find Familiar feat, you may select a Musteval Guardinal by Sacrificing a 2nd level Spell Slot</li>
    <li>If you have the Divine Mount feat, your mount gains the Celestial Creature template.</li>
    <li>
        <p>If you have the Animal Companion feat, you may choose any of the following</p>
        <ul>
            <li>Your Animal Companion gains the Celestial Creature template.</li>
            <li>You may gain a Asperi as your Animal Companion by Sacrificing 2 Spell Points and a 4th level Spell Slot</li>
        </ul>
    </li>
    <li>You may not take the Knight of Stars or the Servant of the Heavens feat. Your allegiance is only yours to give once.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Neutral', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Knight of Stars';
        $feat->requirement = 'Must be CG';
        $feat->description = '<p>You swear allegiance to the Court of Stars, the paragons of the eladrin, and in exchange gain power to act on their behalf.</p>
<ul>
    <li>Increase one of your Attributes by +1, to a maximum of 20</li>
    <li>If you have the Find Familiar feat, you may select a Coure Eladrin by Sacrificing a 2nd level Spell Slot</li>
    <li>
        <p>If you have the Divine Mount feat, you may choose one of the following</p>
        <ul>
            <li>Your mount gains the Celestial Creature template.</li>
            <li>You may gain a Unicorn as your Mount by Sacrificing a 3rd level Spell Slot</li>
        </ul>
    </li>
    <li>
        <p>If you have the Animal Companion feat, you may choose any of the following</p>
        <ul>
            <li>Your Animal Companion gains the Celestial Creature template.</li>
            <li>You may gain a Pegasus as your Animal Companion by Sacrificing 2 Spell Points and a 4th level Spell Slot</li>
            <li>You may gain a Unicorn as your Animal Companion by Sacrificing 3 Spell Points and a 5th level Spell Slot</li>
        </ul>
    </li>
    <li>You may not take the Favored of the Companions or the Servant of the Heavens feat. Your allegiance is only yours to give once.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Chaotic', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Servant of the Heavens';
        $feat->requirement = 'Must be LG';
        $feat->description = '<p>You swear allegiance to one of the Tome Archons of the Celestial Hebdomad, and in exchange you gain power to act on their behalf.</p>
<ul>
    <li>Increase one of your Attributes by +1, to a maximum of 20</li>
    <li>If you have the Find Familiar feat, you may select a Lantern Archon by Sacrificing a 2nd level Spell Slot</li>
    <li>If you have the Divine Mount feat, your mount gains the Celestial Creature template.</li>
    <li>
        <p>If you have the Animal Companion feat, you may choose any of the following</p>
        <ul>
            <li>Your Animal Companion gains the Celestial Creature template.</li>
            <li>You may gain a Blink Dog as your Animal Companion by Sacrificing 2 Spell Points and a 2nd level Spell Slot</li>
        </ul>
    </li>
    <li>You may not take the Knight of Stars or the Favored of the Companions feat. Your allegiance is only yours to give once.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Lawful', 'Generic' => 2]);
        $helper->addSpellsToFeat($feat, [
            6 => ['Wages of Sin'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Sacred Vow';
        $feat->description = '<p>You have willingly given yourself to the service of a good deity or cause, denying yourself an ordinary life to better server your highest ideals.</p>
<ul>
    <li>Increase one of your Ability Scores by +1, to a maximum of 20.</li>
    <li>You gain a +2 Bonus to all your Saves.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Generic' => 2]);

        $feat                    = new Feat;
        $feat->name              = 'Vow of Abstinence';
        $feat->short_description = 'You have taken a vow to abstain form alcoholic beverages, drugs, stimulants such as caffeine, and intoxication.';
        $feat->description       = '<p>You perfect your body to be resistant to Poisons and Drugs.</p>
<ul>
    <li>You gain Resistance to Poison Damage</li>
    <li>You gain a +5 Perfection Bonus on all Saves against Poisons and Drugs (as long as you are subjected to a drug unwillingly).</li>
    <li>If you fail a Save against Poisons or Drugs, you are allowed a second attempt to Save on your next turn (if the Poison or Drug allows any form of second Save, then you gain a +3 bonus on that Save instead on top of the +5 Perfection bonus).</li>
    <li>You may cast Alleviate Addiction as a Triple Action at will</li>
    <li>3/day, you may cast Neutralize Poison as a Triple Action</li>
</ul>
<p><strong>Special:</strong> To fulfill your vow, you must not consume intoxicating, stimulating, depressant, or hallucinogenic substances, including alcohol, caffeine, and other drugs. If you intentionally break your vow, you immediately and irrevocably lose this benefit and you may not take another feat to replace it. If you break your vow as a result of magical compulsion, or otherwise unintentionally (a drug slipped into your drink, for example), you lose the benefit of this feat until you perform a suitable penance and receive an Atonement spell.</p>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Sacred Vow']);

        $feat                    = new Feat;
        $feat->name              = 'Vow of Chastity';
        $feat->short_description = 'You have taken a sacred vow to refrain from marriage and sexual intercourse';
        $feat->description       = '<p>You perfect your mind against Compulsions</p>
<ul>
    <li>You gain a +5 Perfection Bonus on Saves against Charm, Compulsion, Phantasm spells and effects and Possession.</li>
    <li>If you fail a Save against a Charm, Compulsion or Phantasm spell, you are allowed a second attempt to Save on your next turn (if the spell allows any form of second Save, then you gain a +3 bonus on that Save instead on top of the +5 Perfection bonus)</li>
    <li>3/day, you may end any Compulsion effect as a Triple Action by touch. This effect can also end Possession (the Possessing spirit gets a DC 20 WIS Save).</li>
    <li>3/day, you may cast Cure Wounds as a 1st Level Spell.</li>
</ul>
<p><strong>Special</strong> To fulfill your vow, you must abstain from any sexual contact with any other creature. If you intentionally break your vow, you immediately and irrevocably lose the benefit of this feat. You may not take another feat to replace it. If you break your vow as a result of magical compulsion, you lose the benefit of this feat until you perform a suitable penance and receive an Atonement spell.</p>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Sacred Vow']);

        $feat                    = new Feat;
        $feat->name              = 'Vow of Nonviolence';
        $feat->short_description = 'You have taken a sacred vow to avoid violence against humanoids.';
        $feat->description       = '<ul>
    <li>Any physical Damage that you deal that is non-lethal deals an additional +10 Damage</li>
    <li>The Save DCs for spells you cast and Class Features you use increases by +5 if the spell or feature does not deal damage (including ability damage but not nonlethal damage), or cause death.</li>
    <li>Your purity is so great that any ally of yours who slays a helpless or defenseless foe within 120 feet of you feels great remorse. Your ally takes a -1 moral penalty on his attack rolls for 8 hours. For each helpless foe slain, the attack penalty increases by 1, to a maximum of -5. The duration of the increased penalty starts from the latest slaying. You may ask your allies to give you an oath that a helpless foe will not be slain. If the oath is sworn, an ally who later breaks the oath takes the penalty for doing so as if you were present. If you leave a helpless foe to be killed by your allies, you have broken your vow.</li>
    <li>You may ask a defeated creature to give you an oath of surrender or noninterference in exchange for its life. If the creature breaks this oath to you, you can allow your allies to deal with the creature as they see fit without breaking their oaths or your vow.</li>
    <li>You memorize an additional Cantrip and an additional 1st Level Spell. If you cannot cast spells, then pick any Cantrip and any 1st Level Spell. You may now cast the Cantrip at will and the 1st Level Spell 1/day.</li>
</ul>
<p><strong>Special</strong> To fulfill your vow, you must not cause harm or suffering. You may not deal real Damage or Ability Damage, though you may deal Nonlethal Damage. You may not Target living creatures with Death effects, Disintegrate, pain effects, or other spells that have the immediate potential to cause death, suffering, or harm.</p>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Sacred Vow']);

        $feat                    = new Feat;
        $feat->name              = 'Vow of Obedience';
        $feat->short_description = 'You have taken a sacred vow to live according to the dictates of another, generally your superior in a religious order or similar organization.';
        $feat->description       = '<p>You have taken a vow to serve a superior without question</p>
<ul>
    <li>Increase your CHA by +1, to a maximum of 20</li>
    <li>You gain a Heroic Surge</li>
    <li>You gain a +5 Perfection Bonus on Saves against Charm and Compulsion spells and effects.</li>
    <li>You gain either a Cohort or the ability to cast the Command spell 3/day</li>
</ul>
<p><strong>Special</strong> To fulfill your vow, you must unquestioningly obey your superior and live according to the rules of your organization. If you intentionally break your vow, you immediately and irrevocably lose the benefit of this feat. You may not take another feat to replace it. If you break your vow as a result of magical compulsion, you lose the benefit of this feat until you perform a suitable penance and receive an Atonement spell.</p>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Sacred Vow']);

        $feat                    = new Feat;
        $feat->name              = 'Vow of Peace';
        $feat->short_description = 'You have taken a sacred vow to abstain form harming any living creature';
        $feat->description       = '<p>This sacred vow grants significant benefits, but at a high cost.</p>
<ul>
    <li>You are constantly surrounded by a calming aura to a radius of 20 feet. Creatures within the area must make a successful WIS Save (DC 10 + 1/2 your character level + your CHA modifier) or be affected as by the Calm Emotions spell. Creatures who leave the aura and reenter it receive new Saves. A creature that makes a successful Save and remains in the aura is unaffected until it leaves the aura and reenters. The aura is mind-affecting, supernatural compulsion.</li>
    <li>You gain a +2 Natural Armor Bonus to your AC, a +2 Deflection Bonus to your AC, and a +2 Exalted Bonus to your AC. This Exalted Bonus does not apply to Touch Attacks and does not hinder incorporeal touch attacks. Brilliant energy weapons, however, do not ignore it. It does not stack with an Armor Bonus. If you also have the Vow of Poverty feat, the Natural Armor, Deflection, and Exalted Armor Class Bonuses granted by that feat all increase by +2. If a creature strikes you with a manufactured weapon, the weapon must immediately make a successful CON Save (DC 10 + 1/2 your character level + your CON modifier) or shatter against your skin, leaving you unharmed.</li>
    <li>You gain a +5 Exalted Bonus on all Diplomacy checks</li>
    <li>You gain a +5 Exalted Bonus to Sense Motive checks</li>
    <li>You gain an additional 2nd Level Spell Slot. If you do not have any Levels in a Spell Casting class, then pick any 2nd Level or lower Spell. You may now cast this spell 1/day.</li>
</ul>
<p><strong>Special</strong> To fulfill your vow, you must not cause harm to any creature (constructs and undead are not included in this prohibition). You may not deal real damage or ability damage to creatures through spells or weapons, though you may deal nonlethal damage. You may not target creatures with Death effects, Disintegrate, or other spells that have the immediate potential to cause death or great harm. You also may not use non-damaging spells to incapacitate or weaken living foes so that your allies can kill them. If you incapacitate a foe, you must take him prisoner. If you intentionally break your vow, you immediately and irrevocably lose the benefit of this feat. You may not take another feat to replace it. If you break your vow as a result of magical compulsion or otherwise unwittingly, you lose the benefit of this feat until you perform a suitable penance and receive an Atonement spell.</p>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Generic' => 9]);
        $feat->parent_feats()->save(app()->feats['Vow of Nonviolence']);
        $feat->parent_feats()->save(app()->feats['Sacred Vow']);

        $feat                    = new Feat;
        $feat->name              = 'Vow of Poverty';
        $feat->short_description = 'You have taken a sacred vow to forswear material possessions';
        $feat->description       = '<p>You gain Bonuses to your AC, ability scores and Saves, as well as Bonus exalted feats, all depending on your character level.</p>
<table>
    <thead>
        <tr>
            <th>Character Level</th>
            <th>Benefit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1st</td>
            <td>AC Bonus +2</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>3rd</td>
            <td>Ac Bonus +3, Endure Elements effect (as the spell)</td>
        </tr>
        <tr>
            <td>4th</td>
            <td>Exalted Strike +1 (Magic), Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>5th</td>
            <td>Sustenance</td>
        </tr>
        <tr>
            <td>6th</td>
            <td>AC Bonus +4, Deflection +1, Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>7th</td>
            <td>Resistance +1, Ability Score Increase +2 (Max 20. Players choice)</td>
        </tr>
        <tr>
            <td>8th</td>
            <td>Natural Armor +1, Mind Shielding, Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>9th</td>
            <td>AC Bonus +5</td>
        </tr>
        <tr>
            <td>10th</td>
            <td>Exalted Strike +2(Good), Damage Reduction 5, Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>11th</td>
            <td>Ability Score Increase +2 (Max 20. Players Choice)</td>
        </tr>
        <tr>
            <td>12th</td>
            <td>AC Bonus +6, Deflection Bonus +2, Greater Sustenance, Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>13th</td>
            <td>Resistance +2, Energy Resistance 5</td>
        </tr>
        <tr>
            <td>14th</td>
            <td>Exalted Strike +3, Freedom of Movement, Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>15th</td>
            <td>AC Bonus +7, Ability Score Increase +2 (Max 20. Players Choice)</td>
        </tr>
        <tr>
            <td>16th</td>
            <td>Natural Armor +2, Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>17th</td>
            <td>Exalted Strike +4, Resistance +3, Regeneration</td>
        </tr>
        <tr>
            <td>18th</td>
            <td>AC Bonus +8, Deflection Bonus +3, True Seeing, Bonus Exalted Feat</td>
        </tr>
        <tr>
            <td>19th</td>
            <td>Ability Score Increase +2 (Max 20. Players choice). Damage Reduction 10</td>
        </tr>
        <tr>
            <td>20th</td>
            <td>Exalted Strike +5, Energy Resistance 15, Bonus Exalted Feat</td>
        </tr>
    </tbody>
</table>
<dl>
    <dt>Sustenance</dt> <dd>Does not need to eat or drink</dd>
    <dt>Resistance</dt> <dd>Bonus to all Saves</dd>
    <dt>Mind Shielding</dt> <dd>Immune to magical and psionic effects to read thoughts. Immune to Zone of Truth (and similar effects). Immune to Detect Alignment (and similar effects)</dd>
    <dt>Greater Sustenance</dt> <dd>Does not need to breathe</dd>
    <dt>Energy Resistance</dt> <dd>Damage Reduction against Cold, Electricity, Fire, Sonic</dd>
    <dt>Freedom of Movement</dt> <dd>As the Spell, Freedom of Movement (always active)</dd>
    <dt>Regeneration</dt> <dd>Regenerate 1 Hit Point per hour.</dd>
    <dt>True Seeing</dt> <dd>As the Spell True Seeing (always active)</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Sacred Vow']);

        $feat                    = new Feat;
        $feat->name              = 'Vow of Purity';
        $feat->short_description = 'You have taken a sacred vow to avoid contact with dead flesh.';
        $feat->description       = '<p>You perfect your body against Disease</p>
<ul>
    <li>Increase your CON by +1, to a maximum of 20</li>
    <li>You gain immunity to Disease</li>
    <li>You gain a +5 Perfection Bonus on Saves to resist death effects.</li>
    <li>3/day, you may cast Remove Disease as a Triple Action Heightened +2. While this spell has a Range of Touch, you are allowed to place your hand just short of actually Touching the target.</li>
</ul>
<p><strong>Special</strong> To fulfill your vow, you must avoid all contact with dead creatures, including meat cooked for food. You may not touch fallen foes. You may fight undead foes, but must purify yourself as soon as possible afterward. You may touch dead characters in order to restore them to life (by way of a Raise Dead or similar spell) and Casting Remove Disease, but for no other purpose. If you fight undead creatures or accidentally touch dead flesh, you must purify yourself in a special ritual that requires 1 hour and a flask of holy water. If you intentionally break your vow, you immediately and irrevocably lose the benefit of this feat. You may not take another feat to replace it. If you break your vow as a result of magical compulsion, you lose the benefit of this feat until you perform a suitable penance and receive an Atonement spell.</p>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Sacred Vow']);

        $feat              = new Feat;
        $feat->name        = 'Disciple of Darkness';
        $feat->requirement = 'Must be LE';
        $feat->description = '<p>You formally supplicate yourself to an archdevil, in return for this obedience, you gian a small measure of power.</p>
<ul>
    <li>Increase one of your Attributes by +2, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>If you have the Find Familiar, you may select an Imp by Sacrificing a 2nd level Spell Slot</li>
    <li>If you have the Divine Mount feat, your mount gains the Fiend Creature template.</li>
    <li>If you have the Animal Companion feat, your Animal Companion gains the Fiend Creature template.</li>
    <li>You may not take the Thrall to Demon or Slave of the Yugoloths feat. Your allegiance is only yours to give once.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Lawful', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Slave to the Yugoloths';
        $feat->requirement = 'Must be NE';
        $feat->description = "<p>You formally supplicate yourself to a yugoloth, in return for this obedience, you gian a small measure of power.</p>
<ul>
    <li>Increase one of your Attributes by +2, to a maximum of 20</li>
    <li>Choose a Cantrip. You may cast this Cantrip 3/day</li>
    <li>If you have the Find Familiar, you may select a Battleloth by Sacrificing a Spell Slot equal to the Battleloth's CR.</li>
    <li>If you have the Divine Mount feat, your mount gains the Fiend Creature template.</li>
    <li>If you have the Animal Companion feat, your Animal Companion gains the Fiend Creature template.</li>
    <li>You may not take the Thrall to Demon or Disciple of Darkness feat. Your allegiance is only yours to give once.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Neutral', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Thrall to Demon';
        $feat->requirement = 'Must be CE';
        $feat->description = '<p>You formally supplicate yourself to a demon prince, in return for this obedience, you gian a small measure of power.</p>
<ul>
    <li>Increase one of your Attributes by +2, to a maximum of 20</li>
    <li>You gain a Heroic Surge</li>
    <li>If you have the Find Familiar, you may select a Quasit by Sacrificing a 2nd level Spell Slot</li>
    <li>If you have the Divine Mount feat, your mount gains the Fiend Creature template.</li>
    <li>If you have the Animal Companion feat, your Animal Companion gains the Fiend Creature template.</li>
    <li>You may not take the Disciple of Darkness or Slave of the Yugoloths feat. Your allegiance is only yours to give once.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Chaotic', 'Generic' => 2]);

        $feat                    = new Feat;
        $feat->name              = 'Willing Deformity';
        $feat->short_description = 'Through scarification, self-mutilation, or supplication to dark powers, you intentionally mark your own body.';
        $feat->description       = '<p>You gain the following</p>
<ul>
    <li>Increase one of your Ability Scores by +1, to a maximum of 20</li>
    <li>You add the Intimidation skill to all your class skills. If you already have the Intimidation skill, you gain an additional +2 Vile Bonus to all Intimidation checks.</li>
    <li>You gain a +3 Vile Bonus to your Intimidation checks and Beasts with an intelligence of 2 or less are not willing to attack you.</li>
    <li>3/day, you may cast the spell Fear as a Triple Action.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Generic' => 2]);

        $feat                    = new Feat;
        $feat->name              = 'Deformity (Clawed Hands)';
        $feat->short_description = 'Because of intentional self-mutilation, you have deformed arms and hands ending in sharp claws.';
        $feat->description       = '<p>You gain the following:</p>
<ul>
    <li>You have the ability to deal 1D6 points of Slashing Damage as an Unarmed claw attack. You are considered armed even when unarmed as if you had the Improved Unarmed Strike feat.</li>
    <li>You gain a +1 Bonus to Hit and +2 Bonus to Damage with your claw attack</li>
    <li>Your claws apply a Poison that has a DC of 12 and causes 1 point of STR lose on a Failed Save. This poison can be harvested (but will become inert after 4 hours) and it can be applied to food or drink (but there is an obvious taste and smell. It may also discolor the food or drink).</li>
    <li>3/day, you may as an Action, add the Unholy Rune to your claws. The Rune fades after 1 minute.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Willing Deformity']);

        $feat                    = new Feat;
        $feat->name              = 'Deformity (Eyes)';
        $feat->short_description = 'You have either drilled a hole in your forehead trying to add a third eye, or you have supernaturally scarred one of your regular eyes.';
        $feat->description       = '<p>You gain the following:</p>
<ul>
    <li>You gain a +5 Bonus to Perception checks based on vision.</li>
    <li>Permanent Darkvision out to 60 feet. If you already have Darkvision, then increase the range by 30 feet.</li>
    <li>As an Action, you can see Invisible objects at will as if you have the See Invisibility spell. It requires Concentration (an Action each turn) to maintain.</li>
    <li>3/day, you may cast Detect Good as a Triple Action.</li>
    <li>You gain a +1 Bonus vs spells with the Glamor type.</li>
    <li>You gain a +1 Bonus to all Ranged attacks and +3 Bonus to Physical Ranged Attack Damage</li>
    <li>-2 deformity penalty to CHR.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Willing Deformity']);

        $feat                    = new Feat;
        $feat->name              = 'Deformity (Face)';
        $feat->short_description = 'Because of intentional self-mutilation, you have a hideous face.';
        $feat->description       = '<p>You gain the following abilities.</p>
<ul>
    <li>You gain a +2 Circumstance Bonus to Intimidate checks and a +2 Deformity Bonus on Diplomacy checks dealing with Evil creatures.</li>
    <li>Choose two cantrips from the Wizards Spell List. You may now cast those cantrips at will. You cannot Heighten these cantrips.</li>
    <li>Chose a 1st level spell from the Wizard Spell List. You may cast this spell 2/day. You cannot Heighten this spell.</li>
    <li>Chose a 2nd level Spell from the Wizard Spell List. You may cast this spell 1/day. You cannot Heighten this spell.</li>
    <li>-4 deformity penalty to CHR.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Willing Deformity']);

        $feat                    = new Feat;
        $feat->name              = 'Deformity (Gaunt)';
        $feat->short_description = 'Through intentional starvation and macabre operations, you are grossly underweight. You have a skeletal appearance, and your weight is now half normal for creatures of your kind.';
        $feat->description       = '<p>You gain the following abilities.</p>
<ul>
    <li>+3 Deformity Bonus to DEX.</li>
    <li>You gain a Heroic Surge</li>
    <li>+2 Circumstance Bonus on Escape Artist checks and Intimidate checks.</li>
    <li>You gain a +1 Bonus to AC</li>
    <li>You gain a +5 Bonus to Speed</li>
    <li>-1 deformity penalty to CON.</li>
</ul>
<p>You may not take the Deformity (Obese) feat.</p>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Willing Deformity']);

        $feat                    = new Feat;
        $feat->name              = 'Deformity (Obese)';
        $feat->short_description = 'Through intentional gorging and general gluttony, you are obese. Grossly overweight, you are now at least triple the normal weight for creatures of your kind.';
        $feat->description       = '<p>You gain the following abilities.</p>
<ul>
    <li>+3 deformity Bonus to CON.</li>
    <li>+2 circumstance Bonus on Intimidate checks and Poison Saves.</li>
    <li>You gain Damage Reduction 2</li>
    <li>-1 deformity penalty to DEX.</li>
</ul>
<p>You may not take the Deformity (Gaunt) feat.</p>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Willing Deformity']);

        $feat                    = new Feat;
        $feat->name              = 'Evil Brand';
        $feat->short_description = 'You are physically marked forever as a servant of a greater evil power. The symbol is unquestionable in its perversity.';
        $feat->description       = '<ul>
    <li>Increase one of your Ability Scores by +2, to a maximum of 20.</li>
    <li>1/day, you may cast Commune without needing a Secondary Caster and contact your patron.</li>
    <li>Evil creatures automatically recognize the symbol now emblazoned upon you as a sign of your utter depravity or discipleship to a powerful patron, although the specific identity of the patron is not revealed. You gain a +2 circumstance Bonus on Diplomacy and Intimidate checks made against evil creatures.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Sacrificial Mastery';
        $feat->description = '<p>You gain the following.</p>
<ul>
    <li>You gain a +5 Vile Bonus to all Sacrifice checks</li>
    <li>You gain a +2 Bonus to all Religion checks</li>
    <li>You may memorize an additional Cantrip. If you do not have any Spell Casting levels, then pick a Cantrip from the Wizard Spell list. You may now cast that Cantrip at will.</li>
    <li>You gain the Sudden Strike Feat. If you already have the Sudden Strike Feat, then you may take any other Precision Feat you qualify for.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Precision', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Demonologist';
        $feat->description = '<p>You study Demons and the Abyss where they reside.</p>
<ul>
    <li>You may now cast the Charm spell three times per day, and have it affect Demons. If you do not have any Spell Casting Levels, then you may cast this spell 1/day. Targeting a Demon with a Charm spell does not count as an attack for a Demon in a Circle of Protection. Demons have Disadvantage on Saves vs your Charm spells. Unless you have the Charm spell from another class, you may only target Demons with your Charm spell.</li>
    <li>You gain Advantage on Saves against all Spells and Spell-like effects from Demons and Demonic sources.</li>
    <li>You gain Advantage on all Lore checks and Religion checks in regards to Demons or the Abyss</li>
    <li>You learn the True Name of one minor Demon</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Demon', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Conjurer']);
        $feat->parent_feats()->save(app()->feats['Evil Brand']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Charm'],
            4 => ['Call Dretch Horde'],
            5 => ['Calling' => 'Demons only'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Demonologist';
        $feat->description = '<p>Your studies into Demons and the Abyss deepens.</p>
<ul>
    <li>You may now cast the Hold Person spell (Heightened +2) and have it affect Demons. If you do not have any Spell Casting Levels, then you may cast this spell 1/day. Targeting a Demon with a Hold Person spell does not count as an attack for a Demon in a Circle of Protection. Demons have Disadvantage on Saves vs your Hold Person spells. Unless you have the Hold Person spell from another class, you may only target Demons with your Hold Person spell.</li>
    <li>You may now cast the Dominate spell (Heightened +1) and have it affect Demons. if you do not have any Spell Casting Levels, then you may cast this spell 1/day. Targeting a Demon in a with a Dominate spell does not count as an attack for a Demon in a Circle of Protection. Unless you have the Dominate spell from another class, you may only target Demons with your Dominate spell.</li>
    <li>You may call a Vrock to serve you for 1 year. You must offer a sacrifice of 3 living humanoids (Sacrifice DC 15) to the Vrock for its service. You may only have a single Vrock serve you in this way at a time.</li>
    <li>You may Concentrate on an additional Summoning Spells at the same time. This additional Summoning spell must have summoned a Demon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Demon', 'Generic' => 9]);
        $feat->parent_feats()->save(app()->feats['Demonologist']);
        $feat->parent_feats()->save(app()->feats['Expert Conjurer']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Hold Person'],
            6 => ['Dominate'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Animal Companion';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>You are able to gain an Animal Companion. Spend a 1st level spell slot to gain an Animal Companion. You do not get back the Spell Slots so long as you have the Animal Companion.</li>
    <li>You gain the ability to as an Action, spend 1 Spell Point and cast the spell Heal Animal.</li>
    <li>If you have the Favored Enemy Class Feature, your Animal Companion gains all the benefits of your Favored Enemy.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Animal Companion', 'Primal', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Improved Animal Companion';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>You may now have a second Animal Companion. You must spend the Spell Slots for each Animal Companion.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Animal Companion', 'Primal', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Animal Companion']);

        $feat              = new Feat;
        $feat->name        = 'Greater Animal Companion';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>You may now have a third Animal Companion. You must spend the Spell Slots for each Animal Companion.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Animal Companion', 'Primal', 'Generic' => 7]);
        $feat->parent_feats()->save(app()->feats['Improved Animal Companion']);

        $feat              = new Feat;
        $feat->name        = 'Animal Companion Master';
        $feat->trigger     = 'You are able to command your Animal Companion';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>Increase one of your Attributes by +1, to a maximum of 20</li>
    <li>You gain an extra Action. The extra Action can only be used to command your Animal Companions, Familiar, or summoned creature.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Animal Companion', 'Primal', 'Generic' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Divine Prophet';
        $feat->description = '<p>You have been gifted by your Divine Patron with the gift of prophecy. This gift also comes with the responsibility to use your gift further the aims and needs of your god.</p>
<ul>
    <li>You gain the Foretelling feature of the Diviner Arcane feat.</li>
    <li>You also gain a +2 Bonus to CHA Saves</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine', 'Generic' => 5]);
        $helper->addSpellsToFeat($feat, [
            3 => ['Prophecy'],
        ]);
    }
}
