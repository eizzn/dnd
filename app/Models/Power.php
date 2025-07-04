<?php

namespace App\Models;

use App\Traits\FeatableTrait;
use App\Traits\Propertyable;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Power
 *
 * @property int         id
 * @property string      name
 * @property string      description
 * @property string|null requirements
 * @property string|null action_type
 * @property string|null display
 * @property string|null range
 * @property string|null area
 * @property string|null targets
 * @property string|null duration
 * @property string|null save_attribute
 * @property string|null saves
 * @property string|null heightened
 * @property int|null    default_level
 * @property Collection|Power[] parents
 * @property Collection|Power[] children
 */
class Power extends Model
{
    use FeatableTrait, Propertyable, TypeableTrait;

    public $timestamps = false;

    public function parents(): BelongsToMany
    {
        return $this->belongsToMany(Power::class, 'power_power', 'child_id', 'parent_id');
    }

    public function children(): BelongsToMany
    {
        return $this->belongsToMany(Power::class, 'power_power', 'parent_id', 'child_id');
    }
}
