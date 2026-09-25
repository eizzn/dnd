<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsHSeeder extends Seeder
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
        $spell->name           = 'Hail of Ectoplasm';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '30 feet';
        $spell->area           = '10-foot radius burst';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>An explosion of spheres of hardened Ectoplasm occurs from a point you designate. The sphere deals 3D6 Bludgeoning damage to all in the area who must make a DEX Save for half damage. The Ectoplasm then decays into nothingness.</p>
<dl>
    <dt>Material Components</dt> <dd>A handful of resin marbles.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half Damage</dd>
    <dt>Failure</dt> <dd>Full Damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the range</dd>
    <dt>Heightened (+1)</dt> <dd>Double the area</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ectoplasm'], 2);

        $spell              = new Spell;
        $spell->name        = 'Hallow';
        $spell->casting     = '24 hours (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->area        = '60-foot radius centered on the object you touch';
        $spell->duration    = 'Until dispelled';
        $spell->description = "<p>You touch a point and infuse an area around it with Holy or Unholy power. The area can have a radius up to 60 feet, and the spell fails if the radius includes an area already under the effect of a Hallow spell.</p>
<p>The effected area is subject to the following effects.</p>
<ul>
    <li>Celestials, Elementals, Fey, Fiends, and Undead can't enter the area, nor can such creatures Charm, Frighten, or posses creatures within it. Any creature Charmed, Frightened, or Possessed by such a creature is no longer Charmed, Frightened, or Possessed upon entering the area. You can exclude on or more of those types of creatures from this effect.</li>
    <li>
        <p>You can bind an extra effect to the area. Choose the effect from the following list, or choose an effect offered by the GM. Some of these effects apply to creatures in the area; you can designate whether the effect applies to all creatures, creatures that follow a specific deity or leader, or creatures of a specific sort, such as Orcs or Trolls. When a creature that would be affected enters the spell's area for the first time on a turn or starts its turn there, it can make a CHA Save. On a success, the creature ignores the extra effect until it leaves the area.</p>
        <ul>
            <li>Courage. Affected creatures can't be Frightened while in the area.</li>
            <li>Darkness. Darkness fills the area. Normal light, as well as magical light created by spells of a lower level that the slot you used to cast this spell, can't illuminate the area.</li>
            <li>Daylight. Bright light fills the area. Magical darkness created by spells of a lower level than the slot you used to cast this spell can't extinguish the light.</li>
            <li>Energy Protection. Affected creatures in the area have resistance to one damage type of your choice, except for Bludgeoning, Piercing, or Slashing.</li>
            <li>Energy Vulnerability. Affected creatures in the area have Vulnerability to one damage type of your choice, except for Bludgeoning, Piercing, or Slashing.</li>
            <li>Everlasting Rest. Dead bodies interred in the area can't be turned into Undead.</li>
            <li>Extradimensional Interference. Affected creatures can't move or travel using Teleportation or by Extradimensional or Interplanar means.</li>
            <li>Fear. Affected creatures are Frightened while in the area.</li>
            <li>Silence. No sound can emanate from within the area, and no sound can reach into it.</li>
            <li>Tongues. Affected creatures can communicate with any creature in the area, even if they don't share a common language.</li>
        </ul>
    </li>
</ul>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good', 'Evil', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Hallucination';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 hour';
        $spell->description = "<p>The target consistently believes one thing is another, can't detect something that's there, or detects something that\'s not there. You choose which of these options applies and determine the specifics of the hallucination. For example, you could make the target think all elves are humans, be unable to detect the presence of his brother, think his beloved pocket watch is always on his person even when it isn't, or believe there's a tower in the center of town.</p>
<p>The target can attempt a WIS Save to disbelieve the hallucination every time he Seeks or Interacts with the subject of the hallucination. For example, the target could attempt to disbelieve each time he encountered an elf, bumped into his brother accidentally, tried to check his pocket watch, or studied the tower to spot vulnerabilities. The target can attempt to disbelieve with a large circumstance bonus determined by the GM, such as if the target attempted to climb the nonexistent tower.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Choose
        <ul>
            <li>Duration 1day</li>
            <li>Targets up to 10 creatures</li>
        </ul>
    </dd>
    <dt>Heightened (+3)</dt> <dd>Choose
        <ul>
            <li>Duration unlimited</li>
            <li>Targets any number of creatures</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion'], 5);

        $spell              = new Spell;
        $spell->name        = 'Hallucinatory Terrain';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '50-foot burst. 500 foot range';
        $spell->duration    = '24 hours';
        $spell->description = "<p>You create an illusion that causes natural terrain to look, sound, feel, and smell like a different kind of terrain. This doesn't disguise any structures or creatures in the area.</p>
<p>Any creature that touches the illusion or uses the Seek Action to examine it can attempt to disbelieve the illusion.</p>";
        $spell->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>The image can also disguise structures or create illusory structures (but still doesn't disguise creatures)</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Ritual'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Halt';
        $spell->casting        = 'Verbal Casting (Reaction)';
        $spell->save_attribute = 'WIS';
        $spell->range          = '90 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '1 round';
        $spell->description    = "<p>You utter the word 'Halt!'. If the target can hear and understand the command and Fails a WIS Save, finds themself unable to take any Action that involves movement (such as Burrow, Climb, Fly or Stride).</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Cannot take any Action that involves movement (casting a spell Teleport spell does not count as a movement Action)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Auditory', 'Compulsion', 'Lingual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Hammer of Chaos';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 ft';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a field of force in the shape of a multicolored hammer that has a Fly Speed of 60 and can be moved as far away as you range. You may move the hammer as an Action, and attack with it as an Action with a Ranged Spell Attack. It deals 8D6 Chaotic damage on a hit and must make a CHA Save or be Slowed 1. Only Lawful and Neutral outsiders are harmed by this hammer.</p>';
        $spell->saves       = '<dl>
    <dt>Critical Success</dt> <dd>Not Slowed</dd>
    <dt>Success</dt> <dd>Slowed 1 for 1 turn</dd>
    <dt>Failure</dt> <dd>Slowed 2 for 2 turns</dd>
    <dt>Critical Failure</dt> <dd>Slowed 3 for 4 turns</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Chaotic', 'Evocation', 'Force'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Hand of the Faithful';
        $spell->casting        = '1 minute (Somatic, Verbal)';
        $spell->save_attribute = 'CON';
        $spell->range          = '10 feet';
        $spell->area           = '10-foot radius emanation center on a point in space within range';
        $spell->duration       = '8 hours';
        $spell->description    = "<p>You create an immobile zone of warding that is permeable to those of your religion but repeals all others. Creatures that have the same Patron Deity as you or are wearing your Patron Deity's holy symbol can enter. Other creatures that try to enter must make a CON Save or be Stunned: 1. The ward does not prevent creatures from exiting.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>May enter the area and this casting of this spell no longer restricts movement into the warded area</dd>
    <dt>Failure</dt> <dd>Cannot enter the warded area and Stunned: 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Abjuration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Handfang';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You create a fanged, biting mouth in the palm of your hand. When you lay your hand upon a creature by making a Melee Touch attack, the mouth deals 1D8 Piercing damage.</p>
<p>If you score a Critical Hit with your Melee Touch attack, you may start a Grapple as a Free Action without provoking an Attack of Opportunity. If you establish a hold, the fanged mouth sinks its teeth into the target's flesh and continues to bite for an additional 1D6 Piercing damage per round until the hold is broken or the spell ends.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Hard Water';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch, 20 cubic feet of water';
        $spell->targets     = 'Amount of water touched';
        $spell->duration    = '5 rounds';
        $spell->description = '<p>This spell turns a body of water (or part of one) into a rock-hard substance. magical, enchanted, holy, and unholy waters are not affected by this spell. The water retains its color and its content; however, it is solid for the duration of the spell.</p>
<p>Creatures embedded or partially embedded in the Hard Water (such as fish) are not injured or killed, but they cannot breathe. You can specify the depth that the hard water turns solid. For example: you can specify that the Hard Water be only 6 inches thick, thus hardening up to the maximum area, but only 6 inches think.</p>
<dl>
    <dt>Material Components</dt> <dd>A flask of water and a stone</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by 5 rounds</dd>
    <dt>Heightened (+2)</dt> <dd>Double the amount of water affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 5);

        $spell              = new Spell;
        $spell->name        = 'Hardening';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One item of a volume no greater than 100 cu. feet';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You touch an item and its Hardness is increased by +4. An item already under the effects of this spell takes the greater Hardness bonus.</p>
