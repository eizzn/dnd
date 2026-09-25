<?php

namespace App\Models;

use App\Traits\Propertyable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 *
 * @property int         id
 * @property string      name
 * @property string|null description
 * @property string|null price
 * @property string|null rarity
 * @property string|null type
 * @property string|null source
 * @property string|null alchemy
 * @property string|null armor
 * @property string|null weapon
 * @property string|null other
 * @property string|null hardness
 * @property string|null hit_points
 */
class Material extends Model
{
    use Propertyable;

    public $timestamps = false;
}
