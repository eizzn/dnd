<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Organization
 *
 * @property int         id
 * @property string      key
 * @property string      name
 * @property string      type
 * @property string|null metas
 * @property string      description
 */
class Organization extends Model
{
    public $timestamps = false;
}
