<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsLSeeder extends Seeder
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
        $spell->name           = 'Land Legs';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'One creature touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Varies';
        $spell->description    = '<p>The target of this spell suffers the effects of sea sickness, due to a rocking and heaving boat in violent waters. The target makes a WIS save. Failure </p>';
        $spell->heightened     = '';
        $spell->saves          = '';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Land Womb';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'You and up to 5 other creatures touched';
        $spell->duration    = '3 hours';
        $spell->description = "<p>You descend into a protective bubble in the earth below where you are standing. Spectators around you see you descend into the ground as if the earth opened up and swallowed you. You cannot enter the land womb thorugh stone and rock, only through tillable soil.</p>
<p>The land womb holds you secure 10 feet below the surface. Anyone in a land womb cannot be perceived by Divination spells of 4th level or lower.</p>
<p>You may bring up to 5 additional creatures with you into the land womb. All creatures to be brought into the land womb must be touching each other (for instance, in a ring of hands).</p>
<p>You can breathe in the land womb, though the tightness of the space constricts you enough that you cannot cast spells with Somatic Casting. You can, however, speak to anyone who accompanied you. You can no longer hear or see anything on the surface via nonmagical means.</p>
<p>You can end the spell at will, but those who are with you cannot. At the end of the spell's duration, all within the land womb return to the spot where they stood before the spell took effect.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Lantern Light';
        $spell->casting     = 'Somatic Casting, Abstinence';
        $spell->range       = '60 feet';
        $spell->targets     = 'One creature within range each turn';
        $spell->duration    = '1 minute';
        $spell->description = '<p>Once per turn, as an Action, you may make a Ranged Touch Attack and fire a Ray of Light from your eyes that deals 1D6 points of Light damage. For purposes of damage, this counts as Sunlight.</p>
<dl>
    <dt>Abstinence</dt> <dd>You must abstain from sexual intercourse for 24 hours before casting this spell</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Light damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Good', 'Light', 'Exalted', 'Ray'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Last Judgment';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '60 feet';
        $spell->targets        = '10 evil humanoids, and/or evil giants';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You recite a list o the targets' evil deeds and call down the judgement of the heavens upon their heads. Creatures that Fail their WIS Save are struck dead and bodily transported to the appropriate Lower Plane to suffer eternal punishment. Creatures that Succeed their Save take 3D6 WIS Damage, as guilt for their misdeeds overwhelms their minds.</p>
<p>A Resurrection spell works only if the target's body is first recovered from the Lower Planes.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>3D6 WIS Damage</dd>
    <dt>Failure</dt> <dd>Death, and physical body is transported to the appropriate Lower Plane</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Good', 'Exalted'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Last Resort';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Mycontil';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You unleash deadly explosive power, similar to the effects of a retribution strike created by breaking a Staff of Power. The spell converts any remaining spell slots in your mind into a blast of magical energy. All creatures within 10 feet of you take 8 points of damage per Spell Slot remaining, creatures between 11 and 20 feet take 6 points per Spell Slot, and creatures between 21 and 30 feet take 4 points per remaining Spell Slot. You take maximum damage and are not allowed any Save.</p>
<p>It is widely thought that Mycontil and his assistants used this spell in a circle magic ritual to defeat the Arkaiun barbarian chieftain, Reinhar I of Dambrath, during Dambrath's invasion of Halruaa. Mycontil and his assistants vanished after the blast and were presumed destroyed. THere has been no other recorded use of this spell.</p>
<dl>
    <dt>Material Components</dt> <dd>The finger bone of an archmage that has been packed in diamond dust worth 5,000 gp for 1 week.</dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation'], 9);

        $spell              = new Spell;
        $spell->name        = 'Laughing Water';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'A volume of liquid no larger than your head';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>This spell transforms any liquid that is primarily water (even fouled water) into sparkling, gently glowing "laughing water" that is sweet to the taste and very satisfying. Imbibing even a single drop of Laughing Water banishes all Exhaustion for a day. Swallowing a mouthful cures insanity, blindness, and disease and instantly destroys monster and animal internal parasites and their eggs from the body of the imbiber. Moreover, the drinker is rendered immune to all of these perils for 24 hours from the moment of swallowing. A double amount of Laughing Water can be substituted for Holy Water in all uses and rituals.</p>
