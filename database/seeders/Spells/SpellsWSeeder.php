<?php

namespace Database\Seeders\Spells;

use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsWSeeder extends Seeder
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

        $spell                 = new Spell;
        $spell->name           = 'Wail of the Banshee';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '40-foot aura';
        $spell->targets        = 'Any number of creatures';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Your scream chills the souls of enemies that hear it. Each living enemy in the burst takes 5D10 damage and is drained 1D4, depending on its CON Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage or drain</dd>
    <dt>Success</dt> <dd>Full damage and no drain</dd>
    <dt>Failure</dt> <dd>Full damage and drain</dd>
    <dt>Critical Failure</dt> <dd>Double damage and drained 4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Auditory', 'Death', 'Necromancy'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Wages of Sin';
        $spell->casting        = 'Verbal, Abstinence';
        $spell->requirements   = '<dl>
    <dt>Abstinence</dt> <dd>You must refrain from intoxicants and stimulants for one week before casting this spell.</dd>
</dl>';
        $spell->save_attribute = 'WIS';
        $spell->range          = '120 feet';
        $spell->area           = '60-ft radius emanation';
        $spell->targets        = 'All evil creature in the Area';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>Evil creature's in the Area own evil thoughts and impulses blossom in their minds into intense suspicion and distrust.</p>
<p>Each subject becomes convinced that its own allies are plotting to kill it an any moment, and attacks the nearest evil creature using whatever attack form (Melee or Ranged Attack, Spell, Supernatural or Spell-like ability) is most effective against that foe, to the best of its knowledge.</p>
<p>Affected creatures do not completely ignore other threats, but attack evil creatures in preference to any other foe.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Good', 'Mental', 'Exalted'], 6);

        $spell              = new Spell;
        $spell->name        = 'Wraithform';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>When you cast this spell, you and all of your gear become nearly insubstantial. You gain Damage Resistance to all attacks unless the source has Ghost Touch or has the Force type or can affect Ethereal targets (You do not gain the ability to Fly from this spell). Your attacks (spells and physical attacks) only affect targets on the Ethereal Plane.</p>
<p>You may pass through small holes or narrow openings, even mere cracks, with all your gear or hold in your hand</p>
<p>Unintelligent undead will perceive you as an Undead and will not attack unless specifically commanded to do so or you attack the Undead.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>You gain the ability to use an Action to fully move to the Ethereal Plane until the beginning of your next turn. If you are still on a solid object at the beginning of your turn, you suffer 4D6 Force Damage and you are forced to the closest open space.</dd>
    <dt>Heightened (+1)</dt> <dd>You gain the ability to make Melee Touch Attacks that deal 4D6 Force Damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Illusion', 'Ethereal'], 3);

        $spell              = new Spell;
        $spell->name        = 'Wall of Dispel Magic';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>This spell creates a transparent, permeable barrier. Anyone passing through it becomes the target of a Dispel Magic effect. A summoned creature targeted in this way can be dispelled by the effect.</p>
<p>The wall cannot be seen or felt by ordinary means, or even via a See Invisibility spell. Detect Magic indicates the presence of the effect, and True Seeing reveals both its presence and its purpose.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the level of effect that you automatically end.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Wall of Fire';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You create either a 5-foot-thick, 60-foot-long, 10-foot-high wall of flame in a straight line or a 5-foot-thick, 10-foot-radius ring of flame. The wall stands vertically in either form; if you wish, the wall can be of a shorter length or height. Everything on each side of the wall is concealed from creatures on the opposite side. Any creature crossing the wall or occupying the wall\'s area at the start of its turn takes 3D6 fire damage.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The fire damage increases by 1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 4);

        $spell              = new Spell;
        $spell->name        = 'Wall of Force';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>You form an invisible wall of pure magical force up to 50 feet across and up to 20 feet high. The wall has no discernible thickness. If the wall's surface would be broken by any creature or object, the spell is lost. The wall has AC 10, TAC 6, and Hardness GAME 23, and it can take 3 additional Dents before being broken. If the wall is broken, the spell ends. The wall blocks physical effects from passing through it, and because it’s made of force, it blocks incorporeal and ethereal creatures as well. Teleportation effects can pass through the barrier, as can visual effects (since the wall is invisible).</p>
<p>Wall of Force is immune to dispelling effects of its level or lower, but the wall is automatically destroyed by a Disintegrate spell of any level or by contract with a Sphere of Annihilation or Rod of Cancellation.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The Hardness of the wall increases by 5</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 5);

        $spell              = new Spell;
        $spell->name        = 'Wall of Gears';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->area        = '50-ft X 5-ft Wall';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>This spell taps into the planar energy of Mechanus to create a 6-inch-thick wall of moving iron cogs, wheels, gears, pistons, and assorted mechanical parts.</p>
<p>Each 5-foot square of the wall's surface has Hardness 10 and 180 Hit Points.</p>
<p>Both sides of the wall have hundreds of moving parts that flail out, dealing 10D6 points of Bludgeoning to all creatures within 10 feet of the wall. A successful DEX Save halves the Damage</p>
<dl>
    <dt>Material Components</dt> <dd>A small gear (not consumed)</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration'], 6);

        $spell              = new Spell;
        $spell->name        = 'Wall of Ice';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = '10 minute or until dispelled';
        $spell->description = "<p>You create either a 1-foot-thick, 60-foot-long, 10-foot-high wall of ice in a straight line (the wall doesn’t have to be vertical but it must be anchored on both sides to a solid surface) or a 1-foot- thick, 10-foot hemisphere of ice. The ice that makes up the wall is opaque. If you wish, the wall can be of a smaller length, height, or radius. You must evoke the wall in an unbroken open space so its edges don't pass through any creatures or objects, or the spell is lost.</p>
