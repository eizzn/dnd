<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsISeeder extends Seeder
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

        $spell               = new Spell;
        $spell->name         = 'Ialyshae`Seldar`Wihylos';
        $spell->casting      = '1 day (Material, Somatic, Verbal, Secondary Casters, Skill Check)';
        $spell->duration     = 'Permanent';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>Up to 3 other casters</dd>
</dl>';
        $spell->description = "<p>Sacraments of Seldarine Blessing, Ritual of Complement</p>
<p>This High Magic spell creates many items of magic for the elves. The casters involved in this casting invoked their gods' attention and patronage to the working. Sometimes, the gods themselves directly infuse powers into the items that are being created and offer their divine assistance to the crafting of the item, and these items often become the relics of that god's faith.</p>
<p>Effectively, nearly any magical item that is considered an exclusively elven item by the spell.</p>
<p>This spell creates items with only one or two powers and a maximum of one combat effect unless the ritual gains the attention of a god. The maximum number of items created in one casting cannot exceed one quarter the weight of the involved High Magic caster.</p>
<ul>
    <li>Arrows and Bows blessed by Rillifane or Solonor</li>
    <li>Bracers (of archery, protection, etc.) blessed by Rillifane or Corellon</li>
    <li>Boots (of elvenkind, of the north) blessed by Rillifane</li>
    <li>Cloaks (of elvenkind, of the manta ray) blessed by Rillifane or Deep Sashelas</li>
    <li>Gems (tel`kiira, selu`kiira) blessed by Labelas or Corellon</li>
    <li>Swords (dragon-slayers, moonblades, etc.) usually blessed by any (or all) of a quartet of gods: Corellon, Sehanine, Erevan, Labelas</li>
</ul>";
        $helper->addTypesToSpell($spell, ['High Magic', 'Enchantment'], 6);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 20]);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'The materials needed to Craft the end magical item']);

        $spell              = new Spell;
        $spell->name        = 'Ice Armor';
        $spell->casting     = 'Somatic Casting, Verbal Casting, Material Casting';
        $spell->range       = '5 feet';
        $spell->duration    = '4 hours or until destroyed';
        $spell->description = "<p>You create a suit of armor made of ice. While cold to the touch, it does not harm the wearer, especially if worn over normal clothing (though it can hasten the effects of exposure in cold environments).</p>
<p>It offers the same protection as a breastplate, except it has Hardness 1 and 30 Hit Points. If the intended wearer is immersed in water when you cast the spell or surrounded by heavy snow, you may form the armor around the wearer (which can be you); otherwise the wearer must don the armor normally.</p>
<p>Attacks against the wearer that create heat or fire degrade the armor, reducing its AC by 1 for every 5 points of Fire damage the wearer takes; when the armor's bonus to AC reaches 0, the armor is destroyed.</p>
<p>Because the ice is slightly buoyant, the wearer gains a +2 circumstance bonus to Swim checks, except when swimming downward.</p>
<p>Druids can wear Ice Armor without penalty.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Cold', 'Water'], 2);
        $spell->materials()->save(Material::where('name', 'Water')->firstOrFail(), ['quantity' => '5 gallons of water']);

        $spell               = new Spell;
        $spell->name         = 'Ice Assassin';
        $spell->casting      = '8 hours (Material, Somatic, Verbal, Secondary Casters, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Secondary Caster</dt> <dd>At least 2 other caster, one must cast Summon Elemental and the other Locate Creature on the target</dd>
    <dt>Ability Damage</dt> <dd>4 CON Damage</dd>
</dl>';
        $spell->range        = 'Touch';
        $spell->duration     = 'Instantaneous';
        $spell->description  = '<p>This spell creates a living, breathing creature that is a near-perfect duplicate of an existing creature. The duplicate is formed entirely out of ice, but once the spell is in effect, it appears as an exact duplicate to all but you. You always see the ice assassin as an animated ice statue of the target. The ice assassin has the following.</p>
<ul>
    <li>The ice assassin possesses all the skills, abilities, and memories possessed by the original</li>
    <li>Its personality is warped and twisted by an all-consuming need to slay the original</li>
    <li>Can cast Locate Creature at will on the original only. If its quarry is outside the range of this effect, the ice assassin must rely on its own cleverness or advice from you to track the original.</li>
    <li>You have absolute control over the ice assassin, but it will not obey any command that does not aid in finding and killing the original. This has a range of 1,000 feet</li>
    <li>You possess a telepathic link to the ice assassin, and when you concentrate, you receive a clear image of the area surrounding the ice assassin as if you were scrying it.</li>
    <li>The ice assassin has the Cold type and has Vulnerability from Fire</li>
    <li>The ice assassin has no ability to improve itself (cannot gain levels, new spells, new skills, new feats, etc)</li>
    <li>The ice assassin cannot heal in the normal way. It can only be healed by the casting of spells with the Cold type. Each level of the spell heals 2 Hit Points.</li>
    <li>If the ice assassin is reduced to 0 hit points by any damage except for Fire damage, it explodes into a burst of icy shrapnel in a 20-foot radius that causes 7d6 points of Cold damage with a DEX Save for half damage. An ice assassin destroyed by Fire simply melts into a pool of water.</li>
