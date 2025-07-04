<?php

namespace App\Models;

use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Plane
 *
 * @property int id
 * @property string name
 * @property string|null aliases
 * @property string alignment
 * @property string color_pool
 * @property string natives
 * @property string description
 * @property Collection|SubPlane[] sub_planes
 */
class Plane extends Model
{
    use TypeableTrait;

    public $timestamps = false;

    public function sub_planes(): HasMany
    {
        return $this->hasMany(SubPlane::class);
    }
}
