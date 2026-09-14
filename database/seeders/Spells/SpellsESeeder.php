<?php

namespace Database\Seeders\Spells;

use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsESeeder extends Seeder
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
        $spell->name           = "Eagle's Hex";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '10 minutes';
        $spell->save_attribute = 'CHA';
        $spell->description    = "<p>You curse the Target with low self-esteem unless they make a successful CHA Save.</p>
<p>This spell Counters and is Countered by Eagle's Splendor.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>You suffer a -1 penalty to your CHA</dd>
    <dt>Failure</dt> <dd>You suffer a -4 penalty to your CHA</dd>
    <dt>Critical Failure</dt> <dd>You suffer a -8 penalty to your CHA</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can Target up to 10 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = "Eagle's Splendor";
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>The Target gets a +4 enchantment bonus to CHA.</p>
<p>This spell Counters and is Countered by Eagle's Hex.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The range becomes 30 feet, and you can Target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Earth Glide';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You give the Target the ability to glide through earth and stone as easily as an earth elemental does.</p>
<p>The affected creature can glide through stone, dirt, or almost any other sort of earth except metal as easily as a fish swims through water. The Target can also "breathe" earth, so that the Target does not suffocate while within the earth.</p>
<p>Its burrowing leaves behind no tunnel or hole, nor does it create any ripple or other signs of its presence.</p>
<p>A Move Earth spell cast on an area containing the affected creature flings the creature back 30 feet and Stuns the creature for 1 round unless it succeeds on a DC 15 CON Save.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The casting becomes Somatic Casting, Verbal Casting</dd>
    <dt>Heightened (+1)</dt> <dd>The spell affects up to 5 additional targets</dd>
    <dt>Heightened (+1)</dt> <dd>The duration becomes doubled</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ritual'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Earth Tremor';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '10 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You cause a tremor in the ground within range. Each creature other than you in that area must make a DEX Save. On a failed Save, a creature takes 1D6 Bludgeoning damage and is knocked prone.</p>
<p>If the ground in that area is loose earth or stone, it becomes difficult terrain until cleared, with each 5-foot-diameter portion requiring at least 1 minute to clear by hand.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full damage and is knocked Prone</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the bludgeoning damage +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Earthen Grasp';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '5-foot square. 30 foot range';
        $spell->save_attribute = 'STR';
        $spell->spell_creator  = 'Maximillian';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>You choose a 5-foot-square unoccupied space on the ground that you can see within range. A Medium hand made from compacted soil rises there and reaches for one creature you can see within 5 feet of it. The Target must make a STR Save. On a Failed Save, the Target takes 2D6 Bludgeoning Damage and is Restrained for the spell's Duration.</p>
<p>As an Action, you can cause the hand to crush the restrained target, who must make a STR Save. It takes 2D6 Bludgeoning damage on a failed save, or half as much damage on a successful one.</p>
<p>To break out, the restrained Target can use its action to make a STR check against your spell save DC. On a success, the Target escapes and is no longer restrained by the hand.</p>
<p>As an Action, you can cause the hand to reach for a different creature or to move to a different unoccupied space within range. The hand releases a restrained Target if you do either.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth', 'Attack', 'Melee'], 2);

        $spell              = new Spell;
        $spell->name        = 'Earthenport';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Same Plane';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>When you cast this spell, you attune to a large amount of solid rock (not dirt) that is at least double your volume. You can then Teleport to any location on the same Continent that you are aware of that also has an amount of solid rock at least double your volume.</p>
<p>The first 5 rounds of casting this spell is spent melding into the solid rock, then the remaining 5 rounds are spend manifesting at your destination.</p>
<p>During the casting time of this spell, you are visible at both ends, but you are intangible. If the either rock you are transporting from or to is affected by spell with the Earth type that can change it's shape or Transmute it, you take 5D6 damage and are stunned for 1 hour. The spell still Teleports you to your destination.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation', 'Earth'], 5);

        $spell              = new Spell;
        $spell->name        = 'Earthfast';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One stone structure or rock formation';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You reinforce a rock formation or stone structure. This spell doubles the structure's Hit Points and Hardness. The spell ends if you move beyond the range of the spell. This spell has no effect on living or animated stone creatures. Casting this spell more than once on the same structure has no effect.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the range</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Permanency (Heightened +4)</dt> <dd>2,500 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth', 'Permanency'], 2);

        $spell               = new Spell;
        $spell->name         = 'Earthmaster';
        $spell->casting      = 'Verbal Casting, Ability Damage';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON Damage</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = '1 minute';
        $spell->description  = '<p>You take up the mantle of the earth, gaining power over it as long as you stand upon it or beneath its surface. You gain the ability to cast the following spells as a Double Action</p>
<ul>
    <li>Burrow</li>
    <li>Commune with Earth</li>
    <li>Earthquake</li>
    <li>Excavate</li>
    <li>Flesh to Stone</li>
    <li>Meld into Stone</li>
    <li>Move Earth</li>
    <li>Shape Stone</li>
    <li>Stone Sphere</li>
    <li>Stone Tell</li>
    <li>Stone to Flesh</li>
    <li>Transmute Rock</li>
    <li>Wall of Stone</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 10);

        $spell                 = new Spell;
        $spell->name           = 'Earthquake';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60-foot burst. 500 foot range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '1 round';
        $spell->description    = '<p>You shake the ground, topple creatures, and shatter structures.</p>
<dl>
    <dt>Shaking Ground</dt> <dd>The ground is difficult terrain, and creatures on it take a -2 circumstance penalty to attack rolls and skill checks</dd>
    <dt>Fissures</dt> <dd>Each creature on the ground must attempt a Save at the start of its turn to keep footing and avoid falling into 40-foot-deep fissures that open. The fissures are permanent, and their walls require DC 15 Athletics to Climb.</dd>
    <dt>Collapse</dt> <dd>Structures and ceilings might collapse. The GM rolls a flat check for each (DC 16 for a sturdy structure, DC 14 for an average structure and most natural formations, DC 9 for a shoddy structure, or higher or lower as the GM sees fit). A collapse deals 11D6 Bludgeoning damage; each creature caught in a collapse must attempt a DEX Save to escape it.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You create a massive earthquake that can devastate a settlement. The range increases to half a mile and the area to a quarter-mile burst.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>Half collapse damage</dd>
    <dt>Success</dt> <dd>The creature takes Half collapse damage and falls prone</dd>
    <dt>Failure</dt> <dd>Full collapse damage falls prone</dd>
    <dt>Critical Failure</dt> <dd>Full collapse damage and fails into a fissure</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Earth', 'Transmutation'], 8);

        $spell              = new Spell;
        $spell->name        = 'Ease of Breath';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '6 hours';
        $spell->description = '<p>You grant the Target the ability to survive in thin air. The Target gains a +20 Inherent bonus to CON Saves to resist altitude sickness and becoming Fatigued due to altitude or thin air.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dd>Heightened (+1)</dd> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Ease Pain';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell immediately removes any lingering effects of pain. It does not heal any damage or other effects not directly related to pain. If the Target is under some effect that causes continuing pain, You may Concentrate on this spell to continue the easing the targets pain, up to 3 hours.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number targets</dd>
    <dt>Heightened (+2)</dt> <dd>The duration becomes 12 hours without Concentration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 1);

        $spell              = new Spell;
        $spell->name        = 'Easy Math';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>This minor magical effect makes counting and calculating a breeze. You can estimate the number of gold pieces in a pile, the distance of a gap, the number of foes in an army, etc.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Easy Trail';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '8 hours';
        $spell->description = '<p>You radiate energy that gently pushes plants aside, allowing easy movement and hiding your trail after you pass. Creatures in the effect (including the caster) find the undergrowth held aside as they pass. This essentially provides a "trail" through any terrain. Once you have passed, plants return to their normal shapes. The DC to track anyone who traveled within the effect is increased by 5 (the equivalent of hiding the trail).</p>
