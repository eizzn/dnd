<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsMSeeder extends Seeder
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
        $spell->name           = 'Mace of Odo';
        $spell->casting        = 'Somatic Casting';
        $spell->spell_creator  = 'Helm';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'Self';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You create a glowing mace of Force that appears in your hand. You may make a Melee Touch Attack with the mace, dealing 6D6 Force damage. Undead creatures suffer Double damage. If you are holding the mace and are targeted by a spell, you may have the mace absorb the spell (treat as if it was Countered). Once the mace successfully strikes a creature or absorbs a spell, it then disappears and a Light Spell is cast where the Mace was for the remainder of the Duration.</p>
<p>While the mace appears in your hand, it does not require you to grab it. This allows you to cast spells while the spell is in effect.</p>';
        $spell->saves          = '';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Maddening Darkness';
        $spell->casting        = 'Material Casting, Verbal Casting';
        $spell->range          = '180 feet';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = "<p>Magical darkness spreads from a point you choose within range to fill a 60—foot—radius sphere until the spell ends. The darkness spreads around corners. A creature with darkvision can't see through this darkness. Nonmagical light, as well as light created by spells of 8th level or lower, can't illuminate the area.</p>
<p>Shrieks, gibbering, and mad laughter can be heard within the sphere. Whenever a creature starts its turn in the sphere, it must make a WIS Save, taking 8D8 Psychic damage on a failed Save.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half Psychic damage</dd>
    <dt>Failure</dt> <dd>Full Psychic damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Enchantment'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Maelstrom';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'STR';
        $spell->range          = '120 feet';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>A mass of 5-foot-deep water appears and swirls in a 30-foot radius centered on a point you can see within range. The point must be on a body of water.</p>
<p>Until the spell ends, that area is difficult terrain, and any creature that starts its turn there must succeed on a STR Save or take 6D6 Bludgeoning damage and be pulled 10 towards the center.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 5);

        $spell              = new Spell;
        $spell->name        = 'Mage Armor';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '3 hours';
        $spell->description = "<p>You touch a willing creature who isn't wearing armor, and a protective magical force surrounds it until the spell ends. The target's base AC becomes 13 + its DEX modifier. The spell ends if the target dons armor or if you dismiss the spell as an Action.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the AC bonus by +1 and you gain a +1 bonus to all Saves per additional Spell Slot.</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Abjuration', 'Force'], 1);

        $spell              = new Spell;
        $spell->name        = 'Mage Hand';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '1 minute';
        $spell->description = "<p>A spectral, floating hand appears at a point you choose within range. The hand lasts for the duration or until you dismiss it as a Free Action. The hand vanishes if it is ever more than 30 feet away from you or if you cast the spell again.</p>
<p>You can use your Action to control the hand. You can use the hand to manipulate an object, open an unlocked door or container, stow or retrieve an item from an open container, or pour the contents out of a vial. You can move the hand up to 30 feet each time you use it.</p>
<p>The hand can't activate magic items, or carry more than 10 pounds.</p>
<p>The hand can be used to attack a target by making a Ranged Attack with Disadvantage. It deals 1 point of Bludgeoning Damage on a hit. If used in this way (at least 1 Action must be used to attack), it can be considered threatening the target and possibly grant Flanking bonus. Each round the hand is threatening the target, the target may make a DC 15 Concentration check to ignore the hand. If Successful, the hand is not considered threatening the target and does not grant any Flanking bonus.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Magic Fang';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You touch a creature to enhance its natural weaponry. All of the target's natural weapons now count as magical weapons. When the target rolls a 1 or 2 on a damage die for these weapons, it can reroll the die and must use the new roll, even if the new roll is a 1 or a 2.</p>
<p>Whenever the target deals damage with a natural weapon, it can deal its original amount of damage, or 1D6 (additional bonuses to its damage still apply), whichever is higher.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>The base damage becomes a 1D8</dd>
    <dt>Heightened (+5)</dt> <dd>The base damage becomes a 1D10</dd>
    <dt>Heightened (+7)</dt> <dd>The base damage becomes a 1D12</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell                = new Spell;
        $spell->name          = 'Magic Jar';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->targets       = 'Self';
        $spell->spell_creator = 'Jarm';
        $spell->duration      = 'Until dispelled';
        $spell->description   = '<p>Your body falls into a catatonic state as your soul leaves it and enters the container you used for the spell’s material component. While your soul inhabits the container, you are aware of your surroundings as if you were in the container’s space. You can’t move or use reactions. The only action you can take is to project your soul up to 100 feet out of the container, either returning to your living body (and ending the spell) or attempting to possess a humanoids body.</p>
<p>You can attempt to possess any humanoid within 100 feet of you that you can see (creatures warded by a protection from evil and good or magic circle spell can’t be possessed). The target must make a Charisma saving throw. On a failure, your soul moves into the target’s body, and the target’s soul becomes trapped in the container. On a success, the target resists your efforts to possess it, and you can’t attempt to possess it again for 24 hours.</p>
<p>Once you possess a creature’s body, you control it. Your game statistics are replaced by the statistics of the creature, though you retain your alignment and your Intelligence, Wisdom, and Charisma scores. You retain the benefit of your own class features. If the target has any class levels, you can’t use any of its class features.</p>
<p>Meanwhile, the possessed creature’s soul can perceive from the container using its own senses, but it can’t move or take actions at all.</p>
<p>While possessing a body, you can use your action to return from the host body to the container if it is within 100 feet of you, returning the host creature’s soul to its body. If the host body dies while you’re in it, the creature dies, and you must make a Charisma saving throw against your own spellcasting DC. On a success, you return to the container if it is within 100 feet of you. Otherwise, you die.</p>
<p>If the container is destroyed or the spell ends, your soul immediately returns to your body. If your body is more than 100 feet away from you or if your body is dead when you attempt to return to it, you die. If another creature’s soul is in the container when it is destroyed, the creature’s soul returns to its body if the body is alive and within 100 feet. Otherwise, that creature dies.</p>
<p>When the spell ends, the container is destroyed.</p>
<dl>
    <dt>Material Components</dt> <dd>A gem, crystal, reliquary, or some other ornamental container worht at least 500 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual'], 6);

        $spell                = new Spell;
        $spell->name          = 'Magic Missile';
        $spell->casting       = 'Verbal Casting or more';
        $spell->range         = '120 feet';
        $spell->spell_creator = 'Matick';
        $spell->targets       = 'Varies';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>You send a dart of force streaking toward a creature that you can see. It automatically hits and deals 1d4+1 Force damage. When Casting this Spell, you can increase the casting by a Material Casting Action, a Somatic Casting Action, or both. For each component you add, increase the number of missiles you shoot by one. You choose the target for each missile individually.</p>
