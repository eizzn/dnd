<?php

namespace Database\Seeders\Materials;

use App\Models\Material;
use Illuminate\Database\Seeder;

class PlantMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mat              = new Material;
        $mat->name        = 'Ash Chives';
        $mat->description = 'This plant grow in clumps from underground bulbs and produce round, hollow gray leaves';
        $mat->type        = 'Plant';
        $mat->price       = '10 gp';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Belladonna';
        $mat->type        = 'Plant';
        $mat->rarity      = 'Uncommon';
        $mat->description = '<p>Used to create a poison, which can also cure lycanthropy.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Blackleaf Rose';
        $mat->description = '<p>This blood-red rose have a black stem with small reddish thorns</p>';
        $mat->type        = 'Plant';
        $mat->price       = '40 gp';
        $mat->alchemy     = '<p>Used to craft the poison called Midnight Tears</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Blackroot';
        $mat->type        = 'Herb';
        $mat->rarity      = 'Rare';
        $mat->description = '<p>This plant only grows in the Underdark and is quite rare.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Blood Herb';
        $mat->description = '<p>A dark red herb found in forests, with a similar shape to the blue herb</p>';
        $mat->rarity      = 'Common';
        $mat->type        = 'Herb';
        $mat->price       = '2 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Healing</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Bloodberry Bush';
        $mat->type        = 'Plant';
        $mat->rarity      = 'Uncommon';
        $mat->description = '<p>This bush typically grows where great battles have taken place.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Blue Herb';
        $mat->description = 'A medicinal dark blue herb that grows in almost every terrain near water sources like rivers and lakes';
        $mat->type        = 'Herb';
        $mat->price       = '5 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Healing</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Bluewood';
        $mat->type   = 'Wood';
        $mat->rarity = 'Uncommon';
        $mat->source = "<ul>
    <li>North of Amn, in humid temperate and subarctic areas</li>
    <li>Evereska</li>
    <li>Ardeep Forest or the Sword Coast North</li>
    <li>High Torog in the Nether Mountains</li>
    <li>Banks of the Laughingflow in the Evermoors</li>
    <li>Silverymon (Silver Marches), where most streets are lined with Bluleaf</li>
    <li>Hermit's Wood in Cormyr</li>
    <li>In the Nelanther Isles, these trees grow in the southern section of the pair of islets known as the Tusks</li>
    <li>The Vast Swamp, with stunted trees growing around the fringe</li>
    <li>The Shadow Swamp (a reflection of the Vast Swamp) in the Shadowfell, around the Shadow Citadel</li>
    <li>A small number of these trees grow on the island of Evermeet</li>
</ul>";
        $mat->description = '<p>Bluewood trees can be hardened to be as hard as steel after being treated with alchemy.</p>';
        $mat->armor       = '<p>Replaces the metal. Armor made with Bluewood is as hard as steel, but weighs half as much. Volodni of the Unapproachable East are the only ones know to be able to make Bluewood armor.</p>';
        $mat->other       = '<p>The leaves of the Bluewood (called Blueleaf) and the sap can be crushed to make a bright blue dye. The leaves can also be burned, which causes the fire to burn with a bright blue color.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Dragontongue Petals';
        $mat->description = '<p>These golden petals are spicy when eaten, giving a similar effect as drinking firewater</p>';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '10 gp';
        $mat->alchemy     = '<p>used to craft Potions of Fire Breath</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Drojos Ivy';
        $mat->description = 'A purple climbing or ground-creeping woody plant used by animals and humanoids as natural ropes in jungles and forests';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '5 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Climbing</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Druid Ephedra';
        $mat->description = 'A brown shrub found in warm arid regions which has tiny scale-like leaves';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '10 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Fire Resistance</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Duskwood';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>Cormanthor</li>
    <li>The Sword Coast</li>
    <li>The Vast</li>
    <li>The Frozen North</li>
