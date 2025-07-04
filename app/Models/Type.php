<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Type
 *
 * @property int         id
 * @property string      name
 * @property string|null description
 */
class Type extends Model
{
    public $timestamps = false;
}
