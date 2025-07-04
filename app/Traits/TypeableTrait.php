<?php

namespace App\Traits;

use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;

/**
 * Trait TypeableTrait
 *
 * @property Type[]|Collection types
 */
trait TypeableTrait
{
    public function types()
    {
        return $this->morphToMany(\App\Models\Type::class, 'typeable');
    }
}
