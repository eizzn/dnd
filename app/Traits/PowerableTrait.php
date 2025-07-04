<?php

namespace App\Traits;

use App\Models\Power;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait PowerableTrait
 *
 * @property Power[]|Collection powers
 * @property object pivot
 */
trait PowerableTrait
{
    public function powers(): MorphToMany
    {
        return $this->morphToMany(\App\Models\Power::class, 'powerable')
            ->withPivot('level', 'meta');
    }
}
