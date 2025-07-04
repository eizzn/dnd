<?php

namespace App\Traits;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Collection;

/**
 * Trait FeatureableTrait
 *
 * @property Feature[]|Collection features
 */
trait FeatureableTrait
{
    public function features()
    {
        return $this->morphToMany(\App\Models\Feature::class, 'featureable')
            ->withPivot('level', 'meta');
    }
}
