<?php

namespace App\Models;

use App\Traits\Propertyable;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Weapon
 *
 * @property int         id
 * @property string      name
 * @property int|null    price
 * @property string|null bulk
 * @property int|null    hands
 * @property string      group
 * @property string      type
 * @property string|null description
 */
class Weapon extends Model
{
    use Propertyable, TypeableTrait;

    public $timestamps = false;
}