<p>THe water is named for another benefit. If Laughing Water is splashed on any being who is under or about to face the Hideous Laughter Spell, it negates all effects of the spell instantly. A target of such a spell who is carrying or comes into contact with Laughing Water (even just a few drops in a locker vial) before, as or just after the spell is cast, is immune to the magic (the Laughing Water is consumed, rendering this protection)</p>
<dl>
    <dt>Material Components</dt> <dd>The water to be altered, a pinch of diamond dust, and a seed form any green plant that is less than a year old.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Launch Bolt';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'One Crossbow bolt in your possession';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You cast this spell on a Crossbow Bolt, causing it to fly at a target as if you had fired it from a Light Crossbow. Any properties of the Bolt or Feats you possess that may apply are added.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+5)</dt> <dd>Treat the bolt as if it was fired from a Heavy Crossbow</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Launch Item';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '500 ft';
        $spell->targets     = 'One fine item weighing less than 5 lbs';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You cause a Fine item in your possession to fly at great speed to a target or location you specify. The spell protects the item from any damage caused by being launched (for example, an egg would not crack from being hurled), but does not protect the item from damage afterwards. This spell is normally used to launch dangerous items (flasks of acid or oil, for example) farther than you could normally.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell               = new Spell;
        $spell->name         = 'Lawful Sword';
        $spell->casting      = 'Somatic Casting';
        $spell->requirements = '<dl>
    <dt>Alignment</dt> <dd>Must be lawful to cast this spell</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = '1 minute';
        $spell->description  = '<p>You create a Long Sword that has a +3 magical bonus and the Axiomatic Rune.</p>
<p>A weapon with the Axiomatic rune deals 1d6 additional lawful damage against chaotic targets. When you critically succeed at an attack roll with this weapon against a chaotic creature, instead of rolling, count each weapon damage die as average damage rounded up (3 for d4, 4 for d6, 5 for d8, 6 for d10, 7 for d12).</p>
<p>If you are chaotic, you become enfeebled 2 while carrying or wielding this weapon.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Lawful'], 3);

        $spell              = new Spell;
        $spell->name        = 'Lay of the Land';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->targets     = 'Self';
        $spell->duration    = '1 day';
        $spell->description = '<p>In a flash of recognition, you learn about the geography of your surroundings within a radius of 10 miles. This instant familiarity grants you an insight bonus equal to +3 on Knowledge (geography) checks and Survival checks to avoid getting lost so long as you remain in the affected area.</p>
<p>Additionally, for the duration of the spell you can make Knowledge (geography) checks regarding the affected area as though you were trained in that skill.</p>
<dl>
    <dt>Material Components</dt> <dd>A bag of air</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Lead Anchor';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 hour';
        $spell->description    = "<p>The target's buoyancy becomes and stays swiftly sinking, regardless of how dense the target and its gear are. Among other effects, the target can walk on the bottom, but he also needs to succeed at a DC 20 Swim check to swim towards the surface and to stay above the bottom. This makes lead anchor a useful spell both for exploring the sea floor and for drowning an air-breathing foe in the water.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Leaf into Dagger';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched leaf';
        $spell->duration    = '3 rounds';
        $spell->description = '<p>This spell causes a single plant leaf (of any variety, size, and condition) to shape itself into a non-metallic, non-reflective, silent dagger. The dagger is considered magical. It is weightless and vanishes if deliberately dropped. You cannot be cut by this dagger.</p>
<p>The dagger can be thrown, just as a normal dagger, but this spell ends after striking. This blade is usable by Druids.</p>
<dl>
    <dt>Material Components</dt> <dd>Any leaf, that transforms into the dagger. The leaf is consumed when the spell ends.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can transform the stalk of a plant into a Long Sword. The Material Components is the stalk of a plant instead of a leaf.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Leap Into Animal';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'You and one willing animal';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>This spell enables you to meld your body and up to 100 lbs of nonliving gear into a single willing creature with the Animal type (such as an Animal Companion). You must get the animals consent before casting this spell, but it is assumed you have consent if the animal is your Animal Companion, Familiar, Special Mount, or summoned creature.</p>
