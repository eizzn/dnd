<?php

namespace Database\Seeders\Materials;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MetalMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mat              = new Material;
        $mat->name        = 'Abyssal Bloodiron';
        $mat->type        = 'Metal';
        $mat->rarity      = 'Rare';
        $mat->source      = 'Upper layers of the Abyss. Most common in the first layer.';
        $mat->description = '<p>Abyssal Bloodiron is a metal that can be found in the Abyss.</p>
<blockquote>
    "In the abyss, battles have raged for eternity. The soil has absorbed demonic ichor and devil blood, which have mixed with the natural ferrous ores present in the soil.
    With enough time, this forms into veins of abyssal bloodiron."
        -- Sunil Elora, elven scholar
</blockquote>';
        $mat->weapon      = '<p>Weapons crafted from Abyssal Bloodiron have far sharper edges than their usual counterparts. Attacks made with weapons crafted from Abyssal Bloodiron have a +1 to Hit and Damage rolls.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Adamant';
        $mat->type        = 'Metal';
        $mat->rarity      = 'Uncommon';
        $mat->price       = '50 gp';
        $mat->source      = '<ul>
    <li>Great Rift (the largest source in Faerun)</li>
    <li>Gauntlgrym</li>
</ul>';
        $mat->description = '<p>This is the pure metal form of the hard, jet-black ferromagnetic ore known as adamntite, from which the famous adamantine is made. Adamant is rarely found in nature, but when it is, it always will be in large spherical pockets in hardened volcanic flows.</p>
<p>Adamant is one of the hardest substances known on Toril, but it is also brittle. A sword made of adamant could slice through most metals, but would snap off if struck by another. It sees use in Faerun only in dwarven experimentation and in styluses used to etch metal with runes or markings. Such a stylus shatters if dropped to the flour, though the chips can be used to scratch things. Adamant styluses typically costs 35 to 50 gp, if one can be found at all, Waterdeep and the Great Rift of the dwarves are the best places to shop for one.</p>
<p>Adamant is a gleaming, glossing black. Any reflections seen in it acquire rainbow edges, and this peculiar optical property is the sure-fire way to identify this surprisingly light, valuable metal.</p>
<p>Adamant is worth five times its weight in gold and takes enchantments readily.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Adamantine';
        $mat->type        = 'Metal';
        $mat->rarity      = 'Uncommon';
        $mat->price       = '250 gp';
        $mat->source      = '<ul>
    <li>Great Rift (the largest source in Faerun)</li>
    <li>Gauntlgrym</li>
</ul>';
        $mat->description = '<p>Adamantine is an alloy composed of many substances, the most prominent being adamant. Adamant is mined in small quantities from adamantine ores found within asteroids, hardened volcanic flows, or the deepest chasms.</p>
<p>Combining five-eights adamant to two-eighths silver and one-eighth electrum (an alloy of silver and gold) forms adamantine. This perfected alloy retains the hardness of adamant while increasing its durability tremendously, allowing for the construction of weaponry and armor. Through powerful arcane magic, master dwarf smiths have even been able to combine steel and mithral into adamantine, though the process requires divine intervention and is considered a holy - and secret - endeavor.</p>
<p>Adamantine is black with a clear, green sheen when seen through candlelight. The smelting of this alloy is almost exclusively a dwarven secret which they care not to share with anyone else.</p>';
        $mat->armor = "<p>Armor (Chain Shirt, Scale Mail, Breastplate, Half Plate, Ring Mail, Chain Mail, Splint, or Plate). This jet-black armor is nigh impenetrable, a bulwark against all harm.</p>
<ul>
    <li>The base Damage Reduction of the armor is increased by 4</li>
    <li>While you're wearing the armor, critical hits that strike you are treated as normal hits.</li>
</ul>
<p>The armor's base cost is multiplied by 200.</p>";
        $mat->weapon = '<p>Weapon (any melee) or 10 pieces of ammunition. This dark weapon has a unique hardness that renders it an excellent machine of destruction.</p>
