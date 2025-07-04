<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Condition
 *
 * @property int    id
 * @property string key
 * @property string name
 * @property string description
 */
class Condition extends Model
{
    public $timestamps = false;
}
