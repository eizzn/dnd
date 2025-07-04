<?php

namespace Database\Seeders\Locations;

use App\Models\Plane;
use Illuminate\Database\Seeder;

class PlanesSeeder extends Seeder
{
    public function run()
    {
        $plane              = new Plane;
        $plane->name        = 'Elemental Plane of Air';
        $plane->alignment   = '-';
        $plane->color_pool  = 'Pale blue';
        $plane->natives     = 'Air elementals, Arrowhawks, Djinn, Invisible Stalkers, Janni, Mephits';
        $plane->description = '<p>The Elemental Plane of Air is filled essentially completely with air but has various impurities that tend to form pockets or bubbles in the otherwise pure atmosphere. Gaseous bubbles include clouds of every type, fog, steam, mist, smoke, poisonous clouds and acidic vapors; also the rare intrusion of elemental fire which is flame without fuel. Liquid impurities are usually water or water-based and tend to form floating spheres when not buffeted or frozen by the winds. Solid matter can be found here, from dust, ash, salt, or sand, to chunks of earth approaching the size of a large asteroid. The larger chunks are often brought into the plane by intelligent beings and are very likely to be inhabited or formerly inhabited. A traveler with a guide can approach the boundaries with the para- and quasi-elemental planes: where the whiff of smoke eventually became hot, thick, and choking, or the tang of ozone soon lead to heavy storms with arcs of lightning in all directions, or the temperature drops until flakes of snow, crystals of ice, and lumps of hail finally became a wall of ice, or the light fades to gray and the air thins out until there was nothing.</p>
<p>If you had to describe the Elemental Plane of Air in a single word, it would have been "blue". The very substance of the plane seems to radiate the magnificent sapphire hue of a clear summer day on the Prime Material Plane. Visibility is twice what the best conditions on the Prime could allow unless, of course, something obscured vision. Weather is the primary natural hazard in this plane. The winds are normally light to moderately strong throughout the plane but can intensify into tornadoes, maelstroms, and hurricanes with powerful lightning. These extreme weather events are common, and when other elements got caught up in the storm, it can produce pounding rain, blinding snow, pelting hail, freezing sleet, and storms of choking smoke, biting sand, burning ash, scalding steam, or searing fire. The worst of these is the maelstrom, a toroid-shaped tornado that can last for decades. Being caught in one is like being in a violent dust storm and death is only a matter of minutes away unless the victim is able to achieve great speed (escape velocity), perform an act of great strength or receive outside assistance. Spellcasting is impossible within a maelstrom.</p>';
        $plane->save();
        // Citadel of Ice and Steel. lord of the djinni
        // Yan-C-Bin, lord of evil air elements
        // Akadi, lord of air elements

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Elemental Plane of Water';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = 'Water Elementals, Marid, Triton';
        $plane->description = '';
        $plane->save();

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Elemental Plane of Earth';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = 'Earth Elementals, Dao, Xorn';
        $plane->description = '';
        $plane->save();

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Elemental Plane of Fire';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = 'Fire Elementals, Efreet, Azer, Salamander';
        $plane->description = '';
        $plane->save();

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'FeyWild';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = 'Fey';
        $plane->description = '';
        $plane->save();

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'ShadowFell';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = '';
        $plane->description = '';
        $plane->save();

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
        // Vhaeraun/Mask is in the ShadowFell
        // The fey court is found on FeyWild, with easy access to Yggdrasil

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

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Beastlands';
        $plane->aliases     = 'Happy Hunting Grounds';
        $plane->alignment   = 'N/C G';
        $plane->color_pool  = 'Emerald';
        $plane->natives     = 'Animals, Solars, Hollyphants, Planetars, Foo Creatures, Agathia, Baku, Devas';
        $plane->description = "<p>The name Happy Hunting Grounds is given to this plane by those that first scried it, assuming the abundant and varied game and wildlife would be a sportsman's paradise. But the native inhabitants of this plane are all capable of speech and comparable to humans in range of intelligence. Some of the most intelligent creatures can even wield magic. All natural creatures and their giant versions from the Prime Material Plane, including mammals, birds, fish, reptiles, amphibians, insects, and invertebrates, excluding enchanted creatures and monsters, are represented here, and they call their home the Beastlands.</p>
<p>The Beastlands has three layers, all heavily forested with normal and giant trees, plants, moss, and fungi. Each layer has its own time of day which never varies. Weather is regionally distributed and provides all manner of conditions for the habitats of all creatures. Weather in one region did not affect adjacent regions, so an arid desert can exist next to a snowy winter region for example. Any attempt to control the winds, weather, or atmosphere is countered by those airborne creatures who live in the region.</p>
<p>Yggdrasil, the World Ash, extends its branches to all layers of the Beastlands. The reason is unclear, since there are no realms of the Norse pantheon anywhere in the plane. Some speculate that the wilderness and life-giving properties of the plane are sufficient to root the tree there.</p>";
        $plane->save();
        // Silvanus, Chauntea, Nobanion

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

        /**********************************************************************/

        $this->call(Abyss::class);

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Carceri';
        $plane->aliases     = 'The Great Cage, The Red Prison, Tarterus';
        $plane->alignment   = 'N/C E';
        $plane->color_pool  = 'Olive or Red';
        $plane->natives     = 'Demodands, Achaierai, Nightmares, Shadow Demons, Mephits, Vargouille';
        $plane->description = '<p>The six layers of Tarterus has a seemingly infinite number of worlds arranged like a string of pearls stretching into the air-filled void. In the top layer, Othrys, each orb is about the size of a Prime Material world and averaged about 100 miles from the nearest orb. In each successive lower layer the planetoids grow smaller and farther apart. There is no sun but the soil of each orb gives off heat and a dull reddish glow, similar to the phosphorescence of fire beetles. The planets do not rotate and there is no day or night unless a greater deity wishes it so in their realm. Seasons and weather occur randomly and what little plant life there is will rapidly mature after rainfall and then wither hours later. Each orb is connected to one specific Prime Material world.</p>
<p>The barriers between layers are always located at the deepest points on each planetoid and always led to the same sphere in the next layer, so the worlds of Tarterus can be imagined as spheres nested like nesting dolls and each layer contains a string of orbs of a particular size.</p>';
        $plane->save();
        // Apomps, Cyric, and the Olympian titans
        // fallen planetar now demon Adimarchus, imprisoned here by Graz'zt

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
    }
}