<dl>
    <dt>Material Components</dt> <dd>The item to be Hardened</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the maximum volume</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>The additional Hardness in increased by +2</dd>
    <dt>Permanency (Heightened +4)</dt> <dd>2 CON Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Permanency'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Harm';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You unleash a virulent disease on a creature that you can see within range. The target must make a CON Save and takes 14D6 Negative damage. The damage can't reduce the target's hit points below 1.</p>";
        $spell->saves          = "<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage. The damage can't reduce the target's Hit Points below 1</dd>
    <dt>Critical Failure</dt> <dd>As failure and the target's Hit Point maximum is reduced for 1 hour by an amount equal to the damage. This effect can be removed by any effect that can remove a disease</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 6);

        $spell              = new Spell;
        $spell->name        = 'Harmonic Chorus';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One living creature';
        $spell->duration    = 'Sustained, up to 5 rounds';
        $spell->description = '<p>This spell lets you improve the spellcasting ability of another spellcaster. For the duration, any spell cast by the target is Heightened by +1. <strong>Sustain:</strong> On each of your turns after the turn you cast this spell, you must spend 1 Action to sustain it. If you do not, the spell ends.</p>
<dl>
    <dt>Heightened (+1)</dt> <dd>A tuning fork</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Any spell the target casts does not require the Material Casting instead of any other benefit.</dd>
    <dt>Heightened (+3)</dt> <dd>Any spell the target casts of 4th level or lower does not require the Somatic Casting Verbal Casting instead of any other benefit.</dd>
    <dt>Heightened (+4)</dt> <dd>Any spell the target casts of 5th level or lower does not require the Somatic Casting Verbal Casting instead of any other benefit.</dd>
    <dt>Heightened (+5)</dt> <dd>Any spell the target casts of 6th level or lower does not require the Somatic Casting Verbal Casting instead of any other benefit.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless', 'Auditory', 'Sustained'], 1);

        $spell              = new Spell;
        $spell->name        = 'Harmonic Void';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '60-foot radius emanation centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 5 rounds';
        $spell->description = '<p>You play jarring, discordant noises, making it difficult for others in the area to concentrate. Any creature that attempts to cast a spell with a Verbal Casting component must make a Concentration check (DC 20 + your CHA modifier).</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Auditory'], 5);

        $spell              = new Spell;
        $spell->name        = 'Harmony';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '';
        $spell->description = "<p>When you play your instrument, sing your song, recite your epic poem, or speak your words of encouragement, you fill your allies with greater confidence than normal. When under the effect of this spell, you grant a +4 morale bonus on Saves against Charm and Fear effects and a +1 morale bonus on Attack and Damage rolls when you use your inspire courage bardic ability.</p>
<p>The effects lasts as long as the effect of your inspire courage lasts. If you don't begin to inspire courage within 1 minute of casting this spell, the effects of Harmony ends.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Compulsion', 'Sonic'], 1);

        $spell              = new Spell;
        $spell->name        = 'Haste';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The target acts faster. It gains the Quick Condition and can use the extra Action each round only for Strike and Stride Actions.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can also use the extra Action for Somatic Casting Actions</dd>
    <dt>Heightened (+4)</dt> <dd>You can target up to 5 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Chronomancy'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Haunt Shift';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '120 feet';
        $spell->targets        = 'Undead creatures within a 40-foot radius burst';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This spell translates corporeal and incorporeal undead into haunting presences. It converts 15 HD worth of undead creatures with no undead having more than half than the maximum HD (in this case 7 HD), affecting undead with the fewest HD first, and when creatures with the same HD are considered, choose the one closest to the point where the spell takes effect.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of powdered skull</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Enchantment'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Haunting Tune';
        $spell->casting        = '1 full round (Somatic Casting, Verbal Casting)';
        $spell->range          = '150 feet';
        $spell->targets        = 'Up to 5 targets in range';
        $spell->save_attribute = 'CHA';
        $spell->duration       = '30 minutes';
        $spell->description    = '<p>Your song or poem causes a deep depression in intelligent creatures. Any creature with INT 10 or higher is Shaken (-2 moral penalty on Attack rolls, Damage rolls, and Saves).</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Sonic'], 3);

        $spell              = new Spell;
        $spell->name        = 'Hawkeye';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>For the Duration, you gain a +1 bonus on all Ranged attacks.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell              = new Spell;
        $spell->name        = 'Heal';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Choose a creature that you can see within range. A surge of Positive energy washes through the creature, causing it to regain 70 hit points. This spell also ends Blindness, Deafness, and any Diseases affecting the target. This spell has no effect on constructs or undead.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the healing by 10 points</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Positive'], 6);

        $spell              = new Spell;
        $spell->name        = 'Heal Animal Companion';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Your Familiar, Animal Companion, or Special Mount touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell functions like Heal, except that you can only cast it on your Familiar, Animal Companion, or Special Mount.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Positive'], 3);

        $spell              = new Spell;
        $spell->name        = 'Healing Circle';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->area        = '5-foot radius emanation';
        $spell->targets     = 'Self';
        $spell->duration    = 'Sustained, up to 10 minutes';
        $spell->description = '<p>You create an area of healing. All those in the area gain 2 Hit Points per round. <strong>Sustain:</strong> On each of your turns after the turn you cast this spell, you must spend 1 Action to sustain it. If you do not, the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Positive', 'Sustained'], 5);

        $spell              = new Spell;
        $spell->name        = 'Healing Tree';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Self and Touched tree';
        $spell->duration    = 'Up to 1 day';
        $spell->description = '<p>You enter a normal tree, which must be large enough to accommodate your body in all three dimensions. You can remain hidden within it for as long as you desire, up to the Duration.</p>
