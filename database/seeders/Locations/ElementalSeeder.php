<?php

namespace Database\Seeders\Locations;

use App\Models\God;
use App\Models\Location;
use App\Models\Plane;
use App\Models\SubPlane;
use Illuminate\Database\Seeder;

class ElementalSeeder extends Seeder
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

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Elemental Plane of Air';
        $sub->natives     = 'Air elementals, Arrowhawks, Djinn, Invisible Stalkers, Janni, Mephits';
        $sub->gravity     = 'Subjective Directional';
        $sub->time        = 'Normal';
        $sub->description = '<p>The Elemental Plane of Air is filled essentially completely with air but has various impurities that tend to form pockets or bubbles in the otherwise pure atmosphere. Gaseous bubbles include clouds of every type, fog, steam, mist, smoke, poisonous clouds and acidic vapors; also the rare intrusion of elemental fire which is flame without fuel. Liquid impurities are usually water or water-based and tend to form floating spheres when not buffeted or frozen by the winds. Sold matter can be found here, from dust, ash, salt, or sand, to chunks of earth approaching the size of a large asteroid. The larger chunks are often brought into the plane by intelligent beings are are very likely to be inhabited.</p>
<p>The plane eventually includes more of the para-elemental and quasi-elemental material, as one approaches the boundaries to one of those planes. The whiff of smoke eventually becomes hot, thick, and choking, or the tang of ozone soon leads to to heavy storms with arcs of lightning in all directions, or the temperature drops until flakes of snow, crystals of ice, and lumps of hail finally become a wall of ice, or the light fades to gray and the air thins out until there is nothing.</p>
<p>if you had to describe the Elemental Plane of Air in a single word, it would be "Blue". The very substance of the plane sems to radiate the magnificent sapphire hue of a clear summer day on the Prime Material Plane. Visibility is twice what the best conditions on the Prime could allow. Weather is the primary natrual hazard in this plane. The winds are normally light to moderately strong throughout the plane but can intensify into tornadoes, maelstroms, and huuricanes with powerful lightning. These extreme weather events are common, and when other elements get cought up in the storm, it can produce pounding rain, blinding snow, pelting hail, freezing sleet, and storms of choking smoke, biting sand, burning ash, scalding steam, or searing fire. The worst of these is the maelstrom, a toroid-shaped tornado that can last for decades. Being cought in one is like being in a violent dust storm and death is only a matter of minutes away unless the victim is able to achieve great speed (escape velocity), perform an act of great strength, or receive outside assistance. Spellcasting is impossible within a maelstrom.</p>';
        $sub->save();

        $location              = new Location;
        $location->name        = 'The Great Funnel';
        $location->type        = 'Divine Realm';
        $location->meta        = '<ul>
    <li>Home of Akadi</li>
</ul>';
        $location->description = '<p>This realm is a gigantic whirlwind, siad to be so large that it can swallow whole planets in its wake. It is a mobile realm, drifting across the Elemental Plane of Air as Akadi wills, and the winds it generates spiral outward all across the plane.</p>';
        $location->pantheon_id = app()->pantheons['Elemental']->id;
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Akadi')->firstOrFail());

        $location              = new Location;
        $location->name        = 'Citadel of Ice and Steel';
        $location->type        = 'Divine Realm';
        $location->meta        = '<ul>
    <li>Realm of Husam al-Balil ben Nafhat al-Yugayyim, lord of the Djinn</li>
</ul>';
        $location->description = "<p>This citadel is actually a gigantic chunk of elemental ice and earth, smoothed over time by the winds into a nearly perfect oval. The Great Caliph's palace is located in the center.</p>
<p>The entire citadel is constantly free-falling, based on caliph's will. Thus the only kind of movement possible within the citadel is flight.</p>
<p>Any creature incapable of flight or hovering is constantly buffeted by wind from djinn guards while they are in audience with the Great Caliph.</p>
<p>The Great Caliph and his court issue decrees and collect taxes, but the citadel does not produce tangible products.</p>
<p>The noble djinn have several elite military organizations that they can call upon if the Court of Ice and Steel is threatened, which includes the following.</p>
<ul>
    <li>Teeth of the Wind: Ranged weapon experts</li>
    <li>Azure Legion: 10,001 jann armed with bows and spears. Each officer also has a wand of lightning.</li>
    <li>Monsoon Legion: 1,000 heavily armed elite djinni bodyguards tasked with guarding the Great Caliph.</li>
    <li>Silver Turban Legion: 250 female djinni riding griffons. They serve as shock troops</li>
</ul>";
        $location->pantheon_id = app()->pantheons['Elemental']->id;
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Akadi')->firstOrFail());

        // Yan-C-Bin, lord of evil air elements
        // Chan, lord of good air elementals

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Elemental Plane of Water';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = 'Water Elementals, Marid, Triton';
        $plane->description = '';
        $plane->save();
        // Istishia, lord of water elementals
        // Ben-hadar, lord of good water elementals
        // Kalbari al-Durrant al-Amwaj ibn Jari, Maharajah of the Marid

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Elemental Plane of Earth';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = 'Earth Elementals, Dao, Xorn';
        $plane->description = '';
        $plane->save();
        // Grumbar, lord of earth elementals
        // Ogremoch, lord of evil earth elementals
        // Entemoch, prince of good earth elementals
        // Sunnis, princess of good earth elementals
        // Kabril Ali al-Sara al-Zalazil, Great Khan of the Dao

        /**********************************************************************/

        $plane              = new Plane;
        $plane->name        = 'Elemental Plane of Fire';
        $plane->alignment   = '-';
        $plane->color_pool  = '';
        $plane->natives     = 'Fire Elementals, Efreet, Azer, Salamander';
        $plane->description = '';
        $plane->save();
        // Kossuth, lord of fire elementals
        // Imix
        // Zaaman Rul
        // Marrake al-Sidan al-Hariq ben Lazan, Great Sultan of the Efreet
    }
}
