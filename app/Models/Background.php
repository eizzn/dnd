<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Background
 *
 * @property int    id
 * @property string name
 * @property string description
 * @property string ability_boost
 * @property string skills
 */
class Background extends Model
{
    public $timestamps = false;
}