<p>Whenever an Adamantine weapon hits an object (including Sunder attempts and attacks vs. constructs, but not normal monsters and NPCs), it results in an automatic critical hit. Adamantine weapons are known to be hard enough to penetrate the heavy layered exteriors of magical golems, allowing one to damage them without the need for magic.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Alchemical Silver';
        $mat->type        = 'Metal';
        $mat->rarity      = 'Common';
        $mat->price       = '100 gp';
        $mat->description = '<p>A complex process involving metallurgy and alchemy to bond Silver to a weapon of steal.</p>
<table>
    <thead>
        <tr>
            <th>Weapon</th>
            <th>Cost</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ammunition</td>
            <td>+2 gp</td>
        </tr>
        <tr>
            <td>Light Weapon</td>
            <td>+20 gp</td>
        </tr>
        <tr>
            <td>One-handed weapon, or one head of a double weapon</td>
            <td>+90 gp</td>
        </tr>
        <tr>
            <td>Two-handed weapon, or both heads of a double weapon</td>
            <td>+180 gp</td>
        </tr>
    </tbody>
</table>';
        $mat->weapon = '<p>A weapon that is coated with Alchemical Silver is considered Silver for the purpose of Damage Resistance.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Arambarium';
        $mat->type        = 'Metal';
        $mat->price       = '1500 gp';
        $mat->rarity      = 'Rare';
        $mat->source      = '<ul>
    <li>The fist of a primordial</li>
</ul>';
        $mat->description = '<p>Mined from the body of a dead primordial, this silver-sheen metal is tuned to the creatures of the elemental planes.</p>';
        $mat->armor       = '<p>Replace the metal. Grants Resistance to Acid, Cold, and Fire damage to the wearer</p>';
        $mat->weapon      = '<p>Replace the metal. Weapons forged with this metal is immune to rust.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Arandur';
        $mat->type   = 'Metal';
        $mat->price  = '+2000 gp';
        $mat->rarity = 'Rare';
        $mat->source = "<ul>
    <li>Mount Cormanda</li>
    <li>Crippled Mountain</li>
    <li>Firepeaks</li>
    <li>Mount Hotenow</li>
    <li>Kossuth's Eyes</li>
    <li>Oroth</li>
    <li>Peaks of Flame</li>
    <li>Smokespire</li>
    <li>Mount Thargill</li>
    <li>Mount Zatal</li>
</ul>";
        $mat->description = '<p>Arandur is a blue-green streaked metal that appears within pockets of hyaline glass. After refining and forging, it turns a silver-blue color with a green reflective radiance. Refined arandur has the same weight as steel.</p>
<p>The process of refining arandur was previous a secret of the gnomes, but has since been shared with the elves of Evereska.</p>
<p>To prevent arandur from becoming brittle after mining, it must be tempered with the blood of either a red or blue dragon.</p>';
        $mat->armor  = '<p>Replace the metal. Can be used to make armor and shields that resist Acid, Cold, Electricity, Fire, Sonic, and Force attacks. It is said that armor can be made that absorbs the damage from Magic Missiles and immune to Disintegration.</p>';
        $mat->weapon = "<p>Replace the metal. Weapons made with Arandur add a +1 to Attack and Damage rolls made with the weapon. When rolling for damage on a Critical Hit, reroll all 1's (taking the re-roll, even if it's also a 1).</p>";
        $mat->other  = '';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Asmoroch Steel';
        $mat->description = '<p>A black scorched-like metal which is cold to touch</p>';
        $mat->type        = 'Metal';
        $mat->price       = '500 gp';
        $mat->armor       = '<p>Used to craft an Armor of Necrotic Resistance (metallic armor only)</p>';
        $mat->weapon      = '<p>Used to craft necrotic damage dealing weapons, such as the Sword of Life Stealing</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Astral Driftmetal';
        $mat->type        = 'Metal';
        $mat->rarity      = 'Very Rare';
        $mat->description = "<p>Astral Driftmetal is extremely rare, being harvested only from Tu'narath, the capital of the Githyanki.</p>";
        $mat->armor       = '<p>Replace the metal. Armor made with Astral Driftmetal prevents creatures that are Ethereal from moving through your space. The armor will also prevent Possessions.</p>';
        $mat->source      = "<ul>
    <li>Tu'narath, the capital of the Githyanki in the Astral Plane.</li>