<p>This spell cannot push or hold plant creatures aside.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Ebon Ray of Doom';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet ray';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'One creature in range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You fire a Ray of black energy that drastically slows down the rate at which the subject can recover Hit Points. Any creature attempting to restore HIt Points to the subject by means of any sort of healing magic must succeed on a caster level check, or the healing effect fails. A subject with Fast Healing or Regeneration ability must make a CON Save at the beginning of its turn each round. Failure indicates that the ability does not function in that round.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Can heal this round</dd>
    <dt>Failure</dt> <dd>Fails to heal this round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ray'], 4);

        $spell              = new Spell;
        $spell->name        = 'Echolocation';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You can perceive the world by creating high-pitched noises and listening to their echos. This gives you Blindsight to a range of 60 feet (300 feet in water). The echo-producing noises are too high-pitched to be heard by most creatures, and can only be detected by dragons, other creatures with this ability (such as bats), and creatures with hearing-based Blindsense or Blindsight.</p>
<p>You cannot use this ability if you are Deaf, and cannot detect anything in an area of silence.</p>
<p>You also suffer double damage from Sonic attacks while this spell is in effect.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Sonic'], 4);

        $spell              = new Spell;
        $spell->name        = 'Ectoplasmic Armor';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You draw ectoplasm from the Ethereal plane and surround yourself with it to provide protection against incorporeal attacks. You gain a +5 bonus to AC against incorporeal attacks.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Armor Class bonus by +2</dd>
    <dt>Heightened (+2)</dt> <dd>Incorporeal creatures that makes a Melee attack against you takes 3D6 Force damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ectoplasm'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Ectoplasmic Decay';
        $spell->casting        = 'Material Casting';
        $spell->save_attribute = 'INT';
        $spell->range          = '120 feet';
        $spell->area           = '30 foot radius emanation';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a barely visible spread of energy that is harmful to ectoplasmic beings (Incorporeal) but harmless to everything else. All Incorporeal creatures and objects in the area take 10D6 Force damage and must make a CHA Save.</p>
<dl>
    <dt>Material Components</dt> <dd>A flat, sharpened disk made of resin</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +2D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ectoplasm'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Ectoplasmic Web';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '10-foot burst. 30 foot range';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>As the Web spell, except as noted here and the web only affects ectoplasm and incorporeal creatures.</p>';
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected and doesn't need to attempt further Saves vs the web</dd>
    <dt>Success</dt> <dd>The creature is unaffected and clears the web from every square it leaves after leaving the square</dd>
    <dt>Failure</dt> <dd>The creature is entangled until the start of its next turn but doesn't need to attempt further Saves vs the web during this Action</dd>
    <dt>Critical Failure</dt> <dd>The creature is immobilized until the start of its next turn, after which it is entangled for 1 round</dd>
</dl>";
        $spell->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the area by 20-foot burst and its range increases to 60 feet.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ectoplasm'], 2);

        $spell                = new Spell;
        $spell->name          = 'Effulgent Epuration';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Elminster';
        $spell->rarity        = 'Rare';
        $spell->range         = '60 feet';
        $spell->duration      = '3 hours or until expended';
        $spell->description   = '<p>You create multiple floating silvery sphers, each 6 inches in diameter.  These spheres appear in a spiral above your head or around your body and follow you up to 60 feet per round.</p>
<p>The spheres intercept incoming hostile magic, negating spells or spell-like abilities that would affect you or that have an effect that extends into your space. One sphere is expended for eachs pell level of the effect negated, so a 5th level spell would expend five spheres. In the case of area effect spells, it negates the whole spell. If not enough spheres exist to negate an incoming effect, the spheres remain and the effect works as normal.</p>
<p>You may move one or more spheres up to 60 feet as an Action. If you exceed their range, they remain behind and function normally at that location.</p>
<p>The spheres have no physical substance, do not provide cover or concealment, and conform to narrow spaces up to 6 inches in diameter without altering their ability to function. They cannot pass through solid objects or force effects. They cannot be harmed by physical or magical attacks except those that dispel or negate magic entirely (such as Dispel Magic, Antimagic Field, etc).</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 9);

        $spell              = new Spell;
        $spell->name        = "Eilistraee's Moonfire";
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minute or until discharged';
        $spell->description = "<p>You surround your hand or some other part of your body with light resembling moonlight. You can change the intensity from a faint glow equivalent to a candle to a clear, bright light equivalent to a torch. it varies in color as you desire, whether blue-white, soft green, white or silver. You can use ths moonfire as a Melee Touch attack that deals 3D6 Light damage. Whether or not the attack hits, the spell effect is discharged.</p>
<p>You can cause the moonlight to leave your body and move about as a single light to Dancing Lights. Once it leaves your body, the effect's duration is 10 minute and the effect can no longer be used to attack.</p>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 1);

        $spell              = new Spell;
        $spell->name        = 'Elation';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet radius centered on you';
        $spell->targets     = 'Allies in within range';
        $spell->duration    = '1 minute';
        $spell->description = '<p>Your allies become elated, full of energy and joy.</p>
<p>Affected creatures gain the following</p>
 <ul>
    <li>+2 morale bonus to effective STR and DEX</li>
    <li>Speed increases by +5 feet</li>
</ul>
<p>Elation does not remove the condition of Fatigue, but it does offset most of the penalties for being Fatigued.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+5)</dt> <dd>
        <ul>
            <li>Removes all lingering effects of pain</li>
            <li>Renders its targets immune to Mind-Affecting spells and effects (but not Mind-Influencing)</li>
            <li>Targets of the spell take only half damage from all melee and ranged attacks for the duration</li>
            <li>The fugue-like state induced by the spell makes it difficult for targets to Concentrate on certain tasks. Creatures in Ecstasy take a -4 penalty on all skill checks, and casting a spell requires a DC 15 Concentration check.</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Emotion', 'Exalted', 'Auditory'], 2);

        $spell              = new Spell;
        $spell->name        = 'Eldritch Blast';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>A beam of crackling energy streaks toward a creature within range. Make a Ranged spell attack against the target. On a hit, the Target takes 1D10 Force damage.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force', 'Attack', 'Ranged'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Electric Arc';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '15 feet';
        $spell->targets        = 'All in area of effect';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A stroke of electricity forming a line 15 feet long and 5 feet wide blasts out from you in a direction you choose. Each creature in the line must make a DEX Save or take 1D8 Electricity damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The Target takes no damage</dd>
    <dt>Failure</dt> <dd>The Target takes full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>Increase the damage by +1D8.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Electricity', 'Evocation'], 0);

        $spell              = new Spell;
        $spell->name        = 'Elemental Form';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = "<p>You transform into a Medium elemental battle form. You count as an elemental in addition to your normal traits. Your gear is absorbed into you; the constant abilities still function, but you can\'t activate it. When you transform, you gain the following:</p>