<p>Each 10-foot-by-10-foot section of the wall has AC 10, TAC 8, and Hardness 13. Each section is immune to cold and water. A section also has weakness to fire 15; a section of the wall broken by fire is completely destroyed immediately, melting and evaporating into water and steam. A section broken or destroyed by means other than fire can be moved through as difficult terrain and deals 2D6 Cold damage to anyone passing through it.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The Hardness of each section of the wall increases by 4 and the cold damage for crossing a broken or destroyed section increases by 1D6.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Transmutation', 'Cold', 'Water'], 6);

        $spell              = new Spell;
        $spell->name        = 'Wall of Iron';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->area        = '6-inch X 50-ft Wall';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You cause a flat, vertical iron wall to spring into being. The wall cannot be created so that it occupies the same space as a creature or another object. It must always be a flat plane, through you can shape its edges to fit the available space. You can double the Area by halving its thickness.</p>
<p>Each 5-ft square of the wall has 30 Hit Points per inch of thickness and Hardness 10. A section of wall whose Hit Points drop to 0 is breached. If a creature tries to break through the wall with a single attack, they must Succeed a DC 25 + 2 per inch of thickness STR Check.</p>
<p>You may create the wall so that it is not anchored to the ground. If the wall is created in this way, it can be tipped over with a DC 40 STR check. Any creature can make a DEX Save to avoid being crushed by the tipped wall. Creatures crushed by the wall takes 10D6 Bludgeoning Damage (the wall cannot crush Huge and larger creatures).</p>
<dl>
    <dt>Material Components</dt> <dd>A small piece of sheet iron plus gold dust worth 50 gp (which the spell consumes)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Wall of Light';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '120 feet';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = '<p>A shimmering wall of bright light appears at a point you choose within range. The wall appears in any orientation you choose: horizontally, vertically, or diagonally. It can be free floating, or it can rest on a solid surface. The wall can be up to 60 feet long, 10 feet high, and 5 feet thick. The wall blocks line of sight, but creatures and objects can pass through it. It emits bright light out to 120 feet and dim light for an additional 120 feet.</p>
<p>When the wall appears, each creature in its area must make a CON Save. On a failed save, a creature takes 4D8 Positive damage, and it is blinded for 1 minute. On a successful save, it takes half as much damage and isn’t blinded. A blinded creature can make a CON Save at the end of each of its turns, ending the effect on itself on a success.</p>
<p>A creature that ends its turn in the wall’s area takes 4D8 Positive damage.</p>
<p>Until the spell ends, you can use an Action to launch a beam of Light from the wall at one creature you can see within 60 feet of it. Make a ranged spell attack. On a hit, the target takes 4D8 Positive damage. Whether you hit or miss, reduce the length of the wall by 10 feet. If the wall’s length drops to 0 feet, the spell ends.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Positive', 'Light'], 5);

        $spell               = new Spell;
        $spell->name         = 'Wall of Moonlight';
        $spell->casting      = 'Somatic Casting, Verbal Casting';
        $spell->requirements = '<dl>
    <dt>Castable Time</dt> <dd>This spell can only be cast at night, and not during a new moon</dd>
</dl>';
        $spell->range        = '120 feet';
        $spell->area         = '50-ft square Wall';
        $spell->duration     = '1 minute';
        $spell->description  = '<p>An immobile, shimming tapestry of swirling, pearl-white light springs into existence. The wall need not be anchored to any surface, and creatures can readily pass through it.</p>
<ul>
    <li>Any undead creature that comes into contact with the wall takes 4D12 Positive Damage.</li>
    <li>Any Evil Outsider or Divine worshiper of Shar (Priest of Shar or Favored Soul) takes 2D10 Light Damage.</li>
    <li>Magic Items that come into contact with the wall glow with a red Faerie Fire effect for 4 rounds.</li>
    <li>The wall sheds bright light for 20 feet in all directions and creates shadowy illumination in a 40-ft radius</li>
