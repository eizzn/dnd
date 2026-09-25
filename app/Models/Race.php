<?php

namespace App\Models;

use App\Traits\FeatureableTrait;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Race
 *
 * @property int         id
 * @property string      name
 * @property string|null age
 * @property int         hit_points
 * @property string|null size
 * @property int|null    speed
 * @property string|null description
 * @property string|null benefits
 * @property Collection|SubRace[] sub_races
 */
class Race extends Model
{
    use FeatureableTrait, TypeableTrait;

    public $timestamps = false;

    public function sub_races(): HasMany
    {
        return $this->hasMany(SubRace::class);
    }
}