<dl>
    <dt>Material Components</dt> <dd>A dagger or dart.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You shoot one additional missile with each Action you spend.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 1);

        $spell                = new Spell;
        $spell->name          = 'Magic Mouth';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->range         = 'Touch';
        $spell->targets       = 'One creature or object';
        $spell->spell_creator = 'Carbury';
        $spell->duration      = 'Until dismissed or dispelled';
        $spell->description   = "<p>You implant a message within an object in range, a message that is uttered when a trigger condition is met. Choose an object that you can see and that isn't being worn or carried by another creature. Then speak the message, which must be 25 words or fewer, though it can be delivered over as long as 10 minutes. Finally, determine the circumstance that will trigger the spell to deliver your message.</p>
<p>When that circumstance occurs, a magical mouth appears on the object and recites the message in your voice and at the same volume you spoke. If the object you chose has a mouth or something that looks like a mouth (for example, the mouth of a statue), the magical mouth appears there so that the words appear to come from the object's mouth. When you cast this spell, you can have the spell end after it delivers its message, or it can remain and repeat its message whenever the trigger occurs.</p>
<p>The triggering circumstance can be as general or as detailed as you like, though it must be based on visual or audible conditions that occur within 30 feet of the object.</p>
<blockquote>
    For example, you could instruct the mouth to speak when any creature moves within 30 feet of the object or when a silver bell rings within 30 feet of it.
</blockquote>
<dl>
    <dt>Material Components</dt> <dd>A small bit of honeycomb and jade dust worth at least 10 gp, which the spell consumes</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Auditory', 'Enchantment', 'Visual', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Magic Stone';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You touch one to three pebbles and imbue them with magic.</p>
<p>You or someone else can make a ranged spell attack with one of the pebbles by throwing it or hurling it with a sling. If thrown, a pebble has a range of 60 feet. If someone else attacks with a pebble, that attacker adds your spellcasting ability modifier, not the attacker's, to the attack roll. On a hit, the target takes Bludgeoning damage equal to 1D6 + your spellcasting ability modifier. Whether the attack hits or misses, the spell then ends on the stone.</p>
<p>If you cast this spell again, the spell ends on any pebble still affected by your previous casting.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Magic Weapon';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You touch a nonmagical weapon. Until the spell ends, that weapon becomes a magic weapon with a +1 bonus to attack rolls and 2D6 Chaos/Good/Evil/Lawful damage.</p>
<p>You may cast this spell instead of the Enchant Item spell when preparing to enchant a weapon.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus to hit by +1 and a +1D6 bonus to damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Chaotic', 'Good', 'Evil', 'Lawful'], 2);

        $spell                = new Spell;
        $spell->name          = 'Magnetism';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range         = '120 feet';
        $spell->spell_creator = 'Ghorus Toth';
        $spell->targets       = 'One metallic creature or object';
        $spell->duration      = '10 minutes';
        $spell->description   = "<p>You fire a brilliant blue ray at a single creature or object within range. Make a Ranged Spell attack. If you hit, you charge the target with an intensely powerful magical magnetism effect.</p>
<p>You can only affect objects made of metal or creatures wearing or carrying metal armor, weapons, or gear. The magical magnetism generated magnetism creates a zone of attraction with a radius of 30 feet around the affected creature of object. Every metallic object entering the zone of attraction is pulled toward the target creature or object by this attractive force, which has an effective STR score of 10 + your caster level.</p>
<p>Every round metal creatures or objects remain within the zone of attraction, they must attempt an opposed STR check against the force. If an attracted creature wins this contest, it suffers no ill effects this round. If it fails, it is entangled and drawn 10 feet plus 1 foot for every point by which it failed the opposed STR check closer to the creature or object at the center of the zone.</p>
<p>Creatures carrying or holding metal objects may choose to release them, in which case the items fly to the creature or object at the center, or hold onto them, in which case they are treated as metal creatures. Unattended metal objects of 50 ponds or less in the zone of attraction (including items voluntarily released, as well as metallic projectiles fired through the zone) fly with great force and strike the target, dealing 1D6 point of damage per 5 lbs of weight (maximum 10D6). Objects heavier than 50 lbs are dragged 10 feet closer each round.</p>
<p>Metal creatures or objects that reach the target becomes stuck fast to the target. (If the target is a metal or metal-armored creature, it is instantly stuck fast to itself by the spell). Creatures stuck together this way are considered to be grappled and must first escape the grapple by defeating the attractibe force in an opposed STR check before they can try to move away or take any Actions prohibited in a Grapple. Similarly, an object struck to the target must be wrested away with a STR check before it can be used. If a creature or object within the zone of attraction is more than twice as heavy as the target, the target is dragged to it instead. This naturally moves the zone of attraction, which may shift other creatures into or out of the magnetism's range of influence.</p>
<dl>
    <dt>Material Components</dt> <dd>A small loadstone</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 6);

        $spell                = new Spell;
        $spell->name          = 'Magnificent Mansion';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->range         = '300 feet';
        $spell->spell_creator = 'Mordenkainen';
        $spell->duration      = '24';
        $spell->description   = '<p>You conjure an extradimensional dwelling in range that lasts for the duration. You choose where its one entrance is located. The entrance shimmers faintly and is 5 feet wide and 10 feet tall. You and any creature you designate when you cast the spell can enter the extradimensional dwelling as long as the portal remains open. You can open or close the portal if you are within 30 feet of it. While closed, the portal is invisible.</p>
<p>Beyond the portal is a magnificent foyer with numerous chambers beyond. The atmosphere is clean, fresh, and warm.</p>
<p>You can create any floor plan you like, but the space can’t exceed 50 cubes, each cube being 10 feet on each side. The place is furnished and decorated as you choose. It contains sufficient food to serve a nine-course banquet for up to 100 people. A staff of 100 near-transparent servants attends all who enter. You decide the visual appearance of these servants and their attire. They are completely obedient to your orders. Each servant can perform any task a normal human servant could perform, but they can’t attack or take any action that would directly harm another creature. Thus the servants can fetch things, clean, mend, fold clothes, light fires, serve food, pour wine, and so on.</p>
<p>The servants can go anywhere in the mansion but can’t leave it. Furnishings and other objects created by this spell dissipate into smoke if removed from the mansion. When the spell ends, any creatures inside the extradimensional space are expelled into the open spaces nearest to the entrance.</p>
<p><strong></strong> A miniature portal carved from ivory, a small piece of polished marble, and a tiny silver spoon, each item worth at least 5 gp</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Mailed Might of the Magelords';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You create a translucent protective field of force that offers the following.</p>
<ul>
    <li>Provides +6 AC (this AC bonus applies to incorporeal attacks as well)</li>
    <li>Immune to all spells of 2nd level or lower that have the Force descriptor</li>
    <li>Damage Resistance to Bludgeoning, Piercing, and Slashing</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A miniature adamantine shield worth at least 250 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 5);

        $spell              = new Spell;
        $spell->name        = 'Major Image';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You create the image of an object, a creature, or some other visible phenomenon that is no larger than a 20-foot cube. The image appears at a spot that you can see within range and lasts for the duration. It seems completely real, including sounds, smells, and temperature appropriate to the thing depicted. You can’t create sufficient heat or cold to cause damage, a sound loud enough to deal thunder damage or deafen a creature, or a smell that might sicken a creature (like a troglodyte’s stench). As long as you are within range of the illusion, you can use your action to cause the image to move to any other spot within range. As the image changes location, you can alter its appearance so that its movements appear natural for the image. For example, if you create an image of a creature and move it, you can alter the image so that it appears to be walking. Similarly, you can cause the illusion to make different sounds at different times, even making it carry on a conversation, for example. Physical interaction with the image reveals it to be an illusion, because things can pass through it. A creature that uses its action to examine the image can determine that it is an illusion with a successful Intelligence (Insight) check against your spell save DC. If a creature discerns the illusion for what it is, the creature can see through the image, and its other sensory qualities become faint to the creature.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>The spell lasts until dispelled without requiring your Concentration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Figment', 'Illusion', 'Visual', 'Auditory'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Make Manifest';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>You cause a creature on a coterminous or coexistent Plane, along with its personal belongings to appear on your Plane. From the Prime Material Plane, this includes the Astral, Ethereal, Fey Wild, and the Shadowfell. For the duration of the spell, the target creature retains all its abilities except for those that allow it to enter other planes.</p>
