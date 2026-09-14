<?php

namespace Database\Seeders\Locations;

use App\Models\Location;
use Illuminate\Database\Seeder;

class Rashemen extends Seeder
{
    public function run()
    {
        // 1362 DR
        $rashemen       = new Location;
        $rashemen->name = 'Rashemen';
        $rashemen->type = 'Country';
        Location::where('name', 'Faerun')->firstOrFail()->sub_locations()->save($rashemen);

        $location       = new Location;
        $location->name = 'Immilmar';
        $location->type = 'City';
        $location->meta = '<ul>
    <li>Capital of Rashemen</li>
    <li>
        Population: 24,500
        <ul>
            <li>92% Human</li>
            <li>5% Spirit Folk</li>
            <li>3% Other</li>
        </ul>
    </li>
    <li>Government: Iron Lord: Thydrim Yvarrg</li>
    <li>Commerce: Foreign and domestic goods readily available. Renowned for local leather goods, wood carving, and ironworks. Numerous taverns and inns of varying quality</li>
</ul>';
        $rashemen->sub_locations()->save($location);

        $location              = new Location;
        $location->name        = 'Mulptan';
        $location->type        = 'City';
        $location->meta        = '<ul>
    <li>
        Population: 6,900
        <ul>
            <li>71% Human</li>
            <li>29% Dwarf</li>
        </ul>
    </li>
</ul>';
        $location->description = "<p>The vast, wind-battered city is encircled by a great stone wall, outside of which is its great trading field. The tents and stalls found in mercantile marketplace are crowded with people of many different ethnicities and foreign nations.</p>
<p>Mulptan lies on the intersection of the Huhrong's Road and a long road that runs north-south through Rashemen. It is located 80 miles east of Immilmar, about five days south of the Falls of Erech, and three days east of the Ring of Blue Fire, as traveled by horseback.</p>
<p>Mulptan's great trading fields draws foreign merchants and businesspeople from many nearby nations, including Damara and Impiltur. In contrast to other cities in Rashemen, it allows outlander traders to take up residence within the city, pending approval of the Wychlaren.</p>
<p>Many traders come to Mulptan from the Long Road, a route that crosses the Endless Wastes from the Cold Lands and connects to the Huhrong's Road.</p>
<p>Mulptan is home to the Ydrass and Vrul Rashemaar clans, each of whom enjoys an old and somtimes bloody rivalry with the other. Each family has hundreds of members and holds great sway over the economic interests of the city, often sponsoring great contests of athleticism for which Rashemen is famous.</p>";
        $rashemen->sub_locations()->save($location);

        $location              = new Location;
        $location->name        = 'Mulsantir';
        $location->type        = 'City';
        $location->meta        = '<ul>
    <li>
        Population: 4,700
        <ul>
            <li>92% Human</li>
            <li>7% Spirit Folk</li>
            <li>1% Other</li>
        </ul>
    </li>
    <li>Government: Iron Lord: Fyrra Lord Thorbinn the Black and Wychlaren Shialis</li>
    <li>Commerce: Imports Paper lanterns and silk from Shou Lung</li>
</ul>';
        $location->description = "<p>Mulsantir is a great and prosperous city in southwest Rashemen. Its position as a coastal town at the end of a prominent trade route, the Golden Way, aids in its status as a major mercantile destination in the region.</p>
<p>Unlike many of Rashemen's towns and cities, Mulsantir features buildings of rough stone built entirely atop the earth, separated by wide dirt streets that turns to dirt ad freeze every winter. The town's structures stand in harmony with nature. Its rugged dirt road are often bustling with the activity of trade and commerce. It is encircled by fearsome angular walls or shining gray stone.</p>
<p>Its prominence often makes it a target for invasion from the nation of Thay.</p>
<p>it is located at the end of the Golden Way, at the northern shore of the River Mulsantir, just west of Lake Mulsantir. In summer months, ferries operate out of Mulsantir, allowing for easy crossing of the River Mulsantir by individuals and caravans alike.</p>
<p>Like other settlements of Rashemen, Mulsantir is governed by a Fyrra, a local war leader who acts as a mayor and is the exclusive commander of the town's armed forces.</p>
<p>The city is protected by extensive solid stone walls that were originally erected by the city's witches and remained undamaged by countless southern siege engines and Red Wizard spells. It is defended by the Urphong's Host, a military force that numbers over 400 barbarians and warriors. It is known to house at least one lodge of Rashemaar berserkers, those from the fearsome Ice Troll lodge.</p>
<h4>Inns and Taverns</h4>
<ul>
    <li>The Sloop, an inn and tavern built in an overturned ship, run by Vladek and his half-orcish wife Zorah</li>
</ul>
<h4>Landmarks</h4>
<ul>
    <li>The Bazaar (Mulsantir), a busy open-air bazaar filled with exotic goods and merchants.</li>
    <li>Green Hag Hill, the hill on which stands the local fyrra's longhouse estate.</li>
    <li>Ice Troll lodge</li>
</ul>";
        $rashemen->sub_locations()->save($location);

        // Shevel, Taporan, Assunta, Tinnier, Urling
    }
}