<p>To any observer, you appear to leap and phase into the animal; you are gone, while the animal remains. For all intents and purposes, you no longer exist while merged with the animal, and you cannot be detected or affected by anything as long as you remain within it.</p>
<p>While melded with the animal, you mentally direct its actions. You can make attacks, Stride, or take any other action it could normally physically accomplish. However, because you are directing the animal with your own INT, it can undertake actions normally beyond its own instincts (such as manipulating objects with its claws or mouth). Suicidal or self-destructive commands (including an order to attack a creature two or more size categories larger) are ignored. You receive direct sensory input from the creature using its normal senses and skill modifiers.</p>
<p>You cannot take any mental actions while within the animal other than directing it or dismissing the effect (such that you cannot manifest a psionic power or cast a spell, even if it has no components).</p>
<p>Injury to the animal has no effect on you. If the animal is killed, if the spell is dispelled or dismissed, or if the spell's duration expires, you appear (as if leaping forth from the animal) in an open space of your choice within 10 feet of the animal's position. If no open space exists, you are shunted to the nearest open space and take 1d6 points of damage per 10 feet so moved.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Legend Lore';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Name or describe a person, place, or object. The spell brings to your mind a brief summary of the significant lore about the thing you named. The lore might consist of current tales, forgotten stories, or even secret lore that has never been widely known. If the thing you named isn’t of legendary importance, you gain no information. The more information you already have about the thing, the more precise and detailed the information you receive is.</p>
<p>The information you learn is accurate but might be couched in figurative language. For example, if you have a mysterious magic axe on hand, the spell might yield this information: “Woe to the evildoer whose hand touches the axe, for even the haft slices the hand of the evil ones. Only a true Child of Stone, lover and beloved of Moradin, may awaken the true powers of the axe, and only with the sacred word Rudnogg on the lips.”</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 5);
        $spell->materials()->save(Material::where('name', 'Incense')->firstOrFail(), ['meta' => 'Incense worth at least 250 gp, which the spell consumes, and four ivory strips worth at least 50 gp each']);

        $spell              = new Spell;
        $spell->name        = 'Lessen Gravity';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '10-ft X 10-ft area';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You reduce the gravity to one-quarter of its normal in the given area.</p>
<p>This spell is useful primarily in arcane researches, where a reduction of gravity might enhance certain alchemical processes or reagents.</p>
<p>Birds and other flying creatures may have trouble compensating for the effects of this spell because their wings will push them higher than normal. Those using such spells as FLy or Levitate cannot move faster in the area, though they can carry more weight. Missiles fired through the area are unaffected; their inertia maintains their normal speed and height.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Double the area</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);
        $spell->materials()->save(Material::where('name', 'Lodestone')->firstOrFail());

        $spell                 = new Spell;
        $spell->name           = 'Levitate';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature or object within range';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = "<p>One creature or object of your choice that you can see within range rises vertically, up to 20 feet, and remains suspended there for the duration. The spell can levitate a target that weighs up to 500 pounds. An unwilling creature that succeeds on a CON Save is unaffected.</p>
<p>The target can move only by pushing or pulling against a fixed object or surface within reach (such as a wall or a ceiling), which allows it to move as if it were climbing. You can change the target's altitude by up to 20 feet in either direction on your turn. If you are the target, you can move up or down as part of your move. Otherwise, you can use your action to move the target, which must remain within the spell’s range.</p>
<p>When the spell ends, the target floats gently to the ground if it is still aloft.</p>
<dl>
    <dt>Material Components</dt> <dd>Either a small leather loop or a piece of golden wire bent into a cup shape with a long shank on one end</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Life Bubble';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creatures touched, up to 5';
        $spell->duration    = '12 hours';
        $spell->description = '<p>You surround the touched creatures with a constant and movable 1-inch shell of tolerable living conditions. This shell enables the subjects to breathe freely, even underwater or in a vacuum, as well as making them immune to harmful gases and vapors, including inhaled diseases and poisons and spells like cloudkill and stinking cloud. In addition, the shell protects subjects from extremes of temperature (per Endure Elements) as well as extremes of pressure.</p>