<p>You do not gain the ability to detect creatures on these coterminous planes with this spell.</p>
<p>At the end of the spell's duration, the target creature returns to whatever plane it was on before it was targeted by the spell, even if it has moved beyond the range of make manifest.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Forced onto your current Plane of existence</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 4);

        $spell              = new Spell;
        $spell->name        = 'Make Whole';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One object of up to 100 cubic feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell functions like mending, except that make whole completely repairs an object made of any substance, even one with multiple breaks, to be as strong as new.</p>
<p>The spell does not restore the magical abilities of a broken magic item made whole, and it cannot mend broken magic rods, staffs, or wands.</p>
<p>The spell does not repair items that have been warped, burned, disintegrated, ground to powder, melted, or vaporized, nor does it affect creatures (including constructs).</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the amount of volumn affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Malevolent Tentacles';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->spell_creator  = 'Kyristan';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>This spell functions similarly to Black Tentacles, except that the tentacles are formed of Negative Energy. Living creatures Grappled by the tentacles gain the Drained 1 condition unless they succeed a CON Save. The target must make this Save each round they are Grappled, increasing the Drained condition by +1 on each Failed Save.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Does not increase the Drained condition</dd>
    <dt>Failure</dt> <dd>Increase the Drained condition by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 6);
        $spell->materials()->save(Material::where('name', 'Creature Part')->firstOrFail(), ['meta' => 'A piece of tentacle from a Giant Octopus or Giant Squid']);

        $spell              = new Spell;
        $spell->name        = 'Mantle of Mystra';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Until used or up to 1 year';
        $spell->description = '<p>This spell creates an invisible magical aura around the caster. When a specific spell or magical item discharge (such as Fireball, but not all fiery spells) impinges on any part of this aura, the mantle instantly absorbs it, negating all of its effects, and converts it to another specific type of spell, hurling that spell back at the source of the original magic. The spell absorbed and sent back both must be lower level than the level of this spell when cast.</p>
<p>This action exhausts the mantle, ending its protection. (It otherwise lasts for up to 1 year, even if its caster later memorizes other spells, but it cannot survive contact with a Dispel Magic spell, and a given being can enjoy the protection of only one Mantle of Mystra at a time)</p>
<p>The returned spell behaves as if it were launched by a caster of the same level, alignment, and abilities as the caster of the first magic. Both the specific spell to be defended against and the spell it is to be converted to and sent back as must be chosen by the caster of the Mantle of Mystra during its casting and cannot be altered thereafter. The magic defended against must be one the mantle-caster has cast, felt the effects of, or observed the effects of, and they must know its specific name. The magic they send back must be a spell they have personally cast.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can name a higher level spell to be absorbed and/or sent back can be higher</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Aura'], 4);

        $spell              = new Spell;
        $spell->name        = 'Map';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>The spell creates a small ball of light that is equal to a Light spell. It floats above the target of the spell with a piece of parchment in front of it that draws out a map of the spell targets surroundings within range. The light will only map what it can see within range, so areas of magical darkness will not be mapped. The light has no ability to detect secret doors or pierce illusions of any kind.</p>
<p>The light can be countered by magical darkness just like any other light spell.</p>
<p>The map is vulnerable to attacks, such as from fire or water. The target of the spell can with an Action suspend the mapping and secure the parchment so that it will not be exposed to attack. The target of the spell can with another Action resume the mapping.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Light'], 2);

        $spell               = new Spell;
        $spell->name         = 'Mark of the Unfaithful';
        $spell->casting      = '1 minute (Material, Somatic, Verbal)';
        $spell->range        = 'Unlimited';
        $spell->targets      = 'One creature';
        $spell->requirements = '<dl>
    <dt>Secondary Casters<dt> <dd>You must have at one other caster of your faith of at least 5th level.</dd>
</dl>';
        $spell->duration     = 'Permanent';
        $spell->description  = '<p>You permanently place a mark upon a character or creature that identifies it as an enemy of the faith. Anyone of your faith who encounters the bearer , even if he is desguised, altered, or polymorphed, feels a natural hostility toward that person and gains a +5 circumstance bonus on Sense Motive checks made against the marked creature. This hostility might not induce the viewer to attack, but they certainly will not be inclined to trust or believe anything the marked one says.</p>
<p>Priests, Paladins, Druids, and Rangers of the faith can automatically detect the mark simply by looking at the subject.</p>
<p>This spell is permanent until dispelled or removed by a cleric of the same faith, of higher level than the caster, who casts an Atonement spell upon the subject.</p>
<dl>
    <dt>Material Components</dt> <dd>You must inscribe the targets name into a book or scroll especially consecrated for this purpose and detaileng the crimes (real or imagined) for which the subject is being marked.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Maskstone';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = '10 square-foot of area';
        $spell->duration    = '5 years';
        $spell->description = "<p>This spell alters the appearance of stone to hide seems, openings, traps, runes, doors, and so on. The caster touches the central point of the area to be masked, and visualizes what appearance is desired. The spell cloaks the stone with the visualized, long-term illusion.</p>
