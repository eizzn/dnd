<?php

namespace App\Traits;

use App\Models\Feat;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait FeatableTrait
 *
 * @property Feat[]|Collection feats
 */
trait FeatableTrait
{
    public function feats(): MorphToMany
    {
        return $this->morphToMany(Feat::class, 'featable')
            ->withPivot(['level', 'meta']);
    }
}
