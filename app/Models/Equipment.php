<?php

namespace App\Models;

use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipment
 *
 * @property int         id
 * @property string      name
 * @property float      price
 * @property string|null bulk
 * @property int|null    hands
 * @property int|null    parent_id
 * @property string|null description
 */
class Equipment extends Model
{
    use TypeableTrait;

    public $timestamps = false;
    protected $table   = 'equipments';
}