<p>Features of the stone under this spell remains physically unchanged and traceable. A known door can be felt for and located.</p>
<p>A dwarf, duergar, gnome, xorn or other subterranean dweller encountering the spell effect can tell the stone surface has been magically masked, but not what the true surface appearance is. Features affixed to the stone's surface (such as maps or inscriptions) are hidden by this magic.</p>
<p>The reverse of this spell will clearly outline (momentarily illuminating) secret or hidden doors, panels, cavities, storage niches, catches, locks, and other deliberately-hidden features. These features will be revealed if the stone has a Maskstone spell on it or if it is simply in poorly-lit of confusing natural conditions.</p>
<dl>
    <dt>Material Components</dt> <dd>An eyelash (from any creature) and a pinch of dust or sand</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the area of effect</dd>
    <dt>Heightened (+1)</dt> <dd>Add an additional 5 years to the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Earth'], 2);

        $spell              = new Spell;
        $spell->name        = 'Masque Mask';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>This spell is used to conceal your identity. It only works on beings who have faces (creatures with multiple heads can benefit from this spell), and only living flesh.</p>
<p>The spell transforms the surface appearance of your facial features into a shifting blur, studded with eyes. Your eyes will appear in their customary location and with their usual appearance. The spell does not alter the number of eyes (so if one of your eyes was blinded, then your appearance will only have one eye, and if you have more than 2 eyes, then they will also show and you cannot alter the number of eyes with this spell).  This spell does not conceal hair hue or cut, general skin coloration, ear shape, and so on, and is therefore seldom able to conceal the race of the caster.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by 10 minutes.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Mass Polymorph';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '120 feet';
        $spell->duration       = 'Concentration, up to 1 hour';
        $spell->description    = "<p>You transform up to ten creatures of your choice that you can see within range. An unwilling target must succeed on a WIS Save to resist the transformation. An unwilling shapechanger automatically succeeds on the Save.</p>
<p>Each target assumes a beast form of your choice, and you can choose the same form or different ones for each target. The new form can be any beast you have seen whose challenge rating is equal to or less than the target’s (or half the target’s level, if the target doesn’t have a challenge rating). The target’s game statistics, including mental ability scores, are replaced by the statistics of the chosen beast, but the target retains its hit points, alignment, and personality.</p>
<p>Each target gains a number of temporary hit points equal to the hit points of its new form. These temporary hit points can’t be replaced by temporary hit points from another source. A target reverts to its normal form when it has no more temporary hit points or it dies. If the spell ends before then, the creature loses all its temporary hit points and reverts to its normal form.</p>
<p>The creature is limited in the actions it can perform by the nature of its new form. It can’t speak, cast spells, or do anything else that requires hands or speech. The target’s gear melds into the new form.</p>
<p>The target can't activate, use, wield, or otherwise benefit from any of its equipment.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Massacre';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60-foot line';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You unleash a wave of Necromantic energy to snuff out the life force of those in its path.</p>
<p>Each living creature in the line must make a CON Save. If the damage from Massacre reduces a creature to 0 Hit Points, that creature dies instantly. If Massacre doesn't kill even a single creature, the Negative energy violently explodes back toward you, dealing an additional 30 Negative to you.</p>";
        $spell->heightened = '<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>The creature takes 5D6 Negative damage</dd>
    <dt>Failure</dt> <dd>The creature takes 9D6 Negative damage</dd>
    <dt>Critical Failure</dt> <dd>The creature dies</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 9);

        $spell              = new Spell;
        $spell->name        = 'Maze';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You banish a creature that you can see within range into a labyrinthine demiplane. The target remains there for the duration or until it escapes the maze.</p>
<p>The target can use its action to attempt to escape. When it does so, it makes a DC 20 Intelligence check. If it succeeds, it escapes, and the spell ends (a minotaur or goristro demon automatically succeeds).</p>
<p>When the spell ends, the target reappears in the space it left or, if that space is occupied, in the nearest unoccupied space.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 8);

        $spell              = new Spell;
        $spell->name        = 'Mechanus Mind';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>Like entities that inhabit the plane of Mechanus, the subject of Mechanus mind temporarily becomes a being of focused order.</p>
<p>The subject gains a +4 bonus on WIS Saves to resist spells with the Mental type.</p>
<p>While in the grip of Mechanus mind, the subject also becomes more analytical and less emotional.</p>
<p>The subject gains a +2 bonus on all INT-based checks, but takes a -2 penalty on CHA-based checks.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Lawful', 'Compulsion'], 2);

        $spell              = new Spell;
        $spell->name        = 'Meld into Stone';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '8 hours';
        $spell->description = "<p>You step into a stone object or surface large enough to fully contain your body, melding yourself and all the equipment you carry with the stone for the duration. Using your movement, you step into the stone at a point you can touch. Nothing of your presence remains visible or otherwise detectable by nonmagical senses.</p>
<p>While merged with the stone, you can't see what occurs outside it, and any Wisdom (Perception) checks you make to hear sounds outside it are made with disadvantage. You remain aware of the passage of time and can cast spells on yourself while merged in the stone. You can use your movement to leave the stone where you entered it, which ends the spell. You otherwise can't move.</p>
<p>Minor physical damage to the stone doesn't harm you, but its partial destruction or a change in its shape (to the extent that you no longer fit within it) expels you and deals 6d6 bludgeoning damage to you. The stone’s complete destruction (or transmutation into a different substance) expels you and deals 50 bludgeoning damage to you. If expelled, you fall prone in an unoccupied space closest to where you first entered.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell                = new Spell;
        $spell->name          = 'Mending';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->range         = 'Touch';
        $spell->spell_creator = 'Aksa';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>This spell repairs a single break or tear in an object you touch, such as a broken chain link, two halves of a broken key, a torn cloak, or a leaking wineskin. As long as the break or tear is no larger than 1 foot in any dimension, you mend it, leaving no trace of the former damage.</p>
<p>This spell can physically repair a magic item or construct, but the spell can’t restore magic to such an object.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ritual'], 0);
        $spell->materials()->save(Material::where('name', 'Lodestone')->firstOrFail(), ['meta' => '2 Lodestones']);

        $spell                 = new Spell;
        $spell->name           = 'Mesmerizing Gaze';
        $spell->casting        = 'Somatic Casting';
        $spell->save_attribute = 'WIS';
        $spell->area           = '30-foot cone with you at the apex';
        $spell->targets        = 'Up to 2 living creatures in the area';
        $spell->duration       = 'Concentration + Action, up to 5 rounds';
        $spell->description    = "<p>You gain a Gaze attack. As an Action, you can stare in a direction, your gaze is a 30-foot cone shape emanation. You may pick up to 3 targets in the area. If they are able to see you, they must make a WIS Save or be Dazed: 5. On each of your turns, you must use an Action to maintain the Dazed condition on those that Failed their Save. You may use an additional Action to force new targets or previous targets that Succeeded their Save to make a WIS Save or be Dazed for the duration. You may never have more Dazed targets then your maximum allowed limit.</p>