</ul>
<p>This spell Dispels any Spell with the Darkness Type of 3rd Level or lower within 40 feet of any part of it. This spell Counters any Darkness spell of 4th Level or lower and can be Countered by any Darkness Spell of 4th Level or higher.</p>';
        $spell->heightened   = '<dl>
    <dt>Permanency (Heightened (+2)</dt> <dd>Permanency spell and 4 CON Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Good', 'Light'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Wall of Pain';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '60 feet';
        $spell->duration       = 'Concentration, up to 10 rounds';
        $spell->description    = '<p>You fill an area with horrid energy that inflicts severe pain upon any who pass through it.</p>
<p>Affected creatures take a -2 penalty on all attacks, Saves, and checks while inside the area of the wall. Further, the wall deals 10D4 nonlethal damage per round to anyone caught in it.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Nonlethal'], 4);

        $spell              = new Spell;
        $spell->name        = 'Wall of Sand';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = "<p>You conjure up a wall of swirling sand on the ground at a point you can see within range. You can make the wall up to 30 feet long, 10 feet high, and 10 feet thick, and it vanishes when the spell ends. You may dispel your wall with an Action. It blocks line of sight but not movement. A creature is blinded while in the wall's space and must spend 3 feet of movement for every 1 foot it moves there.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 3);

        $spell              = new Spell;
        $spell->name        = 'Wall of Smoke';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = '50-ft straight Wall';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell creates a thin wall of black smoke. The wall is stationary once created. The wall blocks sight to a limited degree. Creatures on opposite sides of the wall that cannot see over it gain Concealment from each other. A creature can pass through a wall of smoke, but it must make a CON Save to avoid being Nauseated: 1. A moderate wind (11+ mph), such as from a Gust of Wind Spell, destroys the wall in 1 round.</p>
<p>This spell does not function underwater.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Wall of Stone';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = '10 minute or until dispelled';
        $spell->description = "<p>You create a 1-inch-thick, 120-foot-long, and 20-foot-high wall of stone. You can shape the wall's path, placing each 5 feet of the wall on the border between squares. The wall doesn't need to stand vertically, so you can use it to form a bridge or set of stairs, for example. You must create the wall in an unbroken open space so its edges don't pass through any creatures or objects or the spell is lost. Each 5-foot-by-5-foot section of the wall has AC 10, TAC 6, and Hardness 17. A broken section of the wall can be moved through, but rubble created from it is difficult terrain.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Hardness of each section of the wall increases by 5.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Earth', 'Transmutation'], 5);

        $spell              = new Spell;
        $spell->name        = 'Wall of Tentacles';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Wall-shaped 6-in thick 100 feet long';
        $spell->targets     = 'Open area up to 120 feet range';
        $spell->duration    = '24 Hours';
        $spell->description = "<p>This spell enables the caster to create a special sort of quasi-living elemental barrier. On the \"safe\" side, or inner side, it appears as a shadowed section of wall. On the outside, it initially appears as a rough, purple-brown stone. The caster can freely move through the wall as though it does not exist. If the caster cast this spell as a Divine spell, then other divine casters of the same faith may pass through the wall as well. Others that touch the wall triggers four tentacles emerge to grasp the target, and begin a loud hissing and champing noise to alert the caster to the presence of a intruder.</p>
<p>The wall can extrude twenty 16'-long tentacles, and two beaks. These can shift about its surface, but a maximum of three attacks per round can be made on any single creature. The beaks are saved for a second stage of continued attack or resistancence (see below); only the tentacles attack initially. Each tentacle strike does physical damage, and forces the victim to make a DEX or STR Save or be Grappled. The Grappled creature is then dragged towards a beak (5 feet per round).</p>
<dl>
    <dt>AC</dt> <dd>16</dd>
    <dt>Hit Points</dt> <dd>200 (dealing at least 12 Hit Points with a single attack destroys a tentacle, causing it to vanish)</dd>
    <dt>Attacks</dt> <dd>22 Attacks, no more than 3 attacks on a single creature. Tentacle: +10 Melee attack 15-ft range 1D12 Bludgeoning. Beak: +10 Melee attack 5-ft range 1D10 Piercing + 1D8 Poison and CON Save or Sickened 3.</dd>
    <dt>Attributes</dt> <dd>
        <dl>
            <dt>STR</dt> <dd>20</dd>
            <dt>DEX</dt> <dd>12</dd>
            <dt>CON</dt> <dd>18</dd>
            <dt>INT</dt> <dd>-</dd>
            <dt>WIS</dt> <dd>-</dd>
            <dt>CHA</dt> <dd>-</dd>
            <dt>Proficiency</dt> <dd>+5</dd>
        </dl>
    </dd>
</dl>
<p>If the wall is attack by any spell or spell-like effect, the wall casts the spell Darkness to where the spell originated from and tries to focus as many tentacle attacks as it can at the Darkness.</p>
<ul>
    <li>A Dispel Magic spell causes 50 Hit Points of damage (no Save)</li>
    <li>A Disintegrate spell causes 100 Hit Points of damage (no Save)</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>Any sort of snake, living or dead and the beak from an octopus or any avian.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Wall of Thorns';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60-foot long, 10 feet high, 5-feet thick, or circle 20-foot diameter';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '10 minute or until dispelled';
        $spell->description    = '<p>You create a wall of tough, pliable, tangled brush bristling with needle-sharp thorns. The wall appears within range on a solid surface and lasts for the duration. You choose to make the wall up to 60 feet long, 10 feet high, and 5 feet thick or a circle that has a 20-foot diameter and is up to 20 feet high and 5 feet thick. The wall blocks line of sight.</p>
<p>When the wall appears, each creature within its area must make a DEX Save. On a failed Save, a creature takes 7D8 piercing damage. A creature can move through the wall, albeit slowly and painfully. For every 1 foot a creature moves through the wall, it must spend 4 feet of movement. Furthermore, the first time a creature enters the wall on a turn or ends its turn there, the creature must make a DEX Save. It takes 7D8 Slashing damage on a failed Save, or half as much damage on a successful one.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 6);

        $spell              = new Spell;
        $spell->name        = 'Wall of Water';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = "<p>You create a wall of water on the ground at a point you can see within range. You can make the wall up to 30 feet long, 10 feet high, and 1 foot thick, or you can make a ringed wall up to 20 feet in diameter, 20 feet high, and 1 foot thick. The wall vanishes when the spell ends, you may dispel the wall with an Action. The wall's space is difficult terrain.</p>
<p>Any ranged weapon attack that enters the wall’s space has disadvantage on the attack roll, and fire damage is halved if the fire effect passes through the wall to reach its target. Spells that deal cold damage that pass through the wall cause the area of the wall they pass through to freeze solid (at least a 5-foot-square section is frozen). Each 5-foot-square frozen section has AC 5 and 15 hit points. Reducing a frozen section to 0 hit points destroys it. When a section is destroyed, the wall's water doesn't fill it.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Wall of Wind';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'STR';
        $spell->range          = '120 feet';
        $spell->duration       = '1 minute or until dispelled';
        $spell->description    = '<p>A wall of strong wind rises from the ground at a point you choose within range. You can make the wall up to 50 feet long, 15 feet high, and 1 foot thick. You can shape the wall in any way you choose so long as it makes one continuous path along the ground. The wall lasts for the duration or until you dispel the wall with an Action.</p>
<p>When the wall appears, each creature within its area must make a STR Save. A creature takes 3D8 Bludgeoning damage on a failed Save, or half as much damage on a successful one.</p>
<p>The strong wind keeps fog, smoke, and other gases at bay. Small or smaller flying creatures or objects can’t pass through the wall. Loose, lightweight materials brought into the wall fly upward. Arrows, bolts, and other ordinary projectiles launched at targets behind the wall are deflected upward and automatically miss. (Boulders hurled by giants or siege engines, and similar projectiles, are unaffected.) Creatures in gaseous form can’t pass through it.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 6);

        $spell              = new Spell;
        $spell->name        = 'War Cry';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You attack with a cry that bolsters your own courage as well as intimidating your enemies. You gain the following.</p>
