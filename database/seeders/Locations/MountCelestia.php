<?php

namespace Database\Seeders\Locations;

use App\Models\God;
use App\Models\Location;
use App\Models\Plane;
use App\Models\SubPlane;
use Illuminate\Database\Seeder;

class MountCelestia extends Seeder
{
    public function run()
    {
        $plane              = new Plane;
        $plane->name        = 'Mount Celestia';
        $plane->aliases     = 'Seven Heavens, The Radiant Throne';
        $plane->alignment   = 'LG';
        $plane->color_pool  = 'Gold';
        $plane->natives     = 'Archons, Solars, Hollyphants, Planetars, Foo Creatures, Devas, Agathia, Shedu, Lammasu, Ki-rin, Gold Dragons, Silver Dragons';
        $plane->description = '<p>The Seven Heavens of Mount Celestia is the pinnacle of lawful goodness. The Seven Heavens is dedicated to goodness shaped by law and justice tempered with mercy.</p>
<p>All aspects of Celestia is beautiful and perfect; it is where the souls of many creatures of lawful good alignment go to after death. Celestia is home to numerous celestial creatures including various types of archons, the petitioners of this plane.</p>
<p>As an outer plane, Celestia is spatially infinite and consisted of seven infinite layers (or sub-planes). The seven individual layers formed a colossal mountain that rises from an infinite sea of holy water on the bottommost layer, to the summit on the topmost layer. Ascending the mountain was analogous to traveling through subsequently higher or "deeper" layers to the top. Each of the seven layers contains at least one mountain or high structure rising into the sky, and most have whole mountain ranges. The barriers between the seven layers are arranged such that entrances are at the lowest geographical points and exits are at the highest, so a traveler from the Astral Plane would enter the first layer at the base of a mountain (actually, in the surf of the ocean surrounding the mountain) and have to climb to the peak to reach the next layer, only to emerge at the base again. The sky of each layer has its own hue which softly baths everything in gentle shades of luminance.</p>
<p>In a ring around this great mountain are three smaller mountains, lesser peaks of Celestia. These are Martyrdom, Trueheart, and the Court and are the domains of the gods Ilmater, Torm, and Tyr, respectively.</p>';
        $plane->save();

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Lunia';
        $sub->aliases     = 'The Silver Heaven, The Silver Sea';
        $sub->natives     = 'Lantern Archons, Hound Archons, Aquatic Elves (Silver Sea), Zoveri (Silver Sea)';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $sub->description = "<p>Lunia, the Silver Heaven, is the first and lowest layer of the plane of Mount Celestia.</p>
<p>Lunia is a large mountain-island sparsely covered with citadels of white stone, atop white cliffs, and with the palaces of minor deities. Visitors report different architectural styles for these citadels. Some of the citadels are located on separate islands, some of which are miles long. Trading towns also dot Lunia, and sea elves from the Material plane are commonly found engaged in trade there.</p>
<p>Some cosmologists consider Lunia something like a subsection of the greater mountain of Celestia; others consider it one of seven separate mountains that are all a part of a single mountain chain. In any case, to reach the next layer/mountain of Celestia, Mercuria, one has to first summit Lunia.</p>
<p>It is always night here, but the dark sky is full of silver stars collectively so bright that a moon is not needed to provide light, and the temperature is like that of a summer's night.</p>
<p>Most of the portal connections from other planes come into this layer. Some insist that this is the only way to enter the greater plane. Most of those arriving by such a means find themselves plunging into a vast ocean of clean and fresh holy water, called the Silver Sea or the Silvery Sea, somewhere in the shallower waters near the shore. These waters are salt-free and pleasantly sweet and has the appearance of dark wine. The crashing of the waves on the shore in calm weather reminds some of chimes or the tolling of bells. During stormy weather, the sound is like that of thunder.</p>
<p>The Silver Sea contains all manner of sea life, from schools of tiny silver fishes, to sea elves, dolphins, and celestial whales, to giant creatures of the deep. In calm weather, some of these creatures can be heard singing songs of praise toward the archons. Those who can not swim are quick to be rescued by the zoveri and led to shore, assuming that they are not a kind of creature harmed by holy water!</p>
<p>To reach Lunia with the plane shift spell requires a gold planar fork tuned to the note of D.</p>
<p>The ruler of Lunia is Barachiel, one of the celestial paragons of the archons. He commands all of Celestia's forces against attacks on the sacred mountain, though these rarely occur. He reigns from the Citadel of Stars.</p>
<p>Lunia was divided into 196 provinces, each with a throne archon serving as governor. These 196 thrones report through the hierarchy up to Barachiel. The defense of Lunia is ensured by the host of hound archons.</p>";
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Barachiel')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Fortress Eternal and Everlasting';
        $location->aliases     = 'Citadel of Stars';
        $location->type        = 'City';
        $location->meta        = '<ul>
    <li>Capital of Lunia</li>
</ul>';
        $location->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $location->description = '<p>The Citadel of Stars is the capital of the Plane of Lunia, and where Barachiel rules from. It is located on the shores of the Silver Sea.</p>';
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Barachiel')->firstOrFail());

        $location              = new Location;
        $location->name        = "Heart's Faith";
        $location->type        = 'City';
        $location->description = "<p>The largest trading center of Lunia is Heart's Faith, located not far from a portal from the Outlands. It is built into the side of a cliff and is ruled by a powerful Lammasu and his harem. The town has a central plaza that floods at high tide to serve as a harbor for traders.</p>";
        $sub->locations()->save($location);

        $location              = new Location;
        $location->name        = 'The Court';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['Faeruneon']->id;
        $location->description = "<p>The Court is one of the Divine Realms of the god Tyr. It includes a massive marble hall from which Tyr ruled his realm much like a court of law. It is impossible to lie in Tyr's realm.</p>
<p>The Court is on the summit of one of three great mountains surrounding the base of Mount Celestia, making it a part of Lunia. The realm is adjacent to that of Siamorphe, whose Alabaster Palace is located in a lush vale between the Court and Celestia.</p>";
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Tyr')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Martyrdom';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['Faeruneon']->id;
        $location->description = "<p>Martyrdom stands atop the summit of a lesser peak of Celestia, and its domain includes the mountain itself. At its heart lies a great open-air temple built of rows of pillars of white stone.</p>
<p>It is a tranquil place, full of comfort and rest, and known by planes-walkers as one of the most relaxing in the cosmos. No creature within Martyrdom can feel any pain or weariness, nor any kind of suffering.</p>
<p>The realm is inhabited by the petitioners of Ilmater, the spirits of his deceased faithful, many of whom had died as martyrs. Here they are rewarded and granted peace for their suffering and perseverance in life.</p>
<p>One important part of Ilmater's realm is the Weeping Garden, his private garden and a place of relief and aid for his most dedicated followers. According to unsubstantiated legend, on very rare occasions, the gates out of the garden did not return guests to their original location but cleared of mists and led out into other parts of the House of the Triad.</p>";
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Ilmater')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Trueheart';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['Faeruneon']->id;
        $location->description = "<p>Realm of Torm, the True Deity, and also one of the mountains surrounding Celestia. Torm's palace, located in the heart of the realm, resembles a huge military fortress, with walls of mithral, battlements of diamond, and gates of adamantine. It is guarded by legions of angels and archons serving the cause of good and law, in particular holding vigil against Bane.</p>";
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Torm')->firstOrFail());

        $sub->locations()->save(Location::where('name', "Bahamut's Palace"));

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Mercuria';
        $sub->aliases     = 'The Golden Heaven';
        $sub->natives     = 'Gold Dragons, Archons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $sub->description = '<p>The air in Mercuria is very thin, which can make unaccustomed creatures dizzy until their bodies adapt to it. The mountainous landscape includes high mountains and deep valleys, carved by rivers that ran fast down the gentle slopes. Although flat-lands and prairies are uncommon, Mercuria has several high plateaus on which most settlements are located. The entire layer is constantly bathed in golden light.</p>
<p>The layer also serves as the armory of Mount Celestia, as well as the gathering place for its troops. It is also the site of numerous mausoleums dedicated to fallen noble warriors. Their memory is honored annually during the Day of Memory by all inhabitants of Mercuria.</p>';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Domiel')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Aurilon, the Golden Spire';
        $location->type        = 'City';
        $location->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $location->description = '<p>The tower where Domiel rules Mercuria from.</p>';
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Domiel')->firstOrFail());