<p>Any potential threat (such as an armed opponent moving behind the mesmerized creature) allows the creature a new Save. Any obvious threat, such as casting a spell, drawing a sword, or aiming an arrow, automatically breaks the effect, as does shaking or slapping the creature.</p>
<p>A mesmerized creature's ally may shake it free of the spell as an Action.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not Dazed</dd>
    <dt>Failure</dt> <dd>Dazed for as long as you use an Action to maintain the Gaze attack. Any potential threat allows another Save and any obvious threat ends the Dazed condition.</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of possible Targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Visual', 'Compulsion'], 2);

        $spell              = new Spell;
        $spell->name        = 'Message';
        $spell->casting     = 'Material Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = '1 round';
        $spell->description = "<p>You point your finger toward a creature within range and whisper a message. The target (and only the target) hears the message and can reply in a whisper that only you can hear.</p>
<p>You can cast this spell through solid objects if you are familiar with the target and know it is beyond the barrier. Magical silence, 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood blocks the spell. The spell doesn't have to follow a straight line and can travel freely around corners or through openings.</p>";
        $helper->addTypesToSpell($spell, ['Illusion'], 0);

        $spell              = new Spell;
        $spell->name        = 'Message Link';
        $spell->casting     = '1 minute (Somatic Casting, Verbal Casting)';
        $spell->range       = 'Touch';
        $spell->targets     = 'You and one creature touched';
        $spell->duration    = '3 hours';
        $spell->description = "<p>You and the Target can communicate verbally no matter the distance from each other so long as both are on the same Plane. Either participant can end the spell at any time.</p>
<p>You and the Target can hear the other's vocalizations, whatever their volume. It does not transfer other sounds from either participant's location.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the number of Targets by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Meteor Swarm';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '1 mile';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Blazing orbs of fire plummet to the ground at four different points you can see within range. Each creature in a 40-foot-radius sphere centered on each point you choose must make a DEX Save. The sphere spreads around corners. A creature takes 20D6 fire damage and 20D6 bludgeoning damage. A creature in the area of more than one fiery burst is affected only once.</p>
<p>The spell damages objects in the area and ignites flammable objects that aren’t being worn or carried.</p>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>One quarter damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Transmutation', 'Fire'], 9);

        $spell              = new Spell;
        $spell->name        = 'Might of Mystra';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 day or until discharged';
        $spell->description = '<p>Once you cast this spell, you can copy any spell cast that you observe being cast or have just witnessed cast. You do not need to provide the Material Components of the copied spell. You cannot copy a spell that is equal or higher level than the Spell Slot that was used to cast this spell. The decision to copy a spell must be made the round after it is witnessed or the ability to use this spell to copy that spell is lost. Once this spell copies another spell, it ends; otherwise it ends after one day has passed.</p>
<p>All effects are the same, even if the spell to be copied is modified with Meta Magic (you do not need to spend any Spell Points). If the spell requires any decisions to be made or targets to select, you make those decisions when the spell is copied.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can copy a higher level spell.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Mimicry';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You can perfectly mimic familiar sounds, voices, and accents. These sounds can be any that you've heard before, and must be within the range of noises your voice is capable of creating.</p>
<p>For example, a normal human voice could recreate the roar of a lion. It could not reproduce the rumble of a collapsing building or a high-pitched noise audible only to bats.</p>
<p>This spell does not allow you to speak languages you can't normally speak.</p>
<p>You can duplicate a specific individual's voice by making a Deception (Impersonate) check; a listener familiar with the voice being imitated must succeed on an opposed Sense Motive check to discern that the voice is not genuine.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion'], 1);

        $spell              = new Spell;
        $spell->name        = 'Mind Blank';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '8 hours';
        $spell->description = '<p>Until the spell ends, one willing creature you touch is immune to psychic damage, any effect that would sense its emotions or read its thoughts, divination spells, and the charmed condition. The spell even foils wish spells and spells or effects of similar power used to affect the target’s mind or to gain information about the target.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Mental'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Mind Poison';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Touch';
        $spell->targets        = 'Living creature touched';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You infect the target with a poison that saps willpower. The target must make a CON Save or suffer 2D4 WIS damage.</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of toadstool</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No damage</dd>
    <dt>Failure</dt> <dd>2D4 WIS Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Mental'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Mind Prison';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->save_attribute = 'INT';
        $spell->description    = "<p>You attempt to bind a creature within an illusory cell that only it perceives. One creature you can see within range must make an INT Save. The target succeeds automatically if it is immune to being Charmed. On a successful Save, the spell ends. On a failed Save, you make the area immediately around the target's space appear dangerous to it in some way.</p>
<p>You might cause the target to perceive itself as being surrounded by fire, floating razors, or hideous maws filled with teeth. Whatever form the illusion takes, the target can't see or hear anything beyond it and is Restrained for the spell's duration. If the target is moved out of the illusion, makes a melee attack through it, or reaches and part of its body through it, the target takes 10D10 Subdual damage and the spell ends.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Spell ends</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm', 'Mental'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Mind Sliver';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'INT';
        $spell->duration       = '1 round';
        $spell->description    = '<p>You drive a disorienting spike of energy into the mind of one creature you can see within range. The target must make an INT Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Take 1D6 Mental damage</dd>
    <dt>Failure</dt> <dd>Take 1D6 Mental damage and, until the beginning of your next turn, has Disadvantage on next DEX, INT, WIS, or CHA Save</dd>
    <dt>Critical Failure</dt> <dd>Take 1D6 Mental damage and, until the beginning of your next turn, automatically Fails next DEX, INT, WIS, or CHA Save</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+4)</dt> <dd>Increase the Mental damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm', 'Mental'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Mindburn';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'INT';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>The target must make an INT Save or lose one of its highest-level remaining Spell Slot.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Target loses one of its highest level remaining Spell Slots</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Compulsion', 'Mental'], 2);

        $spell              = new Spell;
        $spell->name        = 'Minor Illusion';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a sound or an image of an object within range that lasts for the duration. The illusion also ends if you dismiss it as an action or cast this spell again.</p>