<ul>
    <li>+2 Morale Bonus to Hit and Damage Rolls (+3 instead on Charge attacks)</li>
    <li>Any foe that you successfully deal damage to must make a WIS Save or gain the Fleeing Condition. A creature that Successfully makes this Save does not have to make this Save again.</li>
</ul>
<p>As a result of this spell, you gain a +2 Morale Bonus on Attack Rolls and Damage Rolls, or a +3 Morale Bonus on Charge attacks.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Compulsion', 'Mental', 'Auditory'], 4);

        $spell              = new Spell;
        $spell->name        = 'Warding Bond';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '1 hour';
        $spell->description = '<p>This spell wards a willing creature you touch and creates a mystic connection between you and the target until the spell ends. While the target is within 60 feet of you, it gains a +1 bonus to AC and saving throws, and it has resistance to all damage. Also, each time it takes damage, you take the same amount of damage.</p>
<p>The spell ends if you drop to 0 hit points or if you and the target become separated by more than 60 feet. It also ends if the spell is cast again on either of the connected creatures. You can also dismiss the spell as an action.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 2);

        $spell              = new Spell;
        $spell->name        = 'Warding Gems';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Gem Touched';
        $spell->duration    = 'Permanent, until used';
        $spell->description = '<p>You cast this spell upon a gem, imbuing it with healing magic. As an Action, you may activate it, and it circles the head of the Creature within 30 feet of you (you may also choose yourself).</p>
<p>Once the gem is circling a creatures head, that creature can use an Action to cause the gems stored healing magic to be cast on the creature. A gem can heal up to 10 Hit Points. Once all the healing magic is used from a gem, the gem crumbles to dust. If a gem still has some healing magic left, then it can be taken off of the creature and the gem can be used again later.</p>
<p>A gem has AC 20, Hardness 10, and 10 HP. If a gem is destroyed due to damage, it loses any remaining healing magic and crumbles to dust.</p>
<p>You can have at most 5 gems at a time. Creating another gem when you already have your max causes this spell to fail.</p>
<dl>
    <dt>Material Components</dt> <dd>A gem worth at least 50 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Warding Wind';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>A strong wind (20 miles per hour) blows around you in a 10-foot radius and moves with you, remaining centered on you. The wind lasts for the spell’s duration.</p>
<p>The wind has the following effects</p>
<ul>
    <li>It deafens you and other creatures in its area</li>
    <li>It extinguishes unprotected flames in its area that are torch-sized or smaller</li>
    <li>The area is difficult terrain for creatures other than you</li>
    <li>The attack rolls of ranged weapon attacks have Disadvantage if they pass in or out of the wind</li>
    <li>It hedges out vapor, gas, and fog that can be dispersed by strong wind</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 2);

        $spell              = new Spell;
        $spell->name        = 'Warp and Weave';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>This spell enables you to precisely identify the magic employed to create an effect observed by the caster during the previous round, during the round of casting, or during the round following casting. You learn the spell name, spell type (Evocation, Necromancy, etc.), and necessary components (Materials, Feats, Skills, etc.).</p>
<p>Only one magical effect may be examined, but this spell will fail to impart any knowledge if the effect is nonmagical or if you mistakenly believe that remnants are from a very recent magic when they are, in fact, from one cast earlier.</p>
<p>This spell also suggests (by vision or mental images) one method by which the observed spell effect can be countered or undone (if possible). Such visions may be cryptic, but never deliberately mislead.</p>
<dl>
    <dt>Material Components</dt> <dd>Glass prism</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 4);

        $spell              = new Spell;
        $spell->name        = 'Watchware';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Object touched';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>You create a mystical connection with a single inanimate object. When that object is damaged, moved, or touched at any later time, you are instantly aware of the fact. If another creature physically touches the object, you also receive a mental image of the creature, which counts as firsthand knowledge of the creature should you later choose to cast scrying or a similar spell on that creature.</p>
<p>The Watchware is activated when the item is disturbed for any reason, whether someone touches it or pokes it with a pole, a cat walks on it, or an earthquake knocks it over. The Watchware functions only once and is then discharged. A Watchware counts as a magical trap.</p>
<p>You can designate a password that allows another creature to handle the object without sounding the mental alarm if you so choose.</p>
<dl>
    <dt>Material Components</dt> <dd>A sprinkling of rare sands and powdered reagents worth at least 500 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 5);

        $spell              = new Spell;
        $spell->name        = 'Water Breathing';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Up to 10 creatures';
        $spell->duration    = '24 hour';
        $spell->description = '<p>This spell grants up to ten willing creatures you can see within range the ability to breathe underwater until the spell ends. Affected creatures also retain their normal mode of respiration.</p>
<p>You can choose to sacrifice the Spell Slot used to cast this spell to allow the targets to continue to benefit from this spell when the duration ends.</p>
<p>This spell Counters and Dispels Air Breathing.</p>
<dl>
    <dt>Material Components</dt> <dd>A short reed or piece of straw</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Permanency (Heightened +3)</dt> <dd>10,000 gp. 3 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment', 'Permanency'], 3);

        $spell                = new Spell;
        $spell->name          = 'Water of Eldath';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->spell_creator = 'Eldath';
        $spell->range         = 'Touch';
        $spell->duration      = 'Permanent';
        $spell->description   = '<p>This spell fills three potion flasks with water of Eldath. An entire flask of water of Eldath poured onto something or someone kills mold and musk creeper spores (including monstrous sorts) and rot grubs; purifies water of dangerous pollutants, diseases, and oils, including all things that give the water an unpleasant taste and odor; acts as a Neutralize Poison Spell. If an entire flask is imbibed, it instantly confers the following effects on the drinker as needed: It cures Disease; cures lycanthropy; removes Curses; and closes all wounds, including wounds made by enchanted weapons that cannot normally be made to close, effectively binding the wounds and preventing further damage due to blood loss.</p>