</ul>
<p>Creatures familiar with the original might detect the ruse with a Successful Spot check.</p>
<dl>
    <dt>Material Components</dt> <dd>An ice statue of the original. Some portion of the original creature to be duplicated (hair, nail, etc) must be placed inside the ice statue. Powdered Diamond worth at least 20,000 gp, which the spell consumes.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow', 'Cold'], 8);

        $spell              = new Spell;
        $spell->name        = 'Ice Blade';
        $spell->casting     = 'Material Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>This spell creates a swirling sword-shaped formation of jagged, fast-swirling ice shards extending from you hand. Weightless and nonmetalic, it is considered a magic weapon for the purposes of determining what it can hit. You can use the sword to make a Melee Spell Attack. The sword deals 1D8 Slashing damage and 3D6 Cold damage.</p>
<dl>
    <dt>Material Components</dt> <dd>A shard of ice, glass, or crystal</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Ice Knife';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 ft range. 5-ft radius burst';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a shard of ice and fling it at one creature within range. Make a ranged spell attack against the target. On a hit, the target takes 1D10 piercing Damage. Hit or miss, the shard then explodes. The target and each creature within 5 feet of it must succeed on a DEX Save or take 1D6 Cold damage.</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>You create an additional shard of ice. You may target the same target or different targets.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Cold'], 1);

        $spell              = new Spell;
        $spell->name        = 'Ice Shape';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->area        = 'up to 100 cubic feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You can form an existing piece of ice into any shape. For example, you can make an ice weapon, a special trapdoor, or a crude idol. This spell also permits you to reshape an ice door to make an exit where one didn't exist or to seal a door shut. While it's possible to make crude coffers, doors, and so forth with this spell, fine detail isn't possible. Any shape with moving parts are not possible.</p>
<dl>
    <dt>Material Components</dt> <dd>Slush, which must be spread into roughly the desired shape of the ice object.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Area</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Cold'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Ice Slick';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '60 feet';
        $spell->area           = 'one 20-foot square';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>This spell covers a solid surface with a layer of slippery ice. Any creature entering the area or starts their turn in the area must make a Balance (DEX) check or fall Prone. Those that Succeed can move at half their Speed across the surface, or skate/glide across at normal Speed.</p>
<p>The duration is reduced to 5 rounds in climates that are not considered cold.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Move at half Speed through the area or skate/glide (no turns) through the area at normal Speed</dd>
    <dt>Failure</dt> <dd>Fall Prone</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Area</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Cold'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Ice Storm';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '20-foot-radius, 40-foot-high cylinder. 300 foot range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>A hail of rock-hard ice poinds the ground in a 20-foot-radius, 40-foot-high cylinder centered on a point within range. Each creature in the cylinder must make a DEX Save. The spell deals 2D8 Bludgeoning damage and 4D6 Cold damage.</p>
<p>Hailstones turn the storm's area of effect into difficult terrain until the end of your next turn.</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The target takes 1D6 Cold damage</dd>
    <dt>Success</dt> <dd>The target takes half Bludgeoning damage and 2D6 Cold damage</dd>
    <dt>Failure</dt> <dd>The target takes full damage</dd>
    <dt>Critical Failure</dt> <dd>The target takes damage as failure, plus the target falls prone</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The spell deals an additional 1D8 Bludgeoning damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Transmutation', 'Cold'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Icy Prison';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->targets        = 'One creature in range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>You trap the target in solid ice 10 inches thick. If the creature fails its Save, it is helpless, but can still breathe (the ice blocks line of effect to the target). If the target makes its Save, it gains the entangled condition but can otherwise act normally. Regardless of the target Saves, it takes 1 point of Cold damage per caster level each round it is helpless or entangled in the ice.</p>
<p>The ice has hardness 0 and 3 hit points per inch of thickness; if broken, the creature is freed. A creature can break the ice as a full-round action with a successful STR check (DC 15 + your caster level).</p>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Not encased in ice, but still takes damage</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
    <dt>Critical Failure</dt> <dd>As Failure, plus double Cold damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 5);

        $spell              = new Spell;
        $spell->name        = 'Identify';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You choose one object that you must touch throughout the casting of the spell. If it is a magic item or some other magic-imbued object, you learn its properties and how to use them, whether it requires attunement to use, and how many charges it has, if any. You learn whether any spells are affecting the item and what they are. If the item was created by a spell, you learn which spell created it.</p>
<p>If you instead touch a creature throughout the casting, you learn what spells, if any, are currently affecting it.</p>
<dl>
    <dt>Material Components</dt> <dd>A pearl worth at least 100 gp and an owl feather</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Illusion Purge';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '5-foot radius emanation, centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You surround yourself with a powerful sphere of magical clarity that negates all Illusions of 7th level or lower. Phantasms are unable to harm you and you see things that are altered by Illusion magic as they truly are. You also see Invisible objects that are hidden with Illusion magic.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the level of Illusion magic that this spell defeats</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 7);

        $spell              = new Spell;
        $spell->name        = 'Illusory Script';
        $spell->casting     = '1 minute (Material, Somatic)';
        $spell->range       = 'Touch';
        $spell->duration    = '10 days';
        $spell->description = '<p>You write on parchment, paper, or some other suitable writing material and imbue it with a potent illusion that lasts for the duration.</p>
