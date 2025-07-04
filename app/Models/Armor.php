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
 * @property int         armor_bonus
 * @property string|null damage_reduction
 * @property int|null    dex_modifier_cap
 * @property int|null    check_penalty
 * @property int         spell_failure
 * @property string|null speed_penalty
 * @property int|null    min_str
 * @property string|null bulk
 * @property int|null    weight
 * @property string|null description
 */
class Armor extends Model
{
    use Propertyable, TypeableTrait;

    public $timestamps = false;
}
