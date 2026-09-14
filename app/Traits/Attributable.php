<?php

namespace App\Traits;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait Attributable
 *
 * @property Attribute[]|Collection attributes
 */
trait Attributable
{
    public function attributes(): MorphToMany
    {
        return $this->morphToMany(Attribute::class, 'attributable')
            ->withPivot('dc');
    }
}