        $sub->locations()->save(Location::where('name', "Bahamut's Palace"));

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Venya';
        $sub->aliases     = 'The Pearly Heaven';
        $sub->natives     = 'Halflings, Archons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $sub->description = "<p>The layer is softly illuminated by an iridescent white sky whose appearance resembles mother-of-pearl. Unlike Mercuria, whose mountains are jagged and tall, Venya's mountains are smooth and round, all covered in meadows, arable land, woodlands, or mountain vegetation such as alpine grasses and shrubs. Some have snowy peaks. The rivers that run through the layer are warming, only partially freezing during winter. The layer's petitioners have dammed some of the smaller creeks to form lakes to irrigate their fields and to power mills in the carefully tended fields</p>";
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Erathaol')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Green Fields';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons["Yondalla's Children"]->id;
        $location->description = '<p>The Green Fields is the celestial home of the Halfling Pantheon. As its name aptly implies, Green Fields consists of a green field expanding ever outward in every direction. One can even find winged-halflings in Green Fields.</p>';
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Yondalla')->firstOrFail());

        $sub->locations()->save(Location::where('name', "Bahamut's Palace"));

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Solania';
        $sub->aliases     = 'The Electrum Heaven, Crystal Heaven, Khynnduum';
        $sub->natives     = 'Dwarves, Archons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $sub->description = '<p>The layer has a sky that glows like burnished silver. Its valleys are enveloped in mist, fog, and strange scents. The peaks are home to numerous holy shrines, including monasteries and magnificent cathedrals controlled by demigods. Many of the slopes are rich in precious ores and minerals and are mined by populations of dwarves that reside there.</p>';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Pistis Sophia')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Erackinor';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['Morndinsamman']->id;
        $location->description = "<p>The realm is an immense network of tunnels and halls carved with an impossibly high level of stonework skill. The tunnels extend under most of Solania, with multiple towns located within rifts and chambers. The heat and sound of forges fills the subterranean air. It is a place of great joy for all dwarves and even for non-dwarf miners.</p>
