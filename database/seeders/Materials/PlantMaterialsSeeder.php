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
        $mat->name        = 'Ambrosia';
        $mat->description = '<p>Good spellcasters can use Ambrosia in magic item creation.</p>
<p>A living creature that drinks a dose of Ambrosia experiences a soothing sensation that wipes away minor aches and pains, takes the edge off grief and sadness, cures 1 point of damage, and 1 point of ability damage. These positive sensations and emotions persist for 1D4+1 hours.</p>
<p>The Celestial Hebdomad subsist entirely on Ambrosia.</p>';
        $mat->type = 'Liquid';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ash Chives';
        $mat->description = 'This plant grow in clumps from underground bulbs and produce round, hollow gray leaves';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '10 gp';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Beetle Palm';
        $mat->type        = 'Plant or Herb';
        $mat->description = "<p>Beetle Palm trees, named for their black bark, which looks like a beetle's carapace, are found mainly in the mid-wood of the great forest Cormanthor. On average, they grow to 70 feet in height, but a few grow to heights of 100 feet or more. Clusters of spindly, spiky fronds often mistaken for leafless branches crown their otherwise smooth trunks, and a small cluster of soft-rinded, smooth, black, bitter-tasting nuts the size and general shape of plums grow under the fronds, dropping off once a year after the first snowfall.</p>
<p>Beetle Palm wood is a dull brown and lightens as it dries, becoming a mellow tan. Beetle Palm wood contains oily deposits that make it exceptionally flammable, but long-burning rather than volatile; it burns nearly three times as long as other types of wood and produces about half the amount of smoke. The wood is sturdy, but not outstanding, and it has a tendency to snap in sections from 2 to 3 feet long after it has dried, so it is not often used in making buildings or carts.</p>
<p>Beetle Palm wood conveys no special properties to items made from it or spells cast when using it as a material component. Beetle Palm nuts, however, are exceptionally effective if used as a substitute material component in the Goodberry spell. When used, they enable up to a huge size hungry creature to eat the soft outer rind and be as well-nourished as if a full normal meal.</p>";
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Belladonna';
        $mat->type        = 'Plant or Herb';
        $mat->rarity      = 'Uncommon';
        $mat->description = '<p>Used to create a poison, which can also cure lycanthropy.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Blackleaf Rose';
        $mat->description = '<p>This blood-red rose have a black stem with small reddish thorns</p>';
        $mat->type        = 'Plant or Herb';
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
        $mat->type        = 'Plant or Herb';
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

        $mat              = new Material;
        $mat->name        = 'Bluewood';
        $mat->type        = 'Wood';
        $mat->rarity      = 'Uncommon';
        $mat->source      = "<ul>
    <li>North of Amn, in humid temperate and subarctic areas</li>
    <li>Evereska</li>
    <li>Ardeep Forest or the Sword Coast North</li>
    <li>High Torog in the Nether Mountains</li>
    <li>Banks of the Laughingflow in the Evermoors</li>
    <li>Silverymoon (Silver Marches), where most streets are lined with Blueleaf</li>
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
        $mat->name        = 'Calantra';
        $mat->type        = 'Wood';
        $mat->source      = '<ul>
    <li>Forest of Tethir</li>
    <li>Northern Chult</li>
    <li>Shaar</li>
</ul>';
        $mat->description = '<p>This species is found south and east of Mosstone in the Forest of Tethir and in all the woodlands south and east of there as far as northern Chult and the Shaar. One of the favorite carving woods of Calimshan and the Tashalar thanks to its durability and ability to absorb human oils and moisture for years after being cut so as to avoid decaying, drying out or splitting, calantra is th heartwood of the calan tree. Calans are stout, red-barded trees with deep brown wood that grow to no more than 11 feet in height and consist of thick trunks with no side-branches that rise up into a gnarly crown of many small, interwoven branches. Most humans can traverse calan stands only in a hunched-over posture, making such travelers easy prey for shorter creatures who can move at will among the trees below the canopy.</p>