</ul>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ecire Laurel';
        $mat->description = 'An aromatic evergreen shrub with green, glabrous leaves that grows in swamps';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '20 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Poison Resistance</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ebrium Fungus';
        $mat->description = 'This brown fungus is known by its strong odor and potent poison when dried and grinded';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '40 gp';
        $mat->alchemy     = '<p>Ebrium Fungus</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ellond Shrub';
        $mat->description = 'A dried looking woody plant which is smaller than a tree and has several main stems arising at or near the ground';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '5 gp';
        $mat->alchemy     = "<p>Used to craft Alchemist's Fire</p>";
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Frenn Moss';
        $mat->description = 'A blue gray moss that grows in swamps and marshes';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '10 gp';
        $mat->alchemy     = '<p>Used to craft the poison called Essence of Ether</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Fruit';
        $mat->type   = 'Plant';
        $mat->rarity = 'Common';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Habbat';
        $mat->type        = 'Plant';
        $mat->rarity      = 'Uncommon';
        $mat->description = '<p>A dark wild grain that grows in the Elemental Plane of Fire.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Kasuni Juice';
        $mat->description = 'A white dense liquid extracted from the spherical flower of a Kasuni plant';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '20 gp';
        $mat->alchemy     = '<p>Used to craft Oils of Slipperiness</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Kreet Paste';
        $mat->description = 'A thick viscous fluid extracted from a Kreet mushroom, found in humid cold places';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '20 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Greater Healing</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Leafweave';
        $mat->description = 'Alchemically processed leaves that are hard as leather, used also as camouflage';
        $mat->type        = 'Plant';
        $mat->price       = '100 gp';
        $mat->other       = '<p>Used to craft the Boots of Elvenkind and the Cloak of Elvenkind</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Livewood';
        $mat->type   = 'Wood';
        $mat->rarity = 'Rare';
        $mat->source = '<ul>
    <li>Feywild</li>
    <li>Cormanthor</li>
    <li>Evermeet</li>
    <li>The Forest of Lethyr</li>
</ul>';
        $mat->description = '<p>The green tinted brown wood from a Livewood tree has a unique property; it does not die when cut. So long as the wood is granted water and sunlight for at least 1 hour every seven days continues to live.</p>
<p>Because the wood is still alive, spells that affect plants will work on Livewood.</p>';
        $mat->armor = '<p>Livewood can be used to create any armor except Chain Shirt and Chainmail. Armor made from Livewood grants the wearer +3 bonus to all Saves vs Fire.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Lunar Flower';
        $mat->description = 'The nectar from this white tiny flower can only be harvested under moonlight';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '20 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Force Resistance</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Mandrake Root';
        $mat->description = 'This root have small air bags inside of it, and when the root is squished the air sounds like screams for a few seconds';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '5 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Thunder Resistance</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Mistletoe';
        $mat->type   = 'Plant';
        $mat->rarity = 'Common';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Olina Petals';
        $mat->description = '<p>These pink petals have small bright red dots, known for its venomous properties</p>';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '20 gp';
        $mat->alchemy     = '<p>Used to craft the poison called Pale Tincture</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Qamh';
        $mat->type        = 'Plant';
        $mat->description = '<p>A soft spongy grass that grows in the Elemental Plane of Fire</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Serpent Tree';
        $mat->type        = 'Plant';
        $mat->description = '<p>A perpetually bare tree that grows in the Elemental Plane of Fire. They feed entirely off of the heat of the plane as normal plants feed on the energy of the sun.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Serren';
        $mat->type   = 'Wood';
        $mat->rarity = 'Uncommon';
        $mat->source = '<ul>
    <li>The Outer Plane of Arvandor, the uppermost layer of Arborea.</li>