<p>The gate into the realm is guarded by the warden archon Zagzagel, who also works as a teacher. The realm's inhabitants frequently discarded the tailing and slag from their mining operations out the entrance. The wasted materials flows down the slopes, serving as an indication to visitors of the realm's location.</p>
<p>The ability to magically create new things is considerably amplified in Erackinor. Spells such as heroes' feast lasts twice as long, for example, while spells that produce new materials result in twice the normal amount. Enchantment magic does not enjoy these benefits, however, since it is not considered an act of creation.</p>";
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Odin Borrson')->firstOrFail());

        $sub->locations()->save(Location::where('name', "Bahamut's Palace"));

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Mertion';
        $sub->aliases     = 'The Platinum Heaven';
        $sub->natives     = 'Archons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $sub->description = "<p>With a sky not too different from Solania's, Mertion is home to vast plains and savannas that serve as the mustering grounds for paladins and other lawful good servants. Instead of mountains, Mertion has majestic citadels and huge black spherical domes dotting the plains. Access to the next layer up was found at the tops of the domes.</p>";
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Raziel')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Jovar';
        $sub->aliases     = 'The Glittering Heaven, Heaven of Gems';
        $sub->natives     = 'Archons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $sub->description = '<p>Jovar is covered in hills that are studded with precious gemstones that glittered in the light. Jovar is actually a vault lined floor to ceiling with huge rubies and garnets that gave off a glow like a hearth fire.</p>';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Sealtiel')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Chronias';
        $sub->aliases     = 'The Illuminated Heaven';
        $sub->natives     = 'Archons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Celestial Hebdomad']->id;
        $sub->description = '<p>Little is known of its structure because nothing has ever recorded this layer and returned. The legends say that Chronias is so good and lawful that it glowed of its own accord and any who entered had all evil and neutrality burned out of them, leaving them inherently good—if they survived.</p>';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Bahamut')->firstOrFail());
    }
}