<p>Calan trees are as hardy alive as they are dead, withstanding most frosts, fires, and floods. Much used in the making of furniture, travel chests, and waling sticks, calantra is prized by those who craft magical items because of this hardiness.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Charcoal';
        $mat->type   = 'Wood';
        $mat->rarity = 'Ubiquitous';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Dragontongue Petals';
        $mat->description = '<p>These golden petals are spicy when eaten, giving a similar effect as drinking firewater</p>';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '10 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Fire Breath</p>';
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
        $mat->description = 'This brown fungus is known by its strong odor and potent poison when dried and ground';
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
        $mat->type   = 'Plant or Herb';
        $mat->rarity = 'Common';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Habbat';
        $mat->type        = 'Plant or Herb';
        $mat->rarity      = 'Uncommon';
        $mat->description = '<p>A dark wild grain that grows in the Elemental Plane of Fire.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Henbane';
        $mat->type        = 'Plant or Herb';
        $mat->rarity      = 'Uncommon';
        $mat->description = '<p>Hyoscyamus niger, commonly known as Henbane, is a highly toxic plant in the nightshade family (Solanaceae). Historically used in herbal medicine as a sedative and pain reliever, it contains potent tropane alkaloids that make it extremely dangerous to consume and potentially fatal without professional medical processing.</p>';
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
        $mat->type        = 'Plant or Herb';
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
        $mat->description = '<p>This root has small air bags inside of it, and when the root is squished the air sounds like screams for a few seconds</p>';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '5 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Electricity Resistance</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Mistletoe';
        $mat->type   = 'Plant or Herb';
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
        $mat->type        = 'Plant or Herb';
        $mat->description = '<p>A soft spongy grass that grows in the Elemental Plane of Fire</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Sap';
        $mat->type        = 'Plant or Herb';
        $mat->description = '<p>Sap from a tree</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Serpent Tree';
        $mat->type        = 'Plant or Herb';
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
        $mat->name        = 'Silverbark';
        $mat->type        = 'Wood';
        $mat->price       = '10 gp';
        $mat->description = '<p>This species flourishes in wet ground throughout Faerun, generally near bogs and swamps, but sometimes in deep, flooded ravines in the depths of large forests. Silverbarks are thin and straight, seldom growing more than 15 feet tall or more than 4 inches in diameter. They are plentiful, and grow in thickets, from which they are easily cut. Silverbark wood is reddish and dries out thoroughly after it is cut, becoming very light but also very brittle after a year or so. The deep red leaves are large and oval with pointed tips, tiny saw-toothed edges, and purple bases. They are waxy and strong and are sometimes used to wrap game in - or even to carry kindling - in the wilds. The silver bark for which the tree is named is loose and can be easily torn away (whereupon it crumbles).</p>
<p>Silverbark trunks serve the poor as staves, poles, and as defensive stakes (once points have been whittled and hardened in a slow fire). The weakness of the wood makes it unsuitable for lance shafts, fence rails, or structural work, but its sap is an essential ingredient in poison antidotes and Sweet Water potions. It can be used as a universal replacement component in all purification and antitoxin magics, taking nothing from the effectiveness of such spells.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Spiritual Wood';
        $mat->description = 'This cyan-like wood has a natural connection with magic';
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
        $mat->name        = 'Thundertree';
        $mat->description = 'This tree produces the Thunderleaf. The wood from this plant is sometimes used to craft wooden magical items related to electricity';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '20 gp';
        $mat->alchemy     = '<p>Used to craft Wands and Staves related to electricity</p>';
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
        $mat->type        = 'Plant or Herb';
        $mat->price       = '5 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Positive Energy Resistance</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Umbellin';
        $mat->type        = 'Plant or Herb';
        $mat->description = '<p>A spicy brown bean that grows in the Elemental Plane of Fire.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Vegetable';
        $mat->type   = 'Plant or Herb';
        $mat->rarity = 'Common';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Verdobba';
        $mat->type        = 'Plant or Herb';
        $mat->description = '<p>A Nutty dark purple tuber that grows in the Elemental Plane of Fire.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Wisp Stems';
        $mat->description = 'This tiny flower looks like a bright blue dandelion seed head. Even though it looks pretty, the stem is the only usable part for alchemical concoctions';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '40 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Vitality</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'White Poppy';
        $mat->description = 'A beautiful white flower that grows up to 4 feet tall and having 5 petals, giving it a small star shape';
        $mat->type        = 'Plant or Herb';
        $mat->price       = '10 gp';
        $mat->alchemy     = '<p>Used to craft Potions of Growth and Shrink</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Wolfsbane';
        $mat->type        = 'Plant or Herb';
        $mat->description = '<p>A flowering plant found both in the Prime Material and the Feywild.</p>