<ul>
    <li>Darkvision</li>
    <li>Acrobatics (air or fire) or Athletics (earth or water) bonus of +17, ignore this change if your own bonus is higher</li>
    <li>AC 28 (TAC 26), ignore armor's check penalty and reduced Speed</li>
    <li>10 temporary Hit Points while you have the form</li>
    <li>Resistance 5 to critical hits and precision damage</li>
    <li>One or more natural melee attacks, which are the only types of attacks you can use. You're trained with them. Your attack modifier is +15 and your damage bonus is +9. These are DEX based (air or fire) or STR (earth or water).</li>
</ul>
<p>These special statistics can be adjusted only by penalties, circumstance bonuses, and conditional bonuses. Your battle form prevents casting spells or using most actions with the Manipulate trait that require hands (the GM decides if there's doubt). You can dismiss the spell with an action (this action has the concentrate trait).</p>
<p>If you prepare this spell, choose from the options below. When in battle form, you gain the attacks, movement types, and special abilities listed</p>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Movement</th>
            <th>Misc</th>
            <th>Attach</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Air</td>
            <td>Fly Speed 80 feet</td>
            <td>Movement doesn't trigger reactions</td>
            <td>Gust 1D4 bludgeoning</td>
        </tr>
        <tr>
            <td>Earth</td>
            <td>Speed 20 feet, Burrow 20 feet</td>
            <td></td>
            <td>Fist 2D10 bludgeoning</td>
        </tr>
        <tr>
            <td>Fire</td>
            <td>Speed 50 feet, and movement doesn't trigger reactions</td>
            <td>
                <ul>
                    <li>Fire resistance: 10</li>
                    <li>Weakness 5 to cold and water</li>
                </ul>
            </td>
            <td>Tendril 1D8 fire plus 1D4 persistent fire</td>
        </tr>
        <tr>
            <td>Water</td>
            <td>Speed 20 feet, Swim 60 feet</td>
            <td>
                <ul>
                    <li>Fire resistance: 5</li>
                </ul>
            </td>
            <td>Wave 1D12 bludgeoning, and you can spend an Action immediately after a hit to push the Target 5 feet</td>
        </tr>
    </tbody>
</table>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>
        <p>Your battle form is Large and your attacks have 10-foot reach. You must have space to expand or the spell is lost.</p>
        <ul>
            <li>Acrobatics or Athletics: +19</li>
            <li>AC 31 (TAC 28)</li>
            <li>15 temporary HP</li>
            <li>Attack modifier +19</li>
            <li>Damage bonus +13</li>
        </ul>
    </dd>
    <dt>Heightened (+1)</dt> <dd>
        <p>Your battle form is Huge and your attacks have 15-foot reach. You must have space to expand or the spell is lost.</p>
        <ul>
            <li>Acrobatics or Athletics: +23</li>
            <li>AC 34 (TAC 32)</li>
            <li>20 temporary HP</li>
            <li>Attack modifier +21</li>
            <li>Damage bonus +11 and double the number of damage dice (including persistent damage)</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Elemental Ward';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->area           = '60 foot emanation, centered on you';
        $spell->targets        = 'Self';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You create an aura that drives off elementals of a specific type. When you cast the spell, any elemental within the area must leave the area unless it makes a CHA Save. If you try to force the barrier against an elemental that has failed its Save, the spell ends.</p>
<dl>
    <dt>Material Components</dt> <dd>A small quantity of the element opposed to the type being warded against—fire for water elementals, earth for air elementals, air for earth elementals, or water for fire elementals. Note, this spell could function against para-elementals also.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected by the spell</dd>
    <dt>Failure</dt> <dd>Affected as normal</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Air', 'Earth', 'Fire', 'Water'], 4);

        $spell              = new Spell;
        $spell->name        = 'Elemental Weapon';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched nonmagical weapon';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>A nonmagical weapon you touch becomes a magic weapon.</p>
<p>Choose one of the following damage types: Cold, Electricity, Fire, or Sonic. For the duration, the weapon has a +1 bonus to attack rolls and deals an extra 1D4 damage of the chosen type when it hits.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus to hit by +1 and the damage by +1D4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold', 'Electricity', 'Fire', 'Sonic'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Emerald Burst';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '60 feet';
        $spell->area           = '30 foot radius';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You infuse an emerald with Divine power. You may throw the emerald up to the range. The emerald explodes at the end of your turn. This explosion has the following effects</p>
<ul>
    <li>Good creatures suffer no effect</li>
    <li>Neutral creatures are Dazed: 1 unless they Save</li>
    <li>Evil creatures are Stunned: 3 and takes 10D4 Good Damage</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>An emerald worth at least 5 gp.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Neutral creatures are unaffected. Evil creatures are Stunned: 1 and take half damage</dd>
    <dt>Failure</dt> <dd>Neutral creatures are Dazed: 1. Evil creatures are Stunned: 3 and take full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Good', 'Enchantment'], 3);

        $spell                = new Spell;
        $spell->name          = 'Emerald Energy Shield';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Nezram';
        $spell->range         = 'Touch';
        $spell->targets       = 'Creature touched';
        $spell->duration      = '10 minutes';
        $spell->description   = "<p>You coat the subject with protective every of an emerald green hue. This energy shield does not affect the subject's movement, senses, or ability to cast spells. While surrounded by this energy, the subject is immune to any natural or magical effect that causes Deafness and to all Audible (Sonic) based attacks. The subject also gains Resistance to Sonic damage.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of powdered emerald</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 4);

        $spell              = new Spell;
        $spell->name        = 'Empty Body';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You turn ethereal as Etherealness, but don't need to concentrate.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 9);

        $spell              = new Spell;
        $spell->name        = 'Enchant Item';
        $spell->casting     = '1 hour (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One item to be enchanted into a magic item';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell prepares an item so that it can be crafted into a magical item or to further enchant an already magical item.</p>
<p>This spell is not a requirement to create all magical items, but many modern magical items do require this spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Encode Thoughts';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Up to 8 hours';
        $spell->description = '<p>Putting a finger to your head, you pull a memory, an idea, or a message from your mind and transform it into a tangible string of glowing energy called a thought strand, which persists for the duration or until you cast this spell again.</p>
<p>The thought strand appears in an unoccupied space within 5 feet of you as a Tiny, weightless, semisolid object that can be held and carried like a ribbon. It is otherwise stationary.</p>
<p>If you cast this spell while concentrating on a spell or an ability that allows you to read or manipulate the thoughts of others (such as Detect Thoughts or Modify Memory), you can transform the thoughts or memories you read, rather than your own, into a thought strand.</p>
<p>Casting this spell while holding a thought strand allows you to instantly receive whatever memory, idea, or message the thought strand contains. (Casting Detect Thoughts on the strand has the same effect)</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Enchantment', 'Mental'], 1);

        $spell              = new Spell;
        $spell->name        = 'End to Strife';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '120 foot emanation, centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = "<p>This spell creates an invisible aura of Divine power around you. All intelligent creatures within the area become aware that any hostile actions they take will be met with dire consequences. Any creature in th spell's area that makes an attack takes 20D6 Positive damage. When you cast the spell, you must choose whether the damage is Lethal or Non-lethal.</p>
<p>Creatures outside the area of the spell may freely attack creatures in the area without suffering the consequences.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the area</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good'], 9);

        $spell                = new Spell;
        $spell->name          = 'Endurance of Ilmater';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Ilmater';
        $spell->targets       = 'Self';
        $spell->duration      = '10 minutes';
        $spell->description   = '<p>This spell grants you the following</p>
<ul>
    <li>You gain a number of Temporary Hit Points equal to your Hit Point Maximum</li>
    <li>You gain a +2 bonus to all Saves</li>
    <li>You gain Advantage on all STR and CON checks and Saves</li>
    <li>You cannot be knocked Prone</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Endure Elements';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing creature';
        $spell->duration    = '24 Hours';
        $spell->description = '<p>Choose severe cold or heat. The Target is protected from the temperature you chose (but not extreme cold or heat).</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Target is protected from severe cold and heat.</dd>
    <dt>Heightened (+3)</dt> <dd>The Target is protected from severe cold, severe heat, extreme cold, and extreme heat.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Enemies Abound';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'On creature within range';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You reach into the mind of one creature you can see and force it to make an INT Save. A creature automatically succeeds if it is immune to being Frightened. On a Failed Save, the Target loses the ability to distinguish friend from foe, regarding all creatures it can see as enemies until the spell ends. Each time the Target takes damage, it can repeat the Save, ending the effect on itself on a success.</p>
<p>Whenever the affected creature chooses another creature as a target, it must choose the Target at random from among the creatures it can see within range of the attack , spell, or other ability it's using. If an enemy provokes an opportunity attack from the affected creature, the creature must make that attack if it is able to.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental', 'Figment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Energize Shield';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Shield touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>When you cast this spell, the shield touched appears to be made entirely out of one type of energy (Fire, Cold, Electricity, or Sonic). The shield gains the following.</p>
<ul>
    <li>The shield wielder gains Resistance against the chosen energy type</li>
    <li>Making an attack with the shield also deals an additional 1D6 of the chosen energy type.</li>
    <li>The AC bonus the shield grants increases by +1</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the amount of damage the Shield deals. Increase the AC bonus by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Energy Buffer';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '24 hours or until discharged';
        $spell->description = '<p>You crate an aura that protects you and your equipment against Cold, Electricity, Fire, or Sonic. Whenever you are exposed to energy damage, a multi-hued aura covers you body and absorbs up to 50 points of damage. If the aura can absorb any more damage, it last for 3 rounds more, or until it has absorbed as much damage as it can.</p>
<p>This protection absorbs damage before any Immunity, Resistance or Damage Reduction is applied. Casting this spell on an individual that is already protected by this spell ends the first casting.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Double the amount of damage it can absorb.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Cold', 'Electricity', 'Fire', 'Sonic'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Energy Spheres';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->targets        = 'Self';
        $spell->duration       = 'Concentration, up to 10 minutes or until discharged';
        $spell->description    = '<p>You create a circle of four colored spheres that orbit your head at a distance of 1 foot. These spheres provide as much light as a torch. Each sphere corresponds to the energy types: Cold (blue), Electricity (yellow), Fire (red), Sonic (gray) and can be used in the following ways.</p>
<ul>
    <li>As an Action, you can have one of the spheres attack a Target within 60 feet. The sphere does damage in a 10-foot radius and deals 20 points of damage of the energy type of the sphere. That sphere then dissipates.</li>
    <li>If you are the Target of an attack of one of the energy types, and you still have the sphere of that type, you may, as a Reaction, have the sphere of that type absorb the damage. This only works if you are the sole Target of the attack and cannot absorb damage that affects an area.</li>
</ul>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +20</dd>
    <dt>Heightened (+2)</dt> <dd>Double the number of each sphere you get</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold', 'Electricity', 'Fire', 'Sonic'], 4);

        $spell               = new Spell;
        $spell->name         = 'Energy Transformation Field';
        $spell->casting      = '10 minutes (Material, Somatic, Verbal)';
        $spell->rarity       = 'Rare';
        $spell->range        = '40 ft radius emanation / 90 ft';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 other casters, one of which must cast the associated spell, and another to cast Permanency</dd>
    <dt>Ability Damage</dt> <dd>All participants suffer 3 CON damage</dd>
</dl>';
        $spell->duration     = 'Permanent';
        $spell->description  = "<p>You create a lingering zone of transformative magic that absorbs elemental energies in order to power another spell tied to that location.</p>
<blockquote>
    Ex. An Energy Transformation Field tied to a Summon Animals spell that would summon a monster when the field had absorbed enough elemental energy.
</blockquote>
<p>The field absorbs the following elemental forms of energy</p>
<ul>
    <li>Cold</li>
    <li>Electricity</li>
    <li>Fire</li>
    <li>Force</li>
    <li>Sonic</li>
</ul>
<p>Natural and magical effects that generate the mentioned forms of energy are absorbed. Natural sources persist (not eliminated by the field), but are dampened to cause only a single die of damage (ex. a Fireball spell causes 3D6 damage, but within the area of the Energy Transformation Field, the Fireball only causes 1D6). Natural sources provide a single level of energy (when the source first comes into existence or when it enters the field) and spells provide levels equal to the Spell Slot used (Cantrips that are not Heightened provide no energy).</p>
<p>Once the field has absorbed energy equal to or greater than the Spell Level of the associated Spell, the associated Spell is cast and the field losses all it's absorbed energy.</p>
<p>If the spell requires Concentration, the spell lasts for 1 round and ends. Alternatively, the associated spell can be set to not cast until a certain amount of additional energy, with each point of additional energy translates to 1 round of Concentration. If at the end of the day, any unspent energy is reduced by 1.</p>
<p>Elemental creatures that are in the field suffer special circumstances. Beings from one of the Elemental Planes suffer 1D3 CON damage when they first enter the field. This provides twice the amount of CON damage in levels to the field. This damage is applied once per day.</p>
<dl>
    <dt>Material Components</dt> <dd>Three drops of your blood</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Energy Vortex';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->area           = '30-foot radius emanation centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>When you cast this spell, chose an energy type (Cold, Electricity, Fire, Sonic). A blast of the chosen energy type bursts in all directions from you, dealing 10D6 damage of the chosen type to all creatures within the area except yourself.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the area</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +2D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold', 'Electricity', 'Fire', 'Sonic'], 4);

        $spell              = new Spell;
        $spell->name        = 'Enervating Breath';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>The next breath weapon you use during the duration also deals Negative energy damage. Creatures that are hit are Enervated: 2D4. You gain an amount of Hit Points equal to the total amount of Enervated levels creatures suffer X2. Undead creatures caught in the breath weapon gains 2D4X5 Hit Points (after suffering the effects of the normal Breath Weapon). You do not gain any Hit Points from Undead creatures.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 8);

        $spell              = new Spell;
        $spell->name        = 'Enervating Touch';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Your hand becomes infused with Negative Energy. You may make Touch Attacks with your infused hand. On a hit, the Target is Enervated: 1 and you gain 5 Temporary Hit Points (These Temporary Hit Points lasts for 1 hour). This attack is not treated as being Armed, so you Provoke Attacks of Opportunity unless you have the Improved Unarmed Strike feat.</p>