<p>While you remain inside the tree, it nourishes and heals you. You have no need to breathe or eat, and you regain Hit Points equal to your Character Level each hour. If you remain for a day or more, you gain the benefits of a Heal Spell.</p>
<p>The tree also grants you Total Cover, and protects you from extreme heat or cold, rain, sunlight, snow, and all other environmental conditions.</p>
<p>You can hear but not see what occurs outside the tree.</p>
<p>Minor physical damage to the tree does not harm you , but its partial destruction (to the extent that you no longer fit within it) expels you and deals you 5D6 Damage.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Healing'], 4);

        $spell              = new Spell;
        $spell->name        = 'Healing Spirit';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '1 hour';
        $spell->description = "<p>A 1-foot-diameter ball of light appears and moves by your command, healing those it touches.</p>
<p>You conjure an incorporeal object of magical energy that appears in any square within range. This healing spirit resembles a 1-foot-diameter ball of light. It sheds bright illumination in a 10-foot radius and shadowy illumination for another 20 feet.</p>
<p>A healing spirit cannot be affected by attacks or spells.</p>
<p>A healing spirit flies at a speed of 30 feet with perfect maneuverability.</p>
<p>In the round you cast the spell and as an Action on your turn, you can direct the healing spirit to move and touch a creature by entering its space. The spirit's touch carries positive energy, healing a living creature of 1D8 points of damage. Since undead are powered by negative energy, a healing spirit damages them instead of healing them. The spirit can affect an unwilling target (such as an undead) by succeeding on a touch attack, using your base attack bonus and a STR bonus of +0.</p>
<p>If a healing spirit travels farther from you than the spell's range, it winks out of existence and the spell ends.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Spirit'], 2);

        $spell              = new Spell;
        $spell->name        = 'Healthful Rest';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->targets     = '2 creatures, no two of which can be more than 30 feet apart';
        $spell->duration    = 'Concentration, up to 24 hours';
        $spell->description = '<p>This spell doubles the targets natural healing rate. Each target regains twice the Hit Points, and Ability Scores during a Long Rest.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Heart of Air';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You feel light as a feather, as if the slightest breeze might knock you over. This spell converts parts of your body into elemental air, freeing you somewhat from the bonds of gravity. You gain the following.</p>
<ul>
    <li>You gain a +10 Enhancement bonus on all Jump checks.</li>
    <li>If you have a Fly Speed, it is increased by +10</li>
    <li>As an Action, you may activate an effect similar to the spell Feather Fall on yourself at will</li>
</ul>
<p>If this spell is active at the same time as Heart of Earth, Heart of Fire, or Heart of Water, you gain 10 Temporary Hit Points. If all 4 spells are active at the same time, you also gain Resistance to Bludgeoning, Piercing, and Slashing damage.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 2);

        $spell              = new Spell;
        $spell->name        = 'Heart of Earth';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You feel your flesh strengthen with the power of stone. This spell converts part of your body into elemental earth, which toughens you. You gain the following.</p>
<ul>
    <li>You gain a +8 bonus on checks to resist Bull Rush, Overrun, and Trip attacks.</li>
    <li>You gain a +4 bonus to CON</li>
    <li>As an Action, you may activate an effect similar to Stoneskin on yourself at will</li>
</ul>
<p>If this spell is active at the same time as Heart of Air, Heart of Fire, or Heart of Water, you gain 10 Temporary Hit Points. If all 4 spells are active at the same time, you also gain Resistance to Bludgeoning, Piercing, and Slashing damage.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 4);

        $spell              = new Spell;
        $spell->name        = 'Heart of Fire';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You feel a sudden flame burning within you. This spell converts part of your body into elemental fire, which speeds you step and toughens your flesh. You gain the following.</p>
<ul>
    <li>You gain a +10 foot enhancement bonus to your land speed</li>
    <li>Resistance to Fire. If the fire damage is less than 10, then you take no damage</li>
    <li>As an Action, you may activate an effect similar to Fire Shield on yourself at will</li>
</ul>
<p>If this spell is active at the same time as Heart of Air, Heart of Earth, or Heart of Water, you gain 10 Temporary Hit Points. If all 4 spells are active at the same time, you also gain Resistance to Bludgeoning, Piercing, and Slashing damage.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Heart of Ice';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>This spell requires intense concentration and can only be delivered by touch, requiring a successful Melee Spell attack. On a hit, victims turn black, are covered by a thin sheen of white frost, and begins to shiver uncontrollably (target is restrained).</p>
<p>A creature restrained by this spell must make a CON Save at the end of each of its turns, taking 2D6 Cold damage on a Failed Save, and no damage on a Successful Save. If it successfully Saves against the spell 3 times, the spell ends. If it fails its Save 3 times, its heart freezes and shatters, and it dies. The successes and failures don't need to be consecutive. Keep track of both until the target collects three of a kind.</p>
<p>Creatures with Cold immunity or lacking a heart are not affected by this spell. Creatures with Cold Resistance gain Advantage on their Saves.</p>
<dl>
    <dt>Material Components</dt> <dd>A shard of ice, glass, or crystal.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 7);

        $spell              = new Spell;
        $spell->name        = 'Heart Sight';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>The touched creature and you magically know the creature's current emotional state. If the target fails a DC 10 CHA Save, you also know the creature's alignment. Celestials, Fiends, and Undead automatically fail this Save.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Fey'], 3);

        $spell               = new Spell;
        $spell->name         = 'Heart of Stone';
        $spell->casting      = '1 hour (Material, Somatic, Verbal, Secondary Caster, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 1 other spell caster who must cast Investiture of Earth</dd>
    <dt>Ability Damage</dt> <dd>10 CON Damage</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = '1 year';
        $spell->description  = "<p>You exchange your own living heart for a finely crafted heart of perfect, unblemished stone, altering the very nature of your body. Your living heart can then be stored or hidden anywhere you like, where it continues to beat for the duration of the spell. You gain the following.</p>