</ul>";
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Aurorum';
        $mat->type   = 'Metal';
        $mat->rarity = 'Rare';
        $mat->price  = '2,000 gp';
        $mat->source = '<ul>
    <li>Mountains of the Upper Plane of Elysium</li>
</ul>';
        $mat->description = '<p>Aurorum is a metal native to the Celestial Planes. While it is common on that plane, it rarely makes it to the Prime Material.</p>
<p>This luminous metal gleams with varying hues of pink and indigo, and emit bright light in a 20-foot radius and dim light for an additional 20 feet.</p>
<p>Forging Aurorum is extremely difficult as the material seems to have its own preferred shape.</p>';
        $mat->armor  = '<p>Replaces the metal. Armor forged with Aurorum that is Sundered or broken can be repaired with a Manipulate Triple Action.</p>';
        $mat->weapon = '<p>Replaces the metal. Weapons forged with Aurorum that are Sundered or broken can be repaired with a Manipulate Triple Action.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Baatorian Green Steel';
        $mat->type   = 'Mineral';
        $mat->rarity = 'Rare';
        $mat->source = '<ul>
    <li>The Nine Hells of Baator</li>
</ul>';
        $mat->description = '<p>Found deep in the mines of the Nine Hells of Baator, veins of green flecked iron run through the rocks. While the ore itself is of too low quality to forge, when used in an alloy, it presents a frighteningly devilish weapon</p>';
        $mat->weapon      = '<p>Replaces metal. Weapons crafted from Baatorian Green Steel add a +1 to Attack and Damage rolls made with the weapon. The weapon also adds one point of Negative damage for each Weapon Die rolled for damage (doubling on Critical Hits)</p>
<blockquote>
    A Maul (2D6 Bludgeoning damage) adds 2 Negative damage or 4 Negative damage on a Critical Hit.</br>
    If used in a Sneak Attack, it would also add 1 Negative damage for each dice used in the Sneak Attack (Doubling on Critical Hits).
</blockquote>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Blood Glass';
        $mat->type   = 'Stone';
        $mat->rarity = 'Common';
        $mat->price  = '250 gp';
        $mat->source = "<ul>
    <li>Kossuth's Eyes</li>
    <li>Mount Hotenow</li>
    <li>Peaks of Flame</li>
    <li>Firepeaks</li>
</ul>";
        $mat->description = '<p>Formed when crystal deposits are laced with volcanic glass, blood glass weapons are 10% lighter than their steel counterparts.</p>
<p>While blood glass is magical, it is also quite fragile. Attacks made against items made with blood glass automatically score Critical Hits, and items made of blood glass caught in an area where Sonic Damage is dealt shatter (no Save).</p>';
        $mat->weapon      = '<p>Replaces the metal. +1 to Hit and Damage</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Blood Metal';
        $mat->type   = 'Metal';
        $mat->rarity = 'Very Rare';
        $mat->source = '<ul>
    <li>Mountains in Sembia</li>
    <li>Mountains in Damara</li>
    <li>Mountains in Vaasa</li>
    <li>Mountains in Narfell</li>
</ul>';
        $mat->description = '<p>Also called orcslayer metal. The ore to craft with Blood Metal is extremely rare, and few dwarves know the process to forge Blood Metal.</p>';
        $mat->weapon      = '<p>Replaces the metal. A weapon forged with Blood metal adds +1 to Attack and Damage. If the creature hit by a weapon made with Blood Metal has the Orc type, it receives no benefit from magical healing for 24 hours.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Chromium';
        $mat->type        = 'Meta';
        $mat->rarity      = 'Ubiquitous';
        $mat->description = '<p>A hard steel-gray and lustrous metal that is best known for its incredible ability to resist corrosion.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Cold Iron';
        $mat->description = '<p>This iron is worked entirely while cold, known for its effectiveness against Fey and Demonic creatures</p>
<p>Cold Iron is a rare form of iron left over from the creation of the Parallel Planes (Material Plane, Feywild, and Shadowfell) from the Elemental Chaos.</p>
<p>It has never been molten and will lose its properties and become normal iron if melted or tempered. This makes it very hard to work for the following reasons.</p>
<ul>
    <li>Care must be taken not to heat the metal too much, lest it lose its special properties</li>
    <li>The finished product must be worked from a single piece of ore, as it cannot be smelted</li>
    <li>Being a touch metal, it is hard to work. Usually, a smith will ruin one or more set of tools working a single piece of Cold Iron.</li>
