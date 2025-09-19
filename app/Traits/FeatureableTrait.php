<?php

namespace App\Traits;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait FeatureableTrait
 *
 * @property Feature[]|Collection features
 */
trait FeatureableTrait
{
    public function features(): MorphToMany
    {
        return $this->morphToMany(Feature::class, 'featureable')
            ->withPivot('level', 'meta');
    }
}