<dl>
    <dt>Material Components</dt> <dd>Three drops of water blessed by Eldath, blessed by one of her personal servants (her servitor creatures) in her name, or consecrated with Bless and Consecrate Spells by a Druid of Eldath. One drop is placed into each flask.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water', 'Bless', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Water to Acid';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->area        = 'Up to 5 cubic feet of water';
        $spell->targets     = 'A volume of pure water';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You transform a volume of Water into an equal volume of Acid. This Acid deals 1D6 Acid Damage per round of contact, up to 3 rounds.</p>
<p>You cannot affect any water that is inside a living creature. Water that contains more than a trace of dissolved or suspended substances cannot be affected.</p>
<p>Underwater, the Acid created by this spell dissipates after 3 rounds.</p>
<dl>
    <dt>Material Components</dt> <dd>A few drops of vinegar</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Area (Amount) of water</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water', 'Acid'], 2);

        $spell              = new Spell;
        $spell->name        = 'Water to Poison';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->area        = '2 ounces of water becomes Poison';
        $spell->targets     = 'Volume of Water Touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You transform a volume of Water into an equal amount of colorless, tasteless, ingested Poison with a Save DC equal to this spell's DC. The Poison has the following characteristics.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>10 minutes</dd>
    <dt>Stage 1</dt> <dd>1 CON Damage (CON this spell's DC)</dd>
    <dt>Stage 2</dt> <dd>4 CON Damage (CON this spell's DC)</dd>
</dl>
<p>A single swallow (1 ounce) is enough to Poison the drinker. Drinking additional amounts does not have any effect.</p>
<p>This Poison can be sold for 20 gp per ounce.</p>
<dl>
    <dt>Material Components</dt> <dd>The fang of a poisonous snake and a bloodstone worth at least 50 gp (which the spell consumes)</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Amount</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Poison'], 4);

        $spell              = new Spell;
        $spell->name        = 'Water Walk';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>The target can walk on the surface of water and other liquids without falling through. It can go underwater if it wishes, but in that case it must swim normally and doesn't gain the ability to breathe underwater.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the range to 30 feet and you can target up to 10 creatures</dd>
    <dt>Heightened (+3)</dt> <dd>10,000 gp. 3 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment', 'Water'], 2);

        $spell              = new Spell;
        $spell->name        = 'Water Whip';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '10 feet';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 rounds';
        $spell->description = '<p>You create a coil of flowing fresh water, functioning as a whip appropriate for your size, except you make a Melee Touch attack instead of a regular attack.</p>
<p>Anything you strike with the whip takes 1 damage is doused with 1 pint of water. A creature with the Fire subtype takes an additional 1D6 points of damage. If the target is on fire, it gains +2 bonus on its next Save to extinguish the flames.</p>
<p>After you have successfully hit with the whip 20 times, the water is expended and the spell is dispelled. The water is otherwise identical to that produces by Create Water.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 2);

        $spell              = new Spell;
        $spell->name        = 'Watery Form';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = '<p>When affected by this spell, the caster and anything you wear turns into what appears to be a puddle of water. This form cannot be absorbed or divided into smaller parts. You gain a Swim Speed equal to your Land Speed.</p>
<p>While in this form, you blend undetectably with a body of water, wet spots on deck, etc. The form does not drown in water and can swim in any depth you choose. If desired, you can flow out of the ocean, up the side of a ship, and onto the deck. This is as exhausting to you as if you had climbed that distance in your regular shape.</p>
<p>If you are attacked while in water form, you remain in one piece but you suffer damage. Weapons and spells inflict normal damage, and other objects injure as determined by the GM.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Water'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Watery Sphere';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'STR';
        $spell->range          = '90 feet';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You conjure up a sphere of water with a 5-foot radius on a point you can see within range. The sphere can hover in the air, but no more than 10 feet off the ground. The sphere remains for the spell’s duration.</p>
<p>Any creature in the sphere’s space must make a STR Save. On a successful save, a creature is ejected from that space to the nearest unoccupied space outside it. A Huge or larger creature succeeds on the Save automatically. On a failed save, a creature is restrained by the sphere and is engulfed by the water. At the end of each of its turns, a restrained target can repeat the Save.</p>
<p>The sphere can restrain a maximum of four Medium or smaller creatures or one Large creature. If the sphere restrains a creature in excess of these numbers, a random creature that was already restrained by the sphere falls out of it and lands prone in a space within 5 feet of it.</p>
<p>As an Action, you can move the sphere up to 30 feet in a straight line. If it moves over a pit, cliff, or other drop, it safely descends until it is hovering 10 feet over ground. Any creature restrained by the sphere moves with it. You can ram the sphere into creatures, forcing them to make the Save, but no more than once per turn.</p>
<p>When the spell ends, the sphere falls to the ground and extinguishes all normal flames within 30 feet of it. Any creature restrained by the sphere is knocked prone in the space where it falls.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The creature is ejected from the water to the nearest unoccupied space</dd>
    <dt>Failure</dt> <dd>The creature is restrained by the water</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Wave of Grief';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '0';
        $spell->area           = '30-ft Cone';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>All within the cone are overcome with sorrow and grief. All take a -2 Morale Penalty on all Attack Rolls, Saves, Ability Checks, and Skill Checks for 1 minute</p>
<dl>
    <dt>Material Components</dt> <dd>Three tears</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>-3 penalty to all Attacks, Saves, Ability Checks, and Skill Checks</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Wave of Pain';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '0';
        $spell->area           = '30-ft Cone';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>All living creatures within the Area are overcome with Pain and Suffering. All creatures must make a CON Save or be Stunned until the end of their next turn. Success or Fail, they must make that Save again at the end of their next turn for the Duration.</p>
<dl>
    <dt>Material Components</dt> <dd>A needle</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not Stunned for until the end of that creatures next turn. At the end of that creatures turn, they must make another Save.</dd>
    <dt>Failure</dt> <dd>Stunned until the end of that creatures next turn. At the end of that creatures turn, they may make another Save.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Waves of Fatigue';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '60-ft Cone';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Waves of Negative energy causes all living creatures in the Area to make a CON Save or gain Exhaustion: 1.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Gains Fatigue</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Instead of Fatigue, the if the Save Fails, then gains Exhaustion: 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 4);

        $spell              = new Spell;
        $spell->name        = 'Weapon Shift';
        $spell->casting     = 'Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One melee weapon of up to 15 lb';
        $spell->duration    = '1 hour';
        $spell->description = '<p>This spell causes the Touched weapon to temporarily transform into a different melee weapon.</p>
<blockquote>
    You touch a greatclub and transform it into a battleaxe.
</blockquote>
<p>Weapons retains the material they are made of and all magical properties.</p>
<dl>
    <dt>Material Components</dt> <dd>The melee weapon to be transformed (not consumed)</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Weapon Storm';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30-foot cone or 10-foot aura';
        $spell->duration       = 'Instantaneous';
        $spell->save_attribute = 'DEX';
        $spell->description    = "<p>Your Somatic Casting Action for this spell is a swing with one weapon you're holding that you're trained with, so you can use the Somatic Casting Action even if you don't have a hand free. The weapon magically multiplies into duplicates that swipe at all creatures in either a cone or an aura, dealing four dice of damage to creatures in the area. This damage has the same type as the chosen weapon and uses the same die size. Determine the die size as if you were attacking with the weapon; for instance, if you were wielding a two-hand weapon in both hands, you'd use its two-hand damage die. Each creature in the area must attempt a DEX Save.</p>";
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage, plus the weapon's critical specialization effect</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Add another damage die</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Weather Sense';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell enables you (you must be able to see the sky and listen to the winds) to predict the general weather conditions for the upcoming 12 hours. These are the natural weather conditions at your current location (and probably the nearby area) assuming that no magical manipulation occurs. Thus, this spell could predict the natural rain shower which will be coming in three hours, but could not predict the magically created storm tomorrow morning.</p>
<p>Upon casting ths spell, you discovers the general wind speed and prevailing direction of the wind which will be extant for the indicated time period. Specific timing of gusts and wind shifts is not available, however.</p>
<p>Similarly, you discover whether it will be raining (or snowing), and approximately how hard any precipitation will be. Exceptional weather patterns (such as tornadoes) are revealed to you, but you cannot predict their path with any accuracy.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the amount of time you see weather patterns into the future.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Web';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'STR';
        $spell->range          = '10-foot burst. 30 foot range';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You create a sticky web in the area that impedes creatures movement each time they try to move through it. Squares filled with the web are difficult terrain. Each square can be cleared of the web by a single attack or effect that deals at least 5 slashing damage or 1 fire damage. A square has AC 5 and TAC 5, and it automatically fails its Save.</p>
<p>Each time a creature begins to use an Action while in the web, it must attempt an STR (Athletics) check against your spell DC to avoid being entangled or immobilized. A creature that gets out of the web ceases to be entangled by it.</p>';
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected and doesn't need to attempt further Saves vs the web</dd>
    <dt>Success</dt> <dd>The creature is unaffected and clears the web from every square it leaves after leaving the square</dd>
    <dt>Failure</dt> <dd>The creature is entangled until the start of its next turn but doesn't need to attempt further Saves vs the web during this Action</dd>
    <dt>Critical Failure</dt> <dd>The creature is immobilized until the start of its next turn, after which it is entangled for 1 round</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the area by 20-foot burst and its range increases to 60 feet.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Weird';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->targets        = 'Any number of creatures';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You fill the targets' minds with terrifying images of fearsome creatures, each drawn from the target's worst fears. Only the targets can see their assailants. For each target, the effects of the Weird are based on the target's WIS Save.</p>
<p>On a critical failure, it must attempt another CON Save. On a successful save, the target still takes the effects of Failure and is fleeing until the end of its turn. If it fails, it is reduced to 0 Hit Points and dies.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>The target takes 16D6 mental damage and is Frightened 2</dd>
    <dt>Critical Failure</dt> <dd>The target is so afraid, it might instantly die</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Death', 'Fear', 'Illusion', 'Phantasm', 'Emotion'], 9);

        $spell              = new Spell;
        $spell->name        = 'Were-doom';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '200 foot radius centered on you';
        $spell->targets     = '1D4 humanoid creatures in the area';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You must cast this spell at night, under a full moon.</p>
<p>Lycanthropy infects 1D4 humanoid creatures in the area, designated randomly. These creatures immediately change into their animal or hybrid forms (their choice) and begins savagely attacking all around them.</p>
<dl>
    <dt>Material Component</dt> <dd>A bit of a lychantrope's fur or skin</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse', 'Ritual'], 8);

        $spell              = new Spell;
        $spell->name        = 'Whip';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a physical whip that forms in your hand. You can use the whip in the following ways.</p>
