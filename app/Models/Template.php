<?php

namespace App\Models;

use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Template
 *
 * @property int    id
 * @property string name
 * @property string description
 * @property string details
 */
class Template extends Model
{
    use TypeableTrait;

    public $timestamps = false;
}
