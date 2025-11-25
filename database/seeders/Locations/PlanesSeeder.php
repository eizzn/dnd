<?php

namespace Database\Seeders\Locations;

use App\Models\God;
use App\Models\Location;
use App\Models\Plane;
use App\Models\SubPlane;
use Illuminate\Database\Seeder;

class PlanesSeeder extends Seeder
{
    public function run()
    {
        $this->call(ElementalSeeder::class);

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'FeyWild';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = 'Fey';
        $plane->description = "<p>All fey in the FeyWild must follow these rules set by Titania.</p>
<dl>
    <dt>Rule of Hospitality</dt> <dd>
        <p>When an individual enters another's dwelling, the host is obligated to offer basic courtesy and protection to the guest, even if the guest is an enemy. Sometimes a host offers bread and salt as a formal ceremony of entering the Promise of Hospitality.</p>
        <ul>
            <li>Basic Courtesy: A host must offer basic courtesy and protection to a guest, regardless of their relationship (friend, enemy, or stranger)</li>
            <li>Protection: Hosts are expected to defend their guests from harm, and guests are expected to defend their hosts and other guests.</li>
            <li>Reciprocity: Guests are expected follow the Rule of Reciprocity and offer a gift or service of comparable value in return for the host's hospitality.</li>
        </ul>
    </dd>
    <dt>Rule of Ownership</dt> <dd>Possession is a core aspect of fey existence. Theft of possession is treated as a serious crime. However, fey also follow the Rule of Reciprocity, and the consequences of a stolen item can be resolved by a trade of something of equal or greater value.</dd>
    <dt>Rule of Reciprocity</dt> <dd>Any gift or favor given must be reciprocated with something of comparable value. Value is subjective, and an offer can be interpreted differently by some fey, and what they deem valuable may not align with others understanding of worth.</dd>
</dl>";
        $plane->save();

        $location              = new Location;
        $location->name        = 'Seelie Court';
        $location->aliases     = 'The Summer Court';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['The Court of Stars']->id;
        $location->description = '<p>The Seelie Court is split into two groups, the Inner Circle and the Other Circle. The Inner Circle is a close group of six powers who shared attributes. They include the following.</p>
<ul>
    <li>King Oberon, Lord of Beasts</li>
    <li>Queen Titania, The Summer Queen</li>
    <li>Damh, The Prince of Fools and son of Oberon and Titania</li>
    <li>Sqeulaiche, The Court Jester</li>
    <li>Verenestra, Daughter of Titania</li>
    <li>Absalom, Archfey of the UrlingWood and son of Oberon and Titania</li>
</ul>
<p>Members of the Other Circle included the following</p>
<ul>
    <li>Eachthighern, Lord of Unicorns and Pegasi</li>
    <li>Caoimhin, Patron of the Killoulis</li>
    <li>Emmantiensien, Patron of Treants</li>
    <li>Fionnghuala, Patron of Swanmays</li>
    <li>Nathair Sgiathach, Patron of Faerie Dragons and Pseudodragons</li>
    <li>Skerrit, Patron of Centaurs</li>
</ul>';
        $plane->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Corellon Larethian')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Unseelie Court';
        $location->aliases     = 'The Winter Court';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['The Court of Stars']->id;
        $location->description = "<p>The Unseelie Court is a mirror opposite of the Seelie Court, where the later is a place of laughter and friendship, the Unseelie Court is a place of hatred, enslavement, and death. The Court is located in an immense cavern of black stone full of stalagmites and stalactites, centered around a single mountainous stalagmite upon which the Queen's black onyx throne stands.</p>
<p>The Unseelie Court appears macabre and twisted to visitors. Trees grow in unnatural shapes, shadows hide blood-soaked alcoves, and nightshade and blood wort plants glow to provide the Court with haphazard red light. The throne itself is shaped like a great dragon.</p>";
        $plane->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Araushnee')->firstOrFail());

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'ShadowFell';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = '';
        $plane->description = '';
        $plane->save();
        // Vhaeraun/Mask is in the ShadowFell
        // The fey court is found on FeyWild, with easy access to Yggdrasil

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Astral Plane';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = '';
        $plane->description = '';
        $plane->save();

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Ethereal Plane';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = '';
        $plane->description = '';
        $plane->save();

        /**********************************************************************/

        $this->call(MountCelestia::class);
        $this->call(Bytopia::class);

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Elysium';
        $plane->aliases     = 'The Blessed Fields';
        $plane->alignment   = 'NG';
        $plane->color_pool  = 'Opal';
        $plane->natives     = 'Solars, Hollyphants, Planetars, Foo Creatures, Phoenix, Agathia, Baku, Moon Dogs, Guardinals';
        $plane->description = '<p>Most features of the four layers of Elysium are found on or near the banks of the river Oceanus which links the plane with two other Upper planes: the Beastlands and Arborea. Oceanus is the counterpart to the river Styx which flows through the Lower planes except that Oceanus has only natural hazards and contains potable water. Lands near the riverbanks are lush with pines and flowering trees that fill the air with natural perfume. Farther from the river smaller trees grow and start to thin until finally, after hundreds of miles, the forest gives way to fertile veldt regions, vast grasslands, and eventually badlands and desert. Elysian pears are considered some of the best tasting fruit and are sold as far as the planar city of Sigil.</p>
<p>There are no suns, moons, or stars in Elysium except those that the inhabiting Powers manifest, created by moving about in various vessels, or moving their entire realms across the skies. Depending on who or what is aloft, the shade of the sky could be deep indigo to a bright cerulean at any given moment.</p>
<p>Yggdrasil, the World Ash, extends its branches to all layers of Elysium, except Belierin.</p>';
        $plane->save();
        // Amoria, Eronia, Belierin, Thalasia

        /**********************************************************************/

        $this->call(Beastlands::class);

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Arborea';
        $plane->aliases     = 'Olympus, Arvandor';
        $plane->alignment   = 'CG';
        $plane->color_pool  = 'Sapphire';
        $plane->natives     = 'Solars, Hollyphants, Planetars, Foo Creatures, Agathia, Devas, Giant Animals, Gorgons, Chimeras, Medusae, Sphinxes, Pegasi';
        $plane->description = "<p>Arborea is first and foremost a land of emotions, running high, deep, and far. These are not all positive emotions; Arborea is a place of powerful love and hate, where rage and joy are equally common and equally honored. Like Limbo, it can be considered the opposite of Mechanus, not in the sense that it counters rigid order with formless chaos, but in that its deep-seated feelings are the antithesis of Nirvana's mechanical logic.</p>
<p>Arborea is most accurately described as \"boisterous\", favoring melodrama as opposed to stoicism. Vibrant energy fills the plane, the air tingling with excitement and constant anticipation in the literally emotionally charged atmosphere. It is not merely a place where the emotional gather, but a place that makes those present short-tempered, passionate, and, at times, hammy. It is a larger than life realm of huge appetites that change as quickly as the heart, where the violent moods and whims are backed by steel and the fervent affections and passions blazed bright before burning out.</p>
<p>Greed, envy, lust, and wrath are strong on Arborea, and emotions can be released with dangerous consequences, but that is not to say that the plane is an evil one. Arborea is as much a plane of good as it is one of chaos, disavowing the notions of those who see chaos as destructive disharmony or a tumultuous maelstrom. Rather, the Olympian Glades are a realm of individuality and independence, a good-natured place of celebrations and strong desires where personal freedom is paramount. As strong as the vices are, charity, justice, love, and kindness are equally rampant on Arborea.</p>
<p>Despite their rowdy and chaotic nature, Arboreans are bound by superstitions, ancient tradition, codes of conduct, and systems of respect that no one would dare violate. All Arborea is permeated by a supernatural power of oath-binding, more concentrated in some places than others, that prevents others from going back on their word lest they suffer horrible consequences, the worst of which could include a painful death.</p>
<p>One of Arborea's more subtle aspects is its addictive quality. The longer one stays, the more likely one will never want to leave, and after about a month will possibly need to be dragged back home by well-meaning friends. Just because they leave Arborea however, doesn't mean they have escaped its pull; they will need to be confined until the intense yearning subsides and its influence has waned.</p>";
        $plane->save();
        // The Elven pantheon
        // strong connection to the FeyWild
        // Aquallor, Mithhardir

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Arvandor';
        $sub->natives     = 'Aarakocra, Archfey, Eladrin, Drow, Elves, Ettercaps, Fey, Shadows, Spiders';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['Seldarine']->id;
        $sub->description = '<p>The first layer of Arborea. It is the home of the Seldarine.</p>
<p>Arvandor is a vast, infinite expanse of pristine wilderness covered in lush forests, massive mountains, perfectly clear streams, placid lakes, and an ocean called the Sparkling Sea. The realm stretches from the boundless mass of the Sparkling Sea to a range of snow-capped mountains.</p>
<p>The deep woods of Arvandor possesses an unearthly beauty, which not only exemplified its home plane of Arborea, but also influences it, as the long-term presence of elves in the plane has also somewhat changes it. The realm is full of secrets and mysteries that are known only to the elven deities.</p>
<p>The thick canopy of the forests is divided in layers in many locations, an upper layer of sun-loving trees and a lower layer of shade-favoring vegetation. In some of the thicker forests areas, the undergrowth is nearly impenetrable, due to a combination of dense foliage and the trunks of dead trees. Those areas are dangerous and generally avoided by elves.</p>
<p>the darkness of the forests is offset by the brightness of the meadows of Arvandor. They are characterized either by their perennial flowers or by the blue blossoms that grow above the snow during spring.</p>
<p>The otherworldly beauty and passion of Arvandor can be overwhelming to non-elves. Those that can not resist it are overtaken by an irresistible desire to dance and commune with the elves, and have to be guided away, otherwise risking becoming lost forever. Not even half-elves are immune to this effect.</p>
<p>Each one of the elven patron deities maintain a realm on this plane. None of these realms have a border and each one seamlessly meld into the other with absolutely no discernible borders apparent. While each deity claims a portion of the realm, the majority is shared by the entire pantheon and with the celestial eladrin.</p>';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Corellon Larethian')->firstOrFail());

        $location           = new Location;
        $location->name     = 'The Gnarl';
        $location->type     = 'Site';
        $location->description = "<p>A village of elves and ratatosk near one of the roots of Yggdrasil. The village neighbors Erevan Ilesere's realm.</p>";
        $sub->locations()->save($location);
        $sub->locations()->save(Location::where('name', 'Seelie Court')->firstOrFail());
        $sub->locations()->save(Location::where('name', 'Unseelie Court')->firstOrFail());

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Ysgard';
        $plane->aliases     = 'Gladsheim';
        $plane->alignment   = 'C G/N';
        $plane->color_pool  = 'Indigo';
        $plane->natives     = 'Bariarus, Devas, Fire Giants, Firre, Frost Giants, Ghaeles, Hollyphants, Lilends, Planetars';
        $plane->description = "<p>The three layers of Ysgard consists of tremendous rivers of earth and stone that forms cosmic arches through the void, like very tightly packed asteroid belts. Millions of miles wide, each river is made up of gigantic chunks of matter that bump and grind against each other at a glacial but noticeable pace, raising up mountains and opening vast chasms. These \"earthbergs\" all share the same gravity field and most are inhabitable on the top side while the underside of the rivers burn with a radiant fire that provides a ruddy light to the rivers below. Earthquakes and landslides are a commonly occurring danger in Ysgard as the landscape slowly buckles and breaks under the influence of chaos.</p>