<p>Attacking an Undead with this attack heals the Undead 5 Hit Points and you are Enervated: 1.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Enervation';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>Make a Ranged Touch Attack. If you Succeed, the effect depends on the target's CON Save; if you critically Succeed, treat the result as one degree worse. Enervated effects last for only the duration.</p>.";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The Target is unaffected</dd>
    <dt>Success</dt> <dd>The Target is Enervated 1</dd>
    <dt>Failure</dt> <dd>The Target is Enervated 2</dd>
    <dt>Critical Failure</dt> <dd>The Target is Enervated 4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Necromancy', 'Negative'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Enfeebling Smite';
        $spell->casting        = 'Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>The next time you hit with a melee weapon attack during this spell's duration, your attack deals an extra 1D6 Negative damage. Additionally, the Target must make a STR Save or gain the Enfeebled condition.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The Target is unaffected</dd>
    <dt>Success</dt> <dd>The Target gains enfeebled 1</dd>
    <dt>Failure</dt> <dd>The Target gains enfeebled 2</dd>
    <dt>Critical Failure</dt> <dd>The Target gains enfeebled 3</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Smite'], 2);

        $spell                = new Spell;
        $spell->name          = 'Enlarge';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '30 feet';
        $spell->targets       = 'One willing creature';
        $spell->spell_creator = 'Aksa';
        $spell->duration      = '1 minute';
        $spell->description   = '<p>The Target grows to size Large. Its equipment grows with it but returns to natural size if removed. The creature is sluggish 1. Its reach increases by 5 feet (or by 10 feet if it started out Tiny) and it gains a +2 conditional bonus to melee damage. This spell has no effect on a Large or larger creature.</p>