<p>To you and any creatures you designate when you cast the spell, the writing appears normal, written in your hand, and conveys whatever meaning you intended when you wrote the text. To all others, the writing appears as if it were written in an unknown or magical script that is unintelligible. Alternatively, you can cause the writing to appear to be an entirely different message, written in a different hand and language, though the language must be one you know.</p>
<p>Should the spell be dispelled, the original script and the illusion both disappear.</p>
<p>A creature with truesight can read the hidden message.</p>
<p><strong>Material</strong> A lead-based ink worth at least 10 gp, which the spell consumes</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor', 'Ritual'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Image Swap';
        $spell->casting        = 'Verbal Casting';
        $spell->spell_creator  = 'Halaster Blackcloak';
        $spell->range          = '120 feet';
        $spell->targets        = 'You and touched objects weighing up to 1000 lbs';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You instantly swap locations with a Projected Image from a Projected Image spell. You always arrive exactly where your image previously stood, and you leave behind a Projected Image in your wake.</p>
<p>To anyone incapable of discerning that the Projected Image is an Illusion, the swap occurs without any visual clues. To anyone capable of discerning that the Projected Image is an Illusion, the swap appears effectively as a Dimension Door.</p>
<p>This spell has no effect if you do not have a Projected Image in effect. You maintain line of sight that is required for the Projected Image when you Teleport.</p>
<dl>
    <dt>Material Components</dt> <dd>A small replica of you (a doll)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Imbue with Adamantine';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Weapon touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>This spell grants one weapon the properties of Adamantine.</p>
<p>The weapon gains a +1 Enhancement bonus on attack rolls and bypasses Hardness when striking objects of sundering weapons, ignoring Hardnes less than 20. The affected weapon also has one-third more Hit Points than normal for the duration of the spell.</p>
<p>You can't cast this spell on a Natural Weapon, such as an Unarmed Strike. A monk's Unarmed Strike is considered a weapon, and thus it can be enhanced by this spell.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 6);

        $spell              = new Spell;
        $spell->name        = 'Imbue with Cold Iron';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Weapon Touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>This spell grants one weapon the properties of Cold Iron.</p>
<p>The weapon gains a +1 Enhancement bonus on attack rolls.</p>
<p>You can't cast this spell on a Natural Weapon, such as an Unarmed Strike. A monk's Unarmed Strike is considered a weapon, and thus it can be enhanced by this spell.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Imbue with Silvered';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Weapon Touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>This spell grants one weapon the properties of Silver.</p>
<p>The weapon gains a +1 Enhancement bonus on attack rolls.</p>
<p>You can't cast this spell on a Natural Weapon, such as an Unarmed Strike. A monk's Unarmed Strike is considered a weapon, and thus it can be enhanced by this spell.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Imbue with Spell Ability';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Permanent until discharged';
        $spell->description = "<p>You transfer some of your currently prepared spells, and the ability to cast them, to another creature. Only a creature with an INT score of at least 5 and a WIS score of at least 9. Only Divine Abjuration, Divination, and Healing spells can be transferred. The number and level of spells that the subject can be granted depends on their INT and WIS. Even multiple castings of this spell can't exceed these limits.</p>
<table>
    <thead>
        <tr>
            <th>Min INT</th>
            <th>Max Number of Spells</th>
            <th>Min WIS</th>
            <th>Max Level of Spells</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>5</th>
            <td>1</td>
            <th>9</th>
            <td>1</td>
        </tr>
        <tr>
            <th>11</th>
            <td>2</td>
            <th>15</th>
            <td>2</td>
        </tr>
        <tr>
            <th>18</th>
            <td>3</td>
            <th>19</th>
            <td>3</td>
        </tr>
    </tbody>
</table>
<p>The transferred spell's variables function according to your level and not the recipient.</p>
<p>Once you cast this spell, the Spell Slot used to cast it is sacrificed until the recipient casts all of the imbued spells or dies. You remain responsible to your patron deity for how the imbued spells are used.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Divine', 'Ritual'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Immolation';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Daltim';
        $spell->range          = '90 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>Flames wreathe one creature you can see within range. The target must make a DEX Save, taking 8D6 Fire damage. On a failed save, the target also burns for the spell's duration. The burning target sheds bright light in a 30-foot radius and dim light for an additional 30 feet. At the end of each of its turns, the target repeats the Save. It takes 4D6 Fire damage on a Failed Save, and the spell ends on a successful one. These magical flames can’t be extinguished by nonmagical means.</p>
<p>If damage from this spell kills a target, the target is turned to ash.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 5);

        $spell              = new Spell;
        $spell->name        = 'Immovable Object';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = 'Touch';
        $spell->targets     = 'Object touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You touch an object that weighs no more than 10 pounds and cause it to become magically fixed in place. You and the creatures you designate when you cast this spell can move the object normally. You can also set a password that, when spoken within 5 feet of the object, suppresses this spell for 1 minute.</p>