</ul>';
        $mat->type   = 'Metal';
        $mat->source = '<ul>
    <li>The town of Phandalin on the Sword Coast North</li>
    <li>Mines east of Scardale</li>
    <li>Great Rift</li>
    <li>Citadel Felbarr</li>
</ul>';
        $mat->price  = '50 gp / lb';
        $mat->armor  = '<p>A piece of armor incorporating (usually gilding or edging) Cold Iron gives the wearer (or wielder in case of a shield) Advantage on spells and spell-like abilities cast by Fey, and Demons. In addition, if attacked by these types of creatures that make contact with the wearer (ie. bite, slam, touch, etc), the attacker takes 1D4 damage (as if from a magic weapon). Only metal armor (and studded armor) and metal shields may be edged in Cold Iron. As with weapons, due to the expense, armor is usually inlaid with Cold Iron metal wire, rather than making the whole armor of the metal.</p>';
        $mat->weapon = '<p>When you hit a Fey or a Demon with a Cold Iron weapon, you have Advantage on the Damage roll</p>';
        $mat->other  = '<p>Fey and Demons have difficulty passing a barrier of Cold Iron. To do so, they must first pass a CON check of DC 15.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Copper';
        $mat->type        = 'Metal';
        $mat->rarity      = 'Ubiquitous';
        $mat->description = "<p>This well-known pure metal, with its distinctive pinkish sheen, is the best widely available purifier and amalgamator among metals. It is soft and easily worked, widely known in Faerun, and appears here because its role as a magical purifier and neutralizing agent cannot be overemphasized. The wizard and especially the priest seeking to work with a substance or item not suited to his or her faith or purpose can make the offending item usable by adding at least half the item's weight of copper to the item. (For example, by sheathing it in copper or adding a longer handle plated in copper, or similar means). Holy or unholy water should not be stored for any length of time in copper vessels, because the metal will neutralize either in 2D4 mounts, changing them to normal water.</p>";
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Darksteel';
        $mat->source = '<ul>
    <li>The Sword Mountains</li>
    <li>The Troll Hills</li>
    <li>The Cloud Peaks</li>
    <li>The Small Teeth</li>
    <li>The Starspire Mountains</li>
    <li>The Mounshae Islands</li>
</ul>';
        $mat->description = '<p>Darksteel is a unique dwarven alloy. The secrets of crafting Darksteel are held by the most skilled dwarven smiths, but their lack of desire to teach others this secret speaks only to the complicated process of creating Darksteel.</p>';
        $mat->type        = 'Metal';
        $mat->price       = '500 gp';
        $mat->weapon      = '<p>Weapons made with Darksteel automatically deal a Critical Hit when used to break objects.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Dlarun';
        $mat->type        = 'Metal';
        $mat->source      = '<ul>
    <li>Luiren</li>
    <li>Calimshan</li>
</ul>';
        $mat->description = '<p>This bone-white metal can take a high polish and is often mistaken for ivory when seen in finished items, but it has a distinctive greenish sheen in candlelight and when in the presence of magical radiance. Dlarun is a little-known metal of the halflings, who take care to keep word of it as paltry and as inaccurate as possible. Dlarun is usually encountered after having been formed by halflings into small figurines, inlay plates, or knobs and pommels.</p>
<p>Derived from roasting clay dug from the banks of certain rivers, dlarun is first gathered as white chips among fire ash that are then melted in a hot crucible that is filled with a secret mixture of liquids. A lump of soft, soap-like metal results that can be readily carved by anyone with a sharp knife. When the desired end result has been achieved, a second heating, in the open flames of a fire fueled and supplemented by secret ingredients, this time, transforms the metal into a lightweight rigidity. It is thus ideal for item adornment.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Entropium';
        $mat->type   = 'Metal';
        $mat->source = '<ul>
    <li>The Astral Plane, near Githzerai monasteries</li>
