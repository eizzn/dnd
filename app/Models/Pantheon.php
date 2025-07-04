<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pantheon
 *
 * @property int         id
 * @property string      name
 * @property string|null description
 * @property int|null    order
 */
class Pantheon extends Model
{
    public $timestamps = false;
}