<p>If the object is fixed in the air, it can hold up to 4,000 pounds of weight. More weight causes the object to fall. Otherwise, a creature can use an Action to make a STR check against your spell save DC. On a success, the creature can move the object up to 10 feet.</p>
<dl>
    <dt>Material Components</dt> <dd>Gold dust worth at least 25 gp, which the spell consumes.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The DC to move the object increase by 5, it can carry an additional 8,000 pounds fo weight, and the duration increase to 24 hours. If the spell is heightened +4, then the duration is Permanent instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Immunity to Adhesive';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The spell confers upon the caster or another touched being temporary immunity to magical and natural stickiness (such as webs, pseudo-pods, etc.).</p>
<dl>
    <dt>Material Components</dt> <dd>Milkweed seeds, a drop of water, alcohol, tears, or spittle.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>You may target an additional target.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = "Impede Sun's Brilliance";
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '60 feet';
        $spell->area        = 'Cylinder 10-foot radius 20-foot high';
        $spell->duration    = '3 hours';
        $spell->description = "<p>This spell reduces the sun's light to a comfortable glow in an area. The following take effect in the area.</p>
<ul>
    <li>The temperature drops by 20 degrees</li>
    <li>Creatures in the area are not subject to sunburn and can begin to recover from sun glare and heat stroke.</li>
    <li>This spell has no effect on spells with the Light type.</li>
    <li>It offers no protection for creatures with vulnerability to the sun.</li>
</ul>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Area</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell               = new Spell;
        $spell->name         = 'Imprisonment';
        $spell->casting      = '1 day (Material, Somatic, Verbal)';
        $spell->range        = '30 feet';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 6 other spell casters</dd>
</dl>';
        $spell->duration    = 'Until dispelled';
        $spell->description = "<p>You create a magical restraint to hold a creature that you can see within range. The target must succeed on a WIS Save or be bound by the spell; if it succeeds, it is immune to this spell if you cast it again. While affected by this spell, the creature doesn't need to breathe, eat, or drink, and it doesn't age. Divination spells can't locate or perceive the target.</p>
<p>When you cast the spell, you choose one of the following forms of imprisonment.</p>
<dl>
    <dt>Burial</dt> <dd>
        <p>The target is entombed far beneath the earth in a sphere of magical force that is just large enough to contain the target. Nothing can pass through the sphere, nor can any creature teleport or use planar travel to get into or out of it.</p>
        <p>The special component for this version of the spell is a small mithral orb.</p>
    </dd>
    <dt>Chaining</dt> <dd>
        <p>Heavy chains, firmly rooted in the ground, hold the target in place. The target is restrained until the spell ends, and it can’t move or be moved by any means until then.</p>
        <p>The special component for this version of the spell is a fine chain of precious metal.</p>
    </dd>
    <dt>Hedged Prison</dt> <dd>
        <p>The spell transports the target into a tiny demiplane that is warded against teleportation and planar travel. The demiplane can be a labyrinth, a cage, a tower, or any similar confined structure or area of your choice.</p>
        <p>The special component for this version of the spell is a miniature representation of the prison made from jade.</p>
    </dd>
    <dt>Minimus Containment</dt> <dd>
        <p>The target shrinks to a height of 1 inch and is imprisoned inside a gemstone or similar object. Light can pass through the gemstone normally (allowing the target to see out and other creatures to see in), but nothing else can pass through, even by means of teleportation or planar travel. The gemstone can’t be cut or broken while the spell remains in effect.</p>
        <p>The special component for this version of the spell is a large, transparent gemstone, such as a corundum, diamond, or ruby.</p>
    </dd>
    <dt>Slumber</dt> <dd>
        <p>The target falls asleep and can’t be awoken.</p>
    </dd>
</dl>
<p>Ending the Spell. During the casting of the spell, in any of its versions, you can specify a condition that will cause the spell to end and release the target. The condition can be as specific or as elaborate as you choose, but the GM must agree that the condition is reasonable and has a likelihood of coming to pass. The conditions can be based on a creature’s name, identity, or deity but otherwise must be based on observable actions or qualities and not based on intangibles such as level, class, or hit points.</p>
<p>A dispel magic spell can end the spell only if it is cast as a 9th-level spell, targeting either the prison or the special component used to create it.</p>
<p>You can use a particular special component to create only one prison at a time. If you cast the spell again using the same component, the target of the first casting is immediately freed from its binding.</p>
<dl>
    <dt>Materials</dt> <dd>A vellum depiction or a carved statuette in the likeness of the target, and a special component that varies according to the version of the spell you choose, worth at least 500 gp per Hit Dice of the target</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Save DC by +3</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Ritual'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Incendiary Cloud';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '150 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>A swirling cloud of smoke shot through with white-hot embers appears in a 20-foot-radius sphere centered on a point within range. The cloud spreads around corners and is heavily obscured. It lasts for the duration or until a wind of moderate or greater speed (at least 10 miles per hour) disperses it.</p>
