<?php

namespace App\Traits;

use App\Models\Klass;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait ClassablesTrait
 *
 * @property Klass[]|Collection classes
 */
trait ClassablesTrait
{
    public function classes(): MorphToMany
    {
        return $this->morphToMany(Klass::class, 'classable', null, null, 'class_id')
            ->withPivot('type', 'meta', 'level');
    }
}