<p>Life bubble does not provide protection from Negative or Positive energy (such as found on the Negative and Positive Energy planes), the ability to see in conditions of poor visibility (such as in smoke or fog), nor the ability to move or act normally in conditions that impede movement (such as underwater).</p>
<p>When you cast the spell, you must divide the duration among the recipients.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 5);

        $spell              = new Spell;
        $spell->name        = 'Life Pact';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Up to 6 willing creatures, no two of which can be more than 30 feet apart';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You bind the life forces of the targets into a mystical pact. If any target is reduced to fewer than 0 hit points, that target automatically triggers the power of the pact. The triggering target drains 1 hit point from all other targets who have at least 1 hit point and are within 30 feet of the triggering target; these hit points are applied to the triggering target as magical healing. This healing can prevent the triggering creature from dying, if the attack would cause the target’s to have an amount of negative hit points equal to its CON score. This healing cannot raise the triggering creature above 1 hit point; any excess hit points drained from other targets are wasted.</p>
<p>The pact can be triggered once per round. It’s not triggered by death effects or effects that do not deal hit point damage.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Life Transference';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You sacrifice some of your health to mend another creature's injuries. You take 4D8 Negative damage, and the creature you touched regains a number of Hit Points equal to twice the damage you take.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Positive'], 3);

        $spell              = new Spell;
        $spell->name        = 'Life Ward';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>A creature warded by this spell gains protection from the effects of Positive energy, including magical healing. The spell can be cast on undead to offer additional protection against Turning. The target becomes immune to all Positive energy.</p>
<p>This spell offers protection from the blinding effect of the Positive energy plane.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Negative', 'Necromancy'], 4);

        $spell              = new Spell;
        $spell->name        = "Life's Grace";
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Living creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>The living creature touched becomes immune to all death spells, magical death effects, energy drain, and any negative energy effects. In addition, the subject is immune to undead special attacks that deal ability damage, ability drain, and magical disease (such as mummy rot), even if these attacks do not have a magical source. (For example, the spell prevents poison damage from the poisonous bite of an undead creature.) This spell does not prevent such attacks from undead originating from spells, magic items, or class abilities; only the special attacks from the undead's base nature are affected.</p>
<p>In addition, the subject's armor or clothing is considered ghost touch armor, and its armor bonus counts against incorporeal attacks. (A suit of clothing is considered armor that gives +0 AC for this purpose, though it can be enhanced with spells such as magic vestment.)</p>
<p>This spell doesn't remove negative levels that the subject has already gained, nor does it affect the saving throw necessary 24 hours after gaining a negative level.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 5);

        $spell              = new Spell;
        $spell->name        = 'Lifeblend';
        $spell->casting     = '3 hours (Material, Somatic, Verbal)';
        $spell->rarity      = 'Rare';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>Using this spell, you can cause two (or more) lifeforms to join together to form a new one. The subjects can be of any type, plant or animal, but must be alive. After casting this spell, you can cast no other spell for 48 hours.</p>
<p>The subjects are placed in cages made with precious metals, each cage worth no less than 2,500 gp. To cast the spell, the caster must touch each subject through the casting time of the spell. If two creatures are involved, they can be touched with the hands. If a third or even fourth creature is involved, touching them with the feet is possible. No more than four creatures can be affected by a single application of this spell. During casting, you must concentrate on the desired final form of the combination creatures (if you do not have a specific form in mind, the spell fails).</p>
<p>At the end of the casting, each subject involved makes a CON Save. If any is successful, the spell fails. If the spell fails, you must make a successful WIS Save or suffer a magical or suffer a magical backlash, taking on characteristics of the subjects for the next 5 days. The exact nature of the change is up to the DM but should not be beneficial.</p>
<p>If all the subjects fail their Save, the spell is at least partially successful. Roll percentile dice and consult the table for the result.</p>
<p>If the spell is successful in any way except death, the DM creates a new monster, with input from you.</p>
<table>
    <thead>
        <tr>
            <th>Roll</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>01-50</td>
            <td>Success: The resulting creature looks the way you want it to look, and has more-or-less the abilities desired</td>
        </tr>
        <tr>
            <td>51-60</td>
            <td>Bonding: The target creatures are not melded together, but are bonded at some point on their bodies (for example, a dog and a cat bonded might appear to be a dog and a cat that share one set of legs)</td>
        </tr>
        <tr>
            <td>61-70</td>
            <td>Imperfect Melding: The creatures are melded together, but not in the desired fashion; they might be melded in a centaur like fashion, or in any other way.</td>
        </tr>
        <tr>
            <td>71-80</td>
            <td>Pseudo Lychanthropy: The creatures are blended together, but only one is dominant at any given time. Periodically, the creature changes completely form the form of one subject to the form of another.</td>
        </tr>
        <tr>
            <td>81-90</td>
            <td>Dominance: One creature is clearly dominant in the mix, but has a few characteristics of the other creature(s) involved in the spell.</td>
        </tr>
        <tr>
            <td>91-95</td>
            <td>Death: The creature looks exactly as desired, but has something wrong internally and cannot live.</td>
        </tr>
        <tr>
            <td>96-99</td>
            <td>Vengeful: The creature is exactly as desired, but has a hatred for you</td>
        </tr>
        <tr>
            <td>100</td>
            <td>Disaster: At the last moment, one of the subjects pulled away, and you are pulled into the spell instead, becoming a part of the composite creature (no Save). Roll again on this table to find the results.</td>
        </tr>
    </tbody>