<ul>
    <li>You may use the whip as a normal weapon (note: this spell does not grant proficiency with the whip)</li>
    <li>As an Action, you can crack the whip. This causes all Animals within 30-ft to make a CHA Save or be forced to move away from you and stay at least 30-ft away from you for as long as you have the whip. If the Animal Critically Fails the Save, they are Frightened: 5.</li>
</ul>';
        $spell->heightened  = '';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Whirling Blade';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>This spell creates a shimmering translucent silvery blade of Force equal in dimensions and damage to a Long Sword. it orbits of your hands and you may Strike with it with an Action (treat the blade as a +1 magical Long Sword).</p>
<p>The blade is weightless and passes through metallic things as though they did not exist, without affecting them.</p>
<p>Metal armor does not provide AC or Damage Reduction (although any magical bonus to AC does apply), nor AC bonus from metal shields. The blade also passes through you without harm.</p>
<p>The blade cannot break but is destroyed instantly by contact with any spell with the Force type, Anti-Magic Shell spell, or Dispel Magic spell.</p>
<p>The blade emits a continuous high-pitched shrieking noise - vibrations of magical force that cannot be silenced by normal means. You may hold objects in your hands while wielding the blade (unless the carried object is so large as to obstruct your view of the blade or so heavy that you cannot lift your arm). Wielding and attacking with a normal weapon in the hand that the Whirling Blade is wielded in causes the spell to end.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Whirlwind';
        $spell->casting        = 'Material Casting, Verbal Casting';
        $spell->range          = '10-foot cylinder. 300 foot range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>A whirlwind howls down to a point that you can see on the ground within range. The whirlwind is a 10-foot-radius, 30-foot-high cylinder centered on that point. Until the spell ends, you can use your action to move the whirlwind up to 30 feet in any direction along the ground. The whirlwind sucks up any Medium or smaller objects that aren’t secured to anything and that aren’t worn or carried by anyone.</p>