<ul>
    <li>Resistance to Bludgeoning, Piercing, Slashing, Acid, Cold, Electricity, Fire, and Sonic</li>
    <li>Immunity to Poison, and Disease</li>
    <li>You do not need to breath</li>
    <li>Your rate of natural healing is slowed to only 1 Hit Point per day.</li>
    <li>Healing spells heal you 1 Hit Point less (minimum 0)</li>
    <li>Your own living heart is vulnerable to attack. If it is damage or destroyed, you are instantly slain.</li>
</ul>
<p>Heart of stone can be dispelled, in which case your own living heart instantly returns to its proper place while the stone heart is transported to the place where you left your own heart.</p>
<p>Your heart and the stone heart likewise switch places if you enter an antimagic field (temporarily negating the spell's effects), but the spell resumes when you leave it.</p>
<p>Stone to flesh can also end the spell, though you get a CON Save to resist.</p>
<dl>
    <dt>Material Components</dt> <dd>A carved stone heart of exceptional quality (jade, obsidian, or gold-veined marble) worth 5,000 gp.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy'], 6);

        $spell              = new Spell;
        $spell->name        = 'Heart of Water';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>The crashing of waves echoes in your ears. This spell converts part of your body into elemental water, which makes you better able to navigate aquatic environments and slip through confined spaces. You gain the following.</p>
<ul>
    <li>You gain a Swim Speed equal to your Land Speed, and a +8 bonus to Swim checks.</li>
    <li>You can breathe water</li>
    <li>You gain a +5 Enhancement bonus to Escape Artist checks</li>
    <li>You can as an Action, you can activate an effect similar to Freedom of Movement on yourself at will.</li>
</ul>
<p>If this spell is active at the same time as Heart of Air, Heart of Earth, or Heart of Fire, you gain 10 Temporary Hit Points. If all 4 spells are active at the same time, you also gain Resistance to Bludgeoning, Piercing, and Slashing damage.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 3);

        $spell              = new Spell;
        $spell->name        = "Heart's Ease";
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '0';
        $spell->area        = '30-foot emanation centered on you';
        $spell->targets     = 'One creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>Heart's Ease cures emotional wounds. This spell cures the following.</p>
<ul>
    <li>Fear and despair</li>
    <li>Confusion</li>
    <li>Insanity</li>
    <li>Any lingering psychological effects of torture</li>
    <li>Restores up to 2 Ability Score damage to one Ability Score</li>
</ul>
<p>The target is left feeling refreshed and at peace.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Heartache';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 feet';
        $spell->targets        = 'One living creature in range';
        $spell->duration       = '1 round';
        $spell->description    = "<p>You fill the target's heart with heart-wrenching sorrow. The target is Stunned: 1 if they Fail their WIS Save.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Stunned: 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Auditory', 'Emotion'], 1);

        $spell              = new Spell;
        $spell->name        = 'Heat Metal';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One metal object within range';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>Choose a manufactured metal object, such as a metal weapon or a suit of heavy or medium metal armor, that you can see within range. You cause the object to glow red-hot. Any creature in physical contact with the object takes 2D8 Fire damage when you cast the spell. Until the spell ends, you can use an Action on each of your subsequent turns to cause this damage again. If a creature is holding or wearing the object and takes the damage from it, the creature must succeed on a CON Save or drop the object if it can. If it doesn't drop the object, it has a -2 penalty on attack rolls and ability checks until the start of your next turn.</p>
<p>This spell Counters and is Countered by Chill Metal.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by 1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 2);
        $spell->materials()->save(Material::where('name', 'Iron')->firstOrFail(), ['meta' => 'A small piece, along with an open flame']);

        $spell                 = new Spell;
        $spell->name           = 'Heatstroke';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '120 feet';
        $spell->targets        = 'One living creature';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>The heat of the sun beats down hard on the target. If the target Fails their CON Save, they become Fatigued. If they are already Fatigued, they become Exhausted instead. The target takes 2D6 Non-lethal Fire damage. A creature wearing Heavy Armor suffers a -4 penalty to the Save.</p>
<p>This spell only works outdoors in a dry environment (like a desert).</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>2D6 Non-lethal Fire damage (-4 penalty on Save if wearing Heavy Armor)</dd>
    <dt>Failure</dt> <dd>As Success and Fatigued. If already Fatigued, then gain a level of Exhaustion instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Fire'], 3);

        $spell                = new Spell;
        $spell->name          = 'Hearty Heave';
        $spell->casting       = 'Somatic Casting';
        $spell->range         = '10 feet';
        $spell->spell_creator = 'Theskyn';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>This spell provides you with a bit of breathing room when you are threatened by swarming foes. When you cast the spell, you project a blast of concentric force that pushes away creatures surrounding you. Each creature is affected as if it had been subjected to a Bull Rush Talent by a foe of Large size with a STR score equal to 25, and the attacker had the attacker had moved with the target (though you need not move at all). Movement caused by this spell does not provoke Attacks of Opportunity. Creatures grappling you are not affected by this spell.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 2);

        $spell                 = new Spell;
        $spell->name           = "Heaven's Trumpet";
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '120-foot radius burst centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You produce a blast of must of utter clarity, piercing beauty, paralyzing awe. All foes within 120 feet of you must make a CON Save or be Paralyzed for 3 rounds.</p>
<dl>
    <dt>A masterwork trumpet, which you must blow.</dt>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Paralyzed: 3</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic', 'Good'], 5);

        $spell              = new Spell;
        $spell->name        = 'Heavenly Host';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = '120 feet';
        $spell->duration    = '3 hours';
        $spell->description = '<p>This spell summons a host of archons from the Seven Heavens of Celestial. When the spell is complete, the following creatures appear to serve you.</p>
<dl>
    <dt>Immediately</dt> <dd>8 Lantern Archons</dd>
    <dt>10 minutes later</dt> <dd>4 Hound Archons</dd>
    <dt>20 minutes later</dt> <dd>2 Justice Archons</dd>
    <dt>30 minutes later</dt> <dd>1 Warden Archon</dd>
</dl>
<p>The archons attack obviously evil creatures (such as Demons, Devils, and Yugoloth), if non are present, they will gather to defend you. You may use an Action to give them orders, which they will do their best to follow. As an Action, you may dismiss them singly or in groups.</p>
<p>These archons are expecting to be summoned into battle, and will be disappointed if summoned for lesser purposes. It is possible that no archon will answer this spell if continued to be abused.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Good', 'Lawful', 'Archon', 'Exalted'], 9);

        $spell              = new Spell;
        $spell->name        = 'Hellish Horde';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = '120 feet';
        $spell->duration    = '3 hours';
        $spell->description = '<p>This spell summons a horde of devils from the Nine Hells of Baator. When the spell is complete, the following creatures appear to serve you.</p>
