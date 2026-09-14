<?php

namespace App\Models;

use App\Traits\Propertyable;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Armor
 *
 * @property int         id
 * @property string      name
 * @property int         price
 * @property string      type
 * @property string|null group
 * @property string|null bulk
 * @property int|null    weight
 * @property string|null hardness
 * @property string|null hit_points
 * @property string|null description
 */
class Armor extends Model
{
    use Propertyable, TypeableTrait;

    public $timestamps = false;
}