<p>A bundle of Wolfsbane is usually enough to keep lycanthropes at bay.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Zalantar';
        $mat->type   = 'Plant or Herb';
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

        $mat              = new Material;
        $mat->name        = 'Ahaabra';
        $mat->type        = 'Plant or Herb';
        $mat->source      = 'Underdark';
        $mat->description = '<p>Not harmful if eaten but neither nourishing or tasty cave fungi. Rather rubbery to texture with an orange hue.</p>
<p>Other known similar cave fungi include the following</p>
<ul>
    <li>Evmralgra</li>
    <li>Rellra</li>
</ul>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Blueridge';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>The Rimwood (Cormanthor)</li>
</ul>';
        $mat->description = '<p>Species of Pine Trees</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Blue Snowwood';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>The Great Glacier</li>
</ul>';
        $mat->description = '<p>Species of Pine Trees</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Lost Needle';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>The Pirate Isles</li>
</ul>';
        $mat->description = '<p>Species of Pine Trees</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Needleleaf';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>The Rimwood (Cormanthor)</li>
</ul>';
        $mat->description = '<p>Species of Pine Trees</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Niflheim Pine';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>The Plane of Niflheim in the Outer Planes</li>
</ul>';
        $mat->description = '<p>Species of Pine Trees</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Pinyon';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>Pasocada Basin (Maztica)</li>
</ul>';
        $mat->description = '<p>Species of Pine Trees, eaten by the Azuposi.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Ponderosa';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>The Savage Frontier</li>
</ul>';
        $mat->description = '<p>One o fthe largest pine species.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Roseneedle';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>River Ashaba</li>
</ul>';
        $mat->description = '<p>Species of Pine Trees that rarely grows more than 30 ft tall. The roots of the tree can extend to over 10 ft in depth with their ends forming tubers that are shaped roughly like potatoes and make for excellent fishing bait.</p>
<p>Each needle on the tree has a pink or white rose-like blossom.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'White Pine';
        $mat->type   = 'Wood';
        $mat->source = '<ul>
    <li>The Savage Frontier</li>
</ul>';
        $mat->description = '<p>Species of Pine Trees</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Pine Wood Tree';
        $mat->type   = 'Wood';
        $mat->source = "<ul>
    <li>Forest of Cormyr.</li>
    <li>Southern slopes of the Spine of the World.</li>
    <li>Cold Wood, Vordrorn Forest, and Mooshie's Groove.</li>
    <li>Gauros, Rawlinswood, and the Guthmere Forest.</li>
    <li>High Thay and Rashemen (Ashenwood, Lake Ashane)</li>
    <li>Forest of Wyrms.</li>
    <li>Moonshae Isles, Ruathym.</li>
    <li>High Moor</li>
    <li>Lake of Mists</li>
    <li>Kozakura</li>
    <li>Crowded Sea, Steaming Isles</li>
    <li>Snowflake Mountains, Carradoon, Spirit Soaring.</li>
    <li>In the Abyss, Deathroot Woods of Hollow's Heart.</li>
</ul>";
        $mat->description = '<p>Generic speciies of Pine Trees</p>';
        $mat->save();
    }
}
