<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ItemFormulasSeeder extends Seeder
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

        $formula                = new Formula;
        $formula->name          = 'Amulet of Health';
        $formula->type          = 'Item';
        $formula->level         = 12;
        $formula->price         = '10,000 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '1 week';
        $formula->description   = '<ul>
    <li>You gain a +4 Bonus to CON.</li>
</ul>';
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'skills'    => ['Crafting' => ['dc' => 8]],
            'feats'     => ['Craft Wondrous Item'],
            'spells'    => ["Bear's Endurance" => ['meta' => 'Heightened +2']],
        ]);

        $formula              =  new Formula;
        $formula->name        = 'Bag of Holding';
        $formula->type        = 'Item';
        $formula->level       = 7;
        $formula->price       = '500 gp';
        $formula->activation  = 'Manipulate Action';
        $formula->bulk        = 'L';
        $formula->description = "<p>This bag has an interior space considerably larger than its outside dimensions, roughly 2 feet in diameter at the mouth and 4 feet deep. The bag can hold up to 500 lbs, not exceeding a volume of 64 cubic feet. The bag weighs 15 lbs, regardless of its contents. Retrieving an item from the bag requires an Action.</p>
<p>If the bag is overloaded, pierced, or torn, it ruptures and is destroyed, and its contents are scattered in the Astral Plane. If the bag is turned inside out, its contents spill forth, unharmed, but the bag must be put right before it can be used again. Breathing creatures inside the bag can survive up to a number of minutes equal to 10 divided by the number of creatures (minimum 1 minute), after which time they begin to suffocate.</p>
<p>Placing a Bag of Holding inside an extradimensional space created by a Heward's Handy Haversack, Portable hole, or similar item instantly destroys both items and opens a gate to the Astral Plane. The gate originates where the one item was placed inside the other. Any creature within 10 feet of the gate is sucked through it to a random location on the Astral Plane. the gate then closes. The gate is one-way only and can't be reopened.</p>";
        $helper->saveFormula($formula, ['Magical', 'Astral'], [
            'skills'    => ['Crafting' => ['dc' => 8, 'meta' => 'Clothes making or sewing']],
            'feats'     => ['Craft Wondrous Item'],
            'spells'    => ['Arcane Pocket' => ['meta' => 'Heightened +3']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Boots of Elvenkind';
        $formula->type        = 'Item';
        $formula->level       = 6;
        $formula->price       = '235 gp';
        $formula->activation  = 'Free Focus Activation';
        $formula->bulk        = 'L';
        $formula->meta        = '<dt>Trigger</dt> <dd>You use a Move Action</dd>';
        $formula->description = "<p>These tall, pointed boots are made from soft, supple black or verdant leather and are decorated with trim and buckles of gold. When worn, the boots allow you to move more nimbly, giving you an item bonus to Acrobatics checks. When you activate the boots, you can ignore difficult terrain until the end of your turn.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>6</td>
            <th>Price</th>
            <td>235 gp</td>
            <td>The boots grant a +2 bonus</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>13</td>
            <th>Price</th>
            <td>2,850 gp</td>
            <td>The boots grant a +4 bonus. If you're also wearing a Greater Cloak of Elvenkind, Greater Boots of Elvenkind constantly grant the effects of Pass Without Trace (DC 25) in forest environments.</td>
        </tr>
    </tbody>
</tabl>";
        $helper->saveFormula($formula, ['Elf', 'Magical'], [
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Shoe making']],
            'feats'     => ['Craft Wondrous Item'],
            'materials' => ['Leafweave'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Boots of Levitation';
        $formula->type        = 'Item';
        $formula->level       = 7;
        $formula->price       = '1,200 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Manipulate Action';
        $formula->description = '<p>Once per day, you may use an Action to gain the effects of a Levitate Spell.</p>';
        $helper->saveFormula($formula, ['Magical'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Shoe making']],
            'feats'  => ['Craft Wondrous Item'],
            'spells' => ['Levitate' => ['meta' => 'Heightened +1']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Boots of Speed';
        $formula->type        = 'Item';
        $formula->level       = 6;
        $formula->price       = '1,000 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Manipulate Action';
        $formula->description = '<p>While you wear these boots, you can use a Manipulate Action to activate the boots. While they are active, you gain an additional Action. This additional Action can only be used to make a Move Action. You must use another Manipulate Action to end this effect. Once the boots have been active for a total of 10 minutes, they lose this ability until 24 hours later. After any consecutive 24 hours of non-use, the boots reset.</p>';
        $helper->saveFormula($formula, ['Magical', 'Extra Action'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Shoe making']],
            'feats'  => ['Craft Wondrous Item'],
            'spells' => ['Swift' => ['meta' => 'Heightened +2']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Broom of Flying';
        $formula->type        = 'Item';
        $formula->level       = 7;
        $formula->price       = '1,700 gp';
        $formula->bulk        = 'M';
        $formula->description = '<p>This broom is able to fly through the air as if affected by an overland flight spell (average maneuverability) for up to 9 hours per day (split up as its owner desires). The broom can carry 200 pounds and fly at a speed of 40 feet, or up to 400 pounds at a speed at 30 feet.</p>
<p>In addition, the broom can travel alone to any destination named by the owner as long as she has a good idea of the location and layout of that destination. It comes to its owner from as far away as 300 yards when she speaks the command word. The broom of flying has a speed of 40 feet when it has no rider.</p>';
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'skills' => ['Crafting' => ['dc' => 5, 'meta' => 'Woodworking']],
            'feats'  => ['Craft Wondrous Item'],
            'spells' => ['Animate Objects', 'Fly'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Cloak of Protection';
        $formula->type          = 'Item';
        $formula->level         = 10;
        $formula->price         = '3,000 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '1 week';
        $formula->description   = '<p>You gain a +1 Bonus to AC and all Saves while wearing this cloak.</p>';
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'feats'     => ['Craft Wondrous Item'],
            'spells'    => [
                'Shield' => ['meta' => 'Heightened +3'],
                'Bless'  => ['meta' => 'Heightened +3'],
            ],
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Clothes Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Gauntlets of Strength';
        $formula->type        = 'Item';
        $formula->level       = 7;
        $formula->price       = '5,000 gp';
        $formula->bulk        = 'L';
        $formula->description = '<ul>
    <li>You gain a +4 Bonus to STR.</li>
    <li>1/month, you can give yourself +6 to STR for 1 minute</li>
</ul>';
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'skills' => ['Crafting' => ['dc' => 11, 'meta' => 'Metalworking']],
            'feats'  => ['Craft Wondrous Item'],
            'spells' => ["Bull's Strength" => ['meta' => 'Heightened +2']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Headband of Intellect';
        $formula->type        = 'Item';
        $formula->level       = 7;
        $formula->price       = '5,000 gp';
        $formula->bulk        = 'L';
        $formula->description = '<p>This headband always contains a gem worth at least 2,000 gp.</p>
<ul>
    <li>You gain a +4 Bonus to INT.</li>
</ul>';
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'feats'  => ['Craft Wondrous Item'],
            'spells' => ["Fox's Cunning" => ['meta' => 'Heightened +2']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Lich Phylactery';
        $formula->type          = 'Item';
        $formula->level         = 12;
        $formula->price         = '100,000 gp';
        $formula->crafting_time = 'At least 10 days';
        $formula->bulk          = 'L';
        $formula->description   = "<p>A Lich Phylactery is required for becoming a Lich and maintain your undead state. Classically, it takes the shape of a metal tube or box containing strips of parchment silver inked with the arcane runes described below and then metal sealed, welded or an equivalent, sometimes after the ends have been pinched and shut by a smith. Other examples are a gold ring with the arcane runes engraved on the inside of the ring. A crystal cube with the runes carved into all six sides. A flawless gem, usually a diamond, ruby, sapphire, or emerald, engraved with one of each of the necessary runes on a facet. The gem and cube forms are sometimes mounted on a crown or tiara, staff, coffer, royal regalia (such as an orb or scepter)</p>
<p>Making a phylactery is a highly expensive and taxing effort, requiring a high degree of spellcasting ability and total materials valued between 100,000 to 120,000 gp. While any object can be chosen to be the lich's phylactery, it must be made of a solid non-organic material and be of high-quality craftsmanship. It can be non-magical or already be a magical item (however magical items causes the Crafting skill to become harder by +7). It must cost no less than 2,000 gp or much more. The inside of the container must be inscribed with 4 arcane runes.</p>
<ul>
    <li>Your own wizard mark or personal heraldry</li>
    <li>Sigil for immortality, often a triquetra, an ouroboros, or a double-ended ankh, looped cross at both ends of the stem</li>
    <li>A binding symbol, often an endless knot or arcris (a horizontal figure-eight with two rolled-up scrolls drawn through its loops passing under the upper arcs and passing over lower arcs, the in flaps of both scrolls pointing outwards towards the end arcs of the figure-eight. There can be more than one of these symbols</li>
    <li>A dark magic power symbol. This can be a tensil, the coil, a lightning bolt coil, a zig-zag vertical line that curls to the right around and in on itself at least 3 arcs deep. The hand of power, an upright human left hand palm to viewer wherein the thumb and smallest finger are lengthened and curved smoothly around to rejoin the base of the hand which is severed at the wrist, its lower edge depicted as about to drip blood in several places. The burst star, a four pointed star with its rays on the diagonals, 45 degree angles, and arcs drawn halfway along the rays between them as if a smaller central circle has burst and its four pieces are exploding outwards in a uniform fashion. There can be more than one of these symbols on a soul container.</li>
</ul>
<p>First, the prospective lich must cast the spell Invoke Magic on the object. If this works, it is followed up with multiple Soul Cage castings, until 20 CR levels are stored in the phylactery. If it successfully captures enough souls, then the would-be lich casts Magic Jar, and drinks a Potion of Lichdom (which you must prepare beforehand). This potion should kill you, at which point your soul enters the phylactery and consumes the souls trapped there. You are now a full lich and your soul returns to your body after 3 hours.</p>
<p>After each death, you must trap another 20 CR level of souls within your Phylactery so that on your next death, your Phylactery can create a new body for you to inhabit.</p>
<p>If you should die and your Phylactery does not have the needed souls, your soul is trapped in your Phylactery and you must somehow gain access to a freshly dead body, or somehow create a body through your available spells.</p>";
        $helper->saveFormula($formula, ['Undead'], [
            'skills'    => ['Crafting' => ['dc' => 14, 'meta' => 'Various depending on the form of the phylactery (container). Also, calligraphy, for the 4 arcane runes to be inscribed on the inside of the container']],
            'spells'    => ['Invoke Magic', 'Soul Cage', 'Magic Jar'],
            'feats'     => ['Craft Wondrous Item', 'Necromancer'],
            'materials' => ['Silver' => ['meta' => 'Ground into the ink for the arcane sigils or as a surface for the sigils to be inscribed upon.']],
            // formulas in afterseeder
        ]);

        $formula                = new Formula;
        $formula->name          = "Vorva Calahond's Lichdom";
        $formula->type          = 'Infusion';
        $formula->level         = 11;
        $formula->price         = '90,000 gp';
        $formula->crafting_time = 'At least 3 days';
        $formula->crafting      = '<ul>
    <li>Requires a vade (a living creature that will be the vessel the lich will inhabit). Willing or unwilling, bound or unbound, magically held or not.</li>
    <li>Inscribe the 4 sigils (exactly the same as the ones from Lich Phylactery) into the skin of the vade so that blood is drawn</li>
    <li>The perspective lich and the vade must both be unclad and in close contact (typically you lay on top of the vade)</li>
    <li>You then drink a Potion of Lichdom. If you succeed, the vade now hosts your soul and you can continue your undead life through your lich body.</li>
</ul>';
        $formula->description   = '<p>Vorva Calahond has devised a new path to lichdom. It is simpler but requires a living creature (a vade) to act as what would traditionally be called a phylactery. While the vade lives, you cannot die. If the vade dies, then your soul wanders without a creature to act as your host. You must go through this process again on a new host (perhaps through minions that are aware of what to do in the event of your hosts death). If you do not find another host within 2 weeks, you become a ghost.</p>';
        $helper->saveFormula($formula, ['Undead'], [
            'skills'    => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy, for the 4 arcane runes']],
            'spells'    => ['Magic Jar'],
            'feats'     => ['Necromancer', 'Inscribe Tattoo'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Graystaff';
        $formula->type        = 'Item';
        $formula->level       = 12;
        $formula->price       = '50,000 gp';
        $formula->bulk        = 'M';
        $formula->description = '<p>A Graystaff, typically created by Bheur hags. It has the following powers.</p>
<ul>
    <li>Functions as a Broom of Flying</li>
    <li>Cast Ray of Frost 1/day</li>
    <li>Cast Ice Storm 1/day</li>
    <li>Cast Wall of Ice 1/day</li>
</ul>';
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'feats'  => ['Craft Implement'],
            'spells' => [
                'Animate Objects', 'Fly', 'Ray of Frost', 'Ice Storm', 'Wall of Ice',
            ],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Heartstone';
        $formula->type          = 'Item';
        $formula->level         = 13;
        $formula->price         = '2,000 gp';
        $formula->crafting_time = '1 month';
        $formula->bulk          = 'L';
        $formula->crafting      = '<ul>
    <li>The sacrifice of 20 larvae (not necessarily at the same time)</li>
    <li>The fresh blood of an evil Fey along with each larva sacrificed</li>
    <li>2 CON damage each time a larvae is sacrificed in the creation of the Heartstone</li>
</ul>';
        $formula->description = '<p>Also called "Charms of Blackness", Heartstones are lustrous and magically potent black jewels worn as amulets. When in possession, they allow the wearer become Ethereal and to Remove Disease simple by touching it.</p>
<p>When used by a good-aligned user, they shatter after 10 uses and the ability to enter the Ethereal can only be used by Fiends or Fey (specifically Night Hags).</p>
<p>The crafting of a Heartstone requires the following</p>';
        $helper->saveFormula($formula, ['Fey', 'Magical', 'Item Creation'], [
            'feats' => ['Craft Wondrous Item'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Hag Eye';
        $formula->type          = 'Item';
        $formula->level         = 9;
        $formula->price         = '30 gp';
        $formula->crafting_time = '1 day';
        $formula->bulk          = 'L';
        $formula->crafting      = '<ul>
    <li>Cooperation of all three hags in the coven</li>
    <li>A disembodied eye (often a human eye or beast eye)</li>
    <li>A gemstone or gem-encrusted amulet worth at least 20 gp to set the eye into</li>
</ul>';
        $formula->description = '<p>A Hag Eye is a magical, disembodied eye or gemstone created by a hag coven. It allows the hags to spy on intruders from a distance. Any member of the coven can see through the Hag Eye at will as if using a Scrying spell.</p>
<p>Only one Hag Eye can exist for a coven at any given time. It has an AC of 13, 10 hit points, and a Hardness of 5.</p>
<p>If the Hag Eye is destroyed, the coven member who was holding or wearing it at the time takes 1D10 points of damage, and the entire coven is immediately blinded for 24 hours.</p>';
        $helper->saveFormula($formula, ['Fey', 'Magical', 'Item Creation'], [
            'feats' => ['Hag Spellcaster'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Cloak of Displacement';
        $formula->type          = 'Item';
        $formula->level         = 6;
        $formula->price         = '5,000 gp';
        $formula->crafting_time = '3 weeks';
        $formula->bulk          = 'L';
        $formula->description   = '<p>While you wear the cloak with the hood on (an Action to pull the hood over your head), the cloak projects an illusion that makes you appear to be standing in a place near your actual location, causing any creature to have Disadvantage on Attacks against you.</p>
<p>If you take Damage, the property ceases to function until the start of your next turn.</p>
<p>This property is suppressed while you are Incapacitated, Restrained, or otherwise unable to move.</p>';
        $helper->saveFormula($formula, ['Magical'], [
            'skills'   => [
                'Crafting' => ['dc' => 10, 'meta' => 'Leatherworking'],
                'Arcana'   => ['dc' => 7, 'meta' => 'Alchemy'],
                'Lore'     => ['dc' => 8, 'meta' => 'Fey'],
            ],
            'feats'    => ['Craft Wondrous Item'],
            'spells'   => ['Mirror Image' => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Cloak of Invisibility';
        $formula->type          = 'Item';
        $formula->level         = 9;
        $formula->price         = '8,000 gp';
        $formula->crafting_time = '3 weeks';
        $formula->bulk          = 'L';
        $formula->description   = "<p>While wearing this cloak, you can as an Action, pull its hood over your head to cause yourself to become Invisible. While you are Invisible, anything you are carrying or wearing is invisible with you. You become visible when you cease wearing the hood.</p>
<p>Deduct the time you are Invisible, in increments of 1 minute, from the cloak's maximum Duration of 2 hours. After 2 hours of use, the cloak ceases to function. For every uninterrupted period of 12 hours the cloak goes unused, it regains 1 hour of Duration.</p>";
        $helper->saveFormula($formula, ['Magical'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Leatherworking']],
            'feats'    => ['Craft Wondrous Item'],
            'spells'   => [
                'Invisibility' => ['meta' => 'Heightened +3'],
                'Shadow Conjuration',
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ring of Dragons';
        $formula->type        = 'Ring';
        $formula->level       = 15;
        $formula->price       = '25,000 gp';
        $formula->bulk        = 'L';
        $formula->description = "<p>A Ring of Dragons is a magic ring that, as the name suggests, bestowed dragon-related powers. They are highly coveted and used by the Cult of the Dragon, particularly within their leadership.</p>
<p>The ring was made of brass and resembled a dragon or serpent biting its own tail. It requires Attunement to use.</p>
<ul>
    <li>The wearer can communicate verbally with any dragon (as with the Tongues spell)</li>
    <li>1/day, the wearer can create an image of any dragon they have seen with their own eyes (as with the Silent Image spell)</li>
    <li>The wearer can call on any dracolich or evil dragon by name, although this did not guarantee that the creature will respond or arrive, or be helpful. The dragon or dracolich knows the wearer's location and could use it to locate them. The call continues until the user ends it, removes the ring, or dies.</li>
    <li>When worn with one of the six Amulets of Draconic Might, an individual becomes immune to Fear effects of dragons and gains Immunity to all Breath Weapons from dragons. They also gain the ability to Rebuke evil-aligned dragons as if the wearer used the Rebuke Undead ability (treat the wearers Character Level as the Caster Level). Due to the dangers of attempting to compel a dragon, this power is seldom used.</li>
</ul>";
        $helper->saveFormula($formula, ['Magical', 'Dragon', 'Attunement'], [
            'feats'     => ['Forge Ring'],
            'spells'    => ['Sending', 'Silent Image', 'Tongues'],
            'skills'    => [
                'Lore'     => ['dc' => '15', 'meta' => 'Dragons'],
                'Crafting' => ['dc' => '9', 'meta' => 'Metal Working'],
            ],
            'materials' => ['Blood' => ['meta' => '10 drops from a true dragon']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Ring of Invisibility';
        $formula->type          = 'Ring';
        $formula->level         = 12;
        $formula->price         = '12,000 gp';
        $formula->bulk          = 'L';
        $formula->activation    = 'Action; Operate Activation';
        $formula->crafting_time = '1 week';
        $formula->description   = '<p>As an Action, you may become Invisible as the Spell for 1 hour up to 3/day.</p>';
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'feats'     => ['Forge Ring'],
            'spells'    => ['Invisibility' => ['meta' => 'Heightened +3']],
            'skills'    => ['Crafting' => ['dc' => '9', 'meta' => 'Metal Working']],
            'materials' => ['Gold'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Ring of Protection';
        $formula->type          = 'Ring';
        $formula->level         = 10;
        $formula->price         = '3,000 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '1 week';
        $formula->description   = '<p>You gain a +1 Bonus to AC and all Saves while wearing this ring.</p>';
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'feats'     => ['Forge Ring'],
            'spells'    => [
                'Shield' => ['meta' => 'Heightened +3'],
                'Bless'  => ['meta' => 'Heightened +3'],
            ],
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Metal Working']],
            'materials' => ['Silver'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Ring of Spell Storing';
        $formula->type          = 'Ring';
        $formula->level         = 12;
        $formula->price         = '15,000 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 weeks';
        $formula->description   = "<p>This ring stores spells cast into it, holding them until the attuned wearer uses them. The ring can store up to 5 levels worth of spells at a time.</p>
<p>Any creature can cast a spell of 1st through 5th level into the ring by touching the ring as the spell is cast. The spell has no effect, other than to be stored in the ring. If the ring can't hold the spell, the spell is expended without effect. The level of the slot used to cast the spell determines ow much space it uses. Spells cast with meta magic modifications cannot be stored in the ring.</p>
<p>While wearing this ring, you can cast any spell stored in it as a Double Action. The spell uses the slot level, spell save DC, spell attack bonus, and spellcasting ability of the original caster, but is otherwise treated as if you cast the spell. The spell cast from the ring is no longer stored in it, freeing up space.</p>";
        $helper->saveFormula($formula, ['Magical', 'Attunement'], [
            'feats'     => ['Forge Ring', 'Scribe Scroll'],
            'skills'    => ['Crafting' => ['dc' => '10', 'meta' => 'Metal Working']],
            'spells'    => ['Anyspell'],
            'materials' => ['Mithral'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Riverine Armor';
        $formula->type          = 'Armor';
        $formula->level         = 5;
        $formula->price         = '20,000 gp';
        $formula->crafting_time = '1 week';
        $formula->crafting      = '<ul>
    <li>Obtain water from the Elemental Plane of Water (at least 10 gallons).</li>
</ul>';
        $formula->description = "<p>Riverine, also called 'Solid Water', is created using water taken from the Elemental Plane of Water. It takes multiple castings of Shape Water. At the end of the forging process, the water only flows within the regions it was shaped into.</p>
<p>Armor made from Riverine grants Resistance to Fire. Riverine can be used to create any Medium or Heavy armor (except Hide). Riverine is usually not used to make weapons, as it cannot hold an edge and offers too much give as a Bludgeoning weapon.</p>
<p>Once the armor is forged, it can then be enchanted further. Each Rune that is to be added also requires the casting of the Control Water spell.</p>";
        $helper->saveFormula($formula, ['Water', 'Magical'], [
            'feats'  => ['Craft Armament'],
            'spells' => ['Shape Water' => ['meta' => 'Cast 20 times over the course of the crafting']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Soul Bag';
        $formula->type          = 'Item';
        $formula->level         = 8;
        $formula->price         = '500 gp';
        $formula->crafting_time = '1 week';
        $formula->meta          = '<dt>Bulk</dt> <dd>L</dd>';
        $formula->crafting      = '<ul>
    <li>The sacrifice of a humanoid, its flesh used to make the leather that forms the bag</li>
    <li>The blood of an evil Fiend</li>
    <li>8 CON damage</li>
</ul>';
        $formula->description = '<p>Soul Bags have to ability to catch a soul as it leaves a dying body. The act of capturing the soul must be done from the Border Ethereal plane. It can hold a single soul at a time and only the creator can use it. The bag can force a captured soul within it into the form of a larvae.</p>
<p>The crafting of a Heartstone requires the following</p>';
        $helper->saveFormula($formula, ['Fey', 'Magical', 'Attunement'], [
            'feats' => ['Craft Wondrous Item'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Thumb Ring of Horse Archery';
        $formula->type          = 'Ring';
        $formula->level         = 5;
        $formula->price         = '300 gp';
        $formula->crafting_time = '3 days';
        $formula->bulk          = 'L';
        $formula->description   = '<p>This ring grants the following and requires Attunement.</p>
<ul>
    <li>+1 bonus to Hit with a Bow</li>
    <li>+3 bonus to Ride an Animal (Handle Animal) checks</li>
</ul>';
        $helper->saveFormula($formula, ['Magical', 'Bow', 'Attunement'], [
            'feats'  => ['Forge Ring'],
            'spells' => ['Guidance'],
        ]);
    }
}
// https://www.aidedd.org/dnd-filters/magic-items.php
