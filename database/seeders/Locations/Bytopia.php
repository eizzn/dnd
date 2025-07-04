<?php

namespace Database\Seeders\Locations;

use App\Models\God;
use App\Models\Location;
use App\Models\Plane;
use App\Models\SubPlane;
use Illuminate\Database\Seeder;

class Bytopia extends Seeder
{
    public function run()
    {
        $plane              = new Plane;
        $plane->name        = 'Bytopia';
        $plane->aliases     = 'Twin Paradises';
        $plane->alignment   = 'L/N G';
        $plane->color_pool  = 'Amber';
        $plane->natives     = 'Solars, Hollyphants, Planetars, Foo Creatures, Devas, Agathia, Baku, Sentient Animals and Trees';
        $plane->description = '<p>The two layers of this plane are joined at one barrier which happens to span the entire sky at about 10 miles above sea level. Gravity for each layer is normal for that layer but switched direction as soon as one crosses the barrier. The inhabitants of one layer can look up and see the other layer hanging upside down high overhead. Several mountains reaches the crossover point and a few meet mountains rising up from the other side, allowing careful climbers a way to reach the other layer. Also the space between layers is filled with air, allowing flight from one side to the other. Each layer glows with a golden-white light.</p>';
        $plane->save();

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Dothion';
        $sub->natives     = 'Archons, Eladrin, Gnomes, Guardinals, Planetars, Solars';
        $sub->gravity     = 'Objective Directional';
        $sub->time        = 'Normal';
        $sub->description = "<p>The landscape of Dothion is orderly and domesticated. Farms prosper and grow, animals are confined to the properties of their owners, water-powered mills make high-quality flour and meal, mines yield vast amounts of minerals, canals efficiently bring water everywhere, and roads are well traveled and well-kept.</p>
<p>Dothion's farmers, miners, smiths, and artisans spend their lives joyfully producing food, wooden and metal items, jewellery, and clothing from the raw materials widely available. The workshops and towns are dedicated to nothing but the common good.</p>
<p>The weather on Dothion is mild and with benign seasons. Occasionally a storm breaks out from the opposite layer, Shurrock, but the climate is generally quiet throughout Dothion.</p>";
        $sub->save();

        $location              = new Location;
        $location->name        = 'The Golden Hills';
        $location->type        = 'Divine Realm';
        $location->pantheon_id = app()->pantheons['Gnome']->id;
        $location->description = '<p>The Golden Hills, home to the Gnomish pantheon, is found on Dothion, and takes up the majority of this side of Bytopia.</p>
<p>Towns throughout the layer lack any protective fences or walls.</p>';
        $sub->locations()->save($location);
        $location->ruler()->save(God::where('name', 'Garl Glittergold')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Shurrock';
        $sub->natives     = 'Air Sentinels, Archons, Eladrin, Gnomes, Guardinals, Planetars, Solars';
        $sub->gravity     = 'Objective Directional';
        $sub->time        = 'Normal';
        $sub->description = '';
        $sub->save();
    }
}