<p>When the cloud appears, each creature in it must make a DEX Save. A creature takes 10D8 Fire damage. A creature must also make this saving throw when it enters the spell’s area for the first time on a turn or ends its turn there.</p>
<p>The cloud moves 10 feet directly away from you in a direction that you choose at the start of each of your turns.</p>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>One quarter damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>As failure and the target is on fire, taking 1D10 Persistent Fire damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evocation', 'Fire'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Incite Riot';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '60 feet';
        $spell->area           = '30-foot radius emanation centered on any point within range';
        $spell->duration       = '1 round';
        $spell->description    = '<p>You sow discord among your enemies, spurring them to physical violence. Each creature that fails their WIS Save attacks the nearest creature on its next turn, whether friend or foe.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>On their next turn, attack the nearest creature with the best form of attack that they have available.</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the radius of the area by +10 feet</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +1 round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Auditory', 'Compulsion'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Incorporeal Nova';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '120 feet';
        $spell->area           = '60-foot radius burst';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A nova of dissolution dissipates the immaterial bodies of incorporeal, gaseous, or ectoplasmic creatures, destroying them instantly. This spell destroys 30 HD worth of creatures, affecting creatures with the lowest HD first.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Destroyed</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum amount of HD affected by +5 HD</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ectoplasm'], 5);

        $spell              = new Spell;
        $spell->name        = 'Infestation';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You cause a cloud of mites, fleas, and other parasites to appear momentarily on one creature you can see within range. The target must succeed on a CON Save, or it takes 1D6 Poison damage and moves 5 feet in a random direction if it can move and its speed is at least 5 feet. Roll a D4 for the direction: 1: North, 2: South, 3: East, 4: West. This movement doesn't provoke any Attacks of Opportunity, and if the direction rolled is blocked, the target doesn't move</p>
<p>The spell's damage increases to 2D6 when you reach 5th spell caster level, 3D6 when you reach 11th spell caster level, and 4D6 when you reach 17th level spell caster level.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning'], 0);

        $spell              = new Spell;
        $spell->name        = 'Insect Form';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until dismissed';
        $spell->description = '<p>You transform into an insect of size Puny. You may choose an insect with a Flying Speed of 20 or a Burrow Speed of 5.</p>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Insect Plague';
        $spell->casting        = 'Material Casting, Verbal Casting';
        $spell->range          = '300 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = '<p>Swarming, biting locusts fill a 20-foot-radius sphere centered on a point you choose within range. The sphere spreads around corners. The sphere remains for the duration, and its area is lightly obscured. The sphere’s area is difficult terrain. When the area appears, each creature in it must make a CON Save taking 4D10 piercing damage. A creature must also make this Save when it enters the spell’s area for the first time on a turn or ends its turn there.</p>
<dl>
    <dt>Materials</dt> <dd>A few grains of sugar, some kernels of grain, and a smear of fat</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Insidious Ear Worm';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '120 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = '<p>You play a catchy, silly little tune that gets stuck in the mind of the subject unless they make a WIS Save. The endlessly recycling melody makes it difficult for the target to cast spells or perform any other Action that requires Concentration. The target suffers a -4 penalty to all INT based Skill checks and Concentration checks. The target must Succeed a Concentration check to successfully cast a spell.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Maintain Concentration, or may cast a spell</dd>
    <dt>Failure</dt> <dd>Concentration is lost, or the spell casting fails</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Auditory'], 2);

        $spell              = new Spell;
        $spell->name        = 'Insight of Good Fortune';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One willing creature within range';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You toss a small golden die. It rolls toward the target creature, then disappears in a tiny flash of light. The target becomes lucky. While the spell is in effect, they may choose, as a Free Action, to gain Advantage on an Attack roll, Skill Check, Ability Check, or Save. After the target uses the Advantage roll, this spell ends.</p>
<dl>
    <dt>Material Components</dt> <dd>A golden die worth at least 20 gp (which the spell consumes)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 2);

        $spell              = new Spell;
        $spell->name        = 'Insignia of Alarm';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '1000 feet';
        $spell->targets     = 'All wearers of specially prepared insignia within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell alerts all wearers of a specific insignia within range. Such creatures hear a single mental \"ping\" (as the Alarm spell) when this spell is cast.</p>
<p>This spell requires significant preparation. Before using this spell you must forge specially crafted insignias. These can be crafted in the forms of amulets, badges, rings or similar object, but each one must bear the same logo, crest, or symbol. Each insignia costs 10 gp.</p>
<p>Militias, guilds, or churches within a city use this spell to call all its members together.</p>
<dl>
    <dt>Material Components</dt> <dd>A specially prepared insignia worth at least 20 gp and must bear the same logo, crest, or symbol.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Insignia of Blessing';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '1000 feet';
        $spell->targets     = 'All wearers of specially prepared insignia within range';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>This spell functions just like Insignia of Alarm except that the insignia wearers are also filled with courage. Each insignia wearer gains a +1 bonus to all Attack Rolls, Damage Rolls, Saves, and Ability Checks.</p>
<dl>
    <dt>Material Components</dt> <dd>A specially prepared insignia worth at least 20 gp and must bear the same logo, crest, or symbol.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 3);

        $spell              = new Spell;
        $spell->name        = 'Insignia of Healing';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '1000 feet';
        $spell->targets     = 'All wearers of specially prepared insignia within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell works just like Insignia of Alarm except that the insignia wearers are instead healed by Positive energy. The spell cures 3D8 points of Hit Points to all wearers of the insignia within range. If an undead is wearing an insignia, they suffer the healed amount as Positive damage.</p>