</table>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Ritual'], 9);

        $spell                = new Spell;
        $spell->name          = 'Light';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '20-foot radius. Touch range';
        $spell->targets       = 'One unattended, nonmagical object of 1 Bulk or less';
        $spell->spell_creator = 'Brightfinger';
        $spell->duration      = '1 day or until dismissed';
        $spell->description   = "<p>The object begins to glow with pure light, casting bright light in a 20-foot radius like a torch. You may have up to two instances of this spell at one time. Each additional casting past the first two causes the oldest Light spell to end.</p>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Light</li>
            <li>Any Spell with the Darkness type of level 0</li>
            <li>Any Spell with the Darkness type with a successful Spell Level Check (DC 12 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>The object instead sheds light in a 60-foot radius.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Counterspell'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Lightning Bolt';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60-foot line';
        $spell->spell_creator  = 'Volhm';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>The creatures in the area attempt a DEX Save to avoid taking 5D12 Electricity damage.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 1D12</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Electricity', 'Evocation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Lightning Fog';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '200 feet, sphere 20 ft radius';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You conjure a smoky cloud that fills the area with small electrical discharges. The smoke obscures all sight as a Fog cloud does. In addition, the discharges deal 2D4 + 10 Electricity damage to everything within the cloud on your turn each round.</p>
<p>As with Fog Cloud, wind disperses the smoke, and the spell can't be underwater.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Electricity'], 4);

        $spell              = new Spell;
        $spell->name        = 'Lightning Lance';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '5 rounds';
        $spell->description = '<p>This spell creates a silvery shimmering nearly weightless rod about as thick about as a sword hilt and about four feet in length. The bolt of "frozen" lightning forms with its midpoint in one of your hands (your choice) and can be used in three ways.</p>
<ul>
    <li>As a handheld weapon. It deals 3D6 Electricity damage per hit.</li>
    <li>If you touch the lance to a solid object and you use a Free Action to discharge, the lance vanishes in a flash, forcing two item Saves vs Electricity on the object, causing 3D6 Electricity damage twice (half damage on Save). The spell then ends.</li>
    <li>You can throw the lance as a Ranged Touch Attack, dealing 6D6 Electricity damage on hit. The spell then ends.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Lightning Leap';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '60 feet';
        $spell->area           = '10x60 feet line';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>With a sudden flash, you transform yourself into a line of lightning, similar to the Lightning Bolt Spell. The line of lightning can be any length from 10 to 60 feet, measured in 5 foot increments. You reappear in any square adjacent to the last square entered by the line of lightning, along with any gear worn or carried (up to a maximum of your heavy load limit). You can't bring along other creatures other than your Familiar, Special Mount, and/or Animal Companion. All creatures in the area takes 6D12 Electricity damage unless they Succeed on their DEX Save.</p>";
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D12</dd>
    <dt>Heightened (+2)</dt> <dd>Double the maximum range</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Lightning Ring';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->area           = '5 foot radius ring of Electricity with you at the center';
        $spell->targets        = 'Self';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>This spell conjures a ring of Electricity that hovers around you at chest level. The ring moves with you and does not interfere with your spellcasting or attacks.</p>