</ul>';
        $mat->description = '<p>This weird ever shifting ore comes from the Outer Plane of Limbo. It is mined by the Githzerai, and they are the only known crafters who work with Entropium.</p>';
        $mat->armor       = '<p>Armor made with Entropium grants a +1 bonus to AC. If the armor normally imposes a penalty to DEX (Stealth) check or has a STR requirement, armor made with Entropium does not. Entropium weighs 25% less than the steel counterpart.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Fever Iron';
        $mat->type   = 'Metal';
        $mat->rarity = 'Uncommon';
        $mat->source = '<ul>
    <li>Wherever the Plane of Fire releases into the Prime Material Plane</li>
</ul>';
        $mat->description = '<p>Fever Iron comes from places where the Elemental Plane of Fire meets the Prime Material. It appears as black as obsidian, even when forged except for a dull orange sheen.</p>';
        $mat->weapon      = '<p>Metal weapons forged with Fever Iron grants a +1 bonus to Hit and Damage. It also grants the wielder a +3 bonus vs. Cold effects.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Fyrite';
        $mat->type   = 'Metal';
        $mat->rarity = 'Rare';
        $mat->source = '<ul>
    <li>The Elemental Plane of Fire</li>
</ul>';
        $mat->description = '<p>This metal must be smelted and forged in the Elemental Plane of Fire, or it will be normal Steel.</p>
<p>Fyrite continues to emit a low level of heat even after forging is complete. If this metal is used to make a suit of armor, it provides a +5 bonus to all Saves vs Cold and grants Resistance to Cold Damage. However, it also increases Fire damage by +1 point per die.</p>';
        $mat->armor       = '<p>Replaces the metal. Grants the bonus to Save vs Cold and imposes the vulnerability to Fire damage as described.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Frystalline';
        $mat->type        = 'Metal';
        $mat->rarity      = 'Rare';
        $mat->source      = '<ul>
    <li>The mountains of Elysium</li>
</ul>';
        $mat->description = '<p>This metal increases the effects of Healing magic cast on one who wears a suit of armor made of Frystalline. Increase the Healing by +1 point per die.</p>';
        $mat->armor       = '<p>Replaces the metal. Grants the bonus to healing to the wearer. Does not work with shields of any kind.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Gehennan Morghuth Iron';
        $mat->type        = 'Metal';
        $mat->source      = '<ul>
    <li>The Outer Plane of Gehenna</li>
</ul>';
        $mat->description = '<p>The weathered and pitted look of this metal makes it look to be fragile, but is actually quite strong. The metal is poisonous to the touch. Prolonged exposure will eventually cause 1 Poison damage (1/day). After being refined, it will cause 1 Poison Damage per round it is touched.</p>';
        $mat->weapon      = '<p>Weapons made with this metal suffers a -1 penalty to damage, but inflicts an additional 1D6 Poison Damage per hit.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Githsilver';
        $mat->type        = 'Metal';
        $mat->source      = '<ul>
    <li>Mountains only found within Githyanki territory in the Astral Plane</li>
</ul>';
        $mat->description = '<p>Only the Githyanki has knowledge of the process in smelting and forging of Githsilver.</p>';
        $mat->weapon      = '<p>Bladed weapons forged from Githsilver gains the ability to cut the Silver Cord that tethers the target to their Astral Body.</p>';
        $mat->armor       = '<p>Armor forged with Githsilver offers some protection to their Silver Cord from being cut form Githsilver weapons.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Glassteel';
        $mat->type        = 'Metal';
        $mat->price       = '100 gp per lb';
        $mat->description = '<p>Glassteel is a material that is as strong as steel and as transparent as glass. It lacks the greenish tint of glass, instead gleaming a dull-ish and almost translucent gray. It was as strong as iron but half as heavy. Furthermore, it is fully translucent.</p>
<p>It is made with a complex metallurgical and alchemical process that also requires extensive knowledge of glassblowing. This technique was discovered by the avariel elves.</p>
<p>Glassteel is mostly used as a construction material in fantastic castles, but also found use in the windows of armored spelljammers. It was also used to create weapons and armor, though the price was prohibitive.</p>
<p>Glassteel is immune to Acid.</p>';
        $mat->armor       = '<p>Replaces the metal. The wearer gains Resistance to Acid damage. A metal shield can be made of glassteel. While it does not provide any resistance to Acid, the shield is transparent, allowing the wielder to see through his shield.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Gold';
        $mat->type        = 'Metal';
        $mat->description = '<p>This well-known pure metal is the softest of workable metallic substances, and one of the best conductors among them. Despite its high value, it is relatively common and is favored for use in ornamentation in the making of magical items, often being used as an inlay in graven runes or inscriptions</p>
