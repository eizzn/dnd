<?php

namespace App\Traits;

use App\Models\Property;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait Propertyable
 *
 * @property Property[]|Collection properties
 */
trait Propertyable
{
    public function properties(): MorphToMany
    {
        return $this->morphToMany(\App\Models\Property::class, 'propertyable')
            ->withPivot(['conditions', 'value']);
    }
}