<p>Any creature that is caught in the area takes 5D12 Electricity damage unless they Succeed a DEX Save for half damage. As an Action, you may fire a Lightning Bolt as the spell, dealing 5D12 Electricity damage.</p>
<dl>
    <dt>Material Components</dt> <dd>A small glass ring and a bit of animal fur</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 8);

        $spell                 = new Spell;
        $spell->name           = "Lion's Roar";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '120-ft radius burst centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You emit a titanic roar that deals 5D8 Sonic damage and Stuns all enemies in the Area unless they make a CON Save. All allies in the area gain a +1 Morale Bonus on all Attack Rolls and Saves vs Fear effects.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half Sonic damage and not Stunned</dd>
    <dt>Failure</dt> <dd>Full Sonic damage and Stunned for 2 rounds.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Liquid Pain';
        $spell->casting        = '1 day (Material, Somatic, Verbal)';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Touch';
        $spell->targets        = 'One living creature';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Over the course of one day, you take a subject already in great pain: wracked with disease, the victim of torture, or dying of a wound, for example, and captures its pain in liquid form.</p>
<p>This physical manifestation of agony can be used to create magic items or enhance spells. It can also be used as a potent drug.</p>
<p>A single individual cannot provide more doses of liquid pain than their CON score. Once this maximum amount of liquid pain is extracted from an individual, that creature dies.</p>
<dl>
    <dt>Material Components</dt> <dd>A jar, vial, or other container for the liquid pain.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Fail to capture the pain in liquid form</dd>
    <dt>Failure</dt> <dd>Capture one dose of liquid pain</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 4);

        $spell              = new Spell;
        $spell->name        = 'Listening Coin';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = '2 ordinary coins you touch';
        $spell->duration    = '24 hours';
        $spell->description = '<p>You turn two ordinary coins into magical listening devices; one a sensor and the other a receiver. By holding the receiver coin to your ear, you can hear whatever transpires near the sensor as if you were there. If the coin is in a pocket, pouch or sack, the Listen DC increases by +3.</p>
<p>The coins continue to function no matter how far apart they are, although they fall silent if they are on different Planes.</p>
<dl>
    <dt>Material Components</dt> <dd>The pair of coins.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Scrying'], 3);

        $spell              = new Spell;
        $spell->name        = 'Lingering Chorus';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>A chorus of glorious voices takes up your song. This spell continues any one Bardic Music effect you are currently maintaining or on which you are Concentrating. It only functions on Bardic Music effects that can be maintained for longer than 1 round (this allows you to perform other Actions on following rounds while your Bardic Music effect continues).</p>
<p>If you cast this spell a second time while another Lingering Chorus is still ongoing, add the Duration of the second casting to the Duration of the original casting.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Lively Step';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area        = '60-foot radius emanation centered on you';
        $spell->duration    = 'Concentration, upto 12 hours';
        $spell->description = '<p>You play a marching tune. All in the area gains an Additional Action. This Additional Action can only be used to take the Stride Action. This bonus Action cannot be used in combat.</p>
<p>This spell does not alleviate the effects of Forced Marching over long periods of time.</p>
<dl>
    <dt>Material Components</dt> <dd>A small drum</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 2);

        $spell              = new Spell;
        $spell->name        = 'Liveoak';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One healthy huge oak tree touched';
        $spell->duration    = 'One month';
        $spell->description = "<p>This spell turns an oak tree into a protector guardian. The spell can be cast on only a single tree at a time. While this spell is in effect, it can't be cast again.</p>
<p>The tree on which the spell is cast must be within 10 feet of your dwelling place, within a place sacred to you, or within 300 feet of something that you wish to guard or protect. The target tree is animated as a Treant for the duration.</p>
<p>If this spell is Dispelled, the tree takes root immediately, wherever it may be. As an Action, you may end this spell, the tree tries to return to its original location before taking root.</p>";
        $spell->heightened  = '<dl>
    <dt>Permanency (+4) 5,000 gp and 10 CON Damage</dt> <dd>The tree is born as a permanent new Treant</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Plant'], 6);

        $spell              = new Spell;
        $spell->name        = 'Living Undeath';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell imparts a physical transformation upon the targets, not unlike the process that produces a zombie. While the target does not actually become undead, its vital processes are temporarily bypassed with no seeming ill effect. While this spell is in effect, the target gains the following.</p>
<ul>
    <li>Immune to Sneak Attack and Critical Hits</li>
    <li>-4 penalty to CHA (to a minimum of 1)</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 2);

        $spell              = new Spell;
        $spell->name        = 'Locate Animals or Plants';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Describe or name a specific kind of beast or plant. Concentrating on the voice of nature in your surroundings, you learn the direction and distance to the closest creature or plant of that kind within 5 miles, if any are present.</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Locate City';
        $spell->casting     = '1 round (Verbal)';
        $spell->range       = '100 miles';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You sense the distance and direction to the nearest community of a minimum size designated by you at the time of casting. For instance, you could choose to find the nearest community at least as large as a village, or you could choose to locate only the nearest metropolis.</p>