<p>If you create a sound, its volume can range from a whisper to a scream. It can be your voice, someone else’s voice, a lion’s roar, a beating of drums, or any other sound you choose. The sound continues unabated throughout the duration, or you can make discrete sounds at different times before the spell ends.</p>
<p>If you create an image of an object—such as a chair, muddy footprints, or a small chest—it must be no larger than a 5-foot cube. The image can’t create sound, light, smell, or any other sensory effect. Physical interaction with the image reveals it to be an illusion, because things can pass through it.</p>
<p>If a creature uses its action to examine the sound or image, the creature can determine that it is an illusion with a successful Intelligence (Insight) check against your spell save DC. If a creature discerns the illusion for what it is, the illusion becomes faint to the creature.</p>';
        $helper->addTypesToSpell($spell, ['Auditory', 'Figment', 'Illusion', 'Visual'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Minute Meteors';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->spell_creator  = 'Melf';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>You create six tiny meteors in your space. They float in the air and orbit you for the spell’s duration. When you cast the spell — and as a bonus action on each of your turns thereafter — you can expend one or two of the meteors, sending them streaking toward a point or points you choose within 120 feet of you. Once a meteor reaches its destination or impacts against a solid surface, the meteor explodes. Each creature within 5 feet of the point where the meteor explodes must make a DEX Save. A creature takes 2D6 Fire damage on a failed save, or half as much damage on a successful one.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Full damage</dd>
    <dt>Failure</dt> <dd>Half damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number of meteors by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 3);

        $spell              = new Spell;
        $spell->name        = 'Miracle';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You beseech your god to intervene on your behalf. A Miracle spell can produce any one of the following effects.</p>
<ul>
    <li>Duplicate any Divine spell of 9th level or lower.</li>
    <li>Duplicate any non-Divine spell of 7th level or lower.</li>
    <li>Produce any effect whose power level is in line with the above effects.</li>
</ul>
<p>The GM might allow you to try using wish to produce greater effects than these, but doing so might be dangerous or the spell might have only a partial effect.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 10);

        $spell              = new Spell;
        $spell->name        = 'Mirage Arcane';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Sight';
        $spell->duration    = '10 days';
        $spell->description = '<p>You make terrain in an area up to 1 mile square look, sound, smell, and even feel like some other sort of terrain. The terrain’s general shape remains the same, however.</p>
<p>Open fields or a road could be made to resemble a swamp, hill, crevasse, or some other difficult or impassable terrain. A pond can be made to seem like a grassy meadow, a precipice like a gentle slope, or a rock-strewn gully like a wide and smooth road.</p>
<p>Similarly, you can alter the appearance of structures, or add them where none are present. The spell doesn’t disguise, conceal, or add creatures.</p>
<p>The illusion includes audible, visual, tactile, and olfactory elements, so it can turn clear ground into difficult terrain (or vice versa) or otherwise impede movement through the area. Any piece of the illusory terrain (such as a rock or stick) that is removed from the spell’s area disappears immediately.</p>
<p>Creatures with truesight can see through the illusion to the terrain’s true form; however, all other elements of the illusion remain, so while the creature is aware of the illusion’s presence, the creature can still physically interact with the illusion.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 7);

        $spell              = new Spell;
        $spell->name        = 'Mirror Image';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>Three illusory duplicates of yourself appear in your space. Until the spell ends, the duplicates move with you and mimic your actions, shifting position so it's impossible to track which image is real. You can use your action to dismiss the illusory duplicates.</p>