<dl>
    <dt>Material Components</dt> <dd>A specially prepared insignia worth at least 20 gp and must bear the same logo, crest, or symbol.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Necromancy', 'Healing', 'Positive'], 3);

        $spell              = new Spell;
        $spell->name        = 'Inspire Courage';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60-foot emanation';
        $spell->duration    = '1 round';
        $spell->description = '<p>You inspire yourself and your allies with words or tunes of encouragement. You and all allies in the area gain a +1 status bonus to attack rolls, damage rolls, and Saves against Fear effects.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Emotion', 'Mental'], 1);

        $spell              = new Spell;
        $spell->name        = 'Inspire Defense';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60-foot emanation';
        $spell->duration    = '1 round';
        $spell->description = "<p>You inspire yourself and your allies to protect themselves more effectively. You and all allies in the area gain a +1 status bonus to AC and Saves, as well as Resistance equal to half the Spell's Level to Physical Damage.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Emotion', 'Mental'], 3);

        $spell              = new Spell;
        $spell->name        = 'Instant Diversion';
        $spell->casting     = 'Reaction';
        $spell->targets     = 'Self';
        $spell->duration    = '3 rounds';
        $spell->description = "<p>As you spin around, you produce residual images of yourself, each of which splits off from your body and moves away.</p>
<p>One or more illusory doubles of you appear, spinning off from your original location as you turn in a circle. You create one double plus one for every four caster levels you have (minimum one, maximum five). You are then free to go elsewhere while your doubles move away in a manner of your choosing. The doubles move at your speed and can emit minor sounds such as footsteps or metal clanking, but they can only be made to move, withdraw, or run. Any successful attack against an illusory double destroys it. A double's Armor Class is equal to 10 + your size modifier + your DEX modifier.</p>
<p>Figments seem to react normally to area spells (such as looking as though they are burned or dead after being hit by a fireball).</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Figment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Instant Summons';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->duration    = 'Until dispelled';
        $spell->description = "<p>You touch an object weighing 10 pounds or fewer whose longest dimension is 6 feet or less. The spell leaves an invisible mark on its surface and invisibly inscribes the name of the item on the sapphire you use as the material component. Each time you cast this spell, you must use a different sapphire.</p>
<p>At any time thereafter, you can use your action to speak the item's name and crush the sapphire. The item instantly appears in your hand regardless of physical or planar distances, and the spell ends.</p>
<p>If another creature is holding or carrying the item, crushing the sapphire doesn't transport the item to you, but instead you learn who the creature possessing the object is and roughly where that creature is located at that moment.
Dispel magic or a similar effect successfully applied to the sapphire ends this spell's effect.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ritual'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Interminable Echo';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '60 feet';
        $spell->targets        = 'One living creature within range';
        $spell->duration       = '5 rounds';
        $spell->description    = "<p>The deep tolling of a bell echoes within the mind of the target. You fill the target's mind with a barrage of illusory sounds. The target takes a -10 penalty to Listen checks and 2D6 Sonic damage unless they save vs WIS.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>-10 penalty to Listen Checks and 2D6 Sonic damage for the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm', 'Mental', 'Sonic'], 4);

        $spell              = new Spell;
        $spell->name        = 'Interplanar Message';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'See Text';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 round (See Text)';
        $spell->description = "<p>This spell allows you to send a limited message of 25 words or less to the targeted creature, who may be on another plane when the message is received. The spell is usually used as a safety device to warn a friend that you have fallen into some trap or plane you cannot escape without help. It can also be used for other purposes, such as signaling that the coast is clear for others to join your planar journey.</p>
<p>As you cast the spell, you touch the creature you intend to communicate with. That creature should be able to understand your language (otherwise, when the magic is activated, the creature knows that you sent the message, but has no idea what the message is). At any time afterward, you may send a short interplanar message to that creature. The interplanar message pops into the target's mind, awake or asleep, and the target is aware that the message has been delivered. If the message arrives when the target is asleep, it may appear as a vivid dream that the target remembers upon awakening.</p>
<p>This spell does not obligate nor force the creature you communicate with to act. The target cannot reply to tell you its plans or intentions. The message reaches its target through the Astral Plane, so the spell cannot reach planes separate from (not coterminous to or coexistent with) the Astral Plane. The creature set to receive the interplanar message radiates a dim magical aura.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Conjuration'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Investiture of Lightning';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->range          = '60-foot long, 5-foot wide';
        $spell->save_attribute = 'Dex';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>Electricity arcs across your body, shedding dim light in a 15-foot radius. The electricity doesn't harm you. Until the spell ends, you gain the following benefits:</p>
<ul>
    <li>You gain Immunity to Electricity damage. If you are hit with an Electricity attack, extend the duration by 1 round.</li>
    <li>You may spend an Action and damage all creatures within 5 feet of you with 2D12 Electricity damage (no Save)</li>
    <li>You can use a Double Action to throw a bolt of lightning 60 feet long and 5 feet wide from you in a direction you choose. Each creature in the line must make a DEX Save. A creature takes 5D12 Electricity damage on a Failed Save, or half as much damage on a successful one.</li>