<dl>
    <dt>Immediately</dt> <dd>10 Imps</dd>
    <dt>10 minutes later</dt> <dd>5 Spinagons</dd>
    <dt>20 minutes later</dt> <dd>4 Barbazus</dd>
    <dt>30 minutes later</dt> <dd>3 Hamatulas</dd>
</dl>
<p>The devils attack obviously good creatures (such as Archons, Eladrin, and Guardinals), if non are present, they will pillage and plunder, looking for anything to enrich and empower them selves. You may use an Action to give them orders, which they will do their best to follow. As an Action, you may dismiss them singly or in groups.</p>
<p>These devils are expecting to be summoned for personal gain, and will be disappointed if summoned for lesser purposes. It is possible that no devil will answer this spell if continued to be abused.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Evil', 'Lawful', 'Devil', 'Vile'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Hellish Rebuke';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You point your finger, and the creature that damaged you is momentarily surrounded by hellish flames. The creature must make a DEX Save or take 2D10 Fire damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 1);

        $spell              = new Spell;
        $spell->name        = 'Helping Hand';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '5 miles';
        $spell->duration    = '8 hours';
        $spell->description = "<p>You create a ghostly image of a hand, which you can send to find a creature within Range. The hand then beckons to that creature and leads it to you if the creature is willing to follow.</p>
<p>When the spell is cast, the hand appears in front of you. You then specify a person (or any creature) by physical description, which can include race, gender, and appearance but not ambiguous factors such as level, alignment, or class. When the description is complete, the hand streaks off in search of a subject that fits the description. The amount of time it takes to find the subject depends on how far away they are.</p>
<p>Once the hand locates the subject, it beckons the creature to follow it. If the subject does so, the hand points in your direction, indicating the most direct feasible route. The hand hovers 10 feet in front of the subject, moving before it at a Fly Speed of up to 90. Once the hand leads the subject back to you, it disappears.</p>
<p>The subject is not compelled to follow the hand or act in any particular way toward you. If the subject chooses not to follow, the hand continues to beckon for the duration of the spell, then disappears. If the spell expires while the subject is en route to you, the hand disappears; the subject must then rely on her own devices to locate you.</p>
<p>If more than one subject in Range meets the description, the hand locates the closest creature. If that creature refuses to follow the hand, the hand does not seek out a second subject.</p>
<p>If, at the end of 4 hours of searching, the hand has found no subject that matches the description within Range, it returns to you, displays an outstretched palm (indicating that no such creature was found), and disappears.</p>
<p>The ghostly hand has no physical form. It is invisible to anyone except you and a potential subject.</p>
<p>It cannot engage in combat or execute any other task aside from locating a subject and leading it back to you. The hand can't pass through solid objects but can ooze through small cracks and slits.</p>
<p>The hand cannot travel beyond the Range from the spot it appeared when you cast the spell.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Range</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell                 = new Spell;
        $spell->name           = "Herald's Call";
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '30 ft radius emanation';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 round';
        $spell->description    = "<p>You produce a crowd-stopping shout that holds an air of authority others find difficult to ignore. The spell affects only those creatures that have 5 HD or less. Anyone affected is Dazed for 1 round.</p>
<p>Creatures beyond the radius of the burst may hear the shout, but don't become Dazed.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Dazed 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = "Hero's Feast";
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You bring forth a great feast, including magnificent food and drink. The feast takes 1 hour to consume and disappears at the end of that time, and the beneficial effects don’t set in until this hour is over. Up to twelve other creatures can partake of the feast.</p>
<p>A creature that partakes of the feast gains several benefits. The creature is cured of all diseases and poison, becomes immune to poison and being frightened, and makes all WIS Save with a +3 bonus. Its hit point maximum also increases by 2d10, and it gains the same number of hit points. These benefits last for 24 hours.</p>
<dl>
    <dt>Material Components</dt> <dd>A gem-encrusted bowl worth at least 1,000 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ritual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Heroics';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Living humanoid touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>This spell temporarily grants a Feat from the Fighter Class list to the target. The target must qualify for all of the Feats requirements.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of a weapon or armor that has been used in combat by a character with at least 10 levels of Fighter</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Heightened (+2)</dt> <dd>The target gains an additional Feat.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Heroism';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One humanoid creature';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You tap the target's inner heroism, granting it a +1 conditional bonus to attack rolls, Perception checks, saving throws, and skill checks.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The conditional bonus increases to +2.</dd>
    <dt>Heightened (+5)</dt> <dd>The conditional bonus increases to +3.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Hex';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'CHA';
        $spell->targets        = 'One creature';
        $spell->duration       = 'Based on Save';
        $spell->description    = '<p>You curse the target. The target has Disadvantage on all attack rolls and skill checks.</p>
<p>You may only have one target that is hexed at a time.</p>';
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <ddt>No effect</ddt>
    <dt>Success</dt> <dd>Until the start of the target's next turn</dd>
    <dt>Failure</dt> <dd>For 3 rounds</dd>
    <dt>Critical Failure</dt> <dd>For 10 rounds</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Hibernate';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living willing creature touched';
        $spell->duration    = 'Up to 3 months';
        $spell->description = '<p>You put the target creature into a state of suspended animation, slowing its life function to almost imperceptible levels and allowing a creature to survive for months without food or water.</p>
<p>This suspension of life functions automatically stabilizes a dying creature, and it can save starving or dehydrated creatures from death. Creatures affected by a Hibernate spell have a slower metabolism, healing wounds at a rate of just 10 Hit Points per week.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 5);

        $spell              = new Spell;
        $spell->name        = 'Hidden Spring';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->duration    = '24 hours';
        $spell->description = "<p>You spend 1 hour in quiet meditation, holding the focus component in both hands and walking around a natural area. You are simultaneously drawn to areas of natural moisture while drawing that moisture closer.</p>
<p>As the spell's casting time concludes, you thrust the focus component into the ground. From that point, a fresh, clean water trickles forth at a rate of 1 gallon every 10 minutes. You cannot cast this spell inside a building or in an area of worked stone, but you can cast it underground. You cannot cast this spell within 1 mile of an existing hidden spring.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Hide from Animals';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Up to 2 creatures touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>Creatures with the Animal type cannot see, hear, or smell the target creature. Even extraordinary or supernatural sensory abilities such as Blindsight, Scent, and Tremorsense. Animals simply act as though the target creature is not there.</p>
<p>If a warded creature touches an animal or attacks any creature, even with a spell, the spell ends for all targets.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor', 'Mental'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Hide from Dragons';
        $spell->casting        = 'Material Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->rarity         = 'Rare';
        $spell->targets        = 'Self';
        $spell->duration       = '30 minutes';
        $spell->description    = '<p>While you are under the effect of this spell, dragons cannot see, hear, or smell you. Even extraordinary and supernatural sensory abilities such as Blindsight, Scent, and Tremorsense.</p>
