<?php

namespace Database\Seeders\Locations;

use App\Models\Plane;
use App\Models\SubPlane;
use Illuminate\Database\Seeder;

class Beastlands extends Seeder
{
    public function run()
    {
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

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Krigala';
        $sub->natives     = 'Intelligent celestial creatures, Centaurs';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->description = '';
        $sub->save();
        // Silvanus, Chauntea, Nobanion, Mielikki

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Brux';
        $sub->natives     = 'Intelligent celestial creatures, Centaurs';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->description = '';
        $sub->save();

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Karasuthra';
        $sub->natives     = 'Intelligent celestial creatures, Centaurs';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->description = '';
        $sub->save();
    }
}