<p>Multiple rough-hewn landings of the Infinite Staircase connects to each of Ysgard's three layers.</p>";
        $plane->save();
        // Tempus, Red Knight, Valkur, Uthgar

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Ysgard';
        $sub->natives     = '';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->description = '<p>Ysgard the layer is the first layer of the Plane of Ysgard.</p>
<p>Like the other layers of the plane, Ysgard is formed of vast chunks of land of sizes that varied from small to continent-like. These lands float in the sky, flowing like rivers of earth several million miles wide along patterns that resemble huge arches in the sky. The chunks of inhabitable land slowly shifts and moves, breaking apart and crunching together. The bottom portion of these earthbergs shines with a red light that illuminates and warms the layers below.</p>
<p>Ysgard is the best known layer, as well as the most populous. Its mountainous landscape leads to cold seas and, at night, the numerous earthbergs glow in the sky along their arches, forming structures resembling rivers of lava.</p>';
        $sub->save();

        $location              = new Location;
        $location->name        = 'Jotunheim';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['The Ordning']->id;
        $location->description = '<p>Jotunheim is the realm of the giants, the children of Annam All-Father.</p>
<p>The plane consists of glaciers, volcanoes, snow-capped mountains, and desolate plains. Much of the landscape is dotted with menhirs and forests of towering pine and oak trees.</p>';
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Annam')->firstOrFail());

        $fimbol              = new Location;
        $fimbol->name        = 'Stormhold';
        $fimbol->type        = 'Divine Realm';
        $fimbol->pantheon_id = app()->pantheons['The Ordning']->id;
        $fimbol->description = '';
        $location->sub_locations()->save($fimbol);
        $fimbol->ruler()->save(God::where('name', 'Stronmaus')->firstOrFail());

        $fimbol              = new Location;
        $fimbol->name        = 'Woodhaven';
        $fimbol->type        = 'Divine Realm';
        $fimbol->pantheon_id = app()->pantheons['The Ordning']->id;
        $fimbol->description = '';
        $location->sub_locations()->save($fimbol);
        $fimbol->ruler()->save(God::where('name', 'Hiatea')->firstOrFail());

        $fimbol              = new Location;
        $fimbol->name        = 'Thraotor';
        $fimbol->type        = 'Divine Realm';
        $fimbol->pantheon_id = app()->pantheons['The Ordning']->id;
        $fimbol->description = '';
        $location->sub_locations()->save($fimbol);
        $fimbol->ruler()->save(God::where('name', 'Memnor')->firstOrFail());

        $fimbol              = new Location;
        $fimbol->name        = 'Fimbolwinter';
        $fimbol->type        = 'Divine Realm';
        $fimbol->pantheon_id = app()->pantheons['The Ordning']->id;
        $fimbol->description = '';
        $location->sub_locations()->save($fimbol);
        $fimbol->ruler()->save(God::where('name', 'Thrym')->firstOrFail());

        $meerrauk              = new Location;
        $meerrauk->name        = 'Meerrauk';
        $meerrauk->type        = 'Divine Realm';
        $meerrauk->pantheon_id = app()->pantheons['The Ordning']->id;
        $meerrauk->description = '';
        $location->sub_locations()->save($meerrauk);
        $meerrauk->ruler()->save(God::where('name', 'Surtur')->firstOrFail());

        $steading              = new Location;
        $steading->name        = 'The Steading';
        $steading->type        = 'Divine Realm';
        $steading->pantheon_id = app()->pantheons['The Ordning']->id;
        $steading->description = '';
        $location->sub_locations()->save($steading);
        $steading->ruler()->save(God::where('name', 'Grolantor')->firstOrFail());

        $steading              = new Location;
        $steading->name        = 'Florallium';
        $steading->type        = 'Divine Realm';
        $steading->pantheon_id = app()->pantheons['The Ordning']->id;
        $steading->description = '';
        $location->sub_locations()->save($steading);
        $steading->ruler()->save(God::where('name', 'Iallanis')->firstOrFail());

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Limbo';
        $plane->alignment   = 'CN';
        $plane->color_pool  = 'Jet';
        $plane->natives     = 'Slaadi, Githzerai';
        $plane->description = '<p>This plane is supreme chaos, a twisting, quicksilver place filled with bits and pieces of rocks, trees, the four elements, entire landscapes, strong winds, and random pockets of liquid, solid, or gas. Sentient beings can dampen down the chaos to livable levels and produce a safe environment as long as they maintain concentration. The size of a safe zone is directly related to the intelligence of the individual controller. Demigods and more powerful beings do not have this burden and can create realms that survived even if they leave Limbo. Gravity operates only between solid objects that touched each other and have about the same strength as on most Prime Material Planes. Thrown objects will fly straight until they hit a solid object. Objects with no momentum will hang in space until contacted by something solid.</p>
