<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClassPowerMeta
 *
 * @property int class_id
 * @property int level
 * @property int points
 * @property int known
 * @property int max_level_power
 */
class ClassPowerMeta extends Model
{
    public $timestamps = false;
}