<p>This spell measures the distance to the nearest community as the minimum distance one would have to travel to reach the city without moving through solid objects.</p>
<p>Thus, a caster on the surface isn't likely to locate a subterranean city half a mile beneath his feet, even if the next closest community is 5 miles away overland.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Locate Creature';
        $spell->casting     = '1 minute (Material, Somatic)';
        $spell->targets     = 'Self';
        $spell->range       = '1,000 feet';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>Describe or name a creature that is familiar to you. You sense the direction to the creature's location, as long as that creature is within 1,000 feet of you. If the creature is moving, you know the direction of its movement.</p>
<p>The spell can locate a specific creature known to you, or the nearest creature of a specific kind (such as a human or a unicorn), so long as you have seen a creature up close -- within 30 feet -- at least once. If the creature you described or named is in a different form, such as being under the effects of a Polymorph spell, this spell doesn\'t locate the creature.</p>
<p>This spell can't locate a creature if running water at least 10 feet wide blocks a direct path between you and the creature.</p>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Locate Gate';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Circle centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You sense the direction of the nearest Teleportation Circle (permanent or with a remaining duration), Gate spell, or other effect which magically connects two different locations (for example, an active magic item, a creature's special ability, or unique adventure location). Locate Gate detects only spells or effects with a permanent or ongoing duration, not instantaneous effects like Dimension Door or Teleport.</p>
<p>Locate Gate can be blocked by spells like Nondetection, if the effect originates from a specific object or creature.</p>
<p>However, spell effects can't likewise be warded. For example, ring gates are a specific object, but a permanent teleportation circle is not (the surface in which it's inscribed doesn't count).</p>
<p>Locate Gate isn't blocked by lead, water, or other physical environmental conditions, but it is blocked by any intervening area that is dimensionally warded (such as by Dimensional Lock or Forbiddance).</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Portal', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Locate Node';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '10 miles';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You sense the direction of any node within range. You can choose to locate the nearest node, the closest node of a particular type, or a specific node you have visited before; in the latter case, the range is 100 miles.</p>
<p>The spell is blocked by even a thin sheet of lead, and it cannot detect nodes protected by a Node Lock spell.</p>
<dl>
    <dt>Material Components</dt> <dd>A pebble found in a node.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Locate Object';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>Describe or name an object that is familiar to you. You sense the direction to the object's location, as long as that object is within 1,000 feet of you. If the object is in motion, you know the direction of its movement.</p>
<p>The spell can locate a specific object known to you, as long as you have seen it up close--within 30 feet--at least once. Alternatively, the spell can locate the nearest object of a particular kind, such as a certain kind of apparel, jewelry, furniture, tool, or weapon.</p>
<p>This spell can't locate an object if any thickness of lead, even a thin sheet, blocks a direct path between you and the object.</p>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Locate Portal';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Circle centered on you. 5 mile range';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>When this spell is active, you feel a mental pull in the direction of any active or operable portal leading to another plane within range of the spell. If multiple portals are present, you are pulled only to the nearest one. If moving causes you to become closer to a different portal, you become drawn to that one instead. The spell gives you the direction of the portal only, not a route. Once you are within 10 feet of the portal, you no longer feel the pull, only the portal's presence. The spell does not pinpoint or otherwise reveal hidden portals, nor does it do anything to aid in opening or operating them.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Portal', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Locate Water';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area        = '400-foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 3 hours';
        $spell->description = "<p>You sense the direction of a substantial body of water. The amount of information revealed depends on how long you search a particular area.</p>
<ul>
    <li>1st Round: Presence or absence of water.</li>
    <li>2nd Round:Number of water sources in the area and the rough size of the largest one present.</li>
    <li>3rd Round: The size (see below) and location of each source of water.</li>
</ul>
<p>If a water source is outside your line of sight, then you discern its direction but not its exact location.</p>
<p>Size: For the purpose of this spell, the size categories of bodies of water are as follows.</p>
<ul>
    <li>Small: A small pond or pool (200 cubic feet or less) or a brook (5 feet across or smaller).</li>
    <li>Medium: A large pond or small lake (up to 20,000 cubic feet) or a good-sized stream (up to 30 feet across).</li>
    <li>Large: A large lake (up to 10 million cubic feet) or a broad river.</li>
    <li>Vast: An ocean or an inland sea.</li>
</ul>
<p>Creatures cannot be found by this spell. The spell ignores small quantities of water, such as filled bottles and skins. The spell reveals nothing about the quality of the water or how easy it is to reach. The presence of fire or magma within the spell's area blocks it.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the radius of the Area</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Water'], 1);

        $spell              = new Spell;
        $spell->name        = 'Longstrider';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living creature touched';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You touch a creature. The target's speed increases by 10 feet until the spell ends.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 1);

        $spell               = new Spell;
        $spell->name         = "Loremaster's Etude";
        $spell->casting      = 'Somatic Casting';
        $spell->range        = '30 feet';
        $spell->requirements = '<dl>
    <dt>Trigger</dt> <dd>You or an ally within range attempts a skill check to Recall Knowledge</dd>
