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
        $helper->saveFormula($formula, ['Elf'], [
            'skills'    => ['Crafting' => ['dc' => 3, 'meta' => 'Snares']],
            'feats'     => ['Craft Wondrous Item'],
            'materials' => ['Leafweave'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Broom of Flying';
        $formula->type        = 'Item';
        $formula->level       = 1;
        $formula->price       = '17,000 gp';
        $formula->meta        = '<dt>Bulk</dt> <dd>Medium</dd>';
        $formula->description = '<p>This broom is able to fly through the air as if affected by an overland flight spell (average maneuverability) for up to 9 hours per day (split up as its owner desires). The broom can carry 200 pounds and fly at a speed of 40 feet, or up to 400 pounds at a speed at 30 feet.</p>
<p>In addition, the broom can travel alone to any destination named by the owner as long as she has a good idea of the location and layout of that destination. It comes to its owner from as far away as 300 yards when she speaks the command word. The broom of flying has a speed of 40 feet when it has no rider.</p>';
        $helper->saveFormula($formula, [], [
            'skills' => ['Crafting' => ['dc' => 5, 'meta' => 'Woodworking']],
            'feats'  => ['Craft Wondrous Item'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Lich Phylactery';
        $formula->type        = 'Item';
        $formula->level       = 12;
        $formula->price       = '100,000 gp';
        $formula->meta        = '<dt>Bulk</dt> <dd>L</dd>';
        $formula->description = '<p>A Lich Phylactery is required for the creation of a Lich and maintain their undead state. Every phylactery is unique in nature, defense, and means of destruction.</p>
<p>Making a phylactery is a highly expensive and taxing effort, requiring a high degree of spellcasting ability and total materials valued between 100,000 to 120,000 gp. While any object could be chosen to be the lich\'s phylactery, it must be made of a solid material (not wood) and be of high-quality craftmanship. It can be non-magical or already be a magical item. It must cost no less than 2,000 gp or much more.</p>
<p>First, the prospective lich must cast the spell Enchant an Item on the object. If this works, it is followed up with multiple Soul Cage castings, until 20 CR levels are stored in the phylactery. If it successfully captures enough souls, then the would be lich casts Magic Jar, and enters the phylactery, and must consume the trapped souls. At this point, your soul is bound to the mortal realm (and the phylactery), stopping it from going onto the Outer Planes after death.</p>
<p>At this point, you must consume a special Potion designed to kill you. This Potion need not be made by you (the Potion creation requires the spells Magic Jar, Poison, and Gentle Repose). On your death, you enter the your Phylactery and you are a full Lich.</p>
<p>After each death, you must trap another 20 CR level of souls within your Phylactery so that on your next death, your Phylactery can create a new body for you to inhabit.</p>
<p>If you should die and your Phylactery does not have the needed souls, your soul is trapped in your Phylactery and you must somehow gain access to a freshly dead body, or somehow create a body through your available spells.</p>';
        $helper->saveFormula($formula, ['Undead']);

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
        $helper->saveFormula($formula, [], [
            'feats' => ['Craft Implement'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Heartstone';
        $formula->type          = 'Item';
        $formula->level         = 13;
        $formula->price         = '2,000 gp';
        $formula->crafting_time = '1 month';
        $formula->bulk          = 'L';
        $formula->crafting      = '<ul>
    <li>The sacrifice of 20 larvae</li>
    <li>The blood of an evil Fey along with each larva sacrificed</li>
    <li>2 CON damage each time a larvae is sacrificed in the creation of the Heartstone</li>
</ul>';
        $formula->description = '<p>Also called "Charms of Blackness", Heartstones are lustrous and magically potent black jewels worn as amulets. When in possession, they allow the wearer become Ethereal and to Remove Disease simple by touching it.</p>
<p>When used by a good-aligned user, they shatter after 10 uses and the ability to enter the Ethereal can only be used by Fiends or Fey (specifically Night Hags).</p>
<p>The crafting of a Heartstone requires the following</p>';
        $helper->saveFormula($formula, ['Fey'], [
            'feats' => ['Craft Wondrous Item'],
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
    <li>When worn with on of the six Amulets of Draconic Might, an individual becomes immune to Fear effects of dragons and gains Immunity to all Breath Weapons from dragons. They also gain the ability to Rebuke evil-aligned dragons as if the wearer used the Rebuke Undead ability (treat the wearers Character Level as the Caster Level). Due to the dangers of attempting to compel a dragon, this power is seldom used.</li>
</ul>";
        $helper->saveFormula($formula, ['Magical', 'Dragon', 'Attunement'], [
            'feats'  => ['Forge Ring'],
            'spells' => ['Sending', 'Silent Image', 'Tongues'],
            'skills' => ['Lore' => ['dc' => '15', 'meta' => 'Dragons']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Riverine Armor';
        $formula->type          = 'Armor';
        $formula->level         = 5;
        $formula->price         = '20,000 gp';
        $formula->crafting_time = '1 week';
        $formula->crafting      = '<ul>
    <li>Obtain water from the Elemental Plane of Water (at 10 gallons).</li>
</ul>';
        $formula->description = "<p>Riverine, also called 'Solid Water', is created using water taken from the Elemental Plane of Water. It takes multiple castings of Shape Water. At the end of the forging process, the water only flows within the regions it was shaped into.</p>
<p>Armor made from Riverine grants Resistance to Fire. Riverine can be used to create any Medium or Heavy armor (except Hide). Riverine is usually not used to make weapons, as it cannot hold an edge and offers too much give as a Bludgeoning weapon.</p>
<p>Once the armor is forged, it can then be enchanted further. Each Rune that is to be added also requires the casting of the Control Water spell.</p>";
        $helper->saveFormula($formula, ['Water'], [
            'feats'  => ['Craft Armament'],
            'spells' => ['Shape Water'],
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
        $helper->saveFormula($formula, ['Fey'], [
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