<p>This spell Counters and is Countered by Shrink.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+2)</dt> <dd>The creature instead grows to size Huge. The conditional bonus to melee damage is +4 and reach increases by 10 feet (or 15 feet if the creature started out Tiny). The spell has no effect on a Huge or larger creature.</dd>
    <dt>Permanency (Heightened +5)</dt> <dd>2,500 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation', 'Permanency'], 2);

        $spell              = new Spell;
        $spell->name        = 'Enlarge Skeleton';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One skeleton';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell can be applied to all or part of a human-sized or smaller skeleton, but fails if used on bones of different individuals. It is effective on both undead and normal skeletal remains. An enlarged skeleton can turn an animal skeleton into a monster skeleton and a normal human skeleton into a giant skeleton. When applied to nonanimated remains, it is usually employed to make a bone larger and heavier for use as a prop, tool, or weapon.</p>
<p>This spell can be applied to only part of a skeleton, lengthening it to a maximum of twice what it was before the spell was applied. This is usually employed to lengthen the stump of a massing arm into a longer limb, but can also be used a an attack (for example, to make a hostile skeleton fall over by making one leg twice the length of the other)</p>
<p>This spell has utterly no effect on the bones of living creatures.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Empower Familiar';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Your familiar';
        $spell->duration    = 'Concentration, up to 3 hours';
        $spell->description = "<p>Your enchant your Familiar. It gains a Competence bonus of +2 to all of his Physical Stats (STR, DEX, CON) and a +2 Dodge bonus to AC and a +2 bonus to all Saves (it can now make attacks if it couldn't before). While this spell requires Concentration, your Familiar can Concentrate on the spell for you.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase all the bonuses by +2</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 2);

        $spell              = new Spell;
        $spell->name        = 'Entangle';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Squares in a 20-foot radius burst that contain plants. 120 foot range';
        $spell->duration    = '1 minute';
        $spell->description = "<p>Plants in the area entangle creatures. Each round a creature starts its turn in the area, it must attempt a DEX Save. On a failure, it is entangled until it leaves the area, and on a critical failure, it is also immobile for 1 round. Creatures can attempt Acrobatics or Athletics checks at entangle's DC to remove these effects.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The plants grow thorns and deal 2D6 Piercing damage to all entangled.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Plant', 'Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Enthrall';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You weave a distracting string of words, causing creatures of your choice that you can see within range and that can hear you to make a WIS Save. Any creature that can’t be charmed succeeds on this Save automatically, and if you or your companions are fighting a creature, it has advantage on the save. On a failed save, the Target has disadvantage on WIS (Perception) checks made to perceive any creature other than you until the spell ends or until the Target can no longer hear you. The spell ends if you are incapacitated or can no longer speak.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>The Target is enthralled and suffers the Perception penalty as described</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Entomb in Ice';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '120 feet';
        $spell->area           = 'Up to 5 creatures, no two of which can be more than 30 ft apart';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You trap living creatures in a block of ice, suffocating them. The spell entraps the targets with a thick layer of ice from head to toe. Those that make their Save can shake off the ice immediately, though they still take 6D6 Cold damage. Otherwise, they take 2D6 Cold damage per round.</p>
<p>Other than attempting to escape, creatures entombed can perform Actions that only require mental or verbal activity. Escaping from the ice bock requires a DC 20 STR check or the application of 20 points of Fire.</p>
<dl>
    <dl>Material Components</dl> <dd>A clear gemstone with a minimum value of 500 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Epic Longevity';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Ioulaum';
        $spell->range          = '12,000 feet range';
        $spell->area           = '120-foot radius';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Special';
        $spell->description    = "<p>This spell deals 20D6 points of damage to every creature within its area. A living creature that is reduced to -10 or fewer Hit Points (or a Construct, object, or Undead that is reduced to 0 Hit Points) is utterly destroyed as if disintegrated, leaving behind only a trace of fine dust. This spell also extends the caster's current age category by 1 year for every living creature it slays.</p>
