<?php

namespace App\Traits;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait SaveableTrait
 *
 * @property Attribute[]|Collection saves
 */
trait SaveableTrait
{
    public function saves(): MorphToMany
    {
        return $this->morphToMany(Attribute::class, 'savable')
            ->withPivot('bonus', 'meta');
    }
}