<p>If you touch a dragon or attack any creature, even with a spell, the spell ends. If a dragon learns of your location by other means (such as if someone were to tell the dragon), then the dragon may attempt to attack you, but you still have Total Concealment against the dragon.</p>
<dl>
    <dt>Material Components</dt> <dd>An eye lash from an Adult or older dragon</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Can sense the you</dd>
    <dt>Failure</dt> <dd>Cannot sense you</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor', 'Mental'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Hide from Undead';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = 'Touch';
        $spell->targets        = 'Two creatures touched';
        $spell->duration       = '30 minutes';
        $spell->description    = '<p>Creatures with the Undead type cannot see, hear, or smell the target creature. Even extraordinary or supernatural sensory abilities such as Blindsight, Scent, and Tremorsense. Undead simply act as though the target creature is not there. Intelligent Undead receives a CHA Save to resist this effect.</p>
<p>If a warded creature touches an undead or attacks any creature, even with a spell, the spell ends for all targets.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>If the undead is intelligent, it is not affected by this spell</dd>
    <dt>Failure</dt> <dd>Cannot sense the target</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Illusion', 'Glamor', 'Mental'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Hideous Laughter';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>A creature of your choice that you can see within range perceives everything as hilariously funny and falls into fits of laughter if this spell affects it. The target must succeed on a WIS Save or fall prone, becoming incapacitated and unable to stand up for the duration. A creature with an Intelligence score of 4 or less isn’t affected.</p>
<p>At the end of each of its turns, and each time it takes damage, the target can make another WIS Save. The target has advantage on the Save if it's triggered by damage. On a success, the spell ends.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect, or the spell ends</dd>
    <dt>Failure</dt> <dd>Target becomes incapacitated and unable to stand for the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 1);
        $spell->materials()->save(Material::where('name', 'Monster Feathers')->firstOrFail(), ['meta' => 'Any common feather will do']);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'Tiny tarts. Waved in the air along with the feathers']);

        $spell              = new Spell;
        $spell->name        = 'Hindsight';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->area        = '60-foot radius emanation centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You can see and hear into the past, getting a look at events that happened previously at your current location. The level of detail you see and hear by means of this spell depends on the span of time you wish to observe.</p>
<p>You can view only one span of time per casting, choosing one from the following.</p>
<dl>
    <dt>Days</dt> <dd>You sense the events of the past, stretching back up to 7 days. You gain detailed knowledge of the people, conversations, and events that transpired.</dd>
    <dt>Weeks</dt> <dd>You gain a summary of the events of the past, stretching 7 weeks. Exact wording and details are lost, but you know all the participants and the highlights of the conversations and events that took place.</dd>
    <dt>Years</dt> <dd>You gain a general idea of the events of the past, stretching back 7 years. You notice only noteworthy events such as deaths, battles, scenes of great emotion, important discoveries, and significant happenings.</dd>
    <dt>Centuries</dt> <dd>You gain a general idea of the events of the past, stretching back 7 centuries.</dd>
</dl>
<p>You notice only the most remarkable of events: coronations, deaths of important personages, major battles, and other truly historic happenings.</p>
<dl>
    <dt>Material Components</dt> <dd>An hourglass-shaped diamond with at least 1,000 gp (not consumed)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 6);

        $spell              = new Spell;
        $spell->name        = 'Hold Metal';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '15 ft emanation, centered at a point within 10 feet';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell causes all ferrous metal within the area of effect to be held fast. Swords being swung, pendulums arcing, and other metallic objects stop in midair. While the metal objects can be touched, they cannot be moved for the duration of the spell (it is as if the metal weighed tons or was held fast).</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the area by 10 feet</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Hold Person';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '90 feet';
        $spell->targets        = 'One humanoid creature within range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Choose a humanoid that you can see within range. The target must succeed on a WIS Save or be paralyzed for the duration. At the end of each of its turns, the target can make another WIS Save. On a success, the spell ends on the target.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Paralyzed. Make another Save check next turn or until dispelled</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target an additional target. The targets must be within 30 feet of each other when you target them</dd>
    <dt>Heightened (+3)</dt> <dd>You may target any creature type. The spell has no effect on undead</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);
        $spell->materials()->save(Material::where('name', 'Iron')->firstOrFail(), ['meta' => 'A small, straight piece']);

        $spell                 = new Spell;
        $spell->name           = 'Hold Undead';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '90 feet';
        $spell->save_attribute = 'CHA';
        $spell->targets        = 'Up to 3 undead creatures, no two of which can be more than 30 feet apart';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>This spell renders as many as three undead creatures immobile. Non-intelligent undead creatures do not get a Save while intelligent undead do. Otherwise, this spell functions like the Hold Person spell.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Intelligent undead are not affected. Un-intelligent undead do not get a Save</dd>
    <dt>Failure</dt> <dd>Paralyzed. Make another Save check next turn or until dispelled</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target an additional 3 targets. The targets must be within 30 feet of each other when you target them</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Holy Aura';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'Self';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Divine light washes out from you and coalesces in a soft radiance in a 30-foot radius around you. Creatures of your choice in that radius when you cast this spell shed dim light in a 5-foot radius and have Advantage on all Saves, and other creatures have Disadvantage on attack rolls against them until the spell ends. In addition, when a fiend or an undead hits an affected creature with a melee attack, the aura flashes with brilliant light. The attacker must succeed on a CON Save or be Blinded until the spell ends.</p>
<ul>
    <li>+3 Deflection bonus to AC</li>
    <li>+3 Resistance bonus to all Saves</li>
    <li>You are treated as having the Improved Evasion feat against all spells cast by Evil outsiders and all spell effects that are from an Evil source.</li>
    <li>Protection from Possession and Mental Influence</li>
    <li>If an Evil creature succeeds on a Melee attack against the target of the Holy Aura, the Evil creature is Blinded as the Blindness spell, CON Save negates.</li>
</ul>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The Evil creature is not Blinded</dd>
    <dt>Failure</dt> <dd>The Evil creature is Blinded</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Good'], 7);
        $spell->materials()->save(Material::where('name', 'Reliquary')->firstOrFail(), [
            'price' => '1,000 gp',
            'meta'  => "A tiny reliquary containing a sacred relic, such as a scrap of cloth from a saint's robe or a piece of parchment from a religious text.",
        ]);

        $spell              = new Spell;
        $spell->name        = 'Holy Stars of Mystra';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a glowing mote of energy that stays near your shoulder, providing light equal to a candle. It has three functions, and you can designate which function to activate as a Free Action on your turn,</p>