</dl>';
        $spell->targets     = 'You or the triggering ally';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You call upon your muse's deep mysteries, granting the target a greater ability to think and recall information. You gain Advantage on the roll.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell                = new Spell;
        $spell->name          = 'Love Bite';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Sune';
        $spell->range         = '90 feet';
        $spell->targets       = 'One creature';
        $spell->duration      = 'Instantaneous';
        $spell->description   = "<p>This spell originated in Sune's faith. You determine at the time of casting what effect it takes.</p>
<dl>
    <dt>Fleeting Kiss</dt> <dd>The target feels the sensation of a brief tender kiss on a visible part of their body or on their mouth if their body is completely covered. This effect is often used as a signal</dd>
    <dt>Love Bite</dt> <dd>The target takes 1 point of damage.</dd>
</dl>
<p>In either case, if you are holding the charge of a touch spell of 3rd level or lower when you cast this spell, this spell also delivers the touch spell to the target as if you had touched it directly. You must make a Melee Touch attack as normal with a +2 bonus to hit. This form of the spell always attacks from your direction and cannot flank targets as a creature can.</p>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 1);

        $spell                 = new Spell;
        $spell->name           = "Love's Lament";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet, Cone-shaped burst';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>With this spell, you create a cone of music that draws upon the sadness, guilt, and despair of those within its area of effect. All creatures in the area take a -4 penalty on Listen checks for 1 round. In addition, those who fail to make a WIS Save are reminded of all their lost loves and disappointments in life. The music seizes upon these feelings and magnifies them, so that the victims of the spell take 1D6 points of WIS damage and are Nauseate for 1D4 rounds.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Failure</dt> <dd>Double effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
    <dt>Success</dt> <dd>No effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 3);

        $spell              = new Spell;
        $spell->name        = 'Luck';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 rounds';
        $spell->description = '<p>You become lucky. You have Advantage on all Attack Rolls and Saves for the Duration.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell               = new Spell;
        $spell->name         = 'Luminous Armor';
        $spell->casting      = 'Somatic Casting (Sacrifice)';
        $spell->requirements = '<dl>
    <dt>Sacrifice</dt> <dd>Upon casting this spell, your suffer 2 STR Damage</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = '3 hours';
        $spell->description  = "<p>This spell creates armor that acts as Full Plate, and provides the following benefits.</p>
<ul>
    <li>Weightless</li>
    <li>No Spell Casting penalty</li>
    <li>No Skill Check penalty</li>
    <li>No limit to DEX bonus to armor</li>
    <li>Sheds light as a Daylight Spell and counters any Darkness effect of 2nd level or lower.</li>
    <li>The armor's brightness imposes a -1 penalty to all Attacks made against you that depends on sight. This brightness is sufficient to trigger the Light Sensitivity Vulnerability.</li>
</ul>";
        $spell->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Good'], 2);

        $spell              = new Spell;
        $spell->name        = 'Luminous Gaze';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '30-foot cone in the direction that you are facing';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>This spell causes your eyes to glow with an unearthly radiance. The glow from you eyes illuminates the area as the Light Spell. All creatures in the area that face you are Dazzled. Sightless creatures are unaffected.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 1);
    }
}