<p>As described by the Great Wheel cosmology, Limbo has five layers that are nearly indistinguishable from each other. The first four layers are named for the chief race or deity that are most often found there. The fifth layer is referred to as the layer of Lost Gods.</p>
<p>A branch of Yggdrasil, the World Ash, connects the first layer of Ysgard to Limbo. It is a trajectory regularly chosen by the Great Modron March.</p>
<p>A rare type of substance is exported out of Limbo called shiftspice. It is sold in small packets and consumed through dipping and licking wetted fingers. Each dip tastes differently. This exotic spice can be purchased as far from Limbo as Sigil, the City of Doors.</p>';
        $plane->save();
        // Slaad pantheon

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Pandemonium';
        $plane->alignment   = 'C N/E';
        $plane->color_pool  = 'Magenta';
        $plane->natives     = 'Howlers';
        $plane->description = '<p>Pandemonium is made entirely of rock pierced by innumerable tunnels and caverns large and small. All open space is filled with howling winds that carries the sound of every word, shout, or scream uttered in the place. Without adequate protection, beings with hearing are rendered temporarily deaf in a matter of seconds and permanently deaf in a few minutes. Normal fires can not survive and there is no natural light. Conversation can only be accomplished by shouting at close range.</p>
<p>Gravity in Pandemonium always pulls away from the center of any cavern so a traveler can walk on the floor, walls, or ceiling. Streams and rivers flow along one surface of a cave, or inexplicably down the middle through the air. The larger caverns are hundreds to thousands of miles deep, wide, and tall, and the winds there can lift up small humanoids and carry them far away before a dangerous landing.</p>
<p>Pandemonium has four known layers, each with slightly different conditions</p>';
        $plane->save();

        $sub               = new SubPlane;
        $sub->parent_id    = $plane->id;
        $sub->name         = 'Pandesmos';
        $sub->gravity      = 'Objective directional';
        $sub->time         = 'Normal';
        $sub->description  = '<p>Pandesmos is the topmost layer of the plane of Pandemonium. This is the most hospitable layer of Pandemonium. The caverns are the largest here, some literally thousands of miles across. Immigrants to Pandemonium tend to live on the surface of these massive caverns, which contain both cities and citadels, though these are very rare. most caverns are abandoned to anything but wind. Despite the size of the caverns, they are as loud and windy as the rest of the greater plane, through the velocity of these winds are slightly less. Entire nations can fill the cavern walls, but the strong wind prevents this from ever happening.</p>