<p>Gold has the important ability to hold multiple enchantments - even conflicting ones - and keep them from affecting each other or the stability of the gold-adorned item.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Infernal Steel';
        $mat->description = 'A blood red metal found in the infernal planes which is very resistant and captures heat and flames';
        $mat->type        = 'Metal';
        $mat->source      = '<ul>
    <li>The Nine Hells of Baator</li>
</ul>';
        $mat->price  = '750 gp';
        $mat->weapon = '<p>Used to craft an armor of Fire Resistance (metallic armor only) or a demon armor</p>';
        $mat->other  = '<p>Used to craft Fire damage dealing magic items, such as the Staff of Fire</p>';
        $mat->save();

        $mat       = new Material;
        $mat->name = 'Iron';
        $mat->type = 'Metal';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Lodestone';
        $mat->type        = 'Metal';
        $mat->description = '<p>A lodestone is a naturally magnetized piece of the mineral magnetite. They are naturally occurring magnets, which can attract iron</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Mithral';
        $mat->description = '<p>Mithral (also spelled Mithril, or Truemetal as the dwarves call it) is mined from very rare silver-black ores scattered all across the world. It is popular for being the lightest metal hard enough to be used for armor and weapons.</p>
<p>When smelted, mithral takes on a silvery-blue sheen and becomes unpredictable when carelessly exposed to magic, typically repelling magical effects with ease. Objects made of mithral becomes entirely immune to magical effects from the school of Transmutation.</p>
<p>Mithral is a favorite amongst elves who often lack the physical strength to carry heavy weapons and armor, as equipment made from this metal is shockingly light for its density.</p>';
        $mat->source = '<ul>
    <li>Mithral Hall</li>
</ul>';
        $mat->type  = 'Metal';
        $mat->price = '250 gp';
        $mat->armor = '<p>Armor (Chain Shirt, Scale Mail, Breastplate, Half Plate, Ring Mail, Chain Mail, Splint, or Plate). This armor is strangely comfortable and soft despite its stronger-than-steel durability.</p>
<p>This armor loses the Cumbersome trait if it had it, and its weight is reduced by half. Mithral armor also becomes one armor category lighter than its steel counterpart. Heavy armor loses its STR score requirement (if any) and becomes medium armor, medium armor becomes light armor and has no maximum DEX modifier for AC.</p>
<p>You gain a +2 bonus to all Saves vs spells of the Transmutation school.</p>
<p>Armor made of mithral is 100 times more expensive.</p>';
        $mat->weapon = "<p>Weapon (any). This silvery-blue weapon is far lighter than it ought to be, and catches the light in an almost supernatural fashion.</p>
<p>A mithral weapon weighs half as much as it normally would, loses the heavy trait if it had it, and gains the Finesse trait if it didn't already have it.</p>
<p>The weapon costs an additional 500 gp.</p>";
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Nickel';
        $mat->type   = 'Metal';
        $mat->rarity = 'Ubiquitous';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Platinum';
        $mat->type   = 'Metal';
        $mat->rarity = 'Ubiquitous';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Quicksilver';
        $mat->type        = 'Liquid Metal';
        $mat->rarity      = 'Rare';
        $mat->price       = '10 ~ 25 gp';
        $mat->description = '<p>Also known as Mercury.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Silver';
        $mat->type        = 'Metal';
        $mat->rarity      = 'Ubiquitous';
        $mat->description = '<p>This relatively common valuable pure metal is known to the elves as "the sheath and shield of Art" because, of all metals, it is the most associated with and suitable with magic. Some Faerunians believe silver is the hardened tears of the goddess Selune, and in the eldest dwarven tongues, the names for silver meant "the blood of alloys", referring to its versatility in making one metal combine with another. Many dwarves use silver in various alloy formulae of their own devising - or that have been handed down through clans for generations. Most of the beauty of metalwork down through the ages has been associated with the gleam and hue of mirror-polished, untarnished silver, and it has always been associated with the adornment of magical items.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Solarian Truesteel';
        $mat->type   = 'Metal';
        $mat->rarity = 'Uncommon';
        $mat->source = '<ul>
    <li>Solaria, the Forth layer of the Outer Plane of Mount Celestia</li>
