<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait FeatableTrait
{
    public function feats(): MorphToMany
    {
        return $this->morphToMany('App\Models\Feat', 'featable')
            ->withPivot(['level', 'meta']);
    }
}
