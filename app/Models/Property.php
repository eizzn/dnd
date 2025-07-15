<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Property
 *
 * @property int id
 * @property string      key
 * @property string      name
 * @property string|null description
 */
class Property extends Model
{
    public $timestamps = false;
}