<p>A creature must make a DEX Save the first time on a turn that it enters the whirlwind or that the whirlwind enters its space, including when the whirlwind first appears. A creature takes 5D8 Bludgeoning damage on a Failed Save, or half as much damage on a successful one. In addition, a Large or smaller creature that fails the Save must succeed on a STR Save or become restrained in the whirlwind until the spell ends. When a creature starts its turn restrained by the whirlwind, the creature is pulled 5 feet higher inside it, unless the creature is at the top. A restrained creature moves with the whirlwind and falls when the spell ends, unless the creature has some means to stay aloft.</p>
<p>A restrained creature can use an Action to make a STR or DEX check against your spell save DC. If successful, the creature is no longer restrained by the whirlwind and is hurled 3d6 × 10 feet away from it in a random direction.</p>
<dl>
    <dt>Materials</dt> <dd>A piece of straw</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 7);

        $spell              = new Spell;
        $spell->name        = 'Wind Compass';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to6 hours';
        $spell->description = "<p>By the use of ths spell, you create a tiny moaning wind that sounds only in your ears. Its steady tone rises or falls if you turn aside to the right or left, respectively, of a chosen direction. Returning to the proper course restores the proper wind hum.</p>
<p>This spell is most often used at night or in blinding sandstorms. It allows you to travel in an unerring, pre-determined direction but cannot guide along a non-straight route, or find features (it can point 'northwest', but not 'to the blue dragon's cave').</p>
<dl>
    <dt>Material Components</dt> <dd>Sand and your spittle mixed together</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination'], 0);

        $spell              = new Spell;
        $spell->name        = 'Wind Walk';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'You and up to five creatures touched';
        $spell->duration    = '8 hours';
        $spell->description = "<p>When you cast this spell, all targets transform into a vaguely cloud-like form and are picked up by a wind moving in the direction of your choice. You can Concentrate on the Spell to change the wind's direction. The wind carries the targets at a Speed of 20 miles per hour, but if any of the targets make an attack, Cast a Spell, come under attack, or otherwise enter encounter mode, the spell ends for all targets and they drift gently to the ground.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air', 'Ritual'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Wingbind';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '120 feet';
        $spell->targets        = 'One creature within Range';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>A web of force surrounds the target, entangling it like a net. If the Target Fails its DEX Save, it is Entangled.</p>
<p>Also, a creature cannot use wings to fly. A creature flying with wings falls immediately if it is Entangled. An Entangled creature can escape with an Escape Artist check, with the DC equal to the Spells DC.</p>
<p>The force net requires a DC 30 STR check to break. It has 20 HP and Hardness 20.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Avoids the Force net. Not affected</dd>
    <dt>Failure</dt> <dd>Entangled</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Range</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 4);

        $spell              = new Spell;
        $spell->name        = 'Winged Mount';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Summoned mount Touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You cause your mount to sprout giant, feathery white wings. The wings grants Fly Speed of 60 with good Maneuverability. Encumbrance applies as normal.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Wings of Air';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Winged creature Touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>The creature you touch becomes more agile in the air. The Target's Flying Maneuverability improves by one step. A single creature cannot benefit from multiple applications of this spell.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+2)</dt> <dd>The creatures Maneuverability improves by 2 steps</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 2);

        $spell              = new Spell;
        $spell->name        = 'Wish';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You pronounce a Wish, making your greatest desire come true. A Wish spell can produce any one of the following effects.</p>
<ul>
    <li>Duplicate any arcane spell of 9th level or lower.</li>
    <li>Duplicate any non-arcane spell of 7th level or lower.</li>
    <li>Produce any effect whose power level is in line with the above effects.</li>
</ul>
<p>The GM might allow you to try using Wish to produce greater effects than these, but doing so might be dangerous or the spell might have only a partial effect.</p>';
        $spell->rarity = 'Rare';
        $helper->addTypesToSpell($spell, ['Enchantment'], 10);

        $spell                 = new Spell;
        $spell->name           = 'Wrath of Nature';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX | STR';
        $spell->range          = '120 feet';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You call out to the spirits of nature to rouse them against your enemies. Choose a point you can see within range. The spirits cause trees, rocks, and grasses in a 60-foot cube centered on that point to become animated until the spell ends.</p>
<dl>
    <dt>Grasses and Undergrowth</dt> <dd>Any area of ground in the cube that is covered by grass or undergrowth is difficult terrain for your enemies.</dd>
    <dt>Trees</dt> <dd>At the start of each of your turns, each of your enemies within 10 feet of any tree in the cube must succeed on a DEX Save or take 4D6 slashing damage from whipping branches.</dd>
    <dt>Roots and Vines</dt> <dd>At the end of each of your turns, one creature of your choice that is on the ground in the cube must succeed on a STR Save or become restrained until the spell ends. A restrained creature can use an action to make a STR (Athletics) check against your spell save DC, ending the effect on itself on a success.</dd>
    <dt>Rocks</dt> <dd>As an Action on your turn, you can cause a loose rock in the cube to launch at a creature you can see in the cube. Make a ranged spell attack against the target. On a hit, the target takes 3D8 nonmagical bludgeoning damage, and it must succeed on a STR Save or fall prone.</dd>