<p>Each time a creature targets you with an attack during the spell’s duration, roll a d20 to determine whether the attack instead targets one of your duplicates.</p>
<p>If you have three duplicates, you must roll a 6 or higher to change the attack's target to a duplicate. With two duplicates, you must roll an 8 or higher. With one duplicate, you must roll an 11 or higher.</p>
<p>A duplicate’s AC equals 10 + your DEX modifier. If an attack hits a duplicate, the duplicate is destroyed. A duplicate can be destroyed only by an attack that hits it. It ignores all other damage and effects. The spell ends when all three duplicates are destroyed.</p>
<p>A creature is unaffected by this spell if it can't see, if it relies on senses other than sight, such as blindsight, or if it can perceive illusions as false, as with truesight.</p>";
        $helper->addTypesToSpell($spell, ['Figment', 'Illusion', 'Visual'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Misdirection';
        $spell->casting        = '1 minute (Somatic, Verbal)';
        $spell->save_attribute = 'INT';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature or object and another creature or object';
        $spell->duration       = '3 hours';
        $spell->description    = '<p>By means of this spell, you misdirect the information from Divination spells that reveal auras.</p>
<p>On casting this spell, you choose another object within range. For the Duration of the spell, the targets of this spell detect as if it were the other object. Detection spells provide information based on the second object rather than on the actual target of the detection unless they make an INT Save.</p>
<p>For example, you could make yourself detect as a tree if one were within range at casting: not evil, not lying, not magical, neutral in alignment, and so forth.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The Divination spell detects the correct aura</dd>
    <dt>Failure</dt> <dd>The Divination spell detects the other creature or objects aura</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor', 'Ritual'], 2);

        $spell                = new Spell;
        $spell->name          = 'Mislead';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Enollar';
        $spell->duration      = 'Concentration, up to 1 minute';
        $spell->description   = "<p>You turn yourself invisible and create an illusory duplicate of yourself. When you Concentrate on the Spell, you can mentally dictate a course of action for your duplicate to follow that round. Your duplicate acts as though it had your full number of actions, though it can't actually affect anything in the environment. Both the invisibility and the duplicate remain as long as you concentrate.</p>
<p>Per the Invisibility spell, committing a hostile action doesn't end this spell's invisibility. A creature that determines the duplicate is an illusion doesn't necessarily know you're invisible, and one that can see your invisible form doesn't necessarily know that your duplicate is an illusion</p>
<p>If you cast a spell, attack, or otherwise interact with another creature, you can attempt a Deception check as part of that action against observer's Perception DCs to convice them your duplicate took that action. This doesn't fool anyone who's aware your duplicate is an illusion, nor does it work if the attack obviously couldn't have come from the dupulicate.</p>";
        $helper->addTypesToSpell($spell, ['Figment', 'Illusion', 'Visual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Misty Step';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->range       = '30 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Briefly surrounded by silvery mist, you Teleport up to 30 feet to an unoccupied space that you can see.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Range</dd>
    <dt>Heightened (+2)</dt> <dd>The spell has a duration of 1 minute. During the duration, you may use an Action to Teleport up to 30 feet</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Misty Step, Greater';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You grant another creature the ability to use Misty Step for the Duration</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Range</dd>
    <dt>Heightened (+1)</dt> <dd>You may Target an additional 2 targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 5);

        $spell              = new Spell;
        $spell->name        = 'Modify Age';
        $spell->casting     = '8 hours (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You perform an intricate ritual on another creature, reducing or increasing (your choice) its apparent age by up to 3D10 years. A creature's appearance cannot be reduced below the age of maturity or above the life expectancy for its race via this spell. Also, this effect does not extend the creature's lifespan.</p>";
        $helper->addTypesToSpell($spell, ['Chronomancy', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Modify Foretelling';
        $spell->casting     = '10 minutes (Somatic)';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You may modify a Foretelling result by +/-1. A Foretelling may be modified by this spell only once.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 0);

        $spell              = new Spell;
        $spell->name        = 'Modify Memory';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You attempt to reshape another creature's memories. One creature that you can see must make a WIS Save. If you are fighting the creature, it has Advantage on the Save. On a failed Save, the target becomes charmed by you for the duration. The charmed target is incapacitated and unaware of its surroundings, though it can still hear you. If it takes any damage or is targeted by another spell, this spell ends, and none of the target's memories are modified. While this charm lasts, you can affect the target's memory of an event that it experienced within the last 24 hours and that lasted no more than 10 minutes. You can permanently eliminate all memory of the event, allow the target to recall the event with perfect clarity and exacting detail, change its memory of the details of the event, or create a memory of some other event. You must speak to the target to describe how its memories are affected, and it must be able to understand your language for the modified memories to take root. Its mind fills in any gaps in the details of your description. If the spell ends before you have finished describing the modified memories, the creature's memory isn't altered. Otherwise, the modified memories take hold when the spell ends. A modified memory doesn't necessarily affect how a creature behaves, particularly if the memory contradicts the creature's natural inclinations, alignment, or beliefs. An illogical modified memory, such as implanting a memory of how much the creature enjoyed dousing itself in acid, is dismissed, perhaps as a bad dream. The GM might deem a modified memory too nonsensical to affect a creature in a significant manner. A remove curse or greater restoration spell cast on the target restores the creature's true memory.</p>";
        $spell->heightened  = "<dl>
    <dt>Heightened (+1)</dt> <dd>You can alter the target's memories of an event that took place up to 7 days ago</dd>
    <dt>Heightened (+2)</dt> <dd>You can alter the target's memories of an event that took place up to 30 days ago</dd>
    <dt>Heightened (+3)</dt> <dd>You can alter the target's memories of an event that took place up to 1 year ago</dd>
    <dt>Heightened (+4)</dt> <dd>You can alter the any memory in the target's past</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 5);

        $spell              = new Spell;
        $spell->name        = 'Mold Earth';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '5-foot cube. 30 foot range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You choose a portion of dirt or stone that you can see within range and that fits within 5-foot cube. You manipulate it in one of the following ways.</p>
<ul>
    <li>If you target an area of loose earth, you can instantaneously excavate it, move it along the ground, and deposit it up to 5 feet away. This movement doesn’t have enough force to cause damage.</li>
    <li>You cause shapes, colors, or both to appear on the dirt or stone, spelling out words, creating images, or shaping patterns. The changes last for 1 hour.</li>
    <li>If the dirt or stone you target is on the ground, you cause it to become difficult terrain. Alternatively, you can cause the ground to become normal terrain if it is already difficult terrain. This change lasts for 1 hour.</li>
</ul>
<p>If you cast this spell multiple times, you can have no more than two of its non-Instantaneous effects active at a time, and you can dismiss such an effect as an Action.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 0);

        $spell              = new Spell;
        $spell->name        = 'Mold Metal';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '5 inches';
        $spell->targets     = 'Less than 5 lbs of heated metal';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You can modify the shape of forge heated metal. It is used to finish the forging process. This spell cannot be used to harden or mix different metals into allows.</p>
<p>This spell can be used to form the overall shape of a piece of metal forged item, sharpen an edge of a blade or otherwise attain some desired shape. While this spell can shape an edge, it is still common to stone grind the edge further after heat treating.</p>
<p>This spell is not intended to replace the forging process. Typically, this spell is used to form perfectly straight cuts in a forge heated piece of metal. This spell will not weld pieces of metal together.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 1);

        $spell              = new Spell;
        $spell->name        = 'Mold Touch';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Object touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You cause a 5-foot diameter patch of Brown Mold to appear. To make it appear on an enemy, you must make a Melee Touch Attack. Starting on your next turn, the Brown Mold acts normally. It is not controlled by you in any way.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Monstrosity Form';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = "<p>You transform into the shape of a legendary monster, assuming a Huge battle form. You must have enough space to expand into or the spell is lost. You count as an animal in addition to your normal traits while in this form. Your gear is absorbed into your form; your constant abilities of your gear still function, but you can't activate any item abilities. When you transform, you gain the following:</p>
<ul>
    <li>AC 36 (TAC 33) and ignore your armor's check penalty and Speed reduction.</li>
    <li>One or more natural melee attacks, which are the only types of attacks you can use. You're trained with them. When attacking with them, your attack modifier is +26 and the damage bonus is listed with your attacks. These are STR-based attacks (for the purposes of the enfeebled condition, for example).</li>
    <li>20 temporary Hit Points that go away when you leave your battle form.</li>
    <li>Darkvision</li>
    <li>Athletics +27 (unless your own total modifier is higher).</li>
</ul>
<p>The special statics of your battle form can be adjusted only by penalties, circumstance bonuses, and conditional bonuses. Your battle form prevents you from casting spells, speaking, or using most actions with the Manipulate trait that require your hands (the GM determines which manipulate actions you can spend if there's doubt). You can dismiss this spell by using an action (this action has the concentrate trait).</p>
<p>When you prepare the spell, choose the creature you wish to turn into from the following options. When in battle form, you gain the attacks, movement types, and special abilities listed.</p>
<ul>
    <li>
        <strong>Phoenix</strong>
        <dl>
            <dt>Beak (reach 15 feet)</dt> <dd>Damage 2D6+12 piercing plus 2D4 fire and 2D4 persistent fire</dd>
            <dt>Talon (agile, reach 15 feet)</dt> <dd>Damage 2D8+12 slashing</dd>
            <dt>Move</dt> <dd>30 feet</dd>
            <dt>Fly</dt> <dd>90 feet</dd>
        </dl>
        <p>Shroud of Flame: You gain a divine fire aura that extends out 20 feet from you. A creature that enters or ends its turn within the aura takes 2D6 fire damage. A creature can take this damage only once per turn. You can spend 1 action with the concentrate trait to activate or deactivate this aura.</p>
    </li>
    <li>
        <strong>Purple Worm</strong>
        <dl>
            <dt>Jaws (reach 10 feet)</dt> <dd>Damage 2D12+20 piercing</dd>
            <dt>Stinger (agile, reach 10 feet)</dt> <dd>Damage 2D8+15 piercing plus 2D6 persistent poison</dd>
            <dt>Body (reach 10 feet)</dt> <dd>Damage 2D8+20 bludgeoning</dd>
            <dt>Move</dt> <dd>40 feet</dd>
            <dt>Burrow</dt> <dd>30 feet</dd>
            <dt>Swim</dt> <dd>20 feet</dd>
        </dl>
        <p>Inexorable: You automatically recover from the paralyzed, slowed, and stunned conditions at the end of each of your turns. You're also immune to being hampered and immobilized and ignore difficult terrain and greater difficult terrain.</p>
    </li>
    <li>
        <strong>Sea Serpent</strong>
        <dl>
            <dt>Jaws (reach 15 feet)</dt> <dd>Damage 2D12+20 piercing</dd>
            <dt>Tail (reach 25 feet)</dt> <dd>Damage 2D8+20 bludgeoning</dd>
            <dt>Move</dt> <dd>20 feet</dd>
            <dt>Swim</dt> <dd>90 feet</dd>
        </dl>
        <p>Spine Rake: You can spend a move action to extend your spines and swim or Stride. Each creature you're adjacent to at any point during your movement takes 4D8+10 slashing damage (DEX DC 30 for half damage, or no damage on a critical success).</p>
    </li>
</ul>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 8);

        $spell              = new Spell;
        $spell->name        = 'Monstrous Regeneration';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You gain the Regeneration ability. You gain the following.</p>
<ul>
    <li>All attacks inflict Subdual Damage unless they are Fire, Acid, Poison, Disease, Starvation, Thirst, Suffocation or Disintegration</li>
    <li>At the beginning of your turn, you regenerate 3 Subdual Hit Points</li>
    <li>Severed body parts can be reattached as a Double Action. Severed parts that are not reattached wither and die normally.</li>
    <li>When the spell ends, all Subdual damage is converted to normal damage.</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target others with a range of Touch</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Healing'], 5);

        $spell              = new Spell;
        $spell->name        = 'Moon Blade';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>A 3-foot-long, blazing beam of moonlight springs forth from your hand. Anyone who can cast Moon Blade is proficient with it. It counts as any type of sword in terms of feats or abilities that grant bonuses for swords (such as Weapon Focus).</p>
<p>Make a Melee Touch attack. The blade deals 1D8 +3 Light damage (but there is no visible wound). You do not gain bonuses to Hit or Damage due to STR.</p>
<p>Undead however do suffer visible wounds, their substance boils away from its touch, and they take 2D8 + 10 per hit (including creatures that are in the Ethereal Plane).</p>
<p>A successful hit from a Moon Blade temporarily scrambles magic. Any creature hit must make a CON check or not be able to cast spells or spell-like abilities until the end of their next turn.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Moonbeam';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '120 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>A silvery beam of pale light shines down in a 5-foot-radius, 40-foot-high cylinder centered on a point within range. Until the spell ends, dim light fills the cylinder.</p>
<p>When a creature enters the spell's area for the first time on a turn or starts its turn there, it is engulfed in ghostly flames that cause searing pain, and it must make a CON Save. It takes 2D10 Positive damage on a Failed Save, or half as much damage on a Successful one.</p>
<p>A shapechanger makes its Save with Disadvantage. If it fails, it also instantly reverts to its original form and can't assume a different form until it leaves the spell's light.</p>
<p>On each of your turns after you cast this spell, you can use an Action to move the beam 60 feet in any direction.</p>
<p><strong>Materials</strong> Several seeds of any moonseed plant and a piece of opalescent feldspar</p>";
        $spell->heightened = '<dl>
    <dt>Heightened(+1)</dt> <dd>Increase the damage by +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Moonbow';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 3 rounds';
        $spell->description = '<p>You create 3 glowing motes of Electricity. As an Action, you may throw any number of these motes. You must make a Ranged Spell Attack to hit a target within Range, each mote dealing 8D6 Electricity Damage. You may target different targets or the same target. At the end of any turn where you do not throw at least one mote, the spell ends and all motes vanish.</p>
<dl>
    <dt>Material Components</dt> <dd>A small piece of moonstone</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Create an additional mote of Electricity and increase the maximum Duration by +1 round.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Moonfire';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '60 feet';
        $spell->area           = 'Cone shaped emanation';
        $spell->duration       = 'Instantaneous, see text';
        $spell->description    = "<p>You shoot a fiery white moonlight from your hand. Living creatures in the area feel an unnatural chill and takes 10D8 Light Damage unless they make a DEX Save. Undead and Shapechanges take Double Damage.</p>
<ul>
    <li>All magical auras within the cone glow with a faint blue light for 10 rounds.</li>
    <li>Disguised, shapechanged, or polymorphed creatures and objects in the spell's area at the time the spell is cast must make a separate WIS Save or immediately return to their normal forms.</li>
    <li>For the next 10 rounds, all Electricity effects deal no Damage. If the Electricity effect originates from outside the Area, the Cone blocks the Electricity. If the Electricity originates from inside the area, the effect is canceled.</li>
</ul>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half Damage and not forced to original shape</dd>
    <dt>Failure</dt> <dd>Full Damage and forced to change to original shape</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 9);

        $spell              = new Spell;
        $spell->name        = 'Move Earth';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 2 hours';
        $spell->description = "<p>Choose an area of terrain no larger than 40 feet on a side within range. You can reshape dirt, sand, or clay in the area in any manner you choose for the duration. You can raise or lower the area’s elevation, create or fill in a trench, erect or flatten a wall, or form a pillar. The extent of any such changes can’t exceed half the area’s largest dimension. So, if you affect a 40-foot square, you can create a pillar up to 20 feet high, raise or lower the square’s elevation by up to 20 feet, dig a trench up to 20 feet deep, and so on. It takes 10 minutes for these changes to complete.</p>
<p>At the end of every 10 minutes you spend concentrating on the spell, you can choose a new area of terrain to affect.</p>
<p>Because the terrain’s transformation occurs slowly, creatures in the area can’t usually be trapped or injured by the ground’s movement.</p>
<p>This spell can’t manipulate natural stone or stone construction. Rocks and structures shift to accommodate the new terrain. If the way you shape the terrain would make a structure unstable, it might collapse.</p>
<p>Similarly, this spell doesn't directly affect plant growth. The moved earth carries any plants along with it.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 6);

        $spell               = new Spell;
        $spell->name         = 'Mystic Aegis';
        $spell->casting      = 'Verbal Casting, Ability Damage';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = 'Instantaneous';
        $spell->description  = '<p>When you cast this spell, until the beginning of your next turn, the next spell that targets only you that is 4th Level or lower is Countered.</p>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum Spell Level by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Counterspell'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Mystic Lash';
        $spell->casting        = 'Somatic Casting';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'Self';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>You create a long whip of ghostly red energy that emanates from your hand and never harms you. You wield this weapon as if it were an actual whip and you were proficient in it.</p>
<p>Attacks with the mystic lash are Ranged Touch Attacks. The lash deals 1D8 points of Electrical damage +3. Since the lash is immaterial, your STR modifier does not apply to the damage. A creature hit with the lash must make a CON Save or be Stunned 1. If the lash hits its target, you may release it from your hand so that it continues to attack that target automatically, leaving your hand free. The lash attacks on your turn using your base attack value, although it can only attack once per round on its own.</p>
<p>If the lash's target falls unconscious, dies, or is destroyed, the lash returns to you on its next Action. If you do not grasp the lash on the round it returns, it dissipates, but otherwise you can use the lash on another creature and begin the cycle again.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Full Damage but not Stunned</dd>
    <dt>Failure</dt> <dd>Full Damage and Stunned</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity', 'Evil'], 3);

        $spell              = new Spell;
        $spell->name        = 'Mystic Surge';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = '1 round';
        $spell->description = '<p>The target of this spell is able to channel a greater amount of magical energy into their next spell before this spell expires. The next spell that the target casts is treated as if it was Heightened +1.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the amount that the next spell is Heightened by +1.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);
    }
}