</ul>';
        $mat->description = '<p>Mined in the Forth layer of Mount Celestia, this fine silver ore is as strong as steel and shines brightly. It is easily worked into weapons.</p>';
        $mat->weapon      = "<p>Metal-edged weapons made of Solarian Truesteel gain a +1 to Hit and Damage. When it deals a Critical Hit, re-roll all 1's.</p>";
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Telstang';
        $mat->type        = 'Metal';
        $mat->description = "<p>Originally a gnomish secret, this alloy of copper, mithral, platinum, and silver has been adopted by the halflings and by certain elven and orc peoples in the Sword Coast North. Its making remains known to few, and in many writings it is hidden behind the term 'truesilver', which has been applied to mithral, or the phrase 'the trusty metal', often misunderstood by human sages to mean steel or perhaps bronze - the very mistake the writers hoped they would make.</p>
<p>Telstang is a dull silver hue, rather like pewter, and is known as the singing metal because it gives off a clear bell-like tone when struck. It is non-ferromagnetic but readily forgeable, through it tends to be brittle and easily snapped off or shattered in large pieces. It never oxidizes and so lasts forever if not struck or dropped.</p>
<p>Telstang's shortcomings make it unsuitable for use in weapons or armor, but it is often worn (by folk who know of and can get it) as bracers, bucklers, brooches, pendants, and the like because of its most valuable property. Telstang and all organic material in contact with or encased in it cannot be altered in state, that is a warrior wearing telstang and the telstang itself cannot be affected by Polymorph, Petrification, Shape Change and similar effects. However, such a being also cannot be aided by beneficial magical state-altering effects.</p>";
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Urdukar';
        $mat->type        = 'Metal';
        $mat->price       = '1,000 gp / 4 oz';
        $mat->description = '<p>This purple metal can only be found in the deepest parts of the underdark.</p>';
        $mat->armor       = '<p>While wearing at least 4 oz of Urdukar, you become difficult to Scry. Anyone attempting to Scry you must immediately make a DC 20 Arcana check or fail. If the Urdukar is woven into a piece of armor and the armor is enchanted, add a +1 to the DC for each +1 AC bonus the armor provides.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ysgardian Heartwire';
        $mat->type        = 'Mineral';
        $mat->description = '<p>Ysgardian Heartwire is harvested from the Outer Plane of Ysgard, and too rare to create a whole suit of armor with.  It is instead typically woven in to the armor to reinforce it.</p>';
        $mat->armor       = "<p>(Chain Mail or any Heavy Armor) Armor that has Ysgardian Heartwire woven into it is strengthened against Critical Hits. Critical Hits scored against you must re-roll any dice that rolled it's maximum amount must reroll.</p>";
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Zardazil';
        $mat->type        = 'Metal';
        $mat->price       = '100,000 gp';
        $mat->description = '<p>Zardazil is extremely rare and difficult to work with. During the smelting process, a portal must be opened to the Ethereal Plane. As the steel is smelted, it must be hammered partially within the portal. The resulting steel becomes Zardazil. Zardazil is not magical, and will not be detected by Detect Magic or similar means. It is detectable by Divination that detects the presence of Ethereal beings or magic that can see into the Ethereal Plane.</p>';
        $mat->weapon      = '<p>The process of forging a weapon with Zardazil requires the blood of a person. Weapons made with Zardazil is considered Phased out for the person whose blood was used in the forging process (in other words, this person cannot touch it and any attack on this person with this weapon will simply pass through them). For all others, the weapon is treated as normal. Typically, the one whos blood was used can carry the weapon on a non-metallic necklace (causing the weapon to be "inside" the persons chest). The one whos blood was used could use a non-metal glove to wield the weapon.</p>';
        $mat->save();
    }
}