</ul>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Investiture of Flame';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->range          = '15-foot long, 5-foot wide';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>Flames race across your body, shedding bright light in a 30-foot radius and dim light for an additional 30 feet for the spell's duration. The flames don't harm you. Until the spell ends, you gain the following benefits:</p>
<ul>
    <li>You gain Immunity to Fire damage and have Resistance to Cold damage.</li>
    <li>Any creature that moves within 5 feet of you for the first time on a turn or ends its turn there takes 1D10 Fire damage.</li>
    <li>You can with an Action to create a line of fire 15 feet long and 5 feet wide extending from you in a direction you choose. Each creature in the line must make a DEX Save. A creature takes 4D8 Fire damage on a failed Save, or half as much damage on a successful one.</li>
</ul>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Investiture of Ice';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->range          = '15-foot cone';
        $spell->save_attribute = 'CON';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>Until the spell ends, ice rimes your body, and you gain the following benefits:</p>
<ul>
    <li>You gain Immunity to Cold damage and have Resistance to Fire damage.</li>
    <li>You can move across difficult terrain created by ice or snow without spending extra movement.</li>
    <li>The ground in a 10-foot radius around you is icy and is difficult terrain for creatures other than you. The radius moves with you.</li>
    <li>You can with a Double Action create a 15-foot cone of freezing wind extending from your outstretched hand in a direction you choose. Each creature in the cone must make a CON Save. A creature takes 4D6 Cold damage on a failed save, or half as much damage on a successful one. A creature that fails its save against this effect has its Speed halved until the start of your next turn.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Investiture of Stone';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->range          = '15-foot radius centered on you';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>Until the spell ends, bits of rock spread across your body, and you gain the following benefits.</p>
<ul>
    <li>You have Resistance to Bludgeoning, Piercing, and Slashing damage from nonmagical attacks.</li>
    <li>You can with an Action create a small earthquake on the ground in a 15-foot radius centered on you. Other creatures on that ground must succeed on a DEX Save or be knocked prone.</li>
    <li>You can move across difficult terrain made of earth or stone without spending extra movement. You can move through solid earth or stone as if it was air and without destabilizing it, but you can't end your movement there. If you do so, you are ejected to the nearest unoccupied space, this spell ends, and you are Stunned until the end of your next turn.</li>
    <li>Your Unarmed Strikes are now considered armed and deal 1D8 damage (unless you have a higher Unarmed Strike die from another source).</li>
    <li>You gain Advantage on all checks vs being Overrun, Pushed, Tripped, or Grappled</li>
    <li>You gain a +4 bonus to your STR and CON</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Investiture of Water';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->range          = '15-foot cube. 60 foot range';
        $spell->save_attribute = 'CON';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>Until the spell ends, water whirls around you, and you gain the following benefits:</p>
<ul>
    <li>You gain a Swim Speed equal to your Land Speed.</li>
    <li>You gain the ability to breathe water.</li>
    <li>You have Resistance to Piercing, and Slashing damage from nonmagical attacks.</li>
    <li>You gain Advantage on all Grapple checks. Any creature you successfully Grapple must start making drowning checks.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Investiture of Wind';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->range          = '15-foot cube. 60 foot range';
        $spell->save_attribute = 'CON';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>Until the spell ends, wind whirls around you, and you gain the following benefits:</p>
<ul>
    <li>Ranged weapon attacks made against you have Disadvantage on the attack roll.</li>
    <li>You gain a Fly Speed of 60 feet. If you are still flying when the spell ends, you fall, unless you can somehow prevent it.</li>
    <li>You can use an Action to create a 15-foot cube of swirling wind centered on a point you can see within 60 feet of you. Each creature in that area must make a CON Save. A creature takes 2D10 Bludgeoning damage on a Failed Save, or half as much damage on a successful one. If a Large or smaller creature fails the Save, that creature is also pushed up to 10 feet away from the center of the cube.</li>
    <li>You gain a +4 bonus to your DEX</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 6);

        $spell              = new Spell;
        $spell->name        = 'Invisibility';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature or object touched';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = '<p>The target becomes invisible. This makes it unseen to all creatures, though they can attempt to find the target, making it sensed by them instead (see page 303). If the target acts in a hostile manner, the spell is dismissed after that hostile action, reaction, free action, or activity is completed.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The spell is not dismissed if the target acts in a hostile manner.</dd>
    <dt>Permanency (Heightened +3)</dt> <dd>5,000 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor', 'Permanency'], 2);

        $spell              = new Spell;
        $spell->name        = 'Invisibility, Swift';
        $spell->casting     = 'Reaction';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>This spell functions like the spell Invisibility, except as noted here.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 2);

        $spell              = new Spell;
        $spell->name        = 'Invisibility Purge';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '15-foot radius emanation centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You surround yourself with a sphere of energy that negates all forms of Invisibility. Anything that is invisible in the area becomes visible while it is in the area.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Area by +15-feet of radius</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Invoke Magic';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>You cause a flicker of magic to momentarily exist in place where magic cannot normally function, such as within an Antimagic field, a Dead Magic area, or a null-magic plane. This allows you the ability to cast a single Spell of 4th level or lower, so long as you cast it before the start of your next turn.</p>