<p>The Styx begins here, ged by countless cold streams flowing along the walls of the otherwise rocky, subterranean wastes. Some of the streams even float through the open space in the centers of the caverns.</p>
<p>Dead-end tunnels with unusually strong winds (even for Pandemonium) often signal that one was at a barrier and about to pass to the lower layer of Cocytus. Flat, square portals found in Pandesmos lead to Limbo, the first layer of the Abyss and the Outlands. Yellow squares led to Limbo, red squares to the Abyss, and black to the Outlands. The portals are inconsistent, however, and sometimes send travelers to the wrong planes</p>';
        $sub->save();
        $sub->locations()->save(Location::where('name', 'Unseelie Court')->firstOrFail());

        /**********************************************************************/

        $this->call(Abyss::class);

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Carceri';
        $plane->aliases     = 'The Great Cage, The Red Prison, Tarterus';
        $plane->alignment   = 'N/C E';
        $plane->color_pool  = 'Olive or Red';
        $plane->natives     = 'Demodands, Achaierai, Nightmares, Shadow Demons, Mephits, Vargouille';
        $plane->description = '<p>The six layers of Carceri has a seemingly infinite number of worlds arranged like a string of pearls stretching into the air-filled void. In the top layer, Othrys, each orb is about the size of a Prime Material world and averaged about 100 miles from the nearest orb. In each successive lower layer the planetoids grow smaller and farther apart. There is no sun but the soil of each orb gives off heat and a dull reddish glow, similar to the phosphorescence of fire beetles. The planets do not rotate and there is no day or night unless a greater deity wishes it so in their realm. Seasons and weather occur randomly and what little plant life there is will rapidly mature after rainfall and then wither hours later. Each orb is connected to one specific Prime Material world.</p>
