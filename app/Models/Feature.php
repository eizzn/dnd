<?php

namespace App\Models;

use App\Traits\Propertyable;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feature
 *
 * @property int         id
 * @property string      key
 * @property string      name
 * @property string|null requirements
 * @property string      description
 */
class Feature extends Model
{
    use Propertyable, TypeableTrait;

    public $timestamps = false;
}
