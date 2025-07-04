<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attribute
 *
 * @property int         id
 * @property string      attr
 * @property string      name
 * @property string|null description
 */
class Attribute extends Model
{
    public $timestamps = false;
}