<p>The barriers between layers are always located at the deepest points on each planetoid and always led to the same sphere in the next layer, so the worlds of Tarterus can be imagined as spheres nested like nesting dolls and each layer contains a string of orbs of a particular size.</p>';
        $plane->save();
        // Apomps, Cyric, and the Olympian titans
        // fallen planetar now demon Adimarchus, imprisoned here by Graz'zt
        // Orthrys, Cathrys, Minethys, Colothys, Porphatys, Agathys

        /**********************************************************************/

        $this->call(Hades::class);

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Gehenna';
        $plane->alignment   = 'L/N E';
        $plane->color_pool  = 'Russet';
        $plane->natives     = 'Nightmares, Imps, Manes, Daemons, Mephits, Lesser Devils, Achaierai, Pyroclastic Dragons';
        $plane->description = '<p>The four layers of Gehenna are infinite planes with gravity at a forty-five-degree angle to the ground, making travelers feel as if they are on the side of a mountain with no base or peak. Anyone losing their footing can tumble for miles before finding enough purchase on the slope to halt their fall. Nearly all terrain that is not a river of water or lava is slightly slippery to quite slick. All structures are either built onto or carved into the slopes. Heat and light came from the ground, much like Tarterus, but the source is volcanic: lava flows, vents, fumaroles, and mud pots are very common. Earthquakes and volcanic eruptions occurr often, tearing the land apart. On the hotter layers, unprotected flammable items and creatures will catch fire from the glowing ground or superheated gases being ejected. The barriers between layers are always underground, usually in dead end corridors.</p>';
        $plane->save();
        // Khalas, Chamada, Mungoth, Krangath

        /**********************************************************************/

        $this->call(Baator::class);

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Acheron';
        $plane->aliases     = 'The Infernal Battlefields';
        $plane->alignment   = 'L E/N';
        $plane->color_pool  = 'Flame';
        $plane->natives     = 'Bladelings, Rust Dragons, Devils, Imps, Dwarves';
        $plane->description = '<p>Acheron is the bridge between the ultimate order of Nirvana and the regimented evil of the Nine Hells and as such, each layer emphasized order over evil. The land masses on each layer are blocks of geometric simplicity the size of nations floating in a sea of air. The blocks slowly collide and part without causing any upheaval or tremor, allowing beings to move to a new block if desired. The dance of the blocks is carefully orchestrated and creatures of high intelligence can usually discern a pattern for an area by studying the motions. It is said gravity pulls toward the center of the blocks but in practical terms gravity is normal to each surface.</p>';
        $plane->save();
        // Abbathor
        // Bane and Loviatar
        // Avalas, Thuldanin, Tintibulus, Ocanthus

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Mechanus';
        $plane->aliases     = 'Nirvana';
        $plane->alignment   = 'LN';
        $plane->color_pool  = 'Diamond';
        $plane->natives     = 'Modron, Maruts, Formians';
        $plane->description = '<p>This plane is filled with an infinite number of country-sized circular interlocking gears which are habitable on one or both sides. These great flat wheels are at least 1,000miles in diameter and have teeth that meshed at right angles, all turning slowly in synchronicity. Each disk has its own gravity that operates in a sphere circumscribing it exactly and pulling normal to the top and bottom surfaces. The void between the gears is filled with air, allowing easy flight. Outside a gravity sphere, objects will feel only very weak attraction to nearby disks.</p>