<p>The spell's duration is Instantaneous, but the age extension is Permanent.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy'], 10);

        $spell                 = new Spell;
        $spell->name           = 'Eradicate Air';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '60 foot radius burst centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A burst of force radiates from you, damaging all air creatures nearby. Any creature with the Air type within the area takes 10D6 Negative damage and is pushed back 10 feet. Creatures without the Air type are only pushed back 10 feet.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Half damage or pushed back 5 feet</dd>
    <dt>Failure</dt> <dd>Full damage/effect</dd>
    <dt>Critical Failure</dt> <dd>As Failure, if the creature has the Air type, Stunned: 1 and pushed back 20 feet, otherwise only pushed back 20 feet</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +3D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Eradicate Earth';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '60 foot radius burst centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A burst of force radiates from you, seismically damaging all Earth creatures nearby. Any creature with the Earth type within the area takes 10D6 Negative damage. Creatures without the Earth type are unaffected.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>As Failure, and also Stunned: 3</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +3D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Eradicate Fire';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '60 foot radius burst centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A burst of force radiates from you, damaging all Fire creatures nearby. Any creature with the Fire type within the area takes 10D6 Negative. Creatures without the Fire type are unaffected.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>As Failure and the creature becomes 1 size category smaller</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +3D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Eradicate Water';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '60 foot radius burst centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A burst of force radiates from you, damaging all water creatures nearby. Any creature with the Water type within the area takes 10D6 Negative. Creatures without the Water type take 1D6 Negative damage.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>As Failure, if the creature has the Water type, the creature becomes 1 size category smaller</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +3D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 3);

        $spell              = new Spell;
        $spell->name        = 'Erase';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'One scroll or two pages or normal writing';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell removes writings of either magical or mundane nature from a scroll or from one or two pages of paper, parchment, or similar surfaces. With this spell you can remove Explosive Runes, a Glyph of Warding, or other magical writings.</p>
<p>Non-magical writing is automatically erased if you touch it and no one else is holding it. Otherwise, the chance of erasing nonmagical writing is 90%. Magic writing must be touched to be erased, and you also must succeed on a Caster Level check against DC 15. If you fail to erase magical writings, then you trigger the writing if it is a trap type of writing.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Erupt';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->area           = '2,000 feet radius burst centered on you';
        $spell->targets        = 'Ground at your feet';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You draw molten lava up through the ground. Every creature within the area that fails a DEX Save takes 100 points of Fire damage and catches on fire, causing 1D6 Fire damage per round until the fire is put out. Furthermore, anyone wearing metal armor who fails their Save is also affected as though by a Heat Metal spell. Structures and unattended objects automatically take full damage (no Save). This spell leaves its entire area a blackened ruin incapable of supporting plant or animal life for a full year.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Quarter damage and not affected by Heat Metal</dd>
    <dt>Success</dt> <dd>Half damage and not affected by Heat Metal</dd>
    <dt>Failure</dt> <dd>Full damage and affected by Heat Metal</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth', 'Fire'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Erupting Earth';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Choose a point you can see on the ground within range. A fountain of churned earth and stone erupts in a 20-foot cube centered on that point. Each creature in that area must make a DEX Save. A creature takes 3D12 Bludgeoning damage. Additionally, the ground in that area becomes difficult terrain until cleared away. Each 5-foot-square portion of the area requires at least 1 minute to clear by hand.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by 1D12</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 3);

        $spell                = new Spell;
        $spell->name          = 'Eternal Sun';
        $spell->casting       = '10 minutes (Somatic, Verbal, Secondary Casters)';
        $spell->range         = '20 mile range';
        $spell->area          = '150 mile radius';
        $spell->spell_creator = 'Daelegoth Orndeir';
        $spell->duration      = 'Permanent';
        $spell->requirements  = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 100 lay worshippers (non-spellcasting worshippers) and at least 3 spell casters who must each cast Daylight</dd>
    <dt>Sacrifice</dt> <dd>7 CON damage</dd>
</dl>';
        $spell->description = "<p>This spell creates a false sun more than 2 miles overhead with a subtending of 0.5 degrees like the sun and shines with the brightness of high noon. It completely covers up the real sun for anybody within 150 miles making it impossible to see.</p>
<p>The false sun's apparent size did not change no matter how far a person went away from it, but the position gets ever lower until it sinks behind the horizon past teh 150 miles limit of the spell's area of effect.</p>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire', 'Light', 'Ritual'], 10);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 30]);

        $spell              = new Spell;
        $spell->name        = 'Ether Cyclone';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = '30 foot spherical emanation centered on you';
        $spell->duration    = '1 minute';
        $spell->description = "<p>Upon casting this spell, you detonate a small Ether Cyclone on the Ethereal Plane centered on you. Those on the Material Plane are unaffected by the Cyclone (including you if you cast it while in the Material Plane). However, all those on the Ethereal Plane within the spell's area are affected as if caught by an Ether Cyclone. The Cyclone lasts for the duration of the spell, and any who start their turn in the area on the Ethereal Plane are caught by its force-winds and potentially swept away. If you cast this spell while on the Ethereal Plane, you are also affected. Undead are not affected by this spell, nor are big ethereal objects. Unattended objects weighing 50 pounds or fewer are swept away.</p>
<dl>
    <dt>Material Components</dt> <dd>The tooth of a creature that uses the Ethereal Plane, such as a Blink Dog, Ethereal Marauder, or the claw of a Phase Spider.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Ethereal Alarm';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->area        = '30 foot radius';
        $spell->duration    = '8 hours';
        $spell->description = '<p>As the Alarm spell, but it also detects Ethereal Creatures. This spell does not grant the ability to see Ethereal creatures.</p>
<dl>
    <dt>Material Components</dt> <dd>A small silver bell worth at least 1 gp.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Permanency (Heightened +4)</dt> <dd>2,500 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Permanency', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Ethereal Mount';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = '0 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>While you are on the Ethereal Plane, you may call into being up to 2 quasi-real mounts made of Ectoplasm. These mounts only accept you and those that you designate as riders. The mounts appear as horses or any other commonly ridden mounts, but have a foggy, almost translucent nature, and their color shifts across the spectrum over time.</p>
<p>These mounts have AC 18 (-1 size, +4 Natural Armor, +5 DEX) and 25 Hit Points. They do not fight and have no attacks. If reduced to 0 Hit points, an Ethereal Mount melts into the Ethereal Fog from which it came. An Ethereal Mount has a Speed of 240 feet on the Ethereal Plane and can carry its riders weight plus 100 lbs. In the Deep Ethereal, the time to reach your destination is halved.</p>
<p>You can only cast this spell in the Ethereal Plane. The mounts cannot leave the Ethereal Plane and they dissipate if you ever leave the Ethereal Plane.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of mounts</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Creation'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Ethereal Prison';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '60 feet';
        $spell->targets        = 'One Ethereal creature';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a translucent prison of pure crystalline force around a Target in the Ethereal Plane. You must be able to see the Target.</p>
