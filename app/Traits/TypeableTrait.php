<?php

namespace App\Traits;

use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait TypeableTrait
 *
 * @property Type[]|Collection types
 */
trait TypeableTrait
{
    public function types(): MorphToMany
    {
        return $this->morphToMany(Type::class, 'typeable')
            ->withPivot('level');
    }
}