<p>A plane of Law and order, Nirvana has equal amounts of light and dark, heat and cold, and equal measures of the four elements. There is a place for everything and everything is in its place. Even individuals living here exist to fit into the greater scheme of things and thus achieve a perfect society. There is no pain, but the only pleasure is in successfully filling a role like a gear in a machine. Passion, fantasy, and illusion do not exist here, except for what might be brought in by visitors, and any who try to foment individualism or stir passions for a cause soon find they are not well received.</p>
<p>Nirvana is connected to the Prime Material Planes via the Astral Plane, and to the Outer Planes of Arcadia, Acheron, and Concordant Opposition by portals which appear once every revolution of the gears they belonged to. The period of rotation depended on the size of the gear, but a typical period is twenty days. The portals stay open for exactly one day. There is one portal to Concordant Opposition, located at the center of the featureless bottom side of a large gear, that is continually open.</p>';
        $plane->save();
        // Primus

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Arcadia';
        $plane->alignment   = 'L G/N';
        $plane->color_pool  = 'Saffron';
        $plane->natives     = 'Hollyphants, Planetars, Foo Creatures, Devas';
        $plane->description = '<p>Arcadia connects to Seven Heavens, Nirvana, and Concordant Opposition by portals made of either white ivory or black steel, shaped like flower trellises. These portals are few in number but rest at fixed locations in the first layer. Little is known about the other two layers.</p>';
        $plane->save();
        // Mystra, Azuth, Savras, Velsharoon

        /**********************************************************************/

        $location              = new Location;
        $location->name        = 'The River Styx';
        $location->type        = 'Planar Conduit';
        $location->description = '';
        $location->save();
        $location->sub_planes()->save(SubPlane::where('name', 'Pandesmos')->firstOrFail());
        $location->sub_planes()->save(SubPlane::where('name', 'Pazunia')->firstOrFail());
        // Orthrys
        // Khalas
        $location->sub_planes()->save(SubPlane::where('name', 'Avernus')->firstOrFail());
        // Avalas

        /**********************************************************************/

        $location              = new Location;
        $location->name        = 'Oceanus';
        $location->type        = 'Planar Conduit';
        $location->description = '';
        $location->save();
        // Amoria, Eronia, Belierin, Thalasia
        // Aquallor
        $location->sub_planes()->save(SubPlane::where('name', 'Ysgard')->firstOrFail());
        $location->sub_planes()->save(SubPlane::where('name', 'Krigala')->firstOrFail());
        $location->sub_planes()->save(SubPlane::where('name', 'Brux')->firstOrFail());
        $location->sub_planes()->save(SubPlane::where('name', 'Lunia')->firstOrFail());
        $location->sub_planes()->save(SubPlane::where('name', 'Arvandor')->firstOrFail());

        /**********************************************************************/

        $location              = new Location;
        $location->name        = 'Yggdrasil';
        $location->type        = 'Planar Conduit';
        $location->aliases     = 'The World Ash, The World Tree, Tree of Life';
        $location->description = '';
        $location->save();
        $location->sub_locations()->save(Location::where('name', "Hag's End")->firstOrFail());
        $location->sub_locations()->save(Location::where('name', 'Clangor')->firstOrFail());
        $location->sub_locations()->save(Location::where('name', 'Seelie Court')->firstOrFail());
        $location->sub_locations()->save(Location::where('name', 'Unseelie Court')->firstOrFail());
        $location->sub_locations()->save(Location::where('name', 'The Gnarl')->firstOrFail());
        $location->sub_planes()->save(SubPlane::where('name', 'Ysgard')->firstOrFail());
        // Amoria, Eronia, Thalasia
        $location->sub_planes()->save(SubPlane::where('name', 'Krigala')->firstOrFail());
        $location->sub_planes()->save(SubPlane::where('name', 'Brux')->firstOrFail());
        $location->sub_planes()->save(SubPlane::where('name', 'Karasuthra')->firstOrFail());

        /**********************************************************************/

        $location              = new Location;
        $location->name        = 'Mount Olympus';
        $location->type        = 'Planar Conduit';
        $location->description = '';
        $location->save();
        // Khalas
        $location->sub_planes()->save(SubPlane::where('name', 'Pluton')->firstOrFail());
        // Arborea
    }
}