<p>The Target within the prison cannot make physical attacks or be attacked and is unaffected by most spells and supernatural abilities (Attacks with the Force and Sonic types cause the prison damage and spells that affect Ectoplasm can also affect the prison). Gaze attacks function through the walls of the prison, but the creature in the prison makes its Saves with Advantage.</p>
<p>The Target can break the prison by making a STR Check (DC 10 + your caster level). A Disintegrate spell automatically destroys the prison.</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of translucent glass</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not trapped</dd>
    <dt>Failure</dt> <dd>Trapped in the prison</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Evocation', 'Force'], 4);

        $spell              = new Spell;
        $spell->name        = 'Ethereal Sight';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = '1 hour';
        $spell->targets     = 'Self';
        $spell->description = '<p>You can see into the Ethereal Plane</p>';
        $spell->heightened  = "<dl>
    <dt>Heightened (+1)</dt> <dd>The spell's range is touch and it targets 1 creature.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Etherealness';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Self';
        $spell->duration    = 'Up to 8 hours';
        $spell->description = "<p>You step into the border regions of the Ethereal Plane, in the area where it overlaps with your current plane. You remain in the Border Ethereal for the duration or until you use your action to dismiss the spell. During this time, you can move in any direction. If you move up or down, every foot of movement costs an extra foot. You can see and hear the plane you originated from, but everything there looks gray, and you can’t see anything more than 60 feet away. While on the Ethereal Plane, you can only affect and be affected by other creatures on that plane. Creatures that aren’t on the Ethereal Plane can’t perceive you and can’t interact with you, unless a special ability or magic has given them the ability to do so. You ignore all objects and effects that aren’t on the Ethereal Plane, allowing you to move through objects you perceive on the plane you originated from. When the spell ends, you immediately return to the plane you originated from in the spot you currently occupy. If you occupy the same spot as a solid object or creature when this happens, you are immediately shunted to the nearest unoccupied space that you can occupy and take force damage equal to twice the number of feet you are moved. This spell has no effect if you cast it while you are on the Ethereal Plane or a plane that doesn't border it, such as one of the Outer Planes.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can Target 3 additional targets. The additional targets must be within 10 feet of you when you cast the spell.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation', 'Ethereal'], 7);

        $spell              = new Spell;
        $spell->name        = 'Evaliir`Enevahr';
        $spell->casting     = 'Somatic Casting, Verbal Casting, Skill Check';
        $spell->range       = '300-foot radius centered on you';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>The Song of Enevahr, Ritual of Solitude</p>
<p>This spell allows the caster to inspire allied troops and demoralize opposing armies. The only battle-intended High Magic, you must sing among the troops, songs of elven glory and the folly of the foes who oppose them.</p>
<p>This wide-ranging spell effects all sentient beings within the area.</p>
<ul>
    <li>All elves and allies gain bravery and morale boosts from the song, making them immune to Fear effects of any kind and eliminating the need for Morale checks</li>
    <li>The opponents, regardless if they understand the Elvish language or not, are infused with Fear and terror, and any effect that forces a Morale check panics them, causing them to flee in terror from you for at least one hour.</li>
</ul>
<p>You cannot cast any other spell while you are Concentrating on this spell. While you are Concentrating on this spell, you are so intimidating to all that none dare approach you, whether due to awe or fear.</p>';
        $helper->addTypesToSpell($spell, ['High Magic', 'Illusion', 'Fear'], 8);
        $spell->skills()->save(app()->skills['Performance'], ['dc' => 25, 'meta' => 'Singing']);

        $spell              = new Spell;
        $spell->name        = 'Evergreen';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->area        = '10 foot radius';
        $spell->duration    = 'Instantaneous and 6 hours';
        $spell->description = '<p>You imbue a 10-foot radius area of plant life with magical heat, instantly healing 2D8 points of Hit Points to all Plants and creatures with the Plant type. All Plants and creatures with the Plant type in the area gain immunity from Cold for the duration.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 2);

        $spell              = new Spell;
        $spell->name        = 'Everlasting Fire';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '5 feet';
        $spell->duration    = 'Permanent';
        $spell->description = "<p>This spell creates a very small gate to the Elemental Plane of Fire, calling through flame about equal to that of a torch. The flame is completely normal in all ways, except that since ti comes from the Elemental Plane of Fire, it needs no fuel and continues to burn under any circumstance - without air, underwater, when covered with sand, etc. The flame lights any flammables that touch it, and it never goes out until the duration ends or a Dispel Magic spell is used to close the gate.</p>
<p>Everlasting Fire can be cast on a mobile or stationary object, but it burns anything flammable. While this is a gate, it is only one way (from the Elemental Plane of Fire to the plane where you are). Only items of Tiny size or smaller can fit through the gate. The location of the gate on the Elemental Plane of Fire is completely random, but it will always be somewhere where flame will come through the gate.</p>
<p>It is known that Salamanders are found of trying to use these tiny gates to make their way into the Prime Material Plane. They are known to try and 'push' their young (Fire Snakes) through the gate. Must die because they are too large and the Salamanders end of crushing them. But on occasion, a small Fire Snake makes it through.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of wood soaked in lamp oil; the material is consumed during casting</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Fire', 'Ritual'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Evil Eye';
        $spell->casting        = 'Somatic Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature in range';
        $spell->duration       = 'Instantaneous (see text)';
        $spell->description    = '<p>You focus your malevolent wishes through your gaze and curse someone with bad luck. The Target makes a WIS Save or suffers a -4 penalty to all attack rolls, Saves and Checks. The spell ends at the next sunrise, when you dismiss the spell, or when you deal at least 1 point of damage to the target.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Evil Glare';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 feet';
        $spell->targets        = 'Living creature';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You gain a Gaze attack. As a Double Action, you may look at any living Target within range. If they meet your gaze, they must make a WIS Save or Frightened: 3. Targeting a creature that is already Frightened only resets their Frightened level back to 3.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the range by +15</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Frightened level by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Fear', 'Emotion'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Evolve';
        $spell->casting        = '3 hours (Material, Somatic, Verbal)';
        $spell->rarity         = 'Rare';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Permanent';
        $spell->description    = "<p>With this spell, you cause a normal animal to evolve and change into an intelligent, basically humanoid life form. By using evolve on multiple specimens, you could potentially create an entire race of creatures.</p>
<p>The animal to be affected ust be a normal, nonmagical animal. Small creatures are usually the targets of the spell, but a normal animal of any size can be used. While mammals are the best subjects, the spell can be successfully performed on all sorts of creatures, including such diverse animals as reptiles and insects. the spell does not work on plants. The animal receives a CON Save to resist the effects of this spell. The animal gains a bonus to the Save based on what kind of animal it is.</p>
<table>
    <thead>
        <tr>
            <th>Life Order</th>
            <th>Save Bonus</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Mammal</td>
            <td>+0</td>
        </tr>
        <tr>
            <td>Bird</td>
            <td>+1</td>
        </tr>
        <tr>
            <td>Reptile</td>
            <td>+2</td>
        </tr>
        <tr>
            <td>Amphibian</td>
            <td>+3</td>
        </tr>
        <tr>
            <td>Fish</td>
            <td>+4</td>
        </tr>
        <tr>
            <td>Arthropod</td>
            <td>+5</td>
        </tr>
        <tr>
            <td>Other</td>
            <td>+6</td>
        </tr>
    </tbody>