<dl>
    <dt>Spell Turning</dt> <dd>The star can turn four to seven spell levels (1D4 +3) Spell Levels as the Spell Turning spell. Any Spell Levels turned are gone for the remainder of the spell (the Holy Stars of Mystra) does not recover these spent levels every time you choose this function). If all Spell Levels are expended, this function no longer words but the other functions do.</dd>
    <dt>Cover</dt> <dd>The star gives you a +7 Cover bonus to AC without affecting your Actions.</dd>
    <dt>Fire Bolt</dt> <dd>The star lashes out with a beam of energy as a Ranged Touch Attack against a creature up to 90 feet away, dealing 1D4 +10 Fire damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Abjuration'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Holy Weapon';
        $spell->casting        = 'Somatic Casting';
        $spell->targets        = 'Touched weapon';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 hour';
        $spell->description    = '<p>You imbue a weapon you touch with holy power. Until the spell ends, the weapon emits bright light in a 30—foot radius and dim light for an additional 30 feet. In addition, weapon attacks made with it deal an extra 2D8 Positive damage on a hit. If the weapon isn’t already a magic weapon, it becomes one for the duration.</p>
<p>As an Action on your turn, you can dismiss this spell and cause the weapon to emit a burst of radiance. Each creature within 30 feet of you must make a CON Save. On a failed save, a creature takes 4D8 Positive damage, and it is blinded for 1 minute. A blinded creature can make a CON Save, ending the effect on itself on a success.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage from the burst attack, and not Blinded</dd>
    <dt>Failure</dt> <dd>Full damage and is blinded</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Positive', 'Light', 'Bless'], 5);

        $spell              = new Spell;
        $spell->name        = 'Holy Word';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '40 ft radius centered on you';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Any non-good creature within the area suffers the following effects.</p>
<table>
    <thead>
        <tr>
            <th>HD</th>
            <th>Effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Equal to caster level</td>
            <td>Deafened: 2 rounds</td>
        </tr>
        <tr>
            <td>Up to caster level -1</td>
            <td>Blinded: 3 rounds, Deafened: 2 rounds</td>
        </tr>
        <tr>
            <td>Up to caster level -5</td>
            <td>Paralyzed: 1 minute, Blinded: 3 rounds, Deafened: 2 rounds</td>
        </tr>
        <tr>
            <td>Up to caster level -10</td>
            <td>Killed, Paralyzed: 1 minute, Blinded: 3 rounds, Deafened: 2 rounds</td>
        </tr>
    </tbody>
</table>
<p>The effects are cumulative and concurrent.</p>
<p>Furthermore, if you are on your home plane when you cast this spell, nonlawful extraplanar creatures within the area are instantly banished back to their home planes. Creatures so banished cannot return for 24 hours. The banishment takes place regardless of whether the cureatures hears the blasphemy. The banishment effect allows a WIS Save to resist.</p>
<p>Creatures whose Hit Dice exceeds your caster level are unaffected by this spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Horrible Taste';
        $spell->casting        = 'Free Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>Drawing upon the talents of some creatures of the insect world, you change your flesh to make it unpalatable to other creatures. Any creature that hits you with a bite attack becomes nauseated until the end of your next turn unless it succeeds on a CON Save.</p>
<p>Creatures immune to poise are unaffected by this spell.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Nauseated 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Horrid Wilting';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30-foot cube. 150 foot range';
        $spell->save_attribute = 'CON';
        $spell->spell_creator  = 'Abi-Dalzim';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You draw the moisture from every creature in a 30-foot cube centered on a point you choose within range. Each creature in that area must make a CON Save. Constructs and undead aren’t affected, and plants and water elementals make this Save with disadvantage. A creature takes 12D8 Negative damage.</p>
<p>Nonmagical plants in the area that aren't creatures, such as trees and shrubs, wither and die instantly.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Water'], 8);

        $spell              = new Spell;
        $spell->name        = 'House of Imaginary Walls';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '1 round';
        $spell->description = "<p>You mime an invisible 10-foot by 10-foot wall adjacent to you and within your reach. The wall is solid to those creatures that don't disbelieve it, even incorporeal creatures. You and your allies can voluntarily believe the wall exists to continue to treat it as solid, for instance to climb onto it.</p>";
        $helper->addTypesToSpell($spell, ['Illusion'], 3);

        $spell              = new Spell;
        $spell->name        = 'Humanoid Form';
        $spell->casting     = 'Somatic Casting';
        $spell->duration    = '10 minutes or until dismissed';
        $spell->targets     = 'Self';
        $spell->description = '<p>You transform your appearance to look like a Small or Medium humanoid, such as a drow, dwarf, elf, goblin, him, human, orc, or lizardfolk. You count as a humanoid in addition to your normal traits while in this form, as well as gaining any trait related to the creature\'s kind (such as goblin or human). If this transformation reduces your size, it reduces your reach accordingly (using the effects of the shrink spell). This transformation doesn\'t change your statistics in any way. You can still wear and use your gear, and it changes size to match your new form if necessary. The item\'s size change ends immediately if the item leaves your person.</p>
<p>You don\'t gain the special abilities of the humanoid form you assume. This spell grants you a +3 conditional bonus to Deception checks to pass as a generic member of the chosen ancestry, but you can\'t make yourself to look like a specific person. if you want to impersonate an individual, you still need to create a disguise. though the GM won\'t factor in the difference in ancestry when choosing the CD of your Deception check.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You gain Darkvision or Low-Light vision if the form you assume has that ability.</dd>
    <dt>Heightened (+3)</dt> <dd>You can take on the appearance of a Large humanoid. If this increases your size, you gain the effects of the Enlarge spell.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = "Hunter's Eye";
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '5 rounds';
        $spell->description = '<p>You gain insight with your ranged attacks with a Long Bow or Short Bow. Your ranged attacks with a Long Bow or Short Bow deal an additional +2D6 Precision damage.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 2);

        $spell              = new Spell;
        $spell->name        = "Hunter's Haste";
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '2 rounds';
        $spell->description = '<p>This spell functions like the spell Haste, except as noted here.</p>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Chronomancy'], 2);

        $spell              = new Spell;
        $spell->name        = "Hunter's Mark";
        $spell->casting     = 'Free Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Concentration, up to 3 hours';
        $spell->description = '<p>You choose a creature you can see within range and mystically mark it. Until the spell ends, you know in what direction the target is as long as the creature is within 10 miles of you and can treat the target as a Favored Enemy or Stalked Enemy as if you had spent the time to study the target except for the Duration is equal to the Duration of this spell.</p>
