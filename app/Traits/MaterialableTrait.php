<?php

namespace App\Traits;

use App\Models\Material;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait Propertyable
 *
 * @property Material[]|Collection materials
 */
trait MaterialableTrait
{
    public function materials(): MorphToMany
    {
        return $this->morphToMany(Material::class, 'materialable')
            ->withPivot(['quantity', 'price', 'meta']);
    }
}
