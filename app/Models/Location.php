<?php

namespace App\Models;

use App\Traits\LocationableTrait;
use App\Traits\SubPlaneable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Class Location
 *
 * @property int         id
 * @property string      name
 * @property string|null aliases
 * @property string      type
 *  [World, Continent, Country, City, Building, Ruin, Site, Divine Realm, Planar Conduit]
 * @property string      meta
 * @property string      description
 * @property int|null    pantheon_id
 * @property Model ruler
 */
class Location extends Model
{
    use LocationableTrait {
        locations as sub_locations;
    }
    use SubPlaneable;

    public $timestamps = false;

    public function ruler(): MorphTo
    {
        return $this->morphTo('rulerable');
    }
}