</dl>';
        $spell->saves = 'See individual save options';
        $helper->addTypesToSpell($spell, ['Conjuration'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Wrathful Smite';
        $spell->casting        = 'Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>The next time you hit with a melee weapon attack during this spell's duration, your attack deals an extra 1D6 Negative damage.</p>
<p>Additionally, if the target is a creature, it must make a WIS Save or gain the Frightened condition of you until the spell ends. As an Action, the creature can make a WIS check against your spell save DC to steel its resolve and end this spell.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Not Frightened</dd>
    <dt>Failure</dt> <dd>Frightened</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Smite'], 1);

        $spell              = new Spell;
        $spell->name        = 'Word of Balance';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '30-ft emanation';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Any non-neutral divine creature or Outsider with those alignments who hears this spell suffers ill effects according to their relative HD.</p>
<table>
    <tbody>
        <tr>
            <th>Relative HD</th>
            <td>Effect</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Greater than your caster level</td>
            <td>Not affected</td>
        </tr>
        <tr>
            <td>Up to your caster level</td>
            <td>Nauseated for 1 round</td>
        </tr>
        <tr>
            <td>Up to your caster level - 1</td>
            <td>Enfeebled: 3 for 5 rounds</td>
        </tr>
        <tr>
            <td>Up to your caster level - 5</td>
            <td>Paralyzed for 5 rounds</td>
        </tr>
        <tr>
            <td>Up to your caster level - 10</td>
            <td>Dead / Destroyed</td>
        </tr>
    </tbody>
</table>
<p>In addition, if you are on your home Plane, any Outsider affected by this spell is also Banished so long as they have the same or lower HD to your Caster Level.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Neutral', 'Auditory'], 7);

        $spell              = new Spell;
        $spell->name        = 'Word of Chaos';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '30-ft emanation';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Any non-chaotic divine creature or Outsider with those alignments who hears this spell suffers ill effects according to their relative HD.</p>
<table>
    <tbody>
        <tr>
            <th>Relative HD</th>
            <td>Effect</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Greater than your caster level</td>
            <td>Not affected</td>
        </tr>
        <tr>
            <td>Up to your caster level</td>
            <td>Deafened for 1 round</td>
        </tr>
        <tr>
            <td>Up to your caster level - 1</td>
            <td>Stunned for 1 round</td>
        </tr>
        <tr>
            <td>Up to your caster level - 5</td>
            <td>Confused for 5 minutes</td>
        </tr>
        <tr>
            <td>Up to your caster level - 10</td>
            <td>Dead / Destroyed</td>
        </tr>
    </tbody>
</table>
<p>In addition, if you are on your home Plane, any Outsider affected by this spell is also Banished so long as they have the same or lower HD to your Caster Level.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Chaotic', 'Auditory'], 7);

        $spell              = new Spell;
        $spell->name        = 'Word of Law';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '30-ft emanation';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Any non-lawful divine creature or Outsider with those alignments who hears this spell suffers ill effects according to their relative HD.</p>
<table>
    <tbody>
        <tr>
            <th>Relative HD</th>
            <td>Effect</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Greater than your caster level</td>
            <td>Not affected</td>
        </tr>
        <tr>
            <td>Up to your caster level</td>
            <td>Shaken for 1 round</td>
        </tr>
        <tr>
            <td>Up to your caster level - 1</td>
            <td>Stunned for 1 round</td>
        </tr>
        <tr>
            <td>Up to your caster level - 5</td>
            <td>Restrained for 1 minute</td>
        </tr>
        <tr>
            <td>Up to your caster level - 10</td>
            <td>Dead / Destroyed</td>
        </tr>
    </tbody>
</table>
<p>In addition, if you are on your home Plane, any Outsider affected by this spell is also Banished so long as they have the same or lower HD to your Caster Level.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Lawful', 'Auditory'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Word of Radiance';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '5 feet';
        $spell->targets        = '1 Creature within range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Target creature within range must make a CON Save or take 1D6 Positive damage.</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+5)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Positive'], 0);

        $spell              = new Spell;
        $spell->name        = 'Word of Recall';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '5 feet';
        $spell->targets     = 'You and up to five willing creatures within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You and up to five willing creatures within 5 feet of you instantly teleport to a previously designated sanctuary. You and any creatures that teleport with you appear in the nearest unoccupied space to the spot you designated when you prepared your sanctuary (see below). If you cast this spell without first preparing a sanctuary, the spell has no effect.</p>
<p>You must designate a sanctuary by casting this spell within a location, such as a temple dedicated to or strongly linked to your deity. If you attempt to cast the spell in this manner in an area that isn't dedicated to your deity, the spell has no effect.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 6);

        $spell              = new Spell;
        $spell->name        = 'Wound';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You make a Ranged Spell Attack. If you hit, you cause 3D8 Negative Damage plus your spell casting ability modifier to a target.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Range</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Harm', 'Negative'], 3);

        $spell              = new Spell;
        $spell->name        = 'Wounding Whispers';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You surround yourself with whispers that injure any creature that comes into contact with you. Any creature striking with a Melee Attack takes 1D6 + your Spell Casting Modifier Sonic Damage. Melee Attacks made with reach are not affected. Only when a creature attacks you are they affected, not when you attack them.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 3);

        $spell              = new Spell;
        $spell->name        = 'Wraith Strike';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Until the beginning of your next turn or until used';
        $spell->description = '<p>Until the beginning of your next turn, your next Melee Attack is made as a Melee Touch Attack.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);
    }
}
