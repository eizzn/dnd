<?php

namespace Database\Seeders\Locations;

use App\Models\God;
use App\Models\Plane;
use App\Models\SubPlane;
use Illuminate\Database\Seeder;

class Baator extends Seeder
{
    public function run()
    {
        $plane              = new Plane;
        $plane->name        = 'Baator';
        $plane->aliases     = 'The Nine Hells';
        $plane->alignment   = 'LE';
        $plane->color_pool  = 'Ruby';
        $plane->natives     = 'Devils, Hell Hounds, Night Hags, Nightmares, Bonespears, Gathra, Haraknin, Imps, Maelephants, Kytons, Rakshasas';
        $plane->description = '<p>The nine circles of Hell are each ruled by an archdevil of great power.</p>';
        $plane->save();

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Avernus';
        $sub->natives     = 'Abishai, Imps, Lemures, Nupperibos, Spinagons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Zariel')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Dis';
        $sub->natives     = 'Abishai, Imps, Lemures, Nupperibos, Shades, Spinagons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Dispater')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Minauros';
        $sub->aliases     = 'The Endless Bog, the Stinking Mire';
        $sub->natives     = 'Hamatula, Lemures, Nupperibos, Spinagons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Mammon')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Phlegethos';
        $sub->aliases     = 'The Heart of Flames, Phlegethos of the Flame';
        $sub->natives     = 'Cornugons, Hamatulas, Hell Hounds, Imps, Spinagons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Belial')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Stygia';
        $sub->aliases     = 'The Frozen Wastes, The Great Sea';
        $sub->natives     = 'Abishai, Amnizus, Erinyes, Frost Giants, Frost Worms, Gelugons, Krakens, Mammoths, Polar Bears, Sharks, Spinagons, Remorhazes';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Levistus')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Malbolge';
        $sub->aliases     = 'The Crushing Lands, The Tyranny of Turmoil';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Glasya')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Maladomini';
        $sub->aliases     = 'The Circle of Ruins';
        $sub->natives     = 'Amnizus, Barbazu, Cornugons, Erinyes, Lemures, Spinagons, Black Puddings, Gelatinous Cubes, Ochre Jellies';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Baalzebul')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Cania';
        $sub->natives     = 'Gelugons, Cornugons, Dire Polar Bears, Kocrachons, Pit Fiends';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Mephistopheles')->firstOrFail());

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Nessus';
        $sub->natives     = 'Amnizus, Cornugons, Hell Hounds, Pit Fiends';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['The Lords of the Nine']->id;
        $sub->description = '';
        $sub->save();
        $sub->ruler()->save(God::where('name', 'Tiamat')->firstOrFail());
    }
}