</table>
<p>If the creature fails its Save, it slowly changes to become more humanoid over the course of 3 days.</p>
<ol>
    <li>The creature grows or shrinks, approaching human size</li>
    <li>The creature approaches a human appearance. An animal with four limbs becomes one with two arms and two legs; one with a different number of limbs might have more arms, or in certain cases, more legs. A legless animal subjected to the spell might grow limbs, but instead might simply acquire a more upright appearance. If the resulting creature has hands, these are basically human in appearance; the creature's face might also approach a human countenance, to some extent. A creature without hands develops some way to manipulate objects.</li>
    <li>The creature acquires an average INT (8-10) and the ability to generate language. The being does not necessarily know anything, but has the ability to learn.</li>
    <li>The creature now has 1HD unless it already had more, then it becomes 2HD.</li>
</ol>
<p>the creature's other statistics are dependent on the exact type of creature in question and is mostly up to the DM to decide. In general, these statistics gravitate towards human norms, though natural attacks should carry through.</p>
<blockquote>
    A spider subjected to this spell might have a poison bite attack and the ability to make and move through webs. A dog used for this spell might have a bite attack and highly developed senses of hearing and smell. A frog could hop, but must stay moist.
</blockquote>
<p>The evolved creature should not have magical abilities of any kind, nor should it typically advance in any character classes.</p>
<p>As the creature evolves, it is wise to keep the creature in a secluded place, where it cannot harm itself, and where it can be observed, or possibly even comforted as it goes through such great changes.</p>
<p>The creatures overall personality is affected greatly by this formative period, and while there are no guarantees as to its disposition, it is more likely to appreciate or admire an individual who at least appears to be caring and nurturing.</p>
<p>When the evolution time is over, the creature is fully functional, able to survive and learn. An evolved creature can likely breed with others of its kind, allowing the new species to proliferate. The change cannot be reversed once completed by any magic short of a Wish.</p>
<dl>
    <dt>Material Components</dt> <dd>Besides the subject animal, a bit of organic material from the caster (such as hair or blood), a pearl worth at least 500 gp, and a miniature tool of any kind. The material components are consumed at the time the spell is cast.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Ritual'], 8);

        $spell              = new Spell;
        $spell->name        = 'Exact Shot';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Ranged weapon or ammunition touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You enchant your ranged weapon or one ammunition so that it will strike true against your Favored Enemy (this includes your Stalked Enemy and Studied Enemy). Your next Ranged attack against your Enemy gains the following.</p>
<ul>
    <li>Advantage to hit</li>
    <li>Ignores miss chance due to concealment unless they have Total Concealment.</li>
    <li>Critical Hits deal an additional Weapon Die of damage.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Exalted Fury';
        $spell->casting     = 'Verbal Casting, Sacrifice';
        $spell->area        = '200 feet emanation centered on you';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You Utter a single, awesomely powerful syllable of the Words of Creature and your body erupts with holy energy. All lower planer creatures, and undead within the area take 500 points of Positive damage. You die in the process, but can be Raised as normal.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Good'], 9);

        $spell              = new Spell;
        $spell->name        = 'Excavate';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = 'One 5-ft by 8-ft opening 20 feet deep';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>Similar to Passwall, you create a passage through wooden, plaster, or stone walls, but not through metal or other harder materials. If the wall's thickness is greater than the depth of excavation, then you create a niche or short tunnel of the specified dimensions. Several Excavate spells can be used to create a passage way through thick walls. Unlike Passwall, the passage created does not end and cannot be Dispelled. It is Permanent.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of excavated earth</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Exhaustion';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>The Target gains 1 level of Exhaustion.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No affect</dd>
    <dt>Failure</dt> <dd>Gain 1 level of Exhaustion</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 4);

        $spell              = new Spell;
        $spell->name        = 'Exorcism';
        $spell->casting     = 'Somatic Casting, Material Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>By casting this spell, you gain the following</p>
<ul>
    <li>You gain a +3 bonus to your next Save</li>
    <li>You force a being that is possessing you out of your body. The possessing spirit acts as if it had left its host voluntarily (a ghost appears next to the host, a person using magic jar returns to its receptacle if in range or dies if it is not, and so on). The possessing spirit cannot possess another for the next 3 days.</li>
    <li>This spell also grants a second Save vs all Charm effects</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>Powdered silver worth 1 gp</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>You may cast this spell on another Target with a touch.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Explosive Runes';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = 'Touch';
        $spell->area           = '10-ft radius emanation';
        $spell->targets        = 'One touched object weighing no more than 10 lbs';
        $spell->duration       = 'Permanent until discharged';
        $spell->description    = '<p>You trace mystic runes upon a book, map, scroll, or similar item bearing written information. The runes detonate when read, dealing 6D6 Force damage to all within the area. Those standing within 5 feet do not get any Save. The object the rune was written on takes the maximum amount of damage.</p>
<p>You and any creatures you specifically instruct can read the object the rune was placed upon without triggering the rune. You can also dispel the runes with an Action at any time at any distance.</p>
<p>Another creature can remove the runes with a successful Dispel Magic or Erase Spell. Failing the check cause the runes to trigger and explode.</p>
<p>Detect Magic will reveal that the object is magical, but not the Explosive Runes themselves. A DC 30 Search check can discover the runes without triggering them. And a DC 30 Disable Traps can thwart the runes so that the object can be read without triggering the runes (this does not disable the runes or end the spell).</p>
<dl>
    <dt>Material Components</dt> <dd>Rare inks worth at least 50 gp.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage (Those within 5 feet of the runes do not get a Save)</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Rune'], 3);

        $spell              = new Spell;
        $spell->name        = 'Extra Steps';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You warp time around the Target. The Target gains an additional Action. This additional Action can only be used to make a Stride or Step Action.</p>';
        $helper->addTypesToSpell($spell, ['Chronomancy'], 1);

        $spell              = new Spell;
        $spell->name        = 'Eye of Power';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 3 hours';
        $spell->description = '<p>This spell functions like Arcane Eye, except as noted here. You may also cast spells of 7th level or lower that has a Range and the Target is not Self through the eye. Any spell cast this way functions as though it had been cast from the eyes location. Unlike an Arcane Eye, an Eye of Power is visible and corporeal, so it can be destroyed. The eye is a Fine Sized object with AC 20 and 77 Hit Points. It makes Saves using your values (excluding bonuses from magical items).</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment', 'Scrying'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Eyebite';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>For the spell's duration, your eyes become an inky void imbued with dread power. One creature of your choice within 60 feet of you that you can see must succeed on a WIS Save or be affected by one of the following effects of your choice for the duration. On each of your turns until the spell ends, you can use an Action to Target another creature but can’t Target a creature again if it has Succeeded on a Save against this casting of eyebite.</p>
<dl>
    <dt>Asleep</dt> <dd>The Target falls unconscious. It wakes up if it takes any damage or if another creature uses its action to shake the sleeper awake.</dd>
    <dt>Panicked</dt> <dd>The Target is frightened of you. On each of its turns, the frightened creature must take the Dash action and move away from you by the safest and shortest available route, unless there is nowhere to move. If the Target moves to a place at least 60 feet away from you where it can no longer see you, this effect ends.</dd>
    <dt>Sickened</dt> <dd>The Target has disadvantage on attack rolls and ability checks. At the end of each of its turns, it can make another Wisdom saving throw. If it succeeds, the effect ends.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy'], 6);
    }
}
