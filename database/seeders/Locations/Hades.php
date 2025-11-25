<?php

namespace Database\Seeders\Locations;

use App\Models\God;
use App\Models\Location;
use App\Models\Plane;
use App\Models\SubPlane;
use Illuminate\Database\Seeder;

class Hades extends Seeder
{
    public function run()
    {
        $plane              = new Plane;
        $plane->name        = 'Hades';
        $plane->aliases     = 'The Gray Waste';
        $plane->alignment   = 'NE';
        $plane->color_pool  = 'Rust';
        $plane->natives     = 'Daemons, Diakka, Achaierai, Nightmares, Mephits, Night Hags, Goblins, Orcs';
        $plane->description = '<p>The three layers of Hades are called glooms for good reason; they are realms devoid of emotion, hope, and peace. Gray land and gray sky throughout, with no sun, moon or seasons to break the monotony. Any color other than shades of gray will be obvious against the background but will fade to gray in a week or two. Bright colors, will begin to fade also. At first they will feel the drain of emotions leaving only sadness, ennui, and defeatism. In a tenday or two they will be trapped in Hades and their existence will begin to fade until finally they became larvae.</p>
<p>Hades is a unique plane, because it not only joins to adjacent planes in the Great Wheel, it also holds the foundation of Mount Olympus and the roots of Yggdrasil the World Ash. These two planar artifacts connects Hades to Olympus, in the first layer of Arborea, and Ysgard respectively, allowing travel between Hades, the Upper planes, and Alternate Prime Material Planes without going through the Astral Plane.</p>';
        $plane->save();

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Oinos';
        $sub->aliases     = 'The Battle Plain, The First Gloom';
        $sub->natives     = 'Yugoloths';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->description = "<p>Oinos's landscape consists mostly of plains with the occasional hill. It is the primary battleground of the Blood War, so it is where the fighting is the fiercest and most constant. Oinos's stunted trees and other plant-life is routinely destroyed by the fiendish armies trampling over it and the sounds of battle can be heard anywhere on Oinos.</p>
<p>Waling around on Oinos is dangerous for a person because the risk of contracting a lethal disease called Wasting Sickness. it is believed that this sickness has to do with the many rotting corpses, which the aforementioned war produces.</p>
<p>The Styx runs only on this layer of Hades. The water generally runs slow. However, dangerous passages exists. Because it is the easiest place to embark or to land on the Styx, traffic is quite heavy. It is also the layer fiends who participate in the Blood War use to land. Ferry services by Marraenoloths are commonly offered.</p>
<p>Another way to move between planes is to use portals, which are comparatively frequent on Oinos. These portals are often guarded by iron fortresses, and their appearance is similar to a spinning metal coin, big enough to be seen for miles away. They can lead to either Gehenna, Tarterus, or the Concordant Opposition.</p>";
        $sub->save();

        $location              = new Location;
        $location->name        = 'Khin-Oin';
        $location->aliases     = 'The Wasting Tower';
        $location->type        = 'City';
        $location->meta        = '<ul>
    <li>The seat of power of the Oinoloth</li>
</ul>';
        $location->pantheon_id = app()->pantheons['Yugoloth Lord']->id;
        $location->description = "<p>The tower looks like a spinal column. That's because it is - it was made from the backbones of the first god who moved against the Yugoloths.</p>
<p>The tower is twenty miles high with another twenty miles of underground levels. Smaller towers are built out of the vertebra on the above-ground levels, while the structure of the underground levels are not known.</p>
<p>In the top chamber of the tower is the Siege Malicious, a magical throne on which a prospective Oinoloth sits to be accepted as the future Oinoloth after killing its predecessor.</p>
<p>There are seemingly an infinite number of rooms inside the tower and, apart from halls where the Ultroloths fought each other, the tower has drill fields and battlefields, laboratories, suites for the Ultroloths, orreries, spawning vats, meditation chambers, interplanar map rooms, and so on.</p>
<p>In theory, the ruler of the tower, the Oinoloth, organizes the yugoloth race's activities on Hades from the Wasting Tower. In practice, its efforts are concentrated on keeping and securing its own position as the Oinoloth, because the ultroloths who live in the tower vie for control over it and, because they can hardly ever come to an agreement and knew it, fighting physically against each other in the debating halls of the tower.</p>
<p>The aforementioned strife among the denizens of the tower never reaches levels that cripple the Yugoloths' abilities to unite against and thwart a common foe.</p>";
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Anthraxus')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Niflheim';
        $sub->aliases     = "Northmen's Despair, The Second Gloom";
        $sub->natives     = 'Yugoloths';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->description = '<p>Niflheim consists mostly of forestland with bluffs that jut out, which quickly falls away. Put simply, the layer looks like a gray version of a forestland on the Prime Material plane.</p>
<p>Niflheim has no disease problem like Oinos, the first layer. The air is cooler than on Oinos. This gives rise to fog. This fog has some properties that make life on Niflheim harder. First, vision is limited. Even with darkvision, people can not see further than 100 feet at most. Second, the mist has sound impeding effects. These two make predators, of which trolls, fiendish dire and normal wolves are the most common, dangerous. Third, the resulting dampness causes non-tended metals to rust.</p>';
        $sub->save();
        // Talos, Umberlee, Auril, Malar (Malar also keeps a realm in the Abyss as Yeenoghu)

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Pluton';
        $sub->aliases     = "Olympian's Gloom, The Third Gloom";
        $sub->natives     = 'Yugoloths, Barghests, Orcs, Goblins';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->description = "<p>Pluton is not as cold as Niflheim but still a cool place. However, its vegetation is that of a subtropical place, with willows, olive trees, and poplars. These trees are in the state of dying for an unknown but very long time. It is believed that these trees have petitioners inside them and druids can feel the trees' sadness.</p>
<p>The Blood War is not waged on Pluton but sometimes fiends came to get the soul of a particularly skilled person.</p>";
        $sub->save();

        $location              = new Location;
        $location->name        = "Hag's End";
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['Yugoloth Lord']->id;
        $location->description = "<p>This realm is a dreary domain of endless misery. Ironically, the Wastes are without a moon or any other celestial bodies. It is simply a featureless gray expanse, a land of never-ending twilight offering neither the closure of dusk or the new hope of dawn. This realm drains the emotions and vibrancy from all that enter. The only known protection against the apathy is to hide and internalize all emotions deep within the mind.</p>
<p>Hag's End is located halfway up a vast mountain of black, dead rock. From inside her filthy, bone-strewn cave crypt, Cegilune stirs her vile brew under a small, glowing, hovering replica of the full moon.</p>";
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Baba Yaga')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Nishrek';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['Orc']->id;
        $location->description = '<p>Nishrek is the realm of Gruumsh and the Orc pantheon. Here, Gruumsh, Luthic, Bahgtru, Ilneval, Shargaas, and Yurtrus keep their realms here.</p>
<p>Sometimes, the orcs that follow Ilneval will sell themselves as mercenaries in the Blood War.</p>';
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Gruumsh')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Clangor';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['The Court of Stars']->id;
        $location->description = '<p>Clangor is the realm of Maglubiyet and the Goblin Pantheons of The Court of Stars. Here, Maglubiyet, Khurgorbaeyag, Nomog-Geaya, Bargrivyek, Hruggek, Grankhul, Skiggaret keep their realms here</p>
<p>Clangor is located near the roots of Yggdrasil, connecting Clangor to Arvandor and the realms of Oberon and Titania.</p>
<p>Maglubiyet and Gruumsh war against each other constantly.</p>';
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Maglubiyet')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Corpus';
        $location->type        = 'City';
        $location->description = '<p>Corpus is a city that is made of people.</p>';
        $sub->locations()->save($location);

        $location              = new Location;
        $location->name        = 'The Hill of Bones';
        $location->type        = 'Site';
        $location->description = '<p>The Hill of Bones is a place where nightmares go to die. The place is sacred to them and removing a bone earns the wrath of all nightmares who learn of the theft.</p>';
        $sub->locations()->save($location);
    }
}