<p>You may have only one creature marked by this spell at a time. If you cast it again, all previous marked creatures become unmarked.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = "Hunter's Perfection";
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>For the Duration, all your Melee and Ranged Weapon Attacks that hit are treated as Critical Hits. If a Natural Critical is scored, Double the Damage</p>';
        $helper->addTypesToSpell($spell, ['Bless', 'Divination'], 5);

        $spell              = new Spell;
        $spell->name        = 'Hurl';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Throwable weapon touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>This spell enchants a throwable weapon so that it can return to the thrower after being thrown. As an Action, you can cause the weapon to return to you.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>When you attempt a thrown Strike with this weapon, it flies back to your hand after the Strike Action is completed. If your hands are full when the weapon returns, it falls to the ground in your space.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Hurry / Delay';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Creature within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You speed up or slow time for a creature (other than yourself) of your choice that you can see within range. An unwilling creature must make a WIS Save.</p>
<dl>
    <dt>Hurry</dt> <dd>The creature is moved in initiative order by up to +10. They have Advantage on their next attack roll, ability check, or Save that it makes before the start of your next turn.</dd>
    <dt>Delay</dt> <dd>The creature is moved in initiative order by up to -10. THey have Disadvantage on their next attack roll, ability check, or Save that it makes before the start of your next turn.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Chronomancy'], 2);

        $spell              = new Spell;
        $spell->name        = 'Hydraulic Blast';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = '1 creature or unattended object';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You draw from an existing source of watery liquid within 30 feet of you (at least 1 gallon, which can come from your water skin) and create a blast of that liquid that Bludgeons the target and knocks it back in the direction directly away from the source of that liquid.</p>
<p>Make a Ranged Spell attack roll.</p>
<p>Creatures made of water are immune to being hit by Hydraulic Blast, however, you may use their body as the source of water. This causes the water creature to make a CON Save. If they Fail, the damage is CON damage, on Success it takes Double normal damage.</p>
<dl>
    <dt>Critical Success</dt> <dd>The target takes 3D6 Bludgeoning damage and is knocked back 10 feet</dd>
    <dt>Success</dt> <dd>The target takes 1D6 Bludgeoning damage and is knocked back 5 feet</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage becomes 3D6 on a Success and 5D6 on a Critical Success</dd>
    <dt>Heightened (+4)</dt> <dd>The damage becomes 5D6 on a Success and 7D6 on a Critical Success</dd>
    <dt>Heightened (+7)</dt> <dd>The damage becomes 7D6 on a Success and 9D6 on a Critical Success</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Hydraulic Torrent';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60-foot line';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You draw from an existing source of watery liquid within 30 feet of you (at least 1 gallon, which can come from your water skin) and create a torrent of that liquid that Bludgeons all creatures in the line of the torrent.</p>
<p>The torrent deals 8D6 Bludgeoning damage. Each creature in the area must attempt a basic STR Save, unattended objects automatically fail. Creatures and objects that fail the Save are also Knocked back 5 feet (10 feet on a Critical Failure)</p>
<p>Creatures made of water are immune to being hit by Hydraulic Blast, however, you may use their body as the source of water. This causes the water creature to make a CON Save. If they Fail, the damage is CON damage, on Success it takes Double normal damage.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Not pushed back</dd>
    <dt>Failure</dt> <dd>Pushed 5 feet</dd>
    <dt>Critical Failure</dt> <dd>Pushed 10 feet</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increase by +2D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 4);

        $spell              = new Spell;
        $spell->name        = 'Hymn of Praise';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '100-foot radius emanation centered on you';
        $spell->duration    = 'Sustained, up to 1 minute';
        $spell->description = '<p>You strike up a rousing, inspirational song that temporarily boosts Good aligned Divine spell casters. They gain the following.</p>
<ul>
    <li>Any spell they cast is automatically Heightened +1</li>
    <li>All Good aligned Divine Spell casters gains 1 Spell Point. This Spell Point is lost if not spent before the duration</li>
    <li>Any Channel Divinity ability gains a +2 bonus.</li>
</ul>
<p><strong>Sustain:</strong> On each of your turns after the turn you cast this spell, you must spend 1 Action to sustain it. If you do not, the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless', 'Auditory', 'Good', 'Sustained'], 3);

        $spell              = new Spell;
        $spell->name        = 'Hymn of Willpower';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 ft radius centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You play a tune that fortifies all your allies will. You and all your allies within range gains Advantage on all WIS and CHA Saves.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Hypercognition';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You rapidly catalog and collate information relevant to your current situation.</p>
<p>You can instantly use up to 10 Recall Knowledge Actions as part of casting this spell. If you have any special abilities or Free Actions that would trigger when you Recall Knowledge, you can\'t use them for these Actions.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Hypnotic Pattern';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '10-foot burst. 120 foot range';
        $spell->save_attribute = 'WIS';
        $spell->spell_creator  = 'Hamring';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You create a pattern of shifting colors that hovers in the air. Creatures are dazzled while inside the pattern. A creature must attempt a WIS Save if it is inside the pattern when you cast it, when it enters the pattern, ends its turn within the pattern, or uses a Seek or Interact action on the pattern. A creature currently fascinated by the pattern doesn't need to attempt new saves.</p>";
        $spell->saves          = "<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>The target is fascinated by the pattern</dd>
    <dt>Critical Failure</dt> <dd>The target is fascinated by the pattern. While it remains fascinated, it can't take reactions</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Visual', 'Figment'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Hypnotism';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 feet';
        $spell->targets        = 'Several living creatures, no two of which may be more than 30 feet apart';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>Your gestures and droning incantation fascinate nearby creatures, causing them to stop and stare blankly at you. In addition, in this state, your suggestions are more convincing.</p>
<p>You can affect up to 10 Hit Die of creatures. Creatures with fewer HD are affected first. Affected creatures must make a WIS Save or be Fascinated.</p>
<p>If you use this spell in combat, the targets all receive a +4 bonus to their Save. If you only target a single creature, they suffer a -2 penalty to their Save.</p>
<p>While the targets are Fascinated, they react as if 2 steps closer to Friendly. You can make one request that is brief and reasonable (provided that you are able to communicate with them). Even if the spell ends, the targets continue to have the improved attitude towards you. A creature that Fails its Save does not remember that you cast this spell.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Not Fascinated, and aware that a spell was cast</dd>
    <dt>Success</dt> <dd>Not Fascinated, but not aware that a spell was cast</dd>
    <dt>Failure</dt> <dd>Fascinated, not aware that a spell was cast</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Auditory', 'Visual', 'Mental'], 1);
    }
}