</ul>';
        $mat->description = '<p>Serren wood is harvested from the trees of the same name.</p>';
        $mat->weapon      = '<p>Wooden weapons made with Serren can affect Ethereal creatures as if they are not Ethereal. Most often times Serren wood is used to make arrows and crossbow bolts.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Spiritual Wood';
        $mat->description = 'This cyan-like wood has a natural connection with the magic';
        $mat->type        = 'Wood';
        $mat->price       = '250 gp';
        $mat->armor       = '<p>Replaces the metal of any medium or heavy armor. While wearing a spiritual wood armor, you gain a +3 bonus to concentration checks to maintain a spell</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Spineflower Berries';
        $mat->description = 'Small purple brown berries that grows in the center of the spineflower, a rare plant with sharp petals and a stem filled with spines';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '40 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Superior Healing</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Thunderleaf';
        $mat->description = 'These yellow leaves are soft to the touch and known to have for never fallen from a thundertree because of wind';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '20 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Flying</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Twilight Wormwood';
        $mat->description = "A purple gray fibrous plant with straight stems, growing up to 3 feet tall. The leaves are spirally arranged, and they're known for their poisonous properties";
        $mat->type        = 'Plant or Herb';
        $mat->price       = '5 gp';
        $mat->alchemy     = '<p>Used to craft basic Poison vials</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ucre Bramble';
        $mat->description = 'A white rough tangled prickly shrub with thorny stems that grows in almost every plain, no matter the temperature';
        $mat->type        = 'Plant';
        $mat->price       = '5 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Radiant Resistance</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Umbellin';
        $mat->type        = 'Plant';
        $mat->description = '<p>A spicy brown bean that grows in the Elemental Plane of Fire.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Vegetable';
        $mat->type   = 'Plant';
        $mat->rarity = 'Common';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Verdobba';
        $mat->type        = 'Plant';
        $mat->description = '<p>A Nutty dark purple tuber that grows in the Elemental Plane of Fire.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Wisp Stems';
        $mat->description = 'This tiny flower looks like a bright blue dandelion seed head. Even though it looks pretty, the stem is the only usable part for alchemical concoctions';
        $mat->type        = 'Plant';
        $mat->price       = '40 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Vitality</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'White Poppy';
        $mat->description = 'A beautiful white flower that grows up to 4 feet tall and having 5 petals, giving it a small star shape';
        $mat->type        = 'Plant';
        $mat->price       = '10 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Growth</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Wolfsbane';
        $mat->type        = 'Plant';
        $mat->description = '<p>A flowering plant found both in the Prime Material and the Feywild.</p>
<p>A bundle of Wolfsbane is usually enough to keep lycanthropes at bay.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Zalantar';
        $mat->type   = 'Plant';
        $mat->rarity = 'Rare';
        $mat->source = '<ul>
    <li>Shaar</li>
    <li>Chult</li>
    <li>Dambrath: Great Swamp of Rethild</li>
</ul>';
        $mat->description = '<p>Zalantar, also called Blackwood or Darkwood is a subtropical tree that is usually found in southern Faerun.</p>
<p>Zalantar grows oddly in the sense that one plant is composed of several tree trunks that stem from a central root system. Their leaves are usually white or another light color.</p>';
        $mat->armor = '<p>Alchemically treating the bark of the Zalantar tree, many layers can be combined to make Darkwood versions of Medium or Heavy (but not Hide) armor. The armor provides a +1 AC bonus and weighs half as much.</p>
<p>The leaves can also be alchemically treated and combined into many layers to make Light or Medium (but not Hide) armor. The armor provides a +1 AC bonus and the maximum DEX bonus is increased by one point. If the armor does not usually add your DEX bonus to AC, it now does with a maximum of 1. Making armor with the leaves is a painstaking and long process. It is usually reserved for elven nobility and elven magelords.</p>';
        $mat->other = '<p>Darkwood is extensively used in the south in buildings, wagons, wheels, and almost exclusively for Rods, Staffs, and Wands. Items made from Zalantar weigh half as much as normal wooden items of the same type.</p>';
        $mat->save();
    }
}