<p>Also, until the start of your next turn, your magical items function.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Invoke the Cerulean Sign';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->rarity         = 'Rare';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>When you cast this spell, you trance the Cerulean Sign in the air with a hand, leaving a glowing blue rune in the air for a brief moment before it flashes and fills the area with a pulse of Cerulean Light. Any Aberration within the area must make a CON Save or suffer the following ill effects.</p>
<table>
    <thead>
        <tr>
            <th>Aberration Hit Dice</th>
            <th>Effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Up to caster level +10</td>
            <td>None</td>
        </tr>
        <tr>
            <td>Up to caster level +5</td>
            <td>Sickened for 1 round</td>
        </tr>
        <tr>
            <td>Up to caster level</td>
            <td>Nauseated for 1 round</td>
        </tr>
        <tr>
            <td>Up to caster level -5</td>
            <td>Dazed for 1 round</td>
        </tr>
        <tr>
            <td>Up to caster level -10</td>
            <td>Stunned for 1 round</td>
        </tr>
    </tbody>
</table>
<p>Once a creature recovers from an effect, it moves up one level on the table. Thus, a creature that is stunned by this spell is Dazed the round after that, Nauseated the round after that, Sickened the round after that, then recovers fully the next round.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Suffer the effects one level less</dd>
    <dt>Failure</dt> <dd>Suffer the effects at the correct level</dd>
    <dt>Critical Failure</dt> <dd>Suffer the effects at one level higher</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Aberration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Invulnerability';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You are immune to all damage until the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 9);

        $spell              = new Spell;
        $spell->name        = 'Iron Body';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>This spell transforms your body into living iron, which grants you several powerful effects.</p>
<ul>
    <li>You gain Damage Reduction 15/Adamantine</li>
    <li>You gain immunity to Blindness, Critical Hits, Ability Score Damage, Deafness, Disease, Drowning, Electricity, Poison, Stunning, and all spells or effects that affect your physiology or respiration (because you have no physiology or respiration).</li>
    <li>You gain Resistance to Acid and Fire</li>
    <li>You gain a +6 Bonus to STR</li>
    <li>You suffer a -6 Penalty to DEX (to a min of 1)</li>
    <li>You Speed is reduced by half</li>
    <li>You gain the Improved Unarmed Strike Feat</li>
    <li>Your weight is increases by X10.</li>
    <li>You are affected by any spell that affects Golems or metal</li>
    <li>You do not need to breathe</li>
    <li>You are immune to damage due to pressure (for example, you can sink to the bottom of the ocean and not feel the effects of the water pressure)</li>
    <li>You cannot eat or drink and you cannot play wind based instruments</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 8);

        $spell              = new Spell;
        $spell->name        = 'Ironguts';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The target becomes more able to fight off the effects of poison. The target gains the following.</p>
<ul>
    <li>+4 Bonus to Saves vs Poison</li>
    <li>Resistance to Poison Damage</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A vial containing the diluted poison of four different creatures</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Ironthunder Horn';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '30 feet';
        $spell->area           = 'Cone-shaped burst';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a deep resonate vibration that can shake creatures off their feet. Creates in the area must make a DEX Save or fall Prone.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Fall Prone</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 1);

        $spell              = new Spell;
        $spell->name        = 'Ironwood';
        $spell->casting     = '1 minute per pound (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Upto 5 lbs of non-magical wood';
        $spell->duration    = '2 weeks';
        $spell->description = '<p>This spell enchants an amount of wood into Ironwood. Ironwood has the following properties.</p>
<ul>
    <li>While remaining natural wood in almost every way, ironwood is as strong, heavy, and resistant to fire as steel. Spells that affect metal or iron do not function on Ironwood.</li>
    <li>Spells that affect wood do affect Ironwood, although Ironwood does not burn.</li>
    <li>Using this spell with Shape Wood or wood-related Craft check, you can fashion wooden items that functions as steel items.</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>The wood that is to be targeted</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the amount of wood to be affected</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 5);

        $spell              = new Spell;
        $spell->name        = 'Irresistible Force';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You charge yourself with Divine energy, you become the epitome of a force in motion. You gain the following</p>
<ul>
    <li>You benefit from the effects of a Freedom of Movement spell.</li>
    <li>You may Charge as long as you move at least 5 feet.</li>
    <li>Any attack from Attacks of Opportunity due to you moving through an enemy square suffers Disadvantage on the attack roll.</li>
    <li>You gain a +10 bonus to Bull Rush attempts.</li>
    <li>You gain a +10 bonus to checks vs being Tripped.</li>
    <li>While moving in combat, you benefit from the Mobile feet</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Irresistible Dance';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Choose one creature that you can see within range. The target begins a comic dance in place: shuffling, tapping its feet, and capering for the duration. Creatures that can’t be charmed are immune to this spell.</p>
<p>A dancing creature must use all its movement to dance without leaving its space and has disadvantage on Dexterity saving throws and attack rolls. While the target is affected by this spell, other creatures have advantage on attack rolls against it. As an action, a dancing creature makes a Wisdom saving throw to regain control of itself. On a successful save, the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 6);
    }
}
